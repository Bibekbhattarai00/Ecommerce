<?php
session_start();
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>
        The Ratna-park Store- Products
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!---google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,600;1,200&display=swap" rel="stylesheet">
    <!---google fonts-->
</head>

<body>
    <a name="top"></a>
    <div class="container">
        <div class="navbar" id="navbar">
            <div class="logo">
                <a href="index.html"><img src="logo/logo2.png"></a>
            </div>
            <nav class="navback" id="navback">
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="prod-page.html">Products</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#buttom">Contacts</a></li>
                    <li><a href="login.php"> <?php
                                                if (!empty($_SESSION['loggedIn'])) {
                                                    echo $_SESSION['username'];
                                                } else {
                                                    echo "Login";
                                                }
                                                ?></a></li>
                    <li><a href="#"><img src="logo/cart.png" width="40px" height="40px"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!---About--->
    <div class="about">
        <P>The Ratna-park store is a ecommerce website built as a project of fourth-Semester web-development.
            This website is developed using Html-5 Css3 and
            and JavaScript in front-end And php and mysqli in Back-end.This website only contains the front-end part of
            the website.
            This project is created by Bibek Bhattarai.
            I would like to thank my subject teacher Mrs.Deepika mam who gave us a real time project to extend our
            knowledge.
            Other than Dipika mam's help ,While building this project took reference from youtube(kelvin powell,Easy
            tutorials,web simplified),w3cschool,codepen and many more websites.
        </P>
    </div>
    <!---footer-->
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