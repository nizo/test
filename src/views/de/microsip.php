<div class="section">
	<header class="hero">
		<div class="hero__text">
			<h1>MicroSIP vorkonfiguriert! Anmelden, downloaden, lostelefonieren</h1>
			<p class="bigtext">Um Dir den Konfigurationsaufwand zu ersparen, bieten wir einen vorkonfigurierten SIP-Client an.</p>
		</div>
		<div class="hero__image">
			<div id="lottie"></div>
			<?php $additional_js_files[] = '/assets/animations/svg/karriere.js' ?>
		</div>
	</header>
</div>

<div class="section section--black">
	<div class="section__content section__content--wide">
		<div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
				<div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
					<div class="co-grid__col" style="font-size:72px">
						1
					</div>
					<div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						Du gibst Deine<br/>
						CallOne Agentendaten ein.
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
				<div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
					<div class="co-grid__col" style="font-size:72px">
						2
					</div>
					<div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						Die angebotene ZIP-Datei lädst Du runter<br/>
						und entpackst sie.
					</div>
				</div>
			</div>
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--4-sm">
				<div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
					<div class="co-grid__col" style="font-size:72px">
						3
					</div>
					<div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						In dem entpackten Ordner startest Du<br/>
						die Anwendung "microsip.exe" .
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="section__content section__content--narrow">
		<div class="content-box content-box--full-width content-box--shadow">
			<form action="#" method="post" id="formMicroSip" name="formMicroSip" class="floating-form">
				<div class="floating-form__hint" id="formMicroSipHint"></div>

				<div class="floating-form__row">
					<div class="floating-form__col">
						<div class="floating-form__field">
							<input type="text" name="formMicroSipUsername" id="formMicroSipUsername" class="name" placeholder=" " value="" required autocomplete="username">
							<label for="formMicroSipUsername">Dein CallOne Login</label>
						</div>
					</div>
					<div class="floating-form__col">
						<div class="floating-form__field">
							<input type="password" name="formMicroSipPassword" id="formMicroSipPassword" placeholder=" " value="" required autocomplete="current-password">
							<label for="formMicroSipPassword">Dein CallOne Passwort</label>
						</div>
					</div>
				</div>

				<button class="floating-form__submit" id="formMicroSipSubmit">Download</button>
			</form>
		</div>
	</div>
</div>