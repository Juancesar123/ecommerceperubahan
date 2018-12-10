<!-- PAGE CONTENT WRAPPER -->

<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body"> </div>
          <div class="panel-body">
            <div class="form-group" style="padding: 2%;background: #cccccc;">
      <!--install template-->
      
      <?php
	   if(isset($sukses)){
	  ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
        <strong><?php echo $sukses ?></strong> </div>
      <?php
	   }
	   ?>
      <p>File template dalam format zip:</p>
      <form action="install.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <input type="hidden" name="mode" value="add" />
        <center>
          <table width="100%">
            <tr>
              <td><input name="template" type="file" size="36"></td>
            </tr>
            <tr>
              <td align="center"><br/>
                <input class="btn btn-success" type="submit" name="submitBtn" value="Install"></td>
            </tr>
          </table>
        </center>
      </form>
           <!--install-->
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- END PAGE CONTENT WRAPPER --> 



<!-- form validation --> 
<script src="assets/js/validator/validator.js"></script> 
<script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required, date-picker', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script> 
<script type="text/javascript">
                        $(document).ready(function () {
                            $('#tgl').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>