<?php
require_once '../src/Google_Client.php';
require_once '../src/contrib/Google_CalendarService.php';
require_once 'oauth-settings.php';
session_start();

$client = new Google_Client();
$client->setApplicationName("Google Calendar PHP Starter Application");

// Visit https://code.google.com/apis/console?api=calendar to generate your
// client id, client secret, and to register your redirect uri.


$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($uri);
$client->setDeveloperKey($api_key);
$cal = new Google_CalendarService($client);
if (isset($_GET['logout'])) {
    unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
    print($_GET['code']);
    $client->authenticate($_GET['code']);
    $_SESSION['token'] = $client->getAccessToken();
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}
