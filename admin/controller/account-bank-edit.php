<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$ID				 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$edit			 = $_POST['id'];
$mode            = trim($_POST['mode']);
$nama            = trim($_POST['nama']);
$cabang          = trim($_POST['cabang']);
$rekening		 = trim($_POST['rekening']);
$pemilik		 = trim($_POST['pemilik']);
$getseo			 = strtolower($nama);
$seo			 = seo_title($getseo);
$lokasilogo		 = trim($_FILES['logo']['tmp_name']);
$namalogo		 = trim($_FILES['logo']['name']);
if ($mode=='edit') {
   if(empty($nama)){
	   $error="Nama Bank";
   }else if(!empty($lokasilogo)){
	   move_uploaded_file($lokasilogo,"../assets/bank/$namalogo");
      $sql = "UPDATE bw_bank SET
	  			nama_bank		='$nama',
				cabang			='$cabang',
				norek			='$rekening',
				pemilik			='$pemilik',
				logo_bank		='$namalogo' WHERE idbank='$ID'";
      $result = $db->query($sql);
   header('Location: account-bank.php');
   die();
   }else{
	   $sql = "UPDATE bw_bank SET
	  			nama_bank		='$nama',
				cabang			='$cabang',
				norek			='$rekening',
				pemilik			='$pemilik' WHERE idbank='$ID'";
      $result = $db->query($sql);
   header('Location: account-bank.php');
   die();
	   }
}
//
$editbank	="SELECT * FROM bw_bank WHERE idbank='$ID'";
$result		=$db->query($editbank);
$banks		=$result;
if($banks && $banks[0]){
	$idbank			=$banks[0]['idbank'];
	$namabanks		=$banks[0]['nama_bank'];
	$cabangb		=$banks[0]['cabang'];
	$account		=$banks[0]['norek'];
	$an				=$banks[0]['pemilik'];
	$gambar			=$banks[0]['logo_bank'];
}else{
	$idbank			='';
	$namabank		='';
	$cabangb		='';
	$account		='';
	$an				='';
	$gambar			='';
}
// page properties
// page properties
$page_id    = 'account-bank';
$page_title = 'Edit Account Bank';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'account-bank-edit.php';
require_once $path_view . 'footer.php';