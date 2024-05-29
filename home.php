<?php
session_start();
include("connect.php");
// $id ="";
// if(isset($_POST['hidden_input'])){
//     $id = $_POST['hidden_input'];

//     $query = "SELECT *FROM  product WHERE ID = $id";
//     $result = mysqli_query($conn,$query);
//     $image = mysqli_fetch_assoc($result);
//     $_SESSION['IMG'] = $image['Image'];
//     $_SESSION['price'] = $image['Price'];
//     header("location: payment.php");

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/media.css">
    <link rel="stylesheet" href="css/style.css">
    <title>E-SHOP</title>
</head>
<body>
    <nav id="Destop-nav">
        <div class="logo">
            <h1>Abdul's Ware</h1>

        </div>
        <form action="">
            <input type="search" name="search" placeholder="search">
            <input type="submit" name="submit">
        </form>
        <div id="media-icon" class="media-icon"onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="nav">
            <ul>
                
                <li><a href="#">About</a></li>
                <li> <a href="#">Contact</a><li>
                <li><a href="account.php">Account</a></li>
                <li> <a href="products.php">Products</a></li>
            
            </ul>
        </div>

        <div class="medianav">
            <ol>
                
                <li><a href=""  onclick="toggleMenu()">About</a></li>
                <li> <a href="" onclick="toggleMenu()">Contact</a><li>
                <li><a href="account.php" onclick="toggleMenu()">Account</a></li>
                <li> <a href="products.html" onclick="toggleMenu()">Prodects</a></li>
            
            </0l>

        </div>

        
    </nav>

        <!-- <nav id="media-nav"> 
            <div class="logo1">Abdul's ware</div>
            <div class="media-menu">
                <div class="media-icon" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="menu-link">
                    <li> <a href=""  onclick="toggleMenu()">About</a></li>
                    <li> <a href="" onclick="toggleMenu()">Contact</a><li>
                    <li><a href="" onclick="toggleMenu()">Account</a></li>
                    <li> <a href="" onclick="toggleMenu()">Prodects</a></li>
    
                </div>
            </div>
        </nav> -->
       

    <section class="slider" style="background-image: url('images/4k-boys.webp');">

        <div class="buy_from">
            <H1>BUY NOW</H1>
            <h4>From The Beast E-SHOPING SITE</h4>
        </div>

        <button class="shop"><a href="#grid" > SHOP NOW</a></button>
            
    </section>
    <div class="backimg">
        <img src="images/back.png" id="backbtn">
    </div>
    <h1 class="most">Most Requested</h1>
    <!-- <div class="scroll-container"> -->
        <section class="container">
            <div class="containers">
                <img src="images/4k smart.jpg" alt="short">
                <h5>SHORTS</h5>
                <h5>GHC150.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            <div class="containers">
                <img src="images/4k smart.jpg" alt="short">
                <h5>SHORTS</h5>
                <h5>GHC150.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            <div class="containers">
                <img src="images/4k smart.jpg" alt="short">
                <h4>4K Smart TV</h4>
                <h5>GHC1050.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            <div class="containers">
                <img src="images/bluetooth.jpg" alt="short">
                <h4>Bluetooth airpod</h4>
                <h5>GHC80.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            <div class="containers">
                <img src="images/Smartwatch.jpg" alt="short">
                <h4>Smartwatch</h4>
                <h5>GHC1000.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            <div class="containers">
                <img src="images/short.jpg" alt="short">
                <h4>SHORTS</h4>
                <h5>GHC150.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            <div class="containers">
                <img src="images/silver.jpg" alt="short">
                <h4>SHORTS</h4>
                <h5>GHC150.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            </div>
            <div class="containers">
                <img src="images/sleev.jpg" alt="short">
                <h4>SHORTS</h4>
                <h5>GHC150.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            </div>
            <div class="containers">
                <img src="images/short.jpg" alt="short">
                <h4>SHORTS</h4>
                <h5>GHC150.00</h5>
                <button class="purchase">PURCHASE</button>
            </div>
            </div>
        </section>
        <div class="nextimg">
            <img src="images/next.png" id="nextbtn">
        </div>
        <div class="delivery">
                        <h3>Fast and Secure Delivery</h3>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M960.1 258.4H245.8l-36.1-169H63.9v44h110.2l26.7 125 100.3 469.9 530 0.4v-44l-494.4-0.3-22.6-105.9H832l128.1-320.1z m-65 44L855.6 401H276.3l-21.1-98.6h639.9zM304.8 534.5L279.7 417h569.5l-47 117.5H304.8z" fill="#39393A" /><path d="M375.6 810.6c28.7 0 52 23.3 52 52s-23.3 52-52 52-52-23.3-52-52 23.3-52 52-52m0-20c-39.7 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.3-72-72-72zM732 810.6c28.7 0 52 23.3 52 52s-23.3 52-52 52-52-23.3-52-52 23.3-52 52-52m0-20c-39.7 0-72 32.2-72 72s32.2 72 72 72c39.7 0 72-32.2 72-72s-32.3-72-72-72zM447.5 302.4h16v232.1h-16zM652 302.4h16v232.1h-16z" fill="#E73B37" /><path d="M276.3 401l3.4 16-3.4-16z" fill="#343535" /></svg>
       </div>
        
    <!-- </div> -->

    <section class="grid"  id="grid">
        <div class="full-container" id="full">
            <div class="container-sell">
                <div class="sells">
                    <img src="images/hawaiian shirt.jpg" alt="hawaiian">
                    <h2>Hawaiian</h2>
                    <h3>GHC120.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>
                <div class="sells">
                    <img src="images/rouch polo.jpg" alt="hawaiian">
                    <h2>Rouch polo</h2>
                    <h3>GHC110.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>
           </div>
           <div class="container-sell">
                <div class="sells">
                    <img src="images/leriya.jpg" alt="hawaiian">
                    <h2>Leriya</h2>
                    <h3>GHC200.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>
                <div class="sells">
                    <img src="images/Green casual.jpg" alt="hawaiian">
                    <h2>Green casual</h2>
                    <h3>GHC110.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>   
           </div>
    

        </div>
        <div class="full-container" id="full">
            <div class="container-sell">
                <div class="sells">
                    <img src="images/fashtastic.jpg" alt="hawaiian">
                    <h2>Fashtastic</h2>
                    <h3>GHC150.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>
                <div class="sells">
                    <img src="images/ts.jpg" alt="hawaiian">
                    <h2>TS</h2>
                    <h3>GHC50.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>
           </div>
           <div class="container-sell">
                <div class="sells">
                    <img src="images/loose mens beach.jpg" alt="hawaiian">
                    <h2>mens beach</h2>
                    <h3>GHC200.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>
                <div class="sells">
                    <img src="images/casual.jpg" alt="hawaiian">
                    <h2>Green casual</h2>
                    <h3>GHC110.00</h3>
                    <button class="purchases">PURCHASE</button>
                </div>   
           </div>
    

        </div>

    </section>
    <!-- <section class="newproduct" >
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
                  <button onclick="hidden1(<?php echo $row['ID']?>)" name="PURCHASE" class="purchases"  >PURCHASE</button>
            </div>
            <?php
            }
            ?>

    </section> -->

    <footer>

        <h1>Abdul's Ware</h1>
        <div class="cont-info-upper-container">
            <div class="contact-info-container">
                <img src="images/icons8_Envelope_16.png" alt="gmail logo" class="icon contact-icon"/>
                <p><a href="mailto:abddulhaakharuna@gmail.com">Example@gmail.com</a></p>
            </div>
        </div>

        <p>You Can Contact as on </p>

        <div id="links"  class="display" >
            <div class="bars">
                <a href="https://web.facebook.com/thanos.jak"> <img src="images/icons8_Facebook_32.png" alt="facebook link"></a>
                <a href=""><img src="images/icons8_Instagram_32.png" alt="Instagram link"></a>
                <a href=""><img src="images/icons8_WhatsApp_32.png" alt="WhatsApp link"></a>
            </div>
        </div>

    </footer>
    <form id="hidden" method="post" action="home.php">
        <input type="hidden" id="hidden_input" name="hidden_input" value="">
    </form>

    <script src="js/script.js">
        
    </script>
</body>
</html>