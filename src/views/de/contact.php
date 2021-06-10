<div class="contactpage">
    <div class="contactpage__header">
        <h1>Kontaktieren Sie uns</h1>
        <h2>Setzen Sie sich mit uns in Verbindung und lassen Sie uns wissen, wie wir helfen können. Wir melden uns so schnell wie möglich!</h2>
    </div>
    <div class="contactpage__content">
        <h1>Was ist Ihre Kontakt-Motivation?</h1>
        
        <a href="/testen" class="contactoption">
            <div class="contactoption__header">
                <div class="contactoption__icon">
                    <img src="/assets/images/icons_svg/contact-sales-white.svg" alt="" />
                </div>
                <div class="contactoption__text">
                    <strong>Vertrieb kontaktieren</strong><br />
                    Demo-Termin vereinbaren, Anforderungen besprechen
                </div>
                <div class="contactoption__action">
                    <img src="/assets/images/icons_svg/forward-arrow.svg" alt="" />
                </div>
            </div>
        </a>

		<input type="checkbox" class="contactoption__checkbox" id="contactoption1" />
        <div class="contactoption">
            <label for="contactoption1" class="contactoption__header">
                <span class="contactoption__icon">
                    <img src="/assets/images/icons_svg/support-request-white.svg" alt="" class="contactoption--closed" />
                    <img src="/assets/images/icons_svg/support-request-black.svg" alt="" class="contactoption--open" />
                </span>
                <span class="contactoption__text">
                    <strong>Support-Anfrage</strong><br />
                    Sie sind CallOne Kunde und benötigen Support
                </span>
                <span class="contactoption__action">
                    <img src="/assets/images/icons_svg/dropdown-white.svg" class="contactoption--closed" alt="" />
                    <img src="/assets/images/icons_svg/dropdown-up-grey.svg" class="contactoption--open" alt="" />
                </span>
			</label>
            <div class="contactoption__content">
                <p>
                    Passt Ihre Supportanfrage nicht ins Formular?<br />
                    Alternativ können Sie uns auch eine E-Mail an <a href="javascript:location='mailto:\u0073\u0075\u0070\u0070\u006f\u0072\u0074\u0040\u0063\u0061\u006c\u006c\u006f\u006e\u0065\u002e\u0064\u0065';void 0"><script>document.write('\u0073\u0075\u0070\u0070\u006f\u0072\u0074\u0040\u0063\u0061\u006c\u006c\u006f\u006e\u0065\u002e\u0064\u0065')</script></a> senden.
                </p>

                <div class="contactoption__form--success"><!-- Only display on success -->
                    <img src="/assets/images/icons_svg/sent-out-black.svg" alt="" />
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
                        <select name="issue" data-calloneSelect required>
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
                    <button type="submit" class="floating-form__submit floating-form__submit--fullwidth">An Support senden</button>
				</form>
            </div>
        </div>

    </div>

    <div class="contactpage__footer">
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

<!-- Contact Form Script -->
<script>
    const formMethod = 'POST';
    const formAction = 'https://connect.callone.io/backend/contact.php';
    const form = document.querySelector('.contactoption__form');
    const errorMsg = document.querySelector('.contactoption__form--error');
    const errorMsgHeadline = errorMsg.querySelector('h2');
    const errorMsgText = errorMsg.querySelector('p');
    const successMsg = document.querySelector('.contactoption__form--success');

    form.addEventListener('submit', e => {
        errorMsg.style.display = 'none'; // Hide error message when form is submitted
        e.preventDefault(); // Prevent the form from reloading/switching the page
        
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