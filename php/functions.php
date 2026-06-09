<?php
function dataPath($filename) {
    $dir = __DIR__ . "/../data";

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    return $dir . "/" . $filename;
}

function readJsonFile($filename) {
    $file = dataPath($filename);

    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    $content = file_get_contents($file);
    $data = json_decode($content, true);

    return is_array($data) ? $data : [];
}

function writeJsonFile($filename, $data) {
    $file = dataPath($filename);
    file_put_contents($file, json_encode(array_values($data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function getUsers() {
    return readJsonFile("users.json");
}

function saveUsers($users) {
    writeJsonFile("users.json", $users);
}

function getMessages() {
    return readJsonFile("items.json");
}

function saveMessages($messages) {
    writeJsonFile("items.json", $messages);
}

function allowedServices() {
    return [
        "Transport pasageri",
        "Transport colete",
        "Mutări în Paris",
        "Transport auto"
    ];
}

function validateMessageData($name, $phone, $service, $message) {
    if ($name === "" || $phone === "" || $service === "" || $message === "") {
        return "Toate câmpurile sunt obligatorii.";
    }

    if (strlen($name) < 2) {
        return "Numele trebuie să conțină cel puțin 2 caractere.";
    }

    if (!preg_match('/^[0-9+()\s-]{6,20}$/', $phone)) {
        return "Numărul de telefon nu este valid.";
    }

    if (!in_array($service, allowedServices(), true)) {
        return "Serviciul ales nu este valid.";
    }

    if (strlen($message) < 5) {
        return "Mesajul trebuie să conțină cel puțin 5 caractere.";
    }

    return "";
}

function saveMessage($name, $phone, $service, $message) {
    $messages = getMessages();

    $messages[] = [
        "name" => $name,
        "phone" => $phone,
        "service" => $service,
        "message" => $message,
        "date" => date("Y-m-d H:i:s")
    ];

    saveMessages($messages);
}

function updateMessage($id, $name, $phone, $service, $message) {
    $messages = getMessages();

    if (!isset($messages[$id])) {
        return false;
    }

    $messages[$id]["name"] = $name;
    $messages[$id]["phone"] = $phone;
    $messages[$id]["service"] = $service;
    $messages[$id]["message"] = $message;
    $messages[$id]["updated_at"] = date("Y-m-d H:i:s");

    saveMessages($messages);
    return true;
}

function deleteMessage($id) {
    $messages = getMessages();

    if (!isset($messages[$id])) {
        return false;
    }

    unset($messages[$id]);
    saveMessages($messages);

    return true;
}
?>