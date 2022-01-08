<?
include_once('db.php');
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%{$searchTerm}%' OR phone LIKE '%{$searchTerm}%'");
$output = '';

if (mysqli_num_rows($sql) > 0) {
    include_once('data.php');
} else {
    $output .= "No users found";
}
echo $output;
?>