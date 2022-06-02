<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Was ist eine Helpdesk-Software?',
    '<p>Eine Helpdesk-Software wie Zendesk oder Freshdesk ermöglicht es Ihnen eingehende Kundenanfrage verschiedenster Kanäle an einer zentralen Stelle zu bearbeiten</p><p>Die Integration Ihrer Kundenservice-Telefonie in Ihr Helpdesk-Tool ist daher sehr interessant, um telefonische Kundenanfragen an zentraler Stelle zu inkludieren und trotzdem die Funktionen einer intelligenten ACD-Lösung zu nutzen.</p>'
);
$faqs->faq_add (
    'Was kostet die Anbindung von Apps an die ACD-Lösung?',
    '<p>Die Nutzung von fertigen Apps und Anbindungen an Drittsysteme wird unsererseits i.d.R. mit einer Grundgebühr berechnet.</p><p>Für die Anbindung Ihrer eigenen Systeme stehen wir Ihnen gerne projektseitig zur Seite und erstellen mit Ihnen gemeinsam einen Plan.</p>'
);
$faqs->faq_add (
    'Welche Einsatzmöglichkeiten bieten sich mit einer schnittstellenoffenen Callcenter Software?',
    '<p>Die Schnittstellen einer Callcenter-Software bieten Ihnen extrem viele Möglichkeiten: Über den Bezug von statistischen Rohdaten bis hin zur Automatisierung von Prozessen sind alle Möglichkeiten offen.</p><p>Kontaktieren Sie uns gerne mit Ihren individuellen Anforderungen!</p>'
);
?>

<div class="section section--light-green">
    <header class="hero">
        <div class="hero__text">
            <p><strong>CallOne im IT-Helpdesk</strong></p>
            <h1 style="margin-top:0">Zeitkiller einfach plattmachen</h1>
            <p class="bigtext">Schon wieder dieselbe Anfrage? Lösen Sie wiederkehrende Vorfälle automatisiert und transparent für alle. Spart Zeit, Geld und Nerven.</p>

            <p class="mobile-centered">
                <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Jetzt Demo buchen</a>
            </p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/helpdesk-hero-illustration.svg',
                'Helpdesk mit Callcenter Software und Cloud Telefonanlage',
                449, 320, [
                    'style' => 'display:block'
                ], false
            ); ?>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#helpdesk">Anbindung an Helpdesk-Software</a>
            <a href="#automatization">Automatisierung</a>
            <a href="#analysis">Analyse</a>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow centered mobile-left">
        <h2>Mit andockbaren Telefonlösungen helfen Sie besser und effizienter. </h2>
        <p class="bigtext">Die richtigen Telefontools <strong>für IT-Helpdesks</strong>.<br />Einsatzmöglichkeiten mit Ihrem <strong>Helpdesk</strong>:​</p>
    </div>

    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="helpdesk">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/helpdesk-illustration-1.svg',
                    'Helpdesk Unternehmenstelefonie',
                    420, 368
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Bei Gesprächsannahme Ticket</h2>
                <p class="bigtext">Servicedesk-Anbindung für Echtzeitübermittlung Ihrer Tickets.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="helpdesk-1" />
                    <label for="helpdesk-1">Fertige Anbindungen</label>
                    <div class="toggle-box__content">
                        Ob <a href="https://freshdesk.com/de/" title="Freshdesk" target="_blank" rel="noreferrer noopener" class="inline-link">Freshdesk</a>, <a href="https://www.atlassian.com/de/software/jira" title="Jira" target="_blank" rel="noreferrer noopener" class="inline-link">Jira</a> oder <a href="https://www.zendesk.de/" title="Zendesk" target="_blank" rel="noreferrer noopener" class="inline-link">Zendesk</a>, nutzen Sie unsere No-Code Applikationen für ein schnelles Zusammenführen von Anrufen und Tickets.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="helpdesk-2" />
                    <label for="helpdesk-2">Offene Schnittstellen</label>
                    <div class="toggle-box__content">
                        Sie haben Ihr eigenes Ticketsystem? Kein Problem! Gut dokumentierte API und fachkundige Schnittstellen-Techniker unterstützen Sie bei der Anbindung.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="helpdesk-3" />
                    <label for="helpdesk-3">Schneller Einsatz</label>
                    <div class="toggle-box__content">
                        Ihre bestehenden IT-Support Nummern müssen Sie nicht portieren oder austauschen. Leiten Sie sie einfach zu uns weiter und wir verteilen auf Ihre KollegInnen.
                    </div>
                </div>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="automatization">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--order-2-xs co-grid__col--vcentered">
                <h2>Telefonische Serviceanfragen in Hochgeschwindigkeit</h2>
                <p class="bigtext">Eine intuitiv bedienbare Oberfläche ermöglicht eine übersichtliche Steuerung und Verteilung Ihrer telefonischen Anfragen.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-1" />
                    <label for="automatisierung-1">Schluss mit Ticketwirrwar</label>
                    <div class="toggle-box__content">
                        Wir liefern Telefontickets wo Sie hingehören, in Ihre Servicedesk-Lösung und direkt mit Gesprächsannahme.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-2" />
                    <label for="automatisierung-2">Telefonieren wie sie wollen</label>
                    <div class="toggle-box__content">
                        Integrieren Sie die Telefonie in Ihr Lieblingstool, mit unserer Browser Extension oder fertigen Einbindungen in gängige Standardsoftware.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="automatisierung-3" />
                    <label for="automatisierung-3">Funktioniert auch unterwegs</label>
                    <div class="toggle-box__content">
                        Neben VoIP können Sie auch bequem Ihre Mobilfunkanschlüsse einbinden für mehr Flexibilität und Unabhängigkeit. 
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--order-1-xs co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/helpdesk-illustration-2.svg',
                    'Helpdesk in Unternehmenstelefonie',
                    420, 335
                ); ?>
            </div>
        </div>

        <div class="co-grid co-grid--no-margin-top co-grid--no-margin--bottom" id="analysis">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/illus/helpdesk-illustration-3.svg',
                    'Businesstelefonie mit Helpdesk',
                    420, 348
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <h2>Berichte und Metriken</h2>
                <p class="bigtext">Das vielleicht umfangreichste Berichtswesen rund um Ihre Serviceanfragen.</p>

                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-1" />
                    <label for="analyse-1">Service Level Agreements (SLA)</label>
                    <div class="toggle-box__content">
                        Richten Sie individuelle SLA-Richtlinien für Ihre Anfragekategorien ein und überwachen Sie Prioritäten.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-2" />
                    <label for="analyse-2">Live-Dashboards</label>
                    <div class="toggle-box__content">
                        Nutzen Sie unsere Live-Dashboards zur interaktiven Darstellung Ihrer Warteschlagen und Verfügbarkeiten und binden Sie diese mit offenen API in Ihre Überwachungsportale ein.
                    </div>
                </div>
                <div class="toggle-box toggle-box--checklist">
                    <input type="checkbox" id="analyse-3" />
                    <label for="analyse-3">Tableau-BI-Analyse</label>
                    <div class="toggle-box__content">
                        Fertige Konnektoren zu Tableau bieten den ultimativen Durchblick für alle datenaffinen Servicedesks.
                    </div>
                </div>
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