<?php
date_default_timezone_set('Asia/Jakarta'); 
//panggil url default pada browser
$geturl		=$_SERVER["REQUEST_URI"];
//bagi jadi beberapa bagian dari url yang diterima
//
$editjenis			=explode("/",$geturl);
$editcode		 	 =$editjenis[2];//kalo di serverhosting ganti jadi 1
//ambil data
$ambil_editjenis	  =mysql_query("SELECT * FROM bs_jenis_penawaran WHERE seo='$editcode'");	
$data_editjenis	   =mysql_fetch_array($ambil_editjenis);	
$jumlahjenis		  =mysql_num_rows($ambil_editjenis);
if($jumlahjenis > 0){
	$idjenis			  =$data_editjenis['idjenis'];
	$nama_jenis		   	  =$data_editjenis['nama_jenis'];
	$tgl				  =$data_editjenis['tgl'];	
	$jam				  =$data_editjenis['jam'];
	$bulan				  =$data_editjenis['bulan'];
}
////
//function waktu_lalu($time_ago){
//$waktu_sekarang = time();
//$waktu_lalu = $waktu_sekarang - $time_ago;
//$detik = $waktu_lalu ;
//$menit = round($waktu_lalu / 60 );
//$jam = round($waktu_lalu / 3600);
//$hari = round($waktu_lalu / 86400 );
//$minggu = round($waktu_lalu / 604800);
//$bulan = round($waktu_lalu / 2600640 );
//$tahun = round($waktu_lalu / 31207680 );
// 
//// detik
//if($detik <= 60){
//echo "$detik detik yang lalu";
//}
////menit
//else if($menit <=60){
//if($menit==1){
//echo "satu menit yang lalu";
//}
//else{
//echo "$menit menit yang lalu";
//}
//}
////jam
//else if($jam <=24){
//if($jam==1){
//echo "1 jam yang lalu";
//}else{
//echo "$jam jam yang lalu";
//}
//}
////hari
//else if($hari <= 7){
//if($hari==1){
//echo "kemarin";
//}else{
//echo "$hari hari yang lalu";
//}
//}
////minggu
//else if($minggu <= 4.3){
//if($minggu==1){
//echo "satu minggu yang lalu";
//}else{
//echo "$minggu minggu yang lalu";
//}
//}
////bulan
//else if($bulan <=12){
//if($bulan==1){
//echo "satu bulan yang lalu";
//}else{
//echo "$bulan bulan yang lalu";
//}
//}
////tahun
//else{
//if($tahun==1){
//echo "satu tahun yang lalu";
//}else{
//echo "$tahun tahun yang lalu";
//}
//}
//}
?>