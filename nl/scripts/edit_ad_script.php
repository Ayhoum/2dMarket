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
    $title          = mysqli_real_escape_string($mysqli,$_POST['title']);
    $selling_type   = mysqli_real_escape_string($mysqli,$_POST['selling_type']);
    $description    = mysqli_real_escape_string($mysqli,$_POST['description']);
    $delivery_type  = mysqli_real_escape_string($mysqli,$_POST['delivery_type']);
    $condition      = mysqli_real_escape_string($mysqli,$_POST['condition']);
//    $category_id    = $_POST['category_id'];
    $ad_type        = mysqli_real_escape_string($mysqli,$_POST['ad_type']);
    $price          = mysqli_real_escape_string($mysqli,$_POST['price']);

    $update_ad_query  = "UPDATE `ADVERTISEMENT` SET 
                      `title`='{$title}',
                      `selling_type`='{$selling_type}',
                      `delivery_type`='{$delivery_type}',
                      `description`='{$description}',
                      `ad_type`='{$ad_type}',
                      `condition`='{$condition}',
                      `price`='{$price}' 
                       WHERE `id` ={$ad_id}";
    $update_result = mysqli_query($mysqli,$update_ad_query);


//
//    $user_id = 1;
//
//    $ins_ad_result = mysqli_query($mysqli,$update_ad_query);
//    if($ad_type == "NORMAL"){
//
//        header('Location: free.php?user_id='.$user_id);
//
//    } elseif ($ad_type == "PREMIUM"){
//
//        header('Location: premium.php?user_id='.$user_id);
//    }
}
?>
