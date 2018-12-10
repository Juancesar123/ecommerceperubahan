<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$id           	 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$judul			 = trim(ucfirst($_POST['judul']));
$katakunci		 = trim($_POST['katakunci']);
$isipage		 = str_replace("'","",$_POST['isipage']);
$penulis		 = $user_fullname;
$getseo			 = strtolower($judul);
$seo			 = seo_title($getseo);
$bulanok		 = getBulan($bln_sekarang);

if ($mode=='pageedit') {
	$error=array();
	/*judul*/
	if(empty($judul)){
		$error['judul']		="Judul Tidak Boleh Kosong";	
	}else if(!preg_match("/^[a-zA-Z ]*$/", $judul)){
		$error['judul']		="Judul Harus Alphabet dan spasi saja";	
	}
	
	
	/*kata kunci*/
	if(empty($katakunci)){
		$error['katakunci']		="Kata kunci Tidak Boleh Kosong";			
	}
	
	/*isi*/
	if(empty($isipage)){
		$error['isipage']		="Isi page tidak boleh kosong";		
	}
	
	/*simpan saja jika tidak ada yang error*/
	if(empty($error)){
      $sql = "UPDATE bw_page SET
				nama					='$judul',
				katakunci				='$katakunci',
				isipage					='$isipage' WHERE pageid='$id'";
      $result = $db->query($sql);
   	  header('Location: page.php');
      die();
	}
}

//page edit
$ed			="SELECT * FROM bw_page WHERE pageid='$_GET[id]'";
$result		=$db->query($ed);
$row		=$result;
if($row && $row[0]){
	$pageid					=$row[0]['pageid'];
	$judul					=$row[0]['nama'];
	$key					=$row[0]['katakunci'];
	$isipage				=$row[0]['isipage'];
	$hari					=$row[0]['hari'];
	$tgl					=$row[0]['tgl'];
	$bulan					=$row[0]['bulan'];
	$tahun					=$row[0]['tahun'];
	$seo					=$row[0]['seo'];		
}else{
	$pageid					='';
	$judul					='';
	$key					='';
	$isipage				='';
	$hari					='';
	$tgl					='';
	$bulan					='';
	$tahun					='';
	$seo					='';
}

$page_id    = 'konten';
$page_title = 'Edit Halaman';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'page-edit.php';
require_once $path_view . 'footer.php';