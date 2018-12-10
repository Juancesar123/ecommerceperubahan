<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <input type="hidden" name="mode" value="bankbaru">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body"> </div>
          <div class="panel-body">
            <form class="form-horizontal form-label-left" novalidate name="form1" method="post" action="jasa-pengiriman-edit.php" enctype="multipart/form-data">
              <input type="hidden" name="mode" value="edit" />
              <input type="hidden" name="id" value="<?php echo"$id"; ?>"/>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaexpedisi" style="text-align:left;">Nama Expedisi Pengiriman<span class="required">*</span> </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="namaexpedisi" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="namaexpedisi" placeholder="" required type="text" value="<?php echo"$namaexpedisi";?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar" style="text-align:left;">Gambar<span class="required">*</span> </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="gambar" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="gambar" placeholder="" type="file">
                </div><br><br><br>
                <img src="../assets/pengiriman/<?php echo"$logo"; ?>" style="display:block; width:200px; margin-left: 30px;">
              </div>
               
              <div class="ln_solid"></div>
              <div class="form-group">
          <div class="panel-footer">
            <button class="btn btn-primary pull-right">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>