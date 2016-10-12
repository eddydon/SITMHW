<?php

require_once 'C:xampp/htdocs/Twilio_API_Text_Message_Response/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$AccountSid = "ACbd0653dc2b14f7333ecaba9e88197798";
$AuthToken = "d67cd23e8bf35e1694562a8401391c32";

//Instantiate a new Twilio Rest Client
$client = new Client($AccountSid, $AuthToken);

// Use the client to do fun stuff like send text messages!
	$sms = $client->messages->create(
		    // the number you'd like to send the message to
		    "+17188203898",
		    array(
		        'from' => '+17188203898',
		        // the body of the text message you'd like to send
		        'body' => "Hey!, Message Received!"
		    )
		);

	//Display a confirmation message on the screen
	echo "Sent message to $name"

?>