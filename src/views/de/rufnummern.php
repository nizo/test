<?php
$product = new product ('Rufnummern', '☎ 0800 Wunschnummer bestellen ☎ Internationale Rufnummern. Lokale, Ortsnetzrufnummern und Rufnummernblöcke im gesamten Bundesgebiet. Noch heute schalten!');
$product->image_set ('https://callone.de/assets/images/icons_svg/big_11.svg');
$product->reviews_load ();

$product->structured_data_get_code ();
?>

<div class="section section--white-grey section--mobile-divider">
    <div class="hero">
        <div class="hero__text">
            <h1>Virtuelle Rufnummern weltweit schalten</h1>
            <p class="bigtext">Erhalten Sie online Zugriff auf lokale, nationale, mobile und gebührenfreie Rufnummern in über 120 Ländern und allen Vorwahlbereichen Deutschlands. </p>
            <p class="mobile-centered">
                <a href="#" data-openmodal="contact-sales" class="btn btn--primary">Sales kontaktieren</a>
            </p>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/icons_svg/big_11.svg',
                'Weltweil und lokal virtuell Rufnummern für die Cloud Telefonanlage schalten',
                560, 294
            ); ?>
        </div>
    </div>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Was interessiert dich?
        </div>
        <div class="anchors__links">
            <a href="#national-international">National & International</a>
            <a href="#portieren-schalten">Portieren & schalten</a>
            <a href="#qualitaet">Kapazität & Qualität</a>
            <a href="#features">Rufnummern-Features</a>
        </div>
    </div>
</div>

<div class="section" id="konnektoren">
    <div class="section__content section__content--narrow centered mobile-left">
        <div class="subtitle">Eigene Servicerufnummer weltweit schalten</div>
        <h2>Lokale Rufnummern aus Ihrem Vorwahlbereich, 0800-Rufnummern, Rufnummern weltweit.</h2>
        <p>Erhalten Sie sofortigen Zugriff auf lokale, nationale, mobile und gebührenfreie Telefonnummern in über 120 Ländern und allen Vorwahlbereichen Deutschlands.</p>
    </div>

    <div class="section__content section__content--wide" id="national-international">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="content-box content-box--white content-box--shadow">
                    <div class="tag" style="--bg:#86ed18">ab <strong>4,90 €</strong> pro Monat</div>
                    <h3>Freecall 0800 (DE und weltweit)</h3>
                    <p>Bester Kundenservice mit einer Freecall 0800 Nummer und intelligenten Echtzeitstatistiken. Kontaktieren Sie uns, teilen Sie uns Ihre Wunschrufnummer mit und erhalten Sie Ihr individuelles Angebot.</p>

                    <form class="form form-1 js-form">
                        <input type="hidden" name="type" value="1">
                        <div class="multipleSelection">
                            <span class="title showDiv">Rufnummern auswählen</span>
                            <div class="selection checkboxen">
                                <div class="spinner">
                                    <div class="loader"></div>
                                </div>
                            </div>
                        </div>	
                        <input name="name" type="text" placeholder="Name*" class="showField" />
                        <input name="email" type="text" placeholder="E-Mail*" class="showField" />
                        <input name="company" type="text" placeholder="Firma*" class="showField" />
                        <input type="submit" class="submit" value="Jetzt reservieren!" />
                    </form>
                    <div class="formSuccess">
                        <h3>Vielen Dank für Ihre Anfrage!</h3>
                        <p>Wir nehmen uns Ihrer Anfrage schnellstmöglich an und melden uns bei Ihnen in Kürze. Wenn Sie nicht warten wollen, kontaktieren Sie uns doch einfach per Telefon unter <a href="tel:+493092033500">030 920 33 500</a>. Wir freuen uns auf Ihren Anruf.</p>
                        <p>Sie erhalten demnächst eine E-Mail zur Bestätigung Ihrer Anfrage bei uns. Dort finden Sie auch nochmal alle weiteren Kontaktinformationen.</p>
                        <p>Wir sind für Sie da.<br><strong>Ihr CallOne-Team</strong></p>
                    </div>
                    <div class="formFail">
                        <h3>Ihre Anfrage konnte nicht gesendet werden!</h3>
                        <p>Es ist leider ein Fehler beim übertragen der Rufnummern aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
                        <p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne." class="inline-link">030 920 33 500</a></p>
                        <p><strong>Ihr CallOne-Team</strong></p>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="content-box content-box--white content-box--shadow">
                    <div class="tag" style="--bg:#86ed18">ab <strong>0,00 €</strong> pro Monat</div>
                    <h3>Intelligente Ortsnetzrufnummern DE</h3>
                    <p>Regionale Präsenz gepaart mit Profifeatures für Ihre Hotline. Schalten Sie jetzt Rufnummern aus Ihrem Vorwahlbereich. Kostenfrei in der Zuführung, bundesweit zum Ortstarif.</p>
                    <p class="centered">
                        <a href="#" class="btn btn--secondary trackedElement" data-openmodal="contact-sales" data-label="Button - Für Angebot kontaktieren" data-category="Link" data-action="opens sales modal">Für Angebot kontaktieren</a>
                    </p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="content-box content-box--white content-box--shadow">
                    <div class="tag" style="--bg:#86ed18">ab <strong>24,00 €</strong> pro Monat</div>
                    <h3>Mobilfunkrufnummern</h3>
                    <p>Setzen Sie Ihre Mobilfunknummer als Absenderkennung für ausgehende Telefonate. Bieten Sie Rückkanaloptionen, leiten eingehende Mobilfunkanrufe direkt zu Ihrem Sales- oder Serviceteam weiter und empfangen Sie eingehende SMS-Nachrichten über unsere Schnittstelle.</p>
                    <p class="centered">
                        <a href="#" class="btn btn--secondary trackedElement" data-openmodal="contact-sales" data-label="Button - Für Angebot kontaktieren" data-category="Link" data-action="opens sales modal">Für Angebot kontaktieren</a>
                    </p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="content-box content-box--white content-box--shadow">
                    <div class="tag" style="--bg:#86ed18">ab <strong>9,90 €</strong> pro Monat</div>
                    <h3>Weltweite Ortsnetzrufnummern</h3>
                    <p>CallOne bietet Ihnen Rufnummern in 60 Ländern und über 9.000 Vorwahlbereichen. Durch unsere leistungsstarke Plattform und VoIP-Infrastruktur bieten wir Ihnen optimale Gesprächsqualität und Performance auch bei hohem Anrufvolumen.</p>
                    <p class="centered">
                        <a href="#" class="btn btn--secondary trackedElement" data-openmodal="contact-sales" data-label="Button - Für Angebot kontaktieren" data-category="Link" data-action="opens sales modal">Für Angebot kontaktieren</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section" id="portieren-schalten">
    <div class="section__content section__content--wide centered">
        <h2 class="centered mobile-left">Bringen Sie Ihre eigene Rufnummer mit</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/big_09.svg',
                    'Rufnummern portieren',
                    70, 61, [
                        'class' => 'icon'
                    ]
                ); ?>
                <h3>Nummer portieren</h3>
                <p>Wir <strong>portieren</strong> Ihre bereits vorhanden Rufnummern <strong>schnell</strong> und <strong>unkompliziert</strong> in unser Netz.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_01.svg',
                    'SIP Weiterleitung',
                    70, 71, [
                        'class' => 'icon'
                    ]
                ); ?>
                <h3>SIP Weiterleitung</h3>
                <p>Leiten Sie Ihre <strong>bestehenden Rufnummern</strong> per SIP-Zuführung an uns weiter.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_25.svg',
                    'PSTN Weiterleitung',
                    70, 51, [
                        'class' => 'icon'
                    ]
                ); ?>
                <h3>PSTN Weiterleitung</h3>
                <p>Richten Sie <strong>ganz einfach</strong> selbst eine <strong>Weiterleitung</strong> ein und telefonieren Sie <strong>sofort</strong> los.</p>
            </div>
        </div>    
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow centered">
        <blockquote class="quote">
            Wir setzen CallOne Rufnummern aus über 15 verschiedenen Ländern ein und kombinieren diese mit der CallOne Callcenter-Software für intelligentes Routing und optimale Sprachqualität.
        </blockquote>
        <p>
            <strong>Manirooban Sivasubramaniam</strong><br />
            Head of Customer Care (simplesurance GmbH)
        </p>
    </div>
</div>  

<div class="section" id="qualitaet">
    <div class="section__content section__content--wide centered">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_01.svg',
                    'Ihre Vorteile',
                    97, 98
                ); ?>
                <h3>Qualitätsrouten</h3>
                <p>Wenn es um Sprachqualität und Stabilität geht, ist das Netzwerk und die dahinterstehenden Partner entscheidend. Wir testen jede Route und haben über 15 Jahre Erfahrung.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_01.svg',
                    'Ihre Vorteile',
                    97, 98
                ); ?>
                <h3>Routing-Verwaltung</h3>
                <p>Manchmal können Anrufpeaks auftreten. Nutzen Sie unseren Routingbaukasten mit über 50 Routingmodulen und seien Sie auch in schwierigen Zeiten erreichbar.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <?= pictureTag(
                    '/assets/images/icons_svg/small_01.svg',
                    'Ihre Vorteile',
                    97, 98
                ); ?>
                <h3>Überlastungs-Routen</h3>
                <p>Reduzieren Sie Wartezeiten und verbessern Sie die Anrufqualität bei hohem Anrufvolumen, indem Sie unsere leistungsstarke Plattform mit nahezu unbegrenzten Kapazitäten einschalten.</p>
            </div>
        </div>    
    </div>
</div>

<div class="section section--black" id="features">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Voice-Features für Ihre Telefonie-Infrastruktur</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-clock sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Echtzeit-Anrufe</h3>
                            <p>Alle Anrufe auf Ihren Servicerufnummern im Live-Wallboard.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-call-out sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Outbound</h3>
                            <p>Flexible Outbound-Funktionen mit intelligentem Dialer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-phone4 sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>SIP Trunk</h3>
                            <p>Binden Sie Ihre bestehende Telefonanlage und zugehörige Rufnummern per SIP-Trunk an.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_17_2.svg',
                            'Routing',
                            64, 52, [
                                'style' => 'filter:saturate(0) grayscale(100%) brightness(1000%);width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Routing</h3>
                            <p>Ergänzen Sie Ihre Rufnummern mit smarten Routingmodulen zur Anrufverteilung.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_25.svg',
                            'Absedererkennung',
                            64, 47, [
                                'style' => 'filter:saturate(0) grayscale(100%) brightness(1000%);width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Absenderkennung</h3>
                            <p>Setzen Sie flexibel Rufnummern aus Ihrem Portfolio zur Übermittlung an Ihre Kunden.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_02_white.svg',
                            'CDR-Daten',
                            64, 63, [
                                'style' => 'filter:saturate(0) grayscale(100%) brightness(1000%);width:64px!important'
                            ]
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>CDR-Daten</h3>
                            <p>Erhalten Sie die Daten zu allen Anrufen über unsere offenen APIs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="centered">
            <a href="#" class="btn btn--primary trackedElement" data-openmodal="contact-sales" data-label="Button - Sales kontaktieren" data-category="Link" data-action="opens sales modal">Sales kontaktieren</a>
        </p>
    </div>
</div>

<div class="section" id="apis">
    <div class="section__content section__content--wide centered">
        <h2 class="centered mobile-left">Das CallOne Versprechen</h2>

        <div class="co-grid">   
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--3-md">
				<span class="sl sl-location sl-size-xl"></span>
				<h3>Qualitätsrouten</h3>
				<p>Anrufe auf CallOne-Rufnummern laufen ausschließlich auf direktem Wege über Premium-Routen.</p>
            </div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--3-md">
				<span class="sl sl-call-out sl-size-xl"></span>
				<h3>Notfallmanagement</h3>
				<p>Wir stellen Ihre Erreichbarkeit im Notfall (z.B. Internetausfall) sicher.</p>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--3-md">
				<span class="sl sl-pie-chart sl-size-xl"></span>
				<h3>Erfahrung</h3>
				<p>Greifen Sie auf unsere Expertise zurück ohne selbst tief in das Thema Rufnummern einsteigen zu müssen.</p>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--3-md">
				<span class="sl sl-letter sl-size-xl"></span>
				<h3>SLA</h3>
				<p>Vereinbaren Sie mit uns individuell Ihr gewünschtes SLA.</p>
			</div>
        </div>

        <p>
            <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Legen Sie los!</a>
        </p>

        <div class="logos" style="--height:30px;margin-top:var(--gutter-l)">
            <?= pictureTag(
                '/assets/images/client-logos/vimcar.svg',
                'Unser Kunde Vimcar',
                151, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-flaconi.svg',
                'Unser Kunde Flaconi',
                101, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-check24-black.svg',
                'Unser Kunde Check24',
                125, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/bett.svg',
                'Unser Kunde Bett1',
                62, 30
            ); ?>
            <?= pictureTag(
                '/assets/images/client-logos/logo-gastrohero-2.png',
                'Unser Kunde GastroHero',
                60, 30
            ); ?>
        </div>
    </div>
</div>