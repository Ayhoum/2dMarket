
<?php
session_start();
ob_start();
require_once "../scripts/db_connection.php";

//taking the email from the url
$id=$_GET['email'];

//getting the id from the database
$query = "SELECT * From User WHERE email ='{$email}' ";
$getAgent = mysqli_query($mysqli, $query);
if (mysqli_num_rows($getAgent) == 1) {
    while ($row = mysqli_fetch_assoc($getAgent)) {
        $id = $row['ID'];
    }
}

//dealing with the form
if(isset($_POST['Rest'])){

    $n_pass=$_POST['password1'];//new pass
    $c_pass=$_POST['password2'];//confirm pass


    if(strlen($n_pass)<25){
        echo "password length should be max 25 characters";
        exit();
    }else{
        if ($n_pass == $c_pass){
            $option=["COST"=> 12];
            $hash_pass == hash_password($n_pass,DEFAULT_PASSWORD,$option);
            $change_pass_SQL="UPDATE USER SET password ='$hash_pass' WHERE id ='$id'
         AND email='$email' ";

            $query=mysqli_query($mysqli,$change_pass_SQL)
            or die(mysqli_error($mysqli));
            if($query){
                echo "your password is rest";
            }
        }

    }

}
?>
