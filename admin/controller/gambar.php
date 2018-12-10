<?php



// database connection

require_once $path_model . 'database.php';

$db = new Database($db_host, $db_user, $db_pass, $db_name);

////////////////////////////////////////////////////////////////////////////////////////////////////

$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];

$id				 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];

$lokasi_file	=$_FILES['gambar']['tmp_name'];

$nama_file		=$_FILES['gambar']['name'];

$nama			=$_POST['nama'];



if($mode=='delete'){

	$target		= "assets/images/$nama_file";
	
	$sql 		= 'delete from bw_galleryimages WHERE id= '. $db->quote($id);

	$result = $db->query($sql);
	
	unlink ($target);
	
	header('Location: gambar.php');

   die();

}

if($mode =='simpan'){
	//if(!empty($lokasi_file)){
//		move_uploaded_file($lokasi_file,"assets/images/$nama_file");
//		$up				="INSERT INTO bw_galleryimages SET gambar ='$nama_file', nama_gambar='$nama'";
//		$results		=$db->query($up);
//		header('location:ffffgambar.php');
//	}		
}

// page properties

$page_id    = 'media';

$page_title = 'Gallery Gambar';



// template

require_once $path_view . 'header.php';

require_once $path_view . 'gambar.php';

require_once $path_view . 'footer.php';
