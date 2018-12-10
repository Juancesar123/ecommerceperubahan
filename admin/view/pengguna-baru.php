<!-- PAGE-->
<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="penggunabaru" action="pengguna-baru.php">
        <input type="hidden" name="mode" value="penggunabaru">
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
              <label class="col-md-3 col-xs-12 control-label">Nama Pengguna</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="nama_pengguna">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['nama_pengguna']) ? $error['nama_pengguna'] : '';  ?></span> </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Username</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="username">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['username']) ? $error['username'] : '';  ?></span> </div>
            </div>

			  <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Password</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="password" class="form-control" name="password">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['password']) ? $error['password'] : '';  ?></span> </div>
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
<!-- END PAGE CONTENT --> 