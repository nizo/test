<?php
$jobs = jobs_load ();
$jobs_benefits = jobs_benefits_load ();

$job = job_find_by_url ($jobs->jobs_get(), $page->uri);
if (empty ($job))
	exit ();
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
    <div class="section__content section__content--narrow">
        <p class="centered">
            <img src="<?= $job->icon_get(); ?>" alt="Stellen bei CallOne" />
        </p>

        <h1 class="centered">
            <span class="headline-tag"><?= $job->quickinfo_get(); ?></span><br />
            <?= $job->title_get(); ?>
        </h1>

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

<div class="job-details">
    <div class="job-details__item">
        <img src="/assets/images/icons_svg/small_35.svg" alt="Arbeitsstelle" />
        <?= $job->location_get(); ?>
    </div>
    <div class="job-details__item">
        <img src="/assets/images/icons_svg/small_32.svg" alt="Arbeitszeit" />
        <?= $job->job_worktime_get(); ?>
    </div>
    <div class="job-details__item">
        <img src="/assets/images/icons_svg/small_31.svg" alt="Arbeitsbeginn" />
        <?= $job->job_start_end_get(); ?>
    </div>
</div>

<div class="section section--light-grey-green section--overflow-protection">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <h3>Der Job</h3>
                <?php
                foreach ($job->text_description_long_get() as $text_description_long)
                    echo '<p>'.$text_description_long.'</p>';
                ?>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <?php
                if (!empty($job->statement_get())):
                    $key = array_rand($job->statement_get());
                    $statement = $job->statement_get()[$key];
                    ?>

                    <div class="job-quote">
                        <blockquote><?= $statement->text_get(); ?></blockquote>
                        <div class="job-quote__author">
                            <img src="/assets/images/photos/placeholder.gif" data-src="<?= $statement->image_get(); ?>" data-srcset="<?= $statement->image_get(); ?>" class="lazy" alt="Statement" />
                            <div>
                                <strong><?= $statement->name_get() ?></strong><br />
                                <?= $statement->position_get() ?><br />
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <h3>Wobei wir deine Hilfe brauchen</h3>
                <ul class="list list--checkmarks">
					<?php
					foreach ($job->text_tasks_get() as $text_task)
						echo '<li>'.$text_task.'</li>';
					?>
				</ul>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <h3>Was wir uns wünschen</h3>
                <ul class="list list--checkmarks">
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
            <div class="split-box__divider" data-text="oder"></div>
            <div class="split-box__item">
                <p>Du möchtest mehr über deinen Tagesablauf in diesem Job erfahren?</p>
                <p><a href="#" class="btn btn--border-black btn--centered" data-openmodal="<?= $job->agenda_filename_get(); ?>">Deine Tagesagenda</a></p>
            </div>
        </div>
    </div>

    <div class="section__content section__content--wide">
        <h1 class="centered">Das haben wir dir zu bieten:</h1>

        <div class="co-grid mobile-hidden">
            <?php
            foreach ($jobs_benefits as $benefit) {
                echo '<div class="card centered co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--4-md">';
                echo '<img src="'.$benefit->icon_get().'" alt="Vorteile bei CallOne Arbeiten" />';
                echo '<h3>'.$benefit->title_get().'</h3>';
                echo '<p>'.$benefit->text_get().'</p>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="step-slider centered desktop-hidden">
            <div class="step-slider__steps">
                <?php
                foreach ($jobs_benefits as $key => $benefit) {
                    $extraClass = '';
                    if ($key == 0)
                        $extraClass = ' step-slider__step--active';
                    echo '<div class="step-slider__step step-slider__step--no-number'.$extraClass.'">';
                    echo '<img src="'.$benefit->icon_get().'" alt="Vorteile Arbeiten bei CallOne" data-alt-image="'.$benefit->alt_icon_get().'" />';
                    echo '<h3>'.$benefit->title_get().'</h3>';
                    echo '<p>'.$benefit->text_get().'</p>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="step-slider__slider">
                <div class="step-slider__range">
                    <div class="step-slider__handle"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section__content section__content--wide">
        <h1 class="centered">Du hast nichts zu verlieren:</h1>

        <a href="#" class="btn btn--centered btn--application" data-openmodal="application" data-modaldata="<?= base64_encode('{"job": "'.$job->title_get().'"}'); ?>">
            <strong>Jetzt bewerben</strong><br />
            <?= $job->title_get(); ?>
        </a>
    </div>
</div>