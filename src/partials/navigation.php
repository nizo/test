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
                    <a href="#">Call Center Software</a>
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Produkte</a>
                </div>

                <div class="navigation__submenu">
                    Produkte<br />
                    Produkte<br />
                    Produkte<br />
                    Produkte<br />
                    Produkte
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Integrationen</a>
                </div>

                <div class="navigation__submenu">
                    Integrationen<br />
                    Integrationen<br />
                    Integrationen<br />
                    Integrationen<br />
                    Integrationen
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Referenzen</a>
                </div>

                <div class="navigation__submenu">
                    Referenzen<br />
                    Referenzen<br />
                    Referenzen<br />
                    Referenzen<br />
                    Referenzen
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Karriere</a>
                </div>

                <div class="navigation__submenu">
                    Karriere<br />
                    Karriere<br />
                    Karriere<br />
                    Karriere<br />
                    Karriere
                </div>
            </li>
            <li class="navigation__item">
                <div class="navigation__link navigation__link--arrow">
                    <a href="#">Unternehmen</a>
                </div>

                <div class="navigation__submenu">
                    Unternehmen<br />
                    Unternehmen<br />
                    Unternehmen<br />
                    Unternehmen<br />
                    Unternehmen
                </div>
            </li>
        </ul>
            
        <div class="navigation__login">
            <a href="#"><img src="/assets/images/icons_svg/impact.svg" alt="" width="32" /></a>
        </div>
    </div>
</nav>

<div class="navigation-spacer"></div>