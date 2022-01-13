<?php
include_once('db.php');
$sender_id = $_SESSION['user_id'];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT user_id = {$sender_id}");
$output = "";

if (mysqli_num_rows($sql) == 0) {
   $output .= "No users available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include_once('data.php');
}
echo $output;
?>