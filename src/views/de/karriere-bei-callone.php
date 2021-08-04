<?php
$jobs = jobs_load();
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Da bist du ja – du fehlst bei uns!</h1>

            <div class="btn-set">
                <a class="btn btn--primary trackedElement" href="#jobs">Offene Stellen <?php if (!empty($jobs)) {?><span class="btn__notification"><?= count($jobs); ?></span><?php } ?></a>
                <a class="btn btn--secondary trackedElement" data-openmodal="application" data-modaldata='{"issue": "Allgemeine Bewerbung"}' data-label="Button TopHeader - 10 Sekunden Bewerbung" data-category="Link" data-action="Show 10 Sekunden Bewerbung Modal">Jetzt bewerben</a>
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
            <div class="grid__col grid__col--12-xs grid__col--6-sm">
                <img src="/assets/images/illus/costumer-support-negative-illustration.svg" alt="" />
                <h2>Wir alle wissen es: Kundenhotlines sind die Hölle</h2>
                <p>Kein Mensch, der den Support anrufen muss, liebt es. Lange Warteschleifen, Inkompetenz, Unfreundlichkeit, Zeitverschwendung, nichts als Ärger, Problem nicht gelöst. Das geht besser.</p>
            </div>
            <div class="grid__col grid__col--12-xs grid__col--6-sm">
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
            <div class="cards__card cards__card--3 centered">
                <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                <h3>Bonbons gefällig?</h3>
                <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
            </div>
            <div class="cards__card cards__card--3 centered">
                <img src="/assets/images/icons_svg/work-life-balance.svg" alt="" />
                <h3>Wachse an dir</h3>
                <p>Du gestaltest deinen Job, mit deiner Erfahrung, deinen Stärken, Ideen und Vorlieben. Wir fördern dich mit allem, was du dazu brauchst und entwerfen deinen perfekten Job, inklusive Arbeitsumfeld und Life-Balance.</p>
            </div>
            <div class="cards__card cards__card--3 centered">
                <img src="/assets/images/icons_svg/onboarding.svg" alt="" />
                <h3>Wir leben Innovation</h3>
                <p>Wir gestalten und setzen um, was Sinn macht. Am liebsten, wenn es etwas noch nicht gibt. Unsere Produkte sind immer einen Herzschlag voraus, wir setzen die Maßstäbe im Bereich Kundenkommunikation.</p>
            </div>
            <div class="cards__card cards__card--3 centered">
                <img src="/assets/images/icons_svg/impact.svg" alt="" />
                <h3>Positiver Impact</h3>
                <p>Mit deiner Arbeit hast du einen positiven Einfluss auf Millionen von Menschen. Unser Ansatz, Kundenservice neu zu definieren, gestaltet die Telekommunikationsindustrie maßgeblich mit. Dein Beitrag hat echte, sinnvolle Auswirkungen.</p>
            </div>
            <div class="cards__card cards__card--3 centered">
                <img src="/assets/images/icons_svg/goals.svg" alt="" />
                <h3>Kein Lari-Fari</h3>
                <p>Was du tust, vergammelt nicht in einer Schublade, sondern kommt zum Einsatz. Mit Anspruch und neuen Herausforderungen wird dir nie langweilig. Deine Kolleg*innen sind immer für dich da, mit Inspiration, Motivation und positiven Vibes.</p>
            </div>
            <div class="cards__card cards__card--3 centered">
                <img src="/assets/images/icons_svg/weiterbildung.svg" alt="" />
                <h3>Support</h3>
                <p>Dein Gehirn ist unser aller Gewinn. Deshalb spielen wir dir regelmäßig Updates auf, in Form von Konferenzen, Workshops, Kursen, Trainings, neuster Tecknik – was immer du brauchst, um deine grauen Zellen glücklich zu machen.</p>
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
                            <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata='{"contactperson": "Charlotta"}'>Termin buchen</a>
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
                            <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata='{"contactperson": "Max"}'>Termin buchen</a>
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
                            <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata='{"contactperson": "Helge"}'>Termin buchen</a>
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
                <p>
                    <a href="#" class="btn btn--secondary btn--centered">Offene Stellen <?php if (!empty($jobs)) {?><span class="btn__notification"><?= count($jobs); ?></span><?php } ?></a>
                </p>

                <p><img src="/assets/images/photos/location-office.png" alt="" /></p>
            </div>

            <div class="tablist__content" data-tab="2">
                <h2 class="centered">Dort arbeiten, wo du dich am wohlsten fühlst</h2>
                <p class="centered">Wir schätzen den persönlichen Kontakt mit dir im Büro, sind aber auch Profis in virtueller Zusammenarbeit. Was zählt, ist gutes Teamwork und dass unsere Kund*innen zufrieden sind. Wo immer du am produktivsten bist, ist uns recht.</p>
                <p>
                    <a href="#" class="btn btn--secondary btn--centered">Offene Stellen <?php if (!empty($jobs)) {?><span class="btn__notification"><?= count($jobs); ?></span><?php } ?></a>
                </p>
                <p><img src="/assets/images/photos/location-homeoffice.png" alt="" /></p>
            </div>
        </div>
    </div>
</div>

<div class="section section--black" id="bewerbung">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Dein Weg zu uns</h1>
        <p class="centered">Egal, auf welchem Wege unser erster Kontakt mit dir zustande kommt, wir mögen Transparenz und klare Kommunikation:</p>

        <div class="step-slider step-slider--on-black">
            <div class="step-slider__steps">
                <div class="step-slider__step step-slider__step--no-number step-slider__step--active">
                    <p><img src="/assets/images/icons_svg/first-call-white.svg" data-alt-image="/assets/images/icons_svg/first-call-black.svg" alt="" /></p>
                    <h2>Erster Call</h2>
                    <p>In einem kurzen Telefoninterview besprechen wir ein paar Eckpunkte unserer Zusammenarbeit.</p>
                </div>
                <div class="step-slider__step step-slider__step--no-number">
                    <p><img src="/assets/images/icons_svg/meeting-white.svg" data-alt-image="/assets/images/icons_svg/meeting-black.svg" alt="" /></p>
                    <h2>Persönliches Kennenlernen</h2>
                    <p>Lerne zwei Mitglieder unseres Teams kennen und wir zeigen uns gegenseitig, was wir draufhaben.</p>
                </div>
                <div class="step-slider__step step-slider__step--no-number">
                    <p><img src="/assets/images/icons_svg/team-white.svg" data-alt-image="/assets/images/icons_svg/team-black.svg" alt="" /></p>
                    <h2>Triff das Team</h2>
                    <p>Jetzt wird’s spannend. Du lernst deine engsten Kolleginnen und Kollegen kennen.</p>
                </div>
                <div class="step-slider__step step-slider__step--no-number">
                    <p><img src="/assets/images/icons_svg/workplace-white.svg" data-alt-image="/assets/images/icons_svg/workplace-black.svg" alt="" /></p>
                    <h2>Dein Start bei uns</h2>
                    <p>Vertrag ist unterschrieben? Los geht’s. Wir nehmen uns Zeit für dich und arbeiten dich umfassend ein.</p>
                </div>
            </div>
            <div class="step-slider__slider">
                <div class="step-slider__range">
                    <div class="step-slider__handle"></div>
                </div>
            </div>
            <div class="step-slider__hint">
                <div class="step-slider__hint-left">
                    Erster Call
                </div>
                <div class="step-slider__hint-center">
                    <strong>Hinweis:</strong> Ziehen Sie den Schieberegler über den Zeitstrahl um alle Schritte zu sehen.
                </div>
                <div class="step-slider__hint-right">
                    Dein Start bei uns
                </div>
            </div>
        </div>

        <div class="fade-box fade-box--on-black">
            <h2 class="centered">Ansprechpartnerin</h2>
            <p class="centered">Falls du Fragen zum Stand deiner Bewerbung hast oder auch schon im Vorfeld zu den offenen Stellen, dann melde dich gern direkt bei Stefanie.</p>

            <div class="person">
                <div class="person__avatar">
                    <img src="/assets/images/photos/stefanie-bending-round-sm.png" alt="" />
                </div>
                <div class="person__details">
                    <h4>Stefanie Bendig</h4>
                    <p>Personalabteilung</p>
                </div>
            </div>

            <p>
                <a href="#" class="btn btn--border-white btn--centered" data-openmodal="application">Jetzt bewerben</a>
            </p>

            <div class="grid centered">
                <div class="grid__col grid__col--6-lg">
                    <h4>E-Mail</h4>
                    <a href="mailto:jobs@callone.de">jobs@callone.de</a>
                </div>
                <div class="grid__col grid__col--6-lg">
                    <h4>Anruf</h4>
                    <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Fragen und Antworten</h1>

        <div class="toggle-box">
            <input type="checkbox" id="faq-1" />
            <label for="faq-1">Wie läuft der Bewerbungsprozess bei CallOne ab?</label>
            <div class="toggle-box__content">
                <p>Nachdem wir uns deine Bewerbungsunterlagen angeschaut haben, melden wir uns zeitnah bei dir für ein kurzes Telefonat. Im Anschluss laden wir dich zu einem persönlichen Kennenlernen in unser Büro ein, wo du einen ersten Eindruck deiner Arbeitsumgebung und vom Team bekommst. Die nächsten Schritte sprechen wir dann recht individuell mit dir ab. Vielleicht möchtest du ja zum Beispiel einmal einen Tag die Arbeit bei uns im Detail kennenlernen.</p>
            </div>
        </div>
        <div class="toggle-box">
            <input type="checkbox" id="faq-2" />
            <label for="faq-2">Wie läuft die Einarbeitung ab?</label>
            <div class="toggle-box__content">
                <p>Wir erstellen für dich einen Einarbeitungsplan mit verschiedenen Stationen und Themengebieten, die für dich relevant sind. Du lernst deine Kolleginnen und Kollegen näher kennen und du wirst viel von ihrem Produktwissen profitieren. Eine gute Einarbeitung lebt davon, dass es keine Scheu gibt Fragen zu stellen. Von Anfang an bist du bei den Teammeetings, Produktschulungen und Kundenmeetings dabei und lernst on-the-job.</p>
            </div>
        </div>
        <div class="toggle-box">
            <input type="checkbox" id="faq-3" />
            <label for="faq-3">Welches Bewerbungsformat bevorzugt ihr?</label>
            <div class="toggle-box__content">
                <p>Wir bevorzugen kein bestimmtes Bewerbungsformat. Ein Lebenslauf mit kurzem Anschreiben ist für uns aber ein Muss, um uns einen ersten Eindruck verschaffen zu können.</p>
            </div>
        </div>
        <div class="toggle-box">
            <input type="checkbox" id="faq-4" />
            <label for="faq-4">Welche Sprachen sollte ich bei CallOne beherrschen?</label>
            <div class="toggle-box__content">
                <p>Sehr gute Deutsch- und gute Englischkenntnisse sorgen dafür, dass die Kommunikation mit unseren Kundinnen und Kunden reibungslos läuft.</p>
            </div>
        </div>
        <div class="toggle-box">
            <input type="checkbox" id="faq-5" />
            <label for="faq-5">Was erwartet mich beim Telefon- oder Teams-Interview?</label>
            <div class="toggle-box__content">
                <p>Telefoninterviews dienen nur dazu, sich einen ersten Eindruck vom Gegenüber zu machen. Wir erzählen dir etwas zu CallOne und der offenen Stelle und du kannst dich kurz vorstellen und deine Fragen klären. Dann vereinbaren wir aber auch schnell einen Termin für ein persönliches Kennenlernen, aktuell via MS Teams.</p>
            </div>
        </div>
        <div class="toggle-box">
            <input type="checkbox" id="faq-6" />
            <label for="faq-6">Bietet CallOne Trainings und Fortbildungen an?</label>
            <div class="toggle-box__content">
                <p>Auf jeden Fall! Lass uns gern darüber sprechen, in welchen Bereichen du dich gerne fortbilden und du dein Wissen erweitern möchtest.</p>
            </div>
        </div>
        <div class="toggle-box">
            <input type="checkbox" id="faq-7" />
            <label for="faq-7">Kann ich mich bei CallOne auch initiativ bewerben?</label>
            <div class="toggle-box__content">
                <p>Sehr gerne. Bei uns gibt es viele Quereinsteiger*innen und Allrounder*innen. wir finden sicher eine passende Stelle für dich.</p>
            </div>
        </div>
    </div>
</div>