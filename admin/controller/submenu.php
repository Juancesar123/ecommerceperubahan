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

}else if($mode=='submenu'){
	$sql		="INSERT INTO bw_menu SET menu='$_GET[ok]', url='$_GET[seo]', tglbuat='$sekarang', bagian='$id'";	
	$results	=$db->query($sql);
	header('Location:submenu.php?id='.$id.'&mode=sub-menu');
    die();
}else if($mode=='custome'){
	
	$sql		="INSERT INTO bw_menu SET menu='$menu', url='$menu_custome', tglbuat='$sekarang', bagian='$id'";	
	$results	=$db->query($sql);
	header('Location:submenu.php?id='.$id.'&mode=sub-menu');
    die();	
}

// page properties
$page_id    = 'menu';
$page_title = 'Data Sub Menu';


// template
require_once $path_view . 'header.php';
require_once $path_view . 'submenu.php';
require_once $path_view . 'footer.php';
