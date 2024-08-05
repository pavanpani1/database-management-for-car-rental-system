<?php
$id=$_POST['id'];
$password=$_POST['password'];

$connection=mysqli_connect("localhost","root","","dbms");
/*if($connection)
{
    echo "conncted";
}*/
$sql_e="SELECT * FROM `admin` WHERE admin_id='$id' AND Password='$password'";
$result=mysqli_query($connection,$sql_e);
if($result->num_rows>0)
{
    session_start();
    $_SESSION['id']=$id;
    echo "<script> alert('SUCCESSFUL');
		window.location.href='home.php';
		</script>";

}
else{
    echo"<script> alert('unsuccessful');
    window.location.href='login.php';
</script>";
}
?>