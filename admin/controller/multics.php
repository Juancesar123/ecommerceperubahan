<?php



// database connection

require_once $path_model . 'database.php';

$db = new Database($db_host, $db_user, $db_pass, $db_name);

////////////////////////////////////////////////////////////////////////////////////////////////////

$mode            =$_GET['mode'];

$id				 = $_GET['id'];

if($mode=='delete'){

	$sql = 'delete from bw_multics WHERE idcs= '. $db->quote($id);

	$result = $db->query($sql);

	header('Location: multics.php');

   die();

	}

// page properties

$page_id    = 'setting';

$page_title = 'Data CS';



// template

require_once $path_view . 'header.php';

require_once $path_view . 'multics.php';

require_once $path_view . 'footer.php';
