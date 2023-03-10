<?php 

if(!isset($page) || $page->get_settings('includedFromOutside') ) {
	$showBanner = true;
	$countRemaining = (new Counter())->getCountRemaining();
} else {
	$countRemaining = $page->get_settings('vb_counter');	
	$showBanner = $page->get_settings('hide_vb_counter') ? false : true;
}

?>

<?php if($showBanner): ?>

	<div class="section section--no-padding-top section--no-padding-bottom stickyBanner stickyBanner--hidden">
		<a class="section__content section__content--wide stickyBanner__innerContainer" href="/voicebot">
			<div class="stickyBanner__textContainer">
				<div class="stickyBanner__title">
					<strong>CallOne VoiceBot<span class="submenu__link-tag submenu__link-tag--warning">NEU</span></strong>
				</div>
				<div class="stickyBanner__fontSmaller">
					Jetzt limitierten Betatest-Zugang sichern!
				</div>
				<?php if($countRemaining > 0): ?>
					<div class="stickyBanner__fontSmaller warning-tag">
						Nur noch <?php echo $countRemaining; ?> Plätze frei
					</div>
				<?php endif; ?>
					
			</div>
			<button class="stickyBanner__closeButton"></button>
		</a>
	</div>

	<script>
		let banner = document.createElement("script");
		banner.src =
			"/banner.js?v=" +
			Math.round(new Date().getTime());
		document.getElementsByTagName("head")[0].appendChild(banner);
	</script>

<?php endif; ?>

