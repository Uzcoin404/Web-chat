<?php
include_once('pages/header.php');
?>
    
    <div class="wrapper">
        <div class="introduce">
            <div class="introduce_content">
                <div class="intr_pages">
                    <div class="intr_page welcome">
                        <h1 class="info_page_title introduce_title"><?= $lang=='uz' ? "<span>Web chat</span> Kirish qism" : "Introduce <span>Web chat</span>" ?> </h1>
                        <span class="introduce_3d_img"><img src="img/chat-icon.jpg" alt="" class="introduce_logo"></span>
                        <p class="app_info_text"><?= $lang=='en' ? "Web chat (mitti Telegram) is a globally comprehensive web application that allows you to chat with friends and relatives" : "Veb chat (mitti Telegram) global qamrovli bo'lib, do'stlar va yaqinlar bilan suhbatlashadigan veb ilova"?></p>
                        <button class="btn next_btn" type="button" title="Next step"><?= $lang=='uz' ? 'Tushundim' : 'Got it'?></button>
                    </div>
                    <div class="intr_page begin">
                        <h1 class="info_page_title introduce_title"><?= $lang=='uz' ? "Yuklab olishning keragi yo'q <span>Online ishlating</span></span>" : "No Download <span>Using online</span></span>"?></h1>
                        <ul class="skills_list">
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='uz' ? "Veb chat Har qanday joy va <strong>Har qanday qurilmada</strong> ishlay oladi" : "Web chat can work any place and <strong>any device</strong>"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='uz' ? "<strong>Veb chatdan Ro'yxatdan o'ting</strong> va Online foydalaning" : "<strong>Register web chat</strong> and using online"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='uz' ? "Veb chat kompyuter, Telefondagi <strong>Har qanday OS</strong> uchun mavjud" : "Web chat is available for Pc's and Telephone's any device <strong>any OS</strong>"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i><?= $lang=='uz' ? "Bizning server <strong>24/7 ishlaydi</strong> va Siz <strong>istalgan payt</strong> Suhbatlasha olasiz" : "Our server <strong>work 24/7</strong>, You can chatting at <strong>any time</strong>"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='uz' ? "Veb chat xavfsiz va unda <strong>Cheksiz xabar</strong> jo'natish mumkin" : "Web chat secure and <strong>Messages unlimited</strong>"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='uz' ? "Brauzerni oching va <strong>Suhbatlashishni boshlang</strong>" : "Open your Browser and <strong>Start Messaging</strong>"?></li>
                        </ul>
                        <a href="pages/register.php" class="btn begin_btn" type="button" title="<?= $lang=='uz'? "Saytimizda Ro'yxatdan o'ting" : "Register in Our site"?>"><?= $lang=='uz'? "Suhbatlashishni boshlang" : "Start Messaging"?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="language">
            <a href="?lang=uz" class="lang_uz <?= $lang=='uz'? "active" : "" ?>" title="O'zbekcha"><span>UZ</span></a>
            <a href="?lang=en" class="lang_en <?= $lang=='en'||!$lang ? "active" : "" ?>" title="English"><span>EN</span></a>
        </div>
        <div class="creator">
            <p class="author_text">2022 <?= $lang=='en' ? "January | Created by <a href='https://github.com/Uzcoin404'>Uzcoin</a>" : "Yanvar | <a href='https://github.com/Uzcoin404'>Uzcoin</a> Tomonidan yaratildi"?></p>
        </div>
    </div>

    <script src="js/3dtext.js"></script>
    <script src="js/language.js?v=<?= time();?>"></script>
    <script src="js/introduce.js?v=<?= time();?>"></script>
</body>
</html>