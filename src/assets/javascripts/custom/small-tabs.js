class SmallTab {
    constructor(el) {
        this.element = el;
        this.tabLinks = this.element.querySelectorAll('.small-tabs__tab');
        this.tabContents = this.element.querySelectorAll('.small-tabs__content');
        this.countTabs = this.tabLinks.length;
        this.currentTab = 0;
        this.automationInterval = null;
        this.speed = this.element.getAttribute('data-speed') || 1500; // Automation speed

        this.setTabHeight();
        setTimeout(((e) => {
            this.setTabHeight();
        }).bind(this), 100);
        window.addEventListener('resize', this.setTabHeight.bind(this));
        
        // Set first to active
        this.tabLinks[this.currentTab].classList.add('small-tabs__tab--active');
        this.tabContents[this.currentTab].classList.add('small-tabs__content--active');

        this.tabLinks.forEach(tabLink => {
            tabLink.addEventListener('click', this.switchTab.bind(this));
        });

        // Automated if small-tags--automated class is present
        if (this.element.classList.contains('small-tabs--automated'))
            this.automate();
    }

    automate() {
        this.automationInterval = setInterval(this.nextTab.bind(this), this.speed);
    }

    nextTab() {
        this.currentTab++;
        if (this.currentTab >= this.countTabs)
            this.currentTab = 0;
        this.tabLinks.forEach(link => link.classList.remove('small-tabs__tab--active'));
        this.tabContents.forEach(content => content.classList.remove('small-tabs__content--active'));
        this.tabLinks[this.currentTab].classList.add('small-tabs__tab--active');
        this.tabContents[this.currentTab].classList.add('small-tabs__content--active');
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
        clearInterval(this.automationInterval); // Stop automation
        
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