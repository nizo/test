<?php
$jobs = jobs_load ();
$jobs_benefits = jobs_benefits_load ();

$job = job_find_by_url ($jobs->jobs_get(), JOB_URL);
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

<div class="section">
    <div class="section__content section__content--narrow">
        <p class="centered">
            <img src="<?= $job->icon_get(); ?>" alt="" />
        </p>

        <h1 class="centered"><?= $job->title_get(); ?></h1>

        <?php
        if (!empty($job->text_intro_get())) {
            foreach ($job->text_intro_get() as $intro) {
                echo "<p class='centered'>".$intro."</p>";
            }
        }
        ?>

        <p class="btn-set btn-set--centered">
            <a href="#" class="btn btn--primary" data-openmodal="application">Jetzt bewerben</a>
            <a href="/karriere" class="btn btn--secondary">Alle offenen Stellen <span class="btn__notification"><?= count($jobs->jobs_get()) ?></span></a>
        </p>
    </div>
</div>

<div class="job-details">
    <div class="job-details__item">
        <img src="/assets/images/icons_svg/small_35.svg" alt="" />
        <?= $job->location_get(); ?>
    </div>
    <div class="job-details__item">
        <img src="/assets/images/icons_svg/small_32.svg" alt="" />
        <?= $job->job_worktime_get(); ?>
    </div>
    <div class="job-details__item">
        <img src="/assets/images/icons_svg/small_31.svg" alt="" />
        <?= $job->job_start_end_get(); ?>
    </div>
</div>

<div class="section section--light-grey">
    <div class="section__content section__content--wide">
        <div class="grid">
            <div class="grid__col grid__col--12-xs grid__col--6-md">
                <h3>Der Job</h3>
                <?php
                foreach ($job->text_description_long_get() as $text_description_long)
                    echo '<p>'.$text_description_long.'</p>';
                ?>
            </div>
            <div class="grid__col grid__col--12-xs grid__col--6-md">
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

            <div class="grid__col grid__col--12-xs grid__col--6-md">
                <h3>Wobei wir deine Hilfe brauchen</h3>
                <p>...</p>
            </div>
            <div class="grid__col grid__col--12-xs grid__col--6-md">
                <h3>Was wir uns wünschen</h3>
                <p>...</p>
            </div>
        </div>
    </div>
</div>