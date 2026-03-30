<?php

$result = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $a = (float) $_POST["num1"];
    $b = (float) $_POST["num2"];
    $op = $_POST["operation"];

    switch($op){
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            if($b == 0){
                $result = "Cannot divide by zero";
            }else{
                $result = $a / $b;
            }
            break;
    }
}
?>

<form method="POST">

Number 1: <input type="number" step="any" name="num1"><br><br>

Operation:
<select name="operation">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>

<br><br>

Number 2: <input type="number" step="any" name="num2"><br><br>

<button type="submit">Calculate</button>

</form>

<h3>Result: <?php echo $result; ?></h3>