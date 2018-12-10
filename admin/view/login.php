<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
<!-- META SECTION -->
<title>GoKatalog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
<!-- END META SECTION -->

<!-- CSS INCLUDE -->
<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css">
<!-- EOF CSS INCLUDE -->
</head>
<body>
<div class="login-container">
  <div class="login-box animated fadeInDown">
    <div class="login-logo" style="height:70px;"></div>
    <div class="login-body">
      <div class="login-title"><strong>Selamat Datang</strong>, Silahkan login</div>
        <form id="loginform" action="login.php?redirect=<?php echo urlencode($redirect) ?>" class="form-horizontal" method="post">
         <input type="hidden" value="login"  name="login"/>
        <div class="form-group">
          <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group">

          <div class="col-md-6">
            <button class="btn btn-info btn-block">Log In</button>
          </div>
        </div>
      </form>
    </div>
    <div class="login-footer">
      <div class="pull-left"> &copy; 2017 Gokatalog </div>
     
    </div>
  </div>
</div>
</body>
</html>
