class Navigation {
    constructor() {
        this.navigation = document.querySelector('.navigation');
        this.mobileButton = this.navigation.querySelector('.navigation__mobile-button');
        this.navItems = this.navigation.querySelectorAll('.navigation__item');
        this.submenuLinks = this.navigation.querySelectorAll('.submenu__link');

        this.handleMobileNavLinks();
        this.handleMobileSubmenuLinks();

        // Handle Mobile Button
        this.mobileButton.addEventListener('click', this.handleMobileButton.bind(this));

        // Handle Scroll
        this.checkScroll();
        window.addEventListener('scroll', this.checkScroll.bind(this));
    }

    handleMobileSubmenuLinks() {
        this.submenuLinks.forEach(link => {
            link.addEventListener('click', (e => {
                this.toggleMobileNav();
            }).bind(this));
        });
    }

    handleMobileNavLinks() {
        this.navItems.forEach(item => {
            let link = item.querySelector('.navigation__link');
            link.addEventListener('click', (e => {
                if (this.navigation.classList.contains('navigation--mobile-open')) {
                    e.preventDefault();
                    this.navItems.forEach(navItem => {
                        if (navItem != item) {
                            navItem.classList.remove('navigation__item--open');
                        } else {
                            navItem.classList.add('navigation__item--open');
                        }
                    });
                    // item.classList.toggle('navigation__item--open');
                }
            }).bind(this));
        });
    }

    checkScroll(e) {
        if (window.scrollY > 0) {
            this.navigation.classList.add('navigation--scrolled');
        } else {
            this.navigation.classList.remove('navigation--scrolled');
        }
    }

    handleMobileButton(e) {
        this.toggleMobileNav();
    }
    
    toggleMobileNav() {
        this.mobileButton.classList.toggle('navigation__mobile-button--active');
        this.navigation.classList.toggle('navigation--mobile-open');
        let hasActive = 0;
        this.navItems.forEach((navItem, i) => {
            navItem.classList.remove('navigation__item--open');
            if (navItem.classList.contains('navigation__item--active'))
                hasActive = i;
        });
        if (this.navigation.classList.contains('navigation--mobile-open')) {
            this.navItems[hasActive].classList.add('navigation__item--open');
        }
        document.body.classList.toggle('navigation--mobile-scrolllock');
    }
}

new Navigation();