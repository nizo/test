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
									<!-- <span class="counting-number" data-start="10" data-end="5">5</span>-<span class="counting-number" data-start="30" data-end="15" data-suffix="s">15s</span> -->
									5-15s
								</div>
								kürzere Gesprächsdauern (AHT)*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<!-- <span class="counting-number" data-start="0" data-end="50">50</span>-<span class="counting-number" data-start="20" data-end="70" data-suffix="%">70%</span> -->
									50%-70%
								</div>
								Erkennung des Anruferanliegens*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number">
									<!-- <span class="counting-number" data-suffix="x" data-start="0" data-end="3">3x</span> -->
									3x
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
								<div class="number-card__number" style="--color: #FF7B1B;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="15">15%</span>
								</div>
								weniger Gesprächszeit für Ihre Agent*innen*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<!-- <span class="counting-number" data-suffix="x" data-start="0" data-end="4">4x</span> -->
									4x
								</div>
								kürzere IVR-Menüs durch Spracherkennung​*
							</div>
							<div class="co-grid__col co-grid__col--12-xs number-card">
								<div class="number-card__number" style="--color: #FF7B1B;">
									<!-- <span class="counting-number" data-start="0" data-end="94">94%</span> -->
									94%
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

			<div class="tablist__content" data-tab="3">
				<h2 class="centered">Warteschleifenmanagement</h2>
				<p class="centered">Reduzieren Sie die Anruflast durch weniger Wahlwiederholer und Abbrecher. Wie? Mit dem vielleicht umfänglichsten Warteschleifenmanagement am Markt​.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="10">10%</span>
								</div>
								bessere Erreichbarkeit*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<!-- <span class="counting-number" data-suffix="%" data-start="0" data-end="65">65%</span> -->
									65%
								</div>
								Verkürzung der Wartezeit​*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<!-- <span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span> -->
									25%
								</div>
								geringere Abbruchquote​*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #DB00C5;">
									<!-- 1,<span class="counting-number" data-suffix="x" data-start="0" data-end="5">5x</span> -->
									1,5x
								</div>
								gesteigerte Agentenauslastung*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-31">
							<label for="faq-31">Intelligente Routingfunktionen​​​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-32">
							<label for="faq-32">Virtuelle Warteschleife & Co.​​</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-33">
							<label for="faq-33">Wahlwiederholerpriorisierung​​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-34">
							<label for="faq-34">Rückrufe für optimale Auslastung​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="4">
				<h2 class="centered">Statistik & Datenanalyse</h2>
				<p class="centered">Optimieren sie Ihre Prozesse datengestützt und reduzieren Kosten durch Analysemöglichkeiten, die Sie vorher nicht für möglich hielten​.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="co-grid">
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
								</div>
								mehr Effizienz in der Personalplanung*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<!-- <span class="counting-number" data-suffix="x" data-start="0" data-end="3">3x</span> -->
									3x
								</div>
								schnellere Reaktion dank Echtzeit-Benachrichtigung*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<!-- <span class="counting-number" data-suffix="min" data-start="0" data-end="60">60min</span> -->
									60min
								</div>
								Zeitersparnis täglich mittels Autoreporting​*
							</div>
							<div class="co-grid__col co-grid__col--6-xs number-card">
								<div class="number-card__number" style="--color: #0088EA;">
									<!-- <span class="counting-number" data-suffix="%" data-start="0" data-end="20">20%</span> -->
									20%
								</div>
								gesteigerte Teamleistung​*
							</div>
						</div>

						<p class="centered">*erreichte Referenzwerte unserer Kunden</p>
					</div>
					<div class="co-grid__col co-grid__col--6-xs">
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-41">
							<label for="faq-41">Arbeitszeiterfassung & Forecasting​​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorem ab nobis dicta eveniet enim tempora quod animi esse iusto.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-42">
							<label for="faq-42">Sofortige Benachrichtigung​​</label>
							<div class="toggle-box__content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia officia obcaecati dolorum animi similique eligendi laudantium maiores nihil quisquam.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-43">
							<label for="faq-43">Sparen Sie kostbare Zeit​</label>
							<div class="toggle-box__content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores, numquam expedita sunt dignissimos magni explicabo quo perferendis dolore tempore.</p>
							</div>
						</div>
						<div class="toggle-box toggle-box--checklist">
							<input type="checkbox" id="faq-44">
							<label for="faq-44">Zielerreichung mittels wichtiger Kennzahlen​</label>
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

<div class="section section--black">
	<div class="section__content section__content--narrow">
		<h1 class="centered">
			Lust Ihr Einsparpotenzial <br />
			direkt hier zu berechnen?
		</h1>

		<p class="centered">
			Wir stehen für messbare Effizienzsteigerungen <br />
			und heben Einsparpotentiale im großen Stil.​
		</p>

		<div class="content-box content-box--white">
			<h2>Geben Sie uns 2 Ihrer Kennzahlen</h2>
			<p>Wir errechnen Ihr Einsparpotential mit realistischen Annahmen basierend auf unserer langjährigen Erfahrung.</p>

			<form action="#" method="post" class="floating-form">
				<div class="floating-form__row">
					<div class="floating-form__icon">
						<img src="/assets/images/icons_svg/calls-per-month-big.svg" alt="" />
					</div>
					<div class="floating-form__field floating-form__field--short">
						<input type="text" name="calls" placeholder=" " />
						<label>1234</label>
					</div>
					<div class="floating-form__description">
						Anrufe gesamt pro Monat​
					</div>
				</div>

				<div class="floating-form__row">
					<div class="floating-form__icon">
						<img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
					</div>
					<div class="floating-form__field floating-form__field--short">
						<input type="text" name="agents" placeholder=" " />
						<label>10</label>
					</div>
					<div class="floating-form__description">
						Anzahl Ihrer Agent*innen​
					</div>
				</div>

				<button class="floating-form__submit btn btn--full-width" type="submit" style="margin-bottom:0;">Jetzt berechnen</button>
			</form>
		</div>
	</div>
	
	<div class="section__content section__content--wide">
		<div class="saving-calculation">
			<h3>
				Jährliche Ersparnis bis zu:<br />
				<span>xxx.xxx.xxx €</span>
			</h3>

			<h4>Aufschlüsselung des Einsparpotenzials</h4>
			
			<div class="saving-calculation__grid">
				<!-- <div class="saving-calculation__overlay">
					<h3>
						Eine Rechnung die nur mit Ihren <br />
						realistischen Unternehmenswerten aufgeht
					</h3>
					<p>Füllen Sie Ihre Unternehmenswerte oben ein und erhalten Sie eine ungefähre Kalkulation Ihres effektiven Einsparpotenzials mit CallOne basierend auf Ihrem Anrufvolumen und Lorem Ipsum.</p>
					<p><a href="#" class="btn btn--primary btn--centered">Jetzt Werte eintragen</a></p>
				</div> -->

				<div class="co-grid" style="--gutter:10px">
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col">
						<h5>Verkürzung der <span>Anrufdauer</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span>xxx.xxx €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/calls-per-month-small.svg" alt=""> <strong class="highlight">1234</strong><br />
										<em>Anrufe pro Jahr</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>30s</strong><br />
										<em>Angenommener<br />Einspareffekt je<br/>Anruf</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>= 18.510s</strong>
									</div>
									<div class="saving-calculation__entry">
										oder
									</div>
									<div class="saving-calculation__entry">
										<strong>= 51,42h</strong>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>51,42h</strong><br />
										<em>Einsparung<br />Stundenzahl</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>30 €</strong><br />
										<em>angenommener<br />Stundenlohn der<br />Agenten</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>1542,6 €</strong><br />
										<em>Monatliches<br />Kostensenkungs&shy;potential</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>12</strong><br />
										<em>Monate im<br />Jahr</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= 18.511,2 €</strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content">
							<p class="saving-calculation__blurred1">Durch intelligente Anrufvorqualifizierung schaffen wir es nachweislich, die durchschnittliche Dauer eines Anrufes um bis zu 30 Sekunden zu reduzieren, bzw. gänzlich automatisiert zu bearbeiten.<br /><br /></p>
							<p class="saving-calculation__blurred1"><strong>Unsere Tools dafür:</strong></p>
							<ul class="saving-calculation__blurred1">
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
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col">
						<h5>Steigerung der <span>Agentenauslastung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span>xxx.xxx €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/calls-per-month-small.svg" alt=""> <strong class="highlight">1234</strong><br />
										<em>Anrufe pro Jahr</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>20%</strong><br />
										<em>gesteigerte<br />Erreichbarkeit</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>= 246,8</strong>
									</div>
									<div class="saving-calculation__entry">
										<em>mehr angenommene<br />Anrufe (3,5 min/Call)</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>1166h</strong><br />
										<em>Einsparung<br />Stundenzahl</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>30 €</strong><br />
										<em>angenommener<br />Stundenlohn der<br />Agenten</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>1542,6 €</strong><br />
										<em>Monatliches<br />Kostensenkungs&shy;potential</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>12</strong><br />
										<em>Monate im<br />Jahr</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= 18.511,2 €</strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content">
							<p class="saving-calculation__blurred1">Mehr Gespräche in gleicher Zeit führen und durch Verschiebung von sogenannten Anrufspitzen. CallOne liefert hier verschiedenste Tools um eine optimale Verteilung eingehender Anrufe in Ihrem Callcenter zu gewährleisten. </p>
							<p class="saving-calculation__blurred1"><strong>Unsere Tools dafür:</strong></p>
							<ul class="saving-calculation__blurred1">
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
									Realtime-Website Callback​
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
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col">
						<h5>Optimierte <span>Personalplanung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span>xxx.xxx €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/Customer-Support-White.svg" alt="" width="40"> <strong class="highlight">1234</strong><br />
										<em>Anzahl Agent*innen</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>5%</strong><br />
										<em>Effizienzgewinn<br />Personal</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>1234</strong><br />
										<em>Agent*innen</em>
									</div>
									<div class="saving-calculation__entry">
										<strong>= 700000€</strong><br />
										<em>Personalkosten/jährlich</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>5%</strong><br />
										<em>Effizienzgewinn<br />Personal</em>
									</div>
									<div class="saving-calculation__entry">
										<img src="/assets/images/icons_svg/x-times.svg" alt="" />
									</div>
									<div class="saving-calculation__entry">
										<strong>7000000€</strong><br />
										<em>Personalkosten<br />/jährlich</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= 35.000 €</strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content">
							<p class="saving-calculation__blurred1">Steigern Sie die Leistung mit Echtzeit-Einblicken und motivieren Sie Ihre Mitarbeiter sich neue Grenzen zu setzen. CallOne liefert alle Daten für eine optimierte Personalplanung- und Auswertung.​<br /><br /></p>
							<p class="saving-calculation__blurred1"><strong>Unsere Tools dafür:</strong></p>
							<ul class="saving-calculation__blurred1">
								<li>
									BI-gesteuerte Arbeitszeitplanung- und Erfassung​
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Realtime-Dashboards zur KPI-Optimierung​
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Prozessoptimierung durch Call Tagging​​
									<span class="tooltip tooltip--light">
										<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt minus fuga a eos, enim aspernatur adipisci voluptas vel maiores?</span>
									</span>
								</li>
								<li>
									Agenten-Performance Analyse​
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

<?php
// $faqs->structured_data_get_code ();
// $faqs->html_get_code('toggle-box--on-black');
?>