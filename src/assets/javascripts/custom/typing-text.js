class Typing {
    constructor(el) {
        this.element = el;
        this.texts = this.element.dataset.texts.split('|');
        this.colors = Array(this.texts.length);
        this.colors.fill('currentColor');
        if (this.element.dataset.colors)
        this.colors = this.element.dataset.colors.split('|');
        this.links = Array(this.texts.length);
        this.links.fill(null);
        if (this.element.dataset.links)
        this.links = this.element.dataset.links.split('|');
        this.currentText = 0;
        this.textIndex = 0;
        this.speed = parseInt(this.element.dataset.speed) || 50;
        this.keepTime = 2000;

        if (this.element.classList.contains('typing-text--block'))
            this.setElementHeight();

        this.element.textContent = '';
        this.element.style.color = this.colors[this.currentText];

        this.write();
    }

    setElementHeight() {
        let size = 0;
        this.texts.forEach(text => {
            this.element.textContent = text;
            if (this.element.offsetHeight > size)
                size = this.element.offsetHeight;
        });
        this.element.textContent = '';
        setTimeout(() => {
            this.element.style.height = size + 'px';
        }, 30);
    }

    write() {
        let text = this.texts[this.currentText];
        let link = this.links[this.currentText];
        let numChars = text.length;

        if (this.textIndex < numChars) {
            this.element.textContent += text.charAt(this.textIndex);
            this.textIndex++;
            setTimeout(this.write.bind(this), this.speed);
        } else {
            if (link)
                this.element.innerHTML = '<a href="' + link + '">' + this.element.textContent + '</a>';
            setTimeout(this.backspace.bind(this), this.keepTime);
        }
    }

    backspace() {
        let text = this.element.textContent;
        let numChars = text.length;

        if (this.textIndex >= 0) {
            this.element.textContent = text.substring(0, numChars - 1);
            this.textIndex--;
            setTimeout(this.backspace.bind(this), this.speed);
        } else {
            this.currentText++;
            if (this.currentText >= this.texts.length)
                this.currentText = 0;
            this.element.style.color = this.colors[this.currentText];
            this.write();
        }
    }
}

document.addEventListener('DOMContentLoaded', e => {
    const texts = document.querySelectorAll('.typing-text');
    texts.forEach(text => new Typing(text));
});