<?php
require_once('../../libs/session.inc.php');
require_once('../../libs/functions.inc.php');
?>

<div class="callone-modal callone-modal--cookiebanner" data-modal="cookie-settings" data-title="Cookie-Einstellungen" data-back-button-label=" " data-no-cancel="true" data-no-tracking="true">
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-no-header="true" data-next-button-text="Einstellungen Akzeptieren" data-steptitle="Wir verwenden Cookies">
        <h3 class="centered">Darf&rsquo;s ein <span class="color-green">Cookie</span> sein?</h3>
        <p class="subtext" style="margin-top:var(--gutter-m);text-align:justify">
            Wir setzen auf unserer Website Cookies ein. Einige von ihnen sind essentiell, während andere uns helfen unser Onlineangebot zu verbessern und wirtschaftlich zu betreiben. Sie können dies akzeptieren oder per Klick auf die Schaltfläche "<a href="#" class="cookie-deny-button">Nur essenzielle Cookies akzeptieren</a>" ablehnen sowie diese Einstellungen jederzeit aufrufen und Cookies auch nachträglich jederzeit abwählen (z.B. im Fußbereich unserer Website). Nähere Hinweise erhalten Sie in unserer <a href="/datenschutz" class="cookie-link">Datenschutzerklärung</a>. Einstellungen <a href="#" class="callone-modal__nextstep cookie-settings-button">individuell anpassen</a>.
        </p>

        <form action="#" method="post" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true" style="display:none">
            <input type="submit" id="submit-cookie-settings-1" hidden />
        </form>
    </div>

    <div class="callone-modal__step" data-step-id="2" data-next-step="3" data-prev-step="1" data-steptitle="Individuell anpassen" data-next-button-text="Einstellungen Akzeptieren">
        <p class="subtext">Hier finden Sie eine Übersicht über alle verwendeten Cookies. Sie können Ihre Zustimmung zu ganzen Kategorien geben oder sich weitere Informationen anzeigen lassen und so nur bestimmte Cookies auswählen. <a href="#" class="cookie-link callone-modal__nextstep">Mehr Informationen</a>.</p>
        <br />
        <form action="#" method="post" class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-sm co-grid__col--vcentered">
                <p class="subtext">
                    <strong>Essenziell:</strong><br />
                    Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich.
                </p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm co-grid__col--vcentered">
                <div class="floating-form__checkbox floating-form__checkbox--disabled">
                    <input type="checkbox" class="cookie-toggle" id="essential-cookie" disabled>
                    <label for="essential-cookie">Essenziell</label>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-sm co-grid__col--vcentered">
                <p class="subtext">
                    <strong>Marketing:</strong><br />
                    Marketing Cookies helfen uns beim Auswerten von marketingrelevanten Daten.
                </p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm co-grid__col--vcentered">
                <div class="floating-form__checkbox">
                    <input type="checkbox" class="cookie-toggle" id="marketing-cookie">
                    <label for="marketing-cookie">Marketing</label>
                </div>
            </div>

            <input type="submit" id="submit-cookie-settings-2" hidden />
        </form>
    </div>

    <div class="callone-modal__step" data-step-id="3" data-next-step="3" data-prev-step="2" data-steptitle="Cookie-Informationen" data-next-button-text="Einstellungen Akzeptieren">
        <h3>Essentielle Cookies</h3>
        <p class="subtext">Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich.</p>

        <table class="cookie-info">
            <tr><th>Name</th><td>Session Cookie</td></tr>
            <tr><th>Anbieter</th><td>CallOne GmbH</td></tr>
            <tr><th>Zweck</th><td>Cookie von PHP (Programmiersprache), PHP Daten-Identifikator. Enthält nur einen Verweis auf die aktuelle Sitzung. Im Browser des Nutzers werden keine Informationen gespeichert und dieses Cookie kann nur von der aktuellen Website genutzt werden.</td></tr>
            <tr><th>Cookie-Name</th><td>PHPSESSID</td></tr>
            <tr><th>Laufzeit</th><td>Sitzung</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>Cookie Einstellungen</td></tr>
            <tr><th>Anbieter</th><td>CallOne GmbH</td></tr>
            <tr><th>Zweck</th><td>Speichern der Cookie-Einstellungen.</td></tr>
            <tr><th>Cookie-Name</th><td>cookiebanner-accepted</td></tr>
            <tr><th>Laufzeit</th><td>1 Jahr</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>Cookie ModalOnExit</td></tr>
            <tr><th>Anbieter</th><td>CallOne GmbH</td></tr>
            <tr><th>Zweck</th><td>Stellt sicher, dass das Anzeigen eines Modals beim verlassen der Seite nur einmal erfolgt, um den Nutzer nicht zu belästigen.</td></tr>
            <tr><th>Cookie-Name</th><td>eM</td></tr>
            <tr><th>Laufzeit</th><td>14 Tage</td></tr>
        </table>

        <h3>Marketing Cookies</h3>
        <p class="subtext">Marketing Cookies helfen uns beim Auswerten von marketingrelevanten Daten.</p>

        <table class="cookie-info">
            <tr><th>Name</th><td>Google Analytics</td></tr>
            <tr><th>Anbieter</th><td>Google LLC</td></tr>
            <tr><th>Zweck</th><td>Cookie von Google für Website-Analysen. Erzeugt statistische Daten darüber, wie der Besucher die Website nutzt.</td></tr>
            <tr><th>Cookie-Name</th><td>_ga, _gat, _gid</td></tr>
            <tr><th>Laufzeit</th><td>1 Jahr</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>LinkedIn</td></tr>
            <tr><th>Anbieter</th><td>LinkedIn</td></tr>
            <tr><th>Zweck</th><td>Onlinemarketing, Tracking, Targeting, Messung von Konversionen.</td></tr>
            <tr><th>Cookie-Name</th><td>bcookie, UserMatchHistory, lang, lidc</td></tr>
            <tr><th>Laufzeit</th><td>Session / 1 Jahr</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>Facebook Cookie</td></tr>
            <tr><th>Anbieter</th><td>Facebook Ireland Limited</td></tr>
            <tr><th>Zweck</th><td>Cookie von Facebook, das für Website-Analysen, Ad-Targeting und Anzeigenmessung verwendet wird.</td></tr>
            <tr><th>Cookie-Name</th><td>fr</td></tr>
            <tr><th>Laufzeit</th><td>1 Jahr</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>Mouseflow Cookie</td></tr>
            <tr><th>Anbieter</th><td>Mouseflow ApS</td></tr>
            <tr><th>Zweck</th><td>Dieses Cookie stellt fest, ob ein Nutzer ein neuer Besucher oder ein wiederkehrender Besucher ist. Dies geschieht einfach per ja/nein-Schalter. Keine weiteren User-Informationen werden gespeichert.</td></tr>
            <tr><th>Cookie-Name</th><td>mf_user</td></tr>
            <tr><th>Laufzeit</th><td>90 Tage</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>Mouseflow Cookie</td></tr>
            <tr><th>Anbieter</th><td>Mouseflow ApS</td></tr>
            <tr><th>Zweck</th><td>Dieses Cookie identifiziert eine Browser-Session, während sie aktiv ist.</td></tr>
            <tr><th>Cookie-Name</th><td>mf_[session]</td></tr>
            <tr><th>Laufzeit</th><td>Session</td></tr>
        </table>
        <table class="cookie-info">
            <tr><th>Name</th><td>Cookie Support</td></tr>
            <tr><th>Anbieter</th><td>.doubleclick.net</td></tr>
            <tr><th>Zweck</th><td>Verwendet, um zu überprüfen, ob der Browser des Benutzers Cookies unterstützt.</td></tr>
            <tr><th>Cookie-Name</th><td>test_cookie, IDE</td></tr>
            <tr><th>Laufzeit</th><td>15 Minuten</td></tr>
        </table>

        <form action="#" method="post" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true" style="display:none">
            <input type="submit" id="submit-cookie-settings-3" hidden />
        </form>
    </div>

    <script>
        let denyButton = document.querySelector('.cookie-deny-button');
        let toggles = {
            'essential': document.querySelector('.cookie-toggle#essential-cookie'),
            'marketing': document.querySelector('.cookie-toggle#marketing-cookie')
        };

        // Check tracking cookie and set toggles accordingly
        if (cookiesettings.exists('cookiesettings')) {
            Object.entries(toggles).forEach(([key, toggle]) => toggle.checked = false);

            // Essential
            toggles.essential.checked = true;

            // Marketing
            if (cookiesettings.hasConsent('marketing'))
                toggles.marketing.checked = true;
        } else {
            // Cookie is not yet set, check all cookie settings
            Object.entries(toggles).forEach(([key, toggle]) => toggle.checked = true);
        }

        // Handly deny button
        denyButton.addEventListener('click', e => {
            e.preventDefault();
            toggles.marketing.checked = false;
            cookiesettings.deleteAll();

            // Simulate click on accept settings to trigger save function
            document.querySelector('#submit-cookie-settings-1').click();
        });

        // Handle save cookie settings
        window.cookieSettingsSubmit = function(e, cb) {
            // Reset cookie settings and delete current cookies
            cookiesettings.deleteAll();
            cookiesettings.settingsValue = 0;

            // Set cookie value
            Object.entries(toggles).forEach(([key, value]) => {
                if (value.checked)
                    cookiesettings.settingsValue += cookiesettings.flags[key];
            });
            
            // Save cookie settings
            cookiesettings.set('cookiesettings', cookiesettings.settingsValue, 365);

            // Load tracking if consent is given
            if (cookiesettings.hasConsent('marketing'))
                loadTracking();

            // Callback of modal
            cb();
        }
    </script>
</div>
