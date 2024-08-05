<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($name!='' && $email!='' && $phone!='' && $address!='' && $password!='' && $cpassword!='') {
    if ($password == $cpassword) {
        $hashedpassword = hash('md5', $password);
        $connection = mysqli_connect("localhost", "root", "", "dbms");
        /*if($con)
        {
            echo "connected";
        }*/
        $query = "INSERT INTO `user`( `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password`)
        VALUES ('$name','$email','$address','$phone','$hashedpassword');";
        $result = mysqli_query($connection, $query);
        if ($result) {
            echo "
    <script>
    alert('REGISTRATION SUCCESSFUL');
          </script>";
            session_start();
            $_SESSION['email'] = $email;
            echo "
		<script>
		window.location.href='home.php';
		</script>";

        } else {
            echo "
    <script>
    alert('REGISTRATION FAILED');
   window.location.href='index.php';
    </script>";
        }
    } else {
        echo "
    <script>
    alert('INCORRECT PASSWORD ');
	window.location.href='index.php';
    </script>";
    }
}
else
{
    echo "<script> alert('form is empty');
             window.location.href='index.php';</script>";
}
}   
?>