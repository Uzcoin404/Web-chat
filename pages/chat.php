<?
include_once('../components/db.php');
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$_SESSION['user_id'] ? '' : header("Location: ./login.php");
$sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = {$user_id}");
if (mysqli_num_rows($sql) > 0) {        
    $user = mysqli_fetch_assoc($sql);
}
include_once('header.php');
?>  
    <div class="wrapper">
        <section class="chat">
            <div class="header">
                <div class="user_profile">
                    <a href="../pages/users.php" class="back_icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="<?= $user['avatar']?>" class="user_avatar" alt="" title="Avatar">
                    <div class="user_details">
                        <h3 class="user_name"><?= $user['name']?></h3>
                        <p class="user_status"><?= $user['status']?></p>
                    </div>
                </div>
            </div>
            <div class="chat_box"></div>
            <form action="#" class="type_message" autocomplete="off">
                <input type="hidden" name="sender_id" value="<?= $_SESSION['user_id']?>">
                <input type="hidden" name="receiver_id" value="<?= $user['user_id']?>">
                <input type="text" name="message" class="form_message" placeholder="<?= $lang=='uz' ? "Xabar jo'natish" : "Type message"?>">
                <button type="submit" class="btn form_btn send_btn"><i class="fab fa-telegram-plane" title="<?= $lang=='uz' ? "Jo'natish" : "Send"?>"></i></button>
            </form>
        </section>
    </div>

    <script src="../js/chat.js?v=<?= time();?>"></script>

</body>
</html>