<div class="contactsales">
    <div class="contactsales__wrapper">
        <h1>Wir sind da, um zu helfen!</h1>

        <div class="contactsales__steps">
            <div class="contactsales__steps-header">
                <div class="contactsales__steps-person">
                    <img src="/assets/images/photos/bjoern.svg" alt="" />
                    <div>
                        <strong>Björn Bendig</strong><br />
                        Geschäftsführer von CallOne
                    </div>
                </div>
                <div class="contactsales__steps-progress">
                    <div>
                        <span prevStep>Schritt zurück</span>
                        <span>Schritt 1/2</span>
                    </div>
                </div>
            </div>

            <div class="contactsales__step" data-step="1">
                <h2>Wie groß ist Ihre Organisation?</h2>
                <input type="range" min="1" max="200" step="1" value="25" calloneRange data-output="#workers" data-width="480" />
                <div>
                    <input type="text" id="workers" /> Mitarbeiter
                </div>
                <button class="button button--wider tertiary black2 rounded" nextStep>Weiter</button>
            </div>

            <div class="contactsales__step contactsales__step--hidden" data-step="2">
                <h2>Wie möchten Sie mit uns in Kontakt treten?</h2>
                <div class="contactsales__options">
                    <div class="contactsales__option" data-option="1">
                        <img src="/assets/images/icons_svg/contact-sales-black.svg" alt="" />
                        <h3>Vertrieb kontaktieren</h3>
                        <p>Über Kontaktformular</p>
                    </div>
                    <div class="contactsales__option contactsales__option--active" data-option="2">
                        <img src="/assets/images/icons_svg/callback-black.svg" alt="" />
                        <h3>15 min Telefonbesprechung</h3>
                        <p>Über Calendly Terminbuchung</p>
                    </div>
                </div>

                <div class="contactsales__option-content contactsales__option-content--hidden" data-option="1">
                    [CONTACTFORM]
                </div>
                <div class="contactsales__option-content" data-option="2">
                    <button class="button tertiary black rounded">Jetzt Termin buchen</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contactsales contactsales--black">
    <div class="contactsales__wrapper contactsales__wrapper--wide">
        <h1>Fünf Schritte für Neukunden</h1>
    </div>
</div>

<div class="contactsales contactsales--green">
    <div class="contactsales__wrapper contactsales__wrapper--narrow">
        <h1>Kundenmeinungen</h1>
    </div>
</div>

<script>
let buttonNextStep = document.querySelector('[nextStep]');
let buttonPrevStep = document.querySelector('[prevStep]');
let contactPerson = document.querySelector('.contactsales__steps-person');
let stepsProgress = document.querySelector('.contactsales__steps-progress');
let stepsProgressText = stepsProgress.querySelector('span:last-of-type');
let step1 = document.querySelector('.contactsales__step[data-step="1"]');
let step2 = document.querySelector('.contactsales__step[data-step="2"]');
let optionButtons = document.querySelectorAll('.contactsales__option');
let options = document.querySelectorAll('.contactsales__option-content');
buttonNextStep.addEventListener('click', e => {
    e.preventDefault();
    stepsProgress.classList.add('contactsales__steps-progress--full');
    stepsProgressText.textContent = 'Schritt 2/2';
    contactPerson.classList.add('contactsales__steps-person--hidden');
    step1.classList.add('contactsales__step--hidden');
    step2.classList.remove('contactsales__step--hidden');
});
buttonPrevStep.addEventListener('click', e => {
    e.preventDefault();
    stepsProgress.classList.remove('contactsales__steps-progress--full');
    stepsProgressText.textContent = 'Schritt 1/2';
    contactPerson.classList.remove('contactsales__steps-person--hidden');
    step1.classList.remove('contactsales__step--hidden');
    step2.classList.add('contactsales__step--hidden');
});
optionButtons.forEach(button => {
    button.addEventListener('click', e => {
        optionButtons.forEach(button => {
            button.classList.remove('contactsales__option--active');
        });
        options.forEach(option => {
            option.classList.add('contactsales__option-content--hidden');
            if (button.dataset.option == option.dataset.option) {
                option.classList.remove('contactsales__option-content--hidden');
            }
        });
        button.classList.add('contactsales__option--active');
    });
});
</script>