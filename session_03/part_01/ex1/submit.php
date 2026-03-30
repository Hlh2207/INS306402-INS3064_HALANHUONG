<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if(empty($name) || empty($email) || empty($message)){
    echo "Please fill in all fields.";
}else{
    echo "Thank you $name. Your message has been received.";
}

?>