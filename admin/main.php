<?php
//start session
session_start();
date_default_timezone_set('Asia/Jakarta'); 
$ids			=session_id();
//path
$path_base       = dirname($_SERVER['SCRIPT_FILENAME']) . '/';
$path_common     = $path_base . 'common/';
$path_model      = $path_base . 'model/';
$path_controller = $path_base . 'controller/';
$path_view       = $path_base . 'view/';
//setting 
require_once $path_common . 'config.php';
require_once $path_common . 'functions.php';
//setting
if ( !preg_match('/^.*\/login\.php$/', $_SERVER['SCRIPT_FILENAME']) ) {
   if (isset($_SESSION['username']) && isset($_SESSION['level'])) {
      $user_username = $_SESSION['username'];
      $user_fullname = $_SESSION['name'];
	  $user_level	 = $_SESSION['level'];
	  $user_photo	 = $_SESSION['photo'];
   } else {
      header('location: login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
      die();
   }
}