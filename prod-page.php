<?php
session_start();
require 'conn.php';
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
                    <li><a href="prod-page.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
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
    <!----products--->
    <div class="featured">
        <h2 class="title">All products</h2>
        <div class="row">
            <?php
            $result = mysqli_query($con, "SELECT * from product");

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-4" id=<?php echo "{'$row[id]'" ?>>
                    <?php echo $row['id']  ?>
                    <a href="products\pages\product3.html">
                        <?php echo "<img src='products/{$row['prodimg']}'>"; ?>

                        <h4><?php echo $row['name'] ?> </h4>
                        <p class="price">Rs.<?php echo $row['price'] ?></p>
                    </a>
                    <a href="#" class="btn">Buy</a>
                </div>
            <?php }
            ?>
        </div>

        <?php
        require 'footer.php';
