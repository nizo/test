class stepSlider {
    constructor(el) {
        this.dragging = false;
        this.slider = el;
        this.steps = this.slider.querySelector('.step-slider__steps');
        this.rangeWrapper = this.slider.querySelector('.step-slider__slider');
        this.range = this.slider.querySelector('.step-slider__range');
        this.allSteps = this.steps.querySelectorAll('.step-slider__step');
        this.stepCount = this.allSteps.length;
        this.handle = this.slider.querySelector('.step-slider__handle');

        this.calculateStepsWidth();

        // Mouse Events
        this.rangeWrapper.addEventListener('mousedown', (e => {
            this.dragging = true;
        }).bind(this));
        window.addEventListener('mouseup', (e => {
            this.dragging = false;
        }).bind(this));
        window.addEventListener('mousemove', this.drag.bind(this));

        // Touch Events
        this.rangeWrapper.addEventListener('touchstart', (e => {
            this.dragging = true;
        }).bind(this));
        window.addEventListener('touchend', (e => {
            this.dragging = false;
        }).bind(this));
        window.addEventListener('touchmove', this.drag.bind(this));
    }

    calculateStepsWidth() {
        let stepWidth = 270;
        let stepGutter = 30;
        let stepsWidth = (stepWidth * this.stepCount) + ((this.stepCount - 1) * stepGutter);
        this.steps.style.width = stepsWidth + 'px';
    }

    drag(e) {
        if (!this.dragging)
            return false;

        let range = this.range.getBoundingClientRect();
        let mouse = this.getMousePosition(e);
        let mouseOffsetX = this.handle.offsetWidth / 2;
        mouse.x -= mouseOffsetX;

        let progress = 100 / range.width * (mouse.x - range.x);
        if (progress < 0)
            progress = 0;
        if (progress > 100)
            progress = 100;

        this.handle.style.left = progress + '%';

        // Move steps
        let sliderBox = this.slider.getBoundingClientRect();
        let stepsBox = this.steps.getBoundingClientRect();
        let overflow = stepsBox.width - sliderBox.width;
        let shift = overflow * (progress / 100);
        let activeStep = Math.floor(progress / (100 / this.stepCount));
        if (activeStep >= this.stepCount)
            activeStep = this.stepCount - 1;
        this.allSteps.forEach((step, i) => {
            step.classList.remove('step-slider__step--active');
            if (i == activeStep)
                step.classList.add('step-slider__step--active');
        });
        this.steps.style.transform = 'translateX(-' + shift + 'px)';
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