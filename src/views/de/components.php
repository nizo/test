<div class="components">
    <h1>CallOne Components</h1>

    <!-- Table of Contents -->
    <div class="components__toc">
        <div class="components__toc-button">
            <span></span>
        </div>
    </div>

    <!-- Template -->
    <!-- <div class="components__item">
        <div class="components__docs">
            <h1>Title</h1>
            <p>Description</p>
        </div>
        <div class="components__preview">
            <div>
                HTML HERE
            </div>
        </div>
    </div> -->

    <!-- Agenda -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Agenda</h1>
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
    <div class="components__item">
        <div class="components__docs">
            <h1>Alertbox</h1>
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
    <div class="components__item">
        <div class="components__docs">
            <h1>Anchor Buttons</h1>
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

    <!-- Buttons -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Buttons</h1>
            <p>We have multiple types of buttons and some modifiers that can change the overall behaviour of buttons.</p>
            <p><strong>Types:</strong></p>
            <ul>
                <li><code>.btn--primary</code>: Primary</li>
                <li><code>.btn--secondary</code>: Secondary</li>
                <li><code>.btn--border-black</code>: Bordered Button</li>
                <li><code>.btn--border-white</code>: Bordered Button</li>
                <li><code>.btn--application</code>: Used as a button to open the application modal</li>
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
    <div class="components__item">
        <div class="components__docs">
            <h1>Calendar</h1>
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

    <!-- Cards -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Cards / Card</h1>
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
                <div class="grid">
                    <div class="grid__col grid__col--4-xs">
                        <div class="card centered">
                            <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                            <h3>Bonbons gefällig?</h3>
                            <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
                        </div>
                    </div>
                    <div class="grid__col grid__col--4-xs">
                        <div class="card centered">
                            <img src="/assets/images/icons_svg/benefits.svg" alt="" />
                            <h3>Bonbons gefällig?</h3>
                            <p>30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.</p>
                        </div>
                    </div>
                    <div class="grid__col grid__col--4-xs">
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
    <div class="components__item">
        <div class="components__docs">
            <h1>Card Link</h1>
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

    <!-- Custom Select / Dropdown -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Custom Select / Dropdown</h1>
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
    <div class="components__item">
        <div class="components__docs">
            <h1>Fade Box</h1>
            <p>Box with fading background.</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li><code>.fade-box--on-black</code>: Version for dark backgrounds</li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <div class="fade-box">
                    <h2 class="centered">Ansprechpartnerin</h2>
                    <p class="centered">Falls du Fragen zum Stand deiner Bewerbung hast oder auch schon im Vorfeld zu den offenen Stellen, dann melde dich gern direkt bei Stefanie.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Form -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Floating Form</h1>
            <p>Floating forms are form elements that contain labels that "float" when the corresponding input is focused/filled.</p>
            <p><strong>Elements:</strong></p>
            <ul>
                <li>Row <code>.floating-form__row</code></li>
                <li>Column <code>.floating-form__col</code></li>
                <li>Form Field <code>.floating-form__field</code></li>
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
    <div class="components__item">
        <div class="components__docs">
            <h1>Grid System</h1>
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
            .grid-system .grid__col {
                background-color: green;
                text-align: center;
                color: #fff;
            }
        </style>
        <div class="components__preview grid-system">
            <div>
                <div class="grid">
                    <div class="grid__col grid__col--12-xs">12/12</div>
                    <div class="grid__col grid__col--6-xs">6/12</div>
                    <div class="grid__col grid__col--6-xs">6/12</div>
                    <div class="grid__col grid__col--4-xs">4/12</div>
                    <div class="grid__col grid__col--4-xs">4/12</div>
                    <div class="grid__col grid__col--4-xs">4/12</div>
                    <div class="grid__col grid__col--3-xs">3/12</div>
                    <div class="grid__col grid__col--3-xs">3/12</div>
                    <div class="grid__col grid__col--3-xs">3/12</div>
                    <div class="grid__col grid__col--3-xs">3/12</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero / Header -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Hero / Header Area</h1>
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

    <!-- Infinity Scroller -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Infinity Scroller</h1>
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
    
    <!-- Modal via Click -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Modal via Click</h1>
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

    <!-- Range Slider -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Range Slider</h1>
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

    <!-- Step Slider -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Step Slider</h1>
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
    let toc = document.querySelector('.components__toc');
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
    toc.appendChild(tocList);
    tocButton.addEventListener('click', e => {
        toc.classList.toggle('components__toc--open');
    });
</script>