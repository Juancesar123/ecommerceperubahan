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
        <div class="xt-feature-product">
          <div class="section-separator">
            <div class="xt-filter-nav">
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <h2><?PHP echo($judulutama) ?></h2>
              </div>
              <div class="clearfix"></div>
              <div class="col-xs-12 xt-top-hr">
                <hr class="xt-hr">
                <p>Untuk melakukan pembayaran silahkan Anda pilih Bank Pembayaran Anda untuk melakukan pembayaran : </p>
                <br>
                <br>
                <ul>
                  <?PHP
	$a		=mysql_query("SELECT * FROM bw_bank ORDER BY RAND()");
	while($data	=mysql_fetch_array($a)){
					?>
                  <li style="text-align: center; margin-bottom: 20px;">
                    <div class="col-xs-6" style="margin-bottom: 40px;"> <span><strong>Nama Bank : <?PHP echo($data['nama_bank']) ?></strong></span><br>
                      <span><strong>No. Rekening : <?PHP echo($data['norek']) ?></strong></span><br>
                      <span><strong>Atas Nama : <?PHP echo($data['pemilik']) ?></strong></span><br>
                      <br>
                      <span><img src="assets/bank/<?PHP echo($data['logo_bank']) ?>" alt="logo bank"></span> </div>
                  </li>
                  <?PHP } ?>
                </ul>
                <br>
                <br>
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
