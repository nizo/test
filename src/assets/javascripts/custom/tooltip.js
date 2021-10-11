class Tooltip {
    constructor(el) {
        this.element = el;
        this.content = this.element.querySelector('span');
        this.content.classList.add('tooltip__content');
        this.enableMouseover = false;
        if (this.element.dataset.mouseover && this.element.dataset.mouseover == 'true') {
            this.enableMouseover = true;
        }

        this.detectPosition();
        this.element.addEventListener('mouseover', this.show.bind(this));
        this.element.addEventListener('mouseleave', this.hide.bind(this));
    }

    show(e) {
        if (!this.enableMouseover && e.target !== this.element) {
            this.hide();
            return;
        }
        this.detectPosition();
        this.element.classList.add('tooltip--open');
    }

    hide() {
        this.element.classList.remove('tooltip--open');
    }

    detectPosition() {
        let pos = this.element.getBoundingClientRect();
        let viewportHeight = window.innerHeight;
        
        let content = this.element.querySelector('span');
        this.element.classList.add('tooltip--open');
        let contentPos = content.getBoundingClientRect();
        this.element.classList.remove('tooltip--open');

        if (pos.y + contentPos.height > viewportHeight) {
            this.element.classList.add('tooltip--top');
        } else {
            this.element.classList.remove('tooltip--top');
        }
    }
}

const tooltips = document.querySelectorAll('.tooltip');
tooltips.forEach(tooltip => {
    new Tooltip(tooltip);
});