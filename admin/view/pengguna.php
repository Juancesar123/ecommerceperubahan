<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12"> 
      <!-- START DEFAULT BUTTONS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?PHP echo"$page_title"; ?></h3>
          <ul class="panel-controls">
            <a href="pengguna-baru.php">
            <li>
              <button type="button" class="btn btn-success">Tambah Pengguna</button>
            </li>
            </a>
          </ul>
        </div>
        <div class="panel-body"> 
          <!--isi-->
          <table width="100%" class="table table-striped table-hover table-bordered matmix-dt">
            <thead>
              <tr style="font-weight:bold;">
                <th class="tc-center">Nama Pengguna</th>
                <th class="tc-center">Username</th>
                <th class="tc-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
			if(isset($penggunas)) foreach($penggunas as $pengguna){
			?>
            <tr>
              <td class="tdborder"><?PHP echo $pengguna['name'] ?></td>
              <td valign="top" class="tdborder"><?PHP echo $pengguna['username'] ?></td>
              <td valign="top" class="tdborder" align="center">
              <a href="?mode=delete&id=<?php echo $pengguna['username'] ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $pengguna['name']?> ?')">
              <button class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span></button></a></td>
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
