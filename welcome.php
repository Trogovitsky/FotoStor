<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Привет, <?php echo htmlspecialchars($_SESSION["name"]); ?>!</h1>
        <p>Добро пожаловать в FotoStore.</p>
        <a href="logout.php" class="btn btn-danger">Выйти</a>
    </div>
</body>
</html>
