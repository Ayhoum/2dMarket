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
if (isset($_GET['user_id'])){
$user_id = $_GET['user_id'];
    $select_query = "SELECT * FROM `USER` WHERE `id` = '{$user_id}'";
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

    }
    if (empty($user_pic)) {
        $user_pic = "https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png";
    }

// Address info.

    $address_query = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$user_id}";
    $address_result = mysqli_query($mysqli, $address_query);
    if (mysqli_num_rows($address_result) > 0) {
        while ($row = mysqli_fetch_assoc($address_result)) {
            $user_street_name = $row['street_name'];
            $user_postcode = $row['postcode'];
            $user_house_number = $row['house_number'];
            $user_region = $row['region'];
            $user_city = $row['city'];

        }
    } else {
        $user_postcode = "unknown ";
        $user_city = "address";
    }

//user's statistics
    $statistics_query = "SELECT COUNT(*) AS 'ADVERTISEMENT_count' FROM `ADVERTISEMENT` WHERE USER_id = '{$user_id}'";
    $statistics_result = mysqli_query($mysqli, $statistics_query);
    while ($row = mysqli_fetch_assoc($statistics_result)) {
        $ad_count = $row['ADVERTISEMENT_count'];
    }

    $statistics_query_1 = "SELECT COUNT(*) AS 'ADVERTISEMENT_count1' FROM `ADVERTISEMENT` WHERE USER_id = '{$user_id}' && status = 'SOLD'";
    $statistics_result_1 = mysqli_query($mysqli, $statistics_query_1);

    while ($row = mysqli_fetch_assoc($statistics_result_1)) {
        $ad_count_sold = $row['ADVERTISEMENT_count1'];
    }


} else {
    header("Location: all_product.php?order=latest");
}
?>

