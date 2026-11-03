<?php
// Pagina di accesso di esempio (repository di prova, codice inventato)
session_start();

$errore = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utente = trim($_POST['utente'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($utente === 'demo' && $password === 'demo') {
        $_SESSION['utente'] = $utente;
        header('Location: area-riservata.php');
        exit;
    }
    $errore = 'Credenziali non valide';
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Accesso</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>
    <div class="contenitore">
        <h1>Accedi</h1>
        <?php if ($errore): ?>
            <p class="errore"><?= htmlspecialchars($errore) ?></p>
        <?php endif; ?>
        <form method="post" action="login.php">
            <label for="utente">Utente</label>
            <input type="text" id="utente" name="utente">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <button type="submit">Entra</button>
    </div>
</body>
</html>
