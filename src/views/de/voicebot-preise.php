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

            <p>
                <strong>Alle Pakete beinhalten:</strong>
            </p>

            <div class="co-grid">
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                    <ul class="list list--checkmarks">
                        <li>Voicebot-Templates</li>
                        <li>FAQ-Sektion</li>
                        <li>Rufnummern</li>
                        <li>Datenfelder für den Export</li>
                        <li>Umfangreiches Statistikportal</li>
                    </ul>
                </div>
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
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
			<?= pictureTag(
				'/assets/images/illus/api-hero-illustration.svg',
				'Unsere Business-Pakete für den CallOne Voicebot',
				465, 336, [], false
			); ?>
        </div>
    </header>
</div>

<div class="section section--no-padding-top vb-cart-mobile-hook" style="--fs:16px">
    <div class="section__content section__content--wide">
        <a href="#cart" class="vb-cart-mobile">
            <h6>Aktuelle Gesamtkosten</h6>
            <div>
                <div class="vb-cart-mobile__monthly">Monatlich: 124,00 €</div>
            </div>
        </a>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md" id="content_success" style="display: none">
                <div class="vb-progress" style="--progress:100%">
                    <div class="vb-progress__step vb-progress__step--active" data-label="Übersicht"></div>
                    <div class="vb-progress__step vb-progress__step--active" data-label="Kontaktdaten"></div>
                    <div class="vb-progress__step vb-progress__step--active" data-label="Anfrage abgeschickt"></div>
                </div>

                <h2>Vielen Dank für Ihre Anfrage</h2>
                <p class="secondary">Ihre Angebotsanfrage hat uns erreicht. Wir werden uns umgehend mit Ihnen in Verbindung setzen.</p>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md" id="content_form" style="display: none">
                <div class="vb-progress" style="--progress:50%">
                    <div class="vb-progress__step vb-progress__step--active btn-prev-step" data-label="Übersicht"></div>
                    <div class="vb-progress__step vb-progress__step--active" data-label="Kontaktdaten"></div>
                    <div class="vb-progress__step" data-label="Anfrage abgeschickt"></div>
                </div>

                <h2>Ihre Kontaktdaten</h2>
                <p class="secondary">Damit wir wissen, wer Sie sind und wie wir Sie erreichen können, füllen Sie bitte die untenstehenden Formularfelder aus.</p>

                <br />

                <form action="#" method="post" class="floating-form" id="voicebot-form">
                    <h3>Angaben über Sie</h3>
                    <p>Zuerst würden wir gern wissen, wer Sie sind.</p>

                    <div class="floating-form__error">
                        <h2>Fehler</h2>
                        <p>Beim abschicken des Formulars ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.</p>
                    </div>

                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Ihr Vorname: *</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="firstname" placeholder=" " required>
                                <label>Vorname</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Ihr Nachname: *</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="lastname" placeholder=" " required>
                                <label>Nachname</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Ihre Position:</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="position" placeholder=" ">
                                <label>Customer Support / CEO / ...</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Ihre E-Mail-Adresse: *</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="email" placeholder=" " required>
                                <label>max@mustermann.de</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Ihre Telefonnummer:</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="phonenumber" placeholder=" ">
                                <label>+49 174 / 123 456 78</label>
                            </div>
                        </div>
                    </div>

                    <br />
                    
                    <h3>Angaben über Ihr Unternehmen</h3>
                    <p>Nun würden wir gern ein paar Dinge über das Unternehmen wissen, für das Sie anfragen.</p>

                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Firmenname: *</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="company" placeholder=" " required>
                                <label>Firma GmbH</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Unternehmensgröße:</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="employees" placeholder=" ">
                                <label>ca. 200</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Branche:</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="branche" placeholder=" ">
                                <label>E-Commerce / Handel / Bau / ...</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px">Firmenanschrift: *</div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="street" placeholder=" " required>
                                <label>Musterstrße 1</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__row">
                        <div class="floating-form__col" style="--maxWidth:200px"></div>
                        <div class="floating-form__col" style="--maxWidth:300px">
                            <div class="floating-form__field">
                                <input type="text" name="city" placeholder=" " required>
                                <label>12345 Musterstadt</label>
                            </div>
                        </div>
                    </div>

                    <?php
                    $path = json_encode($_SESSION['userRoute']);
                    foreach ($_SESSION['userRoute'] as $path) {
                        ?>
                        <input type="hidden" name="path[]" value="<?= $path; ?>">
                        <?php
                    }
                    ?>
                </form>
            </div>

            <div class="co-grid__col co-grid__col--12-xs co-grid__col--8-md" id="content_selection">
                <div class="vb-interval-toggle">
                    <div class="vg-interval-toggle__label">Monatlich</div>
                    <div class="vb-interval-toggle__toggle">
                        <input type="checkbox" name="vb-interval-toggle" id="vb-interval-toggle">
                        <label for="vb-interval-toggle"></label>
                    </div>
                    <div class="vg-interval-toggle__label"><strong>Jährlich <span class="tag tag--inline" style="--bg:#86ed18;--color:#000;--size:12px;--marginBottom:0">-20%</span></strong></div>
                </div>

                <div class="vb-packages">
                    
                </div>

                <h2>Zusatzoptionen</h2>
                <p class="secondary">Passen Sie Ihr Telefonieerlebnis flexibel an Ihre Bedürfnisse an und buchen Sie Zusatzoptionen hinzu, die bestmöglich zu Ihren Bedürfnissen passen.</p>

                <div class="vb-additionals">
                    <input type="checkbox" name="vb-additional" id="vb-additional-2" data-price="49" value="Echtzeit-API (Webhook)">
                    <label for="vb-additional-2" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Echtzeit-API (Webhook)</h4>
                        <div class="vb-additional__price">&euro;49 / Monat<br />+ 0,19 Cent je Call</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-3" data-price="99" value="Gesprächs&shy;aufzeichnung">
                    <label for="vb-additional-3" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Gesprächs&shy;aufzeichnung</h4>
                        <div class="vb-additional__price">&euro;99 / Monat</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-4" data-price="19" value="Calendly-Integration">
                    <label for="vb-additional-4" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Calendly-Integration</h4>
                        <div class="vb-additional__price">&euro;19 / Monat</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-5" data-price="29" value="Melodische Ansagen">
                    <label for="vb-additional-5" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Melodische Ansagen</h4>
                        <div class="vb-additional__price">&euro;29 / Monat</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-6" data-price="0" value="SIP-Trunk">
                    <label for="vb-additional-6" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>SIP-Trunk</h4>
                        <div class="vb-additional__price">Auf Anfrage</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-7" data-price="0" value="Individuelle Ansagen">
                    <label for="vb-additional-7" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Individuelle Ansagen</h4>
                        <div class="vb-additional__price">Auf Anfrage</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-8" data-price="0.25" value="Anrufweiterleitung auf extern">
                    <label for="vb-additional-8" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Anrufweiterleitung auf extern</h4>
                        <div class="vb-additional__price">0,25 Cent / Min</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-9" data-price="0.35" value="Modulnutzung">
                    <label for="vb-additional-9" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Modulnutzung</h4>
                        <div class="vb-additional__price">0,35 Cent / Min</div>
                    </label>

                    <input type="checkbox" name="vb-additional" id="vb-additional-10" data-price="30" value="Persönliches Onboarding / Kundenmanager">
                    <label for="vb-additional-10" class="vb-additional">
                        <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                        <h4>Persönliches Onboarding / Kundenmanager</h4>
                        <div class="vb-additional__price">&euro;30 / Stunde</div>
                    </label>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <div class="vb-cart" id="cart">
                    <div class="vb-cart__content vb-cart__content--no-gutter-bottom">
                        <h5>Ihre Anfrage</h5>
                    </div>

                    <div class="vb-cart__scroll">
                        <div class="vb-cart__content vb-cart__content--no-gutter-top">
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
                                </div>
                                <div class="co-grid__col vb-selection__price">
                                    <strong>&euro;124,00</strong><br />
                                    / Monat
                                </div>
                            </div>
                        </div>

                        <div class="vb-cart__content vb-cart__content--no-gutter-bottom">
                            <h6>Gewählte Zusatzoptionen</h6>
                            
                            <div class="vb-additionals-selected">Nichts ausgewählt...</div>
                        </div>
                    </div>

                    <div class="vb-cart__content">
                        <h6>Gesamtkosten</h6>

                        <div class="co-grid co-grid--small-gutter co-grid--no-margin-top co-grid--no-margin-bottom">
                            <div class="co-grid__col co-grid__col--fill">Monatlich:</div>
                            <div class="co-grid__col co-grid__col vb-selection__price vb-selection__total"><strong>&euro;0,00</strong><br />inkl. 19% MwSt.</div>
                        </div>

                        <a href="#" class="btn btn--primary btn--full-width centered btn-next-step">Weiter</a>
                        <input type="submit" class="btn btn--primary btn--full-width centered btn-submit" form="voicebot-form" style="margin-top: 30px;display: none" value="Angebot anfordern" />
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