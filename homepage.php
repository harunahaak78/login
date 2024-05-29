<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <p style = "font-size: 20px; color:blue">
    hello <?php
    if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.*FROM users WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].''.$row['lastName'];
        }
    }
    ?>
    :)
</p>
    
</body>
</html>