class Tablist {
    constructor(el) {
        this.tablist = el;
        this.tabLinksWrapper = this.tablist.querySelector('.tablist__links');
        this.tabLinks = this.tablist.querySelectorAll('.tablist__link');
        this.tabContents = this.tablist.querySelectorAll('.tablist__content');
        this.activeIndex = 0;
        this.tabLinks[this.activeIndex].classList.add('tablist__link--active');
        this.tabContents[this.activeIndex].classList.add('tablist__content--active');

        this.addArrowButtons();
        this.indicators = this.addIndicators();

        this.swipeStart = 0;
        this.addSwipeSupport();
        // window.addEventListener('resize', this.addSwipeSupport.bind(this), true);

        this.tabLinks.forEach(l => l.addEventListener('click', this.switchTab.bind(this)));

        this.navbarHeight = 60;
        this.isSticky = false;
        this.stickyStart = this.tabLinksWrapper.getBoundingClientRect().top + window.scrollY - this.navbarHeight;
        this.stickyEnd = this.stickyStart + this.tablist.offsetHeight;
        this.originalHeight = this.tablist.offsetHeight;
        this.stickyPlaceholder = this.tabLinksWrapper.cloneNode();
        this.stickyPlaceholderActive = false;
        window.addEventListener('scroll', this.stickyLinks.bind(this));

        this.checkAnchor();
        eventListener('click', '[href^="#"]', this.checkAnchor.bind(this));
    }

    checkAnchor(e = null) {
        let anchor = window.location.hash.split('#')[1];
        if (e)
            anchor = e.target.getAttribute('href').split('#')[1];
        this.tabLinks.forEach(link => {
            if (link.getAttribute('id') == anchor)
                this.switchTab(link);
                // link.click();
        });
    }
    
    stickyLinks() {
        // Skip if has this class
        if (this.tablist.classList.contains('tablist--no-sticky'))
            return;
        if (!this.stickyPlaceholderActive && this.stickyStart != this.tabLinksWrapper.getBoundingClientRect().top + window.scrollY - this.navbarHeight) {
            this.stickyStart = this.tabLinksWrapper.getBoundingClientRect().top + window.scrollY - this.navbarHeight;
            this.stickyEnd = this.stickyStart + this.tablist.offsetHeight;
        }
        // Recalculate stickyEnd if tablist height changed while scrolling down
        if (this.stickyPlaceholderActive && this.originalHeight != this.tablist.offsetHeight) {
            this.stickyEnd = this.stickyStart + this.tablist.offsetHeight;
            this.originalHeight = this.tablist.offsetHeight;
        }
        let scrollPos = window.scrollY;
        if (this.stickyStart && this.stickyEnd && scrollPos >= this.stickyStart && scrollPos <= this.stickyEnd) {
            this.spawnPlaceholder();
            this.isSticky = true;
            this.tabLinksWrapper.classList.add('tablist__links--sticky');
        } else {
            this.despawnPlaceholder();
            this.isSticky = false;
            this.tabLinksWrapper.classList.remove('tablist__links--sticky');
        }
    }
    
    spawnPlaceholder() {
        if (this.stickyPlaceholderActive)
            return;
        this.tabLinksWrapper.style.opacity = '0';
        this.stickyPlaceholderActive = true;
        this.stickyPlaceholder.classList.add('tablist__sticky-placeholder');
        this.stickyPlaceholder.style.visibility = 'hidden';
        this.stickyPlaceholder.style.height = this.tabLinksWrapper.offsetHeight + 'px';
        // this.tablist.insertBefore(this.stickyPlaceholder, this.tabLinksWrapper);
        this.tabLinksWrapper.parentNode.insertBefore(this.stickyPlaceholder, this.tabLinksWrapper);
    }
    
    despawnPlaceholder() {
        if (!this.stickyPlaceholderActive)
            return;
        this.tabLinksWrapper.style.opacity = '';
        this.stickyPlaceholderActive = false;
        this.stickyPlaceholder.remove();
    }

    addSwipeSupport() {
        if (window.innerWidth <= 1170) {
            this.tabLinksWrapper.addEventListener('touchstart', this.handleTouchstart.bind(this), {passive: true});
            this.tabLinksWrapper.addEventListener('touchend', this.handleTouchend.bind(this), {passive: true});
        } else {
            this.tabLinksWrapper.removeEventListener('touchstart', this.handleTouchstart.bind(this), {passive: true});
            this.tabLinksWrapper.removeEventListener('touchend', this.handleTouchend.bind(this), {passive: true});
        }
    }
    handleTouchstart(e) {
        let touch = e.touches[0] || e.changedTouches[0];
        this.swipeStart = touch.clientX;
    }
    handleTouchend(e) {
        let touch = e.touches[0] || e.changedTouches[0];
        let diff = Math.abs(this.swipeStart - touch.clientX);

        // At least swipe 50 pixels
        if(diff > 50) {
            if (this.swipeStart > touch.clientX) {
                // Swipe left
                this.nextTab();
            } else {
                // Swipe right
                this.prevTab();
            }
        }
    }

    scrollToTabs() {
        if (!this.isSticky)
            return;
        let offset = this.tablist.getBoundingClientRect().y + window.scrollY - 61;
        scrollToOffset(offset);
    }

    switchTab(e) {
        let btn = e.currentTarget || e;
        let tabId = btn.dataset.tab;
        this.tablist.style.minHeight = '';
        let currentContentHeight = this.tabContents[this.activeIndex].offsetHeight;
        let currentTablistHeight = this.tablist.offsetHeight;
        this.tablist.style.minHeight = currentTablistHeight + 'px';
        setTimeout(((e) => {
            this.tablist.style.minHeight = '0px';
        }).bind(this), 300);

        this.tabLinks.forEach((link, i) => {
            if (link.dataset.tab === tabId) {
                link.classList.add('tablist__link--active');
                this.activeIndex = i;
            } else {
                link.classList.remove('tablist__link--active');
            }
        });
        this.tabContents.forEach(content => {
            content.style.minHeight = '';
            if (content.dataset.tab === tabId) {
                // content.style.minHeight = currentContentHeight + 'px';
                content.classList.add('tablist__content--active');
            } else {
                content.classList.remove('tablist__content--active');
            }
        });
        this.indicators.forEach(indicator => indicator.classList.remove('tablist__indicator--active'));
        this.indicators[this.activeIndex].classList.add('tablist__indicator--active');

        this.scrollToTabs();
    }

    prevTab() {
        this.activeIndex--;
        if (this.activeIndex < 0)
            this.activeIndex = this.tabLinks.length - 1;

        this.indicators.forEach(indicator => indicator.classList.remove('tablist__indicator--active'));
        this.indicators[this.activeIndex].classList.add('tablist__indicator--active');

        this.tabLinks.forEach(link => link.classList.remove('tablist__link--active'));
        this.tabLinks[this.activeIndex].classList.add('tablist__link--active');

        this.tabContents.forEach(content => content.classList.remove('tablist__content--active'));
        this.tabContents[this.activeIndex].classList.add('tablist__content--active');
    }

    nextTab() {
        this.activeIndex++;
        if (this.activeIndex >= this.tabLinks.length)
            this.activeIndex = 0;

        this.indicators.forEach(indicator => indicator.classList.remove('tablist__indicator--active'));
        this.indicators[this.activeIndex].classList.add('tablist__indicator--active');

        this.tabLinks.forEach(link => link.classList.remove('tablist__link--active'));
        this.tabLinks[this.activeIndex].classList.add('tablist__link--active');

        this.tabContents.forEach(content => content.classList.remove('tablist__content--active'));
        this.tabContents[this.activeIndex].classList.add('tablist__content--active');
    }

    addIndicators() {
        let indicators = document.createElement('div');
        indicators.classList.add('tablist__indicators');

        let indicatorArray = [];
        this.tabLinks.forEach(link => {
            let indicator = document.createElement('div');
            indicator.classList.add('tablist__indicator');
            indicatorArray.push(indicator);
            indicators.appendChild(indicator);
        });

        this.tablist.insertBefore(indicators, this.tablist.firstChild);
        indicatorArray[0].classList.add('tablist__indicator--active');

        return indicatorArray;
    }

    addArrowButtons() {
        let arrowLeft = document.createElement('div');
        arrowLeft.classList.add('tablist__arrow');
        arrowLeft.classList.add('tablist__arrow--left');
        arrowLeft.addEventListener('click', this.prevTab.bind(this));
        
        let arrowRight = document.createElement('div');
        arrowRight.classList.add('tablist__arrow');
        arrowRight.classList.add('tablist__arrow--right');
        arrowRight.addEventListener('click', this.nextTab.bind(this));

        let links = this.tablist.querySelector('.tablist__links');
        links.insertBefore(arrowLeft, links.firstChild);
        links.appendChild(arrowRight);
    }
}

document.addEventListener('DOMContentLoaded', e => {
    const lists = document.querySelectorAll('.tablist');
    lists.forEach(list => new Tablist(list));
});