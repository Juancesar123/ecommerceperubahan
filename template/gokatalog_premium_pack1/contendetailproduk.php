<div id="content" class="productDetail">
<div class="container">
  <hr class="productTop">
  <div class="stripe">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <ul id="product-slider" class="product-item-slider product-image">
          <li class="item hoverStyle" data-thumb="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_1) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_1) ?>" alt="gambar1">
            <div class="hoverBox">
              <div class="hoverIcons"> <a href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_1) ?>" class="eye hovicon"><i class="fa fa-expand expand-pic"></i></a> </div>
            </div>
          </li>
          <li class="item hoverStyle" data-thumb="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_2) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_2) ?>" alt="gambar2">
            <div class="hoverBox">
              <div class="hoverIcons"> <a href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_2) ?>" class="eye hovicon"><i class="fa fa-expand expand-pic"></i></a> </div>
            </div>
          </li>
          <li class="item hoverStyle" data-thumb="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_3) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_3) ?>" alt="gambar3">
            <div class="hoverBox">
              <div class="hoverIcons"> <a href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_3) ?>" class="eye hovicon"><i class="fa fa-expand expand-pic"></i></a> </div>
            </div>
          </li>
          <li class="item hoverStyle" data-thumb="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_4) ?>"> <img src="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_4) ?>" alt="gambar4">
            <div class="hoverBox">
              <div class="hoverIcons"> <a href="<?PHP echo($defaulturl) ?>/assets/produk/<?PHP echo($gambar_4) ?>" class="eye hovicon"><i class="fa fa-expand expand-pic"></i></a> </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="product-content">
          <h3 class="text-inherit cl_000000"><?PHP echo("$namaproduk") ?></h3>
          <div class="breadcrumb">
            <ul class="clearfix">
              <li><a href="home.html">Home</a></li>
              <li><a href="<?PHP echo($defaulturl) ?>all/1/produk.html">Produk</a></li>
              <li><?PHP echo("$namaproduk") ?></li>
            </ul>
          </div>
          <br>
          <br>
          <?PHP if($diskon > 0){ ?>
          <div class="productPrice">
            <h2 class="cl_000000">R<span style="text-transform: lowercase;">p</span>. <del><?PHP echo number_format($harga) ?></del>&nbsp;&nbsp;<strong style="color: crimson">R<span style="text-transform: lowercase;">p</span>. <?PHP echo number_format($hargaok) ?></strong></h2>
          </div>
          <?PHP }else{ ?>
          <div class="productPrice">
            <h2 class="cl_000000">R<span style="text-transform: lowercase;">p</span>. <?PHP echo number_format($harga) ?></h2>
          </div>
          <?PHP } ?>
          <br>
          <br>
          <div class="smallCategories">Kode Produk : <a href="#"><?PHP echo("$kodeproduk"); ?></a></div>
          <div class="smallCategories">Nama Produk : <a href="#"><?PHP echo("$namaproduk"); ?></a></div>
          <div class="smallCategories">Stok : <a href="#"><?PHP echo("$stok"); ?></a></div>
          <div class="smallCategories">Kategori : <a href="#"><?PHP echo("$nkategori"); ?></a></div>
          <div class="smallCategories">Berat : <a href="#"><?PHP echo("$berat"); ?></a></div>
          <br>
          <br>
          <p><?PHP echo("$des...") ?></p>
          <br>
          <br>
          <div class="productQuantity productFormOption"> <a href="https://api.whatsapp.com/send?phone=<?PHP echo($nowa) ?>&text=Hai%20Admin%20Saya%20Mau%20
											Order%20%0A
											Nama%20Produk%20%3A%20<?PHP echo($namaproduk) ?>%0A
											Kode%20Produk%20%3A%20<?PHP echo($kodeproduk) ?>%0A
											Jumlah%20Produk%20%3A%20<?PHP echo('1') ?>%0A
											Nama%20Anda%20%3A%0A
											No%20HP%20Anda%20%3A%0A
											Email%20Anda%20%3A%0A
											Pembayaran%20%3A%0A
											Pengiriman%20%3A%0A
											Alamat%20Pengiriman%20%3A%0A" target="_blank" class="cartBTN2" title="Beli Produk Ini">
            <button class="btn-custom-3"><img src="<?PHP echo($defaulturl) ?>/assets/images/wa.png" title="beli" style="margin-top: -5px;" id="beli"> Beli Sekarang</button>
            </a> </div>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class="stripe">
    <div class="product-details">
      <div class="tabs_container">
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"> <a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Descripsi</a> </li>
          <li role="presentation"> <a href="#add-info" aria-controls="add-info" role="tab" data-toggle="tab">Informasi Tambahan</a> </li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="desc"> <?PHP echo($keterangan); ?> </div>
          <div role="tabpanel" class="tab-pane" id="add-info">
            <p><strong>Ukuran: </strong></p>
            <?PHP echo($ukuran); ?>
            <p>&nbsp;</p>
            <p><strong>Warna:</strong></p>
            <?PHP echo($warna); ?>
            <p>&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
