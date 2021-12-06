<?php
// Check if file is loaded from FAQ or blog
$isFaq = false;
$isBlog = false;
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, 0, 4) == '/faq') $isFaq = true;
if (substr($uri, 0, 5) == '/blog') $isBlog = true;

$jobs = jobs_load();
$jobsCount = count($jobs->jobs_get());
?>

<nav class="navigation">
    <div class="navigation__links">
        <a href="/" class="navigation__logo<?= isChristmas() ? ' navigation__logo--christmas' : '' ?>" title="Zur Startseite von CallOne">
            <?php require_once('./assets/images/logo/Logo-Christmas-Equal.svg'); ?>
        </a>

        <ul>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Lösungen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left submenu__row">
                            <div class="submenu__column submenu__column--border-right" style="--col-width:360px;">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/callone-plattform.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>CallOne Plattform</strong>
                                        <p>Unsere Kern-Telefonieprodukte die tief ineinander verzahnt sind</p>
                                    </div>
                                </div>

                                <a href="/callcenter-software" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/callcenter-software-icon.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>Callcenter-Software<span class="submenu__link-tag">Beliebt</span></strong>
                                        <p>Virtuelle Callcenter-Lösung für Sales und Service</p>
                                    </div>
                                </a>

                                <a href="/voip-telefonanlage" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/menu-callcenter-software.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>Cloud-Telefonanlage</strong>
                                        <p>Virtuelle Telefonanlage, intuitiv bedienbar</p>
                                    </div>
                                </a>

                                <a href="/voip-api" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/menu-apis.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>Kommunikations-APIs</strong>
                                        <p>Integrationen, die Sie persönlich und effizient mit Ihren Kunden verbinden</p>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column" style="--col-width:270px;">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom">
                                    <div class="submenu__link-text">
                                        <strong>Geschäftsergebnisse</strong>
                                        <p>Mehrwerte, die Sie mit CallOne direkt zu spüren bekommen</p>
                                    </div>
                                </div>

                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Reduzierte Wartedauern</strong>
                                        <p>Reduzieren Sie die Anruflast mit unserem Warteschleifenmanagement</p>
                                    </div>
                                </a>

                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Schnellere Bearbeitung</strong>
                                        <p>Schnittstellen beschleunigen die Bearbeitung von Kundenanliegen</p>
                                    </div>
                                </a>

                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Mehr Transparenz</strong>
                                        <p>Datenanalyse ermöglicht Prozessoptimierung & Kostensenkung</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="submenu__right">
                            <div class="submenu__ad">
                                <a href="/softphone"><img src="/assets/images/navigation/softphone-ad.png" alt="" /></a>
                            </div>

                            <a href="/softphone" class="submenu__link submenu__link--big">
                                <div class="submenu__link-text">
                                    <strong>Softphone<span class="submenu__link-tag">Kostenlos</span></strong>
                                    <p>Softphone integriert in Ihren Lieblingsbrowser</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Produkte</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left">
                            <div class="submenu__row">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/navigation/callone-produkte.png" alt="" />
                                    </div>
                                    <div class="submenu__link-text">
                                        <strong>CallOne Produkte</strong>
                                        <p>Bringen Sie Ihre Businesstelefonie <br />auf’s nächste Level</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="submenu__row">
                                <div class="submenu__column submenu__column--border-right" style="--col-width:360px;">
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

                                    <a href="/call-tracking" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-calltracking.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Call-Tracking</strong>
                                            <p>Verknüpfen Sie Ihre Bestellhotline mit einer laufenden Websession</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="submenu__column" style="--col-width:340px;">
                                    <a href="/softphone" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-softphone.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>VoIP-Softphone</strong>
                                            <p>Softphone integriert in Ihren Lieblingsbrowser</p>
                                        </div>
                                    </a>

                                    <a href="#todo" class="submenu__link">
                                        <div class="submenu__link-icon">
                                            <img src="/assets/images/navigation/menu-it-helpdesk.png" alt="" />
                                        </div>
                                        <div class="submenu__link-text">
                                            <strong>Virtueller Assistent</strong>
                                            <p>Managen Sie Ihr Telefonaufkommen mit einem Serviceboard</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="submenu__right">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom">
                                <div class="submenu__link-text">
                                    <strong>Unser Serviceangebot</strong>
                                    <p>Mit persönlichen Ansprechpartnern erklären wir unsere Lösungen</p>
                                </div>
                            </div>

                            <a href="#todo" class="submenu__link">
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

                            <a href="#todo" class="submenu__link">
                                <div class="submenu__link-text">
                                    <strong>Preiskonfigurator</strong>
                                    <p>Finden Sie heraus, wieviel Sie Ihr CallOne-Paket ungefähr kostet</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Warum CallOne</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__inner">
                        <div class="submenu__left submenu__row">
                            <div class="submenu__column" style="--col-width:270px;">
                                <div class="submenu__link submenu__link--big submenu__link--border-bottom">
                                    <div class="submenu__link-text">
                                        <strong>Warum CallOne?</strong>
                                        <p>Was uns zu einem hervoragenden deutschen Telefonieanbieter macht</p>
                                    </div>
                                </div>

                                <a href="#todo" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Customer Success</strong>
                                        <p>Wie unsere Projekt Manager*innen Sie tiefgehend unterstützen</p>
                                    </div>
                                </a>

                                <a href="/datenschutz" class="submenu__link">
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
                        <div class="submenu__right" style="--width:300px">
                            <div class="submenu__link submenu__link--big submenu__link--border-bottom">
                                <div class="submenu__link-text">
                                    <strong>Unsere Referenzen</strong>
                                    <p>Kunden, die erfolgreich mit CallOne Ihre Businesstelefonie bestreiten</p>
                                </div>
                            </div>

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
            </li>

            <?php
            if ($isFaq) {
                // Display FAQ Menu
                ?>
                <li class="navigation__item">
                    <div class="navigation__link navigation__link--arrow">
                        <a href="/faq">FAQ</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <div class="submenu__inner">
                            <div class="submenu__left">
                                <a href="#todo" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Kategorie 1</strong>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </a>
        
                                <a href="#todo" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Kategorie 2</strong>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__right">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis itaque velit illum adipisci ipsam! Soluta magni officia vero possimus nemo aliquid facilis voluptate voluptates deleniti atque, voluptatibus eos exercitationem vel!
                            </div>
                        </div>
                    </div>
                </li>
                <?php
            } elseif ($isBlog) {
                // Display Blog Menu
                ?>
                <li class="navigation__item">
                    <div class="navigation__link navigation__link--arrow">
                        <a href="/blog">Blog</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <div class="submenu__inner">
                            <div class="submenu__left">
                                <a href="#todo" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Kategorie 1</strong>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </a>
        
                                <a href="#todo" class="submenu__link">
                                    <div class="submenu__link-text">
                                        <strong>Kategorie 2</strong>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__right">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis itaque velit illum adipisci ipsam! Soluta magni officia vero possimus nemo aliquid facilis voluptate voluptates deleniti atque, voluptatibus eos exercitationem vel!
                            </div>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>

        <a href="https://box.callone.de" class="navigation__login">
            Login
        </a>

        <div class="navigation__mobile-button">
            <div></div>
        </div>
    </div>
</nav>

<div class="navigation__shadow"></div>

<div class="navigation-spacer"></div>