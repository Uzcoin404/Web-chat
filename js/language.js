// let daysToExpire = new Date(2147483647).toUTCString();
// !checkCookie('lang') ? document.cookie = `lang=en; expires=${daysToExpire}; domain=web-chat; path=/` : '';
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