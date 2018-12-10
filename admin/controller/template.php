<?php
// database connection
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
////////////////////////////////////////////////////////////////////////////////////////////////////
$mode            =$_GET['mode'];
$id				 = $_GET['id'];
if($mode=='delete'){
	$sql = 'delete from bw_template WHERE id= '. $db->quote($id);
	$result = $db->query($sql);
	header('Location: template.php');
   die();
	}
//////////////////// ambil data
$sql = 'select id, namatemplate, sumberfile, pembuat, keterangan, gambar, aktif FROM bw_template ORDER BY id DESC';
$result = $db->query($sql);
$templates = $result;
// page properties
$page_id    = 'media';
$page_title = 'Template';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'template.php';
require_once $path_view . 'footer.php';