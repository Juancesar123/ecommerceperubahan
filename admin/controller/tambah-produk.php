<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
//query kategori
////////////////////////////////////////////////////////////////////////////////////////////////////
$mode				=$_POST['mode'];
$idproduk        	=$_POST['id'];
$kodeproduk         =trim($_POST['kode']);
$namaproduk      	=trim(anti_xss($_POST['nama']));
$kategori			=trim($_POST['kategori']);
$sebagai			=trim($_POST['sebagai']);
$status				=trim($_POST['status']);
$harga              =trim($_POST['harga']); 	
$stock	           =trim($_POST['stock']);
$berat			   =trim($_POST['berat']);
$diskon			   =trim($_POST['diskon']);
$ukuran			   =trim($_POST['ukuran']);
$warna			   =trim($_POST['warna']);
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
$getseo			   = strtolower($namaproduk);
$seo			     = seo_title($getseo);
if ($mode=='add') {
	
	$error=array();
	
	if(empty($kodeproduk)){
		$error['kode']		="Tidak boleh kosong";	
	}
	
	
	if(empty($namaproduk)){
		$error['nama']			="Tidak boleh kosong";	
	}
	
	if(empty($wa)){
		$error['wa']			="Tidak boleh kosong";	
	}
	
	if(empty($kategori)){
		$error['kategori']			="Tidak boleh kosong";	
	}
	
	if(empty($sebagai)){
		$error['sebagai']			="Tidak boleh kosong";	
	}
	
	if(empty($harga)){
		$error['harga']			="Tidak boleh kosong";	
	}
	
	if(empty($stock)){
		$error['stock']			="Tidak boleh kosong";	
	}
	
	if(empty($berat)){
		$error['berat']			="Tidak boleh kosong";	
	}
	
	if(empty($des)){
		$error['des']			="Tidak boleh kosong";	
	}
	
	if(empty($error)){
				 $ka	=mysql_query("SELECT * FROM bw_kategori WHERE idkategori='$kategori'");
				 $dtk	=mysql_fetch_array($ka);
				  $sql = "INSERT INTO bw_produk SET
							kodeproduk			='$kodeproduk', 
							namaproduk          ='$namaproduk',
							sebagai				='$sebagai',
							idkategori			='$kategori',
							idsubkategori_dari	='$dtk[subkategori_dari]',
							status				='$status',
							keterangan          ='$des',
							harga               ='$harga',  
							stock               ='$stock',
							berat				='$berat',
							diskon				='$diskon',
							warna				='$warna',
							ukuran				='$ukuran',
							tglpublish			='$tgl_sekarang',
							wa					='$wa',
							seo			        ='produk/$seo' '.' 'html'";
				  $result = $db->query($sql);
				  
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
$sql2 = 'select * from bw_kategori order by nama_kategori ASC';
$result2 = $db->query($sql2);
$kategori = $result2;
////////////////////////////////////////////
// page properties
$page_id    = 'produk-baru';
$page_title = 'Produk Baru';
// template
require_once $path_view . 'header.php';
require_once $path_view . 'tambah-produk.php';
require_once $path_view . 'footer.php';