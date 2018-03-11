<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 16-2-2018
 * Time: 22:43
 */
require_once '../../scripts/db_connection.php';
?>


<?php
$ad_id= $_GET['ad_id'];
if ((isset($_POST['status_submit']))){
    $status          = mysqli_real_escape_string($mysqli,$_POST['status']);
    $update_status_query  = "UPDATE `ADVERTISEMENT` SET 
                      `status`='{$status}'
                      WHERE `id` = {$ad_id}";
    $status_result = mysqli_query($mysqli,$update_status_query);
    header('Location: ../personal_ads.php');
}


if (isset($_POST['submit'])){
    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = '{$ad_id}'";
    $ad_result = mysqli_query($mysqli, $ad_query);

if (mysqli_num_rows($ad_result) > 0 ) {
    while ($row = mysqli_fetch_assoc($ad_result)) {
        $db_title = $row['title'];
        $db_selling_type = $row['selling_type'];
        $db_description = $row['description'];
        $db_delivery_type = $row['delivery_type'];
        $db_condition = $row['condition'];
        $db_category_id = $row['CATEGORY_id'];
        $db_ad_type = $row['ad_type'];
        $db_price = $row['price'];
    }
}



    $title          = mysqli_real_escape_string($mysqli,$_POST['title']);
    if(empty($title)){$title = $db_title;}
    $selling_type   = mysqli_real_escape_string($mysqli,$_POST['selling_type']);
    if(empty($selling_type)){$selling_type = $db_selling_type;}
    $description    = mysqli_real_escape_string($mysqli,$_POST['description']);
    if(empty($description)){$description = $db_description;}
    $delivery_type  = mysqli_real_escape_string($mysqli,$_POST['delivery_type']);
    if(empty($delivery_type)){$delivery_type = $db_delivery_type;}
    $condition      = mysqli_real_escape_string($mysqli,$_POST['condition']);
    if(empty($condition)){$condition = $db_condition;}
    $category     = mysqli_real_escape_string($mysqli,$_POST['category']);
    if(empty($category)){$category = $db_category_id;}
    $ad_type        = mysqli_real_escape_string($mysqli,$_POST['ad_type']);
    if(empty($ad_type)){$ad_type = $db_ad_type;}
    $price          = mysqli_real_escape_string($mysqli,$_POST['price']);
    if(empty($price)){$price = $db_price;}



    $update_ad_query  = "UPDATE `ADVERTISEMENT` SET 
                      `title`='{$title}',
                      `selling_type`='{$selling_type}',
                      `delivery_type`='{$delivery_type}',
                      `description`='{$description}',
                      `ad_type`='{$ad_type}',
                      `CATEGORY_id`='{$category}',
                      `condition`='{$condition}',
                      `price`='{$price}' 
                       WHERE `id` ={$ad_id}";
    $update_result = mysqli_query($mysqli,$update_ad_query);


//    if($ad_type == "NORMAL"){
//
//        header('Location: free.php?user_id='.$user_id);
//
//    } elseif ($ad_type == "PREMIUM"){
//
//        header('Location: premium.php?user_id='.$user_id);
//    }

    header("Location: ../personal_ads.php");
}
?>
