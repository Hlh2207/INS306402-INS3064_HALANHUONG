<?php
// --- Bài 01: Hello Strings ---
$name = "Alice";
$city = "Paris";
echo $name . " lives in " . $city . ".";
echo "<hr>";

// --- Bài 02: Math Ops ---
$x = 10;
$y = 5;
echo ($x + $y) . ", " . ($x - $y) . ", " . ($x * $y) . ", " . ($x / $y);
echo "<hr>";

// --- Bài 03: Casting ---
$val = '25.50';
$floatVal = (float)$val;
$intVal = (int)$floatVal;

$type = str_replace("double", "float", gettype($floatVal));

echo $type . "(" . $floatVal . "), ";
echo gettype($intVal) . "(" . $intVal . ")";
echo "<hr>";

// --- Bài 04: Truthiness ---
$isOnline = true;
echo $isOnline ? "User is Online" : "User is Offline";
echo "<hr>";

// --- Bài 05: Array Init ---
$fruits = ["Apple", "Banana", "Pear"];
echo $fruits[1];
echo "<hr>";

// --- Bài 06: Sentence Builder ---
$sentence = "PHP ";
$sentence .= "is ";
$sentence .= "fun";
echo $sentence;
echo "<hr>";

// --- Bài 07: Strict Check ---
$num = 5;
$str = '5';

echo "Equal (" . ($num == $str ? "True" : "False") . "), ";
echo "Identical (" . ($num === $str ? "True" : "False") . ")";

echo "<hr>";

// --- Bài 08: Logic Gate ---
$age = 20;
$hasTicket = true;

if ($age > 18 && $hasTicket) {
    echo "Enter";
} else {
    echo "Deny";
}
?>