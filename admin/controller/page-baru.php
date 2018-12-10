<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$judul			 = trim(ucfirst($_POST['judul']));
$katakunci		 = trim($_POST['katakunci']);
$isipage		 = str_replace("'","",$_POST['isipage']);
$getseo			 = strtolower($judul);
$seo			 = seo_title($getseo);
$bulanok		 = getBulan($bln_sekarang);

if ($mode=='pagebaru') {
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
      $sql = "INSERT INTO bw_page SET
				nama					='$judul',
				katakunci				='$katakunci',
				isipage					='$isipage',
				hari					='$hari_ini',
				tgl						='$tgl_sekarang',
				bulan					='$bulanok',
				tahun					='$thn_sekarang',
				seo						='page/$seo.html'";
      $result = $db->query($sql);
   	  header('Location: page.php');
      die();
	}
}

$page_id    = 'konten';
$page_title = 'Buat Halaman Baru';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'page-baru.php';
require_once $path_view . 'footer.php';