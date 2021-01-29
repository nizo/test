<?php
$jobs = jobs_load ();
$jobs_benefits = jobs_benefits_load ();
?>

<script>
	jsFiles.push("/assets/javascripts/custom/karriere.js");
</script>

<!-- Header -->
<div class="wrapper solutions-header">
	<div class="content wide noOverflow">
		<header class="main-header">
			<div class="text">
				<h1>Da bist du ja – du fehlst bei uns!</h1>
				<p class="primary">Deutschland im Jahr 2021... Die Digitalisierung schreitet voran wie nie zuvor. CallOne liefert Unternehmen cloudbasierte Telekommunikationslösungen mit denen Unternehmen den Herausforderungen in einer sich schnell ändernden digitalen Welt optimal gerüstet sind.</p>
				<div class="button-set">
					<a class="openModal button tertiary rounded trackedElement" data-label="Button TopHeader - 10 Sekunden Bewerbung" data-category="Link" data-action="Show 10 Sekunden Bewerbung Modal" data-modal="shortApplication">10 Sekunden Bewerbung</a>

					<a class="button secondary rounded trackedElement" href="#jobs">Offene Stellen</a>
				</div>
			</div>
			<div class="media animation animation-bg lazyBackground karriere">
				<div id="lottie" class="job"></div>
				<script>jsFiles.push("/assets/animations/svg/karriere.js");</script>
			</div>
		</header>
	</div>
</div>

<div class="wrapper">
	<div class="content wide">
		<p class="centered">Alles auf Erfolg: Diese Marken vertrauen auf <span class="font-headline">CallOne Lösungen</span></p>

		<?php getLogoParade([   
							['data' => 'logo-bett1-2.png', 'alt' => 'Kunde Bett1.de', 'cssClass' => 'partnerLogo small'],
							['data' => 'logo-check24-2.png', 'alt' => 'Kunde Check24', 'cssClass' => 'partnerLogo small'],
							['data' => 'logo-sixt-2.png', 'alt' => 'Kunde Sixt', 'cssClass' => 'partnerLogo small'],
							['data' => 'logo-snipes-2.png', 'alt' => 'Unser Kunde Snipes', 'cssClass' => 'partnerLogo small'],
							['data' => 'logo-sodastream-2.svg', 'alt' => 'Unser Kunde SodaStream', 'cssClass' => 'partnerLogo small']
		], null, 'startpage'); ?>
	</div>
</div>

<!-- Aktuelle Stellenangebote -->
<div class="wrapper integrations padding-top-80 padding-bottom-80">
	<div class="content narrow">
		<h2 id="jobs">Offene Stellen</h2>

		<div class="icon-cards">
			<?php
			foreach ($jobs as $job)
			{
				echo '<div class="icon-card">';
				
				if (!empty ($job->icon_get()))
					echo '<div class="icon-card__icon"><img src="'.$job->icon_get().'" alt="Job '.$job->title_get().'" /></div>';
				
				echo '<div class="icon-card__text">';
				echo '<h3>'.$job->title_get().'</h3>';
				echo '<p>'.$job->description_get().'</p>';
				echo '</div>';
				
				if (!empty ($job->url_get()))
					echo '<a href="'.$job->url_get().'" class="icon-card__button"></a>';

				echo '</div>';
			}
			?>
		</div>
	</div>
</div>

<div class="wrapper">
	<div class="content narrow centered">
		<div class="quote-container centered">
			<?php // FIXME: add this style to the css classes ?>
			<img src="/assets/images/photos/jamie2.jpg" style="width: 140px; border: 3px solid #3c3c3c; border-radius: 50%" alt="Jamie"/>
			<p class="font-secondary quote">„Ich stehe jeden Tag auf und freue mich auf die Arbeit. So sollte es jedem gehen.“<br/>Jamie, <span class="font-secondary bold">Projektleiterin</span><br/><br/></p>
		</div>
	</div>
</div>

<div class="wrapper">
	<div class="content wide mobile-hidden">
		<div class="grid">
			<div class="col-2">
				<div class="padding"> 
					<h3 class="h1">Wer wir sind</h3>
					<p>
						Unser Team besteht aus klugen, sympathischen Menschen mit verschiedensten Skills und Interessen.
						Uns ist der persönliche Austausch wichtig, sowohl mit unseren Kunden, als auch innerhalb der Firma.
						Deshalb wissen wir unsere Persönlichkeiten und Fähigkeiten gegenseitig wertzuschätzen.
						Wir glauben, dass man in einem guten sozialen Umfeld die beste und erfüllendste Arbeit machen kann.
					</p>
					<p><a href="/ueber-uns" class="button tertiary rounded">Mehr über uns</a></p>
				</div>
			</div>
			<div class="col-2">
				<div class="padding">
					<h3 class="h1">Was wir tun</h3>
					<p>
						CallOne versorgt modern denkende Unternehmen mit Telefontechnologie, die ihren Kunden zugute kommt.
						Wir bauen effiziente Produkte, die Officetelefonie besser, schneller und freundlicher macht
						— zum Beispiel cloudbasierte Software, Schnittstellen und Apps zu Anbietern wie Zendesk, Salesforce oder Tableau.
						<br/><br/>
					</p>
					<p><a href="/callcenter-software" class="button tertiary rounded">Mehr Details</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="content wide centered desktop-hidden">
		<h3 class="h1">Wer wir sind</h3>
		<p>
			Unser Team besteht aus klugen, sympathischen Menschen mit verschiedensten Skills und Interessen.
			Uns ist der persönliche Austausch wichtig, sowohl mit unseren Kunden, als auch innerhalb der Firma.
			Deshalb wissen wir unsere Persönlichkeiten und Fähigkeiten gegenseitig wertzuschätzen.
			Wir glauben, dass man in einem guten sozialen Umfeld die beste und erfüllendste Arbeit machen kann.
		</p>
	</div>

	<div class="content wide centered desktop-hidden">
		<h3 class="h1">Was wir tun</h3>
		<p>
			CallOne versorgt modern denkende Unternehmen mit Telefontechnologie, die ihren Kunden zugute kommt.
			Wir bauen effiziente Produkte, die Officetelefonie besser, schneller und freundlicher macht
			— zum Beispiel cloudbasierte Software, Schnittstellen und Apps zu Anbietern wie Zendesk, Salesforce oder Tableau.
		</p>
		<p class="bold">Dazu brauchen wir dich.</p>
	</div>
</div>

<div class="wrapper lightgrey-2 padding-top-80 padding-bottom-80">
	<div class="content wide">
		<div class="grid flex vcenter">
			<div class="col-3 padding-top-40">
				<h2>Keinen Bock mehr auf Startup?</h2>
				<p>Superhip, supercool, superstressig. Du bist aus den Startup-Schuhen herausgewachsen und suchst einen Job bei einem gefestigten Mittelständler?</p>
				<p><a href="#jobs" class="button tertiary rounded">Komm doch zu uns.</a></p>
			</div>

			<div class="col-3 mobile-hidden">
				<div class="scroller fadeOut-lightgrey-2" data-height="680">
					<div class="scroller-belt">
						<div class="scroller-content">
							<?php
							foreach ($jobs_benefits as $jobs_benefit)
							{
								echo '<div class="feature-box">';
								echo '<p><b>'.$jobs_benefit->title_get().'</b></p>';
								echo '<small>'.$jobs_benefit->text_get().'</small>';
								echo '</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-3 mobile-hidden">
				<div class="scroller fadeOut-lightgrey-2" data-height="680" data-reversed>
					<div class="scroller-belt">
						<div class="scroller-content">
							<?php
							foreach ($jobs_benefits as $jobs_benefit)
							{
								echo '<div class="feature-box">';
								echo '<p><b>'.$jobs_benefit->title_get().'</b></p>';
								echo '<small>'.$jobs_benefit->text_get().'</small>';
								echo '</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>