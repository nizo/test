<?php
$jobs = jobs_load ();
$jobs_benefits = jobs_benefits_load ();

$job = job_find_by_url ($jobs, JOB_URL);
if (empty ($job))
	exit ();

$jobTitle = 'Customer Success Manager*in (m/w/d) in Potsdam';
?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "JobPosting",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "CallOne GmbH",
    "sameAs": "https://www.callone.de",
    "url": "https://www.callone.de<?=$job->url_get();?>",
    "logo": "https://www.callone.de/assets/images/logo/callone-logo-square.jpg"
  },
  "datePosted": "<?=date('Y-m');?>-01T00:00",
  "validThrough": "<?=date('Y-m', strtotime('6 months'));?>-01T00:00",
  "title": "<?=$job->title_get();?>",
  <?php // FIXME: ?>
  "description": "<p>Gestatten, CallOne: die Zukunft der Telekommunikation. Online, cloudbasiert, mit neuster Technologie. 
                     Wir helfen Unternehmen mit unseren Telefonlösungen zu Kundenservice und die gesamte Telefonie so anzubieten wie sie sein sollten: Richtig gut.</p>
                  <p>Und Du?​ Du bist unser neues Ass im Ärmel.</p>
                  <p>Mit jedem Schritt betreten wir Neuland und wir tun alles dafür, die besten am Markt zu sein. 
                     Warum? Weil Kundenservice Unternehmen ein Riesenpotenzial bietet, ihr Angebot auf den Menschen auszurichten: auf dich und mich. Das macht nicht nur die Unternehmen besser, ihre Arbeit effizienter und ihre Mitarbeiter glücklicher. 
                     Ihre Kunden bekommen damit bessere Produkte und besseren Service.</p>
                  <p>Deshalb brauchen wir dich.</p>

                  <?php if (!empty ($job->text_description_long_get())): ?>
                  <strong>Der Job</strong>
                  <?php
                  foreach ($job->text_description_long_get() as $text_description_long)
                    echo '<p>'.str_replace('"','\"',$text_description_long).'</p>'.PHP_EOL;
                  ?>
                  <?php endif; ?>

                  <?php if (!empty ($job->text_tasks_get())): ?>
                  <p>
                    <strong>Wobei wir Deine Hilfe brauchen</strong><br>
                    <ul>
                    <?php
                    foreach ($job->text_tasks_get() as $text_task)
                      echo '<li>'.str_replace('"','\"',$text_task).'</li>'.PHP_EOL;
                    ?>
                    </ul>
                  </p>
                  <?php endif; ?>

                  <?php if (!empty ($job->text_requirements_get())): ?>
                  <p>
                    <strong>Was wir uns wünschen</strong><br>
                    <ul>
                    <?php
                    foreach ($job->text_requirements_get() as $text_requirement)
                      echo '<li>'.str_replace('"','\"',$text_requirement).'</li>'.PHP_EOL;
                    ?>
                    </ul>
                  </p>
                  <?php endif; ?>

                  <?php if (!empty ($jobs_benefits)): ?>
                  <p>
                    <strong>Was wir Dir bieten</strong><br>
                    <ul>
                    <?php
                    foreach ($jobs_benefits as $jobs_benefit)
                      echo '<li>'.str_replace('"','\"',$jobs_benefit->text_get()).'</li>'.PHP_EOL;
                    ?>
                    </ul>
                  </p>
                  <?php endif; ?>
                 ",
  "employmentType": "Full-time",
  "experienceRequirements": "Berufseinsteiger",
  "image": "https://www.callone.de<?=$job->icon_get();?>",
  "industry": "Telekommunikation",
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
		"streetAddress": "Charlottenstr. 107",
		"addressLocality": "Potsdam",
		"addressRegion": "DE",
		"postalCode": "14467",
        "addressCountry": {
            "@type": "Country",
            "name": "DE"
        }
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "40.75",
        "longitude": "73.98"
    }
  },
   "salaryCurrency": "EUR",
   "baseSalary": {
    "@type": "MonetaryAmount",
    "currency": "EUR"
  }
}
</script>

<div class="wrapper job-header">
  <div class="content wide">
    <header class="main-header">
      <div class="media centered mobile-hidden">
        <img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/job_big_02.svg" data-srcset="/assets/images/icons_svg/job_big_02.svg" class="lazy" alt="" />
      </div>
      <div class="text">
        <h1><?=$job->title_get();?></h1>

		<?php
		if (!empty ($job->text_intro_get()))
		{	foreach ($job->text_intro_get() as $text_intro)
				echo '<p class="primary mobile-hidden">'.$text_intro.'</p>';
		}
		?>

		<div class="button-set mobile-hidden">
			<a class="button tertiary rounded trackedElement" href="#kontakt">Bewerbungsformular</a>
			<a class="button secondary rounded trackedElement" href="#quick-application">10 Sekunden Bewerbung</a>
		</div>
      </div>
    </header>
  </div>
</div>

<div class="wrapper">
	<div class="content <?php if (empty ($job->statement_get())) echo 'narrow'; else echo 'wide'; ?>">
		<div class="grid">
			<?php if (empty ($job->statement_get())): ?>
			<div class="col-1">
			<?php else: ?>
			<div class="col-2">
			<?php endif; ?>
				<div class="shadow-box padding" style="height: 100%">
					<p><strong class="h1">Der Job</strong></p>
					<?php
					foreach ($job->text_description_long_get() as $text_description_long)
						echo '<p>'.$text_description_long.'</p>';
					?>
				</div>
			</div>

			<?php if (!empty ($job->statement_get())): ?>
			<div class="col-2">
				<div class="shadow-box padding">
					<div class="grid">
						<div class="col-1">
							<div class="grid">
								<?php
								$key = array_rand ($job->statement_get());
								$statement = $job->statement_get()[$key];

								echo '<div class="col-2">';
								echo '<i>'.$statement->text_get().'</i>';
								echo '<strong class="headline margin-top-40"><small>'.$statement->name_get().'</small></strong>';
								echo '<small>'.$statement->position_get().'</small>';
								echo '</div>';

								echo '<div class="col-2">';
								echo '<img src="/assets/images/photos/placeholder.gif" data-src="'.$statement->image_get().'" data-srcset="'.$statement->image_get().'" class="lazy" style="border-radius: 2%" alt="Statement" />';
								echo '</div>';
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="wrapper mobile-hidden">
	<div class="content wide">
		<div class="grid">
			<div class="col-2">
				<div class="shadow-box padding" style="height: 100%">
					<p><strong class="h2">Wobei wir Deine Hilfe brauchen</strong></p>
					<ul class="list approved-list">
					<?php
					foreach ($job->text_tasks_get() as $text_task)
						echo '<li>'.$text_task.'</li>';
					?>
					</ul>
				</div>
			</div>
			<div class="col-2">
				<div class="shadow-box padding" style="height: 100%">
					<p><strong class="h2">Was wir uns wünschen</strong></p>
					<ul class="list approved-list">
					<?php
					foreach ($job->text_requirements_get() as $text_requirement)
						echo '<li>'.$text_requirement.'</li>';
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper desktop-hidden margin-top-40">
	<div class="content">
  		<div class="grid">
  			<div class="col-1">
  				<div class="shadow-box padding"> 
					<h2 class="centered">Wobei wir Deine Hilfe brauchen</h2>
					<ul class="list approved-list">
					<?php
					foreach ($job->text_tasks_get() as $text_task)
						echo '<li>'.$text_task.'</li>';
					?>
					</ul>
        		</div>
  			</div>    
      		<div class="col-1">
            	<div class="shadow-box padding">
					<h2 class="centered">Was wir uns wünschen</h2>
					<ul class="list approved-list">
					<?php
					foreach ($job->text_requirements_get() as $text_requirement)
						echo '<li>'.$text_requirement.'</li>';
					?>
					</ul>
            	</div>
            </div>
    	</div>
    </div>
</div>

<div class="wrapper mobile-hidden background" id="quick-application">
  <div class="content narrow centered">
    <h2 class="h1 padding-top-60">Passt? 1.000 Fragen? Wir auch. <br>Lass uns dich so schnell wie möglich kennenlernen.</h2>
    <form action="#" class="form shortApplication js-form">
  		<input type="hidden" name="type" value="4">
  		<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
  		<input type="hidden" name="issue" value="<?=$job->title_get();?>">
        <div class="wrapper"> 	
      		<div class="content thin">
    			<p>
          			Manchmal bleibt einfach keine Zeit für eine klassische Bewerbung. Du möchtest dich aber trotzdem vorstellen?
          			Dann überzeuge uns mit deinem aussagekräftigen Business-Profil. Einfach den Link zum Profil dalassen und wir melden uns bei dir.
          			<br>&nbsp;
          		</p>          		
          		<input type="text" name="name" placeholder="Dein Name" />
          		<input type="text" name="url" placeholder="Link zum Xing oder LinkedIn-Profil" />
          		          		
             	<div class="button-set centered">
                  <button class="button tertiary rounded big submit no-margin" title="Lass uns dich so schnell wie möglich kennenlernen">Jetzt mit Profil bewerben</button>
				  <a href="#kontakt" class="button secondary rounded big" title="Normal auf Stelle/Job bewerben">Klassische Bewerbung</a>
				</div>
      		</div>
  		</div>
    </form>
    <div class="formSuccess auto centered">
    	<div class="content narrow centered">
      		<h3 class="h1">Vielen Dank für Deine Bewerbung</h3>
      		<p>Wir melden uns in Kürze bei dir.</p>
  		</div>
    </div>
    <p>&nbsp;</p>
  </div>
</div>

<!--
<?php // FIXME: ?>
<div class="wrapper desktop-hidden margin-top-40">
  <div class="content narrow centered">
    <div class="button-set centered">
    	<a href="#kontakt-form" class="button tertiary">Jetzt bewerben</a>
    	<div class="container blank black">
    		<span href="#kontakt-form" class="button secondary title">Später bewerben</span>
    		<div class="content">
    			<form action="#" class="form shortApplication js-form">
    			<p>Erhalte diesen Job in Dein E-Mail Postfach.</p>
    			<input type="hidden" name="type" value="5" />
    			<input type="hidden" name="position" value="0" />
          		<input type="email" name="email" placeholder="Deine E-Mail Adresse" />
             	<div class="button-set centered">
                  <button class="button big tertiary submit no-margin" title="Schick Dir eine Erinnerung per E-Mail und bewirb Dich später">absenden</button>
                </div>
    			</form>
    			<div class="formSuccess centered auto">
                	<h3 class="h1 centered">Vielen Dank für Interesse</h3>
      				<p class="centered">Du bekommst in Kürze einen Reminder per E-Mail. Wir freuen uns auf Deine Bewerbung.</p>
                </div>
                <div class="formFail centered auto">
                	<h3>Ihre Anfrage konnte nicht gesendet werden!</h3>
                	<p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
    				<p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
    				<p><strong>Ihr CallOne-Team</strong></p>
                </div>
    		</div>	
    	</div>
    </div>
  </div>
</div>
-->

<!--
<?php // FIXME: ?>
<div class="wrapper desktop-hidden">
  <div class="content centered" style="padding: 0;"> 
        <div class="swiper-container was-wir-bieten single no-width-100">
        	<div class="swiper-wrapper">
                	<div class="swiper-slide">
                	<div class="grid"> 
                		<div class="col-2">
                			<img src="/assets/images/icons_svg/small_20.svg" alt="Apps &amp; Schnittstellen" class="icon" />
        					<h3>Potsdam. You're welcome.</h3>
        					<p>Büro im Herzen von Potsdam.</p>
                		</div>
                		<div class="col-2">
                			<img src="/assets/images/icons_svg/small_20.svg" alt="Apps &amp; Schnittstellen" class="icon" />
        					<h3>Cream of the team</h3>
        					<p>Kleines Team mit flachen Hierarchien.</p>
                		</div>
                		</div>
             		</div>
             		<div class="swiper-slide">
             		<div class="grid"> 	
             			<div class="col-2">
             				<img src="/assets/images/icons_svg/small_20.svg" alt="Apps &amp; Schnittstellen" class="icon" />
        					<h3>Unkonventionell konventionell</h3>
        					<p>Stabiler Job im Tech-Umfeld.</p>
                		</div>
             			<div class="col-2">
             				<img src="/assets/images/icons_svg/small_20.svg" alt="Apps &amp; Schnittstellen" class="icon" />
        					<h3>Kein Stress</h3>
        					<p>Pünktlicher Feierabend.</p>
                		</div>
             		</div>
             		</div>
             		<div class="swiper-slide">
             		<div class="grid"> 	
             			<div class="col-2">
             				<img src="/assets/images/icons_svg/small_20.svg" alt="Apps &amp; Schnittstellen" class="icon" />
        					<h3>Thirsty? Good</h3>
        					<p>Freie Getränke.</p>
                		</div>
             			<div class="col-2">
             				<img src="/assets/images/icons_svg/small_20.svg" alt="Apps &amp; Schnittstellen" class="icon" />
        					<h3>Time to improve</h3>
        					<p>Zeit für Weiterbildungen.</p>
                		</div>
             		</div>
             		</div>	
			</div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
		</div>
    </div>
    <div class="content narrow margin-top-40">
    	<div class="button-set">
          <a href="/ueber-uns" class="button secondary" title="Erfahre mehr über Uns">Über Uns</a>
        </div>
    </div>
</div>
-->

<div class="wrapper">
	<div class="content thin centered">
		<h3 class="h1">Unsere Partner</h3>
		<p>Wir arbeiten mit den Marktführern und spannendsten Unternehmen verschiedenster Branchen zusammen. Du bist in guter Gesellschaft.</p>
	</div>
	<div class="content wide centered margin-top-40 no-padding">
		<?php getLogoParade([   
		            ['data' => 'logo-check24.png', 'alt' => 'Kunde Check24', 'cssClass' => 'partnerLogo sw small'],
		            ['data' => 'logo-flaconi.png', 'alt' => 'Kunde Flaconi', 'cssClass' => 'partnerLogo sw small'],
		            ['data' => 'logo-bett1-2.png', 'alt' => 'Kunde Bett1.de', 'cssClass' => 'partnerLogo sw small'],
		            ['data' => 'logo-amorelie.png', 'alt' => 'Kunde Amorelie', 'cssClass' => 'partnerLogo sw small']
        ], null); ?>
	</div>
</div>

<?php // FIXME: ?>
<!--
<div class="wrapper margin-top-40 desktop-hidden">
	<div class="content narrow centered">
		<div class="button-set centered">
          <a href="#kontakt-form" class="button tertiary" title="Stell dich vor! Und werde ein Teil von Uns!">Job als E-Mail erhalten</a>
        </div>
	</div>
</div>
-->

<?php
  include('partials/job-form.php');
?>

<div class="wrapper">
  <div class="content thin">
 	<div class="button-set centered">
		<a href="/karriere#jobs" class="button secondary rounded">Doch lieber was anderes?</a>
    </div>
  </div>
</div> 

<div class="wrapper">
  <div class="content wide mobileNoPadding">
    <h3 class="h1 centered">FAQ</h3>
    <div class="container">
    	<h4 class="title">Wie läuft der Bewerbungsprozess bei CallOne ab?</h4>
    	<div class="content">
    		<p>Nachdem wir uns deine Bewerbungsunterlagen angeschaut haben, melden wir uns zeitnah bei dir für ein kurzes Telefonat. 
    		Im Anschluss laden wir dich zu einem persönlichen Kennenlernen in unser Büro ein, wo du einen ersten Eindruck deiner Arbeitsumgebung und vom Team bekommst. 
    		Die nächsten Schritte sprechen wir dann recht individuell mit dir ab. Vielleicht möchtest du ja zum Beispiel mal einen Tag die Arbeit bei uns im Detail kennenlernen!</p>
    	</div>
    </div>
    <div class="container">
    	<h4 class="title">Wie läuft die Einarbeitung ab?​</h4>
    	<div class="content">
    		<p>Wir erstellen für dich einen Einarbeitungsplan mit verschiedenen Stationen und Themengebieten, die für dich relevant sind. 
    		Du bist von Anfang an bei vielen Teammeetings, Produktschulungen und Kundenmeetings dabei und kannst dich so langsam rantasten.</p>
    	</div>
    </div>
    <div class="container">
    	<h4 class="title">Welches Bewerbungsformat bevorzugen ihr?​</h4>
    	<div class="content">
    		<p>Wir bevorzugen kein bestimmtes Bewerbungsformat. Ein Lebenslauf mit kurzem Anschreiben ist für uns aber ein Muss, um uns einen ersten Eindruck verschaffen zu können.</p>
    	</div>
    </div>
    <div class="container">
    	<h4 class="title">Welche Vorteile hat es bei CallOne zu arbeiten?​</h4>
    	<div class="content">
    		<p>Wir setzen auf kleine Teams und flache Hierarchien. 
    		Ellenbogen-Mentalität ist für uns ein Fremdwort – jeder steht für jeden ein und wir helfen uns gegenseitig dabei für unsere Kunden die bestmöglichen Lösungen zu finden. 
    		Dabei kann sich jeder in seinem Spezialgebiet mit den Arbeitsmitteln und Fortbildungen seiner Wahl voll entfalten und dabei Getränke ohne Ende on the house schlürfen. 
    		Wenn du Wünsche wie einen Fahrkarten-Zuschuss oder Ähnliches hast – sprich uns einfach darauf an! :)</p>
    	</div>
    </div>
    <div class="container">
    	<h4 class="title">Welche Sprachen sollte ich bei CallOne beherrschen?​</h4>
    	<div class="content">
    		<p>Deutsch und gutes Englisch reichen aus.</p>
    	</div>
    </div>
    <div class="container">
    	<h4 class="title">Was erwartet mich beim Telefon oder Skypeinterview?​</h4>
    	<div class="content">
    		<p>Telefoninterviews dienen nur dazu sich einen ersten Eindruck vom Gegenüber zu machen. 
    		Wir erzählen dir etwas zu CallOne und der offenen Stelle und du kannst dich kurz vorstellen und offene Fragen klären. 
    		Dann vereinbaren wir aber auch schnell einen Termin für ein persönliches Kennenlernen.</p>
    	</div>
    </div> 
    <div class="container">
    	<h4 class="title">Bietet CallOne Trainings und Fortbildungen an?​</h4>
    	<div class="content">
    		<p>Auf jeden Fall! Lass uns darüber sprechen in welchen Bereichen du dich gerne fortbilden möchtest.</p>
    	</div>
    </div> 
    <div class="container">
    	<h4 class="title">Kann ich mich bei CallOne auch initiativ bewerben?​​</h4>
    	<div class="content">
    		<p>Sehr gerne! Bei uns gibt es viele Quereinsteiger und Allrounder, wir finden sicher eine passende Stelle für dich. :)</p>
    	</div>
    </div> 
  </div>
</div>

