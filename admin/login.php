<?php
session_start();
if(!isset($_SESSION['id']))
{
    ?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <!------ Include the above in your HEAD tag ---------->

    <!DOCTYPE html>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8"/>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <link rel="stylesheet" type="text/css"
              href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">
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
        <style>
            body {
background-image: url("images1/background-image_admin.jpg");
}
        </style>
    </head>
    <body>


        <br>
        <br>
        <h1 align="center">ADMIN LOGIN</h1>
        <br>
        <br>


        <div><form action="login1.php" method="POST" autocomplete="on">
                <label>ADMIN_ID </label>
        <input type="text" name="id">
            <br>
            <br>
                <label>ADMIN_PASSWORD</label>
            <input type="password" name="password">
               <br>
               <br>
               <input type="submit" value="Submit">
               <br>
               <br>
               <button><a href="../index.php">Back</a></button>


     </form>
        </div>
           <style>
               label
               {
                   font-size: 20px;

               }
               input[type=text],input[type=password]
               {
                   width: 100%;
                   box-sizing: border-box;
                   padding: 12px 5px;
                   background: #1d3c41;
                   border-bottom: 1px dotted white;
                   outline: none;
                   border: none;
                   color: #ffffff;
                   border-radius: 5px;
                   margin: 5px;
                   font-weight: bold;
               }
               input[type=submit]
               {
                   width: 100%;
                   box-sizing: border-box;
                   padding: 10px 0;
                   outline: none;
                   border: none;
                   background:#1d3c41 ;
                   opacity: 0.7;
                   border-radius: 20px;
                   font-size: 20px;
                   color: #ffffff;
               }
               input[type=submit]:hover
               {
                   background: #003366;
                   opacity: 0.7;
               }
               div
               {
                   max-width: 450px;
                   border-radius: 20px;
                   margin: auto;
                   background: #4fa2c4;
                   box-sizing: border-box;
                   padding: 40px;
                   color: white;
                   margin-top: 20px;
               }
               button
               {
                   width: 100%;
                   box-sizing: border-box;
                   padding: 10px 0;
                   outline: none;
                   border: none;
                   background:#1d3c41 ;
                   opacity: 0.7;
                   border-radius: 20px;
                   font-size: 20px;
                   color: #ffffff;

               }
               h1
               {
                   text-align: center;
                   font-family: Elephant;
                   font-size: 30px;
               }


           </style>

    </body>
    </html>
<?php
    }
    else
        {
            echo "<script>window.location.href='home.php'</script>";
        }
    ?>

