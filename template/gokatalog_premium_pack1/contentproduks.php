<div id="content" class="productPage">
		<div class="container">
			<div class="topSection">
				<div class="breadcrumbRow clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-5 text-xs-center">
							<h2>SEMUA PRODUK</h2>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="breadcrumb">
								<ul class="clearfix text-right text-xs-center">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Semua Produk</a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="stripe">
				<div class="productsRow row isotope_cont">
				
				<?php $batas=16;
$halaman=$idhalaman;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}
// perintah minta data 
	$tampil="select * from bw_produk ORDER BY idproduk ASC limit $posisi,$batas";
	$hasil=mysql_query($tampil);
$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
	?>
					<div class="col-md-3 col-sm-6 col-xs-12 isotope-item">
						<div class="productBox">
							<div class="productImage hoverStyle">
								<a href="<?PHP echo($defaulturl.$data['seo']) ?>"><img alt="<?PHP echo($data['namaproduk'])?>" src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" style="display: block; width: 100%; height: auto;"></a>
								<div class="hoverBox">
									<div class="hoverIcons">
                                                <a href="<?PHP echo($defaulturl.$data['seo']) ?>" class="eye hovicon" title="Detail Produk"><i class="fa fa-folder-open" title="detail produk"></i></a>
                                               
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
                                    <div class="productDesc">
                                        <span class="product-title"><a href="<?php echo $defaulturl; ?><?PHP echo($data['seo']) ?>"><?PHP echo($data['namaproduk']) ?></a></span>
                                        <p><a href="<?PHP echo($data['seo']) ?>"><?PHP echo($data['nama_kategori']) ?></a></p>
                                        <?PHP if($data['diskon'] > 0){ ?>
                                        <strong class="productPrice"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></strong>
                                        <strong class="big-sel-price">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></strong><?PHP }else{ ?>
                                         <strong class="productPrice">Rp. <?PHP echo number_format($data['harga']) ?></strong>
                                         <strong class="big-sel-price">-</strong>
                                         <?PHP } ?>
                                    </div>
						</div>
					</div>
<?PHP } ?>

				</div>
				<!---->
          <?php 
$tampil2="select * from bw_produk";
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
                <a href="<?PHP echo($defaulturl.all."/".$prev."/produk.html") ?>" class="prevPage"><i class="fa fa-angle-left"></i></a> 
                <?php }else{ ?>
                <a href="#" class="prevPage"><i class="fa fa-angle-left"></i></a>
                <?php } ?>
						<?php
					for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
					?>
                <a href="<?PHP echo($defaulturl.all."/".$i."/produk.html") ?>"><?PHP echo"$i"; ?></a>
                <?php }else{ ?>
               <a href="<?PHP echo($defaulturl.all."/".$i."/produk.html") ?>" class="pagActive"><?PHP echo"$i"; ?></a>
                <?php } ?>
                
                
						<?php 
					// Link kehalaman berikutnya (Next)
if($halaman < $jmlhalaman){
	$next=$halaman+1;
					?>
                <a href="<?PHP echo($defaulturl.all."/".$next."/produk.html") ?>" class="nextPage">
                <i class="fa fa-angle-right"></i></a>
                <?php }else{ ?>
                <a href="#" class="nextPage"><i class="fa fa-angle-right"></i></a>
                <?php } ?>
					</div>
				</div>
				
			</div>
		</div>

	</div>