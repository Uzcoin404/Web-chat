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