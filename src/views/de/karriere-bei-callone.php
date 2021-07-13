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

    <div class="section__content section__content--wide section__content--gutter-top">
        <div class="grid centered">
            <div class="grid__col--6-lg grid__col--2-md">
                <img src="/assets/images/illus/costumer-support-negative-illustration.svg" alt="" />
                <h2>Wir alle wissen es: Kundenhotlines sind die Hölle</h2>
                <p>Kein Mensch, der den Support anrufen muss, liebt es. Lange Warteschleifen, Inkompetenz, Unfreundlichkeit, Zeitverschwendung, nichts als Ärger, Problem nicht gelöst. Das geht besser.</p>
            </div>
            <div class="grid__col--6 lg grid__col--8-md">
                <img src="/assets/images/illus/costumer-support-positive-illustration.svg" alt="" />
                <h2>Mit CallOne macht Kundenservice das erste Mal Spaß</h2>
                <p>Mit Technologien aus der Zukunft geben wir Kunden wesentlich bessere, zielführende Supporterlebnisse. Jeder Anruf wird kürzer, angenehmer und lösungsorientierter. Und man legt mit einem Lächeln auf.</p>
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

    <div class="section__content section__content--wide section__content--gutter-top">
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

<div class="section section--dark-green-black" id="menschen">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Ein Team, das hinter dir steht</h1>

        <p class="centered">Mit Humor, Persönlichkeit, verschiedensten Hintergründen, Fähigkeiten und Interessen arbeiten wir stark zusammen.</p>
    </div>

    <div class="section__content section__content--wide section__content--gutter-top">
        <div class="team">
            <div class="team__header">
                <p>Menschen bei CallOne</p>
                <div class="team__buttons">
                    <div class="team__button team__button--active" data-member="1">
                        <img src="https://picsum.photos/seed/avatar/200" alt="" />
                    </div>
                    <div class="team__button" data-member="2">
                        <img src="https://picsum.photos/seed/team2/200" alt="" />
                    </div>
                    <div class="team__button" data-member="3">
                        <img src="https://picsum.photos/seed/team3/200" alt="" />
                    </div>
                </div>
            </div>
            <div class="team__content">
            <div class="team__member team__member--active" data-member="1">
                    <div class="team__member-left">
                        <blockquote>„CallOne bietet mir viel Freiraum in meinem Job: Ich kann mich jederzeit einbringen und meine Ideen finden Gehör. Weiterbildung ist ausdrücklich erwünscht: Zurzeit lerne ich Programmieren und ein Kollege hilft mir dabei.”</blockquote>
                        <h6>
                            <strong>Charlotta Barth</strong><br />
                            Projektmanagerin
                        </h6>

                        <div class="team__member-booking">
                            <h3>Lust mehr über CallOne zu erfahren?</h3>
                            <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Charlotta</u>.</p>
                            <a href="#" class="btn btn--border-white">Termin buchen</a>
                        </div>
                    </div>
                    <div class="team__member-right">
                        <div class="team__member-image">
                            <img src="https://picsum.photos/seed/avatar/368/510" alt="" />
                        </div>
                        <div class="team__member-agenda" data-openmodal="agenda-projektmanager">
                            <strong>Tagesagenda</strong><br />
                            Projektmanagerin
                        </div>
                    </div>
                </div>

                <div class="team__member" data-member="2">
                    <div class="team__member-left">
                        <blockquote>„CallOne bietet mir viel Freiraum in meinem Job: Ich kann mich jederzeit einbringen und meine Ideen finden Gehör. Weiterbildung ist ausdrücklich erwünscht: Zurzeit lerne ich Programmieren und ein Kollege hilft mir dabei.”</blockquote>
                        <h6>
                            <strong>Max Mustermann</strong><br />
                            Frontend-Entwickler
                        </h6>

                        <div class="team__member-booking">
                            <h3>Lust mehr über CallOne zu erfahren?</h3>
                            <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Max</u>.</p>
                            <a href="#" class="btn btn--border-white">Termin buchen</a>
                        </div>
                    </div>
                    <div class="team__member-right">
                        <div class="team__member-image">
                            <img src="https://picsum.photos/seed/team2/368/510" alt="" />
                        </div>
                        <div class="team__member-agenda" data-openmodal="agenda-projektmanager">
                            <strong>Tagesagenda</strong><br />
                            Frontend-Entwickler
                        </div>
                    </div>
                </div>

                <div class="team__member" data-member="3">
                    <div class="team__member-left">
                        <blockquote>„CallOne bietet mir viel Freiraum in meinem Job: Ich kann mich jederzeit einbringen und meine Ideen finden Gehör. Weiterbildung ist ausdrücklich erwünscht: Zurzeit lerne ich Programmieren und ein Kollege hilft mir dabei.”</blockquote>
                        <h6>
                            <strong>Helge Schneider</strong><br />
                            Komiker / Sänger
                        </h6>

                        <div class="team__member-booking">
                            <h3>Lust mehr über CallOne zu erfahren?</h3>
                            <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Helge</u>.</p>
                            <a href="#" class="btn btn--border-white">Termin buchen</a>
                        </div>
                    </div>
                    <div class="team__member-right">
                        <div class="team__member-image">
                            <img src="https://picsum.photos/seed/team3/368/510" alt="" />
                        </div>
                        <div class="team__member-agenda" data-openmodal="agenda-projektmanager">
                            <strong>Tagesagenda</strong><br />
                            Komiker / Sänger
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green-white-map" id="arbeitsplatz">
    <div class="section__content section__content--narrow">
        <h1 class="centered">
            Potsdam-City oder <br />
            von zuhause – wie du magst
        </h1>

        <div class="tablist">
            <div class="tablist__links">
                <div class="tablist__link tablist__link--active" data-tab="1">
                    <strong>Office</strong><br />
                    <span class="icon-location">Potsdam</span>
                </div>
                <div class="tablist__link" data-tab="2">
                    <strong>Remote</strong><br />
                    <span class="icon-home">Lieblingsort</span>
                </div>
            </div>

            <div class="tablist__content tablist__content--active" data-tab="1">
                <h2 class="centered">Dort arbeiten, wo es schön ist</h2>
                <p class="centered">Wir lieben Potsdam und unser Büro ist direkt in der Innenstadt. Kurze Wege, gute Erreichbarkeit, ein leckeres Mittagessen, mal kurz ans Wasser oder zwischendurch einen kleinen Einkauf erledigen? Alles vor der Haustür.</p>
            </div>

            <div class="tablist__content" data-tab="2">
                <h2 class="centered">Headline</h2>
                <p class="centered">Text</p>
            </div>
        </div>
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