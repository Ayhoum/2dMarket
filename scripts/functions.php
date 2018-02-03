<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 3-2-2018
 * Time: 16:03
 */

function user_online(){
    if(isset($_GET['onlineusers'])){

//setting th e connection with database global
global $mysqli;

//checking voor connectin

        if(!$mysqli) {
            //redircting
            session_start();
            include ("../scripts/db_connection.php");


            $session = sesion_id();
            $time = time();
            $time_out_in_sec = 60;
            $time_out = $time - $time_out_in_sec;

            //searching for online user
            $query = "SELECT * FROM User_online WHERE session ='$session'";
            $send_query = mysqli_query($mysqli, $query);
            $check_if_exists = mysqli_num_rows($send_query);


            //var for starting the session time
            $start_time = "INSERT INTO User_online(session,time )VALUES ('$session','$time')";


            if ($check_if_exists == NULL) {
                mysqli_query($mysqli, $start_time);

            } else {
                // if the time already started , set the new values, keep the time updated
                $start_time = "UPDATE User_online SET time ='$time'  WHERE session='$session  ";
            }

            //check for online persone
            $user_online_query = mysqli_query($mysqli, "SELECT * FROM User_online WHERE time > '$time_out' ");
            $count_users = mysqli_num_rows($user_online_query);

        }//check connection
    }//GET
    }

    //caling he function online users
user_online();