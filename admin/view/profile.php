<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="profile" action="profile.php">
        <input type="hidden" name="mode" value="profile">
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
              <label class="col-md-3 col-xs-12 control-label">Nama Usaha/Toko </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="namatoko" value="<?PHP echo $namatoko; ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['namatoko']) ? $error['namatoko'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Slogan</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="slogan" value="<?PHP echo $slogan; ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['slogan']) ? $error['slogan'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Telpon</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa fa-tablet"></span></span>
                  <input type="text" class="form-control" name="telpon"  value="<?PHP echo $telp; ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['telpon']) ? $error['telpon'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Wa</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa fa-tablet"></span></span>
                  <input type="text" class="form-control" name="wa" value="<?PHP echo $wa; ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['hp']) ? $error['hp'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Email</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" name="email" value="<?PHP echo $email; ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['email']) ? $error['email'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Alamat</label>
              <div class="col-md-8 col-xs-12">
                <textarea class="form-control" rows="5" name="alamat"><?PHP echo $alamats; ?></textarea>
              </div>
              <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['alamat']) ? $error['alamat'] : '';  ?></span> </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Logo (jpg,png) :</label>
            <div class="col-md-8 col-xs-12">
              <input type="file" class="fileinput btn-primary" name="logo" id="logo" title="Upload Gambar">
              <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['logo']) ? $error['logo'] : '';  ?> </span><br><img src="../assets/images/<?PHP echo($logo) ?>"> </div><br>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Favicon (jpg,png) :</label>
            <div class="col-md-8 col-xs-12">
              <input type="file" class="fileinput btn-primary" name="favicon" id="favicon" title="Upload Favicon">
              <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['favicon']) ? $error['favicon'] : '';  ?> </span> <br><img src="../assets/images/<?PHP echo($favicon) ?>"> </div><br>
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