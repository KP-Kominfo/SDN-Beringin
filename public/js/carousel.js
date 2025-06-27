function setupCarousel(id, className, interval = 5000) {
    const carousel = document.querySelector(`#${id}`);
    const slides = carousel.querySelectorAll(`.${className}`);
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove('opacity-100', 'z-10');
        slides[current].classList.add('opacity-0', 'z-0');

        current = (current + 1) % slides.length;

        slides[current].classList.remove('opacity-0', 'z-0');
        slides[current].classList.add('opacity-100', 'z-10');
    }, interval);
}

document.addEventListener('DOMContentLoaded', () => {
    setupCarousel('carousel-top', 'carousel-item-carousel-top');
    setupCarousel('carousel-bottom', 'carousel-item-carousel-bottom');
});
