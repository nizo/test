<?php
$product = new product ('Callcenter-Software', 'Callcenter-Software mit Computer Telephony Integration (CTI), professioneller Kundenservice, Warteschleifenmanagement, Callbackfunktion');
$product->image_set ('https://www.callone.de/assets/images/photos/agentenmaske-hintergrund-mobile.jpg');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
	'Wie schnell kann die Callcenter-Lösung für uns bereitstehen?',
	'<p>Sehr schnell! Es kommt ein wenig darauf an, was Ihre Anforderungen sind. Individuelle Schnittstellenanbindungen dauern in der Regel immer ein wenig länger, doch grundsätzlich steht unsere Callcenter Software Ihnen direkt und auch sehr kurzfristig zur Verfügung. Flexible Anpassungen auf Ihre Bedürfnisse sind dabie jederzeit möglich. Außerdem sind sowohl Callcenter-Software als auch die IP-Telefonanlage extrem intuitiv und Sie können natürlich selbst eingreifen und nach Wunsch abändern. <a href="#" title="Sprechen Sie uns an - Wir beraten Sie gerne" data-openmodal="contact-sales" class="inline-link trackedContactModal">Sprechen Sie uns an</a> für weitere Informationen.</p>'
);
$faqs->faq_add (
	'Warum CallOne?',
	'<p>Wir sind Spezialisten, wenn es um individuelle Business-Lösungen rund um das Thema Kundenservice geht. Bei uns bekommen Sie nicht nur die technische Lösung, sondern auch das Know-How für Alles was sonst noch dazu gehört. Aus unserer täglichen Auseinandersetzungen mit den für Business-Telefonie und telefonischen Kundenservice relevanten Themen, bieten wir eine State of the Art Contact Center Lösung mit virtueller Telefonanlage, passen diese optimal auf Ihre individuellen Anforderungen an und <a href="/callcenter-software-apps" class="inline-link">verknüpfen sie mit Ihren anderen Systemen</a>.</p><p>Bei uns finden Sie keine anonymen Support-Mitarbeiter, sondern mündige Ansprechpartner, die Ihnen tagtäglich mit Rat und Tat zur Seite stehen. Wir betreuen Sie und entwickeln Ihre Lösung stetig gemeinsam mit Ihnen weiter. <a href="#" title="Sprechen Sie uns an - Wir beraten Sie gerne" data-openmodal="contact-sales" class="inline-link trackedContactModal">Sprechen Sie uns an</a> für weitere Informationen.</p>'
);
$faqs->faq_add (
	'Kann ich die CallOne Callcenter-Software mit anderen Businesslösungen, Systemen oder Applikationen verknüpfen?',
	'<p>Ja. Die Callcenter-Lösung verfügt über eine Vielzahl von <a href="/voip-api" class="inline-link">Echtzeit-Schnittstellen</a>, die sich ideal dafür eignen bestehende Businesslösungen (BI, CRM, ERP oder Ticketing-Lösungen) anzubinden und in Echtzeit Daten mit diesen Systemen auszutauschen. Gerade hier liegt die Stärke von CallOne: Wir passen unsere Telefonie-Lösung optimal in Ihre bestehende IT-Infrastruktur ein.</p>'
);
$faqs->faq_add (
	'Welche Schnittstellen und Anbindungsmöglichkeiten gibt es?',
	'<p>Es besteht eine Vielzahl von Standard-Schnittstellen für die verschiedensten Anforderungen. Mehr Informationen finden Sie <a href="/callcenter-software-integrationen" title="Mehr Infos zu Schnittstellen">hier</a>. Sprechen Sie uns hierzu gerne mit Ihren konkreten Anforderungen an. Unsere Telefonanlage und Callcenter-Lösung verfügt über eine Vielzahl von Telefon-APIs zur optimalen Anbindung Ihrer eigenen Businesslösungen. Neben Echtzeit-APIs, die Ihnen alle Call-Events live pushen, stehen weitere APIs speziell für das Abrufen von anrufspezifischen Informationen bereit. Für eine Vielzahl von CRM- und Ticketing-Lösungen stehen Standard-Konnektoren zur Verfügung, die es Ihnen ermöglichen Ihre bestehenden Lösungen auf einfachste Weise zu koppeln. Aktuell bieten wir hier Konnektoren für die Anbindung von <a href="/zendesk-cti-ticketing" title="Zendesk Integration">Zendesk</a>, <a href="/freshdesk-callcenter-software" title="Freshdesk Integration">Freshdesk CRM</a>, <a href="/cti-salesforce" title="Salesforce Integration">Salesforce</a> und weiteren Businessanwendungen an. Sprechen Sie uns an, wenn Sie spezielle Anforderungen und Wünsche dazu haben Ihre Lösung anzubinden.</p>'
);
$faqs->faq_add (
	'Kann man durch die CallOne ACD Kosten sparen?',
	'<p>Ja. Durch die intelligente Anrufverteilung der ACD sorgen Sie für eine effiziente Arbeitsweise in Ihrem Callcenter und können damit die Callbearbeitungszeiten erheblich senken. Durch die daraus resultierende bessere Auslastung Ihres Callcenters, senken Sie automatisch Ihre Kosten. <a href="#" title="Sprechen Sie uns an - Wir beraten Sie gerne" data-openmodal="contact-sales" class="inline-link trackedContactModal">Sprechen Sie uns an</a> für weitere Informationen.</p>'
);
$faqs->faq_add (
	'Welche Möglichkeiten bietet die Callcenter-Lösung das Anrufaufkommen zu beeinflussen?',
	'<p>Mit der ACD können wir das Anrufaufkommen natürlich nicht direkt beeinflussen, aber sie bietet <a href="/callcenter-software-funktionen" class="inline-link">intelligente Funktionen</a> um Ihre Anrufverteilung optimal zu gestalten, unabhängig von der Anzahl der eingehenden Anrufe. Optionen wie ursprungsabhängige Routings, intelligente Vorqualifizierung mittels IVR und Rückruf aus der Warteschleife sind hier nur einige Ihrer Möglichkeiten. Werfen Sie gerne einmal einen Blick auf die <a href="/callcenter-software-funktionen" title="Callcenter-Software Funktionen & Features" class="inline-link">Features</a> der CallOne Cloud ACD.</p>'
);
?>


<div class="section section--light-green-white section--mobile-divider">
	<div class="hero">
		<div class="hero__text">
			<h1>Die Callcenter Software <br class="mobile-hidden" />für Service & Sales:</h1>
			<p class="bigtext">Zufriedene Kunden und produktivere Agenten!</p>

			<div class="co-grid co-grid--small-gutter centered subtext">
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-lg">
					<?= pictureTag(
						'/assets/images/icons_svg/usp-germany-icon-square.svg',
						'Call Center Software mit hohem deutschen Datenschutzstandard',
						50, 50, [], false
					); ?>
                    <p style="margin-top:10px">DSGVO<br />konform</p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-lg">
					<?= pictureTag(
						'/assets/images/icons_svg/usp-speed-icon-square.svg',
						'Call Center Software wird schnell bereitgestellt',
						50, 50, [], false
					); ?>
                    <p style="margin-top:10px">Rasante Bereitstellung</p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-lg">
					<?= pictureTag(
						'/assets/images/icons_svg/usp-availability-icon-square.svg',
						'Call Center Software ist sehr gut erreichbar',
						50, 50, [], false
					); ?>
                    <p style="margin-top:10px">Garantierte <br />Erreichbarkeit</p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--3-sm co-grid__col--2-lg">
					<?= pictureTag(
						'/assets/images/client-logos/icon-german-cloud.svg',
						'Deutsche Cloud',
						50, 50, [], false
					); ?>
                    <p style="margin-top:10px">Deutsche<br />Cloud</p>
                </div>
            </div>

			<p class="mobile-centered">
				<a href="#" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">Live Demo buchen</a>
			</p>
		</div>
		<div class="hero__image">
			<?= pictureTag(
				'/assets/images/illus/hero-ccs.png',
				'CallOne Callcenter Software',
				465, 465, [], false
			); ?>
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
					<?= pictureTag(
						'/assets/images/icons_svg/callone-logo-white.svg',
						'CallOne Telekommunikationslösungen für Sales und Service',
						13, 14
					); ?>
					Für Agenten
				</div>
				<h2>Modern und browserbasiert: <br class="mobile-hidden" />Die Agentenmaske</h2>

				<ul class="list list--checkmarks list--checkmarks-green bigtext">
					<li>Informationen über Status von Agenten und Gruppen</li>
					<li>Telefonieren aus der Agentenmaske oder mit dem CallOne Softphone</li>
					<li>Anrufe, Chats und E-Mails mit den Kundendaten im CRM verknüpfen</li>
				</ul>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--order-1-xs co-grid__col--vcentered">
				<?= pictureTag(
					'/assets/images/illus/ccs-agenten.png',
					'Modern und browserbasiert: Die Agentenmaske',
					570, 400, [
						'class' => 'co-grid__image--full-width'
					]
				); ?>
			</div>
		</div>

		<br />
		<br />

		<div class="co-grid" id="teamleiter">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
				<?= pictureTag(
					'/assets/images/illus/ccs-teamleiter.png',
					'Boost für Service & Sales: Mit Statistiken',
					570, 400, [
						'class' => 'co-grid__image--full-width'
					]
				); ?>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
				<div class="tag">
					<?= pictureTag(
						'/assets/images/icons_svg/callone-logo-white.svg',
						'CallOne Telekommunikationslösungen für Sales und Service',
						13, 14
					); ?>
					Für Teamleiter
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
					<?= pictureTag(
						'/assets/images/icons_svg/callone-logo-white.svg',
						'CallOne Telekommunikationslösungen für Sales und Service',
						13, 14
					); ?>
					Für Administratoren
				</div>
				<h2>Datenbasierte Effizienz: <br class="mobile-hidden" />Mit Dashboards & Analysen</h2>

				<ul class="list list--checkmarks list--checkmarks-green bigtext">
					<li>Entwicklungen erkennen und optimal steuern, um Effizienz zu erhöhen und Kosten zu senken</li>
					<li>Performantere Ergebnisse der Mitarbeiter durch gezielte Schulungen</li>
					<li>Wichtige Kennzahlen im Blick haben und automatisierte Berichterstattung erhalten</li>
				</ul>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--order-1-xs co-grid__col--vcentered">
				<?= pictureTag(
					'/assets/images/illus/statistics-header-illustration-optimized.svg',
					'Datenbasierte Effizienz: Mit Dashboards & Analysen',
					569, 526, [
						'class' => 'co-grid__image--full-width'
					]
				); ?>
			</div>
		</div>
	</div>
</div>

<div class="section section--colored" style="--bg:#edf2e2;">
	<div class="section__content section__content--wide">
		<div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--vcentered">
				<?= pictureTag(
					'/assets/images/client-logos/logo-check24-black.svg',
					'Unser Kunde Check24',
					370, 89, [
						'style' => 'height: 89px'
					]
				); ?>
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
							<?= pictureTag(
								'/assets/images/icons_svg/callback-black.svg',
								'Funktion: Rückruf-Optionen',
								70, 70, [
									'class' => 'co-grid__image--full-width',
									'style' => 'height:70px'
								]
							); ?>
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
							<?= pictureTag(
								'/assets/images/icons_svg/menu-overview.svg',
								'Funktion: Warteschleifen',
								70, 70, [
									'class' => 'co-grid__image--full-width',
									'style' => 'height:70px'
								]
							); ?>
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
							<?= pictureTag(
								'/assets/images/icons_svg/menu-apis.svg',
								'Funktion: Schnittstellenanbindung',
								70, 70, [
									'class' => 'co-grid__image--full-width',
									'style' => 'height:70px'
								]
							); ?>
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
							<?= pictureTag(
								'/assets/images/icons_svg/menu-numbers.svg',
								'Funktion: Auswahlmenüs',
								70, 70, [
									'class' => 'co-grid__image--full-width',
									'style' => 'height:70px'
								]
							); ?>
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
							<?= pictureTag(
								'/assets/images/icons_svg/icon-flexibilitaet.svg',
								'Funktion: Routing-Optionen',
								70, 70, [
									'class' => 'co-grid__image--full-width',
									'style' => 'height:70px'
								]
							); ?>
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
							<?= pictureTag(
								'/assets/images/icons_svg/big_03.svg',
								'Funktion: Live-Dashboards',
								91, 70, [
									'class' => 'co-grid__image--full-width',
									'style' => 'height:70px'
								]
							); ?>
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
			<?= pictureTag(
				'/assets/images/client-logos/logo-snipes-white.svg',
				'Unser Kunde snipes',
				85, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-bett1-white.svg',
				'Unser Kunde bett1',
				62, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-flaconi-white.svg',
				'Unser Kunde flaconi',
				118, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-gastro-hero-white.svg',
				'Unser Kunde GastroHero',
				132, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-vimcar-white.svg',
				'Unser Kunde Vimcar',
				152, 30
			); ?>
		</div>
		<div class="logos logos--fade" style="--height:30px">
			<?= pictureTag(
				'/assets/images/client-logos/logo-igus-white.svg',
				'Unser Kunde IGUS',
				58, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-seereisedienst-white.svg',
				'Unser Kunde Seereisedienst',
				166, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-check24-white.svg',
				'Unser Kunde Check24',
				125, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-helios-white.svg',
				'Unser Kunde Helios',
				128, 30
			); ?>
			<?= pictureTag(
				'/assets/images/client-logos/logo-sodastream.svg',
				'Unser Kunde SodaStream',
				194, 30
			); ?>
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
				<?= pictureTag(
					'/assets/images/icons_svg/small_36.svg',
					'Multi-Channel',
					109, 100
				); ?>
				<h3>Multi-Channel</h3>
				<p class="bigtext">E-Mail, Chat und Messaging nahtlos in Ihre Systeme integrieren.</p>
				<p>
					<a href="/omnichannel-customer-support-software" class="btn btn--primary">Mehr erfahren</a>
				</p>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
				<?= pictureTag(
					'/assets/images/icons_svg/icon-echtzeit-coaching.svg',
					'Echtzeit-Coaching',
					100, 100, [
						'style' => 'max-height:100px'
					]
				); ?>
				<h3>Echtzeit-Coaching</h3>
				<p class="bigtext">Interaktive Live-Gesprächsleitfäden für richtig guten Kundenservice.</p>
				<p>
					<a href="/callcenter-sprachanalyse" class="btn btn--primary">Sprachanalyse im Detail</a>
				</p>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
				<?= pictureTag(
					'/assets/images/icons_svg/msteams-icon.svg',
					'Microsoft Teams',
					100, 100
				); ?>
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
			<a href="#" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">Termin vereinbaren</a>
		</p>
	</div>

	<div class="section__content">
		<?php
		$faqs->structured_data_get_code ();
		$faqs->html_get_code('toggle-box--on-black');
		?>
	</div>
</div>