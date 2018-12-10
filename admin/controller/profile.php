<?php
// database connection
require_once'config/fungsi_seo.php';
require_once $path_model . 'database.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$mode					=trim($_POST['mode']);
$namatoko				=trim($_POST['namatoko']);
$slogan					=trim($_POST['slogan']);
$telpon					=trim($_POST['telpon']);
$hp						=trim($_POST['wa']);
$email					=trim($_POST['email']);
$alamat					=trim($_POST['alamat']);
//
$lokasilogo		 = trim($_FILES['logo']['tmp_name']);
$namlogo		 = trim($_FILES['logo']['name']);
//
$lokasifavicon	 = trim($_FILES['favicon']['tmp_name']);
$namfavicon		 = trim($_FILES['favicon']['name']);

if ($mode=='profile') {
	$ambil		=mysql_query("SELECT * FROM bw_info");
	$go			=mysql_fetch_array($ambil);
	$logou		=$go['logo'];
	$favicou	=$go['favicon'];
$error=array();

if(empty($namatoko)){
	$error['namatoko']		="Nama Perusahaan Tidak Boleh Kosong";	
}else if(!preg_match("/^[a-z A-Z]*$/",$namatoko)){
	$error['namatoko']		="Hanya Boleh ALPABET dan SPASI saja";
}

if(empty($error)){
				$del	="DELETE FROM bw_info";
				$dels 	=$db->query($del);
				
				$sqlp	="INSERT INTO bw_info SET
						namatoko			='$namatoko',
						slogan				='$slogan',
						telp				='$telpon',
						wa					='$hp',
						email				='$email',
						alamat				='$alamat'"; 
				$result	=$db->query($sqlp);
				
				
				if(!empty($lokasilogo)){
					move_uploaded_file($lokasilogo,"../assets/images/$namlogo");
					$sqlpl	="UPDATE bw_info SET logo='$namlogo'"; 
					$resultl	=$db->query($sqlpl);
				}else{
					$sqlpl	="UPDATE bw_info SET logo='$logou'"; 
					$resultl	=$db->query($sqlpl);
				}
				
				if(!empty($lokasifavicon)){
					move_uploaded_file($lokasifavicon,"../assets/images/$namfavicon");
					$sqlpp	="UPDATE bw_info SET favicon='$namfavicon'"; 
					$resultp	=$db->query($sqlpp);
				}else{
					$sqlpp	="UPDATE bw_info SET favicon='$favicou'"; 
					$resultp	=$db->query($sqlpp);
				}
				
	$pesan	="Data Berhasil di Proses";
	header('location:profile.php');
}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
//ambil data seo
$sqlpr	="SELECT * FROM bw_info";
$resultpr	=$db->query($sqlpr);
$datap =$resultpr;
if($datap && $datap[0]){
	$namatoko			=$datap[0]['namatoko'];
	$slogan				=$datap[0]['slogan'];
	$telp				=$datap[0]['telp'];
	$wa					=$datap[0]['wa'];
	$email				=$datap[0]['email'];
	$alamats			=$datap[0]['alamat'];
	$logo				=$datap[0]['logo'];
	$favicon			=$datap[0]['favicon'];
}else{
	$nama_perusahaan	='';
	$slogan				='';
	$telp				='';
	$wa					='';
	$email				='';
	$alamats			='';
	$logo				='';
	$favicon			='';
}
// page properties
$page_id    = 'setting';
$page_title = 'Profile';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'profile.php';
require_once $path_view . 'footer.php';