<?PHP
$mode				=$_POST['mode'];
if($mode =="simpan"){
	$lokasi			=$_FILES['filename']['tmp_name'];
	$nama_file		=$_FILES['filename']['name'];
	if(!empty($lokasi)){
		$sql2 	= "select * from bw_user WHERE username='$user_username'";
	   $result2 =mysql_query($sql2);
	   $photo   =mysql_fetch_array($result2);
	   	
	$target		= "assets/images/users/$photo[photo]";
	unlink ($target);
	   //
		move_uploaded_file($lokasi,"assets/images/users/$nama_file");	
		$sql		="UPDATE bw_user SET photo='$nama_file' WHERE username='$user_username'";
		$result 	= mysql_query($sql);
		   header('Location:index.php');
		   die();
	}
}
?>

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      <!-- START DEFAULT FORM ELEMENTS -->
      <div class="block">
        <h4>Upload Photo Profile</h4>
        <br>
        <br>
        <form class="form-horizontal" role="form" method="post" action="<?PHP $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
          <input type="hidden" name="mode" value="simpan">
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Upload Photo</label>
            <div class="col-md-6 col-xs-12">
              <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file">
              <span class="help-block">Gif,jpg,png</span> <br>
              <br>
              <button class="btn btn-primary">SIMPAN</button>
            </div>
          </div>
        </form>
      </div>
      <!-- END DEFAULT FORM ELEMENTS --> 
    </div>
  </div>
</div>
