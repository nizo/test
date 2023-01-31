class CountingNumbers {
    constructor(el) {
        this.element = el;
        this.speed = 1000; // ms until final number shall be reached
        this.suffix = this.element.dataset.suffix || '';
        this.start = parseInt(this.element.dataset.start);
        this.end = parseInt(this.element.dataset.end);
        this.current = this.start;
        this.step = this.calculateStep();
        this.running = false;

        respondToVisibility(this.element, visible => {
            if (visible) {
                this.reset();
                this.isInView();
            }
        });

        this.element.addEventListener('trigger', e => {
            this.reset();
            this.isInView();
        });

        window.addEventListener('scroll', this.isInView.bind(this));
    }
    
    isInView() {
        this.position = this.element.getBoundingClientRect();
        if(this.position.top >= 0 && this.position.bottom <= window.innerHeight) {
            // Run counter as soon es element is in view
            if (!this.running) {
                this.update();
                this.count();
                this.running = true;
            }
        } else {
            // Reset counter when element is out of view
            this.reset();
        }
    }

    reset() {
        this.running = false;
        this.current = this.start;
        this.update();
    }

    calculateStep() {
        let diff = Math.abs(this.start - this.end);

        let step = diff / (this.speed / 30);

        return step;
    }

    count() {
        if (this.start < this.end) {
            this.current += this.step;
            if (this.current > this.end)
                this.current = this.end;
        } else {
            this.current -= this.step;
            if (this.current < this.end)
                this.current = this.end;
        }

        this.update();

        if (this.current != this.end) {
            setTimeout(this.count.bind(this), 1000 / 30);
        } else {
            this.running = false;
        }
    }

    update() {
         this.element.textContent = Math.round(this.current) + this.suffix;
    }
}

document.addEventListener('DOMContentLoaded', e => {
    const numbers = document.querySelectorAll('.counting-number');
    numbers.forEach(number => {
        new CountingNumbers(number);
    });
});