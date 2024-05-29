<?php
include("connect.php");
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="logo">
        </div>

        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="products.php">PRODUCT</a></li>
            </ul>
        </nav>
    </header>

    <div class="card">
        <img src="images/paypal-logo.png" alt="Paypal">
        <img src="images/Master_Card-logo.png" alt="Master Card">
        <img src="images/visa-logo.png" alt="VISA">
    </div>

    <section class="payment">
        <div class="card_detail">
            <form action="" method="post">
                <div class="number">
                    <h4>Card Number</h4>
                    <p>Enter the 16-digit number on the card</p>
                    <input type="text" name="card_number" placeholder="3756 4558 2933 7756"><br>
                </div>
                <div class="number">
                    <h4>CVV Number</h4> Enter the 3 digit number on the card
                    <input type="number" name="cvv" placeholder="345">
                </div>
                <div class="number">
                    <H4>Expiry Date</H4> Enter the expiration date of the card
                    <input type="number" name="expiry">
                </div>
                <div class="number">
                    <H4>Password</H4>Enter your dynamic password 
                    <input type="password" name="pass">
                </div>
            </form>

            <div class="product_img">
                <img src=" <?php echo  'photos/'. $_SESSION['IMG']?>" alt="image">
                <h4>GHC:<?php  echo  $_SESSION['price']?></h4>
            </div>

        </div>
    </section>
    <div class="buy_cart">
        <input type="submit" value="BUY"><br>
        <a href="home.php" ><input type="submit" value="Return To Home" class="black"></>
    </div>
    
</body>
</html>
