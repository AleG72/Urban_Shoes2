
const carruselTrack = document.querySelector('.carrusel-track');
const images = document.querySelectorAll('.carrusel img');
const imageCount = images.length;
let currentIndex = 0;


function moveCarousel() {
    currentIndex = (currentIndex + 1) % imageCount; 
    const offset = -currentIndex * 100;
    carruselTrack.style.transform = `translateX(${offset}%)`;
}


setInterval(moveCarousel, 7000);


document.querySelector('.prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + imageCount) % imageCount;
    const offset = -currentIndex * 100;
    carruselTrack.style.transform = `translateX(${offset}%)`;
});

document.querySelector('.next').addEventListener('click', () => {
    moveCarousel();
});
