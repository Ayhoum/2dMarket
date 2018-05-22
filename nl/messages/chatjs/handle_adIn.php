<?php
session_start();
include '../../../scripts/db_connection.php';
//check if logging in is called
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);

    //Check the combination
    $query = "SELECT * FROM `ADVERTISEMENT` WHERE id='{$id}'";
    $results = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($results) == 1) {
        while ($row = mysqli_fetch_assoc($results)) {
            $userId = $row['USER_id'];
            $title = $row['title'];
            $status = $row['status'];

            $queryL = "SELECT * FROM `ADDRESS` WHERE USER_id='{$userId}'";
            $resultL = mysqli_query($mysqli, $queryL);
            if (mysqli_num_rows($resultL) == 1) {
                while ($row = mysqli_fetch_assoc($resultL)) {
                    $location = $row['city'];
                }
            }
        }

        echo $title."-".$status."-".$location."-".$userId;

    } else {
        echo "error";
    }
}