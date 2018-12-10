<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="kategori-baru.php"><li><button type="button" class="btn btn-success">Tambah Kategori</button></li></a>
          </ul>
        </div>
        <div class="panel-body">
          <table width="100%" class="table table-bordered table-striped table-actions">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Subkategori Dari</th>
                <th>Gambar</th>
                <th>icon</th>
                <th align="center">Actions</th>
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
	$tampil="select * from bw_kategori where ".$filter." like '%$keyword%'";
	$hasil=mysql_query($tampil);
}else{
	$tampil="select * from bw_kategori ORDER BY idkategori DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($kategori=mysql_fetch_array($hasil)){
		$sel	=mysql_query("SELECT nama_kategori FROM bw_kategori WHERE idkategori ='$kategori[subkategori_dari]'");
	    $ad		=mysql_fetch_array($sel);
	if (($no %2)==0 ){
		$bgcolor = "#cccccc";
	}else{
		$bgcolor	="#ffffff";
	}?>
              <tr id="trow_1">
                <td class="text-center"><?PHP echo"$no"; ?></td>
                <td><?PHP echo"$kategori[nama_kategori]"; ?></td>
                <td><?PHP echo"$ad[nama_kategori]"; ?></td>
                <td align="center">
                <?PHP
				if(!empty($kategori['gambar'])){
				?>
                <img src="../assets/kategori/<?PHP echo($kategori['gambar']); ?>" width="100px;">
                <?PHP } ?>
                </td>
                <td align="center">
                <?PHP
				if(!empty($kategori['icon'])){
				?>
                <img src="../assets/kategori/<?PHP echo($kategori['icon']); ?>" width="64px;">
                <?PHP } ?>
                </td>
                <td align="center"><a href="kategori-edit.php?id=<?PHP echo"$kategori[idkategori]"; ?>" style="text-decoration:none;">
                  <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                  </a> <a href="?mode=delete&id=<?PHP echo"$kategori[idkategori]"; ?>" style="text-decoration:none;">
                  <button class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span></button>
                  </a> </a></td>
              </tr>
              <?php 
	   $no++;
}
	  ?>
            </tbody>
          </table>
        -