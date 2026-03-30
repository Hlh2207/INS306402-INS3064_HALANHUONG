<?php
// --- Bài 01: Greeter ---
function greet(string $name): string {
    return "Hello, " . $name . "!";
}

echo greet("Sam");
echo "<hr>";

// --- Bài 02: Area Calc ---
function area(float $w, float $h): float {
    return $w * $h;
}

echo area(5.5, 2);
echo "<hr>";

// --- Bài 03: Adult Check ---
function isAdult(?int $age): bool {
    if ($age === null) {
        return false;
    }
    return $age >= 18;
}

echo var_export(isAdult(null), true);
echo "<hr>";

// --- Bài 04: Safe Divide ---
function safeDiv(float $a, float $b): ?float {
    if ($b == 0) {
        return null;
    }
    return $a / $b;
}

var_dump(safeDiv(10, 0));
echo "<hr>";

// --- Bài 05: Formatter ---
function fmt(float $amt, string $c = '$'): string {
    return $c . number_format($amt, 2);
}

echo fmt(50);
echo "<hr>";

// --- Bài 06: Pure Math ---
function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 10);
?>