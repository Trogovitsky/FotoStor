<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FotoStore - Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        .auth-container {
            max-width: 400px;
            margin: 100px auto;
        }
        .form-control, .btn {
            background-color: #1e1e1e;
            border-color: #333;
            color: #e0e0e0;
        }
        .form-control:focus {
            background-color: #2a2a2a;
            border-color: #444;
            color: #ffffff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    require_once "config.php";
    session_start();
    ?>
    <div class="container auth-container">
        <h2 class="text-center mb-4">FotoStore</h2>
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <ul class="nav nav-tabs mb-3" id="authTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Вход</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Регистрация</button>
            </li>
        </ul>
        <div class="tab-content" id="authTabsContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Имя" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Подтвердите пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
