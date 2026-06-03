<?php
function getUsers() {
    $file = "data/users.json";

    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
    }

    $content = file_get_contents($file);
    return json_decode($content, true) ?? [];
}

function saveUsers($users) {
    file_put_contents("data/users.json", json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function isLoggedIn() {
    return isset($_SESSION["user"]);
}

function protectPage() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}

function getMessages() {
    $file = "data/items.json";

    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
    }

    $content = file_get_contents($file);
    return json_decode($content, true) ?? [];
}
?>