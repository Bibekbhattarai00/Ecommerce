<?php
$con = mysqli_connect("localhost", 'root', '', 'webproj');

$result = mysqli_query($con, "SELECT * from products");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<img src='products/{$row['image']}'/><br />";
}
