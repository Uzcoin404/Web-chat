<?php
    include_once('db.php');
    $user_id = $_SESSION['user_id'];
    $logout_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    if (isset($user_id)) {
        if (isset($logout_id)) {
            $sql = mysqli_query($conn, "UPDATE users SET status = 'Offline' WHERE user_id = {$user_id}");
            if ($sql) {
                session_unset();
                session_destroy();
                setcookie("phone", '', time() - 30, "/");
                setcookie("password", '', time() - 30, "/");
                setcookie("user_id", '', time() - 30, "/");
                header("Location: ../pages/login.php");
            }
        } else{
            header("Location: ../pages/users.php");
        }
    } else{
        header("Location: ../pages/login.php");
    }
?>