<?php
/**
 * veritrans 支付插件
 * @author yuanjiang 04.29.2015
 * @932625974#qq.com
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/veritrans.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'veritrans_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'Yuan Jiang';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.veritrans.co.id';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'veritrans_client_key',     'type' => 'text',   'value' => ''),
        array('name' => 'veritrans_server_key',     'type' => 'text',   'value' => ''),
    );

    return;
}

/* config */
class Veritrans_Config {

  public static $serverKey = 'VT-server-Zy-boyrmj-2fX9Mir2s5l6ZW';
  public static $clientKey;
  public static $apiVersion = 2;
  public static $isProduction = true;
  public static $is3ds = false;
  public static $isSanitized = false;

  const SANDBOX_BASE_URL = 'https://api.sandbox.veritrans.co.id/v2';
  const PRODUCTION_BASE_URL = 'https://api.veritrans.co.id/v2';

  public static function getBaseUrl() 
  {
    return Veritrans_Config::$isProduction ?
        Veritrans_Config::PRODUCTION_BASE_URL : Veritrans_Config::SANDBOX_BASE_URL;
  }
}

/* verify */
class Veritrans_Sanitizer {

  public static function jsonRequest(&$json)
  {
    $keys = array('item_details', 'customer_details');
    foreach ($keys as $key) {
      if (!array_key_exists($key, $json)) continue;

      $camel = self::upperCamelize($key);
      $function = "field$camel";
      self::$function($json[$key]);
    }
  }

  private static function upperCamelize($string)
  {
    return str_replace(' ', '',
        ucwords(str_replace('_', ' ', $string)));
  }
}

/* tool */
class Veritrans_ApiRequestor {

  public static function get($url, $server_key, $data_hash)
  {
    return self::remoteCall($url, $server_key, $data_hash, false);
  }

  public static function post($url, $server_key, $data_hash)
  {
    return self::remoteCall($url, $server_key, $data_hash, true);
  }
  
  public static function remoteCall($url, $server_key, $data_hash, $post = true)
  {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Basic ' . base64_encode($server_key . ':')
      ));

    if ($post) {
      curl_setopt($ch, CURLOPT_POST, 1);

      if ($data_hash) {
        $body = json_encode($data_hash);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
      }
      else {
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
      }
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CAINFO, dirname(__FILE__) . "/../../../cert/veritrans.pem");

    $result = curl_exec($ch);
    // curl_close($ch);

    if ($result === FALSE) { 
      throw new Exception('CURL Error: ' . curl_error($ch), curl_errno($ch));
    }
    else { 
      $result_array = json_decode($result);
      if (!in_array($result_array->status_code, array(200, 201, 202, 407))) {
        $message = 'Veritrans Error (' . $result_array->status_code . '): '
            . $result_array->status_message;
        throw new Exception($message, $result_array->status_code);
      }
      else {
        return $result_array;
      }
    }
  }
}  

class Veritrans_Notification {

  private $response;

  public function __construct($input_source = "php://input")
  {
    $this->response = json_decode(file_get_contents($input_source), true);
  }

  public function __get($name)
  {
    if (array_key_exists($name, $this->response)) {
      return $this->response[$name];
    }
  }
}

/* transaction: confirm the status, approve or cancel the payment */
class Veritrans_Transaction {

  public static function status($id)
  {
    return Veritrans_ApiRequestor::get(
        Veritrans_Config::getBaseUrl() . '/' . $id . '/status',
        Veritrans_Config::$serverKey,
        false);
  }

  public static function approve($id)
  {
    return Veritrans_ApiRequestor::post(
        Veritrans_Config::getBaseUrl() . '/' . $id . '/approve',
        Veritrans_Config::$serverKey,
        false)->status_code;
  }

  public static function cancel($id)
  {
    return Veritrans_ApiRequestor::post(
        Veritrans_Config::getBaseUrl() . '/' . $id . '/cancel',
        Veritrans_Config::$serverKey,
        false)->status_code;
  }
}

/* main */
class veritrans {
  
  /* pay code */
  public function get_code($order, $payment)
  { 
    $params = array(
      'transaction_details' => array('order_id' => $order['order_sn'], 'gross_amount' => $order['order_amount']),
	  'custom_field1' => $order['log_id'],
    );
    $payloads = array(
        'payment_type' => 'vtweb',
        'vtweb' => array(
          // 'enabled_payments' => array('credit_card'),
          'credit_card_3d_secure' => Veritrans_Config::$is3ds
        )
      );

    if (array_key_exists('item_details', $params)) {
      $gross_amount = 0;
      foreach ($params['item_details'] as $item) {
        $gross_amount += $item['quantity'] * $item['price'];
      }
      $payloads['transaction_details']['gross_amount'] = $gross_amount;
    }

    $payloads = array_replace_recursive($payloads, $params);

    if (Veritrans_Config::$isSanitized) {
      Veritrans_Sanitizer::jsonRequest($payloads);
    }

    $result = Veritrans_ApiRequestor::post(
        Veritrans_Config::getBaseUrl() . '/charge',
        $payment['veritrans_server_key'],
        $payloads);
    if($result){
	    $button = '<div class="tc"><input type="button" onclick="window.open(\''.$result->redirect_url.'\')" value="' .$GLOBALS['_LANG']['pay_button']. '" /></div>';
    }
	else{
	    $button = '<div class="tc"><input type="button" onclick="window.location.reload();" value="' .$GLOBALS['_LANG']['pay_button']. '" /></div>';
	}
	return $button;
	
  }
  
  /* respond */
  public function respond(){
	 $action = $_REQUEST['action'];
	 //notification
	 if($action=='notification'){
	    $notif = new Veritrans_Notification();
		$order_id = $notif->order_id;
	 }
	 //finish
	 else{
	    $order_id = $_REQUEST['order_id'];
	 }
	 $status = Veritrans_Transaction::status($order_id);
	 $transaction = $status->transaction_status;
     $fraud = $status->fraud_status;
	 if ($transaction == 'capture') {
	    if ($fraud == 'challenge') {
	       // TODO Set payment status in merchant's database to 'challenge'
	    }
	    else if ($fraud == 'accept') {
	       // TODO Set payment status in merchant's database to 'success'
		   /* 检查支付的金额是否相符 */
           if (!check_money($status->custom_field1, $status->gross_amount)){
               return false;
           }
		   else{
		       /* 改变订单状态 */
               order_paid($status->custom_field1, PS_PAYED, $action_note = 'paid by veritrans at '.$status->transaction_time);
               return true;
		   }
	    }
     }
     else if ($transaction == 'cancel') {
	    if ($fraud == 'challenge') {
	       // TODO Set payment status in merchant's database to 'failure'
	    }
	    else if ($fraud == 'accept') {
	       // TODO Set payment status in merchant's database to 'failure'
	    }
     }
     else if ($transaction == 'deny') {
        // TODO Set payment status in merchant's database to 'failure'
     }
	 return false;
  }
}
?>