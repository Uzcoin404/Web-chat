const password = document.querySelector('.form_password');
const passwordEye = document.querySelector('.password_eye');
const inputs = document.querySelectorAll('.form_input');
const labels = document.querySelectorAll('.form_label');
passwordEye.addEventListener('click', function(){
    this.classList.toggle('active');
    if (this.classList.contains('active')) {
        password.type = 'text';
    } else{
        password.type = 'password';
    }      
});
for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('input', function(){
        if (this.value.length > 0) {
            labels[i].classList.add('filled');
        } else{
            labels[i].classList.remove('filled');
        }
    });
}

const form = document.querySelector('.login_form'),
      errorMessage = document.querySelector('.error_message'),
      submitBtn = document.querySelector('.submitBtn');

form.addEventListener('submit', function(e){
    e.preventDefault();
});
submitBtn.addEventListener('click', function(){
    this.disabled = true;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/user_login.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if (data.includes('success')) {
                    location.href = "../pages/users.php"
                } else {
                    console.log(data);
                    setError(data);
                    this.disabled = false;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
});
function setError(data) {
    errorMessage.innerHTML = data;
    errorMessage.style.display = 'block';
}