<?php
if ($_GET['lang']) {   
    $lang = $_GET['lang'];
} else {
    if ($_COOKIE['lang']) {   
        $lang = $_COOKIE['lang'];
    } else {
        setcookie("lang",'en', 2147483647, '/');
    }
}

ob_start();
include_once('db.php');
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($name) && !empty($phone) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT phone FROM users WHERE phone = '{$phone}'");
    if (mysqli_num_rows($sql) > 0) {
        echo $lang=='uz' ? "$phone - Bu Telefon raqami band" : "$phone - This phone number is already exist!";
    } else{
        if (isset($_FILES['avatar']) && pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION)) {
            $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            $imgPath = "../img/avatar/$phone.$ext";
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $imgPath)) {
                $status = "Online";
                $user_id = rand(time(), 10000000);
                $sql2 = mysqli_query($conn, "INSERT INTO users (user_id, name, phone, password, avatar, status) VALUES ({$user_id}, '{$name}', '{$phone}', '{$password}', '{$imgPath}', '{$status}')");
                if ($sql2) {
                    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}'");
                    if (mysqli_num_rows($sql3) > 0) {
                        $row = mysqli_fetch_assoc($sql3);
                        setcookie("phone", $row['phone'], time() + 3 * 24 * 60 * 60, "/");
                        setcookie("password", $row['password'], time() + 3 * 24 * 60 * 60, "/");
                        setcookie("user_id", $row['user_id'], time() + 3 * 24 * 60 * 60, "/");
                        echo "success"; 
                    }
                } else{
                    echo $lang=='uz' ? "Nimadir xato ketdi" : "Something went wrong!";
                }
            }
        } else {
            echo $lang=='uz' ? "Iltimos avatar (rasm) Yuklang" : "Please upload your avatar";
        }
    }
} else {
    echo $lang=='uz' ? "Barcha bo'limlar to'ldirilishi shart" : "All input field are required";
}
ob_end_flush();
?>