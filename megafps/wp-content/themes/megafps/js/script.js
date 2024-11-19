const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');

let index = 0;

function showSlide(n) {
    if (n >= images.length) {
        index = 0;
    } else if (n < 0) {
        index = images.length - 1;
    } else {
        index = n;
    }
    slides.style.transform = `translateX(${-index * 100}%)`;
}

prevButton.addEventListener('click', () => {
    showSlide(index - 1);
});

nextButton.addEventListener('click', () => {
    showSlide(index + 1);
});

// Optional: Auto-slide every 5 seconds
setInterval(() => {
    showSlide(index + 1);
}, 5000);
