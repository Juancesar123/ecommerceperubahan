	<div id="content" class="productPage">
		<div class="container">
			<div class="topSection">
				<div class="breadcrumbRow clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-5 text-xs-center">
							<h2>KATEGORI <?PHP echo("$judul"); ?></h2>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="breadcrumb">
								<ul class="clearfix text-right text-xs-center">
									<li><a href="../home.html">Home</a></li>
									<li><a href="#">Kategori</a></li>
									<li><?PHP echo("$judul"); ?></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="stripe">
				<div class="productsRow productListing">
					<div class="row">
                   	<?PHP
					$batas=15;
$halaman=$idhalaman;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}
				// perintah minta data 
$tampil="SELECT * FROM bw_produk WHERE idkategori ='$idkategori' ORDER BY namaproduk ASC limit $posisi,$batas";
$hasil=mysql_query($tampil);
while($data	=mysql_fetch_array($hasil)){
	$hargaok		=$data['harga'] - $data['diskon'];
	$keterangan 	= htmlentities(strip_tags($data['keterangan'])); // membuat paragraf pada isi berita dan mengabaikan tag html
    $des = substr($keterangan,0,520); // ambil sebanyak 220 karakter
    $des = substr($keterangan,0,strrpos($des," ")); // potong per spasi kalimat
?>
                    	<div class="productBox clearfix">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="productImage hoverStyle">
                                    <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="gambar1" style="display: block; width: 100%; height: auto;">
                                   <?PHP if(!empty($data['status'])){ ?>
                                         <span class="new"><?PHP echo($data['status']) ?></span>
                                         <?PHP } ?>
                                    <div class="hoverBox">
                                        <div class="hoverIcons">
										<a href="<?PHP echo($defaulturl) ?><?PHP echo($data['seo']) ?>" class="eye hovicon" title="Detail Produk"><i class="fa fa-folder-open" title="detail produk"></i></a>
                                        </div>
                                        <a href="https://api.whatsapp.com/send?phone=<?PHP echo($data['wa']) ?>&text=Hai%20Admin%20Saya%20Mau%20
											Order%20%0A
											Nama%20Produk%20%3A%20<?PHP echo($data['namaproduk']) ?>%0A
											Kode%20Produk%20%3A%20<?PHP echo($data['kodeproduk']) ?>%0A
											Jumlah%20Produk%20%3A%20<?PHP echo('1') ?>%0A
											Nama%20Anda%20%3A%0A
											No%20HP%20Anda%20%3A%0A
											Email%20Anda%20%3A%0A
											Pembayaran%20%3A%0A
											Pengiriman%20%3A%0A
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="cartBTN2" title="Beli Produk Ini"><img src="<?PHP echo($defaulturl) ?>assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="productDesc">
                                    <span class="product-title"><a href="#"><?PHP echo($data['namaproduk']) ?></a></span>

                                     <?PHP if($data['diskon'] > 0){ ?>
                                        <strong class="productPrice"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></strong>
                                        <strong class="big-sel-price">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></strong><?PHP }else{ ?>
                                         <strong class="productPrice">Rp. <?PHP echo number_format($data['harga']) ?></strong>
                                         <?PHP } ?>
                                    <p><?PHP echo($des); ?></p>
                                    <div class="viewDetail">
                                    <a href="<?php echo $defaulturl; ?><?PHP echo($data['seo']) ?>" class="btn-custom-3">Lihat Detail</a>
                                              <a href="https://api.whatsapp.com/send?phone=<?PHP echo($data['wa']) ?>&text=Hai%20Admin%20Saya%20Mau%20
											Order%20%0A
											Nama%20Produk%20%3A%20<?PHP echo($data['namaproduk']) ?>%0A
											Kode%20Produk%20%3A%20<?PHP echo($data['kodeproduk']) ?>%0A
											Jumlah%20Produk%20%3A%20<?PHP echo('1') ?>%0A
											Nama%20Anda%20%3A%0A
											No%20HP%20Anda%20%3A%0A
											Email%20Anda%20%3A%0A
											Pembayaran%20%3A%0A
											Pengiriman%20%3A%0A
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="btn-custom-2" title="Beli Produk Ini">
                                    <img src="<?PHP echo($defaulturl) ?>assets/images/wa.png" style="margin-right: 5px; width: 20px; margin-top: -5px;" id="beli">Beli</a></div>
                                </div>
                            </div>
                        </div>
                         <?PHP } ?>
                      
					</div>
				</div>
<!---->
          <?php 
$tampil2="select * from bw_produk WHERE idkategori='$idkategori'";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
?>
				<div class="text-center">
					<div class="pagination">
				<?php 
				  if($halaman > 1){
	$prev=$halaman-1;
				  ?>
                <a href="<?PHP echo($defaulturl)?>halkategori/<?PHP echo($halaman-1) ?>/<?PHP echo($idkategori)  ?>" class="prevPage"><i class="fa fa-angle-left"></i></a> 
                <?php }else{ ?>
                <a href="#" class="prevPage"><i class="fa fa-angle-left"></i></a>
                <?php } ?>
						<?php
					for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
					?>
                <a href="<?PHP echo($defaulturl.halkategori."/".$i."/$idkategori") ?>"><?PHP echo"$i"; ?></a>
                <?php }else{ ?>
               <a href="<?PHP echo($defaulturl.halkategori."/".$i."/$idkategori") ?>" class="pagActive"><?PHP echo"$i"; ?></a>
                <?php } ?>
                
                
						<?php 
					// Link kehalaman berikutnya (Next)
if($halaman < $jmlhalaman){
	$next=$halaman+1;
					?>
                <a href="<?PHP echo($defaulturl)?>halkategori/<?PHP echo($halaman+1) ?>/<?php echo($idkategori) ?>" class="nextPage">
                <i class="fa fa-angle-right"></i></a>
                <?php }else{ ?>
                <a href="#" class="nextPage"><i class="fa fa-angle-right"></i></a>
                <?php } ?>
					</div>
				</div>
				
			</div>
		</div>

	</div>