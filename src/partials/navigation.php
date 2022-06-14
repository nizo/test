<?php
// Check if file is loaded from FAQ or blog
$isFaq = false;
$isBlog = false;
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, 0, 4) == '/faq') $isFaq = true;
if (substr($uri, 0, 5) == '/blog') $isBlog = true;

$jobs = jobs_load();
$jobsCount = count($jobs->jobs_get());

/*
 * Menu Positions can be
 * loesungen, produkte, callone
 * Has to be set in libs/router.inc.php
 */

 // Banderole
require_once('banderole.php');
?>

<nav class="navigation">
    <div class="navigation__links">
        <a href="/" class="navigation__logo" title="Zur Startseite von CallOne">
            <?= pictureTag(
                '/assets/images/logo/Logo-Equal.svg',
                'CallOne Logo',
                167, 80, [], false
            ) ?>
        </a>
        <?php if ($page->shorttitle): ?>
            <div class="navigation__title"><?= $page->shorttitle; ?></div>
        <?php endif; ?>

        <ul>
            <li class="navigation__item<?= $page->menu_position == 'produkte' ? ' navigation__item--active' : '' ?>">
                <div class="navigation__link navigation__link--arrow">
                    <span>Produkte</span>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left">
                            <div class="submenu__row">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-icon">
                                        <?= pictureTag(
                                            '/assets/images/navigation/callone-produkte.png',
                                            'Businesstelefonie auf dem nächsten Level mit Produkten von CallOne',
                                            70, 70
                                        ) ?>
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>CallOne Produkte</strong>
                                        <p>Bringen Sie Ihre Businesstelefonie auf das nächste Level</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="submenu__row submenu__row--fill">
                                <div class="submenu__column submenu__column--border-right" style="--col-width:350px;">
                                    <a href="/voip-telefonanlage" class="submenu__link submenu__link--3-lines<?= getPageActiveClass('/voip-telefonanlage') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-cloud-voip-telefonanlage.png',
                                                'Cloud Telefonanlage von CallOne',
                                                50, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Telefonanlage in der Cloud</strong>
                                            <p>Egal ob im Büro oder Homeoffice. Gehostet in der deutschen Cloud.</p>
                                        </div>
                                    </a>
    
                                    <a href="/callcenter-software" class="submenu__link submenu__link--3-lines<?= getPageActiveClass('/callcenter-software') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-callcenter-software-icon.png',
                                                'Callcenter Software von CallOne',
                                                50, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Callcenter-Software<span class="submenu__link-tag">Beliebt</span></strong>
                                            <p>Cloud Voice Lösung optimal für den Einsatz im Kundenservice und Inside-Sales</p>
                                        </div>
                                    </a>

                                    <a href="/0800-lokal-nummern" class="submenu__link submenu__link--3-lines<?= getPageActiveClass('/0800-lokal-nummern') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-numbers.png',
                                                'lokale, nationale und internationale Rufnummern schalten',
                                                50, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Rufnummern</strong>
                                            <p>Freecall 0800, lokale Rufnummern aus Ihrem Vorwahlbereich & weltweit</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="submenu__column" style="--col-width:330px;">
                                    <a href="/ms-teams" class="submenu__link submenu__link--3-lines<?= getPageActiveClass('/ms-teams') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-teams.png',
                                                'Teams Telefonie als Cloud Telefonanlage',
                                                51, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Microsoft Teams<span class="submenu__link-tag">Beliebt</span></strong>
                                            <p>Die smarte Telefonie für Ihr Unternehmen</p>
                                        </div>
                                    </a>

                                    <a href="/telefonanlage-mit-warteschleife" class="submenu__link submenu__link--3-lines<?= getPageActiveClass('/telefonanlage-mit-warteschleife') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-warteschleifen.png',
                                                'Bessere Erreichbarkeit mit zeitgest. Rückruf und virtueller Warteschleife',
                                                51, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Warteschleifen</strong>
                                            <p>Bessere Erreichbarkeit mit zeitgest. Rückruf und virtueller Warteschleife</p>
                                        </div>
                                    </a>

                                    <a href="/statistiken" class="submenu__link submenu__link--3-lines<?= getPageActiveClass('/statistiken') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-statistiken.png',
                                                'Passgenaue Auswertungen für optimale Planbarkeit',
                                                51, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Statistiken und Echtzeitanalysen</strong>
                                            <p>Passgenaue Auswertungen für optimale Planbarkeit</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="submenu__right">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                <div class="submenu__link-text">
                                    <strong>Unser Serviceangebot</strong>
                                    <p>Persönliche Ansprechpartner und exzellenter Support</p>
                                </div>
                            </div>

                            <a href="#" class="submenu__link trackedContactModal" data-openmodal="contact-sales">
                                <div class="submenu__link-text">
                                    <strong>Produktdemo</strong>
                                    <p>Buchen Sie jetzt einen Demo-Slot  um CallOne Produkte live zu erleben</p>
                                </div>
                            </a>

                            <a href="/callcenter-einsparpotential" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Einsparpotenzial<span class="submenu__link-tag">Berechnen</span></strong>
                                    <p>Berechnen Sie Ihre Einsparpotenzial mit der CallOne Plattform</p>
                                </div>
                            </a>

                            <a href="/customer-success" class="submenu__link<?= getPageActiveClass('/customer-success') ?>">
                                <div class="submenu__link-text">
                                    <strong>Persönliche Projektbetreuung</strong>
                                    <p>Machen Sie unser Team<br />zu Ihrem Team!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item<?= $page->menu_position == 'loesungen' ? ' navigation__item--active' : '' ?>">
                <div class="navigation__link navigation__link--arrow">
                    <span>Lösungen</span>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left">
                            <div class="submenu__row">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-icon">
                                        <?= pictureTag(
                                            '/assets/images/navigation/callone-plattform.png',
                                            'Telekommunikationslösungen von CallOne',
                                            70, 70
                                        ) ?>
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>CallOne Plattform Lösungen</strong>
                                        <p>Eine Plattform, fertige Erweiterungen - unendliche Möglichkeiten</p>
                                    </div>
                                </div>
                            </div>

                            <div class="submenu__row submenu__row--fill">
                                <div class="submenu__column submenu__column--border-right" style="--col-width:350px;">
                                    <a href="/callcenter-software-apps" class="submenu__link<?= getPageActiveClass('/callcenter-software-apps') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-apis.png',
                                                'CRM Integration und Schnittstellenanbindung an CallOne mit APIs',
                                                50, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Anbindungen und Apps</strong>
                                            <p>CRM und Ticketing, BI und Reporting</p>
                                        </div>
                                    </a>

                                    <a href="/callcenter-sprachanalyse" class="submenu__link<?= getPageActiveClass('/callcenter-sprachanalyse') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-i2x.png',
                                                'Call Tracking mit den CallOne Lösungen für Sales und Service',
                                                50, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>
                                                Sprachanalyse
                                                <span class="submenu__link-tag">NEU</span>
                                            </strong>
                                            <p>Echtzeit Kommunikations&shy;analyse und Coaching</p>
                                        </div>
                                    </a>

                                    <a href="/callcenter-bot" class="submenu__link<?= getPageActiveClass('/callcenter-bot') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-callcenter-bot.png',
                                                'Sprachgesteuerte KI Systeme mit dem CallOne Callcenter Bot',
                                                51, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Callcenter-Bot</strong>
                                            <p>Anliegen sprachgesteuert mit KI-gesteuerten Sprachdialogsystemen</p>
                                        </div>
                                    </a>

                                    <a href="/omnichannel-customer-support-software" class="submenu__link<?= getPageActiveClass('/omnichannel-customer-support-software') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/menu-multi-channel.png',
                                                'Echte Omnichannel-CX mit deutscher KI',
                                                50, 50
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>
                                                Omnichannel
                                                <span class="submenu__link-tag">NEU</span>
                                            </strong>
                                            <p>Echte Omnichannel-CX mit deutscher KI</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="submenu__column" style="--col-width:330px;">
                                    <a href="/workforce" class="submenu__link<?= getPageActiveClass('/workforce') ?>">
                                        <div class="submenu__link-text">
                                            <strong>Workforce</strong>
                                            <p>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </a>

                                    <a href="/call-tracking" class="submenu__link<?= getPageActiveClass('/call-tracking') ?>">
                                        <div class="submenu__link-text">
                                            <strong>Call-Tracking</strong>
                                            <p>Verknüpfen Sie Ihre Bestellhotline mit einer laufenden Websession</p>
                                        </div>
                                    </a>

                                    <a href="/voip-api" class="submenu__link<?= getPageActiveClass('/callcenter-software-integrationen') ?>">
                                        <div class="submenu__link-text">
                                            <strong>Schnittstellen für jede Anforderung</strong>
                                            <p>API first, von Entwicklern - für Entwickler</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="submenu__right">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                <div class="submenu__link-text">
                                    <strong>Unser Serviceangebot</strong>
                                    <p>Persönliche Ansprechpartner und exzellenter Support</p>
                                </div>
                            </div>

                            <a href="#" class="submenu__link trackedContactModal" data-openmodal="contact-sales">
                                <div class="submenu__link-text">
                                    <strong>Produktdemo</strong>
                                    <p>Buchen Sie jetzt einen Demo-Slot  um CallOne Produkte live zu erleben</p>
                                </div>
                            </a>

                            <a href="/callcenter-einsparpotential" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Einsparpotenzial<span class="submenu__link-tag">Berechnen</span></strong>
                                    <p>Berechnen Sie Ihre Einsparpotenzial mit der CallOne Plattform</p>
                                </div>
                            </a>

                            <a href="/customer-success" class="submenu__link<?= getPageActiveClass('/customer-success') ?>">
                                <div class="submenu__link-text">
                                    <strong>Persönliche Projektbetreuung</strong>
                                    <p>Machen Sie unser Team<br />zu Ihrem Team!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item<?= $page->menu_position == 'callone' ? ' navigation__item--active' : '' ?>">
                <div class="navigation__link navigation__link--arrow">
                    <span>Unternehmen</span>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left">
                            <div class="submenu__row">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-text">
                                        <strong>Unsere Referenzen</strong>
                                        <p>Kunden, die erfolgreich mit CallOne <br />Ihre Businesstelefonie bestreiten</p>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu__row">
                                <div class="submenu__column" style="--col-width:350px">
                                    <a href="/case-study-check24" class="submenu__link<?= getPageActiveClass('/case-study-check24') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/check24.png',
                                                'Check24 Kundenzufriedenheit CallOne',
                                                62, 62
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Check24</strong>
                                            <p>Umfangreiche BI-Statistiken und Sprachanalyse</p>
                                        </div>
                                    </a>
        
                                    <a href="/case-study-flaconi" class="submenu__link<?= getPageActiveClass('/case-study-flaconi') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/flaconi.png',
                                                'Flaconi Kundenzufriedenheit CallOne',
                                                62, 62
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Flaconi</strong>
                                            <p>Zusammenspiel von Telefonanlage und ACD-Lösung</p>
                                        </div>
                                    </a>

                                    <a href="/case-study-niceshops" class="submenu__link<?= getPageActiveClass('/case-study-niceshops') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/niceshops.png',
                                                'Niceshops Kundenzufriedenheit CallOne',
                                                62, 62
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>niceshops</strong>
                                            <p>Callcenter-Software mit CRM Freshdesk-Anbindung</p>
                                        </div>
                                    </a>
    
                                    <a href="/case-study-apodiscounter" class="submenu__link<?= getPageActiveClass('/case-study-apodiscounter') ?>">
                                        <div class="submenu__link-icon">
                                            <?= pictureTag(
                                                '/assets/images/navigation/apodiscounter.png',
                                                'Apodiscounter Kundenzufriedenheit CallOne',
                                                62, 62
                                            ) ?>
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Apodiscounter</strong>
                                            <p>Intelligente Anrufsteuerung mit KI und Callback</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="submenu__right" style="--width:270px">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                <div class="submenu__link-text">
                                    <strong>CallOne GmbH</strong>
                                    <p>Was uns zu einem hervoragenden deutschen Telefonieanbieter macht</p>
                                </div>
                            </div>

                            <a href="/dsgvo-telekommunikation" class="submenu__link<?= getPageActiveClass('/dsgvo-telekommunikation') ?>">
                                <div class="submenu__link-text">
                                    <strong>Datenschutz und Sicherheit</strong>
                                    <p>Wie wir Ausfallsicherheit und DSGVO-Kompatibilität garantieren</p>
                                </div>
                            </a>

                            <a href="/ueber-uns" class="submenu__link<?= getPageActiveClass('/ueber-uns') ?>">
                                <div class="submenu__link-text">
                                    <strong>Über uns</strong>
                                    <p>Wer wir sind, unsere Geschichte und Unternehmenskultur</p>
                                </div>
                            </a>

                            <a href="/karriere-bei-callone" class="submenu__link<?= getPageActiveClass('/karriere-bei-callone') ?>">
                                <div class="submenu__link-text">
                                    <strong>Karriere<?php if ($jobsCount > 0) { ?><span class="submenu__link-tag"><?= $jobsCount; ?> Jobs</span><?php } ?></strong>
                                    <p>Wir suchen Talente, die die CallOne Erfolgsgeschichte weiterschreiben</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <?php if ($isFaq): ?>
                <li class="navigation__item navigation__item--active navigation__item--hide-mobile">
                    <div class="navigation__link navigation__link--arrow">
                        <a href="/faq">FAQ</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <div class="submenu__inner">
                            <div class="submenu__left">
                                <?php
                                $categories = get_categories(array(
                                    'parent' => 0,
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                ));

                                $columns = array_chunk($categories, ceil(count($categories) / 3));
                                
                                echo '<div class="submenu__row">';
                                foreach($columns as $key => $column) {
                                    echo '<div class="submenu__column'.($key < (count($column) - 1) ? ' submenu__column--border-right' : '').'" style="--col-width:300px">';
                                    foreach($column as $category) {
                                        echo '<a href="'.get_category_link($category).'" title="'.$category->description.'" class="submenu__link">';
                                        echo '  <div class="submenu__link-text">';
                                        echo '    <strong>'.$category->name.'</strong>';
                                        echo '    <p>'.substr($category->description, 0, 60).'&hellip;</p>';
                                        echo '  </div>';
                                        echo '</a>';
                                    }
                                    echo '</div>';
                                }
                                echo '</div>';
                                ?>    
                            </div>
                            <!-- <div class="submenu__right">
                                
                            </div> -->
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            
            <?php if ($isBlog): ?>
                <li class="navigation__item navigation__item--active navigation__item--hide-mobile">
                    <div class="navigation__link">
                        <a href="/blog/">Blog</a>
                    </div>
                </li>
            <?php endif; ?>

            <?php if (stristr ($_SERVER['HTTP_HOST'], 'beta.www.')): ?>
                <li class="navigation__item<?= $page->menu_position == 'devtools' ? ' navigation__item--active' : '' ?>">
                    <div class="navigation__link navigation__link--arrow">
                        <span>DEV</span>
                    </div>

                    <div class="navigation__submenu submenu">
                        <div class="submenu__inner">
                            <div class="submenu__left">
                                <div class="submenu__row">
                                    <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                        <div class="submenu__link-text">
                                            <strong>Entwicklungstools</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="submenu__row">
                                    <div class="submenu__column submenu__column--border-right" style="--col-width:300px">
                                        <a href="/tools/assets" target="_blank" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Assets</strong>
                                                <p>Illustrationen und Bilder</p>
                                            </div>
                                        </a>

                                        <a href="/tools/routes" target="_blank" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Routen</strong>
                                                <p>Webseiten</p>
                                            </div>
                                        </a>

                                        <a href="/tools/components" target="_blank" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Components</strong>
                                                <p>HTML Komponenten</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="submenu__column" style="--col-width:300px">
                                        <a href="/tools/colors" target="_blank" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Farben</strong>
                                                <p>All unsere Farben und deren Name + Code</p>
                                            </div>
                                        </a>

                                        <a href="/tools/screensize" target="_blank" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Auflösung</strong>
                                                <p>Zeigt die aktuelle Auflösung an</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="submenu__right" style="--width:270px">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-text">
                                        <strong>Checks</strong>
                                        <p>Tools zum prüfen der aktuell angezeigten Webseite</p>
                                    </div>
                                </div>

                                <a href="https://googlechrome.github.io/lighthouse/viewer/?psiurl=https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" target="_blank" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Google Pagespeed</strong>
                                        <p>Überprüfung der Seitengeschwindigkeit</p>
                                    </div>
                                </a>
                                
                                <a href="https://search.google.com/test/rich-results?url=https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" target="_blank" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Google Structured Data</strong>
                                        <p>Überprüfung der strukturierten Daten</p>
                                    </div>
                                </a>

                                <a href="https://validator.w3.org/nu/?doc=https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" target="_blank" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>W3C-Validierung</strong>
                                        <p>HTML-Validierung</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        </ul>

        <div class="navigation__right">
            <a href="tel:+493092033500" class="navigation__phonenumber"><span>030 920 33 500</span></a>
            <a href="#" data-openmodal="contact-sales" class="trackedContactModal" style="--fw:700">Sign-up</a>
            <a href="https://box.callone.de" class="navigation__login" target="_blank" rel="nofollow noreferrer">Login</a>
        </div>

        <div class="navigation__mobile-button">
            <div></div>
        </div>
    </div>
</nav>

<div class="navigation__shadow"></div>

<div class="navigation-spacer"></div>