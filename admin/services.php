<!-- <html>
<head>

</head>
</html> -->
<?php
echo "<title>Admin : Services </title>";
session_start();
if(isset($_SESSION['id']))
{
    $connection=mysqli_connect("localhost","root","","dbms");

    ?>

    <html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <body>

    <?php

    $sql="SELECT * FROM services;";
    $result=mysqli_query($connection,$sql);
    $resultcheck=mysqli_num_rows($result);

    //SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
    if($resultcheck>0)
    {
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Service ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Service Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Service Type</th>
            <th scope="col">Message</th>
            <th scope="col">Number Plate</th>
        </tr>
        </thead>


        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>

            <tr>
                <th scope="col"><?php echo $row['serv_id'];?></th>
                <td><?php echo $row['User_id'];?></td>
                <td><?php echo $row['svr_date'];?></td>
                <td><?php echo $row['amount'];?></td>
                <td><?php echo $row['desp'];?></td>
                <td><?php echo $row['msg'];?></td>
                <td><?php echo $row['vehicleno'];?></td>
            </tr>

            <?php
        }
        }
        else
        {

            echo "<h1><center>No Data Found!!!!!!</center></h1>";
        }
        ?>

    </table>
    <a href="home.php">
        <button class="btn-primary" value="logout">BACK</button>
    </a>
    </body>
    </html>
    <?php
}
else
{
    header('Location:login.php');
}
?>

