<?php
$product = new product ('Callcenter-Software', 'Callcenter-Software mit Computer Telephony Integration (CTI), professioneller Kundenservice, Warteschleifenmanagement, Callbackfunktion');
$product->image_set ('https://www.callone.de/assets/images/photos/agentenmaske-hintergrund-mobile.jpg');
$product->reviews_load ();

$product->structured_data_get_code ();
$faqs = new faqs ();
$faqs->faq_add (
    'Was bedeutet Cloud ACD?',
    '<p>Die Abkürzung ACD steht für Automatic Call Distribution und damit für die intelligente Anrufverteilung in Ihrem Callcenter. Mit Hilfe einer umfangreichen Agentenverwaltung, Warteschleifenmanagement, smarten Statistiktools und Echtzeit-Callcenter-Monitoring, können Sie Ihre Unternehmensressourcen effizient nutzen und optimale Erreichbarkeit in Ihrem Callcenter sicherstellen.

	Die CallOne ACD ist eine Cloud-Lösung. Sie müssen also keine teure Hardware oder ACD-Erweiterung für die Telefonanlage kaufen, sondern können die Cloud ACD einfach online nutzen. Somit bietet Ihnen die Lösung alle Vorteile einer Callcenter-Software ohne den zusätzlichen IT-Aufwand einer stationären Telefonanlage. Mehr Informationen zur CallOne Cloud ACD finden Sie <a href="https://www.callone.de/callcenter-software">hier</a>.</p>'
);
$faqs->faq_add (
	'Was ist ein Contact Center?',
	'<p>Das Contact Center ist eine Abteilung im Unternehmen, die sich um die gesamte Kundenkommunikation kümmert. Dabei kann es sich um eingehende oder ausgehende Kommunikation handeln. Meist übernimmt das Contact Center die Kommunikation über verschiedene Kanäle hinweg (Omnichannel). Angebundene Kanäle sind beispielsweise Anrufe, E-Mails, Chat-Anfragen, SMS, Faxe oder auch Briefpost. Gerade in den letzten Jahren sind in den meisten Unternehmen vielfältige Kontaktmöglichkeiten für Kunden dazu gekommen, die einen Zusammenschluss aller Kanäle in einem zentralen Kundenkontakt immer sinnvoller werden lassen. Eigentlich ist ein Call Center im Gegensatz zu einem Contact Center auf den Bereich Telefonie spezialisiert. Mittlerweile werden die beiden Begriffe allerdings mehr oder weniger synonym verwendet und beinhalten meist beide auch Multichannel-Kontakt. Ziel sollte generell immer eine einheitliche Customer Experience sein. Viele Contact Center werden über Cloud-Lösungen abgebildet (<a href="https://www.callone.de/faq/was-ist-cloud-computing/">hier</a> finden Sie mehr Informationen zum Thema Cloud). Mit einer entsprechenden Call oder Contact Center Software haben Unternehmen damit die Möglichkeit alle Kontaktkanäle mit intelligenten Lösungen zu bearbeiten und wichtige KPIs im Auge zu behalten. Zudem bieten die passenden Software-Lösung umfassende Möglichkeiten eingehende Kundenkommunikation zu steuern und Mitarbeitende an diversen Standorten optimal in den Service zu integrieren.</p>'

);
$faqs->faq_add (
	'Kann man durch die CallOne Callcenter Software Kosten sparen?',
	'<p>Ja. Durch die intelligente Anrufverteilung der Cloud ACD bzw. Callcenter Software sorgen Sie für eine effiziente Arbeitsweise in Ihrem Callcenter und können damit die Callbearbeitungszeiten erheblich senken. Durch die daraus resultierende bessere Auslastung Ihres Callcenters, senken Sie automatisch Ihre Kosten.</p>'

);
$faqs->faq_add (
	'Können Mitarbeiter am Heimarbeitsplatz oder von unterwegs auch Teil der Lösung sein?',
	'<p>Ja, per VoIP oder über jede Art von Rufnummer (Festnetz oder Mobil) können Ihre Mitarbeiter problemlos in die Callcenter-Software eingebunden werden. Die Lösung ist somit von Ihren Agenten standortunabhängig weltweit nutzbar.</p>'

);
$faqs->faq_add (
	'Wie können Agenten verschiedenen Skillgruppen zugeordnet werden?',
	'<p>Agenten können auf zwei verschiedenen Wegen Skillgruppen zugeordnet werden: Wenn ein Agent neu angelegt wird und bereits eine Vielzahl von Skillgruppen vorhanden ist, kann der Agent über die Agenteneinstellungen den verfügbaren Skillgruppen zugeordnet werden. Wenn eine Skillgruppe neu angelegt wurde, macht es Sinn nicht jeden Agenten einzeln auszuwählen und zuzuordnen, sondern die Einstellungen in der Skillgruppe direkt über „Agentenzugehörigkeit bearbeiten“ vorzunehmen.</p>'
?>


<div class="section section--light-green-white section--mobile-divider">
	<div class="hero">
		<div class="hero__text">
			<h1>Die Callcenter Software <br class="mobile-hidden" />für Service & Sales:</h1>
			<p>Zufriedene Kunden und produktivere Agenten!</p>

			<div class="co-grid co-grid--small-gutter centered subtext">
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-md">
                    <img src="/assets/images/icons_svg/usp-germany-icon-square.svg" alt="Call Center Software mit hohem deutschen Datenschutzstandard" width="50" height="50" />
                    <p style="margin-top:10px">DSGVO<br />konform</p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-md">
                    <img src="/assets/images/icons_svg/usp-speed-icon-square.svg" alt="Call Center Software wird schnell bereitgestellt" width="50" height="50" />
                    <p style="margin-top:10px">Rasante Bereitstellung</p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-md">
                    <img src="/assets/images/icons_svg/usp-availability-icon-square.svg" alt="Call Center Software ist sehr gut erreichbar" width="50" height="50" />
                    <p style="margin-top:10px">Garantierte <br />Erreichbarkeit</p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-md">
                    <img src="/assets/images/client-logos/icon-german-cloud.svg" alt="Deutsche Cloud" width="50" height="50" />
                    <p style="margin-top:10px">Deutsche<br />Cloud</p>
                </div>
            </div>

			<p class="mobile-centered">
				<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Live Demo buchen</a>
			</p>
		</div>
		<div class="hero__image">
			<img src="/assets/images/illus/hero-ccs.png" alt="CallOne Callcenter Software" width="465" height="465" />
		</div>
	</div>

	<div class="anchors">
		<div class="anchors__title">
			<strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
		</div>
		<div class="anchors__links">
			<a href="#agenten">Für Agenten</a>
			<a href="#teamleiter">Für Teamleiter</a>
			<a href="#administratoren">Für Administratoren</a>
			<a href="#funktionen">Funktionen</a>
			<a href="#integration">Integration</a>
		</div>
	</div>
</div>

<div class="section">
	<div class="section__content">
		<h2 class="centered mobile-left">Die Callcenter Software für die höchsten Ansprüche an Sales & Service</h2>
		<p class="centered mobile-left bigtext">Sie wünschen sich eine VoIP-Lösung, die speziell für Kundenservice und Sales konzipiert wurde. Mit der CallOne Callcenter Software bekommen Agenten, Manager und Administratoren genau das, was sie brauchen.</p>
	</div>	

	<div class="section__content section__content--wide">
		<div class="co-grid" id="agenten">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--order-2-xs co-grid__col--vcentered">
				<div class="tag">
					<img src="/assets/images/icons_svg/callone-logo-white.svg" alt="CallOne Telekommunikationslösungen für Sales und Service" width="13" height="14" /> Für Agenten
				</div>
				<h2>Modern und browserbasiert: <br class="mobile-hidden" />Die Agentenmaske</h2>

				<ul class="list list--checkmarks list--checkmarks-green bigtext">
					<li>Informationen über Status von Agenten und Gruppen</li>
					<li>Telefonieren aus der Agentenmaske oder mit dem CallOne Softphone</li>
					<li>Anrufe, Chats und E-Mails mit den Kundendaten im CRM verknüpfen</li>
				</ul>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--order-1-xs co-grid__col--vcentered">
				<img src="/assets/images/illus/ccs-agenten.png" alt="Modern und browserbasiert: Die Agentenmaske" width="570" height="400" class="co-grid__image--full-width" />
			</div>
		</div>

		<br />
		<br />

		<div class="co-grid" id="teamleiter">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
				<img src="/assets/images/illus/ccs-teamleiter.png" alt="Boost für Service & Sales: Mit Statistiken" width="570" height="400" class="co-grid__image--full-width" />
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
				<div class="tag">
					<img src="/assets/images/icons_svg/callone-logo-white.svg" alt="CallOne Telekommunikationslösungen für Sales und Service" width="13" height="14" /> Für Teamleiter
				</div>
				<h2>Boost für Service & Sales: <br class="mobile-hidden" />Mit Statistiken</h2>

				<ul class="list list--checkmarks list--checkmarks-green bigtext">
					<li>Schneller Überblick über die Qualität des Service-Levels</li>
					<li>Zielgerichtete Steuerung und objektive Bewertung von Agenten</li>
					<li>Datenbasierte Optimierungen durch Überblick über wichtige KPIs</li>
				</ul>
			</div>
		</div>

		<br />
		<br />

		<div class="co-grid" id="administratoren">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--order-2-xs co-grid__col--vcentered">
				<div class="tag">
					<img src="/assets/images/icons_svg/callone-logo-white.svg" alt="CallOne Telekommunikationslösungen für Sales und Service" width="13" height="14" /> Für Administratoren
				</div>
				<h2>Datenbasierte Effizienz: <br class="mobile-hidden" />Mit Dashboards & Analysen</h2>

				<ul class="list list--checkmarks list--checkmarks-green bigtext">
					<li>Entwicklungen erkennen und optimal steuern, um Effizienz zu erhöhen und Kosten zu senken</li>
					<li>Performantere Ergebnisse der Mitarbeiter durch gezielte Schulungen</li>
					<li>Wichtige Kennzahlen im Blick haben und automatisierte Berichterstattung erhalten</li>
				</ul>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--order-1-xs co-grid__col--vcentered">
				<img src="/assets/images/illus/statistics-header-illustration-optimized.svg" alt="Datenbasierte Effizienz: Mit Dashboards & Analysen" width="569" height="526" class="co-grid__image--full-width" />
			</div>
		</div>
	</div>
</div>

<div class="section section--colored" style="--bg:#edf2e2;">
	<div class="section__content section__content--wide">
		<div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--vcentered">
				<img src="/assets/images/client-logos/logo-check24-black.svg" alt="Unser Kunde Check24" width="370" height="89" />
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md co-grid__col--vcentered">
				<div class="quote" style="--fontSize:24px">
					&ldquo;Von einer Lösung für den telefonischen Support unserer Sachversicherungsprodukte haben wir uns vor allem bessere Transparenz, optimale Vorausplanbarkeit und eine Integration der Lösung in unsere bereits genutzten Businesssysteme erhofft. Genau das haben wir bei CallOne gefunden.&rdquo;
				</div>
				<p>
					<strong>Dr. Rainer Klipp</strong><br />
					Geschäftsführer Check24 Sachversicherungen
				</p>

				<p class="mobile-centered">
					<a href="/case-study-check24" class="btn btn--border-black">Case Study lesen</a>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="section" id="funktionen">
	<div class="section__content section__content--narrow">
		<h2 class="centered mobile-left">Die wichtigsten Funktionen aus über 200 Möglichkeiten im Überblick</h2>
		<p class="centered mobile-left bigtext">Die CallOne Callcenter Software bietet umfangreiche Funktionen. So ist Ihre ACD passgenau auf Ihre Ansprüche abgestimmt. Für den Seelenfrieden Ihrer IT-Abteilung finden Sie immer genau das Richtige.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
				<div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/callback-black.svg" alt="Funktion: Rückruf-Optionen" width="70" height="70" style="height:70px" class="co-grid__image--full-width" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Rückruf-Optionen</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Ihre Warteschleife ist schon voll? Verkürzen Sie die Wartezeit Ihrer Kunden mit praktischen Rückruf-Optionen.<br class="mobile-hidden" /><br class="mobile-hidden" /></p>

                    <p><a href="/telefonanlage-mit-warteschleife#features" class="btn btn--border-bottom btn--arrow-right-small">Mehr erfahren</a></p>
                </div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
				<div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/menu-overview.svg" alt="Funktion: Warteschleifen" width="70" height="70" style="height:70px" class="co-grid__image--full-width" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Warteschleifen</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Statt ewigem Warten bekommen Ihre Kunden smarte Warteschleifen für hohe Zufriedenheit. Mit virtuellen Warteschleifen und Rückruf-Optionen.</p>

                    <p><a href="/telefonanlage-mit-warteschleife" class="btn btn--border-bottom btn--arrow-right-small">Mehr erfahren</a></p>
                </div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
				<div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/menu-apis.svg" alt="Funktion: Schnittstellenanbindung" width="70" height="70" style="height:70px" class="co-grid__image--full-width" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Schnittstellen&shy;anbindung</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Integrieren Sie eigene Hardware, CRM-Systeme, Google Adwords und mehr in Ihre CallOne Lösung.<br class="mobile-hidden" /><br class="mobile-hidden" /></p>

                    <p><a href="/voip-api" class="btn btn--border-bottom btn--arrow-right-small">Mehr erfahren</a></p>
                </div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
				<div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/menu-numbers.svg" alt="Funktion: Auswahlmenüs" width="70" height="70" style="height:70px" class="co-grid__image--full-width" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Auswahlmenüs</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Ermöglichen Sie Ihren Kunden mit passenden Auswahlmenüs, genau den richtigen Ansprechpartner für das Anliegen zu bekommen.</p>

                    <p><a href="/callcenter-software-funktionen#Anrufsteuerung" class="btn btn--border-bottom btn--arrow-right-small">Mehr erfahren</a></p>
                </div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
				<div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/icon-flexibilitaet.svg" alt="Funktion: Routing-Optionen" width="70" height="70" style="height:70px" class="co-grid__image--full-width" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Routing-Optionen</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Erstellen Sie genau die Routings, die Sie brauchen. Leiten Sie Anrufe entsprechend verschiedener Sprachen oder Kategorien zu den passenden Agenten.</p>

                    <p><a href="/callcenter-software-funktionen#Anrufverteilung" class="btn btn--border-bottom btn--arrow-right-small">Mehr erfahren</a></p>
                </div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
				<div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/big_03.svg" alt="Funktion: Live-Dashboards" width="91" height="70" style="height:70px" class="co-grid__image--full-width" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Live-Dashboards</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Behalten Sie den Überblick über Ihre wichtigsten KPIs und Statistiken. Erstellen Sie sich Ihr Echtzeit-Dashboard, wie Sie es brauchen.</p>

                    <p><a href="/statistiken" class="btn btn--border-bottom btn--arrow-right-small">Mehr erfahren</a></p>
                </div>
			</div>
		</div>

		<p class="centered">
			<a href="/callcenter-software-funktionen" class="btn btn--primary">
				Für Experten:<br />
				Alle Funktionen
			</a>
		</p>
	</div>
</div>

<div class="section section--black">
	<div class="section__content section__content--wide">
		<p class="centered">Eine Auswahl unserer Kunden:</p>

		<div class="logos logos--fade" style="--height:30px">
			<img src="/assets/images/client-logos/logo-snipes-white.svg" alt="Unser Kunde snipes" width="85" height="30" />
			<img src="/assets/images/client-logos/logo-bett1-white.svg" alt="Unser Kunde bett1" width="62" height="30" />
			<img src="/assets/images/client-logos/logo-flaconi-white.svg" alt="Unser Kunde flaconi" width="118" height="30" />
			<img src="/assets/images/client-logos/logo-gastro-hero-white.svg" alt="Unser Kunde GastroHero" width="132" height="30" />
			<img src="/assets/images/client-logos/logo-vimcar-white.svg" alt="Unser Kunde Vimcar" width="152" height="30" />
		</div>
		<div class="logos logos--fade" style="--height:30px">
			<img src="/assets/images/client-logos/logo-igus-white.svg" alt="Unser Kunde IGUS" width="58" height="30" />
			<img src="/assets/images/client-logos/logo-seereisedienst-white.svg" alt="Unser Kunde Seereisedienst" width="166" height="30" />
			<img src="/assets/images/client-logos/logo-check24-white.svg" alt="Unser Kunde Check24" width="125" height="30" />
			<img src="/assets/images/client-logos/logo-helios-white.svg" alt="Unser Kunde Helios" width="128" height="30" />
			<img src="/assets/images/client-logos/logo-sodastream.svg" alt="Unser Kunde SodaStream" width="194" height="30" />
		</div>

		<br />

		<p class="centered">
			<a href="/customer-success" class="btn btn--primary">Success Stories lesen</a>
		</p>
	</div>
</div>

<div class="section" id="integration">
	<div class="section__content section__content--narrow">
		<h2 class="centered mobile-left">Perfekt angepasst an Ihre Anforderungen mit unzähligen Add-Ons</h2>
		<p class="centered mobile-left bigtext">Sie möchten Ihre Telefonie in bereits vorhandene Business-Systeme integrieren? Sie brauchen Anbindungen an Ihre BI-Tools und wollen in Ihrem Sales und Service richtig durchstarten? Los geht's.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="co-grid centered">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
				<img src="/assets/images/icons_svg/small_36.svg" alt="Multi-Channel" width="109" height="100" />
				<h3>Multi-Channel</h3>
				<p class="bigtext">E-Mail, Chat und Messaging nahtlos in Ihre Systeme integrieren.</p>
				<p>
					<!-- TODO: Add link to sematell page -->
					<a href="#" class="btn btn--primary" style="display:none">Mehr erfahren</a>
					<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Kontakt aufnehmen</a>
				</p>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
				<img src="/assets/images/icons_svg/icon-echtzeit-coaching.svg" alt="Echtzeit-Coaching" width="100" height="100" style="max-height:100px" />
				<h3>Echtzeit-Coaching</h3>
				<p class="bigtext">Interaktive Live-Gesprächsleitfäden für richtig guten Kundenservice.</p>
				<p>
					<a href="/callcenter-sprachanalyse" class="btn btn--primary">Sprachanalyse im Detail</a>
				</p>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
				<img src="/assets/images/icons_svg/msteams-icon.svg" alt="Microsoft Teams" width="100" height="100" />
				<h3>Teams-Telefonie</h3>
				<p class="bigtext">Einfach im Teams-Client telefonieren und Microsoft Teams als Telefonanlage nutzen.</p>
				<p>
					<a href="/ms-teams" class="btn btn--primary">Mit Teams telefonieren</a>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="section__content section__content--wide">
		<h2 class="centered mobile-left">Ziele erreichen. ROI maximieren. Kosten senken.</h2>

		<div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-lg">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
						<span class="counting-number" data-suffix="%" data-start="0" data-end="10">10%</span>
					</div>
					bessere<br />
					Erreichbarkeit
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-lg">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
						<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
					</div>
					weniger Kosten pro Kontakt<br />
					durch gesteigerte FCR
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-lg">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
						1,<span class="counting-number" data-suffix="x" data-start="0" data-end="5">5x</span>
					</div>
					gesteigerte<br />
					Agentenauslastung
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-lg">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
						<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
					</div>
					mehr Effizienz in der<br />
					Personalplanung
				</div>
			</div>
		</div>

		<p class="centered">
			<a href="/callcenter-einsparpotential" class="btn btn--primary">Ihr Einsparpotential berechnen</a>
		</p>
	</div>
</div>

<div class="section section--black section--black-corner">
	<div class="section__content section__content--narrow centered mobile-left">
		<h2>Sind Sie bereit, Ihren Kundenservice zu verbessern?</h2>
		<p class="bigtext">Buchen Sie ein unverbindliches 15 Minuten Erstgespräch, um mehr über Ihre Möglichkeiten zu erfahren.</p>
		<p class="mobile-centered">
			<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Termin vereinbaren</a>
		</p>
	</div>
</div>