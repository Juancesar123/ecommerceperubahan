<div class="xt-product-subpage">
  <div class="container">
    <div class="row">
      <!-- SIDEBAR -->
      <aside class="col-md-3 product-sidebar">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="xt-top-product">
          <h3>Produk Terbaru</h3>
          <div class="each-top-product">
            <?PHP 
								$a	=mysql_query("SELECT * FROM bw_produk WHERE sebagai='Produk Terbaru' limit 6 ");
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
      </aside>
      <div class="col-md-9">
        <!--end singlw item info -->
        <div class="xt-feature-product">
          <div class="section-separator">
            <div class="xt-filter-nav">
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label><?PHP echo($judul) ?></label>
              </div>
              <div class="clearfix"></div>
              <div class="col-xs-12 xt-top-hr">
                <hr class="xt-hr">
                <p><?PHP echo($isi) ?></p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <!---->
        </div>
      </div>
    </div>
  </div>
</div>
