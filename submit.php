<?php
$name = $_POST["name"];   // match the input name=""
$email = $_POST["email"];
$track = $_POST["track"];
$shirt = $_POST["shirt"];
$laptop = isset($_POST["laptop"]) ? "yes" : "no";
?>
<?php
setcookie("name", $name, time() + 60*60*24*7); // 7 days
setcookie("track", $track, time() + 60*60*24*7);
?>
<?php
$line = $name . "," . $email . "," . $track . "," . $shirt . "," . $laptop . "\n";​

$file = fopen("registrations.txt", "a");
fwrite($file, $line);
fclose($file);
?>
<?php

$message = "Thank you for registering $name! You are set for track $track .";
<a href="index.html">Back to homepage</a>

?>
