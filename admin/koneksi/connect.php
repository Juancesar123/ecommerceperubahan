<?php
date_default_timezone_set('Asia/Jakarta');
$db_host = 'localhost';
$db_user = 'u3657196_premium';
$db_pass = '1q2w3e4r5t6y';
$db_name = 'u3657196_premium';
$koneksi = mysql_connect($db_host,$db_user,$db_pass) ;
if (! $koneksi){
	echo"Koneksi Gagal".mysql_error();
}
mysql_select_db($db_name) or die("databse tidak ditemukan");
?>