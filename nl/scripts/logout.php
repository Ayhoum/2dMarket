<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 17/2/2018
 * Time: 12:28 ص
 */
session_start();

session_destroy();

header("Location: index.php");