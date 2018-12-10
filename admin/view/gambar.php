<!-- START CONTENT FRAME -->

<div class="content-frame"> 
  
  <!-- START CONTENT FRAME TOP -->
  <div class="content-frame-top">
    <div class="page-title">
      <h2><span class="fa fa-image"></span> Gallery</h2>
    </div>
    <div class="pull-right">
      <button class="btn btn-primary"><span class="fa fa-upload"></span> Upload</button>
      <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
    </div>
  </div>
  
  <!-- START CONTENT FRAME RIGHT -->
  <div class="content-frame-right">
    <div class="block push-up-10">
      <form action="<?PHP $_SERVER['PHP_SELF'] ?>" style=" width:auto; background:rgba(208,208,208,1.00); padding:10px; border:dotted 2px; text-align:center" enctype="multipart/form-data" method="post">
        <input type="hidden" name="mode" value="simpan">
        <input type="text" class="form-control" name="nama" placeholder="Nama Gambar">
        <br>
        <input type="file" class="fileinput btn-primary" name="gambar" id="gambar" title="Browse file" style="width:100%;">
        <br>
        <br>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
      </form>
    </div>
  </div>
  <!-- END CONTENT FRAME RIGHT --> 
  
  <!-- START CONTENT FRAME BODY -->
  <div class="content-frame-body content-frame-body-left">
    <div class="gallery" id="links"> 
      <!---->
      <?PHP 
	  $a			=mysql_query("SELECT * FROM bw_galleryimages ORDER BY idgallery DESC");
	  while($row	=mysql_fetch_array($a)){
	  ?>
      <a class="gallery-item" href="gambar.php?id=<?PHP echo($row['idgallery']) ?>" title="Clik Gambar Untuk Hapus">
      <div class="image" style="float:left;"> <img src="assets/images/<?PHP echo $row['gambar']; ?>" alt="">
        <ul class="gallery-item-controls">
          <li><span class="gallery-item-remove" style="width: 100px;"></span></li>
        </ul>
      </div><br>
      <div class="meta"> <strong><?PHP echo $row['nama_gambar']; ?></strong> </div><br>
      </a>
      <?PHP } ?>
      <!----> 
    </div>
    <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>
  <!-- END CONTENT FRAME BODY --> 
</div>

<?PHP
if(isset($_POST['submit'])){
	$mode            = isset($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];
	$id				 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
	$lokasi_file	=$_FILES['gambar']['tmp_name'];
	$nama_file		=$_FILES['gambar']['name'];
	$nama			=$_POST['nama'];
	if($mode =='simpan'){
		if(!empty($lokasi_file)){
			move_uploaded_file($lokasi_file,"assets/images/$nama_file");
			$up				="INSERT INTO bw_galleryimages SET gambar ='$nama_file', nama_gambar='$nama'";
			$results		=$db->query($up);
			?>
			<script language="javascript">
				window.location.href='gambar.php';
			</script>
			<?PHP
		}		
}
}else if(isset($_GET['id'])){
	$sqldel		=mysql_query("DELETE FROM bw_galleryimages WHERE idgallery='$_GET[id]'");
	?>
	<script language="javascript">
				window.location.href='gambar.php';
			</script>
	<?PHP
}
?>
