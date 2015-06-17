<?php

/**
 * ECSHOP Flow related to language file
 * ============================================================================
 * All right reserved (C) 2005-2011 Beijing Yi Shang Interactive Technology
 * Development Ltd.
 * Web site: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * This is a free/open source software；it means that you can modify, use and
 * republish the program code, on the premise of that your behavior is not for
 * commercial purposes.
 * ============================================================================
 * $Author: liubo $
 * $Id: shopping_flow.php 17217 2011-01-19 06:29:08Z liubo $
*/

$_LANG['flow_login_register']['username_not_null'] = 'Please enter username.';
$_LANG['flow_login_register']['username_invalid'] = 'Please enter a valid username.';
$_LANG['flow_login_register']['password_not_null'] = 'Please enter password.';
$_LANG['flow_login_register']['email_not_null'] = 'Please enter email.';
$_LANG['flow_login_register']['email_invalid'] = 'Please enter a valid email address.';
$_LANG['flow_login_register']['password_not_same'] = 'Re-enter password.';
$_LANG['flow_login_register']['password_lt_six'] = 'Please enter password more than six charactor.';

$_LANG['regist_success'] = " %s register succeed";
$_LANG['login_success'] = 'Login succeed!';

/* 购物车 */
$_LANG['update_cart'] = 'Update cart';
$_LANG['back_to_cart'] = 'Back to cart';
$_LANG['update_cart_notice'] = 'Update succeed, please select gift again.';
$_LANG['direct_shopping'] = 'Checkout directly';
$_LANG['goods_not_exists'] = 'Sorry, the product is not exist.';
$_LANG['drop_goods_confirm'] = 'Are you sure remove it from cart?';
$_LANG['goods_number_not_int'] = 'Please enter a valid number.';
$_LANG['stock_insufficiency'] = 'The stocks of products %s is only %d, you can order maximum %d.';
$_LANG['package_stock_insufficiency'] = 'Sorry, the stocks of packages is in shotage,please reduce .';
$_LANG['shopping_flow'] = 'Shopping flow';
$_LANG['username_exists'] = 'The username already exists, please enter another one and try it again.';
$_LANG['email_exists'] = 'The email address already exists, please enter another one and try it again.';
$_LANG['surplus_not_enough'] = 'Your balance is not enough.';
$_LANG['integral_not_enough'] = 'Your points is not enough.';
$_LANG['integral_too_much'] = "The points for use can\'t more than %d.";
$_LANG['invalid_bonus'] = "Angpao selected is not exist.";
$_LANG['no_goods_in_cart'] = 'Cart is empty!';
$_LANG['not_submit_order'] = 'Groupon order have been submitted.';
$_LANG['pay_success'] = 'Payment sucsses, we will process it shortly';
$_LANG['pay_fail'] = 'Payment failed,please contact us.';
$_LANG['pay_disabled'] = 'The payment mode have disconnected.';
$_LANG['pay_invalid'] = 'The payment method is invalid.';
$_LANG['flow_no_shipping'] = 'Select one shipping method.';
$_LANG['flow_no_payment'] = 'Please select payment mothod';
$_LANG['pay_not_exist'] = 'The payment method is invalid.';
$_LANG['storage_short'] = 'Out of stock';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['accessories'] = 'Accessories';
$_LANG['largess'] = 'Gift';
$_LANG['shopping_money'] = 'Subtotal %s';
$_LANG['than_market_price'] = 'Market price is %s, you save %s (%s). ';
$_LANG['your_discount'] = 'Your discount is %s';
$_LANG['no'] = 'No';
$_LANG['not_support_virtual_goods'] = 'please login, since virtual product does\'t support checkout without login';
$_LANG['not_support_insure'] = 'No support assurance.';
$_LANG['clear_cart'] = 'Clear cart.';
$_LANG['drop_to_collect'] = 'put into wishlist.';
$_LANG['password_js']['show_div_text'] = 'Please Update Cart';
$_LANG['password_js']['show_div_exit'] = 'Close';
$_LANG['goods_fittings'] = 'Related accessories';
$_LANG['parent_name'] = 'Products Releated：';
$_LANG['remark_package'] = 'Superb package';

/* 优惠活动 */
$_LANG['favourable_name'] = 'Event name:';
$_LANG['favourable_period'] = 'Event period:';
$_LANG['favourable_range'] = 'Event type:';
$_LANG['far_ext'][FAR_ALL] = 'All products';
$_LANG['far_ext'][FAR_BRAND] = 'Following brand';
$_LANG['far_ext'][FAR_CATEGORY] = 'Following category';
$_LANG['far_ext'][FAR_GOODS] = 'Following goods';
$_LANG['favourable_amount'] = 'Favourable amount:';
$_LANG['favourable_type'] = 'Promition type:';
$_LANG['fat_ext'][FAT_DISCOUNT] = 'Get %d%% discount';
$_LANG['fat_ext'][FAT_GOODS] = 'Select %d gift(s) below (0 indicates no limitation)';
$_LANG['fat_ext'][FAT_PRICE] = 'Cash back %d';

$_LANG['favourable_not_exist'] = 'Event is not exist';
$_LANG['favourable_not_available'] = 'You can\'t get the offer';
$_LANG['favourable_used'] = 'This offer is used';
$_LANG['pls_select_gift'] = 'Please select gift';
$_LANG['gift_count_exceed'] = 'Gift quantity exceed limit';
$_LANG['gift_in_cart'] = 'Gift in the cart: %s';
$_LANG['label_favourable'] = 'Promotion event';
$_LANG['label_collection'] = 'My wishlist';
$_LANG['collect_to_flow'] = 'Checkout';

/* 登录注册 */
$_LANG['forthwith_login'] = 'Login';
$_LANG['forthwith_register'] = 'Register';
$_LANG['signin_failed'] = 'Soory, login failure, please check your username and password.';
$_LANG['gift_remainder'] = 'Note: please select gift again after login/register.';

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = 'Please enter name of consignee';
$_LANG['flow_js']['country_not_null'] = 'Please select a country';
$_LANG['flow_js']['province_not_null'] = 'Please select a province';
$_LANG['flow_js']['city_not_null'] = 'Please select a city';
$_LANG['flow_js']['district_not_null'] = 'Please select a district';
$_LANG['flow_js']['invalid_email'] = 'Please enter a valid email address.';
$_LANG['flow_js']['address_not_null'] = 'Please enter an address';
$_LANG['flow_js']['tele_not_null'] = 'Please enter a phone number';
$_LANG['flow_js']['shipping_not_null'] = 'Please select a shipping method';
$_LANG['flow_js']['payment_not_null'] = 'Please select a payment mothod';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = 'Please enter valid phone No.';
$_LANG['flow_js']['zip_not_num'] = 'Zip code should be numbers';
$_LANG['flow_js']['mobile_invaild'] = 'Mobile No. is invalid';

$_LANG['new_consignee_address'] = 'New consignee address';
$_LANG['consignee_address'] = 'Address';
$_LANG['consignee_name'] = 'Name';
$_LANG['country_province'] = 'Country/Province';
$_LANG['please_select'] = 'Select';
$_LANG['city_district'] = 'City/District';
$_LANG['email_address'] = 'Email';
$_LANG['detailed_address'] = 'Address';
$_LANG['postalcode'] = 'Post code';
$_LANG['phone'] = 'Phone';
$_LANG['mobile'] = 'Mobile';
$_LANG['backup_phone'] = 'Mobile 2';
$_LANG['sign_building'] = 'Signature building';
$_LANG['deliver_goods_time'] = 'Preferred shipping time';
$_LANG['default'] = 'Default';
$_LANG['default_address'] = 'Default address';
$_LANG['confirm_submit'] = 'Submit';
$_LANG['confirm_edit'] = 'Submit';
$_LANG['country'] = 'Country';
$_LANG['province'] = 'Province';
$_LANG['city'] = 'City';
$_LANG['area'] = 'District';
$_LANG['consignee_add'] = 'Add a new address.';
$_LANG['shipping_address'] = 'Confirm address';
$_LANG['address_amount'] = 'Maximum 3 address can be saved.';
$_LANG['not_fount_consignee'] = 'Sorry, the address is invalid.';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = 'Order amount is less than the minimum amount %s required, order cannot be submited.';
$_LANG['balance_not_enough'] = 'Your balance is insufficient, please select another paymen mode';
$_LANG['select_shipping'] = 'Shipping method is';
$_LANG['select_payment'] = 'Payment mothod is';
$_LANG['order_amount'] = 'Your order total is';
$_LANG['remember_order_number'] = 'Order succeed, please save the order number';
$_LANG['back_home'] = '<a href="index.php">Home</a>';
$_LANG['goto_user_center'] = '<a href="user.php">User center</a>';
$_LANG['order_submit_back'] = 'You can %s or go to %s';

$_LANG['order_placed_sms'] = "You get a new order.Consignee:%s Phone:%s";
$_LANG['sms_paid'] = 'Paid';

$_LANG['notice_gb_order_amount'] = '（(Remarks: you just need pay Security deposit if requred for groupon event.)';

$_LANG['pay_order'] = 'Pay order %s';
$_LANG['validate_bonus'] = 'Vadidate angpao';
$_LANG['input_bonus_no'] = 'Input angpao No.';
$_LANG['select_bonus'] = 'Select existing angpao';
$_LANG['bonus_sn_error'] = 'Please enter valid angpao No.';
$_LANG['bonus_min_amount_error'] = 'Order amount is less than the minimum amount for using angpao %s';
$_LANG['bonus_is_ok'] = ' Angpao is valid, with amount %s';


$_LANG['shopping_myship'] = 'My shipping';
$_LANG['shopping_activity'] = 'Activity list';
$_LANG['shopping_package'] = 'Package list';
?>
