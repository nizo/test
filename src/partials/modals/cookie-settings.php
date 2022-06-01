<?php
require_once('../../libs/session.inc.php');
require_once('../../libs/functions.inc.php');
?>

<div class="callone-modal" data-modal="cookie-settings" data-title="Cookie-Einstellungen" data-no-cancel="true">
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-no-header="true" data-next-button-text="Einstellungen Akzeptieren" data-steptitle="Wir verwenden Cookies">
        <h3 class="centered">Cookie-Einstellungen</h3>
        <br />
        <p class="subtext">
            Wir setzen auf unserer Website Cookies ein. Einige von ihnen sind essentiell (z.B. für den Warenkorb), während andere uns helfen unser Onlineangebot zu verbessern und wirtschaftlich zu betreiben. Sie können dies akzeptieren oder per Klick auf die Schaltfläche "Nur essenzielle Cookies akzeptieren" ablehnen sowie diese Einstellungen jederzeit aufrufen und Cookies auch nachträglich jederzeit abwählen (z.B. im Fußbereich unserer Website). Nähere Hinweise erhalten Sie in unserer Datenschutzerklärung. 
            <a href="#" class="callone-modal__nextstep inline-link">Cookie Informationen &rarr;</a>
        </p>

        <form action="#" method="post" class="floating-form" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true">
            <div class="floating-form__row">
                <div class="floating-form__col">
                    <div class="floating-form__checkbox floating-form__checkbox--disabled">
                        <input type="checkbox" id="a" checked disabled>
                        <label for="a">Essenziell</label>
                    </div>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__checkbox">
                        <input type="checkbox" id="b">
                        <label for="b">Marketing</label>
                    </div>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__checkbox">
                        <input type="checkbox" id="c">
                        <label for="c">Extern</label>
                    </div>
                </div>
            </div>

            <input type="submit" id="submit-cookie-settings" hidden />
        </form>
    </div>

    <div class="callone-modal__step" data-step-id="2" data-next-step="1" data-prev-step="1" data-steptitle="Cookie-Informationen" data-next-button-text="Einstellungen Akzeptieren">
        <p class="subtext">Hier finden Sie eine Übersicht über alle verwendeten Cookies. Sie können Ihre Zustimmung zu ganzen Kategorien geben oder sich weitere Informationen anzeigen lassen und so nur bestimmte Cookies auswählen.</p>

        <p>
            <strong>Essenziell:</strong><br />
            Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich.
        </p>

        <p>
            <strong>Marketing:</strong><br />
            Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich.
        </p>

        <p>
            <strong>Extern:</strong><br />
            Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich.
        </p>

        <form action="#" method="post" class="floating-form" data-step-callback="cookieSettingsSubmit" data-close-after-callback="true">
            <input type="submit" id="submit-cookie-settings2" hidden />
        </form>
    </div>

    <script>
        window.cookieSettingsSubmit = function(e, cb) {
            console.log('Test');
            cb();
        }
    </script>
</div>
