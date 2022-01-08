<?
include_once('header.php');
?> 
    <div class="wrapper">
        <form action="#" class="login_form">
            <h2 class="info_page_title">Realtime <span>Web chat</span></h2>
            <div class="info_page form_page">
                <div class="error_message"></div>
                <div class="field">
                    <input type="number" name="phone" class="form_input" value="<?= $_COOKIE['phone'] ? $_COOKIE['phone'] : ''?>">
                    <label for="phone" class="form_label"><i class="fas fa-phone"></i> Your phone</label>
                </div>
                <div class="field field_password">
                    <input type="password" name="password" class="form_input form_password" value="<?= $_COOKIE['password'] ? $_COOKIE['password'] : ''?>" autocomplete="off">
                    <label for="password" class="form_label"><i class="fas fa-lock-alt"></i> Your password</label>
                    <span class="password_eye"><i class="fas fa-eye"></i></span>
                </div>
                <button type="submit" class="btn form_btn submitBtn">Begin Chat</button>
                <p class="form_text">No Account ? <a href="../pages/register.php">Sign up Now</a></p>
            </div>
        </form>
    </div>

    <script src="../js/login.js?v=<?= time();?>"></script>

</body>
</html>