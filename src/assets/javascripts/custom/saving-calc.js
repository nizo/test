class Mehrwertrechner {
    constructor(el) {
        this.element = el;
        this.values = {
            defaultCalls: 10000,
            defaultAgents: 25,
            minCalls: 100,
            minAgents: 10,
            einspareffektAnruf: 30, // Sekunden
            stundenlohn: 30, // Euro
            monateImJahr: 12,
            effizienzgewinn: 5, // Prozent
            kostenAgent: 50000, // Euro
            erreichbarkeitsSteigerung: 20, // Prozent
            anrufDauer: 3.5 // Minuten
        };

        this.columns = {
            anrufdauer: {
                anrufeProJahr: this.element.querySelector('.saving-calculation__col--anrufdauer .nummer-anrufe'),
                einspareffektAnruf: this.element.querySelector('.saving-calculation__col--anrufdauer .einspareffekt-anruf'),
                gesparteSekunden: this.element.querySelector('.saving-calculation__col--anrufdauer .gesparte-sekunden'),
                gesparteStunden: this.element.querySelectorAll('.saving-calculation__col--anrufdauer .gesparte-stunden'),
                stundenlohn: this.element.querySelector('.saving-calculation__col--anrufdauer .stundenlohn'),
                monatlicheEinsparung: this.element.querySelector('.saving-calculation__col--anrufdauer .monatliche-einsparung'),
                monateImJahr: this.element.querySelector('.saving-calculation__col--anrufdauer .monate-im-jahr'),
                totalErsparnis: this.element.querySelectorAll('.saving-calculation__col--anrufdauer .total-ersparnis')
            },
            agentenauslastung: {
                anrufeProJahr: this.element.querySelector('.saving-calculation__col--agentenauslastung .nummer-anrufe'),
                erreichbarkeitsSteigerung: this.element.querySelector('.saving-calculation__col--agentenauslastung .erreichbarkeitssteigerung'),
                dauerAnruf: this.element.querySelector('.saving-calculation__col--agentenauslastung .dauer-anruf'),
                mehrAnrufe: this.element.querySelector('.saving-calculation__col--agentenauslastung .mehr-anrufe'),
                gesparteStunden: this.element.querySelector('.saving-calculation__col--agentenauslastung .gesparte-stunden'),
                stundenlohn: this.element.querySelector('.saving-calculation__col--agentenauslastung .stundenlohn'),
                monatlicheEinsparung: this.element.querySelector('.saving-calculation__col--agentenauslastung .monatliche-einsparung'),
                monateImJahr: this.element.querySelector('.saving-calculation__col--agentenauslastung .monate-im-jahr'),
                totalErsparnis: this.element.querySelectorAll('.saving-calculation__col--agentenauslastung .total-ersparnis')
            },
            personalplanung: {
                anzahlAgenten: this.element.querySelectorAll('.saving-calculation__col--personalplanung .nummer-agenten'),
                effizienzgewinn: this.element.querySelectorAll('.saving-calculation__col--personalplanung .effizienzgewinn'),
                kostenAgent: this.element.querySelector('.saving-calculation__col--personalplanung .kosten-agent'),
                personalkostenJahr: this.element.querySelector('.saving-calculation__col--personalplanung .personalkosten-jahr'),
                totalErsparnis: this.element.querySelectorAll('.saving-calculation__col--personalplanung .total-ersparnis')
            }
        };
        
        this.loader = this.element.querySelector('.atomic-loader');
        this.h3 = this.element.querySelector('.saving-calculation > h3');
        this.h4 = this.element.querySelector('.saving-calculation > h4');
        this.detailToggles = this.element.querySelectorAll('.saving-calculation__toggle');
        this.detailToggles.forEach(toggle => toggle.style.display = 'none');
        
        this.form = this.element.querySelector('.saving-calculation__form');
        this.form.addEventListener('submit', this.submitForm.bind(this));
        this.formError = this.form.querySelector('.floating-form__error');
        this.formErrorText = this.formError.querySelector('p');
        
        this.inputs = {
            calls: this.form.querySelector('[name="calls"]'),
            agents: this.form.querySelector('[name="agents"]')
        };

        this.inputs.calls.addEventListener('keyup', e => {
            this.inputs.calls.value = this.inputs.calls.value.replace(/\D/, '');
            this.form.querySelector('.floating-form__submit').disabled = false;
        });
        this.inputs.agents.addEventListener('keyup', e => {
            this.inputs.agents.value = this.inputs.agents.value.replace(/\D/, '');
            this.form.querySelector('.floating-form__submit').disabled = false;
        });

        
        this.setDefaultFormValues();
        this.calculate();
        this.removeDefaultFormValues();
    }

    setDefaultFormValues() {
        this.inputs.calls.value = this.values.defaultCalls;
        this.inputs.agents.value = this.values.defaultAgents;
    }
    removeDefaultFormValues() {
        this.inputs.calls.value = '';
        this.inputs.agents.value = '';
    }

    isInputValid() {
        this.formError.classList.remove('floating-form__error--active');
        
        let calls = parseInt(this.inputs['calls'].value);
        let agents = parseInt(this.inputs['agents'].value);
        
        if (isNaN(calls) || isNaN(agents)) {
            this.formError.classList.add('floating-form__error--active');
            this.formErrorText.textContent = 'Bitte geben Sie gültige Zahlen ein.';
            return false;
        }
        if (calls < this.minCalls) {
            this.formError.classList.add('floating-form__error--active');
            this.formErrorText.textContent = 'Für die Berechnung müssen mindestens 100 Anrufe eingetragen werden.';
            return false;
        }
        if (agents < this.minAgents) {
            this.formError.classList.add('floating-form__error--active');
            this.formErrorText.textContent = 'Für die Berechnung müssen mindestens 10 Agenten eingetragen werden.';
            return false;
        }

        this.inputs['calls'].value = calls;
        this.inputs['agents'].value = agents;

        return true;
    }

    getInput(input) {
        if (isNaN(parseInt(this.inputs[input].value)))
            return (input == 'calls' ? this.values.defaultCalls : this.values.defaultAgents);
        return parseInt(this.inputs[input].value);
    }

    calculate() {
        // Anrufdauer
        this.columns.anrufdauer.anrufeProJahr.textContent = this.getInput('calls');
        this.columns.anrufdauer.einspareffektAnruf.textContent = this.values.einspareffektAnruf + 's';
        let gesparteSekunden = this.getInput('calls') * this.values.einspareffektAnruf;
        this.columns.anrufdauer.gesparteSekunden.textContent = this.formatNumber(gesparteSekunden) + 's';
        let gesparteStunden1 = (Math.round((gesparteSekunden / 60 / 60) * 100) / 100).toFixed(2);
        this.columns.anrufdauer.gesparteStunden.forEach(stundenBox => {
            stundenBox.textContent = this.formatNumber(gesparteStunden1) + 'h';
        });
        this.columns.anrufdauer.stundenlohn.textContent = this.values.stundenlohn + '€';
        let monatlicheEinsparung1 = (Math.round((gesparteStunden1 * this.values.stundenlohn) * 100) / 100).toFixed(2);
        this.columns.anrufdauer.monatlicheEinsparung.textContent = this.formatNumber(monatlicheEinsparung1) + '€';
        this.columns.anrufdauer.monateImJahr.textContent = this.values.monateImJahr;
        let totalErsparnis1 = Math.round(monatlicheEinsparung1 * this.values.monateImJahr);
        this.columns.anrufdauer.totalErsparnis.forEach(totalBox => {
            totalBox.textContent = this.formatNumber(totalErsparnis1) + '€';
        });

        // Agentenauslastung
        this.columns.agentenauslastung.anrufeProJahr.textContent = this.getInput('calls');
        this.columns.agentenauslastung.erreichbarkeitsSteigerung.textContent = this.values.erreichbarkeitsSteigerung + '%';
        let mehrAnrufe = (Math.round((this.getInput('calls') / 100 * this.values.erreichbarkeitsSteigerung) * 100) / 100).toFixed(2);
        this.columns.agentenauslastung.dauerAnruf.textContent = this.formatNumber(this.values.anrufDauer);
        this.columns.agentenauslastung.mehrAnrufe.textContent = this.formatNumber(mehrAnrufe);
        let gesparteStunden2 = (Math.round((mehrAnrufe * this.values.anrufDauer / 60) * 100) / 100).toFixed(2);
        this.columns.agentenauslastung.gesparteStunden.textContent = this.formatNumber(gesparteStunden2) + 'h';
        this.columns.agentenauslastung.stundenlohn.textContent = this.values.stundenlohn + '€';
        let monatlicheEinsparung2 = (Math.round((gesparteStunden2 * this.values.stundenlohn) * 100) / 100).toFixed(2);
        this.columns.agentenauslastung.monatlicheEinsparung.textContent = this.formatNumber(monatlicheEinsparung2) + '€';
        this.columns.agentenauslastung.monateImJahr.textContent = this.values.monateImJahr;
        let totalErsparnis2 = Math.round(monatlicheEinsparung2 * this.values.monateImJahr);
        this.columns.agentenauslastung.totalErsparnis.forEach(totalBox => {
            totalBox.textContent = this.formatNumber(totalErsparnis2) + '€';
        });

        // Personalplanung
        this.columns.personalplanung.anzahlAgenten.forEach(agentenBox => {
            agentenBox.textContent = this.getInput('agents');
        });
        this.columns.personalplanung.effizienzgewinn.forEach(effizienzgewinnBox => {
            effizienzgewinnBox.textContent = this.values.effizienzgewinn + '%';
        });
        this.columns.personalplanung.kostenAgent.textContent = this.formatNumber(this.values.kostenAgent) + '€';
        let personalkostenJahr = this.getInput('agents') * this.values.kostenAgent;
        this.columns.personalplanung.personalkostenJahr.textContent = this.formatNumber(personalkostenJahr) + '€';
        let totalErsparnis3 = Math.round(personalkostenJahr / 100 * this.values.effizienzgewinn);
        this.columns.personalplanung.totalErsparnis.forEach(totalBox => {
            totalBox.textContent = this.formatNumber(totalErsparnis3) + '€';
        });

        // Total
        let totalBox = this.h3.querySelector('span');
        totalBox.textContent = this.formatNumber(totalErsparnis1 + totalErsparnis2 + totalErsparnis3) + '€';
    }

    formatNumber(x) {
        x = x.toString().replace('.', ',');
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    submitForm(e) {
        e.preventDefault();

        if (!this.isInputValid())
            return;
        
        // Scroll to result
        let result = document.getElementById('mehrwertrechner-result');
        $("html, body").animate({ scrollTop: $(result).offset().top - 150 }, 300);

        // Show loader
        this.loader.classList.remove('atomic-loader--hidden');

        // Adjust headlines
        this.h3.style.display = 'none';
        this.h4.textContent = 'Berechne Kostensenkungspotential...';

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
        columns[1].style.display = 'flex';

        // Calculate numbers
        this.calculate();

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
if (mehrwertrechner)
    new Mehrwertrechner(mehrwertrechner);

let savingCalculator = document.querySelector('.saving-calculation');

if (savingCalculator) {
    let toggleButtons = savingCalculator.querySelectorAll('.saving-calculation__toggle');
    toggleButtons.forEach(toggleButton => {
        toggleButton.addEventListener('click', e => {
            let col = toggleButton.closest('.saving-calculation__col');
            let details = col.querySelector('.saving-calculation__details');
            let content = col.querySelector('.saving-calculation__content');
            let calculation = col.querySelector('.saving-calculation__calculation');
            details.classList.toggle('saving-calculation__details--open');
            content.classList.toggle('saving-calculation__content--hidden');
            calculation.classList.toggle('saving-calculation__calculation--open');
            toggleButton.classList.toggle('saving-calculation__toggle--close');
            toggleButton.classList.toggle('saving-calculation__toggle--open');
            if (toggleButton.classList.contains('saving-calculation__toggle--close')) {
                toggleButton.textContent = 'Berechnung ausblenden';
            } else {
                toggleButton.textContent = 'Berechnung einblenden';
            }
        });
    });
}