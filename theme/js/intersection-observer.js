document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                // observer.unobserve(entry.target);
            }
        });
    });

    const elements = document.querySelectorAll('.scroll-hide li, .scroll-hide p, .scroll-hide h1, .scroll-hide h2, .scroll-hide img, .scroll-hide figure, .scroll-hide div');
    elements.forEach(element => {
        observer.observe(element);
    });
});