<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="account-bank-baru.php" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Nama Bank</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="nama">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['nama']) ? $error['nama'] : '';  ?></span> </div>
            </div>
            
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Cabang</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="cabang">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['cabang']) ? $error['cabang'] : '';  ?></span> </div>
            </div>
            
            
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">No. Rekening</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="rekening">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['rekening']) ? $error['rekening'] : '';  ?></span> </div>
            </div>
            
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Pemilik</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="pemilik">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['pemilik']) ? $error['pemilik'] : '';  ?></span> </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Logo Bank</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-cloud-upload"></span></span>
                  <input type="file" class="form-control" name="logo">
                </div>
                </div>
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