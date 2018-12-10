<?PHP
// Statistik user
$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); // 
$pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
$totalpengunjung  = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
$tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
$bataswaktu       = time() - 300;
$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));
$tothitsgbr = sprintf("%06d", $tothitsgbr);
for ( $i = 0; $i <= 9; $i++ ){
	$tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i' style=border:none;>", $tothitsgbr);
}
$kemarin  = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
$kemarin1  ="SELECT * FROM statistik WHERE tanggal='$kemarin'";
$ex2	   =mysql_query($kemarin1);
$jumk		=mysql_num_rows($ex2);
?>
<div class="page-content-wrap"> 
  
  <!-- START WIDGET SLIDER -->
  <div class="row">
   
    <div class="col-md-9"> 
      
      <!-- START WIDGET SLIDER -->
      <div class="widget widget-default widget-carousel">
        <div class="owl-carousel" id="owl-example">
          <div>
            <div class="widget-title">Total</div>
            <div class="widget-subtitle">PENGUNJUNG</div>
            <div class="widget-int"><?php print"$totalpengunjung"?></div>
          </div>
          <div>
            <div class="widget-title">Pengunjung</div>
            <div class="widget-subtitle">KEMARIN</div>
            <div class="widget-int"><?php print"$jumk"?></div>
          </div>
          <div>
            <div class="widget-title">Pengunjung</div>
            <div class="widget-subtitle">BARU</div>
            <div class="widget-int"><?php print"$pengunjung"?></div>
          </div>
        </div>
        <div class="widget-controls"> <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Hapus Widget"> <span class="fa fa-times"></span></a> </div>
      </div>
      <!-- END WIDGET SLIDER --> 
      
    </div>
    
    <div class="col-md-3">
      <div class="widget widget-info widget-padding-sm">
        <div class="widget-big-int plugin-clock">00:00</div>
        <div class="widget-subtitle plugin-date">Loading...</div>
        <div class="widget-controls"> <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Hapus Widget"><span class="fa fa-times"></span></a> </div>
        <div class="widget-buttons widget-c3">
          <div class="col"> <a href="#"><span class="fa fa-clock-o"></span></a> </div>
          <div class="col"> <a href="#"><span class="fa fa-bell"></span></a> </div>
          <div class="col"> <a href="#"><span class="fa fa-calendar"></span></a> </div>
        </div>
      </div>
    </div>
    <!--terbaru-->
   <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2>Produk Terbaru</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php 
			  $batas=5;
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
	$tampil="select *from bw_produk WHERE sebagai='Produk Terbaru' ORDER BY idproduk  DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($produk=mysql_fetch_array($hasil)){
	$harga	=number_format($produk['harga']);
	if (($no %2)==0 ){
		$bgcolor = " #CCFFCC";
	}else{
		$bgcolor	="#ffffff";
	}?>
            <article class="media event" style="width: 100%; float: left;"> <img src="../assets/produk/<?php echo $produk['gambar1']?>" style="display:block; width:20%; float:left; margin-right:10px;"/>
              <div class="media-body"><?php echo"$produk[namaproduk]"; ?>
                <p>Stok: <?php echo"$produk[stock]"; ?>, Harga : <?php echo"Rp. $harga"; ?></p>
              </div>
            </article>
            <?php 
	   $no++;
}
	  ?>
          </div>
        </div>
      </div>
      <!--end terbaru-->
      
      
          <!--Produk Pilihan-->
   <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2>Produk Pilihan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php 
			  $batas=5;
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
	$tampil="select *from bw_produk WHERE sebagai='Produk Pilihan' ORDER BY idproduk  DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($produk=mysql_fetch_array($hasil)){
	$harga	=number_format($produk['harga']);
	if (($no %2)==0 ){
		$bgcolor = " #CCFFCC";
	}else{
		$bgcolor	="#ffffff";
	}?>
            <article class="media event" style="width: 100%; float: left;"> <img src="../assets/produk/<?php echo $produk['gambar1']?>" style="display:block; width:20%; float:left; margin-right:10px;"/>
              <div class="media-body"><?php echo"$produk[namaproduk]"; ?>
                <p>Stok: <?php echo"$produk[stock]"; ?>, Harga : <?php echo"Rp. $harga"; ?></p>
              </div>
            </article>
            <?php 
	   $no++;
}
	  ?>
          </div>
        </div>
      </div>
      <!--end Produk Pilihan-->
      
        <!--Produk Terlaris-->
   <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2>Produk Terlaris</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php 
			  $batas=5;
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
	$tampil="select *from bw_produk WHERE sebagai='Produk Terlaris' ORDER BY idproduk  DESC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
}
$no=$posisi+1;
while ($produk=mysql_fetch_array($hasil)){
	$harga	=number_format($produk['harga']);
	if (($no %2)==0 ){
		$bgcolor = " #CCFFCC";
	}else{
		$bgcolor	="#ffffff";
	}?>
            <article class="media event" style="width: 100%; float: left;"> <img src="../assets/produk/<?php echo $produk['gambar1']?>" style="display:block; width:20%; float:left; margin-right:10px;"/>
              <div class="media-body"><?php echo"$produk[namaproduk]"; ?>
                <p>Stok: <?php echo"$produk[stock]"; ?>, Harga : <?php echo"Rp. $harga"; ?></p>
              </div>
            </article>
            <?php 
	   $no++;
}
	  ?>
          </div>
        </div>
      </div>
      <!--end Produk Terlaris-->
      
  </div>
</div>
</div>
