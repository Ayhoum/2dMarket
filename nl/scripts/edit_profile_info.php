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
    $email              = mysqli_real_escape_string($mysqli, $_POST['email']);
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
                              u.username      ='{$password}',
                              u.email         ='{$email}',
                              u.phone_number  ='{$phonenumber}'
                              where u.id='{$id}'";

    $update_user_result = mysqli_query($mysqli,$update_user_query);



    if($update_user_result){

        $region             = mysqli_real_escape_string($mysqli, $_POST['slct1']);
        $city               = mysqli_real_escape_string($mysqli, $_POST['slct2']);
        $streetName         = mysqli_real_escape_string($mysqli, $_POST['street_name']);
        $houseNumber        = mysqli_real_escape_string($mysqli, $_POST['house_number']);
        $extraHouseNumber   = mysqli_real_escape_string($mysqli, $_POST['extra_house_number']);
        $postCode           = mysqli_real_escape_string($mysqli, $_POST['postcode']);

        $update_address_query ="UPDATE ADDRESS a SET 
                              a.street_name   ='{$streetName}',
                              a.house_number  ='{$houseNumber}',
                              a.extra_number  ='{$extraHouseNumber}',
                              a.postcode      ='{$postCode}',
                              a.region        ='{$region}',
                              a.city          ='{$city}' 
                              where a.User_id ='{$id}' ";
        $update_address_result = mysqli_query($mysqli,$update_address_query);

        echo "your info is updated";
        header("location: ../profile.php");

    }

}

?>