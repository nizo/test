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
?>

<nav class="navigation">
    <div class="navigation__links">
        <a href="/" class="navigation__logo<?= isChristmas() ? ' navigation__logo--christmas' : '' ?>" title="Zur Startseite von CallOne">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/images/logo/Logo-Christmas-Equal.svg'); ?>
        </a>

        <ul>
            <li class="navigation__item<?= $page->menu_position == 'loesungen' ? ' navigation__item--active' : '' ?>">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Lösungen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left submenu__row">
                            <div class="submenu__column submenu__column--border-right" style="--col-width:360px;">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/callone-plattform.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>CallOne Plattform</strong>
                                        <p>Unsere Kern-Telefonieprodukte die tief ineinander verzahnt sind</p>
                                    </div>
                                </div>

                                <a href="/voip-telefonanlage" class="submenu__link submenu__link--3-lines">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/menu-callcenter-software.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>Cloud Telefonanlage</strong>
                                        <p>Egal ob im Büro oder Homeoffice. Perfekte Erreichbarkeit für Ihre Kolleg*innen</p>
                                    </div>
                                </a>

                                <a href="/callcenter-software" class="submenu__link submenu__link--3-lines">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/callcenter-software-icon.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>Callcenter-Software<span class="submenu__link-tag">Beliebt</span></strong>
                                        <p>Cloud Voice Lösung optimal für den Einsatz im Kundenservice und Inside-Sales</p>
                                    </div>
                                </a>

                                <a href="/callcenter-software-integrationen" class="submenu__link submenu__link--3-lines">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/menu-apis.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>Kommunikations-APIs</strong>
                                        <p>Von CRM-Integration bis individueller Schnittstellen&shy;anbindung liefern wir passende Anbindungen</p>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column" style="--col-width:270px;">
                                <div class="submenu__mobile-divider"></div>

                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-text">
                                        <strong>Geschäftsergebnisse</strong>
                                        <p>Wir schaffen überdurchschnittliche Kundenerlebnisse</p>
                                    </div>
                                </div>

                                <a href="/telefonanlage-mit-warteschleife" class="submenu__link submenu__link--3-lines">
                                    <div class="submenu__link-text">
                                        <strong>Smarte Warteschleifen</strong>
                                        <p>Bessere Erreichbarkeit mit Rückrufoptionen</p>
                                    </div>
                                </a>

                                <a href="/statistiken" class="submenu__link submenu__link--3-lines">
                                    <div class="submenu__link-text">
                                        <strong>Echtzeit-Analysen</strong>
                                        <p>Passgenaue Auswertungen für optimale Planbarkeit</p>
                                    </div>
                                </a>

                                <a href="/callcenter-software-apps" class="submenu__link submenu__link--3-lines">
                                    <div class="submenu__link-text">
                                        <strong>Passgenaue Einbindung</strong>
                                        <p>Teams-Telefonie, CRM- und BI-Apps, Schnittstellen</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="submenu__right submenu__right--align-bottom">
                            <div class="submenu__ad">
                                <a href="/softphone"><img src="/assets/images/navigation/softphone-ad.png" alt="" /></a>
                            </div>

                            <a href="/softphone" class="submenu__link submenu__link--3-lines">
                                <div class="submenu__link-text">
                                    <strong>Softphone<span class="submenu__link-tag">Kostenlos</span></strong>
                                    <p>Telefonieren Sie in Ihrem Lieblingsbrowser mit unser Browser Extension</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item<?= $page->menu_position == 'produkte' ? ' navigation__item--active' : '' ?>">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Produkte</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left">
                            <div class="submenu__row">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/callone-produkte.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>CallOne Produkte</strong>
                                        <p>Bringen Sie Ihre Businesstelefonie <br />auf’s nächste Level</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="submenu__row submenu__row--fill">
                                <div class="submenu__column submenu__column--border-right" style="--col-width:350px;">
                                    <a href="/0800-lokal-nummern" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-numbers.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Rufnummern</strong>
                                            <p>Freecall 0800, lokale Rufnummern aus Ihrem Vorwahlbereich & weltweit</p>
                                        </div>
                                    </a>

                                    <a href="/callcenter-bot" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-callcenter-bot.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Callcenter-Bot</strong>
                                            <p>Anliegen sprachgesteuert mit KI-gesteuerten Sprachdialogsystemen</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="submenu__column" style="--col-width:330px;">
                                    <a href="/softphone" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-softphone.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>VoIP-Softphone</strong>
                                            <p>Softphone integriert in Ihren Lieblingsbrowser</p>
                                        </div>
                                    </a>
                                    
                                    <a href="/call-tracking" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-calltracking.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Call-Tracking</strong>
                                            <p>Verknüpfen Sie Ihre Bestellhotline mit einer laufenden Websession</p>
                                        </div>
                                    </a>

                                    <!-- <a href="#todo" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-it-helpdesk.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Virtueller Assistent</strong>
                                            <p>Managen Sie Ihr Telefonaufkommen mit einem Serviceboard</p>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="submenu__right">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                <div class="submenu__link-text">
                                    <strong>Unser Serviceangebot</strong>
                                    <p>Mit persönlichen Ansprechpartnern erklären wir unsere Lösungen</p>
                                </div>
                            </div>

                            <a href="#" class="submenu__link" data-openmodal="contact-sales">
                                <div class="submenu__link-text">
                                    <strong>Produktdemo<span class="submenu__link-tag">Live</span></strong>
                                    <p>Buchen Sie jetzt einen Demo-Slot  um CallOne Produkte live zu erleben</p>
                                </div>
                            </a>

                            <a href="/callcenter-software#mehrwertrechner" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Entscheidungshilfe</strong>
                                    <p>Berechnen Sie Ihre Einsparpotenzial mit CalllOne Callcenter Software</p>
                                </div>
                            </a>

                            <a href="/preiskalkulator" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Preiskonfigurator</strong>
                                    <p>Finden Sie heraus, wieviel Sie Ihr CallOne-Paket ungefähr kostet</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item<?= $page->menu_position == 'callone' ? ' navigation__item--active' : '' ?>">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Warum CallOne</a>
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
                                <div class="submenu__column" style="--col-width:300px">
                                    <a href="/case-study-check24" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/check24.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Check24</strong>
                                            <p>Umfangreiche Integration über APIs & Webhooks</p>
                                        </div>
                                    </a>
        
                                    <a href="/case-study-flaconi" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/flaconi.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Flaconi</strong>
                                            <p>Zusammenspiel von Telefonanlage & ACD-Lösung</p>
                                        </div>
                                    </a>

                                    <a href="/case-study-niceshops" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/niceshops.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>niceshops</strong>
                                            <p>Callcenter-Software, VoIP mit Freshdesk-Anbindung</p>
                                        </div>
                                    </a>
    
                                    <a href="/case-study-apodiscounter" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/apodiscounter.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Apodiscounter</strong>
                                            <p>Intelligente Anrufsteuerung mit KI</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="submenu__right" style="--width:270px">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom submenu__title">
                                <div class="submenu__link-text">
                                    <strong>Warum CallOne?</strong>
                                    <p>Was uns zu einem hervoragenden deutschen Telefonieanbieter macht</p>
                                </div>
                            </div>

                            <a href="/customer-success" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Customer Success</strong>
                                    <p>Machen Sie unser Team<br />zu Ihrem Team!</p>
                                </div>
                            </a>

                            <a href="/dsgvo-telekommunikation" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Datenschutz</strong>
                                    <p>Wie wir Ausfallsicherheit und DSGVO-Kompatibilität garantieren</p>
                                </div>
                            </a>

                            <a href="/ueber-uns" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Über uns</strong>
                                    <p>Wer wir sind, unsere Geschichte und Unternehmenskultur</p>
                                </div>
                            </a>

                            <a href="/karriere-bei-callone" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Karriere<?php if ($jobsCount > 0) { ?><span class="submenu__link-tag"><?= $jobsCount; ?> Jobs</span><?php } ?></strong>
                                    <p>Wir suchen Talente, die die CallOne Erfolgsgeschichte weiterschreiben</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <?php
            if ($isFaq) {
                // Display FAQ Menu
                ?>
                <li class="navigation__item navigation__item--active navigation__item--hide-mobile">
                    <div class="navigation__link navigation__link--arrow">
                        <a href="/faq">FAQ</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <div class="submenu__inner">
                            <div class="submenu__left">
                                <div class="submenu__row">
                                    <div class="submenu__column submenu__column--border-right" style="--col-width:300px">
                                        <a href="/faq/category/verwaltung/" title="Verwaltung - Administration der Software" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Verwaltung</strong>
                                                <p>Administration der Software</p>
                                            </div>
                                        </a>
                                        <a href="/faq/category/rufnummern/" title="Rufnummern - Verwaltung, Schaltung und Portierung" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Rufnummern</strong>
                                                <p>Verwaltung, Schaltung und Portierung</p>
                                            </div>
                                        </a>
                                        <a href="/faq/category/telefonanlage/" title="Telefonanlage - Voraussetzungen, Einrichtung & Funktionen" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Telefonanlage</strong>
                                                <p>Voraussetzungen, Einrichtung & Funktionen</p>
                                            </div>
                                        </a>
                                        <a href="/faq/category/callcenter-loesung/" title="Callcenter-Lösung - Funktionen und Administration" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Callcenter-Lösung</strong>
                                                <p>Funktionen und Administration</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="submenu__column" style="--col-width:300px">
                                        <a href="/faq/category/routing/" title="Routing - Informationen zu Releases und Updates" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Routing</strong>
                                                <p>Anrufe, Auswahl- und IVR-Menüs, Modulen und Plugins</p>
                                            </div>
                                        </a>
                                        <a href="/faq/category/schnittstellen/" title="Schnittstellen - Systemintegration von Schnittstellen & APIs" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Schnittstellen</strong>
                                                <p>Systemintegration von Schnittstellen & APIs</p>
                                            </div>
                                        </a>
                                        <a href="/faq/category/statistiken/" title="Statistiken - Anruf- und Agenten-Statistiken" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Statistiken</strong>
                                                <p>Anruf- und Agenten-Statistiken</p>
                                            </div>
                                        </a>
                                        <a href="/faq/category/weitere-produkte/" title="Weitere Produkte - Fragen zu neusten Features und Tools" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Weitere Produkte</strong>
                                                <p>Fragen zu neusten Features und Tools</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>        
                            </div>
                            <!-- <div class="submenu__right">
                                
                            </div> -->
                        </div>
                    </div>
                </li>
                <?php
            } elseif ($isBlog) {
                // Display Blog Menu
                ?>
                <li class="navigation__item navigation__item--active navigation__item--hide-mobile">
                    <div class="navigation__link navigation__link--arrow">
                        <a href="/blog">Blog</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <div class="submenu__inner">
                            <div class="submenu__left">
                                <div class="submenu__row">
                                    <div class="submenu__column submenu__column--border-right" style="--col-width:300px">
                                        <a href="/blog/" title="Startseite CallOne Blog  - Alles zu den Themen Callcenter-Software und VoIP-Telefonie" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Alle Artikel</strong>
                                                <p>Übersicht aller Artikel und Beiträge</p>
                                            </div>
                                        </a>
                                        <a href="/blog/category/aktuelles/" title="Aktuelle Artikel und Beiträge" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Aktuelles</strong>
                                                <p>Die aktuellen Artikel und Beiträge</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="submenu__column" style="--col-width:300px">
                                        <a href="/blog/category/know-how/" title="Know-how - Wissen zum Thema Telefonie" class="submenu__link">
                                            <div class="submenu__link-text">
                                                <strong>Know-how</strong>
                                                <p>Wissen zum Thema Telefonie</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="submenu__right">
                                
                            </div> -->
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>

        <div class="navigation__right">
            <a href="#" data-openmodal="contact-sales" style="--fw:700">Sign-up</a>
            <a href="https://box.callone.de" target="_blank" rel="nofollow">Login</a>
        </div>

        <div class="navigation__mobile-button">
            <div></div>
        </div>
    </div>
</nav>

<div class="navigation__shadow"></div>

<div class="navigation-spacer"></div>