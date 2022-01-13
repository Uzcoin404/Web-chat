<?php
include_once('../components/db.php');
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$_SESSION['user_id'] ? '' : header("Location: ./login.php");
$user_id ? '' : header("Location: ./users.php");
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
                        <p class="user_status"></p>
                        <input type="hidden" class="user_id" value="<?= $user_id?>">
                    </div>
                </div>
            </div>
            <div class="chat_box"></div>
            <form action="#" class="type_message" autocomplete="off">
                <input type="hidden" name="sender_id" value="<?= $_SESSION['user_id']?>">
                <input type="hidden" name="receiver_id" value="<?= $user['user_id']?>">
                <input type="text" name="message" class="form_message" maxlength="500" placeholder="<?= $lang=='uz' ? "Xabar jo'natish" : "Type message"?>">
                <button type="submit" class="btn form_btn send_btn loading_btn"><i class="fab fa-telegram-plane" title="<?= $lang=='uz' ? "Jo'natish" : "Send"?>"></i> <div class="loadingio-spinner-dual-ring-tpx53pot6w9" id="loading_anim"><div class="ldio-3ci295fbb6x"><div></div><div><div></div></div></div></div></button>
            </form>
        </section>
        <div class="creator">
            <p class="author_text">2022 <?= $lang=='en' ? "January | Created by <a href='https://github.com/Uzcoin404'>Uzcoin</a>" : "Yanvar | <a href='https://github.com/Uzcoin404'>Uzcoin</a> Tomonidan yaratildi"?></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/push.js"></script>
    <script src="../js/chat.js?v=<?= time();?>"></script>

</body>
</html>