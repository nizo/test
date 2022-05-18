<?php
$product = new product ('VoIP-Telefonanlage', 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager');
$product->image_set ('https://callone.de/assets/images/photos/voip-telefonanlage.webp');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
    'Was kostet unsere Cloud Telefonanlage?',
    '<p>Wir starten ab 10 Mitarbeitern und ab 7,90 € je Nebenstelle. Hinzu kommen nutzungsabhängige Kosten und Zusatzfunktionen wie Call Center Software, Schnittstellen und Rufnummern. Sie können stets auf unsere Projektmanager zurückgreifen, die wir pauschal oder zeitbasiert abrechnen. Da wir uns als Lösungsanbieter mit einem sehr breiten Portfolio verstehen erhalten Sie von uns stets ein passgenaues Angebot zugeschnitten auf Ihre individuellen Anforderungen. Vereinbaren Sie <a href="#" data-openmodal="contact-sales">hier</a> gerne ein erstes unverbindliches Beratungsgespräch.</p>'
);
$faqs->faq_add (
    'Wie kann ich mit CallOne sparen?',
    '<p>Wir sind sicher nicht der günstigste Anbieter am Markt. Fragt man jedoch unsere Kunden sparen Sie mit CallOne täglich eine Menge Geld. Wie? Mit smarten Telefonanlagenfunktionen in Paarung mit optimalem Consulting durch unsere Projektmanager. Schlagworte sind hier: <a href="/statistiken">Effizientere Personalsteuerung</a>,  <a href="/callcenter-bot">Kürzere Gesprächsdauern durch Automatisierung</a>, <a href="/telefonanlage-mit-warteschleife">Wettbewerbsvorteile durch erfolgreichen Kundenservice</a>.</p>'
);
$faqs->faq_add (
    'Was unterscheidet CallOne von alternativen Telefonanlagen-Anbietern?',
    '<p>Wir bieten Ihnen das vielleicht breiteste Portfolio rundum die Cloud Telefonie. Natürlich versorgen wir Ihr Unternehmen problemlos mit Basics wie Cloud Telefonanlagen, SIP-Trunks, Rufnummernschaltung und Portierung. Und wenn Sie für Ihren Kundenservice und Ihre Inside-Sales Abteilung eine maßgeschneiderte Call Center Software wollen, bieten wir Ihnen auch das.</p><p>Bei CallOne stehen Sie als Kunde wirklich im Mittelpunkt: Unsere Projektmanager und Schnittstellenprogrammierer erstellen eine Kommunikationslösung, die genau zu Ihrem Bedarf und Ihren Ansprüchen passt.</p><p>Im Ergebnis stehen wir für ein Einsparpotential, dass sich durch mehr Effizienz, besserer Planbarkeit und Transparenz und damit schlussendlich einem nachweisbaren höheren ROI ergibt.</p>'
);
$faqs->faq_add (
    'Wie läuft die Zusammenarbeit mit CallOne?',
    '<p>Wir richten uns an Unternehmen für die telefonische Erreichbarkeit nicht nur ein Kosten-, sondern vor allem ein Erfolgsfaktor darstellt. Wir nehmen uns viel Zeit, um hier gemeinsam die passgenaue Lösung für unsere Kunden zu finden und gemeinsam umzusetzen. Am Anfang steht ein erstes kurzes Telefonat, um herauszufinden ob es beidseitig passt. Im Anschluss erhalten Sie von uns ein zielgerichtetes, an Ihren benannten Anforderungen ausgerichtete Livedemo. Wir beantworten all Ihre Fragen und geben bereits hier einen ersten Einblick was noch so möglich wäre. Wenn Sie mögen testen Sie unsere Lösung dann. Im Rahmen eines POC bauen wir Ihnen die passgenaue Lösung ohne Risiko, analysieren, optimieren und modifizieren bis das Ergebnis perfekt ist. Wenn Sie zufrieden sind, begrüßen wir Sie als Kunde.</p>'
);
$faqs->faq_add (
    'Wie kann ich über die VoIP-Telefonanlage von CallOne telefonieren?',
    '<p>Wie Sie mögen! Wir bieten die vielleicht umfangreichste Auswahl an Optionen. In der einfachsten Form brauchen Sie nur einen Browser und Ihr Headset. Natürlich können Sie bei CallOne aber auch Ihr IP-Telefon mitbringen oder über CallOne beziehen. Zudem können wir Ihnen Teams Telefonie, also die Integration in Microsoft Teams via Direct Routing anbieten. Wem das nicht ausreicht für den haben wir noch die Mobilfunk-Integration oder fertig konfigurierte Softphones für PC. Das beste für Entscheidungsfreudige: Alles ist je User flexibel kombinierbar.</p>'
);
$faqs->faq_add (
    'Mit welchen anderen CRMs und Tools kann ich CallOne kombinieren?',
    '<p>Wir liefern <a href="/callcenter-software-integrationen">offene Kommunikations-Schnittstellen</a>, eine Vielzahl von Skripten und <a href="/callcenter-software-apps">fertige Konnektoren</a> zu relevanten Businesspartnern, die sie auf Knopfdruck anbinden können. Zudem verfügen wir über Schnittstellen-Programmierer, die sie bei der Anbindung der Systeme unterstützen.</p>'
);
?>

<div class="section section--mobile-divider">
    <header class="hero">
        <div class="hero__text">
			<div class="tag">
				<?= pictureTag(
					'/assets/images/icons_svg/callone-logo-white.svg',
					'Telekommunikationslösungen von CallOne',
					13, 14, [], false
				); ?>
				CallOne TEL &copy;
			</div>

            <h1>Viel <u>mehr</u> als eine Cloud Telefonanlage</h1>
            <h2>
				Eine intuitiv bedienbare Cloud Plattform <br />
				mit <span class="typing-text" data-texts="integrierter Teams-Telefonie|integrierter Call Center Software|Mach-Dich-Glücklich-Garantie ♥|99,999% Erreichbarkeit|persönlichen Ansprechpartnern" data-colors="#0088EA|#53ba05|#FF002E|#FF7B1B|#DB00C5">integrierter Teams-Telefonie</span>
			</h2>

            <p class="mobile-centered">
                <a class="btn btn--primary" href="#" data-openmodal="contact-sales">Jetzt Experten kontaktieren</a>
            </p>
        </div>
        <div class="hero__image">
			<?= pictureTag(
				'/assets/images/illus/voip-telephony-header.png',
				'Die VoIP Telefonanlage von CallOne ist einfach bedienbar und funktioniert auf Laptop, PC, Handy',
				465, 336, [], false
			); ?>
        </div>
    </header>
</div>

<div class="section section--no-padding-top">
    <div class="section__content section__content--wide">
        <p class="centered bigtext">Cloud-Telefonanlagen angepasst für Unternehmen jeder Größe - auch Ihres!</p>

        <div class="small-tabs small-tabs--clear small-tabs--automated">
            <div class="small-tabs__tabs">
                <div class="small-tabs__tab" data-tab="1">Enterprise</div>
                <div class="small-tabs__tab" data-tab="2">Mittelstand</div>
                <div class="small-tabs__tab" data-tab="3">Fast-Growing</div>
            </div>
            <div class="small-tabs__content centered" data-tab="1">
				<?= pictureTag(
					'/assets/images/client-logos/Enterprise-Kombi.svg',
					'CallCenter Software für Enterprise Unternehmen',
					675, 28
				); ?>
            </div>
            <div class="small-tabs__content centered" data-tab="2">
				<?= pictureTag(
					'/assets/images/client-logos/Mittelstand-Kombi.svg',
					'CallCenter Software für Unternehmen aus dem Mittelstand',
					812, 28
				); ?>
            </div>
            <div class="small-tabs__content centered" data-tab="3">
				<?= pictureTag(
					'/assets/images/client-logos/FastGrowing-Kombi.svg',
					'CallCenter Software für fastgrowing Unternehmen',
					812, 28
				); ?>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green-white section--mobile-divider">
    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Für was interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#funktionen">Funktionen</a>
            <a href="#erweiterbarkeit">Erweiterbarkeit</a>
            <a href="#vorteile">Vorteile</a>
            <a href="#geschichten">Kundengeschichten</a>
        </div>
    </div>

    <div class="section__content section__content--wide" id="funktionen">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                <h2>VoIP-Telefonanlage maß&shy;geschneidert auf Ihre Bedürfnisse</h2>
                <p class="bigtext">Sie erhalten bei uns die vielleicht am einfachsten bedienbare virtuelle Telefonanlage für Ihr Unternehmen. Unsere Funktionen werden Sie nicht mehr missen wollen. Versprochen!</p>

                <p class="btn-set">
                    <a href="/voip-telefonanlagen-funktionen#Anrufsteuerung" class="btn btn--border-bottom btn--arrow-right-small">Warteschleife</a>
                    <a href="/voip-telefonanlagen-funktionen#Anrufsteuerung" class="btn btn--border-bottom btn--arrow-right-small">Callback-Optionen</a>
                    <a href="/voip-telefonanlagen-funktionen#Endgeraete" class="btn btn--border-bottom btn--arrow-right-small">BLF</a>
                    <a href="/voip-telefonanlagen-funktionen#Statistiken" class="btn btn--border-bottom btn--arrow-right-small">Live Monitor</a>
                    <a href="/voip-telefonanlagen-funktionen#Endgeraete" class="btn btn--border-bottom btn--arrow-right-small">Softphones</a>
                    <a href="/voip-telefonanlagen-funktionen#Unlimitierte" class="btn btn--border-bottom btn--arrow-right-small">Parallelruf</a>
                </p>

                <p class="mobile-centered">
                    <a href="/voip-telefonanlagen-funktionen" class="btn btn--primary">Alle Funktionen entdecken</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--6-xs co-grid__col--hidden-sm co-grid__col--vcentered">
				<?= pictureTag(
					'/assets/images/illus/voip-telefonanlage-softphone.png',
					'Das Softphone ist eine der vielen Funktionen der CallOne Cloud Telefonanlage',
					500, 500
				); ?>
            </div>
        </div>
    </div>
</div>

<div class="section section--white-grey-green-half-circle section--no-padding-top" id="erweiterbarkeit">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Wo andere Anbieter aufhören, fangen wir erst an.</h2>
        <p class="centered mobile-left bigtext">
			VoIP-Telefonanlagen gibt es viele, doch wir haben uns auf die Fahne geschrieben, Full-Service Anbieter für alle Bereiche Ihrer Telefonie zu sein.<br />
            <br />
            <br />
        </p>

        <h3 class="centered mobile-left">Unsere Add-Ons und Zusatzmodule</h3>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
							<?= pictureTag(
								'/assets/images/icons_svg/callcenter-software-icon.svg',
								'Die CallCenter Software von CallOne',
								50, 50, [
									'class' => 'co-grid__image--full-width'
								]
							); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Callcenter Software</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Unsere absolute Expertise! Steuern Sie Ihren Kundenservice und Sales einfach und effizient.</p>

                    <p><a href="/callcenter-software" class="btn btn--border-bottom btn--arrow-right-small">Bessere Businesstelefonie</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
							<?= pictureTag(
								'/assets/images/icons_svg/menu-app-api.svg',
								'APIs für individuelle Telefonielösungen mit der CallOne Cloud Telefonanlage',
								51, 50, [
									'class' => 'co-grid__image--full-width'
								]
							); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Kommu&shy;nikations-APIs</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Innovative Features für Ihre Telefonanlage und individuelle Lösungen, die in Ihr CRM integriert sind - für noch mehr Effizienz.</p>

                    <p><a href="/callcenter-software-integrationen" class="btn btn--border-bottom btn--arrow-right-small">Schneller Kunden bearbeiten</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
							<?= pictureTag(
								'/assets/images/icons_svg/msteams-icon.svg',
								'MS Teams Telefonie als Integration in Ihre VoIP-Telefonanlage',
								50, 50, [
									'class' => 'co-grid__image--full-width'
								]
							); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Teams-Telefonie</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Nahtlose Einbindung und einfache Nutzung von Microsoft Teams gefällig? Kein Problem!</p>

                    <p><a href="/ms-teams" class="btn btn--border-bottom btn--arrow-right-small">MS Teams verbinden</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--dark-green-black" id="vorteile">
	<div class="section__content section__content--wide" id="not-convinced-yet">
		<h2 class="centered mobile-left">Eine Plattform, unzählige Möglichkeiten</h2>

		<br class="mobile-hidden" />

		<div class="tablist tablist--on-black" style="margin-top:0">
			<div class="tablist__links tablist__links--full-width">
				<div class="tablist__link" data-tab="1">
					<strong>Clients</strong>
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Integrationen</strong>
				</div>
				<div class="tablist__link" data-tab="3">
					<strong>Reporting</strong>
				</div>
				<div class="tablist__link" data-tab="4">
					<strong>Sicherheit</strong>
				</div>
			</div>

			<div class="tablist__content" data-tab="1">
				<h3 class="centered mobile-left">Die Flexibilität, die Sie brauchen! <br />Mit der CallOne Cloud Telefonanlage einfach telefonieren wie und wo Sie möchten. </h3>
				<br class="mobile-hidden" />

				<div class="small-tabs small-tabs--clear small-tabs--on-black">
					<div class="small-tabs__tabs">
						<div class="small-tabs__tab" data-tab="1">Microsoft Teams</div>
						<div class="small-tabs__tab" data-tab="2">Tischtelefon</div>
						<div class="small-tabs__tab" data-tab="3">Softphone</div>
						<div class="small-tabs__tab" data-tab="4">Browsertelefon</div>
						<div class="small-tabs__tab" data-tab="5">Mobilfunk</div>
					</div>

					<div class="small-tabs__content" data-tab="1">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<?= pictureTag(
									'/assets/images/photos/microsoft-teams.png',
									'Integrieren Sie Microsoft Teams Telefonie in Ihre Cloud Telefonanlage',
									470, 396
								); ?>
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext"><a href="/ms-teams" class="inline-link">Teams Telefonie</a> mit CallOne bedeutet nahtlose Integration.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>Telefonate ins öffentliche Telefonnetz führen</li>
									<li>Erweiterbar um Call Center Software</li>
									<li>Einfache Benutzerverwaltung</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="2">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<?= pictureTag(
									'/assets/images/photos/sip-tischtelefon-reduced.png',
									'SIP Tischtelefon als Endgerät der CallOne Cloud Telefonanlage',
									470, 396
								); ?>
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Optimale Einbindung von allen IP-Telefonen.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>Konfiguration via Autoprovisionierung</li>
									<li>Komfortfunktionen wie freie Sitzplatzwahl</li>
									<li>Umfassende Verschlüsslungsoptionen</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="3">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<?= pictureTag(
									'/assets/images/photos/softphone-view.png',
									'CallOne Softphone ist als Alternative zur Teams-Telefonie im Browser integriert',
									470, 396
								); ?>
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Die integrierte Alternative zur Teams Telefonie. Das <a href="/softphone" class="inline-link">CallOne Softphone</a> smart integriert als Browser Plugin in Ihren Lieblingsbrowser.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>Smarte Integration im Hintergrund als Extension</li>
									<li>Günstige Alternative für Teams Telefonie</li>
									<li>Optimal für alle die browserbasiert arbeiten und eine schlanken und flexiblen Telefonclient suchen</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="4">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<?= pictureTag(
									'/assets/images/photos/agent-view-desktop.png',
									'Mit dem Browser Telefon der VoIP-Telefonanlage von CallOne über den Browser telefonieren',
									470, 396
								); ?>
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Telefonieren ohne Umwege! Für unser Browsertelefon benötigen Sie nur einen Browser und ein Headset, um ein- und ausgehende Telefonate zu führen. Zudem erhalten Sie die volle Power für ihre Kundenservicemitarbeiter.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>Weiterleiten (kalt und warm)</li>
									<li>Telefonbuchintegration</li>
									<li>Viele weitreichende Call Center Software Funktionen</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="5">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<?= pictureTag(
									'/assets/images/photos/phone-client.png',
									'Ihre Mobilfunkgeräte in CallOne Cloud Telefonanlage einbinden',
									470, 396
								); ?>
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Binden Sie auf vielfältige Weise Ihre Mobilfunkgeräte in unsere Cloud Telefonanlage ein. Die Möglichkeiten sind dabei vielfältig.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>SIP-Konto direkt ins Telefon einbinden</li>
									<li>Fertige Telefonapps</li>
									<li>Intelligente Anrufweiterleitungen</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<h3 class="centered mobile-left">Verbinden Sie die CallOne Cloud Telefonanlage mit Ihren Lieblings-Apps. Nutzen Sie eine für Ihr Unternehmen maßgeschneiderte Lösung!</h3>
				<br class="mobile-hidden" />

				<div class="co-grid mobile-hidden" style="background-image:url(/assets/images/backgrounds_png/background-layer-reduced.png);background-size:contain;background-position:center;background-repeat:no-repeat;">
					<div class="co-grid__col co-grid__col--1-xs"></div>
					<div class="co-grid__col co-grid__col--3-xs">
						<div class="carddeck carddeck--no-indicators centered">
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<?= pictureTag(
									'/assets/images/client-logos/Hubspot-Card.svg',
									'Hubspot als Anbindung in der CallOne VoIP Telefonanlage',
									156, 94
								); ?>
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<?= pictureTag(
									'/assets/images/client-logos/logo-zendesk.svg',
									'Zendesk als Anbindung in der CallOne VoIP Telefonanlage',
									156, 29
								); ?>
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<?= pictureTag(
									'/assets/images/client-logos/Pipedrive.svg',
									'Pipedrive als Anbindung in der CallOne VoIP Telefonanlage',
									156, 156
								); ?>
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<?= pictureTag(
									'/assets/images/client-logos/Freshdesk.svg',
									'Freshdesk als Anbindung in der CallOne VoIP Telefonanlage',
									200, 200
								); ?>
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<?= pictureTag(
									'/assets/images/logo/partnerlogos/logo-salesforce.svg',
									'Salesforce als Anbindung in der CallOne VoIP Telefonanlage',
									217, 150
								); ?>
							</div>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs co-grid__col--vcentered"></div>
					<div class="co-grid__col co-grid__col--3-xs co-grid__col--vcentered">
						<div class="content-box content-box--white centered">
							<?= pictureTag(
								'/assets/images/icons_svg/api-integration-Card.svg',
								'Gängige Tools und Integrationen mit APIs in die Cloud Telefonanlage einbinden',
								144, 87, [
									'style' => 'display:inline-block'
								]
							); ?>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--1-xs"></div>
				</div>

				<br class="mobile-hidden" />
				
				<div class="co-grid co-grid--no-margin-top">
					<div class="co-grid__col co-grid__col--1-xs"></div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md right mobile-left">
						<h3>Fertige Konnektoren zu Ihren Lieblings-Apps</h3>
						<p>Verbinden Sie Ihre unsere VoIP-Telefonanlage mit Ihren gängigen Ticketing-, CRM-, BI- oder ERP-Tools auf Knopfdruck.</p>
					</div>
					<div class="co-grid__col co-grid__col--hidden-md co-grid__col--2-md"></div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md left">
						<h3>Ihre Systeme flexibel angebunden</h3>
						<p>Zünden Sie jetzt den Effizienzturbo! Wir liefern Ihnen alles was Sie benötigen, um sich optimal anzubinden und loszulegen.</p>
					</div>
					<div class="co-grid__col co-grid__col--1-xs"></div>
				</div>
			</div>

			<div class="tablist__content" data-tab="3">
				<h3 class="centered mobile-left">Optimierungspotentiale erkennen und datenbasierte Entscheidungen treffen. Dafür ist die CallOne Lösung genau richtig.</h3>
				<br class="mobile-hidden" />

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
						<?= pictureTag(
							'/assets/images/illus/dashboards-mockup.svg',
							'Transparenz Dank Statistiken und Reportings zur Cloud Telefonanlage',
							470, 440
						); ?>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
						<ul class="list list--checkmarks list--on-black">
							<li>
								Tabellen, Grafiken, Schnittstellen<br />
								<span class="subtext">Nutzen Sie über 50 Echtzeitstatistiken zu Ihrem Vorteil! Natürlich sind diese in Echtzeit abrufbar.</span>
							</li>
							<li>
								Datenexport in Ihrem Lieblingsformat<br />
								<span class="subtext">Ob als excel, csv, json, pdf oder als fertig aufbereiteter Export für Ihr BI Tool - Sie haben die Wahl!</span>
							</li>
							<li>
								Reports genau wie Sie sie brauchen<br />
								<span class="subtext">In welcher Form benötigen Sie Ihre Reports? Wir versenden sie als E-Mail, ftp-Upload oder Schnittstellenexport in Ihr BI-System. Sie entscheiden, wann und wohin.</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="4">
				<h3 class="centered mobile-left">Erreichbarkeit ist ein Schlüsselfaktor Ihrer Unternehmenstelefonie. <br />Darum bieten wir Ihnen mit der CallOne Cloud Telefonanlage 99,999% Erreichbarkeit!</h3>
				<br class="mobile-hidden" />

				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md cards__card cards__card--transparent cards__card--no-padding cards__card--flex-vertical">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<?= pictureTag(
									'/assets/images/icons_svg/usp-speed-icon.svg',
									'Call Center Software wird schnell bereitgestellt',
									148, 46
								); ?>
							</div>
							<h4 class="centered">Bereitstellung in wenigen Tagen statt Monaten</h4>
						</div>
						<div class="cards__card--dark-bottom">
							<p>Kein nerviges Warten, kein nerviger Self-Service. Sie werden von einem CallOne Experten persönlich beraten und in kürzester Zeit ist alles, was Sie brauchen, eingerichtet. Und natürlich auch direkt live.</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md cards__card cards__card--transparent cards__card--no-padding cards__card--flex-vertical">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<?= pictureTag(
									'/assets/images/icons_svg/usp-germany-icon.svg',
									'Call Center Software mit hohem deutschen Datenschutzstandard',
									79, 90
								); ?>
							</div>
							<h4 class="centered">Telefonie mit deutschem Datenschutz-Standard</h4>
						</div>
						<div class="cards__card--dark-bottom">
							<p>Um das Privacy Shield Abkommen müssen Sie sich keine Gedanken mehr machen! Unsere Telefonie-Lösungen hosten wir ausschließlich in Deutschland.</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md cards__card cards__card--transparent cards__card--no-padding cards__card--flex-vertical">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<?= pictureTag(
									'/assets/images/icons_svg/usp-availability-icon.svg',
									'Call Center Software ist sehr gut erreichbar',
									110, 60
								); ?>
							</div>
							<h4 class="centered">Garantierte 99,999% Erreichbarkeit</h4>
						</div>
						<div class="cards__card--dark-bottom">
							<p>Sie verdienen ein unschlagbar hohes Maß an Erreichbarkeit ebenso wie umfassende Sicherheit. Mit der CallOne-Lösung erhalten Sie also eine extrem stabile Cloud Telefonanlage. Ihr Unternehmen ist rund um die Uhr erreichbar.</p>
						</div>
					</div>
				</div>

				<p>
					<a href="/dsgvo-telekommunikation" class="btn btn--border-white btn--arrow-right btn--centered">Mehr erfahren</a>
				</p>
			</div>
		</div>

		<p>
			<a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Erstgespräch buchen</a>
		</p>
	</div>
</div>

<div class="section section--telefonanlage-slider section--telefonanlage-slider-1">
    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-bottom">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
                <h2>Guter Service? Das fängt bei uns an.</h2>
                <p class="bigtext">Ihr Erfolg in der Businesstelefonie steht für uns an oberster Stelle. Als Infrastrukturanbieter legen wir Wert darauf, Ihren Anforderungen zu 100 % gerecht zu werden.</p>

                <br /><br />

                <div class="index-card index-card-1">
                    <div class="index-card__top">
                        <div class="index-card__arrow index-card__arrow--left"></div>
                        <div class="index-card__header">
                            <div class="index-card__indicators">
                                <div class="index-card__indicator index-card__indicator--active"></div>
                                <div class="index-card__indicator"></div>
                                <div class="index-card__indicator"></div>
                            </div>
                            <h6 class="index-card__title">Customer Success</h6>
                        </div>
                        <div class="index-card__arrow index-card__arrow--right"></div>
                    </div>
                    <div class="index-card__content index-card__content--active centered">
                        <h3>Immer individuell & persönlich</h3>
                        
                        <p class="bigtext">Statt anonymen Sachbearbeitern erhalten Sie persönliche Betreuung und das von Anfang an. Wir stellen Ihnen Projektmanager zur Verfügung, die Sie bei der Umsetzung Ihrer individuellen Anforderungen unterstützen.</p>
						<p>
                            <a href="/ueber-uns" class="btn btn--secondary btn--centered">Wie wir Sie zum erfolg führen</a>
                        </p>
                    </div>
                </div>

				<div class="index-card index-card-2">
                    <div class="index-card__top">
                        <div class="index-card__arrow index-card__arrow--left"></div>
                        <div class="index-card__header">
                            <div class="index-card__indicators">
                                <div class="index-card__indicator"></div>
                                <div class="index-card__indicator index-card__indicator--active"></div>
                                <div class="index-card__indicator"></div>
                            </div>
                            <h6 class="index-card__title">Performance</h6>
                        </div>
                        <div class="index-card__arrow index-card__arrow--right"></div>
                    </div>
                    <div class="index-card__content index-card__content--active centered">
                        <h3>Bessere Erreichbarkeit - höhere Leistung</h3>
                        
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md number-card">
                                <div class="number-card__number" style="--color:#86ed18;">
                                    <span class="counting-number" data-suffix=" Mio." data-start="0" data-end="100">100 Mio.</span>
                                </div>
                                Interaktionen jährlich*
                            </div>
                            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md number-card">
                                <div class="number-card__number" style="--color:#86ed18;">
                                    <span class="counting-number" data-start="0" data-end="127">127</span>
                                </div>
                                Softwareupdates*
                            </div>
                        </div>

                        <p>
                            <a href="/statistiken" class="btn btn--secondary btn--centered">Weitere Statistiken</a>
                        </p>

                        <p class="subtext centered">*erreichte Referenzwerte unserer Kunden</p>
                    </div>
                </div>

				<div class="index-card index-card-3">
                    <div class="index-card__top">
                        <div class="index-card__arrow index-card__arrow--left"></div>
                        <div class="index-card__header">
                            <div class="index-card__indicators">
                                <div class="index-card__indicator"></div>
                                <div class="index-card__indicator"></div>
                                <div class="index-card__indicator index-card__indicator--active"></div>
                            </div>
                            <h6 class="index-card__title">Einsparpotenziale</h6>
                        </div>
                        <div class="index-card__arrow index-card__arrow--right"></div>
                    </div>
                    <div class="index-card__content index-card__content--active centered">
                        <h3>Nachhaltig Kosten sparen - noch besser als eine Flatrate</h3>
                        
                        <p class="bigtext">Wir verkürzen und verbessern Ihre Telefonate durch Schnittstellen, Automatisierungen und umfangreiche Statistiken. So wird ihre Businesstelefonie schnell, smart und effizient - und spart nachweislich Kosten!</p>

                        <p>
                            <a href="/callcenter-einsparpotential" class="btn btn--secondary btn--centered">Jetzt ROI berechnen</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>		

<div class="section section--light-green" id="geschichten">
	<div class="section__content section__content--wide">
		<h2 class="centered mobile-left">Machen Sie es wie unsere Kunden: <br class="mobile-hidden" />Entscheiden Sie sich für ein passgenaues Setup!</h2>
		
		<div class="tablist">
			<div class="tablist__links tablist__links--full-width">
				<div class="tablist__link" data-tab="1" data-sticky-text="GastroHero">
					<strong>Callcenter-Software</strong>
				</div>
				<div class="tablist__link" data-tab="2" data-sticky-text="Die LBS Immobilien GmbH NordWest">
					<strong>Teams Telefonie</strong>
				</div>
				<div class="tablist__link" data-tab="3" data-sticky-text="Check24 KFZ">
					<strong>Warteschleifen</strong>
				</div>
				<div class="tablist__link" data-tab="4" data-sticky-text="SodaStream">
					<strong>Schnittstellen</strong>
				</div>
			</div>

			<div class="tablist__content" data-tab="1">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered co-grid__col--hcentered image--shadow" style="background-image:url(/assets/images/photos/gastrohero-image.jpg);background-size:cover;background-position:center;padding:var(--gutter-m);">
						<div class="blurry-logo-box">
							<?= pictureTag(
								'/assets/images/client-logos/carddeck/gastro-carddeck-black.png',
								'Gastro Hero ist zufriedener Kunde von CallOne',
								150, 80, [
									'style' => '--w:150px'
								]
							); ?>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header" data-speed="4500">
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-green.png',
										'CallOne Cloud Telefonanlage',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-grey.png',
										'CallOne Rufnummern',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Telefonanlage in der Cloud</h4>
									<p>Cloud Telefonanlage mit umfangreichem Auswahlmenüs.</p>
								</div>
								<br />
								<p><a href="/voip-telefonanlage#funktionen" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-green.png',
										'CallOne Rufnummern',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Rufnummern</h4>
									<p>Rufnummernschaltung in einer Vielzahl Europäischer Länder.</p>
								</div>
								<br />
								<p><a href="/0800-lokal-nummern" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-grey.png',
										'CallOne Rufnummern',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-green.png',
										'CallOne Callcenter Software',
										88, 88
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Call Center Software</h4>
									<p>Komplexes Routing verteilt auf zahlreiche Skillgruppen.</p>
								</div>
								<br />
								<p><a href="/callcenter-software" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Fullservice Telefonie mit Fokus auf Sales und Kundenservice</h3>
						<p class="bigtext">
							Stressfrei und effizient kommunizieren - GastroHero zeigt, wie es mit der CallOne Cloud Telefonanlage geht. 
							<span class="readmore">Um dem schnellen Wachstum des eigenen Unternehmens gerecht zu werden, macht sich GastroHero die passgenaue Lösung von CallOne zu Nutzen. So kann sowohl Sales als auch Kundenservice so effizient und zuverlässig wie möglich gestaltet werden.</span>
						</p>
						<p><a href="/customer-success" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow content-box--nofill">
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Fachhandel für Gastronomiebedarf</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">100-150 Agent</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">
								<?php
								$origin = new DateTime('2019-12-01');
								$target = new DateTime(date('Y-m-d'));
								$interval = $origin->diff($target);
								$months = $interval->format('%m') + ($interval->format('%y') * 12);
								echo $months.' Monaten';
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="2">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered co-grid__col--hcentered image--shadow" style="background-image:url(/assets/images/photos/lbs-image.jpg);background-size:cover;background-position:center;padding:var(--gutter-m);">
						<div class="blurry-logo-box">
							<?= pictureTag(
								'/assets/images/client-logos/logo-lbs-immobilien-black.svg',
								'Die LBS Immobilien GmbH NordWest ist zufriedener Kunde von CallOne',
								150, 63, [
									'style' => '--w:150px'
								]
							); ?>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header" data-speed="4500">
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-green.png',
										'CallOne Cloud Telefonanlage',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-grey.png',
										'CallOne Rufnummern',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-4-grey.png',
										'MS Teams Telefonie als Integration in Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '3'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Telefonanlage in der Cloud</h4>
									<p>Cloud Telefonanlage in Kombination mit Teams Telefonie.</p>
								</div>
								<br />
								<p><a href="/voip-telefonanlage#funktionen" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-green.png',
										'CallOne Rufnummern',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-4-grey.png',
										'MS Teams Telefonie als Integration in Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '3'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Rufnummern</h4>
									<p>Schaltung von Rufnummernblöcken aus dem Kundenvorwahlbereich.</p>
								</div>
								<br />
								<p><a href="/0800-lokal-nummern" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-grey.png',
										'CallOne Rufnummern',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-green.png',
										'CallOne Callcenter Software',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-4-grey.png',
										'MS Teams Telefonie als Integration in Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '3'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Call Center Software</h4>
									<p>Sales- und Kundenservicehotlines mit intelligenten Warteschleifen.</p>
								</div>
								<br />
								<p><a href="/callcenter-software" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-2-grey.png',
										'CallOne Rufnummern',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-4-green.png',
										'MS Teams Telefonie als Integration in Cloud Telefonanlage',
										88, 88
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Teams Telefonie</h4>
									<p>Integration ins kundeneigenes MS Teams als Hauptclient für die Telefonie.</p>
								</div>
								<br />
								<p><a href="/ms-teams" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Eine App, volle Integration - Teams Telefonie für Kundenservice und Office-Telefonie</h3>
						<p class="bigtext">
							Die LBS Immobilien GmbH NordWest setzt auf die Lieblings-App in Kombination mit der CallOne Lösung, um nicht nur die interne Kommunikation über Microsoft Teams abzuwickeln. 
							<span class="readmore">Die Kombination aus Kundenservice-Callcenter-Betrieb und Office-Telefonie ist fast unschlagbar. Microsoft Teams als Integration der CallOne Rundum-sorglos-Lösung bietet genau die Funktionen, die die LBS Immobilien GmbH NordWest für Costumer Service und interne Kommunikation benötigt.</span>
						</p>
						<p><a href="/customer-success" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow content-box--nofill">
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Immobilien</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">40 Agent</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">
								<?php
								$origin = new DateTime('2020-12-01');
								$target = new DateTime(date('Y-m-d'));
								$interval = $origin->diff($target);
								$months = $interval->format('%m') + ($interval->format('%y') * 12);
								echo $months.' Monaten';
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="3">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered co-grid__col--hcentered image--shadow" style="background-image:url(/assets/images/photos/check24-image.jpg);background-size:cover;background-position:center;padding:var(--gutter-m);">
						<div class="blurry-logo-box">
							<?= pictureTag(
								'/assets/images/client-logos/carddeck/check24-carddeck-black.png',
								'Check24 ist zufriedener Kunde von CallOne',
								150, 80, [
									'style' => '--w:150px'
								]
							); ?>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header" data-speed="4500">
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-green.png',
										'CallOne Cloud Telefonanlage',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-grey.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-6-grey.png',
										'CallOne BI-Konnektor',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '3'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Telefonanlage in der Cloud</h4>
									<p>Unsere Telefonanlage in perfekter Kombination mit unserer Call Center Software.</p>
								</div>
								<br />
								<p><a href="/voip-telefonanlage#funktionen" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-green.png',
										'CallOne Callcenter Software',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-grey.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-6-grey.png',
										'CallOne BI-Konnektor',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '3'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Call Center Software</h4>
									<p>Umfangreiche Einbindung in kundeneigene Businesslösungen mit Anbindung an diverse Partner.</p>
								</div>
								<br />
								<p><a href="/callcenter-software" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-green.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-6-grey.png',
										'CallOne BI-Konnektor',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '3'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Schnittstellen</h4>
									<p>Nutzung zahlreicher CallOne Konnektoren zur Anbindung kundeneigener Systeme für Routing und Statistiken.</p>
								</div>
								<br />
								<p><a href="/callcenter-software-integrationen" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-grey.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-6-green.png',
										'CallOne BI-Konnektor',
										88, 88
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>BI-Konnektor</h4>
									<p>Optimale Versorgung mit relevanten SLA- und KPI-Daten zur Auswertung aller relevanten Parameter im Contact Center.</p>
								</div>
								<br />
								<p><a href="/tableau-callcenter-connector" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Intelligentes Routing für minimale Wartezeiten</h3>
						<p class="bigtext">
							Um einen Kundenservice zu bieten, der möglichst effizient abläuft und zur Zufriedenheit der Kunden beiträgt, nutzt Check24 KfZ ein intelligentes Routing mit diversen Vorqualifizierungen. 
							<span class="readmore">So werden unnötige Wartezeiten vermieden. Dazu gehört auch, dass Check24 Kfz je nach Versicherungsprodukt ein weitreichendes skillbasiertes Routing nutzt und sowohl die Kundenzufriedenheit steigert als auch die interne Effizienz. Dank der CallOne Lösung können Wartschleifen und Routings bei Check24 KfZ genauso individuell sein wie benötigt.</span>
						</p>
						<p><a href="/customer-success" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow content-box--nofill">
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">KFZ-Versicherungen</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">120 Agenten</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">
								<?php
								$origin = new DateTime('2019-11-01');
								$target = new DateTime(date('Y-m-d'));
								$interval = $origin->diff($target);
								$months = $interval->format('%m') + ($interval->format('%y') * 12);
								echo $months.' Monaten';
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="4">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered co-grid__col--hcentered image--shadow" style="background-image:url(/assets/images/photos/sodastream-image.jpg);background-size:cover;background-position:center;padding:var(--gutter-m);">
						<div class="blurry-logo-box">
							<?= pictureTag(
								'/assets/images/client-logos/carddeck/sodastream-carddeck-black.png',
								'SodaStream ist zufriedener Kunde bei CallOne',
								150, 80, [
									'style' => '--w:150px'
								]
							); ?>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header" data-speed="4500">
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-green.png',
										'CallOne Callcenter Software',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-grey.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Call Center Software</h4>
									<p>Volle Automatisierung mittels Sprachausgabe und Kundendatenabgleich.</p>
								</div>
								<br />
								<p><a href="/callcenter-software" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-green.png',
										'CallOne Cloud Telefonanlage',
										88, 88
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-grey.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '2'
										]
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Telefonanlage in der Cloud</h4>
									<p>Flexibler standortübergreifender Einsatz mit unterschiedlichen Clients.</p>
								</div>
								<br />
								<p><a href="/voip-telefonanlage#funktionen" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
							<div class="fader__item">
								<p class="mobile-stacked-images">
									<?= pictureTag(
										'/assets/images/icons_png/icon-3-grey.png',
										'CallOne Callcenter Software',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '0'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-1-grey.png',
										'CallOne Cloud Telefonanlage',
										88, 88, [
											'class' => 'fader__next',
											'data-next' => '1'
										]
									); ?>
									<?= pictureTag(
										'/assets/images/icons_png/icon-5-green.png',
										'CallOne APIs für Schnittstellen und Integrationen',
										88, 88
									); ?>
								</p>
								<br />
								<div class="left-border">
									<h4>Schnittstellen</h4>
									<p>Integration von zahlreichen API-Bausteinen zur automatisierten Bearbeitung des Anruferanliegens.</p>
								</div>
								<br />
								<p><a href="/callcenter-software-integrationen" class="btn btn--border-black">Mehr erfahren</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<h3>Die Rundum-sorglos-Lösung einfach in eigene Systeme integrieren und loslegen</h3>
						<p class="bigtext">
							Retourenaufträge für Händler werden bei SodaStream vollautomatisiert abgewickelt, denn eine maßgeschneiderte Lösung von CallOne bezieht die verschiedensten Unternehmensbedürfnisse ein. 
							<span class="readmore">Hierbei nutzt SodaStream nicht nur eine intelligente und mehrstufige Händlerverifizierung, zusätzlich ist die Schnittstelle komplett ins eigene CRM integriert. Versandaufträge können automatisiert erstellt werden - das spart Zeit und steigert Effizienz.</span>
						</p>
						<p><a href="/customer-success" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow content-box--nofill">
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Haushalts-Sprudlersysteme</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">40 Agenten</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">
								<?php
								$origin = new DateTime('2020-05-01');
								$target = new DateTime(date('Y-m-d'));
								$interval = $origin->diff($target);
								$months = $interval->format('%m') + ($interval->format('%y') * 12);
								echo $months.' Monaten';
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<h3 class="centered mobile-left">Neugierig geworden?</h3>
		<h4 class="centered mobile-left">Jetzt unverbindliches Erstgespräch aufnehmen!</h4>

		<br />

		<p>
			<a href="#" class="btn btn--cta btn--centered" data-openmodal="contact-sales">Demo ansehen</a>
		</p>
	</div>
</div>

<div class="section section--black">
	<div class="section__content">
		<?php
		$faqs->structured_data_get_code ();
		$faqs->html_get_code ('toggle-box--on-black');
		?>
	</div>
</div>

<script>
    let telefonanlageSlidesSection = document.querySelector('.section--telefonanlage-slider');
	let indexCards = telefonanlageSlidesSection.querySelectorAll('.index-card');
    let nextSlideButtons = document.querySelectorAll('.index-card__arrow--right');
    let prevSlideButtons = document.querySelectorAll('.index-card__arrow--left');
    let currentSlide = 1;
    let telefonanlageSlidesInterval = null;

	// Automatically cycle through slides
    // window.addEventListener('scroll', e => {
    //     let offsetTop = telefonanlageSlidesSection.getBoundingClientRect().top;
    //     if (!telefonanlageSlidesInterval && offsetTop < window.innerHeight * 0.7) {
    //         telefonanlageSlidesInterval = setInterval(nextSlide, 5000);
    //     }
    // });

    nextSlideButtons.forEach(nextSlideButton => {
        nextSlideButton.addEventListener('click', e => {
            clearInterval(telefonanlageSlidesInterval);
            telefonanlageSlidesInterval = true;
            nextSlide();
        });
    });
    prevSlideButtons.forEach(prevSlideButton => {
        prevSlideButton.addEventListener('click', e => {
            clearInterval(telefonanlageSlidesInterval);
            telefonanlageSlidesInterval = true;
            prevSlide();
        });
    });

    function nextSlide() {
        currentSlide++;
        if (currentSlide > indexCards.length)
            currentSlide = 1;
        updateSlide();
    }
    function prevSlide() {
        currentSlide--;
        if (currentSlide < 1)
            currentSlide = indexCards.length;
        updateSlide();
    }
    function updateSlide() {
		telefonanlageSlidesSection.classList.remove('section--telefonanlage-slider-1', 'section--telefonanlage-slider-2', 'section--telefonanlage-slider-3');
        telefonanlageSlidesSection.classList.add('section--telefonanlage-slider-'+currentSlide);
		setTimeout(e => {
			scrollTo(telefonanlageSlidesSection);
		}, 30);
    }
</script>