<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 19:25
 */

include '../../scripts/db_connection.php';

$edit_query  = "UPDATE `ADVERTISEMENT` SET `ad_type` = 'NORMAL'";
$edit_result = mysqli_query($mysqli, $edit_query);

header('Location: ../index.php');

?>