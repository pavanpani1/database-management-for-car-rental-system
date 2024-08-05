<?php

$phone=$_POST['phone'];
$address=$_POST['address'];
$id=$_POST['id'];
$connection=mysqli_connect("localhost","root","","dbms");
/*if($connection)
{
    echo "connected";
}*/

$sql="UPDATE `user` SET `User_phone_no`='$phone' ,`User_address`='$address' WHERE id='$id'";
$result=mysqli_query($connection,$sql);
print_r($result);
if($result)
{
    echo"<script> alert('PROFILE EDITED SUCCESSFULLY');</script>";
    echo "<script>   window.location.href='home.php';</script>";

}
else{
    echo"<script> alert('FAILED. TRY AGAIN LATER');</script>";
    echo "<script>   window.location.href='home.php';</script>";

}



?>