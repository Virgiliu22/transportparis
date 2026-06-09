<?php
require_once "php/auth.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($email === "" || $password === "") {
        $error = "Completează email-ul și parola.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Emailul nu este valid.";
    } else {
        $users = getUsers();

        foreach ($users as $user) {
            if (($user["email"] ?? "") === $email && password_verify($password, $user["password"] ?? "")) {
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
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Autentificare - TransportParis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css?v=100">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="auth-page">

<div class="page-controls">
    <select class="lang-select" data-lang-select>
        <option value="ro">RO</option>
        <option value="en">EN</option>
        <option value="fr">FR</option>
    </select>

    <button type="button" class="theme-toggle" data-theme-toggle>🌙</button>
</div>

<div class="auth-box">
    <div class="auth-logo">Transport<span>Paris</span></div>

    <h2 data-i18n="login.title">Autentificare</h2>

    <?php if ($error): ?>
        <p class="auth-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
        <label data-i18n="login.email">Email</label>
        <input type="email" name="email" required data-i18n-placeholder="login.emailPlaceholder" placeholder="Introdu email-ul tău">

        <label data-i18n="login.password">Parolă</label>
        <input type="password" name="password" required data-i18n-placeholder="login.passwordPlaceholder" placeholder="Introdu parola">

        <button type="submit" data-i18n="login.button">Intră în cont</button>
    </form>

    <div class="auth-link">
        <span data-i18n="login.noAccount">Nu ai cont?</span>
        <a href="register.php" data-i18n="login.register">Înregistrează-te</a>
        <br>
        <a href="index.php" data-i18n="login.backHome">Înapoi la pagina principală</a>
    </div>
</div>

<script src="js/script.js?v=100"></script>
</body>
</html>