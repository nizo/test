<?php
$product = new product ('Softphone', 'Die TEAMS Alternative | VoIP Telefon integriert in Ihren Lieblingsbrowser, nutzbar mit Ihrem Anbieter');
$product->image_set ('https://callone.de/assets/images/screens/Intro-softphone-desktop.png');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
  'Was ist ein Softphone?',
  '<p>Ein Softphone ermöglicht es Ihnen statt über ein stationäres Endgerät, also z.B. ein Tischtelefon, bequem über den PC oder das Smartphone zu telefonieren. Letztendlich handelt es sich dabei normalerweise um eine Software, die Sie installieren. Die Benutzeroberfläche des Softphones ermöglicht Ihnen dann die gleichen Funktionen wie an einem regulären Telefon zu nutzen, z.B. Nummern eintippen, Wählen, Auflegen. Unsere Browser-Erweiterung integriert für Sie ein Softphone direkt in Ihren Browser. Nach Download der Erweiterung können Sie also ohne Installation eines zusätzlichen Programmes direkt im Browser telefonieren. Neben den regulären Telefoniefunktionen ermöglicht die Browsererweiterung noch weitere Möglichkeiten, wie z.B. Click-to-Dial. Sie können also Rufnummern auf jeder Webseite oder in Ihren webbasierten CRM-Tools anklicken und damit direkt einen Anruf auslösen.</p>'
);
$faqs->faq_add (
  'Wie kann das Softphone verwandt werden?​',
  '<p>In der Regel handelt es sich bei Softphones um Programme, die Sie herunterladen und auf Ihrem Computer oder mobilem Gerät installieren. Die CallOne Browser-Erweiterung können Sie sich einfach im App Store des Browsers Ihrer Wahl herunterladen ohne zusätzliche Programminstallationen. Somit können Sie jederzeit im Browser telefonieren. Sie aktivieren die Erweiterung in dem Sie die SIP-Daten Ihres Providers oder von CallOne in der Konfiguration eintragen.</p>'
);
$faqs->faq_add (
  'Für welches Betriebssystem ist das Softphone geeignet?​',
  '<p>Die CallOne Browsererweiterung ist prinzipiell für alle Betriebssysteme geeignet. Sie finden die Erweiterung in den App Stores von Google Chrome, Mozilla Firefox und Microsoft Edge.</p>'
);
$faqs->faq_add (
  'Kann ich meinen eigenen Provider mit dem Softphone verwenden?',
  '<p>Ja, Sie können die Erweiterung als Softphone mit Ihrem eigenen Provider oder auch mit CallOne Nebenstellen verwenden.</p>'
);
?>

<div class="section section--light-grey section--no-padding-bottom section--mobile-divider">
	<div class="hero">
        <div class="hero__text">
            <div class="browsers">
                <div class="browsers__browser browsers__browser--chrome" data-browser="chrome"></div>
                <div class="browsers__browser browsers__browser--firefox" data-browser="firefox"></div>
                <div class="browsers__browser browsers__browser--edge" data-browser="edge"></div>
            </div>

            <h1>Softphone integriert in Ihren Lieblingsbrowser</h1>
            <h2>Ein- und ausgehende Telefonate direkt im Browser auf Knopfdruck führen. Unser VoIP Telefon optional kombinierbar mit Ihrer Telefonanlage.</h2>

			<p class="mobile-centered">
                <a href="#installation" class="btn btn--primary">Kostenfrei installieren</a>
			</p>
		</div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/screens/Intro-softphone-desktop.png',
                'Mit CallOne Softphone als Browser Extension direkt aus dem Browser telefonieren',
                560, 428, [
                    'style' => 'width:100%'
                ], false
            ); ?>
        </div>
	</div>
</div>

<div class="section section--grey-white">
	<div class="anchors">
		<div class="anchors__title">
			<strong>Schnelleinstieg:</strong> Was interessiert dich?
		</div>
		<div class="anchors__links">
            <a href="#funktionen">Funktionen</a>
            <a href="#vergleich">Vergleich zu MS Teams</a>
            <a href="#preise">Preise</a>
            <a href="#installation">Installation &amp; FAQ</a>
		</div>
	</div>
</div>

<div class="section section--no-padding-top" id="funktionen">
    <div class="section__content section__content--wide">
        <h2 class="headline__icon">
            <?= pictureTag(
                '/assets/images/icons_svg/softphone-app-icon.svg',
                'Callcenter Software mit Softphone App',
                136, 136
            ); ?>
            <span>
                <span class="icon-callone">App</span>
                <span class="headline__text">Softphone</span>
            </span>
        </h2>

        <h2 class="centered mobile-left">Entfesseln Sie Ihre Telefonie!</h2>
        <p class="bigtext centered mobile-left">Telefonieren Sie über den PC und nutzen Sie kostenlos unser Softphone mit Funktionen, die Sie lieben werden</p>

        <div class="tablist">
            <div class="tablist__links tablist__links--full-width">
                <div class="tablist__link" data-tab="1">
                    <strong>
                        Softphone<br />
                        <span class="subtext">VoIP-Telefon im Browser</span>
                    </strong>
                </div>
                <div class="tablist__link" data-tab="2">
                    <strong>
                        Click-to-Dial<br />
                        <span class="subtext">Wählen mit einem Klick</span>
                    </strong>
                </div>
                <div class="tablist__link" data-tab="3">
                    <strong>
                        Bring your own Provider<br />
                        <span class="subtext">Funktioniert mit Ihrer VoIP-Telefonanlage</span>
                    </strong>
                </div>
            </div>

            <div class="tablist__content" data-tab="1">
                <div class="video" style="max-width:75%;padding-bottom:calc(75%/16*9);margin-left:auto;margin-right:auto;">
                    <video autoplay muted loop>
                        <source src="/assets/videos/softphone-webm/Softphone.webm" type="video/webm" />
                        <source src="/assets/videos/softphone-mp4/Softphone.mp4" type="video/mp4" />
                    </video>
                </div>
                <p class="centered">Das Herzstück unserer Softphone App ist unser integriertes VoIP-Telefon mit dem Sie ein- und ausgehende Telefonate führen können. Zusätzlich steht ein Dialpad und Browser-Notification für maximalen Komfort zur Verfügung.​</p>
                <p class="centered">
                    <a class="btn btn--primary" href="#installation">Kostenfrei installieren</a>
                </p>
            </div>
            <div class="tablist__content" data-tab="2">
                <div class="video" style="max-width:75%;padding-bottom:calc(75%/16*9);margin-left:auto;margin-right:auto;">
                    <video autoplay muted loop>
                        <source src="/assets/videos/softphone-webm/Click-to-Dial.webm" type="video/webm" />
                        <source src="/assets/videos/softphone-mp4/Click-to-Dial.mp4" type="video/mp4" />
                    </video>
                </div>
                <p class="centered">Rufnummern werden im Browser erkannt und anwählbar mit nur einem Klick. Das Softphone verfügt über eine 1-Click-Funktion mit intelligenter Rufnummernerkennung.</p>
                <p class="centered">
                    <a class="btn btn--primary" href="#installation">Kostenfrei installieren</a>
                </p>
            </div>
            <div class="tablist__content" data-tab="3">
                <div class="video" style="max-width:75%;padding-bottom:calc(75%/16*9);margin-left:auto;margin-right:auto;">
                    <video autoplay muted loop>
                        <source src="/assets/videos/softphone-webm/Own-Provider.webm" type="video/webm" />
                        <source src="/assets/videos/softphone-mp4/Own-Provider.mp4" type="video/mp4" />
                    </video>
                </div>
                <p class="centered">Flexibilität heißt bei CallOne: Sie können unsere Telefonanlage nutzen, müssen aber nicht! Wir bieten für zahlreiche VoIP-Anbieter eine nahtlose Integration in unser Softphone.</p>
                <p class="centered">
                    <a class="btn btn--primary" href="#installation">Kostenfrei installieren</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-grey" id="vergleich">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Direkter Produktvergleich</h2>
        <p class="bigtext centered mobile-left">Welche Vorteile bietet das CallOne Softphone gegenüber einem vergleichbaren Lösungsansatz mit Microsoft Teams? Probieren Sie es jetzt mit der Schaltertaste aus!</p>

        <div class="compare">
            <div class="compare__header">
                <div class="compare__logo">
                    <?= pictureTag(
                        '/assets/images/softphone/comparison-softphone.svg',
                        'callcenter Software mit CallOne Softphone',
                        200, 51
                    ); ?>
                </div>
                <div class="compare__switch">
                    <input type="checkbox" id="compare-switch-1" value="1" checked />
                    <label for="compare-switch-1"></label>
                </div>
                <div class="compare__logo">
                    <?= pictureTag(
                        '/assets/images/softphone/comparison-ms-teams.svg',
                        'Teams Telefonie im Vergleich mit Softphone Cloud Telefonanlage',
                        214, 50
                    ); ?>
                </div>
            </div>
            <div class="compare__content" data-compare="on">
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-lizenzkosten.svg',
                                'Softphone ohne Lizenskosten',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Lizenzkosten</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/benefit-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Inklusivleistung im Rahmen der CallOne Telefonanlage.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-integrationsaufwand.svg',
                                'Softphone mit geringem Integrationsaufwand',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Integrationsaufwand</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/benefit-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Einfache Installation und Nutzung innerhalb von wenigen Minuten durch den Admin oder User selbst.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-lizenzkosten.svg',
                                'Softphone von CallOne ohne Lizenskosten mit Cloud Telefonanlage',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Datenschutzkonformität</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/benefit-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Deutsches Unternehmen, das Ihre Daten sicher und DS-GVO konform hostet.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-flexibilitaet.svg',
                                'Flexibilität Dank Lösungen für Unternehmenstelefonie',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Flexibilität</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/benefit-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Spezialanbieter für Unternehmenstelefonie mit persönlichem Ansprechpartner und Support.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-support.svg',
                                'Softphone und Telefonie aus einer Hand mit persönlichem Ansprechpartner im Service',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Support</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/benefit-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Ein Ansprechpartner für all Ihre Belange. Softphone und Telefonie aus einer Hand.
                        </div>
                    </div>
                </div>
            </div>

            <div class="compare__content" data-compare="off">
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-lizenzkosten.svg',
                                'Softphone ohne Lizenskosten',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Lizenzkosten</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/attention-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Zusatzkosten oder entsprechender Vertrag notwendig.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-integrationsaufwand.svg',
                                'Softphone mit geringem Integrationsaufwand bei CallOne',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Integrationsaufwand</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/attention-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Einrichtung teilweise nur mit bestimmten Adminrechten. Powershell und zusätzliche Schritte notwendig.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-lizenzkosten.svg',
                                'Softphone ohne Lizenskosten mit Cloud Telefonanlage bei CallOne',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Datenschutzkonformität</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/attention-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            US-Unternehmen, das nicht mehr auf Grundlage des Privacy Shield Daten von EU-Bürgern verarbeiten darf.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-flexibilitaet.svg',
                                'Flexible Unternehmenstelefonie von CallOne',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Flexibilität</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/attention-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Breites Portfolio, allerdings nicht spezialisiert auf Businesstelekommunikation.
                        </div>
                    </div>
                </div>
                <div class="compare__box">
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/icon-support.svg',
                                'Persönliche Ansprechpartner im Service bei umfassender Lösung für Unternehmenstelefonie',
                                40, 40
                            ); ?>
                        </div>
                        <div class="compare__text">
                            <h3>Support</h3>
                        </div>
                    </div>
                    <div class="compare__info">
                        <div class="compare__icon">
                            <?= pictureTag(
                                '/assets/images/icons_svg/attention-highlighter.svg',
                                'CallOne Vorteil mit Softphone',
                                30, 30
                            ); ?>
                        </div>
                        <div class="compare__text">
                            Standard ist Selfservice mit Ticket oder Betreuung durch einen zusätzlichen IT-Systempartner.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="subtext centered mobile-left">*Microsoft Teams ist eine eingetragene und geschützte Marke.</p>
    </div>
</div>

<div class="section section--black" id="preise">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Preise</h2>
        <p class="centered mobile-left">Das CallOne Softphone ist die perfekte Erweiterung für Ihre Businesstelefonie. Es funktioniert sowohl mit Ihrem existierenden VoIP-Carrier als auch mit der CallOne Telefonie-Welt. Wie möchten Sie das Softphone nutzen?</p>

        <div class="tablist tablist--on-black">
            <div class="tablist__links">
                <div class="tablist__link" data-tab="1">
                    <?= pictureTag(
                        '/assets/images/icons_svg/eigener-provider.svg',
                        'eigenen Provider mit CallOne Softphone verbinden',
                        70, 70
                    ); ?>
                    <strong>Eigenen Provider verbinden</strong>
                </div>
                <div class="tablist__link" data-tab="2">
                    <?= pictureTag(
                        '/assets/images/icons_svg/callone-telefonanlage.svg',
                        'Softphone mit Cloud Telefonanlage verbinden',
                        70, 70
                    ); ?>
                    <strong>Softphone mit VoIP-Telefonanlage</strong>
                </div>
            </div>

            <div class="tablist__content" data-tab="1">
                <h2 class="centered mobile-left">Ruckzuck verbinden und aus dem Browser lostelefonieren</h2>
                <p class="centered mobile-left">Das Softphone mit den Grundfunktionen für Telefonie und Click-to-Dial können Sie stets kostenfrei nutzen. Zukünftige Features für noch angenehmere Business-Telefonie können Sie für einen Aufpreis dazubuchen.</p>

                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/softphone/SIP-visualization.svg',
                        'SIP Carrier Ihrer Wahl bei CallOne',
                        299, 124
                    ); ?>
                </p>

                <div class="content-box content-box--white pricetoggle__whitebox">
                    <div class="grid flex vcenter">
                        <div class="col-2">
                            <span class="headline-tag" data-tag="Basic">Softphone</span><br />
                            mit eigenem SIP-Provider
                        </div>
                        <div class="col-2">
                            <span class="headline-free">kostenfrei</span>
                        </div>
                    </div>

                    <ul>
                        <li>Dialpad</li>
                        <li>Click-to-Call (Nummern von Websites ins Telefon wählen)</li>
                    </ul>

                    <p class="centered">
                        <a class="btn btn--primary btn--full-width" href="#installation">Kostenfrei installieren</a>
                    </p>
                </div>
            </div>

            <div class="tablist__content" data-tab="2">
                <h2 class="centered mobile-left">Holen Sie das Beste aus Ihrer Businesstelefonie heraus!</h2>
                <p class="centered mobile-left">CallOne ist der Spezialist, wenn es um hochwertige moderne Telekommunikation geht, die sich nahtlos in Ihre IT-Infrastruktur einpasst.</p>

                <div class="grid centered">
                    <div class="col-3">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-spezialist.svg',
                            'Spezialist für Business Telefonie',
                            56, 62
                        ); ?>
                        <p class="secondary">Spezialist für<br />Business Telefonie</p>
                    </div>
                    <div class="col-3">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-ansprechpartner.svg',
                            'Persönlicher Ansprechpartner für Ihre Business Telefonie',
                            57, 61
                        ); ?>
                        <p class="secondary">Persönlicher<br />Ansprechpartner</p>
                    </div>
                    <div class="col-3">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-datenschutz.svg',
                            'Unternehmenstelefonie mit deutschem Datenschutzstandard',
                            51, 61
                        ); ?>
                        <p class="secondary">Deutscher<br />Datenschutz-Standard</p>
                    </div>
                </div>

                <div class="pricetoggle__whitebox">
                    <div class="usercalc">
                        <div class="usercalc__form">
                            <p><strong>Wie viele Nutzer-Accounts brauchen Sie?</strong></p>

                            <div class="usercalc__box">
                                <div class="usercalc__header">
                                    <div class="usercalc__icon">
                                        <?= pictureTag(
                                            '/assets/images/icons_svg/voip-telefonanlage.svg',
                                            'Cloud Telefonanlage für Business Telefonie',
                                            50, 51
                                        ); ?>
                                    </div>
                                    <div class="usercalc__title">
                                        <strong>Telefonanlage</strong><br />
                                        Für das gesamte Unternehmen
                                    </div>
                                </div>

                                <div class="usercalc__slider">
                                    <div class="prerange"></div>
                                    <input type="range" min="25" value="25" max="500" />
                                </div>

                                <div class="usercalc__grid">
                                    <div class="usercalc__col">
                                        <input type="text" class="usercalc__users" value="25" /><span>Nutzer</span>
                                    </div>
                                    <div class="usercalc__col">
                                        <span class="usercalc__price">9,90 &euro;</span>
                                        <span>
                                            pro Nutzer<br />
                                            pro Monat
                                        </span>
                                    </div>
                                </div>

                                <p class="small">
                                    <strong>Hinweis:</strong> Preise zzgl. optionaler Einrichtung durch CallOne und einmaliger Aktivierung von 99,00 €. CallOne richtet sich an den Bedarf und die Herausforderungen mittelständischer Unternehmen. Unsere Lösungen sind erfahrungsgemäß zu umfassend für Unternehmen unter 25 Mitarbeitenden.
                                </p>
                            </div>

                            <p>
                                <strong>Legen Sie Wert auf hervorragenden Kundenservice?</strong><br />
                                CallOne liefert eine Callcenter-Software, die keine Wünsche offen lässt. Sie bietet umfangreiche Funktionen von Rückruf- über Warteschleifen-Management, Anbindungen an CRM-Systeme, Gesprächsaufzeichnungen bis hin zu Statistiken.
                            </p>

                            <input type="checkbox" id="callcenter-software" />
                            <label class="usercalc__box" for="callcenter-software">
                                <span class="usercalc__header">
                                    <span class="usercalc__icon">
                                        <?= pictureTag(
                                            '/assets/images/icons_svg/callcenter-software.svg',
                                            'Call Center Software',
                                            50, 51
                                        ); ?>
                                    </span>
                                    <span class="usercalc__title">
                                        <strong>Callcenter-Software</strong><br />
                                        Für Sales und Service
                                    </span>
                                    <span class="usercalc__checkbox"></span>
                                </span>
                            </label>

                            <p class="centered">
                                <a class="btn btn--secondary btn--full-width usercalc__submit" href="#">Preise ansehen</a>
                            </p>
                        </div>

                        <div class="usercalc__result">
                            <div class="usercalc__back usercalc__submit">
                                <span></span> Schritt zurück
                            </div>

                            <div class="usercalc__grid">
                                <div class="usercalc__col usercalc__headline usercalc__headline--tag">
                                    <span data-tag="Pro">Softphone</span>
                                    mit CallOne Telefonanlage
                                </div>
                                <div class="usercalc__col usercalc__total">
                                    Preis pro Monat*
                                    <span></span>
                                </div>
                            </div>

                            <ul>
                                <li>Dialpad</li>
                                <li>Click-to-Dial (Nummern von Websites ins Telefon wählen)</li>
                                <li>Rufnummern-Portierung</li>
                                <li>Bis zu zehn Endgeräte je User gleichzeitig</li>
                                <li>Deutscher Datenschutz-Standard</li>
                            </ul>

                            <p class="subtext">* Gesamtpreis für alle Nebenstellen zzgl. Nutzung</p>

                            <hr>

                            <div class="usercalc__callcenter">
                                <div class="usercalc__grid">
                                    <div class="usercalc__col usercalc__headline">
                                        <span>Callcenter-Software</span>
                                        für Sales und Service
                                    </div>
                                    <div class="usercalc__col">
                                        <div class="usercalc__col usercalc__total2">
                                            ab monatlich**
                                            <span>99,00 &euro;</span>
                                        </div>
                                    </div>
                                </div>

                                <ul>
                                    <li>Warteschleifenmanagement</li>
                                </ul>

                                <p class="subtext">** Projektspezifisch zzgl. Plattformnutzung</p>

                                <hr>
                            </div>

                            <p>
                                <a href="#" class="btn btn--primary btn--full-width centered" data-openmodal="contact-sales">Kontakt zum CallOne Vertrieb</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green-white" id="installation">
    <div class="section__content">
        <div class="installation">
            <div class="installation__header">
                <div class="installation__logo">
                    <?= pictureTag(
                        '/assets/images/icons_svg/softphone-app-icon.svg',
                        'CallOne Softphone als App',
                        136, 136
                    ); ?>
                </div>
                <div class="installation__title">
                    <span class="headline-tag">App</span><br />
                    Softphone
                </div>
                <div class="installation__rating">
                    <span>&starf;&starf;&starf;&starf;&starf;</span><br />
                    Hervorragende Bewertung<br />
                    im <a href="#">Google Chrome Store</a>.
                </div>
            </div>
            <div class="installation__content">
                <div class="subtitle">Schritte für Installation</div>
                <h2>In zwei Minuten eingerichtet</h2>

                <div class="installation__grid">
                    <div class="installation__col">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-download-extension.svg',
                            'Browser App für CallOne Softphone downloaden',
                            50, 36
                        ); ?>
                        1. Browser App<br />herunterladen
                    </div>
                    <div class="installation__col">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-authorization.svg',
                            'Zugangsdaten für CallOne Softphone eintragen',
                            50, 50
                        ); ?>
                        2. Zugangsdaten<br />eintragen
                    </div>
                    <div class="installation__col">
                        <?= pictureTag(
                            '/assets/images/icons_svg/icon-softphone-use.svg',
                            'CallOne Softphone nutzen',
                            50, 42
                        ); ?>
                        3. Los<br />telefonieren
                    </div>
                </div>

                <h3>Wählen Sie den Browser zur Installation</h3>

                <div class="installation__browsers">
                    <a href="#" class="installation__browser" data-browser="chrome">
                        <div>
                            <?= pictureTag(
                                '/assets/images/icons_png/google-chrome.png',
                                'Softphone für Chrome Browser Extension',
                                40, 40
                            ); ?>
                        </div>
                        Google <br />Chrome
                    </a>
                    <a href="#" class="installation__browser" data-browser="firefox">
                        <div>
                            <?= pictureTag(
                                '/assets/images/icons_png/mozilla-firefox.png',
                                'Softphone für Mozilla Firefox Browser Extension',
                                40, 39
                            ); ?>
                        </div>
                        Mozilla <br />Firefox
                    </a>
                    <a href="#" class="installation__browser" data-browser="edge">
                        <div>
                            <?= pictureTag(
                                '/assets/images/icons_svg/edge-logo.svg',
                                'Softphone für Microsoft Edge Browser Extension',
                                40, 39
                            ); ?>
                        </div>
                        Microsoft <br />Edge
                    </a>
                </div>

                <div class="btn-set btn-set--centered">
                    <a href="https://chrome.google.com/webstore/detail/callone-voip-softphone/cedionilkklbngbmlnipangpipeficfo" target="_blank" class="btn btn--primary btn--arrow-right installation__button" data-browser="chrome">
                        Zum Chrome Store <span class="button__icon icon-jump-forward"></span>
                    </a>
                    <a href="https://addons.mozilla.org/de/firefox/addon/callone/" class="btn btn--primary btn--arrow-right installation__button" target="_blank" data-browser="firefox">
                        Zum Firefox Add-On <span class="button__icon icon-jump-forward"></span>
                    </a>
                    <a href="https://microsoftedge.microsoft.com/addons/detail/callone-voip-softphone/jeollcclhnpejdihkhengipjejjjjfbm" target="_blank" class="btn btn--primary btn--arrow-right installation__button" data-browser="edge">
                        Zum Edge Add-On <span class="button__icon icon-jump-forward"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Fragen und Antworten</h2>

        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ();
        ?>
    </div>
</div>