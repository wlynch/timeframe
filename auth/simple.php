<?php
require_once '../src/Google_Client.php';
require_once '../src/contrib/Google_CalendarService.php';
require_once 'oauth-settings.php';
require_once '../backend/mongo.php';

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

if (isset($_SESSION['token'])) {
    $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
    $calList = $cal->calendarList->listCalendarList();
    $jsons = json_decode($calList);
    print "<h1>Calendar List</h1><pre>" . print_r($jsons, true) . "</pre>";
        
    print "<a href=\"".$_SERVER['PHP_SELF']."?logout=true\">Logout</a>";
    $_SESSION['token'] = $client->getAccessToken();
} else {
    $authUrl = $client->createAuthUrl();
    print "<a class='login' href='$authUrl'>Connect Me!</a>";
}

//-----------------------------------------------------------------------------
/*
$collection = $db->selectCollection('collection name please replace');
$JSONdata = $cal->calendarList->listCalendarList();
$rests = json_decode($JSONdata);


function processJSON($jsonData, $collection) {

    
}

*/
