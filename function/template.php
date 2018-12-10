<?php
error_reporting(0);
session_start();
$sid	=session_id();
//panggil koneksi
require("koneksi/connect.php");

//ganti url sesuai dengan nama website
$defaulturl	="domain anda";

//panggil template yang sedang diaktikan
$sql	=mysql_query("SELECT * FROM bw_template WHERE aktif='on' LIMIT 1");
$template=mysql_fetch_array($sql);

//panggil data informasi website
$sql1		=mysql_query("SELECT * FROM bw_info");
$info		=mysql_fetch_array($sql1);
$namaweb	=$info['namatoko'];

//panggil data seo
$sql2	=mysql_query("SELECT * FROM bw_seo");
$seo	=mysql_fetch_array($sql2);

//facebook pixel
$fb		=mysql_query("SELECT * FROM bw_fbpixel");
$fbc	=mysql_fetch_array($fb);
$code	=$fbc['code'];

$sosmed		=mysql_query("SELECT * FROM bw_sosmed");
$dtsosemd	=mysql_fetch_array($sosmed);
$fb			=$dtsosemd['facebook'];
$tw			=$dtsosemd['twitter'];
$linkedin	=$dtsosemd['linkedin'];
$instagram	=$dtsosemd['instagram'];
$googleplus	=$dtsosemd['googleplus'];
$bukalapak	=$dtsosemd['bukalapak'];
$tokopedia	=$dtsosemd['tokopedia'];
$shopee		=$dtsosemd['shopee'];

//panggil url default pada browser
///**/
$geturl		=$_SERVER["REQUEST_URI"];
$pageurl1	=explode("/",$geturl);
$urlok		=$pageurl1[1]."/".$pageurl1[2]; 
$url_1		=$pageurl1[1]; 
$urlaktif	=$pageurl1[1]; 
$halaman	=$pageurl1[2]; 
$idk		=$pageurl1[3]; 

//panggil data dari table page
if($url_1 ==""){
	$judul=$info['slogan'];
}
if(($url_1 =="home.html") or ($url_1 =="index.html")){
	$judul=$info['slogan'];
}
if($url_1 =="produk"){
	$sel		=mysql_query("SELECT * FROM bw_produk WHERE SEO ='$urlok'");
	$dtp		=mysql_fetch_array($sel);
	///
	$judul		=$dtp['namaproduk'];
	$namaproduk	=$dtp['namaproduk'];
	$kodeproduk	=$dtp['kodeproduk'];
	$kategori	=$dtp['idkategori'];
	///
		$selk		=mysql_query("SELECT * FROM bw_kategori WHERE idkategori='$kategori'");
		$datak		=mysql_fetch_array($selk);
		$nkategori	=$datak['nama_kategori'];
	//
	$harga		=$dtp['harga'];
	$stok		=$dtp['stock'];
	$berat		=$dtp['berat'];
	$warna		=$dtp['warna'];
	$ukuran		=$dtp['ukuran'];
	$keterangan	=$dtp['keterangan'];
	$idk        =$dtp['kategori'];
	$diskon		=$dtp['diskon'];
	$hargaok	=$harga - $diskon;
	$gambar1	=$dtp['gambar1'];
	$ket 		= htmlentities(strip_tags($dtp['keterangan'])); 
    $des 		= substr($ket,0,500); 
    $des 		= substr($ket,0,strrpos($des," ")); 
	$nowa			=$dtp['wa'];
	if(empty($gambar1)){
		$gambar_1	="gambar_kosong.jpg";
	}else{
		$gambar_1	=$gambar1;
	}
	
	$gambar2	=$dtp['gambar2'];
	if(empty($gambar2)){
		$gambar_2	="gambar_kosong.jpg";
	}else{
		$gambar_2	=$gambar2;
	}
	
	$gambar3	=$dtp['gambar3'];
	if(empty($gambar3)){
		$gambar_3	="gambar_kosong.jpg";
	}else{
		$gambar_3	=$gambar3;
	}
	
	$gambar4	=$dtp['gambar4'];
	if(empty($gambar4)){
		$gambar_4	="gambar_kosong.jpg";
	}else{
		$gambar_4	=$gambar4;
	}
	
	$selec			=mysql_query("SELECT * FROM bw_kategori WHERE idkategori ='$idk'");
	$adk			=mysql_fetch_array($selec);
	$nama_kategori	=$adk['nama_kategori'];
}
if($url_1 =="kategori"){
	$prp		=mysql_query("SELECT * FROM bw_kategori WHERE SEO='$urlok'");
	$result		=mysql_fetch_array($prp);
	$idkategori	=$result['idkategori'];
	$judul		=$result['nama_kategori'];
	$idhalaman	=1;
}
if($url_1 =="halkategori"){
	$prp		=mysql_query("SELECT * FROM bw_kategori WHERE idkategori='$idk'");
	$result		=mysql_fetch_array($prp);
	$idkategori	=$result['idkategori'];
	$judul		=$result['nama_kategori'];
	if(empty($halaman)){
		$idhalaman	=0;
	}else{
		$idhalaman  =$halaman;
	}
}
if($url_1 =="all"){
	$judul		="Semua Produk";
	if(empty($halaman)){
		$idhalaman	=0;
	}else{
		$idhalaman  =$halaman;
	}
	
}
///url detek untuk page
if($url_1 =="page"){
	$prp		=mysql_query("SELECT * FROM bw_page WHERE SEO='$urlok'");
	$result		=mysql_fetch_array($prp);
	$judul		=$result['nama'];
	$isi		=$result['isipage'];
}
if($url_1 =="pencarian"){
	$judul		="Pencarian";
}
?>