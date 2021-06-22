class Modal {
    constructor(btn) {
        this.namespace = 'callone-modal';
        this.button = btn;
        this.modal = document.querySelector('[data-modal="' + this.button.dataset.openmodal + '"]');
        this.steps = this.modal.querySelectorAll('.' + this.namespace + '__step');
        this.currentStep = 0;
        this.modalContent = null;
        this.initModal();
        this.button.addEventListener('click', this.openModal.bind(this));
    }

    initModal() {
        // Modal Wrapper
        let modalWrapper = document.createElement('div');
        modalWrapper.classList.add(this.namespace + '__wrapper');

        // Modal Header
        let modalHeader = document.createElement('div');
        modalHeader.classList.add(this.namespace + '__header');
        modalWrapper.appendChild(modalHeader);

        // Close Button
        let closeButton = document.createElement('div');
        closeButton.classList.add(this.namespace + '__headerbutton');
        closeButton.classList.add(this.namespace + '__headerbutton--close');
        closeButton.textContent = this.modal.dataset.canceltext || 'Schließen';
        closeButton.addEventListener('click', this.closeModal.bind(this));
        modalHeader.appendChild(closeButton);

        // Title / Steps
        let title = document.createElement('div');
        title.classList.add(this.namespace + '__title');
        if (this.steps.length > 0) {
            // Steps
            let steptitle = document.createElement('div')
            steptitle.classList.add(this.namespace + '__steptitle');
            steptitle.textContent = this.steps[0].dataset.steptitle;
            title.appendChild(steptitle);

            let stepsWrapper = document.createElement('div');
            stepsWrapper.classList.add(this.namespace + '__steps');
            for (let i = 0; i < this.steps.length; i++) {
                let step = document.createElement('div');
                step.classList.add(this.namespace + '__stepindicator');
                if (i == this.currentStep)
                    step.classList.add(this.namespace + '__stepindicator--active');
                stepsWrapper.appendChild(step);
            }
            title.appendChild(stepsWrapper);
            this.steps[this.currentStep].classList.add(this.namespace + '__step--active');

            let stepbackButton = document.createElement('div');
            stepbackButton.classList.add(this.namespace + '__headerbutton');
            stepbackButton.classList.add(this.namespace + '__headerbutton--back');
            stepbackButton.classList.add(this.namespace + '__headerbutton--hidden');
            stepbackButton.textContent = 'Schritt zurück';
            stepbackButton.addEventListener('click', this.prevStep.bind(this));
            modalHeader.appendChild(stepbackButton);
        } else {
            // Title
            title.innerHTML = this.modal.dataset.title;
            let subtitle = document.createElement('span');
            subtitle.textContent = this.modal.dataset.subtitle;
            title.appendChild(subtitle);
        }
        modalHeader.appendChild(title);

        // Modal Content
        let modalContent = document.createElement('div');
        modalContent.classList.add(this.namespace + '__content');
        modalContent.innerHTML = this.modal.innerHTML;
        let nextButton = modalContent.querySelector('.' + this.namespace + '__nextstep');
        nextButton.addEventListener('click', this.nextStep.bind(this));
        modalWrapper.appendChild(modalContent);

        // Modal
        this.modal.innerHTML = '';
        this.modal.appendChild(modalWrapper);

        // Close on background protection click
        this.modal.addEventListener('click', (e => {
            if (this.modal == e.target) {
                this.closeModal();
            }
        }).bind(this));
    }

    nextStep() {
        this.currentStep++;
        this.switchStep();
    }

    prevStep() {
        this.currentStep--;
        this.switchStep();
    }

    switchStep() {
        if (this.currentStep >= 0 && this.currentStep < this.steps.length) {
            let steps = this.modal.querySelectorAll('.' + this.namespace + '__step');
            let stepTitle = this.modal.querySelector('.' + this.namespace + '__steptitle');
            let stepIndicators = this.modal.querySelectorAll('.' + this.namespace + '__stepindicator');
            let backButton = this.modal.querySelector('.' + this.namespace + '__headerbutton--back');
            stepIndicators.forEach(step => step.classList.remove(this.namespace + '__stepindicator--active'));
            stepIndicators[this.currentStep].classList.add(this.namespace + '__stepindicator--active');
            steps.forEach(step => step.classList.remove(this.namespace + '__step--active'));
            steps[this.currentStep].classList.add(this.namespace + '__step--active');
            stepTitle.textContent = steps[this.currentStep].dataset.steptitle;
            if (this.currentStep > 0) {
                backButton.classList.remove(this.namespace + '__headerbutton--hidden');
            } else {
                backButton.classList.add(this.namespace + '__headerbutton--hidden');
            }

        }
    }

    openModal() {
        this.modal.classList.add(this.namespace + '--open');
    }

    closeModal() {
        this.modal.classList.remove(this.namespace + '--open');
        this.currentStep = 0;
        this.switchStep();
    }

    // getModalContent() {
    //     const xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = (function() {
    //         if (xhttp.readyState != XMLHttpRequest.DONE && xhttp.status == 200)
    //             return;
    //         this.modal.innerHTML = xhttp.responseText;
    //     }).bind(this);
    //     xhttp.open('GET', '/partials/modals/' + this.modalname + '.html', true);
    //     xhttp.send();
    // }
}

let modalButtons = document.querySelectorAll('[data-openmodal]');
modalButtons.forEach(btn => {
    new Modal(btn);
});