// JavaScript for auto-rolling banner (replace with your own implementation)
let currentSlide = 0;
const slides = document.querySelectorAll('.banner');
const maxSlides = slides.length;

function rollBanner() {
    slides[currentSlide].style.display = 'none';
    currentSlide = (currentSlide + 1) % maxSlides;
    slides[currentSlide].style.display = 'block';
}

setInterval(rollBanner, 5000); // Roll the banner every 5 seconds (adjust as needed)
