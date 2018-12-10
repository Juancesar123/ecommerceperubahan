<?php $batas=12;
$halaman=$idhalaman;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}
?>

<div class="xt-product-subpage">
  <div class="container">
    <div class="row">
      <!-- SIDEBAR -->
      <aside class="col-md-3 product-sidebar">
        <div class="clearfix"></div>
        <div class="xt-top-product">
          <h3>Produk Terbaru</h3>
          <div class="each-top-product">
            <?PHP 
								$a	=mysql_query("SELECT * FROM bw_produk WHERE sebagai='Produk Terbaru' limit 10 ");
								while($data=mysql_fetch_array($a)){
								?>
            <div class="top-item"> <a href="<?php echo $defaulturl; ?><?PHP echo($data['seo']) ?>"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" class="img-responsive"></a>
              <div class="top-item-info"> <a href="<?php echo $defaulturl; ?><?PHP echo($data['seo']) ?>">
                <h4><?PHP echo($data['namaproduk']) ?></h4>
                </a>
                <?PHP if($data['diskon'] > 0){ ?>
                <span>Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> <del>Rp. <?PHP echo number_format($data['harga']) ?></del>
                <?PHP }else{ ?>
                <span>Rp. <?PHP echo number_format($data['harga']) ?></span>
                <?PHP } ?>
              </div>
            </div>
            <?PHP } ?>
          </div>
        </div>
        <br>
        <br>
        <div class="xt-top-product">
          <h3>Produk Terlaris</h3>
          <div class="xt-top-product">
            <h3>Produk Terbaru</h3>
            <div class="each-top-product">
              <?PHP 
								$a	=mysql_query("SELECT * FROM bw_produk WHERE sebagai='Produk Terbaru' limit 10 ");
								while($data=mysql_fetch_array($a)){
								?>
              <div class="top-item"> <a href="<?php echo $defaulturl; ?><?PHP echo($data['seo']) ?>"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" class="img-responsive"></a>
                <div class="top-item-info"> <a href="<?php echo $defaulturl; ?><?PHP echo($data['seo']) ?>">
                  <h4><?PHP echo($data['namaproduk']) ?></h4>
                  </a>
                  <?PHP if($data['diskon'] > 0){ ?>
                  <span>Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> <del>Rp. <?PHP echo number_format($data['harga']) ?></del>
                  <?PHP }else{ ?>
                  <span>Rp. <?PHP echo number_format($data['harga']) ?></span>
                  <?PHP } ?>
                </div>
              </div>
              <?PHP } ?>
            </div>
          </div>
        </div>
      </aside>
      <div class="col-md-9">
        <!--end singlw item info -->
        <div class="xt-feature-product">
          <div class="section-separator">
            <div class="xt-filter-nav">
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label>Kategori Produk &#61;> <?PHP echo($judul) ?> </label>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="xt-page-pagination">
                  <nav aria-label="Page navigation">
                    <ul class="pagination xt-pagination">
                      <?php 
$tampil2="SELECT * from bw_produk WHERE idkategori='$idkategori' ORDER by namaproduk ASC";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
?>
                      <?php 
				  if($halaman > 1){
	$prev=$halaman-1;
				  ?>
                      <li> <a href="<?PHP echo($defaulturl)?>halkategori/<?PHP echo($halaman-1) ?>/<?PHP echo($idkategori)  ?>"></a> </li>
                      <?php } ?>
                      <?php
					for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
					?>
                      <li><a href="<?PHP echo($defaulturl.halkategori."/".$i."/$idkategori") ?>"><?PHP echo"$i"; ?></a> </li>
                      <?php }else{ ?>
                      <li class=active><a href="<?PHP echo($defaulturl.halkategori."/".$i."/$idkategori") ?>"><?PHP echo"$i"; ?></a> </li>
                      <?php } ?>
                      <?php 
					
					  
					  
if($halaman < $jmlhalaman){
	$next=$halaman+1;
					?>
                      <li> <a href="<?PHP echo($defaulturl)?>halkategori/<?PHP echo($halaman+1) ?>/<?PHP echo($idkategori) ?>" aria-label="Next"><i class="fa fa-caret-right"></i></a> </li>
                      <?php }else{ ?>
                      <li><a href="#" aria-label="Next"><i class="fa fa-caret-right"></i></a></li>
                      <?php } ?>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-xs-12 xt-top-hr">
                <hr class="xt-hr">
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="xt-each-feature">
              <?PHP
				// perintah minta data 
$tampil="SELECT * FROM bw_produk WHERE idkategori ='$idkategori' ORDER BY namaproduk ASC limit $posisi,$batas";
$hasil=mysql_query($tampil);
while($data	=mysql_fetch_array($hasil)){
	$hargaok		=$data['harga'] - $data['diskon'];
	$keterangan 	= htmlentities(strip_tags($data['keterangan'])); // membuat paragraf pada isi berita dan mengabaikan tag html
    $des = substr($keterangan,0,220); // ambil sebanyak 220 karakter
    $des = substr($keterangan,0,strrpos($des," ")); // potong per spasi kalimat
?>
              <div class="col-md-6 col-sm-6">
                <div class="xt-feature">
                  <div class="product-img"> <a href="<?PHP echo($defaulturl.$data['seo']) ?>" title="Detail Produk"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="gambar1"  style="display: block; height: 100%; width: 100%;"></a>
                    <?PHP if(!empty($data['status'])){ ?>
                    <span class="product-tag xt-uppercase"><?PHP echo($data['status']) ?></span>
                    <?PHP } ?>
                  </div>
                  <div class="product-info">
                    <div class="product-title"> <span class="category xt-uppercase"><?PHP echo($judul) ?></span> <a href="<?PHP echo($defaulturl.$data['urlproduk']) ?>" title="Detail Produk"> <span class="name xt-semibold"><?PHP echo($data['namaproduk']) ?></span> </a> </div>
                    <?PHP if($data['diskon'] > 0){ ?>
                    <!--harga-->
                    <div class="price-tag pull-right"> <span class="old-price"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                    <!---->
                    <?PHP }else{ ?>
                    <!--harga-->
                    <div class="price-tag pull-right"> <span class="old-price"></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                    <?PHP } ?>
                    <!---->
                    <div class="xt-featured-caption">
                      <div class="product-title"> <span class="category xt-uppercase"><?PHP echo($judul) ?></span> <a href="<?PHP echo($defaulturl.$data['seo']) ?>" title="Detail Produk"> <span class="name xt-semibold"><?PHP echo($data['namaproduk']) ?></span></a> </div>
                      <?PHP if($data['diskon'] > 0){ ?>
                      <!--harga-->
                      <div class="price-tag pull-right"> <span class="old-price"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                      <!---->
                      <?PHP }else{ ?>
                      <!--harga-->
                      <div class="price-tag pull-right"> <span class="old-price"></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                      <?PHP } ?>
                      <!---->
                      <div class="add-cart"> <a href="https://api.whatsapp.com/send?phone=<?PHP echo($data['wa']) ?>&text=Hai%20Admin%20Saya%20Mau%20
											Order%20%0A
											Nama%20Produk%20%3A%20<?PHP echo($data['namaproduk']) ?>%0A
											Kode%20Produk%20%3A%20<?PHP echo($data['kodeproduk']) ?>%0A
											Jumlah%20Produk%20%3A%20<?PHP echo('1') ?>%0A
											Nama%20Anda%20%3A%0A
											No%20HP%20Anda%20%3A%0A
											Email%20Anda%20%3A%0A
											Pembayaran%20%3A%0A
											Pengiriman%20%3A%0A
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="btn btn-fill" title="Beli Produk Ini"><img src="<?php echo $defaulturl; ?>/assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli Sekarang</a>
                        <ul class="reaction">
                          <li><a href="<?PHP echo($defaulturl.$data['seo']) ?>" title="Detail Produk"> <strong>Lihat Detail</strong></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?PHP } ?>
            </div>
            <div class="clearfix"></div>
          </div>
          <!---->
        </div>
      </div>
    </div>
  </div>
</div>
