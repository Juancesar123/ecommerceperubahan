<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$namakategori	 = trim(ucfirst($_POST['kategori']));
$subkategori	 = trim(ucfirst($_POST['Subkategori']));

//
$lokasi_file1	=$_FILES['gambar']['tmp_name'];
$nama_file1		=$_FILES['gambar']['name'];
//
$lokasi_file2	=$_FILES['icon']['tmp_name'];
$nama_file2		=$_FILES['icon']['name'];
//

$getseo			 = strtolower($namakategori);
$subkategori	 = trim($_POST['subkategori']);

$seo			 = seo_title($getseo);
$bulanok		 = getBulan($bln_sekarang);
if ($mode=='kategoribaru') {
	$error=array();
	/*judul*/
	if(empty($namakategori)){
		$error['kategori']		="Nama Kategori Tidak Boleh Kosong";
	}
	/*simpan saja jika tidak ada yang error*/
	if(empty($error)){
	$sql			="INSERT INTO bw_kategori SET						
						nama_kategori			='$namakategori',
						subkategori_dari		='$subkategori',
						seo						='kategori/$seo.html'";
	$result			=$db->query($sql);
	//	
	if(!empty($lokasi_file1)){
		move_uploaded_file($lokasi_file1,"../assets/kategori/$nama_file1");
		$sql_gambar		="UPDATE bw_kategori SET 
							gambar				='$nama_file1' WHERE seo='kategori/$seo.html'";
		$resultg			=$db->query($sql_gambar);
	}	
	//	
	if(!empty($lokasi_file2)){
		move_uploaded_file($lokasi_file2,"../assets/kategori/$nama_file2");
		$sql_icon		="UPDATE bw_kategori SET 
							icon				='$nama_file2' WHERE seo='kategori/$seo.html'";
		$resulticon		=$db->query($sql_icon);
	}
	header('location:kategori.php');
	die();
	}
}
/*kategori*/

$kategori	="SELECT * FROM bw_kategori ORDER BY nama_kategori ASC";
$result		=$db->query($kategori);
$kategories =$result;

// page properties
$page_id    = 'konten';
$page_title = 'Kategori Baru';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'kategori-baru.php';
require_once $path_view . 'footer.php';