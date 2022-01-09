<?
    include_once('db.php');
    if (isset($_SESSION['user_id'])) {
        $sender_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
        $receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
        $output = "";

        $sql = "SELECT * FROM messages LEFT JOIN users ON users.user_id = messages.sender_id WHERE (sender_id = {$sender_id} AND receiver_id = {$receiver_id}) OR (sender_id = {$receiver_id} AND receiver_id = {$sender_id}) ORDER BY messages.id";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            while ($chat = mysqli_fetch_assoc($query)) {
                if ($chat['sender_id'] === $sender_id) {
                    $output .= '<div class="message outgoing">
                                    <div class="message_details">
                                        <p>'. $chat['message'] .'   
                                            <span class="message_date">'. $chat['date'] .'</span>
                                        </p>
                                    </div>
                                </div>';
                } else{
                    $output .= '<div class="message incoming">
                                    <img src="'. $chat['avatar'] .'" alt="">
                                    <div class="message_details">
                                        <p>'. $chat['message'] .' 
                                            <span class="message_date">'. $chat['date'] .'</span>
                                        </p>
                                    </div>
                                </div>';
                }
            }
            echo $output;
        }
    } else {
        header("Location: ../pages/login.php");
    }
?>