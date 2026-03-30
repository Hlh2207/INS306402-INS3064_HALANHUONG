<?php

session_start();

$correct_user = "admin";
$correct_pass = "123456";

if(!isset($_SESSION["attempts"])){
    $_SESSION["attempts"] = 0;
}

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST["username"];
    $pass = $_POST["password"];

    if($user == $correct_user && $pass == $correct_pass){
        $message = "Login successful!";
        $_SESSION["attempts"] = 0;
    }else{
        $_SESSION["attempts"]++;
        $message = "Wrong login. Attempts: " . $_SESSION["attempts"];
    }
}

?>

<form method="POST">

Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>

<button type="submit">Login</button>

</form>

<p><?php echo $message; ?></p>