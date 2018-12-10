<?php
// database connection
require_once $path_model . 'database.php';
require_once $path_model . 'pclzip.lib.php';
$db = new Database($db_host, $db_user, $db_pass, $db_name);
$tgl_sekarang=date('Y-m-d');
// parameters
$mode            = $_POST['mode'];
$nama            = $_POST['nama'];
$pembuat         = $_POST['pembuat'];
$roottemplate	 = $_POST['roottamplate'];
$keterangan		 = $_POST['keterangan'];
$lokasi_file	=$_FILES['template']['tmp_name'];
$nama_file		=$_FILES['template']['name'];
$namafile		=explode(".zip",$nama_file);
$namaok			=$namafile[0];
if ($mode=='add') {
   if(!empty($lokasi_file)){
   	  move_uploaded_file($lokasi_file,"$nama_file");
	    $archive = new PclZip($nama_file);
  if (($v_result_list = $archive->extract(PCLZIP_OPT_PATH, '../template/'.$namaok)) == 0) {
    die("Error : ".$archive->errorInfo(true));
		}
   	}
	//xml template
	$templatexml =  simplexml_load_file('../template/'.$namaok.'/template.xml');
//input ke dalam database
	foreach($templatexml->template as $template)
	{
	$namatemplate 	 = $template->namatemplate ;
	$sumberfile		 = $template->sumberfile;
	$pembuat		 = $template->pembuat;
	$keterangan		 = $template->keterangan;
	$gambar		 	 = $template->gambar;
	$sql = "INSERT INTO bw_template SET
				namatemplate		='$namatemplate',
				sumberfile   		='$sumberfile',
				pembuat       		='$pembuat',
				keterangan   		='$keterangan',
				gambar        		='$gambar'";
	$result= $db->query($sql);
	
   }
   $sukses="template berhasil diinstall..!!";
}
////////////////////////////////////////////////////////////////////////////////////////////////////
// page properties
$page_id    = 'template';
$page_title = 'Install Template';

// template
require_once $path_view . 'header.php';
require_once $path_view . 'install.php';
require_once $path_view . 'footer.php';