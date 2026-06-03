<?php
session_start();
require_once "php/functions.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username == "" || $email == "" || $password == "") {
        $error = "Completează toate câmpurile.";
    } else {
        $users = getUsers();

        foreach ($users as $user) {
            if ($user["email"] === $email) {
                $error = "Acest email este deja folosit.";
                break;
            }
        }

        if ($error == "") {
            $users[] = [
                "username" => $username,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT)
            ];

            saveUsers($users);
            $success = "Contul a fost creat cu succes.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Înregistrare - TransportParis</title>
<link rel="stylesheet" href="./css/style.css?v=20">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="auth-page">

<div class="auth-box">
    <div class="auth-logo">Transport<span>Paris</span></div>

    <h2>Înregistrare</h2>

    <?php if ($error): ?>
        <p style="color:#e31652; text-align:center; font-weight:700;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p style="color:green; text-align:center; font-weight:700;">
            <?= htmlspecialchars($success) ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <label>Nume utilizator</label>
        <input type="text" name="username" placeholder="Introdu numele tău" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="Introdu email-ul tău" required>

        <label>Parolă</label>
        <input type="password" name="password" placeholder="Creează o parolă" required>

        <button type="submit">Creează cont</button>
    </form>

    <div class="auth-link">
        Ai deja cont? <a href="login.php">Autentifică-te</a>
    </div>
</div>

</body>
</html>