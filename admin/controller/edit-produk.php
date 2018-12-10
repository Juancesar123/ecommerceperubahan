<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
//query kategori
////////////////////////////////////////////////////////////////////////////////////////////////////
$mode				=$_POST['mode'];
$idprodukp        	=isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$kodeproduk         =trim($_POST['kode']);
$namaproduk      	 =trim($_POST['nama']);
$kategori			=trim($_POST['kategori']);
$status				=trim($_POST['status']);
$sebagai			=trim($_POST['sebagai']);
$harga              =trim($_POST['harga']); 	
$stock	           =trim($_POST['stock']);
$berat			   =trim($_POST['berat']);
$diskon			   =trim($_POST['diskon']);
$ukuran			   =trim($_POST['ukuran']);
$warna			   =trim($_POST['warna']);
$ket_singkat	   =trim($_POST['ketsingkat']);
$des			   =str_replace("'","",$_POST['des']);
$wa				   =trim($_POST['wa']);			   
//
$lokasi_file1	=$_FILES['gambar1']['tmp_name'];
$nama_file1		=$_FILES['gambar1']['name'];
//
$lokasi_file2	=$_FILES['gambar2']['tmp_name'];
$nama_file2		=$_FILES['gambar2']['name'];
//
$lokasi_file3	=$_FILES['gambar3']['tmp_name'];
$nama_file3		=$_FILES['gambar3']['name'];
//
$lokasi_file4	=$_FILES['gambar4']['tmp_name'];
$nama_file4		=$_FILES['gambar4']['name'];
//
$getseo			   = strtolower($namaproduk);
$seo			     = seo_title($getseo);
if ($mode=='edit') {
	if(empty($kodeproduk)){
		$error = 'Kode Produk harus diisi';
	}else if(empty($namaproduk)){
		$error = 'Nama Produk Harus Diisi';
	}else if(empty($wa)){
		$error = 'No WA harus diisi';
	}else{
				  $sql = "UPDATE bw_produk SET
							kodeproduk			='$kodeproduk',
							namaproduk			='$namaproduk',
							idkategori		='$kategori',
							sebagai			='$sebagai',
							status			='$status',
							keterangan		='$des',
							harga				='$harga',
							stock				='$stock',	
							berat				='$berat',
							diskon			='$diskon',
							ukuran			='$ukuran',
							 wa					='$wa',
							warna				='$warna' WHERE idproduk='$idprodukp'";
				  $result = $db->query($sql);
				  
$lokasi_file1	=$_FILES['gambar1']['tmp_name'];
$nama_file1		=$_FILES['gambar1']['name'];
//
$lokasi_file2	=$_FILES['gambar2']['tmp_name'];
$nama_file2		=$_FILES['gambar2']['name'];
//
$lokasi_file3	=$_FILES['gambar3']['tmp_name'];
$nama_file3		=$_FILES['gambar3']['name'];
//
$lokasi_file4	=$_FILES['gambar4']['tmp_name'];
$nama_file4		=$_FILES['gambar4']['name'];
//
if(!empty($lokasi_file1)){
$folder 	= "../assets/produk/";
$upload_image = $_FILES['gambar1']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 259;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['gambar1']['tmp_name'], $filesave);

$kd		=uniqid(rand());
// menentukan nama image setelah dibuat
$re_thumb = "thumb_" . $kd. ".jpg";
$resize_image = $folder . "thumb_" .$kd . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

	
	 $sql1	="UPDATE bw_produk SET
	 			gambar1			='$upload_image', thumb1='$re_thumb' WHERE kodeproduk='$kodeproduk'";
	$go1		   =$db->query($sql1);
}
/////////////////////////		
if(!empty($lokasi_file2)){
$folder 	= "../assets/produk/";
$upload_image = $_FILES['gambar2']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 259;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['gambar2']['tmp_name'], $filesave);

$kd		=uniqid(rand());
// menentukan nama image setelah dibuat
$re_thumb = "thumb_" . $kd. ".jpg";
$resize_image = $folder . "thumb_" .$kd . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

	
	 $sqld	="UPDATE bw_produk SET
	 			gambar2			='$nama_file2', thumb2='$re_thumb' WHERE kodeproduk='$kodeproduk'";
	$god		   =$db->query($sqld);
}
if(!empty($lokasi_file3)){
   	$folder 	= "../assets/produk/";
$upload_image = $_FILES['gambar3']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 259;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['gambar3']['tmp_name'], $filesave);

$kd		=uniqid(rand());
// menentukan nama image setelah dibuat
$re_thumb = "thumb_" . $kd. ".jpg";
$resize_image = $folder . "thumb_" .$kd . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

	 $sqlt	="UPDATE bw_produk SET
	 			gambar3			='$nama_file3', thumb3='$re_thumb' WHERE kodeproduk='$kodeproduk'";
	$got		   =$db->query($sqlt);
}
if(!empty($lokasi_file4)){
   	 $folder 	= "../assets/produk/";
$upload_image = $_FILES['gambar4']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 259;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['gambar4']['tmp_name'], $filesave);

$kd		=uniqid(rand());
// menentukan nama image setelah dibuat
$re_thumb = "thumb_" . $kd. ".jpg";
$resize_image = $folder . "thumb_" .$kd . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

	 $sql4	="UPDATE bw_produk SET
	 			gambar4			='$nama_file4', thumb4='$re_thumb' WHERE kodeproduk='$kodeproduk'";
	$go4		   =$db->query($sql4);
}
				  
			   header('Location: produk.php');
			   die();
				   }
			  
}

//ambil data
$ed				='SELECT * FROM bw_produk, bw_kategori, bw_multics 
WHERE  bw_produk.idkategori=bw_kategori.idkategori AND bw_produk.wa=bw_multics.wa_cs
AND bw_produk.idproduk='. $db->quote($_GET[id]);
$resed			=$db->query($ed);
$resultedit		=$resed;
if($resultedit && $resultedit[0]){
	$idproduk			=$resultedit[0]['idproduk'];
	$kodeproduk			=$resultedit[0]['kodeproduk'];
	$namaproduk			=$resultedit[0]['namaproduk'];
	$kategoriid			=$resultedit[0]['idkategori'];
	$nama_kategori		=$resultedit[0]['nama_kategori'];
	$sebagai			=$resultedit[0]['sebagai'];
	$des				=$resultedit[0]['keterangan'];
	$harga				=$resultedit[0]['harga'];
	$gambar1			=$resultedit[0]['gambar1'];
	$gambar2			=$resultedit[0]['gambar2'];
	$gambar3			=$resultedit[0]['gambar3'];
	$gambar4			=$resultedit[0]['gambar4'];
	$tglpublish			=$resultedit[0]['tglpublish'];
	$stock				=$resultedit[0]['stock'];
	$berat				=$resultedit[0]['berat'];
	$diskon				=$resultedit[0]['diskon'];
	$ukuran				=$resultedit[0]['ukuran'];
	$warna				=$resultedit[0]['warna'];
	$seo				=$resultedit[0]['seo'];
	$status				=$resultedit[0]['status'];
	$namacs				=$resultedit[0]['nama_cs'];
	$wa					=$resultedit[0]['wa_cs'];
}else{
	$idproduk			='';
	$kodeproduk			='';
	$namaproduk			='';
	$kategoriid			='';
	$nama_kategori		='';
	$sebagai			='';	
	$des				='';
	$harga				='';
	$gambar1			='';
	$gambar2			='';
	$gambar3			='';
	$gambar4			='';
	$tglpublish			='';
	$stock				='';
	$berat				='';
	$diskon				='';
	$ukuran				='';
	$Warna				='';
	$seo				='';
	$status				='';
	$namacs				='';
	$wa					='';
}
$sql2 = 'select * from bw_kategori order by NAMA_KATEGORI ASC';
$result2 = $db->query($sql2);
$kategori = $result2;
//
$sql3 = 'select * from bw_brands order by nama_brand ASC';
$result3 = $db->query($sql3);
$brand = $result3;
////////////////////////////////////////////
// page properties
$page_id    = 'produk-edit';
$page_title = 'Produk Edit';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'edit-produk.php';
require_once $path_view . 'footer.php';