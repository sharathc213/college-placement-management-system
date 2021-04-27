<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="company/img/favicon.png">

  <title>Company Login</title>

  <!-- Bootstrap CSS -->
  <link href="company/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="company/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="company/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="company/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="company/css/style.css" rel="stylesheet">
  <link href="company/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login-img3-body">

  <div class="container">
 

    <form class="login-form" action="index.html">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <center><span class="error_company" style="color:red;"></span></center>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" id="company_email" placeholder="Username" autofocus>
        
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" id="company_password" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="login(event,'company');">Login</button>
        <!-- <button class="btn btn-info btn-lg btn-block" type="button">Signup</button> -->
      </div>
    </form>
    
  </div>


</body>
<script src="./assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->

<script src='./assets/js/login.js'></script>

</html>
