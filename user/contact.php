<?php
$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];
$connection=mysqli_connect("localhost","root","","dbms");
//echo "connected";
//$sql= "call getcontact(NULL,$name,$email,$message)";
mysqli_query($connection,"SET @name='".$name."'");
mysqli_query($connection,"SET @email='".$email."'");
mysqli_query($connection,"SET @message='".$message."'");
$result=mysqli_query($connection,"call getcontact(NULL,@name,@email,@message)");
if($result)
{
    echo"
      <script> alert('THANK YOU FOR YOUR FEEDBACK.');
      window.location.href='home.php'</script>";

}
else{
     echo "<script>alert('try again');</script>";
}
?>