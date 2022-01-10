const phpMessage = document.querySelector('.phpMessage');
const userList = document.querySelector('.user_list');
const searchIcon = document.querySelector('.search_icon');
const searchCancel = document.querySelector('.search_cancel');
const search = document.querySelector('.search');
const formSearch = document.querySelector('.form_search');
let isSearching = false;
searchIcon.addEventListener('click', function(){
    search.classList.add('active');
    document.querySelector('.search_text').style.display = 'none';
});
searchCancel.addEventListener('click', function(){
    formSearch.value = "";
    search.classList.remove('active');
    setTimeout(() => {
        document.querySelector('.search_text').style.display = 'block';
    }, 300);
    phpMessage.style.display = 'none';
    isSearching = false;
});

formSearch.addEventListener('input', function(){
    let value = this.value
    if (value.length > 0) {
        isSearching = true;
        phpMessage.innerHTML = "Searching... Please wait";
        phpMessage.style.display = 'block';
        userList.style.display = 'none';
    } else {
        isSearching = false;
        phpMessage.style.display = 'none';
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/search.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                userList.innerHTML = data;
                userList.style.display = 'block';
                phpMessage.style.display = 'none';
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + value);
});

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../components/users.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                !isSearching ? userList.innerHTML = data : '';
            }
        }
    }
    xhr.send();
}, 1000);


window.addEventListener('mouseover', function(){
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
    xhr.send("status=Online");
});
window.addEventListener('mouseout', function(){
    if (window.XMLHttpRequest) {   
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