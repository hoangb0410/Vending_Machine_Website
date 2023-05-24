<?php
$con=mysqli_connect("localhost","root","","vendingmachine");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
