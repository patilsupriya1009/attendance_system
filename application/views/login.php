<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ispeedbiz</title>

    <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
   
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/css/custom.min.css") ?>" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  <style type="text/css">
    .loginform{
      background: #ffffff;
    position: relative;
    width: 20%;
    margin: 3% auto 0 auto;
    text-align: center;
    }
  </style>
  </head>

  <body class="login" style="background-image: url(banner.jpg);">
  
  <!-- Success Modal -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="success">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <center>
                <img class="img-responsive" src="<?php echo base_url("img/success.png") ?>" alt="Success" width="15%" id="ok"/>
                <img class="img-responsive" src="<?php echo base_url("img/fail.png") ?>" alt="Sorry" width="15%" id="fail"/>
                <h1 id="h2"></h1>
                <h2 id="h4"></h2>
              </center>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Success Modal -->
  
  <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content" style="padding-top: 8%;">
             
            <form method="post" action=<?php echo base_url()."Login/login"; ?> id="loginform">
            <!--   <h1>Login Form</h1> -->
            <div class="head-info" style="height: 50px;">
            <p style="color: #535457;font-weight:700">
                ADMIN LOGIN</p>
           </div>
           <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" style="margin: 0px" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
          <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" style="margin: 0px" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
              <div style="text-align: left;">
                <button type="submit" class='btn btn-success' name="login" id="login" style="border-radius: 0px;">Login</button>
                
              </div>
              <div class="clearfix"></div>
              <div class="separator">
<div class="clearfix"></div>
<br />
<div>
  <p>Copyright © 2016-17 Ispeed Of Thoughts Invention Private Limited. All rights reserved.</p>
</div>
</div>
</form>
</section>
</div>
</div>
</div>


