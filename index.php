<?
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
                        <h1 class="info_page_title introduce_title"><?= $lang=='en' ? "No Download <span>Using online</span></span>" : "Yuklab olishning keragi yo'q <span>Online ishlating</span></span>"?></h1>
                        <ul class="skills_list">
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='en' ? "Web chat can work any place and <strong>any device</strong>" : "Veb chat Har qanday joy va <strong>Har qanday qurilmada</strong> ishlay oladi"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='en' ? "<strong>Register web chat</strong> and using online" : "<strong>Veb chatdan Ro'yxatdan o'ting</strong> va Online foydalaning"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='en' ? "Web chat is available for Pc's and Telephone's any device <strong>any OS</strong>" : "Veb chat kompyuter, Telefondagi <strong>Har qanday OS</strong> uchun mavjud"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i><?= $lang=='en' ? " Our server <strong>work 24/7</strong>, You can chatting at <strong>any time</strong>" : " Bizning server <strong>24/7 ishlaydi</strong> va Siz <strong>istalgan payt</strong> Suhbatlasha olasiz"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='en' ? "Web chat secure and <strong>Messages unlimited</strong>" : "Veb chat xavfsiz va unda <strong>Cheksiz xabar</strong> jo'natish mumkin"?></li>
                            <li class="skills"><i class="fas fa-check" id="skills_icon"></i> <?= $lang=='en' ? "Open your Browser and <strong>Start Messaging</strong>" : "Brauzerni oching va <strong>Suhbatlashishni boshlang</strong>"?></li>
                        </ul>
                        <a href="pages/register.php" class="btn begin_btn" type="button" title="Register Web chat"><?= $lang=='en'? "Start Messaging" : "Suhbatlashishni boshlang"?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="language">
            <a href="?lang=uz" class="lang_uz <?= $lang=='uz'? "active" : "" ?>" title="O'zbekcha"><span>UZ</span></a>
            <a href="?lang=en" class="lang_en <?= $lang=='en'||!$lang ? "active" : "" ?>" title="English"><span>EN</span></a>
        </div>
    </div>

    <script src="js/3dtext.js"></script>
    <script src="js/language.js?v=<?= time();?>"></script>
    <script src="js/introduce.js?v=<?= time();?>"></script>
</body>
</html>