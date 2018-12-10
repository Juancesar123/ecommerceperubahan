<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$nama_pengguna	 = trim(ucfirst($_POST['nama_pengguna']));
$username		 = trim($_POST['username']);
$password		 = trim(md5($_POST['password']));


if ($mode=='penggunabaru') {
	$error=array();
	
	if(empty($nama_pengguna)){
		$error['nama_pengguna']		="Tidak Boleh Kosong";	
	}else if(!preg_match("/^[a-zA-Z ]*$/", $nama_pengguna)){
		$error['nama_pengguna']		="Harus Alphabet dan spasi saja";	
	}
	
	if(empty($username)){
		$error['username']	="Tidak Boleh Kosong";
	}
	
	if(empty($error)){
		$sqls		="INSERT INTO bw_user SET
						username		='$username',
						password		='$password',
						name			='$nama_pengguna',
						level			='1'";	
		$a	=$db->query($sqls);
   	  header('location: pengguna.php');
      die();
	}
}

$kategori	="SELECT * FROM bw_kategori ORDER BY nama_kategori ASC";
$result		=$db->query($kategori);
$kategories =$result;

$page_id    = 'konten';
$page_title = 'Pengguna Baru';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'pengguna-baru.php';
require_once $path_view . 'footer.php';