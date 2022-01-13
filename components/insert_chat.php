<?php
    include_once('db.php');
    $date = date("H:i");
    if (isset($_SESSION['user_id'])) {
        $sender_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
        $receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        
        if (!empty($message)) {
            $sql = mysqli_query($conn, "INSERT INTO `messages` (`sender_id`, `receiver_id`, `message`, `date`) VALUES ({$sender_id},'{$receiver_id}','{$message}','$date')") or die();
        }
    } else {
        header("Location: ../pages/login.php");
    }
?>