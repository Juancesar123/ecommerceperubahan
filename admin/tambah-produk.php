<?php

require_once 'main.php';

if ( in_array($user_level, array(1)) ) {
   require_once $path_controller . 'tambah-produk.php';
} else {
   header('Location: ./');
   die();
}