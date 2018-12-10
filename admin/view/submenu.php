<div class="page-content-wrap"> 
  
  <!-- START PANELS WITH CONTROLS -->
  <div class="row">
    <div class="col-md-5"> 
      
      <!-- START PANEL WITH STATIC CONTROLS -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Buat Sub Menu Baru</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>
        </div>
        <div class="panel-body"> 
          <!---->
          <div class="row">
            <div class="col-md-12"> 
              <!-- START ACCORDION -->
              <div class="panel-group accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title" style="font-size:13px;"> <a href="#accOneColOne"> Page </a> </h4>
                  </div>
                  <div class="panel-body panel-body-open" id="accOneColOne"> 
                    <!--isi-->
                    <ul class="list-group border-bottom">
                      <?PHP 
					$b			=mysql_query("SELECT * FROM bw_page ORDER BY nama ASC") ;
					while($row	=mysql_fetch_array($b)){
					?>
                      <li class="list-group-item" style="margin-bottom:5px;"><?PHP echo"$row[nama]"; ?> <span class="badge badge-info"><a href="submenu.php?id=<?PHP echo"$_GET[id]"; ?>&mode=submenu&ok=<?PHP echo"$row[nama]"; ?>&seo=<?PHP echo"$row[seo]"; ?>" style="text-decoration:none; color:rgba(255,255,255,1.00);">+ Menu</a></span></li>
                      <?PHP } ?>
                    </ul>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <h4 class="panel-title" style="font-size:13px;"> <a href="#accOneColThree"> Kategori </a> </h4>
                  </div>
                  <div class="panel-body" id="accOneColThree"> 
                    <!--isi-->
                    <ul class="list-group border-bottom">
                      <?PHP 
					$b			=mysql_query("SELECT * FROM bw_kategori ORDER BY nama_kategori ASC") ;
					while($row	=mysql_fetch_array($b)){
					?>
                      <li class="list-group-item" style="margin-bottom:5px;"><?PHP echo"$row[nama_kategori]"; ?> <span class="badge badge-info"><a href="submenu.php?id=<?PHP echo"$_GET[id]"; ?>&mode=submenu&ok=<?PHP echo"$row[nama_kategori]"; ?>&seo=<?PHP echo"$row[seo]"; ?>" style="text-decoration:none; color:rgba(255,255,255,1.00);">+ Menu</a></span></li>
                      <?PHP } ?>
                    </ul>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <h4 class="panel-title" style="font-size:13px;"> <a href="#accOneCol4"> Custome Link </a> </h4>
                  </div>
                  <div class="panel-body" id="accOneCol4"> 
                    <!--isi-->
                    <form method="post" action="submenu.php">
                      <input type="hidden" name="mode" value="custome">
                      <input type="hidden" name="id" value="<?PHP echo $_GET['id']; ?>">
                      <input type="text" class="form-control" name="menu_custome" placeholder="masukkan link" required>
                      <br>
                      <input type="text" class="form-control" name="ok" placeholder="Nama Menu" required>
                      <br>
                      <input type="submit" name="submit" class="btn btn-info btn-block" value="+ Menu" style="width:20%;">
                    </form>
                  </div>
                </div>
              </div>
              <!-- END ACCORDION --> 
            </div>
          </div>
          <!----> 
        </div>
        <div class="panel-footer"> </div>
      </div>
      <!-- END PANEL WITH STATIC CONTROLS --> 
      
    </div>
    <div class="col-md-7"> 
      
      <!-- START PANEL WITH REFRESH CALLBACKS -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Data Menu</h3>
        </div>
        <div class="panel-body"> 
          <!-- LIST GROUP WITH BADGES -->
          <ul class="list-group border-bottom">
            <?PHP 
		  $a		=mysql_query("SELECT * FROM bw_menu WHERE idmenu='$_GET[id]'");
		  $rows		=mysql_fetch_array($a);
		  ?>
            <li class="list-group-item" style="margin-bottom:4px;"><?PHP echo"$rows[menu]"; ?>
              <?PHP
			  			$no		=1;
						$bc		=mysql_query("SELECT * FROM bw_menu WHERE bagian='$_GET[id]'");
						while($rowsc	=mysql_fetch_array($bc)){
						?>
            <li class="list-group-item" style="margin-bottom:4px; margin-left:30px;"><?PHP echo $rowsc['menu']; ?><span class="badge badge-danger"> <a href="menu.php?id=<?PHP echo"$rowsc[idmenu]"; ?>&mode=delete" style="text-decoration:none; color:rgba(251,251,251,1.00);">Hapus</a></span> </li>
            <?PHP $no++; } ?>
            </li>
          </ul>
          
          <!-- END LIST GROUP WITH BADGES --> 
        </div>
        <div class="panel-footer"> </div>
      </div>
    </div>
  </div>
  <!-- END PANELS WITH CONTROLS -->  
</div>
