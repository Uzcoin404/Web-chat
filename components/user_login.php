<?
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
        echo "success";
    } else{
        echo "Phone or Password is incorrect";
    }
} else {
    echo "All input field are required";
}
ob_end_flush();
?> 