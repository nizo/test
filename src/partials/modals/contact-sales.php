<?php
require_once('../../libs/session.inc.php');
require_once('../../libs/functions.inc.php');

$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="contact-sales" data-title="Contact Sales">
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-step-indicator="1/2" data-no-footer="true">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="btn btn--tile callone-modal__nextstep" data-next-step="2" style="--width:270px">
                    <div class="btn--tile__title">
                        <img src="/assets/images/icons_svg/icon-postbox.svg" alt="Sales kontaktieren" width="32" height="32" style="margin-bottom:0;max-width:32px;" />
                        <h3>Nachricht</h3>
                    </div>
                    <p>Nutzen Sie ganz bequem unser Kontaktformular</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="btn btn--tile callone-modal__nextstep" data-next-step="3" style="--width:270px">
                    <div class="btn--tile__title">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-callback.svg',
                            'Von CallOne zurückgerufen werden',
                            32, 32, [
                                'style' => 'margin-bottom:0;max-width:32px;'
                            ]
                        ); ?>
                        <h3>Rückruf</h3>
                    </div>
                    <p>Ganz einfach von uns zurück&shy;gerufen werden</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="btn btn--tile callone-modal__nextstep" data-next-step="3" style="--width:270px">
                    <div class="btn--tile__title">
                        <img src="/assets/images/icons_svg/icon-calendar.svg" alt="Sales kontaktieren und Termin buchen" width="32" height="32" style="margin-bottom:0;max-width:32px;" />
                        <h3>Termin</h3>
                    </div>
                    <p>Telefon- oder Videocall ganz einfach festlegen</p>
                </div>
            </div>
        </div>
        
        <div class="co-grid co-grid--no-margin-bottom centered">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
                <p class="centered"><br /><br /><img src="/assets/images/icons_svg/mail-indicator.svg" alt="E-Mail" width="16" height="11" style="width:16px;margin-right:10px;vertical-align:middle" /> <strong>E-Mail:</strong> <a href="mailto:info@callone.de" class="inline-link">info@callone.de</a></p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
                <p class="centered"><br /><br /><img src="/assets/images/icons_svg/telephony-indicator.svg" alt="Anruf" width="16" height="21" style="width:16px;margin-right:10px;vertical-align:middle" /> <strong>Anruf:</strong> <a href="tel:+493092033500" class="inline-link">030 920 33 500</a></p>
            </div>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="2" data-prev-step="1" data-next-step="4" data-next-button-text="Kontaktformular absenden" data-step-indicator="2/2" data-canceltext="Abbrechen" data-mouseflow-tag="Kontakt Formular">
        <div class="sales-contact-form">
            <h2>Fast geschafft!</h2>

            <form action="#" method="post" class="floating-form" data-step-callback="salesContactSubmit">
                <div class="floating-form__error">
                    <h2>Etwas ist schief gelaufen</h2>
                    <p>Bitte versuchen Sie es erneut.</p>
                </div>

                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__field floating-form__field--highlight">
                            <input type="text" name="name" placeholder=" " required="required" />
                            <label>Ihr Name *</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field floating-form__field--highlight">
                            <input type="email" name="email" placeholder=" " required="required" />
                            <label>Geschäftliche E-Mail *</label>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row">
                    <div class="floating-form__col subtext centered" style="opacity:.5">Optional können Sie uns gerne noch weitere Informationen mitteilen</div>
                </div>
                <div class="floating-form__row" style="--gutter:var(--gutter-xs)">
                    <div class="floating-form__col">
                        <div class="floating-form__field floating-form__field--small">
                            <input type="text" name="company" placeholder=" " />
                            <label>Firmenname</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field floating-form__field--small">
                            <input type="text" name="phonenumber" placeholder=" " />
                            <label>Geschäftliche Telefonnummer</label>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row" style="--gutter:var(--gutter-xs)">
                    <div class="floating-form__col">
                        <div class="floating-form__select floating-form__select--small">
                            <select name="position" data-callone-select="">
                                <option value="">Sie sind Ansprechpartner für</option>
                                <option value="IT">IT</option>
                                <option value="Kundenservice">Kundenservice</option>
                                <option value="Sales">Sales</option>
                                <option value="Geschäftsführung">Geschäftsführung</option>
                                <option value="Sonstiges">Sonstiges</option>
                            </select>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__select floating-form__select--small">
                            <select name="issue" data-callone-select="">
                                <option value="">Herausforderung Ihrer Firma</option>
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

                <div class="floating-form__loader"></div>

                <input type="submit" id="sales-contact-form" hidden />
            </form>
        </div>
    </div>
    
    <div class="callone-modal__step callone-modal__step--no-padding" data-step-id="3" data-no-footer="true" data-step-noscroll="true" data-prev-step="1" data-step-indicator="2/2" data-mouseflow-tag="Calendly">
        <div class="sales-contact-calendar">
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/bendig/15min?hide_gdpr_banner=1&hide_event_type_details=1" style="min-width:320px;height:1200px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async="async"></script>
            <!-- Calendly inline widget end -->
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="4" data-no-back="true" data-no-footer="true" data-steptitle="Bestätigung" data-canceltext="Schließen" data-mouseflow-tag="Abgeschlossen">
        <h2 class="centered">Super, wir sind kontaktiert!</h2>
        <p class="centered">Ihre Kontaktanfrage hat uns erreicht und wir melden uns baldmöglichst bei Ihnen. Folgende Schritte erwarten Sie vom ersten Kontakt bis zum fällen Ihrer Entscheidung:</p>

        <div class="step-slider">
            <div class="step-slider__steps">
                <div class="step-slider__step step-slider__step--active">
                    <h2>Besprechung Ihrer Anforderungen</h2>
                    <p>Wir verabreden uns für einen ersten Austausch und tauschen und zu Ihren Anforderungen aus.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Demo</h2>
                    <p>Wir skizzieren unseren Lösungsvorschlag für ihr Vorhaben und zeigen Ihnen diesen sehr praxisnah.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Strategie</h2>
                    <p>Gemeinsam entwickeln wir eine Strategie, denken Callflows, Routings und Technologie durch​.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Konzept</h2>
                    <p>Wir setzen das erarbeitete Konzept um, so als wären Sie schon Kunde bei uns. Damit können Sie auf Herz und Nieren testen und optimieren​.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Finetuning & Start</h2>
                    <p>Alles roger? Dann gehen wir live, nachdem wir alle notwendigen Schritte für einen erfolgreichen Start gemeinsam durchlaufen haben​.</p>
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
        const thisModal = document.getElementById('<?= $uniqueID; ?>');

        // Sales Contact Form
        window.salesContactSubmit = function(e, cb) {
            const form = document.querySelector('.sales-contact-form form');
            const formLoader = form.querySelector('.floating-form__loader');
            const formSubmit = form.querySelector('input[type="submit"]');
            const formSubmitLabel = thisModal.querySelector('label[for="sales-contact-form"]');
            const formError = form.querySelector('.floating-form__error');
            const formErrorHeadline = formError.querySelector('h2');
            const formErrorText = formError.querySelector('p');
            formError.classList.remove('floating-form__error--active') // Display error message

            formLoader.classList.add('floating-form__loader--active');
            formSubmit.disabled = true;
            formSubmitLabel.classList.add('floating-form__label--disabled');

            // Prepare form data
            let path = JSON.parse('<?= json_encode($_SESSION['userRoute']) ?>');
            var formFields = new FormData();
            formFields.set('type', 2);
            if (Array.isArray(path)) {
                for (var i = 0; i < path.length; i++) {
                    formFields.append('path[]', path[i]);
                }
            } else {
                formFields.append('path[]', 'Unbekannt');
            }
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
                formSubmit.disabled = false;
                formSubmitLabel.classList.remove('floating-form__label--disabled');
                if (this.status == 200) {
                    // Backend sent response, evaluate
                    const response = JSON.parse(this.responseText);
                    if (response.success) {
                        // Success
                        window._mfq = window._mfq || [];
                        window._mfq.push(['tag', 'Sales Contacted']);
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
    </script>
</div>
