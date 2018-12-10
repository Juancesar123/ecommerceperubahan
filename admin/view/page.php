<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="page-baru.php" style="text-decoration:none;">
            <li>
              <button type="button" class="btn btn-success">Halaman Baru</button>
            </li>
            </a>
          </ul>
        </div>
        <div class="panel-body">
          <table width="100%" class="table table-striped table-hover table-bordered matmix-dt">
            <thead>
              <tr style="font-weight:bold;">
                <th class="tc-center">No</th>
                <th class="tc-center">Judul Halaman</th>
                <th class="tc-center">Kata Kunci</th>
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
	$tampil="select * from bw_page where judul OR isi OR katakunci like '%$keyword%'";
	$hasil=mysql_query($tampil);
}else{
	$tampil="select * from bw_page ORDER BY pageid DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
	$tglindo	=tgl_indo($data['tgl_publish']);
	?>
              <tr>
                <td class="tc-center"><?PHP echo $no; ?></td>
                <td><?PHP echo $data['nama'] ?></td>
                <td><?PHP echo $data['katakunci'] ?></td>
                <td class="tc-center"><?PHP echo $data['seo']; ?></td>
                <td class="tc-center"><a href="page-edit.php?id=<?php echo $data['pageid'] ?>" onClick="return confirm('Apakah anda akan mengganti data <?php echo $data['judul']?> ?')" style="padding-top:6px; padding-bottom:6px; font-size:12px;">
                  <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                  </a> <a href="?mode=delete&id=<?php echo $data['pageid'] ?>" onClick="return confirm('Apakah anda akan menghapus data <?php echo $data['judul']?> ?')" style="padding-top:6px; padding-bottom:6px; font-size:12px;">
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
        </div>
        <div class="panel-footer"> 
          <!---->
          <?php 
 $tampil2="select * from bw_page";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
?>
          <div class="dt-pagination">
            <nav>
              <ul class="pagination">
                <?php 
				  if($halaman > 1){
	$prev=$halaman-1;
				  ?>
                <li> <a href="<?PHP echo"$_SERVER[PHP_SELF]?halaman=$prev"; ?>" aria-label="Previous"> <span aria-hidden="true">Prev</span> </a> </li>
                <?php }else{ ?>
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span> </a> </li>
                <?php } ?>
                <?php
					for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
					?>
                <li><a href="<?php echo"$_SERVER[PHP_SELF]?halaman=$i"; ?>"><?PHP echo"$i"; ?></a> </li>
                <?php }else{ ?>
                <li><a href="<?php echo"$_SERVER[PHP_SELF]?halaman=$i"; ?>"><?PHP echo"$i"; ?></a> </li>
                <?php } ?>
                <?php 
					// Link kehalaman berikutnya (Next)
if($halaman < $jmlhalaman){
	$next=$halaman+1;
					?>
                <li> <a href="<?php echo"$_SERVER[PHP_SELF]?halaman=$next"; ?>" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
                <?php }else{ ?>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
                <?php } ?>
              </ul>
            </nav>
          </div>
          <!----> 
        </div>
      </div>
    </div>
  </div>
</div>
