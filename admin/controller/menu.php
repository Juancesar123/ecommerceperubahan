<?php
// database connection
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
////////////////////////////////////////////////////////////////////////////////////////////////////
$sekarang		 =date('Y-m-d');
$mode            =isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$id				 =isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$menu			 =isset($_POST['ok']) ? $_POST['ok'] : $_GET['ok'];
$menu_custome	 =$_POST['menu_custome'];

if($mode=='delete'){

	$sql = 'delete from bw_menu WHERE idmenu= '. $db->quote($id);

	$result = $db->query($sql);

	header('Location: menu.php');

   die();

}else if($mode=='menu'){
	$sql = 'delete from bw_menu WHERE menu= '. $db->quote($menu);
	$result = $db->query($sql);
	
	$sql		="INSERT INTO bw_menu SET menu='$_GET[ok]', url='$_GET[seo]', tglbuat='$sekarang', bagian=''";	
	$results	=$db->query($sql);
	header('Location: menu.php');
    die();
}else if($mode=='custome'){
	$sql = 'delete from bw_menu WHERE menu= '. $db->quote($menu);
	$result = $db->query($sql);
	
	$sql		="INSERT INTO bw_menu SET menu='$menu', url='$menu_custome', tglbuat='$sekarang', bagian='custome'";	
	$results	=$db->query($sql);
	header('Location: menu.php');
    die();	
}

// page properties
$page_id    = 'menu';
$page_title = 'Data Menu';


// template
require_once $path_view . 'header.php';
require_once $path_view . 'menu.php';
require_once $path_view . 'footer.php';
