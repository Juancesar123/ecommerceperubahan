<?php
// database connection
require_once'config/fungsi_seo.php';
require_once'config/fungsi_library.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
$id				 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
$judul			 = trim(ucfirst($_POST['judul']));
$kategori		 = trim($_POST['kategori']);
$katakunci		 = trim($_POST['katakunci']);
$publish		 = trim($_POST['publish']);
$tglpublish		 = date("Y-m-d",strtotime($_POST['tglpublish']));
$keterangan		 = trim($_POST['keterangan']);
$isiartikel		 = str_replace("'","",$_POST['isiartikel']);
$lokasi_gambar	 = $_FILES['gambar']['tmp_name'];
$nama_gambar     = $_FILES['gambar']['name'];
$penulis		 = $user_fullname;
$getseo			 = strtolower($judul);
$seo			 = seo_title($getseo);
$bulanok		 = getBulan($bln_sekarang);

if ($mode=='artikeledit') {
	$error=array();
	/*judul*/
	if(empty($judul)){
		$error['judul']		="Judul Tidak Boleh Kosong";	
	}else if(!preg_match("/^[a-zA-Z ]*$/", $judul)){
		$error['judul']		="Judul Harus Alphabet dan spasi saja";	
	}
	
	/*pilih kategori*/
	if(empty($kategori)){
		$error['kategori']	="Kategori Tidak Boleh Kosong";
	}
	
	/*keterangan*/
	if(empty($keterangan)){
		$error['keterangan']	="Keterangan Tidak Boleh Kosong";	
	}
	
	/*publish*/
	if(empty($publish)){
		$error['publish']		="Tentukan akan dipublish atau tidak";	
	}
	
	/*tglpublish*/
	if(empty($tglpublish)){
		$error['tglpublish']	="Tentukan Tgl Publish";
	}
	
	/*kata kunci*/
	if(empty($katakunci)){
		$error['katakunci']		="Kata kunci Tidak Boleh Kosong";			
	}
	
	/*isi*/
	if(empty($isiartikel)){
		$error['isiartikel']		="Isi Page tidak boleh kosong";		
	}
	
	
	/*simpan saja jika tidak ada yang error*/
	if(empty($error)){
		if(!empty($lokasi_gambar)){
		 move_uploaded_file($lokasi_gambar,"../media-gallery/images/$nama_gambar");
      $sql = "UPDATE bw_artikel SET
				judul			='$judul',
				kategori		='$kategori',
				penulis			='$penulis',
				tgl				='$tgl_sekarang',
				isi				='$isiartikel',
				katakunci		='$katakunci',
				publish			='$publish',
				seo				='artikel/$seo',
				ket_singkat		='$keterangan',
				gambar			='$nama_gambar' WHERE idartikel='$id'";
      $result = $db->query($sql);
   	  header('Location: artikel.php');
      die();
		}else{
		$sql = "UPDATE bw_artikel SET
				judul			='$judul',
				kategori		='$kategori',
				penulis			='$penulis',
				tgl				='$tgl_sekarang',
				isi				='$isiartikel',
				katakunci		='$katakunci',
				publish			='$publish',
				seo				='artikel/$seo',
				ket_singkat		='$keterangan' WHERE idartikel='$id'";
      $result = $db->query($sql);
   	  header('Location: artikel.php');
      die();
			
		}
	}
}


$edit		="SELECT * FROM bw_artikel, bw_kategori WHERE idartikel='$id' AND bw_artikel.kategori=bw_kategori.idkategori";
$result		=$db->query($edit);
$dtedit		=$result;
if($dtedit && $dtedit[0]){
	$idartikel		=$dtedit[0]['idartikel'];
	$judul			=$dtedit[0]['judul'];
	$penulis		=$dtedit[0]['penulis'];	
	$idkategori		=$dtedit[0]['idkategori'];
	$kategori		=$dtedit[0]['namakategori'];
	$tgl			=$dtedit[0]['tgl'];
	$isi			=$dtedit[0]['isi'];
	$katakunci		=$dtedit[0]['katakunci'];	
	$publish		=$dtedit[0]['publish'];
	$seo			=$dtedit[0]['seo'];
	$ket_singkat	=$dtedit[0]['ket_singkat'];
	$gambar			=$dtedit[0]['gambar'];
	$dibaca			=$dtedit[0]['dibaca'];
	$suka			=$dtedit[0]['suka'];
}else{
	$idartikel		='';
	$judul			='';
	$penulis		='';	
	$idkategori		='';
	$kategori		='';
	$tgl			='';
	$isi			='';
	$katakunci		='';	
	$publish		='';
	$seo			='';
	$ket_singkat	='';
	$gambar			='';
	$dibaca			='';
	$suka			='';
}
/*kategori*/

$kategori1	="SELECT * FROM bw_kategori WHERE idkategori !='$idkategori' ORDER BY nama_kategori ASC";
$result		=$db->query($kategori1);
$kategories =$result;

// page properties
$page_id    = 'konten';
$page_title = 'Artikel Edit';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'artikel-edit.php';
require_once $path_view . 'footer.php';