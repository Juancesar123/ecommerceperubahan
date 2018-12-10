<?php
// database connection
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
////////////////////////////////////////////////////////////////////////////////////////////////////
$mode            = $_GET['mode'];
$id				 = $_GET['id'];
if($mode=='delete'){
	$sql = 'delete from bw_user WHERE username= '. $db->quote($id);
	$result = $db->query($sql);
	header('location: pengguna.php');
   die();
	}
//////////////////// ambil data
$sql 		= 'SELECT * FROM bw_user ORDER BY username DESC';
$result 	= $db->query($sql);
$penggunas  = $result;
// page properties
$page_id    = 'pengguna';
$page_title = 'Pengguna';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'pengguna.php';
require_once $path_view . 'footer.php';