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
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Lösungen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__left submenu__row">
                        <div class="submenu__column submenu__column--border-right">
                            <div class="submenu__link submenu__link--big">
                                <div class="submenu__link-icon">
                                    <img src="/assets/images/navigation/callone-plattform.png" alt="" />
                                </div>
                                <div class="submenu__link-text">
                                    <strong>CallOne Plattform</strong>
                                    <p>Unsere Kern-Telefonieprodukte die tief ineinander verzahnt sind</p>
                                </div>
                            </div>
                        </div>
                        <div class="submenu__column">
                            <div class="submenu__link submenu__link--big">
                                <div class="submenu__link-icon">
                                    <img src="/assets/images/navigation/callone-plattform.png" alt="" />
                                </div>
                                <div class="submenu__link-text">
                                    <strong>CallOne Plattform</strong>
                                    <p>Unsere Kern-Telefonieprodukte die tief ineinander verzahnt sind</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__ad">
                            <img src="/assets/images/navigation/softphone-ad.png" alt="" />
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
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
                    <a href="#">Warum CallOne</a>
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