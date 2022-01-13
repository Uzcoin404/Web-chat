<?php
include_once('db.php');
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$query = mysqli_query($conn, "SELECT `status` FROM `users` WHERE user_id = {$user_id}");
if (mysqli_num_rows($query) > 0) {
    echo mysqli_fetch_assoc($query)['status'];
} else {
    echo "error";
}
?>