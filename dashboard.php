<?php
require_once "php/auth.php";
protectPage();

$error = "";
$notice = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST["action"] ?? "";
    $id = isset($_POST["id"]) ? (int)$_POST["id"] : -1;

    if ($action === "delete") {
        if (deleteMessage($id)) {
            header("Location: dashboard.php?deleted=1");
            exit;
        }

        $error = "Cererea nu a fost găsită.";
    }

    if ($action === "update") {
        $name = trim($_POST["name"] ?? "");
        $phone = trim($_POST["phone"] ?? "");
        $service = trim($_POST["service"] ?? "");
        $messageText = trim($_POST["message"] ?? "");

        $error = validateMessageData($name, $phone, $service, $messageText);

        if ($error === "") {
            if (updateMessage($id, $name, $phone, $service, $messageText)) {
                header("Location: dashboard.php?updated=1");
                exit;
            }

            $error = "Cererea nu a fost găsită.";
        }
    }
}

if (isset($_GET["deleted"])) {
    $notice = "Cererea a fost ștearsă cu succes.";
}

if (isset($_GET["updated"])) {
    $notice = "Cererea a fost modificată cu succes.";
}

$messages = getMessages();
$totalMessages = count($messages);

$services = [];

foreach ($messages as $message) {
    if (!empty($message["service"])) {
        $services[] = $message["service"];
    }
}

$totalServices = count(array_unique($services));

$editId = isset($_GET["edit"]) ? (int)$_GET["edit"] : -1;
$editMessage = $messages[$editId] ?? null;
$user = getLoggedUser();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Pagina utilizatorului - TransportParis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css?v=100">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="dashboard-page">

<div class="page-controls dashboard-controls">
    <select class="lang-select" data-lang-select>
        <option value="ro">RO</option>
        <option value="en">EN</option>
        <option value="fr">FR</option>
    </select>

    <button type="button" class="theme-toggle" data-theme-toggle>🌙</button>
</div>

<div class="dashboard-card">
    <div class="dashboard-top">
        <div>
            <h1 data-i18n="dashboard.title">Pagina utilizatorului</h1>
            <p>
                <span data-i18n="dashboard.welcome">Bine ai venit</span>,
                <strong><?= htmlspecialchars($user["username"] ?? "") ?></strong>
            </p>
            <p>
                Email:
                <strong style="color:#e31652;"><?= htmlspecialchars($user["email"] ?? "") ?></strong>
            </p>
        </div>

        <div class="dashboard-buttons">
            <a href="index.php" class="btn-dark" data-i18n="nav.home">Acasă</a>
            <a href="logout.php" class="btn-pink" data-i18n="nav.logout">Ieșire</a>
        </div>
    </div>

    <?php if ($notice): ?>
        <p class="dash-notice"><?= htmlspecialchars($notice) ?></p>
    <?php endif; ?>

    <?php if ($error): ?>
        <p class="dash-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <div class="stats-grid">
        <div class="stat-box">
            <h3><?= $totalMessages ?></h3>
            <p data-i18n="dashboard.totalRequests">Total cereri salvate</p>
        </div>

        <div class="stat-box">
            <h3><?= $totalServices ?></h3>
            <p data-i18n="dashboard.totalServices">Servicii solicitate</p>
        </div>

        <div class="stat-box">
            <h3><?= date("Y") ?></h3>
            <p data-i18n="dashboard.currentYear">Anul curent</p>
        </div>
    </div>

    <?php if ($editMessage): ?>
        <div class="edit-box">
            <h2 data-i18n="dashboard.editTitle">Modifică cererea</h2>

            <form method="POST" class="edit-form">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $editId ?>">

                <label data-i18n="form.name">Nume și Prenume *</label>
                <input type="text" name="name" value="<?= htmlspecialchars($editMessage["name"] ?? "") ?>" required>

                <label data-i18n="form.phone">Telefon *</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($editMessage["phone"] ?? "") ?>" required>

                <label data-i18n="form.service">Serviciu dorit *</label>
                <select name="service" required>
                    <?php foreach (allowedServices() as $service): ?>
                        <option value="<?= htmlspecialchars($service) ?>" <?= (($editMessage["service"] ?? "") === $service) ? "selected" : "" ?>>
                            <?= htmlspecialchars($service) ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <label data-i18n="form.message">Comentariu sau mesaj *</label>
                <textarea name="message" required><?= htmlspecialchars($editMessage["message"] ?? "") ?></textarea>

                <div class="edit-actions">
                    <button type="submit" class="btn-pink form-btn" data-i18n="dashboard.saveChanges">Salvează modificările</button>
                    <a href="dashboard.php" class="btn-dark cancel-btn" data-i18n="dashboard.cancel">Anulează</a>
                </div>
            </form>
        </div>
    <?php endif; ?>

    <h2 class="dashboard-subtitle" data-i18n="dashboard.jsonTitle">Date salvate în JSON</h2>

    <?php if (empty($messages)): ?>
        <p data-i18n="dashboard.empty">Nu există încă cereri salvate.</p>
    <?php else: ?>
        <div class="table-scroll">
            <table class="json-table">
                <tr>
                    <th>Nr.</th>
                    <th data-i18n="table.name">Nume</th>
                    <th data-i18n="table.phone">Telefon</th>
                    <th data-i18n="table.service">Serviciu</th>
                    <th data-i18n="table.message">Mesaj</th>
                    <th data-i18n="table.date">Data</th>
                    <th data-i18n="table.actions">Acțiuni</th>
                </tr>

                <?php foreach ($messages as $id => $message): ?>
                    <tr>
                        <td><?= $id + 1 ?></td>
                        <td><?= htmlspecialchars($message["name"] ?? "") ?></td>
                        <td><?= htmlspecialchars($message["phone"] ?? "") ?></td>
                        <td><?= htmlspecialchars($message["service"] ?? "") ?></td>
                        <td><?= htmlspecialchars($message["message"] ?? "") ?></td>
                        <td><?= htmlspecialchars($message["date"] ?? "") ?></td>
                        <td class="actions-cell">
                            <a href="dashboard.php?edit=<?= $id ?>" class="small-edit" data-i18n="dashboard.edit">Modifică</a>

                            <form method="POST" onsubmit="return confirm('Sigur vrei să ștergi această cerere?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <button type="submit" class="small-delete" data-i18n="dashboard.delete">Șterge</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>

<script src="js/script.js?v=100"></script>
</body>
</html>