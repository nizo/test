class Navigation {
    constructor() {
        this.navigation = document.querySelector('.navigation');
        this.mobileButton = this.navigation.querySelector('.navigation__mobile-button');

        // Handle Mobile Button
        this.mobileButton.addEventListener('click', this.handleMobileButton.bind(this));

        // Handle Scroll
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

    handleMobileButton(e) {
        this.mobileButton.classList.toggle('navigation__mobile-button--active');
        this.navigation.classList.toggle('navigation--mobile-open');
    }
}

new Navigation();