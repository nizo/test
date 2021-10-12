<?php
$product = new product ('Callcenter-Software', 'Callcenter-Software mit Computer Telephony Integration (CTI), professioneller Kundenservice, Warteschleifenmanagement, Callbackfunktion');
$product->image_set ('https://www.callone.de/assets/images/photos/agentenmaske-hintergrund-mobile.jpg');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
	'Wie schnell kann die Callcenter-Lösung für uns bereitstehen?',
	'<p>Sehr schnell! Es kommt ein wenig darauf an, was Ihre Anforderungen sind. Individuelle Schnittstellenanbindungen dauern in der Regel immer ein wenig länger, doch grundsätzlich stehen unsere Callcenter Software Ihnen direkt und auch sehr kurzfristig zur Verfügung. Flexible Anpassungen auf Ihre Bedürfnisse sind dabie jederzeit möglich. Außerdem sind sowohl Callcenter-Software als auch die IP-Telefonanlage extrem intuitiv und Sie können natürlich selbst eingreifen und nach Wunsch abändern.</p>'
);
$faqs->faq_add (
	'Warum CallOne?',
	'<p>Wir sind Spezialisten, wenn es um individuelle Business-Lösungen rund um das Thema Kundenservice geht. Bei uns bekommen Sie nicht nur die technische Lösung, sondern auch das Know-How für Alles was sonst noch dazu gehört. Aus unserer täglichen Auseinandersetzungen mit den für Business-Telefonie und telefonischen Kundenservice relevanten Themen, bieten wir eine State of the Art Contact Center Lösung mit virtueller Telefonanlage, passen diese optimal auf Ihre individuellen Anforderungen an und verknüpfen sie mit Ihren anderen Systemen.</p><p>Bei uns finden Sie keine anonymen Support-Mitarbeiter, sondern mündige Ansprechpartner, die Ihnen tagtäglich mit Rat und Tat zur Seite stehen. Wir betreuen Sie und entwickeln Ihre Lösung stetig gemeinsam mit Ihnen weiter.</p>'
);
$faqs->faq_add (
	'Kann ich die CallOne Callcenter-Software mit anderen Businesslösungen, Systemen oder Applikationen verknüpfen?',
	'<p>Ja. Die Callcenter-Lösung verfügt über eine Vielzahl von Echtzeit-Schnittstellen, die sich ideal dafür eignen bestehende Businesslösungen (BI, CRM, ERP oder Ticketing-Lösungen) anzubinden und in Echtzeit Daten mit diesen Systemen auszutauschen. Gerade hier liegt die Stärke von CallOne: Wir passen unsere Telefonie-Lösung optimal in Ihre bestehende IT-Infrastruktur ein.</p>'
);
$faqs->faq_add (
	'Welche Schnittstellen und Anbindungsmöglichkeiten gibt es?',
	'<p>Es besteht eine Vielzahl von Standard-Schnittstellen für die verschiedensten Anforderungen. Mehr Informationen finden Sie <a href="/cti-schnittstellen" title="Mehr Infos zu Schnittstellen">hier</a>. Sprechen Sie uns hierzu gerne mit Ihren konkreten Anforderungen an. Unsere Telefonanlage und Callcenter-Lösung verfügt über eine Vielzahl von Telefon-APIs zur optimalen Anbindung Ihrer eigenen Businesslösungen. Neben Echtzeit-APIs, die Ihnen alle Call-Events live pushen, stehen weitere APIs speziell für das Abrufen von anrufspezifischen Informationen bereit. Für eine Vielzahl von CRM- und Ticketing-Lösungen stehen Standard-Konnektoren zur Verfügung, die es Ihnen ermöglichen Ihre bestehenden Lösungen auf einfachste Weise zu koppeln. Aktuell bieten wir hier Konnektoren für die Anbindung von <a href="/zendesk-cti-ticketing" title="Zendesk Integration">Zendesk</a>, <a href="/cti-zoho" title="Zoho Integration">Zoho CRM</a>, <a href="/cti-salesforce" title="Salesforce Integration">Salesforce</a> und weiteren Businessanwendungen an. Sprechen Sie uns an, wenn Sie spezielle Anforderungen und Wünsche dazu haben Ihre Lösung anzubinden. Mehr Informationen über das Zusammenspiel der CallOne Cloud ACD und Zendesk finden Sie <a href="/blog/schnittstellen-fuer-guten-kundenservice-auf-allen-kanaelen/" title="Blogartikel - Multichannel mit CallOne und Zendesk">hier</a>.</p>'
);
$faqs->faq_add (
	'Kann man durch die CallOne ACD Kosten sparen?',
	'<p>Ja. Durch die intelligente Anrufverteilung der ACD sorgen Sie für eine effiziente Arbeitsweise in Ihrem Callcenter und können damit die Callbearbeitungszeiten erheblich senken. Durch die daraus resultierende bessere Auslastung Ihres Callcenters, senken Sie automatisch Ihre Kosten.</p>'
);
$faqs->faq_add (
	'Welche Möglichkeiten bietet die Callcenter-Lösung das Anrufaufkommen zu beeinflussen?',
	'<p>Mit der ACD können wir das Anrufaufkommen natürlich nicht direkt beeinflussen, aber sie bietet intelligente Funktionen um Ihre Anrufverteilung optimal zu gestalten, unabhängig von der Anzahl der eingehenden Anrufe. Optionen wie ursprungsabhängige Routings, intelligente Vorqualifizierung mittels IVR und Rückruf aus der Warteschleife sind hier nur einige Ihrer Möglichkeiten. Werfen Sie gerne einmal einen Blick auf die <a href="/callcenter-software-funktionen" title="Callcenter-Software Funktionen & Features">Features</a> der CallOne Cloud ACD.</p>'
);
?>

<div class="section section--no-padding-bottom section--mobile-divider">
	<div class="hero">
		<div class="hero__image">
			<img src="/assets/images/illus/CCS-header-illustration.svg" alt="" style="width:100%" />
		</div>
		<div class="hero__text">
			<div class="tag mobile-hidden">
				<img src="/assets/images/icons_svg/callone-logo-white.svg" alt="" /> CallOne Cloud ACD &copy;
			</div>
			<h1 class="mobile-hidden">Die erste Contact Center Software mit der Sie Ihren Return-on-Investment (ROI) maximieren werden</h1>
			<h2 class="mobile-hidden">Ein intuitiv bedienbares cloudbasiertes <br />Telefonsystem für <span class="typing-text" data-texts="mehr Effizienz,weniger Ausfälle,mehr Transparenz,bessere Planbarkeit" data-colors="#FF002E,#FF7B1B,#DB00C5,#0088EA">mehr Effizienz</span></h2>
			<p class="mobile-hidden">
				<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Sales kontaktieren</a>
			</p>

			<h1 class="desktop-hidden">Ihr Kundenservice mit unserer Callcenter-Software</h1>
			<p class="desktop-hidden">
				<a href="#" class="btn btn--primary btn--full-width centered" data-openmodal="contact-sales">Sales kontaktieren</a>
			</p>
		</div>
	</div>
</div>

<div class="section section--white-grey-white section--same-padding mobile-hidden">
	<div class="anchors">
		<div class="anchors__title">
			<strong>Schnelleinstieg:</strong> Was interessiert dich?
		</div>
		<div class="anchors__links">
			<a href="#features">Features</a>
			<a href="#mehrwertrechner">Mehrwertrechner</a>
			<a href="#referenzen">Referenzen</a>
		</div>
	</div>
</div>

<div class="section section--no-padding-top">
	<div class="section__content section__content--narrow">
		<h1 class="centered mobile-hidden">Eine Call Center Software, angepasst an Ihre ganz eigenen Bedürfnisse</h1>
		<p class="centered mobile-hidden">CallOne können Sie als Full-Service Telefoniepartner im gesamten Unternehmen einsetzen oder gezielt im Kundenservice mit Ihren bestehenden Businesslösungen.</p>

		<h1 class="desktop-hidden">Angepasst an Ihre individuellen Bedürfnisse</h1>
		<p class="desktop-hidden">CallOne können Sie als Full-Service Telefoniepartner im gesamten Unternehmen einsetzen oder gezielt im Kundenservice oder Inside-Sales mit Ihren bestehenden Bsuinesslösungen.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="tablist">
			<div class="tablist__links">
				<div class="tablist__link tablist__link--active" data-tab="1">
					<strong>Fullservice</strong><br>
					CallOne liefert Ihnen das <br />
					Komplettpaket für Ihr Unternehmen
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Integriert</strong><br>
					CallOne Callcenter Software verbunden <br />
					mit Ihrer eigener Telefonanlage
				</div>
			</div>
			
			<div class="tablist__content tablist__content--active" data-tab="1">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/icons_svg/callone-fullservice.svg" alt="" style="margin:0" class="mobile-hidden" />
						<h2 class="mobile-hidden">Callcenter Software und Telefonielösungen für Ihr <br />gesamtes Unternehmen</h2>
						<p>Eine Plattform alles drin. Wenn Sie mögen statten wir Ihr Unternehmen mit einer kompletten VoIP-Telefonanlage aus und passen sie optimal auf Ihre Bedürfnisse an.</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md" style="background-image:url(/assets/images/backgrounds_png/whole-company.png);background-size:285px;background-repeat:no-repeat;background-position:center top;padding-top:180px">
						<div class="carddeck carddeck--right" data-speed="2500" style="max-width:430px;margin-left:auto;margin-right:auto;">
							<div class="carddeck__card">
								<h5><span class="icon-schnittstellen" style="font-size:28px;"></span>Schnittstellen</h5>
								<br />
								<p class="subtext">Apps und API's für die Anbindung an Ihre BI, für Ticketing und CRM.</p>
							</div>
							<div class="carddeck__card">
								<h5><span class="icon-rufnummern" style="font-size:28px;"></span>Rufnummern</h5>
								<br />
								<p class="subtext">Rufnummern schalten, portieren und weiterleiten. Weltweit und natürlich in Ihrem Vorwahlbereich.</p>
							</div>
							<div class="carddeck__card">
								<h5><span class="icon-voip-telefonanlage" style="font-size:28px;"></span>VoIP-Telefonanlage</h5>
								<br />
								<p class="subtext">Natürlich in einer Oberfläche mit Ihrer Call Center Software aus der Cloud mit 99,999% Erreichbarkeit.</p>
							</div>
							<div class="carddeck__card">
								<h5><span class="icon-phone-ms-teams" style="font-size:28px;"></span>Microsoft Teams</h5>
								<br />
								<p class="subtext">Die Telefonie der Callcenter Software direkt in Microsoft Teams integriert.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/icons_svg/callone-own-telephony.svg" alt="" style="margin:0" class="mobile-hidden" />
						<h2 class="mobile-hidden">Ihre Telefonanlage in Kombination mit der Callcenter Software von CallOne</h2>
						<p>Bleiben Sie flexibel! Unsere Callcenter Software ist modular und funktioniert auch mit Ihrer bestehenden Telefonanlage und Ihren bestehenden Businesslösungen. Wir bieten hier eine Vielzahl von Schnittstellen und Anbindungen, damit alles reibungslos ineinandergreift.</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/integration-callcenter.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section--grey-white" id="features">
	<div class="section__content section__content--narrow">
		<h1 class="centered mobile-left">Über 200 Features - <br />aber die Magie steckt im Detail</h1>
		<p class="centered mobile-left">Wir bieten alles was ausgewachsene Unternehmen im Bereich moderner Business-Telefonie suchen. Voller Leistungsumfang, ohne Einschränkungen.</p>
	</div>

	<div class="section__content section__content--wide section__content--border-bottom">
		<div class="tablist">
			<div class="tablist__links tablist__links--full-width">
				<div class="tablist__link tablist__link--smaller tablist__link--active" data-tab="1">
					<strong>Smarte Automatisierung</strong><br>
					Erfahren Sie wie Automatisierung<br />Ihren Geldbeutel schont.
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="2">
					<strong>Mehr Effizienz</strong><br>
					Sie wollen richtig sparen und<br />Ihr Personal effizienter einsetzen?
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="3">
					<strong>Glücklichere Kunden</strong><br>
					Sie wollen Ihre<br />Warteminuten reduzieren?
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="4">
					<strong>Bessere Daten</strong><br>
					Sie haben Lust Ihre Prozesse<br />datenbasiert zu optimieren?
				</div>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--red-footer tablist__content--active" data-tab="1">
				<h2 class="centered icon-connectors mobile-hidden">Schnittstellenanbindung</h2>
				<p class="centered mobile-hidden">Wir agieren schnittstellenoffen. Kundenanliegen können schneller bearbeitet werden, indem sie ihre bestehenden Businesslösungen anbinden.<br /><br /></p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
								</div>
								weniger Kosten <br />pro Kontakt <br />durch gesteigerte FCR*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="counting-number" data-start="10" data-end="5">5</span>-<span class="counting-number" data-start="30" data-end="15" data-suffix="s">15s</span>
								</div>
								kürzere Gesprächsdauern (AHT) durch intelligente Vorqualifizierung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="counting-number" data-start="0" data-end="50">50</span>-<span class="counting-number" data-start="20" data-end="70" data-suffix="%">70%</span>
								</div>
								Erkennung des Anruferanliegens bei Anrufannahme*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="x" data-start="0" data-end="3">3x</span>
								</div>
								schnellerer Anrufaufbau durch Click-to-Dial im eigenen CRM*
							</div>
						</div>

						<p class="centered subtext" style="margin-top:0;">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-11">
							<label for="faq-11">Anrufsteuerung mittels Voice-API</label>
							<div class="toggle-box__content">
								<p>Binden Sie Ihre bestehenden CRM-, ERP- oder Ticketingsysteme an und steuern sie damit gezielt eingehende Anrufe.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-12">
							<label for="faq-12">Alle Anruferinfos bei Gesprächsannahme</label>
							<div class="toggle-box__content">
								<p>Sparen Sie wertvolle Gesprächszeit und reichern Sie die Anruferinformationen mit Kundenname, Kundennummer oder einem Link in Ihr CRM-System an.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-13">
							<label for="faq-13">Wissen ohne Fragen zu müssen</label>
							<div class="toggle-box__content">
								<p>Nutzen Sie unsere vielzähligen Möglichkeiten zur Anrufervorqaulifizierung: Eingabe und Übermittlung von Kunden- oder Bestellnummern, Echtzeit-Spracherkennung oder Text-to-Speech.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-14">
							<label for="faq-14">Wählen ohne Tippen</label>
							<div class="toggle-box__content">
								<p>Click-to-Dial-, CTI- oder TAPI-Schnittstellen implementiert in Ihrem System für nahtlose In- und Outboundtelefonie.</p>
							</div>
						</div>
						<p class="subtext">&nbsp;</p>
					</div>
				</div>

				<?php /* <div class="tablet-hidden" style="height:200px;"><!-- Debug --></div> */ ?>
				<p class="centered" style="margin-top: 100px;">
					<span class="mobile-hidden">
						Wir haben noch mehr<br />
						<strong>Informationen zu Konnektivität:</strong><br />
						<br />
					</span>
					<a href="/voip-api" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--yellow-footer" data-tab="2">
				<h2 class="centered icon-automation mobile-hidden">Automatisierung und KI</h2>
				<p class="centered mobile-hidden">Nicht jeder Anruf muss zum Agenten, um gelöst zu werden. Nutzen Sie Echtzeit-Spracherkennung und unsere vielzähligen Schnittstellen, um effizienter zu telefonieren.<br /><br /></p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="15">15%</span>
								</div>
								weniger Gesprächszeit für Ihre Agent*innen*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="counting-number" data-suffix="x" data-start="0" data-end="4">4x</span>
								</div>
								kürzere IVR-Menüs durch Spracherkennung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="94">94%</span>
								</div>
								Kundenzufriedenheit dank schnellerer Fallbearbeitung*
							</div>
						</div>

						<p class="centered subtext" style="margin-top:0;">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-21">
							<label for="faq-21">Sprachdialoge ohne Agenten</label>
							<div class="toggle-box__content">
								<p>Nutzen Sie unsere VTT und TTS-Funktionen in Kombination mit unseren Schnittstellen für automatisierte Dialoge mit ihren Anrufern und das 24/7 mit 99,999% Verfügbarkeit.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-22">
							<label for="faq-22">Intelligentes Sprachrouting</label>
							<div class="toggle-box__content">
								<p>Statt endlosem Auswahltasten drücken, bieten wir Echtzeit- Spracherkennung für bessere Kundenerlebnisse.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-23">
							<label for="faq-23">Schnittstellen für schnelle Fallbearbeitung</label>
							<div class="toggle-box__content">
								<p>Wir übergeben Ihnen Anrufernummer oder Kundennummer und Sie antworten mit allen relevanten Kundendaten, wahlweise implementiert in der CallOne Agentenmaske.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-23">
							<label for="faq-24">Bring your own Bot</label>
							<div class="toggle-box__content">
								<p>Sie haben bereits eine KI im Einsatz? Prima, dann bringen Sie sie doch einfach mit. Mit unseren Schnittstellen bieten wir ausreichend Anbindungsmöglichkeiten.</p>
							</div>
						</div>
						<p class="subtext">&nbsp;</p>
					</div>
				</div>

				<?php /* <div class="tablet-hidden" style="height:200px;"><!-- Debug --></div> */ ?>
				<p class="centered" style="margin-top: 100px;">
					<span class="mobile-hidden">
						Wir haben noch mehr<br />
						<strong>Informationen zu Effizienz:</strong><br />
						<br />
					</span>
					<a href="/callcenter-bot" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--purple-footer" data-tab="3">
				<h2 class="centered icon-queue mobile-hidden">Warteschleifenmanagement</h2>
				<p class="centered mobile-hidden">Reduzieren Sie die Anruflast durch weniger Wahlwiederholer und Abbrecher. Wie? Mit dem vielleicht umfänglichsten Warteschleifenmanagement am Markt.<br /><br /></p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="10">10%</span>
								</div>
								bessere <br />Erreichbarkeit*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="65">65%</span>
								</div>
								Verkürzung <br />der Wartezeit*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
								</div>
								geringere <br />Abbruchquote*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									1,<span class="counting-number" data-suffix="x" data-start="0" data-end="5">5x</span>
								</div>
								gesteigerte <br />Agentenauslastung*
							</div>
						</div>

						<p class="centered subtext" style="margin-top:0;">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-31">
							<label for="faq-31">Intelligente Routingfunktionen</label>
							<div class="toggle-box__content">
								<p>Lassen Sie Ihre Anrufer nicht warten und nutzen Sie die von uns errechnete voraussichtliche Wartezeit, um Rückruffunktionen anzubieten.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-32">
							<label for="faq-32">Virtuelle Warteschleife & Co.</label>
							<div class="toggle-box__content">
								<p>Rückrufen, dann wenn es für Sie passt. Zum fixen Termin oder dann wenn der Anrufer an der Reihe ist.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-33">
							<label for="faq-33">Wahlwiederholer&shy;priorisierung</label>
							<div class="toggle-box__content">
								<p>Wartedauer wird bei erfolglosen Folgeanrufen hinzugerechnet. Damit steigt die Kundenzufriedenheit und die Abbruchquote sinkt.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-34">
							<label for="faq-34">Rückrufe für optimale Auslastung</label>
							<div class="toggle-box__content">
								<p>Anrufpeaks aus dem Vormittag in den Nachmittag verschieben. Wir liefern hier unzählige Optionen, passgenau für Ihren Anwendungsfall.</p>
							</div>
						</div>
						<p class="subtext">&nbsp;</p>
					</div>
				</div>

				<div class="tablet-hidden" style="height:200px;"><!-- Debug --></div>
				<?php /* <p class="centered" style="margin-top: 150px;">
					<span class="mobile-hidden">
						Wir haben noch mehr<br />
						<strong>Informationen zu Kundenzufriedenheit:</strong><br />
						<br />
					</span>
					<a href="#" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p> */ ?>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--blue-footer" data-tab="4">
				<h2 class="centered icon-statistics mobile-hidden">Statistik & Datenanalyse</h2>
				<p class="centered mobile-hidden">Optimieren sie Ihre Prozesse datengestützt und reduzieren Kosten durch Analyse-möglichkeiten, die Sie vorher nicht für möglich hielten.<br /><br /></p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
								</div>
								mehr Effizienz in der Personalplanung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="counting-number" data-suffix="x" data-start="0" data-end="3">3x</span>
								</div>
								schnellere Reaktion dank Echtzeit-Benachrichtigung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="counting-number" data-suffix="min" data-start="0" data-end="60">60min</span>
								</div>
								Zeitersparnis täglich mittels Autoreporting*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="20">20%</span>
								</div>
								gesteigerte <br />Teamleistung*
							</div>
						</div>

						<p class="centered subtext" style="margin-top:0;">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-41">
							<label for="faq-41">Arbeitszeiterfassung & Forecasting</label>
							<div class="toggle-box__content">
								<p>Nutzen Sie unsere implementiere Arbeitszeiterfassung und planen Sie Ihr Personal deutlich effizienter mit unseren Datenschnittstellen.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-42">
							<label for="faq-42">Sofortige Benachrichtigung</label>
							<div class="toggle-box__content">
								<p>Sie erhalten von CallOne Echtzeiteinblicke und können umgehend reagieren, um Ihre KPI hochzuhalten.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-43">
							<label for="faq-43">Sparen Sie kostbare Zeit</label>
							<div class="toggle-box__content">
								<p>Nutzen Sie unsere Rohdatenschnittstellen und fertigen Konnektoren zu Tableau für Auswertungen auf Profiniveau.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--transparent toggle-box--checklist">
							<input type="checkbox" id="faq-44">
							<label for="faq-44">Zielerreichung mittels wichtiger Kennzahlen</label>
							<div class="toggle-box__content">
								<p>Umfangreiche Agentenstatistiken ermöglichen individuelle oder allgemeine Zielplanung zur Erreichung Ihrer Ziele.</p>
							</div>
						</div>
						<p class="subtext">&nbsp;</p>
					</div>
				</div>

				<div class="tablet-hidden" style="height:200px;"><!-- Debug --></div>
				<?php /* <p class="centered" style="margin-top: 150px;">
					<span class="mobile-hidden">
						Wir haben noch mehr<br />
						<strong>Informationen zu Datenauswertung:</strong><br />
						<br />
					</span>
					<a href="#" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p> */ ?>
			</div>
		</div>
	</div>

	<div class="section__content section__content--narrow mobile-hidden">
		<h4 class="centered">Bei den Funktionen noch nicht fündig geworden?</h4>

		<p class="centered">
			Hier gibt es weitere Features und Funktionen:
		</p>

		<p>
			<a href="/callcenter-software-funktionen" class="btn btn--border-black btn--centered btn--arrow-right">Weitere Funktionen</a>
		</p>
	</div>
</div>

<div class="section section--black" id="mehrwertrechner">
	<div class="section__content section__content--narrow saving-calculation--mobile">
		<h1>Lust Ihr Einsparpotential direkt hier zu berechnen?</h1>
		
		<div class="content-box content-box--white">
			<p><img src="/assets/images/icons_svg/open-desktop-browser.svg" alt=""></p>
			<h2>Lassen Sie uns dazu zum Desktop-Browser wechseln!</h2>
			<p>Wenn Sie uns Ihre ungefähre <strong>Anzahl an Anrufen pro Monat</strong> sowie die <strong>Menge Ihrer Agenten</strong> nennen, rechnen wir Ihnen gerne detailiert vor wir Ihnen durch Effizienzsteigerungen und Einsparpotenziale bares Geld schenken. Um Ihnen das vorzurechnen brauchen wir etwas mehr Platz als dieses Gerät bietet.</p>
		</div>
	</div>

	<div class="section__content section__content--wide saving-calculation--desktop">
		<h1 class="centered">
			Lust Ihr Einsparpotenzial <br />
			direkt hier zu berechnen?
		</h1>

		<p class="centered">
			Wir stehen für messbare Effizienzsteigerungen <br />
			und heben Einsparpotentiale im großen Stil.
		</p>

		<br />
		<br />

		<div class="co-grid saving-calculation__form-grid">
			<div class="co-grid__col co-grid__col--12-xs">
				<div class="content-box content-box--white">
					<h3>Geben Sie uns zwei Ihrer Kennzahlen</h3>
					<p>Wir errechnen Ihr Einsparpotential mit realistischen Annahmen basierend auf unserer langjährigen Erfahrung.</p>

					<form action="#" method="post" class="floating-form saving-calculation__form">
						<div class="floating-form__error">
							<p>Fehler, bitte versuchen Sie es erneut.</p>
						</div>
						<div class="floating-form__hint">
							<p>Bitte geben Sie Ihre persönlichen Kennzahlen ein um die mögliche Einsparung zu berechnen.</p>
						</div>

						<div class="floating-form__row">
							<div class="floating-form__icon">
								<img src="/assets/images/icons_svg/calls-per-month-big.svg" alt="" />
							</div>
							<div class="floating-form__field floating-form__field--short">
								<input type="text" class="mouseflow-visible" name="calls" placeholder=" " autocomplete="off" />
								<label></label>
							</div>
							<div class="floating-form__description">
								Anrufe gesamt pro Monat
							</div>
						</div>

						<div class="floating-form__row">
							<div class="floating-form__icon">
								<img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
							</div>
							<div class="floating-form__field floating-form__field--short">
								<input type="text" class="mouseflow-visible" name="agents" placeholder=" " autocomplete="off" />
								<label></label>
							</div>
							<div class="floating-form__description">
								Anzahl Ihrer Agent*innen
							</div>
						</div>

						<button class="floating-form__submit btn btn--full-width" type="submit" style="margin-bottom:0;">Jetzt berechnen</button>
					</form>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered saving-calculation__infos" style="display: none; border-left: 2px solid #fff; padding-left: 30px;">
				<h3 class="icon-attention">Grundlage der Kalkulation</h3>
				<p>Die folgende ROI-Aufstellung verwendet Annahmen basierend auf Durschnittswerten bei folgenden Variablen:</p>
				<p>
					<strong>Durchschnittliche Gesprächsdauer:</strong> 3,5 min<br />
					<strong>Erreichbarkeit:</strong> 75%<br />
					<strong>Kosten je Arbeitnehmer:</strong> 50.000€ p.a. (30€/h) *<br />
					<strong>Agentenauslastung:</strong> 60%
				</p>
				<p><small>*Bruttoarbeitslohn: Kosten je Arbeitnehmer laut statistischem Bundesamt</small></p>
			</div>
		</div>
	</div>
	
	<div class="section__content section__content--wide saving-calculation--desktop" id="mehrwertrechner-result">
		<div class="saving-calculation">
			<div class="atomic-loader atomic-loader--hidden">
				<div class="atomic-loader__circle"></div>
				<div class="atomic-loader__dots">
					<div class="atomic-loader__dot"></div>
					<div class="atomic-loader__dot"></div>
					<div class="atomic-loader__dot"></div>
					<div class="atomic-loader__dot"></div>
				</div>
			</div>

			<h3>
				Jährliche Ersparnis bis zu:<br />
				<span>_ _ _ . _ _ _ €</span>
			</h3>

			<h4>Aufschlüsselung des Einsparpotenzials</h4>
			
			<div class="saving-calculation__grid">
				<div class="saving-calculation__overlay">
					<h3>
						Jetzt persönliches Einsparpotential berechnen
					</h3>
					<p>Wir berechnen Ihr individuelles Einsparpotential im Kundenservice. Mit nur zwei eingegebenen Werten erhalten Sie Ihr Ergebnis.</p>
					<p><a href="#mehrwertrechner" class="btn btn--primary btn--centered">Jetzt Werte eintragen</a></p>
				</div>

				<div class="co-grid" style="--gutter:10px">
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--anrufdauer">
						<div class="saving-calculation__col-loader"></div>

						<h5>Verkürzung der <br /><span>Anrufdauer</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">_ _ . _ _ _ €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/calls-per-month-small.svg" alt=""> <strong class="highlight nummer-anrufe">????</strong><br />
										<em>Anrufe pro Monat</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="einspareffekt-anruf">?s</strong><br />
										<em>Angenommener<br />Einspareffekt</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="gesparte-sekunden">= ?s</strong>
									</div>
									<div class="saving-calculation__entry">
										oder
									</div>
									<div class="saving-calculation__entry">
										<strong>= <span class="gesparte-stunden">?h</span></strong>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="gesparte-stunden">?h</strong><br />
										<em>Einsparung<br />Stundenzahl</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="stundenlohn">?€</strong><br />
										<em>angenommener<br />Stundenlohn der<br />Agenten</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="monatliche-einsparung">?€</strong><br />
										<em>Monatliches<br />Kostensenkungs&shy;potential</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="monate-im-jahr">?</strong><br />
										<em>Monate im<br />Jahr</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= <span class="total-ersparnis">?€</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content saving-calculation__content--blurred">
							<p>Durch intelligente Anrufvorqualifizierung schaffen wir es nachweislich, die durchschnittliche Dauer eines Anrufes um bis zu 30 Sekunden zu reduzieren, bzw. gänzlich automatisiert zu bearbeiten.<br /><br /></p>
							<p><strong>Unsere Tools dafür:</strong></p>
							<ul>
								<li>
									Anrufer-Vorqualifizierung
									<span class="tooltip tooltip--light">
										<span>Ihre Agent*innen wissen bereits bei Gesprächsannahme um das Anliegen ihrer Anrufer.</span>
									</span>
								</li>
								<li>
									Automatisierung
									<span class="tooltip tooltip--light">
										<span>Nicht alle Anliegen müssen von Agenten bearbeitet werden. Wir liefern die Schnittstellen und technischen Optionen für Selfservice am Telefon.</span>
									</span>
								</li>
								<li>
									CRM-Anbindung
									<span class="tooltip tooltip--light">
										<span>Ihr CRM liefert die Informationen des Kunden. Wir liefern die passenden Schnittstellen, um es anzubinden.</span>
									</span>
								</li>
								<li>
									KI-Integration
									<span class="tooltip tooltip--light">
										<span>Spracherkennung, Sprachausgabe, offene Schnittstellen bilden die Grundlage bei CallOne mittels KI Sachverhalte intelligent zu automatisieren.</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--agentenauslastung">
						<div class="saving-calculation__col-loader"></div>

						<h5>Steigerung der <br /><span>Agentenauslastung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">_ _ . _ _ _ €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/calls-per-month-small.svg" alt=""> <strong class="highlight nummer-anrufe">????</strong><br />
										<em>Anrufe pro Monat</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="erreichbarkeitssteigerung">?%</strong><br />
										<em>gesteigerte<br />Erreichbarkeit</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>= <span class="mehr-anrufe">?</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>mehr angenommene<br />Anrufe (<span class="dauer-anruf">?</span> min/Call)</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="gesparte-stunden">?h</strong><br />
										<em>Einsparung<br />Stundenzahl</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="stundenlohn">?€</strong><br />
										<em>angenommener<br />Stundenlohn der<br />Agenten</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="monatliche-einsparung">?€</strong><br />
										<em>Monatliches<br />Kostensenkungs&shy;potential</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="monate-im-jahr">?</strong><br />
										<em>Monate im<br />Jahr</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= <span class="total-ersparnis">?€</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content saving-calculation__content--blurred">
							<p>Mehr Gespräche in gleicher Zeit führen und durch Verschiebung von sogenannten Anrufspitzen. CallOne liefert hier verschiedenste Tools um eine optimale Verteilung eingehender Anrufe in Ihrem Callcenter zu gewährleisten. </p>
							<p><strong>Unsere Tools dafür:</strong></p>
							<ul>
								<li>
									Virtuelle Warteschleifen
									<span class="tooltip tooltip--light">
										<span>Anrufer warten virtuell und werden auf spätere Zeitpunkte verteilt in denen Ihre Agenten besser erreichbar sind.</span>
									</span>
								</li>
								<li>
									Automatisierter Rückruf aus Warteschleife
									<span class="tooltip tooltip--light">
										<span>Anrufer erhalten einen gezielten Rückrufzeitpunkt außerhalb Ihrer Peaks benannt zu dem das System sie zurückruft.</span>
									</span>
								</li>
								<li>
									Realtime-Website Callback
									<span class="tooltip tooltip--light">
										<span>Verkürzte Gesprächszeiten, denn der Callback bestimmt den optimalen Anrufzeitpunkt direkt auf Ihrer Webseite.</span>
									</span>
								</li>
								<li>
									Terminierter Rückruf
									<span class="tooltip tooltip--light">
										<span>Stellen Sie vereinbarte Rückrufe individuell auf unserer Oberfläche ein. CallOne erledigt den Rest. </span>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--personalplanung">
						<div class="saving-calculation__col-loader"></div>
						
						<h5>Optimierte <br /><span>Personalplanung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">_ _ . _ _ _ €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/Customer-Support-White.svg" alt="" width="40"> <strong class="highlight nummer-agenten">????</strong><br />
										<em>Anzahl Agent*innen</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="effizienzgewinn">?%</strong><br />
										<em>Effizienzgewinn<br />Personal</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>= <span class="kosten-agent">?€</span></strong><br />
									</div>
									<div class="saving-calculation__entry">
										<em>Personalkosten<br />/jährlich</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="effizienzgewinn">?%</strong><br />
										<em>Effizienzgewinn<br />Personal</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong class="personalkosten-jahr">?€</strong><br />
										<em>Personalkosten<br />/jährlich</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= <span class="total-ersparnis">?€</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content saving-calculation__content--blurred">
							<p>Steigern Sie die Leistung mit Echtzeit-Einblicken und motivieren Sie Ihre Mitarbeiter sich neue Grenzen zu setzen. CallOne liefert alle Daten für eine optimierte Personalplanung- und Auswertung.<br /><br /></p>
							<p><strong>Unsere Tools dafür:</strong></p>
							<ul>
								<li>
									BI-gesteuerte Arbeitszeitplanung- und Erfassung
									<span class="tooltip tooltip--light">
										<span>Fertige BI-Konnektoren für Ihr Lieblingstool geben ihnen alle Daten für eine gezielte Personaleinsatzplanung.</span>
									</span>
								</li>
								<li>
									Realtime-Dashboards zur KPI-Optimierung
									<span class="tooltip tooltip--light">
										<span>Wir liefern fertige Dashboards und  Schnittstellen, die Ihnen sekündlich relevante KPI vermitteln.</span>
									</span>
								</li>
								<li>
									Prozessoptimierung durch Call Tagging
									<span class="tooltip tooltip--light">
										<span>Gesprächsmitschnitte oder Live-Coachings liefern wir in allen erdenklichen Formen - DSGVO-konform und anpassbar auf Ihre Anforderungen.</span>
									</span>
								</li>
								<li>
									Agenten-Performance Analyse
									<span class="tooltip tooltip--light">
										<span>Wir liefern die vielleicht umfänglichsten Auswertungsmöglichkeiten für Ihre Agenten und Agentinnen.</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section--light-green-white" id="referenzen">
	<div class="section__content section__content--narrow">
		<h1 class="centered mobile-left">Das glauben Sie uns nicht?</h1>
		
		<p class="centered mobile-hidden" style="font-size:28px">Dann schauen Sie sich jetzt an, was unsere Kunden schon</p>
		<h3 class="centered mobile-hidden">mit der CallOne Callcenter-Software erreichen konnten.</h3>
		<p class="desktop-hidden">Folgende Kunden konnten mit unserer Callcenter-Software Ihren ROI steigern!</p>
	</div>	

	<div class="section__content section__content--wide">
		<div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
				<div class="fader" data-speed="2500">
					<div class="fader__item" data-title="Enterprise">
						<img src="/assets/images/client-logos/Logos-enterprise.svg" alt="" />
					</div>
					<div class="fader__item" data-title="Fast Growing">
						<img src="/assets/images/client-logos/Logos-Fast-Growing.svg" alt="" />
					</div>
					<div class="fader__item" data-title="Mittelstand">
						<img src="/assets/images/client-logos/Logos-mittelstand.svg" alt="" />
					</div>
					<div class="fader__item" data-title="Ihre Organisation">
						<h4 class="centered">Unternehmen jeder Größe vertrauen auf CallOne</h4>
						<p class="centered">Lassen Sie uns gemeinsam über Potentiale für <br />Ihren Kundenservice sprechen.</p>
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--hidden-md co-grid__col--6-md">
				<div class="carddeck carddeck--right carddeck--no-indicators" data-speed="2500" style="padding-left: 60px !important;">
					<div class="carddeck__card">
						<h6><span class="icon-roi-indicator"></span>Erreichbare Enterprise Steigerungen</h6>
						<p>> 33% Auslastung Ihrer Agents</p>
					</div>
					<div class="carddeck__card">
						<h6><span class="icon-roi-indicator"></span>Erreichbare Fast Growing Steigerungen</h6>
						<p>97% Erreichbarkeit im Tagesverlauf</p>
					</div>
					<div class="carddeck__card">
						<h6><span class="icon-roi-indicator"></span>Erreichbare Mittelstand Steigerungen</h6>
						<p>Halbierung der Wahlwiederholer</p>
					</div>
					<div class="carddeck__card">
						<h6><span class="icon-roi-indicator"></span>Ihre Erreichbare Steigerungen</h6>
						<p>65% kürzere Wartedauer</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mobile-hidden" style="height: 100px;"></div>

	<div class="section__content section__content--narrow">
		<h1 class="centered mobile-left">Das hat Sie neugierig gemacht?</h1>
		
		<p class="centered mobile-hidden">Melden Sie sich jetzt für ein unverbindliches Erstgespräch. Wir erklären Ihnen, wie die CallOne Callcenter-Software funktioniert und rechnen auch gern für Sie im Detail Ihre Einsparungen und Ihren Effizienzgewinn aus.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="content-box content-box--wide content-box--shadow content-box--white">
			<div class="co-grid co-grid--center-line centered">
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-left">
					<p><img src="/assets/images/icons_svg/callback-black.svg" alt="" width="48" /></p>
					<h4>Buchen Sie ein unverbindliches <br />15 Minuten Erstgespräch</h4>
					<p>Telefon- oder Videocall vereinbaren</p>
					<p><a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Termin vereinbaren</a></p>
				</div>
				<div class="co-grid__col co-grid__col--6-md co-grid__col--hidden-md">
					<p><img src="/assets/images/icons_svg/contact-sales-black.svg" alt="" width="48" /></p>
					<h4>Senden Sie uns <br />eine Nachricht</h4>
					<p>Kontaktformular nutzen</p>
					<p><a href="#" class="btn btn--secondary btn--centered" data-openmodal="contact-sales">Kontakt aufnehmen</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section--dark-green-black">
	<div class="section__content">
		<h1 class="centered">Noch nicht überzeugt?</h1>

		<p class="centered mobile-hidden">Dann werfen Sie doch noch einen Blick auf wichtige Themen rund um unsere Call Center Software, die das Paket für unsere Kunden abrunden.</p>

		<div class="tablist tablist--on-black desktop-hidden">
			<div class="tablist__links">
				<div class="tablist__link tablist__link--active" data-tab="1">
					<strong>Flexibel telefonieren</strong><br />
					Erfahren Sie mehr zu unseren <br class="mobile-hidden" />unterstützten Telefonie-Optionen
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Integrations&shy;möglichkeiten</strong><br />
					Optionen für Anbindung Ihrer <br class="mobile-hidden" />genutzten Businesslösungen
				</div>
				<div class="tablist__link" data-tab="3">
					<strong>Zusammenarbeit</strong><br />
					Unsere Kommunikations&shy;plattform mit <br class="mobile-hidden" />Expertenunterstützung
				</div>
				<div class="tablist__link" data-tab="4">
					<strong>Sicherheit</strong><br />
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

		<div class="co-grid mobile-hidden">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
				<div class="radio-select">
					<div class="radio-select__item">
						<input type="radio" id="button1" name="themen" value="1" checked="checked">
						<label for="button1">
							<span class="radio-select__headline">Flexibel telefonieren</span>
							<span class="radio-select__text">Erfahren Sie mehr zu unseren <br />unterstützten Telefonie-Optionen</span>
						</label>
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
				<div class="radio-select">
					<div class="radio-select__item">
						<input type="radio" id="button2" name="themen" value="2">
						<label for="button2">
							<span class="radio-select__headline">Integrations&shy;möglichkeiten</span>
							<span class="radio-select__text">Optionen für Anbindung Ihrer <br />genutzten Businesslösungen</span>
						</label>
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
				<div class="radio-select">
					<div class="radio-select__item">
						<input type="radio" id="button3" name="themen" value="3">
						<label for="button3">
							<span class="radio-select__headline">Zusammenarbeit</span>
							<span class="radio-select__text">Unsere Kommunikationsplattform mit <br />Expertenunterstützung</span>
						</label>
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
				<div class="radio-select">
					<div class="radio-select__item">
						<input type="radio" id="button4" name="themen" value="4">
						<label for="button4">
							<span class="radio-select__headline">Sicherheit</span>
							<span class="radio-select__text">Wie kommen <br />99,999% Erreichbarkeit zustande?</span>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section__content section__content--wide mobile-hidden" data-thema="1">
		<hr class="bracket-spacer" />
		
		<h3 class="centered">Unsere Vielfalt an Telefonie-Clients</h3>
		<p class="centered">Telefonieren mit CallOne heißt aus vielen verschiedenen Möglichkeiten der <br />Telefonie zu schöpfen und so Ihr ideales Setup zu finden.<br /><br /></p>

		<div class="tablist tablist--on-black">
			<div class="tablist__links tablist__links--full-width">
				<div class="tablist__link tablist__link--smaller tablist__link--active" data-tab="1">
					<img src="/assets/images/icons_svg/voip-telefonanlage-white.svg" alt="" /><br />
					<strong>Agentenmaske <br />im Browser</strong>
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="2">
					<img src="/assets/images/icons_svg/softphone-browser-white.svg" alt="" /><br />
					<strong>Softphone im <br />Browser/Desktop</strong>
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="3">
					<img src="/assets/images/icons_svg/microsoft-teams-white.svg" alt="" /><br />
					<strong>Microsoft <br />Teams Client</strong>
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="4">
					<img src="/assets/images/icons_svg/sip-telephone-white.svg" alt="" /><br />
					<strong>SIP <br />Tischtelefon</strong>
				</div>
				<div class="tablist__link tablist__link--smaller" data-tab="5">
					<img src="/assets/images/icons_svg/mobile-phone-white.svg" alt="" /><br />
					<strong>Mobiler<br />Handyclient</strong>
				</div>
			</div>

			<div class="tablist__content tablist__content--active" data-tab="1">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/agent-view-desktop.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
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

			<div class="tablist__content" data-tab="2">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/softphone-view.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
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

			<div class="tablist__content" data-tab="3">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/microsoft-teams.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
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

			<div class="tablist__content" data-tab="4">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/sip-tischtelefon-reduced.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<p class="bigtext">Binden Sie flexibel jedes gängige SIP-Tischtelefon oder DECT-Telefon ein und nutzen sie die Möglichkeit der bequemen Verwaltung in einer Oberfläche.</p>
						<br />
						<ul class="list list--checkmarks list--on-black">
							<li>
								Optimales Zusammenspiel mit der ACD<br />
								<span class="subtext">Agenten an- und abmelden. Gespräche aus der Warteschleife ziehen oder freie Sitzplatzwahl.</span>
							</li>
							<li>
								Neue Updates auf Knopfdruck<br />
								<span class="subtext">Spielen Sie neue Firmware über CallOne ein oder hinterlegen sie Kurzwahltasten im Handumdrehen – einfacher geht’s nicht.</span>
							</li>
							<li>
								Verschlüsslung auf Spitzenniveau<br />
								<span class="subtext">Verschlüsseln Sie die Endgeräte mittels VPN und sichern Sie Gesprächsinhalte und Übertragung mittels SRTP und TLS.</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="5">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/phone-client.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
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

	<div class="section__content section__content--wide mobile-hidden" data-thema="2">
		<hr class="bracket-spacer" />
		
		<h3 class="centered">Telefonie mit Lieblings-Apps verbinden</h3>

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
					<!-- <div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
						<img src="/assets/images/client-logos/Hubspot-Card.svg" alt="" />
					</div>
					<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
						<img src="/assets/images/client-logos/GastroHero-Card.svg" alt="" />
					</div>
					<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
						<img src="/assets/images/client-logos/Flaconi-Card.svg" alt="" />
					</div>
					<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
						<img src="/assets/images/client-logos/Hubspot-Card.svg" alt="" />
					</div>
					<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
						<img src="/assets/images/client-logos/GastroHero-Card.svg" alt="" />
					</div>
					<div class="carddeck__card carddeck__card--small-padding carddeck__card--vcentered">
						<img src="/assets/images/client-logos/Flaconi-Card.svg" alt="" />
					</div> -->
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
	
	<div class="section__content section__content--wide mobile-hidden" data-thema="3">
		<hr class="bracket-spacer" />
		
		<h3 class="centered">Die perfekte Kombination aus <br />Technologie und persönlicher Beratung</h3>
		
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

	<div class="section__content section__content--wide mobile-hidden" data-thema="4">
		<hr class="bracket-spacer" />

		<h3 class="centered">Datenschutz und Ausfallsicherheit</h3>

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

		<?php /* <p>
			<a href="#" class="btn btn--border-white btn--arrow-right btn--centered">Mehr erfahren</a>
		</p> */ ?>
	</div>
	
	<div class="section__content section__content--wide mobile-hidden">
		<div class="cta-contact">
			<h2 class="centered">Lassen Sie uns miteinander reden!</h2>
			<p class="centered">Ob unsere Lösungen zu Ihren Anforderungen passen, finden wir schnell in einem ersten ehrlichen und umfänglichen Austausch heraus.</p>

			<br />
			<br />

			<div class="co-grid">
				<div class="co-grid__col co-grid__col--4-xs">
					<img src="/assets/images/icons_svg/first-call.svg" alt="" />
					<h4>
						<span>Schritt 1</span><br />
						Erstgespräch
					</h4>
					<p>Kein Verkaufsgespräch, sondern Austausch.</p>
				</div>
				<div class="co-grid__col co-grid__col--4-xs">
					<img src="/assets/images/icons_svg/presentation.svg" alt="" />
					<h4>
						<span>Schritt 2</span><br />
						Showcase
					</h4>
					<p>Wir machen einen Show&shy;case für Ihre Anforderung.</p>
				</div>
				<div class="co-grid__col co-grid__col--4-xs">
					<img src="/assets/images/icons_svg/team-dark.svg" alt="" />
					<h4>
						<span>Schritt 3</span><br />
						Lösungsfindung
					</h4>
					<p>Wir passen individuelles Lösungsangebot auf Sie zu.</p>
				</div>
			</div>

			<p>
				<a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Erstgespräch buchen</a>
			</p>
		</div>
	</div>

	<div class="section__content">
		<?php
		$faqs->structured_data_get_code ();
		$faqs->html_get_code('toggle-box--on-black');
		?>
	</div>
</div>

<script>
	const radios = document.querySelectorAll('[name="themen"]');
	const themen = document.querySelectorAll('[data-thema]');
	themen.forEach(thema => thema.style.display = 'none');
	themen[0].style.display = 'block';
	radios.forEach(radio => {
		radio.addEventListener('click', e => {
			themen.forEach(thema => {
				thema.style.display = 'none';
				if (e.currentTarget.value == thema.dataset.thema)
					thema.style.display = 'block';
			});
		});
	})
</script>


<div class="modal video-casestudy-check24">
  <?php include('./partials/modal-video-check24.php'); ?>
</div>