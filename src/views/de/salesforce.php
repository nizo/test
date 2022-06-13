<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Wir funktioniert die Integration in Salesforce?',
    '<p>Sie können die Salesforce-App über den Salesforce AppExchange installieren. Gerne stellen wir Ihnen dafür eine Anleitung zur Verfügung oder unterstützen Sie bei der Einrichtung!</p>'
);
$faqs->faq_add (
    'Welche Funktionen bietet mir die Integration in Salesforce?',
    '<p>Die Callone Salesforce-Integration ermöglicht das Mapping von CallOne und Salesforce-Nutzer*innen, um automatisch alle In- und Outbound-Anrufe in Salesforce zu dokumentieren.</p><p>Zu jedem Anruf wird direkt in Salesforce eine Aktivität erstellt. Außerdem liefert die App ein CTI Softphone in Salesforce, das unter anderem das Ändern des CallOne Agentenstatus ermöglicht. Ausgehende Gespräche können mit Klick auf eine Rufnummer in Salesforce ausgelöst werden.</p>'
);
$faqs->faq_add (
    'Welche Einsatzmöglichkeiten bieten sich mit einer schnittstellenoffenen Callcenter Software?',
    '<p>Wenn Sie die Salesforce-Integration im Zusammenspiel mit der Callcenter-Software nutzen, erweitern Sie Ihre Telefonie um weitreichende ACD-Funktionen. Hierzu gehören z.B. Skillgruppen-Routings, Warteschleifen-Administration und umfangreiche Auswertungsmöglichkeiten. Erfahren Sie <a href="/callcenter-software" title="Callcenter-Software">hier</a> mehr zur CallOne Cloud ACD.</p>'
);
?>

<div class="section section--light-grey">
    <header class="hero">
        <div class="hero__text">
            <p class="mobile-centered">
                <a href="#" class="crm-tool-logo">
                    <?= pictureTag(
                        '/assets/images/crm-logos/salesforce-app.png',
                        'Salesforce Anbindung Telefonie',
                        70, 70, [], false
                    ); ?>
                </a>
            </p>
            <h1>
                Salesforce-Integration:<br />
                Computer-Telefonie-Integration für Salesforce
            </h1>
            <p class="bigtext">Die CallOne CTI App für Salesforce Lightning & Classic ermöglicht Ihrem Vertriebsteam einen optimierten Workflow mit gesteigerter Effizienz und Produktivität.</p>

            <p class="mobile-centered">
                <a class="btn btn--primary" href="#installation">Jetzt ausprobieren</a>
            </p>
        </div>
        <div class="hero__image">
            <div class="crm-header-image">
                <?= pictureTag(
                    '/assets/images/screens/Hero-Image-Salesforce.png',
                    'Salesforce Anbindung Telefonanlage',
                    535, 360, [], false
                ); ?>
            </div>
        </div>
    </header>
</div>

<div class="section">
    <div class="section__content section__content--narrow centered mobile-left">
        <?= pictureTag(
            '/assets/images/screens/Click-to-Call-Salesforce.png',
            'Click to call',
            880, 507
        ); ?>

        <h2>Click-to-Call direkt aus Salesforce oder mit dem CallOne Softphone</h2>
        <p>Führen Sie ausgehende Anrufe von Ihrer Salesforce-Benutzeroberfläche aus, ohne den Bildschirm wechseln zu müssen. Anrufe werden direkt an Ihr gewähltes VoIP-Gerät (Softphone, Hardware-Telefon) oder CallOne WebRTC gesendet.</p>

        <div class="btn-set btn-set--centered">
            <a href="#installation" class="btn btn--primary">Direkt testen</a>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--wide centered mobile-left">
        <h2>Features der Integration</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/icon-telephone-browser.svg',
                        'Softphone mit Click to Dial',
                        50, 50
                    ); ?>
                </p>
                <h3>VoIP Softphone<br />mit Click-to Dial</h3>
                <p>für Turboanwahl Ihrer Leads mit unserer Browser Extension für Chrome</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/icon-phone-dialpad.svg',
                        'Rufnummern on demand',
                        50, 50
                    ); ?>
                </p>
                <h3>Rufnummern<br />on demand</h3>
                <p>CallOne schaltet, die Rufnummer die sie benötigen, gleichgültig ob aus Ihrem Vorwahlbereich oder dem Ausland</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/icon-security.svg',
                        'Datenschutz DSGVO konforme Telefonie',
                        50, 51
                    ); ?>
                </p>
                <h3>DSGVO-<br />Konformität</h3>
                <p>Ihre Daten sind bei uns geschützt, denn unsere Server stehen in Deutschland und unsere Gespräche werden verschlüsselt</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/icon-voice-quality.svg',
                        'hohe Sprachqualität bei Ihrer Unternehmenstelefonie',
                        55, 54
                    ); ?>
                </p>
                <h3>Glasklare<br />Gesprächsqualität</h3>
                <p>Wir verwenden ausschließlich Businessrouten und überlassen hier nix dem Zufall, denn Qualität ist für uns das Wichtigste</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/icon-speed.svg',
                        'Schnelle Bereitstellung und Integration von Salesforce in Telefonie',
                        50, 50
                    ); ?>
                </p>
                <h3>Sofort<br />startklar</h3>
                <p>Unsere CTI-App lässt sich nahtlos aus dem Salesforce AppExchange in Ihre Sales- oder Servicecloud integrieren.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/icon-business-telephony.svg',
                        'Businesstelefonie für das ganze Unternehmen',
                        50, 50
                    ); ?>
                </p>
                <h3>Für das gesamte<br />Unternehmen</h3>
                <p>CallOne liefert Business-Telefonie für das gesamte Unternehmen und unterstützt insbesondere Deine Kollegen aus dem Kundenservice</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green">
    <div class="section__content section__content--narrow centered mobile-left">
        <?= pictureTag(
            '/assets/images/screens/Salesforce-Abgleich.png',
            'Kundendaten mit Salesforce abgleichen',
            880, 573
        ); ?>

        <h2>Abgleich aller eingehenden Anrufe mit Ihren Salesforce-Kundendaten</h2>
        <p>Alle eingehenden Anrufe werden mit Ihren Salesforce-Leads, -Kontakten und – Accounts gematcht, im Account automatisch angezeigt und als Aktivität in Salesforce gespeichert.</p>

        <div class="btn-set btn-set--centered">
            <a href="#installation" class="btn btn--primary">Direkt testen</a>
        </div>
    </div>
</div>

<div class="section" id="installation">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Installation</h2>

        <div class="co-grid centered mobile-left">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/Salesforce-CallOne-Integration.svg',
                        'Salesforce Integration bei CallOne',
                        140, 142, [
                            'style' => 'height:142px'
                        ]
                    ); ?>
                </p>
                <h3>Salesforce Integration</h3>
                <p>Erfassen Sie automatisiert alle In- und Outbound-Gespräche in Salesforce mit Zuordnung zum passenden Kundendatensatz. Zusätzlich unterstützt die App das Setzen des ACD-Agentenstatus und ein einfaches Auslösen von Anrufen per Klick.</p>
                <p><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3A00000FAAgWUAX" class="btn btn--secondary">Salesforce Appexchange</a></p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <p>
                    <?= pictureTag(
                        '/assets/images/icons_svg/softphone-branding-lit.svg',
                        'CallOne Softphone für Cloud Telefonanlage',
                        142, 142, [
                            'style' => 'height:142px'
                        ]
                    ); ?>
                </p>
                <h3 class="tag-above">
                    <span class="tag icon-callone">App</span>
                    CallOne Softphone
                </h3>
                <p>Das CallOne Softphone Plugin für den Chrome Browser ist spielend einfach in jeden Kundenservice oder Sales Workflow integrierbar. Probieren Sie es jetzt aus!</p>
                <p><br class="mobile-hidden" /><a href="/softphone#installation" class="btn btn--secondary">zu Chrome hinzufügen</a></p>
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