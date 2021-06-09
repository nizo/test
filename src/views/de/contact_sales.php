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
                        <span buttonStep data-step="1">Schritt zurück</span>
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
                <button class="button button--wider tertiary black2 rounded" buttonStep data-step="2">Weiter</button>
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
                    <p>Unser Team beantwortet gerne alle Ihre vertrieblichen Fragen. Füllen Sie das Formular aus und wir setzen uns so schnell wie möglich mit Ihnen in Verbindung.</p>

                    <form action="#" method="POST" class="floating-form">
                        <div class="floating-form__row">
                            <div class="floating-form__col">
                                <div class="floating-form__field">
                                    <input type="text" name="name" placeholder=" " />
                                    <label>Ihr Name *</label>
                                </div>
                            </div>
                            <div class="floating-form__col">
                                <div class="floating-form__field">
                                    <input type="text" name="company" placeholder=" " />
                                    <label>Firmenname</label>
                                </div>
                            </div>
                        </div>
                        <div class="floating-form__row">
                            <div class="floating-form__col">
                                <div class="floating-form__select">
                                    <select name="contactperson" calloneSelect required>
                                        <option value="">Sie sind Ansprechpartner für *</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Finanzen">Finanzen</option>
                                        <option value="Support">Support</option>
                                        <option value="Technik">Technik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="floating-form__col">
                                <div class="floating-form__select">
                                    <select name="challenge" calloneSelect required>
                                        <option value="">Herausforderung Ihrer Firma *</option>
                                        <option value="Wachstum &amp; Skalierung">Wachstum &amp; Skalierung</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="floating-form__row">
                            <div class="floating-form__col">
                                <div class="floating-form__field">
                                    <input type="text" name="email" placeholder=" " />
                                    <label>Geschäftliche E-Mail *</label>
                                </div>
                            </div>
                            <div class="floating-form__col">
                                <div class="floating-form__field">
                                    <input type="text" name="phone" placeholder=" " />
                                    <label>Geschäftliche Telefonnummer *</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="floating-form__submit">An Vertrieb senden</button>
                    </form>

                    <div class="contactsales__option-footer">
                        <p>Ihre Anforderungen sind so individuell, dass sie nicht zum Standardformular passen? CallOne liebt die kniffligen Telekommunikationsprobleme. So erreichen Sie uns anders:</p>

                        <p>TODO: Telefon / Email</p>
                    </div>
                </div>
                <div class="contactsales__option-content" data-option="2">
                    <button class="button tertiary black rounded">Jetzt Termin buchen</button>
                </div>
            </div>

            <div class="contactsales__step contactsales__step--hidden" data-step="3">
                <h2>Wir sind noch nicht so weit &hellip;</h2>
                <p>Danke für die Anfrage, wir fühlen uns geschmeichelt. Wir lieben kleine Unternehmen, sie sind das Rückgrat unserer Branche. Doch leider haben wir noch keine adäquaten Lösungen für sie parat.</p>
                <p>Unsere Lösungen sind aktuell zu umfassend und zu teuer für Unternehmen unter 10 Mitarbeitenden. CallOne richtet sich an den Bedarf und die Herausforderungen mittelständischer Unternehmen.</p>
                <p>Einige Empfehlungen sehr guter Anbieter für kleine Unternehmen finden Sie hier:</p>
                <p>[BLOGPOST]</p>                    
                <p>Alles Gute für die Zukunft und viel Glück mit Ihrem neuen Telefonie-Partner.</p>
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
    let contactPerson = document.querySelector('.contactsales__steps-person');
    let stepsProgress = document.querySelector('.contactsales__steps-progress');
    let stepsProgressText = stepsProgress.querySelector('span:last-of-type');
    let buttonsStep = document.querySelectorAll('[buttonStep]');
    let steps = document.querySelectorAll('.contactsales__step');

    buttonsStep.forEach(buttonStep => {
        buttonStep.addEventListener('click', e => {
            let stepToDisplay = buttonStep.dataset.step;
            let workers = document.querySelector('#workers').value;
            if (stepToDisplay == 2 && workers < 25) {
                stepToDisplay = 3;
            }
            if (stepToDisplay != 1) {
                contactPerson.classList.add('contactsales__steps-person--hidden');
                stepsProgress.classList.add('contactsales__steps-progress--full');
                stepsProgressText.textContent = 'Schritt 2/2';
            } else {
                contactPerson.classList.remove('contactsales__steps-person--hidden');
                stepsProgress.classList.remove('contactsales__steps-progress--full');
                stepsProgressText.textContent = 'Schritt 1/2';
            }
            steps.forEach(step => {
                step.classList.add('contactsales__step--hidden');
                if (step.dataset.step == stepToDisplay) {
                    step.classList.remove('contactsales__step--hidden');
                }
            });
        });
    });

    // buttonNextStep.addEventListener('click', e => {
    //     e.preventDefault();
    //     stepsProgress.classList.add('contactsales__steps-progress--full');
    //     stepsProgressText.textContent = 'Schritt 2/2';
    //     contactPerson.classList.add('contactsales__steps-person--hidden');
    //     step1.classList.add('contactsales__step--hidden');
    //     step2.classList.remove('contactsales__step--hidden');
    // });
    // buttonPrevStep.addEventListener('click', e => {
    //     e.preventDefault();
    //     stepsProgress.classList.remove('contactsales__steps-progress--full');
    //     stepsProgressText.textContent = 'Schritt 1/2';
    //     contactPerson.classList.remove('contactsales__steps-person--hidden');
    //     step1.classList.remove('contactsales__step--hidden');
    //     step2.classList.add('contactsales__step--hidden');
    // });

    let optionButtons = document.querySelectorAll('.contactsales__option');
    let options = document.querySelectorAll('.contactsales__option-content');
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