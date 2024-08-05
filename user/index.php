<?php
session_start();
if(!isset($_SESSION['email']))
{
    ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration </title>
<!-- <style>
div {
  background-image: url('user/images/login_bg1.jpg');
}
</style> -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="formvalid.js"></script>
<script type="text/javascript">  
        (function () {  
            'use strict';  
            window.addEventListener('load', function () {  
                var form = document.getElementById('needs-validation');  
                form.addEventListener('submit', function (event) {  
                    if (form.checkValidity() === false) {  
                        event.preventDefault();  
                        event.stopPropagation();  
                    }  
                    form.classList.add('was-validated');  
                }, false);  
            }, false);  
        })();  
</script>  
    </head>
    <body style=" background-image: url('images/bg222.jpg');">
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
        <div class="container">
           
            <header>
                <h1>Login and Registration Form</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form  action="login.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                               
                                <div class="form-group">
                                    <label for="name">Your Email </label>
                                    <input type="email" class="form-control" placeholder="eg :abc@gmail.com" name="email" >
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Your Password</label>
                                    <input type="password" id="password"  class="form-control" placeholder="eg :X8df!90EO" name="password" >
                                </div>
                               <!-- <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Keep me logged in</label>
                                </p>-->
                              <p class="signin button"> 
									<input type="submit"  name="submit" value="login"/>
								</p>
                                
                                <p class="login button"> 
                                   <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
                                    <!-- <a href="http://localhost/KAR/admin/login.php">switch user</a> -->
								</p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form  action="data.php" autocomplete="on" method="POST" enctype="multipart/form-data">  
                                <h1> Sign up </h1> 
                                <div class="form-group">
                                <!--NAME-->
                                    <label for="name">Name</label>
                                   <input type="text" id="name" placeholder="Please Type Your Name"  name="name" aria-describedby="inputGroupPrepend">
                                   <p id="p1"></p>
                                  </div>
                                  
                                 <!--EMAIL-->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email"  placeholder="Please Type Your Valid EMail ID" name="email" >
                                  </div>
                                  <!--PHONE NUMBER-->
                                  
                                  <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" pattern="^\d{10}$" id="phone" placeholder=" Please enter 10 digit mobile number " name="phone"
                                     aria-describedby="inputGroupPrepend">
                                     <div class="invalid-feedback">  
                                            Please enter 10 digit mobile number.  
                                        </div>
                                  </div>

                                  <!--ADDRESS-->
                                  <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text"  placeholder="Eg: RNSIT, Channasandra, Bengaluru" name="address">
                                  </div>
                                  
                                <!--PASSWORD-->
                                <div class="form-group">
                                    <label for="password">Your password</label>
                                    <input type="password" id="password"   placeholder="Eg :X8df!90EO" name="password" >
                                </div>
                                <!--CONFIRM PASSWORD-->
                                <div class="form-group">
                                    <label for="password">Please confirm your passwords</label>
                                    <input type="password" id="password"   placeholder="Eg :X8df!90EO" name="cpassword" >
                                </div>
                                
                                <p class="signin button"> 
									<input type="submit" id="submit" name="submit" value="Sign up"/> 
								</p>

                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register">Log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php
}
else
{
    header('Location:home.php');
}
?>