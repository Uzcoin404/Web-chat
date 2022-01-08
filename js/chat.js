const sendBtn = document.querySelector('.send_btn'),
      form_message = document.querySelector('.form_message'),
      form = document.querySelector('.type_message'),
      chatBox = document.querySelector('.chat_box');
let isSending = false;

form.addEventListener('click', function(e){
    e.preventDefault();
});

sendBtn.addEventListener('click', function(){
    this.disabled = true;
    isSending = true;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/insert_chat.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                sendBtn.value = "";
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
                console.log(isSending);
                // console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 1000);