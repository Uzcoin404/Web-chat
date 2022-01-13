<?php
include_once('header.php');
?> 
    <div class="wrapper">
        <form action="#" class="login_form">
            <h2 class="info_page_title"><?= $lang=='uz' ? "Real vaqtli" : "Realtime"?> <span>Web chat</span></h2>
            <div class="info_page form_page">
                <div class="error_message"></div>
                <div class="field">
                    <input type="number" name="phone" class="form_input" value="<?= $_COOKIE['phone'] ? $_COOKIE['phone'] : ''?>">
                    <label for="phone" class="form_label"><i class="fas fa-phone"></i> <?= $lang=='uz' ? "Telefon raqamingiz" : "Your phone"?></label>
                </div>
                <div class="field field_password">
                    <input type="password" name="password" class="form_input form_password" value="<?= $_COOKIE['password'] ? $_COOKIE['password'] : ''?>" autocomplete="off">
                    <label for="password" class="form_label"><i class="fas fa-lock-alt"></i> <?= $lang=='uz' ? "Parolingiz" : "Your password"?></label>
                    <span class="password_eye"><i class="fas fa-eye"></i></span>
                </div>
                <button type="submit" class="btn form_btn submitBtn loading_btn"><?= $lang=='uz' ? "Hisobga kirish" : "Sign in"?> <div class="loadingio-spinner-dual-ring-tpx53pot6w9" id="loading_anim"><div class="ldio-3ci295fbb6x"><div></div><div><div></div></div></div></div></button>
                <p class="form_text"><?= $lang=='uz' ? "Hisobingiz yo'qmi ?" : "No account ?"?> <a href="../pages/register.php"><?= $lang=='uz' ? "Ro'yxatdan o'ting" : "Sign up now"?></a></p>
            </div>
        </form>
        <div class="language">
            <a href="?lang=uz" class="lang_uz <?= $lang=='uz'? "active" : "" ?>" title="O'zbekcha"><span>UZ</span></a>
            <a href="?lang=en" class="lang_en <?= $lang=='en'||!$lang ? "active" : "" ?>" title="English"><span>EN</span></a>
        </div>
        <div class="creator">
            <p class="author_text">2022 <?= $lang=='en' ? "January | Created by <a href='https://github.com/Uzcoin404'>Uzcoin</a>" : "Yanvar | <a href='https://github.com/Uzcoin404'>Uzcoin</a> Tomonidan yaratildi"?></p>
        </div>
    </div>

    <script src="../js/login.js?v=<?= time();?>"></script>

</body>
</html>