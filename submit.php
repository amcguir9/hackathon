<?php
$message = "";

 if (isset($_POST['submit'])&& $_POST ['name'] != ""&& $_GET ['email'] != ""){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $id = $_POST['student-id'];
 }
else {
    $message = "<h1>Oops!</h1>" . 
               "<p>You must fill out the form to register.</p>" . 
               "<a href='register.php'>Back to registration</a>";
}

$message = "<h1>Thank you, $name!</h1>" .
    "<p>Your registration for the Mini Hackathon is complete!</p>" . 
    "<p>We Will email: $email with further information.</p>" .
    "<hr>" . 
    "<a href='index.html'>Back to homepage</a>"

?>