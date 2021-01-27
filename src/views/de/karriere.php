<?php
class job
{
	public $title;
	public $description;
	public $link;
	public $icon;

	function __construct ($title, $infos, $description, $link, $icon)
	{
		$this->title			= $title;
		$this->infos			= $infos;
		$this->description		= $description;
		$this->link				= $link;
		$this->icon				= $icon;
	}
}

class feature
{
	public $title;
	public $text;

	function __construct ($title, $text)
	{
		$this->title	= $title;
		$this->text		= $text;
	}
}


$jobs = array ();
$jobs[] = new job ('Customer Success Manager*in',
				   'Potsdam · unbefristet · (m/w/d)',
				   'Du liebst den Umgang mit Menschen, kommunizierst mühelos mit Kunden und hast eine schnelle technische Auffassungsgabe?',
				   '/karriere/job-customer-success-manager-potsdam',
				   '/assets/images/icons_svg/job_02.svg');
$jobs[] = new job ('Kauffrau/-mann für Bürokommunikation',
				   'Potsdam · unbefristet · (m/w/d)',
				   '<span class="color-green">FIXME</span>',
				   '',
				   '/assets/images/icons_svg/job_05.svg');
$jobs[] = new job ('IT-Systemkaufmann/-frau',
				   'Potsdam · unbefristet · (m/w/d)',
				   '<span class="color-green">FIXME</span>',
				   '',
				   '/assets/images/icons_svg/job_02.svg');
$jobs[] = new job ('IT-Support',
				   'Potsdam · unbefristet · (m/w/d)',
				   'Du hast ein solides Arsenal technisches Wissen und kannst Partner, Kunden und IT-Mitarbeiter umfassend betreuen?',
				   '/karriere/it-helpdesk-potsdam',
				   '/assets/images/icons_svg/job_03.svg');
$jobs[] = new job ('Fachinformatiker*in',
				   'Potsdam · unbefristet · (m/w/d)',
				   '<span class="color-green">FIXME</span>',
				   '',
				   '/assets/images/icons_svg/job_04.svg');
$jobs[] = new job ('Webdesigner*in',
				   'Potsdam · unbefristet · (m/w/d)',
				   'HTML-Programmier-Dienstleistungen und Grafikdesign sind dein tägliches Handwerk? Dann bist du bei uns genau richtig!',
				   '/karriere/job-webdesigner-potsdam',
				   '/assets/images/icons_svg/job_04.svg');

$features = array ();
$features[] = new feature ('Langfristigkeit', 'Job-Hopping bedeutet Stress und immer nur einen kurzen Energieschub. Wir setzen auf langfristige Anstellungen, krisensichere und zukunftsfähige Jobs und die Perspektive, das Beste aus dir rauszuholen, damit du zufrieden bist.');
$features[] = new feature ('Work-Life Balance', 'Uns allen ist der Wert unserer Arbeit besonders wichtig. Wir wollen, dass unsere Arbeit einen Einfluss hat. Das bedeutet für uns: Fokussiertes, eﬀizientes Arbeiten, das sich an Ergebnissen orientiert. Aber auch pünktlich Feierabend machen zu können und am Wochenende frei zu haben.');
$features[] = new feature ('Einatmen, ausatmen', 'Statt im Betonklotz in Friedrichshain sitzen wir in der Potsdamer Innenstadt. Viel Nähe zur Natur in der Mittagspause und ein ruhiges, stressfreies Arbeitsklima sind Teil deiner Arbeitsumgebung.');
$features[] = new feature ('Urlaub &amp; Gehalt', '30 Tage Urlaub im Jahr und ein überdurchschnittliches Gehalt für überdurchschnittliche Leistung. Wir liegen gern ein paar Stufen über dem Durchschnitt.');
$features[] = new feature ('Struktur, kein Unsinn', 'Hierarchien halten wir flach, unsere Strukturen sind transparent, die Kommunikationswege kurz und Wertschätzung hoch. Wir haben eine klare Vision, an der du mitarbeiten und mitentscheiden sollst.');
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
				<p class="primary">Wir arbeiten an dem Problem, dass Kundenservice am Telefon die absolute Hölle ist. Wir unterstützen unsere großartigen Kunden dabei, ihren Customer Service so aufzubauen, dass Leute gern bei ihnen anrufen, weil ihnen wirklich geholfen wird. Interessiert?</p>
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
				
				echo '<div class="icon-card__icon"><img src="'.$job->icon.'" alt="Job" /></div>';
				
				echo '<div class="icon-card__text">';
				echo '<h3>'.$job->title.'</h3>';
				echo '<p>'.$job->description.'</p>';
				echo '</div>';
				echo '<a href="'.$job->link.'" class="icon-card__button"></a>';

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
							foreach ($features as $feature)
							{
								echo '<div class="feature-box">';
								echo '<p><b>'.$feature->title.'</b></p>';
								echo '<small>'.$feature->text.'</small>';
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
							foreach ($features as $feature)
							{
								echo '<div class="feature-box">';
								echo '<p><b>'.$feature->title.'</b></p>';
								echo '<small>'.$feature->text.'</small>';
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