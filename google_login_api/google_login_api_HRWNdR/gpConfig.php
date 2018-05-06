<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '276824796000-osth9jqs6m4c34o93v1tun91hgr5ati2.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Vri7scuPTr9x1CdzL9jplM2D'; //Google client secret
$redirectURL = 'http://www.2dmarket.com/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to 2dmarket.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>