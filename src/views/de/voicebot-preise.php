<?php
$faqs = new faqs();
$faqs->faq_add(
	'Wie werden die inkludierten Minuten abgerechnet?',
	'<p>Die in Ihrem Preispaket enthaltenen Minuten gelten ausschließlich für die Nutzung unseres VoiceBot-Moduls. Wenn Anrufe an andere Routingmodule weitergeleitet werden oder vor der Nutzung des VoiceBots bereits andere Routings durchlaufen haben, werden diese Minuten nicht von Ihrem Kontingent abgezogen. Die Abrechnung Ihres Minutenkontingents erfolgt monatlich und wird sekundengenau berechnet. Nicht genutzte Minuten verfallen am Ende des Monats und werden nicht in den nächsten Monat übernommen.</p>'
);
$faqs->faq_add(
	'Wie unterscheiden sich die verschiedenen Preispakete?',
	'<p>Unsere Preispakete enthalten verschiedene Minutenkontingente, so dass Sie ein für Ihre Anforderungen passendes Paket wählen können. Zudem variiert die Anzahl der möglichen VoiceBot-Module je nach Paket. Im Einsteigerpaket können Sie bis zu 3 VoiceBots erstellen, die jeweils individuelle Themen abdecken  und bei Bedarf miteinander verknüpft werden können. Darüber hinaus bieten wir eine Vielzahl von Zusatzoptionen an, die bei Bedarf hinzugebucht werden können. Wir sind Ihnen gerne behilflich, das für Sie passende Paket zu ermitteln.</p>'
);
$faqs->faq_add(
	'Welches Language Model ist in jedem Paket enthalten?',
	'<p>Die Modelle mit inkludiertem ChatGPT-Account beruhen auf ChatGPT-3.5 turbo. Sollten Sie Ihren eigenen Account verwenden (Bring your own Bot), sind zusätzlich auch ChatGPT-4 oder andere KI wie z.B. Aleph Alpha möglich.</p>'
);
$faqs->faq_add(
	'Wie werden die Wörter in Prompts und Compilations gezählt und abgerechnet?',
	'<p>Bei den angebotenen Modellen mit inkludiertem ChatGPT-Account ist die Abrechnung von Prompts (Eingabe) und Compilations (Antwort) bereits in den Nutzungskosten pro Minute enthalten. Das bedeutet, dass keine Extrakosten für einen Tokenverbrauch bei OpenAI oder Microsoft anfallen. Diese Regelung gilt für unseren VoiceBot auf Basis von ChatGPT 3.5 turbo.</p><p>Wenn Sie wünschen, können Sie auch Ihre eigene OpenAI-Schnittstelle Davonci003, gpt-3.5 turbo oder gpt-4 anbinden. In diesem Fall erfolgt die Abrechnung direkt über Ihren OpenAI oder Microsoft-Account.</p>'
);
$faqs->faq_add(
	'Was passiert, wenn ich die in meinem Paket enthaltenen Minuten überschreite?',
	'<p>Darüber hinaus anfallende Gespräche werden sekundengenau mit dem im gebuchten Preispaket festgelegten Minutenpreis berechnet.</p>'
);
$faqs->faq_add(
	'Wie lang können meine hinterlegten FAQ sein?',
	'<p>Die Länge der FAQ wird durch die Beschränkungen des jeweiligen ChatGPT-Modells bestimmt. Beim GPT-4.0-Modell können beispielsweise pro Session und Bot bis zu 32.000 Tokens (etwa 24.000 Wörter) als Eingabe (Prompts) und Antwort (Completion) verwendet werden. Wir haben jedoch eine innovative Lösung entwickelt, um diese Beschränkung zu umgehen: Im Bereich der Extraoptionen haben Sie die Möglichkeit "Unbegrenzte Voicebot-Inhalte" hinzuzubuchen. Dadurch entfällt für Sie jede Limitierung bezüglich der angelieferten Inhalte und Sie können Ihre FAQ und weitere Informationen nach Belieben erweitern. Wir unterstützen Sie gerne dabei, Ihre individuellen Anforderungen umzusetzen. Kontaktieren Sie uns, um mehr zu erfahren!</p>'
);
$faqs->faq_add(
	'Kann ich die Abrechnung von Minuten limitieren?',
	'<p>Sie  haben die Möglichkeit festzulegen, wie lange und oft der VoiceBot am Tag von einem Anrufer angerufen werden darf. Bei Überschreitung des Limits können Sie dem Anrufer eine Hinweisansage abspielen.</p>'
);
$faqs->faq_add(
	'Kann ich mein Preispaket jederzeit ändern oder kündigen?',
	'<p>Ja, der VoiceBot sowie die einzelnen Extraoptionen können jederzeit mit einer Frist von einem Monat zum Monatsende gekündigt werden. Änderungen sind zum Monatswechsel möglich.</p>'
);
$faqs->faq_add(
	'Bieten Sie Rabatte für längere Vertragslaufzeiten oder Großkunden an?',
	'<p>Ja, wir bieten mit unserem Paket „Flex“ eine passgenaue Option für Großkunden und gehen dabei individuell auf Ihre Anforderungen ein.</p>'
);
$faqs->faq_add(
	'Wie kann ich meine aktuelle Nutzung einsehen und überwachen?',
	'<p>Über unser VoiceBot-Dashboard haben Sie jederzeit die Möglichkeit laufende Gespräche zu überwachen oder weitere Informationen zu abgeschlossenen Anrufen zu erhalten. Hier wird Ihnen unter anderem der Gesprächsverlauf zusammengefasst und die Stimmung des Anrufers eingeschätzt.</p>'
);
$faqs->faq_add(
	'Ist technischer Support in den Preispaketen enthalten?',
	'<p>Ja, wir sind Ihnen gerne bei der Erstellung Ihres VoiceBots behilflich. Weitere Kosten fallen dafür in der Regel nicht an.</p>'
);
$faqs->faq_add(
	'Gibt es eine kostenlose Testversion oder einen Demo-Zugang, um den Voicebot auszuprobieren?',
	'<p>Ja, wir bieten Ihnen 14 Tage lang die Möglichkeit unseren VoiceBot kostenfrei und unverbindlich zu testen. Der Testzeitraum endet automatisch.</p>'
);
$faqs->faq_add(
	'Kann ich den Voicebot selbst einrichten oder kann die Einrichtung auch von Ihrem Support nach meinen Vorgaben umgesetzt werden?',
	'<p>Bei der Einrichtung sind Sie vollkommen unabhängig von uns und können alle Einstellungen jederzeit selbst vornehmen. Sollten Sie Unterstützung benötigen, sind wir Ihnen selbstverständlich gerne bei der Erstellung Ihres VoiceBots behilflich und werden Ihre Anforderungen passgenau mit Ihnen umsetzen.</p>'
);
?>

<div class="section section--light-green-white section--mobile-divider cart-wrapper-section">
	<header class="section__content section__content--wide">
		<div>
			<p class="" style="--bg:#dafabc;--color:#000">
				ChatGPT &times; VoiceBot
			</p>

			<h1 style="margin-top: 0 !important; max-width: 39rem">
				Unsere ChatGPT-VoiceBot Preise. <span class="highlight">Starte kostenlos</span>
			</h1>

			<div id="vb_intro-text">
				<h2>
					Exklusives Angebot: Gratis-Features bei jedem Paket!
					<div class="btn btn--primary btn--full-width centered"
						style="font-weight: bold; transform: scale(0.75); width: auto; margin-left: -1rem; pointer-events: none; display: inline-block; white-space: nowrap;">
						14+ Tage gratis testen!</div>
				</h2>

				<div class="co-grid" style="max-width: 39rem;">

					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<ul class="list list--checkmarks">
							<li class="list-upd">
								<div>Direkt einsatzfähiger VoiceBot mit ChatGPT 3.5 turbo (EU) <span
										class="tooltip tooltip--info tooltip--light"><span style="--fs:14px">Alles was
											notwendig ist, damit Sie direkt loslegen können mit Ihrem VoiceBot.
											NoCode-Interface, Spracherkenner, Testaccount mit Azure OpenAI
											(EU-Hosting)</span></span></div>
							</li>
							<li class="list-upd">
								<div>Inkludierte Minuten und 14 Tage kostenfrei testen <span
										class="tooltip tooltip--info tooltip--light"><span style="--fs:14px">Testen Sie
											kostenfrei und risikolos und nutzen Sie alle Pakete mit inkludierten
											Minutenkontingenten</span></span></div>
							</li>
							<li class="list-upd">
								<div>Echtzeit-Dashboard <span class="tooltip tooltip--info tooltip--light"><span
											style="--fs:14px">Echtzeitdarstellung der VoiceBot-Gesprächsverläufe mit
											Ihren
											Anrufern. Perfekt für die Analyse und Optimierung</span></span></div>
							</li>
						</ul>
					</div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
						<ul class="list list--checkmarks">
							<li class="list-upd">
								<div>KI-Basierte Gesprächs&shy;zusammenfassung <span
										class="tooltip tooltip--info  tooltip--light"><span style="--fs:14px">Der Inhalt
											all
											ihrer VoiceBot-Calls wird komfortabel für Sie in einer Zusammenfassung
											geliefert</span></span></div>
							</li>
							<li class="list-upd">
								<div>
									Stimmungsanalyse <span class="tooltip tooltip--info tooltip--light"><span
											style="--fs:14px">Erkennung von
											Ausdrucksweisen in Kundengesprächen</span></span>
								</div>
							</li>
							<li class="list-upd">
								<div>Rufnummern aus Ihrem Vorwahlbereich <span
										class="tooltip tooltip--info tooltip--light"><span style="--fs:14px">10 lokale
											Rufnummern zum Testen und Weiterleiten aus Ihrem Vorwahlbereich, die Sie für
											die
											Weiterleitung in Ihre Telefonnummer oder zum Testen nutzen
											können</span></span></div>
							</li>
						</ul>
					</div>
				</div>

			</div>


		</div>

	</header>
</div>

<div class="section section--no-padding-top vb-cart-mobile-hook" style="--fs:16px">
	<div class="section__content section__content--wide" style="">
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
			<p>Hallo <span class="name">Benutzer</span>,</p>
			<p>wir freuen uns, Ihnen mitzuteilen, dass Ihre Anfrage für die kostenfreie VoiceBot-Demo bei uns
				eingetrudelt ist. Dankeschön für Ihr Interesse! 😄​</p>
			<p>Aufgrund der hohen Nachfrage benötigen wir etwas Zeit, um Ihre Anfrage zu bearbeiten. Wir prüfen
				sorgfältig Ihre Daten und verifizieren Ihre Firma, um sicherzustellen, dass alles passt. 🕵️​</p>
			<p>Bitte haben Sie Verständnis, dass dieser manuelle Prüfungsprozess bis zu 3 Werktage dauern kann. Unser
				engagiertes Team gibt sein Bestes, um Ihren Demoaccount und die Testnummern so schnell wie möglich
				freizuschalten. ⏱️​</p>
			<p>Sobald alles erledigt ist, können Sie in die aufregende Welt der VoiceBots eintauchen und unser Angebot
				in vollem Umfang testen. 🚀​</p>
			<p>Wir bedanken uns erneut für Ihr Interesse und Ihre Geduld. Wir werden uns baldmöglichst mit weiteren
				Informationen bei Ihnen melden.</p>
			<p>Bis dahin wünschen wir Ihnen eine angenehme Zeit! 😊​</p>
			<p>
				Mit freundlichen Grüßen,<br />
				Ihr VoiceBot-Team 🤖​
			</p>
		</div>



		<div id="content_selection">

			<div class="co-grid">


				<div class="co-grid__col co-grid__col--12-xs co-grid__col--8-sm" id="checkout-wrap-stps">

					<div id="content_form" style="display: none">
						<div id="sidebar_move">


						</div>

						<div class="vb-progress" style="--progress:50%">
							<div class="vb-progress__step vb-progress__step--active btn-prev-step"
								data-label="Übersicht"></div>
							<div class="vb-progress__step vb-progress__step--active" data-label="Kontaktdaten"></div>
							<div class="vb-progress__step" data-label="Anfrage abgeschickt"></div>
						</div>

						<h2>Ihre Kontaktdaten</h2>
						<p class="secondary">Damit wir wissen, wer Sie sind und wie wir Sie erreichen können, füllen Sie
							bitte die untenstehenden Formularfelder aus.</p>

						<br />

						<form action="#" method="post" class="floating-form" id="voicebot-form">
							<h3>Angaben über Sie</h3>
							<p>Zuerst würden wir gern wissen, wer Sie sind.</p>

							<div class="floating-form__error">
								<h2>Fehler</h2>
								<p>Beim abschicken des Formulars ist ein Fehler aufgetreten. Bitte versuchen Sie es
									erneut.</p>
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
									<div class="floating-form__field">
										<input type="text" name="anwendungsfall" placeholder=" ">
										<label>Ihr Anwendungsfall</label>
									</div>
								</div>
							</div>

							<div class="floating-form__row">
								<div class="floating-form__col">
									<div class="floating-form__checkbox">
										<input type="checkbox" name="newsletter" id="newsletter" />
										<label for="newsletter">Ich interessiere mich für den
											<strong>Newsletter</strong> (Abmeldung jederzeit möglich)</label>
									</div>
								</div>
							</div>





							<div class="floating-form__row">
								<div class="floating-form__col">
									<div class="floating-form__checkbox">
										<input type="checkbox" name="privacy" id="privacy" required="required" />
										<label for="privacy">
											Ich habe die

											<?php if(isset($_GET['inopla_style'])){?>

											<a style="text-decoration: underline"
												href="https://www.inopla.de/datenschutz/"
												target="_blank">Datenschutzbestimmungen</a>

											<?php }else{ ?>

											<a style="text-decoration: underline"
												href="/downloads/Informationen-zur-Erhebung-personenbezogener-Daten-im-Bewerbungsverfahren.pdf"
												target="_blank">Datenschutzbestimmungen</a>

											<?php }?>

											gelesen.
										</label>
									</div>
								</div>
							</div>

							<input type="submit" class="btn btn--primary btn--full-width centered btn-submit"
								form="voicebot-form" style="margin-top: 3rem; " value="14 Tage kostenlos testen" />


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

					<div id="vb-choosing">

						<h2 class="centered">VoiceBots für jede Unternehmsgröße</h2>

						<ul class="list list--checkmarks list--horizontal"
							style="justify-content:center; font-weight: bold; font-size: 1.5rem; margin-bottom: 4rem">
							<li>14 Tage kostenfrei testen</li>
							<li>ohne Kreditkarte</li>
							<li>monatlich kündbar</li>
						</ul>


						<div class="vb-packages">

							<div class="vb-grid">

								<input type="radio" name="package" id="package-0" value="Einsteiger" checked="">
								<label for="package-0" class="vb-package" data-price="89">
									<h4>Einsteiger</h4>
									<div class="vb-package__subtitle">
										<p>Ideal für kleinere Unternehmen mit Wachstumsambitionen</p>
									</div>
									<div class="vb-package__price">€<em>89</em> <span>/ monatlich</span></div>
									<ul>
										<li>Bis zu 300 Minuten inkludiert</li>
										<li>Extra Minuten € 0,18 je Minute</li>
										<li><strong>3 VoiceBots inkludiert</strong></li>
									</ul>
								</label>
								<input type="radio" name="package" id="package-1" value="Fortgeschritten">

								<label for="package-1" class="vb-package" data-price="259">
									<div class="vb-package__ribbon">Beliebtester Tarif</div>
									<h4>Fortgeschritten</h4>
									<div class="vb-package__subtitle">
										<p>Ideal für Unternehmen mit frequentierter Kundenhotline</p>
									</div>
									<div class="vb-package__price">€<em>259</em> <span>/ monatlich</span></div>
									<ul>
										<li>Bis zu 1000 Minuten inkludiert</li>
										<li>Extra Minuten € 0,15 je Minute</li>
										<li><strong>5 VoiceBots inkludiert</strong></li>
									</ul>
								</label><input type="radio" name="package" id="package-2" value="Experte">
								<label for="package-2" class="vb-package" data-price="659">

									<h4>Experte</h4>
									<div class="vb-package__subtitle">
										<p>Für große Unternehmen, Poweruser &amp; Experten</p>
									</div>
									<div class="vb-package__price">€<em>659</em> <span>/ monatlich</span></div>
									<ul>
										<li>Bis zu 3500 Minuten inkludiert</li>
										<li>Extra Minuten € 0,12 je Minute</li>
										<li><strong>Unlimitierte VoiceBots inkludiert</strong></li>
									</ul>
								</label>

							</div>
						


							<input type="radio" name="package" id="package-3" value="Flex">
							<label for="package-3" class="vb-package" data-price="individuell"
								style="--bg:rgba(134, 238, 34, 0.2);--color:#000">

								<h4>Maßgeschneiderte Lösungen für maximale Flexibilität? CallOne Flex!</h4><br>
								<div class="vb-package__subtitle">
									<p>Unsere Flex-Lösung bietet maßgeschneiderte Unterstützung über Standardpakete
										hinaus, um Ihre Bedürfnisse effektiv zu bearbeiten.</p>
								</div>
							</label>
							

						</div>


						<div class="vb-additionals">


							<h2>Extras hinzufügen</h2>
							<p class="secondary">Bleiben Sie flexibel! Konfigurieren Sie Ihren VoiceBot nach Ihren
								persönlichen Wünschen. Keine Sorge, Sie können hier flexibel monatlich Änderungen
								vornehmen.<br><br><br></p>


							<input type="checkbox" name="vb-additional" id="vb-additional-1" data-price="0"
								value="10 Rufnummern aus Ihrem Vorwahlbereich" checked disabled>
							<label for="vb-additional-1" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Wir stellen Ihnen in jedem Paket kostenfrei 10 Rufnummern aus
										Ihrem Vorwahlbereich zur Verfügung, die Sie Verwenden können um Ihren VoiceBot
										direkt in Ihre Telefonanlage einzubinden und testweise anrufen können.</span>
								</div>
								<h4>10 Rufnummern aus Ihrem Vorwahlbereich</h4>
								<div class="vb-additional__price">kostenfrei</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-2" data-price="50"
								value="Weitere VoiceBots">
							<label for="vb-additional-2" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Mit den VoiceBots können Sie wenn notwendig mehrere VoiceBots
										in einem Kundenaccount erstellen. Sie haben die Option VoiceBot-Templates
										miteinander zu verknüpfen, beispielsweise indem der erste VoiceBot das
										Anruferanliegen erfasst und dann auf ein weiteres Template weiterleitet, dass
										ausschließlich genutzt wird um ein spezifisches Anliegen beispielsweise
										Rückrufentgegennahme oder Zählerstandserfassung abzuwickeln. Grundsätzlich
										können auch mehrere Anliegen in einem Template erfasst werden. Sprechen Sie
										gerne mit unserem Kundenservice, um hier eine Empfehlung zu erhalten.</span>
								</div>
								<h4>Weitere VoiceBots</h4>
								<div class="vb-additional__price">&euro;50 / VoiceBot</div>
								<div class="vb-count">
									<div class="vb-count__button vb-count__button--minus">-</div>
									<div class="vb-count__current">1</div>
									<div class="vb-count__button vb-count__button--plus">+</div>
								</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-3" data-price="49"
								value="Echtzeit-API (Webhook)">
							<label for="vb-additional-3" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Mit unserem Webhook, einer Echtzeit-Schnittstelle, die an Ihre
										Systeme alle Anrufinformationen und transkrebierten Gesprächsinformationen
										(Datenfelder) übermittelt. Dies kann neben der Anrufernummer und weiteren
										spezifischen Anrufinformationen auch Datenfelder sein, die der VoiceBot erfasst
										hat und in Ihrem System verarbeitet werden können. Mit unserer Schnittstelle
										können Sie zudem Rückinformationen an den VoiceBot übermitteln um
										kundenspezifische Anwendungsfälle abzubilden.</span></div>
								<h4>Echtzeit-API (Webhook)</h4>
								<div class="vb-additional__price">&euro;49 / Monat<br />+ &euro;0,019 je Anruf</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-4" data-price="99"
								value="Gesprächs&shy;aufzeichnung">
							<label for="vb-additional-4" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Sie möchten neben den transkribierten Gesprächsverläufen auch
										die dazu passenden Voicefiles abrufen können? Kein Problem! Diese Funktion macht
										es möglich.</span></div>
								<h4>Gesprächs&shy;aufzeichnung</h4>
								<div class="vb-additional__price">&euro;99 / Monat</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-5" data-price="0"
								value="Anrufweiterleitung">
							<label for="vb-additional-5" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Unser VoiceBot kann Gespräche auch auf Ihre Rufnummern
										weiterleiten. Damit sind Sie flexibel und können den Bot perfekt für
										Anrufqualifizierungen, als Ersatz für ein Auswahlmenü nutzen und auf
										unterschiedliche Einwahlrufnummern ihrer TK-Anlage weiterleiten. Die
										Weiterleitungskosten starten bei 0,02 € je Minute (1/1) in das dt. Festnetz.
										Sprechen Sie hierzu gerne mit unserem Vertrieb sollten Sie hohe Anrufvolumen
										weiterleiten wollen über individuelle Preisangebote.</span></div>
								<h4>Anruf&shy;weiterleitung</h4>
								<div class="vb-additional__price">ab &euro;0,02 / Minute</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-6" data-price="99"
								value="Automatischer Rückruf">
							<label for="vb-additional-6" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Unser Bot kann Rückrufe mit Ihren Kunden vereinbaren. Denken
										Sie an Ihre Hotline und die Option, dass Sie unseren KI-VoiceBot
										unterpriorisiert Anrufe in Ihrem Serviceteam entgegennehmen lassen. Er bietet
										über diese Funktion dem Anrufer Rückrufslots an, die völlig automatisiert zum
										gewünschten Zeitpunkt von aus durchgeführt werden indem wir zwei Verbindungen
										zum Anrufer und zur Zielrufnummer ihrer Skill in der TK-Anlage oder
										Agentendurchwahl aufbauen und die beiden zusammenschalten.</span></div>
								<h4>Automatischer Rückruf</h4>
								<div class="vb-additional__price">&euro;99 + Nutzungskosten</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-7" data-price="199"
								value="Unbegrenzte VoiceBot Inhalte">
							<label for="vb-additional-7" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Sie möchten unseren VoiceBot mit unzähligen FAQ ihres
										Unternehmensfüttern und alle Standardanfragen ihre Anrufer zunächst versuchen
										über den Bot zu beantworten? Prima! Genau dafür haben wir dieses Tool, dass die
										Limitierung von angelieferten Inhalten zu OpenAI aufhebt.</span></div>
								<h4>Unbegrenzte VoiceBot Inhalte</h4>
								<div class="vb-additional__price">&euro;199 / Monat</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-8" data-price="29"
								value="Ansagen-Mixer">
							<label for="vb-additional-8" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Ein innovatives Modul für Ihren VoiceBot, das professionelle
										Ansagen mit individuell ausgewählter Musik kombiniert. Ob GEMA-freie Musikstücke
										oder eigene Kompositionen - mit diesem Modul verleihen Sie Ihrem Anruferservice
										eine persönliche Note und sorgen für eine angenehme
										Warteschleifen-Atmosphäre.</span></div>
								<h4>Ansagen-Mixer</h4>
								<div class="vb-additional__price">&euro;29 / Monat</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-9" data-price="0"
								value="SIP-Trunk kanalbasiert">
							<label for="vb-additional-9" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Für die Anbindung unseres VoiceBots an Ihre TK-Anlage bieten
										wir optional auch einen internetbasierten Telefonanschluss (SIP-Trunk) bereit.
										Damit sparen Sie sich die Weiterleitung über das öffentliche Telefonnetz und
										nutzen kostenfreie Weiterleitung über eine gesicherte Internetleitung.</span>
								</div>
								<h4>SIP-Trunk kanalbasiert</h4>
								<div class="vb-additional__price">individuell auf Anfrage</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-10" data-price="49"
								value="Calendly-Integration (beta)">
							<label for="vb-additional-10" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Bieten Sie Ihren Anrufern die Möglichkeit Terminvorschläge aus
										Ihrem Calendly-Konto buchbar zu machen. Der Bot schlägt freie Slots vor und wir
										buchen Sie in Ihren Kalender ein.</span></div>
								<h4>Calendly-Integration (beta)</h4>
								<div class="vb-additional__price">&euro;49 / Monat</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-11" data-price="99"
								value="Doctolib-Anbindung (beta)">
							<label for="vb-additional-11" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Sie sind Arzt und würden sich nix lieber wünschen als
										Terminbuchungen zukünftig durch den Bot statt durch ihre medizinische
										Fachangestellte durchführen lassen? Dann testen Sie unsere VoiceBot-Option die
										genau das bietet und daneben auch Termine, Rezepte oder Rückrufwünsche für Sie
										abnehmen kann.</span></div>
								<h4>Doctolib-Anbindung (beta)</h4>
								<div class="vb-additional__price">&euro;99 / Monat</div>
							</label>

							<input type="checkbox" name="vb-additional" id="vb-additional-12" data-price="30"
								value="Persönlicher Customer Success Manager">
							<label for="vb-additional-12" class="vb-additional">
								<div class="vb-additional__info tooltip tooltip--full-dark tooltip--info"><span
										style="--fs:14px">Unser Support unterstützt Sie bei der Einrichtung Ihres
										VoiceBots. Benötigen Sie, bei komplexeren Projekten, Unterstützung durch unsere
										Lösungsarchitekten oder Programmierer dann steht Ihnen auch dafür ein
										Projektteam zur Verfügung. Sprechen Sie uns an und Sie erhalten für Ihr Projekt
										eine valide Aufwandsabschätzung.</span></div>
								<h4>Persönlicher Customer Success Manager</h4>
								<div class="vb-additional__price">&euro;30 / 15 Minuten</div>
							</label>
						</div>




					</div>


				</div>

				<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm" id="vb-cart-container">

					<div class="vb-cart-container">

						<div class="vb-cart" id="cart">
							<div class="vb-cart__content vb-cart__content--no-gutter-bottom">
								<h5>Ihre Anfrage</h5>

								<p class="vb-cart__info">
									14 Tage kostenlos ausprobieren,<br />
									keine automatische Verlängerung,<br />
									monatlich kündbar
								</p>
							</div>
							<div class="vb-cart-wrap_c">
								<div class="vb-cart__content">
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
										<div
											class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
											<div class="co-grid__col co-grid__col--vcentered">
												<div class="cart-icon-img gauge-img-cr"></div>
											</div>
											<div
												class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__minutes">
											</div>
										</div>
										<div
											class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
											<div class="co-grid__col co-grid__col--vcentered">
												<div class="cart-icon-img phone-img-cr"></div>
											</div>
											<div
												class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__extra-minutes">
											</div>
										</div>
										<div
											class="co-grid co-grid--no-margin-top co-grid--no-margin-botton co-grid--small-gutter">
											<div class="co-grid__col co-grid__col--vcentered">
												<div class="cart-icon-img message-img-cr"></div>
											</div>
											<div
												class="co-grid__col co-grid__col--fill co-grid__col--vcentered vb-selection__bots">
											</div>
										</div>

										<ul class="list-line-cart">
											<li>Direkt einsatzfähiger VoiceBot mit ChatGPT 3.5 turbo (EU)</li>
											<li>Inkludierte Minuten und 14 Tage kostenfrei testen</li>
											<li>Echtzeit-Dashboard</li>
											<li>KI-basierte Gesprächszusammenfassung</li>
											<li>Rufnummern aus Ihrem Vorwahlbereich</li>
										</ul>
									</div>
								</div>

								<div class="vb-cart__right">
									<div class="vb-cart__content vb-cart__content--no-gutter-bottom">
										<h6>Gewählte Zusatzoptionen</h6>

										<div class="vb-additionals-selected">Nichts ausgewählt...</div>
									</div>

									<div class="vb-cart__content">
										<h6>Gesamtkosten</h6>

										<div
											class="co-grid co-grid--small-gutter co-grid--no-margin-top co-grid--no-margin-bottom">
											<div class="co-grid__col co-grid__col--fill">Monatlich:</div>
											<div
												class="co-grid__col co-grid__col co-grid__col--vcentered vb-selection__price vb-selection__total">
												<strong>&euro;0,00</strong><br />Exklusive MwSt.</div>
										</div>

										<a href="#" class="btn btn--primary btn--full-width centered btn-next-step">Zum
											nächsten Schritt</a>


										<p class="centered" style="font-size: 12px; opacity:.5;margin-top:.5rem">Endet
											automatisch,<br />keine Zahlungsdaten notwendig</p>
									</div>
								</div>
							</div>
						</div>

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
		$faqs->structured_data_get_code();
		$faqs->html_get_code('toggle-box--on-black');
		?>
	</div>

	<div class="section__content section__content--narrow centered">
		<h3>Noch Fragen offen?</h3>
		<p class="secondary">Bei Ihnen sind noch Fragen zu unserem Voicebot offen? Zögern Sie nicht - kontaktieren Sie
			uns!</p>
		<p>

			<?php if(isset($_GET['inopla_style'])){?>

			<a href="https://inopla.de/kontakt/" class="btn btn--primary tracked-ipokla" target="_blank">Kontakt
				aufnehmen</a>

			<?php }else{ ?>

			<a href="#" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">Kontakt
				aufnehmen</a>

			<?php }?>

		</p>

	</div>
</div>