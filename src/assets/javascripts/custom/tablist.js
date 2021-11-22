class Tablist {
    constructor(el) {
        this.tablist = el;
        this.tabLinksWrapper = this.tablist.querySelector('.tablist__links');
        this.tabLinksWrapperClone = this.tabLinksWrapper.cloneNode(true);
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

        window.addEventListener('scroll', this.stickyLinks.bind(this));
    }

    stickyLinks() {
        let offsetToReach = 94; // Navbar height
        let currentOffset = this.tabLinksWrapper.getBoundingClientRect().top;

        // if (currentOffset <= offsetToReach) {
        //     this.tabLinksWrapperClone = this.tabLinksWrapper.cloneNode(true);
        //     this.tablist.appendChild(this.tabLinksWrapperClone);
        //     this.tabLinksWrapper.classList.add('tablist__links--invisible');
        //     this.tabLinksWrapperClone.classList.add('tablist__links--stuck');
        // } else {
        //     this.tabLinksWrapper.classList.remove('tablist__links--stuck');
        // }
    }

    addSwipeSupport() {
        if (window.innerWidth <= 1170) {
            this.tabLinksWrapper.addEventListener('touchstart', this.handleTouchstart.bind(this));
            this.tabLinksWrapper.addEventListener('touchend', this.handleTouchend.bind(this));
        } else {
            this.tabLinksWrapper.removeEventListener('touchstart', this.handleTouchstart.bind(this));
            this.tabLinksWrapper.removeEventListener('touchend', this.handleTouchend.bind(this));
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
        $('html,body').animate({
            scrollTop: $(this.tablist).offset().top - 100 + 'px'
        }, 300);
    }

    switchTab(e) {
        let btn = e.currentTarget;
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

const lists = document.querySelectorAll('.tablist');
lists.forEach(list => new Tablist(list));