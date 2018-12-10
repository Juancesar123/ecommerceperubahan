<?php
// database connection
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
function anti_injection($data){
$filter=mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter;
}
//////////////////////
$username = anti_injection($_POST['username']);
$password = anti_injection($_POST['password']);
$login    = $_POST['login'];
$logout   = $_REQUEST['logout'];
$redirect = urldecode( isset($_GET['redirect']) ? $_GET['redirect'] : './' );
// logout
if ($logout) {
   mysql_query("UPDATE bw_user SET online='0' WHERE username='$_SESSION[username]'");
   unset($_SESSION['username']);
   unset($_SESSION['nama']);
   unset($_SESSION['level']);
   unset($_SESSION['photo']);
   header('location: login.php');
   die();
}

if ($login) {
   $sql = 'select * from bw_user where username = ' . $db->quote($username);
   $result = $db->query($sql);
   if ($result && $result[0]) {
      // valid
      if (md5($password) == $result[0]['password']) {
         $_SESSION['username'] 	= $result[0]['username'];
         $_SESSION['nama']     	= $result[0]['name'];
         $_SESSION['level']    	=(int) $result[0]['level'];
		 $_SESSION['photo']	    = $result[0]['photo'];
		 //
		 $waktu   = time(); // 
		 $dt = date("Y-m-d");
		 mysql_query("UPDATE bw_user SET online='$waktu', tgl_login='$dt' WHERE username='$username'");
		 mysql_query("UPDATE bw_user SET online='0' WHERE tgl_online !='$dt'");
         header('location: ' . $redirect);
         die();
      // invalid
      } else {
         $error = 'Password Salah';
      }
   // error
   } else {
      $error = 'Username Salah';
   }
}
// template
require_once $path_view . 'login.php';