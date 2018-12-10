<?PHP
require_once("koneksi/connect.php");
$mode            =$_GET['mode'];

$id				 = $_GET['id'];

$lokasi_file	=$_FILES['gambar']['tmp_name'];

$nama_file		=$_FILES['gambar']['name'];

$nama			=$_POST['nama'];
if($mode =='simpan'){
	if(!empty($lokasi_file)){
		move_uploaded_file($lokasi_file,"assets/images/$nama_file");
		$up				="INSERT INTO bw_galleryimages SET gambar ='$nama_file', nama_gambar='$nama'";
		$results		=$db->query($up);
		header('location:ffffgambar.php');
	}		
}

?>