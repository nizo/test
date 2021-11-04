class GridSlider {
    constructor(el) {
        this.slider = el;
        this.items = this.slider.querySelectorAll('.grid-slider__item');
        this.currentItem = 0;
        this.indicators = null;
        this.indicatorPoints = [];
        this.activationWidth = 1220;
        this.speed = 3000;
        this.sliderInterval = null;
        
        this.init();
        window.addEventListener('resize', this.init.bind(this));
    }

    init() {
        if (window.innerWidth <= this.activationWidth) {
            // Activate Slider
            if (!this.active) {
                this.active = true;
                this.items[this.currentItem].classList.add('grid-slider__item--active');
                this.initIndicators();
                this.sliderInterval = setInterval(this.slide.bind(this), this.speed);
            }
        } else {
            // Deactivate Slider
            if (this.active) {
                this.active = false;
                this.currentItem = 0;
                this.indicators.remove();
                this.indicators = null;
                this.indicatorPoints = [];
                this.items.forEach(item => {
                    item.classList.remove('grid-slider__item--measured');
                    item.classList.remove('grid-slider__item--active');
                });
                this.slider.style.height = '';
                clearInterval(this.sliderInterval);
                this.sliderInterval = null;
            }
        }
        if (this.active) {
            this.setSliderSize();
        }
    }

    initIndicators() {
        this.indicators = document.createElement('div');
        this.indicators.classList.add('grid-slider__indicators');

        this.items.forEach((item, i) => {
            let indicator = document.createElement('div');
            indicator.classList.add('grid-slider__indicator');
            if (i == this.currentItem)
                indicator.classList.add('grid-slider__indicator--active');
            this.indicators.appendChild(indicator);
            this.indicatorPoints.push(indicator);
        });

        this.slider.appendChild(this.indicators);
    }

    setSliderSize() {
        // Remove size
        this.slider.style.height = '';
        this.items.forEach(item => item.classList.remove('grid-slider__item--measured'));
        
        // Get tallest item
        let tallest = 0;
        this.items.forEach(item => {
            if (item.offsetHeight > tallest)
            tallest = item.offsetHeight;
        });
        
        // set size
        let indicatorsHeight = 30;
        this.items.forEach(item => item.classList.add('grid-slider__item--measured'));
        this.slider.style.height = tallest + indicatorsHeight + 'px';
    }

    slide() {
        this.items.forEach(item => item.classList.remove('grid-slider__item--active'));
        this.indicators.querySelector('.grid-slider__indicator--active').classList.remove('grid-slider__indicator--active');
        this.currentItem++;
        if (this.currentItem >= this.items.length)
            this.currentItem = 0;
        this.items[this.currentItem].classList.add('grid-slider__item--active');
        this.indicatorPoints[this.currentItem].classList.add('grid-slider__indicator--active');
    }
}

const gridSliders = document.querySelectorAll('.grid-slider');
gridSliders.forEach(gridSlider => new GridSlider(gridSlider));