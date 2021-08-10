<?php
$jobs = jobs_load();
// print_r($jobs);
?>

<div class="section section--light-grey">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Stellenausschreibungen</h1>
        <p class="centered">Du möchtest mehr über deinen Arbeitsplatz und das Team erfahren?</p>
        <p class="centered">
            <a href="/karriere-bei-callone" class="btn btn--primary btn--centered">Karriere bei CallOne</a>
        </p>
    </div>

    <div class="section__content">
        <h2 class="centered">Entwicklung</h2>
    </div>

    <div class="section__content section__content--shadow">
        <div class="job-list">
            <?php
            foreach ($jobs as $job) {
                echo "<div class='job-list__item'>";
                echo "<div class='job-list__item-icon'><img src='".$job->icon_get()."' alt='' /></div>";
                echo "<div class='job-list__item-info'><small>".$job->quickinfo_get()."</small><br />".$job->title_get()."</div>";
                echo "<div class='job-list__item-action'><a href='".$job->url_get()."' class='btn btn--secondary btn--nowrap'>Job anschauen</a></div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>