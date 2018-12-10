<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="account-bank-baru.php"><li><button type="button" class="btn btn-success">Tambah Account</button></li></a>
          </ul>
        </div>
        <div class="panel-body">
           
           
           
            <table width="100%" class="table table-striped responsive-utilities jambo_table" id="example">
              <thead>
                <tr class="headings">
                <th style="width:auto;">No</th>
                  <th style="width:auto;">Nama Bank</th>
                  <th style="width:auto;">No. Rekening</th>
                  <th style="width:auto;">Pemilik</th>
                  <th style="width:auto;">Cabang</th>
                  <th style="width:auto;" align="center">&nbsp;</th>
                  <th style="text-align:center;">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
			  $batas=20;
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
	$tampil="select * from bw_bank where ".$filter." like '%$keyword%'";
	$hasil=mysql_query($tampil);
}else{
	$tampil="select * from bw_bank ORDER BY idbank  DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($bank=mysql_fetch_array($hasil)){
	$tarif			=number_format($bank['tarif']);
	if (($no %2)==0 ){
		$bgcolor = " #CCFFCC";
	}else{
		$bgcolor	="#ffffff";
	}?>
                <tr class="even pointer" bgcolor="<?php echo"$bgcolor"; ?>">
                  <td><?php echo"$no"; ?></td>
                  <td><?php echo"$bank[nama_bank]"; ?></td>
                  <td><?php echo"$bank[norek]"; ?></td>
                  <td><?php echo"$bank[pemilik]"; ?></td>
                  <td><?php echo"$bank[cabang]"; ?></td>
                  <td align="center">
                  <img src="../assets/bank/<?php echo $bank['logo_bank']?>" style="display:block; padding:0px; margin:0px; width: 100px;" class="img-responsive"/></td>
                  <td class=" last" align="right">
                    <a href="account-bank-edit.php?id=<?php echo $bank['idbank'] ?>" onclick="return confirm('Apakah anda akan mengganti data <?php echo $bank['nama']?> ?')" class="btn btn-info btn-xs" title="EDIT"><i class="fa fa-pencil"></i></a>
                  <a href="?mode=delete&id=<?php echo $bank['idbank'] ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $bank['nama']?> ?')" class="btn btn-danger btn-xs" title="HAPUS"><i class="fa fa-trash-o" ></i></a></td>
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
 $tampil2="select * from bw_bank";
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
