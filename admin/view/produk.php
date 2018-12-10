<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="tambah-produk.php"><li><button type="button" class="btn btn-success">Tambah Produk</button></li></a>
          </ul>
        </div>
        <div class="panel-body">
          <table width="100%" class="table table-bordered table-striped table-actions">
            <thead>
              <tr>
                <th>No</th>
                <th>SKU</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
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
$filter	=$_GET['filterby'];
$keyword=$_GET['keyword'];
if (!empty($filter)){
	$tampil="select * from bw_produk where ".$filter." like '%$keyword%'";
	$hasil=mysql_query($tampil);
}else{
	$tampil="select * from bw_produk ORDER BY idproduk DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($produk=mysql_fetch_array($hasil)){
	$kt			=mysql_query("SELECT * FROM bw_kategori WHERE idkategori='$produk[idkategori]'");
	$ad			=mysql_fetch_array($kt);
	$adak		=$ad['nama_kategori'];
	if (($no %2)==0 ){
		$bgcolor = "#cccccc";
	}else{
		$bgcolor	="#ffffff";
	}?>
              <tr id="trow_1">
                <td class="text-center"><?PHP echo"$no"; ?></td>
                <td><?PHP echo"$produk[kodeproduk]"; ?></td>
                <td><?PHP echo"$produk[namaproduk]"; ?></td>
                <td><?PHP echo"$adak"; ?></td>
                <td><?PHP echo"$produk[stock]"; ?></td>
                <td align="right"><?PHP echo number_format("$produk[harga]"); ?></td>
                <td align="right"><?PHP echo number_format("$produk[diskon]"); ?></td>
                <td align="center"><img src="../assets/produk/<?php echo $produk['gambar1']?>" style="display:inherit; width:60px;"/></td>
                <td align="center"><a href="edit-produk.php?id=<?PHP echo"$produk[idproduk]"; ?>" style="text-decoration:none;">
                  <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                  </a> <a href="?mode=delete&id=<?PHP echo"$produk[idproduk]"; ?>" style="text-decoration:none;">
                  <button class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span></button>
                  </a> </a></td>
              </tr>
              <?php 
	   $no++;
}
	  ?>
            </tbody>
          </table>
        </div>
        <div class="panel-footer"> 
          <!---->
          <?php 
 $tampil2="select * from bw_produk";
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
