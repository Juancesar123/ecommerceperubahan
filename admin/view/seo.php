<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="seo" action="seo.php">
        <input type="hidden" name="mode" value="seo">
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
              <label class="col-md-3 col-xs-12 control-label">Title</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <textarea class="form-control" rows="5" name="title"><?PHP echo $title; ?></textarea>
                </div>
             <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['title']) ? $error['title'] : '';  ?>
             </span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Keyword </label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                 <textarea class="form-control" rows="5" name="keyword"><?PHP echo $keyword; ?></textarea>
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['keyword']) ? $error['keyword'] : '';  ?></span> </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Description</label>
              <div class="col-md-8 col-xs-12">
                <textarea class="form-control" rows="5" name="description"><?PHP echo $description; ?></textarea>
              </div>
              <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['description']) ? $error['description'] : '';  ?></span> </div>
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