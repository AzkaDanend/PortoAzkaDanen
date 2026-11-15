import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.documentElement.classList.add('js');

const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (reduceMotion || !('IntersectionObserver' in window)) {
    document.querySelectorAll('[data-reveal]').forEach((el) => el.classList.add('is-visible'));
} else {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { rootMargin: '0px 0px -8% 0px', threshold: 0.12 }
    );

    document.querySelectorAll('[data-reveal]').forEach((el) => observer.observe(el));
}
