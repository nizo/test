class Tablist {
    constructor(el) {
        this.tablist = el;
        this.tabLinks = this.tablist.querySelectorAll('.tablist__link');
        this.tabContents = this.tablist.querySelectorAll('.tablist__content');

        this.tabLinks.forEach(l => l.addEventListener('click', this.switchTab.bind(this)));
    }

    switchTab(e) {
        let btn = e.currentTarget;
        let tabId = btn.dataset.tab;

        this.tabLinks.forEach(link => {
            if (link.dataset.tab === tabId) {
                link.classList.add('tablist__link--active');
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
}

const lists = document.querySelectorAll('.tablist');
lists.forEach(list => new Tablist(list));