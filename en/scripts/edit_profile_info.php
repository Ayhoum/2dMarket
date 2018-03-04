<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 18-2-2018
 * Time: 14:44
 */

session_start();
ob_start();
include '../../scripts/db_connection.php';
include 'sessions.php';
?>
<?php
if(isset($_POST['update'])) {
//    $email              = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password           = mysqli_real_escape_string($mysqli, $_POST['password']);
    $firstname          = mysqli_real_escape_string($mysqli, $_POST['first_name']);
    $lastname           = mysqli_real_escape_string($mysqli, $_POST['last_name']);
//    $userName           = mysqli_real_escape_string($mysqli, $_POST['username']);
    $phonenumber        = mysqli_real_escape_string($mysqli, $_POST['phone_number']);

    $option=["COST"=> 12];
    $hash_pass = password_hash($password,PASSWORD_DEFAULT,$option);



    $update_user_query ="UPDATE USER u  SET 
                              u.first_name    ='{$firstname}',
                              u.last_name     ='{$lastname}',
                              u.password      ='{$hash_pass}',
                              u.phone_number  ='{$phonenumber}'
                              where u.id='{$id}'";

    $update_user_result = mysqli_query($mysqli,$update_user_query);
 echo  $update_user_query;


    if($update_user_result){

        // check if the user has already an address :
        $check_query  = "SELECT * FROM `ADDRESS` WHERE `USER_id` = '{$id}'";
        $check_result = mysqli_query($mysqli, $check_query);
        if (mysqli_num_rows($check_result) > 0){

            $region             = mysqli_real_escape_string($mysqli, $_POST['region']);
            $city               = mysqli_real_escape_string($mysqli, $_POST['city']);
            $streetName         = mysqli_real_escape_string($mysqli, $_POST['street_name']);
            $houseNumber        = mysqli_real_escape_string($mysqli, $_POST['house_number']);
            $country            = mysqli_real_escape_string($mysqli, $_POST['country']);
            $postCode           = mysqli_real_escape_string($mysqli, $_POST['postcode']);

            $update_address_query ="UPDATE ADDRESS a SET 
                              a.street_name   ='{$streetName}',
                              a.house_number  ='{$houseNumber}',
                              a.country       ='{$country}',
                              a.postcode      ='{$postCode}',
                              a.region        ='{$region}',
                              a.city          ='{$city}' 
                              where a.User_id ='{$id}' ";
            $update_address_result = mysqli_query($mysqli,$update_address_query);

            header("location: ../profile.php");

        } else {
            $region             = mysqli_real_escape_string($mysqli, $_POST['region']);
            $city               = mysqli_real_escape_string($mysqli, $_POST['city']);
            $streetName         = mysqli_real_escape_string($mysqli, $_POST['street_name']);
            $houseNumber        = mysqli_real_escape_string($mysqli, $_POST['house_number']);
            $country            = mysqli_real_escape_string($mysqli, $_POST['country']);
            $postCode           = mysqli_real_escape_string($mysqli, $_POST['postcode']);

            $insert_address_query  ="INSERT INTO `ADDRESS` (street_name, house_number, country, postcode, city, region, USER_id)";
            $insert_address_query .="VALUES   ( '{$streetName}',
                                                '{$houseNumber}',
                                                '{$country}',
                                                '{$postCode}',
                                                '{$city}', 
                                                '{$region}',
                                                '{$id}' )";
            $insert_address_result = mysqli_query($mysqli,$insert_address_query);
            header("location: ../profile.php");


        }

    }



}

?>