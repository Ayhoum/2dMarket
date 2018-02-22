<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 13-2-2018
 * Time: 19:17
 * Here all the required sessions for the website can be founded and used!
 */
?>
<?php
$id             = $_SESSION['id'];
$username       = $_SESSION['username'];
$email          = $_SESSION['email'];
$profile_pic    = $_SESSION['profile_pic'];
$phone          = $_SESSION['phone'];
$full_name      = $_SESSION['full_name'];
if (empty($profile_pic)) {
    $profile_pic = "https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png";
}
?>