<div class="wrapper halfWrap">
  <div class="content wide">
    <div class="logo-grid client-logos">
    	<?php if (!empty($paradeData)): ?>
    		<?= $paradeData ?>
    	<?php else: ?>
          <div class="logo"><img src="/assets/images/client-logos/logo-vimcar.png" alt="" width="137" height="119" /></div>
          <div class="logo"><img src="/assets/images/client-logos/logo-flaconi.png" alt="" width="137" height="119" /></div>
          <div class="logo"><img src="/assets/images/client-logos/logo-check24.png" alt="" width="137" height="119" /></div>
          <div class="logo"><img src="/assets/images/client-logos/logo-bett1.png" alt="" width="137" height="119" /></div>
          <div class="logo"><img src="/assets/images/client-logos/logo-gastrohero.png" alt="" width="137" height="119" /></div>
        <?php endif; ?>
    </div>
	<?php if (!empty($showStars)): ?>
    	<p class="primary centered"><span class="star">&starf;&starf;&starf;&starf;&starf;</span> 5,0 <a href="https://www.google.de/maps/place/CallOne+GmbH/@52.42163,13.1530313,17z/data=!3m1!4b1!4m7!3m6!1s0x0:0x4b0f5c012bcf0a41!8m2!3d52.42163!4d13.15522!9m1!1b1" rel="noreferrer" target="_blank" class="trackedElement" data-label="Google Erfahrungsberichte" data-category="Link" data-action="linked to Google Erfahrungsberichte">Google Erfahrungsberichte</a></p>
    <?php endif; ?>
  </div>
</div>