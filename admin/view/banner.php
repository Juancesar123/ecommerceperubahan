<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="banner-baru.php">
            <li>
              <button type="button" class="btn btn-success">Upload Banner</button>
            </li>
            </a>
          </ul>
        </div>
        <div class="panel-body"> 
          <!--isi-->
          <table width="100%" class="table table-striped table-hover table-bordered matmix-dt">
            <thead>
              <tr style="font-weight:bold;">
                <th class="tc-center">No</th>
                <th class="tc-center">Gambar</th>
                <th class="tc-center">Link</th>
                <th class="tc-center">Action </th>
              </tr>
            </thead>
            <tbody>
              <!---->
              <?php $batas=20;
$halaman=$_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}
// perintah minta data 
$keyword=$_GET['keyword'];
if (!empty($keyword)){
	$tampil="select * from bw_banner where judul OR isi OR katakunci like '%$keyword%'";
	$hasil=mysql_query($tampil);
}else{
	$tampil="select * from bw_banner ORDER BY idbanner DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
	$tglindo	=tgl_indo($data['tgl_publish']);
	?>
              <tr>
                <td class="tc-center"><?PHP echo $no; ?></td>
                <td><img src="../assets/banner/<?PHP echo $data['gambar']; ?>" class="img-responsive"></td>
                <td><?PHP echo $data['link'] ?></td>
                <td class="tc-center"><a href="banner-edit.php?id=<?php echo $data['idbanner'] ?>" onClick="return confirm('Apakah anda akan mengganti data <?php echo $data['judul']?> ?')" style="padding-top:6px; padding-bottom:6px; font-size:12px;">
                  <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                  </a> <a href="?mode=delete&id=<?php echo $data['idbanner'] ?>&gambar=<?PHP echo $data['gambar']; ?>" onClick="return confirm('Apakah anda akan menghapus data <?php echo $data['judul']?> ?')" style="padding-top:6px; padding-bottom:6px; font-size:12px;">
                  <button class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span></button>
                  </a></td>
              </tr>
              <?php 
	   $no++;
}
	  ?>
              <!--end-->
            </tbody>
          </table>
          <!----> 
        </div>
      </div>
    </div>
  </div>
</div>
