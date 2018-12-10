<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="cs-baru.php"><li><button type="button" class="btn btn-success">Tambah CS</button></li></a>
          </ul>
        </div>
        <div class="panel-body">
          <table width="100%" class="table table-bordered table-striped table-actions">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama CS</th>
                <th>No WA</th>
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
	$tampil="select * from bw_multics where ".$filter." like '%$keyword%'";
	$hasil=mysql_query($tampil);
}else{
	$tampil="select * from bw_multics ORDER BY idcs DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
	if (($no %2)==0 ){
		$bgcolor = "#cccccc";
	}else{
		$bgcolor	="#ffffff";
	}?>
              <tr id="trow_1">
                <td class="text-center"><?PHP echo"$no"; ?></td>
                <td><?PHP echo"$data[nama_cs]"; ?></td>
                 <td><?PHP echo"$data[wa_cs]"; ?></td>
                <td align="center"><a href="multics-edit.php?id=<?PHP echo"$data[idcs]"; ?>" style="text-decoration:none;">
                  <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                  </a> <a href="?mode=delete&id=<?PHP echo"$data[idcs]"; ?>" style="text-decoration:none;">
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