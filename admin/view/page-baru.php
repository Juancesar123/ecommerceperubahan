<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="pagebaru" action="page-baru.php">
        <input type="hidden" name="mode" value="pagebaru">
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
              <label class="col-md-3 col-xs-12 control-label">Judul Halaman: </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="judul">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['judul']) ? $error['judul'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Kata Kunci</label>
              <div class="col-md-8 col-xs-12">
                <input type="text" class="tagsinput" value="" name="katakunci">
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['katakunci']) ? $error['katakunci'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Isi Halaman</label>
              <br>
              <div class="col-md-12 col-xs-12">
                <textarea class="summernote" name="isipage"></textarea>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['isipage']) ? $error['isipage'] : '';  ?> </span> </div>
            </div>
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