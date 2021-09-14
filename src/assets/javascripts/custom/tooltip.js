class Tooltip {
    constructor(el) {
        this.element = el;

        this.detectPosition();
        window.addEventListener('scroll', this.detectPosition.bind(this));
    }

    detectPosition() {
        let pos = this.element.getBoundingClientRect();
        let viewportHeight = window.innerHeight;
        
        let content = this.element.querySelector('span');
        this.element.classList.add('tooltip--open');
        let contentPos = content.getBoundingClientRect();
        this.element.classList.remove('tooltip--open');

        if (contentPos.y + contentPos.height > viewportHeight) {
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