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
                <input type="radio" id="topic1" name="topic" value="form" checked="checked" />
                <label for="topic1" class="callone-modal__nextstep" data-next-step="2">
                    <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
                    <h3>Schnellbewerbung</h3>
                    <p>via LinkedIn/Xing/Portfolio-Link</p>
                </label>
            </div>
            <div class="radio-select__item">
                <input type="radio" id="topic2" name="topic" value="calendar" />
                <label for="topic2" class="callone-modal__nextstep" data-next-step="3">
                    <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
                    <h3>Klassische Bewerbung</h3>
                    <p>Bewerbungsdateien hochladen</p>
                </label>
            </div>
        </div>
    </div>

    <!-- Step: Schnellbewerbung Arbeit bisher -->
    <div class="callone-modal__step" data-step-id="2" data-step-indicator="1/1" data-prev-step="1" data-next-step="3" data-next-button-text="Bewerbung absenden">
        <h2 class="centered">Was hast du bisher so gemacht?</h2>
        <p class="centered">Schick uns einen Link zu einem professionellen Profil über LinkedIn oder Xing oder einem aussagekräftigen Portfolio, sowie eine E-Mail Adresse um dich zu kontaktieren.</p>

        <form class="floating-form" data-step-callback="submitSchnellbewerbung">
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
                <input type="checkbox" id="privacy" required="required" />
                <label for="privacy">
                    Ich habe die <a href="/datenschutz" target="_blank">Datenschutzbestimmungen</a> gelesen.
                </label>
            </div>

            <div class="floating-form__loader"></div>

            <input type="submit" id="submit-schnellbewerbung" hidden />
        </form>
    </div>

    <!-- Step: Schnellbewerbung Fertig -->
    <div class="callone-modal__step" data-step-id="3" data-step-indicator="1/1" data-steptitle="Bestätigung" data-no-back="true">
        Schnellbewerbung gesendet
    </div>
</div>

<script>
    console.log('10 Sekunden Bewerbung Modal');
</script>