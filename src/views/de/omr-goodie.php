<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Was bietet CallOne?',
    '<p>CallOne bietet Ihnen eine Telefonielösung für das gesamte Unternehmen. Dabei richten wir uns speziell an Ihre Sales- und Service-Abteilungen und bieten für diese eine ausgereifte Callcenter-Software mit weitreichenden Apps und APIs.</p>'
);
$faqs->faq_add (
    'Was kostet CallOne?',
    '<p>Wir bieten Pakete, die genau auf die Anforderungen unserer Kunden zugeschnitten sind. Dabei richten wir uns insbesondere an Unternehmen, die eine individuelle Lösung benötigen und eine persönliche Betreuung zu schätzen wissen.</p><p>Konkret startet unsere Telefonanlage bei 5 UserInnen und 99,00 EUR. Näheres erfährst du bei unserem Vertriebsteam!</p>'
);
$faqs->faq_add (
    'Welches Goodie erhalte ich als OMR-HörerIn?',
    '<p>Als OMR-HörerIn erlassen wir dir die Bereitstellunggebühren unserer Telefonanlage. Damit sparst du bis zu 499,00 EUR!</p>'
);
$faqs->faq_add (
    'Wie schnell können wir starten?',
    '<p>Ein Start ist in wenigen Schritten möglich. Wir schalten einen persönlichen Zugang zur Anlage und es kann losgehen! Persönliche AnsprechpartnerInnen stehen jederzeit zur Konfiguration des Routings zur Verfügung.</p>'
);
?>

<div class="section section--light-grey">
    <header class="hero">
        <div class="hero__text">
            <h1>Bereit für richtig guten Kundenservice?</h1>
            <p class="bigtext">CallOne bietet passgenaue Cloud-Callcenter-Lösungen für Ihren Kundenservice oder Salesabteilungen</p>

            <ul class="list list--checkmarks list--checkmarks-top">
                <li>Grenzenlose Telefonie aus der deutschen Cloud</li>
                <li>Eine Plattform für das gesamte Unternehmen</li>
                <li>Fertige Apps und offene Schnittstellen</li>
            </ul>

            <p class="mobile-centered">
                <a href="#offer" class="btn btn--primary">Unverbindlich testen</a>
            </p>
        </div>
        <div class="hero__image">
            <a href="https://omr.com/de/podcast/">
                <?= pictureTag(
                    '/assets/images/photos/philipp-scaled-up2@3x.png',
                    'OMR',
                    560, 705, [
                        'style' => 'display:block'
                    ], false
                ); ?>
            </a>
        </div>
    </header>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow centered mobile-left">
        <?= pictureTag(
            '/assets/images/logo/CallOne-OMR-logo.svg',
            'CallOne und OMR',
            330, 52
        ); ?>
        <h2>Angebot für OMR-Fans</h2>
        <p>Exklusiv für OMR Hörer bieten wir unsere Lösung <strong>ohne einmalige Bereitstellungskosten</strong> an. Interessenten schalten wir direkt Rufnummern und alle Features zum  unverbindlichen Test frei.</p>

        <p class="centered">
            <a href="#" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">Kostenlose Demo buchen</a>
        </p>

        <p class="centered">Unternehmen denen Telefonberatung am Herzen liegt, vertrauen auf <strong>CallOne Lösungen</strong></p>

        <div class="logos">
            <?= pictureTag(
                '/assets/images/client-logos/bett-white.png',
                'Kunde Bett1.de',
                140, 28
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/check24-logo.svg',
                'Kunde Check24',
                140, 28
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/snipes2-logo.svg',
                'Unser Kunde Snipes',
                99, 28
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-sodastream.svg',
                'Unser Kunde SodaStream',
                194, 24
            ); ?>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide centered mobile-left">
        <h2>Qualität und Flexibilität die sich bemerkbar machen</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/sound-quality.svg',
                        'Kristallklare Sprachqualität',
                        50, 49
                    ); ?>
                </p>
                <h3>Kristallklare<br />Sprachqualität</h3>
                <p>Wir setzen auf Businessrouten, dass heißt keine Gesprächsaussetzer und beste Qualität für Deine Telefonate.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/server-location.svg',
                        'Serverstandort Deutschland',
                        50, 51
                    ); ?>
                </p>
                <h3>Höchste<br />Sicherheitsstandards</h3>
                <p>Die Server stehen in Hochsicherheitsrechenzentren in Deutschland. Verschlüsslung ist hier Standard.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/realtime-statistics.svg',
                        'Echtzeitstatistiken',
                        51, 50
                    ); ?>
                </p>
                <h3>Echtzeit-<br />statistiken</h3>
                <p>Wir liefern alles Daten, damit Du an den großen Stellscharauben drehen kannst: Personal & Effizienz.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/homeoffice.svg',
                        'Homeoffice',
                        50, 50
                    ); ?>
                </p>
                <h3>Bequem im<br />Homeoffice</h3>
                <p>Du entscheidest wie Du telefonierst: Über den Browser, Softphone integriert in Deinem Tool oder klassich mit einem IP-Telefon.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/apps.svg',
                        'Apps',
                        50, 50
                    ); ?>
                </p>
                <h3>Große Auswahl<br />an Apps</h3>
                <p>CallOne liefert fertige Anbindungen für die relevanten CRM und Ticketinglösungen wie Salesforce, Pipedrive Hubspot, Zendesk.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/apis.svg',
                        'Schnittstellen',
                        50, 50
                    ); ?>
                </p>
                <h3>Einfache<br />Schnittstellen</h3>
                <p>Unser Steckenpferd: Willst Du intelligent routen oder Rohdaten nutzen, eine SMS versenden oder Dein eigenes ERP anbinden.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content">
        <h2 class="centered mobile-left">Fragen und Antworten</h2>

        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ('toggle-box--on-black');
        ?>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--wide">
        <div class="omr-badge">
            <div class="omr-badge__icon">
                <?= pictureTag(
                    '/assets/images/icons_svg/podcast-goodie.svg',
                    'Podcast Goodie',
                    50, 52
                ); ?>
            </div>
            <div class="omr-badge__text">
                <strong>Sie hören den OMR Podcast?</strong><br />
                Dann bieten wir Ihnen unsere Telefonanlage exklusiv ohne einmalige Bereitstellungskosten an!
            </div>
            <div class="omr-badge__button">
                <a href="#offer" class="btn btn--primary">Zum Angebot</a>
            </div>
        </div>

        <div class="co-grid centered mobile-left">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="content-box content-box--white">
                    <?= pictureTag(
                        '/assets/images/icons_svg/Customer-Support-Black.svg',
                        'Kundenservice CallOne',
                        64, 64
                    ); ?>
                    <h3>Kundenservice</h3>
                    <p>Das „Mach-meine-Kunden-glücklich-Paket“ steuert Anrufe intelligent, optimiert Ihre Erreichbarkeit und macht Ihr Callcenter viel effizienter.</p>
                    <p>
                        <br/>
                        <a href="/callcenter-software" class="btn btn--primary">Mehr erfahren</a>
                    </p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="content-box content-box--white">
                    <?= pictureTag(
                        '/assets/images/icons_svg/Sales-Black.svg',
                        'Sales CallOne',
                        65, 64
                    ); ?>
                    <h3>Sales</h3>
                    <p>Mehr Durchblick bringt mehr Leads und qualitativ bessere Abschlüsse. Sie verbinden CallOne mit den besten Vertriebstools, einfach per Knopfdruck.</p>
                    <p>
                        <a href="/sales-solutions" class="btn btn--primary">Mehr erfahren</a>
                    </p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="content-box content-box--white">
                    <?= pictureTag(
                        '/assets/images/icons_svg/Helpdesk-Black.svg',
                        'Helpdesk Anbindung',
                        64, 64
                    ); ?>
                    <h3>IT-Helpdesk</h3>
                    <p>Organisierter und produktiver werden, Geschäftsprozesse optimieren. Mit CallOnes IT-Helpdesk lösen Sie Anfragen kompetent und transparent.</p>
                    <p>
                        <br/>
                        <a href="/it-helpdesk-solutions" class="btn btn--primary">Mehr erfahren</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>