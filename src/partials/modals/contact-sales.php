<?php
session_start();
$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="contact-sales" data-title="Contact Sales">
    <div class="callone-modal__step" data-step-id="1" data-step-indicator="1/3">
        <div class="worker-select">
            <h2>Wie groß ist Ihre Organisation?</h2>
            
            <input type="range" min="1" max="200" step="1" value="1" data-callone-range="" data-output="#workers<?= $uniqueID; ?>" data-width="480" />
            
            <div class="workers">
                <input type="text" name="workers" id="workers<?= $uniqueID; ?>" /> Mitarbeiter<span> oder mehr…</span>
            </div>
            
            <button class="btn btn--secondary callone-modal__nextstep" data-next-step="3">Weiter</button>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="2" data-prev-step="1" data-step-indicator="2/3">
        <div class="worker-evaluation">
            <div class="radio-select">
                <div class="radio-select__item">
                    <input type="radio" id="topic1<?= $uniqueID; ?>" name="topic<?= $uniqueID; ?>" value="form" checked="checked" />
                    <label for="topic1<?= $uniqueID; ?>">
                        <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
                        <h3>Senden Sie uns eine Nachricht</h3>
                        <p>Kontaktformular nutzen</p>
                    </label>
                </div>
                <div class="radio-select__item">
                    <input type="radio" id="topic2<?= $uniqueID; ?>" name="topic<?= $uniqueID; ?>" value="calendar" />
                    <label for="topic2<?= $uniqueID; ?>">
                        <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
                        <h3>Buchen Sie direkt einen Termin</h3>
                        <p>Telefon- oder Videocall vereinbaren</p>
                    </label>
                </div>
            </div>

            <button class="btn btn--secondary btn--centered callone-modal__nextstep" data-next-step="4">Weiter</button>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="3" data-prev-step="1" data-steptitle="Vielen Dank für Ihre Anfrage">
        <h2 style="margin-bottom:20px">Schauen Sie doch hier mal nach...</h2>
        <p>Wir freuen uns über Ihr Interesse, doch leider finden wir heute noch nicht zusammen. Da sich die Ansprüche nach Firmengröße stark unterscheiden, wissen wir, dass unsere Lösung ihr Potenzial erst ab 10 Teammitgliedern voll entfalten. Dennoch möchten wir Ihnen gern helfen, einen passenden Partner zu finden. Hierzu haben wir eine Handvoll echt guter Empfehlungen für Sie bereitgestellt.</p>
        <a href="https://blog.hubspot.de/service/call-center-software" target="_blank" class="card-link">
            <span class="card-link__icons">
                <img src="/assets/images/logo/logo-icon-green.svg" alt="" />
                <img src="/assets/images/icons_svg/recommendations.svg" alt="" />
            </span>
            <h2 class="card-link__title">Anbieter für Flatrate-Businesstelefonie</h2>
            <span class="card-link__subtitle">Unsere Empfehlungsliste</span>
        </a>
    </div>

    <div class="callone-modal__step" data-step-id="4" data-prev-step="2" data-step-indicator="3/3" data-canceltext="Abbrechen">
        <div class="sales-contact-form">
            <h2>Fast geschafft!</h2>
            <p class="centered">Unser Team beantwortet gerne alle Ihre vertrieblichen Fragen: Entweder indem Sie das Formular ausfüllen und wir uns so schnell wie möglich mit Ihnen in Verbindung setzen, oder indem Sie uns direkt via Telefon oder Mail kontaktieren.</p>

            <form action="#" method="post" class="floating-form" data-step-callback="salesContactSubmit" data-next-step="6">
                <div class="floating-form__error">
                    <h2>Etwas ist schief gelaufen</h2>
                    <p>Bitte versuchen Sie es erneut.</p>
                </div>

                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="name" placeholder=" " required="required" />
                            <label>Ihr Name *</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="company" placeholder=" " required="required" />
                            <label>Firmenname *</label>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__select">
                            <select name="position" data-callone-select="" required="required">
                                <option value="">Sie sind Ansprechpartner für *</option>
                                <option value="IT">IT</option>
                                <option value="Kundenservice">Kundenservice</option>
                                <option value="Sales">Sales</option>
                                <option value="Geschäftsführung">Geschäftsführung</option>
                                <option value="Sonstiges">Sonstiges</option>
                            </select>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__select">
                            <select name="issue" data-callone-select="" required="required">
                                <option value="">Herausforderung Ihrer Firma *</option>
                                <option value="Wachstum &amp; Skalierung">Wachstum &amp; Skalierung</option>
                                <option value="Integration der Telefone in andere Systeme">Integration der Telefone in andere Systeme</option>
                                <option value="Kundensupport verbessern">Kundensupport verbessern</option>
                                <option value="Sales verbessern">Sales verbessern</option>
                                <option value="Umstieg auf IP-Telefonie">Umstieg auf IP-Telefonie</option>
                                <option value="Fehlende Telefonie-Features">Fehlende Telefonie-Features</option>
                                <option value="Business Intelligence">Business Intelligence</option>
                                <option value="Sonstiges">Sonstiges</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="phonenumber" placeholder=" " required="required" />
                            <label>Geschäftliche Telefonnummer *</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="email" name="email" placeholder=" " required="required" />
                            <label>Geschäftliche E-Mail *</label>
                        </div>
                    </div>
                </div>

                <div class="floating-form__loader"></div>

                <button type="submit" class="floating-form__submit btn btn--primary btn--full-width btn--arrow-right callone-modal__submit">Kontaktformular absenden</button>
            </form>

            <p class="centered">oder kontaktieren Sie uns direkt falls Ihre Anfrage nicht in das Formular passt</p>

            <div class="sales-contact-form__details">
                <div>
                    <p><img src="/assets/images/icons_svg/telephony-indicator.svg" alt="" /> <strong>Anruf:</strong> <a href="tel:+493092033500">+49 (0) 30 - 920 33 500</a></p>
                </div>
                <div>
                    <p><img src="/assets/images/icons_svg/mail-indicator.svg" alt="" /> <strong>E-Mail:</strong> <a href="mailto:info@callone.de">info@callone.de</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="callone-modal__step" data-step-id="5" data-step-noscroll="true" data-prev-step="2" data-step-indicator="3/3" data-steptitle="Termin wählen">
        <div class="sales-contact-calendar">
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/bendig" style="min-width:320px;height:1200px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async="async"></script>
            <!-- Calendly inline widget end -->
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="6" data-prev-step="4" data-steptitle="Bestätigung" data-canceltext="Schließen">
        <h2 class="centered">Super, wir sind kontaktiert!</h2>
        <p class="centered">Ihre Kontaktanfrage hat uns erreicht und wir melden uns baldmöglichst bei Ihnen. Folgende Schritte erwarten Sie vom ersten Kontakt bis zum fällen Ihrer Entscheidung:</p>

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
                    <h2>Testen &amp; Finetuning</h2>
                    <p>Sie testen und prüfen ohne Risiko oder Kosten, wir stehen Ihnen mit Antworten zur Seite. Dann entscheiden Sie, ob wir Sie überzeugen konnten.</p>
                </div>
            </div>
            <div class="step-slider__slider">
                <div class="step-slider__range">
                    <div class="step-slider__handle"></div>
                </div>
            </div>
            <div class="step-slider__hint">
                <div class="step-slider__hint-left">
                    Erste Kontaktaufnahme
                </div>
                <div class="step-slider__hint-center">
                    <strong>Hinweis:</strong> Ziehen Sie den Schieberegler über den Zeitstrahl um alle Schritte zu sehen.
                </div>
                <div class="step-slider__hint-right">
                    Ihre Entscheidung
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Sales Contact Form
        window.salesContactSubmit = function(e, cb) {
            const form = document.querySelector('.sales-contact-form form');
            const formLoader = form.querySelector('.floating-form__loader');
            const formError = form.querySelector('.floating-form__error');
            const formErrorHeadline = formError.querySelector('h2');
            const formErrorText = formError.querySelector('p');
            formError.classList.remove('floating-form__error--active') // Display error message

            formLoader.classList.add('floating-form__loader--active');

            // Prepare form data
            let path = JSON.parse('<?= json_encode($_SESSION['userRoute']) ?>');
            var formFields = new FormData();
            formFields.set('type', 2);
            for (var i = 0; i < path.length; i++) {
                formFields.append('path[]', path[i]);
            }
            formFields.set('employees', document.getElementById('workers').value);
            formFields.set('issue', form.querySelector('select[name="issue"]').value);
            formFields.set('name', form.querySelector('input[name="name"]').value);
            formFields.set('position', form.querySelector('select[name="position"]').value);
            formFields.set('company', form.querySelector('input[name="company"]').value);
            formFields.set('phonenumber', form.querySelector('input[name="phonenumber"]').value);
            formFields.set('email', form.querySelector('input[name="email"]').value);

            // AJAX Request
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState != XMLHttpRequest.DONE)
                    return;
                formLoader.classList.remove('floating-form__loader--active');
                if (this.status == 200) {
                    // Backend sent response, evaluate
                    const response = JSON.parse(this.responseText);
                    if (response.success) {
                        // Success
                        cb();
                    } else {
                        console.error(response);
                        formErrorHeadline.textContent = 'Etwas ist schiefgelaufen...';
                        let missingInput = "";
                        switch (response.error) {
                            case "issue":
                                missingInput = "Bitte wählen Sie eine Herausforderung aus.";
                                break;
                            case "name":
                                missingInput = "Bitte geben Sie Ihren Namen ein.";
                                break;
                            case "position":
                                missingInput = "Bitte teilen Sie uns mit von welcher Abteilung Sie der Ansprechpartner sind.";
                                break;
                            case "company":
                                missingInput = "Bitte geben Sie Ihre Firma an.";
                                break;
                            case "phonenumber":
                                missingInput = "Bitte geben Sie eine Telefonnummer an.";
                                break;
                            case "email":
                                missingInput = "Bitte geben Sie eine E-Mail Adresse an.";
                                break;
                        }
                        formErrorText.textContent = 'Beim absenden des Formulars ist etwas schiefgelaufen, bitte versuchen Sie es erneut. ' + missingInput; // Change error message to display
                        formError.classList.add('floating-form__error--active') // Display error message
                    }
                } else {
                    // Backend not available
                    console.error('Backend not available.');
                    formErrorHeadline.textContent = 'Es tut uns leid...';
                    formErrorText.textContent = 'Der Server ist zurzeit leider nicht erreichbar. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.'; // Change error message to display
                    formError.classList.add('floating-form__error--active') // Display error message
                }
            };
            xhttp.open('POST', 'https://connect.callone.io/backend/contact.php');
            xhttp.send(formFields);
        }
        
        // Steps Slider
        const stepSliders = document.querySelectorAll('.step-slider');
        stepSliders.forEach(s => {
            new stepSlider(s);
        });
        
        // Form Selects
        const selectBoxes = document.querySelectorAll('[data-callone-select]');
        selectBoxes.forEach(s => {
            new Select(s);
        });
        
        const thisModal = document.getElementById('<?= $uniqueID; ?>');

        // Range Slider
        let rangeSliders = thisModal.querySelectorAll('[data-callone-range]');
        rangeSliders.forEach(rangeSlider => {
            new Range(rangeSlider);
            
            rangeSlider.addEventListener('change', e => {
                let currentValue = e.target.value;
                let barrier = 10;
                let workersExtra = thisModal.querySelector('.workers span');
                let buttonNext = thisModal.querySelector('.worker-select .callone-modal__nextstep');
                
                // Check if max number is selected and display additional text
                if (currentValue == e.target.max) {
                    workersExtra.style.display = 'inline';
                } else {
                    workersExtra.style.display = 'none';
                }
                
                // Check if barrier is reached
                let workerSelectNext = thisModal.querySelector('.worker-select .callone-modal__nextstep');
                if (currentValue < barrier) {
                    workerSelectNext.dataset.nextStep = 3;
                } else {
                    workerSelectNext.dataset.nextStep = 2;
                }
            });
        });
        
        // Toggle Form or Calendar, depending on what has been selected on the previous step
        let workerEvaluationNext = thisModal.querySelector('.worker-evaluation .callone-modal__nextstep');
        let topicSelectors = document.getElementsByName('topic<?= $uniqueID; ?>');
        topicSelectors.forEach(t => {
            t.addEventListener('click', e => {
                if (t.checked) {
                    if (t.value == 'form') {
                        workerEvaluationNext.dataset.nextStep = 4;
                    } else if (t.value == 'calendar') {
                        workerEvaluationNext.dataset.nextStep = 5;
                    }
                    return;
                }
            });
        });
    </script>
</div>
