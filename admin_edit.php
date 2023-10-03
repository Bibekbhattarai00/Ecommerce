<html lang="en">

<head>
    <title>Admin panel -products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="navbar" id="navbar">
            <div class="logo">
                <img src="logo/logo2.png">
            </div>
            <nav class="navback" id="navback">
                <ul id"menu">
                    <li><a href="admin.php">insert</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <?php
        require "conn.php";
        $result = mysqli_query($con, "SELECT * from product");

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['id'];
        ?>
            <div class="col-4">

                <?php echo "<img src='products/{$row['prodimg']}'>"; ?>

                <h4><?php echo $row['name'] ?> </h4>
                <p class="price">Rs.<?php echo $row['price'] ?></p>
                </a>
                <?php
                echo "<a href 'adminupdate.php?id='{$row['id']}'' class='btn'>Edit</a>";
                echo " <a href='' class='btn-1'>Delete</a>";
                ?>
            </div>
        <?php }
        ?>
    </div>
    </div>
    </main>


</body>

</html>