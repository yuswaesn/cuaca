<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('865660342346-d68m5hgo20n6rka68vbgsgk1r2h15qau.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('f9-2Xd3KrpPjyrMIsIVj7KNJ');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/cuaca/index.php');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>