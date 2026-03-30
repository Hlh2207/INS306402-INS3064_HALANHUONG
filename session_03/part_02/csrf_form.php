<?php
session_start();

if(empty($_SESSION["token"])){
    $_SESSION["token"] = bin2hex(random_bytes(32));
    setcookie("csrf_token", $_SESSION["token"]);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!isset($_POST["token"]) || $_POST["token"] !== $_COOKIE["csrf_token"]){
        http_response_code(403);
        die("403 Forbidden - CSRF token invalid");
    }

    echo "Form submitted successfully!";
}
?>

<form method="POST">

<input type="hidden" name="token" value="<?php echo $_SESSION["token"]; ?>">

Name: <input type="text" name="name"><br><br>

<button type="submit">Submit</button>

</form>