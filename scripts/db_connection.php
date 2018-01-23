<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 21-1-2018
 * Time: 22:30
 */


$mysqli = new mysqli("2dmarket.com", "2dmarketweb", "uJMr5CGK&M6l", "2D_Market");
$sql= 'SET CHARACTER SET utf8';
mysqli_query($mysqli,$sql);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>
