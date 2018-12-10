<?php 
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';

// page properties
$page_id    = 'dashboard';
$page_title = 'Dashboard';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'dashboard.php';
require_once $path_view . 'footer.php';