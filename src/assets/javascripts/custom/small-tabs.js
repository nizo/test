class SmallTab {
    constructor(el) {
        this.element = el;
        this.tabLinks = this.element.querySelectorAll('.small-tabs__tab');
        this.tabContents = this.element.querySelectorAll('.small-tabs__content');
        this.countTabs = this.tabLinks.length;

        this.setTabHeight();
        setTimeout(((e) => {
            this.setTabHeight()
        }).bind(this), 100);
        window.addEventListener('resize', this.setTabHeight.bind(this));
        
        // Set first to active
        this.tabLinks[0].classList.add('small-tabs__tab--active');
        this.tabContents[0].classList.add('small-tabs__content--active');

        this.tabLinks.forEach(tabLink => {
            tabLink.addEventListener('click', this.switchTab.bind(this));
        });
    }

    setTabHeight() {
        let tallest = 0;
        this.tabContents.forEach(content => {
            content.style.height = 'auto';
            let hasClass = false;
            if (content.classList.contains('small-tabs__content--active'))
                hasClass = true;
            if (!hasClass)
                content.classList.add('small-tabs__content--active');
            if (content.offsetHeight > tallest)
                tallest = content.offsetHeight;
            if (!hasClass)
                content.classList.remove('small-tabs__content--active');
        });
        this.tabContents.forEach(c => c.style.height = tallest + 'px');
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

document.addEventListener('DOMContentLoaded', e => {
    let smallTabs = document.querySelectorAll('.small-tabs');
    smallTabs.forEach(smallTab => new SmallTab(smallTab));
});