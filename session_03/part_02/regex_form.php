<?php

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$password = $_POST["password"];

$errors = [];

if(!preg_match("/[A-Z]/", $password)){
    $errors[] = "Missing uppercase letter";
}

if(!preg_match("/[a-z]/", $password)){
    $errors[] = "Missing lowercase letter";
}

if(!preg_match("/[0-9]/", $password)){
    $errors[] = "Missing number";
}

if(!preg_match("/[\W]/", $password)){
    $errors[] = "Missing symbol";
}

if(empty($errors)){
    $message = "Password is strong!";
}else{
    $message = implode("<br>", $errors);
}

}

?>

<form method="POST">

Password:
<input type="password" name="password">

<button type="submit">Check</button>

</form>

<p><?php echo $message; ?></p>