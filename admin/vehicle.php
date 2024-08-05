<?php
echo "<title>Admin : Add Vehicles </title>";
session_start();
if(isset($_SESSION['id']))
{
$connection=mysqli_connect("localhost","root","","dbms");

?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
    <style>
        label
        {
            font-family: "Arial Black";
            font-size: 10px;
            color: black;

        }
        input[type=text],input[type=password],input[type=file]
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
            max-width: 550px;
            border-radius: 20px;
            margin: auto;
            box-sizing: border-box;
            padding: 40px;
            color: white;
            margin-top: 20px;
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
        button:hover
        {
          background: #003366;
            opacity: 0.7;
        }
        h1
        {
            text-align: center;
            font-family: Elephant;
            font-size: 50px;
        }

    </style>
</head>
<body>
    <h1 align="center">Add Vehicles</h1>
<div>

<form action="vehicle1.php" method="POST" enctype="multipart/form-data">

    <label>Vehicle Type</label>
  <input type="text" name="vtype"  ><br>
    <label>Vehicle Model no</label>
       <input type="text" name="vmodel" ><br>
    <label>Vehicle Manufacture</label>
       <input type="text" name="vman"  ><br>
    <label>Vehicle Specification</label>
       <input type="text" name="vspec"  ><br>
    <label>Vehicle Chassis Number</label>
       <input type="text" name="vcn"  ><br>
    <label>Vehicle fuel capacity</label>
       <input type="text" name="vfc"  ><br>
    <label> Vehicle Mileage</label>
      <input type="text" name="vmi"  ><br>
    <label> Vehicle Horsepower</label>
      <input type="text" name="vhp"><br>
    <label>Vehicle Image</label>
       <input type="file" name="image"><br>
    <label>Vehicle Price</label>
       <input type="text" name="vprice"><br>
       <input type="submit"  name="submit" value="submit">
    <br><br>
       <button><a href="home.php">BACK</a></button>

</form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    <?php
}
else
{
    header('Location:login.php');
}
?>

