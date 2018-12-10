<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$judul			 = trim(ucfirst($_POST['judul']));
$link			 = trim($_POST['link']);
$lokasi_gambar	 = $_FILES['gambar']['tmp_name'];
$nama_gambar     = $_FILES['gambar']['name'];
$seo			 = seo_title($getseo);
$bulanok		 = getBulan($bln_sekarang);

if ($mode=='bannerbaru') {
	$error=array();
	/*judul*/
	if(empty($judul)){
		$error['judul']		="Judul Tidak Boleh Kosong";	
	}
	
	
	/*gambar*/
	if(empty($nama_gambar)){
		$error['gambar']			="Gambar tidak boleh kosong";	
	}
	
	/*simpan saja jika tidak ada yang error*/
	if(empty($error)){
		if(!empty($lokasi_gambar)){
		 move_uploaded_file($lokasi_gambar,"../assets/banner/$nama_gambar");
      $sql = "INSERT INTO bw_banner SET
				judul			='$judul',
				link			='$link',
				gambar			='$nama_gambar'";
      $result = $db->query($sql);
   	  header('Location: banner.php');
      die();
		}
	}
}

// page properties
$page_id    = 'media';
$page_title = 'Banner Baru';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'banner-baru.php';
require_once $path_view . 'footer.php';