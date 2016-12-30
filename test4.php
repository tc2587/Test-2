<?php

error_reporting(E_ALL | E_STRICT);
    ini_set("display_errors", 2);

require 'vendor/autoload.php'; // include Composer goodies

$client = new MongoDB\Client("mongodb://localhost:27017");
$customer = $client->demo->customer;
$ticket = $client->demo->ticket;

// query to find items purchased by a user

$items = $ticket->find(array( 'Ticket Void' => true));


foreach($items as $t1){
    echo $t1['Customer Number'].
        " </br> \n";
    
};


$item = $customer->find(array( 'Customer Number' => $t1['Customer Number']));


foreach($item as $t2){
    echo $t2['First Name'].
        " </br> \n";
    };



?>
