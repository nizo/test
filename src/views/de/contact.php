<div class="contactpage">
    <div class="contactpage__header">
        <h1>Kontaktieren Sie uns</h1>
        <h2>Setzen Sie sich mit uns in Verbindung und lassen Sie uns wissen, wie wir helfen können. Wir melden uns so schnell wie möglich!</h2>
    </div>
    <div class="contactpage__content">
        <h2>Wie können wir Ihnen helfen?</h2>

        <a href="#" class="contactoption contactoption--highlight" data-openmodal="contact-sales">
            <div class="contactoption__header">
                <div class="contactoption__icon">
                    <?= pictureTag(
                        '/assets/images/icons_svg/contact-sales-black.svg',
                        'Wie können wir Ihnen helfen?',
                        70, 70, [], false
                    ); ?>
                </div>
                <div class="contactoption__text">
                    <strong>Anfrage zu Produkten & Lösungen</strong><br />
                    Ihre Anforderungen abstimmen, Termin vereinbaren
                </div>
                <div class="contactoption__action">
                    <?= pictureTag(
                        '/assets/images/icons_svg/forward-arrow-icon.svg',
                        'Weiter zur Kontaktaufnahme für Businesstelefonie-Lösungen',
                        33, 33, [], false
                    ); ?>
                </div>
            </div>
        </a>

		<input type="checkbox" class="contactoption__checkbox" id="contactoption1" />
        <div class="contactoption">
            <label for="contactoption1" class="contactoption__header">
                <span class="contactoption__icon">
                    <?= pictureTag(
                        '/assets/images/icons_svg/support-request-white.svg',
                        'Sie brauchen Support zur Call Center Software oder CLoud Telefonanlage',
                        70, 70, [
                            'class' => 'contactoption--closed'
                        ]
                    ); ?>
                    <?= pictureTag(
                        '/assets/images/icons_svg/support-request-black.svg',
                        'Sie brauchen Unterstützung für Ihre Call Center Software oder Cloud Telefonanlage?',
                        70, 70, [
                            'class' => 'contactoption--open'
                        ]
                    ); ?>
                </span>
                <span class="contactoption__text">
                    <strong>Support-Anfrage</strong><br />
                    Sie sind CallOne Kunde und benötigen Support
                </span>
                <span class="contactoption__action">
                    <?= pictureTag(
                        '/assets/images/icons_svg/dropdown-white.svg',
                        'aufklappen',
                        19, 11, [
                            'class' => 'contactoption--closed'
                        ]
                    ); ?>
                    <?= pictureTag(
                        '/assets/images/icons_svg/dropdown-up-grey.svg',
                        'aufklappen',
                        19, 11, [
                            'class' => 'contactoption--open'
                        ]
                    ); ?>
                </span>
			</label>
            <div class="contactoption__content">
                <p>
                    Passt Ihre Supportanfrage nicht ins Formular?<br />
                    Alternativ können Sie uns auch eine E-Mail an <a href="mailto:support@callone.de">support@callone.de</a> senden.
                </p>

                <div class="contactoption__form--success"><!-- Only display on success -->
                    <?= pictureTag(
                        '/assets/images/icons_svg/sent-out-black.svg',
                        'Kontaktaufnahme absenden',
                        96, 96
                    ); ?>
                    <h2>Super, wir sind kontaktiert!</h2>
                    <p>Ihre Supportanfrage hat uns erreicht und wir melden uns baldmöglichst bei Ihnen.</p>
                </div>
                <div class="contactoption__form--error"><!-- Only display on error -->
                    <h2>Etwas ist schiefgelaufen...</h2>
                    <p>Beim absenden des Formulars ist etwas schiefgelaufen, bitte versuchen Sie es erneut.</p>
                </div>

                <form class="floating-form contactoption__form" method="post">
                    <div class="floating-form__field">
                        <input type="text" name="name" placeholder=" " required />
                        <label>Ihr Name *</label>
                    </div>
					<div class="floating-form__field">
						<input type="email" name="email" placeholder=" " required />
						<label>Geschäftliche E-Mail *</label>
					</div>
                    <div class="floating-form__select">
                        <select name="issue" data-callone-select required>
                            <option value="">Thema Ihrer Kontaktanfrage *</option>
                            <option value="Allgemeine Frage">Allgemeine Frage</option>
                            <option value="Technisches Problem">Technisches Problem</option>
                            <option value="Informationen anfordern">Informationen anfordern</option>
                            <option value="Anderes Anliegen">Anderes Anliegen</option>
                        </select>
                    </div>
					<div class="floating-form__field">
						<textarea name="text" rows="5" placeholder=" " required></textarea>
						<label>Ihre Nachricht an uns *</label>
					</div>

                    <div class="floating-form__loader"></div>

                    <button type="submit" class="floating-form__submit floating-form__submit--fullwidth">An Support senden</button>
				</form>
            </div>
        </div>

    </div>

    <div class="contactpage__footer">
        <div>
            <h3>Anruf</h3>
            <p><a href="tel:+493092033500">030 920 33 500</a></p>
        </div>
        <div>
            <h3>E-Mail</h3>
            <p><a href="mailto:info@callone.de">info@callone.de</a></p>
        </div>
    </div>
</div>

<!-- Contact Form Script -->
<script>
    const formMethod = 'POST';
    const formAction = 'https://connect.callone.io/backend/contact.php';
    const form = document.querySelector('.contactoption__form');
    const formLoader = form.querySelector('.floating-form__loader');
    const formSubmit = form.querySelector('.floating-form__submit');
    const errorMsg = document.querySelector('.contactoption__form--error');
    const errorMsgHeadline = errorMsg.querySelector('h2');
    const errorMsgText = errorMsg.querySelector('p');
    const successMsg = document.querySelector('.contactoption__form--success');

    form.addEventListener('submit', e => {
        errorMsg.style.display = 'none'; // Hide error message when form is submitted
        e.preventDefault(); // Prevent the form from reloading/switching the page

        formLoader.classList.add('floating-form__loader--active');
        formSubmit.disabled = true;
        
        // Get inputs
        let inputs = new Object();
        inputs.type = 7;
        inputs.name = form.querySelector('input[name="name"]').value;
        inputs.email = form.querySelector('input[name="email"]').value;
        inputs.issue = form.querySelector('select[name="issue"]').value;
        inputs.text = form.querySelector('textarea[name="text"]').value;
        let urlEncodedData = "", urlEncodedDataPairs = [], name;
        for (name in inputs) {
            urlEncodedDataPairs.push(encodeURIComponent(name)+'='+encodeURIComponent(inputs[name]));
        }
        urlEncodedData = urlEncodedDataPairs.join('&');

        // AJAX Request
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState != XMLHttpRequest.DONE) {
                return;
            }
            formLoader.classList.remove('floating-form__loader--active');
            formSubmit.disabled = false;
            if (this.status == 200) {
                // Backend sent response, evaluate
                const response = JSON.parse(this.responseText);
                if (response.success) {
                    form.classList.add('contactoption__form--hide') // Hide form
                    successMsg.style.display = 'flex'; // Display success message
                } else {
                    errorMsgHeadline.textContent = 'Etwas ist schiefgelaufen...';
                    let missingInput = "";
                    switch (response.error) {
                        case "name":
                            missingInput = "Bitte geben Sie einen Namen an.";
                            break;
                        case "email":
                            missingInput = "Bitte geben Sie eine gültige E-Mail Adresse an.";
                            break;
                        case "issue":
                            missingInput = "Bitte wählen Sie das Thema Ihrer Kontaktanfrage aus.";
                            break;
                        case "text":
                            missingInput = "Bitte geben Sie eine Nachricht für uns ein.";
                            break;
                    }
                    errorMsgText.textContent = 'Beim absenden des Formulars ist etwas schiefgelaufen, bitte versuchen Sie es erneut. ' + missingInput; // Change error message to display
                    errorMsg.style.display = 'flex'; // Display error message
                }
            } else {
                // Backend not available
                errorMsgHeadline.textContent = 'Es tut uns leid...';
                errorMsgText.textContent = 'Der Server ist zurzeit leider nicht erreichbar. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.'; // Change error message to display
                errorMsg.style.display = 'flex'; // Display error message
            }
        };
        xhttp.open(formMethod, formAction);
        xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhttp.send(urlEncodedData);
    });
</script>