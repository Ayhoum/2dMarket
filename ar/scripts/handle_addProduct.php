<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 4/3/2018
 * Time: 4:52 م
 */
session_start();
include '../../scripts/db_connection.php';
$path = "../ar_ad_photo/"; // Upload directory
$inserted_path = "ar_ad_photo/";

if (isset($_POST['category_id'])
    && isset($_POST['title'])
    && isset($_POST['price'])
    && isset($_POST['selling_type'])
    && isset($_POST['condition'])
    && isset($_POST['delivery_type'])
    && isset($_POST['editor2'])) {


    $category_id    = mysqli_real_escape_string($mysqli,$_POST['category_id']);
    $title          = mysqli_real_escape_string($mysqli,$_POST['title']);
    $price          = mysqli_real_escape_string($mysqli,$_POST['price']);
    $selling_type   = mysqli_real_escape_string($mysqli,$_POST['selling_type']);
    $condition      = mysqli_real_escape_string($mysqli,$_POST['condition']);
    $delivery_type  = mysqli_real_escape_string($mysqli,$_POST['delivery_type']);
    $description    = mysqli_real_escape_string($mysqli,$_POST['editor2']);
//    $files          = mysqli_real_escape_string($mysqli,$_POST['file']);
    $ad_type        = "NORMAL";
    $catParts = explode("-", $category_id);


    date_default_timezone_set('Europe/Amsterdam');
    $date = date('Y-m-d H:i:s');
    $lang    = "AR";
    $user_id =  $_SESSION['id'];
    $status = "AVAILABLE";
    $zeroVal = 0;
    $ins_ad_query  = "INSERT INTO `ADVERTISEMENT`";
    $ins_ad_query .= "(`title`, `lang`, `selling_type`, `status`, `delivery_type`, `description`, `ad_type`, `USER_id`, `CATEGORY_id`, `condition`, `price`, `visits`, `sub_cat_id`, `date`)";
    $ins_ad_query .= "VALUES (      '{$title}',
                                        '{$lang}',
                                        '{$selling_type}',
                                        '{$status}',
                                        '{$delivery_type}',
                                        '{$description}',
                                        '{$ad_type}',
                                        '{$user_id}',
                                        '{$catParts[0]}',
                                        '{$condition}',
                                        '{$price}',
                                        '{$zeroVal}',
                                        '{$catParts[1]}',
                                        '{$date}')";

    $ins_ad_result = mysqli_query($mysqli,$ins_ad_query);





    if($ins_ad_result){
        $queryAd = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '$user_id' ORDER BY id DESC LIMIT 1";
        $getIdFromAd = mysqli_query($mysqli, $queryAd);
        while($row = mysqli_fetch_assoc($getIdFromAd)){
            $responseId = $row['id'];
        }
        if($responseId > 0){
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
                          '{$responseId}')";
                        $run = mysqli_query($mysqli,$query);
                    }
                }
            }
        }

        //Insert new auction :
        if($selling_type == 'BID'){

            $insert_auction_query   = "INSERT INTO `AUCTION` (`ADVERTISEMENT_id`)";
            $insert_auction_query  .= "VALUES ('{$responseId}')";
            $insert_auction_result  = mysqli_query($mysqli,$insert_auction_query);

        }
        header("Location: ../ad_page.php?ad_id=".$responseId);
    }else{
        echo "Error";
    }


}else {
    echo "Error";
}