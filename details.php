<link rel="stylesheet" href="style.css">
<?php
if (isset($_GET["clear"])) {
  setcookie("student_name", "", time() - 3600);
  setcookie("student_track", "", time() - 3600);
}
?>
<?php
$name = $_COOKIE["name"] ?? "guest";
$track = $_COOKIE["track"] ?? "undecided";

echo "Welcome back, $name! Your Track: $track. Remember to delete your cookies!"
?>