<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="banneredit" action="banner-edit.php">
        <input type="hidden" name="mode" value="banneredit">
        <input type="hidden" name="id" value="<?PHP echo"$idbanner"; ?>">
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
              <label class="col-md-3 col-xs-12 control-label">Judul : </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="judul" value="<?PHP echo"$judul"; ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['judul']) ? $error['judul'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Publish</label>
              <div class="col-md-8 col-xs-12">
                <select class="form-control select" name="publish">
                <?PHP
				if($publish =="Tidak"){
				?>
                  <option value="Tidak" selected>Tidak</option>
                  <option value="Ya">Ya</option>
                <?PHP }else{ ?>
                  <option value="Ya" selected>Ya</option>
                  <option value="Tidak">Tidak</option>
               <?PHP } ?>
                </select>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['publish']) ? $error['publish'] : '';  ?> </span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Link : </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="link" value="<?PHP echo"$link"; ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Keterangan</label>
              <div class="col-md-8 col-xs-12">
                <textarea class="form-control" rows="5" name="keterangan"><?PHP echo"$ket"; ?></textarea>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['keterangan']) ? $error['keterangan'] : '';  ?> </span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Thumbnail (jpg,png,gif) :</label>
              <div class="col-md-8 col-xs-12">
                <input type="file" class="fileinput btn-primary" name="gambar" id="gambar" title="Upload Gambar">
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['gambar']) ? $error['gambar'] : '';  ?> </span> </div>
            </div>
            <br>
            <div class="form-group">
              <div class="col-md-8 col-xs-12" style="text-align:center;"> 
                <img src="../assets/banner/<?PHP echo"$gambar"; ?>" class="img-responsive" style="margin-left: auto; margin-right: auto">
                <p></p>
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