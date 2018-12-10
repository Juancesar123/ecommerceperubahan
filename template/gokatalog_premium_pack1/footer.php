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
	<footer class="footer style1">
		<div class="stripe-1 stripe_1 foot_widgets">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="widget_container" align="center">
							<div class="widget_text clearfix">
								<p>
									<a href="index.html">
										<img src="<?php echo $defaulturl; ?>/assets/images/<?PHP echo($info['logo']) ?>" alt="logo"/>
									</a>
								</p>
								<p class="marginBottomNone">
									<?PHP echo($seo['mdes']) ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="widget_container" align="center">
							<h4>Pengiriman</h4>
							<div class="recent-posts clearfix">
								<ul>
								<?PHP 
									$pengiriman		=mysql_query("SELECT * FROM bw_pengiriman ORDER BY RAND() LIMIT 3");
									while($dtkirim		=mysql_fetch_array($pengiriman)){
								?>
									<li class="clearfix">
										
											<div  style="width: 50%; height: auto; text-align: center; padding: 1px; margin-left: auto; margin-right: auto">
												<img src="<?php echo $defaulturl; ?>/assets/pengiriman/<?PHP echo("$dtkirim[logo]") ?>" alt="<?PHP echo($dtkirim['namaexpedisi']) ?>">
											</div>
										
									</li>
									<?PHP } ?>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="widget_container" align="center">
							<h4>Pembayaran</h4>
							<div class="recent-posts clearfix">
								<ul>
								<?PHP 
									$bank				=mysql_query("SELECT * FROM bw_bank ORDER BY RAND() LIMIT 3");
									while($dtbank		=mysql_fetch_array($bank)){
								?>
									<li class="clearfix" style="text-align:center">
										<a href="<?PHP echo($defaulturl) ?>pembayaran.html" title="clik bank pembayaran">
											<div  style="width: 50%; height: auto; padding: 1px; margin: 0px; margin-left: auto; margin-right: auto">
												<img src="<?php echo $defaulturl; ?>/assets/bank/<?PHP echo("$dtbank[logo_bank]") ?>" alt="bank" style="margin-left: auto; margin-right: auto">
											</div>
										</a>
									</li>
									<?PHP } ?>
	
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="widget_container" align="center">
							<h4>Jaringan</h4>
							<div class="recent-posts clearfix">
								<ul>
									<li class="clearfix">
										<a href="<?PHP echo($bukalapak) ?>" target="_blank">
											<div  style="width: 50%; height: auto; text-align: center; padding: 1px; margin: 0px; margin-left: auto; margin-right: auto">
												<img src="<?php echo $defaulturl; ?>/assets/jaringan/bukalapak.jpg" alt="Bukalapak">
											</div>
										</a>
									</li>
									
									<li class="clearfix">
										<a href="<?PHP echo($tokopedia) ?>" target="_blank">
											<div  style="width: 50%; height: auto; text-align: center; padding: 1px; margin-left: auto; margin-right: auto">
												<img src="<?php echo $defaulturl; ?>/assets/jaringan/tokopedia.jpg" alt="Tokopedia" style="margin-left: auto; margin-right: auto">
											</div>
										</a>
									</li>
									
									<li class="clearfix">
										<a href="<?PHP echo($shopee) ?>" target="_blank">
											<div  style="width: 50%; height: auto; text-align: center; padding: 1px; margin-left: auto; margin-right: auto">
												<img src="<?php echo $defaulturl; ?>/assets/jaringan/shopee.jpg" alt="Shopee" style="margin-left: auto; margin-right: auto">
											</div>
										</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="bottom_bar">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<ul class="clearfix sepraterLi foterNav">
							<li><a href="pengiriman.html">Pengiriman</a></li>
							<li><a href="pembayaran.html">Pembayaran</a></li>
						</ul>
						<div class="copyright">&copy; 2017 <a href="<?PHP echo($defaulturl); ?>" target="_blank"><?PHP echo($namaweb) ?></a>
							<ul class="list-inline">
								<li><a href="#">All Rights Reserved</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5">
						<div class="social_links">
							<ul class="list-inline">
								<li>Sosmed</li>
								<li><a href="<?PHP echo("$fb") ?>" target="_blank"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$tw") ?>" target="_blank"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$googleplus") ?>" target="_blank"><i class="fa fa-google-plus-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$linkedin") ?>"><i class="fa fa-linkedin-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$instagram") ?>" target="_blank"><i class="fa fa-instagram"></i>&nbsp;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<a href="#" class="scroll_top"><i class="fa fa-chevron-up fa-2x"></i></a>
	
</div>
		</div>


<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/jquery.min.js"></script>
<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/bootstrap.min.js"></script>
<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/colorbox-min.js"></script>
<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/isotope.pkgd.min.js"></script>

<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
    
<!-- share this JS Files -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://ws.sharethis.com/button/buttons.js"></script>
<!--
<script type="text/javascript">stLight.options({publisher: "a7c8641b-6c3a-4b59-98ce-510413a4dab4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/js/lightslider.min.js"></script>
<script type="text/javascript" src="<?php echo $defaulturl.$template['sumberfile']?>/js/lightgallery.min.js"></script>
<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/jquery.matchHeight-min.js"></script>
<!-- theme custom JS Files -->
<script src="<?php echo $defaulturl.$template['sumberfile']?>/js/configuration.js"></script>
</body>
</html>