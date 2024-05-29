<?php
session_start();
include("connect.php");

if(isset($_POST['upload'])){
    $pname = $_POST['productname'];
    $price = $_POST['productprice'];
    $file = $_FILES['pimage']['name'];
    $tmpname = $_FILES['pimage']['tmp_name'];
    $folder = 'photos/'.$file;

    // Prevent SQL Injection using Prepared Statements
    $query = $conn->prepare("INSERT INTO product (Productname, Price, Image) VALUES (?, ?, ?)");
    $query->bind_param("sss", $pname, $price, $file);
    
    if($query->execute()){
        if(move_uploaded_file($tmpname, $folder)){
            echo "Uploaded";
        } else {
            echo "Error moving file to destination.";
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }

}

if(isset($_POST['delete'])){
    $productID = $_POST['delID'];
    $query =  "DELETE FROM product WHERE ID= '$productID'";
    $result = mysqli_query($conn,$query);
    if($result->num_rows>0){
        echo "Deleted";

    }else{
        echo "Not Deleted";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acc_style.css">
    <title>Account</title>
</head>
<body>

<header class="acc_head">
    <div class="logo">
        <h1>Abdul's Ware</h1>
    </div>

    <div class="acc_info">
        <h1><?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query = $conn->query("SELECT users.* FROM users WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].'  '.$row['lastName'];
                }
            }
            ?></h1>
        <img src="images/icons8_User_32.png" alt="profile">
    </div>

    <ul>
        <li> <a href="home.php">Home</a></li>
    </ul>
</header>

<section class="banner" style="background-image: url('images/4k-boys.webp');">
    <div class="profile">
        <img src="silk.jpg"  class="img_profile">
        <h2><?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query = $conn->query("SELECT users.* FROM users WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['email'];
                }
            }
            ?></h2>
    </div>
</section>

<section class="productinput">
    <h2>Adding Product</h2>
    <div class="add-carts">
        <form action="account.php" method="post" enctype="multipart/form-data">
            <input type="text" name="productname" placeholder="Enter Product Name"><br/>
            <input type="text" name="productprice" placeholder="Enter Product Price"><br/>
            <input type="file" name="pimage">
            <input type="submit" name="upload" value="Upload">
        </form>
    </div>
</section>

<div class="delete_form">
        <form action="account.php" method="post">
            <input type="text" name="delID"placeholder="Enter ID to Delete">
            <input type="submit" name="delete" value="Delete">
        </form>
</div>
       

<section class="cart_demo">
    <?php 
    $res = mysqli_query($conn,"SELECT * FROM product ");
    while($row = mysqli_fetch_assoc($res)){
    ?>
    <div class="cart">
        <div class="pic">
            <img src="<?php echo  'photos/'. $row['Image']; ?>"alt="image">
        </div>
        <h2><?php  echo $row['ProductName']; ?></h2>
        <h3>GHC <?php echo $row['Price']; ?></h3>
        <input type="submit" name="add-cart" value="ADD CARTS" class="send">
        <button class="purchases">PURCHASES</button>
    </div>
    <?php
    }
    ?>
</section>

</body>
</html>
