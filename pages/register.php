<?
include_once('header.php');
?> 
    <div class="wrapper">
        <form action="#" enctype="multipart/form-data" class="register_form">
            <h2 class="info_page_title"><?= $lang=='en' ? "Realtime" : "Real vaqtli"?> <span>Web chat</span></h2>
            <div class="form_steps">
                <div class="form_pages">
                    <div class="info_page form_page">
                        <div class="error_message"></div>
                        <div class="field">
                            <input type="text" name="name" class="form_input" required>
                            <label for="name" class="form_label"><i class="fas fa-user"></i> <?= $lang=='en' ? "Your name" : "Ismingiz"?></label>
                        </div>
                        <div class="field">
                            <input type="number" name="phone" class="form_input" required>
                            <label for="phone" class="form_label"><i class="fas fa-phone"></i> <?= $lang=='en' ? "Your phone" : "Telefon raqam"?></label>
                        </div>
                        <div class="field field_password">
                            <input type="password" name="password" class="form_input form_password" autocomplete="off" required>
                            <label for="password" class="form_label"><i class="fas fa-lock-alt"></i> <?= $lang=='en' ? "Your password" : "Parol"?></label>
                            <span class="password_eye"><i class="fas fa-eye"></i></span>
                            <div class="password_warn"><?= $lang=='en' ? "Minimum 6 symbols" : "Eng kamida 6 harf yoki belgi"?></div>
                        </div>
                        <div class="field field_password">
                            <input type="password" class="form_input form_password" autocomplete="off" required>
                            <label for="password" class="form_label"><i class="fas fa-lock-alt"></i> <?= $lang=='en' ? "Re-enter password" : "Parolni qaytadan kiriting"?></label>
                            <span class="password_eye"><i class="fas fa-eye"></i></span>
                            <div class="password_match"><?= $lang=='en' ? "Password does'nt match" : "Parollar bir xil emas"?></div>
                        </div>
                        <button type="button" class="btn form_btn nextBtn"><?= $lang=='en' ? "Next" : "Keyingisi"?></button>
                        <p class="form_text"><?= $lang=='en' ? "Already have account" : "Hisobingiz bormi"?> ? <a href="../pages/login.php"><?= $lang=='en' ? "Sign in" : "Kirish"?></a></p>
                    </div>
                    <div class="avatar_page form_page">
                        <div class="error_message" style="width: 360px;"></div>
                        <div class="form__imgUploader">
                            <div class="form__wrapper">
                                <div class="form__image" title="Avatar">
                                    <img src="" alt="" class="form__img">
                                </div>
                                <div class="formUploader__content">
                                    <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="formUploader__text"><?= $lang=='en' ? "No photo Choosen, yet! <br> Upload your Avatar" : "Rasm hali tanlanmadi <br> Rasmingizni yuklang"?></div>
                                </div>
                                <div class="formUploader__cancel"><i class="fas fa-times"></i></div>
                                <div class="formUploader__fileName"><p>file name</p></div>
                            </div>
                            <input type="file" class="imgUploader" accept=".jpg, .jpeg, .png" name="avatar" tabindex="-1" hidden>
                            <div class="form_buttons">
                                <button type="button" class="btn form_btn backBtn" tabindex="-1"><?= $lang=='en' ? "Back" : "Orqaga"?></button>
                                <button type="submit" class="btn form_btn submitBtn" tabindex="-1"><?= $lang=='en' ? "Submit" : "Tasdiqlash"?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="language">
            <a href="?lang=uz" class="lang_uz <?= $lang=='uz'? "active" : "" ?>" title="O'zbekcha"><span>UZ</span></a>
            <a href="?lang=en" class="lang_en <?= $lang=='en'||!$lang ? "active" : "" ?>" title="English"><span>EN</span></a>
        </div>
    </div>

    <script src="../js/language.js?v=<?= time();?>"></script>
    <script src="../js/register.js?v=<?= time();?>"></script>
    <script src="../js/signup.js?v=<?= time();?>"></script>

</body>
</html>