<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$tgl_sekarang=date('Y-m-d');
// parameters
$mode            = $_POST['mode'];
$namaexpedisi	 = trim($_POST['namaexpedisi']);
$getseo			 = strtolower($namaexpedisi);
$seo			 = seo_title($getseo);
$lokasi_file	=$_FILES['gambar']['tmp_name'];
$nama_file		=$_FILES['gambar']['name'];
$kode			=substr(rand(000000000,999999999),0,5);
$depan			=substr($namaexpedisi,0,3);
$kodok			=$depan.$kode;
if ($mode=='add') {
	$error	=array();
	
	if(empty($namaexpedisi)){
		$error['namaexpedisi']="Harus diisi";
	}else{
	move_uploaded_file($lokasi_file,"../assets/pengiriman/$nama_file");
      $sql = "INSERT INTO bw_pengiriman SET
	  			id_kirim		='$kodok',
				namaexpedisi	='$namaexpedisi',
				logo 			='$nama_file'";
      $result = $db->query($sql);
   header('Location: jasa-pengiriman.php');
   die();
	}
}
// page properties
$page_id    = 'konten';
$page_title = 'Jasa Pengiriman Baru';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'jasa-pengiriman-baru.php';
require_once $path_view . 'footer.php';