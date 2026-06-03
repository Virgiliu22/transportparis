<?php
session_start();
require_once "php/functions.php";

protectPage();

$messages = getMessages();
$totalMessages = count($messages);
$services = [];

foreach ($messages as $message) {
    if (!empty($message["service"])) {
        $services[] = $message["service"];
    }
}

$totalServices = count(array_unique($services));
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Pagina utilizatorului - TransportParis</title>
<link rel="stylesheet" href="./css/style.css?v=20">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="dashboard-page">

<div class="dashboard-card">
    <div class="dashboard-top">
        <div>
            <h1>Pagina utilizatorului</h1>
            <p>Bine ai venit, <strong><?= htmlspecialchars($_SESSION["user"]["username"]) ?></strong></p>
            <p>Email: <strong style="color:#e31652;"><?= htmlspecialchars($_SESSION["user"]["email"]) ?></strong></p>
        </div>

        <div class="dashboard-buttons">
            <a href="index.php" class="btn-dark">Acasă</a>
            <a href="logout.php" class="btn-pink">Ieșire din cont</a>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-box">
            <h3><?= $totalMessages ?></h3>
            <p>Total cereri salvate</p>
        </div>

        <div class="stat-box">
            <h3><?= $totalServices ?></h3>
            <p>Servicii solicitate</p>
        </div>

        <div class="stat-box">
            <h3><?= date("Y") ?></h3>
            <p>Anul curent</p>
        </div>
    </div>

    <h2 style="margin-bottom:20px;">Date salvate în JSON</h2>

    <?php if (empty($messages)): ?>
        <p>Nu există încă cereri salvate.</p>
    <?php else: ?>
        <table class="json-table">
            <tr>
                <th>Nume</th>
                <th>Telefon</th>
                <th>Serviciu</th>
                <th>Mesaj</th>
                <th>Data</th>
            </tr>

            <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?= htmlspecialchars($message["name"] ?? "") ?></td>
                    <td><?= htmlspecialchars($message["phone"] ?? "") ?></td>
                    <td><?= htmlspecialchars($message["service"] ?? "") ?></td>
                    <td><?= htmlspecialchars($message["message"] ?? "") ?></td>
                    <td><?= htmlspecialchars($message["date"] ?? "") ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>

</body>
</html>