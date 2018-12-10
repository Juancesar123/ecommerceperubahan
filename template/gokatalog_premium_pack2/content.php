<!--
        |========================
        |  PRODUCT
        |========================
        -->

<section class="xt-feature-product">
  <div class="container">
    <div class="row section-separator">
      <div class="section-title">
        <h2>Produk Terbaru</h2>
        <span class="xt-title-bg"></span> </div>
      <div class="xt-each-feature">
        <?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon,bw_produk.wa, bw_produk.thumb1
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Terbaru' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND()");
while($data	=mysql_fetch_array($prp)){?>
        <div class="col-md-4 col-sm-4">
          <div class="xt-feature">
            <div class="product-img"> <a href="<?PHP echo($data['urlproduk']) ?>" title="Detail Produk"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" class="img-responsive" style="display: block; height: 100%; width: 100%;"></a> <span class="product-tag xt-uppercase"><?PHP echo($data['status']) ?></span> </div>
            <div class="product-info">
              <div class="product-title"> <span class="category xt-uppercase"><?PHP echo($data['nama_kategori']) ?></span> <span class="name xt-semibold"><?PHP echo($data['namaproduk']) ?></span> </div>
              <?PHP if($data['diskon'] > 0){ ?>
              <!--harga-->
              <div class="price-tag pull-right"> <span class="old-price"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
              <!---->
              <?PHP }else{ ?>
              <!--harga-->
              <div class="price-tag pull-right"> <span class="old-price"></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
              <!---->
              <?PHP } ?>
              <div class="xt-featured-caption">
                <div class="product-title"> <span class="category xt-uppercase"><?PHP echo($data['nama_kategori']) ?></span> <a href="<?PHP echo($data['urlproduk']) ?>" title="Detail Produk"><span class="name xt-semibold"><?PHP echo($data['namaproduk']) ?></span></a> </div>
                <?PHP if($data['diskon'] > 0){ ?>
                <!--harga-->
                <div class="price-tag pull-right"> <span class="old-price"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                <!---->
                <?PHP }else{ ?>
                <!--harga-->
                <div class="price-tag pull-right"> <span class="old-price"></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                <!---->
                <?PHP } ?>
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
                    <li><a href="<?PHP echo($data['urlproduk']) ?>" title="Detail Produk"><strong>Lihat Detail</strong></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?PHP } ?>
      </div>
    </div>
  </div>
</section>
<!--
        |========================
        |  Produk Per Kategori 
        |========================
        -->
<section class="product-category">
  <div class="container">
    <div class="row section-separator">
      <div class="section-title">
        <h2> Produk Per Kategori </h2>
        <span class="xt-title-bg"></span> </div>
      <div class="col-xs-12">
        <div class="xt-product-slide">
          <div class="xt-carousel owl-theme">
            <?PHP
					$sql		=mysql_query("SELECT * FROM bw_kategori ORDER BY RAND()");
					while($data	=mysql_fetch_array($sql)){
					?>
            <div class="xt-item"> <a href="<?PHP echo($defaulturl.$data['seo']) ?>"> <span><img src="<?PHP echo($defaulturl) ?>assets/kategori/<?PHP echo($data['icon']) ?>" alt="icon" style="width: 48px; margin-left: auto; margin-right: auto"></span> <span><?PHP echo($data['nama_kategori']) ?></span> </a> </div>
            <?PHP } ?>
          </div>
        </div>
      </div>
      <div class="xt-category-feature col-xs-12">
        <?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon,bw_produk.wa, bw_produk.thumb1
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai !='Produk Terbaru' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND() limit 12");
while($data	=mysql_fetch_array($prp)){?>
        <div class="col-md-4 col-sm-4">
          <div class="xt-feature">
            <div class="product-img"> <a href="<?PHP echo($data['urlproduk']) ?>" title="Detail Produk"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['thumb1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" class="img-responsive" style="display: block; height: 100%; width: 100%;"></a> <span class="product-tag xt-uppercase"><?PHP echo($data['status']) ?></span> </div>
            <div class="product-info">
              <div class="product-title"> <span class="category xt-uppercase"><?PHP echo($data['nama_kategori']) ?></span> <span class="name xt-semibold"><?PHP echo($data['namaproduk']) ?></span> </div>
              <?PHP if($data['diskon'] > 0){ ?>
              <!--harga-->
              <div class="price-tag pull-right"> <span class="old-price"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
              <!---->
              <?PHP }else{ ?>
              <!--harga-->
              <div class="price-tag pull-right"> <span class="old-price"></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
              <!---->
              <?PHP } ?>
              <div class="xt-featured-caption">
                <div class="product-title"> <span class="category xt-uppercase"><?PHP echo($data['nama_kategori']) ?></span> <a href="<?PHP echo($data['urlproduk']) ?>" title="Detail Produk"><span class="name xt-semibold"><?PHP echo($data['namaproduk']) ?></span></a> </div>
                <?PHP if($data['diskon'] > 0){ ?>
                <!--harga-->
                <div class="price-tag pull-right"> <span class="old-price"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                <!---->
                <?PHP }else{ ?>
                <!--harga-->
                <div class="price-tag pull-right"> <span class="old-price"></span> <span class="new-price xt-semibold">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></span> </div>
                <!---->
                <?PHP } ?>
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
                    <li><a href="<?PHP echo($data['urlproduk']) ?>" title="Detail Produk"><strong>Lihat Detail</strong></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?PHP } ?>
      </div>
    </div>
  </div>
</section>
