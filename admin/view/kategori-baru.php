<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="kategori-baru.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="mode" value="kategoribaru">
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
                  <input type="text" class="form-control" name="kategori">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['kategori']) ? $error['kategori'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Sub Kategori Dari</label>
              <div class="col-md-8 col-xs-12">
                <select class="form-control select" name="subkategori">
                 <option selected value="">Pilih Subkategori</option>
                 <?PHP
					$sql		=mysql_query("SELECT * FROM bw_kategori WHERE subkategori_dari =''");
					while($a	=mysql_fetch_array($sql)){
					?>
               		<option value="<?PHP echo($a['idkategori']) ?>"><strong style="font-weight: bold"><?PHP echo($a['nama_kategori']) ?></strong></option>
               		<!--kategori tingkat2-->
              				<?php 
								$sql2	=mysql_query("SELECT * FROM bw_kategori WHERE subkategori_dari='$a[idkategori]'");
								while($b=mysql_fetch_array($sql2)){
							?>
               				<option value="<?PHP echo($b['idkategori']) ?>" style="margin-left: 20px;">- <?PHP echo($b['nama_kategori']) ?></option>
               		<!--end kategori tingkat2-->
              					
              							<!--kategori tingkat 3-->
              							<?PHP
										$sql3		=mysql_query("SELECT * FROM bw_kategori WHERE subkategori_dari='$b[idkategori]'");
										while($c	=mysql_fetch_array($sql3)){
										?>
             							<option value="<?PHP echo($c['idkategori']) ?>" style="margin-left: 40px;">- <?PHP echo($c['nama_kategori']) ?></option>
              							<!--end kategori tingkat 3-->		
               							<?PHP } ?>
               				<?PHP } ?>
               	 <?PHP } ?>
                </select>
               </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Gambar</label>
              <div class="col-md-8 col-xs-12">
               <input type="file" name="gambar" class="form-control"></div>
            </div>
            
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Icon</label>
              <div class="col-md-8 col-xs-12">
               <input type="file" name="icon" class="form-control"></div>
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