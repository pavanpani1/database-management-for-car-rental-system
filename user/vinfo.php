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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>vehicle information</title>
</head>
<body>
<?php

$connection=mysqli_connect("localhost","root","","dbms");
$id=$_GET['id'];
$sql="SELECT * FROM vehicle WHERE veh_id='$id'";
//print_r($id);
$result=mysqli_query($connection,$sql);
if($result->num_rows>0) {
while ($row = mysqli_fetch_assoc($result)) {
?>
<center>
<div class="card"  align="center" style="width: 30rem;">
    <img src="../admin/images1/<?php echo $row['Image'];?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $row['veh_model_no'];?></h5>
       <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Mileage:<?php echo $row['mileage'];?></li>
        <li class="list-group-item">Horse Power:<?php echo $row['horsepower'];?></li>
        <li class="list-group-item">Fuel Capacity:<?php echo $row['fuel_capacity'];?></li>
        <li class="list-group-item">Vehicle Type:<?php echo $row['veh_type'];?></li>
        <li class="list-group-item">Model Number:<?php echo $row['veh_model_no'];?></li>
        <li class="list-group-item">Chassis Number:<?php echo $row['chassis_number'];?></li>
        <li class="list-group-item">Vehicle Manufacture:<?php echo $row['veh_manufacture'];?></li>
        <li class="list-group-item">Vehicle Price:<?php echo $row['Price'];?></li>
        <?php
        }
        }
        ?>
        <form method="POST" action="sales.php">
            <?php
            $sessionvar=$_SESSION['email'];
            $sql="SELECT * FROM user where User_email='$sessionvar'";
            $result=mysqli_query($connection,$sql);

            if($result->num_rows>0) {


            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
            <input type="text" name="veh_id" value="<?php echo $id ?>" hidden>
            <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" hidden>
            <br>



                <?php
            }
            }
            ?>
            <input type="submit" value="BOOK">

        </form>


    </ul>

    <div class="card-body">

        <a href="home.php" class="card-link">BACK</a>
    </div>
</div>
</center>


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









