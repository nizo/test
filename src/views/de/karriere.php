<?php
$jobs = jobs_load();
?>

<div class="section section--light-grey">
    <div class="section__content section__content--narrow">
        <h1 class="centered">Stellenausschreibungen<span class="bubble"><?= count($jobs->jobs_get()); ?></span></h1>
        <p class="centered">Du möchtest mehr über deinen Arbeitsplatz und das Team erfahren?</p>
        <p class="centered">
            <a href="/karriere-bei-callone" class="btn btn--primary btn--centered">Karriere bei CallOne</a>
        </p>
    </div>

    <?php
    foreach ($jobs->categories_get() as $category) {
        ?>
        <div class="section__content">
            <h2 class="centered"><?= $category ?></h2>
        </div>

        <div class="section__content section__content--shadow">
            <div class="job-list">
                <?php
                foreach ($jobs->jobs_get_by_category($category) as $job) {
                    echo "<div class='job-list__item'>";
                    echo "<div class='job-list__item-icon'><img src='".$job->icon_get()."' alt='' /></div>";
                    echo "<a href='".$job->url_get()."' class='job-list__item-info'><small>".$job->quickinfo_get()."</small><br />".$job->title_get()."</a>";
                    //echo "<div class='job-list__item-action'><a href='".$job->url_get()."' class='btn btn--border-black btn--nowrap'>Job anschauen</a></div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="section__content section__content--narrow">
        <h2 class="centered">Passt alles nicht?</h2>
        <p class="centered">
            <a href="#" class="btn btn--primary btn--centered" data-openmodal="application">Jetzt initiativ bewerben</a>
        </p>
    </div>
</div>