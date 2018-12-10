<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$id            	 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$judul			 = trim(ucfirst($_POST['judul']));
$publish		 = trim($_POST['publish']);
$link			 = trim($_POST['link']);
$keterangan		 = trim($_POST['keterangan']);
$lokasi_gambar	 = $_FILES['gambar']['tmp_name'];
$nama_gambar     = $_FILES['gambar']['name'];
$seo			 = seo_title($getseo);
$bulanok		 = getBulan($bln_sekarang);

if ($mode=='banneredit') {
	$error=array();
	/*judul*/
	if(empty($judul)){
		$error['judul']		="Judul Tidak Boleh Kosong";	
	}
	
	/*simpan saja jika tidak ada yang error*/
	if(empty($error)){
		if(!empty($lokasi_gambar)){
		 move_uploaded_file($lokasi_gambar,"../assets/banner/$nama_gambar");
      $sql = "UPDATE bw_banner SET
				judul			='$judul',
				tgl				='$tgl_sekarang',
				publish			='$publish',
				link			='$link',
				ket				='$keterangan',
				gambar			='$nama_gambar' WHERE idbanner='$id'";
      $result = $db->query($sql);
   	  header('Location: banner.php');
      die();
		}else{
		      $sql = "UPDATE bw_banner SET
				judul			='$judul',
				tgl				='$tgl_sekarang',
				publish			='$publish',
				link			='$link',
				ket				='$keterangan' WHERE idbanner='$id'";
      $result = $db->query($sql);
   	  header('Location: banner.php');
      die();	
		
		}
	}
}

$ed			="SELECT * FROM bw_banner WHERE idbanner='$id'";
$dt			=$db->query($ed);
$results	=$dt;
if($results && $results[0]){
	$idbanner			=$results[0]['idbanner'];
	$judul				=$results[0]['judul'];
	$ket				=$results[0]['ket'];	
	$link				=$results[0]['link'];
	$publish			=$results[0]['publish'];
	$gambar				=$results[0]['gambar'];
}else{
	$idbanner			='';
	$judul				='';
	$ket				='';
	$link				='';
	$publish			='';	
	$gambar				='';
}
// page properties
$page_id    = 'media';
$page_title = 'Banner Edit';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'banner-edit.php';
require_once $path_view . 'footer.php';