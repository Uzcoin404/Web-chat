const form = document.querySelector('.register_form'),
      errorMessage = document.querySelectorAll('.error_message'),
      submitBtn = document.querySelector('.submitBtn');

form.addEventListener('submit', function(e){
    e.preventDefault();
});
submitBtn.addEventListener('click', function(){
    this.disabled = true;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/signup.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data.includes('success')) {
                    location.href = "../pages/login.php"
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
    for (let i = 0; i < errorMessage.length; i++) {                        
        errorMessage[i].innerHTML = data;
        errorMessage[i].style.display = 'block';
    }
}