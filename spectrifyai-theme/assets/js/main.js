(function () {
    const toggleButton = document.querySelector('.js-nav-toggle');
    const navigation = document.getElementById('site-navigation');

    if (toggleButton && navigation) {
        toggleButton.addEventListener('click', function () {
            const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.setAttribute('aria-expanded', String(!expanded));
            navigation.classList.toggle('is-open');
        });

        navigation.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth < 768) {
                    toggleButton.setAttribute('aria-expanded', 'false');
                    navigation.classList.remove('is-open');
                }
            });
        });
    }

    const animatedSections = document.querySelectorAll('[data-animate]');

    if ('IntersectionObserver' in window && animatedSections.length) {
        const observer = new IntersectionObserver(
            function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15 }
        );

        animatedSections.forEach(function (section) {
            observer.observe(section);
        });
    } else {
        animatedSections.forEach(function (section) {
            section.classList.add('is-visible');
        });
    }
})();
