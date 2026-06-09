<?php
require_once "php/auth.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username === "" || $email === "" || $password === "") {
        $error = "Completează toate câmpurile.";
    } elseif (strlen($username) < 2) {
        $error = "Numele de utilizator trebuie să aibă cel puțin 2 caractere.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Emailul nu este valid.";
    } elseif (strlen($password) < 6) {
        $error = "Parola trebuie să aibă cel puțin 6 caractere.";
    } else {
        $users = getUsers();

        foreach ($users as $user) {
            if (($user["email"] ?? "") === $email) {
                $error = "Acest email este deja folosit.";
                break;
            }
        }

        if ($error === "") {
            $users[] = [
                "username" => $username,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT)
            ];

            saveUsers($users);
            $success = "Contul a fost creat cu succes. Acum poți intra în cont.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Înregistrare - TransportParis</title>
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

    <h2 data-i18n="register.title">Înregistrare</h2>

    <?php if ($error): ?>
        <p class="auth-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p class="auth-success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <form method="POST">
        <label data-i18n="register.username">Nume utilizator</label>
        <input type="text" name="username" required minlength="2" data-i18n-placeholder="register.usernamePlaceholder" placeholder="Introdu numele tău">

        <label data-i18n="register.email">Email</label>
        <input type="email" name="email" required data-i18n-placeholder="register.emailPlaceholder" placeholder="Introdu email-ul tău">

        <label data-i18n="register.password">Parolă</label>
        <input type="password" name="password" required minlength="6" data-i18n-placeholder="register.passwordPlaceholder" placeholder="Minim 6 caractere">

        <button type="submit" data-i18n="register.button">Creează cont</button>
    </form>

    <div class="auth-link">
        <span data-i18n="register.haveAccount">Ai deja cont?</span>
        <a href="login.php" data-i18n="register.login">Autentifică-te</a>
        <br>
        <a href="index.php" data-i18n="login.backHome">Înapoi la pagina principală</a>
    </div>
</div>

<script src="js/script.js?v=100"></script>
</body>
</html>