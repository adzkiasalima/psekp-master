<!doctype html>
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database PSEKP - User Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link rel="stylesheet" href="../../css/bootstrap.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.css" />
<link rel="stylesheet" href="../../css/login.css" />
</head>
 
<body>
<!-- Navigation Bar -->
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4 col-md-offset-4">
<h1 style="font-family:Ubuntu" class="text-center login-title">Login untuk masuk ke Database PSEKP</h1>
<div class="account-wall">
<img class="profile-img" src="http://i62.tinypic.com/ileoox.png"
alt="">
<?php
include_once "../db_connect.php";
?>
<form action="check_login.php" method="post" name="formweblogin" class="form-signin">
<input type="text" name="web_reg" class="form-control" placeholder="Akses Autoritas" required autofocus>
<input type="password" name="web_pwd" class="form-control" placeholder="Password" required>
<button name="btnweblogin" class="btn btn-lg btn-primary btn-block" type="submit">
Sign in</button>
<span class="clearfix"></span>
</form>

</div>
</div>
 
<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>