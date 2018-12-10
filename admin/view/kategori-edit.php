<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="kategori-edit.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="mode" value="kategoriedit">
       <input type="hidden" name="idedit" value="<?PHP echo("$idkategori") ?>">
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
              <label class="col-md-3 col-xs-12 control-label">Nama Kategori</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="kategori" value="<?PHP echo("$nama_kategori") ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['kategori']) ? $error['kategori'] : '';  ?></span> </div>
            </div>
              <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Sub Kategori Dari</label>
              <div class="col-md-8 col-xs-12">
                <select class="form-control select" name="subkategori">
                 <option selected value="<?PHP echo"$subkategori"; ?>"><?PHP echo"$dtcok"; ?></option>
                 <?PHP
					  if(isset($kategories)) foreach($kategories as $kategori){
					  ?>
                    <option value="<?PHP echo $kategori['idkategori'] ?>"><?PHP echo $kategori['nama_kategori'] ?></option>
                  <?php } ?>
                </select>
               </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Gambar</label>
              <div class="col-md-8 col-xs-12">
               <input type="file" name="gambar" class="form-control"><br><br>
                <img src="../assets/kategori/<?PHP echo("$gambar") ?>" style="width: 100px;">
               </div>
            </div>
            <br><br>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Icon</label>
              <div class="col-md-8 col-xs-12">
               <input type="file" name="icon" class="form-control"><br><br>
               <img src="../assets/kategori/<?PHP echo("$icon") ?>" style="width: 100px;"></div>
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