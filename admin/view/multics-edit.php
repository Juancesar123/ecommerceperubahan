<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="multics-edit.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="mode" value="csedit">
       <input type="hidden" name="id" value="<?PHP echo($idcs_edit) ?>">
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
              <label class="col-md-3 col-xs-12 control-label">Nama CS</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="namacs" value="<?PHP echo($namacs_edit) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['namacs']) ? $error['namacs'] : '';  ?></span> </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">No WA</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="nowa" value="<?PHP echo($nowacs_edit) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['nowa']) ? $error['nowa'] : '';  ?></span> </div>
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