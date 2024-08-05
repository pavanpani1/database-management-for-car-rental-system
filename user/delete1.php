<?php

$connection=mysqli_connect("localhost","root","","dbms");
//echo "connected";

$query="DELETE FROM `sales` WHERE `user_id`='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
    if ($result)
    {
        echo "<script>alert('deleted successfully');
window.location.href='logout.php';
</script>";
    }


?>