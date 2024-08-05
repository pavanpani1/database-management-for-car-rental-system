<?php
echo "<title>Admin : Feedback </title>";
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

    $sql="SELECT * FROM contact;";
    $result=mysqli_query($connection,$sql);
    $resultcheck=mysqli_num_rows($result);

    //SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
    if($resultcheck>0)
    {
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">User Email</th>
            <th scope="col"> Message</th>

        </tr>
        </thead>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <th scope="col"><?php echo $row['Id'];?></th>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Message'];?></td>
               
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

