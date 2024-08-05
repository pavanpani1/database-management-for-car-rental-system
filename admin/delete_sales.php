<?php

$connection=mysqli_connect("localhost","root","","dbms");
//echo "connected";

$query="DELETE FROM `sales` WHERE `sales_id`='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if ($result)
{
    echo "<script>alert('Deleted successfully');
window.location.href='sales.php';
</script>";
}


?>