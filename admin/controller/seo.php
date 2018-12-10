<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$mode					=trim($_POST['mode']);
$title					=trim($_POST['title']);
$keyword				=trim($_POST['keyword']);
$description			=trim($_POST['description']);
if ($mode=='seo') {
	
$error=array();

if(empty($title)){
	$error['title']					="Title Tidak Boleh Kosong";	
}

if(empty($keyword)){
	$error['keyword']				="Keyword tidak boleh kosong";	
}

if(empty($description)){
	$error['description']			="Description tidak boleh kosong";	
}

if(empty($error)){
				$del	="DELETE FROM bw_seo";
				$dels 	=$db->query($del);
				$sqlp	="INSERT INTO bw_seo SET
							mtitle		='$title',
							mdes		='$description',
							mkey		='$keyword'"; 
				$result	=$db->query($sqlp);
			
$pesan="DATA SUKSES TERSIMPAN";
}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
//ambil data seo
$sqlpr	="SELECT * FROM bw_seo";
$resultpr	=$db->query($sqlpr);
$datap =$resultpr;
if($datap && $datap[0]){
		$title			=$datap[0]['mtitle'];
		$keyword		=$datap[0]['mkey'];
		$description	=$datap[0]['mdes'];
}else{
		$title			='';
		$keyword		='';
		$description	='';
}
// page properties
$page_id    = 'setting';
$page_title = 'SEO';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'seo.php';
require_once $path_view . 'footer.php';