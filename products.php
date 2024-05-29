<?php
session_start();
include("connect.php");
$id ="";
if(isset($_POST['hidden_input'])){
    $id = $_POST['hidden_input'];

    $query = "SELECT *FROM  product WHERE ID = $id";
    $result = mysqli_query($conn,$query);
    $image = mysqli_fetch_assoc($result);
    $_SESSION['IMG'] = $image['Image'];
    $_SESSION['price'] = $image['Price'];
    header("location: payment.php");

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/product_media.css">
    <title>product</title>
</head>
<body>

    <header class="prheader">
        <div class="logo">
            <img src="images/logo.png" alt="logo">
        </div>

        <div class="pname">
            <h2>PRODUCTS</h2>
        </div>

        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="account.php">ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <div class="show">
        <div class="abt">
            <h1>Feel free to shop on our site. WE have one of the best man unifrom</h1>

            <h3>Shop now and you can get a Discount of 90% on your next product
            </h3>
        </div>
        <div class="img_abt"  style="background-image: url('images/4k-boys.webp');">
            <h1>BECOME A MEMBER</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tenetur asperiores reiciendis veritatis saepe sapiente sunt harum earum incidunt, atque exce</P>
        </div>
    </div>

    <div class="adidas">
        <img src="images/adi1.png" alt="adidas">
        <img src="images/adi2.png" alt="adidas">
    </div>

    <section class="most_popular">
        <h1>Most Popular</h1>

        <div class="contianer">
            <div class="shirt">
                <img src="images/t1.jpg" alt="t-shirt">

                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:150.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div>

            <div class="shirt">
                <img src="images/t2.jpg" alt="t-shirt">

                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:180.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div>
            
            <div class="shirt">
                <img src="images/t3.jpg" alt="t-shirt">

                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:150.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div>
            
            <div class="shirt">
                <img src="images/t4.jpg" alt="t-shirt">

                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:150.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div>
        </div>
    </section>

    <section class="old_product">
        <h1>Old Product</h1>
        <div class="old-pr">
            <?php
            $res = mysqli_query($conn,'SELECT *FROM product');
            while($row = mysqli_fetch_assoc($res)){
            ?>
            <div class="shirt">
                <img src="<?php echo  'photos/'. $row['Image']?>" alt="t-shirt">
                <h3><?php echo $row['ProductName'] ?> </h3>
                <h4>GHC <?php echo $row['Price']; ?></h4>
                <button onclick="hidden1(<?php echo $row['ID']?>)" name="PURCHASE" id="purchases"  >PURCHASE</button>
            </div>
            <?php 
            }

            ?>
            <!-- <div class="shirt">
                <img src="images/Green casual.jpg" alt="t-shirt">
                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:150.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div>
            <div class="shirt">
                <img src="images/hawaiian shirt.jpg" alt="t-shirt">
                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:150.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div>
            <div class="shirt">
                <img src="images/t3.jpg" alt="t-shirt">
                <h3>Nice Striped T-Shirt</h3>
                <h4>GHC:150.00</h4>
                <input type="submit" name="purchase" value="purchase" id="purchases">
            </div> -->

        </div>
    </section>
    <form id="hidden" method="post" action="products.php">
        <input type="hidden" id="hidden_input" name="hidden_input" value="">
    </form>
    
    <script>
        function hidden1(id){
            document.getElementById('hidden_input').value = id;
            document.getElementById('hidden').submit();
        }

    </script>
</body>
</html>