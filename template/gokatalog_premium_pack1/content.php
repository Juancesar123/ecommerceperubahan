
	<div id="content">
		<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">Produk Pilihan</h3>
				<div class="productsRow row">
                	<ul class="clearfix prodCarousel">
                	<?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon, bw_produk.wa, bw_produk.thumb1
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Pilihan' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND()");
while($data	=mysql_fetch_array($prp)){?>
						<li>
							<div class="col-xs-12">
                                <div class="productBox">
                                    <div class="productImage hoverStyle">
                                        <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" style="display: block; width: 100%; height: auto;">
                                        <?PHP if(!empty($data['status'])){ ?>
                                         <span class="sale"><?PHP echo($data['status']) ?></span>
                                         <?PHP } ?>
                                        <div class="hoverBox">
                                            <div class="hoverIcons">
                                                <a href="<?PHP echo($data['urlproduk']) ?>" class="eye hovicon" title="Detail Produk"><i class="fa fa-folder-open" title="detail produk"></i></a>
                                               
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
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="cartBTN2" title="Beli Produk Ini"><img src="assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli</a>
                                        </div>
                                    </div>
                                    <div class="productDesc">
                                        <span class="product-title"><a href="<?php echo $defaulturl; ?><?PHP echo($data['urlproduk']) ?>"><?PHP echo($data['namaproduk']) ?></a></span>
                                        <p><a href="<?PHP echo($data['seo']) ?>"><?PHP echo($data['nama_kategori']) ?></a></p>
                                        <?PHP if($data['diskon'] > 0){ ?>
                                        <strong class="productPrice"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></strong>
                                        <strong class="big-sel-price">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></strong><?PHP }else{ ?>
                                         <strong class="productPrice">Rp. <?PHP echo number_format($data['harga']) ?></strong>
                                         <?PHP } ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?PHP } ?>

                    </ul>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">PRODUK PER KATEGORI</h3>
				<div class="categoryRow row">
					<ul id="catCarousel" class="clearfix">
					<?PHP
					$sql		=mysql_query("SELECT * FROM bw_kategori ORDER BY RAND()");
					while($data	=mysql_fetch_array($sql)){
						$count	=mysql_query("SELECT COUNT(idproduk) AS jumlah FROM bw_produk WHERE idkategori='$data[idkategori]' ");
						$dt		=mysql_fetch_array($count);
						$jumpro	=$dt['jumlah'];
					?>
						<li>
							<div class="col-xs-12">
								<div class="categoryBox">
									<a href="<?PHP echo($defaulturl.$data['seo']) ?>">
										<div class="categoryImage">
											<img src="<?php echo $defaulturl; ?>/assets/kategori/<?PHP echo($data['gambar']) ?>" alt="<?PHP echo($data['nama_kategori']) ?>" style="display: block; width: 100%; height: 100%;">
											<div class="title"><?PHP echo($data['nama_kategori']) ?>
											<?PHP 
											if($jumpro > 0){
											?>
											<span><?PHP echo($jumpro) ?> Produk</span>
											<?PHP } ?>
											</div>
											
										</div>
									</a>
								</div>
							</div>
						</li>
					 <?PHP } ?>
					</ul>
				</div>
			</div>
		</div>
			
		<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">Produk Terbaru</h3>
				<div class="productsRow row">
					<ul class="clearfix prodCarousel">
                	<?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon, bw_produk.wa, bw_produk.thumb1
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Terbaru' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND()");
while($data	=mysql_fetch_array($prp)){?>
						<li>
							<div class="col-xs-12">
                                <div class="productBox">
                                    <div class="productImage hoverStyle">
                                        <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" style="display: block; width: 100%; height: auto;">
                                        <?PHP if(!empty($data['status'])){ ?>
                                         <span class="new"><?PHP echo($data['status']) ?></span>
                                         <?PHP } ?>
                                        <div class="hoverBox">
                                            <div class="hoverIcons">
                                                <a href="<?PHP echo($data['urlproduk']) ?>" class="eye hovicon" title="Detail Produk"><i class="fa fa-folder-open" title="detail produk"></i></a>
                                               
                                            </div><!-- ( HOVER ICONS END ) -->
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
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="cartBTN2" title="Beli Produk Ini"><img src="<?php echo $defaulturl; ?>/assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli</a>
                                        </div>
                                    </div>
                                    <div class="productDesc">
                                        <span class="product-title"><a href="<?php echo $defaulturl; ?><?PHP echo($data['urlproduk']) ?>"><?PHP echo($data['namaproduk']) ?></a></span>
                                        <p><a href="<?PHP echo($data['seo']) ?>"><?PHP echo($data['nama_kategori']) ?></a></p>
                                        <?PHP if($data['diskon'] > 0){ ?>
                                        <strong class="productPrice"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></strong>
                                        <strong class="big-sel-price">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></strong><?PHP }else{ ?>
                                         <strong class="productPrice">Rp. <?PHP echo number_format($data['harga']) ?></strong>
                                         <?PHP } ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?PHP } ?>

                    </ul>
				</div>
			</div>
		</div>
		
		
			<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">Produk Terlaris</h3>
				<div class="productsRow row">
					<ul class="clearfix prodCarousel">
                	<?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon, bw_produk.wa, bw_produk.thumb1
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Terlaris' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND()");
while($data	=mysql_fetch_array($prp)){?>
						<li>
							<div class="col-xs-12">
                                <div class="productBox">
                                    <div class="productImage hoverStyle">
                                        <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" style="display: block; width: 100%; height: auto;">
                                        <?PHP if(!empty($data['status'])){ ?>
                                         <span class="sale"><?PHP echo($data['status']) ?></span>
                                         <?PHP } ?>
                                        <div class="hoverBox">
                                            <div class="hoverIcons">
                                                <a href="<?PHP echo($data['urlproduk']) ?>" class="eye hovicon" title="Detail Produk"><i class="fa fa-folder-open" title="detail produk"></i></a>
                                               
                                            </div><!-- ( HOVER ICONS END ) -->
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
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="cartBTN2" title="Beli Produk Ini"><img src="assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli</a>
                                        </div>
                                    </div>
                                    <div class="productDesc">
                                        <span class="product-title"><a href="<?php echo $defaulturl; ?><?PHP echo($data['urlproduk']) ?>"><?PHP echo($data['namaproduk']) ?></a></span>
                                        <p><a href="<?PHP echo($data['seo']) ?>"><?PHP echo($data['nama_kategori']) ?></a></p>
                                        <?PHP if($data['diskon'] > 0){ ?>
                                        <strong class="productPrice"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></strong>
                                        <strong class="big-sel-price">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></strong><?PHP }else{ ?>
                                         <strong class="productPrice">Rp. <?PHP echo number_format($data['harga']) ?></strong>
                                         <?PHP } ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?PHP } ?>

                    </ul>
				</div>
			</div>
		</div>
		
	</div>