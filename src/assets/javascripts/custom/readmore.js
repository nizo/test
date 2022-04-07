// Read more inline text
class Readmore {
    constructor(el) {
        this.element = el;
        this.label = this.element.getAttribute('data-label') || 'Weiterlesen';
        this.button = this.createButton();
    }
    
    createButton() {
        // Create button
        let button = document.createElement('span');
        button.classList.add('readmore__button');
        button.textContent = this.label + '…';
        
        // Bind event listener
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

class ReadmoreList {
    constructor(el) {
        this.element = el;
        this.label = this.element.getAttribute('data-label') || 'Weitere Punkte anzeigen';
        this.item = this.createItem();
    }

    createItem() {
        // Create item
        let item = document.createElement('li');
        let link = document.createElement('a');
        item.classList.add('readmore-list__button');
        link.href = '#';
        link.textContent = this.label + '…';
        
        // Bind event listener
        link.addEventListener('click', this.showContent.bind(this));

        item.append(link);
        
        // Insert item into element
        this.element.append(item);
        
        return item;
    }

    showContent() {
        this.element.classList.add('readmore-list--show');
    }
}

document.addEventListener('DOMContentLoaded', e => {
    let readmoreElements = document.querySelectorAll('.readmore');
    readmoreElements.forEach(readmore => new Readmore(readmore));

    let readmoreLists = document.querySelectorAll('[class*="readmore-list--"]');
    readmoreLists.forEach(readmore => new ReadmoreList(readmore));
});