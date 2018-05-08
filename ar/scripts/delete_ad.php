<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 20-2-2018
 * Time: 16:51
 */
?>
<?php
require_once '../../scripts/db_connection.php';
$ad_id = $_GET['ad_id'];

// delete from auction
$delete_auction_query  = "DELETE FROM `AUCTION` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
$delete_auction_result = mysqli_query($mysqli, $delete_auction_query);

//delete from pics
$delete_pic_query  = "DELETE FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}' ";
$delete_pic_result = mysqli_query($mysqli,$delete_pic_query);

//delete ad.
$delete_query = "DELETE FROM `ADVERTISEMENT` WHERE id = '{$ad_id}'";

$delete_result = mysqli_query($mysqli, $delete_query);


echo 'done';
?>

