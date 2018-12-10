<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = trim($_POST['mode']);
$nama            = trim($_POST['nama']);
$cabang          = trim($_POST['cabang']);
$rekening		 = trim($_POST['rekening']);
$pemilik		 = trim($_POST['pemilik']);
$getseo			 = strtolower($nama);
$seo			 = seo_title($getseo);
$lokasilogo		 = trim($_FILES['logo']['tmp_name']);
$namalogo		 = trim($_FILES['logo']['name']);
if ($mode=='bankbaru') {
		
	$error	=array();
	
	if(empty($nama)){
		$error['nama']	="Nama Bank Tidak Boleh Kosong";
	}
	
	if(empty($cabang)){
		$error['cabang']	="Nama Cabang Tidak Boleh Kosong";
	}
	
	if(empty($rekening)){
		$error['rekening']	="No Rekening tidak boleh kosong";
	}
	
	if(empty($pemilik)){
		$error['pemilik']	="Pemilik tidak boleh kosong";
	}
	
	if(empty($error)){
		
		if(!empty($lokasilogo)){
		   move_uploaded_file($lokasilogo,"../assets/bank/$namalogo");
		  $sql = "INSERT INTO bw_bank SET
					nama_bank		='$nama',
					cabang			='$cabang',
					norek			='$rekening',
					pemilik			='$pemilik',
					logo_bank		='$namalogo'";
		  $result = $db->query($sql);
	   header('Location: account-bank.php');
	   die();
	   }
}
}
// page properties
$page_id    = 'account-bank';
$page_title = 'Account Bank';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'account-bank-baru.php';
require_once $path_view . 'footer.php';