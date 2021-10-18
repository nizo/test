class Modal {
    constructor(modalButton) {
        this.classPrefix = 'callone-modal';
        this.modalButton = modalButton;
        this.modalName = this.getModalName();
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
        
        this.modalButton.addEventListener('click', this.openModal.bind(this));
    }

    getModalName() {
        // Get modal name from button dataset or return empty string
        if (this.modalButton.hasAttribute('data-openmodal')) {
            return this.modalButton.dataset.openmodal;
        }
        return '';
    }

    setModalData() {
        // Add custom modal data from button to modal
        if (this.modalButton.hasAttribute('data-modaldata') && this.modalButton.getAttribute('data-modaldata') != '') {
            this.modal.setAttribute('data-modaldata', this.modalButton.getAttribute('data-modaldata'));
        }
    }

    runModalScripts() {
        let modalScripts = this.modal.querySelectorAll('script');
        modalScripts.forEach(script => {
            if (script.hasAttribute('src')) {
                let scriptClone = document.createElement('script');
                scriptClone.setAttribute('src', script.getAttribute('src'));
                script.parentNode.insertBefore(scriptClone, script);
                script.remove();
            }
            eval(script.textContent);
        });
    }

    openModal(e = new MouseEvent('click')) {
        e.preventDefault();
        this.modal = document.querySelector('[data-modal="' + this.modalName + '"]');
        if (this.modal) {
            this.initModal();
            this.setModalData();
            document.body.classList.add(this.classPrefix + '--scrolllock'); // Scroll-Locl Body
            this.runModalScripts();
            $(this.modal).css('display', 'flex').hide().fadeIn(300);
            this.modal.classList.add(this.classPrefix + '--open');
        } else {
            this.loadModalFromFile();
        }
    }

    closeModal() {
        $(this.modal).fadeOut(300, () => {
            document.body.classList.remove(this.classPrefix + '--scrolllock');
            this.modal.classList.remove(this.classPrefix + '--open');
            if (this.modalSteps.length > 1) {
                this.activeStep = this.modalSteps[0];
                this.switchStep();
            }
        });
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
            let tmpContainer = document.createElement('div');
            tmpContainer.innerHTML = data;
            this.modal = tmpContainer.querySelector('.' + this.classPrefix);
            document.body.appendChild(this.modal);
            this.openModal();
        })
        .catch(e => {
            this.modal = null;
            this.initModal();
        });
    }

    initModal() {
        if (!this.modal)
            return;
        
        this.modalSteps = document.querySelectorAll('.' + this.classPrefix + '__step');
        if (this.modalSteps.length > 0)
            this.activeStep = this.modalSteps[0];

        this.createModalWrapper();
        this.createModalHeader();
        this.createModalCloseButton();
        this.createModalTitle();
        this.createModalContent();
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
            this.modalCloseButton.textContent = this.modal.getAttribute('data-canceltext') || this.defaultClosetext;
        }
        this.modalHeader.appendChild(this.modalCloseButton);
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

            // Add step indicators (points)
            this.createModalStepIndicators();

            // Set current step active
            this.activeStep.classList.add(this.classPrefix + '__step--active');

            // Add go back button
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

            // Add modal footer
            this.modalFooter = this.modal.querySelector('.' + this.classPrefix + '__footer');
            if (!this.modalFooter) {
                this.modalFooter = this.createNode('div', [
                    this.classPrefix + '__footer'
                ]);
            }
            this.populateModalFooter();
            this.modalWrapper.appendChild(this.modalFooter);
        } else {
            // Modal has no steps (single view)
            this.modalTitle.innerHTML = this.modal.getAttribute('data-title');
            this.modalSubtitle = this.createNode('span', [
                this.classPrefix + '__subtitle'
            ]);
            this.modalSubtitle.textContent = this.modal.getAttribute('data-subtitle');
            this.modalTitle.appendChild(this.modalSubtitle);
        }

        this.modalHeader.appendChild(this.modalTitle);
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

    createModalStepIndicators() {
        if (this.activeStep.getAttribute('data-step-indicator')) {
            this.modalStepIndicators = this.modal.querySelector('.' + this.classPrefix + '__step-indicators');
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
                let step = this.createNode('div', classes);
                this.modalStepIndicators.appendChild(step);
            }

            this.modalTitle.appendChild(this.modalStepIndicators);
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
        this.modalWrapper.appendChild(this.modalContent);
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

    nextStep(e) {
        e.preventDefault();
        let nextStepId = this.activeStep.getAttribute('data-next-step');
        if (e.currentTarget && e.currentTarget.hasAttribute('data-next-step'))
            nextStepId = e.currentTarget.getAttribute('data-next-step');
        this.activeStep = this.modalContent.querySelectorAll('.' + this.classPrefix + '__step[data-step-id="' + nextStepId + '"]');
        this.switchStep();
    }

    prevStep() {
        console.log('PREVIOUS STEP');
    }

    switchStep() {
        // Adjust step indicators
        this.createModalStepIndicators();
    }

    submitStep() {
        console.log('SUBMIT STEP');
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