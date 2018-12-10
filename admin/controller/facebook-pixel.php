<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$mode					=trim($_POST['mode']);
$code					=trim(htmlspecialchars($_POST['code']));
if ($mode=='facebookpixel') {
	
$error=array();

if(empty($code)){
	$error['code']			="Code tidak boleh kosong";	
}

if(empty($error)){
				$del	="DELETE FROM bw_fbpixel";
				$dels 	=$db->query($del);
				$sqlp	="INSERT INTO bw_fbpixel SET
							code		='$code'"; 
				$result	=$db->query($sqlp);
			
$pesan="DATA SUKSES TERSIMPAN";
}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
//ambil data seo
$sqlpr	="SELECT * FROM bw_fbpixel";
$resultpr	=$db->query($sqlpr);
$datap =$resultpr;
if($datap && $datap[0]){
		$code	=$datap[0]['code'];
}else{
		$code	='';
}
// page properties
$page_id    = 'setting';
$page_title = 'Facebook Pixel';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'facebook-pixel.php';
require_once $path_view . 'footer.php';