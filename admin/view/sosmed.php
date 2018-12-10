<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
        </div>
        <div class="panel-body"> 
            <form class="form-horizontal form-label-left" novalidate name="form1" method="post" action="sosmed.php" enctype="multipart/form-data">
              <input type="hidden" name="mode" value="sosmed" />
              
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Facebook</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="facebook" value="<?PHP echo($facebook) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['facebook']) ? $error['facebook'] : '';  ?></span> </div>
            </div>
             
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Twitter</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="twitter" value="<?PHP echo($twitter) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['twitter']) ? $error['twitter'] : '';  ?></span> </div>
            </div>
              
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Linkedin</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="linkedin" value="<?PHP echo($linkedin) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['linkedin']) ? $error['linkedin'] : '';  ?></span> </div>
            </div>
              
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Instagram</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="instagram" value="<?PHP echo($instagram) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['instagram']) ? $error['instagram'] : '';  ?></span> </div>
            </div>
              
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Google+</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                  <input type="text" class="form-control" name="googleplus" value="<?PHP echo($googleplus) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['googleplus']) ? $error['googleplus'] : '';  ?></span> </div>
            </div>
              
              <br><br>
              <strong>JARINGAN MARKETPLACE</strong>
              
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Bukalapak</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-shopping-cart"></span></span>
                  <input type="text" class="form-control" name="bukalapak" value="<?PHP echo($bukalapak) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['bukalapak']) ? $error['bukalapak'] : '';  ?></span> </div>
            </div>
              
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Tokopedia</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-shopping-cart"></span></span>
                  <input type="text" class="form-control" name="tokopedia" value="<?PHP echo($tokopedia) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['tokopedia']) ? $error['tokopedia'] : '';  ?></span> </div>
            </div>
             
            <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Shopee</label>
              <div class="col-md-8 col-xs-12">
                <div class="input-group"> <span class="input-group-addon"><span class="fa fa-shopping-cart"></span></span>
                  <input type="text" class="form-control" name="shopee" value="<?PHP echo($shopee) ?>">
                </div>
                <span class="help-block" style="font-size:12px; color:red;"><?PHP echo($error['shopee']) ? $error['shopee'] : '';  ?></span> </div>
            </div>
              
              
              <div class="ln_solid"></div>
              <div class="form-group">
          <div class="panel-footer">
            <button class="btn btn-primary pull-right">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>