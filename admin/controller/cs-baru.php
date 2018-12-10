<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$namacs			 = trim(ucfirst($_POST['namacs']));
$nowa	 		 = trim(ucfirst($_POST['nowa']));
$idcs			 = crc32($nowa);
if ($mode=='csbaru') {
	$error=array();
	/*judul*/
	if(empty($namacs)){
		$error['namacs']		="Nama CS Tidak Boleh Kosong";
	}
	
	
	/*wa*/
	if(empty($nowa)){
		$error['nowa']			="No WA Tidak Boleh Kosong";		
	}
	
	/*simpan saja jika tidak ada yang error*/
	if(empty($error)){
	
	$sql			="INSERT INTO bw_multics SET						
						nama_cs			='$namacs',
						wa_cs			='$nowa',
						idcs			='$idcs'";
	$result			=$db->query($sql);
	header('location:multics.php');
	die();
	}
}
// page properties
$page_id    = 'setting';
$page_title = 'CS Baru';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'cs-baru.php';
require_once $path_view . 'footer.php';