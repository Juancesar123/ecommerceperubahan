<?php
// database connection
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
////////////////////////////////////////////////////////////////////////////////////////////////////
$mode            =$_GET['mode'];
$id			  = $_GET['id'];
if($mode=='delete'){
	$sql = 'delete from bw_pengiriman WHERE id= '. $db->quote($id);
	$result = $db->query($sql);
	header('Location: jasa-pengiriman.php');
   die();
	}
// page properties
$page_id    = 'konten';
$page_title = 'Jasa Pengiriman';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'jasa-pengiriman.php';
require_once $path_view . 'footer.php';