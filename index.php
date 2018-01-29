<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <title>Emerald Dragon | Alerts</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 14/1/2018
 * Time: 12:21 ص
 */

echo "Hello folks!!";

echo " Hi From Groningen";

if(isset($_POST['but'])){

?>
    <a href="#" class="button mid dark alert-success">
        Preview <span class="primary">Success Alert Box</span>
    </a>
<?php


}

?>



<form method="post">


    <button name="but">click</button>

</form>



<script src="js/vendor/jquery-3.1.0.min.js"></script>
<!-- Tweet -->
<script src="js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- xmAlert -->
<script src="js/vendor/jquery.xmalert.min.js"></script>
<!-- Magnific Popup -->
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<!-- Side Menu -->
<script src="js/side-menu.js"></script>
<!-- User Quickview Dropdown -->
<script src="js/user-board.js"></script>
<!-- Alerts Demo -->
<script src="js/alerts-demo.js"></script>
<!-- Alerts Generator -->
<script src="js/alerts-generator.js"></script>
<!-- Footer -->
<script src="js/footer.js"></script>
</body>