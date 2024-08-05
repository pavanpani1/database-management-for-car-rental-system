<?php
if (isset($_POST['submit'])) {
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];
    $vman = $_POST['vman'];
    $vspec = $_POST['vspec'];
    $vcn = $_POST['vcn'];
    $vfc = $_POST['vfc'];
    $vmi = $_POST['vmi'];
    $vhp = $_POST['vhp'];
    $vprice = $_POST['vprice'];
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $target = "images1/" . $image;
    move_uploaded_file($temp, $target);

    // print_r();
    $connection = mysqli_connect("localhost", "root", "", "dbms");
    if ($vtype!= '' && $vmodel!= '' && $vman!= '' && $vspec!= '' && $vcn!= '' && $vfc!= '' && $vmi!= '' && $vhp!= '' && $vprice!= '' && $image!= '')
    {
        $query = "INSERT INTO `vehicle`(`veh_type`, `veh_manufacture`, `veh_model_no`, `veh_spec`, `chassis_number`, `fuel_capacity`, `mileage`, `horsepower`, `Image`,`Price`) 
      VALUES('$vtype','$vmodel','$vman','$vspec','$vcn','$vfc','$vmi','$vhp','$image','$vprice');";
        $result = mysqli_query($connection, $query);
        if ($result) {
            echo "<script>alert('success');
        window.location.href='home.php';
</script>";
        } else {
            echo "<script>alert('unsuccess');
            window.location.href='vehicle.php';</script>
";
        }
    }
    else{
        echo"<script>alert('form is empty.');
window.location.href='vehicle.php';</script>";
    }
}










?>