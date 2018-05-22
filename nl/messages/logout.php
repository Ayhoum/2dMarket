<?php
require_once('config.php');
require_once('includes/dbcon.php');
require_once('includes/setting.php');
errror_reporting(0);
session_unset($GLOBALS['sesId']);

echo '<script>window.location="login.php"</script>';



?>

