<div class="section section--mobile-divider">
    <div class="hero">
        <div class="hero__text">
            <h1>Jetzt Ihr <u>Einsparpotential</u> <br class="mobile-hidden" />durch CallOne-Lösungen entdecken!</h1>
            <p class="bigtext">Sie fragen sich, was Sie mit der CallOne-Lösung sparen können? Berechnen Sie gleich hier Ihr Potential. Fangen Sie noch heute an zu sparen!</p>

            <p class="mobile-centered">
				<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Beratungsgespräch sichern</a>
            </p>
        </div>
        <div class="hero__image">
			<?= pictureTag(
				'/assets/images/illus/zeit-und-kosten.svg',
				'Im Kundenservice mit Cloud ACD sparen',
				465, 420, [], false
			); ?>
        </div>
    </div>
</div>

<div class="section section--white-blue-white" id="mehrwertrechner">
	<div class="section__content section__content--narrow saving-calculation--mobile">
		<h2>Lust, Ihr Einsparpotential direkt hier zu berechnen?</h2>
		
		<div class="content-box content-box--white content-box--shadow">
			<p>
				<?= pictureTag(
					'/assets/images/icons_svg/open-desktop-browser.svg',
					'Open Desktop Browser für Mehrwertrechner Callcenter Software',
					48, 48
				); ?>
			</p>
			<h2>Lassen Sie uns dazu zum Desktop-Browser wechseln!</h2>
			<p>Wenn Sie uns Ihre ungefähre <strong>Anzahl an Anrufen pro Monat</strong> sowie die <strong>Menge Ihrer Agenten</strong> nennen, rechnen wir Ihnen gerne detailiert vor wir Ihnen durch Effizienzsteigerungen und Einsparpotenziale bares Geld schenken. Um Ihnen das vorzurechnen brauchen wir etwas mehr Platz als dieses Gerät bietet.</p>
		</div>
	</div>
	
	<div class="section__content section__content--wide section__content--no-gutter-top saving-calculation--desktop" id="mehrwertrechner-result">
		<div class="saving-calculation">
			<div class="atomic-loader atomic-loader--hidden">
				<div class="atomic-loader__circle"></div>
				<div class="atomic-loader__dots">
					<div class="atomic-loader__dot"></div>
					<div class="atomic-loader__dot"></div>
					<div class="atomic-loader__dot"></div>
					<div class="atomic-loader__dot"></div>
				</div>
			</div>
			
			<div class="saving-calculation__grid">
				<div class="saving-calculation__overlay">
					<h3>
						Jetzt persönliches Einsparpotential berechnen
					</h3>
					
					<form action="#" method="post" class="floating-form saving-calculation__form">
						<div class="floating-form__error">
							<p>Fehler, bitte versuchen Sie es erneut.</p>
						</div>
						<div class="floating-form__hint">
							<p>Bitte geben Sie Ihre persönlichen Kennzahlen ein um die mögliche Einsparung zu berechnen.</p>
						</div>

						<div class="floating-form__row">
							<div class="floating-form__icon">
								<?= pictureTag(
									'/assets/images/icons_svg/calls-per-month-big.svg',
									'Anrufe pro Monat Mehrwertrechner Callcenter Software',
									50, 51
								); ?>
							</div>
							<div class="floating-form__field floating-form__field--short">
								<input type="text" class="mouseflow-visible" name="calls" placeholder=" " autocomplete="off">
								<label>Hier eingeben, z.B. 10.000</label>
							</div>
							<div class="floating-form__description">
								Anrufzahl je Monat
							</div>
						</div>

						<div class="floating-form__row">
							<div class="floating-form__icon">
								<?= pictureTag(
									'/assets/images/icons_svg/menu-customer-service.svg',
									'Kundenservice Callcenter Software',
									50, 49
								); ?>
							</div>
							<div class="floating-form__field floating-form__field--short">
								<input type="text" class="mouseflow-visible" name="agents" placeholder=" " autocomplete="off">
								<label>Hier eingeben, z.B. 25</label>
							</div>
							<div class="floating-form__description">
								Anzahl Agent*innen
							</div>
						</div>

						<button class="floating-form__submit btn btn--primary" type="submit" style="margin-bottom:0;">Jetzt berechnen</button>
					</form>
				</div>

				<div class="co-grid co-grid--no-margin-top" style="--gutter:10px">
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--faded saving-calculation__col--anrufdauer">
						<div class="saving-calculation__col-loader"></div>

						<h5>Verkürzung der <br /><span>Anrufdauer</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">_ _ . _ _ _ €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/calls-per-month-small-black.svg',
											'Monatliche Anrufe Callcenter Software',
											40, 40
										); ?>
										<strong class="highlight nummer-anrufe">????</strong><br />
										<em>Anrufe pro Monat</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Anzahl der Anrufe Callcenter Software',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="einspareffekt-anruf">?s</strong><br />
										<em>Angenommener<br />Einspareffekt</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="gesparte-sekunden">= ?s</strong>
									</div>
									<div class="saving-calculation__entry">
										oder
									</div>
									<div class="saving-calculation__entry">
										<strong>= <span class="gesparte-stunden">?h</span></strong>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="gesparte-stunden">?h</strong><br />
										<em>Einsparung<br />Stundenzahl</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Anzahl der Anrufe Callcenter Software',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="stundenlohn">?€</strong><br />
										<em>angenommener<br />Stundenlohn der<br />Agenten</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="monatliche-einsparung">?€</strong><br />
										<em>Monatliches<br />Kostensenkungs&shy;potential</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Anzahl',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="monate-im-jahr">?</strong><br />
										<em>Monate im<br />Jahr</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= <span class="total-ersparnis">?€</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content saving-calculation__content--blurred">
							<p>Durch intelligente Anrufvorqualifizierung schaffen wir es nachweislich, die durchschnittliche Dauer eines Anrufes um bis zu 30 Sekunden zu reduzieren, bzw. gänzlich automatisiert zu bearbeiten.<br /><br /></p>
							<p><strong>Unsere Tools dafür:</strong></p>
							<ul>
								<li>
									Anrufer-Vorqualifizierung
									<span class="tooltip tooltip--dark">
										<span>Ihre Agent*innen wissen bereits bei Gesprächsannahme um das Anliegen ihrer Anrufer.</span>
									</span>
								</li>
								<li>
									Automatisierung
									<span class="tooltip tooltip--dark">
										<span>Nicht alle Anliegen müssen von Agenten bearbeitet werden. Wir liefern die Schnittstellen und technischen Optionen für Selfservice am Telefon.</span>
									</span>
								</li>
								<li>
                                    CRM-Anbindung
									<span class="tooltip tooltip--dark">
										<span>Ihr CRM liefert die Informationen des Kunden. Wir liefern die passenden Schnittstellen, um es anzubinden.</span>
									</span>
								</li>
								<li>
									KI-Integration
									<span class="tooltip tooltip--dark">
										<span>Spracherkennung, Sprachausgabe, offene Schnittstellen bilden die Grundlage bei CallOne mittels KI Sachverhalte intelligent zu automatisieren.</span>
									</span>
								</li>
							</ul>

							<p>
								<a href="/callcenter-software-integrationen" class="btn btn--border-bottom btn--arrow-right-small">Automatisierung im Kundenservice</a>
							</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--faded saving-calculation__col--agentenauslastung">
						<div class="saving-calculation__col-loader"></div>

						<h5>Steigerung der <br /><span>Agentenauslastung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">_ _ . _ _ _ €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/calls-per-month-small-black.svg',
											'Anrufe pro Monat Callcenter Software',
											40, 40
										); ?>
										<strong class="highlight nummer-anrufe">????</strong><br />
										<em>Anrufe pro Monat</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Anzahl Erreichbarkeit',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="erreichbarkeitssteigerung">?%</strong><br />
										<em>gesteigerte<br />Erreichbarkeit</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>= <span class="mehr-anrufe">?</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>mehr angenommene<br />Anrufe (<span class="dauer-anruf">?</span> min/Call)</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="gesparte-stunden">?h</strong><br />
										<em>Einsparung<br />Stundenzahl</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Stundenlohn Anzahl',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="stundenlohn">?€</strong><br />
										<em>angenommener<br />Stundenlohn der<br />Agenten</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="monatliche-einsparung">?€</strong><br />
										<em>Monatliches<br />Kostensenkungs&shy;potential</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Mehrwerte Callcenter Software',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="monate-im-jahr">?</strong><br />
										<em>Monate im<br />Jahr</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= <span class="total-ersparnis">?€</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content saving-calculation__content--blurred">
							<p>Mehr Gespräche in gleicher Zeit führen und durch Verschiebung von sogenannten Anrufspitzen. CallOne liefert hier verschiedenste Tools um eine optimale Verteilung eingehender Anrufe in Ihrem Callcenter zu gewährleisten. </p>
							<p><strong>Unsere Tools dafür:</strong></p>
							<ul>
								<li>
                                    Virtuelle Warteschleifen
									<span class="tooltip tooltip--dark">
										<span>Anrufer warten virtuell und werden auf spätere Zeitpunkte verteilt in denen Ihre Agenten besser erreichbar sind.</span>
									</span>
								</li>
								<li>
									Automatisierter Rückruf aus Warteschleife
									<span class="tooltip tooltip--dark">
										<span>Anrufer erhalten einen gezielten Rückrufzeitpunkt außerhalb Ihrer Peaks benannt zu dem das System sie zurückruft.</span>
									</span>
								</li>
								<li>
									Realtime-Website Callback
									<span class="tooltip tooltip--dark">
										<span>Verkürzte Gesprächszeiten, denn der Callback bestimmt den optimalen Anrufzeitpunkt direkt auf Ihrer Webseite.</span>
									</span>
								</li>
								<li>
									Terminierter Rückruf
									<span class="tooltip tooltip--dark">
										<span>Stellen Sie vereinbarte Rückrufe individuell auf unserer Oberfläche ein. CallOne erledigt den Rest. </span>
									</span>
								</li>
							</ul>

							<p>
								<a href="/telefonanlage-mit-warteschleife" class="btn btn--border-bottom btn--arrow-right-small">Smarte Warteschleifenfunktionen</a>
							</p>
						</div>
					</div>
					<div class="co-grid__col co-grid__col--4-xs saving-calculation__col saving-calculation__col--faded saving-calculation__col--personalplanung">
						<div class="saving-calculation__col-loader"></div>
						
						<h5>Optimierte <br /><span>Personalplanung</span></h5>

						<div class="saving-calculation__calculation">
							<h6>
								Ermöglicht bis zu:<br />
								<span class="total-ersparnis">_ _ . _ _ _ €</span>
							</h6>

							<div class="saving-calculation__details">
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/Customer-Support-Black.svg',
											'Kundenservice Callcenter Software',
											40, 40
										); ?>
										<strong class="highlight nummer-agenten">????</strong><br />
										<em>Anzahl Agent*innen</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Mehrwerte Callcenter Software Personal',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="effizienzgewinn">?%</strong><br />
										<em>Effizienzgewinn<br />Personal</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong>= <span class="kosten-agent">?€</span></strong><br />
									</div>
									<div class="saving-calculation__entry">
										<em>Personalkosten<br />/jährlich</em>
									</div>
								</div>
								<div class="saving-calculation__row">
									<div class="saving-calculation__entry">
										<strong class="effizienzgewinn">?%</strong><br />
										<em>Effizienzgewinn<br />Personal</em>
									</div>
									<div class="saving-calculation__entry">
										<?= pictureTag(
											'/assets/images/icons_svg/x-times-black.svg',
											'Mehrwertrechner Callcenter Software',
											24, 24
										); ?>
									</div>
									<div class="saving-calculation__entry">
										<strong class="personalkosten-jahr">?€</strong><br />
										<em>Personalkosten<br />/jährlich</em>
									</div>
								</div>
								<div class="saving-calculation__total">
									<div class="saving-calculation__entry">
										<strong>= <span class="total-ersparnis">?€</span></strong>
									</div>
									<div class="saving-calculation__entry">
										<em>Jährliches<br />Kostensenkungs&shy;potential</em>
									</div>
								</div>
							</div>

							<div class="saving-calculation__toggle saving-calculation__toggle--open">Berechnung einblenden</div>
						</div>

						<div class="saving-calculation__content saving-calculation__content--blurred">
							<p>Steigern Sie die Leistung mit Echtzeit-Einblicken und motivieren Sie Ihre Mitarbeiter sich neue Grenzen zu setzen. CallOne liefert alle Daten für eine optimierte Personalplanung- und Auswertung.<br /><br /></p>
							<p><strong>Unsere Tools dafür:</strong></p>
							<ul>
								<li>
									BI-gesteuerte Arbeitszeitplanung- und Erfassung
									<span class="tooltip tooltip--dark">
										<span>Fertige BI-Konnektoren für Ihr Lieblingstool geben ihnen alle Daten für eine gezielte Personaleinsatzplanung.</span>
									</span>
								</li>
								<li>
									Realtime-Dashboards zur KPI-Optimierung
									<span class="tooltip tooltip--dark">
										<span>Wir liefern fertige Dashboards und  Schnittstellen, die Ihnen sekündlich relevante KPI vermitteln.</span>
									</span>
								</li>
								<li>
									Prozessoptimierung durch Call Tagging
									<span class="tooltip tooltip--dark">
										<span>Gesprächsmitschnitte oder Live-Coachings liefern wir in allen erdenklichen Formen - DSGVO-konform und anpassbar auf Ihre Anforderungen.</span>
									</span>
								</li>
								<li>
									Agenten-Performance Analyse
									<span class="tooltip tooltip--dark">
										<span>Wir liefern die vielleicht umfänglichsten Auswertungsmöglichkeiten für Ihre Agenten und Agentinnen.</span>
									</span>
								</li>
							</ul>

							<p>
								<a href="/tableau-callcenter-connector" class="btn btn--border-bottom btn--arrow-right-small">Prozessoptimierung</a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<h3>
				Jährliche Ersparnis bis zu:<br />
				<span>_ _ _ . _ _ _ €</span>
			</h3>

            <span class="saving-calculation__loading-text"></span>
		</div>

		<p class="centered">
			<a href="#" class="btn btn--primary" data-openmodal="contact-sales">Sales kontaktieren</a>
		</p>
	</div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Maximale Ersparnis bei maximaler Leistung</h2>
        <p class="centered mobile-left bigtext">Effizienz ist Trumpf. Darum beinhalten unsere Lösungen genau die Funktionen und Add-Ons, die Sie brauchen. So steigern Sie die Effizienz Ihrer Unternehmenstelefonie, erhöhen die Zufriedenheit Ihrer Kunden und sparen Ihrem Unternehmen bares Geld.</p>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
							<?= pictureTag(
								'/assets/images/icons_svg/callcenter-software-icon.svg',
								'Die CallCenter Software von CallOne',
								50, 50, [
									'style' => 'max-height:50px',
									'class' => 'co-grid__image--full-width'
								]
							); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Callcenter Software</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Unsere absolute Expertise! Steuern Sie Ihren Kundenservice und Sales einfach und effizient.</p>

                    <p><a href="/callcenter-software" class="btn btn--border-bottom btn--arrow-right-small">Bessere Businesstelefonie</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
							<?= pictureTag(
								'/assets/images/icons_svg/callback-icon-green.svg',
								'Bessere Erreichbarkeit mit Rückrufoptionen',
								50, 50, [
									'style' => 'max-height:50px',
									'class' => 'co-grid__image--full-width'
								]
							); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Smarte Warteschleifen</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Schnellerer Service, bessere Ergebnisse und eine solide Markenerfahrung durch bestes Warteschleifenmanagement.</p>

                    <p><a href="/telefonanlage-mit-warteschleife" class="btn btn--border-bottom btn--arrow-right-small">Bessere Warteschleifen</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom" style="--gutter:var(--gutter-xs)">
                        <div class="co-grid__col co-grid__col--vcentered">
							<?= pictureTag(
								'/assets/images/icons_svg/msteams-icon.svg',
								'MS Teams Telefonie als Integration in Ihre VoIP-Telefonanlage',
								50, 50, [
									'style' => 'max-height:50px',
									'class' => 'co-grid__image--full-width'
								]
							); ?>
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Teams-Telefonie</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Nahtlose Einbindung und einfache Nutzung von Microsoft Teams gefällig? Kein Problem!</p>

                    <p><a href="/ms-teams" class="btn btn--border-bottom btn--arrow-right-small">MS Teams verbinden</a></p>
                </div>
            </div>
        </div>
    </div>
</div>