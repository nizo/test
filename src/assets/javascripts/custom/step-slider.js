class stepSlider {
    constructor(el) {
        this.dragging = false;
        this.slider = el;
        this.handle = this.slider.querySelector('.step-slider__handle');
        this.mouseOffset = {x: 0, y: 0};

        // Mouse Events
        this.handle.addEventListener('mousedown', (e => {
            this.dragging = true;
            let range = this.slider.getBoundingClientRect();
            let mouse = this.getMousePosition(e);
            this.mouseOffset.x = mouse.x - range.x;
            this.mouseOffset.y = mouse.y - range.y;
        }).bind(this));
        window.addEventListener('mouseup', (e => {
            this.dragging = false;
        }).bind(this));
        window.addEventListener('mousemove', this.drag.bind(this));

        // Touch Events
        this.handle.addEventListener('touchstart', (e => {
            this.dragging = true;
            this.mouseOffset
        }).bind(this));
        window.addEventListener('touchend', (e => {
            this.dragging = false;
        }).bind(this));
        window.addEventListener('touchmove', this.drag.bind(this));
    }

    drag(e) {
        if (!this.dragging)
            return false;

        let range = this.slider.getBoundingClientRect();
        let mouse = this.getMousePosition(e);
        mouse.x += this.mouseOffset.x;
        mouse.y += this.mouseOffset.y;

        console.log(range, mouse, this.mouseOffset);

        let progress = 100 / range.width * (mouse.x - range.x);
        if (progress < 0)
            progress = 0;
        if (progress > 100)
            progress = 100;

        this.handle.style.left = progress + '%';
        //console.log(progress);
    }

    getMousePosition(e) {
        let mouse = {
            x: e.pageX,
            y: e.pageY
        }

        if (e.type == 'touchmove') {
            var touchEvent = (typeof e.originalEvent === 'undefined') ? e : e.originalEvent;
            let touch = touchEvent.touches[0] || touchEvent.changedTouches[0];
            mouse.x = touch.pageX;
            mouse.y = touch.pageY;
        }

        return mouse;
    }
}

let stepSliders = document.querySelectorAll('.step-slider');
stepSliders.forEach(s => {
    new stepSlider(s);
});