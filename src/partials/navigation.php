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

                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Callcenter-Software</strong>
                            <span>Lorem ipsum dolor</span>
                        </a>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__headline">Produkte</div>

                        <div class="submenu__grid">
                            <div class="submenu__column">
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
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
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
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
                        <a href="#" class="submenu__link submenu__link--small">
                            <strong>Callcenter-Software</strong>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                        </a>
                    </div>
                    <div class="submenu__right">
                        <div class="submenu__headline">Integrationen</div>

                        <div class="submenu__grid">
                            <div class="submenu__column">
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                                <a href="#" class="submenu__link">
                                    <div class="submenu__link-icon">
                                        <img src="/assets/images/icons_svg/menu-customer-service.svg" alt="" />
                                    </div>
                                    <div class="sunmenu__link-text">
                                        <strong>Callcenter-Software</strong>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia.</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <?php
                $jobs = jobs_load();
                ?>

                <div class="navigation__link navigation__link--arrow">
                    <a href="/karriere-bei-callone">Karriere<?php if (!empty($jobs)) { ?> <span class="navigation__notification"><?= count($jobs->jobs_get()); ?></span><?php } ?></a>
                </div>

                <div class="navigation__submenu submenu">
                    <div class="submenu__left">
                        <div class="submenu__headline">Arbeiten bei CallOne</div>

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

                        <div class="submenu__grid">
                            <div class="submenu__column">
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                            </div>
                            <div class="submenu__column">
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                                <a href="#" class="submenu__link submenu__link--small">
                                    <strong>Callcenter-Software</strong>
                                    <span>Lorem ipsum dolor</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item navigation__item--divider navigation__item--small-submenu">
                <div class="navigation__link navigation__link--arrow navigation__link--faded">
                    <a href="#">Unternehmen</a>
                </div>

                <div class="navigation__submenu submenu">
                    <a href="#" class="submenu__link submenu__link--small">
                        <strong>Häufige Fragen</strong>
                        <span>Auf jede Frage eine Antwort</span>
                    </a>
                    <a href="#" class="submenu__link submenu__link--small">
                        <strong>Preise</strong>
                        <span>Alle Preise im Überblick</span>
                    </a>
                    <a href="#" class="submenu__link submenu__link--small">
                        <strong>Das Team</strong>
                        <span>Die Menschen hinter CallOne</span>
                    </a>
                    <a href="#" class="submenu__link submenu__link--small">
                        <strong>Kontakt</strong>
                        <span>Wir helfen Ihnen gerne</span>
                    </a>
                    <a href="#" class="submenu__link submenu__link--small">
                        <strong>Blog</strong>
                        <span>Lesenswerte Artikel</span>
                    </a>
                </div>
            </li>

            <?php
            if ($faq) {
                // Display FAQ Menu
                ?>
                <li class="navigation__item navigation__item--small-submenu">
                    <div class="navigation__link">
                        <a href="#">FAQ</a>
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
            } elseif ($blog) {
                // Display Blog Menu
                ?>
                <li class="navigation__item navigation__item--small-submenu">
                    <div class="navigation__link">
                        <a href="#">Blog</a>
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
    </div>
</nav>

<div class="navigation-spacer"></div>