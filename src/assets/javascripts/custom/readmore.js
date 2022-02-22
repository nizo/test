class Readmore {
    constructor(el) {
        this.element = el;
        this.label = this.element.getAttribute('data-label') || 'Weiterlesen';
        this.button = this.createButton();
    }
    
    createButton() {
        // Create button
        let button = document.createElement('a');
        button.href = '#';
        button.classList.add('readmore__button');
        button.textContent = this.label + '…';
        
        // Binmd event listener
        button.addEventListener('click', this.showContent.bind(this));
        
        // Insert button into element
        this.element.parentNode.insertBefore(button, this.element);
        
        return button;
    }
    
    showContent() {
        this.element.classList.add('readmore--show');
        this.button.classList.add('readmore__button--hide');
    }
}

document.addEventListener('DOMContentLoaded', e => {
    let readmoreElements = document.querySelectorAll('.readmore');
    readmoreElements.forEach(readmore => new Readmore(readmore));
});