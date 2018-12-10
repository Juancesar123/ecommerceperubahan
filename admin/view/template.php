<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="install.php">
            <li>
              <button type="button" class="btn btn-success">Install Template</button>
            </li>
            </a>
          </ul>
        </div>
        <div class="panel-body"> 
          <!--isi-->
          <table width="100%" class="table table-striped table-hover table-bordered matmix-dt">
            <thead>
              <tr style="font-weight:bold;">
                <th class="tc-center">Screenshots</th>
                <th class="tc-center">Pembuat</th>
                <th class="tc-center">Keterangan</th>
                <th class="tc-center">Status</th>
                <th class="tc-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
			if(isset($templates)) foreach($templates as $template){
			?>
            <tr>
              <td class="tdborder" align="center"><div align="center"> <img src="../template/<?php echo $template['gambar'] ?>" 
              width="360" title="<?php echo $template['namatemplate']?> " style='display: block'/> </div></td>
              <td align="center" valign="top" class="tdborder"><?php echo $template['pembuat'] ?></td>
              <td valign="top" class="tdborder"><?php echo $template['keterangan'] ?></td>
              <td valign="top" class="tdborder" align="center"><a href="prosesaktif.php?id=<?php echo $template['id'] ?>&aktif=<?php echo $template['aktif'] ?>">
                <input type="button" name="aktif" value="<?php echo $template['aktif'] ?>"  class="btn btn-success" style="width:100px; margin-left:5px; margin-right:5px;"/>
                </a>
                </td>
              <td valign="top" class="tdborder" align="center">
              <a href="?mode=delete&id=<?php echo $template['id'] ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $template['namatemplate']?> ?')">
               <button class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span></button></a>
                </td>
            </tr>
            <?php
            }
			?>
              <!--end-->
            </tbody>
          </table>
          <!----> 
        </div>
      </div>
    </div>
  </div>
</div>
