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
			<img src="/assets/images/illus/CCS-header-illu.png" alt="" />
		</div>
		<div class="hero__text">
			<h1>Die erste Contact Center Software mit der Sie Ihren Return-on-Investment (ROI) maximieren werden​</h1>
			<p>Eine intuitiv bedienbare cloudbasiertes Telefonsystem für ​mehr Effizienz</p>
			<p>
				<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Sales kontaktieren</a>
			</p>
		</div>
	</div>
</div>

<div class="section section--white-grey-white section--same-padding">
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
		<h1 class="centered">Über 200 Features - aber die Magie steckt im Detail​​</h1>
		<p class="centered">Wir bieten alles was ausgewachsene Unternehmen im Bereich moderner Business-Telefonie suchen. Voller Leistungsumfang, ohne Einschränkungen.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="tablist">
			<div class="tablist__links">
				<div class="tablist__link tablist__link--smaller tablist__link--active" data-tab="1">
					<strong>Smarte Automatisierung</strong><br>
					Erfahren Sie wie Automatisierung<br />Ihren Geldbeutel schont.​
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
					Sie haben Lust Ihre Prozesse<br />datenbasiert zu optimieren?​
				</div>
			</div>

			<div class="tablist__content tablist__content--active" data-tab="1">
				<h2 class="centered">Schnittstellenanbindung</h2>
				<p class="centered">Unser System ist schnittstellenoffen. Für Sie bedeutet dies, dass sie Anrufe schneller, kundenfreundlicher und deutlich effizienter bearbeiten können indem sie ihre CRM, ERP, Ticketing oder BI-Lösung bei uns anbinden.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="5">5%</span>
								</div>
								weniger Kosten pro Kontakt durch gesteigerte FCR*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-start="10" data-end="5">5</span>-<span class="counting-number" data-start="30" data-end="15" data-suffix="s">15s</span>
								</div>
								kürzere Gesprächsdauern (AHT)*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-start="0" data-end="50">50</span>-<span class="counting-number" data-start="20" data-end="70" data-suffix="%">70%</span>
								</div>
								Erkennung des Anruferanliegens*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="x" data-start="0" data-end="3">3x</span>
								</div>
								schnellerer Anrufaufbau*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-11">
							<label for="faq-11">Intelligente Anrufsteuerung mittels API​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-12">
							<label for="faq-12">Anruferinformationen wenn es klingelt​</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-13">
							<label for="faq-13">Wissen ohne Fragen zu müssen​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-14">
							<label for="faq-14">Wählen ohne Tippen​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur hic, sequi ea nisi magni inventore ipsa voluptas doloribus modi dignissimos.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<h2 class="centered">Automatisierung und KI</h2>
				<p class="centered">Nicht jeder Anruf muss zum Agenten, um gelöst zu werden. Nutzen Sie Echtzeit-Spracherkennung und unsere vielzähligen Schnittstellen, um effizienter zu telefonieren.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="15">15%</span>
								</div>
								weniger Gesprächszeit für Ihre Agent*innen*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-suffix="x" data-start="0" data-end="4">4x</span>
								</div>
								kürzere IVR-Menüs durch Spracherkennung​*
							</div>
							<div class="co-grid__col co-grid__col--12-xs number-card">
								<div class="number-card__number">
									<span class="counting-number" data-start="0" data-end="94">94%</span>
								</div>
								Kundenzufriedenheitsraten dank schnellerer Fallbearbeitung​*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-21">
							<label for="faq-21">Sprachdialoge ohne Agenten​​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-22">
							<label for="faq-22">Intelligentes Sprachrouting​​</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-23">
							<label for="faq-23">Schnittstellen für schnelle Fallbearbeitung​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
// $faqs->structured_data_get_code ();
// $faqs->html_get_code('toggle-box--on-black');
?>