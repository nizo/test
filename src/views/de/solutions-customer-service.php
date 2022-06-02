<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Wie funktioniert eine Call Center Software mit Schnittstellen?',
    '<p>Ihre eigenen Businesslösungen können Sie entweder über unsere offenen API-Schnittstellen selbst oder in Zusammenarbeit mit uns anbinden. Für viele gängige Businesslösungen wie z.B. Ticketing-, Sales- oder BI-Tools bieten wir bereits fertige Applikationen an.</p><p>Eine Anbindung kann ganz nach Ihren Wünschen erfolgen. Basic Funktionn beinhalten meist das Erstellen von Voice Tickets für eingehende und ausgehende Anrufe und das Matching dieser Tickets mit Kontakten und Usern. Auch umfangreiche Anbindungen mit Routing-Rückfrage, der Abfrage von Kundennummern oder vollautomatisierte Prozessen sind denkbar.</p>'
);
$faqs->faq_add (
    'Was ist der Vorteil beim Einsatz einer Telefonanlage mit offenen Schnittstellen?',
    '<p>Wenn Sie eine Telefonanlage mit offenen Schnittstellen einsetzen, sind Sie nicht auf die Funktionen und Features limitiert, die Ihnen Ihr Telefonieanbieter bereitstellt.</p><p>Die Möglichkeiten sind hier extrem umfangreich. Sie können beispielsweise noch tiefgreifendere Auswertungen durch die Abfrage von Call-Rohdaten erstellen, Prozess in der Telefonie automatisieren oder tägliche Aufgaben (z.B. neue Nutzer anlegen) in Drittsysteme integrieren.</p>'
);
$faqs->faq_add (
    'Welche Einsatzmöglichkeiten und Funktionen bietet die CallOne Voice-API?',
    '<p>Die CallOne Voice-API bietet vielzählige Optionen in verschiedenen Bereichen. Interne Prozess können automatisiert werden (z.B. die Pflege von Anruferlisten) und weitreichende Informationen zu Anrufen über Rohdaten abgefragt und in andere Systeme integriert werden.</p><p>Desweiteren können Sie unsere API nutzen, um Anrufprozesse intelligenter zu gestalten oder in Teilen zu automatisieren. Ein gutes Beispiel ist hierfür eine automatische Bestellannahme mit Abgleich der Daten in Ihrem CRM-System.</p>'
);
?>

<div class="section section--light-green">
    <header class="hero">
        <div class="hero__text">
            <p><strong>CallOne im telefonischen Kundenservice</strong></p>
            <h1 style="margin-top:0">Geben Sie Ihren Kunden, was sie verdienen</h1>
            <p class="bigtext">Customer Service, der auf die Ihre Kunden angepasst ist – automatisiert und trotzdem persönlich.</p>

            <div class="mobile-centered">
                <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Jetzt Demo buchen</a>
            </div>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/customer-service-hero-illustration.svg',
                'Lösung für Ihren Kundenservice mit Kundenservice Software',
                549, 422, [], false
            ); ?>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#automatization">Automatisierung</a>
            <a href="#analysis">Analyse</a>
            <a href="#collaboration">Zusammenarbeit</a>
            <a href="#alarm">Alarmierung</a>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide centered mobile-left">
        <h2>KI, APIs, Apps:<br />Der Roboter-Turbo für Ihre Kundenkommunikation</h2>

        <p class="bigtext">Automatisierte Telefonie von morgen <strong>für Ihren Kundenservice</strong>.<br />Erfahren Sie wie <strong>Contact Center</strong> CallOne verwenden.</p>
    </div>

    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="automatization">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/customer-service-illustration-1.svg',
                    'Automatisierung im Kundenservice mit Callcenter Software',
                    420, 444
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Automatisierung</h2>
                <p class="bigtext">Kundenservice auf Spitzenniveau mit kleinen Hilfen, die dir das Leben erleichtern werden</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-1" />
                    <label for="automatisierung-1">Voice Bots optimieren Ihre Arbeitsabläufe</label>
                    <div class="toggle-box__content">
                        Alle Kundenanfragen in kürzester Zeit lösen: <a href="/callcenter-bot" title="Voice Bot" class="inline-link">Voice Bots</a> qualifizieren Anruferanliegen vor, geben sprachbasiert FAQ wieder und übermitteln voreingestellte Infos automatisch.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-2" />
                    <label for="automatisierung-2">Personalisierte Anruferlebnisse</label>
                    <div class="toggle-box__content">
                        Mit intelligentem Routing, Last Agent Routing und Anbindungen an Ihre CRM- und Ticketing-Systeme, können Sie Kunden ganz automatisch zum richtigen Ansprechpartner leiten.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-3" />
                    <label for="automatisierung-3">Verpassen Sie keinen einzigen Anruf mehr</label>
                    <div class="toggle-box__content">
                        Warteschleifen vermeiden Sie in Zukunft vollständig oder sie sind so intelligent und informativ, dass Anrufer in der Leitung bleiben. Wenn Sie wollen ruft das System Ihre Anrufer auch automatisch zurück – zur Wunschzeit außerhalb Ihrer Anrufpeaks versteht sich. 
                    </div>
                </div>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="analysis">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <h2>Analyse</h2>
                <p class="bigtext">Unsere Datengrundlage hilft Ihnen nicht nur dabei Anruferanliegen besser zu bearbeiten, sondern auch Ihre gesamten Prozesse zu verbessern.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-1" />
                    <label for="analyse-1">Analysieren Sie Agenten und Anruferanliegen gleichzeitig</label>
                    <div class="toggle-box__content">
                        Umfangreiche Auswertungen geben Ihnen Aufschluss darüber, warum Anrufer Sie kontaktieren und welche Performance Ihre Agenten bei der Bearbeitung der Anrufanliegen erbringen.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-2" />
                    <label for="analyse-2">Kundendaten in Echtzeit erfassen</label>
                    <div class="toggle-box__content">
                        Nutzen Sie das vielleicht umfangreichste Angebot statistischer Auswertungsmöglichkeiten am Markt. Mit knapp 100 Echtzeitstatistiken, Daten-Exporten und Statistik Schnittstellen  haben Sie einfach alles im Blick.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-3" />
                    <label for="analyse-3">Dokumentieren und Analysieren</label>
                    <div class="toggle-box__content">
                        Anrufgründe zu dokumentieren und Gespräche auf Knopfdruck aufzuzeichnen, ermöglicht Ihnen weitreichende Analysen Ihrer Customer Experience.
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/customer-service-illustration-2.svg',
                    'Analyse in Kundenservice Software',
                    420, 456
                ); ?>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="collaboration">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/customer-service-illustration-3.svg',
                    'Callcenter Software von CallOne',
                    420, 338
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Ihr Callcenter mit CallOne</h2>
                <p>Nutzen Sie unsere fertigen Tools.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="callcenter-1" />
                    <label for="callcenter-1">Fertige Apps für effizienten Multichannel-Kundenservice </label>
                    <div class="toggle-box__content">
                        Binden Sie Anrufe in <a href="/callcenter-software-apps" title="Apps">Ihr Lieblings-Helpdesk, Ticketing- oder CRM-Lösung</a> ein und optimieren Sie so Ihre Kundeninteraktion über alle Kommunikationskanäle.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="callcenter-2" />
                    <label for="callcenter-2">Verbinden Sie sich und unsere Plattform</label>
                    <div class="toggle-box__content">
                        Verbinden Sie sich mit Kunden überall dort, wo sie mit Ihnen interagieren möchten. Wir bieten eine <a href="/voip-api" title="VoIP API">schnittstellenoffene Telefonplattform</a> zur Anbindung Ihrer Businesslösungen.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="callcenter-3" />
                    <label for="callcenter-3">Flexible Anbindung in Ihrer IT-Infrastruktur</label>
                    <div class="toggle-box__content">
                        Unser Telefon läuft auch in Ihrem CRM. Sie entscheiden, wie Sie mit CallOne telefonieren wollen: Im Browser, mit einem IP-Telefon auf dem Handy oder eingebunden in Ihre Systeme..
                    </div>
                </div>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="alarm">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <h2>Alternative Kanäle</h2>
                <p>Nutzen Sie neben dem klassischen Anruf über eine Rufnummer alternative Kanäle für Ihre Kunden.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="alarmierung-1" />
                    <label for="alarmierung-1">SMS API</label>
                    <div class="toggle-box__content">
                        Über die Schnittstelle schicken Sie SMS an Ihre Kunden, um sie zu authentifizieren oder sie über ihren Lieferstatus zu informieren.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="alarmierung-2" />
                    <label for="alarmierung-2">Callback API</label>
                    <div class="toggle-box__content">
                        Empfangen Sie Anrufe über einen Callback-Button auf Ihrer Website und statten Sie ihn mit Wahlfeldern, Routings oder Text-to-Speech aus.
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/customer-service-illustration-4.svg',
                    'CallOne Call Center Software',
                    420, 448
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