<html lang="en">

<head>
    <title>ADMIN Panel _insert</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="navbar" id="navbar">
            <div class="logo">
                <img src="logo/logo2.png">
            </div>
            <nav class="navback" id="navback">
                <ul id="menu">
                    <li><a href="admin_edit.php">edit</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container">
        <form method="POST" action="admininsert.php">
            Name: <input type="text" placeholder="Product Name" name="Name" class="input-feild">
            <br>
            price: <input type="number" placeholder="price" name="price" class="input-feild">
            <br>
            product Image: <input type="text" placeholder="image name" name="prodimg" class="input-feild">
            <br>
            product Image1: <input type="text" placeholder="image name1" name="prodimgA" class="input-feild">
            <br>
            product Image2: <input type="text" placeholder="image name2" name="prodimgB" class="input-feild">
            <br>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</body>

</html>