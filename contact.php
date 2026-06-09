<?php
require_once "php/auth.php";

$status = "error";
$titleKey = "contactResult.errorTitle";
$textKey = "contactResult.errorText";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $service = trim($_POST["service"] ?? "");
    $message = trim($_POST["message"] ?? "");

    $validationError = validateMessageData($name, $phone, $service, $message);

    if ($validationError === "") {
        saveMessage($name, $phone, $service, $message);

        $status = "success";
        $titleKey = "contactResult.successTitle";
        $textKey = "contactResult.successText";
    } else {
        if ($name === "" || $phone === "" || $service === "" || $message === "") {
            $titleKey = "contactResult.requiredTitle";
            $textKey = "contactResult.requiredText";
        } elseif (!preg_match('/^[0-9+()\s-]{6,20}$/', $phone)) {
            $titleKey = "contactResult.phoneTitle";
            $textKey = "contactResult.phoneText";
        } elseif (strlen($message) < 5) {
            $titleKey = "contactResult.messageTitle";
            $textKey = "contactResult.messageText";
        } else {
            $titleKey = "contactResult.errorTitle";
            $textKey = "contactResult.errorText";
        }
    }
} else {
    header("Location: index.php#contact");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Confirmare - TransportParis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css?v=100">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="result-page">

<div class="page-controls">
    <select class="lang-select" data-lang-select>
        <option value="ro">RO</option>
        <option value="en">EN</option>
        <option value="fr">FR</option>
    </select>

    <button type="button" class="theme-toggle" data-theme-toggle>🌙</button>
</div>

<div class="result-card <?= $status === "success" ? "result-success" : "result-error" ?>">
    <div class="result-icon">
        <?= $status === "success" ? "✓" : "×" ?>
    </div>

    <h1 data-i18n="<?= htmlspecialchars($titleKey) ?>">Confirmare</h1>

    <p data-i18n="<?= htmlspecialchars($textKey) ?>">
        Cererea ta a fost procesată.
    </p>

    <div class="result-actions">
        <a href="index.php#contact" class="main-btn" data-i18n="contactResult.backForm">Înapoi la formular</a>
        <a href="index.php" class="second-result-btn" data-i18n="contactResult.backHome">Pagina principală</a>
    </div>
</div>

<script src="js/script.js?v=100"></script>
</body>
</html>