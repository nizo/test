<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Wie kann ich CallOne für mein Inside-Sales Team nutzen?',
    '<p>Nutzen Sie die CallOne Callcenter-Software und VoIP-Telefonanlage, um Ihr Sales-Team optimal mit Tools für die Outbound- und Inbound-Telefonie auszustatten.</p><p>Neben den Telefonie-Lösungen empfehlen wir die Anbindung der für Sie relevanten Sales-Tools, insbesondere, um Ihren Agents Click2Dial und das automatisierte Erstellen von Voice Tickets aus Ihren Systemen heraus zu ermöglichen.</p>'
);
$faqs->faq_add (
    'Welche Funktionen bietet CallOne speziell für Salesteams?',
    '<p>Speziell für Ihr Sales-Team bietet die Lösungen Optionen für die Implementierung eines Power Dialers, einer Integration in Ihre CRM-Systeme und Click2Dial Features.</p><p>Außerdem können Sie bei CallOne alle notwendigen lokalen wie internationalen Rufnummern schalten, Optionen wie Gesprächsaufzeichnung und Silent Coaching für Schulungszwecke nutzen und Ihre Sales-Telefonie auf intelligenten Routingmodulen aufbauen.</p>'
);
$faqs->faq_add (
    'Wie schnell können wir mit CallOne starten?',
    '<p>Ein schneller Start ist jederzeit möglich! Kontaktieren Sie uns einfach mit Ihren individuellen Anforderungen für ein Erstgespräch und ein Start ist sehr wahrscheinlich schon in den nächsten Tagen möglich.</p>'
);
?>

<div class="section section--light-green">
    <header class="hero">
        <div class="hero__text">
            <p><strong>CallOne im Sales</strong></p>
            <h1 style="margin-top:0">Hier kommt die Kohle rein</h1>
            <p class="bigtext">Power für Ihre Moneymaker – mehr Abschlüsse durch Automatisierung und Tracking</p>

            <p class="mobile-centered">
                <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Jetzt Demo buchen</a>
            </p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/sales-hero-illustration.svg',
                'Telekommunikationslösung für Sales',
                560, 516, [], false
            ); ?>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#integrations">Integration &amp; API</a>
            <a href="#automatization">Automatisierung</a>
            <a href="#analysis">Analyse</a>
            <a href="#reporting">Reporting</a>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow centered mobile-left">
        <h2>Vertrieb wird einfacher und besser, wenn man nicht alles selbst machen muss.</h2>
        <p class="bigtext">Die richtigen Telefontools <strong>für Ihre Salesabteilung</strong>.<br />Einsatzmöglichkeiten für Ihr <strong>Salesteam</strong>:</p>
    </div>

    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="integrations">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/sales-illustration-1.svg',
                    'Callcenter Software und Businesstelefonie für Sales',
                    420, 441
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Passgenau die richtigen Informationen</h2>
                <p class="bigtext">CallOne ist für Sie mit Erfahrungswerten und Best Practices vorkonfiguriert, mit offenen Schnittstellen und Integrationen, die Sie auf Knopfdruck mit der Callcenter Software verbinden.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="integrations-1" />
                    <label for="integrations-1">Apps</label>
                    <div class="toggle-box__content">
                        Sie nutzen weiterhin die <a href="/callcenter-software-integrationen" title="Apps" class="inline-link">Apps</a>, die für Sie funktionieren, nur eben eingebettet in Ihre Telefonie-Umgebung.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="integrations-2" />
                    <label for="integrations-2">Schnittstellen</label>
                    <div class="toggle-box__content">
                        Nutzen Sie fertige Konnektoren zu <a href="https://www.salesforce.com/de/" title="Salesforce Webseite" target="_blank" rel="noreferrer noopener" class="inline-link">Salesforce</a>, <a href="https://www.pipedrive.com/de" title="Pipedrive Webseite" target="_blank" rel="noreferrer noopener" class="inline-link">Pipedrive</a> etc. oder binden Sie Ihre hauseigenen Lösungen an.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="integrations-3" />
                    <label for="integrations-3">Integrationen</label>
                    <div class="toggle-box__content">
                        Mit einem Klick den richtigen Partner in der Leitung: Browser Extensions für <a href="https://chrome.google.com/webstore/detail/callone-voip-softphone/cedionilkklbngbmlnipangpipeficfo" title="Chrome Extension" target="_blank" rel="noreferrer noopener" class="inline-link">Chrome</a>, <a href="https://microsoftedge.microsoft.com/addons/detail/callone-voip-softphone/jeollcclhnpejdihkhengipjejjjjfbm" title="Edge Extension" target="_blank" rel="noreferrer noopener" class="inline-link">Edge</a> und <a href="https://addons.mozilla.org/de/firefox/addon/callone/" title="Firefox Extension" target="_blank" rel="noreferrer noopener" class="inline-link">Firefox</a> machen Ihren Job übersichtlicher und bequemer.
                    </div>
                </div>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="automatization">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <h2>Automatisierung</h2>
                <p class="bigtext">So gewinnt man Stammkunden</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-1" />
                    <label for="automatisierung-1">Anrufe per Klick</label>
                    <div class="toggle-box__content">
                        Mit einem Klick rufen Sie einfach er VoIP aus dem Browser heraus an. Das spart lästiges Wählen und schließt Fehler aus.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-2" />
                    <label for="automatisierung-2">Kampagnen ohne IT-Kenntnisse</label>
                    <div class="toggle-box__content">
                        Nutzen Sie unsere Schnittstellen für das Befüllen Ihrer Outbound-Kampagnen und überlassen Sie uns das automatische Anwählen​.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-3" />
                    <label for="automatisierung-3">Dialer im Takt</label>
                    <div class="toggle-box__content">
                        Mit Dialer-Funktionen wählen Sie automatisiert Kunden an. Anrufer können automatisch auf Anruflisten gesetzt und wieder entfernt werden.
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/sales-illustration-2.svg',
                    'Sales Telefonielösung',
                    420, 445
                ); ?>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="analysis">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/sales-illustration-3.svg',
                    'Datenanalyse für Sales',
                    420, 348
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Datenanalyse mit Handumdrehen</h2>
                <p class="bigtext">Immer ganz genau wissen, was passiert: Mit dem vielleicht umfangreichsten Portfolio an Statistiken ziehen Sie fundierte Rückschlüsse und optimieren Ihre Kampagnen.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-1" />
                    <label for="analyse-1">Immer aktuelle Daten</label>
                    <div class="toggle-box__content">
                        Analysen und erkunden Sie das volle Potenzial Ihrer Daten mit Livedaten für sekundengenaue Berechnung Ihrer Sales KPI.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-2" />
                    <label for="analyse-2">Analytics für Jeden</label>
                    <div class="toggle-box__content">
                        Wählen sie aus über 100 Livestatistiken und werten Sie alles rund um die Performance ihres Teams aus​.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-3" />
                    <label for="analyse-3">Der Kunde im Mittelpunkt</label>
                    <div class="toggle-box__content">
                        Dynamisches Call-Tracking führt Anrufe auf Ihrer Bestellhotline eindeutig mit einer Websession zusammen. Dadurch haben sie bereits alle Informationen zum Anrufer vorliegen, bevor Sie mit ihm sprechen.
                    </div>
                </div>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="reporting">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <h2>Ergebnisse im Blick: Ihre Kennzahlen für die gesamte Telefonie</h2>
                <p class="bigtext">Langfristiger Erfolg beginnt mit zufriedenen Kunden. Entdecken Sie neue Potenziale, die sich bisher in undurchsichtigen Daten versteckt hielten. Mit unseren Reporting-Tools haben Sie alles im Blick.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="reporting-1" />
                    <label for="reporting-1">Echtzeitstatistiken im Sekundentakt </label>
                    <div class="toggle-box__content">
                        Neben harten Kennzahlen liefern wir alle relevanten Auswertungen Ihrer Agenten, Rufnummern und Skillgruppen in einer Oberfläche.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="reporting-2" />
                    <label for="reporting-2">BI-Tools für interaktive Analysen</label>
                    <div class="toggle-box__content">
                        Unsere Statistiken reichen ihnen nicht? Nutzen Sie doch einfach das BI-Tool Ihrer Wahl oder unseren fertigen Konnektor zu <a href="/tableau-callcenter-connector" title="Tableau Konnektor" target="_blank" rel="noreferrer noopener" class="inline-link">Tableau</a>, um die für Sie passgenauen Auswertungen zu erhalten.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="reporting-3" />
                    <label for="reporting-3">Live-Wallboards und -Dashboards</label>
                    <div class="toggle-box__content">
                        Echtzeitansichten Ihrer KPI, Verfolgung laufender Gespräche, Auslastung Ihres Salesteams – anpassbar an Ihre individuellen Bedürfnisse.
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/sales-illustration-4.svg',
                    'KPI und Echtzeiteinsichten für Businesstelefonie im Sales',
                    420, 351
                ); ?>
            </div>
        </div>
    </div>

    <div class="section__content">
        <h2>Fragen und Antworten</h2>

        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ();
        ?>
    </div>
</div>

<div class="section section--dark-green-black">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">
            Schnelle und professionelle<br />
            Implementierung mit <span class="color-green">100% Datenschutz</span>
        </h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md card">
                <div class="content-box content-box--white content-box--small-padding">
                    <p class="centered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/usp-speed-icon.svg',
                            'Call Center Software wird schnell bereitgestellt',
                            161, 50, [
                                'style' => 'height: 50px;'
                            ]
                        ); ?>
                    </p>
                    <br />
                    <h3>Bereitstellung in wenigen Tagen statt Monaten</h3>
                    <p>Ärgern Sie sich nicht mit Self-Service herum. An Ihre Organisation angepasste Telefonie-Lösungen kann CallOne dank erfahrener Projektmanager &amp; Schnittstellenentwickler in kürzester Zeit live bringen.</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md card">
                <div class="content-box content-box--white content-box--small-padding">
                    <p class="centered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/usp-germany-icon.svg',
                            'Call Center Software mit hohem deutschen Datenschutzstandard',
                            44, 50, [
                                'style' => 'height: 50px;'
                            ]
                        ); ?>
                    </p>
                    <br />
                    <h3>Telefonie mit deutschem DSGVO-Standard</h3>
                    <p>Das Privacy Shield Abkommen zwischen USA und EU ist nun gekippt. Zum Glück sind Sie mit CallOne immer auf der sicheren Seite: Wir hosten unsere Telefonie-Lösung ausschließlich in Deutschland.</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md card">
                <div class="content-box content-box--white content-box--small-padding">
                    <p class="centered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/usp-availability-icon.svg',
                            'Call Center Software ist sehr gut erreichbar',
                            92, 50, [
                                'style' => 'height: 50px;'
                            ]
                        ); ?>
                    </p>
                    <br />
                    <h3>Garantierte <br />99,999% <br />Erreichbarkeit</h3>
                    <p>Dank Backup-Server, umfangreichem DDoS-Schutz und individueller Redundanzkonzepte laufen CallOne Lösungen stabil und sind rund um die Uhr für Sie und Ihre Kunden erreichbar.</p>
                </div>
            </div>
        </div>
    </div>
</div>