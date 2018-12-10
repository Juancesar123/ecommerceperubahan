<?php 
//database
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';

// page
$page_id    = 'gantipassword';
$page_title = 'Ganti Password';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'gantipassword.php';
require_once $path_view . 'footer.php';