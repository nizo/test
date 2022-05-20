<?php
$jobs = jobs_load ();
$jobs_benefits = jobs_benefits_load ();

$job = job_find_by_url ($jobs->jobs_get(), $page->uri);
if (empty ($job))
	exit ();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
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
                  <p>Und Du? Du bist unser neues Ass im Ärmel.</p>
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
  "experienceRequirements" : {
    "@type" : "OccupationalExperienceRequirements",
    "monthsOfExperience" : "6"
  },
  "image": "https://www.callone.de<?=$job->icon_get();?>",
  "industry": "Telekommunikation",
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
		"streetAddress": "Posthofstr. 5",
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
    "currency": "EUR",
    "value": {
        "@type": "QuantitativeValue",
        "value": 0,
        "unitText": "HOUR"
    }
  }
}
</script>

<div class="section">
    <div class="section__content section__content--wide">
        <p class="centered">
            <?= pictureTag(
                $job->icon_get(),
                'Stellen bei CallOne',
                70, null, [
                    'style' => 'max-width: 70px'
                ], false
            ); ?>
        </p>
        
        <h1 class="centered">
            <span class="headline-tag"><?= $job->quickinfo_get(); ?></span><br />
            <?= $job->title_get(); ?>
        </h1>
    </div>

    <div class="section__content section__content--narrow">
        <?php
        if (!empty($job->text_intro_get())) {
            foreach ($job->text_intro_get() as $intro) {
                echo "<p class='centered'>".$intro."</p>";
            }
        }
        ?>

        <p class="btn-set btn-set--centered">
            <a href="#" class="btn btn--primary" data-openmodal="application" data-modaldata="<?= base64_encode('{"job": "'.$job->title_get().'"}'); ?>">Jetzt bewerben</a>
            <a href="/karriere" class="btn btn--secondary btn--notification" data-notification="<?= count($jobs->jobs_get()) ?>">Alle offenen Stellen</a>
        </p>
    </div>
</div>

<div class="job-details" style="--top-color:#fff;--bottom-color:#edf2e2">
    <div class="job-details__item">
        <?= pictureTag(
            '/assets/images/icons_svg/small_35.svg',
            'Arbeitsstelle',
            35, 48
        ); ?>
        <?= $job->location_get(); ?>
    </div>
    <div class="job-details__item">
        <?= pictureTag(
            '/assets/images/icons_svg/small_32.svg',
            'Arbeitszeit',
            50, 48
        ); ?>
        <?= $job->job_worktime_get(); ?>
    </div>
    <div class="job-details__item">
        <?= pictureTag(
            '/assets/images/icons_svg/small_31.svg',
            'Arbeitsbeginn',
            56, 48
        ); ?>
        <?= $job->job_start_end_get(); ?>
    </div>
</div>

<div class="section section--light-green section--overflow-protection">
    <div class="section__content section__content--narrow">
        <h2>Der Job</h2>
        <?php
        foreach ($job->text_description_long_get() as $text_description_long)
            echo '<p class="bigtext">'.$text_description_long.'</p>';
        ?>
    </div>
</div>

<?php
if (!empty($job->statement_get())):
    $key = array_rand($job->statement_get());
    $statement = $job->statement_get()[$key];
    ?>
    <div class="section section--no-padding-top section--no-padding-bottom" style="background:#edf2e2">
        <div class="section__content section__content--wide" style="padding-top:18px;padding-bottom:18px;">
            <div class="breather-box" style="--c-bg:#fff;--c-text:#000">
                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--3-sm co-grid__col--vcentered">
                        <?= pictureTag(
                                $statement->image_get(),
                                'Statement',
                                150, 150, ['class'=>'job-quote-image']
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--12-xs co-grid__col--9-sm co-grid__col--vcentered">
                        <div class="quote" style="--fontSize:26px">
                            „<?= $statement->text_get(); ?>“
                        </div>
                        <p>
                            <strong><?= $statement->name_get(); ?></strong><br />
                            <?= $statement->position_get(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
endif;
?>

<div class="section section--light-green-white section--overflow-protection">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <h2>Wobei wir deine Hilfe brauchen</h2>
                <ul class="list list--checkmarks list--checkmarks-green">
					<?php
					foreach ($job->text_tasks_get() as $text_task)
						echo '<li>'.$text_task.'</li>';
					?>
				</ul>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <h2>Was wir uns wünschen</h2>
                <ul class="list list--checkmarks list--checkmarks-green">
					<?php
					foreach ($job->text_requirements_get() as $text_requirement)
						echo '<li>'.$text_requirement.'</li>';
					?>
				</ul>
            </div>
        </div>
    </div>

    <div class="section__content section__content--wide">
        <div class="split-box">
            <div class="split-box__item">
                <p>Du möchtest mehr über deinen Arbeitsplatz und das Team erfahren?</p>
                <p><a href="/karriere-bei-callone" class="btn btn--secondary btn--centered">Karriere bei Callone</a></p>
            </div>
            <?php 
            if ($job->agenda_filename_get()):
                ?>
                <div class="split-box__divider" data-text="oder"></div>
                <div class="split-box__item">
                    <p>Du möchtest mehr über deinen Tagesablauf in diesem Job erfahren?</p>
                    <p><a href="#" class="btn btn--border-black btn--centered" data-openmodal="<?= $job->agenda_filename_get(); ?>">Deine Tagesagenda</a></p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>

    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Das haben wir dir zu bieten:</h2>

        <div class="co-grid">
            <?php
            foreach ($jobs_benefits as $benefit) {
                echo '<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">';
				echo '<div class="content-box content-box--white content-box--shadow content-box--small-padding">';
                echo '<div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">';
                echo '<div class="co-grid__col co-grid__col--vcentered">';
                echo pictureTag(
                    $benefit->icon_get(),
                    'Vorteile bei CallOne Arbeiten',
                    70, 70, ['style'=>'height:70px','class'=>'co-grid__image--full-width']
                );
                echo '</div>';
                echo '<div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">';
                echo '<h4 style="margin-bottom:0">'.$benefit->title_get().'</h4>';
                echo '</div>';
                echo '</div>';
                echo '<p style="margin-top:var(--gutter-xs)">'.$benefit->text_get().'</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Du hast nichts zu verlieren:</h2>

        <a href="#" class="btn btn--centered btn--application" data-openmodal="application" data-modaldata="<?= base64_encode('{"job": "'.$job->title_get().'"}'); ?>">
            <strong>Jetzt bewerben</strong><br />
            <?= $job->title_get(); ?>
        </a>
    </div>
</div>