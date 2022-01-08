<?
while ($users = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM messages WHERE (sender_id = {$users['user_id']} OR receiver_id = {$users['user_id']}) AND (sender_id = {$sender_id} OR receiver_id = {$sender_id}) ORDER BY id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $latestMsg = mysqli_fetch_assoc($query2);
    if (mysqli_num_rows($query2) > 0) {
        $result = $latestMsg['message'];
        $message_date = $latestMsg['date'];
    } else {
        $result = "No messages available";
        $message_date = "";
    }

    (strlen($result) > 25 ? $message = substr($result, 0, 25) : $message = $result);
    $output .= ' <a href="../pages/chat.php?user_id='. $users['user_id']. '" class="user">
                    <div class="user_profile">
                        <img src="'. $users['avatar']. '" class="user_avatar" alt="">
                        <div class="user_details">
                            <h3 class="user_name">'. $users['name']. '</h3>
                            <p class="user_status">'. $message. '</p>
                        </div>
                    </div>
                    <div class="user_content">
                        <span class="user_status_dog"><i class="fas fa-circle"></i></span>
                        <p class="user_time">'. $message_date .'</p>
                    </div>
                </a>';
}
?>