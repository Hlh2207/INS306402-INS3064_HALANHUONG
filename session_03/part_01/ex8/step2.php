<?php

$name = $_POST["name"];
$email = $_POST["email"];

?>

<h2>Confirm Information</h2>

Name: <?php echo htmlspecialchars($name); ?><br>
Email: <?php echo htmlspecialchars($email); ?><br><br>

<form action="step1.php">
<button type="submit">Back</button>
</form>