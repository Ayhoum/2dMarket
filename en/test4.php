<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 18/3/2018
 * Time: 4:51 م
 */




session_start();
ob_start();
require_once "../scripts/db_connection.php";
include 'scripts/sessions.php';




$usersArr = array();

if(isset($_GET['lon']) && isset($_GET['lat']) && $_GET['dis']){
    $lon = $_GET['lon'];
    $lat = $_GET['lat'];
    $dis = $_GET['dis'];



    function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long) {
        // Calculate the distance in degrees
        $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
        $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)

        // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
        return round($distance, 0);
    }


    $point1 = array("lat" => $lat, "long" => $lon); // Current


    $query = "SELECT * FROM ADDRESS";
    $run_query = mysqli_query($mysqli,$query);

    while ($row = mysqli_fetch_assoc($run_query)){

        $lon = $row['lon'];
        $lat = $row['lat'];
        $us_id = $row['USER_id'];

        if($us_id != $id){

            if(!empty($lon) && !empty($lat)){
                $point2 = array("lat" => $lat, "long" => $lon); // Target
                $km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calculate distance in kilometres (default)



                if($km <= $dis){

                    $queryAD = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}'";
                    $run_queryAD = mysqli_query($mysqli,$queryAD);

                    while ($row = mysqli_fetch_assoc($run_queryAD)) {
                        $adID = $row['id'];
                        $title = $row['title'];
                        $desc = $row['description'];

                        echo $adID . "<br>" . $title . "<br>" . $desc . "<br>--------------------<br>";

                    }


                }

            }


        }
echo "###############################<br>";
    }





}else{
    echo "error";
}



?>