<?php
include"../koneksi/connect.php";
$demo_mode = false;
$upload_dir = '../media-gallery/images/';
$allowed_ext = array('jpg','jpeg','png','gif');


if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
	exit_status('Error! kesalahan HTTP!');
}


if(array_key_exists('pic',$_FILES) && $_FILES['pic']['error'] == 0 ){
	
	$pic = $_FILES['pic'];
	$nama= $_FILES['pic']['name'];
	if(!in_array(get_extension($pic['name']),$allowed_ext)){
		exit_status('Hanya '.implode(',',$allowed_ext).' files yang disarankan!');
	}	

	if($demo_mode){
		
		// File uploads are ignored. We only log them.
		
		$line = implode('		', array( date('r'), $_SERVER['REMOTE_ADDR'], $pic['size'], $pic['name']));
		file_put_contents('log.txt', $line.PHP_EOL, FILE_APPEND);
		
		exit_status('setuju upload.');
	}
	
	
	// Move the uploaded file from the temporary 
	// directory to the uploads folder:
	
	if(move_uploaded_file($pic['tmp_name'], $upload_dir.$pic['name'])){
		$simpan	="INSERT INTO bw_galleryimages SET gambar='$nama'";
		$exsekusi=mysql_query($simpan);
		exit_status('uploaded successfuly!');
	}

}

exit_status('Ada yang salah dengan file upload!');


// Helper functions

function exit_status($str){
	echo json_encode(array('status'=>$str));
	exit;
}

function get_extension($file_name){
	$ext = explode('.', $file_name);
	$ext = array_pop($ext);
	return strtolower($ext);
}
?>