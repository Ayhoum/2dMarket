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


//check if the Ad is bid

$check_query  ="SELECT * FROM `BID` WHERE `ad_id` = '{$ad_id}'";
$check_result = mysqli_query($mysqli, $check_query);

if (mysqli_num_rows($check_result) > 0 ) {
    while ($row = mysqli_fetch_assoc($check_result)){
        $id = $row['id'];

// delete from bid
        $delete_bid_query  = "DELETE FROM `BID` WHERE  `id` = '{$id}'";
        $delete_bid_result = mysqli_query($mysqli, $delete_bid_query);
// delete from auction
        $delete_auction_query  = "DELETE FROM `AUCTION` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
        $delete_auction_result = mysqli_query($mysqli, $delete_auction_query);

        //delete from pics
        $delete_pic_query  = "DELETE FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}' ";
        $delete_pic_result = mysqli_query($mysqli,$delete_pic_query);

        //delete ad.
        $delete_query = "DELETE FROM `ADVERTISEMENT` WHERE id = '{$ad_id}'";
        $delete_result = mysqli_query($mysqli, $delete_query);
        header('Location : ../personal_ads.php');

    }

} else {

    //delete from pics
    $delete_pic_query  = "DELETE FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}' ";
    $delete_pic_result = mysqli_query($mysqli,$delete_pic_query);

        //delete ad.

    $delete_query = "DELETE FROM `ADVERTISEMENT` WHERE id = '{$ad_id}'";
    $delete_result = mysqli_query($mysqli, $delete_query);
    header('Location : ../personal_ads.php');

}




?>

