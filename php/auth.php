<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . "/functions.php";

function isLoggedIn() {
    return isset($_SESSION["user"]);
}

function getLoggedUser() {
    return $_SESSION["user"] ?? null;
}

function protectPage() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}
?>