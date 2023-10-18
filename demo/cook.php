<?php
// Start a session
session_start();

// Check if a session variable 'counter' exists, and initialize it to 0 if not
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// Check if a cookie 'cookie_counter' exists, and initialize it to 0 if not
if (!isset($_COOKIE['cookie_counter'])) {
    setcookie('cookie_counter', 0, time() + 3600); // Cookie lasts for 1 hour (3600 seconds)
}

// Increment the session-based counter
$_SESSION['counter']++;

// Increment the cookie-based counter
$cookieCounter = $_COOKIE['cookie_counter'];
$cookieCounter++;
setcookie('cookie_counter', $cookieCounter, time() + 3600); // Update the cookie

// Display the session variable
echo "Session Counter: " . $_SESSION['counter'] . "<br>";

// Display the cookie variable
echo "Cookie Counter: " . $_COOKIE['cookie_counter'] . "<br>";
?>
