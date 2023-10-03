<?php
$con = mysqli_connect("localhost", "root", "", "webproj");
if (!$con) {
    die("error" . mysqli_connect_error());
}
