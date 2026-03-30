<?php
// --- Bài 01: Grade Bot ---
$score = 85;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}
echo "<hr>";

// --- Bài 02: Day Planner ---
$input = 3;

switch ($input) {
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    case 4: echo "Thursday"; break;
    case 5: echo "Friday"; break;
    case 6: echo "Saturday"; break;
    case 7: echo "Sunday"; break;
    default: echo "Invalid";
}
echo "<hr>";

// --- Bài 03: Multi-Table ---
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo ($i * $j) . " ";
    }
    echo "\n";
}
echo "<hr>";

// --- Bài 04: Cart Total ---
$prices = [10, 20, 5];
$total = 0;

foreach ($prices as $price) {
    $total += $price;
}
echo "Total: " . $total;
echo "<hr>";

// --- Bài 05: Countdown ---
$i = 10;
while ($i >= 1) {
    echo $i . ", ";
    $i--;
}
echo "Liftoff!";
echo "<hr>";

// --- Bài 06: Even Filter ---
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<hr>";

// --- Bài 07: Array Reverse ---
$input = [1, 2, 3];
$reversed = [];
$length = count($input);

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed[] = $input[$i];
}
echo "[" . implode(", ", $reversed) . "]";

echo "<hr>";

// --- Bài 08: FizzBuzz ---
$results = [];

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $results[] = "FizzBuzz";
    } elseif ($i % 3 == 0) {
        $results[] = "Fizz";
    } elseif ($i % 5 == 0) {
        $results[] = "Buzz";
    } else {
        $results[] = $i;
    }
}
echo implode(", ", $results) . "...";
?>