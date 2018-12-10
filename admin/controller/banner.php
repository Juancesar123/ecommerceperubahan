<?php



// database connection

require_once $path_model . 'database.php';

$db = new Database($db_host, $db_user, $db_pass, $db_name);

////////////////////////////////////////////////////////////////////////////////////////////////////

$mode            =$_GET['mode'];

$id				 = $_GET['id'];

if($mode=='delete'){

	$sql = 'delete from bw_banner WHERE IDBANNER= '. $db->quote($id);
	$result = $db->query($sql);
	$lokasi	='../assets/banner/'.$_GET[gambar];
	unlink($lokasi);
	//
	header('Location: banner.php');
   die();
	}

// page properties

$page_id    = 'media';
$page_title = 'Data Banner';



// template

require_once $path_view . 'header.php';

require_once $path_view . 'banner.php';

require_once $path_view . 'footer.php';
