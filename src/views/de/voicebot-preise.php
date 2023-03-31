<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Wie wird der Voicebot abgerechnet?',
    '<p>TODO</p>'
);
$faqs->faq_add (
    'Lorem ipsum dolor sit amet?',
    '<p>TODO</p>'
);
$faqs->faq_add (
    'Lorem ipsum dolor sit amet?',
    '<p>TODO</p>'
);
$faqs->faq_add (
    'Lorem ipsum dolor sit amet?',
    '<p>TODO</p>'
);
$faqs->faq_add (
    'Lorem ipsum dolor sit amet?',
    '<p>TODO</p>'
);
?>

<div class="section section--light-green-white section--mobile-divider">
    <header class="hero">
        <div class="hero__text">
			<div class="tag" style="--bg:#dafabc;--color:#000">
				ChatGPT &times; Voicebot
			</div>

            <h1>
                Unsere Business-Pakete für<br />
                den <span class="highlight">CallOne Voicebot.</span>
            </h1>
            <h2>
				Die CallOne-Tarife gibt es in drei  verschiedenen Business-Paketen. Entscheiden Sie sich für das Paket, das am besten zu Ihrem Unternehmen passt und genießen Sie volle Flexibilität.
			</h2>

            <!-- TODO: All Packages -->
            <p>
                <strong>Alle Pakete beinhalten:</strong>
            </p>

            <div class="co-grid">
                <div class="co-grid__col co-grid__col--6-xs">
                    <ul class="list list--checkmarks">
                        <li>Voicebot-Templates</li>
                        <li>FAQ-Sektion</li>
                        <li>Rufnummern</li>
                        <li>Datenfelder für den Export</li>
                        <li>Umfangreiches Statistikportal</li>
                    </ul>
                </div>
                <div class="co-grid__col co-grid__col--6-xs">
                    <ul class="list list--checkmarks">
                        <li>DTMF-Eingaben statt Spracherkennung</li>
                        <li>Live-KI-Dashboard</li>
                        <li>Stimmungsanalyse des Gesprächs</li>
                        <li>KI-basierte Gesprächszusammenfassung</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hero__image">
            <!-- TODO: Alt text -->
			<?= pictureTag(
				'/assets/images/illus/api-hero-illustration.svg',
				'',
				465, 336, [], false
			); ?>
        </div>
    </header>
</div>

<div class="section section--no-padding-top" style="--fs:16px">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--8-xs">
                <div class="vb-interval-toggle">
                    <div class="vg-interval-toggle__label">Monatlich</div>
                    <div class="vb-interval-toggle__toggle">
                        <input type="checkbox" name="vb-interval-toggle" id="vb-interval-toggle">
                        <label for="vb-interval-toggle"></label>
                    </div>
                    <div class="vg-interval-toggle__label"><strong>Jährlich <span class="tag tag--inline" style="--bg:#86ed18;--color:#000;--size:12px;--marginBottom:0">-20%</span></strong></div>
                </div>

                <div class="vb-packages">
                    <input type="radio" name="package" id="package-1" checked>
                    <label for="package-1" class="vb-package" data-price="124">
                        <h4>Startup</h4>
                        <div class="vb-package__price">
                            &euro;<em>124</em> <span>/ Monat</span>
                        </div>
                        <ul class="list list--checkmarks">
                            <li>Monatlich kündbar</li>
                            <li>14 Tage testen</li>
                            <li>500 Minuten inklusive<br /><span>jede weitere 15 Cent</span></li>
                            <li>3 Sprachkanäle</li>
                        </ul>
                    </label>
                    <input type="radio" name="package" id="package-2">
                    <label for="package-2" class="vb-package" data-price="249">
                        <h4>Small Business</h4>
                        <div class="vb-package__price">
                            &euro;<em>249</em> <span>/ Monat</span>
                        </div>
                        <ul class="list list--checkmarks">
                            <li>Monatlich kündbar</li>
                            <li>14 Tage testen</li>
                            <li>2.000 Minuten inklusive<br /><span>jede weitere 9,5 Cent</span></li>
                            <li>3 Sprachkanäle</li>
                        </ul>
                    </label>
                    <input type="radio" name="package" id="package-3">
                    <label for="package-3" class="vb-package" data-price="436">
                        <h4>Growing Business</h4>
                        <div class="vb-package__price">
                            &euro;<em>436</em> <span>/ Monat</span>
                        </div>
                        <ul class="list list--checkmarks">
                            <li>Monatlich kündbar</li>
                            <li>14 Tage testen</li>
                            <li>4.000 Minuten inklusive<br /><span>jede weitere 7,9 Cent</span></li>
                            <li>3 Sprachkanäle</li>
                        </ul>
                    </label>
                    <input type="radio" name="package" id="package-4">
                    <label for="package-4" class="vb-package vb-package--wide">
                        <h4>Enterprise</h4>
                        <div class="vb-package__price">
                            Individuelles Paket für Ihre Bedürfnisse
                        </div>
                        <div class="co-grid co-grid--no-margin-top">
                            <div class="co-grid__col co-grid__col--6-xs">
                                <ul class="list list--checkmarks">
                                    <li>Persönlicher Account-Manager</li>
                                    <li>Kundenspezifische Entwicklungen</li>
                                    <li>Rechts- und Sicherheitsunterstützung</li>
                                </ul>
                            </div>
                            <div class="co-grid__col co-grid__col--6-xs">
                                <ul class="list list--checkmarks">
                                    <li>SLA-Vereinbarung</li>
                                    <li>Entstörzeiten</li>
                                </ul>
                            </div>
                        </div>
                    </label>
                </div>

                <h2>Zusatzoptionen</h2>
                <p class="secondary">Passen Sie Ihr Telefonieerlebnis flexibel an Ihre Bedürfnisse an und buchen Sie Zusatzoptionen hinzu, die bestmöglich zu Ihren Bedürfnissen passen.</p>

                <div class="vb-additionals">
                    <input type="checkbox" name="vb-additional-1" id="vb-additional-1" data-price="25">
                    <label for="vb-additional-1" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Weitere Kanäle für Sprachtranskription</h4>
                        <div class="vb-additional__price">&euro;25 / Kanal</div>
                        <div class="vb-count">
                            <div class="vb-count__button vb-count__button--minus">-</div>
                            <div class="vb-count__current">1</div>
                            <div class="vb-count__button vb-count__button--plus">+</div>
                        </div>
                    </label>

                    <input type="checkbox" name="vb-additional-2" id="vb-additional-2" data-price="49">
                    <label for="vb-additional-2" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Echtzeit-API (Webhook)</h4>
                        <div class="vb-additional__price">&euro;49 / Monat<br />+ 0,19 Cent je Call</div>
                    </label>

                    <input type="checkbox" name="vb-additional-3" id="vb-additional-3" data-price="99">
                    <label for="vb-additional-3" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Gesprächs&shy;aufzeichnung</h4>
                        <div class="vb-additional__price">&euro;99 / Monat</div>
                    </label>

                    <input type="checkbox" name="vb-additional-4" id="vb-additional-4" data-price="19">
                    <label for="vb-additional-4" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Calendly-Integration</h4>
                        <div class="vb-additional__price">&euro;19 / Monat</div>
                    </label>

                    <input type="checkbox" name="vb-additional-5" id="vb-additional-5" data-price="29">
                    <label for="vb-additional-5" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Melodische Ansagen</h4>
                        <div class="vb-additional__price">&euro;29 / Monat</div>
                    </label>

                    <input type="checkbox" name="vb-additional-6" id="vb-additional-6" data-price="0">
                    <label for="vb-additional-6" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>SIP-Trunk</h4>
                        <div class="vb-additional__price">Auf Anfrage</div>
                    </label>

                    <input type="checkbox" name="vb-additional-7" id="vb-additional-7" data-price="0">
                    <label for="vb-additional-7" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Individuelle Ansagen</h4>
                        <div class="vb-additional__price">Auf Anfrage</div>
                    </label>

                    <input type="checkbox" name="vb-additional-8" id="vb-additional-8" data-price="0.25">
                    <label for="vb-additional-8" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Anrufweiterleitung auf extern</h4>
                        <div class="vb-additional__price">0,25 Cent / Min</div>
                    </label>

                    <input type="checkbox" name="vb-additional-9" id="vb-additional-9" data-price="0.35">
                    <label for="vb-additional-9" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Modulnutzung</h4>
                        <div class="vb-additional__price">0,35 Cent / Min</div>
                    </label>

                    <input type="checkbox" name="vb-additional-10" id="vb-additional-10" data-price="30">
                    <label for="vb-additional-10" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Persönliches Onboarding / Kundenmanager</h4>
                        <div class="vb-additional__price">&euro;30 / Stunde</div>
                    </label>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="vb-cart">
                    <div class="vb-cart__content">

                        <h5>Ihre Anfrage</h5>
                        <h6>Ihr Paket</h6>
                        
                        <div class="vb-selection co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                            <div class="co-grid__col co-grid__col--fill">
                                <strong class="vb-selection__title">Startup</strong>
                                
                                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
                                    <div class="co-grid__col co-grid__col--vcentered"><img src="/assets/images/icons_png/icon-calendar.png" alt="" /></div>
                                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">Monatlich kündbar</div>
                                </div>
                                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
                                    <div class="co-grid__col co-grid__col--vcentered"><img src="/assets/images/icons_png/icon-stopwatch.png" alt="" /></div>
                                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__minutes">500 Minuten inklusive<br /><span>jede weitere 15 Cent</span></div>
                                </div>
                                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
                                    <div class="co-grid__col co-grid__col--vcentered"><img src="/assets/images/icons_png/icon-phone-volume.png" alt="" /></div>
                                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">3 Sprachkanäle</div>
                                </div>
                            </div>
                            <div class="co-grid__col vb-selection__price">
                                <strong>&euro;124,00</strong><br />
                                / Monat
                            </div>
                        </div>
                    </div>

                    <div class="vb-cart__content">
                        <h6>Gewählte Zusatzoptionen</h6>
                        
                        <div class="vb-additionals-selected">Nichts ausgewählt...</div>
                    </div>

                    <div class="vb-cart__content">
                        <h6>Gesamtkosten</h6>

                        <div class="co-grid co-grid--small-gutter co-grid--no-margin-top co-grid--no-margin-bottom">
                            <div class="co-grid__col co-grid__col--fill">Einmalig:</div>
                            <div class="co-grid__col co-grid__col vb-selection__price"><strong>&euro;0,00</strong></div>
                        </div>
                        <div class="co-grid co-grid--small-gutter co-grid--no-margin-top co-grid--no-margin-bottom">
                            <div class="co-grid__col co-grid__col--fill">Monatlich:</div>
                            <div class="co-grid__col co-grid__col vb-selection__price vb-selection__total"><strong>&euro;0,00</strong><br />inkl. 19% MwSt.</div>
                        </div>

                        <a href="#" class="btn btn--primary btn--full-width centered">Weiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--black section--black-corner">
    <div class="section__content">
        <h2 class="centered">Häufig gestellte Fragen (FAQ)</h2>
        <?php
		$faqs->structured_data_get_code ();
		$faqs->html_get_code ('toggle-box--on-black');
		?>
    </div>
        
    <div class="section__content section__content--narrow centered">
        <h3>Noch Fragen offen?</h3>
        <p class="secondary">Bei Ihnen sind noch Fragen zu unserem Voicebot offen? Zögern Sie nicht - kontaktieren Sie uns!</p>
        <p>
            <a href="#" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">Kontakt aufnehmen</a>
        </p>
    </div>
</div>