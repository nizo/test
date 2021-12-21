<?php
$product = new product ('VoIP-Telefonanlage', 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager');
$product->image_set ('https://callone.de/assets/images/photos/voip-telefonanlage.webp');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
    'Was unterscheidet die virtuelle Telefonanlage von CallOne von anderen Anbietern?',
    '<p>CallOne kombiniert eine flexibel anpassbare Cloud-Telefonanlage mit einer umfangreichen Callcenter-Lösung, Integrationen in andere Systeme und offenen APIs. Die CallOne Telefonielösungen sind somit frei skalierbar und können alle Anforderungen von der kleinen Officetelefonielösung bis hin zu weit ausgewachsenen und voll integrierten Kundenservice- und Sales-Abteilungen abbilden. Alle Telefoniedaten sind bei CallOne in detaillierten Statistiken auswertbar, die auch über APIs abgefragt oder in BI-Tools <a href="/cti-schnittstellen" title="Schnittstellen">integriert</a> werden können. Kontaktieren Sie uns einfach mit Ihren individuellen Anforderungen!</p>'
);
$faqs->faq_add (
    'Was kostet die CallOne Telefonanlage?',
    '<p>Sie können die CallOne Cloud-Telefonanlage bereits ab 5,90 € je Nebenstelle nutzen. Ihnen stehen Optionen im Self-Service oder mit einem persönlichen Customer Succcess Manager zur Verfügung. Nähere Informationen finden Sie auf unserer <a href="/callcenter-software">Preisseite</a> oder <a href="#" data-openmodal="contact-sales">kontaktieren</a> Sie uns einfach mit Ihren Anforderungen.</p>'
);
$faqs->faq_add (
    'Erhalte ich auch Rufnummern von CallOne?',
    '<p>Wir schalten Ihnen Rufnummern aus allen Vorwahlbereichen in Deutschland sowie lokale Rufnummern weltweit. Auch Servicerufnummern wie z.B. 0800-Rufnummern stellen wir Ihnen gerne zur Verfügung. Ebenso können Sie Ihre bereits vorhandenen Rufnummern jederzeit zu uns weiterleiten oder einfach portieren. Alle Rufnummern im CallOne Netz laufen über stabile Premium-Routen und bieten auszeichnete Sprachqualität.</p>'
);
$faqs->faq_add (
    'Wie kann ich über die virtuelle Telefonanlage von CallOne telefonieren?',
    '<p>Bei der Wahl des gewünschten Endgeräts sind Sie bei CallOne komplett flexibel. Nutzen Sie jedes beliebige Softphone oder Hardware-IP-Telefon und kombinieren Sie Ihre Telefonie für Sales und Kundenservice mit Dialerfunktionen und Click-to-Call. Oder Sie verzichten komplett auf Hard- oder Software-Telefone und nutzen die bei CallOne bereits integrierte Browsertelefonie (WebRTC).</p>'
);
$faqs->faq_add (
    'Welche Funktionen unterstützt die CallOne Telefonanlage?',
    '<p>Die Cloud-Telefonanlage von CallOne unterstützt alle bekannten Funktionen und Features einer Telefonanlage, z.B. Besetztlampenfelder, Parallelruf, Ringschaltung, Rufnummernübermittlung, uvm. Darüber hinaus bietet CallOne weitreichende Callcenter-Funktionen wie Warteschleifenadministration, SLAs, IVR-Menüs und Gesprächsaufzeichnung auch im Zusammenspiel mit der Telefonanlage. Kontaktieren Sie uns gerne mit Ihren Anforderungen! <a href="/voip-telefonanlagen-funktionen">Hier finden Sie mehr zu unseren Features</a>.</p>'
);
$faqs->faq_add (
    'Mit welchen anderen CRMs und Tools kann ich CallOne kombinieren?',
    '<p>Mit unseren offenen APIs haben Sie Möglichkeit Telefoniefunktionen in nahezu alle CRM-, Kundenservice- und Salestools zu integrieren. Beliebte Funktionen sind z.B. Click-to-Dial oder das automatisierte Anlegen von Nebenstellen oder Telefonbucheinträgen. Mehr Informationen zu unseren APIs finden Sie <a href="/cti-schnittstellen" title="´Apps und Schnittstellen">hier</a>.</p><p>Darüber hinaus bietet CallOne eine Vielzahl fertiger Apps für beliebte Tools wie Pipedrive, Salesforce, Zendesk, uvm. sowie Integrationen mit BI-Tools wie tableau und Geckoboard.</p>'
);
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Die passende Kombination aus <br />Freiheit und Sicherheit: <br />Unsere Cloud Telefonanlage</h1>
            <h2>Sie halten die Fäden in der Hand. Die cloudbasierte Telefonanlage von CallOne ist die passgenaue Lösung für die Telefonie Ihres Unternehmens - wir helfen Ihnen, Ihre Telefonate effizient zu erledigen.</h2>

            <p>
                <a class="btn btn--primary" href="#" data-openmodal="contact-sales">Jetzt Experten kontaktieren</a>
            </p>
        </div>
        <div class="hero__image">
            <img src="/assets/images/illus/voip-telephony-header.png" alt="" />
        </div>
    </header>
</div>

<div class="section section--no-padding-top mobile-hidden">
    <div class="section__content section__content--wide">
        <p class="centered bigtext">Cloud-Telefonanlagen angepasst für Unternehmen jeder Größe - auch Ihres!</p>

        <div class="small-tabs small-tabs--clear">
            <div class="small-tabs__tabs">
                <div class="small-tabs__tab" data-tab="1">Enterprise</div>
                <div class="small-tabs__tab" data-tab="2">Mittelstand</div>
                <div class="small-tabs__tab" data-tab="3">Fast-Growing</div>
            </div>
            <div class="small-tabs__content centered" data-tab="1">
                <img src="/assets/images/client-logos/Enterprise-Kombi.svg" alt="" />
            </div>
            <div class="small-tabs__content centered" data-tab="2">
                    <img src="/assets/images/client-logos/Mittelstand-Kombi.svg" alt="" />
            </div>
            <div class="small-tabs__content centered" data-tab="3">
                <img src="/assets/images/client-logos/FastGrowing-Kombi.svg" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green-white">
    <div class="anchors mobile-hidden">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Für was interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#funktionen">Funktionen</a>
            <a href="#erweiterbarkeit">Erweiterbarkeit</a>
            <a href="#vorteile">Vorteile</a>
            <a href="#warum-callone" class="anchor-telefonanlage">Warum CallOne?</a>
            <a href="#geschichten">Kundengeschichten</a>
        </div>
    </div>

    <div class="section__content section__content--wide" id="funktionen">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                <p><img src="/assets/images/icons_svg/solution-package.svg" alt="" /></p>
                <h1>Endlich effizienter telefonieren - Dank zahlreicher Funktionen</h1>
                <p class="bigtext">Vom Ansagen-Management bis zur Warteschleife umfasst unsere Cloud Telefonanlage zahlreiche Funktionen. Sie bekommen alle Möglichkeiten für mehr Effizienz und Zuverlässigkeit - also ein Rundum-sorglos-Paket, das sich auf die individuellen Ansprüche Ihrer Businesstelefonie anpassen lässt.</p>
                <div class="btn-set">
                    <a href="/voip-telefonanlagen-funktionen#Anrufsteuerung" class="btn btn--border-bottom btn--arrow-right-small">Warteschleife</a>
                    <a href="/voip-telefonanlagen-funktionen#Anrufsteuerung" class="btn btn--border-bottom btn--arrow-right-small">Callback-Optionen</a>
                    <a href="/voip-telefonanlagen-funktionen#Endgeraete" class="btn btn--border-bottom btn--arrow-right-small">BLF</a>
                    <a href="/voip-telefonanlagen-funktionen#Statistiken" class="btn btn--border-bottom btn--arrow-right-small">Live Monitor</a>
                    <a href="/voip-telefonanlagen-funktionen#Endgeraete" class="btn btn--border-bottom btn--arrow-right-small">Softphones</a>
                    <a href="/voip-telefonanlagen-funktionen#Unlimitierte" class="btn btn--border-bottom btn--arrow-right-small">Parralelruf</a>
                </div>
                <p>
                    <a href="#todo" class="btn btn--primary">Alle Funktionen entdecken</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                <img src="/assets/images/illus/voip-telefonanlage-softphone.png" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="section section--white-grey-green-half-circle section--no-padding-top" id="erweiterbarkeit">
    <div class="section__content section__content--wide">
        <p class="centered">
            <img src="/assets/images/icons_svg/modules-icon.svg" alt="" />
        </p>

        <h1 class="centered">Darf es noch ein bisschen mehr sein? <br />Addons und Zusatzmodule</h1>
        <p class="centered bigtext">
			CallOne bietet das vielleicht umfänglichste Angebot, wenn es um moderne Business Telefonie geht. Neben Cloud Telefonanlagen erhalten Sie bei uns alles für die Einbindung in Ihre bestehenden Systeme und die perfekt integrierte Lösung für Ihren Kundenservice und Inside-Sales Abteilung<br />
            <br />
            <br />
        </p>

        <h3 class="centered">Welches Modul passt zu Ihren Geschäftsprozessen?</h3>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/callcenter-software-icon.svg" alt="" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Callcenter Software</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Unsere absolute Expertise! Steuern Sie Ihren Kundenservice und Sales einfach und effizient.</p>

					<!-- TODO: Add link -->
                    <p><a href="#" class="btn btn--border-bottom btn--arrow-right-small">Bessere Businesstelefonie</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/menu-app-api.svg" alt="" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Kommunikations-APIs</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Innovative Features für Ihre Telefonanlage und individuelle Lösungen, die in Ihr CRM integriert sind - für noch mehr Effizienz.</p>

					<!-- TODO: Add link -->
                    <p><a href="#" class="btn btn--border-bottom btn--arrow-right-small">Schneller Kunden bearbeiten</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/msteams-icon.svg" alt="" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Teams-Telefonie</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Nahtlose Einbindung und einfache Nutzung von Microsoft Teams gefällig? Kein Problem!</p>

					<!-- TODO: Add link -->
                    <p><a href="#" class="btn btn--border-bottom btn--arrow-right-small">MS Teams verbinden</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--dark-green-black" id="vorteile">
	<div class="section__content section__content--wide" id="not-convinced-yet">
		<h1 class="centered">Was ist sonst noch für Sie drin?</h1>
		<p class="centered">Informieren Sie sich zu wichtigen Themen rundum unsere Call Center Software und finden Sie heraus, wie unsere Lösung für Sie zum Rundum-sorglos-Paket ergänzt werden kann.</p>

		<br />
		<br />

		<!-- Mobile Tabs -->
		<div class="tablist tablist--on-black tablist--no-sticky desktop-hidden">
			<div class="tablist__links">
				<div class="tablist__link tablist__link--active" data-tab="1">
					<strong>Flexibel telefonieren</strong>
					Erfahren Sie mehr zu unseren <br class="mobile-hidden" />unterstützten Telefonie-Optionen
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Integrations&shy;möglichkeiten</strong>
					Optionen für Anbindung Ihrer <br class="mobile-hidden" />genutzten Businesslösungen
				</div>
				<div class="tablist__link" data-tab="3">
					<strong>Zusammenarbeit</strong>
					Unsere Kommunikations&shy;plattform mit <br class="mobile-hidden" />Expertenunterstützung
				</div>
				<div class="tablist__link" data-tab="4">
					<strong>Sicherheit</strong>
					Wie kommen <br class="mobile-hidden" />99,999% Erreichbarkeit zustande?
				</div>
			</div>

			<div class="tablist__content tablist__content--active" data-tab="1">
				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/softphone-browser-white.svg" alt="" />
							</div>
							<h4 class="centered">Softphone im Browser/Desktop</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/sip-telephone-white.svg" alt="" />
							</div>
							<h4 class="centered">SIP Tischtelefon</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/voip-telefonanlage-white.svg" alt="" />
							</div>
							<h4 class="centered">Agentenmaske im Browser und viele weitere</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="2">
				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/client-logos/beispiel-apps-1.svg" alt="" />
							</div>
							<h4 class="centered">Ticketing-Systeme</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/client-logos/beispiel-apps-2.svg" alt="" />
							</div>
							<h4 class="centered">Business Intelligence-Tools</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/menu-apis-white.svg" alt="" />
							</div>
							<h4 class="centered">Eigene Systeme verbinden</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="3">
				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/menu-callcenter-bot-white.svg" alt="" />
							</div>
							<h4 class="centered">Zukunftssichere <br />Technologie</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/first-call-white.svg" alt="" />
							</div>
							<h4 class="centered">Expertenberatung</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs">
						<div class="co-video">
							<div class="co-video__poster">
								<img src="/assets/images/photos/video-preview-reduced.png" alt="" />
							</div>
							<a class="co-video__play openModal trackedElement" data-label="Button Video" data-category="Link" data-action="Show Video-Check24 Modal" data-modal="video-casestudy-check24" title="Video zu richtig gutem Kundenservice - Casestudy Check24"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="4">
				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-speed-icon.svg" alt="" />
							</div>
							<h4 class="centered">Bereitstellung in wenigen Tagen statt Monaten</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-germany-icon.svg" alt="" />
							</div>
							<h4 class="centered">Telefonie mit deutschem Datenschutz-Standard</h4>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-availability-icon.svg" alt="" />
							</div>
							<h4 class="centered">Garantierte 99,999% Erreichbarkeit</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<p class="desktop-hidden">
			<a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Erstgespräch buchen</a>
		</p>

		<!-- Desktop Tabs -->
		<div class="tablist tablist--on-black mobile-hidden" style="margin-top:0">
			<div class="tablist__links tablist__links--full-width">
				<div class="tablist__link" data-tab="1">
					<strong>Flexibel<br />telefonieren</strong>
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Integrations-<br />möglichkeiten</strong>
				</div>
				<div class="tablist__link" data-tab="3">
					<strong>Statistiken</strong>
				</div>
				<div class="tablist__link" data-tab="4">
					<strong>Sicherheit</strong>
				</div>
			</div>

			<div class="tablist__content" data-tab="1">
				<h3 class="centered">Flexibel heißt bei CallOne: <br />Telefonieren wie und wo sie möchten!</h3>
				<br />

				<div class="small-tabs small-tabs--clear small-tabs--on-black">
					<div class="small-tabs__tabs">
						<div class="small-tabs__tab" data-tab="1">Agentenmaske</div>
						<div class="small-tabs__tab" data-tab="2">Softphone</div>
						<div class="small-tabs__tab" data-tab="3">Microsoft Teams</div>
						<div class="small-tabs__tab" data-tab="4">Tischtelefon</div>
						<div class="small-tabs__tab" data-tab="5">Handyclient</div>
					</div>
					<div class="small-tabs__content" data-tab="1">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<img src="/assets/images/photos/agent-view-desktop.png" alt="" />
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Eine webbasierte Oberfläche speziell konzipiert für höchste Ansprüche Ihre Agenten im Kundenservice und Sales.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>
										Integriertes Softphone im Browser<br />
										<span class="subtext">Keine Installation notwendig. Headset anschließen und lostelefonieren.</span>
									</li>
									<li>
										Zugeschnitten auf Ihre Bedürfnisse<br />
										<span class="subtext">Frei konfigurierbar mit Einbindung ihrer Daten (Iframe oder Link), Anrufgründe und smarten Weiterleitungsfunktionen.</span>
									</li>
									<li>
										Bereitstellung sofort<br />
										<span class="subtext">Agenten und Agentinnen erhalten Ihre Zugangsdaten und können mit diesem intuitiven Client sofort lostelefonieren.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="2">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<img src="/assets/images/photos/softphone-view.png" alt="" />
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Für Unternehmen, die eine optimale Einbindung der Telefonie in Ihre Unternehmenssoftware wünschen.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>
										Browser Extension mit Click-to-Dial<br />
										<span class="subtext">Softclient für alle gängigen Browser integriert als Extension, heißt Telefonieren auch wenn kein Tab geöffnet ist.</span>
									</li>
									<li>
										Softphone mit Autokonfiguration<br />
										<span class="subtext">Alternativ bieten wir kostenfreie Softphone vorkonfiguriert für Ihre Mitarbeiter.</span>
									</li>
									<li>
										Javascript-Bibliothek vollständig eingebunden<br />
										<span class="subtext">Möglichkeit in Ihrer eigenen Businesslösung über CallOne zu telefonieren.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="3">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<img src="/assets/images/photos/microsoft-teams.png" alt="" />
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Call Center Software in Kombination mit Microsoft Teams? Nutzen Sie das beste aus beiden Lösungen in Kombination.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>
										Optimale Einbindung Ihres gesamten Unternehmens<br />
										<span class="subtext">Nutzen Sie die Vorteile von Teams und lösen Sie Kundenfälle auch abteilungsübergreifend mit den Weiterleitungsmöglichkeiten, die Teams ihnen bietet.</span>
									</li>
									<li>
										Kombinierbar mit unserer Agentenmaske<br />
										<span class="subtext">Eine perfekte Mischung für Unternehmen, die auf Teams setzen, weitreichende Agentenfunktionen nicht missen wollen.</span>
									</li>
									<li>
										Alles in einem Tool<br />
										<span class="subtext">Nutzen Sie Teams auch für ausgehende Telefonate und mobil. Die Möglichkeiten sind grenzenlos und erlauben auch einen hybriden Mischbetrieb.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="4">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<img src="/assets/images/photos/sip-tischtelefon-reduced.png" alt="" />
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Binden Sie flexibel jedes gängige SIP-Tischtelefon oder DECT-Telefon ein und nutzen sie die Möglichkeit der bequemen Verwaltung in einer Oberfläche.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>
										Optimales Zusammenspiel mit der ACD<br />
										<span class="subtext">Agenten an- und abmelden. Gespräche aus der Warteschleife ziehen oder freie Sitzplatzwahl.</span>
									</li>
									<li>
										Neue Updates auf Knopfdruck<br />
										<span class="subtext">Spielen Sie neue Firmware über CallOne ein oder hinterlegen sie Kurzwahltasten im Handumdrehen – einfacher geht&rsquo;s nicht.</span>
									</li>
									<li>
										Verschlüsslung auf Spitzenniveau<br />
										<span class="subtext">Verschlüsseln Sie die Endgeräte mittels VPN und sichern Sie Gesprächsinhalte und Übertragung mittels SRTP und TLS.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-tabs__content" data-tab="5">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
								<img src="/assets/images/photos/phone-client.png" alt="" />
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
								<p class="bigtext">Ob für Notfälle oder dauerhaft. Die Einbindung von Mobilfunkgeräten ist auf vielfältige Weise mit CallOne möglich.</p>
								<br />
								<ul class="list list--checkmarks list--on-black">
									<li>
										Viele mobile Möglichkeiten<br />
										<span class="subtext">Ob direkt als hinterlegtes SIP-Konto im Betriebssystem oder mittels mobiler App oder als sog. PSTN-Weiterleitung aufs Handy.</span>
									</li>
									<li>
										Rausrufen mit der Officenummer<br />
										<span class="subtext">Auch mit dem Handy über die Büronummer telefonieren.</span>
									</li>
									<li>
										Auch ohne mobiles Netz nutzbar<br />
										<span class="subtext">Sie können bequem über WLAN über die Datenleitung telefonieren auch wenn einmal kein Handyempfang vorhanden sein sollte.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<h3 class="centered">Telefonie mit Lieblings-Apps verbinden</h3>
				<br />

				<div class="co-grid" style="width:80%;margin-left:auto;margin-right:auto;background-image:url(/assets/images/backgrounds_png/background-layer-reduced.png);background-size:contain;background-position:center;background-repeat:no-repeat;">
					<div class="co-grid__col co-grid__col--1-xs"></div>
					<div class="co-grid__col co-grid__col--3-xs">
						<div class="carddeck carddeck--no-indicators centered">
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<img src="/assets/images/client-logos/Hubspot-Card.svg" alt="" />
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<img src="/assets/images/client-logos/logo-zendesk.svg" alt="" />
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<img src="/assets/images/client-logos/Pipedrive.svg" alt="" />
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<img src="/assets/images/client-logos/Freshdesk.svg" alt="" />
							</div>
							<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
								<img src="/assets/images/client-logos/logo-salesforce.svg" alt="" />
							</div>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs co-grid__col--vcentered"></div>
					<div class="co-grid__col co-grid__col--3-xs co-grid__col--vcentered">
						<div class="content-box content-box--white centered">
							<img src="/assets/images/icons_svg/api-integration-Card.svg" alt="" style="display:inline-block" />
						</div>
					</div>
					<div class="co-grid__col co-grid__col--1-xs"></div>
				</div>

				<div class="co-grid" style="width:80%;margin-left:auto;margin-right:auto">
					<div class="co-grid__col co-grid__col--5-xs right">
						<h3>Fertige Konnektoren zu Ihren Lieblings-Apps</h3>
						<p>Verbinden Sie gängige Ticketing, CRM-, Ticketing-, BI- oder ERP-Tools für effiziente und zielgerichtete Zusammenarbeit.</p>
					</div>
					<div class="co-grid__col co-grid__col--2-xs"></div>
					<div class="co-grid__col co-grid__col--5-xs left">
						<h3>Ihre Systeme flexibel angebunden</h3>
						<p>Wir liefern Ihnen alles was Sie benötigen, um sich optimal anzubinden und den Effizienzturbo zu zünden.</p>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="3">
				<h3 class="centered">Die perfekte Kombination aus <br />Technologie und persönlicher Beratung</h3>
				<br />

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--4-xs right">
						<h4>Technologie „Made in Germany“</h4>
						<p>Die CallOne Callcenter Software verspricht höchste Zuverlässigkeit und stetige Weiterentwicklung. Wir verhelfen zu Höchstleistungen verbessern steig unsere Technologie für die optimale Customer Experience.</p>
					</div>
					<div class="co-grid__col co-grid__col--4-xs centered">
						<img src="/assets/images/icons_png/overlap.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--4-xs left">
						<h4>Expertenberatung</h4>
						<p>Bei uns arbeiten Projektmanager*innen und Kunden Hand in Hand – tagtäglich! Sie erhalten einen zentralen Ansprechpartner. Dies schafft nicht nur unglaubliche Geschwindigkeit im Projekt sondern auch messbare Erfolge in Ihrem ROI.</p>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="co-video">
							<div class="co-video__poster">
								<img src="/assets/images/photos/video-preview-reduced.png" alt="" />
							</div>
							<a class="co-video__play openModal trackedElement" data-label="Button Video" data-category="Link" data-action="Show Video-Check24 Modal" data-modal="video-casestudy-check24" title="Video zu richtig gutem Kundenservice - Casestudy Check24"></a>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<blockquote class="quote">„Über richtig guten Kundenservice”</blockquote>
						<p>
							<strong>Dr. Rainer Klipp</strong><br />
							Geschäftsführer von Check24 Versicherungen
						</p>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="4">
				<h3 class="centered">Datenschutz und Ausfallsicherheit</h3>
				<br />

				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--4-xs cards__card cards__card--transparent cards__card--no-padding cards__card--flex-vertical">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-speed-icon.svg" alt="" />
							</div>
							<h4 class="centered">Bereitstellung in wenigen Tagen statt Monaten</h4>
						</div>
						<div class="cards__card--dark-bottom">
							<p>Kein nerviger Self-Service mehr. Ein CallOne Experte berät Sie persönlich. In kürzester Zeit ist alles eingerichtet, wie sie es brauchen. Und auch schon live.</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs cards__card cards__card--transparent cards__card--no-padding cards__card--flex-vertical">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-germany-icon.svg" alt="" />
							</div>
							<h4 class="centered">Telefonie mit deutschem Datenschutz-Standard</h4>
						</div>
						<div class="cards__card--dark-bottom">
							<p>Das Privacy Shield Abkommen braucht Sie nicht mehr zu interessieren. Unsere Telefonie-Lösungen hosten wir ausschließlich in Deutschland.</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs cards__card cards__card--transparent cards__card--no-padding cards__card--flex-vertical">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-availability-icon.svg" alt="" />
							</div>
							<h4 class="centered">Garantierte 99,999% Erreichbarkeit</h4>
						</div>
						<div class="cards__card--dark-bottom">
							<p>Mehr als genug Backup-Server, supersicherer DDoS-Schutz und individuelle Redundanzkonzepte machen CallOne-Lösungen extrem stabil und rund um die Uhr erreichbar.</p>
						</div>
					</div>
				</div>

				<!-- TODO: Add link to datenschutz -->
				<?php /* <p>
					<a href="#" class="btn btn--border-white btn--arrow-right btn--centered">Mehr erfahren</a>
				</p> */ ?>
			</div>
		</div>
	</div>
</div>

<div class="section section--telefonanlage-slider section--telefonanlage-slider-1 section--telefonanlage-slider-active" id="telefonanlage1">
    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-bottom">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
                <h1>Holen Sie sich kompetente Partner an Board: Wir sind mehr als Dienstleister.</h1>
                <p class="bigtext">Ihr Erfolg in der Businesstelefonie steht für uns an oberster Stelle. Als Infrastrukturanbieter legen wir Wert darauf, Ihren Anforderungen zu 100 % gerecht zu werden.</p>

                <br /><br />

                <div class="index-card">
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
                        
                        <p class="bigtext">Sie erhalten Unterstützung sobald Sie sie brauchen. Unsere Kunden lieben Schnelligkeit und um Ihnen diese zu ermöglichen, stellen wir Ihnen einen persönlichen Ansprechpartner zur Seite So können Ihre konkreten Anliegen passgenau erfüllt werden. Unser Team aus Entwicklern, Projektleitern und Telekommunikationsexperten bildet dabei die Task Force für die erfolgreiche Telefonie Ihres Unternehmens.</p>

                        <p class="mobile-centered">
							<!-- TODO: Add link -->
                            <a href="#" class="btn btn--secondary btn--centered mobile-hidden">Wie wir sie zum erfolg führen</a>
                            <a href="#" class="btn btn--secondary btn--centered btn--full-width desktop-hidden">Wie wir sie zum erfolg führen</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--telefonanlage-slider section--telefonanlage-slider-2" id="telefonanlage2">
    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-bottom">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
				<h1>Holen Sie sich kompetente Partner an Board: Wir sind mehr als Dienstleister.</h1>
                <p class="bigtext">Ihr Erfolg in der Businesstelefonie steht für uns an oberster Stelle. Als Infrastrukturanbieter legen wir Wert darauf, Ihren Anforderungen zu 100 % gerecht zu werden.</p>

                <br /><br />

                <div class="index-card">
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
                            <div class="co-grid__col co-grid__col--hidden-md co-grid__col--6-md number-card">
                                <div class="number-card__number" style="--color:#86ed18;">
                                    <span class="counting-number" data-start="0" data-end="127">127</span>
                                </div>
                                Softwareupdates*
                            </div>
                        </div>

                        <p class="mobile-centered">
							<!-- TODO: Add link -->
                            <a href="#" class="btn btn--secondary btn--centered mobile-hidden">TODO: Link</a>
                            <a href="#" class="btn btn--secondary btn--centered btn--full-width desktop-hidden">TODO: Link</a>
                        </p>

                        <p class="subtext centered">*erreichte Referenzwerte unserer Kunden</p>

						<br class="mobile-hidden" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--telefonanlage-slider section--telefonanlage-slider-3" id="telefonanlage3">
    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-bottom">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
				<h1>Holen Sie sich kompetente Partner an Board: Wir sind mehr als Dienstleister.</h1>
                <p class="bigtext">Ihr Erfolg in der Businesstelefonie steht für uns an oberster Stelle. Als Infrastrukturanbieter legen wir Wert darauf, Ihren Anforderungen zu 100 % gerecht zu werden.</p>

                <br /><br />

                <div class="index-card">
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

                        <p class="mobile-centered">
                            <a href="/callcenter-software#mehrwertrechner" class="btn btn--secondary btn--centered mobile-hidden">Jetzt ROI berechnen</a>
                            <a href="/callcenter-software#mehrwertrechner" class="btn btn--secondary btn--centered btn--full-width desktop-hidden">Jetzt ROI berechnen</a>
                        </p>

						<br class="mobile-hidden" />
						<br class="mobile-hidden" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>		
		
<div class="section section--light-green" id="geschichten">
	<div class="section__content section__content--wide">
		<h1 class="centered">Gehen auch Sie den Weg der Effizienz: <br />Entscheiden Sie sich jetzt für CallOne!</h1>
		
		<div class="tablist">
			<div class="tablist__links tablist__links--full-width">
				<div class="tablist__link" data-tab="1" data-sticky-text="Sales / Customer Service">
					<strong>Passgenaue Telefonanlage für Sales und Customer Service</strong>
				</div>
				<div class="tablist__link" data-tab="2" data-sticky-text="Microsoft Teams">
					<strong>Telefonieren mit Microsoft Teams</strong>
				</div>
				<div class="tablist__link" data-tab="3" data-sticky-text="Warteschleifen">
					<strong>Warteschleifen optimal steuern</strong>
				</div>
				<div class="tablist__link" data-tab="4" data-sticky-text="Schnittstellenintegration">
					<strong>Schnittstellen-Integration in die eigenen Systeme</strong>
				</div>
			</div>

			<div class="tablist__content" data-tab="1">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow">
							<p>
								<img src="/assets/images/client-logos/gastro-hero-logo-text-inverted.png" alt="" />
							</p>
							<br />
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Fachhandel für Gastronomiebedarf</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">100-150 Agenten</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">24 Monaten</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header">
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-green.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>Cloud-Telefonanlage</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-green.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-green.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: Text 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h2>Fullservice Telefonie mit Fokus auf Sales und Kundenservice</h2>
						<p class="bigtext">TODO: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas excepturi minus reiciendis corporis possimus, eligendi vero esse nostrum voluptatem id ducimus enim tempora libero necessitatibus deleniti omnis. Minus, vitae doloribus.</p>
						<p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered image--shadow" style="background-image:url(/assets/images/photos/gastro-hero-beispiel-image.png)">

					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="2">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow">
							<p>
								<img src="/assets/images/client-logos/gastro-hero-logo-text-inverted.png" alt="" />
							</p>
							<br />
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Fachhandel für Gastronomiebedarf</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">100-150 Agenten</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">24 Monaten</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header">
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-green.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>Cloud-Telefonanlage</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-green.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-green.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: Text 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h2>Fullservice Telefonie mit Fokus auf Sales und Kundenservice</h2>
						<p class="bigtext">TODO: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas excepturi minus reiciendis corporis possimus, eligendi vero esse nostrum voluptatem id ducimus enim tempora libero necessitatibus deleniti omnis. Minus, vitae doloribus.</p>
						<p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered image--shadow" style="background-image:url(/assets/images/photos/gastro-hero-beispiel-image.png)">

					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="3">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow">
							<p>
								<img src="/assets/images/client-logos/gastro-hero-logo-text-inverted.png" alt="" />
							</p>
							<br />
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Fachhandel für Gastronomiebedarf</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">100-150 Agenten</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">24 Monaten</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header">
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-green.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>Cloud-Telefonanlage</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-green.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-green.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: Text 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h2>Fullservice Telefonie mit Fokus auf Sales und Kundenservice</h2>
						<p class="bigtext">TODO: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas excepturi minus reiciendis corporis possimus, eligendi vero esse nostrum voluptatem id ducimus enim tempora libero necessitatibus deleniti omnis. Minus, vitae doloribus.</p>
						<p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered image--shadow" style="background-image:url(/assets/images/photos/gastro-hero-beispiel-image.png)">

					</div>
				</div>
			</div>
			<div class="tablist__content" data-tab="4">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<div class="content-box content-box--white content-box--shadow">
							<p>
								<img src="/assets/images/client-logos/gastro-hero-logo-text-inverted.png" alt="" />
							</p>
							<br />
							<h4 class="no-gutter-bottom">Branche</h4>
							<p class="bigtext">Fachhandel für Gastronomiebedarf</p>
							<br />
							<h4 class="no-gutter-bottom">Skalierung</h4>
							<p class="bigtext">100-150 Agenten</p>
							<br />
							<h4 class="no-gutter-bottom">Kunde seit</h4>
							<p class="bigtext">24 Monaten</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h3>Kunden Setup</h3>
						<div class="fader fader--no-header">
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-green.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>Cloud-Telefonanlage</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-green.png" alt="">
									<img src="/assets/images/icons_png/icon-3-grey.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
							<div class="fader__item">
								<p>
									<img src="/assets/images/icons_png/icon-1-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-2-grey.png" alt="">
									<img src="/assets/images/icons_png/icon-3-green.png" alt="">
								</p>
								<br />
								<div class="left-border">
									<h4>TODO: Text 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas semper elementum placerat ac. Sed est cras porttitor placerat odio erat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
						<h2>Fullservice Telefonie mit Fokus auf Sales und Kundenservice</h2>
						<p class="bigtext">TODO: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas excepturi minus reiciendis corporis possimus, eligendi vero esse nostrum voluptatem id ducimus enim tempora libero necessitatibus deleniti omnis. Minus, vitae doloribus.</p>
						<p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Customer Success bei CallOne</a></p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered image--shadow" style="background-image:url(/assets/images/photos/gastro-hero-beispiel-image.png)">

					</div>
				</div>
			</div>
		</div>

		<h3 class="centered">Neugierig geworden?</h3>
		<h4 class="centered">Jetzt unverbindliches Erstgespräch aufnehmen!</h4>

		<p>
			<a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Kontakt aufnehmen</a>
		</p>
	</div>
</div>

<?php
// $faqs->structured_data_get_code ();
// $faqs->html_get_code ();
?>

<div class="modal video-casestudy-check24">
  <?php include('./partials/modal-video-check24.php'); ?>
</div>

<script>
    let telefonanlageSlides = document.querySelectorAll('.section--telefonanlage-slider');
    let nextSlideButtons = document.querySelectorAll('.index-card__arrow--right');
    let prevSlideButtons = document.querySelectorAll('.index-card__arrow--left');
    let anchorButton = document.querySelector('.anchor-telefonanlage');
    let currentSlide = 1;
    let telefonanlageSlidesInterval = null;
    window.addEventListener('scroll', e => {
        let offsetTop = telefonanlageSlides[0].getBoundingClientRect().top;
        if (!telefonanlageSlidesInterval && offsetTop < window.innerHeight * 0.7) {
            telefonanlageSlidesInterval = setInterval(nextSlide, 3000);
        }
    });

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
        if (currentSlide > telefonanlageSlides.length)
            currentSlide = 1;
        updateSlide();
    }
    function prevSlide() {
        currentSlide--;
        if (currentSlide < 1)
            currentSlide = telefonanlageSlides.length;
        updateSlide();
    }
    function updateSlide() {
        anchorButton.setAttribute('href', '#telefonanlage' + currentSlide);
        telefonanlageSlides.forEach(telefonanlageSlide => {
            telefonanlageSlide.classList.remove('section--telefonanlage-slider-active');
            if (telefonanlageSlide.classList.contains('section--telefonanlage-slider-'+currentSlide))
                telefonanlageSlide.classList.add('section--telefonanlage-slider-active');
        });
    }
</script>