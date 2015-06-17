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

$_LANG['flow_login_register']['username_not_null'] = 'Harap masukkan username.';
$_LANG['flow_login_register']['username_invalid'] = 'Hara masukkan username yang benar.';
$_LANG['flow_login_register']['password_not_null'] = 'Masukkan password.';
$_LANG['flow_login_register']['email_not_null'] = 'harap masukkan alamat email.';
$_LANG['flow_login_register']['email_invalid'] = 'Format penulisan email anda harus benar.';
$_LANG['flow_login_register']['password_not_same'] = 'Ketik ulang password.';
$_LANG['flow_login_register']['password_lt_six'] = 'Password harus menggunakan minimal 7 karakter.';

$_LANG['regist_success'] = "Selamat! %s pendaftaran berhasil!";
$_LANG['login_success'] = 'Selamat! Anda berhasil login!';

/* 购物车 */
$_LANG['update_cart'] = 'Perbaharui Cart';
$_LANG['back_to_cart'] = 'Kembali ke kerangjang';
$_LANG['update_cart_notice'] = 'Selesai di perbaharui, silahkan lakukan pembelian yang lain.';
$_LANG['direct_shopping'] = 'Langsung membeli';
$_LANG['goods_not_exists'] = 'Maaf, produk tersebut tidak ada.';
$_LANG['drop_goods_confirm'] = 'Yakin mau mengeluarkan dari Cart?';
$_LANG['goods_number_not_int'] = 'Harap gunakan nomor yang benar.';
$_LANG['stock_insufficiency'] = 'Maaf, Stock barang hanya tersedia %s pcs %d, anda hanya dapat membeli %d maksimal.';
$_LANG['package_stock_insufficiency'] = 'Maaf, stock paket tidak mencukupi, sementara kurangi jumlah pemesanan atau hubungi admin segera..';
$_LANG['shopping_flow'] = 'Cara Belanja';
$_LANG['username_exists'] = 'username tersebut sudah terpakai, harap gunakan username yang lain.';
$_LANG['email_exists'] = 'Alamat email tersebut sudah pernah digunakan, harap gunakan alamat email yang lain.';
$_LANG['surplus_not_enough'] = 'Saoldo anda tidak mencukupi.';
$_LANG['integral_not_enough'] = 'Poin anda tidak mencukupi.';
$_LANG['integral_too_much'] = "Poin yang dapat anda gunakan tidak boleh lebih dari %d.";
$_LANG['invalid_bonus'] = "Angpao tersebut tidak ada.";
$_LANG['no_goods_in_cart'] = 'Cart anda kosong!';
$_LANG['not_submit_order'] = 'Pesanan sudah disubmit, tidak perlu diulang kembali!';
$_LANG['pay_success'] = 'Pembayaran selesai, akan segera kami kirim pesanan anda.';
$_LANG['pay_fail'] = 'Pembayaran gagal, harap segera menghubungi kami.';
$_LANG['pay_disabled'] = 'Mode pembayaran tidak tersambung.';
$_LANG['pay_invalid'] = 'Mode pembayaran tidak valid. harap segera menghubungi kami.';
$_LANG['flow_no_shipping'] = 'Silahkan pilih metode pengiriman.';
$_LANG['flow_no_payment'] = 'silahkan pilih cara pembayaran!';
$_LANG['pay_not_exist'] = 'Mode pembayaran tidak ada.';
$_LANG['storage_short'] = 'Stock barang kosong';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['accessories'] = 'Accessories';
$_LANG['largess'] = 'Largess';
$_LANG['shopping_money'] = 'Subtotal %s';
$_LANG['than_market_price'] = 'Harga pasar adalah %s, Anda hemat %s (%s). ';
$_LANG['your_discount'] = 'Selama Promo %s, anda dapat menikmati diskon sebesar %s';
$_LANG['no'] = 'Tidak';
$_LANG['not_support_virtual_goods'] = 'Ada beberapa produk virtual, anda perlu login untuk melakukan transaksi.';
$_LANG['not_support_insure'] = 'Tidak ada dukungan pasti.';
$_LANG['clear_cart'] = 'Kosongkan Cart.';
$_LANG['drop_to_collect'] = 'Batal';
$_LANG['password_js']['show_div_text'] = 'Perbaharui Cart';
$_LANG['password_js']['show_div_exit'] = 'Tutup';
$_LANG['goods_fittings'] = 'Goods Fittings'; /* sampai disini */
$_LANG['parent_name'] = 'Goods Releate：';
$_LANG['remark_package'] = 'Preferential Packeage';

/* 优惠活动 */
$_LANG['favourable_name'] = 'Benefit:';
$_LANG['favourable_period'] = 'Periode:';
$_LANG['favourable_range'] = 'Jangka waktu:';
$_LANG['far_ext'][FAR_ALL] = 'Semua produk';
$_LANG['far_ext'][FAR_BRAND] = 'Merek';
$_LANG['far_ext'][FAR_CATEGORY] = 'Kategori';
$_LANG['far_ext'][FAR_GOODS] = 'Produk/Barang';
$_LANG['favourable_amount'] = 'Jumlah:';
$_LANG['favourable_type'] = 'Tipe:';
$_LANG['fat_ext'][FAT_DISCOUNT] = 'Dapatkan %d%% diskon';
$_LANG['fat_ext'][FAT_GOODS] = 'Pilih %d dari beberapa produk ini ( 0(nol) mengindikasikan produk tanpa batas)';
$_LANG['fat_ext'][FAT_PRICE] = 'Harga berkurang %d';

$_LANG['favourable_not_exist'] = 'Tidak ada promotion';
$_LANG['favourable_not_available'] = 'Tidak bisa dapat benefit';
$_LANG['favourable_used'] = 'Benefit digunakan';
$_LANG['pls_select_gift'] = 'Tolong pilih barang';
$_LANG['gift_count_exceed'] = 'Jumlah produk melebihi batas';
$_LANG['gift_in_cart'] = 'Produk dalam Cart: %s';
$_LANG['label_favourable'] = 'Benefit';
$_LANG['label_collection'] = 'My wishlist';
$_LANG['collect_to_flow'] = 'Beli';

/* 登录注册 */
$_LANG['forthwith_login'] = 'Login';
$_LANG['forthwith_register'] = 'Daftar';
$_LANG['signin_failed'] = 'Maaf, login gagal, tolong cek kembali username dan password anda!.';
$_LANG['gift_remainder'] = 'Catatan: Pilih produk kembali setelah mendaftar dan login.';

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = 'Silahkan masukkan nama pembeli!';
$_LANG['flow_js']['country_not_null'] = 'Pilih Negara!';
$_LANG['flow_js']['province_not_null'] = 'Pilih Propinsi!';
$_LANG['flow_js']['city_not_null'] = 'Pilih Kecamatan!';
$_LANG['flow_js']['district_not_null'] = 'Pilih Kelurahan!';
$_LANG['flow_js']['invalid_email'] = 'Masukkan alamat email yang valid.';
$_LANG['flow_js']['address_not_null'] = 'Alamat tidak boleh kosong!';
$_LANG['flow_js']['tele_not_null'] = 'No. Telepon tidak boleh kosong!';
$_LANG['flow_js']['shipping_not_null'] = 'Cara pengiriman tidak boleh kosong!';
$_LANG['flow_js']['payment_not_null'] = 'Cara pembayaran tidak boleh kosong!';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = 'Harap masukkan No. Telepon yang valid.';
$_LANG['flow_js']['zip_not_num'] = 'Kode pos harus dalam format angka';
$_LANG['flow_js']['mobile_invaild'] = 'Format No. HP harus valid';

$_LANG['new_consignee_address'] = 'Alamat pembeli yang baru';
$_LANG['consignee_address'] = 'Alamat';
$_LANG['consignee_name'] = 'Nama';
$_LANG['country_province'] = 'Propinsi';
$_LANG['please_select'] = 'Pilih...';
$_LANG['city_district'] = 'Kecamatan';
$_LANG['email_address'] = 'Email';
$_LANG['detailed_address'] = 'Alamat Lengkap';
$_LANG['postalcode'] = 'Kode Pos';
$_LANG['phone'] = 'No. Telepon';
$_LANG['mobile'] = 'No. HP';
$_LANG['backup_phone'] = 'No. Telepon 2';
$_LANG['sign_building'] = 'Patokan';
$_LANG['deliver_goods_time'] = 'Waktu pengiriman';
$_LANG['default'] = 'Default';
$_LANG['default_address'] = 'Alamat default';
$_LANG['confirm_submit'] = 'Submit';
$_LANG['confirm_edit'] = 'Submit';
$_LANG['country'] = 'Negara';
$_LANG['province'] = 'Propinsi';
$_LANG['city'] = 'Kecamatan';
$_LANG['area'] = 'Kelurahan';
$_LANG['consignee_add'] = 'Tambahkan pembeli.';
$_LANG['shipping_address'] = 'Dikirim ke alamat ini';
$_LANG['address_amount'] = 'Alamat pengiriman tidak boleh lebih dari dua alamat.';
$_LANG['not_fount_consignee'] = 'Maaf, Alamat pengiriman tidak ada.';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = 'Jumlah produk kurang dari minimum pemesanan, yaitu %s, pesanan tidak dapat di proses.';
$_LANG['balance_not_enough'] = 'Saldo anda tidak mencukupi, silahkan pilih cara pembayaran yang lain';
$_LANG['select_shipping'] = 'Metoda pengiriman yang anda pilih adalah';
$_LANG['select_payment'] = 'Cara pembayaran yang anda pilih adalah';
$_LANG['order_amount'] = 'Pesanan anda adalah';
$_LANG['remember_order_number'] = 'Terima kasih telah berbelanja di Toko Online Kami! Pesanan sudah diproses, harap dicatat nomor pesanan anda berikut ini ';
$_LANG['back_home'] = '<a href="index.php">Kembali ke Home</a>';
$_LANG['goto_user_center'] = '<a href="user.php">Member center</a>';
$_LANG['order_submit_back'] = 'Anda dapat %s atau ke %s';

$_LANG['order_placed_sms'] = "Anda dapat pesanan baru. Pembeli: %s No. Telepon: %s";
$_LANG['sms_paid'] = 'Telah dibayar';

$_LANG['notice_gb_order_amount'] = '（(Keterangan: Jika menggunakan asuransi, biaya asuransi dan biaya yang terkait harap dibayar terlebih dahulu.)';

$_LANG['pay_order'] = 'Pay order %s';
$_LANG['validate_bonus'] = 'Validasikan angpao';
$_LANG['input_bonus_no'] = 'Input angpao No.';
$_LANG['select_bonus'] = 'Pilih angpao yang ada';
$_LANG['bonus_sn_error'] = 'Silahkan masukkan No. angpao yang valid.';
$_LANG['bonus_min_amount_error'] = 'Jumlah pemesanan kurang dari minimum pemesanan berdasarkan angpao %s';
$_LANG['bonus_is_ok'] = 'No. Angpao tersedia, bisa digunakan %s';


$_LANG['shopping_myship'] = 'Pengiriman saya';
$_LANG['shopping_activity'] = 'Daftar aktifitas';
$_LANG['shopping_package'] = 'Daftar paket';
?>
