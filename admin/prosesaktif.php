<?php 
// database connection
include"../koneksi/connect.php";
$aktif	=$_GET['aktif'];
$ID		=$_GET['id'];
  if ($aktif == "on"){
		  $sql = "UPDATE bw_template SET aktif	='off' WHERE id !='$ID'";
		  $result = mysql_query($sql);
	  }else{
		    $sql = "UPDATE bw_template SET aktif	='on' WHERE id ='$ID'";
		  	$result = mysql_query($sql);
			$sql = "UPDATE bw_template SET aktif	='off' WHERE id !='$ID'";
		  	$result = mysql_query($sql);
  }
header('location:template.php');