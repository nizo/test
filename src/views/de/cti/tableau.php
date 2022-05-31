<?php
$faqs = new faqs ();
$faqs->faq_add (
  'Wie funktioniert der Telefonanlagen Connector für Tableau?',
  '<p>CallOne bietet eine umfassende VoIP-Telefonanlage mit Callcenter-Software und unzähligen Schnittstellen. Für das BI-Tool Tableau bietet wir als Tableau Technologie-Partner eine fertige Anbindung über den Tableau Webdata-Connetor zur Übermittlung aller anrufspezifischen Daten. Sie erhalten nach Freischaltung von Telefonanlage und Connector Ihre Zugangsdaten und könne sofort loslegen.</p>'
);
$faqs->faq_add (
  'Welche KPI kann ich mit dem Tableau Konnector erhalten?',
  '<p>Sie erhalten eine umfassende Sammlung aller anrufrelevanten Daten. Neben Anruf- und Wartedauer erhalten Sie eine Vielzahl von Informationen rund um Ihre Agenten, Warteschleifen, Anrufgründe, Herkünfte und Verteilung der Anrufe. Sie können somit Telefon-KPIs ermitteln und diese Daten mit Ihren sonstigen Kontaktkanälen für einen Gesamtbild in Verbindung bringen.</p>'
);
$faqs->faq_add (
  'Was kostet der Telefonanlagen Connector für Tableau?',
  '<p>Der Tableau Connector ist Teil der VoIP-Telefonanlage und Callcenter-Software von CallOne. <a href="#" title="Kontaktieren Sie uns für ein individuelles Angebot" data-openmodal="contact-sales">Bitte setzen Sie sich für ein individuelles Angebot mit uns in Verbindung</a>.</p>'
);
$faqs->faq_add (
  'Kann ich den Tableau Connector auch mit meiner bestehenden Telefonanlage nutzen?',
  '<p>Es gibt zahlreiche CallOne Kunden, die ihre eigene Telefonanlage im Zusammenspiel mit der CallOne Callcenter-Software nutzen. Um die Telefondaten für einen Tableau-Export zu erfassen ist es stets Grundvoraussetzung, dass die Gespräche über unsere Infrastruktur geleitet und aufbereitet werden. Zur Besprechung Ihrer individuellen Anforderungen <a href="#" title="Sprechen Sie mit unseren Experten" data-openmodal="contact-sales">sprechen sie mit unseren Experten</a></p>'
);
$faqs->faq_add (
  'Gibt es bei CallOne noch andere Möglichkeiten Telefondaten für meine BI-Abteilung zu erhalten?',
  '<p>CallOne bietet weit <a href="https://connect.callone.io/api/rest/" title="Apps und Schnittstellen">über 50 unterschiedliche Schnittstellen und Webhooks</a> um ihre Businesslösungen mit unserer VoIP-Telefonanlage zu koppeln. Insbesondere für Kunden, die umfassende Rohdaten rund um das Callcenter oder die Telefonanlage benötigen. Unsere Schnittstellenprogrammierer helfen Ihnen bei individuellen Anforderungen persönlich weiter.</p>'
);
$faqs->faq_add (
  'Kann ich die Callcenter-Software und den Tableau Connector testen?',
  '<p>Ja, ein Test und eine Demo ist möglich und von unserer Seite auch gewünscht. <a href="/kontakt" title="Treten Sie ins Kontakt">Bitte kontaktieren sie unsere Experten für eine Websession</a></p><p>Darüber hinaus bietet CallOne eine Vielzahl fertiger Apps für beliebte Tools wie Pipedrive, Salesforce, Zendesk, uvm. sowie Integrationen mit BI-Tools wie tableau und Geckoboard.</p>'
);
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Der CallOne <br class="mobile-hidden" />Tableau-Connector:</h1>
            <p class="bigtext">Integrieren Sie Ihre Callcenter KPIs in Tableau.</p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/photos/callcenter-cockpit-dashboard-tableau.png',
                'Callcenter Cockpit Dashboard Tableau',
                560, 361, [
                    'class' => 'mobile-hidden'
                ], false
            ); ?>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#beispiel">Beispiel</a>
            <a href="#nutzen">Nutzen</a>
            <a href="#funktionen">Funktionen</a>
            <a href="#faq" target="_blank">FAQ</a>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow">
        <p>
            <?= pictureTag(
                '/assets/images/logo/partnerlogos/callone_tableau_2.svg',
                'CallOne + Tableau',
                880, 88
            ); ?>
        </p>

        <p class="btn-set btn-set--centered">
            <a href="#" class="btn btn--primary trackedElement" data-openmodal="contact-sales" data-label="Button - Experten kontaktieren" data-category="Link" data-action="opens sales modal">Experten kontaktieren</a>
        </p>

        <br />
        <br />
        <br />
        
        <h2 class="centered mobile-left">Kunden, die erfolgreich unseren Tableau-Connector nutzen:</h2>

        <div class="content-box content-box--white content-box--full-width">
            <div class="logos" style="--height:40px">
                <?= pictureTag(
                    '/assets/images/client-logos/logo-apo-discounter-noborder.png',
                    't3n',
                    160, 40
                ); ?>
                <?= pictureTag(
                    '/assets/images/client-logos/logo-check24-color.svg',
                    'Gründerszene',
                    167, 40
                ); ?>
                <?= pictureTag(
                    '/assets/images/client-logos/postcode-color.png',
                    'Call Center Verein',
                    65, 40
                ); ?>
            </div>
        </div>
    </div>
</div>

<div class="section" id="beispiel">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">CallOne bietet eine Telefonanlage, die auf Knopfdruck alle anrufspezifischen Daten in Tableau überträgt.</h2>

        <div class="content-box content-box--white">
            <div class="video">
                <video controls="" preload="none" onclick="this.play();" poster="/assets/images/photos/placeholder.gif" data-poster="/assets/images/photos/callcenter-tableau-video-poster.jpg" class="trackedElement lazyPoster" data-label="Tableau WebDataConnector" data-category="Video" data-action="Play Video">
                    <source src="/assets/videos/callone-tableau.webm" type="video/webm">
                    <source src="/assets/videos/callone-tableau.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <div class="section__content section__content--wide" id="nutzen"> 
        <div class="content-box content-box--white content-box--full-width content-box--shadow">
            <div class="co-grid">
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                    <ul class="list list--checkmarks list--checkmarks-green">
                        <li><strong>Schaffen Sie Transparenz</strong> in ihrem Callcenter und importieren sie alle relevanten Telefoniedaten Ihres Kundenservice- oder Salesteams in Tableau.</li>
                        <li><strong>Verkürzen sie Warte- und Gesprächsdauern</strong> durch Auswertung von Anrufgründen, Performance, Erreichbarkeiten.</li>
                        <li><strong>Verbessern sie ihren Kundenservice</strong> durch optimierte Personalplanung auf stabiler Datengrundlage.</li>
                    </ul>
                </div>
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered centered">
                    <?= pictureTag(
                        '/assets/images/photos/tableau-callcenter-connector-dashboard.jpg',
                        'tableau callcenter connector dashboard',
                        420, 245, [
                            'class' => 'co-grid__image--full-width'
                        ]
                    ); ?>
                </div>
            </div>    
        </div>
    </div>
</div>

<div class="section" id="funktionen">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_04.svg',
                        'Einfache Integration',
                        73, 70, [
                            'style' => 'height:70px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered">Einfach</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Keine Programmier-kenntnisse für Anbindung erforderlich</li>
                    <li>Per <strong>Webdata-Connector</strong> einfach in Tableau integrierbar</li>
                    <li>Einfacher Integration des Flow mittels Webdata-Connector</li>
                </ul>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_20.svg',
                        'Intuitive Bedienung',
                        89, 70, [
                            'style' => 'height:70px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered">Intuitiv</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Daten per Drag & Drop integrieren</li>
                    <li>Automatisches Zusammenführen von Tabellen mit Primary Key</li>
                    <li>Vorgefertigte <strong>KPI Templates</strong> nutzen</li>
                </ul>          
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_06.svg',
                        'Alle Auswertungen auf einen Blick',
                        70, 70, [
                            'style' => 'height:70px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered">Relevant</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Alle <strong>Callcenter KPI</strong> auf einen Blick</li>
                    <li>Auswertung von Warteschleifen und Erreichbarkeiten, Agenten, Anrufgründen</li>
                    <li>Kundenzufriedenheit und Callcenter-Performance auf einen Blick</li>
                </ul>   
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_02.svg',
                        'Skalierbar',
                        71, 70, [
                            'style' => 'height:70px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered">Skalierbar</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Schnelles Erstellen <strong>individueller Reportings</strong></li>
                    <li>Incremental Refresh ihrer Daten möglich</li>
                    <li>Daten bis zu einem Jahr rückwirkend auslesen</li>
                </ul>   
            </div>
        </div>

        <p class="btn-set btn-set--centered">
            <a href="#" class="btn btn--primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt 14 Tage testen" data-category="Link" data-action="opens sales modal">Jetzt 14 Tage testen</a>
        </p>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Tableau Telefon Connector</h2>
        
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_18_white.svg',
                            'Inkrementelle Datenaktualisierung',
                            64, 61, [
                                'style' => 'width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <p>Inkrementelle Datenaktualisierung</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_15_2_white.svg',
                            'Tableau Server fähig',
                            64, 65, [
                                'style' => 'width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <p>Tableau <br />Server fähig</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_29_white.svg',
                            'Import via Webdata Connector',
                            64, 51, [
                                'style' => 'width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <p>Import via <br />Webdata Connector</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_32_white.svg',
                            'Flexible Anfragezeiträume',
                            64, 62, [
                                'style' => 'width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <p>Flexible Anfragezeiträume wählbar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Darum CallOne</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/big_09.svg',
                    'Ausfallsicher',
                    64, 64, [
                        'style' => 'height:64px'
                    ]
                ); ?>
                <h3>Ausfallsicher</h3>
                <p>Wir kommen auf eine durchschnittliche Uptime von <strong>99,995%</strong>. Wir setzen auf <strong>Qualität</strong>, <strong>Sicherheit und Transparenz</strong>. Auf Wunsch erhalten Sie eigene SLA-Vereinbarungen.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_01.svg',
                    'Server in Deutschland',
                    63, 64, [
                        'style' => 'height:64px'
                    ]
                ); ?>
                <h3>Server in DE</h3>
                <p><strong>Sicherheit</strong> und <strong>Stabilität</strong> steht für uns <strong>an oberster Stelle</strong>. Unsere Server stehen verteilt in mehreren deutschen Hochsicherheitsrechenzentren.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_15.svg',
                    'Verschlüsselung',
                    58, 64, [
                        'style' => 'height:64px'
                    ]
                ); ?>
                <h3>Verschlüsselung</h3>
                <p>Wir sichern Gespräche mehrfach mit <strong>SRTP, TLS und VPN-Tunnel</strong> &ndash; <strong>kostenfrei</strong>! Zugleich bieten wir vielschichtige IP-Beschränkungen und Benutzerrechte.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--black" id="angebot">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <span class="sl sl-border-chat sl-size-xl topIcon white desktop-hidden"></span>
                <strong class="h3"><span class="light">Telefonische</span> Beratung</strong>
                <p>Sie interessieren sich für unsere Produkte oder haben noch offene Fragen? Gerne Helfen wir Ihnen weiter - <a href="tel:+493092033500" title="Gerne helfen wir Ihnen weiter" class="inline-link">030 920 33 500</a></p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/photos/grabellus-sw.png',
                    'Kontaktieren Sie uns zum Thema Tableau Callcenter Connector',
                    271, 400
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--order-3-xs co-grid__col--vcentered">
                <span class="sl sl-consultation sl-size-xl topIcon white desktop-hidden"></span>
                <strong class="h3">Persönliche <span class="light">Beratung</span></strong>
                <p>Wir melden uns zeitnah bei Ihnen per Telefon oder E-Mail zurück, beraten Sie und erstellen Ihnen gerne ein unverbindliches Angebot.</p>
                <div class="button-set">
                    <a href="#" class="button primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt Angebot anfordern" data-category="Link" data-action="opens sales modal">Jetzt Angebot anfordern</a>
                </div>  
            </div>
        </div>
    </div>

	<div class="section__content" id="faq">
		<?php
		$faqs->structured_data_get_code ();
		$faqs->html_get_code('toggle-box--on-black');
		?>
	</div>

    <div class="btn-set btn-set--centered">
        <a href="/faq/" class="btn btn--primary trackedElement" data-label="Button - Mehr FAQ" data-category="Link" data-action="linked to /faq/">Mehr FAQ</a>
    </div>
</div>