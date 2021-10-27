class SmallTab {
    constructor(el) {
        this.element = el;
        this.tabLinks = this.element.querySelectorAll('.small-tabs__tab');
        this.tabContents = this.element.querySelectorAll('.small-tabs__content');
        this.countTabs = this.tabLinks.length;
        
        // Set first to active
        this.tabLinks[0].classList.add('small-tabs__tab--active');
        this.tabContents[0].classList.add('small-tabs__content--active');

        this.tabLinks.forEach(tabLink => {
            tabLink.addEventListener('click', this.switchTab.bind(this));
        });
    }

    switchTab(e) {
        let tab = e.currentTarget.dataset.tab;

        this.tabLinks.forEach(tabLink => {
            tabLink.classList.remove('small-tabs__tab--active');
            if (tab == tabLink.dataset.tab)
                tabLink.classList.add('small-tabs__tab--active');
        });
        this.tabContents.forEach(tabContent => {
            tabContent.classList.remove('small-tabs__content--active');
            if (tab == tabContent.dataset.tab)
                tabContent.classList.add('small-tabs__content--active');
        });
    }
}

let smallTabs = document.querySelectorAll('.small-tabs');
smallTabs.forEach(smallTab => new SmallTab(smallTab));