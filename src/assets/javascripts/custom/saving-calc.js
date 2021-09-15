class Mehrwertrechner {
    constructor(el) {
        this.element = el;
        this.defaultCalls = 1234;
        this.defaultAgents = 10;

        this.loader = this.element.querySelector('.atomic-loader');
        this.h3 = this.element.querySelector('.saving-calculation > h3');
        this.h4 = this.element.querySelector('.saving-calculation > h4');
        this.detailToggles = this.element.querySelectorAll('.saving-calculation__toggle');
        this.detailToggles.forEach(toggle => toggle.style.display = 'none');

        this.form = this.element.querySelector('.saving-calculation__form');
        this.form.addEventListener('submit', this.submitForm.bind(this));
        this.setDefaultFormValues();
    }

    setDefaultFormValues() {
        let calls = this.form.querySelector('[name="calls"]');
        let agents = this.form.querySelector('[name="agents"]');
        calls.value = this.defaultCalls;
        agents.value = this.defaultAgents;
    }

    submitForm(e) {
        e.preventDefault();

        // Show loader
        this.loader.classList.remove('atomic-loader--hidden');

        // Adjust headlines
        this.h3.style.display = 'none';
        this.h4.textContent = 'Aufwendige Kalkulation...';

        // Show loading animations in columns
        let savingCalculation = this.element.querySelector('.saving-calculation');
        savingCalculation.classList.add('saving-calculation--loading');

        // Remove overlay
        let overlay = savingCalculation.querySelector('.saving-calculation__overlay');
        overlay.style.display = 'none';

        // Remove blurry from columns
        let contents = this.element.querySelectorAll('.saving-calculation__content');
        contents.forEach(content => content.classList.remove('saving-calculation__content--blurred'));

        // Show detail toggles
        this.detailToggles.forEach(toggle => toggle.style.display = 'block');

        // Adjust form grid
        let grid = this.element.querySelector('.saving-calculation__form-grid');
        let columns = grid.querySelectorAll('.co-grid__col');
        columns[0].classList.remove('co-grid__col--12-xs');
        columns[0].classList.remove('co-grid__col--6-xs');
        columns[1].style.display = 'block';

        // TODO: Insert calculations to right places

        // Show everything, hide loaders
        setTimeout(() => {
            // Hide loader
            this.loader.classList.add('atomic-loader--hidden');

            // Adjust headlines
            this.h3.style.display = 'block';
            this.h4.textContent = 'Aufschlüsselung des Einsparpotenzials';

            // Remove loading animations from columns
            savingCalculation.classList.remove('saving-calculation--loading');
        }, 2000);
    }
}

const mehrwertrechner = document.getElementById('mehrwertrechner');
new Mehrwertrechner(mehrwertrechner);

let savingCalculator = document.querySelector('.saving-calculation');

let toggleButtons = savingCalculator.querySelectorAll('.saving-calculation__toggle');
toggleButtons.forEach(toggleButton => {
    toggleButton.addEventListener('click', e => {
        let col = toggleButton.closest('.saving-calculation__col');
        let details = col.querySelector('.saving-calculation__details');
        let content = col.querySelector('.saving-calculation__content');
        details.classList.toggle('saving-calculation__details--open');
        content.classList.toggle('saving-calculation__content--hidden');
        toggleButton.classList.toggle('saving-calculation__toggle--close');
        toggleButton.classList.toggle('saving-calculation__toggle--open');
        if (toggleButton.classList.contains('saving-calculation__toggle--close')) {
            toggleButton.textContent = 'Berechnung ausblenden';
        } else {
            toggleButton.textContent = 'Berechnung einblenden';
        }
    });
});