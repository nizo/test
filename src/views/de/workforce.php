<?php
$faqs = new faqs ();
$faqs->faq_add (
	'Frage?',
	'<p>Antwort</p>'
);
?>

<div class="section">
    <div class="hero">
        <div class="hero__text">
            <h1>Mit Workforce&shy;management endlich Seelenfrieden für Ihr Contact Center:</h1>
            <p class="bigtext">Smarte Schichtpläne, zielsichere Vorhersagen von Anrufaufkommen und einfaches Auslesen der Reportings.</p>
            <p class="mobile-centered">
                <a href="#" class="btn btn--primary centered trackedContactModal" data-openmodal="contact-sales">Zum kostenfreien<br />Beratungsgespräch</a>
            </p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '',
                'Alt Text',
                null, null, [], false
            ); ?>
        </div>
    </div>

    <div class="anchors">
		<div class="anchors__title">
			<strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
		</div>
		<div class="anchors__links">
			<a href="#overview">Überblick</a>
			<a href="#funktionen">Funktionen</a>
			<a href="#acd">ACD</a>
			<a href="#more-modules">weitere Module</a>
		</div>
	</div>
</div>

<div class="section">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Perfekte Schichtplanung leicht gemacht! Mit dem WFM Zusatzmodul für Ihre Callcenter Software.</h2>
        <p class="centered mobile-left bigtext">Historische Daten direkt aus Ihrer Callcenter Software sorgen für zielgerichtete Schichtpläne. So steigern Sie die Effizienz und Effektivität in Ihrem Contact Center. Für zufriedene Agenten und zufriedene Kunden. Innerhalb von Minuten erstellen Sie den perfekten Plan.</p>
    </div>

    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '',
                        'Icon',
                        null, null
                    ); ?>
                </p>
                <h3>Akkurate Prognosen</h3>
                <p>Prognosen, die auf historischen Daten basieren, die direkt aus Ihrem Contact Center stammen. Für den idealen Plan.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '',
                        'Icon',
                        null, null
                    ); ?>
                </p>
                <h3>Optimale Zeitpläne</h3>
                <p>Schichtpläne, die Ihre Agenten zur besten Zeit am besten Platz sicherstellen. Für zufriedene Agenten und Kunden.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered">
                    <?= pictureTag(
                        '',
                        'Icon',
                        null, null
                    ); ?>
                </p>
                <h3>Echtzeit Adherence</h3>
                <p>Objektive Einblicke in die Performance Ihrer Agenten für perfekte Entscheidungsprozesse. In Echtzeit.</p>
            </div>
        </div>

        <div class="btn-set btn-set--centered">
            <a href="#" class="btn btn--primary centered trackedContactModal" data-openmodal="contact-sales">Zum kostenfreien<br />Beratungsgespräch</a>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Intraday Steuerung und weitere Funktionen für Ihr effizientes Workforcemanagement.</h2>
        <p class="centered mobile-left bigtext">Das WFM Modul der CallOne Callcenter Software deckt alle Prozesse Ihres Workforce Managements ab und sorgt so für Effizienz rundum Ihr Contactcenter sowie für Zufriedenheit bei Ihren Kunden.</p>
    </div>
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                IMG
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                Text
            </div>
        </div>
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