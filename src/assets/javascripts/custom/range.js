/*
 * @title         Custom Range Slider
 * @author        Maximilian Boll
 * @version       1.1.0
 * @description   A lightweight javascript class that transforms input type range sliders to custom sliders that can be modified in styling
 * @licence       Copyright by CallOne GmbH, all rights reserved
 * @usage         <input type="range" min="0" max="100" step="1" value="25" data-calloneRange data-output="#outputId" data-width="100" data-height="100" />
 * @changelog     08. June 2021 (v1.0.0)
 *                   - Initial creation
 *                09. June 2021 (v1.1.0)
 *                   - Fixed wrong progress calculation
 *                   - Added mobile touch support
 *                   - Added key support for output field
 */

class Range {
    constructor(slider) {
        this.classNamespace = 'callone-range';
        this.slider = slider;
        this.step = 100 / (this.slider.max / this.slider.step);
        this.dragging = false;
        this.wrapper = document.createElement('div');
        this.track = document.createElement('div');
        this.thumb = document.createElement('div');
        this.active = document.createElement('div');
        this.output = null;
        if (this.slider.hasAttribute('data-output')) {
            this.output = document.querySelector(this.slider.dataset.output);
        }
        if (this.output) {
            this.setOutputValue();
            this.slider.addEventListener('change', this.setOutputValue.bind(this));
            this.output.addEventListener('keyup', this.setProgress.bind(this));
        }
        if (this.slider.hasAttribute('data-width')) {
            this.wrapper.style.width = this.slider.dataset.width + 'px';
        }
        if (this.slider.hasAttribute('data-height')) {
            this.wrapper.style.height = this.slider.dataset.height + 'px';
        }
        this.wrap();
        this.addTrack();
        this.addThumb();
        this.addActive();
        this.wrapper.addEventListener('click', this.changeProgress.bind(this));
        this.wrapper.addEventListener('mousedown', (() => {
            this.dragging = true;
        }).bind(this));
        window.addEventListener('mouseup', (() => {
            this.dragging = false;
        }).bind(this));
        window.addEventListener('mousemove', ((e) => {
            if (this.dragging) {
                this.changeProgress(e);
            }
        }).bind(this));
        // Touch Events
        this.thumb.addEventListener('touchstart', (() => {
            this.dragging = true;
        }).bind(this));
        window.addEventListener('touchend', (() => {
            this.dragging = false;
        }).bind(this));
        window.addEventListener('touchmove', ((e) => {
            if (this.dragging) {
                this.changeProgress(e);
            }
        }).bind(this));
    }

    setOutputValue() {
        this.output.value = this.slider.value;
    }

    setProgress(e) {
        let pressedKey = e.which || e.keyCode;
        let newValue = parseInt(this.output.value);
        if (pressedKey == 38) {
            newValue++;
        }
        if (pressedKey == 40) {
            newValue--;
        }
        let min = parseInt(this.slider.min);
        let max = parseInt(this.slider.max);
        if (!newValue)
            newValue = 0;
        if (newValue < min)
            newValue = min;
        if (newValue > max)
            newValue = max;
        this.output.value = newValue;
        let progress = 100 / (max - min) * (newValue - min);
        this.thumb.style.left = progress + '%';
        this.active.style.width = progress + '%';
        this.slider.value = newValue;
        let event = new Event('change');
        this.slider.dispatchEvent(event);
    }
    
    changeProgress(e) {
        let range = this.wrapper.getBoundingClientRect();
        let mouse = {
            x: e.pageX,
            y: e.pageY
        };
        if (e.type == 'touchmove') {
            var touchEvent = (typeof e.originalEvent === 'undefined') ? e : e.originalEvent;
            let touch = touchEvent.touches[0] || touchEvent.changedTouches[0];
            mouse.x = touch.pageX;
            mouse.y = touch.pageY;
        }
        let progress = 100 / range.width * (mouse.x - range.x);
        progress = progress - (progress % this.step);
        if (progress < 0)
            progress = 0
        if (progress > 100)
            progress = 100
        this.thumb.style.left = progress + '%';
        this.active.style.width = progress + '%';
        this.slider.value = this.slider.max * (progress / 100);
        let event = new Event('change');
        this.slider.dispatchEvent(event);
    }
    
    wrap() {
        this.wrapper.classList.add(this.classNamespace);
        this.slider.parentNode.insertBefore(this.wrapper, this.slider);
        this.wrapper.appendChild(this.slider);
    }
    
    addTrack() {
        this.track.classList.add(this.classNamespace + '__track');
        this.wrapper.appendChild(this.track);
    }
    
    addThumb() {
        this.thumb.classList.add(this.classNamespace + '__thumb');
        this.thumb.style.left = this.getProgressInPercent() + '%';
        this.wrapper.appendChild(this.thumb);
    }
    
    addActive() {
        this.active.classList.add(this.classNamespace + '__active');
        this.active.style.width = this.getProgressInPercent() + '%';
        this.active.style.backgroundSize = this.wrapper.offsetWidth + 'px 100%';
        window.onresize = (() => {
            this.active.style.backgroundSize = this.wrapper.offsetWidth + 'px 100%';
        }).bind(this);
        this.wrapper.appendChild(this.active);
    }
    
    getProgressInPercent() {
        return 100 / this.slider.max * this.slider.value;
    }
}

// Execute
let sliders = document.querySelectorAll('[data-calloneRange]');
sliders.forEach(slider => {
    new Range(slider);
});