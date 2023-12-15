<?php
require_once('../../libs/session.inc.php');
require_once('../../libs/functions.inc.php');

$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="contact-sales" data-title="Contact Sales">
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-step-indicator="1/2" data-no-footer="true" data-canceltext="Abbrechen">
        <h3 class="centered mobile-left">Wie möchten Sie Kontakt aufnehmen?</h3>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--hidden-sm co-grid__col--4-sm"></div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="btn btn--tile callone-modal__nextstep trackedContactCallback" data-next-step="5">
                    <div class="btn--tile__ribbon">Sofort</div>
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
                    <p>Wir rufen Sie gerne sofort zurück</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--hidden-sm co-grid__col--4-sm"></div>
            
            <div class="co-grid__col co-grid__col--hidden-sm co-grid__col--2-sm"></div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="btn btn--tile callone-modal__nextstep trackedContactForm" data-next-step="2">
                    <div class="btn--tile__title">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-mail.svg',
                            'Sales kontaktieren',
                            32, 32, [
                                'style' => 'margin-bottom:0;max-width:32px;'
                            ]
                        ); ?>
                        <h3>Nachricht</h3>
                    </div>
                    <p>Ganz bequem per Kontaktformular</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <a class="btn btn--tile" href="https://www.callone.de/termin/support" target="_blank">
                    <div class="btn--tile__title">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-calendar.svg',
                            'Sales kontaktieren und Termin buchen',
                            32, 32, [
                                'style' => 'margin-bottom:0;max-width:32px;'
                            ]
                        ); ?>
                        <h3>Termin</h3>
                    </div>
                    <p>Telefon- oder Videocall ganz einfach festlegen</p>
                </a>
            </div>
            <div class="co-grid__col co-grid__col--hidden-sm co-grid__col--2-sm"></div>
        </div>
        
        <div class="co-grid co-grid--no-margin-bottom centered">
            <div class="co-grid__col co-grid__col--hidden-sm co-grid__col--2-sm"></div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/telephony-indicator.svg',
                        'Anruf',
                        16, 21, [
                            'style' => 'width:16px;margin-right:10px;vertical-align:middle'
                        ]
                    ); ?>
                    <strong>Anruf:</strong> <a href="tel:+493092033500" class="inline-link trackedContactSubmit">030 920 33 500</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/mail-indicator.svg',
                        'E-Mail',
                        16, 11, [
                            'style' => 'width:16px;margin-right:10px;vertical-align:middle'
                        ]
                    ); ?>
                    <strong>E-Mail:</strong> <a href="mailto:info@callone.de" class="inline-link trackedContactSubmit">info@callone.de</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--hidden-sm co-grid__col--2-sm"></div>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="2" data-prev-step="1" data-next-step="4" data-next-button-text="Kontaktformular absenden" data-next-button-classes="trackedContactSubmit,trackedContactFormSubmit" data-step-indicator="2/2" data-canceltext="Abbrechen" data-mouseflow-tag="Kontakt Formular">
    <div class="sales-contact-form price-popup-style">
        <h2>Wie können wir Sie erreichen?</h2>
        <form action='https://crm.zoho.eu/crm/WebToLeadForm' class="floating-form" name="WebToLeads8315000039787021" method='post' data-step-callback='salesContactSubmit' onsubmit="" accept-charset='UTF-8' id="WebToLeads8315000039787021">
            <input type='text' style='display:none;' name='xnQsjsdp' value='8ce4eeda3984c8835bbf0445626776076779ee41340f81395352e8ad330086c9'></input> 
            <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
            <input type='text' style='display:none;' name='xmIwtLD' value='7b404d3fe1671b574c04e3770679b5ce28bb1d5f817f6d7b0d8ad68a1fb0858afc950d17d2bc10777f108c8289961a5c'></input> 
            <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
            <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.callone.de&#x2f;' > </input>

            <div class="floating-form__row">
                <div class="floating-form__col">
                    <div class="floating-form__field floating-form__field--small">
                        <input type="text" name="First Name" id="First_Name" placeholder="" maxlength='40'> 
                        <label>Vorname</label>
                    </div>
                </div>
                <div class="floating-form__col ml-10">
                    <div class="floating-form__field floating-form__field--small">
                        <input type="text" name="Last Name" id="Last_Name" placeholder="" maxlength='80' required=""> 
                        <label>Nachname<span style='color:red;'>*</span></label>
                    </div>
                </div>
                <div class="floating-form__col ml-10">
                    <div class="floating-form__field floating-form__field--small">
                        <input type="email" name="Email" id="Email" placeholder="" maxlength='100' ftype='email' required="" autocomplete='false'> 
                        <label>E-Mail<span style='color:red;'>*</span></label>
                    </div>
                </div>
            </div>


            <div class="floating-form__row" style="--gutter:var(--gutter-xs)">
                <div class="floating-form__col">
                    <div class="floating-form__field floating-form__field--small">
                       <textarea id='LEADCF20' name='LEADCF20' style="--height:200px" cols="30" rows="7" placeholder="Mitteilung"></textarea>
                    </div>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__field floating-form__field--small">
                        <input type="text" name="Company" id="Company" placeholder=""> 
                        <label>Firmenname</label>
                    </div>
                    <div class="floating-form__field floating-form__field--small">
                        <input type="text" name="Phone" id="Phone" placeholder=""> 
                        <label>Geschäftliche Telefonnummer</label>
                    </div>
                    
       

                    <div class="floating-form__select floating-form__select--small siesind">
                        <select name="position" data-callone-select="" class="siesind">
                            <option value="">Sie sind Ansprechpartner für</option>
                            <option value="IT">IT</option>
                            <option value="Kundenservice">Kundenservice</option>
                            <option value="Sales">Sales</option>
                            <option value="Geschäftsführung">Geschäftsführung</option>
                            <option value="Sonstiges">Sonstiges</option>
                        </select>
                    </div>
                    <div class="floating-form__select floating-form__select--small herausforderung">
                        <select name="issue" data-callone-select="" class="herausforderung">
                            <option value="">Herausforderung Ihrer Firma</option>
                            <option value="Wachstum &amp; Skalierung">Wachstum & Skalierung</option>
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

			<select class="zcwf_col_fld_slt" id="Lead_Status" name="Lead Status" hidden>
				<option value="-None-">-None-</option>
				<option selected="" value="Neu">Neu</option>
				<option value="jetzt prüfen">jetzt prüfen</option>
				<option value="manuelle Verifizierung">manuelle Verifizierung</option>
				<option value="erfolgreich verifiziert">erfolgreich verifiziert</option>
				<option value="Wertloser Lead">Wertloser Lead</option>
			</select>
                
            <select name="LEADCF18"  id="LEADCF18" hidden>
                            <option value="-None-">-None-</option>
                            <option selected value="Interessent">Interessent</option>
                            <option value="Systempartner">Systempartner</option>
                            <option value="Dienstleister">Dienstleister</option>
                            <option value="sonstige&#x20;Leads">sonstige Leads</option>
                        </select>
    
                        <select name="LEADCF21" id="LEADCF21" hidden>
                            <option value="-None-">-None-</option>
                            <option value="inopla.de">inopla.de</option>
                            <option selected value="callone.de">callone.de</option>
                            <option value="comdesk.de">comdesk.de</option>
                        </select>

                        <select class='zcwf_col_fld_slt' id='Lead_Source' name='Lead Source' hidden  >
                            <option value='-None-'>-None-</option>
                            <option value='Anruf'>Anruf</option>
                            <option value='Kunden&#x20;werben&#x20;Kunden'>Kunden werben Kunden</option>
                            <option value='Demo_Teams_landing'>Demo_Teams_landing</option>
                            <option value='CCW&#x20;2023'>CCW 2023</option>
                            <option value='Kontaktformular'>Kontaktformular</option>
                            <option value='Demoformular'>Demoformular</option>
                            <option value='Demoformular&#x20;-&#x20;mailonly'>Demoformular - mailonly</option>
                            <option value='bestehender&#x20;Kunde'>bestehender Kunde</option>
                            <option value='Google&#x20;Adwords1'>Google Adwords1</option>
                            <option value='Twitter'>Twitter</option>
                            <option value='Ansagenformular'>Ansagenformular</option>
                            <option value='Callone'>Callone</option>
                            <option value='C1&#x20;-&#x20;Bestand'>C1 - Bestand</option>
                            <option value='E-Mail'>E-Mail</option>
                            <option value='tk-vergleich.com'>tk-vergleich.com</option>
                            <option value='C1&#x20;-&#x20;Calendly'>C1 - Calendly</option>
                            <option value='Comdesk&#x20;Systempartner'>Comdesk Systempartner</option>
                            <option value='tradingtwins.com'>tradingtwins.com</option>
                            <option value='C1&#x20;-&#x20;CCW'>C1 - CCW</option>
                            <option value='Google&#x20;AdWords'>Google AdWords</option>
                            <option value='C1&#x20;-&#x20;E-Mail'>C1 - E-Mail</option>
                            <option value='C1&#x20;-&#x20;Empfehlung'>C1 - Empfehlung</option>
                            <option value='C1&#x20;-&#x20;LinkedIn'>C1 - LinkedIn</option>
                            <option value='C1&#x20;-&#x20;Telefon'>C1 - Telefon</option>
                            <option selected value='C1&#x20;-&#x20;allgemeine&#x20;Anfrage&#x20;Webseite'>C1 - allgemeine Anfrage Webseite</option>
                            <option value='C1&#x20;-&#x20;Voicebot&#x20;Webseite'>C1 - Voicebot Webseite</option>
                            <option value='inopla.de&#x20;-&#x20;Terminbuchung&#x20;Beratung'>inopla.de - Terminbuchung Beratung</option>
                            <option value='inopla.de&#x20;-&#x20;Voicebot&#x20;Formular'>inopla.de - Voicebot Formular</option>
                        </select>
                  

            <input type="submit" id="sales-contact-form" class="zcwf_button" value="Senden" hidden="">
			<script id="wf_anal" src="https://crm.zohopublic.eu/crm/WebFormAnalyticsServeServlet?rid=9ea813744b276629fe5056fbef0ae0fa645e0c1e05f7d85d411989dba9190322498aca65fe4173d8a2f27764037dac64gid5ec8280ba08320654601ccb97a9f693adc51bf964f6e24c399fb0fe6b50ac4cdgid8d931def12750863fa7539707e895b3acf919a124339c7e781860df7f57fae85gid01e09ca1f16ffc55fc40e1e954d5dc525a883626b1dff059bbf49248ee634831&amp;tw=0e959afc05ea99ae576a8224cd4de491dd143acefcbedd3a1029b1805900d8a9"></script>
        </form>
    </div>
</div>
           
    
    <div class="callone-modal__step callone-modal__step--no-padding" data-step-id="3" data-no-footer="true" data-step-noscroll="true" data-prev-step="1" data-step-indicator="2/2" data-canceltext="Abbrechen" data-mouseflow-tag="Calendly">
        <div class="sales-contact-calendar">
            <!-- Bookings iframe begin -->
            <iframe src='https://outlook.office365.com/owa/calendar/support2meet@callone.de/bookings/' width='100%' height='500' scrolling='yes' style='border:0'></iframe>
            <!-- Bookings iframe end -->
        </div>

        <a href="#" class="trackedContactSubmit trackedContactCalendlySubmit" style="display:none"></a>
    </div>

    <div class="callone-modal__step" data-step-id="4" data-no-back="true" data-no-footer="true" data-steptitle="Bestätigung" data-canceltext="Schließen" data-mouseflow-tag="Abgeschlossen">
        <h2 class="centered">Super, wir sind kontaktiert!</h2>
        <p class="centered">Ihre Kontaktanfrage hat uns erreicht und wir melden uns baldmöglichst bei Ihnen. <br />So geht es jetzt weiter:</p>

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
                    <p>Gemeinsam entwickeln wir eine Strategie, denken Callflows, Routings und Technologie durch.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Konzept</h2>
                    <p>Wir setzen das erarbeitete Konzept um, so als wären Sie schon Kunde bei uns. Damit können Sie auf Herz und Nieren testen und optimieren.</p>
                </div>
                <div class="step-slider__step">
                    <h2>Finetuning & Start</h2>
                    <p>Alles roger? Dann gehen wir live, nachdem wir alle notwendigen Schritte für einen erfolgreichen Start gemeinsam durchlaufen haben.</p>
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
                    Erfolgreicher Start
                </div>
            </div>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="5" data-prev-step="1" data-next-step="6" data-next-button-text="Jetzt Rückruf anfordern" data-next-button-classes="trackedContactSubmit,trackedContactCallbackSubmit" data-step-indicator="2/2" data-canceltext="Abbrechen" data-mouseflow-tag="Rückruf">
        <div class="sales-callback-form price-popup-style">
            <h2>Sofort mit CallOne sprechen!</h2>

            <p class="centered">Lassen Sie sich direkt mit einem CallOne Mitarbeiter verbinden.</p>

            <form action="#" method="post" class="floating-form" data-step-callback="salesCallbackSubmit">
                <div class="floating-form__error">
                    <h2>Rückruf leider nicht möglich.</h2>
                    <p>Bitte geben Sie eine gültige Rufnummer aus Deutschland an und stellen Sie sicher, dass Sie den Rückruf während unserer Geschäftszeiten anfordern, diese sind: <strong>Mo - Fr von 9 Uhr bis 18 Uhr</strong>.</p>
                </div>

                <div class="floating-form__row floating-form__row--centered">
                    <div class="floating-form__col" style="--maxWidth:50%">
                        <div class="floating-form__field">
                            <input type="text" name="phonenumber" placeholder=" " required="required" />
                            <label>Ihre Rückrufnummer *</label>
                        </div>
                    </div>
                </div>

                <div class="floating-form__loader"></div>

                <input type="submit" id="sales-callback-form" hidden />
            </form>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="6" data-no-back="true" data-no-footer="true" data-steptitle="Ihr Telefon klingelt&hellip;" data-canceltext="Schließen" data-mouseflow-tag="Rückruf gestartet">
        <p class="centered">
            <?= pictureTag(
                '/assets/images/icons_svg/icon-callback.svg',
                'Von CallOne zurückgerufen werden',
                64, 64, [
                    'style' => 'margin-bottom:var(--gutter-xs);width:100%;max-width:64px;'
                ]
            ); ?>
        </p>
        <h2 class="centered">Ihr Telefon sollte jetzt klingeln!</h2>
        <p class="centered">Heben Sie ab und Sie werden direkt mit einem CallOne Mitarbeiter verbunden.<br />Vielen Dank für Ihr Interesse!</p>
    </div>
    
    <script>
        const thisModal = document.getElementById('<?= $uniqueID; ?>');

        // Sales Callback Form
        window.salesCallbackSubmit = function(e, cb) {
            const form = document.querySelector('.sales-callback-form form');
            const formLoader = form.querySelector('.floating-form__loader');
            const formSubmit = form.querySelector('input[type="submit"]');
            const formSubmitLabel = thisModal.querySelector('label[for="sales-callback-form"]');
            const formError = form.querySelector('.floating-form__error');
            const formErrorHeadline = formError.querySelector('h2');
            const formErrorText = formError.querySelector('p');
            formError.classList.remove('floating-form__error--active') // Hide error message

            const id = '0007257529d86f3e5318f08686b82236';
            
            // Prepare form data
            let formData = new FormData(form);
            formData.set('id', id);
            
            if (formData.get('phonenumber') == '')
                return;

            formLoader.classList.add('floating-form__loader--active');
            formSubmit.disabled = true;
            formSubmitLabel.classList.add('floating-form__label--disabled');

            const postUrl = 'https://connect.callone.io/backend/callback.php';
            fetch(postUrl, {
                method: 'POST',
                cache: 'no-cache',
                body: formData
            })
            .then(response => {
                return response.json();
            })
            .then(data => {
                formLoader.classList.remove('floating-form__loader--active');
                formSubmit.disabled = false;
                formSubmitLabel.classList.remove('floating-form__label--disabled');
                if (data.error) {
                    console.log('Callback error');
                    console.error(data.error);
                    formError.classList.add('floating-form__error--active') // Display error message
                } else {
                    // Success
                    cb();
                }
            })
            .catch(response => {
                console.log('Callback error');
                console.error(response);
                formError.classList.add('floating-form__error--active') // Display error message
                formLoader.classList.remove('floating-form__loader--active');
                formSubmit.disabled = false;
                formSubmitLabel.classList.remove('floating-form__label--disabled');
            });
        }

        // Sales Contact Form
        window.salesContactSubmit = function(e, cb) {

            const form = document.querySelector('.sales-contact-form form');
            const formLoader = form.querySelector('.floating-form__loader');
            const formSubmit = form.querySelector('input[type="submit"]');
            

            function validateEmail8315000039787021() {
                var form = document.forms['WebToLeads8315000039787021'];
                var emailFld = form.querySelectorAll('[ftype=email]');
                var i;
                for (i = 0; i < emailFld.length; i++) {
                    var emailVal = emailFld[i].value;
                    if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
                        var atpos = emailVal.indexOf('@');
                        var dotpos = emailVal.lastIndexOf('.');
                        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                            alert('Bitte geben Sie eine gültige E-Mail-Adresse ein. ');
                            emailFld[i].focus();
                            return false;
                        }
                    }
                }
                return true;
            }

                var mndFields = new Array('Last Name', 'Email');
                var fldLangVal = new Array('Nachname', 'E\x2DMail');
                for (var i = 0; i < mndFields.length; i++) {
                    var fieldObj = document.forms['WebToLeads8315000039787021'][mndFields[i]];
                    if (fieldObj) {
                        if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                            if (fieldObj.type == 'file') {
                                alert('Bitte wählen Sie eine Datei zum Hochladen.'); 
                                fieldObj.focus(); 
                                return false;
                            } 
                            alert(fldLangVal[i] + ' darf nicht leer sein.'); 
                            fieldObj.focus();
                            return false;
                        } else if (fieldObj.nodeName == 'SELECT') {
                            if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                alert(fldLangVal[i] + ' darf nicht leer sein.'); 
                                fieldObj.focus();
                                return false;
                            }
                        } else if (fieldObj.type == 'checkbox') {
                            if (fieldObj.checked == false) {
                                alert('Please accept ' + fldLangVal[i]);
                                fieldObj.focus();
                                return false;
                            }
                        }
                        try {
                            if (fieldObj.name == 'Last Name') {
                                name = fieldObj.value;
                            }
                        } catch (e) {}
                    }
                }
                if (!validateEmail8315000039787021()) {
                    return false;
                }

                var formData = new FormData(document.getElementById('WebToLeads8315000039787021'));

                var siesindParent = document.querySelector('.siesind .callone-select__selected');
                if (siesindParent && siesindParent.textContent.trim() !== "") {
                    var siesindSpanText = siesindParent.querySelector('span').textContent;
                    var currentLeadText = formData.get('LEADCF20');
                    formData.set('LEADCF20', currentLeadText + ' \n\nPosition: ' + siesindSpanText);
                }
                else {
                    var currentLeadText = formData.get('LEADCF20');
                    formData.set('LEADCF20', currentLeadText + ' \n\nPosition: keine Angabe');
                }

                var herausforderungParent = document.querySelector('.herausforderung .callone-select__selected');
                if (herausforderungParent && herausforderungParent.textContent.trim() !== "") {
                    var herausforderungSpanText = herausforderungParent.querySelector('span').textContent;
                    var currentLeadText = formData.get('LEADCF20');
                    formData.set('LEADCF20', currentLeadText + ' \nThematik: ' + herausforderungSpanText);
                }
                else {
                    var currentLeadText = formData.get('LEADCF20');
                    formData.set('LEADCF20', currentLeadText + ' \nThematik: keine Angabe');
                }


                // Send the form data using fetch()
                fetch('https://crm.zoho.eu/crm/WebToLeadForm', {
                    method: 'POST',
                    body: formData
                })
                .then(data => {
                    if (data.status === 200) {

                        window._mfq = window._mfq || [];
                        window._mfq.push(['tag', 'Sales Contacted']);
                        cb();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

                return true;


            
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
