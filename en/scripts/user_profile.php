<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 22-2-2018
 * Time: 20:17
 */
?>

<?php
$id = $_SESSION['id'];
$select_query = "SELECT * FROM `USER` WHERE `id` = '{$id}'";
    $select_result = mysqli_query($mysqli, $select_query);
    while ($row = mysqli_fetch_assoc($select_result)) {
        $user_first_name = $row['first_name'];
        $user_last_name = $row['last_name'];
        $user_email = $row['email'];
        $user_phone = $row['phone_number'];
        $user_username = $row['username'];
        $user_pic = $row['profile_picture'];
        $user_register_date = $row['register_date'];
        $online_status = $row['online_status'];

        $user_full_name = $user_first_name ." ". $user_last_name;

    }
    if (empty($user_pic)) {
        $user_pic = "https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png";
    }

// Address info.

    $address_query = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$id}";
    $address_result = mysqli_query($mysqli, $address_query);
    if (mysqli_num_rows($address_result) > 0) {
        while ($row = mysqli_fetch_assoc($address_result)) {
            $user_street_name = $row['street_name'];
            $user_postcode = $row['postcode'];
            $user_house_number = $row['house_number'];
            $user_extra_house_number = $row['extra_number'];
            $user_region = $row['region'];
            $user_city = $row['city'];
            $user_country = $row['country'];

            $location = $user_region . " ". $user_country;

        }
    } else {
        $location = "Unknown address info; Please fill in your info in edit info tap !";
    }

//user's statistics
    $statistics_query = "SELECT COUNT(*) AS 'ADVERTISEMENT_count' FROM `ADVERTISEMENT` WHERE USER_id = '{$id}'";
    $statistics_result = mysqli_query($mysqli, $statistics_query);
    while ($row = mysqli_fetch_assoc($statistics_result)) {
        $ad_count = $row['ADVERTISEMENT_count'];
    }

$statistics_query_1  = "SELECT COUNT(*) AS 'FAV_count' FROM `FAV_ADS` WHERE user_id = '{$id}'";
$statistics_result_1 = mysqli_query($mysqli, $statistics_query_1);
while ($row = mysqli_fetch_assoc($statistics_result_1)) {
    $fav_count = $row['FAV_count'];
}

?>


