<?php

$name = "";
$email = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];

    if(empty($name) || empty($email)){
        $error = "All fields required.";
    }else{
        echo "Form submitted successfully!";
    }
}

?>

<form method="POST">

Name:
<input type="text" name="name" value="<?php echo $name; ?>"><br><br>

Email:
<input type="email" name="email" value="<?php echo $email; ?>"><br><br>

<button type="submit">Submit</button>

</form>

<p><?php echo $error; ?></p>