<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1083612401223-7ga100o8khfko46enggo7gtarmnnd6fu.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'nWJLUry2fyPJCE8kgb1_PMbT'; //Google client secret
$redirectURL = 'http://www.2dmarket.com/ar/login.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to 2dmarket.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>