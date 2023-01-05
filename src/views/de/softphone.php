<?php
$product = new product ('Softphone', 'Die TEAMS Alternative | VoIP Telefon integriert in Ihren PC oder Smartphone, nutzbar mit Ihrem Anbieter');
$product->image_set ('https://callone.de/assets/images/screens/Intro-softphone-desktop.png');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
    'Lorem Ipsum?',
    '<p>Dolor Sit Amet!</p>'
);
?>

<div class="section section--light-green-white-3">
    <div class="hero">
        <div class="hero__text">
            <h1>Beste Business-Telefonie. Überall dabei.</h1>
            <p class="bigtext">
                Das universelle Softphone für <span class="typing-text" data-texts="das Homeoffice|unterwegs|den Kundenservice|Anbindungen ans CRM" data-colors="#550C9E|#1976AA|#718302|#FF5C5C">das Homeoffice</span>
            </p>
            <p class="mobile-centered">
                <a href="https://box.callone.de/login/voip/integrations/index.php?info=softphone" class="btn btn--primary">Jetzt kostenlos testen!</a>
            </p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/softphone-hero.png',
                'Beste Business-Telefonie. Überall dabei.',
                572, 438, [], false
            ); ?> 
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content">
        <h2 class="centered mobile-left">
            Entfesseln Sie Ihre Telefonie! Nutzen Sie das CallOne Softphone für Mobil & Desktop.
        </h2>
        <p class="centered mobile-left bigtext">
            Endlich auch in Produktionshallen, Außendienst, Homeoffice und Dienstreisen perfekte
            Unternehmenstelefonie.
        </p>
    </div>
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered co-grid__col--hcentered">
                <div class="softphone__card softphone__card--dark-green">
                    <?= pictureTag(
                    '/assets/images/illus/woman-headset.png',
                    'Desktop Softphone',
                    340, 340); ?>

                    <div class="centered softphone__text">
                        <h2>Desktop Softphone</h2>
                        <p>
                            Headset anstecken und los geht's! Unser Softphone für Windows- und Mac-User mit
                            zahlreichen Zusatzfunktionen.
                        </p>
                    </div>
                    <a href="#desktop-softphone" class="btn softphone__btn"> Jetzt downloaden! </a>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered co-grid__col--hcentered">
                <div class="softphone__card softphone__card--light-green">
                    <?= pictureTag(
                    '/assets/images/illus/man-mobile-phone.png',
                    'Mobile Softphone',
                    340, 340); ?>

                    <div class="centered softphone__text">
                        <h2>Mobile Softphone</h2>
                        <p>
                            Immer mit dabei.<br />
                            Für Apple und Android perfekt integrierte Unternehmenstelefonie im Smartphone.
                        </p>
                    </div>
                    <a href="#mobile-softphone" class="btn softphone__btn"> Jetzt downloaden! </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--lighter-grey section--big-padding">
    <div class="section__content">
        <h2 class="centered mobile-left">Vollwertige Telefonie. Immer und überall.</h2>
        <p class="centered mobile-left bigtext">
            Das CallOne Softphone biette Ihnen die umfangreichen Funktionen der Cloud Telefonanlage auch
            außerhalb des Büros.
        </p>
    </div>
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col">
                            <?= pictureTag(
                            '/assets/images/icons_svg/small_17_2.svg',
                            'Funktion: Wer telefoniert?',
                            70, 70); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4>Wer telefoniert?</h4>
                        </div>
                    </div>
                    <p style="margin-top: 0;">
                        Schauen Sie einfach nach! Präsenzanzeige (BLF) zeigt Ihnen den aktuellen
                        Gesprächsstatus Ihrer Kollegen.
                    </p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col">
                            <?= pictureTag(
                            '/assets/images/icons_svg/telefonie-skalierung.svg',
                            'Funktion: Alles steuerbar',
                            70, 70); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4>Alles steuerbar?</h4>
                        </div>
                    </div>
                    <p style="margin-top: 0;">
                        Schauen Sie einfach nach! Präsenzanzeige (BLF) zeigt Ihnen den aktuellen
                        Gesprächsstatus Ihrer Kollegen.
                    </p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col">
                            <?= pictureTag(
                            '/assets/images/icons_svg/big_01.svg',
                            'Funktion: Wer ruft an?',
                            70, 70); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4>Wer ruft an?</h4>
                        </div>
                    </div>
                    <p style="margin-top: 0;">
                        Schauen Sie einfach nach! Präsenzanzeige (BLF) zeigt Ihnen den aktuellen
                        Gesprächsstatus Ihrer Kollegen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--wide">
        <p class="centered">Eine Auswahl unserer Kunden:</p>

        <div class="logos logos--fade" style="--height:30px">
            <?= pictureTag(
                '/assets/images/client-logos/logo-snipes-white.svg',
                'Unser Kunde snipes',
                85, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-bett1-white.svg',
                'Unser Kunde bett1',
                62, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-flaconi-white.svg',
                'Unser Kunde flaconi',
                118, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-gastro-hero-white.svg',
                'Unser Kunde GastroHero',
                132, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-vimcar-white.svg',
                'Unser Kunde Vimcar',
                152, 30
            ); ?>
        </div>
        <div class="logos logos--fade" style="--height:30px">
            <?= pictureTag(
                '/assets/images/client-logos/logo-igus-white.svg',
                'Unser Kunde IGUS',
                58, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-seereisedienst-white.svg',
                'Unser Kunde Seereisedienst',
                166, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-check24-white.svg',
                'Unser Kunde Check24',
                125, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-helios-white.svg',
                'Unser Kunde Helios',
                128, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-sodastream.svg',
                'Unser Kunde SodaStream',
                194, 30
            ); ?>
        </div>
    </div>
</div>

<div class="section" id="desktop-softphone">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/photos/desktop-software.png',
                    'Alles drin, was Sie benötigen: Unser Softphone als Desktop Phone.',
                    523, 523, ['class'=>'co-grid__image--full-width']
                    ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Alles drin, was Sie benötigen: Unser Softphone als Desktop Phone.</h2>
                <p class="bigtext">
                    Jetzt flexibel und zuverlässig telefonieren. Bei gewohnt glasklarer Gesprächsqualität.
                    <br />
                    Einfach Desktop App runterladen und mit Ihren CallOne Benutzerdaten (Endpunkt) anmelden.
                </p>

                <p class="button-set space-between">
                    <a href="https://static.callone.de/binaries/callone/softphone.exe" class="btn btn--primary softphone__download-btn">
                        Download für Windows
                    </a>
                    <a href="https://static.callone.de/binaries/callone/softphone.dmg" class="btn btn--primary softphone__download-btn">
                        Download für Mac
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section section--lighter-grey" id="mobile-softphone">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered co-grid__col--order-2-xs">
                <h2>Telefonie für unterwegs. Bleiben Sie auch außerhalb des Büros in Verbindung.</h2>
                <p class="bigtext">
                    Vom Kundenservice bishin zur Produktionshalle führen Sie und Ihre Mitarbeiter lokale
                    sowie internationale Geschäftsanrufe flexibel und zuverlässig. Mit der mobilen Softphone
                    App von CallOne. Bleiben Sie in Verbindung, auch wenn außerhalb vom Büro.
                </p>
                
                <p class="button-set space-between" style="flex-direction:row; flex-wrap:nowrap; column-gap: 20px;">
                    <a href="https://apps.apple.com/au/app/callone-softphone/id6444151385" target="_blank" rel="noreferrer">
                        <?= pictureTag(
                            '/assets/images/photos/app-store-badge.png',
                            'Download im App Store',
                            269, 90); ?>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=de.callone.softphone.android&hl=de" target="_blank" rel="noreferrer">
                        <?= pictureTag(
                            '/assets/images/photos/google-play-badge.png',
                            'Download bei Google Play',
                            303, 90); ?>
                    </a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered co-grid__col--order-1-xs">
                <?= pictureTag(
                    '/assets/images/photos/mobile-phone.png',
                    'Telefonie für unterwegs. Bleiben Sie auch außerhalb des Büros in Verbindung.',
                    530, 519, ['class'=>'co-grid__image--full-width']
                ); ?>
            </div>
        </div>
    </div>
</div>

<div class="section section--black section--black-corner">
    <div class="section__content section__content--narrow centered mobile-left">
        <h2>Nehmen Sie Ihre Telefonie jetzt überall mit hin.</h2>
        <p class="bigtext">Buchen Sie Ihr unverbindliches Erstgespräch, um noch mehr zu erfahren.</p>
        <p class="mobile-centered">
            <a href="/" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">TERMIN VEREINBAREN</a>
        </p>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Fragen und Antworten</h2>

        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ();
        ?>
    </div>
</div>