
<section class="xt-xt-single-product">
  <div class="container">
    <div class="row">
      <div class="col-md-3 visible-xs visible-sm padding-right-o"></div>
      <div class="col-md-9 col-md-offset-3 padding-o">
        <div class="xt-product-inner">
          <div class="col-md-5">
            <div role="tabpanel" class="tab-pane active xt-product-tab">
              <div class="tab-content xt-pro-small-image">
                <!-- Tab panel-->
                <div role="tabpanel" id="xt-pro-1" class="tab-pane fade active in"> <a class="grouped_elements" data-fancybox="gallery" href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_1) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_1) ?>" alt="gambar1" class="img-responsive"> </a> </div>
                <div role="tabpanel" id="xt-pro-2" class="tab-pane fade"> <a class="grouped_elements" data-fancybox="gallery" href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_2) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_2) ?>" alt="gambar2" class="img-responsive"> </a> </div>
                <div role="tabpanel" id="xt-pro-3" class="tab-pane fade"> <a class="grouped_elements" data-fancybox="gallery" href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_3) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_3) ?>" alt="gambar3" class="img-responsive"> </a> </div>
                <div role="tabpanel" id="xt-pro-4" class="tab-pane fade"> <a class="grouped_elements" data-fancybox="gallery" href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_4) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_4) ?>" alt="gambar4" class="img-responsive"> </a> </div>
              </div>
              <!-- Nav tabs -->
              <ul id="tablist" class="xt-pro-thumbs-list" role="tablist">
                <li role="presentation"> <a href="#xt-pro-1" role="tab" data-toggle="tab" aria-expanded="false"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_1) ?>" alt="product thumbs"> </a> </li>
                <li role="presentation" class="img-responsive"> <a href="#xt-pro-2" role="tab" data-toggle="tab" aria-expanded="false"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_2) ?>" alt="product thumbs"> </a> </li>
                <li role="presentation"> <a href="#xt-pro-3" role="tab" data-toggle="tab" aria-expanded="true"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_3) ?>" alt="product thumbs"> </a> </li>
                <li role="presentation"> <a href="#xt-pro-4" role="tab" data-toggle="tab" aria-expanded="false"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_4) ?>" alt="product thumbs"> </a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-7">
            <div class="each-product-info">
              <h3><?PHP echo($$namaproduk) ?></h3>
              <span class="single-price"><b>Harga Net :</b> Rp. <?PHP echo number_format($hargaok) ?></span>
              <p><?PHP echo($des); ?></p>
              <div class="select-quantity">
                <input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
              </div>
              <div class="product-add-cart"> <a href="https://api.whatsapp.com/send?phone=<?PHP echo($nowa) ?>&text=Hai%20Admin%20Saya%20Mau%20
											Order%20%0A
											Nama%20Produk%20%3A%20<?PHP echo($namaproduk) ?>%0A
											Kode%20Produk%20%3A%20<?PHP echo($kodeproduk) ?>%0A
											Jumlah%20Produk%20%3A%20<?PHP echo('1') ?>%0A
											Nama%20Anda%20%3A%0A
											No%20HP%20Anda%20%3A%0A
											Email%20Anda%20%3A%0A
											Pembayaran%20%3A%0A
											Pengiriman%20%3A%0A
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="btn btn-fill" title="Beli Produk Ini"><img src="<?php echo $defaulturl; ?>/assets/images/wa.png" style="margin-right: 5px; width: 20px;" id="beli">Beli Sekarang</a> </div>
              <div class="product-additional-info">
                <ul>
                  <li><b>Sku:</b><?PHP echo($kodeproduk) ?></li>
                  <br>
                  <li><b>Category:</b><a href=""><?PHP echo($nkategori) ?></a></li>
                  <br>
                  <li><b>Berat :</b> <a href="#"><?PHP echo($berat) ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<div class="xt-product-description">
<div class="container">
<div class="row section-separator">
<aside class="col-md-3 product-sidebar">
  <div class="clearfix"></div>
  <div class="clearfix"></div>
  <div class="xt-top-product">
    <h3>Produk Terbaru</h3>
    <div class="each-top-product">
      <?PHP 
								$a	=mysql_query("SELECT * FROM bw_produk WHERE sebagai='Produk Terbaru' limit 10 ");
								while($data=mysql_fetch_array($a)){
								?>
      <div class="top-item"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" class="img-responsive">
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
    <div class="each-top-product">
      <?PHP 
								$a	=mysql_query("SELECT * FROM bw_produk WHERE sebagai='Produk Terlaris' limit 10 ");
								while($data=mysql_fetch_array($a)){
								?>
      <div class="top-item"> <img src="<?php echo $defaulturl; ?>/assets/produk/<?PHP echo($data['gambar1']) ?>" alt="<?PHP echo($data['namaproduk']) ?>" class="img-responsive">
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
</aside>
<div class="col-md-9">
<div class="xt-single-item-info">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs xt-single-item-tab" role="tablist" id="xt-product-dec-nav">
    <li role="presentation" class="active"> <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a> </li>
    <li role="presentation" class=""> <a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Informasi Lainnya</a> </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content xt-tab-content">
    <div role="tabpanel" class="tab-pane xt-pane xt-description fade in active" id="description">
      <p><?PHP echo($keterangan) ?></p>
    </div>
    <div role="tabpanel" class="tab-pane xt-pane fade" id="specification">
      <ul class="nav nav-tabs xt-single-item-tab" role="tablist" id="xt-product-dec-nav">
        <li role="presentation" class="">Warna  : <?PHP echo($warna) ?></li>
        <br>
        <li role="presentation" class="">Ukuran : <?PHP echo($ukuran) ?></li>
      </ul>
    </div>
  </div>
</div>
