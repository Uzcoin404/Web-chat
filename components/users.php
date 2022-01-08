<?
include_once('db.php');
$sql = mysqli_query($conn, "SELECT * FROM users");
$sender_id = $_SESSION['user_id'];
$output = "";

if (mysqli_num_rows($sql) == 1) {
   $output .= "No users available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include_once('data.php');
}
echo $output;
?>