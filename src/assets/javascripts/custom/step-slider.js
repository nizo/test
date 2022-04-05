class stepSlider {
    constructor(el) {
        this.dragging = false;
        this.swiping = false;
        this.currentOffset = 0;
        this.slider = el;
        if (this.slider.dataset.initialized && this.slider.dataset.initialized == 'true')
            return;
        this.slider.dataset.initialized = 'true';
        this.steps = this.slider.querySelector('.step-slider__steps');
        this.rangeWrapper = this.slider.querySelector('.step-slider__slider');
        this.range = this.slider.querySelector('.step-slider__range');
        this.allSteps = this.steps.querySelectorAll('.step-slider__step');
        this.stepCount = this.allSteps.length;
        this.handle = this.slider.querySelector('.step-slider__handle');

        this.setStepFirstActive();

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
        }).bind(this), {passive: true});
        window.addEventListener('touchend', (e => {
            this.dragging = false;
            this.swiping = false;
        }).bind(this), {passive: true});
        window.addEventListener('touchmove', this.drag.bind(this), {passive: true});
        
        // Swipe by Touch
        this.steps.addEventListener('touchstart', (e => {
            this.swiping = true;
            let touch = e.touches[0] || e.changedTouches[0];
            this.lastSwipePos = touch.clientX;
        }).bind(this), {passive: true});
        window.addEventListener('touchmove', this.swipe.bind(this), {passive: true});
    }

    setStepFirstActive() {
        let firstStep = this.allSteps[0];
        firstStep.classList.add('step-slider__step--active');
        let firstStepImage = firstStep.querySelector('img[data-alt-image]');
        if (firstStepImage) {
            let currentImageSource = firstStepImage.src;
            firstStepImage.src = firstStepImage.dataset.altImage;
            firstStepImage.dataset.altImage = currentImageSource;
        }
    }

    calculateStepsWidth() {
        let stepWidth = 270;
        let stepGutter = 30;
        let stepsWidth = (stepWidth * this.stepCount) + ((this.stepCount - 1) * stepGutter);
        this.steps.style.width = stepsWidth + 'px';
    }

    swipe(e) {
        if (!this.swiping)
            return false;
        
        let touch = e.touches[0] || e.changedTouches[0];
        let currentSwipePos = touch.clientX;
        let distance = Math.abs(this.lastSwipePos - currentSwipePos);
        let box = this.slider.getBoundingClientRect();
        let slider = this.steps.getBoundingClientRect();
        let overflow = Math.abs(box.width - slider.width);

        if (this.lastSwipePos > currentSwipePos) {
            // Swipe Left / Move Slider backwards
            this.currentOffset += distance;
            if (this.currentOffset > overflow)
                this.currentOffset = overflow;
        } else {
            // Swipe Right / Move slider forwards
            this.currentOffset -= distance;
            if (this.currentOffset < 0)
                this.currentOffset = 0;
        }
        this.steps.style.transform = 'translateX(-' + this.currentOffset + 'px)';
        this.lastSwipePos = currentSwipePos;

        // Handle
        let progress = 100 / overflow * this.currentOffset;
        this.handle.style.left = progress + '%';

        // Active Step
        let activeStep = Math.floor(progress / (100 / this.stepCount));
        if (activeStep >= this.stepCount)
            activeStep = this.stepCount - 1;
        this.allSteps.forEach((step, i) => {
            if (step.classList.contains('step-slider__step--active')) {
                step.classList.remove('step-slider__step--active');
                let stepImage = step.querySelector('img[data-alt-image]');
                if (stepImage) {
                    let currentImageSource = stepImage.src;
                    stepImage.src = stepImage.dataset.altImage;
                    stepImage.dataset.altImage = currentImageSource;
                }
            }
            if (i == activeStep) {
                step.classList.add('step-slider__step--active');
                let stepImage = step.querySelector('img[data-alt-image]');
                if (stepImage) {
                    let currentImageSource = stepImage.src;
                    stepImage.src = stepImage.dataset.altImage;
                    stepImage.dataset.altImage = currentImageSource;
                }
            }
        });
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
            if (step.classList.contains('step-slider__step--active')) {
                step.classList.remove('step-slider__step--active');
                let stepImage = step.querySelector('img[data-alt-image]');
                if (stepImage) {
                    let currentImageSource = stepImage.src;
                    stepImage.src = stepImage.dataset.altImage;
                    stepImage.dataset.altImage = currentImageSource;
                }
            }
            if (i == activeStep) {
                step.classList.add('step-slider__step--active');
                let stepImage = step.querySelector('img[data-alt-image]');
                if (stepImage) {
                    let currentImageSource = stepImage.src;
                    stepImage.src = stepImage.dataset.altImage;
                    stepImage.dataset.altImage = currentImageSource;
                }
            }
        });
        this.currentOffset = shift;
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