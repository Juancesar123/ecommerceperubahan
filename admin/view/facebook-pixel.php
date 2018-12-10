<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="facebookpixel" action="facebook-pixel.php">
        <input type="hidden" name="mode" value="facebookpixel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body"> </div>
          <div class="panel-body">
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Masukkan ID Facebook Pixel</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="code" value="<?PHP echo($code) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['code']) ? $error['code'] : '';  ?></span> </div>
            </div><Br><br>
            <p><strong>Catatan :</strong> <br>
            1. Ambil Code ID Facebook Pixel Saja<br>
            2. Lalu masukkan ID Tersebut kedalam Inputan<br>
            3. Secara Otomatis system akan bekerja disemua page Website Anda.
            </p>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary pull-right">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END PAGE CONTENT WRAPPER --> 