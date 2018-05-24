<?php
class User {
    private $dbHost     = "localhost";
    private $dbUsername = "2dmarketweb";
    private $dbPassword = "uJMr5CGK&M6l";
    private $dbName     = "2D_Market";
    private $userTbl    = 'USER';

    function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }

    function checkUser($userData = array()){
        if(!empty($userData)){
            //Check whether user data already exists in database
            $prevQuery = "SELECT * FROM ".$this->userTbl." WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
            $prevResult = $this->db->query($prevQuery);
            if($prevResult->num_rows > 0){
                //Update user data if already exists
                $query = "UPDATE ".$this->userTbl." SET 
                first_name = '".$userData['first_name']."', 
                last_name = '".$userData['last_name']."', 
                email = '".$userData['email']."', 
                locale = '".$userData['locale']."', 
                profile_picture = '".$userData['profile_picture']."', 
                link = '".$userData['link']."'
                WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
                $update = $this->db->query($query);

                $_SESSION['new'] = 'false';
            }else{
                $rand = rand(1,99999);
                //Insert user data
                $query = "INSERT INTO ".$this->userTbl." SET 
                oauth_provider = '".$userData['oauth_provider']."', 
                oauth_uid = '".$userData['oauth_uid']."', 
                first_name = '".$userData['first_name']."', 
                last_name = '".$userData['last_name']."', 
                email = '".$userData['email']."', 
                locale = '".$userData['locale']."', 
                profile_picture = '".$userData['profile_picture']."',
                username = '".$userData['first_name'].$userData['last_name'].$rand."', 
                link = '".$userData['link']."'";
                $insert = $this->db->query($query);

                $insert = $this->db->query($query);

                $_SESSION['new'] = 'true';
            }

            //Get user data from the database
            $result = $this->db->query($prevQuery);
            $userData = $result->fetch_assoc();
        }

        //Return user data
        return $userData;
    }
}
?>