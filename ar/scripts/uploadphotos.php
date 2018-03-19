<?php
/**
 * Created by PhpStorm.
 * User: Ayhoum
 * Date: 25/2/2018
 * Time: 2:15 ص
 */

session_start();
include 'sessions.php';
require_once '../../scripts/db_connection.php';
$path = "../ar_ad_photo/"; // Upload directory
$inserted_path = "ar_ad_photo/";
if(isset($_COOKIE['ad_id'])){

    $adId = $_COOKIE['ad_id'];

    foreach ($_FILES['file']['name'] as $f => $name) {
        if ($_FILES['file']['error'][$f] == 4) {
            continue; // Skip file if any error found
        }
        if ($_FILES['file']['error'][$f] == 0) {

            $date = date('YmdHis');
            $time=round(microtime(),8);
            $time = $time * 100000000;
            $name = $date . $time . ".jpg";


            if(move_uploaded_file($_FILES["file"]["tmp_name"][$f], $path.$name)){
                $query = "INSERT INTO `ADVERTISEMENT_PICTURE`(`picture_name`, `picture_url`, `ADVERTISEMENT_id`) 
                          VALUES ('{$name}',
                          '{$inserted_path}',
                          '{$adId}')";
                $run = mysqli_query($mysqli,$query);
            }


        }
    }
    echo "Success";
}

