<?
include_once('db.php');
$user_id = $_SESSION['user_id'];
$unique_id = $_POST['user_id'];
$status = $_POST['status'];
echo $unique_id;
if (isset($unique_id) && $status != "Online") {
    $sql = mysqli_query($conn, "UPDATE users SET status = 'Offline' WHERE user_id = {$unique_id}");
    echo $unique_id;
    if ($sql) {
        header("Location: ../pages/login.php");
    }
} elseif (isset($user_id) && $status == "Online") {
    $sql = mysqli_query($conn, "UPDATE users SET status = 'Online' WHERE user_id = {$user_id}");
    echo $user_id . $status;
    if ($sql) {
        header("Location: ../pages/login.php");
    }
} else{
    
    header("Location: ../pages/users.php");
}
?>