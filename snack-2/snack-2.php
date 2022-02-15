<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$failed = "Access denied!";
$succes = "Access allowed";

if (strlen($name) < 3 || !strpos($email, '.') || !strpos($email, '@') || !is_numeric($age)) {
    echo "<h1>$failed</h1>";
} else{
    echo "<h1>$succes</h1>";
}
?>
