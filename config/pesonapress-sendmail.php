<?php
include"koneksi/connect.php";
$sql1		="SELECT * FROM bw_setmail";
$result1	=mysql_query($sql1);
$datae		=mysql_fetch_array($result1);
$sm			=$datae['smtp'];
$prt		=$datae['port'];
$us			=$datae['username'];
$ps			=$datae['password'];
?>
