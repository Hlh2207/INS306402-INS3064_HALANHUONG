<?php

require "utils.php";

$name = sanitize("  John  ");
$email = "john@email.com";

echo "Name: $name <br>";

if(is_valid_email($email)){
    echo "Valid email";
}else{
    echo "Invalid email";
}

?>