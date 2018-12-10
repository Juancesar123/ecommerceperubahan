<?PHP
$mode				=$_POST['mode'];
if($mode =="simpan"){
	$pass		=md5($_POST['password']);
	$up			=mysql_query("UPDATE bw_user SET password='$pass' WHERE username='$user_username'");
?>
	<script language="javascript">
		javascript:window.location.href = 'login.php?logout=1';
	</script>
	<?PHP
}
?>
<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      <!-- START DEFAULT FORM ELEMENTS -->
      <div class="block">
        <h4>Ganti Password Anda</h4>
        <br>
        <br>
        <form class="form-horizontal" role="form" method="post" action="<?PHP $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
          <input type="hidden" name="mode" value="simpan">
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Password Baru</label>
            <div class="col-md-6 col-xs-12">
              <input type="password" name="password" id="password" class="form-control"><br>
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
