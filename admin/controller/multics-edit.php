<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$idedit          = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$namacs			 = trim(ucfirst($_POST['namacs']));
$nowa	 		 = trim(ucfirst($_POST['nowa']));
$idcs			 = crc32($nowa);
if ($mode=='csedit') {
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
	
	$sql			="UPDATE bw_multics SET						
						nama_cs			='$namacs',
						wa_cs			='$nowa' WHERE idcs='$idedit'";
	$result			=$db->query($sql);
	header('location:multics.php');
	die();
	}
}
/*kategori*/

$edit		="SELECT * FROM bw_multics WHERE idcs ='$_GET[id]'";
$result		=$db->query($edit);
$multics 	=$result;
if($multics & $multics[0]){
	$idcs_edit		=$multics[0]['idcs'];
	$namacs_edit	=$multics[0]['nama_cs'];
	$nowacs_edit	=$multics[0]['wa_cs'];
}else{
	$idcs_edit		='';
	$namacs_edit	='';
	$nowacs_edit	='';
}
// page properties
$page_id    = 'setting';
$page_title = 'Edit CS';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'multics-edit.php';
require_once $path_view . 'footer.php';