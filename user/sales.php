<?php
$date=$_POST['date'];
$veh_id=$_POST['veh_id'];
$id=$_POST['id'];
print_r($date);
print_r($id);
//print_r($veh_id);
$connection=mysqli_connect("localhost","root","","dbms");
//echo "connected";
$query="INSERT INTO `sales`(`user_id`, `veh_id`, `order_date`) VALUES ('$id','$veh_id','$date');";
$result=mysqli_query($connection,$query);
if($result)
{
    echo "<script>alert('THANK YOU FOR BOOKING...');
window.location.href='home.php';</script>";
}
else
{
    echo "<script>alert('FAILED.PLEASE TRY AGAIN LATER.');
window.location.href='home.php';</script>";
}

?>