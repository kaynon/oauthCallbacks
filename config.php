<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '114741947004-b5jh58jogq7e2b1d3gfd0vkgb373jev3.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'GCGZF0F1Dp-fbeT9uvQc3voN'; //Google CLIENT SECRET
$redirectUrl = 'http://competitions.sciencecanvas.org/oauthCallbacks/';  //return url (url to script)
$homeUrl = 'http://competitions.sciencecanvas.org';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to competitions.sciencecavas.org');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>