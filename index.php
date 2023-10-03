<?php
session_start();
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>
        The Ratna-park Store
    </title>

    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <a name="top"></a>
    <div class="header">
        <div class="container">
            <div class="navbar" id="navbar">
                <div class="logo">
                    <a href="index.php"><img src="logo/logo2.png"></a>
                </div>
                <nav class="navback" id="navback">
                    <ul id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="prod-page.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="#buttom">Contacts</a></li>
                        <li><a href="login.php">
                                <?php
                                if (!empty($_SESSION['loggedIn'])) {
                                    echo $_SESSION['username'];
                                } else {
                                    echo "Login";
                                }
                                ?>
                            </a></li>
                        <li><a href="#"><img src="logo/cart.png" width="40px" height="40px"></a></li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Fashion is the armour to survive the reality of everyday life<br>-BILL CUNNIGHAM</h1>
                    <P>Fashion is what you're offered four times a year by designers<br>And style is what you choose.
                    </P>
                    <a href="prod-page.html" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/6.png" height="400px" width="600px">
                </div>
            </div>
        </div>
    </div>
    <div class="featured">
        <h2 class="title">Featured products</h2>
        <div class="row">
            <div class="col-4"> <a href="products\pages\product1.html">
                    <img src="products\item1.jpg">
                    <h4>Summer Men 2 Piece Outfit,Gym Button-Down Short </h4>
                    <p class="price">Rs.1299</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <div class="col-4"> <a href="products\pages\product2.html">
                    <img src="products\watch.jpg">
                    <h4>Vincero Luxury Men's Chrono S Wrist Watch - Top Grain Italian Leather Watch Band - 43mm
                        Chronograph
                        Watch - Japanese Quartz Movement</h4>
                    <p class="price">Rs.125499</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <div class="col-4"><a href="products\pages\product3.html">
                    <img src="products\tshirt.jpg">
                    <h4>Calvin Klein Men's 100% Cotton T-Shirt Packs </h4>
                    <p class="price">Rs.1899</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <div class="col-4">
                <a href="products\pages\product4.html">
                    <img src="products\item3.jpg">
                    <h4>NIDIE Black Big and Tall Mens Shorts Below Knee Slim Fit Multi-Pocket Versatile
                        Twill Cargo Shorts
                    </h4>
                    <p class="price">Rs.1399</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <div class="col-4">
                <a href="products\pages\product5.html">
                    <img src="products\jeans.jpg">
                    <h4>Men's Ripped Jeans Destroyed Slim Fit Moto Biker Denim Pants Tapered Leg Stretch
                        Jean Trousers With
                        Holes</h4>
                    <p class="price">Rs.1099</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <div class="col-4">
                <a href="products\pages\product6.html">
                    <img src="products\item2.jpg">
                    <h4>Mens Shirts Casual Regular Fit Short Sleeve Vintage Stripe Cotton Golf Polo Shirts
                        Basic Designed
                    </h4>
                    <p class="price">Rs.1099</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
        </div>
        <h2 class="title">Latest products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products\pages\product7.html">
                    <img src="products\jacket.jpg">
                    <h4>Legendary Whitetails Men's Maplewood Hooded Shirt Jacket</h4>
                    <p class="price">Rs.6299</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <div class="col-4">
                <a href="products\pages\product8.html">
                    <img src="products\belt.jpg">
                    <h4>Columbia Men's Trinity Logo Belt-Casual Dress with Single Prong Buckle for Jeans Khakis</h4>
                    <p class="price">Rs.2299</p>
                    <a href="#" class="btn">Buy</a>
                </a>
            </div>
            <a href="products\pages\product9.html">
                <div class="col-4">
                    <img src="products\jordan6.jpg">
                    <h4>Nike Air Jordan 12 XII Playoff Men's Shoes Black/Varsity Red-White </h4>
                    <p class="price">Rs.48999</p>
                    <a href="#" class="btn">Buy</a>
            </a>
        </div>
    </div>
    </div>
    </div>
    <!--offer-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="products\guchi.png" class="offerimg">
                </div>
                <div class="col-2">
                    <p>Exclusive Flat 40% sale</p>
                    <h1>Gucci Jordaan crocodile loafer</h1>
                    <p class="small"> The Gucci Jordaan leather loafer <br>designed with an elongated toe and Horsebit
                        detail.<br>
                        Made with Brown crocodile leather. </p><br>
                    <P class="cross">Rs.540000</P> Rs.325000<br>
                    <a href="#" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>
    <a name="buttom"></a>
    <div class="footer">
        <div class="container">
            <div class="row-footer">
                <div class="footer-col-1">
                    <img src="logo/logo2.png">
                    <p>Known for Fashion</p>
                </div>
                <div class="footer-col-2">
                    <h3>Contact us</h3>
                    <div class="footer-data">
                        <ul>
                            <li>Phone:9876543210</li>
                            <li><a href="mailto:rstnaparkstore@google.com">Mail Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col-3">
                    <h3>our services</h3>
                    <div class="footer-data">
                        <ul>
                            <li>Men's complete fashion</li>
                            <li>Online & ofline store</li>
                            <li>Customer support</li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col-4">
                    <h3>Available brands</h3>
                    <div class="footer-data">
                        <ul>
                            <li>Addidas</li>
                            <li>calvien klien</li>
                            <li>guchi</li>
                            <li>luios vitton</li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
            <hr>
            <p class="rights">All Rights Reserved:Bibek Bhattarai</p>
            <div class="icon">
                <ul>
                    <li> <a href="#"><img src="logo/facebook.png"></a></li>
                    <li> <a href="#"><img src="logo/twitter.png"></a></li>
                    <li> <a href="#"><img src="logo/instagram.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <script src="script.js"></script>
    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");
        var navback = document.getElementById("navback");
        window.onscroll = function() {
            if (window.pageYOffset >= menu.offsetTop) {
                navbar.classList.add("sticky");
                navback.classList.remove("navback");
            } else {
                navbar.classList.remove("sticky");
                navback.classList.add("navback");
            }
        }
    </script>
</body>

</html>

//move_uploaded_files