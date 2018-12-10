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
	<link href="<?php echo $defaulturl.$template['sumberfile']?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $defaulturl.$template['sumberfile']?>/css/default.css?ver=2112" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/revolution/css/settings.css">
	<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/revolution/css/layers.css">
	<link rel="stylesheet" href="<?php echo $defaulturl.$template['sumberfile']?>/revolution/css/navigation.css">
    <link href="<?php echo $defaulturl.$template['sumberfile']?>/css/mediaQueries.css?ver=2.9.2" rel="stylesheet">
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?PHP echo("$code") ?>&ev=PageView&noscript=1"
/></noscript>
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
<div id="wrapper">
	<header class="header style1">
		<div class="top_bar">
			<div class="container">
				<div class="col-md-6 top_left">
					<ul class="list-inline sepraterLi">
						<li><a href="#"><strong>Call : <?php echo($info['telp']) ?></strong></a></li>
						<li><a href="#"><strong>WA : +<?PHP echo($info['wa']) ?></strong></a></li>
					</ul>
				</div>
				
				<div class="col-md-6 top_right">
					<ul class="list-inline">
								<li><a href="<?PHP echo("$fb") ?>" target="_blank"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$tw") ?>" target="_blank"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$googleplus") ?>" target="_blank"><i class="fa fa-google-plus-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$linkedin") ?>"><i class="fa fa-linkedin-square"></i>&nbsp;</a></li>
								<li><a href="<?PHP echo("$instagram") ?>" target="_blank"><i class="fa fa-instagram"></i>&nbsp;</a></li>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="head_inner">
				<div class="logo">
					<a href="/">
						<img src="<?php echo $defaulturl; ?>/assets/images/<?PHP echo($info['logo']) ?>" alt="logo"/>
					</a>
				</div>
				
				<nav class="clearfix">
					<div class="mbmenu">
						<a href="#">Menu 
							<span class="lines"><span></span><span></span><span></span></span>
						</a>
					</div>
					
					<div class="main_menu_cont">
						<ul class="main_menu">
							<li class="mobSearch">
								<div class="nav_search">
									<form action="pencarian.php" method="post" class="searchform">
										<input type="text" placeholder="Pencarian ..." value="" name="search" class="field searchform-s">
										<button type="submit" class="submit"><i class="fa fa-search fa-fw"></i></button>
									</form>
								</div>
							</li>
							<li class="menu-item menu-item-has-children"><a href="<?PHP echo($defaulturl) ?>">Home</a></li>
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
								<li class="menu-item menu-item-has-children"><a href="<?PHP echo($menu['url']) ?>" target="_blank"><?PHP echo($menu['menu']) ?></a></li>
								<?PHP
								}else{
							?>
								<li class="menu-item menu-item-has-children"><a href="<?PHP echo($defaulturl.$menu['url']) ?>"><?PHP echo($menu['menu']) ?></a></li>
								<?PHP
								}
							}else{
								?>
								<li class="menu-item menu-item-has-children"><a href="<?PHP echo($defaulturl.$menu['url']) ?>"><?PHP echo($menu['menu']) ?></a>
									<ul class="sub-menu">
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
					
					<div class="nav_search mobile_none" style="float: right">
						<a href="#" class="searchBTN fa fa-search fa-fw"></a>
						<div class="mini-search">
							<div class="dropBox">
								<form action="<?PHP echo($defaulturl) ?>pencarian/" class="searchform" method="post">
									<input type="text" placeholder="Pencarian ..." value="" name="search" class="field searchform-s">
									<button type="submit" class="submit"><i class="fa fa-search fa-fw"></i></button>
								</form>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>