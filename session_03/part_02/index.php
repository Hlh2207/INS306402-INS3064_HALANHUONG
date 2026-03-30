<?php

$page = $_GET["page"] ?? "home";

switch($page){

case "home":
    echo "<h1>Home Page</h1>";
    break;

case "about":
    echo "<h1>About Page</h1>";
    break;

case "contact":
    echo "<h1>Contact Page</h1>";
    break;

default:
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}

?>

<hr>

<a href="?page=home">Home</a> |
<a href="?page=about">About</a> |
<a href="?page=contact">Contact</a>