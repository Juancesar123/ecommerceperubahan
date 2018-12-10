<div class="stripe">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="listingBox">
          <h4 class="dashStyle2">Produk Terbaru</h4>
          <ul>
            <?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Terbaru' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND() limit 3");
while($data	=mysql_fetch_array($prp)){?>
            <li> <a href="<?PHP echo($defaulturl.$data['urlproduk']) ?>"> <span class="listingFrame"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>"> </span>
              <div>
              <div>
                <p><strong class="listTitle"><?PHP echo($data['namaproduk']) ?></strong></p>
                <?PHP if($data['diskon'] > 0){ ?>
                <strong class="cl_e85200">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?>&nbsp;<del>Rp. <?PHP echo number_format($data['harga']) ?></strong></del>
                <?PHP }else{?>
                <strong>Rp. <?PHP echo number_format($data['harga']) ?></strong>
                <?PHP } ?>
              </div>
              </a> </li>
            <?PHP } ?>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="listingBox">
          <h4 class="dashStyle2">Produk Terlaris</h4>
          <ul>
            <?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Terlaris' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND() limit 3");
while($data	=mysql_fetch_array($prp)){?>
            <li> <a href="<?PHP echo($defaulturl.$data['urlproduk']) ?>"> <span class="listingFrame"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>"> </span>
              <div>
              <div>
                <p><strong class="listTitle"><?PHP echo($data['namaproduk']) ?></strong></p>
                <?PHP if($data['diskon'] > 0){ ?>
                <strong class="cl_e85200">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?>&nbsp;<del>Rp. <?PHP echo number_format($data['harga']) ?></strong></del>
                <?PHP }else{?>
                <strong>Rp. <?PHP echo number_format($data['harga']) ?></strong>
                <?PHP } ?>
              </div>
              </a> </li>
            <?PHP } ?>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="listingBox">
          <h4 class="dashStyle2">Produk Pilihan</h4>
          <ul>
            <?PHP
$prp		=mysql_query("SELECT bw_produk.seo AS urlproduk,bw_produk.kodeproduk,bw_produk.gambar1,bw_produk.harga,bw_produk.namaproduk,bw_kategori.nama_kategori,bw_kategori.seo,bw_produk.status, bw_produk.diskon
FROM bw_produk,bw_kategori WHERE bw_produk.sebagai='Produk Pilihan' AND bw_kategori.idkategori=bw_produk.idkategori ORDER BY RAND() limit 3");
while($data	=mysql_fetch_array($prp)){?>
            <li> <a href="<?PHP echo($defaulturl.$data['urlproduk']) ?>"> <span class="listingFrame"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>"> </span>
              <div>
              <div>
                <p><strong class="listTitle"><?PHP echo($data['namaproduk']) ?></strong></p>
                <?PHP if($data['diskon'] > 0){ ?>
                <strong class="cl_e85200">Rp. <?PHP echo number_format($data['harga'] - $data['diskon']) ?>&nbsp;<del>Rp. <?PHP echo number_format($data['harga']) ?></strong></del>
                <?PHP }else{ ?>
                <strong>Rp. <?PHP echo number_format($data['harga']) ?></strong>
                <?PHP } ?>
              </div>
              </a> </li>
            <?PHP } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
