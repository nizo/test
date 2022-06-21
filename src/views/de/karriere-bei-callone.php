<?php
$jobs = jobs_load();
$jobsCount = count($jobs->jobs_get());
$jobs_benefits = jobs_benefits_load ();

$faqs = new faqs ();
$faqs->faq_add (
    'Wie läuft der Bewerbungsprozess bei CallOne ab?',
    '<p>Nachdem wir uns deine Bewerbungsunterlagen angeschaut haben, melden wir uns zeitnah bei dir für ein kurzes Telefonat. Im Anschluss laden wir dich zu einem persönlichen Kennenlernen in unser Büro ein, wo du einen ersten Eindruck deiner Arbeitsumgebung und vom Team bekommst. Die nächsten Schritte sprechen wir dann recht individuell mit dir ab. Vielleicht möchtest du ja zum Beispiel einmal einen Tag die Arbeit bei uns im Detail kennenlernen.</p>'
);
$faqs->faq_add (
    'Wie läuft die Einarbeitung ab?',
    '<p>Wir erstellen für dich einen Einarbeitungsplan mit verschiedenen Stationen und Themengebieten, die für dich relevant sind. Du lernst deine Kolleg*innen näher kennen und du wirst viel von ihrem Produktwissen profitieren. Eine gute Einarbeitung lebt davon, dass es keine Scheu gibt Fragen zu stellen. Von Anfang an bist du bei den Teammeetings, Produktschulungen und Kundenmeetings dabei und lernst on-the-job.</p>'
);
$faqs->faq_add (
    'Welches Bewerbungsformat bevorzugt ihr?',
    '<p>Wir bevorzugen kein bestimmtes Bewerbungsformat. Ein Lebenslauf mit kurzem Anschreiben ist für uns aber ein Muss, um uns einen ersten Eindruck verschaffen zu können.</p>'
);
$faqs->faq_add (
    'Welche Sprachen sollte ich bei CallOne beherrschen?',
    '<p>Sehr gute Deutsch- und gute Englischkenntnisse sorgen dafür, dass die Kommunikation mit unseren Kund*innen reibungslos läuft.</p>'
);
$faqs->faq_add (
    'Was erwartet mich beim Telefon- oder Teams-Interview?',
    '<p>Telefoninterviews dienen nur dazu, sich einen ersten Eindruck vom Gegenüber zu machen. Wir erzählen dir etwas zu CallOne und der offenen Stelle und du kannst dich kurz vorstellen und deine Fragen klären. Dann vereinbaren wir aber auch schnell einen Termin für ein persönliches Kennenlernen, aktuell via MS Teams.</p>'
);
$faqs->faq_add (
    'Bietet CallOne Trainings und Fortbildungen an?',
    '<p>Auf jeden Fall! Lass uns gern darüber sprechen, in welchen Bereichen du dich gerne fortbilden und du dein Wissen erweitern möchtest.</p>'
);
$faqs->faq_add (
    'Kann ich mich bei CallOne auch initiativ bewerben?',
    '<p>Sehr gerne. Bei uns gibt es viele Quereinsteiger*innen und Allrounder*innen. wir finden sicher eine passende Stelle für dich.</p>'
);
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Da bist du ja – du fehlst bei uns!</h1>
            <h2>Gestatten, CallOne: IT-Unternehmen, das Kommunikationsplattformen für bessere Kundenbeziehungen entwickelt.</h2>

            <div class="btn-set btn-set--centered">
                <a class="btn btn--primary btn--nowrap btn--notification trackedElement" href="/karriere" data-notification="<?php if (!empty($jobs)) { echo $jobsCount; } ?>">Offene Stellen</a>
                <a class="btn btn--secondary btn--nowrap trackedElement" data-openmodal="application" data-label="Button TopHeader - 10 Sekunden Bewerbung" data-category="Link" data-action="Show 10 Sekunden Bewerbung Modal">Jetzt bewerben</a>
            </div>
        </div>
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/Karriere560.gif',
                'Karriere und Jobs bei CallOne',
                465, 421, [], false
            ); ?>
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
        <h2 class="centered mobile-left">Das ist CallOne</h2>

        <p class="centered mobile-left">
            Wir sind ein wertschätzendes Team, das Business-Kommunikation neu denkt - mit hochqualitativen Lösungen und Sinn dahinter. Du gestaltest aktiv deinen Beitrag dazu, mit allem, was du am besten kannst.<br />
            <br />
            Über deinen neuen Job wirst du dich jeden Tag freuen. Denn hier kannst du dein Potenzial entfalten, Dinge entwickeln, die es noch gar nicht gibt und einen positiven Unterschied im Leben vieler Menschen machen.​
        </p>

        <p>
            <a href="/karriere" class="btn btn--secondary btn--centered btn--notification" data-notification="<?php if (!empty($jobs)) { echo $jobsCount; } ?>">Offene Stellen</a>
        </p>
    </div>

    <div class="section__content section__content--wide section__content--gutter-top">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/illus/costumer-support-negative-illustration.svg',
                        'Kundenservice verbessern',
                        185, 149
                    ); ?>
                </p>
                <h2 class="centered mobile-left">Wir alle wissen es: <br />Kundenhotlines sind die Hölle</h2>
                <p class="centered mobile-left">Kein Mensch, der den Support anrufen muss, liebt es. Lange Warteschleifen, Inkompetenz, Unfreundlichkeit, Zeitverschwendung, nichts als Ärger, Problem nicht gelöst. Das geht besser &ndash; mit Software von CallOne.</p>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
                <p class="centered">
                    <?= pictureTag(
                        '/assets/images/illus/costumer-support-positive-illustration.svg',
                        'Guter Kundenservice',
                        184, 151
                    ); ?>
                </p>
                <h2 class="centered mobile-left">Kundenservice <br />mit WOW-Effekt</h2>
                <p class="centered mobile-left">Mit Technologien aus der Zukunft geben wir Kunden wesentlich bessere, zielführende Supporterlebnisse. Jeder Anruf wird kürzer, angenehmer und lösungsorientierter. Und man legt mit einem Lächeln auf.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section--overflow-protection" id="vorteile">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Deinen Traumjob gestaltest du selbst</h2>

        <p class="centered mobile-left">Hier kommt dein Job mit Sinn, Substanz und Wochenende. Als mittelständisches Potsdamer IT-Unternehmen mit Anti-Bullshit-Philosophie sind wir etabliert, zukunftsorientiert, unabhängig und krisensicher. Nicht Hype, sondern Happiness zählt. Du entscheidest, was du dafür brauchst.</p>

        <p>
            <a href="/karriere" class="btn btn--primary btn--centered btn--notification" data-notification="<?php if (!empty($jobs)) { echo $jobsCount; } ?>">Offene Stellen</a>
        </p>
    </div>

    <div class="section__content section__content--wide section__content--gutter-top">
        <div class="cards mobile-hidden">
            <?php
            foreach ($jobs_benefits as $benefit) {
                echo '<div class="cards__card cards__card--3 centered">';
                echo pictureTag(
                    $benefit->icon_get(),
                    'Benefits und Vorteile Arbeiten bei CallOne',
                    70, 70
                );
                echo '<h3>'.$benefit->title_get().'</h3>';
                echo '<p>'.$benefit->text_get().'</p>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="step-slider centered desktop-hidden">
            <div class="step-slider__steps">
                <?php
                foreach ($jobs_benefits as $key => $benefit) {
                    $extraClass = '';
                    if ($key == 0)
                        $extraClass = ' step-slider__step--active';
                    echo '<div class="step-slider__step step-slider__step--no-number'.$extraClass.'">';
                    echo pictureTag(
                        $benefit->icon_get(),
                        'toller Job bei CallOne',
                        null, null, [
                            'data-alt-image' => $benefit->alt_icon_get()
                        ]
                    );
                    echo '<h3>'.$benefit->title_get().'</h3>';
                    echo '<p>'.$benefit->text_get().'</p>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="step-slider__slider">
                <div class="step-slider__range">
                    <div class="step-slider__handle"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--dark-green-black" id="menschen">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Ein Team, das hinter dir steht</h2>

        <p class="centered mobile-left">Mit Humor, Persönlichkeit, verschiedensten Hintergründen, Fähigkeiten und Interessen arbeiten wir stark zusammen.</p>
    </div>

    <div class="section__content section__content--wide section__content--gutter-top">
        <div class="team">
            <div class="team__header">
                <p>Menschen bei CallOne</p>
                <div class="team__buttons">
                    <div class="team__button team__button--active" data-member="1" data-name="Charlotta">
                        <?= pictureTag(
                            '/assets/images/photos/charlotta-portrait.jpg',
                            'Charlotta',
                            70, 70
                        ); ?>
                    </div>
                    <div class="team__button" data-member="2" data-name="Brian">
                        <?= pictureTag(
                            '/assets/images/photos/brian-portrait.jpg',
                            'Brian',
                            70, 70
                        ); ?>
                    </div>
                    <div class="team__button" data-member="3" data-name="Stefanie">
                        <?= pictureTag(
                            '/assets/images/photos/stefanie-portrait.jpg',
                            'Stefanie',
                            70, 70
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="team__content">
                <div class="team__member team__member--active" data-member="1">
                    <div class="team__member-left">
                        <blockquote class="quote">„CallOne bietet mir viel Freiraum in meinem Job: Ich kann mich jederzeit einbringen und meine Ideen finden Gehör. Weiterbildung ist ausdrücklich erwünscht: Zurzeit lerne ich Programmieren und ein Kollege hilft mir dabei.”</blockquote>
                        <p>
                            <strong>Charlotta</strong><br />
                            Projektmanagerin
                        </p>

                        <div class="team__member-booking">
                            <h3>Lust mehr über CallOne zu erfahren?</h3>
                            <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Charlotta</u>.</p>
                            <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata="<?= base64_encode('{"contactperson": "Charlotta"}'); ?>">Termin buchen</a>
                        </div>
                    </div>
                    <div class="team__member-right">
                        <div class="team__member-image">
                            <?= pictureTag(
                                '/assets/images/photos/charlotta-stehend.jpg',
                                'Charlotta',
                                368, 555
                            ); ?>
                        </div>
                        <div class="team__member-agenda" data-openmodal="agenda-projektmanager">
                            <strong>Tagesagenda</strong><br />
                            Projektmanagerin
                        </div>
                    </div>
                </div>

                <div class="team__member" data-member="2">
                    <div class="team__member-left">
                        <blockquote class="quote">„24/7 Verfügbarkeit unserer Systeme, dabei keine Überstunden und normale Arbeitszeiten. Neuste IT-Technologien wie Voice Recognition nutzen und sich kreative Lösungen für Kunden überlegen. IT - aber ohne Startup Feeling.”</blockquote>
                        <p>
                            <strong>Brian</strong><br />
                            IT & Technik
                        </p>

                        <div class="team__member-booking">
                            <h3>Lust mehr über CallOne zu erfahren?</h3>
                            <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Brian</u>.</p>
                            <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata="<?= base64_encode('{"contactperson": "Brian"}'); ?>">Termin buchen</a>
                        </div>
                    </div>
                    <div class="team__member-right">
                        <div class="team__member-image">
                            <?= pictureTag(
                                '/assets/images/photos/brian-stehend.jpg',
                                'Brian',
                                368, 555
                            ); ?>
                        </div>
                        <div class="team__member-agenda" data-openmodal="agenda-it-technik">
                            <strong>Tagesagenda</strong><br />
                            IT & Technik
                        </div>
                    </div>
                </div>

                <div class="team__member" data-member="3">
                    <div class="team__member-left">
                        <blockquote class="quote">„Das Schöne an CallOne ist der starke Zusammenhalt im Team. Innerhalb kürzester Zeit kann man viel bewegen und sich dabei selbst entfalten. Das schätze ich.”</blockquote>
                        <p>
                            <strong>Stefanie</strong><br />
                            Human Resources
                        </p>

                        <div class="team__member-booking">
                            <h3>Lust mehr über CallOne zu erfahren?</h3>
                            <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Stefanie</u>.</p>
                            <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata="<?= base64_encode('{"contactperson": "Stefanie"}'); ?>">Termin buchen</a>
                        </div>
                    </div>
                    <div class="team__member-right">
                        <div class="team__member-image">
                            <?= pictureTag(
                                '/assets/images/photos/stefanie-stehend.jpg',
                                'Stefanie',
                                368, 555
                            ); ?>
                        </div>
                        <div class="team__member-agenda" data-openmodal="agenda-human-ressources">
                            <strong>Tagesagenda</strong><br />
                            Human Resources
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green-white-homeoffice" id="arbeitsplatz">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">
            Potsdam-City oder <br />
            von zuhause – wie du magst
        </h2>

        <div class="tablist">
            <div class="tablist__links">
                <div class="tablist__link tablist__link--active" data-tab="1" data-sticky-text="Office">
                    <strong>
                        Office<br />
                        <span class="icon-location">Potsdam</span>
                    </strong>
                </div>
                <div class="tablist__link" data-tab="2" data-sticky-text="Remote">
                    <strong>
                        Remote<br />
                        <span class="icon-home">Lieblingsort</span>
                    </strong>
                </div>
            </div>

            <div class="tablist__content tablist__content--active" data-tab="1">
                <h2 class="centered mobile-left">Dort arbeiten, <br />wo es schön ist</h2>
                <p class="centered mobile-left">Wir lieben Potsdam und unser Büro ist direkt in der Innenstadt. Kurze Wege, gute Erreichbarkeit, ein leckeres Mittagessen, mal kurz ans Wasser oder zwischendurch einen kleinen Einkauf erledigen? Alles vor der Haustür.</p>
                <p>
                    <a href="/karriere" class="btn btn--secondary btn--centered btn--notification" data-notification="<?php if (!empty($jobs)) { echo $jobsCount; } ?>">Offene Stellen</a>
                </p>

                <p>
                    <?= pictureTag(
                        '/assets/images/photos/location-office.png',
                        'Arbeiten in Potsdam',
                        1620, 908
                    ); ?>
                </p>
            </div>

            <div class="tablist__content" data-tab="2">
                <h2 class="centered mobile-left">Dort arbeiten, <br />wo du dich am wohlsten fühlst</h2>
                <p class="centered mobile-left">Wir schätzen den persönlichen Kontakt mit dir im Büro, <br />sind aber auch Profis in virtueller Zusammenarbeit. Was zählt, ist gutes Teamwork und dass unsere Kund*innen zufrieden sind.</p>
                <p>
                    <a href="/karriere" class="btn btn--secondary btn--centered btn--notification" data-notification="<?php if (!empty($jobs)) { echo $jobsCount; } ?>">Offene Stellen</a>
                </p>
                <p>
                    <?= pictureTag(
                        '/assets/images/photos/location-homeoffice.png',
                        'Arbeiten im Homeoffice',
                        770, 432
                    ); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section section--black section--overflow-protection" id="bewerbung">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Dein Weg zu uns</h2>
        <p class="centered mobile-left">Egal, auf welchem Wege unser erster Kontakt mit dir zustande kommt, wir mögen Transparenz und klare Kommunikation:</p>

        <div class="step-slider step-slider--on-black">
            <div class="step-slider__steps">
                <div class="step-slider__step step-slider__step--no-number step-slider__step--active">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/first-call-white.svg',
                            'Erstes Telefoninterview bei Bewerbung',
                            70, 70, [
                                'data-alt-image' => '/assets/images/icons_svg/first-call-black.svg'
                            ]
                        ); ?>
                    </p>
                    <h2>Erster Call</h2>
                    <p>In einem kurzen Telefoninterview besprechen wir ein paar Eckpunkte unserer Zusammenarbeit.</p>
                </div>
                <div class="step-slider__step step-slider__step--no-number">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/meeting-white.svg',
                            'Teammitglieder kennenlernen bei Bewerbung',
                            70, 70, [
                                'data-alt-image' => '/assets/images/icons_svg/meeting-black.svg'
                            ]
                        ); ?>
                    </p>
                    <h2>Kennenlernen</h2>
                    <p>Lerne zwei Mitglieder unseres Teams kennen und wir zeigen uns gegenseitig, was wir draufhaben.</p>
                </div>
                <div class="step-slider__step step-slider__step--no-number">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/team-white.svg',
                            'Team treffen und Arbeit kennenlernen bei Bewerbung',
                            70, 70, [
                                'data-alt-image' => '/assets/images/icons_svg/team-black.svg'
                            ]
                        ); ?>
                    </p>
                    <h2>Triff das Team</h2>
                    <p>Jetzt wird’s spannend. Du lernst deine engsten Kolleg*innen kennen.</p>
                </div>
                <div class="step-slider__step step-slider__step--no-number">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/workplace-white.svg',
                            'Bei CallOne arbeiten',
                            70, 70, [
                                'data-alt-image' => '/assets/images/icons_svg/workplace-black.svg'
                            ]
                        ); ?>
                    </p>
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
                    <strong>Hinweis:</strong> Bewege den Schieberegler über den Zeitstrahl
                </div>
                <div class="step-slider__hint-right">
                    Dein Start bei uns
                </div>
            </div>
        </div>

        <div class="fade-box fade-box--on-black">
            <h2 class="centered mobile-left">Ansprechpartnerin</h2>
            <p class="centered mobile-left">Falls du Fragen zum Stand deiner Bewerbung hast oder auch schon im Vorfeld zu den offenen Stellen, dann melde dich gern direkt bei Stefanie.</p>

            <div class="person">
                <div class="person__avatar">
                    <?= pictureTag(
                        '/assets/images/photos/stefanie-bending-round-sm.png',
                        'Stefanie Bendig Personalabteilung CallOne',
                        64, 65
                    ); ?>
                </div>
                <div class="person__details">
                    <h4>Stefanie Bendig</h4>
                    <p>Personalabteilung</p>
                </div>
            </div>

            <p>
                <a href="#" class="btn btn--border-white btn--centered" data-openmodal="application">Jetzt bewerben</a>
            </p>

            <div class="co-grid centered">
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
                    <h4>E-Mail</h4>
                    <a href="mailto:jobs@callone.de" class="trackedContactSubmit">jobs@callone.de</a>
                </div>
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
                    <h4>Anruf</h4>
                    <a href="tel:+493092033500" class="trackedContactSubmit">030 920 33 500</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Fragen und Antworten</h2>

        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ('toggle-box--on-black');
        ?>
    </div>
</div>