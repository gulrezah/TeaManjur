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

document.querySelectorAll('[data-app-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('[data-app-carousel-track]');
    const previousButton = carousel.querySelector('[data-app-carousel-prev]');
    const nextButton = carousel.querySelector('[data-app-carousel-next]');
    const intervalMs = 3000;
    let timer = null;

    if (!track) {
        return;
    }

    const scrollByCard = (direction) => {
        const firstCard = track.querySelector('a');
        const cardWidth = firstCard?.getBoundingClientRect().width ?? 224;

        track.scrollBy({
            left: direction * (cardWidth + 16),
            behavior: 'smooth',
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

        if (track.scrollWidth <= track.clientWidth) {
            return;
        }

        timer = window.setInterval(() => {
            const isAtEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 8;

            if (isAtEnd) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
                return;
            }

            scrollByCard(1);
        }, intervalMs);
    };

    previousButton?.addEventListener('click', () => {
        scrollByCard(-1);
        startAutoplay();
    });

    nextButton?.addEventListener('click', () => {
        scrollByCard(1);
        startAutoplay();
    });

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);
    carousel.addEventListener('focusin', stopAutoplay);
    carousel.addEventListener('focusout', startAutoplay);

    startAutoplay();
});

const promotionalPopup = document.querySelector('[data-promotional-popup]');

if (promotionalPopup) {
    const closeButtons = promotionalPopup.querySelectorAll('[data-promotional-popup-close]');
    let timer = null;

    const openPopup = () => {
        promotionalPopup.classList.remove('hidden');
        promotionalPopup.classList.add('flex');
        promotionalPopup.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    const closePopup = () => {
        promotionalPopup.classList.add('hidden');
        promotionalPopup.classList.remove('flex');
        promotionalPopup.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');

        if (timer) {
            window.clearTimeout(timer);
            timer = null;
        }
    };

    timer = window.setTimeout(openPopup, 5000);

    closeButtons.forEach((button) => {
        button.addEventListener('click', closePopup);
    });

    promotionalPopup.addEventListener('click', (event) => {
        if (event.target === promotionalPopup) {
            closePopup();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !promotionalPopup.classList.contains('hidden')) {
            closePopup();
        }
    });
}
