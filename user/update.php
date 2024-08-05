<?php
session_start();
if(isset($_SESSION['email']))
{
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <style>
body {
  background-image: url('images/background-image_admin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Edit Profile</title>
    </head>
    <body>
    <?php

    $connection=mysqli_connect("localhost","root","","dbms");
       $id=$_GET['id'];
            $sql="SELECT * FROM user WHERE Id='$id'";
            $result=mysqli_query($connection,$sql);
            if($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>



                        <br>
                        <h1 >EDIT PROFILE</h1>
                        <br>


                        <form action="edit.php" method="POST" autocomplete="on">

                                <input type="text" name="id" value="<?php echo $id?>" hidden>
<div>
                                NAME<input type="text" name="name" value="<?php echo $row['User_name'];?>" disabled>
                                 <br>
                                EMAIL<input type="email" name="email" value="<?php echo $row['User_email'];?>" disabled>
                                <br>
                                PHONE<input name="phone" pattern="^\d{10}$"  title="10 digit number" type="text"  value="<?php echo $row['User_phone_no'];?>">
                                <br>
                                ADDRESS<input type="text" name="address" value="<?php echo $row['User_address'];?>">
                               <br>
                                <br>
                                <input type="submit" value="submit">
                                <br>
                                <br>

                                <button><a href="home.php">BACK</a> </button>
    <br>
    <br>
   <a href="delete1.php?id=<?php echo $row['id'];?>" >
            DELETE
        </a>


                    </form>


                    </div>



                    <?php
                }
            }
 ?>
    <style>
        input[type=text],input[type=email]
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
             margin-top: -20px;
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
        a
        {
            font-family: Elephant;
            font-size: 15px;
            color: white;
        }

    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
}
else{
    echo "<script>   window.location.href='index.php';</script>";

}
?>
