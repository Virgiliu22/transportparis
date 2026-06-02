<?php
session_start();
require_once "php/save_data.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"] ?? "");
    $phone   = trim($_POST["phone"] ?? "");
    $service = trim($_POST["service"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (empty($name) || empty($phone) || empty($service) || empty($message)) {
        $error = "Toate câmpurile sunt obligatorii.";
    } else {
        saveMessage($name, $phone, $service, $message);
        $success = "Cererea ta a fost trimisă cu succes!";
    }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Confirmare - TransportParis</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="max-width:600px; margin:120px auto; text-align:center; font-family:Poppins,sans-serif;">
        <?php if ($success): ?>
            <h2 style="color:#25d366;">✓ <?= htmlspecialchars($success) ?></h2>
            <p style="color:#555; margin-top:16px;">Te vom contacta în curând la numărul introdus.</p>
            <a href="index.php" style="display:inline-block;margin-top:30px;background:#e31652;color:#fff;padding:14px 32px;border-radius:40px;text-decoration:none;font-weight:700;">Înapoi acasă</a>
        <?php elseif ($error): ?>
            <h2 style="color:#e31652;">✗ <?= htmlspecialchars($error) ?></h2>
            <a href="index.php#contact" style="display:inline-block;margin-top:30px;background:#e31652;color:#fff;padding:14px 32px;border-radius:40px;text-decoration:none;font-weight:700;">Încearcă din nou</a>
        <?php endif; ?>
    </div>
</body>
</html>