<?php
function saveMessage($name, $phone, $service, $message) {
    $file = "data/items.json";

    $messages = [];
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $messages = json_decode($content, true) ?? [];
    }

    $messages[] = [
        "name"    => $name,
        "phone"   => $phone,
        "service" => $service,
        "message" => $message,
        "date"    => date("Y-m-d H:i:s")
    ];

    file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}