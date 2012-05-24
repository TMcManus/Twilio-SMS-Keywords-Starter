<?php

/**
 * Include twilio-php, the offical Twilio PHP Helper Library, which can be found at
 * http://www.twilio.com/docs/libraries
 */ 
include('Services/Twilio.php');

/* ## Controller ## */
function index(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Reply with one of the following keywords: [orange], [pear], [lychee], [longan].');
	echo $response;
}

function orange(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Orange. Citrus unshiu.');
	echo $response;
}

function pear(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Pear. Pyrus communis.');
	echo $response;
}

function lychee(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Lychee. Litchi chinensis.');
	echo $response;
}

function longan(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Longan. Dimocarpus longan.');
	echo $response;
}

/* Read the contents of the 'Body' field of the Request. */
$body = $_REQUEST['Body'];

/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */
$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
$result = trim($result);
$result = strtolower($result);

/* ##Router## */
switch ($result) {
    case 'orange':
        orange();
        break;
    case 'pear':
        pear();
        break;
    case 'lychee':
        lychee();
        break;
    case 'longan':
        longan();
        break;
    /* Add new routing logic above this line. */
    default:
        index();
}