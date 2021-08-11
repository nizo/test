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

Karriere Details