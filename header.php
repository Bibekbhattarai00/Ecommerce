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
                        <li><a href="prod-page.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
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