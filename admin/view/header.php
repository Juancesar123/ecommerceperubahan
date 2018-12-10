<!DOCTYPE html>
<html lang="en">
<head>
<!-- META DATA-->
<title><?PHP echo $page_title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- END DATA -->

<!-- CSS INCLUDE -->
<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css">
<!-- EOF CSS INCLUDE -->

<script type="text/javascript">
var refresh;
function cancelRefresh(){
  if(refresh){
    clearTimeout(refresh);
    refresh=false;
  }
}

function refresh(timeoutPeriod){
  refresh = setTimeout(function(){window.location.reload(true);},timeoutPeriod);
}
window.ononline=refresh(3600000);
</script>
</head>

<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

<!-- START PAGE SIDEBAR -->
<div class="page-sidebar"> 
  <!-- START X-NAVIGATION -->
  <ul class="x-navigation">
    <li class="xn-logo"> <a href="index.htm">GoKatalog</a> <a href="#" class="x-navigation-control"></a> </li>
    <li class="xn-profile"> <a href="#" class="profile-mini"> <img src="assets\images\users\<?PHP echo($_SESSION['photo']) ?>" alt="<?PHP echo($_SESSION['nama']) ?>"> </a>
      <div class="profile">
        <div class="profile-image"> <img src="assets\images\users\<?PHP echo($_SESSION['photo']) ?>" alt="<?PHP echo($_SESSION['nama']) ?>"> </div>
        <div class="profile-data">
          <div class="profile-data-name"><?PHP echo($_SESSION['nama']) ?></div>
          <div class="profile-data-title"></div>
          <div class="profile-controls"> 
          <a href="gantipassword.php" class="profile-control-left"><span class="fa fa-info"></span></a> 
          <a href="upload.php" class="profile-control-right"><span class="fa fa-picture-o"></span></a> </div>
        </div>
      </div>
    </li>
    <?PHP if($page_id =="dashboard"){ ?>
    <li class="active"> <a href="index.php"><span class="fa fa-desktop"></span><span class="xn-text">Dashboard</span></a></li>
    <?PHP }else{ ?>
    <li> <a href="index.php"><span class="fa fa-desktop"></span><span class="xn-text">Dashboard</span></a></li>
    <?PHP } ?>
    <?PHP if($page_id =="konten"){ ?>
    <li class="xn-openable active"> <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Katalog</span></a>
      <ul>
        <li><a href="kategori.php">Kategori</a></li>
        <li><a href="produk.php">Produk</a></li>
        <li><a href="page.php">Halaman</a></li>
        <li><a href="account-bank.php">Bank Pembayaran</a></li>
        <li><a href="jasa-pengiriman.php">Pengiriman</a></li>
      </ul>
    </li>
    <?PHP }else{ ?>
    <li class="xn-openable"><a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Katalog</span></a>
      <ul>
        <li><a href="kategori.php">Kategori</a></li>
        <li><a href="produk.php">Produk</a></li>
        <li><a href="page.php">Halaman</a></li>
        <li><a href="account-bank.php">Bank Pembayaran</a></li>
        <li><a href="jasa-pengiriman.php">Pengiriman</a></li>
      </ul>
    </li>
    <?PHP } ?>
    <?PHP if($page_id =="menu"){ ?>
    <li class="xn-openable active"> <a href="#"><span class="fa fa-list"></span> <span class="xn-text">Menu</span></a>
      <ul>
        <li><a href="menu.php">Menu</a></li>
      </ul>
    </li>
    <?PHP }else{ ?>
    <li class="xn-openable"><a href="#"><span class="fa fa-list"></span> <span class="xn-text">Menu</span></a>
      <ul>
        <li><a href="menu.php">Menu</a></li>
      </ul>
    </li>
    <?PHP } ?>
    <?PHP if($page_id =="media"){ ?>
    <li class="xn-openable active"> <a href="#"><span class="fa fa-picture-o"></span> <span class="xn-text">Media</span></a>
      <ul>
        <li><a href="banner.php">Banner</a></li>
        <li><a href="template.php">Template</a></li>
      </ul>
    </li>
    <?PHP }else{ ?>
    <li class="xn-openable"><a href="#"><span class="fa fa-picture-o"></span> <span class="xn-text">Media</span></a>
      <ul>
        <li><a href="banner.php">Banner</a></li>
        <li><a href="template.php">Template</a></li>
      </ul>
    </li>
    <?PHP } ?>
    <?PHP if($page_id =="setting"){ ?>
    <li class="xn-openable active"> <a href="#"><span class="fa fa-gear"></span> <span class="xn-text">Setting</span></a>
      <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="seo.php">Seo</a></li>
        <li><a href="facebook-pixel.php">Facebook Pixel</a></li>
        <li><a href="sosmed.php">Sosial Media</a></li>
        <li><a href="multics.php">Multi CS</a></li>
      </ul>
    </li>
    <?PHP }else{ ?>
    <li class="xn-openable"><a href="#"><span class="fa fa-gear"></span> <span class="xn-text">Setting</span></a>
      <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="seo.php">Seo</a></li>
        <li><a href="facebook-pixel.php">Facebook Pixel</a></li>
        <li><a href="sosmed.php">Sosial Media</a></li>
        <li><a href="multics.php">Multi CS</a></li>
      </ul>
    </li>
    <?PHP } ?>
    <?PHP if($page_id =="pengguna"){ ?>
    <li class="xn-openable active"> <a href="#"><span class="fa fa-group"></span> <span class="xn-text">Pengguna</span></a>
      <ul>
        <li><a href="pengguna.php">Data Pengguna</a></li>
      </ul>
    </li>
    <?PHP }else{ ?>
    <li class="xn-openable"><a href="#"><span class="fa fa-group"></span> <span class="xn-text">Pengguna</span></a>
      <ul>
        <li><a href="pengguna.php">Data Pengguna</a></li>
      </ul>
    </li>
    <?PHP } ?>
  </ul>
  <!-- ENDX-NAVIGATION --> 
</div>
<!-- END PAGE  --> 

<!-- PAGE CONTENT -->
<div class="page-content">

<!-- START X-NAVIGATION VERTICAL -->
<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
  
  <!-- TOGGLE NAVIGASI -->
  <li class="xn-icon-button"> <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a> </li>
  <!-- END TOGGLE NAVIGASI --> 

	<li><a href="../home.html" target="_blank"> Lihat Website</a> </li>
  
  <!-- SIGN OUT -->
  <li class="xn-icon-button pull-right"><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a></li>
  <!-- END SIGN OUT --> 
  
</ul>

<!-- START -->
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active"><?PHP echo"$page_title"; ?></li>
</ul>
<!-- END --> 