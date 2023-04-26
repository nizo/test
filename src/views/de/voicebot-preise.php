<?php
$faqs = new faqs ();
$faqs->faq_add (
    'Wie werden die inkludierten Minuten abgerechnet?',
    '<p>Die in Ihrem Preispaket enthaltenen Minuten gelten ausschließlich für die Nutzung unseres VoiceBot-Moduls. Wenn Anrufe an andere Routingmodule weitergeleitet werden oder vor der Nutzung des VoiceBots bereits andere Routings durchlaufen haben, werden diese Minuten nicht von Ihrem Kontingent abgezogen. Die Abrechnung Ihres Minutenkontingents erfolgt monatlich und wird sekundengenau berechnet. Nicht genutzte Minuten verfallen am Ende des Monats und werden nicht in den nächsten Monat übernommen.</p>'
);
$faqs->faq_add (
    'Wie unterscheiden sich die verschiedenen Preispakete?',
    '<p>Unsere Preispakete enthalten verschiedene Minutenkontingente, so dass Sie ein für Ihre Anforderungen passendes Paket wählen können. Zudem variiert die Anzahl der möglichen VoiceBot-Module je nach Paket. Im Einsteigerpaket können Sie bis zu 3 VoiceBots erstellen, die jeweils individuelle Themen abdecken  und bei Bedarf miteinander verknüpft werden können. Darüber hinaus bieten wir eine Vielzahl von Zusatzoptionen an, die bei Bedarf hinzugebucht werden können. Wir sind Ihnen gerne behilflich, das für Sie passende Paket zu ermitteln.</p>'
);
$faqs->faq_add (
    'Welches Language Model ist in jedem Paket enthalten?',
    '<p>Die Modelle mit inkludiertem ChatGPT-Account beruhen auf ChatGPT-3.5 turbo. Sollten Sie Ihren eigenen Account verwenden (Bring your own Bot), sind zusätzlich auch ChatGPT-4 oder andere KI wie z.B. Aleph Alpha möglich.</p>'
);
$faqs->faq_add (
    'Wie werden die Wörter in Prompts und Compilations gezählt und abgerechnet?',
    '<p>Bei den angebotenen Modellen mit inkludiertem ChatGPT-Account ist die Abrechnung von Prompts (Eingabe) und Compilations (Antwort) bereits in den Nutzungskosten pro Minute enthalten. Das bedeutet, dass keine Extrakosten für einen Tokenverbrauch bei OpenAI oder Microsoft anfallen. Diese Reglung gilt für unseren VoiceBot auf Basis von ChatGPT 3.5 turbo.</p><p>Wenn Sie wünschen, können Sie auch Ihre eigene OpenAI-Schnittstelle Davonci003, gpt-3.5 turbo oder gpt-4 anbinden. In diesem Fall erfolgt die Abrechnung direkt über Ihren OpenAI oder Microsoft-Account.</p>'
);
$faqs->faq_add (
    'Was passiert, wenn ich die in meinem Paket enthaltenen Minuten überschreite?',
    '<p>Darüber hinaus anfallende Gespräche werden sekundengenau mit dem im gebuchten Preispaket festgelegten Minutenpreis berechnet.</p>'
);
$faqs->faq_add (
    'Wie lang können meine hinterlegten FAQ sein?',
    '<p>Die Länge der FAQ wird durch die Beschränkungen des jeweiligen ChatGPT-Modells bestimmt. Beim GPT-4.0-Modell können beispielsweise pro Session und Bot bis zu 32.000 Tokens (etwa 24.000 Wörter) als Eingabe (Prompts) und Antwort (Completion) verwendet werden. Wir haben jedoch eine innovative Lösung entwickelt, um diese Beschränkung zu umgehen: Im Bereich der Extraoptionen haben Sie die Möglichkeit "Unbegrenzte Voicebot-Inhalte" hinzuzubuchen. Dadurch entfällt für Sie jede Limitierung bezüglich der angelieferten Inhalte und Sie können Ihre FAQ und weitere Informationen nach Belieben erweitern. Wir unterstützen Sie gerne dabei, Ihre individuellen Anforderungen umzusetzen. Kontaktieren Sie uns, um mehr zu erfahren!</p>'
);
$faqs->faq_add (
    'Kann ich die Abrechnung von Minuten limitieren?',
    '<p>Sie  haben die Möglichkeit festzulegen, wie lange und oft der VoiceBot am Tag von einem Anrufer angerufen werden darf. Bei Überschreitung des Limits können Sie den Anrufer eine Hinweisansage abspielen.</p>'
);
$faqs->faq_add (
    'Kann ich mein Preispaket jederzeit ändern oder kündigen?',
    '<p>Ja, der VoiceBot sowie die einzelnen Extraoptionen können jederzeit mit einer Frist von einem Monat zum Monatsende gekündigt werden. Änderungen sind zum Monatswechsel möglich.</p>'
);
$faqs->faq_add (
    'Bieten Sie Rabatte für längere Vertragslaufzeiten oder Großkunden an?',
    '<p>Ja, wir bieten mit unserem Paket „Flex“ eine passgenaue Option für Großkunden und gehen dabei individuell auf Ihre Anforderungen ein.</p>'
);
$faqs->faq_add (
    'Wie kann ich meine aktuelle Nutzung einsehen und überwachen?',
    '<p>Über unser VoiceBot-Dashboard haben Sie jederzeit die Möglichkeit laufende Gespräche zu überwachen oder weitere Informationen zu abgeschlossenen Anrufen zu erhalten. Hier wird Ihnen unter anderem der Gesprächsverlauf zusammengefasst und die Stimmung des Anrufers eingeschätzt.</p>'
);
$faqs->faq_add (
    'Ist technischer Support in den Preispaketen enthalten?',
    '<p>Ja, wir sind Ihnen gerne bei der Erstellung Ihres VoiceBots behilflich. Weitere Kosten fallen dafür in der Regel nicht an.</p>'
);
$faqs->faq_add (
    'Gibt es eine kostenlose Testversion oder einen Demo-Zugang, um den Voicebot auszuprobieren?',
    '<p>Ja, wir bieten Ihnen 14 Tage lang die Möglichkeit unseren VoiceBot kostenfrei und unverbindlich zu testen. Der Testzeitraum endet automatisch.</p>'
);
$faqs->faq_add (
    'Kann ich den Voicebot selbst einrichten oder kann die Einrichtung auch von Ihrem Support nach meinen Vorgaben umgesetzt werden?',
    '<p>Bei der Einrichtung sind Sie vollkommen unabhängig von uns und können alle Einstellungen jederzeit selbst vornehmen. Sollten Sie Unterstützung benötigen, sind wir Ihnen selbstverständlich gerne bei der Erstellung Ihres VoiceBots behilflich und werden Ihre Anforderungen passgenau mit Ihnen umsetzen.</p>'
);
?>

<div class="section section--light-green-white section--mobile-divider">
    <header class="hero">
        <div class="hero__text" style="max-width:710px">
			<div class="tag" style="--bg:#dafabc;--color:#000">
				ChatGPT &times; VoiceBot
			</div>

            <h1>
                Die Zukunft des Kundenservice:<br />
                Passgenaue Pakete <br />für <span class="highlight">Ihr Business</span>
            </h1>
            <h2>
                Entdecken Sie flexible Preismodelle für unseren leistungsstarken ChatGPT-Voicebot &ndash; maßgeschneidert für Ihre individuellen Bedürfnisse und Anforderungen.
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
    <div class="section__content section__content--wide" style="--maxWidth:1040px">
        <a href="#cart" class="vb-cart-mobile">
            <h6>Aktuelle Gesamtkosten</h6>
            <div>
                <div class="vb-cart-mobile__monthly">Monatlich: 124,00 €</div>
            </div>
        </a>

        <div id="content_success" style="display: none">
            <div class="vb-progress" style="--progress:100%">
                <div class="vb-progress__step vb-progress__step--active" data-label="Übersicht"></div>
                <div class="vb-progress__step vb-progress__step--active" data-label="Kontaktdaten"></div>
                <div class="vb-progress__step vb-progress__step--active" data-label="Anfrage abgeschickt"></div>
            </div>

            <h2>Vielen Dank für Ihre Anfrage</h2>
            <p class="secondary">Ihre Angebotsanfrage hat uns erreicht. Wir werden uns umgehend mit Ihnen in Verbindung setzen.</p>
        </div>

        <div id="content_form" style="display: none">
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
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="firstname" placeholder=" " required>
                            <label>Ihr Vorname *</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="lastname" placeholder=" " required>
                            <label>Ihr Nachname *</label>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="email" placeholder=" " required>
                            <label>Ihre E-Mail Adresse *</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="phonenumber" placeholder=" ">
                            <label>Ihre Telefonnummer</label>
                        </div>
                    </div>
                </div>

                <br />
                
                <h3>Angaben über Ihr Unternehmen</h3>
                <p>Nun würden wir gern ein paar Dinge über das Unternehmen wissen, für das Sie anfragen.</p>

                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="company" placeholder=" " required>
                            <label>Firmenname *</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="position" placeholder=" ">
                            <label>Ihre Position</label>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="employees" placeholder=" ">
                            <label>Unternehmensgröße</label>
                        </div>
                    </div>
                    <div class="floating-form__col">
                        <div class="floating-form__field">
                            <input type="text" name="branche" placeholder=" ">
                            <label>Branche</label>
                        </div>
                    </div>
                </div>

                <div class="floating-form__row">
                    <div class="floating-form__col">
                        <div class="floating-form__checkbox">
                            <input type="checkbox" name="newsletter" id="newsletter" />
                            <label for="newsletter">Ich interessiere mich für den <strong>Newsletter</strong> (Abmeldung jederzeit möglich)</label>
                        </div>
                    </div>
                </div>
                <div class="floating-form__row">
                    <div class="floating-form__privacy-toggle" style="width:100%">
                        <input type="checkbox" id="privacy" required="required" />
                        <label for="privacy">
                            Ich habe die <a href="/downloads/Informationen-zur-Erhebung-personenbezogener-Daten-im-Bewerbungsverfahren.pdf" target="_blank">Datenschutzbestimmungen</a> gelesen.
                        </label>
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

        <div id="content_selection">
            <h2 class="centered">VoiceBots für jede Unternehmsgröße</h2>

            <ul class="list list--checkmarks list--horizontal" style="justify-content:center">
                <li>14 Tage kostenfrei testen</li>
                <li>ohne Kreditkarte</li>
                <li>monatlich kündbar</li>
            </ul>

            <div class="vb-packages"></div>

            <h2>Extras hinzufügen</h2>
            <p class="secondary">Bleiben Sie flexibel! Konfigurieren Sie Ihren VoiceBot nach Ihren persönlichen Wünschen. Keine Sorge, Sie können hier flexibel monatlich Änderungen vornehmen.</p>

            <div class="vb-additionals">
                <input type="checkbox" name="vb-additional" id="vb-additional-1" data-price="0" value="10 Rufnummern aus Ihrem Vorwahlbereich" checked disabled>
                <label for="vb-additional-1" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>10 Rufnummern aus Ihrem Vorwahlbereich</h4>
                    <div class="vb-additional__price">kostenfrei</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-2" data-price="50" value="Weitere VoiceBot Templates">
                <label for="vb-additional-2" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Weitere VoiceBot Templates</h4>
                    <div class="vb-additional__price">&euro;50 / Template</div>
                    <div class="vb-count">
                        <div class="vb-count__button vb-count__button--minus">-</div>
                        <div class="vb-count__current">1</div>
                        <div class="vb-count__button vb-count__button--plus">+</div>
                    </div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-3" data-price="49" value="Echtzeit-API (Webhook)">
                <label for="vb-additional-3" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Echtzeit-API (Webhook)</h4>
                    <div class="vb-additional__price">&euro;49 / Monat<br />+ 0,019€ / Anruf</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-4" data-price="99" value="Gesprächs&shy;aufzeichnung">
                <label for="vb-additional-4" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Gesprächs&shy;aufzeichnung</h4>
                    <div class="vb-additional__price">&euro;99 / Monat</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-5" data-price="0" value="Anrufweiterleitung">
                <label for="vb-additional-5" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Anruf&shy;weiterleitung</h4>
                    <div class="vb-additional__price">ab &euro;0,02 / Minute</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-6" data-price="99" value="Automatischer Rückruf">
                <label for="vb-additional-6" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Automatischer Rückruf</h4>
                    <div class="vb-additional__price">&euro;99 + Nutzungskosten</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-7" data-price="199" value="Unbegrenzte VoiceBot Inhalte">
                <label for="vb-additional-7" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Unbegrenzte VoiceBot Inhalte</h4>
                    <div class="vb-additional__price">&euro;199 / Monat</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-8" data-price="29" value="Ansagen-Mixer">
                <label for="vb-additional-8" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Ansagen-Mixer</h4>
                    <div class="vb-additional__price">&euro;29 / Monat</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-9" data-price="0" value="SIP-Trunk kanalbasiert">
                <label for="vb-additional-9" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>SIP-Trunk kanalbasiert</h4>
                    <div class="vb-additional__price">individuell auf Anfrage</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-10" data-price="49" value="Calendly-Integration (beta)">
                <label for="vb-additional-10" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Calendly-Integration</h4>
                    <div class="vb-additional__price">&euro;49 / Monat</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-11" data-price="99" value="Doctolib-Anbindung (beta)">
                <label for="vb-additional-11" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Doctolib-Anbindung</h4>
                    <div class="vb-additional__price">&euro;99 / Monat</div>
                </label>

                <input type="checkbox" name="vb-additional" id="vb-additional-12" data-price="29" value="Persönliches Onboarding & Support">
                <label for="vb-additional-12" class="vb-additional">
                    <div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span>TODO: Lorem ipsum</span></div>
                    <h4>Persönliches Onboarding & Support</h4>
                    <div class="vb-additional__price">&euro;29 / Stunde</div>
                </label>
            </div>
        
            <div class="vb-cart-container">
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
                                    
                                </div>
                                <div class="co-grid__col vb-selection__price">
                                    <strong>&euro;124,00</strong><br />
                                    / Monat
                                </div>
                            </div>

                            <div class="vb-selection-attributes" style="margin-top:0">
                                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
                                    <div class="co-grid__col co-grid__col--vcentered"><img src="/assets/images/icons_svg/icon-gauge.svg" alt="" style="width:16px;height:16px" /></div>
                                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__minutes"></div>
                                </div>
                                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
                                    <div class="co-grid__col co-grid__col--vcentered"><img src="/assets/images/icons_svg/icon-phone.svg" alt="" style="width:16px;height:16px" /></div>
                                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__extra-minutes"></div>
                                </div>
                                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
                                    <div class="co-grid__col co-grid__col--vcentered"><img src="/assets/images/icons_svg/icon-message.svg" alt="" style="width:16px;height:16px" /></div>
                                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__bots"></div>
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
                            <div class="co-grid__col co-grid__col co-grid__col--vcentered vb-selection__price vb-selection__total"><strong>&euro;0,00</strong><br />zzgl. 19% MwSt.</div>
                        </div>

                        <a href="#" class="btn btn--primary btn--full-width centered btn-next-step">Zum nächsten Schritt</a>
                        <input type="submit" class="btn btn--primary btn--full-width centered btn-submit" form="voicebot-form" style="margin-top: 30px;display: none" value="14 Tage kostenlos testen" />

                        <p class="centered" style="font-size: 12px; opacity:.5;margin-top:.5rem">Endet automatisch,<br />keine Zahlungsdaten notwendig</p>
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