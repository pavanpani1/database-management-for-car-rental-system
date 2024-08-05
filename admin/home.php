<?php
session_start();
if(isset($_SESSION['id'])) {
    ?>


    <!doctype html>
    <html lang="en">
    <head>
        <style>
            body {
background-image: url("images1/background-image_admin.jpg");
}

            div
            {
                max-width: 450px;
                border-radius: 20px;
                margin: auto;
                box-sizing: border-box;
                padding: 40px;
                background-color: white;
                margin-top: 17px;
             border: 3px dotted black;
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
        <!-- Required meta tags -->
      <!--  <meta charset="utf-8"-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <title>admin</title>

    </head>
    <body>
<div >

    <button type="button" class="btn btn-outline-primary"><a href="user.php">USERS' DATA</a></button>
    <br><br>
        <button type="button" class="btn btn-outline-danger"><a href="sales.php">SALES DATA</a></button>
        <br><br>
        <button type="button" class="btn btn-outline-success"><a href="feedback.php">FEEDBACK</a></button>
        <br><br>

        <button type="button" class="btn btn-outline-success"><a href="vehicle.php">ADD VEHICLES</a></button>
    <br><br>
        <button type="button" class="btn btn-outline-dark"><a href="services.php">SERVICES</a></button>
        <br><br>

        <button type="button" class="btn btn-outline-success"><a href="vehicleinformation.php">VEHICLES INFORMATION</a></button>
    <br><br>
    <button type="button" class="btn btn-outline-success"><a href="salesbackup.php">SALES BACKUP</a></button>

    <br><br>

    <!-- Optional JavaScript -->
<br><br>
    <button><a href="../user/logout.php">LOGOUT</a> </button>
   
</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


    </body>
    </html>
<?php

}
else{
    echo "
		<script>
		window.location.href='login.php';
		</script>";



}
?>