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
		<h1 class="centered">Eine Call Center Software, angepasst an Ihre ganz eigenen Bedürfnisse</h1>
		<p class="centered">CallOne können Sie als Full-Service Telefoniepartner im gesamten Unternehmen einsetzen oder gezielt im Kundenservice mit Ihren bestehenden Businesslösungen.</p>
	</div>

	<div class="section__content section__content--wide">
		<div class="tablist">
			<div class="tablist__links">
				<div class="tablist__link tablist__link--active" data-tab="1">
					<strong>Fullservice</strong><br>
					CallOne liefert Ihnen das <br />Komplettpaket für Ihr Unternehmen
				</div>
				<div class="tablist__link" data-tab="2">
					<strong>Remote</strong><br>
					<span class="icon-home">Lieblingsort</span>
				</div>
			</div>

			<div class="tablist__content tablist__content--active" data-tab="1">
				<h2 class="centered">Dort arbeiten, wo es schön ist</h2>
				<p class="centered">Wir lieben Potsdam und unser Büro ist direkt in der Innenstadt. Kurze Wege, gute Erreichbarkeit, ein leckeres Mittagessen, mal kurz ans Wasser oder zwischendurch einen kleinen Einkauf erledigen? Alles vor der Haustür.</p>

				<div class="co-grid">
					<div class="co-grid__col co-grid__col--4-xs">Test</div>
					<div class="co-grid__col co-grid__col--4-xs">Test</div>
					<div class="co-grid__col co-grid__col--4-xs">
						<div class="carddeck">
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 1</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 2</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 3</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 4</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 5</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 6</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
							<div class="carddeck__card">
								<h2>Lorem, ipsum dolor. 7</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, porro.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tablist__content" data-tab="2">
				<h2 class="centered">Dort arbeiten, wo du dich am wohlsten fühlst</h2>
				<p class="centered">Wir schätzen den persönlichen Kontakt mit dir im Büro, sind aber auch Profis in virtueller Zusammenarbeit. Was zählt, ist gutes Teamwork und dass unsere Kund*innen zufrieden sind. Wo immer du am produktivsten bist, ist uns recht.</p>
			</div>
		</div>
	</div>
</div>

<?php
// $faqs->structured_data_get_code ();
// $faqs->html_get_code('toggle-box--on-black');
?>