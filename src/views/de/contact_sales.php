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
                <div class="workers">
                    <input type="text" id="workers" /> Mitarbeiter<span> oder mehr&hellip;</span>
                </div>
                <button class="btn btn--secondary" buttonStep data-step="2">Weiter</button>
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
                    <p class="centered">Unser Team beantwortet gerne alle Ihre vertrieblichen Fragen. Füllen Sie das Formular aus und wir setzen uns so schnell wie möglich mit Ihnen in Verbindung.</p>

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
                                    <select name="contactperson" data-calloneSelect required>
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
                                    <select name="challenge" data-calloneSelect required>
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

                        <div>
                            <div>
                                <h3>Anruf</h3>
                                <p><a href="tel:+493092033500">+49 (0) 30 - 920 33 500</a></p>
                            </div>
                            <div>
                                <h3>E-Mail</h3>
                                <p><script>eval(unescape("%78%6f%64%6c%69%31%36%3d%5b%27%25%36%39%25%36%65%25%36%36%25%36%66%27%2c%5b%27%25%36%34%25%36%35%27%2c%27%25%36%33%25%36%31%25%36%63%25%36%63%25%36%66%25%36%65%25%36%35%27%5d%2e%72%65%76%65%72%73%65%28%29%2e%6a%6f%69%6e%28%27%2e%27%29%5d%2e%6a%6f%69%6e%28%27%40%27%29%3b%7a%6c%63%72%62%35%39%3d%27%69%6e%66%6f%40%63%61%6c%6c%6f%6e%65%2e%64%65%27%3b%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%7a%6c%63%72%62%35%39%2e%6c%69%6e%6b%28%27%6d%61%69%27%2b%27%6c%74%6f%3a%27%2b%78%6f%64%6c%69%31%36%29%29%3b"));</script></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contactsales__option-content" data-option="2">
                    <button class="btn btn--primary btn--centered" data-calendly>Jetzt Termin buchen</button>
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
        <p>Sie sind an unseren Lösungen interessiert und sind bereit mehr zu erfahren? Los geht’s! Es ist nie zu früh mit uns zu sprechen. Folgende Schritte erwarten Sie vom ersten Kontakt bis zum fällen Ihrer Entscheidung.</p>

        <div class="step-slider">
            <div class="step-slider__steps">
                <div class="step-slider__step step-slider__step--active">
                    <h2>Besprechung Ihrer Anforderungen</h2>
                    <p>Lassen Sie uns kurz über Ihre Anforderungen sprechen. Wir nehmen uns Zeit und beraten Sie ehrlich.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Demo Zugang</h2>
                    <p>Sie bekommen einen komplett funktionalen Demo-Zugang und wir zeigen Ihnen, was die Telefonanlage kann.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Analyse</h2>
                    <p>Wir machen kostenfrei eine Verkehrsmessung, analysieren Ihr System, Ihre Strukturen, Ihren Traffic.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Live-Session &amp; Lösungen</h2>
                    <p>Aus den Ergebnissen setzen wir Ihre Telefonanlage so auf, als wären Sie bereits Kunde bei uns. Das ist unser Investment in Sie.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Testen & Finetuning</h2>
                    <p>Sie testen und prüfen ohne Risiko oder Kosten, wir stehen Ihnen mit Antworten zur Seite. Dann entscheiden Sie, ob wir Sie überzeugen konnten.</p>
                </div>
            </div>
            <div class="step-slider__slider" data-left="Erste Kontaktaufnahme" data-right="Ihre Entscheidung">
                <div class="step-slider__handle"></div>
            </div>
            <div class="step-slider__hint">
                Hinweis: Ziehen Sie den Schieberegler über den Zeitstrahl um alle Schritte zu sehen.
            </div>
        </div>

        <a href="#" class="btn btn--primary btn--centered">Kontakt aufnehmen</a>
    </div>
</div>

<div class="contactsales contactsales--green">
    <div class="contactsales__wrapper contactsales__wrapper--narrow">
        <h1>Kundenmeinungen</h1>
    </div>
</div>


<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script>
    // Calendly Start
    let buttonCalendly = document.querySelector('[data-calendly]');
    buttonCalendly.addEventListener('click', e => {
        Calendly.initPopupWidget({
            url: 'https://calendly.com/max-callone?primary_color=86ed18'
        });
    });
    // Calendly End

    let contactPerson = document.querySelector('.contactsales__steps-person');
    let stepsProgress = document.querySelector('.contactsales__steps-progress');
    let stepsProgressText = stepsProgress.querySelector('span:last-of-type');
    let buttonsStep = document.querySelectorAll('[buttonStep]');
    let steps = document.querySelectorAll('.contactsales__step');

    // Display extra info if max organisation size is selected
    let rangeSlider = document.querySelector('[calloneRange]');
    rangeSlider.addEventListener('change', e => {
        let workersExtra = document.querySelector('.workers span');
        if (e.target.value == e.target.max) {
            workersExtra.style.display = 'inline';
        } else {
            workersExtra.style.display = 'none';
        }
    });

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