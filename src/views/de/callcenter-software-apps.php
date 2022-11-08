<?php
$product = new product ('Integration in Freshdesk', 'Integrieren Sie Ihren telefonischen Kundenservice direkt in den Freshdesk Service Desk. Automatische Voice Tickets für Anrufe, Click-to-Dial und die Integration von Anrufdaten in Ihre Kundendatensätzen machen Ihr Help Center maximal effizient.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/Freshdesk-app-icon.svg');
$product->structured_data_get_code ();

$product = new product ('Integration in Freshsales', 'Steigern Sie mit der Integration Ihrer Sales-Calls in FreshSales ganz einfach Ihre Verkaufszahlen. Mit Click-to-Dial löst Ihr Vertriebsteam Anrufe blitzschnell aus und eingehende Calls werden automatisch über unsere CTI-Integration erfasst und zugeordnet.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/Freshsales-app-icon.svg');
$product->structured_data_get_code ();

$product = new product ('Integration in Zendesk', 'Kombinieren Sie Zendesk mit einer starken Callcenter-Lösung und Telefonanlage und optimieren Sie Ihre Prozesse im Kundenservice: Für mehr Effizienz und bessere Kundenerlebnisse.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/Zendesk-app-icon.svg');
$product->structured_data_get_code ();

$product = new product ('Integration in Pipedrive', 'Lösen Sie Anrufe per Click to Dial direkt aus Ihrem Pipedrive CRM aus und haben Sie immer einen Blick auf die Anrufhistorie Ihrer Leads. Für effizientere Verkaufsprozesse und schneller abgeschlossene Leads.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/Pipedrive-app-icon.svg');
$product->structured_data_get_code ();

$product = new product ('Integration in Hubspot', 'Mit unserer Hubspot Telefonieintegration können Sie Verkaufsgespräche direkt aus Hubspot führen und alle Daten in Echtzeit mit Ihrem CRM synchronisieren. Ob Click-to-Dial für das Sales-Team oder Voice Tickets für den Support – Sie integrieren die Telefonie vollumfänglich in Ihre Hubspot Tools.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/Hubspot-app-icon.svg');
$product->structured_data_get_code ();

$product = new product ('Integration in Tableau', 'Nutzen Sie Ihre Telefoniedaten in der umfangreichen Auswertungs- und Statistiklösung von tableau. Prognosen erstellen, Trends erkennen und neue Chancen nutzen – Datenauswertungen und –analyse sind der Schlüssel zu Ihrem Erfolg. Alle Reportings lassen sich komplett individuell erstellen und visualisieren.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/Tableau-app-icon.svg');
$product->structured_data_get_code ();

$product = new product ('Integration in Power BI', 'Erstellen Sie aufwendige Dashboards, die komplexe Prognosen zu Auslastung und Callvolumen zulassen. Erleben sie bessere Planbarkeit ihrer Agenten und eine optimale Auswertung.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/PowerBI-app-icon.png');
$product->structured_data_get_code ();

$product = new product ('Integration in Qlik Sense', 'Nutzen sie ausgefeilte AI-Funktionen und die assoziative Analyse-Engine um tiefe Einblicke in Telefoniedaten zu bekommen. Treffen sie bessere Entscheidungen durch datengesteuerte Echtzeitanalysen.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/QlikSense-app-icon.png');
$product->structured_data_get_code ();

$product = new product ('Integration in Google Data Studio', 'Werten sie Telefoniedaten standortübergreifend mit der cloudbasierten Google BI-Software aus. Integrieren sie nahtlos in bestehende Dashboards und Auswertungen, um eine vielschichtigere Optimierung zu ermöglichen.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/GoogleDataStudio-app-icon.png');
$product->structured_data_get_code ();

$product = new product ('Integration in Excel Data Connector', 'Nutzen sie die Pivot-Funktionen von Excel um in gewohnter Umgebung umfangreiche Datenanalysen durchzuführen. Keine teure BI-Software notwendig, alle Rohdaten stehen genauso in Excel zur Verfügung.');
$product->image_set ('https://www.callone.de/assets/images/logo/productlogos/ExcelDataConnector-app-icon.png');
$product->structured_data_get_code ();
?>

<div class="section section--light-grey">
    <div class="hero">
        <div class="hero__text">
            <h1>
                CallOne mit Ihrem <br class="mobile-hidden" />
                CRM &amp; CTI<br />
                Ein System, alles drin
            </h1>
            <p class="bigtext">Einmal mit allem, bitte. Ihr CRM- und andere Business-Lösungen sind in Ihre Telefonie integriert. Sie erstellen auf Knopfdruck CTI-Anbindungen.</p>

            <p>
                <a class="btn btn--primary trackedContactModal" href="#" data-openmodal="contact-sales">Jetzt Demo buchen</a>
            </p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/CRM-hero-illustration.svg',
                'Callcenter Software mit CTI-Anbindungen',
                553, 446, [
                    'style' => 'width:100%'
                ], false
            ); ?>
        </div>
    </div>
</div>

<div class="section">
	<div class="anchors">
		<div class="anchors__title">
			<strong>Schnelleinstieg:</strong> Was interessiert dich?
		</div>
		<div class="anchors__links">
			<a href="#crm_ticketing">CRM und Ticketing</a>
			<a href="#data_analysis">Reporting und Statistiken</a>
		</div>
	</div>
</div>

<div class="section" id="crm_ticketing">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Integrationen für CRM und Ticketing</h2>
        <p class="bigtext centered mobile-left">
            Alle dürfen mitspielen. <br class="mobile-hidden">
            Auch Ihre Lieblings-Businesslösung.
        </p>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Freshdesk-app-icon.svg',
                                'CallOne Contact Center Software mit Freshdesk Anbindung',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Freshdesk</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Integrieren Sie Ihren telefonischen Kundenservice direkt in den Freshdesk Service Desk. <span class="readmore">Automatische Voice Tickets für Anrufe, Click-to-Dial und die Integration von Anrufdaten in Ihre Kundendatensätzen machen Ihr Help Center maximal effizient.</span></p>
                    <p class="btn-set btn-set--spread">
                        <a href="/freshdesk-callcenter-software" class="btn btn--border-bottom btn--arrow-right-small">Infos</a>
                        <a href="https://www.freshworks.com/apps/freshdesk/call_center_connector_for_voice_ticket_integration/" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Marketplace</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Freshsales-app-icon.svg',
                                'CallOne Contact Center Software mit Freshsales Anbindung',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Freshsales</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Steigern Sie mit der Integration Ihrer Sales-Calls in FreshSales ganz einfach Ihre Verkaufszahlen. <span class="readmore">Mit Click-to-Dial löst Ihr Vertriebsteam Anrufe blitzschnell aus und eingehende Calls werden automatisch über unsere CTI-Integration erfasst und zugeordnet.</span></p>
                    <p class="btn-set">
                        <a href="https://www.freshworks.com/apps/freshdesk/call_center_connector_for_voice_ticket_integration/" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Marketplace</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Zendesk-app-icon.svg',
                                'CallOne Contact Center Software mit Zendesk Anbindung',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Zendesk</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Kombinieren Sie Zendesk mit einer starken Callcenter-Lösung und Telefonanlage und optimieren Sie Ihre Prozesse im Kundenservice: Für mehr Effizienz und bessere Kundenerlebnisse.<br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"></p>
                    <p class="btn-set btn-set--spread">
                        <a href="/zendesk-cti-ticketing" class="btn btn--border-bottom btn--arrow-right-small">Infos</a>
                        <a href="https://www.zendesk.com/marketplace/apps/support/75986/cloud-acd/" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Marketplace</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Pipedrive-app-icon.svg',
                                'CallOne Contact Center Software mit Pipedrive Anbindung',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Pipedrive</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Lösen Sie Anrufe per Click to Dial direkt aus Ihrem Pipedrive CRM aus und haben Sie immer einen Blick auf die Anrufhistorie Ihrer Leads. Für effizientere Verkaufsprozesse und schneller abgeschlossene Leads.<br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"></p>
                    <p class="btn-set">
                        <a href="https://www.pipedrive.com/en/marketplace/app/call-one/38e77507e5562334" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Marketplace</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Hubspot-app-icon.svg',
                                'CallOne Contact Center Software mit Hubspot Anbindung',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Hubspot</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Mit unserer Hubspot Telefonieintegration können Sie Verkaufsgespräche direkt aus Hubspot führen und alle Daten in Echtzeit mit Ihrem CRM synchronisieren. <span class="readmore">Ob Click-to-Dial für das Sales-Team oder Voice Tickets für den Support – Sie integrieren die Telefonie vollumfänglich in Ihre Hubspot Tools.</span><br class="mobile-hidden"><br class="mobile-hidden"></p>
                    <p class="btn-set">
                        <a href="https://blog.hubspot.de/service/call-center-software" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Hubspot Blog</a>
                    </p>
                </div>
            </div>

            <!--
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Jira-Service-Desk-app-icon.svg',
                                'CallOne Contact Center Software mit Jira Anbindung',
                                50, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Jira Service Desk</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Wählen Sie direkt aus Ihrem Jira Service Desk CRM oder erhalten Sie eingehende Anrufe in Echtzeit zugeordnet dargestellt. <span class="readmore">Optimieren Sie mit der Jira Service Desk Integration Ihren Kundenkontakt und Ihre Geschäftsprozesse.</span></p>
                    <p>
                        <b><i>Coming Soon!</i></b>
                    </p>
                </div>
            </div>
            -->

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/logo-microsoft-dynamics.svg',
                                'Passen Sie Ihre Geschäftsabläufe an, und fördern Sie Innovationen mit einem hypervernetzten Unternehmen',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Microsoft Dynamics</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Microsoft Dynamics Telefonie (CTI) über fertige Integration mittels Channel Integration Framework. Ein- und ausgehende Anrufe signalisieren und mit den Kontaktdatensätzen matchen.<br class="mobile-hidden" /><br class="mobile-hidden" /></p>
                    <p class="btn-set">
                        <a href="https://dynamics.microsoft.com/de-de/" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Business-Informationen</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section" id="data_analysis">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">
            Apps für Reports, Wallboards, Statistiken
        </h2>
        <p class="bigtext centered mobile-left">
            Richtig Spaß macht: <br class="mobile-hidden" />
            Ungenutzte Potenziale entdecken
        </p>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md" id="tableau">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Tableau-app-icon.svg',
                                'CallOne Callcenter Software Tableau App',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Tableau</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Nutzen Sie Ihre Telefoniedaten in der umfangreichen Auswertungs- und Statistiklösung von Tableau. <span class="readmore">Prognosen erstellen, Trends erkennen und neue Chancen nutzen – Datenauswertungen und –analyse sind der Schlüssel zu Ihrem Erfolg. Alle Reportings lassen sich komplett individuell erstellen und visualisieren.</span></p>
                    <p class="btn-set btn-set--spread">
                        <a href="/tableau-callcenter-connector" class="btn btn--border-bottom btn--arrow-right-small">Infos</a>
                        <a href="https://www.tableau.com/partners/search?company-name=callone" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Partnercenter</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/PowerBI-app-icon.png',
                                'CallOne Callcenter Software Power BI App',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Power BI</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Erstellen Sie aufwendige Dashboards, die komplexe Prognosen zu Auslastung und Callvolumen zulassen. <span class="readmore">Erleben sie bessere Planbarkeit ihrer Agenten und eine optimale Auswertung.</span><br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"></p>
                    <p class="btn-set">
                        <a href="https://docs.microsoft.com/de-de/power-bi/connect-data/power-bi-data-sources" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Datenquellen</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/QlikSense-app-icon.png',
                                'CallOne Callcenter Software Qlik Sense App',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Qlik Sense</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Nutzen sie ausgefeilte AI-Funktionen und die assoziative Analyse-Engine um tiefe Einblicke in Telefoniedaten zu bekommen. Treffen sie bessere Entscheidungen durch datengesteuerte Echtzeitanalysen.<br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"></p>
                    <p class="btn-set">
                        <a href="https://www.qlik.com/de-de/products/qlik-sense/data-sources" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Datenquellen</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/GoogleDataStudio-app-icon.png',
                                'CallOne Callcenter Software Google Data Studio App',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Google Data Studio</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Werten sie Telefoniedaten standortübergreifend mit der cloudbasierten Google BI-Software aus. <span class="readmore">Integrieren sie nahtlos in bestehende Dashboards und Auswertungen, um eine vielschichtigere Optimierung zu ermöglichen.</span></p>
                    <p class="btn-set">
                        <a href="https://datastudio.google.com/data" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Datenquellen</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/ExcelDataConnector-app-icon.png',
                                'CallOne Callcenter Software Excel Data Connector App',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Excel Data Connector</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Nutzen sie die Pivot-Funktionen von Excel um in gewohnter Umgebung umfangreiche Datenanalysen durchzuführen. Keine teure BI-Software notwendig, alle Rohdaten stehen genauso in Excel zur Verfügung.<br class="mobile-hidden"><br class="mobile-hidden"><br class="mobile-hidden"></p>
                    <p class="btn-set">
                        <a href="https://support.microsoft.com/en-us/office/create-edit-and-manage-connections-to-external-data-89d44137-f18d-49cf-953d-d22a2eea2d46" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Datenquellen</a>
                    </p>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/logo/productlogos/Geckoboard-app-icon.svg',
                                'CallOne Callcenter Software Geckoboard App',
                                64, 64, [
                                    'style' => 'max-width:64px;max-height:64px'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Geckoboard</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Erstellen Sie vollkommen individuelle Wallboards aus Ihren Anrufdaten. <span class="readmore">Per Drag & Drop lassen sich Ansichten wie Erreichbarkeit oder Anzahl der verfügbaren AgentInnen einfach zusammenfügen. Sehen sie alle KPIs auf einen Blick und optimal für sie dargestellt.</span></p>
                    <p class="btn-set">
                        <a href="https://www.geckoboard.com/dashboard-examples/support/call-center-dashboard/" target="_blank" class="btn btn--border-bottom btn--arrow-right-small">Datenquellen</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left" style="margin-top:0">
            Schnelle und professionelle<br class="mobile-hidden" />
            Implementierung mit <span class="color-green">100% Datenschutz</span>
        </h2>

        <div class="co-grid centered">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="content-box content-box--white">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/usp-speed-icon.svg',
                            'Call Center Software wird schnell bereitgestellt',
                            161, 50, [
                                'style' => 'height: 50px'
                            ]
                        ); ?>
                    </p>
                    <br>
                    <h3>Bereitstellung in wenigen Tagen statt Monaten</h3>
                    <p>Ärgern Sie sich nicht mit Self-Service herum. An Ihre Organisation angepasste Telefonie-Lösungen kann CallOne dank erfahrener Projektmanager &amp; Schnittstellenentwickler in kürzester Zeit live bringen.</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="content-box content-box--white">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/usp-germany-icon.svg',
                            'Call Center Software mit hohem deutschen Datenschutzstandard',
                            44, 50, [
                                'style' => 'height: 50px'
                            ]
                        ); ?>
                    </p>
                    <br>
                    <h3>Telefonie mit deutschem Datenschutz-Standard</h3>
                    <p>Das Privacy Shield Abkommen zwischen USA und EU ist nun gekippt. Zum Glück sind Sie mit CallOne immer auf der sicheren Seite: Wir hosten unsere Telefonie-Lösung ausschließlich in Deutschland.</p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="content-box content-box--white">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/usp-availability-icon.svg',
                            'Call Center Software ist sehr gut erreichbar',
                            92, 50, [
                                'style' => 'height: 50px'
                            ]
                        ); ?>
                    </p>
                    <br>
                    <h3>Garantierte <br class="mobile-hidden" />99,999% <br class="mobile-hidden" />Erreichbarkeit</h3>
                    <p>Dank Backup-Server, umfangreichem DDoS-Schutz und individueller Redundanzkonzepte laufen CallOne Lösungen stabil und sind rund um die Uhr für Sie und Ihre Kunden erreichbar.</p>
                </div>
            </div>
        </div>
    </div>
</div>