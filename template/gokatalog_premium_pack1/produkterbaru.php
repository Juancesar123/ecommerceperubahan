<div class="stripe">
  <div class="container">
    <h3 class="dashStyle">Produk Lainnya</h3>
    <div class="productsRow row">
      <?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon
FROM bw_produk,bw_kategori WHERE bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND() LIMIT 4");
while($data	=mysql_fetch_array($prp)){?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="productBox">
          <div class="productImage hoverStyle"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>">
            <?PHP if(!empty($data['status'])){ ?>
            <span class="new"><?PHP echo($data['status']) ?></span>
            <?PHP } ?>
            <div class="hoverBox">
              <div class="hoverIcons"> <a href="<?PHP echo($defaulturl.$data['urlproduk']) ?>" class="eye hovicon" title="Detail Produk"><i class="fa fa-folder-open" title="Detail Produk"></i></a> </div>
              <!-- ( HOVER ICONS END ) -->
              <a href="https://api.whatsapp.com/send?phone=<?PHP echo($nowa) ?>&text=Hai%20Admin%20Saya%20Mau%20
											Order%20%0A
											Nama%20Produk%20%3A%20<?PHP echo($data['namaproduk']) ?>%0A
											Kode%20Produk%20%3A%20<?PHP echo($data['kodeproduk']) ?>%0A
											Jumlah%20Produk%20%3A%20<?PHP echo('1') ?>%0A
											Nama%20Anda%20%3A%0A
											No%20HP%20Anda%20%3A%0A
											Email%20Anda%20%3A%0A
											Pembayaran%20%3A%0A
											Pengiriman%20%3A%0A
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="cartBTN2" title="Beli Produk Ini"><img src="<?php echo $defaulturl; ?>/assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli</a> </div>
          </div>
          <div class="productDesc"> <span class="product-title"><a href="<?php echo $defaulturl; ?><?PHP echo($data['urlproduk']) ?>"><?PHP echo($data['namaproduk']) ?></a></span>
            <p><a href="<?PHP echo($defaulturl.$data['seo']) ?>"><?PHP echo($data['nama_kategori']) ?></a></p>
            <?PHP if($data['diskon'] > 0){ ?>
            <strong class="productPrice"><del>Rp. <?PHP echo number_format($data['harga']) ?></del></strong> <strong class="big-sel-price">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?></strong>
            <?PHP }else{ ?>
            <strong class="productPrice">Rp. <?PHP echo number_format($data['harga']) ?></strong>
            <?PHP } ?>
          </div>
        </div>
      </div>
      <?PHP } ?>
    </div>
  </div>
</div>
