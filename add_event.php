<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/path-to-your-service-account-json-file.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

// Replace these values with your event data
$eventData = [
    'title' => 'Webinar: Introduction to Firebase',
    'date' => '2023-09-10',
    'time' => '15:00',
    'description' => 'Learn how to use Firebase for web development'
];

// Add the event data to the "events" node
$newEventRef = $database->getReference('events')->push($eventData);

echo 'Event added with ID: ' . $newEventRef->getKey();
