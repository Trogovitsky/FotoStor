<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);

    if ($password !== $confirm_password) {
        $error = "Пароли не совпадают.";
    } else {
        $sql = "SELECT id FROM users WHERE email = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $error = "Этот email уже зарегистрирован.";
                } else {
                    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
                    if ($stmt = mysqli_prepare($conn, $sql)) {
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed_password);
                        if (mysqli_stmt_execute($stmt)) {
                            header("location: login.php");
                            exit();
                        } else {
                            $error = "Что-то пошло не так. Попробуйте позже.";
                        }
                    }
                }
            } else {
                $error = "Что-то пошло не так. Попробуйте позже.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
?>
