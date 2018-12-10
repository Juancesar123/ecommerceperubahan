<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$mode			=trim($_POST['mode']);
$bbm			=trim(anti_xss($_POST['bbm']));
$whatsapp		=trim(anti_xss($_POST['whatsapp']));
$facebook		=trim(anti_xss($_POST['facebook']));
$twitter		=trim(anti_xss($_POST['twitter']));
$linkedin		=trim(anti_xss($_POST['linkedin']));
$instagram		=trim(anti_xss($_POST['instagram']));
$googleplus		=trim(anti_xss($_POST['googleplus']));
$bukalapak		=trim(anti_xss($_POST['bukalapak']));
$tokopedia		=trim(anti_xss($_POST['tokopedia']));
$shopee			=trim(anti_xss($_POST['shopee']));
if ($mode=='sosmed') {
				$sqlp	="UPDATE bw_sosmed SET
						facebook			='$facebook',
						twitter				='$twitter',
						linkedin			='$linkedin',
						instagram			='$instagram',	
						googleplus			='$googleplus',
						bukalapak			='$bukalapak',
						tokopedia			='$tokopedia',
						shopee				='$shopee'"; 
				$result	=$db->query($sqlp);
				
				
$pesan="DATA SUKSES TERSIMPAN";
}
//////
$sqlpr	="SELECT * FROM bw_sosmed";
$resultpr	=$db->query($sqlpr);
$datap =$resultpr;
if($datap && $datap[0]){
	$facebook				=$datap[0]['facebook'];
	$twitter				=$datap[0]['twitter'];
	$linkedin				=$datap[0]['linkedin'];
	$instagram				=$datap[0]['instagram'];
	$googleplus				=$datap[0]['googleplus'];
	$bukalapak				=$datap[0]['bukalapak'];
	$tokopedia				=$datap[0]['tokopedia'];
	$shopee					=$datap[0]['shopee'];
}else{	
	$facebook				='';
	$twitter				='';
	$linkedin				='';
	$instagram				='';
	$googleplus				='';
	$bukalapak				='';
	$tokopedia				='';
	$shopee					='';
}
// page properties
$page_id    = 'setting';
$page_title = 'Sosial Media & Marketplace';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'sosmed.php';
require_once $path_view . 'footer.php';