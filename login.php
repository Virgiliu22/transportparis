<?php
session_start();
require_once "php/functions.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");

    $users = getUsers();

    foreach ($users as $user) {
        if ($user["email"] === $email && password_verify($password, $user["password"])) {
            $_SESSION["user"] = [
                "username" => $user["username"],
                "email" => $user["email"]
            ];

            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Email sau parolă incorectă.";
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Autentificare - TransportParis</title>
<link rel="stylesheet" href="./css/style.css?v=20">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="auth-page">

<div class="auth-box">
    <div class="auth-logo">Transport<span>Paris</span></div>

    <h2>Autentificare</h2>

    <?php if ($error): ?>
        <p style="color:#e31652; text-align:center; font-weight:700;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <label>Email</label>
        <input type="email" name="email" placeholder="Introdu email-ul tău" required>

        <label>Parolă</label>
        <input type="password" name="password" placeholder="Introdu parola" required>

        <button type="submit">Intră în cont</button>
    </form>

    <div class="auth-link">
        Nu ai cont? <a href="register.php">Înregistrează-te</a>
    </div>
</div>

</body>
</html>