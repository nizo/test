class Fader {
    constructor(el) {
        this.fader = el;
        this.currentItem = 0;
        this.speed = parseInt(this.fader.dataset.speed) || 2000;
        this.items = this.fader.querySelectorAll('.fader__item');
        this.itemSize = this.getItemSize();
        this.itemsBox = this.initItems();
        this.title = this.initTitle();
        this.indicators = [];
        this.indicatorsBox = this.initIndicators();
        this.header = this.initHeader();

        // this.faderInterval = setInterval(this.fade.bind(this), this.speed);
        
        respondToVisibility(this.fader, visible => {
            if (visible) {
                this.resizeFader();
                this.faderInterval = setInterval(this.fade.bind(this), this.speed);
            } else {
                clearInterval(this.faderInterval);
            }
        });

        window.addEventListener('resize', (e => {
            this.resizeFader();
        }).bind(this));
    }

    resizeFader() {
        this.itemSize = this.getItemSize();
        this.itemsBox.style.height = this.itemSize + 'px';
        this.items.forEach(item => item.style.height = this.itemSize + 'px');
    }

    fade() {
        this.items[this.currentItem].classList.remove('fader__item--active');
        this.indicators[this.currentItem].classList.remove('fader__indicator--active');
        this.currentItem++;
        if (this.currentItem == this.items.length)
            this.currentItem = 0;
        this.items[this.currentItem].classList.add('fader__item--active');
        this.indicators[this.currentItem].classList.add('fader__indicator--active');
        this.title.textContent = this.items[this.currentItem].dataset.title || '';
    }

    initTitle() {
        let title = document.createElement('div');
        title.classList.add('fader__title');
        title.textContent = this.items[this.currentItem].dataset.title || '';
        return title;
    }

    initIndicators() {
        let indicators = document.createElement('div');
        indicators.classList.add('fader__indicators');

        this.items.forEach((item, i) => {
            let indicator = document.createElement('div');
            indicator.classList.add('fader__indicator');
            indicators.appendChild(indicator);
            if (i == 0)
                indicator.classList.add('fader__indicator--active');
            this.indicators.push(indicator);
        });

        return indicators;
    }

    initHeader() {
        let header = document.createElement('div');
        header.classList.add('fader__header');

        header.appendChild(this.title);
        header.appendChild(this.indicatorsBox);

        this.fader.appendChild(header);

        return header;
    }

    getElementHeight(el) {
        let clone = el.cloneNode(true);
        clone.style.position = 'absolute';
        document.body.appendChild(clone);
        let cloneHeight = clone.offsetHeight;
        clone.remove();
        return cloneHeight;
    }

    getItemSize() {
        let tallest = 0;
        this.items.forEach(item => {
            item.style.height = '';
            item.classList.add('fader__item--active');
            let itemHeight = this.getElementHeight(item);
            if (itemHeight > tallest)
                tallest = itemHeight;
            item.classList.remove('fader__item--active');
            item.classList.add('fader__item--messured');
        });
        this.items[this.currentItem].classList.add('fader__item--active');
        return tallest;
    }

    initItems() {
        let itemsBox = document.createElement('div');
        itemsBox.classList.add('fader__items');
        itemsBox.style.height = this.itemSize + 'px';

        this.items.forEach(item => {
            item.style.height = this.itemSize + 'px';
            itemsBox.appendChild(item);
        });

        this.fader.innerHTML = '';
        this.fader.appendChild(itemsBox);

        this.items[this.currentItem].classList.add('fader__item--active');

        return itemsBox;
    }
}

document.addEventListener('DOMContentLoaded', e => {
    const faders = document.querySelectorAll('.fader');
    faders.forEach(fader => {
        new Fader(fader);
    });
});