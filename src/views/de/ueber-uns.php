<div class="section section--mobile-divider">
    <header class="hero">
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/about-us-header-illustration.svg',
                'Wir sind CallOne',
                465, 465, [], false
            ); ?>
        </div>
        <div class="hero__text">
            <h1>Hallo, wir sind CallOne</h1>
            
            <h5>Wir sind die zentrale Telekommunikationslösung von Unternehmen, die Ihre Kundenbeziehungen wertschätzen und als Grundlage für ihr Wachstum und ihren Erfolg sehen.</h5>
            <p>Mit unseren leistungsstarken und flexiblen Lösungen passen wir uns an die Anforderungen jedes Unternehmens an. Auch an Ihres!​</p>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Was interessiert dich?
        </div>
        <div class="anchors__links">
            <a href="#fakten">Zahlen, Daten, Fakten</a>
            <a href="#kultur">Unternehmenskultur</a>
            <a href="#umwelt">Umwelt</a>
            <a href="#kunden">Kunden</a>
            <a href="#karriere">Karriere</a>
        </div>
    </div>
</div>

<div class="section section--no-padding-top section--white-grey">
    <div class="section__content section__content--wide" id="fakten">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                <h2>Wir realisieren erfolgreiche Telekommunikations&shy;lösungen.</h2>
                <p class="bigtext">Egal ob Start-Up oder Traditionsmarke. Wir bieten passgenaue Kommunikationslösungen, die Unternehmen messbare Erfolge liefern.</p>

                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
                        <div class="number-card__number" style="--color: #86EC16;">
                            <span class="counting-number" data-start="<?= date("Y"); ?>" data-end="2010">2010</span>
                        </div>
                        unser<br />
                        Gründungsjahr
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
                        <div class="number-card__number" style="--color: #86EC16;">
                            <span class="counting-number" data-start="0" data-end="99">99</span>,<span class="counting-number" data-suffix="%" data-start="0" data-end="999">999%</span>
                        </div>
                        erreichte<br />Erreichbarkeit
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
                        <div class="number-card__number" style="--color: #86EC16;">
                            <span class="counting-number" data-start="0" data-end="100">0</span>
                        </div>
                        Millionen jährliche<br />Kundeninteraktionen
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm number-card">
                        <div class="number-card__number" style="--color: #86EC16;">
                            <span class="counting-number" data-start="0" data-end="5">0</span>/5
                        </div>
                        &starf;&starf;&starf;&starf;&starf;<br />
                        Sterne bei Google
                    </div>
                </div>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vend">
                <div class="collage">
                    <div class="collage__big">
                        <?= pictureTag(
                            '/assets/images/photos/collage-background-1.png',
                            'CallOne Team für Telekommunikationslösungen',
                            456, 325
                        ); ?>
                    </div>
                    <div class="collage__small">
                        <?= pictureTag(
                            '/assets/images/photos/collage-foreground-1.png',
                            'Björn Bendig Geschäftsführer CallOne',
                            228, 219
                        ); ?>
                    </div>
                    <div class="collage__text bigtext">
                        <strong>Björn Bendig</strong><br />
                        Geschäftsführer
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section__content section__content--wide" id="kultur">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--order-2-xs co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                <?= pictureTag(
                    '/assets/images/photos/culture-photo.png',
                    'Telekommunikationsanbiete für mehr Effizienz und hohen ROI',
                    570, 368, [
                        'class' => 'co-grid__image--full-width'
                    ]
                ); ?>
            </div>
            <div class="co-grid__col co-grid__col--order-1-xs co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                <h2>Was wir anders machen</h2>
                <p class="bigtext">Telekommunikationsanbieter gibt es viele am Markt. Wir bei CallOne glauben, dass cloudbasierte Telekommunikation und persönliche Expertenbetreuung der Grund für den Erfolg unserer Kunden sind. Wir liefern eine intuitiv bedienbare Plattform und passen sie optimal auf individuelle Bedürfnisse an. Damit schaffen wir einen nachweislichen ROI und tragen maßgeblich zum Erfolg unserer Kunden bei.</p>
                <p>
                    <a href="/customer-success" class="btn btn--secondary">Über unsere persönliche Betreuung</a>
                </p>
            </div>
        </div>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="mobile-hidden">
                    <?= pictureTag(
                        '/assets/images/icons_svg/results-icon.svg',
                        'Messbare Ergebnisse Kundenservice und Sales Software',
                        70, 70
                    ); ?>
                </p>
                <h3>Messbare<br />Ergebnisse</h3>
                <p class="bigtext">Kunden kommen zu CallOne wenn Sie richtig sparen wollen. Wir unterstützen mit einer leistungsstarken Plattform und zielführender Beratung mit dem Ziel Ihren ROI zu maximieren.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="mobile-hidden">
                    <?= pictureTag(
                        '/assets/images/icons_svg/partnership-icon.svg',
                        'Persönliche Ansprechpartner für Unternehmenstelefonie',
                        70, 70
                    ); ?>
                </p>
                <h3>Persönliche<br />Projekt&shy;managerinnen</h3>
                <p class="bigtext">Jeder Kunde erhält seine persönliche Ansprechperson, geschult und darauf fokussiert Sie von Anbeginn und dauerhaft bei Ihren Themen rund um unsere Telefonlösung zu unterstützen.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="mobile-hidden">
                    <?= pictureTag(
                        '/assets/images/icons_svg/reliability-icon.svg',
                        'Zuverlässige Technologie Kundenservice Software und Cloud Telefonanlage',
                        70, 70
                    ); ?>
                </p>
                <h3>Zuverlässige<br />Technologie</h3>
                <p class="bigtext">Bei uns gibt es kein „wenn und aber“, wenn es um Zuverlässigkeit und Stabilität geht. Unsere Systeme sind zertifiziert und auf Hochlast ausgelegt, um operative Exzellenz zu gewährleisten.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green section--no-padding-bottom" id="umwelt">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Grün ist unsere Natur!</h2>
        <p class="bigtext centered mobile-left">Wir übernehmen Verantwortung gegenüber unseren Kunden und Mitarbeiter*innen. Dazu gehört, dass wir unser unternehmerisches Handeln konsequent nachhaltig ausrichten – für die Gesellschaft und die Natur, in der wir leben.</p>

        <div class="co-grid centered mobile-left">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="mobile-centered">
                    <?= pictureTag(
                        '/assets/images/illus/planting-trees-illustration.svg',
                        'CallOne Baumpflanzaktion für Neukunden',
                        370, 230
                    ); ?>
                </p>
                <h3>CallOne Baumpflanzaktion</h3>
                <p class="bigtext">1.000 Bäume bis Ende 2022 sind unser Ziel. Für jeden neu gewonnen Kunden verpflichten wir uns zusätzliche Bäume zu pflanzen und unserer unternehmerischen Verantwortung gerecht zu werden.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="mobile-centered">
                    <?= pictureTag(
                        '/assets/images/illus/green-energy-illustration.svg',
                        'Ökostrom und grünes Webhosting',
                        370, 230
                    ); ?>
                </p>
                <h3>100% Ökostrom</h3>
                <p class="bigtext">Wir haben uns für grünes Webhosting entschieden, denn allein in Deutschland verschlingen Rechenzentren zwei Prozent allen Stroms.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
                <p class="mobile-centered">
                    <?= pictureTag(
                        '/assets/images/illus/ebikes-illustration.svg',
                        'Elektromobilität',
                        370, 230
                    ); ?>
                </p>
                <h3>Elektrisch mobil</h3>
                <p class="bigtext">Mobil sein und das Klima schützen? Wir bei CallOne setzen gänzlich auf Elektromobilität. eBike statt Auto, Bahn statt Flugzeug, damit weniger schädigende Klimagase in die Atmosphäre gelangen.</p>
            </div>
        </div>
    </div>

    <?= pictureTag(
        '/assets/images/backgrounds_svg/plant-planet-illustration.svg',
        'Umweltschutz in Telekommunikationslösungen',
        770, 227, [
            'style' => 'display:block;margin:30px auto 0 auto;'
        ]
    ); ?>
</div>

<div class="section section--black" id="kunden">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--order-2-xs co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/photos/customer-experiences.png',
                        'Kundenstimmen Telekommunikationslösung von CallOne',
                        570, 510
                    ); ?>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--order-1-xs co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                <h2>Wir schaffen bessere Kundenerlebnisse. Gemeinsam.</h2>
                <p class="bigtext">Sie brauchen uns nicht beim Wort zu nehmen. Lesen, hören und sehen Sie, wie unsere Kunden ihre Kunden glücklich machen.</p>

                <p class="mobile-centered">
                    <a href="/case-study-check24" class="btn btn--primary">Zu Kundengeschichten</a>
                </p>
            </div>
        </div>
    </div>

    <div class="section__content section__content--narrow">
        <h3 class="centered mobile-left">Kundenorientierte Unternehmen vertrauen auf CallOne</h3>
        <p class="bigtext centered mobile-left">Kunden kommen zu CallOne, wenn sie richtig Geld sparen wollen! Wir sind fokussiert auf Ihren Return-on-Investment. Gemeinsam drehen wir an den großen Kosten- und Einsparpotenzialen.</p>

        <div class="tablist tablist--on-black">
            <div class="tablist__links tablist__links--full-width">
                <div class="tablist__link" data-tab="1"><strong>Fast-Growing</strong></div>
                <div class="tablist__link" data-tab="2"><strong>Mittelstand</strong></div>
                <div class="tablist__link" data-tab="3"><strong>Enterprise</strong></div>
            </div>
            <div class="tablist__content" data-tab="1">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                        <div class="carddeck carddeck--right carddeck--no-indicators centered" data-speed="2000" data-height="215">
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/amorelie-carddeck-black.png',
                                    'Amorelie Kunde CallOne',
                                    292, 155
                                ); ?>
                            </div>
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/bett1-carddeck-black.png',
                                    'Bett1 Kunde CallOne',
                                    292, 155
                                ); ?>
                            </div>
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/flaconi-carddeck-black.png',
                                    'Flaconi Kunde CallOne',
                                    292, 155
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                        <div class="fader fader--no-header" data-speed="2000">
                            <div class="fader__item">
                                <p class="bigtext">CallOne liefert Kundenservicelösung für noch mehr Spaß</p>
                            </div>
                            <div class="fader__item">
                                <p class="bigtext">Gut Schlafen mit Bett1 & CallOne</p>
                            </div>
                            <div class="fader__item">
                                <p class="bigtext">Dufte Unternehmenstelefonie mit CallOne</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tablist__content" data-tab="2">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                        <div class="carddeck carddeck--right carddeck--no-indicators centered" data-speed="2000" data-height="215">
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/snipes-carddeck-black.png',
                                    'Sniped Kunde CallOne',
                                    292, 155
                                ); ?>
                            </div>
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/bunzl-carddeck-black.png',
                                    'Bunzl Kunde CallOne',
                                    292, 155
                                ); ?>
                            </div>
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/der-carddeck-black.png',
                                    'der Kunde CallOne',
                                    292, 155
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                        <div class="fader fader--no-header" data-speed="2000">
                            <div class="fader__item">
                                <p class="bigtext">Sneaker für Europa, telefonische Beratung stets inklusive</p>
                            </div>
                            <div class="fader__item">
                                <p class="bigtext">Zuverlässige Healthcare-Versorgung mit zukunftsweisender Kundenberatung</p>
                            </div>
                            <div class="fader__item">
                                <p class="bigtext">Helpdesk-Lösung für knapp 500 betreute DER-Filialen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tablist__content" data-tab="3">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                        <div class="carddeck carddeck--right carddeck--no-indicators centered" data-speed="2000" data-height="215">
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/check24-carddeck-black.png',
                                    'der Kunde Check24',
                                    292, 155
                                ); ?>
                            </div>
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/helios-carddeck-black.png',
                                    'der Kunde Helios',
                                    292, 155
                                ); ?>
                            </div>
                            <div class="carddeck__card carddeck__card--vcentered">
                                <?= pictureTag(
                                    '/assets/images/client-logos/carddeck/sodastream-carddeck-black.png',
                                    'der Kunde Sodastream',
                                    292, 155
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--vcentered">
                        <div class="fader fader--no-header" data-speed="2000">
                            <div class="fader__item">
                                <p class="bigtext">Beste Telefonanlage? Check! Umfangreiche Callcenter Lösung für Check24 Hotlines</p>
                            </div>
                            <div class="fader__item">
                                <p class="bigtext">Servicecenter für die größte Klinikkette Europas? CallOne liefert Maximalversorgung</p>
                            </div>
                            <div class="fader__item">
                                <p class="bigtext">CO2-Zylinder zurück? SodaStream setzt auf CallOne wenn es um sprachgesteuerte Automatisierung von über 7.000 Händlern geht</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$jobs = jobs_load();
$jobsCount = count($jobs->jobs_get());
?>
<div class="section section--no-padding-bottom section--work-bg" id="karriere">
    <div class="section__content section__content--wide">
        <div class="co-grid co-grid--no-margin-bottom">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <h2>Lass uns <br />zusammenarbeiten!</h2>
                <p class="bigtext">Komm zu uns! Wir sind ein inhabergeführtes Unternehmen, das seit 2010 stetig wächst und bei dem Du dich von Tag eins einbringen kannst, um Dein volles Potential zu entfalten. Wirf einen Blick auf unsere aktuellen Stellenausschreibungen.</p>
                <p class="mobile-centered">
                    <a href="/karriere-bei-callone" class="btn btn--primary btn--notification btn--nowrap" data-notification="<?php if (!empty($jobs)) { echo $jobsCount; } ?>">Karriere bei CallOne</a>
                </p>
                <br />
                <br />
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vend">
                <?= pictureTag(
                    '/assets/images/photos/work-foreground.png',
                    'CallOne Businesstelefonie aus der Cloud und persönliche Ansprechpartner',
                    570, 451, [
                        'class' => 'co-grid__image--full-width'
                    ]
                ); ?>
            </div>
        </div>
    </div>
</div>
