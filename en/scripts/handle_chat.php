<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 17/2/2018
 * Time: 4:11 م
 */
session_start();
require_once "../../scripts/db_connection.php";


if (isset($_GET['id'])) {


    switch ($_REQUEST['action']) {

        case "getMessages":

            $query = "SELECT * FROM CHAT WHERE id = '{$_GET['id']}'";
            $run = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $partOne = $row['part_one'];
                    $partTwo = $row['part_two'];
                    $ad_id = $row['ADVERTISMENT_id'];
                    $ad_pr_id = $row['ADVERTISMENT_PRODUCT_id'];


                    if ($_SESSION['id'] == $partOne) {
                        $userQuery = "SELECT * FROM USER WHERE id = '{$partTwo}'";
                    } else {
                        $userQuery = "SELECT * FROM USER WHERE id = '{$partOne}'";
                    }
                    $getUser = mysqli_query($mysqli, $userQuery);
                    if (mysqli_num_rows($getUser) > 0) {
                        while ($row = mysqli_fetch_assoc($getUser)) {
                            $name = $row['first_name'] . " " . $row['last_name'];
                        }
                    } else {
                        echo "This account has been removed";
                    }
                    require_once 'time_elapse.php';

                    $adQuery = "SELECT * FROM ADVERTISEMENT WHERE id = '{$ad_id}'";
                    $getAd = mysqli_query($mysqli, $adQuery);
                    if (mysqli_num_rows($getAd) > 0) {
                        while ($row = mysqli_fetch_assoc($getAd)) {
                            $adName = $row['title'];
                            $adTime = $row['date'];
                            $adTime = time_elapsed_string($adTime);
                        }
                    } else {
                        echo "This advertisement has been removed";

                    }





                }
            }
            $chat = "<div class='author'>
                        <div class='image'>
                            <img src='images/users/3.jpg' alt=''>
                        </div>
                        <span class='author-name'>$name</span>
                        <em>5 days ago</em>
                    </div>
                    <h2>$adName</h2>";
            $chat .= "<ul class='messages'>";
            $query = "SELECT * FROM MESSAGE WHERE CHAT_id = '{$_GET['id']}'";
            $run = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $sender = $row['sender'];
                    $msg_time = $row['msg_time'];
                    $msg_text = $row['msg_text'];

                    if ($sender == $_SESSION['id']) {

                        $chat .= "<li class='friend-message clearfix'>
                        <figure class='profile-picture'>
                            <img src='images/users/2.jpg' class='img-circle' alt='Profile Pic'>
                        </figure>
                        <div class='message'>
                            $msg_text
                            <div class='time'><i class='fa fa-clock-o'></i> $msg_time</div>
                        </div>
                    </li>";

                    } else {

                        $chat .= "<li class='my-message clearfix'>
                        <figure class='profile-picture'>
                            <img src='images/users/1.jpg' class='img-circle' alt='Profile Pic'>
                        </figure>
                        <div class='message'>
                            $msg_text
                            <div class='time'><i class='fa fa-clock-o'></i> $msg_time</div>
                        </div>
                    </li>";

                    }
                }
            } else {
                echo "No messages yet";
            }
            $chat .= "</ul>";
            echo $chat;
            break;
    }
} else {
    echo "No Messages Selected";
}