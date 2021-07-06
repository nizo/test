class Modal {
    constructor(btn) {
        this.namespace = 'callone-modal';
        this.button = btn;
        this.modal = null;
        this.steps = null;
        this.activeStep = null;
        this.currentStep = 1;
        this.modalWrapper = null;
        this.modalHeader = null;
        this.modalContent = null;
        this.closeButton = null;
        // this.button.addEventListener('click', this.openModal.bind(this));
        // this.loadModalContent();
        this.button.addEventListener('click', this.openModal.bind(this));
    }
    
    loadModalContent() {
        this.modal = document.querySelector('[data-modal="' + this.button.dataset.openmodal + '"]');
        if (!this.modal) {
            this.modal = this.getModalContent(this.button.dataset.openmodal);
        } else {
            this.initModal();
        }
    }
    
    initModal() {
        this.steps = this.modal.querySelectorAll('.' + this.namespace + '__step');

        // Modal Wrapper
        if (this.modal.querySelector('.' + this.namespace + '__wrapper')) {
            this.modalWrapper = this.modal.querySelector('.' + this.namespace + '__wrapper');
        } else {
            this.modalWrapper = document.createElement('div');
            this.modalWrapper.classList.add(this.namespace + '__wrapper');
        }

        // Modal Header
        if (this.modal.querySelector('.' + this.namespace + '__header')) {
            this.modalHeader = this.modal.querySelector('.' + this.namespace + '__header');
        } else {
            this.modalHeader = document.createElement('div');
            this.modalHeader.classList.add(this.namespace + '__header');
            this.modalWrapper.appendChild(this.modalHeader);
        }

        // Close Button
        if (this.modal.querySelector('.' + this.namespace + '__headerbutton--close')) {
            this.closeButton = this.modal.querySelector('.' + this.namespace + '__headerbutton--close');
        } else {
            this.closeButton = document.createElement('div');
            this.closeButton.classList.add(this.namespace + '__headerbutton');
            this.closeButton.classList.add(this.namespace + '__headerbutton--close');
            this.closeButton.textContent = this.modal.dataset.canceltext || 'Schließen';
            this.closeButton.addEventListener('click', this.closeModal.bind(this));
            this.modalHeader.appendChild(this.closeButton);
        }

        // Title / Steps
        let title = document.createElement('div');
        title.classList.add(this.namespace + '__title');
        if (!this.modal.querySelector('.' + this.namespace + '__title')) {
            if (this.steps.length > 0) {
                // Has Steps

                // Current Step
                this.activeStep = this.getActiveStep();

                // Set Step Title
                let steptitle = document.createElement('div')
                steptitle.classList.add(this.namespace + '__steptitle');
                if (!this.activeStep.dataset.steptitle || this.activeStep.dataset.steptitle === "") {
                    steptitle.textContent = 'Schritt ' + (this.activeStep.dataset.stepIndicator || this.activeStep.dataset.stepId);
                } else {
                    steptitle.textContent = this.activeStep.dataset.steptitle;
                }
                title.appendChild(steptitle);

                // Set step indicators (points)
                let stepIndicators = document.createElement('div');
                stepIndicators.classList.add(this.namespace + '__step-indicators');
                if (this.activeStep.dataset.stepIndicator) {
                    let values = this.activeStep.dataset.stepIndicator.split("/"); // Has to be "1/3" format
                    let current = parseInt(values[0]);
                    let limit = parseInt(values[1]);
                    for (let i = 1; i <= limit; i++) {
                        let step = document.createElement('div');
                        step.classList.add(this.namespace + '__step-indicator');
                        if (i == current)
                            step.classList.add(this.namespace + '__step-indicator--active');
                        stepIndicators.appendChild(step);
                    }
                }
                title.appendChild(stepIndicators);

                // Show active step
                this.activeStep.classList.add(this.namespace + '__step--active');

                // Add back button to previous step
                let stepbackButton = document.createElement('div');
                stepbackButton.classList.add(this.namespace + '__headerbutton');
                stepbackButton.classList.add(this.namespace + '__headerbutton--back');
                stepbackButton.classList.add(this.namespace + '__headerbutton--hidden');
                stepbackButton.textContent = 'Schritt zurück';
                stepbackButton.addEventListener('click', this.prevStep.bind(this));
                this.modalHeader.appendChild(stepbackButton);
            } else {
                // Title
                title.innerHTML = this.modal.dataset.title;
                let subtitle = document.createElement('span');
                subtitle.textContent = this.modal.dataset.subtitle;
                title.appendChild(subtitle);
            }
            this.modalHeader.appendChild(title);
        }

        // Modal Content
        if (this.modal.querySelector('.' + this.namespace + '__content')) {
            this.modalContent = this.modal.querySelector('.' + this.namespace + '__content');
        } else {
            this.modalContent = document.createElement('div');
            this.modalContent.classList.add(this.namespace + '__content');
            this.modalContent.innerHTML = this.modal.innerHTML;
            this.modalWrapper.appendChild(this.modalContent);
        }
        let nextButtons = this.modalContent.querySelectorAll('.' + this.namespace + '__nextstep');
        if (nextButtons.length > 0) {
            nextButtons.forEach(next => {
                next.addEventListener('click', this.nextStep.bind(this));
            });
        }

        // Handle Form Submits
        let submitForms = this.modalContent.querySelectorAll('form');
        if (submitForms.length > 0) {
            submitForms.forEach(form => {
                form.addEventListener('submit', this.submitStep.bind(this));
            });
        }

        // Modal
        this.modal.innerHTML = '';
        this.modal.appendChild(this.modalWrapper);

        // Close on background protection click
        this.modal.addEventListener('mousedown', (e => {
            if (this.modal == e.target) {
                this.closeModal();
            }
        }).bind(this));

        this.openModal();
    }

    submitStep(e) {
        e.preventDefault();
        if (typeof window[e.target.dataset.stepCallback] === "function")
            window[e.target.dataset.stepCallback](e, this.nextStep.bind(this, e));
    }

    nextStep(e) {
        e.preventDefault();
        this.currentStep = parseInt(e.target.dataset.nextStep);
        this.switchStep();
    }

    prevStep() {
        this.currentStep = parseInt(this.activeStep.dataset.prevStep);
        this.switchStep();
    }

    getActiveStep() {
        let activeStep = null;
        this.steps = this.modal.querySelectorAll('.' + this.namespace + '__step');
        this.steps.forEach(step => {
            if (step.hasAttribute('data-step-id') && parseInt(step.getAttribute('data-step-id')) === this.currentStep)
                activeStep = step;
        });
        return activeStep;
    }

    switchStep() {
        this.activeStep = this.getActiveStep();
        let stepTitle = this.modal.querySelector('.' + this.namespace + '__steptitle');
        let stepIndicators = this.modal.querySelector('.' + this.namespace + '__step-indicators');
        let backButton = this.modal.querySelector('.' + this.namespace + '__headerbutton--back');
        this.closeButton.textContent = this.activeStep.dataset.canceltext || this.modal.dataset.canceltext || 'Schließen';

        // Adjust step indicators
        stepIndicators.innerHTML = '';
        if (this.activeStep.dataset.stepIndicator) {
            let indicatorValues = this.activeStep.dataset.stepIndicator.split("/");
            let indicatorCurrent = parseInt(indicatorValues[0]);
            let indicatorLimit = parseInt(indicatorValues[1]);
            for (let i = 1; i <= indicatorLimit; i++) {
                let step = document.createElement('div');
                step.classList.add(this.namespace + '__step-indicator');
                if (i == indicatorCurrent)
                    step.classList.add(this.namespace + '__step-indicator--active');
                    if (i < indicatorCurrent)
                    step.classList.add(this.namespace + '__step-indicator--past');
                stepIndicators.appendChild(step);
            }
        }

        // Check if no scroll is set
        if (this.activeStep.dataset.stepNoscroll && this.activeStep.dataset.stepNoscroll === 'true') {
            this.modalContent.classList.add(this.namespace + '__content--scrolllock');

            // Set height of calendly widget if present
            let cal = this.activeStep.querySelector('.calendly-inline-widget');
            if (cal) {
                cal.style.height = (window.innerHeight * 0.8) - this.modalHeader.offsetHeight + 'px';
                if (window.innerWidth <= 830) {
                    cal.style.height = 'calc(' + (window.innerHeight - this.modalHeader.offsetHeight) + 'px - 60px)';
                }
                let styles = window.getComputedStyle(this.modalContent, null);
                let gutters = {
                    top: parseInt(styles.getPropertyValue('padding-top')),
                    right: parseInt(styles.getPropertyValue('padding-right')),
                    bottom: parseInt(styles.getPropertyValue('padding-bottom')),
                    left: parseInt(styles.getPropertyValue('padding-left'))
                }
                cal.style.marginTop = -gutters.top + 'px';
                cal.style.marginRight = -gutters.right + 'px';
                cal.style.marginBottom = -gutters.bottom + 'px';
                cal.style.marginLeft = -gutters.left + 'px';
            }
            // End Calendly height calculation
        } else {
            this.modalContent.classList.remove(this.namespace + '__content--scrolllock');
        }

        // Set new step as active
        this.steps.forEach(step => step.classList.remove(this.namespace + '__step--active'));
        this.activeStep.classList.add(this.namespace + '__step--active');

        if (!this.activeStep.dataset.steptitle || this.activeStep.dataset.steptitle == "") {
            stepTitle.textContent = 'Schritt ' + (this.activeStep.dataset.stepIndicator || this.activeStep.dataset.stepId);
        } else {
            stepTitle.textContent = this.activeStep.dataset.steptitle;
        }
        if (this.currentStep > 1) {
            backButton.classList.remove(this.namespace + '__headerbutton--hidden');
        } else {
            backButton.classList.add(this.namespace + '__headerbutton--hidden');
        }
        // this.runScripts();
    }

    runScripts() {
        let scripts = this.modal.querySelectorAll('script');
        scripts.forEach(script => {
            if (script.hasAttribute('src')) {
                let scriptClone = document.createElement('script');
                scriptClone.setAttribute('src', script.getAttribute('src'));
                script.parentNode.insertBefore(scriptClone, script);
                script.remove();
            }
            eval(script.textContent);
        })
    }

    openModal(e = new MouseEvent('click')) {
        console.log(e);
        e.preventDefault();
        if (this.modal) {
            document.body.classList.add('callone-modal--scrolllock');
            this.runScripts();
            $(this.modal).css('display', 'flex').hide().fadeIn(300);
            this.modal.classList.add(this.namespace + '--open');
        } else {
            this.loadModalContent();
        }
    }
    
    closeModal() {
        $(this.modal).fadeOut(300, (function() {
            document.body.classList.remove('callone-modal--scrolllock');
            this.modal.classList.remove(this.namespace + '--open');
            this.currentStep = 1;
            this.switchStep();
        }).bind(this));
    }

    getModalContent(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = (function() {
            if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status == 200) {
                let res = xhttp.response;
                let tempContainer = document.createElement('div');
                tempContainer.innerHTML = res;
                this.modal = tempContainer.querySelector('.callone-modal');
                // this.button.parentNode.insertBefore(this.modal, this.button.nextSibling);
                document.body.appendChild(this.modal);
                this.initModal();
            }
        }).bind(this);
        // xhttp.responseType = 'document';
        xhttp.open('GET', '/partials/modals/' + id + '.php', true);
        //xhttp.overrideMimeType('application/xml; charset=UTF-8');
        xhttp.overrideMimeType('text/plain; charset=utf-8');
        xhttp.send();
    }
}

let modalButtons = document.querySelectorAll('[data-openmodal]');
modalButtons.forEach(btn => {
    new Modal(btn);
});