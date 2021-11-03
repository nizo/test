<?php
// Check if file is loaded from FAQ or blog
$isFaq = false;
$isBlog = false;
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, 0, 4) == '/faq') $isFaq = true;
if (substr($uri, 0, 5) == '/blog') $isBlog = true;
?>

<nav class="navigation">
    <div class="navigation__sublinks">
        <ul>
            <li>
                <a href="#">+49 (0) 30-920 33 500</a>
            </li>
            <li>
                <a href="#">Häufige Fragen</a>
            </li>
            <li>
                <a href="#">Preise</a>
            </li>
            <li>
                <a href="#">Unternehmen</a>
            </li>
            <li>
                <a href="#">Kontakt</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Login</a>
            </li>
        </ul>
    </div>

    <hr />

    <div class="navigation__mainlinks">
        <a href="/" class="navigation__logo" title="Zur Startseite von CallOne">
            <?php if(isChristmas()) : ?>
                <img src="/assets/images/logo/Logo-Christmas.svg" alt="Logo" title="CallOne Logo"/>
            <?php else : ?>
                <img src="/assets/images/logo/Logo.svg" alt="Logo" title="CallOne Logo"/>
            <?php endif; ?>
        </a>

        <ul>
            <li>
                <a href="#" class="navigation__mainlink navigation__mainlink--highlight">Call Center Software</a>
            </li>
            <li>
                <a href="#" class="navigation__mainlink navigation__mainlink--arrow">Produkte</a>

                <div class="navigation__submenu">
                    Test
                </div>
            </li>
            <li>
                <a href="#" class="navigation__mainlink navigation__mainlink--arrow">Integrationen</a>
            </li>
            <li>
                <a href="#" class="navigation__mainlink navigation__mainlink--arrow">Referenzen</a>
            </li>
            <li>
                <a href="#" class="navigation__mainlink navigation__mainlink--arrow">Karriere</a>
            </li>
        </ul>
    </div>
</nav>

<div class="navigation-spacer"></div>