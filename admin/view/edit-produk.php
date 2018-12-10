<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="editproduk" action="edit-produk.php">
        <input type="hidden" name="mode" value="edit">
		  <input type="hidden" name="id" value="<?PHP echo($idproduk) ?>">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body"> </div>
          <div class="panel-body">
                    <div class="item form-group">
           <label class="col-md-3 col-xs-12 control-label">WA CS</label>
             <div class="col-md-8 col-xs-12">
				 <select class="form-control select" name="wa" required>
				 	<option value="<?PHP echo("$wa") ?>"><?PHP echo("$wa") ?>&nbsp;<?PHP echo("$namacs") ?></option>
				 	<?PHP
					 $s=mysql_query("SELECT * FROM bw_multics WHERE wa_cs !='$wa' ORDER BY nama_cs ASC");
					 while($data=mysql_fetch_array($s)){
					 ?>
				 	<option value="<?PHP echo($data['wa_cs']) ?>"><?PHP echo($data['wa_cs']) ?>&nbsp;<?PHP echo($data['nama_cs']) ?></option>
				 	<?PHP } ?>
				 </select>
           <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error);  ?>
            </div>
         </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">SKU : </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="kode" autofocus  value="<?PHP echo($kodeproduk) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['kode']) ? $error['kode'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Nama Produk : </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="nama" value="<?PHP echo($namaproduk) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['nama']) ? $error['nama'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Kategori</label>
              <div class="col-md-8 col-xs-12">
                <select class="form-control select" name="kategori">
                  <option selected value="<?PHP echo($kategoriid) ?>"><?PHP echo($nama_kategori); ?></option>
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
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['kategori']) ? $error['kategori'] : '';  ?>
                </span> 
              </div>
            </div>
         <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Sebagai Produk</label>
             <div class="col-md-8 col-xs-12">
               <select class="form-control select" name="sebagai" required>
                   <option selected value="<?PHP echo($sebagai) ?>"><?PHP echo($sebagai) ?></option>
                   <option value="Produk Pilihan">Produk Pilihan</option>
                   <option value="Produk Terlaris">Produk Terlaris</option>
                   <option value="Produk Terbaru">Produk Terbaru</option>
                  </select>
            </div>
         </div>
         <div class="item form-group">
             <label class="col-md-3 col-xs-12 control-label">Status Produk<span class="required">*</span> </label>
             <div class="col-md-8 col-xs-12">
              <select class="form-control select" name="status">
                   <option value="<?PHP echo($status) ?>"><?PHP echo($status) ?></option>
                   <option value="Dijual">Dijual</option>
                   <option value="Baru">Baru</option>
                   <option value="Habis">Habis</option>
                   <option value="Promo">Promo</option>
                  </select>
            </div>
         </div>
           
        
         <div class="item form-group">
            <label class="col-md-3 col-xs-12 control-label">Harga<span class="required">*</span> </label>
             <div class="col-md-8 col-xs-12">
              <input id="harga" class="form-control col-md-8 col-xs-12" data-validate-length-range="3"  name="harga" placeholder="" required type="text" autocomplete="off" style="text-align: right" value="<?PHP echo($harga) ?>">
            </div>
         </div>
         <div class="item form-group">
             <label class="col-md-3 col-xs-12 control-label">Stock<span class="required">*</span> </label>
            <div class="col-md-8 col-xs-12">
              <input id="stock" class="form-control col-md-8 col-xs-12" data-validate-length-range="1"  name="stock" placeholder="" required type="text" autocomplete="off" style="text-align: right" value="<?PHP echo($stock) ?>">
            </div>
         </div>
         <div class="item form-group">
            <label class="col-md-3 col-xs-12 control-label">Berat<span class="required">*</span> </label>
            <div class="col-md-8 col-xs-12">
              <input id="berat" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="berat" placeholder="" required type="text" autocomplete="off" style="text-align: right" value="<?PHP echo($berat) ?>">
            </div>
         </div>
         <div class="item form-group">
            <label class="col-md-3 col-xs-12 control-label">Diskon<span class="required">*</span> </label>
            <div class="col-md-8 col-xs-12">
              <input id="diskon" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="diskon" placeholder="" required type="text" style="text-align: right" value="<?PHP echo($diskon) ?>">
            </div>
         </div>
         <div class="item form-group">
             <label class="col-md-3 col-xs-12 control-label">Ukuran</label>
            <div class="col-md-8 col-xs-12">
              <input id="ukuran" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="ukuran" placeholder="contoh: s,m,l" type="text" autocomplete="off" value="<?PHP echo($ukuran) ?>">
            </div>
         </div>
         <div class="item form-group">
            <label class="col-md-3 col-xs-12 control-label">Warna</label>
             <div class="col-md-8 col-xs-12">
              <input id="warna" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="warna" placeholder="contoh: merah,kuning,hijau" type="text" autocomplete="off" value="<?PHP echo($warna) ?>">
            </div>
         </div>
         
         <div class="item form-group">
           <label class="col-md-3 col-xs-12 control-label">Gambar 1</label>
             <div class="col-md-8 col-xs-12">
              <input id="gambar1" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="gambar1" type="file">
            </div>
         </div>
         
         <div class="item form-group">
            <label class="col-md-3 col-xs-12 control-label">Gambar 2</label>
             <div class="col-md-8 col-xs-12">
              <input id="gambar2" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="gambar2" type="file">
            </div>
         </div>
         
         <div class="item form-group">
            <label class="col-md-3 col-xs-12 control-label">Gambar 3</label>
             <div class="col-md-8 col-xs-12">
			<input id="gambar3" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="gambar3" type="file">
            </div>
         </div>
         
         <div class="item form-group">
           <label class="col-md-3 col-xs-12 control-label">Gambar 4</label>
             <div class="col-md-8 col-xs-12">
             <input id="gambar4" class="form-control col-md-7 col-xs-12" data-validate-length-range="3"  name="gambar4" type="file">
            </div>
         </div>
         

         
         <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea" style="text-align:left;">Descripsi Produk <span class="required">*</span></label> 
          </div>
              <div class="col-md-12 col-xs-12">
				  <textarea class="summernote" name="des"><?PHP echo($des) ?></textarea>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['des']) ? $error['des'] : '';  ?>
                </span> </div>
          
          </div>
          <div class="panel-footer" style="margin-right: 30px;">
            <button class="btn btn-primary">Simpan</button>
          </div><br><br>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END PAGE CONTENT WRAPPER --> 