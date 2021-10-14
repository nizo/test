<?php
session_start();
$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="application" data-title="Bewerbung">
    <!-- Step: Bewerbungs Typ wählen -->
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-steptitle="Bewerbung">
        <h2 class="centered">Wie möchtest du dich auf diesen Job bewerben?</h2>

        <div class="radio-select">
            <div class="radio-select__item">
                <input type="radio" id="type1" name="type" value="quick" checked="checked" />
                <label for="type1" class="callone-modal__nextstep" data-next-step="2">
                    <img src="/assets/images/icons_svg/application-fast.svg" alt="" />
                    <h3>Schnellbewerbung</h3>
                    <p>via LinkedIn/Xing/Portfolio-Link</p>
                </label>
            </div>
            <div class="radio-select__item">
                <input type="radio" id="type2" name="type" value="normal" />
                <label for="type2" class="callone-modal__nextstep" data-next-step="4">
                    <img src="/assets/images/icons_svg/application-normal.svg" alt="" />
                    <h3>Klassische Bewerbung</h3>
                    <p>Bewerbungsdateien hochladen</p>
                </label>
            </div>
        </div>
    </div>

    <!-- Step: Schnellbewerbung Arbeit bisher -->
    <div class="callone-modal__step" data-step-id="2" data-step-indicator="1/1" data-prev-step="1" data-next-step="3" data-next-button-text="Bewerbung absenden" data-next-button-classes="btn--full-width,btn--arrow-right">
        <h2 class="centered">Was hast du bisher so gemacht?</h2>
        <p class="centered">Schick uns einen Link zu einem professionellen Profil über LinkedIn oder Xing oder einem aussagekräftigen Portfolio, sowie eine E-Mail Adresse um dich zu kontaktieren.</p>

        <form action="#" method="post" class="floating-form quick-application-form" data-step-callback="submitSchnellbewerbung">
            <div class="floating-form__error">
                <h2>Etwas ist schief gelaufen</h2>
                <p>Bitte versuchen Sie es erneut.</p>
            </div>
            <div class="floating-form__row">
                <div class="floating-form__col">
                    <div class="floating-form__field">
                        <input type="text" name="link" placeholder=" " required="required" />
                        <label>Link zu Profil oder Portfolio *</label>
                    </div>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__field">
                        <input type="text" name="mail" placeholder=" " required="required" />
                        <label>E-Mail *</label>
                    </div>
                </div>
            </div>
            <div class="floating-form__privacy-toggle">
                <input type="checkbox" id="privacy-quick" required="required" />
                <label for="privacy-quick">
                    Ich habe die <a href="/downloads/Informationen zur Erhebung personenbezogener Daten im Bewerbungsverfahren.pdf" target="_blank">Datenschutzbestimmungen</a> gelesen.
                </label>
            </div>

            <div class="floating-form__loader"></div>

            <input type="submit" id="submit-schnellbewerbung" hidden />
        </form>
    </div>

    <!-- Step: Bewerbung Fertig -->
    <div class="callone-modal__step" data-step-id="3" data-step-indicator="1/1" data-steptitle="Bestätigung" data-no-back="true">
        <h2 class="centered">Super, du hast dich beworben!</h2>
        <p class="centered">Vielen Dank! Deine Bewerbung hat uns erreicht und wir melden uns direkt bei dir, wenn wir dein professionelles Profil (LinkedIn/Xing/Portfolio) gesichtet haben und wissen, zu welchem Job es passen könnte.</p>
        <p class="centered">
            <img src="/assets/images/illus/customer-service-hero-illustration.svg" alt="" style="max-width: 50%;" />
        </p>
    </div>

    <!-- Step: Normale Bewerbung 1/3 -->
    <div class="callone-modal__step" data-step-id="4" data-next-step="5" data-prev-step="1" data-step-indicator="1/3" data-next-button-text="Weiter">
        <h2 class="centered">Wie heißt du und wie können wir dich kontaktieren?</h2>
        <p class="centered">Lass uns wissen, wer du bist, damit wir dich auch wiederfinden.</p>

        <form action="#" method="post" class="floating-form application-step-1" style="margin-top:30px;">
            <div class="floating-form__row">
                <div class="floating-form__col">
                    <div class="floating-form__field">
                        <input type="text" name="name" placeholder=" " required="required" />
                        <label>Vor- & Nachname *</label>
                    </div>
                    <div class="floating-form__field">
                        <input type="text" name="mail" placeholder=" " required="required" />
                        <label>E-Mail *</label>
                    </div>
                    <div class="floating-form__field">
                        <input type="text" name="phone" placeholder=" " />
                        <label>Telefonnummer</label>
                    </div>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__privacy-toggle">
                        <input type="checkbox" id="privacy2" required="required" />
                        <label for="privacy2">
                            Ich habe die <a href="/downloads/Informationen zur Erhebung personenbezogener Daten im Bewerbungsverfahren.pdf" target="_blank">Datenschutzbestimmungen</a> gelesen.
                        </label>
                    </div>
                </div>
            </div>

            <input type="submit" id="submit-bewerbung-1" hidden />
        </form>
    </div>
    
    <!-- Step: Normale Bewerbung 2/3 -->
    <div class="callone-modal__step" data-step-id="5" data-next-step="6" data-prev-step="4" data-step-indicator="2/3" data-next-button-text="Weiter">
        <h2 class="centered">Mach dich uns bekannt!</h2>
        <p class="centered">Lade Lebenslauf, Motivationsschreiben und weitere relevante Bewerbungsunterlagen als eine PDF-Datei hoch.</p>
        
        <form class="floating-form application-step-2">
            <div class="floating-form__error">
                <h2>Falsches Dateiformat</h2>
                <p>Bitte wählen Sie eine PDF-Datei aus.</p>
            </div>
            <div class="floating-form__upload">
                <input type="file" name="application-file" id="application-file" required="required" />
                <label for="application-file" data-title="Dokumente zur Bewerbung">
                    <span class="icon-application">PDF auf Computer suchen</span>
                </label>
            </div>

            <input type="submit" id="submit-bewerbung-2" hidden />
        </form>
    </div>

    <!-- Step: Normale Bewerbung 3/3 -->
    <div class="callone-modal__step" data-step-id="6" data-next-step="3" data-prev-step="5" data-step-indicator="3/3" data-next-button-text="Bewerbung absenden" data-next-button-classes="btn--full-width,btn--arrow-right">
        <h2 class="centered tag-above" data-tag="Bonus">Gib ruhig ein bisschen an, <span class="person-name">...</span>!</h2>

        <form action="#" method="post" class="floating-form application-step-3" data-step-callback="submitBewerbung">
            <div class="floating-form__error">
                <h2>Etwas ist schief gelaufen</h2>
                <p>Bitte versuchen Sie es erneut.</p>
            </div>
            <div class="floating-form__row">
                <div class="floating-form__col">
                    <p>
                        Wie würdest deine besonderen Stärken in 140 Zeichen beschreiben?<br />
                        <span style="opacity:0.5;">(Keine verpflichtende Aufgabe, aber könnte dir helfen, aus der Masse herauszustechen!)</span>
                    </p>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__field">
                        <textarea name="pitch" rows="5" placeholder=" "></textarea>
                        <label>Schreibe deinen Pitch: 0/140 Zeichen</label>
                    </div>
                </div>
            </div>

            <div class="floating-form__loader"></div>

            <input type="submit" id="submit-bewerbung" hidden />
        </form>
    </div>

    <!-- Scripts -->
    <script>
        const thisModal = document.getElementById('<?= $uniqueID; ?>');
        let modalData = {};
        if (thisModal.dataset.modaldata)
            modalData = JSON.parse(atob(thisModal.dataset.modaldata));
    
        window.submitSchnellbewerbung = function(e, cb) {
            console.log("Submit Quick Application");
            const quickForm = document.querySelector('.quick-application-form');
            const quickFormLoader = quickForm.querySelector('.floating-form__loader');
            const quickFormSubmit = quickForm.querySelector('input[type="submit"]');
            const quickFormSubmitLabel = thisModal.querySelector('label[for="submit-schnellbewerbung"]');
            const quickFormError = quickForm.querySelector('.floating-form__error');
            const quickFormErrorHeadline = quickFormError.querySelector('h2');
            const quickFormErrorText = quickFormError.querySelector('p');
            quickFormError.classList.remove('floating-form__error--active') // Display error message
    
            quickFormLoader.classList.add('floating-form__loader--active');
            quickFormSubmit.disabled = true;
            quickFormSubmitLabel.classList.add('floating-form__label--disabled');
    
            // Prepare form data
            let path = JSON.parse('<?= json_encode($_SESSION['userRoute']) ?>');
            var formFields = new FormData();
            formFields.set('type', 4);
            if (Array.isArray(path)) {
                for (var i = 0; i < path.length; i++) {
                    formFields.append('path[]', path[i]);
                }
            } else {
                formFields.append('path[]', 'Unbekannt');
            }
            if (modalData.job && modalData.job != '')
                formFields.set('issue', modalData.job);
            formFields.set('url', quickForm.querySelector('input[name="link"]').value);
            formFields.set('email', quickForm.querySelector('input[name="mail"]').value);
    
            // AJAX Request
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState != XMLHttpRequest.DONE)
                    return;
                quickFormLoader.classList.remove('floating-form__loader--active');
                quickFormSubmit.disabled = false;
                quickFormSubmitLabel.classList.remove('floating-form__label--disabled');
                if (this.status == 200) {
                    // Backend sent response, evaluate
                    const response = JSON.parse(this.responseText);
                    if (response.success) {
                        // Success
                        cb();
                    } else {
                        console.error(response);
                        quickFormErrorHeadline.textContent = 'Etwas ist schiefgelaufen...';
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
                        quickFormErrorText.textContent = 'Beim absenden des Formulars ist etwas schiefgelaufen, bitte versuchen Sie es erneut. ' + missingInput; // Change error message to display
                        quickFormError.classList.add('floating-form__error--active') // Display error message
                    }
                } else {
                    // Backend not available
                    console.error('Backend not available.');
                    quickFormErrorHeadline.textContent = 'Es tut uns leid...';
                    quickFormErrorText.textContent = 'Der Server ist zurzeit leider nicht erreichbar. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.'; // Change error message to display
                    quickFormError.classList.add('floating-form__error--active') // Display error message
                }
            };
            xhttp.open('POST', 'https://connect.callone.io/backend/contact.php');
            xhttp.send(formFields);
        }

        window.submitBewerbung = function(e, cb) {
            console.log("Submit Normal Application");
            const appForm1 = document.querySelector('.application-step-1');
            const appForm2 = document.querySelector('.application-step-2');
            const appForm3 = document.querySelector('.application-step-3');
            const appFormLoader = appForm3.querySelector('.floating-form__loader');
            const appFormSubmit = appForm3.querySelector('input[type="submit"]');
            const appFormSubmitLabel = thisModal.querySelector('label[for="submit-bewerbung"]');
            const appFormError = appForm3.querySelector('.floating-form__error');
            const appFormErrorHeadline = appFormError.querySelector('h2');
            const appFormErrorText = appFormError.querySelector('p');
            appFormError.classList.remove('floating-form__error--active') // Display error message
    
            appFormLoader.classList.add('floating-form__loader--active');
            appFormSubmit.disabled = true;
            appFormSubmitLabel.classList.add('floating-form__label--disabled');
    
            // Prepare form data
            let path = JSON.parse('<?= json_encode($_SESSION['userRoute']) ?>');
            var formFields = new FormData();
            formFields.set('type', 3);
            for (var i = 0; i < path.length; i++) {
                formFields.append('path[]', path[i]);
            }
            if (modalData.job && modalData.job != '')
                formFields.set('issue', modalData.job);
            formFields.set('name', appForm1.querySelector('input[name="name"]').value);
            formFields.set('email', appForm1.querySelector('input[name="mail"]').value);
            formFields.set('phonenumber', appForm1.querySelector('input[name="phone"]').value);
            formFields.set('text', appForm3.querySelector('textarea[name="pitch"]').value);
            formFields.set('file', appForm2.querySelector('input[name="application-file"]').files[0]);
    
            // AJAX Request
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState != XMLHttpRequest.DONE)
                    return;
                appFormLoader.classList.remove('floating-form__loader--active');
                appFormSubmit.disabled = false;
                appFormSubmitLabel.classList.remove('floating-form__label--disabled');
                if (this.status == 200) {
                    // Backend sent response, evaluate
                    const response = JSON.parse(this.responseText);
                    if (response.success) {
                        // Success
                        cb();
                    } else {
                        console.error(response);
                        appFormErrorHeadline.textContent = 'Etwas ist schiefgelaufen...';
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
                        appFormErrorText.textContent = 'Beim absenden des Formulars ist etwas schiefgelaufen, bitte versuchen Sie es erneut. ' + missingInput; // Change error message to display
                        appFormError.classList.add('floating-form__error--active') // Display error message
                    }
                } else {
                    // Backend not available
                    console.error('Backend not available.');
                    appFormErrorHeadline.textContent = 'Es tut uns leid...';
                    appFormErrorText.textContent = 'Der Server ist zurzeit leider nicht erreichbar. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.'; // Change error message to display
                    appFormError.classList.add('floating-form__error--active') // Display error message
                }
            };
            xhttp.open('POST', 'https://connect.callone.io/backend/contact.php');
            xhttp.send(formFields);
        }

        // Change name on step 3 depening on input of step 1
        let nameInput = document.querySelector('.application-step-1 input[name="name"]');
        let nameDisplay = document.querySelector('.person-name');
        nameInput.addEventListener('change', e => {
            nameDisplay.textContent = nameInput.value.split(" ")[0];
        });

        // Read selected file from file upload
        const fileInput = document.getElementById('application-file');
        const uploadBox = document.querySelector('.application-step-2 .floating-form__upload');
        let fileError = thisModal.querySelector('.application-step-2 .floating-form__error');
        fileInput.addEventListener('change', e => {
            fileError.classList.remove('floating-form__error--active');
            // Remove current file labels
            let currentFileLabels = uploadBox.querySelectorAll('.floating-form__file');
            currentFileLabels.forEach(x => x.remove());
            // Add new file label
            if (e.target.files.length === 0)
                return;
            let accepted = ['pdf'];
            let file = e.target.files[0];
            let extension = file.name.split('.').pop().toLowerCase();
            if (accepted.indexOf(extension) == -1) {
                // Display Error for file type
                fileError.classList.add('floating-form__error--active');
                return;
            }
            let fileLabel = document.createElement('div');
            fileLabel.classList.add('floating-form__file');
            let fileLabelCancel = document.createElement('span');
            fileLabelCancel.addEventListener('click', e => {
                fileInput.value = null;
                let event = new Event('change');
                fileInput.dispatchEvent(event);
            });
            let size = file.size / 1024;
            let sizeFlag = 'kb';
            if (size > 1024) {
                size = size / 1024;
                sizeFlag = 'mb';
            }
            size = Math.round(size * 100) / 100;
            fileLabel.textContent = file.name + ' ('+ size + sizeFlag + ')';
            fileLabel.appendChild(fileLabelCancel);
            uploadBox.appendChild(fileLabel);
        });

        // Toggle type first step
        let step1 = thisModal.querySelector('.callone-modal__step[data-step-id="1"]');
        let typeSelectors = document.getElementsByName('type');
        typeSelectors.forEach(t => {
            t.addEventListener('click', e => {
                if (t.checked) {
                    if (t.value == 'quick') {
                        step1.dataset.nextStep = 2;
                    } else if (t.value == 'normal') {
                        step1.dataset.nextStep = 4;
                    }
                    return;
                }
            });
        });
    </script>
</div>
