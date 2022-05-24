<?php
$faqs = new faqs ();
$faqs->faq_add (
	'Lorem Ipsum Dolor Sit Amet?',
	'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, fugit! Porro reprehenderit sequi voluptas alias eos architecto, natus temporibus libero amet minima. Reprehenderit similique ut quo nobis vitae praesentium vel.</p>'
);
?>

<div class="section section--light-green">
    <header class="hero">
        <div class="hero__text">
            <h1>CX neu gedacht. Mit der maßgeschneiderten Lösung für Ihr Contact Center.</h1>

            <p class="bigtext">Genau die Contact Center Software, die Sie für die Wünsche Ihrer Kunden brauchen. Nutzen Sie genau die Module der Cloud CCaaS-Lösung, die Sie brauchen.</p>

            <p class="mobile-centered">
                <a href="#" data-openmodal="contact-sales" class="btn btn--primary centered">Zum kostenfreien<br />Beratungsgespräch</a>
            </p>
        </div>
        <div class="hero__image">
            TODO: Hero Image
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#voice-kanal">Voice-Kanal</a>
            <a href="#schrift-kanal">Schrift-Kanal</a>
            <a href="#integrationen">Integrationen</a>
            <a href="#ki">Künstliche Intelligenz</a>
        </div>
    </div>
</div>

<div class="section section--mobile-divider">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Alles kann, nichts muss: Kundenservice Software <br class="mobile-hidden" />wie Sie es für Ihr Contact Center brauchen.</h2>
        <p class="centered mobile-left bigtext">Schaffen Sie überdurchschnittliche Kundenerlebnisse! Mit den zahlreichen Funktionen, Integrationen und Anbindungsmöglichkeiten unserer Businesstelefonie-Lösung aus der Cloud. Callcenter Software, Cloud Telefonanlage, Omnichannel Contact Center Software oder Künstliche Intelligenz - oder darf es gleich alles sein? Sie entscheiden.</p>

        <div class="small-tabs small-tabs--automated">
            <div class="small-tabs__tabs">
                <div class="small-tabs__tab" data-tab="1">Fast-Growing</div>
                <div class="small-tabs__tab" data-tab="2">Mittelstand</div>
                <div class="small-tabs__tab" data-tab="3">Enterprise</div>
            </div>
            <div class="small-tabs__content centered" data-tab="1">
                <?= pictureTag(
                    '/assets/images/client-logos/FastGrowing-Kombi.svg', 
                    'CallCenter Software für fastgrowing Unternehmen', 
                    812, 28
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
                    '/assets/images/client-logos/Enterprise-Kombi.svg', 
                    'CallCenter Software für Enterprise Unternehmen', 
                    675, 28
                ); ?>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green">
    <div class="section__content section__content--wide">
        <div class="tablist">
            <div class="tablist__links tablist__links--full-width">
                <div class="tablist__link" data-tab="1" data-sticky-text="Voice" style="--bg:#fff;">
                    <?= pictureTag(
                        '/assets/images/icons_svg/solution-package.svg',
                        'CallOne Telefonlösung aus Callcenter Software und Cloud Telefonanlage',
                        69, 70, [
                            'class' => 'mobile-hidden'
                        ]
                    ); ?>
                    <strong>Voice</strong>
                </div>

                <div class="tablist__link" data-tab="2" data-sticky-text="Omnichannel" style="--bg:#fff;">
                    <?= pictureTag(
                        '/assets/images/icons_svg/solution-package.svg',
                        'CallOne Telefonlösung aus Callcenter Software und Cloud Telefonanlage',
                        69, 70, [
                            'class' => 'mobile-hidden'
                        ]
                    ); ?>
                    <strong>Omnichannel</strong>
                </div>

                <div class="tablist__link" data-tab="3" data-sticky-text="Integrationen" style="--bg:#fff;">
                    <?= pictureTag(
                        '/assets/images/icons_svg/solution-package.svg',
                        'CallOne Telefonlösung aus Callcenter Software und Cloud Telefonanlage',
                        69, 70, [
                            'class' => 'mobile-hidden'
                        ]
                    ); ?>
                    <strong>Integrationen</strong>
                </div>

                <div class="tablist__link" data-tab="4" data-sticky-text="Künstliche Intelligenz" style="--bg:#fff;">
                    <?= pictureTag(
                        '/assets/images/icons_svg/solution-package.svg',
                        'CallOne Telefonlösung aus Callcenter Software und Cloud Telefonanlage',
                        69, 70, [
                            'class' => 'mobile-hidden'
                        ]
                    ); ?>
                    <strong>Künstliche<br />Intelligenz</strong>
                </div>
            </div>

            <div class="tablist__content" data-tab="1">
                <div class="paper">
                    <div class="paper__row">
                        <div class="paper__item">
                            <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    <h2>Alles, was Sie für Ihre Telefonie brauchen.</h2>

                                    <ul class="list list--checkmarks list--checkmarks-green">
                                        <li>Callcenter Software aus der Cloud für maximale Effizienz.</li>
                                        <li>Cloud Telefonanlage als perfekte Basis.</li>
                                        <li>Integrationen & Anbindungen für alles vom Kundenservice bis zur Unternehmenstelefonie.</li>
                                    </ul>

                                    <p class="mobile-centered">
                                        <a href="/callcenter-software" class="btn btn--primary">Zur Callcenter Software</a>
                                    </p>
                                </div>
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    TODO: Image
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tablist__content" data-tab="2">
                <div class="paper">
                    <div class="paper__row">
                        <div class="paper__item">
                            <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    <h2>Deutsche KI für das vielleicht beste Omnichannel Contact Center.</h2>

                                    <ul class="list list--checkmarks list--checkmarks-green">
                                        <li>KI-gestützte schriftliche Kommunikation und Automatisierungen </li>
                                        <li>Schriftliche Kommunikationskanäle auf einer Plattform vereint</li>
                                        <li>Omnichannel Kundenservice für Kundenbindung</li>
                                    </ul>

                                    <p class="mobile-centered">
                                        <a href="/omnichannel-customer-support-software" class="btn btn--primary">Zur Omnichannel Oberfläche</a>
                                    </p>
                                </div>
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    TODO: Image
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tablist__content" data-tab="3">
                <div class="paper">
                    <div class="paper__row">
                        <div class="paper__item">
                            <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    <h2>Volle Flexibilität mit Schnittstellen, Apps und Integrationen.</h2>

                                    <ul class="list list--checkmarks list--checkmarks-green">
                                        <li>Offene Schnittstellen, fertige CallOne APIs</li>
                                        <li>CRM, Ticketing und Anbindung an Ihre Business-Tools</li>
                                        <li>CTI per Knopfdruck erstellen</li>
                                    </ul>

                                    <p class="mobile-centered">
                                        <a href="/voip-api" class="btn btn--primary">Zu den Anbindungen</a>
                                    </p>
                                </div>
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    TODO: Image
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tablist__content" data-tab="4">
                <div class="paper">
                    <div class="paper__row">
                        <div class="paper__item">
                            <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    <h2>KI-basierte Automationen für wirksamen Kundenservice.</h2>

                                    <ul class="list list--checkmarks list--checkmarks-green">
                                        <li>Callcenter-Bots und sprachgesteuerte IVR Menüs für enorme Zeitersparnis</li>
                                        <li>Informations-Bots für sprachbasierte FAQund Vorqualifizierung der Anrufer</li>
                                        <li>KI-basierte Sprachanalyse und Gesprächscoaching der Agenten im Kundenservice</li>
                                    </ul>

                                    <p class="mobile-centered">
                                        <a href="/callcenter-sprachanalyse" class="btn btn--primary">Zum Gesprächscoaching</a>
                                    </p>
                                </div>
                                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                                    TODO: Image
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fader fader--no-header" data-speed="6000">
            <div class="fader__item fader__item--vcentered">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/client-logos/logo-vimcar-color.svg',
                            'Unser Kunde Vimcar',
                            370, 185, ['class'=>'co-grid__image--full-width','style'=>'max-width:370px']
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md co-grid__col--vcentered">
                        <div class="quote" style="--fontSize:24px">
                            &ldquo;CallOne zu integrieren war die absolut richtige Entscheidung. Die CallCenter-Lösung hat es geschafft, unseren Kundendienst auf ein ganz neues Level zu heben und Prozesse stark zu vereinfach. Das CallOne-Team macht einen super Job in der Beratung und Betreuung.&rdquo;
                        </div>
                        <p>
                            <strong>Felix Schmidt</strong><br />
                            VP bei Vimcar
                        </p>
                    </div>
                </div>
            </div>

            <div class="fader__item fader__item--vcentered">
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
                    </div>
                </div>
            </div>

            <div class="fader__item fader__item--vcentered">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/client-logos/logo-seereisedienst-notext.svg',
                            'Unser Kunde Seereisedienst',
                            370, 370, ['class'=>'co-grid__image--full-width','style'=>'max-width:370px']
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md co-grid__col--vcentered">
                        <div class="quote" style="--fontSize:24px">
                            &ldquo;Nach langer Suche und zahlreichen Tests anderer deutscher und internationaler Anbieter, sind wir seit einem halben Jahr Kunde bei CallOne. CallOne bietet das bisher einzige System, das auch mit Anrufspitzen von mehreren tausend Anrufen stabil arbeitet. Wir können auch aus diesem Grund CallOne uneingeschränkt empfehlen.&rdquo;
                        </div>
                        <p>
                            <strong>SEEREISEDIENST</strong><br />
                            Elbflorenz Reisedienst GmbH und Co. KG
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Geballtes Wissen rundum unser Contact Center <br class="mobile-hidden" />as a Service. Für Ihren besten Kundenservice.</h2>
        <p class="centered mobile-left bigtext">Unsere Expertise geben wir gerne weiter: Verbessern Sie Ihren Kundenservice und maximieren Sie gleichzeitig Ihren ROI. Mit unseren Beiträgen und Ressourcen.</p>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                Blog Post 1
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                Blog Post 2
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                Blog Post 3
            </div>
        </div>

        <div class="paper paper--gradient">
            <div class="paper__row">
                <div class="paper__item">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--5-md co-grid__col--vcentered">
                            <?= pictureTag(
                                '/assets/images/illus/checklist-download.png',
                                'Checkliste: 7 Booster für die Customer Experience im Contact Center',
                                null, null, [
                                    'class' => 'checklist-download'
                                ]
                            ); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--7-md co-grid__col--vcentered">
                            <h3>Ist die CX in Ihrem Contact Center schon die beste?</h3>
                            <p class="bigtext">Erhöhen Sie Kundenzufriedenheit und -bindung mit unseren 7 Boostern für die CX in Ihrem Contact Center. Sparen Sie bares Geld und erhöhen Sie Ihre Abschlüsse.</p>
                            <p class="mobile-centered">
                                <!-- TODO: Add link -->
                                <a href="#" class="btn btn--primary" target="_blank" rel="noreferrer">Jetzt herunterladen</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
	<div class="section__content section__content--wide">
		<h2 class="centered mobile-left">Kundenorientierte Unternehmen <br class="mobile-hidden" />vertrauen auf CallOne.</h2>
        <p class="centered mobile-left bigtext">Mit der CallOne Businesstelefonie-Lösung aus der Cloud machen Sie Ihren Kundenservice zum Kundenmagneten. Nebenbei sparen Sie bares Geld, weil wir die richtigen Stellschrauben für Ihr größtes Einsparpotenzial finden.</p>

		<div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
						<span class="counting-number" data-suffix="%" data-start="0" data-end="25">25%</span>
					</div>
					weniger Kosten pro Kontakt<br />
					durch gesteigerte FCR
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
                        <span class="counting-number" data-start="0" data-end="5">5</span>-<span class="counting-number" data-suffix="s" data-start="0" data-end="15">15s</span>
					</div>
					kürzere Gesprächsdauern<br />
					(AHT)
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
				<div class="number-card">
					<div class="number-card__number" style="--color:#4caf50">
						<span class="counting-number" data-suffix="%" data-start="0" data-end="65">65%</span>
					</div>
					Verkürzung der<br />
					Wartezeit
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

	<div class="section__content">
		<?php
		$faqs->structured_data_get_code ();
		$faqs->html_get_code('toggle-box--on-black');
		?>
	</div>
</div>