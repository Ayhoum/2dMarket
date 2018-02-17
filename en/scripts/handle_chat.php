<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 17/2/2018
 * Time: 4:11 م
 */
session_start();
require_once "../../scripts/db_connection.php";


if(isset($_GET['id'])){


switch ($_REQUEST['action']){

    case "getMessages":
        $chat='';
        $query = "SELECT * FROM MESSAGE WHERE CHAT_id = '{$_GET['id']}'";
        $run = mysqli_query($mysqli,$query);
        if(mysqli_num_rows($run)>0){
            while($row = mysqli_fetch_assoc($run)){
                $sender = $row['sender'];
                $msg_time = $row['msg_time'];
                $msg_text = $row['msg_text'];

                if($sender == $_SESSION['id']){
                    $chat.= "<li class='friend-message clearfix'>
                        <figure class='profile-picture'>
                            <img src='images/users/2.jpg' class='img-circle' alt='Profile Pic'>
                        </figure>
                        <div class='message'>
                            $msg_text
                            <div class='time'><i class='fa fa-clock-o'></i> $msg_time</div>
                        </div>
                    </li>";

                }else{
                    $chat.= "<li class='my-message clearfix'>
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
        }else{
            echo "No messages yet";
        }
        echo $chat;
        break;
}
}else{
    echo "No Messages Selected";
}