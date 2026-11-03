<?php
// Area riservata di esempio (repository di prova, codice inventato)
session_start();

if (!isset($_SESSION['utente'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Area riservata</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>
    <div class="contenitore">
        <h1>Benvenuto, <?= htmlspecialchars($_SESSION['utente']) ?></h1>
        <p>Questa è l'area riservata.</p>
        <a href="logout.php">Esci</a>
    </div>
</body>
</html>
