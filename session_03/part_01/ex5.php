<?php

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];

    if(empty($name) || empty($email)){
        $message = "Please fill all fields.";
    }else{
        $message = "Thanks $name. We received your contact.";
    }
}

?>

<form method="POST">

Name: <input type="text" name="name"><br><br>
Email: <input type="email" name="email"><br><br>

<button type="submit">Send</button>

</form>

<p><?php echo $message; ?></p>