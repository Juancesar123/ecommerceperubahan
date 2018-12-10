<?php 
//database
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
	
// page
$page_id    = 'upload';
$page_title = 'Upload Profile';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'upload.php';
require_once $path_view . 'footer.php';