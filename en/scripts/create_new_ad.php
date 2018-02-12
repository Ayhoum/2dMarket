<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 19:05
 */
require_once '../../scripts/db_connection.php';


if(isset($_POST['submit'])){
    $title          = $_POST['title'];
    $selling_type   = $_POST['selling_type'];
    $description    = $_POST['description'];
    $delivery_type  = $_POST['delivery_type'];
    $condition      = $_POST['condition'];
    $category_id    = $_POST['category_id'];
    $ad_type        = $_POST['ad_type'];
    $price          = $_POST['price'];


    $ins_pr_query  = "INSERT INTO `PRODUCT`(`name`) VALUES ('{$title}') ";
    $ins_pr_result = mysqli_query($mysqli,$ins_pr_query);

    $sel_pr_id      = "SELECT * FROM `PRODUCT` ORDER BY `id` DESC LIMIT 1";
    $sel_pr_result  = mysqli_query($mysqli, $sel_pr_id);
    while ($row     = mysqli_fetch_assoc($sel_pr_result)){
        $product_id = $row['id'];
    }

    $lang    = "EN";
    $user_id =  "1";

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