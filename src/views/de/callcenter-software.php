<?php
$product = new product ('Callcenter-Software', 'Callcenter-Software mit Computer Telephony Integration (CTI), professioneller Kundenservice, Warteschleifenmanagement, Callbackfunktion');
$product->image_set ('https://www.callone.de/assets/images/photos/agentenmaske-hintergrund-mobile.jpg');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
	'Wie schnell kann die Callcenter-Lösung für uns bereitstehen?',
	'<p>Grundsätzlich sind wir ein kleines Team von Spezialisten und können Ihre individuellen Anforderungen sehr rasch umsetzen. Dies ist wohl auch einer der zentralen Vorteile bei einer Zusammenarbeit mit uns: Die Cloud Software sowie unser Service stehen Ihnen direkt und auch sehr kurzfristig zur Verfügung und flexible Anpassungen auf Ihre Bedürfnisse sind jederzeit möglich. Außerdem sind sowohl Callcenter-Software als auch die IP-Telefonanlage extrem intuitiv und Sie können natürlich selbst eingreifen und nach Wunsch abändern.</p>'
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

<div class="section section--no-padding-bottom">
	<div class="hero">
		<div class="hero__image">
			<img src="/assets/images/illus/CCS-header-illustration.svg" alt="" style="width:100%" />
		</div>
		<div class="hero__text">
			<h1 class="mobile-hidden">Die erste Contact Center Software mit der Sie Ihren Return-on-Investment (ROI) maximieren werden</h1>
			<p class="mobile-hidden">Eine intuitiv bedienbare cloudbasiertes Telefonsystem für mehr Effizienz</p>
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

<div class="section">
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
						<img src="/assets/images/icons_svg/callone-fullservice.svg" alt="" style="margin:0" />
						<h2>Lösungen für Ihr <br />gesamtes Unternehmen</h2>
						<p>Eine Plattform alles drin. Wenn Sie mögen statten wir Ihr Unternehmen mit einer kompletten VoIP-Telefonanlage aus und passen sie optimal auf Ihre Bedürfnisse an.</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md" style="background-image:url(/assets/images/backgrounds_png/whole-company.png);background-size:285px;background-repeat:no-repeat;background-position:center top;padding-top:180px">
						<div class="carddeck carddeck--right" data-speed="2500">
							<div class="carddeck__card">
								<h2 class="icon-schnittstellen">Schnittstellen</h2>
								<p>Fertige Apps oder API für die Anbindung an Ihre BI, Ticketing, CRM und alle anderen System, die mit Ihrer Telefonie sprechen sollten.</p>
							</div>
							<div class="carddeck__card">
								<h2 class="icon-rufnummern">Rufnummern</h2>
								<p>Rufnummern schalten, portieren und weiterleiten. Weltweit und natürlich in Ihrem Vorwahlbereich​.</p>
							</div>
							<div class="carddeck__card">
								<h2 class="icon-voip-telefonanlage">VoIP-Telefonanlage</h2>
								<p>Natürlich in einer Oberfläche mit Ihrer Call Center Software aus der Cloud mit 99,999% Erreichbarkeit​.</p>
							</div>
							<div class="carddeck__card">
								<h2 class="icon-phone-ms-teams">Microsoft Teams</h2>
								<p>Ihre Telefonie in Microsoft Teams integriert.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/icons_svg/callone-own-telephony.svg" alt="" style="margin:0" />
						<h2>Lösungen für Ihr Callcenter</h2>
						<p>CallOne ist Spezialist wenn es um das Thema Call Center Software geht. Wir liefern diesen Baustein unserer VoIP-Telefonanlage wahlweise integriert in Ihre</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
						<img src="/assets/images/photos/integration-callcenter.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section" id="features">
	<div class="section__content section__content--narrow">
		<h1 class="centered mobile-left">Über 200 Features - <br />aber die Magie steckt im Detail</h1>
		<p class="centered mobile-left">Wir bieten alles was ausgewachsene Unternehmen im Bereich moderner Business-Telefonie suchen. Voller Leistungsumfang, ohne Einschränkungen.</p>
	</div>

	<div class="section__content section__content--wide section__content--border-bottom">
		<div class="tablist">
			<div class="tablist__links">
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
				<p class="centered mobile-hidden">Unser System ist schnittstellenoffen. Für Sie bedeutet dies, dass sie Anrufe schneller, kundenfreundlicher und deutlich effizienter bearbeiten können indem sie ihre CRM, ERP, Ticketing oder BI-Lösung bei uns anbinden.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="5">5%</span>
								</div>
								weniger Kosten pro Kontakt durch gesteigerte FCR*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-start="10" data-end="5">5</span>-<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-start="30" data-end="15" data-suffix="s">15s</span>
									<!-- 5-15s -->
								</div>
								kürzere Gesprächsdauern (AHT)*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-start="0" data-end="50">50</span>-<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-start="20" data-end="70" data-suffix="%">70%</span>
									<!-- 50%-70% -->
								</div>
								Erkennung des Anruferanliegens*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="x" data-start="0" data-end="3">3x</span>
									<!-- 3x -->
								</div>
								schnellerer Anrufaufbau*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-11">
							<label for="faq-11">Intelligente Anrufsteuerung mittels API</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-12">
							<label for="faq-12">Anruferinformationen wenn es klingelt</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-13">
							<label for="faq-13">Wissen ohne Fragen zu müssen</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-14">
							<label for="faq-14">Wählen ohne Tippen</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur hic, sequi ea nisi magni inventore ipsa voluptas doloribus modi dignissimos.</p>
							</div>
						</div>
					</div>
				</div>

				<p class="centered mobile-hidden" style="margin-top: 150px;">
					Wir haben noch mehr<br />
					<strong>Informationen zu Konnektivität:</strong>
				</p>
				<p>
					<a href="#" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--yellow-footer" data-tab="2">
				<h2 class="centered icon-automation mobile-hidden">Automatisierung und KI</h2>
				<p class="centered mobile-hidden">Nicht jeder Anruf muss zum Agenten, um gelöst zu werden. Nutzen Sie Echtzeit-Spracherkennung und unsere vielzähligen Schnittstellen, um effizienter zu telefonieren.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="15">15%</span>
								</div>
								weniger Gesprächszeit für Ihre Agent*innen*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="x" data-start="0" data-end="4">4x</span>
									<!-- 4x -->
								</div>
								kürzere IVR-Menüs durch Spracherkennung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-start="0" data-end="94">94%</span>
									<!-- 94% -->
								</div>
								Kundenzufriedenheitsraten dank schnellerer Fallbearbeitung*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-21">
							<label for="faq-21">Sprachdialoge ohne Agenten</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-22">
							<label for="faq-22">Intelligentes Sprachrouting</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-23">
							<label for="faq-23">Schnittstellen für schnelle Fallbearbeitung</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
					</div>
				</div>

				<p class="centered mobile-hidden" style="margin-top: 150px;">
					Wir haben noch mehr<br />
					<strong>Informationen zu Effizienz:</strong>
				</p>
				<p>
					<a href="#" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--purple-footer" data-tab="3">
				<h2 class="centered icon-queue mobile-hidden">Warteschleifenmanagement</h2>
				<p class="centered mobile-hidden">Reduzieren Sie die Anruflast durch weniger Wahlwiederholer und Abbrecher. Wie? Mit dem vielleicht umfänglichsten Warteschleifenmanagement am Markt.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="10">10%</span>
								</div>
								bessere Erreichbarkeit*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="%" data-start="0" data-end="65">65%</span>
									<!-- 65% -->
								</div>
								Verkürzung der Wartezeit*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="%" data-start="0" data-end="25">25%</span>
									<!-- 25% -->
								</div>
								geringere Abbruchquote*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									1,<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="x" data-start="0" data-end="5">5x</span>
									<!-- 1,5x -->
								</div>
								gesteigerte Agentenauslastung*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-31">
							<label for="faq-31">Intelligente Routingfunktionen</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-32">
							<label for="faq-32">Virtuelle Warteschleife & Co.</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-33">
							<label for="faq-33">Wahlwiederholerpriorisierung</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-34">
							<label for="faq-34">Rückrufe für optimale Auslastung</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
					</div>
				</div>

				<p class="centered mobile-hidden" style="margin-top: 150px;">
					Wir haben noch mehr<br />
					<strong>Informationen zu Kundenzufriedenheit:</strong>
				</p>
				<p>
					<a href="#" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p>
			</div>

			<div class="tablist__content tablist__content--border-bottom tablist__content--blue-footer" data-tab="4">
				<h2 class="centered icon-statistics mobile-hidden">Statistik & Datenanalyse</h2>
				<p class="centered mobile-hidden">Optimieren sie Ihre Prozesse datengestützt und reduzieren Kosten durch Analysemöglichkeiten, die Sie vorher nicht für möglich hielten.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
								</div>
								mehr Effizienz in der Personalplanung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="x" data-start="0" data-end="3">3x</span>
									<!-- 3x -->
								</div>
								schnellere Reaktion dank Echtzeit-Benachrichtigung*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="min" data-start="0" data-end="60">60min</span>
									<!-- 60min -->
								</div>
								Zeitersparnis täglich mittels Autoreporting*
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="<?= isset($_GET['count']) ? 'counting-number':''; ?>" data-suffix="%" data-start="0" data-end="20">20%</span>
									<!-- 20% -->
								</div>
								gesteigerte Teamleistung*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md mobile-hidden">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-41">
							<label for="faq-41">Arbeitszeiterfassung & Forecasting</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-42">
							<label for="faq-42">Sofortige Benachrichtigung</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-43">
							<label for="faq-43">Sparen Sie kostbare Zeit</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-44">
							<label for="faq-44">Zielerreichung mittels wichtiger Kennzahlen</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
					</div>
				</div>

				<p class="centered mobile-hidden" style="margin-top: 150px;">
					Wir haben noch mehr<br />
					<strong>Informationen zu Datenauswertung:</strong>
				</p>
				<p>
					<a href="#" class="btn btn--secondary btn--centered">Mehr erfahren</a>
					<br />
				</p>
			</div>
		</div>
	</div>

	<div class="section__content section__content--narrow mobile-hidden">
		<p class="centered">
			<strong>Bei den Funktionen noch nicht fündig geworden?</strong><br />
			Hier gibt es weitere Features und Funktionen​:
		</p>

		<p>
			<a href="#" class="btn btn--border-black btn--centered btn--arrow-right">Weitere Funktionen</a>
		</p>
	</div>
</div>

<div class="section section--black" id="mehrwertrechner">
	<div class="section__content section__content--narrow saving-calculation--mobile">
		<h1>Lust, Ihr Einsparpotenzial durch CallOne direkt zu berechnen?</h1>
		
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

		<div class="co-grid saving-calculation__form-grid">
			<div class="co-grid__col co-grid__col--12-xs">
				<div class="content-box content-box--white">
					<h2>Geben Sie uns 2 Ihrer Kennzahlen</h2>
					<p>Wir errechnen Ihr Einsparpotential mit realistischen Annahmen basierend auf unserer langjährigen Erfahrung.</p>

					<form action="#" method="post" class="floating-form saving-calculation__form">
						<div class="floating-form__error">
							<p>Bitte dies das</p>
						</div>

						<div class="floating-form__row">
							<div class="floating-form__icon">
								<img src="/assets/images/icons_svg/calls-per-month-big.svg" alt="" />
							</div>
							<div class="floating-form__field floating-form__field--short">
								<input type="text" name="calls" placeholder=" " autocomplete="off" />
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
								<input type="text" name="agents" placeholder=" " autocomplete="off" />
								<label></label>
							</div>
							<div class="floating-form__description">
								Anzahl Ihrer Agent*innen
							</div>
						</div>

						<button class="floating-form__submit btn btn--full-width" disabled type="submit" style="margin-bottom:0;">Jetzt berechnen</button>
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
				<span>xxx.xxx.xxx €</span>
			</h3>

			<h4>Aufschlüsselung des Einsparpotenzials</h4>
			
			<div class="saving-calculation__grid">
				<div class="saving-calculation__overlay">
					<h3>
						Eine Rechnung die nur mit Ihren <br />
						realistischen Unternehmenswerten aufgeht
					</h3>
					<p>Füllen Sie Ihre Unternehmenswerte oben ein und erhalten Sie eine ungefähre Kalkulation Ihres effektiven Einsparpotenzials mit CallOne basierend auf Ihrem Anrufvolumen und Lorem Ipsum.</p>
					<p><a href="#mehrwertrechner" class="btn btn--primary btn--centered">Jetzt Werte eintragen</a></p>
				</div>

				<div class="co-grid" style="--gutter:10px">
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--anrufdauer">
						<div class="saving-calculation__col-loader"></div>

						<h5>Verkürzung der <span>Anrufdauer</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">?€</span>
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
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Automatisierung
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									CRM-Anbindung
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									KI-Integration
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--agentenauslastung">
						<div class="saving-calculation__col-loader"></div>

						<h5>Steigerung der <span>Agentenauslastung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">?€</span>
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
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Automatisierter Rückruf aus Warteschleife
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Realtime-Website Callback
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Terminierter Rückruf
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--personalplanung">
						<div class="saving-calculation__col-loader"></div>
						
						<h5>Optimierte <span>Personalplanung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">?€</span>
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
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Realtime-Dashboards zur KPI-Optimierung
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Prozessoptimierung durch Call Tagging
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Agenten-Performance Analyse
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
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
		
		<p class="centered mobile-hidden">Dann schauen Sie sich jetzt an, was unsere Kunden schon <br /><strong>mit der CallOne Callcenter-Software erreichen konnten.</strong></p>
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
						<h3 class="centered">Unternehmen jeder Größe vertrauen auf CallOne</h3>
						<p class="centered">Lassen Sie uns gemeinsam über Potentiale für Ihren Kundenservice sprechen.</p>
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--hidden-md co-grid__col--6-md">
				<div class="carddeck carddeck--right" data-speed="2500">
					<div class="carddeck__card">
						<h2 class="icon-roi-indicator">Erreichbare Steigerung</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
					</div>
					<div class="carddeck__card">
						<h2>Lorem, ipsum dolor. 2</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
					</div>
					<div class="carddeck__card">
						<h2>Lorem, ipsum dolor. 3</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
					</div>
					<div class="carddeck__card">
						<h2>Lorem, ipsum dolor. 4</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section__content section__content--narrow">
		<h1 class="centered mobile-left">Das hat Sie neugierig gemacht?</h1>
		
		<p class="centered mobile-hidden">Melden Sie sich jetzt für ein unverbindliches Erstgespräch. Wir erklären Ihnen, wie die CallOne Callcenter-Software funktioniert und rechnen auch gern für Sie im Detail Ihre Einsparungen und Ihren Effizienzgewinn aus.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="content-box content-box--wide content-box--shadow content-box--white">
			<div class="co-grid co-grid--center-line centered">
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
					<img src="/assets/images/icons_svg/callback-black.svg" alt="" />
					<h3>Buchen Sie ein unverbindliches <br />15 Minuten Erstgespräch</h3>
					<p>Telefon- oder Videocall vereinbaren</p>
					<p><a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Termin vereinbaren</a></p>
				</div>
				<div class="co-grid__col co-grid__col--6-md co-grid__col--hidden-md">
					<img src="/assets/images/icons_svg/contact-sales-black.svg" alt="" />
					<h3>Senden Sie uns <br />eine Nachricht</h3>
					<p>Kontaktformular nutzen</p>
					<p><a href="/kontakt" class="btn btn--secondary btn--centered">Kontakt aufnehmen</a></p>
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
					Erfahren Sie mehr zu unseren <br />unterstützten Telefonie-Optionen​
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Integrationsmöglichkeiten</strong><br />
					Optionen für Anbindung Ihrer <br />genutzten Businesslösungen​
				</div>
				<div class="tablist__link" data-tab="3">
					<strong>Zusammenarbeit</strong><br />
					Unsere Kommunikationsplattform mit <br />Expertenunterstützung​
				</div>
				<div class="tablist__link" data-tab="4">
					<strong>Sicherheit</strong><br />
					Wie kommen <br />99,999% Erreichbarkeit zustande?
				</div>
			</div>

			<div class="tablist__content tablist__content--active" data-tab="1">
				<div class="co-grid cards">
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/softphone-browser-white.svg" alt="" />
							</div>
							<h3 class="centered">Softphone im Browser/Desktop​</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/sip-telephone-white.svg" alt="" />
							</div>
							<h3 class="centered">SIP Tischtelefon</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/voip-telefonanlage-white.svg" alt="" />
							</div>
							<h3 class="centered">Agentenmaske im Browser​ und viele weitere</h3>
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
							<h3 class="centered">Ticketing-Systeme​</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/client-logos/beispiel-apps-2.svg" alt="" />
							</div>
							<h3 class="centered">Business Intelligence-Tools</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/menu-apis-white.svg" alt="" />
							</div>
							<h3 class="centered">Eigene Systeme verbinden</h3>
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
							<h3 class="centered">Zukunftssichere <br />Technologie</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/first-call-white.svg" alt="" />
							</div>
							<h3 class="centered">Expertenberatung</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs">
						<div class="co-video">
							<div class="co-video__poster">
								<img src="/assets/images/photos/video-preview.png" alt="" />
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
							<h3 class="centered">Bereitstellung in wenigen Tagen statt Monaten</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-germany-icon.svg" alt="" />
							</div>
							<h3 class="centered">Telefonie mit deutschem Datenschutz-Standard</h3>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--12-xs cards__card cards__card--transparent cards__card--no-padding">
						<div class="cards__card--dark-top">
							<div class="cards__card-image">
								<img src="/assets/images/icons_svg/usp-availability-icon.svg" alt="" />
							</div>
							<h3 class="centered">Garantierte 99,999% Erreichbarkeit</h3>
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
		
		<h1 class="centered">Unsere Vielfalt an Telefonie-Clients</h1>
		<p class="centered">Telefonieren mit CallOne heißt aus vielen verschiedenen Möglichkeiten der <br />Telefonie zu schöpfen und so Ihr ideales Setup zu finden.<br /><br /></p>

		<div class="tablist tablist--on-black">
			<div class="tablist__links">
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
					<strong><br />Handyclient</strong>
				</div>
			</div>

			<div class="tablist__content tablist__content--active" data-tab="1">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<img src="/assets/images/photos/agent-view-desktop.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<p>Eine webbasierte Oberfläche speziell konzipiert für höchste Ansprüche Ihre Agenten im Kundenservice und Sales.</p>
						<br />
						<ul class="list list--checkmarks list--on-black">
							<li>
								<strong>Integriertes Softphone im Browser</strong><br />
								Keine Installation notwendig. Headset anschließen und lostelefonieren.
							</li>
							<li>
								<strong>Zugeschnitten auf Ihre Bedürfnisse</strong><br />
								Frei konfigurierbar mit Einbindung ihrer Daten (Iframe oder Link), Anrufgründe und smarten Weiterleitungsfunktionen.
							</li>
							<li>
								<strong>Bereitstellung sofort</strong><br />
								Agenten und Agentinnen erhalten Ihre Zugangsdaten und können mit diesem intuitiven Client sofort lostelefonieren.
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<img src="/assets/images/photos/softphone-view.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<p>Für Unternehmen, die eine optimale Einbindung der Telefonie in Ihre Unternehmenssoftware wünschen.</p>
						<br />
						<ul class="list list--checkmarks list--on-black">
							<li>
								<strong>Browser Extension mit Click-to-Dial</strong><br />
								Softclient für alle gängigen Browser integriert als Extension, heißt Telefonieren auch wenn kein Tab geöffnet ist.
							</li>
							<li>
								<strong>Softphone mit Autokonfiguration</strong><br />
								Alternativ bieten wir kostenfreie Softphone vorkonfiguriert für Ihre Mitarbeiter.
							</li>
							<li>
								<strong>Javascript-Bibliothek vollständig eingebunden</strong><br />
								Möglichkeit in Ihrer eigenen Businesslösung über CallOne zu telefonieren.
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="3">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<img src="/assets/images/photos/microsoft-teams.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<p>Call Center Software in Kombination mit Microsoft Teams? Nutzen Sie das beste aus beiden Lösungen in Kombination.</p>
						<br />
						<ul class="list list--checkmarks list--on-black">
							<li>
								<strong>Optimale Einbindung Ihres gesamten Unternehmens</strong><br />
								Nutzen Sie die Vorteile von Teams und lösen Sie Kundenfälle auch abteilungsübergreifend mit den Weiterleitungsmöglichkeiten, die Teams ihnen bietet.
							</li>
							<li>
								<strong>Kombinierbar mit unserer Agentenmaske</strong><br />
								Eine perfekte Mischung für Unternehmen, die auf Teams setzen, weitreichende Agentenfunktionen nicht missen wollen.
							</li>
							<li>
								<strong>Alles in einem Tool</strong><br />
								Nutzen Sie Teams auch für ausgehende Telefonate und mobil. Die Möglichkeiten sind grenzenlos und erlauben auch einen hybriden Mischbetrieb.
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="4">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<img src="/assets/images/photos/sip-tischtelefon.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<p>Binden Sie flexibel jedes gängige SIP-Tischtelefon oder DECT-Telefon ein und nutzen sie die Möglichkeit der bequemen Verwaltung in einer Oberfläche.</p>
						<br />
						<ul class="list list--checkmarks list--on-black">
							<li>
								<strong>Optimales Zusammenspiel mit der ACD</strong><br />
								Agenten an- und abmelden. Gespräche aus der Warteschleife ziehen oder freie Sitzplatzwahl.
							</li>
							<li>
								<strong>Neue Updates auf Knopfdruck</strong><br />
								Spielen Sie neue Firmware über CallOne ein oder hinterlegen sie Kurzwahltasten im Handumdrehen – einfacher geht’s nicht.
							</li>
							<li>
								<strong>Verschlüsslung auf Spitzenniveau</strong><br />
								Verschlüsseln Sie die Endgeräte mittels VPN und sichern Sie Gesprächsinhalte und Übertragung mittels SRTP und TLS.
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="5">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<img src="/assets/images/photos/phone-client.png" alt="" />
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<p>Ob für Notfälle oder dauerhaft. Die Einbindung von Mobilfunkgeräten ist auf vielfältige Weise mit CallOne möglich.</p>
						<br />
						<ul class="list list--checkmarks list--on-black">
							<li>
								<strong>Viele mobile Möglichkeiten</strong><br />
								Ob direkt als hinterlegtes SIP-Konto im Betriebssystem oder mittels mobiler App oder als sog. PSTN-Weiterleitung aufs Handy.
							</li>
							<li>
								<strong>Rausrufen mit der Officenummer</strong><br />
								Auch mit dem Handy über die Büronummer telefonieren.
							</li>
							<li>
								<strong>Auch ohne mobiles Netz nutzbar</strong><br />
								Sie können bequem über WLAN über die Datenleitung telefonieren auch wenn einmal kein Handyempfang vorhanden sein sollte.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section__content section__content--wide" data-thema="2">
		<hr class="bracket-spacer" />
		
		<h1 class="centered">Telefonie mit Lieblings-Apps verbinden</h1>

		<div class="co-grid" style="width:80%;margin-left:auto;margin-right:auto;background-image:url(/assets/images/backgrounds_png/background-layer.png);background-size:contain;background-position:center;background-repeat:no-repeat;">
			<div class="co-grid__col co-grid__col--1-xs"></div>
			<div class="co-grid__col co-grid__col--3-xs">
				<div class="carddeck carddeck--no-indicators centered">
					<div class="carddeck__card carddeck__card--vcentered">
						<img src="/assets/images/client-logos/HubSpot.svg" alt="" style="max-width:96px;" />
					</div>
					<div class="carddeck__card carddeck__card--vcentered">
						<img src="/assets/images/client-logos/logo-de.svg" alt="" style="max-width:96px;" />
					</div>
					<div class="carddeck__card carddeck__card--vcentered">
						<img src="/assets/images/client-logos/flaconi-seeklogo.com.svg" alt="" style="max-width:96px;" />
					</div>
					<div class="carddeck__card carddeck__card--vcentered">
						<img src="/assets/images/client-logos/HubSpot.svg" alt="" style="max-width:96px;" />
					</div>
					<div class="carddeck__card carddeck__card--vcentered">
						<img src="/assets/images/client-logos/logo-de.svg" alt="" style="max-width:96px;" />
					</div>
					<div class="carddeck__card carddeck__card--vcentered">
						<img src="/assets/images/client-logos/flaconi-seeklogo.com.svg" alt="" style="max-width:96px;" />
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--4-xs co-grid__col--vcentered">
				<!-- <img src="/assets/images/logo/logo-round.svg" alt="" /> -->
			</div>
			<div class="co-grid__col co-grid__col--3-xs co-grid__col--vcentered">
				<div class="content-box content-box--white centered">
					<img src="/assets/images/icons_svg/api-integration.svg" alt="" />
				</div>
			</div>
			<div class="co-grid__col co-grid__col--1-xs"></div>
		</div>

		<div class="co-grid" style="width:80%;margin-left:auto;margin-right:auto">
			<div class="co-grid__col co-grid__col--5-xs right">
				<h3>Konnektoren zu den wichtigsten Business-Anwendungen</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie congue dictumst donec cursus. Bibendum habitasse feugiat aenean bibendum faucibus in. Semper in.</p>
			</div>
			<div class="co-grid__col co-grid__col--2-xs"></div>
			<div class="co-grid__col co-grid__col--5-xs left">
				<h3>Individuelle Anbindung an Ihr Business-System</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque leo urna, lorem sagittis urna neque accumsan, sed ac. Suspendisse faucibus quam netus.</p>
			</div>
		</div>
	</div>
	
	<div class="section__content section__content--wide" data-thema="3">
		<hr class="bracket-spacer" />
		
		<h1 class="centered">Die perfekte Kombination aus <br />Technologie und persönlicher Beratung</h1>
		
		<div class="co-grid">
			<div class="co-grid__col co-grid__col--4-xs right">
				<h3>Technologie „Made in Germany“</h3>
				<p>Die CallOne Callcenter Software verspricht höchste Zuverlässigkeit und stetige Weiterentwicklung. Wir verhelfen zu Höchstleistungen verbessern steig unsere Technologie für die optimale Customer Experience.</p>
			</div>
			<div class="co-grid__col co-grid__col--4-xs centered">
				<img src="/assets/images/icons_png/overlap.png" alt="" />
			</div>
			<div class="co-grid__col co-grid__col--4-xs left">
				<h3>Expertenberatung</h3>
				<p>Bei uns arbeiten Projektmanager*innen und Kunden Hand in Hand – tagtäglich! Sie erhalten einen zentralen Ansprechpartner. Dies schafft nicht nur unglaubliche Geschwindigkeit im Projekt sondern auch messbare Erfolge in Ihrem ROI.</p>
			</div>
		</div>
		
		<div class="co-grid">
			<div class="co-grid__col co-grid__col--6-xs">
				<div class="co-video">
					<div class="co-video__poster">
						<img src="/assets/images/photos/video-preview.png" alt="" />
					</div>
					<a class="co-video__play openModal trackedElement" data-label="Button Video" data-category="Link" data-action="Show Video-Check24 Modal" data-modal="video-casestudy-check24" title="Video zu richtig gutem Kundenservice - Casestudy Check24"></a>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
				<h1>„Über richtig guten Kundenservice”</h1>
				<p>
					<strong>Dr. Rainer Klipp</strong><br />
					Geschäftsführer von Check24 Versicherungen
				</p>
			</div>
		</div>
	</div>

	<div class="section__content section__content--wide" data-thema="4">
		<hr class="bracket-spacer" />

		<h1 class="centered">Datenschutz und Ausfallsicherheit</h1>

		<div class="co-grid cards">
			<div class="co-grid__col co-grid__col--4-xs cards__card cards__card--transparent cards__card--no-padding">
				<div class="cards__card--dark-top">
					<div class="cards__card-image">
						<img src="/assets/images/icons_svg/usp-speed-icon.svg" alt="" />
					</div>
					<h3 class="centered">Bereitstellung in wenigen Tagen statt Monaten</h3>
				</div>
				<div class="cards__card--dark-bottom">
					<p>Kein nerviger Self-Service mehr. Ein CallOne Experte berät Sie persönlich. In kürzester Zeit ist alles eingerichtet, wie sie es brauchen. Und auch schon live.</p>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--4-xs cards__card cards__card--transparent cards__card--no-padding">
				<div class="cards__card--dark-top">
					<div class="cards__card-image">
						<img src="/assets/images/icons_svg/usp-germany-icon.svg" alt="" />
					</div>
					<h3 class="centered">Telefonie mit deutschem Datenschutz-Standard</h3>
				</div>
				<div class="cards__card--dark-bottom">
					<p>Das Privacy Shield Abkommen braucht Sie nicht mehr zu interessieren. Unsere Telefonie-Lösungen hosten wir ausschließlich in Deutschland.</p>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--4-xs cards__card cards__card--transparent cards__card--no-padding">
				<div class="cards__card--dark-top">
					<div class="cards__card-image">
						<img src="/assets/images/icons_svg/usp-availability-icon.svg" alt="" />
					</div>
					<h3 class="centered">Garantierte 99,999% Erreichbarkeit</h3>
				</div>
				<div class="cards__card--dark-bottom">
					<p>Mehr als genug Backup-Server, supersicherer DDoS-Schutz und individuelle Redundanzkonzepte machen CallOne-Lösungen extrem stabil und rund um die Uhr erreichbar.</p>
				</div>
			</div>
		</div>

		<p>
			<a href="#" class="btn btn--border-white btn--arrow-right btn--centered">Mehr erfahren</a>
		</p>
	</div>
	
	<div class="section__content section__content--wide mobile-hidden">
		<div class="cta-contact">
			<h2 class="centered">Lassen Sie uns miteinander reden!</h2>
			<p class="centered">Ob unsere Lösungen zu Ihren Anforderungen passen, finden wir schnell in einem ersten ehrlichen und umfänglichen Austausch heraus.</p>

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
<?php
// $faqs->structured_data_get_code ();
// $faqs->html_get_code('toggle-box--on-black');
?>