<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="<?PHP echo($seo['mdes']) ?>">
<meta name="keywords" content="<?PHP echo($seo['mkey']) ?> "/>
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="id_ID" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?PHP echo($seo['mtitle']) ?>" />
<meta property="og:description" content="<?PHP echo($seo['mkey']) ?>" />
<meta property="og:url" content="<?PHP echo($geturl) ?>" />
<meta property="og:site_name" content="<?PHP echo($namaweb) ?>" />
<title><?PHP echo($judulutama) ?></title>
<link rel="shortcut icon" href="assets/images/<?PHP echo($info['favicon']) ?>" type="image/x-icon">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7cPlayfair+Display:400,400i,700,900" rel="stylesheet">
<!-- FONT ICONS -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- Custom Icon Font -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/fonts/flaticon.css">
<!-- Bootstrap-->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/bootstrap.min.css">
<!-- Fancybox-->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/jquery.fancybox.min.css">
<!-- Animation -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/animate.css">
<!-- owl -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/owl.css">
<!--flexslider-->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/flexslider.min.css">
<!-- selectize -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/selectize.css">
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css//selectize.bootstrap3.css">
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/jquery-ui.min.css">
<!--dropdown -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/bootstrap-dropdownhover.min.css">
<!-- mobile nav-->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/plugins/css/meanmenu.css">
<!-- COUSTOM CSS link  -->
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/assets/css/responsive.css">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?PHP echo("$code") ?>', {
em: 'insert_email_variable'
});
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?PHP echo("$code") ?>&ev=PageView&noscript=1"
/>
</noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!---------------------------------------------------->
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>
<!--Kode untuk mematikan fungsi klik kanan di blog-->
<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>
<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<!-- Kode melindungi artikel -->
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>
<!--------------------------------------------------------->
</head>
<script>
  fbq('track', 'Search');
</script>
<script>
  fbq('track', 'AddToCart');
</script>
<script>
fbq('track', 'ViewContent', {
currency: 'USD'
});
</script>
<body>
<header id="xt-home" class="xt-header">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="xt-language col-md-6 col-sm-6 col-xs-12">
          <div class="each-nav">
            <ul>
              <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Call Now : <?php echo($info['telp']) ?></a> </li>
              <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Whatsapp : +<?PHP echo($info['wa']) ?> </a> </li>
            </ul>
          </div>
        </div>
        <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
          <ul>
            <li><a href="<?PHP echo("$fb") ?>" target="_blank"><i class="fa  fa-2x fa-facebook-square"></i>&nbsp;</a></li>
            <li><a href="<?PHP echo("$tw") ?>" target="_blank"><i class="fa fa-2x fa-twitter-square"></i>&nbsp;</a></li>
            <li><a href="<?PHP echo("$googleplus") ?>" target="_blank"><i class="fa fa-2x fa-google-plus-square"></i>&nbsp;</a></li>
            <li><a href="<?PHP echo("$linkedin") ?>"><i class="fa fa-2x fa-linkedin-square"></i>&nbsp;</a></li>
            <li><a href="<?PHP echo("$instagram") ?>" target="_blank"><i class="fa fa-2x fa-instagram"></i>&nbsp;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="main-navigation">
    <nav class="navbar navbar-fixed-top nav-scroll">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span aria-hidden="true" class="icon"></span> </button>
            <a class="navbar-brand" href="index.html"> <img src="<?php echo $defaulturl; ?>/assets/images/<?PHP echo($info['logo']) ?>" alt="logo" class="img-responsive"></a> </div>
          <div class="collapse navbar-collapse" id="js-navbar-menu">
            <ul class="nav navbar-nav navbar-right ep-mobile-menu" id="navbar-nav">
              <li><a href="<?PHP echo($defaulturl) ?>home.html">Home</a></li>
              <?PHP
						$menu1		=mysql_query("SELECT * FROM bw_menu WHERE bagian='' OR bagian='custome' ORDER BY idmenu ASC");
						while($menu	=mysql_fetch_array($menu1)){
							$idmenu	=$menu['idmenu'];
							$bagian	=$menu['bagian'];
							////
							$select	=mysql_query("SELECT * FROM bw_menu WHERE bagian='$idmenu'");
							$menus	=mysql_fetch_array($select);
							$menuok	=$menus['menu'];
							if(empty($menuok)){
								if($bagian =='custome'){
								?>
              <li><a href="<?PHP echo($menu['url']) ?>" target="_blank"><?PHP echo($menu['menu']) ?></a></li>
              <?PHP
								}else{
							?>
              <li class="dropdown xt-drop-nav"><a href="<?PHP echo($defaulturl.$menu['url']) ?>"><?PHP echo($menu['menu']) ?></a></li>
              <?PHP
								}
							}else{
								?>
              <li class="dropdown xt-drop-nav"> <a href="<?PHP echo($defaulturl.$menu['url']) ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><?PHP echo($menu['menu']) ?></a>
                <ul class="dropdown-menu">
                  <?PHP 
										$sub		=mysql_query("SELECT * FROM bw_menu WHERE bagian='$menu[idmenu]'");
										while		($submenu=mysql_fetch_array($sub)){
										?>
                  <li><a href="<?PHP echo($defaulturl.$submenu['url']) ?>"><?PHP echo($submenu['menu']) ?></a></li>
                  <?PHP } ?>
                </ul>
              </li>
              <?PHP
							}
							
						}
						?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!--Mobile Menu-->
  <div class="main-color-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-3 left-menu-wrapper">
          <div class="xt-sidenav hidden-xs hidden-sm">
            <nav>
              <ul class="xt-side-menu">
                <li> <a href="#">Semua Kategori</a>
                  <ul class="xt-dropdown">
                    <?PHP 
												$kte	=mysql_query("SELECT * FROM bw_kategori WHERE subkategori_dari ='' ORDER BY nama_kategori ASC");
												while($k=mysql_fetch_array($kte)){
												?>
                    <?PHP
													$a		=mysql_query("SELECT * FROM bw_kategori WHERE subkategori_dari='$k[idkategori]'");
													$ad		=mysql_fetch_array($a);
													$ck		=$ad['idkategori'];
													if(!empty($ck)){
													?>
                    <li><a href="<?PHP echo($k['seo']) ?>" class="xt-nav-link" ><i><img src="<?PHP echo($defaulturl); ?>assets/kategori/<?PHP echo($k['icon']) ?>"></i><?php echo($k['nama_kategori']) ?></a>
                      <ul class="mega-menu">
                        <li>
                          <ul class="xt-single-mega">
                            <?PHP
														$bc		=mysql_query("SELECT * FROM bw_kategori WHERE subkategori_dari ='$k[idkategori]'");
														while($b=mysql_fetch_array($bc)){
														?>
                            <li><a href="<?PHP echo($defaulturl.$k['seo']) ?>"><?PHP echo($b['nama_kategori']) ?></a></li>
                            <?PHP } ?>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <?PHP }else{ ?>
                    <li><a href="<?PHP echo($defaulturl.$k['seo']) ?>" ><i><img src="<?PHP echo($defaulturl); ?>assets/kategori/<?PHP echo($k['icon']) ?>"></i><?php echo($k['nama_kategori']) ?></a></li>
                    <?PHP }
												} ?>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <form action="<?PHP echo($defaulturl) ?>pencarian/" class="searchform" method="post">
          <div class="col-md-8 col-sm-10 col-xs-12 xt-header-search">
            <div class="form-group xt-form search-bar  col-md-8 col-sm-8 col-xs-7 padding-right-o">
              <input type="text" name="search" class="form-control" placeholder="Pencarian" />
            </div>
            <div class="form-group xt-form xt-search-cat col-md-4 col-sm-4 col-xs-5 padding-left-o ">
              <div class="xt-select xt-search-opt">
                <select class="xt-dropdown-search select-beast">
                  <option>Semua Kategori</option>
                  <?PHP
										$kate		=mysql_query("SELECT * FROM bw_kategori ORDER BY nama_kategori ASC");
										while($row	=mysql_fetch_array($kate)){
										?>
                  <option><?PHP echo($row['nama_kategori']) ?></option>
                  <?PHP } ?>
                </select>
              </div>
              <div class="xt-search-opt xt-search-btn">
                <button type="submit" class="btn btn-primary btn-search"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
