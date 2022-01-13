window.addEventListener('beforeunload', function(e) {
    let xhr = new XMLHttpRequest();
        xhr.open("POST", "../components/set-status.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("user_id=" + getCookie('user_id'));
});

const sendBtn = document.querySelector('.send_btn'),
      form_message = document.querySelector('.form_message'),
      form = document.querySelector('.type_message'),
      userStatus = document.querySelector('.user_status'),
      userId = document.querySelector('.user_id'),
      chatBox = document.querySelector('.chat_box');
let isSending = false;
let isScrolling = false;

document.activeElement = form_message
form.addEventListener('click', function(e){
    e.preventDefault();
});

chatBox.addEventListener('scroll', function(){
    isScrolling = true;
    this.addEventListener('mouseover', function(){
        isScrolling = true;
    });
    this.addEventListener('mouseout', function(){
        isScrolling = false;
    });
});

sendBtn.addEventListener('click', function(){
    this.disabled = true;
    isSending = true;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/insert_chat.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                form_message.value = "";
                this.disabled = false;
                isSending = false;
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
});

const getChat = setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/get-chat.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                !isScrolling ? scrollToBottom() : '';
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 1000);
function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/get-status.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                data != 'error' ? userStatus.innerHTML = data : '';
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("user_id=" + userId.value);
}, 1500);

let counter = 0
document.addEventListener('mousemove', function(){
    counter+=1
    if (counter == 1) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../components/set-status.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    setTimeout(() => {
                        counter = 0;
                    }, 1500);
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("status=Online");
    }
});
// For touch devices
document.addEventListener('touchmove', function(){
    counter+=1
    if (counter == 1) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../components/set-status.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    setTimeout(() => {
                        counter = 0;
                    }, 1500);
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("status=Online");
    }
});
document.addEventListener('mouseout', function(event){
    if (event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {  
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../components/set-status.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("user_id=" + getCookie('user_id'));
    }
});
document.addEventListener('touchcancel', function(event){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/set-status.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("user_id=" + getCookie('user_id'));
});

function getCookie(cName) {
    let name = cName + '=';
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
}
function checkCookie(name) {
    let cName = getCookie(name);
    if (cName != undefined && cName != 'signin') {
        return true;
    } else{
        return false;
    }
}

console.log(
    "\n"+
    " 🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻🐱‍💻\n"+
    "\n"+
    " [ Created by Uzcoin ]\n"+
    " [  ➡️ https://github.com/Uzcoin404 ]\n"+
    " [  ➡️ uzcointg@gmail.com ]\n"
)