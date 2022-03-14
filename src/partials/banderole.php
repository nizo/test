<?php
$show_until = strtotime('2022-03-25 12:00:00');
$banderole_link = 'https://next.edudip.com/de/webinar/insides-vom-marktfuhrer-sales-und-kundenservice-bei-check24-kreditservice/1792796';

if ($show_until > time()) {
    ?>
    <div class="banderole">
        <div class="banderole__text">Echtzeit-Sprachanalyse am Telefon. Kostenfreies Webinar.</div><a href="<?= $banderole_link; ?>" target="_blank" rel="nofollow" id="banderole-cta" class="trackedElement" data-label="Banderole CTA" data-action="Banderole CTA Clicked" data-category="Banderole">JETZT TEILNEHMEN</a>
    </div>

    <div class="banderole-spacer"></div>
    <?php
}
?>