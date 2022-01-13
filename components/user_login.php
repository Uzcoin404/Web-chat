<?php
if ($_GET['lang']) {   
    setcookie("lang",$_GET['lang'], 2147483647, '/');
    $lang = $_GET['lang'];
} else {
    if ($_COOKIE['lang']) {   
        setcookie("lang",$_COOKIE['lang'], 2147483647, '/');
        $lang = $_COOKIE['lang'];
    } else {
        setcookie("lang",'en', 2147483647, '/');
    }
}

ob_start();
include_once('db.php');
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($phone) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        mysqli_fetch_assoc($sql);
        $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}'");
        $row = mysqli_fetch_assoc($sql3);
        $_SESSION['user_id'] = $row['user_id'];
        setcookie("phone", $row['phone'], time() + 3 * 24 * 60 * 60, "/");
        setcookie("password", $row['password'], time() + 3 * 24 * 60 * 60, "/");
        setcookie("user_id", $row['user_id'], time() + 3 * 24 * 60 * 60, "/");
        echo "success";
    } else{
        echo $lang=='uz' ? "Parol yoki Telefon raqam noto'g'ri!" : "Password or Phone number is incorrect";
    }
} else {
    echo $lang=='uz' ? "Barcha bo'limlar to'ldirilishi shart" : "All input field are required";
}
ob_end_flush();
?> 