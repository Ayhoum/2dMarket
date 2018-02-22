<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 19:05
 */
session_start();
include 'sessions.php';
require_once '../../scripts/db_connection.php';


if(isset($_POST['submit'])){
    $title          = mysqli_real_escape_string($mysqli,$_POST['title']);
    $selling_type   = mysqli_real_escape_string($mysqli,$_POST['selling_type']);
    $description    = mysqli_real_escape_string($mysqli,$_POST['description']);
    $delivery_type  = mysqli_real_escape_string($mysqli,$_POST['delivery_type']);
    $condition      = mysqli_real_escape_string($mysqli,$_POST['condition']);
    $category_id    = mysqli_real_escape_string($mysqli,$_POST['category_id']);
    $ad_type        = mysqli_real_escape_string($mysqli,$_POST['ad_type']);
    $price          = mysqli_real_escape_string($mysqli,$_POST['price']);


    $ins_pr_query  = "INSERT INTO `PRODUCT`(`name`) VALUES ('{$title}') ";
    $ins_pr_result = mysqli_query($mysqli,$ins_pr_query);

    $sel_pr_id      = "SELECT * FROM `PRODUCT` ORDER BY `id` DESC LIMIT 1";
    $sel_pr_result  = mysqli_query($mysqli, $sel_pr_id);
    while ($row     = mysqli_fetch_assoc($sel_pr_result)){
        $product_id = $row['id'];
    }

    $lang    = "EN";
    $user_id =  $_SESSION['id'];

    $ins_ad_query  = "INSERT INTO `ADVERTISEMENT`";
    $ins_ad_query .= "(`title`, `lang`, `selling_type`, `delivery_type`, `description`, `ad_type`, `USER_id`, `PRODUCT_id`, `CATEGORY_id`, `condition`, `price`)";
    $ins_ad_query .= "VALUES (          '{$title}',
                                        '{$lang}',
                                        '{$selling_type}',
                                        '{$delivery_type}',
                                        '{$description}',
                                        '{$ad_type}',
                                        '{$user_id}',
                                        '{$product_id}',
                                        '{$category_id}',
                                        '{$condition}',
                                         '{$price}')";

    $ins_ad_result = mysqli_query($mysqli,$ins_ad_query);
    if($ad_type == "NORMAL"){

        header('Location: free.php?user_id='.$user_id);

    } elseif ($ad_type == "PREMIUM"){

        header('Location: premium.php?user_id='.$user_id);
    }
} else{
    echo "Error";

}
?>