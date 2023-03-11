<?php
// Include the Firebase PHP SDK
include('') ;

// Initialize the Firebase app with your service account credentials
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/path/to/serviceAccountKey.json');
$firebase = (new Firebase\Factory())
    ->withServiceAccount($serviceAccount)
    ->create();
$database = $firebase->getDatabase();

// Set the data you want to insert
$data = [
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'phone' => '123-456-7890'
];

// Insert the data to the database
$database->getReference('users')->push($data);
 ?>