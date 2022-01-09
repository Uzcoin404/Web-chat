class imgUploader {
    constructor(){
        const formWrapper = document.querySelector('.form__wrapper');
        const formCancel = document.querySelector('.formUploader__cancel');
        const imgUploader = document.querySelector('.imgUploader');
        const inputs = document.querySelectorAll('.form_input');
        const passwords = document.querySelectorAll('.form_password');
        const labels = document.querySelectorAll('.form_label');
        const passwordMatch = document.querySelector('.password_match');
        const passwordWarn = document.querySelector('.password_warn');
        const formImg = document.querySelector('.form__img');
        const infoPage = document.querySelector('.info_page');
        const passwordEye = document.querySelectorAll('.password_eye');
        const backBtn = document.querySelector('.backBtn');
        const nextBtn = document.querySelector('.nextBtn');
        const submitBtn = document.querySelector('.submitBtn');
        const formImgName = document.querySelector('.formUploader__fileName p');
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
        formImg.addEventListener('click', function(){
            imgUploader.click();
        })
        imgUploader.addEventListener('change', function(){
            const formFile = this.files[0];
            if (formFile) {
                const reader = new FileReader();
                reader.onload = function(){
                    let result = reader.result;
                    formImg.src = result;
                    formWrapper.classList.add('active');
                }
                formCancel.addEventListener('click', function(){
                    formImg.src = "";
                    imgUploader.value = ''; 
                    formWrapper.classList.remove('active');
                })
                reader.readAsDataURL(formFile);
            }
            if (this.value) {
                let valueStore = this.value.match(regExp);
                formImgName.innerHTML = valueStore;
            }
        });
        nextBtn.addEventListener('click', function(){
            infoPage.style.marginLeft = '-100%';
        });
        backBtn.addEventListener('click', function(){
            infoPage.style.marginLeft = '0%';
        });
        for (let i = 0; i < passwords.length; i++) {   
            passwordEye[i].addEventListener('click', function(){
                this.classList.toggle('active');
                if (this.classList.contains('active')) {
                    passwords[i].type = 'text';
                } else{
                    passwords[i].type = 'password';
                }      
            });
            passwords[i].addEventListener('input', function(){
                if (passwords[i].value.length > 5) {   
                    if (passwords[0].value != passwords[1].value) {
                        submitBtn.disabled = true;
                        passwordMatch.style.display = 'block'
                    } else{
                        submitBtn.disabled = false;
                        passwordMatch.style.display = 'none'
                    }
                    passwordWarn.style.display = 'none'
                } else{
                    passwordWarn.style.display = 'block'
                    submitBtn.disabled = true;
                }
            });
        }
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('input', function(){
                if (this.value.length > 0) {
                    labels[i].classList.add('filled');
                } else{
                    labels[i].classList.remove('filled');
                }
            });
        }
    }
}
const imguploader = new imgUploader();