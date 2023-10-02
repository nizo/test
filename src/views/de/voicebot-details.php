<?php
 
?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="//cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>


	// swipper video slider

	document.addEventListener('DOMContentLoaded', initSliders, false);

		function initSliders () {

			var swiper = new Swiper('.swiper', {
				// Optional parameters
				direction: 'horizontal',
				loop: false,
				slidesPerView: 1,
				spaceBetween: 20,
				breakpoints: {
					960: {
						slidesPerView: 2,
						spaceBetween: 10,
					},
				},

				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});

			window.swiper_video = new Swiper('[data-element="swiper_video"]', {
				// Optional parameters
				direction: 'horizontal',
				loop: false,
				slidesPerView: 1,
				spaceBetween: 20,
				slideToClickedSlide: true,
				breakpoints: {
					400: {
						slidesPerView: 2,
					},
					600: {
						slidesPerView: 3,
					},
					960: {
						slidesPerView: 4,
					},
				},

				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});


			window.swiper_video_overlay = new Swiper('[data-element="swiper_video_overlay"]', {
				// Optional parameters
				direction: 'horizontal',
				loop: false,
				slidesPerView: 1,
				spaceBetween: 20,
				slideToClickedSlide: true,

				breakpoints: {
					400: {
						slidesPerView: 2,
					},
					1200: {
						slidesPerView: 3,
					},
					1400: {
						slidesPerView: 4,
					},
					2200: {
						slidesPerView: 5,
					},
				},

				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});



	}


</script>



 <!--googleoff: all-->

 <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>

 <div tabindex="-1" data-element="overlay-video-container">
    <div tabindex="-1" data-element="overlay-video" class="close-outer">
        <div class="container1">
            <div class="container2">
				<button type="button" class="close" style="top:-10px;right:-10px">
					<svg class="w-3 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path></svg>
				</button>
				<div data-element="overlay-container">				
				</div>

				<div data-element="video-playlist-overlay-slider" style="z-index: 1; display: none;" class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm video_features">
					<!-- Slider main container -->
					<div data-element="swiper_video_overlay" style="margin-top: 0.5rem" class="swiper_video">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper" data-playlist-container="details">
							<!-- Slides -->
							
							

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="1" data-iframe_url="https://www.youtube.com/embed/goXOyiuRHyg">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">1</span>
										Die Möglichkeiten und Grenzen des VoiceBots</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="2" data-iframe_url="https://www.youtube.com/embed/Zf0A8XLrHRI">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">2</span>
										Detaillierte Anleitung: KI-VoiceBot einrichten</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="3" data-iframe_url="https://www.youtube.com/embed/nXOa67d16vA">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">3</span>
										Firmenspezifische Info im VoiceBot integrieren</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="4" data-iframe_url="https://www.youtube.com/embed/1vyxaMTNb2U">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">4</span>
										Effektive Statistiken und Auswertungen mit VoiceBot</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="5" data-iframe_url="https://www.youtube.com/embed/ZJgvLI_AOkI">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">5</span>
										VoiceBot nahtlos in Kundenhotline einbinden</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="6" data-iframe_url="https://www.youtube.com/embed/QbodxH9jeiA">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">6</span>
										Sicherer Datenschutz bei ChatGPT-VoiceBots</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="7" data-iframe_url="https://www.youtube.com/embed/BOyhr1-KGFM">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">7</span>
										Vielfältige Add-Ons und Zusatzfunktionen</p>
								</div>
							</div>

							<div class="swiper-slide"  data-context="overlay" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="8" data-iframe_url="https://www.youtube.com/embed/P4eOU8AvsRA">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">8</span>
										Vielfältige Anbindungs&shy;möglichkeiten und Zukunftspläne!</p>
								</div>
							</div>
							


							
							
						</div>


						
						<div class="nav-wrap" style="margin-top: 2rem; display: flex; gap: 0.5rem; justify-content: center;">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						</div>
					</div>
			</div>
		</div>



</div>



				
            </div>
        </div>
	</div>






 <!--googleon: all-->


<!-- Section 1 -->
<div class="section section--black less-btm-btm-space voice-first-section" style="z-index:-1">
	<div class="section__content section__content--wide">
		<div class="co-grid">
			<div style="z-index: 1;" class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm  voiceassistent-wrap">
				<p class="centered bigtext ">Zeit für Effizienz</p>
				<h1 class="hero-headline centered">
					Ihr <span class="highlight">VoiceBot-Assistent</span> für <br>mühelose Automatisierung
				</h1>
				<div class="machineless_automation_video centered" data-context="intro_video_slide" data-has_playlist="true" data-playlist_video_id="1" data-binding="video-overlay" data-iframe_url="https://www.youtube.com/embed/goXOyiuRHyg">
					<div class="video_circle_box"><span class="video-play-icon"></span></div>
					<img src="/assets/images/lp/callone-voicebot-details-thumb.jpeg" width="1024" height="448"
						class="video-img">
				</div>
			</div>

			<div style="z-index: 1;" class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm video_features">
					<!-- Slider main container -->
					<div data-element="swiper_video" class="swiper_video">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper" data-playlist-container="details">
							<!-- Slides -->
							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="1" data-iframe_url="https://www.youtube.com/embed/goXOyiuRHyg">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">1</span>
										Die Möglichkeiten und Grenzen des VoiceBots</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="2" data-iframe_url="https://www.youtube.com/embed/Zf0A8XLrHRI">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">2</span>
										Detaillierte Anleitung: KI-VoiceBot einrichten</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="3" data-iframe_url="https://www.youtube.com/embed/nXOa67d16vA">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">3</span>
										Firmenspezifische Info im VoiceBot integrieren</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="4" data-iframe_url="https://www.youtube.com/embed/1vyxaMTNb2U">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">4</span>
										Effektive Statistiken und Auswertungen mit VoiceBot</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="5" data-iframe_url="https://www.youtube.com/embed/ZJgvLI_AOkI">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">5</span>
										VoiceBot nahtlos in Kundenhotline einbinden</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="6" data-iframe_url="https://www.youtube.com/embed/QbodxH9jeiA">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">6</span>
										Sicherer Datenschutz bei ChatGPT-VoiceBots</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="7" data-iframe_url="https://www.youtube.com/embed/BOyhr1-KGFM">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">7</span>
										Vielfältige Add-Ons und Zusatzfunktionen</p>
								</div>
							</div>

							<div class="swiper-slide" data-has_playlist="true" data-binding="video-overlay" data-playlist_video_id="8" data-iframe_url="https://www.youtube.com/embed/P4eOU8AvsRA">
								 <div class="video-f-thum">
										<p class="video-f-para"> <span class="video-f-thum-time">8</span>
										Vielfältige Anbindungs&shy;möglichkeiten und Zukunftspläne!</p>
								</div>
							</div>
							


							
							
						</div>
						<div class="nav-wrap">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						</div>
					</div>



				<div class="co-grid">
					<div style="z-index: 1;" class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm">
						<h4 class="general-head centered" style="margin-top:2rem; margin-bottom: 2rem;">Der CallOne VoiceBot ist Ihr virtueller Mitarbeiter und hilft
							Ihnen dabei, einfache Aufgaben im Anruferalltag zu übernehmen.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Section 2 -->
<div class="section section--black less-btm-btm-space voice-version-second-section" style="z-index:-1">
	<div class="section__content section__content--wide">
		<div class="section__content section__content--wide section-kunden-m">
			<div class="co-grid">
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--12-md">
					<div class="section__content section__content--wide centered">
						<p class="bigtext customer-outer-section-par">4.000 Kunden vom KMU bis zum Konzern vertrauen
							bereits auf unsere Cloudplattform</p>
						<div class="voice-customer-section-logo-inner">
							<ul class="logo-listing-wrap">
								<li class="logo-listing-wrap-list"><img src="/assets/images/lp/check24.svg" width="183"
										height="46" class="logo-listing-wrap-img"></li>
								<!-- <li class="logo-listing-wrap-list"><img src="/assets/images/lp/helios.svg" width="184"
										height="46" class="logo-listing-wrap-img"></li> -->
								<li class="logo-listing-wrap-list"><img src="/assets/images/lp/soda-stream.svg"
										width="294" height="46" class="logo-listing-wrap-img"></li>
								<li class="logo-listing-wrap-list"><img src="/assets/images/lp/enterprise-kombi.svg"
										width="152" height="46" class="logo-listing-wrap-img"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Section 3 -->
<div class="section section--black" style="z-index:-1">
	<div class="section__content section__content--wide">
		<div class="section section--black steps-sections schnell_box">
			<div class="section__content section__content--wide para-big-font">
				<div class="centered small-green-tx">Schnell eingerichtet</div>
				<p class="centered centered--wide"><strong>In drei Schritten zu Ihrem VoiceBot</strong>
					<br>
				</p>
				<div class="co-grid">
					<div class="process-bar"></div>
					<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--4-md centered">
						<div class="version_steps">1</div>
						<h5 class="para-big-font-heading">Erstgespräch​</h5>
						<p class="para-big-font-para">*Aufnahme Anforderungen (15 Min)​<br>
							*Kurzpräsentation & Democall (10 Min)​</p>
						<p class="para-big-font-para">>> Verabredung Zweitgespräch, Interessent liefert vorab seinen
							einfachsten Usecase für spezifische Lievedemo</p>
					</div>

					<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--4-md centered">
						<div class="version_steps">2</div>
						<h5 class="para-big-font-heading">LiveDemo​</h5>
						<p class="para-big-font-para">*Livedemo des erstellen Voicebots (15 Min)​<br>
							*Beantwortung aller Fragen (10 Min)​​<br>
							*Abstimmung Follow-up (20 Min)​
							​</p>
						<p class="para-big-font-para"> >> Direkter Test an der Hotline oder Ausbau des erstellten
							Voicebots ​</p>
					</div>

					<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--4-md centered">
						<div class="version_steps">3</div>
						<h5 class="para-big-font-heading">Post-Launch​</h5>
						<p class="para-big-font-para">*Klärung Formalitäten wie Datenschutz ​<br>
							*Planung Projektunterstützung​<br>
							*Planung Launch​</p>
					</div>
				</div>
				<p class="btn-set ">
					<a href="#" class="btn btn--green-btn-stp centered leftright-equal trackedContactModal" data-openmodal="contact-sales">KOSTENLOSES ERSTGESPRÄCH BUCHEN</a>
				</p>
			</div>
		</div>
	</div>

	<!-- Section 4 -->
	<div class=" green-reachable-block gray-independently-container">
		<div class="section__content section__content--wide">
			<div class="centered small-green-tx">VoiceBots für einfache Aufgaben</div><br>
			<h2 class="communication-container-heading centered">Redundante Aufgaben <br> einfach abgeben</h2>
			<p class="bigtext centered ">Widmen Sie Ihre Aufmerksamkeit den wirklich <br>wichtigen Business-Aufgaben.
			</p><br><br>
			<div class="co-grid flex">
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm ">
					<div class="gray-bg green-comman-space ">
						<div class="gray-box-img">
							<img src="/assets/images/lp/callone-faq-image.webp" width="760" height="223" alt="FAQ"
								class="gray-box-img-img">
						</div>
						<div class="gray-box-inner-w">
							<h3 class="green-reachable-block-heading">Häufig gestellte Fragen (FAQ)</h3>
							<p style="margin-top:var(--gutter-xs)" class="bigtext green-reachable-block-para">
								Füttern Sie den VoiceBot mit Ihren Fragen & Antworten als CSV-Datei und er beantwortet
								diese im Handumdrehen selbstständig in Ihrer Hotline.
							</p>
						</div>
					</div>
				</div>
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm step-top-margin">
					<div class="gray-bg green-comman-space">
						<div class="gray-box-img">
							<img src="/assets/images/lp/callone-step-instructions.webp" width="1004" height="292"
								alt="Schritt-für-Schritt-Anleitungen" class="gray-box-img-img">
						</div>
						<div class="gray-box-inner-w">
							<h3 class="green-reachable-block-heading">Schritt-für-Schritt-Anleitungen</h3>
							<p style="margin-top:var(--gutter-xs)" class="bigtext green-reachable-block-para">
								Erstellen Sie einfache Schritt-für-Schritt-Anleitungen, die der VoiceBot mit Ihren
								Anrufern durchgeht und einfache Abläufe so automatisiert erläutert.
							</p>
						</div>
					</div>
				</div>
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm step-top-minus-margin ">
					<div class="gray-bg green-comman-space">
						<div class="gray-box-img">
							<img src="/assets/images/lp/callone-step-forwarding.webp" width="960" height="346"
								alt="Weiterleitungen" class="gray-box-img-img">
						</div>
						<div class="gray-box-inner-w">
							<h3 class="green-reachable-block-heading">Weiterleitungen</h3>
							<p style="margin-top:var(--gutter-xs)" class="bigtext green-reachable-block-para">
								Lassen Sie den VoiceBot als virtuellen Hotline-Mitarbeiter arbeiten und smarte
								Weiterleitungen an echte Agenten oder Ihre Mailbox durchführen.
							</p>
						</div>
					</div>
				</div>
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">
					<div class="gray-bg green-comman-space">
						<div class="gray-box-img">
							<img src="/assets/images/lp/callone-share-information.webp" width="974" height="275"
								alt="Auskünfte erteilen" class="gray-box-img-img">
						</div>
						<div class="gray-box-inner-w">
							<h3 class="green-reachable-block-heading">Auskünfte erteilen</h3>
							<p style="margin-top:var(--gutter-xs)" class="bigtext green-reachable-block-para">
								Einfache, aber auch komplexere Auskünfte in einem natürliche Dialog erteilen, ist mit
								unserem VoiceBot im Handumdrehen erledigt.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Section 5 -->
<div class="section section--black step-fourth-section" style="z-index:-1">
	<div class="section__content section__content--wide">
		<div class="co-grid">
			<div style="z-index: 1;" class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm mobile-start">
				<div class="centered small-green-tx">Kundenerfahrung</div><br>
				<h1 class="hero-headline centered">
					Wie der VoiceBot o.phon <br>zum Erfolg verhalf
				</h1>
				<div class="machineless_automation_video centered" data-binding="video-overlay" data-iframe_url="https://www.youtube.com/embed/OTh3yXU-q4o">
					<div class="video_circle_box"><span class="video-play-icon"></span></div>
					<img src="/assets/images/lp/callone-success-video.webp" width="1024" height="448" class="video-img">

				</div>
			</div>
		</div>
	</div>
</div>
<div class="callone_callto_action_bg">
	<div class="step-five-section">
		<div class="section section--black less-btm-btm-space setp-five_no_bg" style="z-index:-1">
			<div class="voll_main_container">
				<div class="section__content section__content--wide">
					<div class="co-grid">
						<div style="z-index: 1;"
							class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--7-md  ">
							<div class=" small-green-tx">Datenschutz & Sicherheit –</div>
							<h2 class="voll-headline">Voll DSGVO-konform und auf<br> Ihre Sicherheit bedacht.</h2>
							<p class="smalltext">Unser VoiceBot arbeitet mit neuesten KI-Technologien, ist hochmodern
								und dabei
								voll DSGVO-konform. Sie haben die Wahl, ob direkt über die OpenAI-Schnittstelle oder
								über
								Microsoft Azure – der VoiceBot passt sich an und arbeitet so für Sie, wie Sie es
								möchten.</p>
							<p class="smalltext">Lieber über Ihren eigenen OpenAI API-Key? Kein Problem: Standardmäßig
								arbeiten
								Sie über unsere Keys, können jedoch jederzeit auf Ihre eigenen Keys umstellen, um so
								jederzeit
								die volle API-Kontrolle zu haben.</p>
						</div>
						<div
							class="relative co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--5-md flex vcentered">
							<div class="dsgvo_section_video">
								<div class="machineless_automation_video centered" data-binding="video-overlay" data-iframe_url="https://www.youtube.com/embed/6ybb9zdi8A4">
									<div class="video_circle_box"><span class="video-play-icon"></span></div>
									<img src="/assets/images/lp/callone-DSGVO-video.webp" width="616" height="373"
										class="video-img">
									<div class="dsgvo_video_caption"><strong>CallOne VoiceBot DSGVO konform!</strong>
										Im Gespräch mit Rechtsanwalt Schmidt</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="callone_call_to_action">
				<div class="co-grid">
					<div style="z-index: 1;" class="co-grid__col co-grid__col--12-xs co-grid__col--8-sm mobile-start">
						<div class="calltoaction_image"><img src="/assets/images/lp/callone-call-to-action-mobile.png"
								width="417" height="680" class="call-mobile-img"></div>
						<div class="small-green-tx">In 30 Minuten startklar – 14 Tage kostenlos testen</div><br>
						<h2 class="voll-headline">Starten Sie <span> noch heute</span> Ihre kostenlose <span>14-tägige
								Testphase</span></h2>
						<p class="smalltext">Fragen Sie bis 16:00 Uhr vollständig an, bekommen Sie noch am selben
							Werktag Ihren Zugang freigeschaltet und können direkt mit Ihrer kostenlosen 14-tägigen
							Testphase starten.</p>
						<p class="btn-set"><a href="#" class="btn btn--green-btn-stp trackedContactModal" data-openmodal="contact-sales">Jetzt kostenlos starten</a></p>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Section 6 -->
	<div class="section section--black   gray-independently-container toolset_container">
		<div class="section__content section__content--wide">
			<div class="centered small-green-tx"><span>VoiceBot Premium</span></div><br>
			<h2 class="communication-container-heading centered">Ihr Toolset mit dem <br>VoiceBot verknüpft</h2>
			<p class="bigtext centered ">Unser VoiceBot kann mehr: Ob Terminvereinbarung, Echtzeitinformationen aus
				Schnittstellen oder Kundendaten aus Ihrem CRM-System abrufen – gestalten Sie Ihre automatisierte
				Telefonie so, wie Sie es gerade benötigen.</p><br><br>
			<div class="co-grid flex">
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm">
					<h4 class="slider-heading">Holen Sie mehr aus dem VoiceBot mit diesen Integrationen:</h4>
					<div class="voice_toolset-wrap">
						<!-- Slider main container -->
						<div class="swiper">
								<div class="nav-wrap">
								<div class="co-grid flex">
									<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm">
										<div class="swiper-button-prev"></div>
										<div class="swiper-button-next"></div>
									</div>
								</div>
							</div>
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide">
									<div class="voice_toolset_tile blue-border">
										<div class="toolset_logo">
											<img src="/assets/images/lp/callone-calendly-img.webp" width="56"
												height="56" class="call-mobile-img">
										</div>
										<h4 class="slider-heading">Calendly</h4>
										<p class="smltext">Ihr VoiceBot prüft über die Calendly-Integration Ihre
											Verfügbarkeit in
											Echtzeit und bietet Ihren Anrufern die Möglichkeit, Termine zu vereinbaren
											oder
											abzusagen.</p>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="voice_toolset_tile blue-border-b">
										<div class="toolset_logo">
											<img src="/assets/images/lp/callone-samedi-logo.webp" width="222"
												height="56" class="call-mobile-img">
										</div>
										<h4 class="slider-heading">samedi</h4>
										<p class="smltext">Praxistermine vereinbaren im Handumdrehen? Dank der
											samedi-Integration möglich: Ihr VoiceBot nimmt Anrufe entgegen und
											vereinbart Patiententermine für Sie.</p>
									</div>
								</div>
								
								<div class="swiper-slide">
									<div class="voice_toolset_tile blue-border-h">
										<div class="toolset_logo">
											<img src="/assets/images/lp/callone-hubspot-logo.webp" width="56"
												height="56" class="call-mobile-img">
										</div>
										<h4 class="slider-heading">HubSpot</h4>
										<p class="smltext">Kundendaten in Echtzeit abrufen und Ihre anrufenden Kunden
											durch den VoiceBot individuell beraten lassen? Die HubSpot-Integration
											macht’s möglich.</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<p class="btn-set centered ">
						<a href="/voicebot-preise#preselected_package=flex" class="btn btn--green-brd">Indiv. Anfrage senden</a>
						<a href="#" class="btn btn--primary trackedContactModal" data-openmodal="contact-sales">Jetzt kostenlos testen</a>
					</p>
				</div>
			</div>
			<div class="co-grid flex">
				<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm">
					<div class="waiting_time_box">
						<div class="co-grid flex">
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--2-sm">
								<img src="/assets/images/lp/callone-waiting-img.webp" width="56" height="56"
									alt="waiting" class="call-mobile-img">
							</div>
							<div class="co-grid__col co-grid__col--12-xs co-grid__col--10-sm">
								<h5 class="waiting_heading">Hohe Nachfrage – Wartezeit für Premium VoiceBot</h5>
								<p class="text-para">Um Qualität und den gewohnten Standard sicherzustellen, arbeiten
									wir eingegangene
									Anfragen nach und nach ab. <strong>Aufgrund des hohen Interesses und der steigenden
										Nachfrage müssen Sie aktuell mit einer Wartezeit von circa einer Woche
										rechnen.</strong></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Section 7 -->
<div class="section section--black   voicebot_tim_price_container">
	<div class="section__content section__content--wide">
		<div class="centered small-green-tx">Starten Sie noch heute</div><br>
		<h2 class="communication-container-heading centered">Flexible Tarife für jede <br>Unternehmensgröße</h2>
		<div class="co-grid flex">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--4-md">
				<div class="tariffs_box beginner_plan1_bg">
					<h4 class="heading_tariffs">Einsteiger</h4>
					<div class="vb-package__price">€<em>89</em> <span>/ monatlich</span></div>
					<div class="vb-package__subtitle">
						<p class="tariffs_text">Ideal für kleinere Unternehmen mit Wachstumsambitionen</p>
						<ul class="list list--checkmarks">
							<li class="list-upd">
								<div>14 Tage kostenlos testen </div>
							</li>
							<li class="list-upd">
								<div>300 Minuten inkludiert <span>danach €0,18 pro Minute</span> </div>
							</li>
							<li class="list-upd">
								<div>3 VoiceBots inkludiert </div>
							</li>
						</ul>
						<a href="/voicebot-preise#preselected_package=1" class="btn btn--primary full-width ">ZUM PREISKONFIGURATOR</a>
					</div>
				</div>
			</div>

			<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--4-md">
				<div class="tariffs_box beginner_plan2_bg">
					<h4 class="heading_tariffs">Fortgeschritten</h4>
					<div class="vb-package__price">€<em>259</em> <span>/ monatlich</span></div>
					<div class="vb-package__subtitle">
						<p class="tariffs_text">Ideal für Unternehmen mit frequentierter Kundenhotline</p>
						<ul class="list list--checkmarks">
							<li class="list-upd">
								<div>14 Tage kostenlos testen </div>
							</li>
							<li class="list-upd">
								<div>1.000 Minuten inkludiert <span>danach €0,15 pro Minute</span> </div>
							</li>
							<li class="list-upd">
								<div>5 VoiceBots inkludiert</div>
							</li>
						</ul>
						<a href="/voicebot-preise#preselected_package=2" class="btn btn--primary full-width ">ZUM PREISKONFIGURATOR</a>
					</div>
				</div>
			</div>

			<div class="co-grid__col co-grid__col--12-xs co-grid__col--12-sm co-grid__col--4-md">
				<div class="tariffs_box beginner_plan3_bg">
					<h4 class="heading_tariffs">Experte</h4>
					<div class="vb-package__price">€<em>659</em> <span>/ monatlich</span></div>
					<div class="vb-package__subtitle">
						<p class="tariffs_text">Für große Unternehmen, Poweruser & Experten</p>
						<ul class="list list--checkmarks">
							<li class="list-upd">
								<div>14 Tage kostenlos testen </div>
							</li>
							<li class="list-upd">
								<div>3.500 Minuten inkludiert<span>danach €0,12 pro Minute</span> </div>
							</li>
							<li class="list-upd">
								<div>Unlimitierte VoiceBots inkludiert</div>
							</li>
						</ul>
						<a href="/voicebot-preise#preselected_package=3" class="btn btn--primary full-width ">ZUM PREISKONFIGURATOR</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Section 8 -->
<div class="section section--black step-five-section  voicebot_discover_box">
	<div class="section__content section__content--wide">
		<div class="callone_call_to_action">
			<div class="co-grid">
				<div style="z-index: 1;" class="co-grid__col co-grid__col--12-xs co-grid__col--7-sm mobile-start">
					<div class="small-green-tx">Stark in Technologie & Service:</div><br>
					<h2 class="voll-headline"><span>Entdecken Sie unsere VoiceBots & Telefonanlagen. Erstklassige
							Angebote warten auf Ihre Kontaktaufnahme.</span></span></h2>
					<p class="smalltext">Sie stehen vor einer technischen Herausforderung oder haben einen besonderen
						Anwendungsfall? Kein Projekt ist uns zu komplex. Vertrauen Sie auf unsere ausgezeichnete
						Qualität und unseren technischen Fortschritt. Kontaktieren Sie uns – wir freuen uns darauf,
						Ihnen zu zeigen, was wir können!</p>
					<p class="btn-set"><a href="#" class="btn btn--green-btn-stp trackedContactModal" data-openmodal="contact-sales">Zum Kontaktformular</a></p>
					<div class="calltoaction_image"><img src="/assets/images/lp/telephone-systems-boy-graphic.webp"
							width="417" height="680" class="call-mobile-img"></div>
					<div class="discover_circle">
						<h5 class="dis_corcle_heading">Unser VoiceBot
							bald bei unseren
							Partnern erhältlich
						</h5>
						<p class="btn-sets"><a href="#" class="btn btn--green-btn-stp trackedContactModal" data-openmodal="contact-sales">Partner werden</a></p>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>




