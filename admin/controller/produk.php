<?php



// database connection

require_once $path_model . 'database.php';

$db = new Database($db_host, $db_user, $db_pass, $db_name);

////////////////////////////////////////////////////////////////////////////////////////////////////

$mode            =$_GET['mode'];

$id				 = $_GET['id'];

if($mode=='delete'){
	
	//ambildulu
	$sqls	='Select * from bw_produk WHERE idproduk='. $db->quote($id);
	$res	=mysql_query($sqls);
	$ada	=mysql_fetch_array($res);
	//
	$sql = 'delete from bw_produk WHERE idproduk= '. $db->quote($id);
	$result = $db->query($sql);
	//
	if(!empty($ada['gambar1'])){
		$gambar1	='../assets/produk/'.$ada['gambar1'];
		unlink($gambar1);
	}
	//
	if(!empty($ada['gambar2'])){
		$gambar2	='../assets/produk/'.$ada['gambar2'];
		unlink($gambar2);
	}
	//
	if(!empty($ada['gambar3'])){
		$gambar3	='../assets/produk/'.$ada['gambar3'];
		unlink($gambar3);
	}
	//
	if(!empty($ada['gambar4'])){
		$gambar4	='../assets/produk/'.$ada['gambar4'];
		unlink($gambar4);
	}
	//
	/*hapus thumbnailnya*/
	if(!empty($ada['thumb1'])){
		$thumb1	='../assets/produk/'.$ada['thumb1'];
		unlink($thumb1);
	}
	//
	if(!empty($ada['thumb2'])){
		$thumb2	='../assets/produk/'.$ada['thumb2'];
		unlink($thumb2);
	}
	//
	if(!empty($ada['thumb3'])){
		$thumb3	='../assets/produk/'.$ada['thumb3'];
		unlink($thumb3);
	}
	//
	if(!empty($ada['thumb4'])){
		$thumb4	='../assets/produk/'.$ada['thumb4'];
		unlink($thumb4);
	}
	///
	header('Location: produk.php');

   die();

	}

// page properties

$page_id    = 'konten';

$page_title = 'Data Produk';



// template

require_once $path_view . 'header.php';

require_once $path_view . 'produk.php';

require_once $path_view . 'footer.php';
