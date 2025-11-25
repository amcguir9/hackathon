<link rel="stylesheet" href="style.css">
<?php
$name = $_POST["name"];   // match the input name=""
$email = $_POST["email"];
$track = $_POST["track"];
$shirt = $_POST["shirt"];

setcookie("name", $name, time() + 60*60*24*7); // 7 days
setcookie("track", $track, time() + 60*60*24*7);

$line = $name . "," . $email . "," . $track . "," . $shirt . "," . $laptop . "\n";

$file = fopen("registrations.txt", "a");
fwrite($file, $line);
fclose($file);

echo "Thank you for registering $name! You are set on the $track track!"
?>

