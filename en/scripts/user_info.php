<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 14-2-2018
 * Time: 08:49
 * here all the user info. are founded and ready to use in other pages.
 */

?>
<?php
//if (isset($_GET['user_id'])){
//$id = $_GET['user_id'];
$id = 1;
$select_query  = "SELECT * FROM `USER` WHERE `id` = '{$id}'";
$select_result = mysqli_query($mysqli,$select_query);
while ($row = mysqli_fetch_assoc($select_result)){
    $user_first_name = $row['first_name'];
    $user_last_name = $row['last_name'];
    $user_email = $row['email'];
    $user_phone = $row['phone'];
    $user_username = $row['username'];
    $user_pic = $row['pic'];
    $user_register_date = $row['register_date'];
    $online_status = $row['online_status'];

}
//} else{
//    header("Location: index.php");
//}
?>
<?php
// Address info.

$address_query  = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$id}";
$address_result = mysqli_query($mysqli, $address_query);
if (mysqli_num_rows($address_result) > 0 ){
    while ($row = mysqli_fetch_assoc($address_result)){
        $user_postcode = $row['postcode'];
        $user_city = $row['city'];

    }
} else{
    $user_postcode = "unknown ";
    $user_city = "address";
}
?>

<?php
//user's statistics
$statistics_query  = "SELECT COUNT(*) AS 'ADVERTISEMENT_count' FROM `ADVERTISEMENT` WHERE USER_id = '{$id}';";
$statistics_result = mysqli_query($mysqli, $statistics_query);
while ($row=mysqli_fetch_assoc($statistics_result)){
$ad_count = $row['ADVERTISEMENT_count'];
}

$statistics_query_1  = "SELECT COUNT(*) AS 'ADVERTISEMENT_count1' FROM `ADVERTISEMENT` WHERE USER_id = '{$id}' && status = 'SOLD';";
$statistics_result_1 = mysqli_query($mysqli, $statistics_query_1);

    while ($row = mysqli_fetch_assoc($statistics_result_1)) {
        $ad_count_sold = $row['ADVERTISEMENT_count1'];
    }
    ?>

