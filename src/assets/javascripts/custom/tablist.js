class Tablist {
    constructor(el) {
        this.tablist = el;
        this.tabLinks = this.tablist.querySelectorAll('.tablist__link');
        this.tabContents = this.tablist.querySelectorAll('.tablist__content');
        this.activeIndex = 0;
        this.tabLinks[this.activeIndex].classList.add('tablist__link--active');

        this.addArrowButtons();

        this.tabLinks.forEach(l => l.addEventListener('click', this.switchTab.bind(this)));
    }

    switchTab(e) {
        let btn = e.currentTarget;
        let tabId = btn.dataset.tab;

        this.tabLinks.forEach((link, i) => {
            if (link.dataset.tab === tabId) {
                link.classList.add('tablist__link--active');
                this.activeIndex = i;
            } else {
                link.classList.remove('tablist__link--active');
            }
        });
        this.tabContents.forEach(content => {
            if (content.dataset.tab === tabId) {
                content.classList.add('tablist__content--active');
            } else {
                content.classList.remove('tablist__content--active');
            }
        });
    }

    prevTab() {
        this.activeIndex--;
        if (this.activeIndex < 0)
            this.activeIndex = this.tabLinks.length - 1;

        this.tabLinks.forEach(link => link.classList.remove('tablist__link--active'));
        this.tabLinks[this.activeIndex].classList.add('tablist__link--active');

        this.tabContents.forEach(content => content.classList.remove('tablist__content--active'));
        this.tabContents[this.activeIndex].classList.add('tablist__content--active');
    }

    nextTab() {
        this.activeIndex++;
        if (this.activeIndex >= this.tabLinks.length)
            this.activeIndex = 0;

        this.tabLinks.forEach(link => link.classList.remove('tablist__link--active'));
        this.tabLinks[this.activeIndex].classList.add('tablist__link--active');

        this.tabContents.forEach(content => content.classList.remove('tablist__content--active'));
        this.tabContents[this.activeIndex].classList.add('tablist__content--active');
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