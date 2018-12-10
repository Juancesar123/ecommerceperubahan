<?php
date_default_timezone_set('Asia/Jakarta');
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'new-db.sql';
$koneksi = @mysql_connect($db_host,$db_user,$db_pass) ;
if (! $koneksi){
	echo"Koneksi Gagal".mysql_error();
}
mysql_select_db($db_name) or die("databse tidak ditemukan");
?>