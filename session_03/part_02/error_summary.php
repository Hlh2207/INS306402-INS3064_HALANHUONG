<?php

$errors = [];
$name = "";
$email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST["name"];
$email = $_POST["email"];

if(empty($name)){
    $errors["name"] = "Name required";
}

if(empty($email)){
    $errors["email"] = "Email required";
}

}

?>

<?php if(!empty($errors)): ?>

<div style="color:red;border:1px solid red;padding:10px;">
<b>Please fix these errors:</b>
<ul>

<?php foreach($errors as $error): ?>

<li><?php echo $error; ?></li>

<?php endforeach; ?>

</ul>
</div>

<?php endif; ?>

<form method="POST">

Name:
<input type="text" name="name" value="<?php echo $name; ?>">
<?php if(isset($errors["name"])) echo "<span style='color:red'>*</span>"; ?>

<br><br>

Email:
<input type="email" name="email" value="<?php echo $email; ?>">
<?php if(isset($errors["email"])) echo "<span style='color:red'>*</span>"; ?>

<br><br>

<button type="submit">Submit</button>

</form>