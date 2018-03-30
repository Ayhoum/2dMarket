<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 5-3-2018
 * Time: 21:58
 */
session_start();
include '../../scripts/db_connection.php';

?>

<?php
$user_id = $_SESSION['id'];
$ad_id = $_GET['ad_id'];
// check if the ad already exists

$check_query = "SELECT * FROM `FAV_ADS` WHERE `user_id` = '{$user_id}'&& `ad_id` = '{$ad_id}'";
$check_result = mysqli_query($mysqli,$check_query);
if (mysqli_num_rows($check_result) > 0 ){
    header("Location: " . $_SERVER["HTTP_REFERER"]);

} else{
    $add_query  = "INSERT INTO `FAV_ADS` (`user_id`,`ad_id`) VALUES ('{$user_id}','{$ad_id}')";
    $add_result = mysqli_query($mysqli, $add_query);

    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>
