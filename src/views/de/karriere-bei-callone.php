<?php
$jobs = jobs_load();
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Da bist du ja – du fehlst bei uns!</h1>

            <div class="btn-set">
                <a class="btn btn--primary trackedElement" href="#jobs">Offene Stellen <?php if (!empty($jobs)) {?><span class="btn__notification"><?= count($jobs); ?></span><?php } ?></a>
                <a class="btn btn--secondary trackedElement" data-openmodal="10s-application" data-label="Button TopHeader - 10 Sekunden Bewerbung" data-category="Link" data-action="Show 10 Sekunden Bewerbung Modal">Jetzt bewerben</a>
            </div>
        </div>
        <div class="hero__image animation animation-bg lazyBackground karriere">
            <div id="lottie" class="job"></div>
            <script>jsFiles.push("/assets/animations/svg/karriere.js");</script>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Was interessiert dich?
        </div>
        <div class="anchors__links">
            <a href="#unsere-arbeit">Unsere Arbeit</a>
            <a href="#vorteile">Vorteile</a>
            <a href="#menschen">Menschen</a>
            <a href="#arbeitsplatz">Arbeitsplatz</a>
            <a href="#bewerbung">Bewerbung</a>
        </div>
    </div>
</div>

<div class="section section--light-grey-green" id="unsere-arbeit">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Gestatten, CallOne:</h1>

        <p class="centered">
            Kein Callcenter, sondern IT-Unternehmen mit einem wertschätzenden Team, das Business-Telefonie neu denkt – mit hochqualitativen Lösungen und Sinn dahinter. Du gestaltest aktiv deinen Beitrag dazu, mit allem, was du am besten kannst.<br />
            Über deinen neuen Job wirst du dich jeden Tag freuen. Denn hier kannst du dein Potenzial entfalten, Dinge entwickeln, die es noch gar nicht gibt und einen positiven Unterschied im Leben vieler Menschen machen.
        </p>

        <p>
            <a href="#" class="btn btn--secondary btn--centered">Offene Stellen <?php if (!empty($jobs)) {?><span class="btn__notification"><?= count($jobs); ?></span><?php } ?></a>
        </p>
    </div>
    <div class="section__content section__content--wide">
        <div class="cards">
        <div class="cards__card cards__card--3">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
            <div class="cards__card cards__card--3">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
            <div class="cards__card cards__card--3">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
            <div class="cards__card cards__card--3">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
            <div class="cards__card cards__card--3">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
            <div class="cards__card cards__card--3">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
        </div>
    </div>
</div>

<div class="section" id="vorteile">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Deinen Traumjob gestaltest du selbst</h1>

        <p class="centered">Hier kommt dein Job mit Sinn, Substanz und Wochenende. Als mittelständisches Potsdamer IT-Unternehmen mit Anti-Bullshit-Philosophie sind wir etabliert, zukunftsorientiert, unabhängig und krisensicher. Nicht Hype, sondern Happiness zählt. Du entscheidest, was du dafür brauchst.</p>

        <p>
            <a href="#" class="btn btn--primary btn--centered">Offene Stellen <?php if (!empty($jobs)) {?><span class="btn__notification"><?= count($jobs); ?></span><?php } ?></a>
        </p>
    </div>
</div>

<div class="section section--dark-green-black" id="menschen">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Ein Team, das hinter dir steht</h1>

        <p class="centered">Mit Humor, Persönlichkeit, verschiedensten Hintergründen, Fähigkeiten und Interessen arbeiten wir stark zusammen.</p>
    </div>
</div>

<div class="section section--light-green-white" id="arbeitsplatz">
    <div class="section__content section__content--narrow">
        <h1 class="centered">
            Potsdam-City oder <br />
            von zuhause – wie du magst
        </h1>
    </div>
</div>

<div class="section section--black" id="bewerbung">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Dein Weg zu uns</h1>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Fragen und Antworten</h1>
    </div>
</div>