<?PHP
$ip      = $_SERVER['REMOTE_ADDR'];
$tanggal = date("Y-m-d-"); 
$waktu   = time(); 
// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
$s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
// Kalau belum ada, simpan data user tersebut ke database
if(mysql_num_rows($s) == 0){
  mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
} 
else{
  mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}

$pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
$totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
$hits             = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal"), 0); 
$totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
$tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
$bataswaktu       = time() - 300;
$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));
$path = "counter/";
$ext = ".png";
$tothitsgbr = sprintf("%06d", $tothitsgbr);
for ( $i = 0; $i <= 9; $i++ ){
	$tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i' style=border:none;>", $tothitsgbr);
}
$kemarin  = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
$kemarin1  ="SELECT * FROM statistik WHERE tanggal='$kemarin'";
$ex2	   =mysql_query($kemarin1);
$jumk		=mysql_num_rows($ex2);
////
?>
<!--------------------------------------------->

<footer class="xt-footer">
  <div class="container">
    <div class="section-separator">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="footer-widget footer-contact"> <img src="<?php echo $defaulturl ?>/assets/images/<?PHP echo($info['logo']) ?>" alt="logo" class="img-responsive">
            <ul>
              <li><i class="fa fa-mobile-phone"></i><a href=""><?PHP echo("$info[telp]"); ?></a></li>
              <li><i class="fa fa-envelope-o"></i><a href=""><?PHP echo("$info[email]"); ?></a></li>
              <li> <i class="fa fa-location-arrow"></i>
                <address>
                <?PHP echo("$info[alamat]"); ?>
                </address>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-widget" align="center">
            <h4>Pengiriman</h4>
            <ul>
              <?PHP 
									$pengiriman		=mysql_query("SELECT * FROM bw_pengiriman ORDER BY RAND() LIMIT 3");
									while($dtkirim		=mysql_fetch_array($pengiriman)){
								?>
              <li><a href=""><img src="<?php echo $defaulturl; ?>/assets/pengiriman/<?PHP echo("$dtkirim[logo]") ?>" alt="<?PHP echo("$dtkirim[namaexpedisi]") ?>" style="display: block; width: 50%;margin-left: auto; margin-right: auto"></a></li>
              <?PHP } ?>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-widget" align="center">
            <h4>Pembayaran</h4>
            <ul>
              <?PHP 
									$bank				=mysql_query("SELECT * FROM bw_bank ORDER BY RAND() LIMIT 3");
									while($dtbank		=mysql_fetch_array($bank)){
								?>
              <li><a href="<?PHP echo($defaulturl) ?>pembayaran.html"><img src="<?php echo $defaulturl; ?>/assets/bank/<?PHP echo("$dtbank[logo_bank]") ?>" alt="bank" style="display: block; width: 50%;  margin-left: auto; margin-right: auto"></a></li>
              <?PHP } ?>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-widget">
            <h4>Jaringan</h4>
            <ul>
              <li><a href="<?PHP echo("$bukalapak") ?>" target="_blank"> <img src="<?php echo $defaulturl; ?>/assets/jaringan/bukalapak.jpg" alt="Bukalapak" style="display: block; width: 50%; margin-left: auto; margin-right: auto"></a> </li>
              <li><a href="<?PHP echo("$tokopedia") ?>" target="_blank"> <img src="<?php echo $defaulturl; ?>/assets/jaringan/tokopedia.jpg" alt="Tokopedia" style="display: block; width: 50%; margin-left: auto; margin-right: auto"></a> </li>
              <li><a href="<?PHP echo($shopee) ?>" target="_blank"> <img src="<?php echo $defaulturl; ?>/assets/jaringan/shopee.jpg" alt="shopee" style="display: block; width: 50%; margin-left: auto; margin-right: auto"></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</footer>
<!--
        |========================
        |      Script
        |========================
        -->
<!-- jquery -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/bootstrap.min.js"></script>
<!-- mean menu nav-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/meanmenu.js"></script>
<!-- ajaxchimp -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/jquery.ajaxchimp.min.js"></script>
<!-- wow -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/wow.min.js"></script>
<!-- Owl carousel-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/owl.carousel.js"></script>
<!--flexslider-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/jquery.flexslider-min.js"></script>
<!--dropdownhover-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/bootstrap-dropdownhover.min.js"></script>
<!--jquery-ui.min-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/jquery-ui.min.js"></script>
<!--validator -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/validator.min.js"></script>
<!--smooth scroll-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/smooth-scroll.js"></script>
<!-- Fancybox js-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/jquery.fancybox.min.js"></script>
<!-- SELECTIZE-->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/js/standalone/selectize.js"></script>
<!-- init -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/assets/js/init.js"></script>
</body></html>