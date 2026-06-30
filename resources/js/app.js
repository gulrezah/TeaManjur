const heroSlider = document.querySelector('[data-hero-slider]');

if (heroSlider) {
    const slides = Array.from(heroSlider.querySelectorAll('[data-hero-slide]'));
    const dots = Array.from(heroSlider.querySelectorAll('[data-hero-dot]'));
    const previousButton = heroSlider.querySelector('[data-hero-prev]');
    const nextButton = heroSlider.querySelector('[data-hero-next]');
    const intervalMs = 6500;
    let activeIndex = 0;
    let timer = null;

    const showSlide = (nextIndex) => {
        activeIndex = (nextIndex + slides.length) % slides.length;

        slides.forEach((slide, index) => {
            const isActive = index === activeIndex;
            slide.classList.toggle('hero-slide-active', isActive);
            slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
        });

        dots.forEach((dot, index) => {
            const isActive = index === activeIndex;
            dot.classList.toggle('hero-dot-active', isActive);
            dot.setAttribute('aria-current', isActive ? 'true' : 'false');
        });
    };

    const stopAutoplay = () => {
        if (timer) {
            window.clearInterval(timer);
            timer = null;
        }
    };

    const startAutoplay = () => {
        stopAutoplay();
        timer = window.setInterval(() => showSlide(activeIndex + 1), intervalMs);
    };

    previousButton?.addEventListener('click', () => {
        showSlide(activeIndex - 1);
        startAutoplay();
    });

    nextButton?.addEventListener('click', () => {
        showSlide(activeIndex + 1);
        startAutoplay();
    });

    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            showSlide(Number(dot.dataset.heroDot));
            startAutoplay();
        });
    });

    heroSlider.addEventListener('mouseenter', stopAutoplay);
    heroSlider.addEventListener('mouseleave', startAutoplay);

    heroSlider.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            showSlide(activeIndex - 1);
            startAutoplay();
        }

        if (event.key === 'ArrowRight') {
            showSlide(activeIndex + 1);
            startAutoplay();
        }
    });

    showSlide(0);
    startAutoplay();
}
