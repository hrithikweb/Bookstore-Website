<?php

session_start();

$email = $_SESSION['email'];
$title = $_SESSION['title'];

echo "Order has been placed for - $title . Confirmation sent to $email..";


?>
