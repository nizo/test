<?php
// Check if file is loaded from FAQ or blog
$isFaq = false;
$isBlog = false;
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, 0, 4) == '/faq') $isFaq = true;
if (substr($uri, 0, 5) == '/blog') $isBlog = true;
?>

<nav class="navigation">
    <div class="navigation__links">
        <a href="/" class="navigation__logo" title="Zur Startseite von CallOne">
            <?php if(isChristmas()) : ?>
                <img src="/assets/images/logo/Logo-Christmas.svg" alt="Logo" title="CallOne Logo"/>
            <?php else : ?>
                <img src="/assets/images/logo/Logo.svg" alt="Logo" title="CallOne Logo"/>
            <?php endif; ?>
        </a>

        <ul>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--highlight">
                    <a href="/callcenter-software">Call Center Software</a>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow" style="--arrow-color:#333635">
                    <a href="#">Produkte</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__left">
                        <div class="submenu__headline">Lösungen</div>

                        <a href="#" class="submenu__link">
                            <div class="submenu__link-icon">
                                <img src="/assets/images/icons_svg/Customer-Support-White.svg" alt="" />
                            </div>
                            <div class="sunmenu__link-text">
                                <strong>Callcenter-Software</strong>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                            </div>
                        </a>

                        <div class="submenu__headline">Wussten Sie schon?</div>

                        <div class="submenu__info">
                            Mit der CallOne Callcenter Software können Sie zum Mond fliegen.<br />
                            <a href="#">Mehr erfahren &raquo;</a>
                        </div>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__headline">Produkte</div>

                        <div class="submenu__grid">
                            <div class="submenu__column">
                                <a href="/callcenter-software" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-callcenter-software.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Virtuelle Callcenter Lösung für Sales und Service<br /><br /></span>
                                    </div>
                                </a>
                                <a href="/voip-telefonanlage" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-voip.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>VoIP-Telefonanlage</strong>
                                        <span>Virtuelle Telefonanlage, intuitiv bedienbar<br /><br /></span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="/0800-lokal-nummern" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-numbers.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Rufnummern</strong>
                                        <span>Freecall 0800, lokale Rufnummern aus Ihrem Vorwahlbereich und weltweit</span>
                                    </div>
                                </a>
                                <a href="/call-tracking" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-calltracking.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Call-Tracking</strong>
                                        <span>Eindeutiges verknüpfen Ihrer Bestellhotline mit einer laufenden Websession</span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="/callcenter-bot" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-callcenter-bot.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Bot</strong>
                                        <span>Anliegen sprachgesteuert mit KI-gesteuerten Sprachdialogsystemen lösen</span>
                                    </div>
                                </a>
                                <a href="/softphone" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-softphone.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>CallOne VoIP Softphone</strong>
                                        <span>Softphone integriert in Ihren Lieblingsbrowser<br /><br /></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Integrationen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__left">
                        <div class="submenu__headline">Lösungen</div>

                        <a href="#" class="submenu__link">
                            <div class="submenu__link-icon">
                                <img src="/assets/images/icons_svg/Customer-Support-White.svg" alt="" />
                            </div>
                            <div class="sunmenu__link-text">
                                <strong>Callcenter-Software</strong>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                            </div>
                        </a>

                        <div class="submenu__info">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ipsam modi at in fugiat aspernatur.<br />
                            <a href="#">Mehr erfahren</a>
                        </div>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__headline">Integrationen</div>

                        <div class="submenu__grid">
                            <div class="submenu__column">
                                <a href="/callcenter-software-integrationen" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-overview.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Überblick</strong>
                                        <span>Integrationen, die Sie persönlich und effizient mit Ihren Kunden verbinden</span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="/callcenter-software-apps" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-applications.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Applikationen</strong>
                                        <span>Ein System, alle Business-Lösungen<br /><br /></span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="/voip-api" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-apis.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Schnittstellen</strong>
                                        <span>Volle Flexibilität bei Telefon-Schnittstellen<br /><br /></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Referenzen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__left">
                        <div class="submenu__headline">Lösungen</div>

                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Callcenter-Software</strong>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                        </a>
                        
                        <div class="submenu__info">
                            <a href="#">&starf;&starf;&starf;&starf;&starf; 5 Sterne bei Google</a>
                        </div>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__headline">Auswahl unserer Kunden</div>

                        <div class="submenu__grid">
                            <div class="submenu__column">
                                <a href="/case-study-check24" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-check24.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Check24</strong>
                                        <span>Umfangreiche Integration über APIs & Webhooks<br /><br /></span>
                                    </div>
                                </a>
                                <a href="/case-study-flaconi" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-flaconi.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Flaconi</strong>
                                        <span>Zusammenspiel von Telefonanlage & ACD Lösung<br /><br /></span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="/case-study-niceshops" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-niceshops.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>niceshops</strong>
                                        <span>Callcenter-Software, VoIP mit Freshdesk-Anbindung</span>
                                    </div>
                                </a>
                                <a href="/case-study-apodiscounter" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-apodiscounter.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Apodiscounter</strong>
                                        <span>Intelligente Anrufsteuerung mit KI<br /><br /></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item navigation__item--divider">
                <?php
                $jobs = jobs_load();
                ?>

                <div class="navigation__link navigation__link--arrow navigation__link--faded">
                    <a href="/karriere-bei-callone">Karriere<?php if (!empty($jobs)) { ?> <span class="navigation__notification"><?= count($jobs->jobs_get()); ?></span><?php } ?></a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__left">
                        <div class="submenu__headline">Karriere</div>

                        <a href="/karriere-bei-callone" class="submenu__link">
                            <div class="submenu__link-icon">
                                <img src="/assets/images/icons_svg/Customer-Support-White.svg" alt="" />
                            </div>
                            <div class="sunmenu__link-text">
                                <strong>Karriere bei CallOne</strong>
                                <span>Der Weg zu deinem Traumjob</span>
                            </div>
                        </a>

                        <?php
                        foreach ($jobs->categories_get() as $category) {
                            ?>
                            <a href="/karriere#<?= $jobs->category_id_get($category); ?>" class="submenu__link submenu__link--small">
                                <strong><?= $category; ?></strong>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__headline">Aktuelle Jobangebote</div>

                        <div class="submenu__list">
                            <?php
                            foreach ($jobs->jobs_get() as $job)
                            {
                                if (empty ($job->url_get()))
                                    continue;
                                ?>
                                <a href="<?= $job->url_get(); ?>" class="submenu__link submenu__link--small">
                                    <strong><?= $job->title_get(); ?></strong>
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item navigation__item--small-submenu">
                <div class="navigation__link navigation__link--arrow navigation__link--faded">
                    <a href="/ueber-uns">Unternehmen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <a href="/faq" class="submenu__link submenu__link--small">
                        <strong>Häufige Fragen</strong>
                        <span>Auf jede Frage eine Antwort</span>
                    </a>
                    <a href="/preise" class="submenu__link submenu__link--small">
                        <strong>Preise</strong>
                        <span>Alle Preise im Überblick</span>
                    </a>
                    <a href="/ueber-uns" class="submenu__link submenu__link--small">
                        <strong>Über uns</strong>
                        <span>Die Menschen hinter CallOne</span>
                    </a>
                    <a href="/kontakt" class="submenu__link submenu__link--small">
                        <strong>Kontakt</strong>
                        <span>Wir helfen Ihnen gerne</span>
                    </a>
                    <a href="/blog" class="submenu__link submenu__link--small">
                        <strong>Blog</strong>
                        <span>Lesenswerte Artikel</span>
                    </a>
                    <a href="/Impressum" class="submenu__link submenu__link--small">
                        <strong>Impressum</strong>
                        <span>Rechtliches</span>
                    </a>
                </div>
            </li>

            <?php
            if ($isFaq) {
                // Display FAQ Menu
                ?>
                <li class="navigation__item navigation__item--small-submenu">
                    <div class="navigation__link navigation__link--arrow navigation__link--faded">
                        <a href="/faq">FAQ</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Kategorie 1</strong>
                            <span>Lorem, ipsum dolor.</span>
                        </a>
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Kategorie 2</strong>
                            <span>Lorem, ipsum dolor.</span>
                        </a>
                    </div>
                </li>
                <?php
            } elseif ($isBlog) {
                // Display Blog Menu
                ?>
                <li class="navigation__item navigation__item--small-submenu">
                    <div class="navigation__link navigation__link--arrow navigation__link--faded">
                        <a href="/blog">Blog</a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Kategorie 1</strong>
                            <span>Lorem, ipsum dolor.</span>
                        </a>
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Kategorie 2</strong>
                            <span>Lorem, ipsum dolor.</span>
                        </a>
                    </div>
                </li>
                <?php
            } else {
                // Display Login Menu
                ?>
                <li class="navigation__item navigation__item--small-submenu">
                    <div class="navigation__link">
                        <a href="https://box.callone.de" target="_blank">
                            <img src="/assets/images/icons_svg/icon-authorization-black.svg" alt="" width="32" />
                        </a>
                    </div>

                    <div class="navigation__submenu submenu">
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Login</strong>
                            <span>Zu Ihrem Dashboard</span>
                        </a>
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Registrieren</strong>
                            <span>Jetzt Kontakt aufnehmen</span>
                        </a>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>

        <div class="navigation__mobile-button">
            <div></div>
        </div>
    </div>
</nav>

<div class="navigation-spacer"></div>