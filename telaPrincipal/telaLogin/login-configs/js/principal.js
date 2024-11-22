window.onload = function() {
    if (!getCookie('cookies_aceitos')) {
        document.getElementById('cookie-banner').style.display = 'block';
    }


    document.getElementById('accept-cookies').onclick = function() {
        setCookie('cookies_aceitos', 'sim', 30); 
        document.getElementById('cookie-banner').style.display = 'none';
    };
};

function getCookie(name) {
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(name, value, days) {
    let d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}
