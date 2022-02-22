<?php

$message= "Thank You " .$_POST['first_name'] . " " . $_POST['last_name'] . " for contacting us about " . $_POST['subject'] . "." . "</br>" . "One of our advisers will contact you either at " . $_POST['user_email'] . " or by phone at " . $_POST['phone'] . " as soon as possible to process your request: " . $_POST['user_message'];

echo $message; 

?>