<?php

require_once 'main.php';

if ( in_array($user_level, array(1, 10, 30)) ) {
   require_once $path_controller . 'artikel-edit.php';
} else {
   header('Location: ./');
   die();
}