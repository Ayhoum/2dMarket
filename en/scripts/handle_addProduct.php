<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 4/3/2018
 * Time: 4:52 م
 */
session_start();
include '../../scripts/db_connection.php';
if (isset($_GET['cat'])
    && isset($_GET['title'])
    && isset($_GET['price'])
    && isset($_GET['sellType'])
    && isset($_GET['cond'])
    && isset($_GET['delivery'])
    && isset($_GET['des'])
    && isset($_GET['adType'])) {



    $title          = mysqli_real_escape_string($mysqli,$_GET['title']);
    $selling_type   = mysqli_real_escape_string($mysqli,$_GET['sellType']);
    $description    = mysqli_real_escape_string($mysqli,$_GET['des']);
    $delivery_type  = mysqli_real_escape_string($mysqli,$_GET['delivery']);
    $condition      = mysqli_real_escape_string($mysqli,$_GET['cond']);
    $category_id    = mysqli_real_escape_string($mysqli,$_GET['cat']);
    $ad_type        = mysqli_real_escape_string($mysqli,$_GET['adType']);
    $price          = mysqli_real_escape_string($mysqli,$_GET['price']);


        $lang    = "EN";
        $user_id =  $_SESSION['id'];
        $status = "AVAILABLE";
        $zeroVal = 0;
        $ins_ad_query  = "INSERT INTO `ADVERTISEMENT`";
        $ins_ad_query .= "(`title`, `lang`, `selling_type`, `status`, `delivery_type`, `description`, `ad_type`, `USER_id`, `CATEGORY_id`, `condition`, `price`, `fav_number`, `visits`)";
        $ins_ad_query .= "VALUES (      '{$title}',
                                        '{$lang}',
                                        '{$selling_type}',
                                        '{$status}',
                                        '{$delivery_type}',
                                        '{$description}',
                                        '{$ad_type}',
                                        '{$user_id}',
                                        '{$category_id}',
                                        '{$condition}',
                                        '{$price}',
                                        '{$zeroVal}',
                                        '{$zeroVal}')";

        $ins_ad_result = mysqli_query($mysqli,$ins_ad_query);

        if($ins_ad_result){
            $queryAd = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '$user_id' ORDER BY id DESC LIMIT 1";
            $getIdFromAd = mysqli_query($mysqli, $queryAd);
            while($row = mysqli_fetch_assoc($getIdFromAd)){
                $responseId = $row['id'];
            }
            if($responseId > 0){
                setcookie("ad_id", $responseId, time()+400);
            }
            echo $responseId;
        }else{
            echo "error";
        }


}else {
    echo "error";
}