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
$ID				 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$namaexpedisi	 = trim($_POST['namaexpedisi']);
$getseo			 = strtolower($namaexpedisi);
$seo			 = seo_title($getseo);
$lokasi_file	=$_FILES['gambar']['tmp_name'];
$nama_file		=$_FILES['gambar']['name'];
$kode			=substr(rand(000000000,999999999),0,5);
$depan			=substr($namaexpedisi,0,3);
$kodok			=$depan.$kode;
if ($mode=='edit') {
	if(!empty($lokasi_file)){
	move_uploaded_file($lokasi_file,"../assets/pengiriman/$nama_file");
      $sql = "UPDATE bw_pengiriman SET
				namaexpedisi	='$namaexpedisi',
				logo 			='$nama_file' WHERE id=". $db->quote($ID);
      $result = $db->query($sql);
   header('Location: jasa-pengiriman.php');
   die();
	}else{
		 $sql = "UPDATE bw_pengiriman SET
				namaexpedisi	='$namaexpedisi' WHERE id=". $db->quote($ID);
      $result = $db->query($sql);
   header('Location: jasa-pengiriman.php');
   die();
	}
}
//data edit
$edit			='select * from bw_pengiriman where id='. $db->quote($ID);
$results		=$db->query($edit);
$dataedit		=$results;
if($dataedit && $dataedit[0]){
	$id					=$dataedit[0]['id'];
	$namaexpedisi		=$dataedit[0]['namaexpedisi'];
	$logo				=$dataedit[0]['logo'];
}else{
	$id			='';
	$namaexpedisi		='';
	$logo				='';
}
// page properties
$page_id    = 'jasa-pengiriman-edit';
$page_title = 'Edit Jasa Pengiriman';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'jasa-pengiriman-edit.php';
require_once $path_view . 'footer.php';