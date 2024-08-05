<?php
$date=$_POST['date'];
$branch=$_POST['branch'];
$vehno=$_POST['vehno'];
$price=$_POST['price'];
$msg=$_POST['msg'];
$id=$_POST['id'];
//print_r($id);
$connection=mysqli_connect("localhost","root","","dbms");
$query="INSERT INTO `services`(`svr_date`, `amount`, `desp`, `User_id`, `msg`, `vehicleno`) VALUES 
('$date','$price','$branch','$id','$msg','$vehno');";

$result=mysqli_query($connection,$query);
if($result)
{
    echo "<script>alert('THANK YOU.');
  window.location.href='home.php';</script>";
}
else{
    echo "<script>alert('TRY AGAIN.');
 </script>";
}
?>