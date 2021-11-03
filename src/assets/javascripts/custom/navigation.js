class Navigation {
    constructor() {
        this.navigation = document.querySelector('.navigation');
        this.checkScroll();
        window.addEventListener('scroll', this.checkScroll.bind(this));
    }

    checkScroll(e) {
        if (window.scrollY > 0) {
            this.navigation.classList.add('navigation--scrolled');
        } else {
            this.navigation.classList.remove('navigation--scrolled');
        }
    }
}

new Navigation();