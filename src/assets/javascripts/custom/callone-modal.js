// Call Modal via code example:
// document.addEventListener('DOMContentLoaded', () => {
// 	new Modal(null, 'contact-sales', 'data', 2000); // null, name, data, delay
// });

class Modal {
    constructor(modalButton, modalName = null, modalData = null, modalDelay = 0) {
        this.classPrefix = 'callone-modal';
        this.modalButton = modalButton;
        this.modalName = modalName || this.getModalName();
        this.originalModalName = this.modalName;
        this.modalData = modalData;
        this.modalDelay = modalDelay;
        this.defaultClosetext = 'Schließen';
        this.modal = null;
        this.modalWrapper = null;
        this.modalHeader = null;
        this.modalTitle = null;
        this.modalSubtitle = null;
        this.modalSteptitle = null;
        this.modalSteps = null;
        this.modalStepIndicators = null;
        this.modalContent = null;
        this.modalFooter = null;
        this.modalCloseButton = null;
        this.modalStepbackButton = null;
        this.activeStep = null;
        this.fileLoading = false;
        
        if (this.modalButton) {
            this.modalButton.addEventListener('click', this.getModal.bind(this));
        } else {
            setTimeout(this.getModal.bind(this), this.modalDelay);
        }
    }

    getModalName() {
        // Get modal name from button dataset or return empty string
        if (this.modalButton && this.modalButton.hasAttribute('data-openmodal')) {
            return this.modalButton.dataset.openmodal;
        }
        return null;
    }

    setModalData() {
        // Add custom modal data from button to modal
        if (this.modalButton && this.modalButton.getAttribute('data-modaldata')) {
            this.modal.setAttribute('data-modaldata', this.modalButton.getAttribute('data-modaldata'));
        } else if (this.modalData) {
            this.modal.setAttribute('data-modaldata', this.modalData);
        }
    }

    runModalScripts() {
        // Get all script tags in modal
        let modalScripts = this.modal.querySelectorAll('script');
        modalScripts.forEach(script => {
            // Clone scripts to re-run them
            if (script.hasAttribute('src')) {
                let scriptClone = document.createElement('script');
                scriptClone.setAttribute('src', script.getAttribute('src'));
                script.parentNode.insertBefore(scriptClone, script);
                script.remove();
            }
            eval(script.textContent);
        });
    }

    getModal(e = new MouseEvent('click')) {
        e.preventDefault();
        this.modal = document.querySelector('[data-modal="' + this.modalName + '"]');
        if (this.modal) {
            // Modal already exists in DOM
            this.openModal()
        } else {
            // Modal does not exist in DOM yet, load from file
            if (this.fileLoading)
                return;
            this.fileLoading = true; // Prevent fetch from being called multiple times on slow connection
            this.loadModalFromFile();
        }
    }

    openModal() {
        this.initModal();
        this.setModalData();
        document.body.classList.add(this.classPrefix + '--scrolllock'); // Scroll-Lock Body
        this.runModalScripts();
        fadeIn(this.modal, 300, 'flex');
        this.modal.classList.add(this.classPrefix + '--open');
    }

    closeModal() {
        fadeOut(this.modal, 300, () => {
            document.body.classList.remove(this.classPrefix + '--scrolllock');
            this.modal.classList.remove(this.classPrefix + '--open');
            if (this.modalSteps.length > 1) {
                this.activeStep = this.modalSteps[0];
                this.switchStep();
            }
            if (this.modalName == 'fallback-modal') {
                this.resetModal();
            }

            // Pause all running videos in modal
            let videos = this.modal.querySelectorAll('video');
            videos.forEach(video => {
                if (!video.paused)
                    video.pause();
                video.currentTime = 0;
                console.log(video.paused);
            });
        });
    }

    resetModal() {
        this.modal.remove();
        this.modalName = this.originalModalName;
        this.modal = null;
        this.modalWrapper = null;
        this.modalHeader = null;
        this.modalTitle = null;
        this.modalSubtitle = null;
        this.modalSteptitle = null;
        this.modalSteps = null;
        this.modalStepIndicators = null;
        this.modalContent = null;
        this.modalFooter = null;
        this.modalCloseButton = null;
        this.modalStepbackButton = null;
        this.activeStep = null;
        this.fileLoading = false;
    }

    loadModalFromFile() {
        // Load modal HTML from file and put it into DOM
        fetch('/partials/modals/' + this.modalName + '.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'text/plain; charset=UTF-8'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText + ' - ' + response.url);
            }
            return response.text();
        })
        .then(data => {
            // Create temp container to store retrieved HTML
            let tmpContainer = document.createElement('div');
            tmpContainer.innerHTML = data;

            // Read temp container for created HTML code and store it in variable
            this.modal = tmpContainer.querySelector('.' + this.classPrefix);

            // Add HTML to actual DOM
            document.body.appendChild(this.modal);

            // Call openModal again, this time with existing modal code in DOM
            this.openModal();
        })
        .catch(e => {
            console.log('Modal could not be loaded from file, opening fallback modal');
            this.modal = null;
            this.modalName = 'fallback-modal';
            this.modal = this.createNode('div', [
                this.classPrefix
            ]);
            this.modal.setAttribute('data-modal', this.modalName);
            this.modal.setAttribute('data-title', 'Ups...');
            this.modal.setAttribute('data-subtitle', 'Etwas ist schiefgelaufen');
            this.modal.innerHTML = '<p class="centered">Leider ist beim öffnen etwas schiefgelaufen. Bitte versuchen Sie es später noch einmal oder kontaktieren Sie uns.</p><p><a href="/kontakt" class="btn btn--primary btn--centered">Jetzt Kontakt aufnehmen</a></p>';
            document.body.appendChild(this.modal);
            this.openModal();
        });
    }

    initModal() {
        if (!this.modal || this.modal.getAttribute('initialized'))
            return;
        this.modal.setAttribute('initialized', true);
        
        this.createModalWrapper();
        this.createModalContent(); // Also sets this.modalSteps
        if (this.modalSteps.length > 0)
            this.activeStep = this.modalSteps[0];
        this.createModalHeader();
        this.createModalCloseButton();
        this.createModalTitle();
        this.handleNextButtons();
        this.handleFormSubmits();

        // Replace modal content with modalWrapper
        this.modal.innerHTML = '';
        this.modal.appendChild(this.modalWrapper);

        // Close modal on background protection click
        this.modal.addEventListener('mousedown', (e => {
            if (this.modal == e.target)
                this.closeModal();
        }).bind(this));
    }

    createModalWrapper() {
        this.modalWrapper = this.modal.querySelector('.' + this.classPrefix + '__wrapper');
        if (!this.modalWrapper) {
            this.modalWrapper = this.createNode('div', [
                this.classPrefix + '__wrapper'
            ]);
        }
    }

    createModalHeader() {
        this.modalHeader = this.modal.querySelector('.' + this.classPrefix + '__header');
        if (!this.modalHeader) {
            this.modalHeader = this.createNode('div', [
                this.classPrefix + '__header'
            ]);
        }
        this.modalWrapper.appendChild(this.modalHeader);
    }

    createModalCloseButton() {
        this.modalCloseButton = this.modal.querySelector('.' + this.classPrefix + '__headerbutton--close');
        if (!this.modalCloseButton) {
            this.modalCloseButton = this.createNode('div', [
                this.classPrefix + '__headerbutton',
                this.classPrefix + '__headerbutton--close'
            ]);
        }
        // Close Button Text Priority
        // activeStep text > modal text > default text
        this.modalCloseButton.textContent = this.modal.getAttribute('data-canceltext') || this.defaultClosetext;
        if (this.activeStep && this.activeStep.hasAttribute('data-canceltext'))
            this.modalCloseButton.textContent = this.activeStep.getAttribute('data-canceltext');
        this.modalCloseButton.addEventListener('click', this.closeModal.bind(this));
        this.modalHeader.appendChild(this.modalCloseButton);
    }

    updateModalCloseButton() {
        if (this.modalCloseButton)
            this.modalCloseButton.textContent = this.modal.getAttribute('data-canceltext') || this.defaultClosetext;
            if (this.activeStep && this.activeStep.hasAttribute('data-canceltext'))
                this.modalCloseButton.textContent = this.activeStep.getAttribute('data-canceltext');
    }

    createModalTitle() {
        this.modalTitle = this.modal.querySelector('.' + this.classPrefix + '__title');
        if (!this.modalTitle) {
            this.modalTitle = this.createNode('div', [
                this.classPrefix + '__title'
            ]);
        }

        if (this.modalSteps.length > 0) {
            // Modal has multiple steps

            // Add Steptitle
            this.createModalSteptitle();

            // Add step indicators (points)
            this.createModalStepIndicators();

            // Set current step active
            this.activeStep.classList.add(this.classPrefix + '__step--active');

            // Add go back button
            this.createGoBackButton();

            // Add modal footer
            this.createModalFooter();
        } else {
            // Modal has no steps (single view)
            this.modalTitle.innerHTML = this.modal.getAttribute('data-title');
            this.createModalSubtitle();
        }

        this.modalHeader.appendChild(this.modalTitle);
    }

    createModalSubtitle() {
        this.modalSubtitle = this.modal.querySelector('.' + this.classPrefix + '__subtitle');
        if (!this.modalSubtitle) {
            this.modalSubtitle = this.createNode('span', [
                this.classPrefix + '__subtitle'
            ]);
        }
        this.modalSubtitle.textContent = this.modal.getAttribute('data-subtitle');
        this.modalTitle.appendChild(this.modalSubtitle);
    }

    createModalFooter() {
        this.modalFooter = this.modal.querySelector('.' + this.classPrefix + '__footer');
        if (!this.modalFooter) {
            this.modalFooter = this.createNode('div', [
                this.classPrefix + '__footer'
            ]);
        }
        this.populateModalFooter();
        this.modalWrapper.appendChild(this.modalFooter);
    }

    populateModalFooter() {
        // Clear current footer content
        this.modalFooter.innerHTML = '';

        // Hide footer if wanted OR no more further steps available
        this.modalFooter.classList.remove(this.classPrefix + '__footer--hidden');
        if (this.activeStep.hasAttribute('data-no-footer') || !this.activeStep.hasAttribute('data-next-step')) {
            this.modalFooter.classList.add(this.classPrefix + '__footer--hidden');
            return;
        }

        // Check if NEXT or SUBMIT button is needed in footer
        let stepForm = this.activeStep.querySelector('form');
        if (stepForm) {
            // Active step has form and needs SUBMIT
            let submitId = stepForm.querySelector('input[type="submit"]').id;
            let submitButtonClasses = [
                'btn',
                'btn--primary',
                'btn--centered',
                this.classPrefix + '__submit'
            ];
            if (this.activeStep.getAttribute('data-next-button-classes')) {
                let classes = this.activeStep.getAttribute('data-next-button-classes').split(',');
                classes.forEach(c => submitButtonClasses.push(c.trim()));
            }
            let submitButton = this.createNode('label', submitButtonClasses);
            submitButton.textContent = this.activeStep.getAttribute('data-next-button-text') || 'Abschicken';
            submitButton.setAttribute('for', submitId);
            this.modalFooter.appendChild(submitButton);
        } else {
            // Active step has no form and needs NEXT
            let nextButton = this.createNode('a', [
                'btn',
                'btn--secondary',
                'btn--centered',
                this.classPrefix + '__nextstep'
            ]);
            nextButton.textContent = this.activeStep.getAttribute('data-next-button-text') || 'Weiter';
            nextButton.addEventListener('click', this.nextStep.bind(this));
            this.modalFooter.appendChild(nextButton);
        }
    }

    createGoBackButton() {
        this.modalStepbackButton = this.modal.querySelector('.' + this.classPrefix + '__headerbutton--back');
        if (!this.modalStepbackButton) {
            this.modalStepbackButton = this.createNode('div', [
                this.classPrefix + '__headerbutton',
                this.classPrefix + '__headerbutton--back',
                this.classPrefix + '__headerbutton--hidden'
            ]);
        }
        this.modalStepbackButton.textContent = 'Schritt zurück';
        this.modalStepbackButton.addEventListener('click', this.prevStep.bind(this));
        this.modalHeader.appendChild(this.modalStepbackButton);
    }

    createModalSteptitle() {
        this.modalSteptitle = this.modal.querySelector('.' + this.classPrefix + '__steptitle');
        if (!this.modalSteptitle) {
            this.modalSteptitle = this.createNode('div', [
                this.classPrefix + '__steptitle'
            ]);
        }
        if (this.activeStep.getAttribute('data-steptitle')) {
            this.modalSteptitle.textContent = this.activeStep.getAttribute('data-steptitle')
        } else {
            this.modalSteptitle.textContent = 'Schritt ' + (this.activeStep.getAttribute('data-step-indicator') || this.activeStep.getAttribute('data-step-id'));
        }
        this.modalTitle.appendChild(this.modalSteptitle);
    }

    createModalStepIndicators() {
        this.modalStepIndicators = this.modal.querySelector('.' + this.classPrefix + '__step-indicators');
        if (this.activeStep.getAttribute('data-step-indicator')) {
            if (!this.modalStepIndicators) {
                this.modalStepIndicators = this.createNode('div', [
                    this.classPrefix + '__step-indicators'
                ]);
            }

            this.modalStepIndicators.innerHTML = '';
            let values = this.activeStep.getAttribute('data-step-indicator').split('/'); // Always needs format "1/3", two numbers seperated by slash
            let currentStep = parseInt(values[0]);
            let countSteps = parseInt(values[1]);
            for (let i = 1; i <= countSteps; i++) {
                let classes = [this.classPrefix + '__step-indicator'];
                if (i == currentStep)
                    classes.push(this.classPrefix + '__step-indicator--active');
                if (i < currentStep)
                    classes.push(this.classPrefix + '__step-indicator--past');
                let step = this.createNode('div', classes);
                this.modalStepIndicators.appendChild(step);
            }

            this.modalTitle.appendChild(this.modalStepIndicators);
        } else if (this.modalStepIndicators) {
            this.modalStepIndicators.innerHTML = '';
        }
    }

    createModalContent() {
        this.modalContent = this.modal.querySelector('.' + this.classPrefix + '__content');
        if (!this.modalContent) {
            this.modalContent = this.createNode('div', [
                this.classPrefix + '__content'
            ]);
        }
        this.modalContent.innerHTML = this.modal.innerHTML;
        this.modalSteps = this.modalContent.querySelectorAll('.' + this.classPrefix + '__step');
        this.modalWrapper.appendChild(this.modalContent);
    }

    checkForNoScroll() {
        if (this.activeStep.hasAttribute('data-step-noscroll')) {
            this.modalContent.classList.add(this.classPrefix + '__content--scrolllock');
            
            // Set height of calendly widget if present
            this.setCalendlyHeight();
        } else {
            this.modalContent.classList.remove(this.classPrefix + '__content--scrolllock');
        }
    }

    setCalendlyHeight() {
        let calendly = this.activeStep.querySelector('.calendly-inline-widget');
        if (calendly) {
            // If calendly widget exists set its height to the modal height
            let newHeight = (window.innerHeight * 0.8) - this.modalHeader.offsetHeight + 'px';
            if (window.innerWidth <= 830) {
                newHeight = 'calc(' + (window.innerHeight - this.modalHeader.offsetHeight) + 'px - 60px)';
            }
            calendly.style.height = newHeight;
        }

        window.onresize = this.setCalendlyHeight.bind(this)
    }

    handleNextButtons() {
        let nextButtons = this.modalContent.querySelectorAll('.' + this.classPrefix + '__nextstep');
        if (nextButtons.length > 0) {
            nextButtons.forEach(nextButton => {
                nextButton.addEventListener('click', this.nextStep.bind(this));
            });
        }
    }

    handleFormSubmits() {
        let submitForms = this.modalContent.querySelectorAll('form');
        if (submitForms.length > 0) {
            submitForms.forEach(submitForm => {
                submitForm.addEventListener('submit', this.submitStep.bind(this));
            });
        }
    }

    toggleBackButton() {
        // Hide back button if option is set or first step is active
        if (this.activeStep.hasAttribute('data-no-back') || this.activeStep == this.modalSteps[0]) {
            this.modalStepbackButton.classList.add(this.classPrefix + '__headerbutton--hidden');
        } else {
            this.modalStepbackButton.classList.remove(this.classPrefix + '__headerbutton--hidden');
        }
    }

    showActiveStep() {
        // Hide all steps
        this.modalSteps.forEach(step => {
            step.classList.remove(this.classPrefix + '__step--active');
        });

        // Show current active step
        this.activeStep.classList.add(this.classPrefix + '__step--active');
    }

    nextStep(e) {
        e.preventDefault();

        // Get next step id from current active step
        let nextStepId = this.activeStep.getAttribute('data-next-step');

        // Replace next step id if one is passed by the clicked button
        if (e.currentTarget && e.currentTarget.hasAttribute('data-next-step'))
            nextStepId = e.currentTarget.getAttribute('data-next-step');

        this.activeStep = this.getStepById(nextStepId);
        this.switchStep();
    }

    prevStep() {
        // Get previous step id from active step data attribute
        let prevStepId = this.activeStep.getAttribute('data-prev-step');
        this.activeStep = this.getStepById(prevStepId);
        this.switchStep();
    }

    switchStep() {
        // Adjust step indicators
        this.createModalStepIndicators();
        
        // Check if no scroll is set
        this.checkForNoScroll();

        // Hide all steps and show active steps
        this.showActiveStep();

        // Adjust close button
        this.updateModalCloseButton();

        // Adjust steptitle
        this.createModalSteptitle();

        // Show/Hide back button
        this.toggleBackButton();

        // Adjust modal footer content
        this.populateModalFooter();
    }

    submitStep(e) {
        e.preventDefault();
        if (e.target.hasAttribute('data-step-callback') && typeof window[e.target.getAttribute('data-step-callback')] === 'function') {
            // Execute passed callback function (located in modal file)
            window[e.target.dataset.stepCallback](e, this.nextStep.bind(this, e));
        } else {
            // If no callback function is passed go to next step
            this.nextStep(e);
        }
    }

    getStepById(id) {
        let returnStep = this.activeStep;
        this.modalSteps.forEach(step => {
            if (step.getAttribute('data-step-id') == id)
                returnStep = step;
        });
        return returnStep;
    }

    createNode(type, classes) {
        // Create Element
        let element = document.createElement(type);

        // Append classnames
        classes.forEach(classname => element.classList.add(classname));
        
        // Return element
        return element;
    }
}

let modalButtons = document.querySelectorAll('[data-openmodal]');
modalButtons.forEach(modalButton => {
    new Modal(modalButton);
});