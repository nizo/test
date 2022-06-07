<?php
require_once('../../libs/session.inc.php');
require_once('../../libs/functions.inc.php');
?>

<div class="callone-modal callone-modal--cookiebanner" data-modal="cookie-settings" data-title="Cookie-Einstellungen" data-no-cancel="true">
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-no-header="true" data-next-button-text="Einstellungen Akzeptieren" data-steptitle="Wir verwenden Cookies">
        <h3 class="centered">Wir <s>essen gerne</s> verwenden Cookies!</h3>
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md co-grid__col--vcentered">
                <p class="subtext">
                    Wir setzen auf unserer Website Cookies ein. Einige von ihnen sind essentiell (z.B. für den Warenkorb), während andere uns helfen unser Onlineangebot zu verbessern und wirtschaftlich zu betreiben. Sie können dies akzeptieren oder per Klick auf die Schaltfläche "Nur essenzielle Cookies akzeptieren" ablehnen sowie diese Einstellungen jederzeit aufrufen und Cookies auch nachträglich jederzeit abwählen (z.B. im Fußbereich unserer Website). Nähere Hinweise erhalten Sie in unserer Datenschutzerklärung. 
                </p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--vcentered subtext">
                <p><strong>Aktuelle Einstellungen</strong></p>
                <div class="cookie-indicator" data-cookie="essential">Essenziell</div>
                <div class="cookie-indicator" data-cookie="marketing">Marketing</div>
                <div class="cookie-indicator" data-cookie="external">Extern</div>
                <p class="subtext right"><a href="#" class="callone-modal__nextstep inline-link">Anpassen &rarr;</a></p>
            </div>

            <form action="#" method="post" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true">
                <input type="submit" id="submit-cookie-settings-1" hidden />
            </form>
        </div>
    </div>

    <div class="callone-modal__step" data-step-id="2" data-next-step="3" data-prev-step="1" data-steptitle="Cookie-Einstellungen anpassen" data-next-button-text="Einstellungen Akzeptieren">
        <p class="subtext">Hier finden Sie eine Übersicht über alle verwendeten Cookies. Sie können Ihre Zustimmung zu ganzen Kategorien geben oder sich weitere Informationen anzeigen lassen und so nur bestimmte Cookies auswählen.</p>

        <form action="#" method="post" class="co-grid" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true">
            <div class="co-grid__col co-grid__col--8-xs co-grid__col--vcentered">
                <p class="subtext">
                    <strong>Essenziell:</strong><br />
                    Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich. 
                    <a href="#" class="inline-link callone-modal__nextstep">Mehr Informationen &rarr;</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--4-xs co-grid__col--vcentered">
                <div class="floating-form__checkbox floating-form__checkbox--disabled">
                    <input type="checkbox" class="cookie-toggle" id="essential-cookie" disabled>
                    <label for="essential-cookie">Essenziell</label>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--8-xs co-grid__col--vcentered">
                <p class="subtext">
                    <strong>Marketing:</strong><br />
                    Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich. 
                    <a href="#" class="inline-link callone-modal__nextstep">Mehr Informationen &rarr;</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--4-xs co-grid__col--vcentered">
                <div class="floating-form__checkbox">
                    <input type="checkbox" class="cookie-toggle" id="marketing-cookie">
                    <label for="marketing-cookie">Marketing</label>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--8-xs co-grid__col--vcentered">
                <p class="subtext">
                    <strong>Extern:</strong><br />
                    Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich. 
                    <a href="#" class="inline-link callone-modal__nextstep">Mehr Informationen &rarr;</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--4-xs co-grid__col--vcentered">
                <div class="floating-form__checkbox">
                    <input type="checkbox" class="cookie-toggle" id="external-cookie">
                    <label for="external-cookie">Extern</label>
                </div>
            </div>

            <input type="submit" id="submit-cookie-settings-2" hidden />
        </form>
    </div>

    <div class="callone-modal__step" data-step-id="3" data-next-step="3" data-prev-step="2" data-steptitle="Cookie-Informationen" data-next-button-text="Einstellungen Akzeptieren">
        <h3>Essentielle Cookies</h3>

        <table style="border:1px solid black;text-align:left">
            <tr>
                <th>Name</th>
                <td>Cookiename</td>
            </tr>
            <tr>
                <th>Anbieter</th>
                <td>Cookieanbieter</td>
            </tr>
            <tr>
                <th>Zweck</th>
                <td>Cookiezweck</td>
            </tr>
            <tr>
                <th>Cookie-Name</th>
                <td>Cookiename</td>
            </tr>
            <tr>
                <th>Laufzeit</th>
                <td>Cookielaufzeit</td>
            </tr>
        </table>

        <form action="#" method="post" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true">
            <input type="submit" id="submit-cookie-settings-3" hidden />
        </form>
    </div>

    <script>
        // essentiell == 100
        // marketing >= 110
        // extern == 101 || == 111

        let indicators = {
            'essential': document.querySelector('.cookie-indicator[data-cookie="essential"]'),
            'marketing': document.querySelector('.cookie-indicator[data-cookie="marketing"]'),
            'external': document.querySelector('.cookie-indicator[data-cookie="external"]')
        };
        let toggles = {
            'essential': document.querySelector('.cookie-toggle#essential-cookie'),
            'marketing': document.querySelector('.cookie-toggle#marketing-cookie'),
            'external': document.querySelector('.cookie-toggle#external-cookie')
        };

        let trackingCookie = getCookie('cookiebanner-accepted');
        if (trackingCookie && trackingCookie != '') {
            Object.entries(indicators).forEach(([key, indicator]) => indicator.classList.remove('cookie-indicator--active'));
            Object.entries(toggles).forEach(([key, toggle]) => toggle.removeAttribute('checked'));

            // Essential
            indicators.essential.classList.add('cookie-indicator--active');
            toggles.essential.setAttribute('checked', true);

            // Marketing
            if (trackingCookie >= 110) {
                indicators.marketing.classList.add('cookie-indicator--active');
                toggles.marketing.setAttribute('checked', true);
            }

            // External
            if (trackingCookie == 101 || trackingCookie == 111) {
                indicators.external.classList.add('cookie-indicator--active');
                toggles.external.setAttribute('checked', true);
            }
        } else {
            Object.entries(indicators).forEach(([key, indicator]) => indicator.classList.add('cookie-indicator--active'));
            Object.entries(toggles).forEach(([key, toggle]) => toggle.setAttribute('checked', true));
        }

        window.cookieSettingsSubmit = function(e, cb) {
            console.log('Test');

            // Save cookie settings

            cb();
        }
    </script>
</div>
