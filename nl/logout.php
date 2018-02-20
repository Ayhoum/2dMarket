<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 11-2-2018
 * Time: 14:00
 */

session_start();
ob_start();
session_unset();
session_destroy();
header("Location:index.php");
?>
