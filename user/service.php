<?php
session_start();
if(isset($_SESSION['email'])) {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="style3.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Service</title>
        <style>
            input[type=text],input[type=email],input[type=date]
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
            select
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


    </head>
    <body>

        <h1 align="center">SERVICE DETAILS</h1>
        <br>
        <br>
        <div>

  <form action="service1.php" method="POST" autocomplete="on">

               DATE: <input type="date"   value="<?php echo date('Y-m-d');?>" name="date" readonly>
                <br>
                <br>
                SERVICE TYPE:<select  id="branch" name="branch" onchange="setprice()">
                <option value="select">SELECT</option>
                    <option value="Safety Service">Safety Service</option>
                    <option value="Major Service">Major Service</option>
                    <option value="Premium Service">Premium Service</option>
                    <option value="Ultimate Service">Ultimate Service</option>
                </select>
                <br>
                <br>
                VEHICLE NUMBER:<input type="text" name="vehno" placeholder="KA 36 M 4582">
                <br>
                <br>
                AMOUNT:<input id="price" type="text" name="price" readonly >
                <br>
                <br>
                MESSAGE:<input id="msg" type="text" name="msg">
                <br>
                <br>
                <?php
                $connection=mysqli_connect("localhost","root","","dbms");
                $sessionvar=$_SESSION['email'];
                $sql="SELECT * FROM user where User_email='$sessionvar'";
                $result=mysqli_query($connection,$sql);

                if($result->num_rows>0) {


                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
                        <?php
                    }
                }
 ?>
                <input type="submit" value="submit">
                <br>
                <br>

                <button><a href="home.php" >BACK</a></button>



    </form>
            </div>

    <script>
            function  setprice()
            {
                var branch=document.getElementById("branch").value;
                if(branch=="Safety Service")
                {
                    document.getElementById("price").value=8000;
                }
                else if (branch=="Major Service")
                {
                    document.getElementById("price").value=12000;
                }
                else if (branch=="Premium Service")
                {
                    document.getElementById("price").value=20000;
                }
                else if (branch=="Ultimate Service")
                {
                    document.getElementById("price").value=40000;
                }

            }
        
    </script>




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
