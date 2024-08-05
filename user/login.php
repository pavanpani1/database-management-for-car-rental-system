<?php
$email=$_POST['email'];
$password=$_POST['password'];
$connection=mysqli_connect("localhost","root","","dbms");
if($email!="" && $password!="") {
    $hashedpassword = hash("md5", $password);
    $sql_e = "SELECT * FROM `user` WHERE User_email='$email' AND  User_password='$hashedpassword'";
    $res_e = mysqli_query($connection, $sql_e);
//print_r($res_e);
    if ($res_e->num_rows > 0) {
        echo "
		<script>
		alert('LOGIN SUCCESSFULLY');
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
		alert('YOU ARE NOT A MEMBER');
		window.location.href='index.php#toregister';
		</script>";

    }

}
else{
    echo "
		<script>
		alert('FORM IS EMPTY ');
		window.location.href='index.php';
		</script>";
}
?>