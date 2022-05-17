<?php
$product = new product ('Callcenter-Bot', 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.');
$product->image_set ('https://callone.de/assets/images/illus/relaxing.gif');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
    'Wie funktioniert der CallOne Callcenter Bot?​',
    '<p>Wir bieten kundenindividuelle Lösungen für Ihre Telefonhotline, um Anruferanliegen zu automatisieren.<br>Dies reicht vom sprachgesteuerten Auswahlmenü bis hin zu einem KI-gesteuerten Sprachdialog, in dem wir verschiedene Komponenten wie Voice-to-Text, KI, Schnittstellenanbindung an Ihre Systeme und Text-to-Speech zur Lösung des Anruferanliegens zusammenführen. Es handelt sich hierbei stets um Projekte mit unterschiedlichem Umfang und Anforderungen. <a href="#" title="Sprechen Sie uns an - Wir beraten Sie gerne" data-openmodal="contact-sales" class="inline-link">Sprechen Sie uns an</a></p>'
);
$faqs->faq_add (
    'Was sind die häufigsten Anwendungsfälle des Callcenter-Bots?',
    '<p>Wir bieten Ihnen drei Anwendungsbereiche: Sprachgesteuerte IVR-Auswahlmenüs, FAQ-Portale, individuelle KI-gesteuerte Kundendialoglösungen mit Voice-to-Text, KI, Text-to-Speech und Schnittstellenintegrationen.</p>'
);
$faqs->faq_add (
    'Was sind die ersten Schritte mit dem Callcenter-Bot?',
    '<p>Sie setzen sich mit uns in Verbindung und wir besprechen Ihr konkretes Anwendungsszenario. Recht schnell erstellen wir ein Prototyp für Sie und testen. Bei komplexeren Anwendungsfällen wie Schnittstellenintegrationen und komplexen Anwendungsfällen steht Ihnen ein Projektteam aus eigenen Full Stack- und Schnittstellenentwicklern, Web-Entwicklern und Sprachwissenschaftlern zur Verfügung.</p>'
);
$faqs->faq_add (
    'Wie können wir den CallOne Callcenter-Bot nutzen?',
    '<p>Wir bieten Ihnen ein Full-Service-Paket. Hierbei erhalten Sie von uns alles, was Sie brauchen, um Ihr Spracherlebnis auf den Weg zu bringen - von der Konzeptentwicklung bis zur Markteinführung und Optimierung Ihres Produkts.</p>'
);
$faqs->faq_add (
    'Was kostet der Callcenter-Bot?',
    '<p>Die Pricing des Callcenter-Bots erfolgt nach Nutzung. Sie zahlen je Aufruf der Sprachanforderung (VTT) und Text-to-Speech (TTS). Der Aufwand für die Bereitstellung Ihres Callcenter-Bots ist kundenindividuell und richtet sich nach Art und Umfang des Projekts.</p>'
);
$faqs->faq_add (
    'Wie lange dauert die Umsetzung?',
    '<p>Der Start für einen Callcenter Bot kann innerhalb weniger Stunden für Sie erfolgen, wenn es sich beispielsweise um die Sprachautomatisierung Ihres IVR-Menüs handelt. Im laufenden Betrieb optimieren wir mit Ihnen die erkannten Eingaben. Projekte bei denen Schnittstellenintegrationen und vielzählige Plausibilitäten abzubilden sind, werden in einem individuellen Projektplan für Sie verbindlich zusammengestellt.​</p>'
);
?>

<div class="section">
    <div class="hero">
        <div class="hero__text">
            <h1>Callcenter-Bot <br>für Kundenservice und Helpdesk</h1>
            <p class="bigtext">Sprachgesteuerte Menüführung, automatisierte FAQ am Telefon und Callcenter Bots, die Ihren Callcenter-Agenten Standardaufgaben abnehmen.</p>
            <p class="mobile-centered">
                <a href="#" class="btn btn--primary trackedElement" data-label="Button Header - Sales kontaktieren" data-category="Link" data-action="Show Contact Modal" data-openmodal="contact-sales">Mit Experten sprechen</a>
            </p>
        </div>
        <div class="hero__image">
            <div class="chat-conversation mobile-hidden" style="margin-bottom:var(--gutter-xs)">
                <div>
                    <?= pictureTag(
                        '/assets/images/icons_svg/big_15.svg',
                        'Kunde fragt',
                        60, 60,
                        [], false
                    ); ?>
                    <span class="text">Ich möchte meinen Lieferstatus wissen.</span>
                </div>
                <div>
                    <span class="text">Ihr Pakt wird morgen geliefert.</span>
                    <?= pictureTag(
                        '/assets/images/icons_svg/big_14.svg',
                        'Callcenter Bot Bender antwortet',
                        59, 60,
                        [], false
                    ); ?>
                </div>
            </div>

            <?= pictureTag(
                '/assets/images/illus/relaxing.gif',
                'Verbessern von Kundenzufriedenheit durch sprachbasierte Auswahlmenüs',
                800, 256
            ); ?>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Verwendungsmöglichkeiten für den Callcenter-Bot <br>Das sprachgesteuerte KI-Sprachdialogsystem</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_38.svg',
                        'Auswahlmenüs - Sprachauswahl statt DTMF-Tasten',
                        45, 50,
                        ['style' => 'height:50px']
                    ); ?>
                </p>
                <h3 class="centered">Sprach&shy;gesteuertes IVR</h3>
                <p class="centered">Sprachdialoge statt <br />starrer Menüs.</p>
                <ul class="list list--checkmarks list--checkmarks-green">
                    <li>Erkennung menschlicher Sprache</li>
                    <li>Intelligente Spracherlebnisse</li>
                    <li>Anlernbar, beliebig skalierbar, mehrsprachig</li>
                </ul>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/big_13.svg',
                        'Self-Service / FAQ - Anliegen aufnehmen und vollautomatisiert bearbeiten',
                        56, 50,
                        ['style' => 'height:50px']
                    ); ?>
                </p>
                <h3 class="centered">Informations&shy;bots</h3>
                <p class="centered">Anruferanfragen <br />automatisiert beantworten.</p>
                <ul class="list list--checkmarks list--checkmarks-green">
                    <li>Sprachbasierte FAQ</li>
                    <li>Vorqualifizierung von Anruferanliegen</li>
                    <li>Aktuelle Nachrichteninformationen</li>
                    <li>Automatisierte Informationsübermittlung</li>
                </ul> 
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/big_12.svg',
                        'Individual - Kundenindividuelle Anwendungen',
                        63, 50,
                        ['style' => 'height:50px']
                    ); ?>
                </p>
                <h3 class="centered">Callcenter Bots</h3>
                <p class="centered">Leistungsstarke Schnittstellen für kundenindividuelle Anwendungen.</p>
                <ul class="list list--checkmarks list--checkmarks-green">
                    <li>Termin vereinbaren</li>
                    <li>Lieferstatus erfragen</li>
                    <li>Passwort ändern</li>
                    <li>Kontostand abrufen</li>
                </ul> 
            </div>
        </div>

        <p class="centered">
            <a href="#" data-openmodal="contact-sales" class="btn btn--secondary trackedElement" data-label="Button - Mit Experten sprechen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
        </p>
    </div>
</div>

<div class="section section--black" id="calltracking">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/CallOneRobot-invers-2.svg',
                    'So funktioniert unser Spachdialogsystem - Der Callcenter Bot',
                    570, 968
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <h2 class="centered mobile-left">Wie funktioniert unser Callcenter Bot?</h2>

                <div class="carddeck carddeck--right carddeck--on-black" data-speed="3000">
                    <div class="carddeck__card">
                        <h5><span class="icon-number-1" style="font-size:28px;"></span>Sprachportal nimmt Anruf entgegen</h5>
                        <br />
                        <p>Das CallOne Sprachdialogsystem erkennt das gesprochene Wort des Anrufers. Diese auch als Voice-to-Text (VTT) oder Automatic-Speech-Recognition (ASR) bezeichnete Technologie ermöglicht es, in Echtzeit aus Sprache Text zu erstellen.</p>
                    </div>
                    <div class="carddeck__card">
                        <h5><span class="icon-number-2" style="font-size:28px;"></span>Das Anliegen mittels vortrainierter KI identifizieren</h5>
                        <br />
                        <p>Schlüsselwörter und semantische Zusammenhänge werden erkannt.</p>
                    </div>
                    <div class="carddeck__card">
                        <h5><span class="icon-number-3" style="font-size:28px;"></span>Sprachdialog mit Ihrem Anrufer</h5>
                        <br />
                        <p>mittels Sprachsynthese (Text-to-Speech)</p>
                    </div>
                    <div class="carddeck__card">
                        <h5><span class="icon-number-4" style="font-size:28px;"></span>Vorqualifizierung oder Lösung des Anruferanliegens</h5>
                        <br />
                        <p>Ist das Anliegen des Anrufers definiert erfolgt die Weiterleitung auf die hinterlegte Routing-Logik (unterschiedliche Ziele, Skills, Warteschleifen).</p>
                    </div>
                </div>

                <p class="centered">
                    <a href="#" data-openmodal="contact-sales" class="btn btn--primary trackedElement" data-label="Button - Jetzt einfach ausprobieren!" data-category="Link" data-action="linked to #demos">Weitere Fragen? Kontaktieren sie uns!</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section" id="integrations">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Nutzen</h2>
        <p class="bigtext centered mobile-left">CallOne bietet das Full-Service Paket für Callcenter-Bots am Telefon - von der Konzeptentwicklung bis zur Markteinführung und Optimierung Ihres Produkts.</p>

        <div class="content-box content-box--white content-box--shadow content-box--full-width">
            <div class="co-grid">
                <div class="co-grid__col co-grid__col--vcentered">
                    <?= pictureTag(
                        '/assets/images/illus/voicebot-business.gif',
                        'Callcenter Bot - Nutzen für Unternehmen',
                        315, 280
                    ); ?>
                </div>
                <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                    <h3>Unternehmen</h3>
                    <ul class="list list--checkmarks list--checkmarks-green">
                        <li>Das Anliegen sofort verstehen und Geld sparen (Verkürzte Anrufdauern)</li>
                        <li>Den Service entlasten mit kürzeren Gesprächszeiten (Optimale Vorqualifizierung)</li>
                        <li>Mehrsprachigen Kundenservice anbieten (Internationaler Rollout)</li>
                    </ul>
                </div>
            </div>    
        </div>

        <div class="content-box content-box--white content-box--shadow content-box--full-width">
            <div class="co-grid">
                <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered co-grid__col--order-2-xs">
                    <h3>Anrufer</h3>
                    <ul class="list list--checkmarks list--checkmarks-green">
                        <li>Zufriedenere Anrufer durch natürliche Menüführung</li>
                        <li>Optimale Übertragung des Anruferanliegen an den Servicemitarbeiter</li>
                        <li>24/7 Erreichbarkeit für Ihre Anrufer</li>
                    </ul>
                </div>
                <div class="co-grid__col co-grid__col--vcentered co-grid__col--order-1-xs">
                    <?= pictureTag(
                        '/assets/images/illus/voicebot-user.gif',
                        'Callcenter Bot - Nutzen für Anrufer',
                        315, 301,
                        ['style' => 'width:315px!important']
                    ); ?>
                </div>
            </div>    
        </div>

        <p class="centered">
            <a href="#" class="btn btn--primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt 14 Tage testen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
        </p>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow">
        <div class="subtitle centered mobile-left">Supported by</div>

        <div class="content-box content-box--white content-box--full-width">
            <div class="co-grid centered">
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                    <p>
                        <?= pictureTag(
                            '/assets/images/logo/partnerlogos/logo-google.svg',
                            'Supported by Google',
                            118, 40,
                            ['style' => 'height:40px']
                        ); ?>
                    </p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                    <p>
                        <?= pictureTag(
                            '/assets/images/logo/partnerlogos/logo-amazon.svg',
                            'Supported by Amazon',
                            133, 40,
                            ['style' => 'height:40px']
                        ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('partials/slider-callcenter-bot.php'); ?>

<div class="section section--black" id="addons">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Weitere Callcenter Bot-Addons</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_18.svg',
                            'Alles über eine Webseite steuerbar',
                            64, 64,
                            ['style' => 'filter:saturate(0) grayscale(100%) brightness(1000%);width:64px!important', 'class' => 'white icon']
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Call-<br />Tracking</h3>
                            <p>Rückgabe von relevanten Informationen auf Basis der Website-Daten.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-chat-acknowledge sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Callcenter-<br />Software</h3>
                            <p>Steuerung von Anrufen mit Hilfe von Spracheingaben.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-document1 sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>VoIP-<br />Telefonanlage</h3>
                            <p>Live-Chat mit Website-Besuchern und Versenden von Dokumenten.</p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-routing sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Zusammenspiel<br />mit eigener Anlage</h3>
                            <p>Routing auf Basis von Webseiteneingaben oder Warenkorbinhalten.</p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-database1 sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>CTI-Integration<br />mit Ihrem CRM</h3>
                            <p>Anreicherung von Websitedaten mit Informationen aus Ihren (CRM-)Systemen.</p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-cobrowsing sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Co-<br />Browsing</h3>
                            <p>Starten einer Co-Browsing Session nach Kontaktaufnahme durch den Nutzer.</p>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">FAQ Callcenter-Bot</h2>
    
        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ();
        ?>

        <br />
        <br />
        <p class="centered">
            <a href="/faq/" class="btn btn--primary trackedElement" data-label="Button - Mehr FAQ" data-category="Link" data-action="linked to /faq/">Weitere FAQ</a>
        </p>  
    </div>
</div>