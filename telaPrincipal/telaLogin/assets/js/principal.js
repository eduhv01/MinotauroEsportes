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
let currentIndex = 0;
const images = document.querySelectorAll('.carousel-slide img');
const totalImages = images.length;

const nextBtn = document.querySelector('.carousel-next');
const prevBtn = document.querySelector('.carousel-prev');
const slide = document.querySelector('.carousel-slide');

function showNextImage() {
  currentIndex = (currentIndex + 1) % totalImages;
  slide.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function showPrevImage() {
  currentIndex = (currentIndex - 1 + totalImages) % totalImages;
  slide.style.transform = `translateX(-${currentIndex * 100}%)`;
}

nextBtn.addEventListener('click', showNextImage);
prevBtn.addEventListener('click', showPrevImage);

// Configurar carrossel para trocar de imagem automaticamente
setInterval(showNextImage, 5000); // Troca a cada 5 segundos