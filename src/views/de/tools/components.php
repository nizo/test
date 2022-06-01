<div class="components">
    <h1>CallOne Components</h1>

    <!-- Table of Contents -->
    <div class="components__toc">
        <div class="components__toc-button">
            <span></span>
        </div>
    </div>

    <!-- Template -->
    <!-- <div class="components__item" id="id">
        <div class="components__docs">
            <h1><a href="#id">Title</a></h1>
            <p>Description</p>
        </div>
        <div class="components__preview">
            <div>
                HTML HERE
            </div>
        </div>
    </div> -->

    <!-- Agenda -->
    <div class="components__item" id="agenda">
        <div class="components__docs">
            <h1><a href="#agenda">Agenda</a></h1>
            <p>The agenda is mainly used inside modals.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="agenda">
                    <div class="agenda__title">Vormittag</div>

                    <div class="agenda__row">
                        <div class="agenda__col">
                            <div class="agenda__item agenda__item--cup">
                                Tasse Kaffee oder Tee
                            </div>
                            <div class="agenda__item agenda__item--green agenda__item--customer-support agenda__size--2">
                                Kunden-Support
                            </div>
                        </div>
                        <div class="agenda__col">
                            <div class="agenda__item agenda__item--blue agenda__item--exchange">
                                Daily Standup zur operativen Abstimmung
                            </div>
                        </div>
                    </div>

                    <div class="agenda__break">
                        <strong>Mittagspause</strong><br />
                        Gemeinsam als Team oder alleine
                    </div>

                    <div class="agenda__title">Nachmittag</div>

                    <div class="agenda__row">
                        <div class="agenda__col">
                            <div class="agenda__item agenda__item--red agenda__item--computer">
                                Anforderungen der Kunden planen und umsetzen
                            </div>
                            <div class="agenda__item agenda__item--blue agenda__item--exchange">
                                Schulung zu neuen Entwicklungstechniken
                            </div>
                            <div class="agenda__item agenda__item--red agenda__item--computer">
                                Unrerstützung der KollegInnen bei Firewallthemen
                            </div>
                        </div>
                        <div class="agenda__col">
                            <div class="agenda__item agenda__item--green agenda__item--customer-support">
                                Kunden-Support
                            </div>
                            <div class="agenda__item agenda__item--yellow agenda__item--exchange">
                                Kommunikation mit CallOne Lieferanten
                            </div>
                        </div>
                    </div>

                    <div class="agenda__legend">
                        <div class="agenda__info agenda__info--blue">Interne Kommunikation</div>
                        <div class="agenda__info agenda__info--green">Kundenkommunikation</div>
                        <div class="agenda__info agenda__info--red">Computer-Arbeit</div>
                        <div class="agenda__info agenda__info--yellow">Lieferantenkommunikation</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alterbox -->
    <div class="components__item" id="alertbox">
        <div class="components__docs">
            <h1><a href="#alertbox">Alertbox</a></h1>
            <p>A little alert box to show important information.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="alertbox alertbox--hint appointment-output">
                    01.01.1970<br />
                    <small>12:00 - 15:00</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Anchors -->
    <div class="components__item" id="anchors">
        <div class="components__docs">
            <h1><a href="#anchors">Anchor Buttons</a></h1>
            <p>A row of anchor buttons with title message for easy access of multiple sections on a page.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="anchors">
                    <div class="anchors__title">
                        <strong>Schnelleinstieg:</strong> Was interessiert dich?
                    </div>
                    <div class="anchors__links">
                        <a href="#anchor-1">Anchor 1</a>
                        <a href="#anchor-2">Anchor 2</a>
                        <a href="#anchor-3">Anchor 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Atomic Loader -->
    <div class="components__item" id="atomic-loader">
        <div class="components__docs">
            <h1><a href="#atomic-loader">Atomic Loader</a></h1>
            <p>Loading animation.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.atomic-loader--hidden</code>: Hides loader</li>
            </ul>
        </div>
        <div class="components__preview" style="background-color: black;">
            <div>
                <div class="atomic-loader">
                    <div class="atomic-loader__circle"></div>
                    <div class="atomic-loader__dots">
                        <div class="atomic-loader__dot"></div>
                        <div class="atomic-loader__dot"></div>
                        <div class="atomic-loader__dot"></div>
                        <div class="atomic-loader__dot"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <div class="components__item" id="buttons">
        <div class="components__docs">
            <h1><a href="#buttons">Buttons</a></h1>
            <p>We have multiple types of buttons and some modifiers that can change the overall behaviour of buttons.</p>
            <p><strong>Types:</strong></p>
            <ul>
                <li><code>.btn--primary</code>: Primary</li>
                <li><code>.btn--secondary</code>: Secondary</li>
                <li><code>.btn--cta</code>: Call-To-Action (Bigger)</li>
                <li><code>.btn--border-black</code>: Bordered Button</li>
                <li><code>.btn--border-white</code>: Bordered Button</li>
                <li><code>.btn--application</code>: Used as a button to open the application modal</li>
                <li><code>.btn--notification</code>: Combined with <code>data-notification</code> produces same as <code>.btn__notification</code> but position absolute, better for wrapping text inside buttons</li>
            </ul>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.btn--centered</code>: Centered</li>
                <li><code>.btn--full-width</code>: Full Width</li>
                <li><code>.btn--arrow-right</code>: Arrow Right</li>
                <li><code>.btn--nowrap</code>: No white-space wrapping</li>
            </ul>
            <p><strong>Optional:</strong></p>
            <ul>
                <li><code>.btn__notification</code>: Adds notification Bubble</li>
                <li><code>.btn-set</code>: Creates box with buttons besides each other</li>
                <li><code>.btn-set--centered</code>: Centeres buttons in button set</li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/stylesheets/scss/components/_buttons.scss</code></li>
            </ul>
        </div>
        <div class="components__preview" style="background-color: #ddd">
            <div>
                <a href="#" class="btn btn--primary">Button Primary</a>
                <a href="#" class="btn btn--secondary">Button Secondary</a>
                <a href="#" class="btn btn--cta">Button Call-To-Action</a>
                <a href="#" class="btn btn--border-black">Button Black Border</a>
                <a href="#" class="btn btn--border-white">Button White Border</a>
                <a href="#" class="btn btn--primary btn--centered">Centered</a>
                <a href="#" class="btn btn--primary btn--full-width">Full Width</a>
                <a href="#" class="btn btn--primary btn--arrow-right">Arrow Right</a>
                <a href="#" class="btn btn--primary">Jobs <span class="btn__notification">10</span></a>
                <a href="#" class="btn btn--application">
                    <strong>Application</strong><br />
                    Open Modal
                </a>

                <div class="btn-set">
                    <a href="#" class="btn btn--primary">Button Primary</a>
                    <a href="#" class="btn btn--secondary">Button Secondary</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <div class="components__item" id="calendar">
        <div class="components__docs">
            <h1><a href="#calendar">Calendar</a></h1>
            <p>The calendar is used inside modals eg. appointment booking. Code mainly generated by using PHP, please check the source of this file.</p>
        </div>
        <div class="components__preview">
            <div>
                <?php
                $weeks = [];
                $monday = strtotime(date('o-\WW'));
                $weeks[] = [
                    $monday,
                    strtotime('next tuesday', $monday),
                    strtotime('next wednesday', $monday),
                    strtotime('next thursday', $monday),
                    strtotime('next friday', $monday)
                ];
                $nextMonday = strtotime('next monday');
                $weeks[] = [
                    $nextMonday,
                    strtotime('next tuesday', $nextMonday),
                    strtotime('next wednesday', $nextMonday),
                    strtotime('next thursday', $nextMonday),
                    strtotime('next friday', $nextMonday)
                ]
                ?>

                <div class="calendar">
                    <?php
                    foreach ($weeks as $w) {
                        ?>
                        <div class="calendar__week">
                            <?php
                            foreach ($w as $d) {
                                $extraClass = "";
                                $today = strtotime("today"); // today
                                $past = false;
                                if ($d < $today) {
                                    $extraClass = " calendar__day--past";
                                    $past = true;
                                }
                                ?>
                                <div class="calendar__day<?= $extraClass; ?>">
                                    <div class="calendar__day-header">
                                        <h3>
                                            <?php
                                            $dayName = date("D", $d);
                                            switch (date("N", $d)) {
                                                case 1:
                                                    $dayName = "Mo";
                                                    break;
                                                case 2:
                                                    $dayName = "Di";
                                                    break;
                                                case 3:
                                                    $dayName = "Mi";
                                                    break;
                                                case 4:
                                                    $dayName = "Do";
                                                    break;
                                                case 5:
                                                    $dayName = "Fr";
                                                    break;
                                            }
                                            echo $dayName;
                                            ?>
                                            <br />
                                            <span><?= date("d", $d); ?></span>
                                        </h3>
                                        
                                        <p>Ab 14:00 Uhr</p>
                                    </div>
                                    <div class="calendar__day-times">
                                        <?php
                                        if (!$past) {
                                            $isToday = date($d) == $today;
                                            for ($i = 14; $i <= 17; $i++) {
                                                if (!$isToday || ($isToday && date("H") < $i)) {
                                                    $timestamp = $d + ($i * 3600);
                                                    $date = date("d.m.Y", $d).", ".$i.":00 - ".($i + 1).":00";
                                                    echo "<div class='calendar__time callone-modal__nextstep' data-date='".$timestamp."'>";
                                                    echo $i.":00 - ".($i + 1).":00<br />";
                                                    echo "<span>Buchen</span>";
                                                    echo "</div>";
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="calendar__day-footer">
                                        Bis 18:00 Uhr
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Carddeck -->
    <div class="components__item" id="carddeck">
        <div class="components__docs">
            <h1><a href="#carddeck">Carddeck</a></h1>
            <p>Carddeck Animation to cycle through multiple cards. Carddecks need a minimum of 4 cards.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.carddeck--no-indicators</code>: Removes indicators</li>
                <li><code>.carddeck--right</code>: Switches carddeck to right side</li>
                <li><code>data-speed="2000"</code>: Speed to cycle through cards in ms</li>
            </ul>
        </div>
        <style>
            .carddeck-component .carddeck + .carddeck {
                margin-top: 30px;
            }
        </style>
        <div class="components__preview carddeck-component">
            <div>
                <div class="carddeck" data-speed="2500">
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                </div>

                <div class="carddeck carddeck--right" data-speed="5000">
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 5</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 6</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 7</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 8</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                </div>

                <div class="carddeck carddeck--no-indicators" data-speed="4000">
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                    <div class="carddeck__card">
                        <h2>Lorem, ipsum dolor. 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="components__item" id="cards">
        <div class="components__docs">
            <h1><a href="#cards">Cards / Card</a></h1>
            <p>Simple cards. Single cards are best used inside grids.</p>
        </div>
        <div class="components__preview">
            <div>
                <!-- Cards Version -->
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
                </div>

                <!-- Grid Version -->
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--4-xs">
                        <div class="card centered">
                            <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                            <h3>Bonbons gefällig?</h3>
                            <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
                        </div>
                    </div>
                    <div class="co-grid__col co-grid__col--4-xs">
                        <div class="card centered">
                            <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                            <h3>Bonbons gefällig?</h3>
                            <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
                        </div>
                    </div>
                    <div class="co-grid__col co-grid__col--4-xs">
                        <div class="card centered">
                            <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                            <h3>Bonbons gefällig?</h3>
                            <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Link -->
    <div class="components__item" id="card-link">
        <div class="components__docs">
            <h1><a href="#card-link">Card Link</a></h1>
            <p>A link styled as a card with icons, title and subtitle.</p>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/stylesheets/scss/components/_card-link.scss</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="card-link">
                    <span class="card-link__icons">
                        <img src="/assets/images/logo/logo-icon-green.svg" alt="" />
                        <img src="/assets/images/icons_svg/recommendations.svg" alt="" />
                    </span>
                    <h2 class="card-link__title">Anbieter für Flatrate-Businesstelefonie</h2>
                    <span class="card-link__subtitle">Unsere Empfehlungsliste</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Content Box -->
    <div class="components__item" id="content-box">
        <div class="components__docs">
            <h1><a href="#content-box">Content-Box</a></h1>
            <p>Content box that can contain other content.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.content-box--white</code>: White box to use on dark backgrounds</li>
                <li><code>.content-box--wide</code>: Wider version</li>
                <li><code>.content-box--small-padding</code>: Box with reduced padding on all sides</li>
            </ul>
        </div>
        <style>
            .content-box-component {
                background-image: linear-gradient(#000, #000);
                background-repeat: no-repeat;
                background-size: 100% 50%;
                background-position: center bottom;
            }
        </style>
        <div class="components__preview content-box-component">
            <div>
                <div class="content-box content-box--shadow">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et repellat dolorem consequuntur, possimus quaerat maiores quos aut a exercitationem molestias.</p>
                </div>
                <div class="content-box content-box--white">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et repellat dolorem consequuntur, possimus quaerat maiores quos aut a exercitationem molestias.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Contact -->
    <div class="components__item" id="cta-contact">
        <div class="components__docs">
            <h1><a href="#cta-contact">Call-To-Action: Contact</a></h1>
            <p>Call-To-Action section for general contact.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="cta-contact">
                    <h2 class="centered">Lassen Sie uns miteinander reden!</h2>
                    <p class="centered">Ob unsere Lösungen zu Ihren Anforderungen passen, finden wir schnell in einem ersten ehrlichen und umfänglichen Austausch heraus.</p>

                    <div class="co-grid">
                        <div class="co-grid__col co-grid__col--4-xs">
                            <img src="/assets/images/icons_svg/first-call.svg" alt="" />
                            <h4>
                                <span>Schritt 1</span><br />
                                Erstgespräch
                            </h4>
                            <p>Kein Verkaufsgespräch, sondern Austausch.</p>
                        </div>
                        <div class="co-grid__col co-grid__col--4-xs">
                            <img src="/assets/images/icons_svg/presentation.svg" alt="" />
                            <h4>
                                <span>Schritt 2</span><br />
                                Showcase
                            </h4>
                            <p>Wir machen einen Show&shy;case für Ihre Anforderung.</p>
                        </div>
                        <div class="co-grid__col co-grid__col--4-xs">
                            <img src="/assets/images/icons_svg/team-dark.svg" alt="" />
                            <h4>
                                <span>Schritt 3</span><br />
                                Lösungsfindung
                            </h4>
                            <p>Wir passen individuelles Lösungsangebot auf Sie zu.</p>
                        </div>
                    </div>

                    <p>
                        <a href="#" class="btn btn--primary btn--centered" data-openmodal="contact-sales">Erstgespräch buchen</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Select / Dropdown -->
    <div class="components__item" id="dropdown">
        <div class="components__docs">
            <h1><a href="#dropdown">Custom Select / Dropdown</a></h1>
            <p>Custom selects are simply normal html select elements with the data attribute "data-callone-select". The first option has to have an empty value and is used as the label that is displayed when nothing is selected.</p>
            <p><strong>Selector:</strong></p>
            <ul>
                <li><code>data-callone-select</code></li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/javascripts/custom/select.js</code></li>
                <li><code>/src/assets/javascripts/scss/components/_select.scss</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <select name="topic" data-callone-select>
                    <option value="">This is the label</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2 with super looooong label, that will not fit within the field</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Fade Box -->
    <div class="components__item" id="fadebox">
        <div class="components__docs">
            <h1><a href="#fadebox">Fade Box</a></h1>
            <p>Box with fading background.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.fade-box--on-black</code>: Version for dark backgrounds</li>
            </ul>
        </div>
        <style>
            .fade-box-component {
                background-image: linear-gradient(#000, #000);
                background-repeat: no-repeat;
                background-size: 100% 50%;
                background-position: center bottom;
            }
        </style>
        <div class="components__preview fade-box-component">
            <div>
                <div class="fade-box">
                    <h2 class="centered">Ansprechpartnerin</h2>
                    <p class="centered">Falls du Fragen zum Stand deiner Bewerbung hast oder auch schon im Vorfeld zu den offenen Stellen, dann melde dich gern direkt bei Stefanie.</p>
                </div>

                <div class="fade-box fade-box--on-black">
                    <h2 class="centered">Ansprechpartnerin</h2>
                    <p class="centered">Falls du Fragen zum Stand deiner Bewerbung hast oder auch schon im Vorfeld zu den offenen Stellen, dann melde dich gern direkt bei Stefanie.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fader -->
    <div class="components__item" id="fader">
        <div class="components__docs">
            <h1><a href="#fader">Fader</a></h1>
            <p>Simple fader to cycle between content.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.fader--no-header</code>: Hides fader header with indicators and title</li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <div class="fader">
                    <div class="fader__item">
                        <h3>Lorem, ipsum dolor 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, ducimus!</p>
                    </div>
                    <div class="fader__item">
                        <h3>Lorem, ipsum dolor 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, ducimus!</p>
                    </div>
                    <div class="fader__item">
                        <h3>Lorem, ipsum dolor 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, ducimus!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Form -->
    <div class="components__item" id="floatingform">
        <div class="components__docs">
            <h1><a href="#floatingform">Floating Form</a></h1>
            <p>Floating forms are form elements that contain labels that "float" when the corresponding input is focused/filled.</p>
            <p><strong>Elements:</strong></p>
            <ul>
                <li>Row <code>.floating-form__row</code></li>
                <li>Column <code>.floating-form__col</code></li>
                <li>Form Field <code>.floating-form__field</code></li>
                <li><code>.floating-form__field--short</code>: Short field for numbers for example</li>
                <li><code>.floating-form__icon</code>: Can be used inside row before field to display an icon</li>
                <li><code>.floating-form__description</code>: Can be used inside row after field to display field description</li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/stylesheets/scss/components/_floating-form.scss</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <form action="#" method="post" class="floating-form">
                    <div class="floating-form__row">
                        <div class="floating-form__col">
                            <div class="floating-form__field">
                                <input type="text" name="name" placeholder=" " required />
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="floating-form__col">
                            <div class="floating-form__field">
                                <input type="text" name="name" placeholder=" " required />
                                <label>E-Mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__select">
                        <select name="topic" data-callone-select>
                            <option value="">Choose topic</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                        </select>
                    </div>
                    <div class="floating-form__field">
                        <textarea name="message" rows="5" placeholder=" "></textarea>
                        <label>Message</label>
                    </div>
                    <button class="floating-form__submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Grid -->
    <div class="components__item" id="grid">
        <div class="components__docs">
            <h1><a href="#grid">Grid System</a></h1>
            <p>A simple grid system that uses multiple breakpoints and gutters. It stretches to the full width of its container and has gutters inbetween the columns/rows.</p>
            <p><strong>Breakpoints:</strong></p>
            <ul>
                <li>xs: 0px</li>
                <li>sm: 600px</li>
                <li>md: 960px</li>
                <li>lg: 1280px</li>
                <li>xl: 1920px</li>
            </ul>
        </div>
        <style>
            .grid-system .co-grid__col {
                background-color: green;
                text-align: center;
                color: #fff;
            }
        </style>
        <div class="components__preview grid-system">
            <div>
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--12-xs">12/12</div>
                    <div class="co-grid__col co-grid__col--6-xs">6/12</div>
                    <div class="co-grid__col co-grid__col--6-xs">6/12</div>
                    <div class="co-grid__col co-grid__col--4-xs">4/12</div>
                    <div class="co-grid__col co-grid__col--4-xs">4/12</div>
                    <div class="co-grid__col co-grid__col--4-xs">4/12</div>
                    <div class="co-grid__col co-grid__col--3-xs">3/12</div>
                    <div class="co-grid__col co-grid__col--3-xs">3/12</div>
                    <div class="co-grid__col co-grid__col--3-xs">3/12</div>
                    <div class="co-grid__col co-grid__col--3-xs">3/12</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero / Header -->
    <div class="components__item" id="hero">
        <div class="components__docs">
            <h1><a href="#hero">Hero / Header Area</a></h1>
            <p>Hero / Header Area to use as a page entry. It consists of text and image/media side by side.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="hero">
                    <div class="hero__text">
                        <h1>Headline</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsam iste laboriosam, dolorum, laudantium iure ipsa earum excepturi tempore temporibus ducimus maiores ex optio aperiam quod, quas esse iusto provident!</p>
                    </div>
                    <div class="hero__image">
                        <img src="//via.placeholder.com/500" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Icons -->
    <div class="components__item" id="icons">
        <div class="components__docs">
            <h1><a href="#icons">Icons</a></h1>
            <p>Various icons that can be used by CSS classes.</p>
        </div>
        <div class="components__preview">
            <div style="text-align: center;">
                <span class="icon-location"></span>
                <span class="icon-home"></span>
            </div>
        </div>
    </div>

    <!-- Infinity Scroller -->
    <div class="components__item" id="infinity-scroller">
        <div class="components__docs">
            <h1><a href="#infinity-scroller">Infinity Scroller</a></h1>
            <p>The infinity scroller is a special element that scrolls its contents, as the name suggests, infinitely. Both directions are possible. Default direction is scrolling upwards, it can be reversed by setting the data attribute "data-reversed". To make sure the scroller can be displayed it has to get a size by setting the data attribute "data-height".</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li>Set height <code>data-height</code></li>
                <li>Reverse direction <code>data-reversed</code></li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/javascripts/coffee/application.coffee</code> # Content Scroller</li>
                <li><code>/src/assets/stylesheets/scss/components/_scroller.scss</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <div class="scroller fadeOut-lightgrey-2" data-height="680">
                    <div class="scroller-belt">
                        <div class="scroller-content">
                            <div class="feature-box">
                                <div class="feature-box__icons">
                                    <div class="icon-callone">Feature</div>
                                    <div class="icon-phone">Anruf</div>
                                </div>
                                <p>Text zu Anrufen (TTS)</p>
                            </div>
                            <div class="feature-box">
                                <div class="feature-box__icons">
                                    <div class="icon-callone">Feature</div>
                                    <div class="icon-phone">Anruf</div>
                                </div>
                                <p>Spracherkennung (Call Transcription)</p>
                            </div>
                            <div class="feature-box">
                                <div class="feature-box__icons">
                                    <div class="icon-callone">Feature</div>
                                    <div class="icon-sms">SMS &amp; Chat</div>
                                </div>
                                <p>SMS Notification</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Job List -->
    <div class="components__item" id="joblist">
        <div class="components__docs">
            <h1><a href="#joblist">Job List</a></h1>
            <p>Listing of jobs.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="job-list">
                    <div class="job-list__item">
                        <div class="job-list__item-icon">
                            <img src="/assets/images/icons_svg/care-black.svg" alt="" />
                        </div>
                        <a href="/karriere/job-customer-success-manager-in-potsdam" class="job-list__item-info">
                            <small>Potsdam · unbefristet · (m/w/d)</small><br />
                            Customer Success Manager*in
                        </a>
                    </div>
                    <div class="job-list__item">
                        <div class="job-list__item-icon">
                            <img src="/assets/images/icons_svg/care-black.svg" alt="" />
                        </div>
                        <a href="/karriere/job-customer-success-manager-in-potsdam" class="job-list__item-info">
                            <small>Potsdam · unbefristet · (m/w/d)</small><br />
                            Customer Success Manager*in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Job Details -->
    <div class="components__item" id="jobdetails">
        <div class="components__docs">
            <h1><a href="#jobdetails">Job Details</a></h1>
            <p>A little element to display job details between two sections. Be careful, overlapping element.</p>
        </div>
        <div class="components__preview">
            <div style="min-height: 160px;">
                <div class="job-details">
                    <div class="job-details__item">
                        <img src="/assets/images/icons_svg/small_35.svg" alt="">
                        Potsdam
                    </div>
                    <div class="job-details__item">
                        <img src="/assets/images/icons_svg/small_32.svg" alt="">
                        Teilzeit / Vollzeit
                    </div>
                    <div class="job-details__item">
                        <img src="/assets/images/icons_svg/small_31.svg" alt="">
                        Ab sofort / unbefristet
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Job Quote -->
    <div class="components__item" id="jobquote">
        <div class="components__docs">
            <h1><a href="#jobquote">Job Quote</a></h1>
            <p>Simple quote for job details.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="job-quote">
                    <blockquote>Die Große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.</blockquote>
                    <div class="job-quote__author">
                        <img src="/assets/images/photos/jenny_radziejewski.jpg" data-src="/assets/images/photos/jenny_radziejewski.jpg" data-srcset="/assets/images/photos/jenny_radziejewski.jpg" class="" alt="Statement" style="visibility: visible;" srcset="/assets/images/photos/jenny_radziejewski.jpg">
                        <div>
                            <strong>Jenny Radziejewski</strong><br>
                            Customer Success Management<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lists -->
    <div class="components__item" id="lists">
        <div class="components__docs">
            <h1><a href="#lists">Lists</a></h1>
        </div>
        <div class="components__preview">
            <div>
                <ul class="list list--checkmarks">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal via Click -->
    <div class="components__item" id="modal">
        <div class="components__docs">
            <h1><a href="#modal">Modal via Click</a></h1>
            <p>A modal can be created by adding <code>data-openmodal</code> to a button. Also create a <code>.callone-modal</code> element with <code>data-modal</code> having the same value to have them connected. There are other options below to make it a single modal or with steps.</p>
            <p>If no modal is specified in HTML, a modal file has to be placed inside <code>/partials/modals/[NAME].html</code>. [NAME] has to be the same identifier as placed in <code>data-openmodal</code> of the button.</p>
            <p><strong>Modal Button:</strong></p>
            <ul>
                <li><code>data-modal="name"</code>: the identifier of the modal</li>
                <li><code>data-modaldata='<?= base64_encode('{"key": "value"}'); ?>'</code>: Data that can be passed to the actual modal. Has to be base64 encoded JSON.</li>
            </ul>
            <p><strong>Modal:</strong></p>
            <ul>
                <li><code>data-model="name"</code>: Identifier Name</li>
                <li><code>data-canceltext="Schließen"</code>: Text that is displayed as the close button (default: Schließen)</li>
                <li><code>data-title="title"</code>: The title that will be displayed for modals without steps</li>
                <li><code>data-subtitle="title"</code>: The subtitle that will be displayed for modals without steps</li>
                <li><code>data-no-cancel="true"</code>: Removes cancel button</li>
                <li><code>data-no-header="true"</code>: Removes modal header</li>
                <li><code>.callone-modal--no-padding</code>: Removes padding of modal content if content shall flow right to the edge of the modal. (globally, for all steps if present. Can be set for single steps as well, see below)</li>
            </ul>
            <p><strong>Modal Steps:</strong></p>
            <ul>
                <li><code>.callone-modal__step</code>: Wrapper of each step inside the <code>.callone-modal</code> block</li>
                <li><code>.callone-modal__step--no-padding</code>: Removes padding in step content if content shall flow right to the edge of the modal.</li>
                <li><code>data-step-id="1"</code>: Required, use incrementing numbers starting from 1</li>
                <li><code>data-step-indicator="1/5"</code>: Used as the title if no <code>data-steptitle</code> is provided, also used to calculate and display the step indicators (dots).</li>
                <li><code>data-steptitle="title"</code>: Title displayed for this specific step, if not provided the step number is shown instead</li>
                <li><code>.callone-modal__nextstep</code>: Class that has to be added to a button inside a step to link to the next step, also needs <code>data-next-step="2"</code> to work properly. The number has to be the step ID.</li>
                <li><code>data-next-step="2"</code>: Next step to appear when modal footer action button is clicked.</li>
                <li><code>data-prev-step="1"</code>: Specifies the previous step to display when back button is clicked</li>
                <li><code>data-no-back="true"</code>: Prevents step back button from being shown.</li>
                <li><code>data-no-footer="true"</code>: Hide step footer with action button.</li>
                <li><code>data-next-button-text="Weiter"</code>: Label for next button</li>
                <li><code>data-no-header="true"</code>: Removes modal header</li>
            </ul>
            <p><strong>Forms in Modals:</strong></p>
            <ul>
                <li><code>data-step-callback="functionName"</code>: Callback Function to call when form is submitted</li>
                <li><code>data-next-step="1"</code>: Next step ID when form is successfully submittedv</li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/javascripts/custom/callone-modal.js</code></li>
                <li><code>/src/assets/stylesheets/scss/components/_modal.scss</code></li>
                <li><code>/src/partials/modals/*</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Contact Sales Modal</a>

                <a href="#" class="btn btn--primary" data-openmodal="modal-with-steps">Remote modal width steps</a>
                
                <a href="#" class="btn btn--primary" data-openmodal="steps">Modal with steps</a>
                
                <div class="callone-modal" data-modal="steps" data-canceltext="Exit" data-title="Hello World" data-subtitle="Lorem Ipsum">
                    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-next-button-text="Nächster Schritt" data-steptitle="Step 1" data-step-indicator="1/3">
                        Step 1
                    </div>
                    <div class="callone-modal__step" data-step-id="2" data-canceltext="Abbrechen" data-steptitle="Step 2" data-step-indicator="2/3" data-prev-step="1">
                        Step 2
                        <a href="#" class="btn btn--primary callone-modal__nextstep" data-next-step="3">Step 3</a>
                        <a href="#" class="btn btn--primary callone-modal__nextstep" data-next-step="4">Step 4</a>
                    </div>
                    <div class="callone-modal__step" data-step-id="3" data-step-indicator="3/3" data-prev-step="2">
                        Step 3
                    </div>
                    <div class="callone-modal__step" data-step-id="4" data-step-indicator="3/3" data-prev-step="2">
                        Step 4
                    </div>
                </div>
                
                <a href="#" class="btn btn--primary" data-openmodal="nosteps">Modal without steps</a>
                
                <div class="callone-modal" data-modal="nosteps" datacanceltext="Zu machen" data-title="Headline" data-subtitle="Subheadline">
                    Hello World
                </div>
            </div>
        </div>
    </div>

    <!-- Number Card -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Number Card (Animated)</h1>
            <p>Number cards. Animation is added by using the <code>.counting-number</code> class.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li>Add <code>style="--color:blue"</code> to <code>.number-card__number</code> to change the color.</li>
            </ul>
        </div>
        <style>
            .number-card-component .number-card + .number-card {
                margin-top: 30px;
            }
        </style>
        <div class="components__preview number-card-component">
            <div>
                <div class="number-card">
                    <div class="number-card__number">
                        <span class="counting-number" data-start="0" data-end="50" data-suffix="%">50%</span>
                    </div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, laborum?
                </div>
                <div class="number-card">
                    <div class="number-card__number" style="--color:blue">
                        <span class="counting-number" data-start="0" data-end="50" data-suffix="%">50%</span>
                    </div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, laborum?
                </div>
            </div>
        </div>
    </div>

    <!-- Person Display -->
    <div class="components__item" id="persondisplay">
        <div class="components__docs">
            <h1><a href="#persondisplay">Person Display</a></h1>
        </div>
        <div class="components__preview">
            <div>
                <div class="person">
                    <div class="person__avatar">
                        <img src="/assets/images/photos/stefanie-bending-round-sm.png" alt="">
                    </div>
                    <div class="person__details">
                        <h4>Stefanie Bendig</h4>
                        <p>Personalabteilung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote -->
    <div class="components__item" id="quote">
        <div class="components__docs">
            <h1><a href="#quote">Quote</a></h1>
            <p>Simple quotes.</p>
        </div>
        <div class="components__preview">
            <div>
                <blockquote class="quote">
                    This is the quote. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, asperiores!
                </blockquote>
                <p>
                    <strong>Jack Smith</strong><br />
                    CEO Company
                </p>
            </div>
        </div>
    </div>

    <!-- Radio Select -->
    <div class="components__item" id="radio">
        <div class="components__docs">
            <h1><a href="#radio">Radio Select</a></h1>
            <p>Toggle buttons to choose from multiple options.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="radio-select">
                    <div class="radio-select__item">
                        <input type="radio" id="type1" name="type" value="quick" checked="checked" />
                        <label for="type1">
                            <img src="/assets/images/icons_svg/application-fast.svg" alt="" />
                            <h3>Schnellbewerbung</h3>
                            <p>via LinkedIn/Xing/Portfolio-Link</p>
                        </label>
                    </div>
                    <div class="radio-select__item">
                        <input type="radio" id="type2" name="type" value="normal" />
                        <label for="type2">
                            <img src="/assets/images/icons_svg/application-normal.svg" alt="" />
                            <h3>Klassische Bewerbung</h3>
                            <p>Bewerbungsdateien hochladen</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Range Slider -->
    <div class="components__item" id="range">
        <div class="components__docs">
            <h1><a href="#range">Range Slider</a></h1>
            <p>The range slider is a simple input range element with some additional attributes. The slider is then initialized in javascript.</p>
            <p><strong>Attributes:</strong></p>
            <ul>
                <li><code>data-callone-range</code>: Used to target element with javascript</li>
                <li><code>data-output="#selector"</code>: Selector of input type text element to display current value</li>
                <li><code>data-width="480"</code>: Desired initial width</li>
                <li><code>data-snap="true"</code>: Snap to multiple of specified step, (only works with min/max values that are dividable/multiples of step)</li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/javascripts/custom/range.js</code></li>
                <li><code>/src/assets/stylesheets/scss/components/_range.scss</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <input type="range" min="0" max="200" step="10" value="25" data-callone-range data-snap="true" data-output="#outputId" data-width="480" />
                <input type="text" id="outputId" />

                <input type="range" min="23" max="50" step="5" value="1" data-callone-range data-output="#output-1" data-width="480" />
                <input type="text" id="output-1" />
            </div>
        </div>
    </div>

    <!-- Sections -->
    <div class="components__item" id="section">
        <div class="components__docs">
            <h1><a href="#section">Section</a></h1>
            <p>Sections are the wrapper element of all contents.</p>
            <p><strong>Section Modifiers:</strong></p>
            <ul>
                <li><code>.section--no-padding-top</code>: Removes gutter on top of section</li>
                <li><code>.section--light-grey</code>: Background</li>
                <li><code>.section--light-grey-green</code>: Background</li>
                <li><code>.section--light-green-white</code>: Background</li>
                <li><code>.section--light-green-white-map</code>: Background</li>
                <li><code>.section--light-green-white-homeoffice</code>: Background</li>
                <li><code>.section--dark-green-black</code>: Background</li>
                <li><code>.section--black</code>: Background</li>
                <li><code>.section--overflow-protection</code>: Avoid horizontal scrollbars for elements wider than the viewport (step-slider)</li>
            </ul>
            <p><strong>Section Content Modifiers:</strong></p>
            <ul>
                <li><code>.section__content--narrow</code>: Narrow width</li>
                <li><code>.section__content--wide</code>: Wide width</li>
                <li><code>.section__content--gutter-top</code>: Increase gutter top</li>
                <li><code>.section__content--shadow</code>: Adds shadow around section content</li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <div class="section">
                    <div class="section__content section__content--narrow">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, animi porro? Laborum repellat, ex sit sequi illum accusamus. Amet tempore nobis, laborum maxime eius voluptatum quis id provident sed aperiam!
                    </div>
                    <div class="section__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, animi porro? Laborum repellat, ex sit sequi illum accusamus. Amet tempore nobis, laborum maxime eius voluptatum quis id provident sed aperiam!
                    </div>
                    <div class="section__content section__content--wide">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, animi porro? Laborum repellat, ex sit sequi illum accusamus. Amet tempore nobis, laborum maxime eius voluptatum quis id provident sed aperiam!
                    </div>
                    <div class="section__content section__content--gutter-top">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, animi porro? Laborum repellat, ex sit sequi illum accusamus. Amet tempore nobis, laborum maxime eius voluptatum quis id provident sed aperiam!
                    </div>
                    <div class="section__content section__content--shadow">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, animi porro? Laborum repellat, ex sit sequi illum accusamus. Amet tempore nobis, laborum maxime eius voluptatum quis id provident sed aperiam!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Split Box -->
    <div class="components__item" id="splitbox">
        <div class="components__docs">
            <h1><a href="#splitbox">Split Box</a></h1>
        </div>
        <div class="components__preview">
            <div>
                <div class="split-box">
                    <div class="split-box__item">
                        <p>Du möchtest mehr über deinen Arbeitsplatz und das Team erfahren?</p>
                        <p><a href="/karriere-bei-callone" class="btn btn--secondary btn--centered">Karriere bei Callone</a></p>
                    </div>
                    <div class="split-box__divider" data-text="oder"></div>
                    <div class="split-box__item">
                        <p>Du möchtest mehr über deinen Tagesablauf in diesem Job erfahren?</p>
                        <p><a href="/karriere-bei-callone" class="btn btn--secondary btn--centered">Karriere bei Callone</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step Slider -->
    <div class="components__item" id="stepslider">
        <div class="components__docs">
            <h1><a href="#stepslider">Step Slider</a></h1>
            <p>Slider for multiple steps.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.step-slider--on-black</code>: Version to use on black backgrounds</li>
            </ul>
            <p><strong>Files:</strong></p>
            <ul>
                <li><code>/src/assets/javascripts/custom/step-slider.js</code></li>
                <li><code>/src/assets/stylesheets/scss/components/_step-slider.scss</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <div class="step-slider">
                    <div class="step-slider__steps">
                        <div class="step-slider__step step-slider__step--active">
                            <h2>Besprechung Ihrer Anforderungen</h2>
                            <p>Lassen Sie uns kurz über Ihre Anforderungen sprechen. Wir nehmen uns Zeit und beraten Sie ehrlich.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Demo Zugang</h2>
                            <p>Sie bekommen einen komplett funktionalen Demo-Zugang und wir zeigen Ihnen, was die Telefonanlage kann.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Analyse</h2>
                            <p>Wir machen kostenfrei eine Verkehrsmessung, analysieren Ihr System, Ihre Strukturen, Ihren Traffic.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Live-Session &amp; Lösungen</h2>
                            <p>Aus den Ergebnissen setzen wir Ihre Telefonanlage so auf, als wären Sie bereits Kunde bei uns. Das ist unser Investment in Sie.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Testen &amp; Finetuning</h2>
                            <p>Sie testen und prüfen ohne Risiko oder Kosten, wir stehen Ihnen mit Antworten zur Seite. Dann entscheiden Sie, ob wir Sie überzeugen konnten.</p>
                        </div>
                    </div>
                    <div class="step-slider__slider">
                        <div class="step-slider__range">
                            <div class="step-slider__handle"></div>
                        </div>
                    </div>
                    <div class="step-slider__hint">
                        <div class="step-slider__hint-left">
                            Erste Kontaktaufnahme
                        </div>
                        <div class="step-slider__hint-center">
                            <strong>Hinweis:</strong> Ziehen Sie den Schieberegler über den Zeitstrahl um alle Schritte zu sehen.
                        </div>
                        <div class="step-slider__hint-right">
                            Ihre Entscheidung
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab List -->
    <div class="components__item" id="tablist">
        <div class="components__docs">
            <h1><a href="#tablist">Tab List</a></h1>
            <p>Use multiple tabs to switch through content blocks.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="tablist">
                    <div class="tablist__links">
                        <div class="tablist__link tablist__link--active" data-tab="1" data-sticky-text="Office">
                            <strong>Office</strong>
                            <span class="icon-location">Potsdam</span>
                        </div>
                        <div class="tablist__link" data-tab="2" data-sticky-text="Remote">
                            <strong>Remote</strong>
                            <span class="icon-home">Lieblingsort</span>
                        </div>
                    </div>

                    <div class="tablist__content tablist__content--active" data-tab="1">
                        <h2 class="centered">Dort arbeiten, wo es schön ist</h2>
                        <p class="centered">Wir lieben Potsdam und unser Büro ist direkt in der Innenstadt. Kurze Wege, gute Erreichbarkeit, ein leckeres Mittagessen, mal kurz ans Wasser oder zwischendurch einen kleinen Einkauf erledigen? Alles vor der Haustür.</p>
                    </div>

                    <div class="tablist__content" data-tab="2">
                        <h2 class="centered">Dort arbeiten, wo du dich am wohlsten fühlst</h2>
                        <p class="centered">Wir schätzen den persönlichen Kontakt mit dir im Büro, sind aber auch Profis in virtueller Zusammenarbeit. Was zählt, ist gutes Teamwork und dass unsere Kund*innen zufrieden sind. Wo immer du am produktivsten bist, ist uns recht.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tag -->
    <div class="components__item" id="tag">
        <div class="components__docs">
            <h1><a href="#tag">Tag</a></h1>
            <p>Tag above text or headlines.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="tag"><img src="/assets/images/icons_svg/callone-logo-white.svg" alt="">CallOne</div>
                <h1>Lorem, ipsum dolor.</h1>
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="components__item" id="team">
        <div class="components__docs">
            <h1><a href="#team">Team</a></h1>
            <p>Team display.</p>
        </div>
        <div class="components__preview" style="background:#000;color:#fff">
            <div>
                <div class="team">
                    <div class="team__header">
                        <p>Menschen bei CallOne</p>
                        <div class="team__buttons">
                            <div class="team__button team__button--active" data-member="1" data-name="Charlotta">
                                <img src="/assets/images/photos/charlotta-portrait.jpg" alt="Charlotta" />
                            </div>
                            <div class="team__button" data-member="2" data-name="Brian">
                                <img src="/assets/images/photos/brian-portrait.jpg" alt="Brian" />
                            </div>
                            <div class="team__button" data-member="3" data-name="Stefanie">
                                <img src="/assets/images/photos/stefanie-portrait.jpg" alt="Stefanie" />
                            </div>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="team__member team__member--active" data-member="1">
                            <div class="team__member-left">
                                <blockquote>„CallOne bietet mir viel Freiraum in meinem Job: Ich kann mich jederzeit einbringen und meine Ideen finden Gehör. Weiterbildung ist ausdrücklich erwünscht: Zurzeit lerne ich Programmieren und ein Kollege hilft mir dabei.”</blockquote>
                                <h6>
                                    <strong>Charlotta</strong><br />
                                    Projektmanagerin
                                </h6>

                                <div class="team__member-booking">
                                    <h3>Lust mehr über CallOne zu erfahren?</h3>
                                    <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Charlotta</u>.</p>
                                    <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata="<?= base64_encode('{"contactperson": "Charlotta"}'); ?>">Termin buchen</a>
                                </div>
                            </div>
                            <div class="team__member-right">
                                <div class="team__member-image">
                                    <img src="/assets/images/photos/charlotta-stehend.jpg" alt="Charlotta" />
                                </div>
                                <div class="team__member-agenda" data-openmodal="agenda-projektmanager">
                                    <strong>Tagesagenda</strong><br />
                                    Projektmanagerin
                                </div>
                            </div>
                        </div>

                        <div class="team__member" data-member="2">
                            <div class="team__member-left">
                                <blockquote>„24/7 Verfügbarkeit unserer Systeme, dabei keine Überstunden und normale Arbeitszeiten. Neuste IT-Technologien wie Voice Recognition nutzen und sich kreative Lösungen für Kunden überlegen. IT - aber ohne Startup Feeling.”</blockquote>
                                <h6>
                                    <strong>Brian</strong><br />
                                    IT & Technik
                                </h6>

                                <div class="team__member-booking">
                                    <h3>Lust mehr über CallOne zu erfahren?</h3>
                                    <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Brian</u>.</p>
                                    <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata="<?= base64_encode('{"contactperson": "Brian"}'); ?>">Termin buchen</a>
                                </div>
                            </div>
                            <div class="team__member-right">
                                <div class="team__member-image">
                                    <img src="/assets/images/photos/brian-stehend.jpg" alt="Brian" />
                                </div>
                                <div class="team__member-agenda" data-openmodal="agenda-it-technik">
                                    <strong>Tagesagenda</strong><br />
                                    IT & Technik
                                </div>
                            </div>
                        </div>

                        <div class="team__member" data-member="3">
                            <div class="team__member-left">
                                <blockquote>„Das Schöne an CallOne ist der starke Zusammenhalt im Team. Innerhalb kürzester Zeit kann man viel bewegen und sich dabei selbst entfalten. Das schätze ich.”</blockquote>
                                <h6>
                                    <strong>Stefanie</strong><br />
                                    Human Resources
                                </h6>

                                <div class="team__member-booking">
                                    <h3>Lust mehr über CallOne zu erfahren?</h3>
                                    <p>Buche jetzt ganz unkompliziert einen Kennenlerntermin mit <u>Stefanie</u>.</p>
                                    <a href="#" class="btn btn--border-white" data-openmodal="appointment-booking" data-modaldata="<?= base64_encode('{"contactperson": "Stefanie"}'); ?>">Termin buchen</a>
                                </div>
                            </div>
                            <div class="team__member-right">
                                <div class="team__member-image">
                                    <img src="/assets/images/photos/stefanie-stehend.jpg" alt="Stefanie" />
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
    </div>

    <!-- Toggle Box -->
    <div class="components__item" id="togglebox">
        <div class="components__docs">
            <h1><a href="#togglebox">Toggle Box</a></h1>
            <p>Boxes that toggle on click.</p>
        </div>
        <div class="components__preview">
            <div>
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
                        <p>Wir erstellen für dich einen Einarbeitungsplan mit verschiedenen Stationen und Themengebieten, die für dich relevant sind. Du lernst deine Kolleg*innen näher kennen und du wirst viel von ihrem Produktwissen profitieren. Eine gute Einarbeitung lebt davon, dass es keine Scheu gibt Fragen zu stellen. Von Anfang an bist du bei den Teammeetings, Produktschulungen und Kundenmeetings dabei und lernst on-the-job.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/github-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<!-- <script>hljs.highlightAll();</script> -->

<script>    
    function escapeHtml(unsafe) {
        return unsafe
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    function fixIndentation(html) {
        var lines = html.innerHTML.split('\n');

        if (lines[0] === '')
            lines.shift();

        var matches;
        var indentation = (matches = /^[\s\t]+/.exec(lines[0])) !== null ? matches[0] : null;
        if (!!indentation) {
            lines = lines.map(function(line) {
                line = line.replace(indentation, '')
                return line.replace(/\t/g, '    ')
            });

            html.innerHTML = lines.join('\n').trim();
        }

        return html;
    }
    
    let components = document.querySelectorAll('.components__item');
    let componentsToc = document.querySelector('.components__toc');
    let tocButton = document.querySelector('.components__toc-button');
    let tocList = document.createElement('ul');
    components.forEach(c => {
        let docs = c.querySelector('.components__docs');
        let preview = c.querySelector('.components__preview div');
        let pre = document.createElement('pre');
        let code = document.createElement('code');

        // Create demo code snippet
        code.classList.add('language-html');
        let html = fixIndentation(preview);
        code.innerHTML = escapeHtml(html.innerHTML);
        pre.appendChild(code);

        // Add code button
        let codeButton = document.createElement('div');
        codeButton.classList.add('components__code-button');
        codeButton.classList.add('btn');
        codeButton.classList.add('btn--primary');
        codeButton.textContent = 'Show Code Snippet';
        codeButton.addEventListener('click', e => {
            let codePopup = document.createElement('div');
            codePopup.classList.add('components__code-popup');
            codePopup.appendChild(pre);
            let codePopupClose = document.createElement('div');
            codePopupClose.classList.add('components__code-button--close');
            codePopup.appendChild(codePopupClose);
            document.body.appendChild(codePopup);
            hljs.highlightAll();
            codePopupClose.addEventListener('click', e => {
                codePopup.remove();
            });
            codePopup.addEventListener('click', e => {
                if (e.target == codePopup) {
                    codePopup.remove();
                }
            });
        });
        docs.appendChild(codeButton);

        // Fill TOC
        let tocListItem = document.createElement('li');
        let headline = docs.querySelector('h1');
        let link = encodeURI(headline.textContent);
        tocListItem.textContent = headline.textContent;
        tocListItem.dataset.link = link;
        c.dataset.link = link;
        tocList.appendChild(tocListItem);
        tocListItem.addEventListener('click', e => {
            let scrollPos = document.querySelector('.components__item[data-link="'+e.target.dataset.link+'"]').offsetTop;
            window.scroll({
                top: scrollPos,
                behavior: 'smooth'
            });
        });
    });
    componentsToc.appendChild(tocList);
    tocButton.addEventListener('click', e => {
        componentsToc.classList.toggle('components__toc--open');
    });
</script>