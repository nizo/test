<?php
$product = new product ('Callcenter-Bot', 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.');
$product->image_set ('https://callone.de/assets/images/illus/relaxing.gif');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
  'Wie funktioniert der CallOne Callcenter Bot?​',
  '<p>Wir bieten kundenindividuelle Lösungen für Ihre Telefonhotline, um Anruferanliegen zu automatisieren.<br>Dies reicht vom sprachgesteuerten Auswahlmenü bis hin zu einem KI-gesteuerten Sprachdialog, in dem wir verschiedene Komponenten wie Voice-to-Text, KI, Schnittstellenanbindung an Ihre Systeme und Text-to-Speech zur Lösung des Anruferanliegens zusammenführen. Es handelt sich hierbei stets um Projekte mit unterschiedlichem Umfang und Anforderungen. <a href="#" title="Sprechen Sie uns an - Wir beraten Sie gerne" data-openmodal="contact-sales">Sprechen Sie uns an​</a></p>'
);
$faqs->faq_add (
  'Was sind die häufigsten Anwendungsfälle des Callcenter-Bots?',
  '<p>Wir bieten Ihnen drei Anwendungsbereiche: Sprachgesteuerte IVR-Auswahlmenüs, FAQ-Portale, individuelle KI-gesteuerte Kundendialoglösungen mit Voice-to-Text, KI, Text-to-Speech und Schnittstellenintegrationen.</p>'
);
$faqs->faq_add (
  'Was sind die ersten Schritte mit dem Callcenter-Bot?',
  '<p>Sie setzen sich mit uns in Verbindung und wir besprechen Ihr konkretes Anwendungsszenario. Recht schnell erstellen wir ein Prototyp für Sie und testen. Bei komplexeren Anwendungsfällen wie Schnittstellenintegrationen und komplexen Anwendungsfällen steht Ihnen ein Projektteam aus eigenen Full Stack- und Schnittstellenentwicklern, Web-Entwicklern und Sprachwissenschaftlern zur Verfügung.</p>'
);
$faqs->faq_add (
  'Wie können wir den CallOne Callcenter-Bot nutzen?',
  '<p>Wir bieten Ihnen ein Full-Service-Paket. Hierbei erhalten Sie von uns alles, was Sie brauchen, um Ihr Spracherlebnis auf den Weg zu bringen - von der Konzeptentwicklung bis zur Markteinführung und Optimierung Ihres Produkts.</p>'
);
$faqs->faq_add (
  'Was kostet der Callcenter-Bot?',
  '<p>Die Pricing des Callcenter-Bots erfolgt nach Nutzung. Sie zahlen je Aufruf der Sprachanforderung (VTT) und Text-to-Speech (TTS). Der Aufwand für die Bereitstellung Ihres Callcenter-Bots ist kundenindividuell und richtet sich nach Art und Umfang des Projekts.</p>'
);
$faqs->faq_add (
  'Wie lange dauert die Umsetzung?',
  '<p>Der Start für einen Callcenter Bot kann innerhalb weniger Stunden für Sie erfolgen, wenn es sich beispielsweise um die Sprachautomatisierung Ihres IVR-Menüs handelt. Im laufenden Betrieb optimieren wir mit Ihnen die erkannten Eingaben. Projekte bei denen Schnittstellenintegrationen und vielzählige Plausibilitäten abzubilden sind, werden in einem individuellen Projektplan für Sie verbindlich zusammengestellt.​</p>'
);
?>

<div class="section" style="overflow:hidden">
  <div class="section__content section__content--narrow">
    <header class="main-header">
      <div class="grid centered">
          <div class="col-1">
            <h1>Callcenter-Bot <br>für Kundenservice und Helpdesk </h1>
            <p>
            	Sprachgesteuerte Menüführung, automatisierte FAQ am Telefon und Callcenter Bots, die Ihren Callcenter-Agenten Standardaufgaben abnehmen​.
            </p>
          </div>
          <div class="col-1">
              <div class="button-set centered">
                  	<a href="#" class="button primary trackedElement" data-label="Button Header - Sales kontaktieren" data-category="Link" data-action="Show Contact Modal" data-openmodal="contact-sales">Mit Experten sprechen</a>
              </div>
          </div>
      </div>
      <div class="grid centered">
        <div class="col-1">
        	<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/illus/relaxing.gif" data-srcset="/assets/images/illus/relaxing.gif" title="Verbessern von Kundenzufriedenheit durch sprachbasierte Auswahlmenüs" alt="Verbessern von Kundenzufriedenheit durch sprachbasierte Auswahlmenüs" class="lazy relaxingImage" width="880" height="256">
		</div>
      </div>
    </header>
  </div>
  <div class="chat-conversation">
	<div><img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_15.svg" data-srcset="/assets/images/icons_svg/big_15.svg" class="lazy" title="Kunde fragt" alt="Kunde fragt" width="60" height="60" /><span class="text">Ich möchte meinen Lieferstatus wissen.</span></div>
	<div><span class="text">Ihr Pakt wird morgen geliefert.</span><img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_14.svg" data-srcset="/assets/images/icons_svg/big_14.svg" class="lazy" title="Callcenter Bot Bender antwortet " alt="Callcenter Bot Bender antwortet" width="59" height="60" /></div>
  </div>
</div>

<div class="wrapper">
  <div class="content wide centered">
    <h2 class="h1 centered">Verwendungsmöglichkeiten für den Callcenter-Bot <br>Das sprachgesteuerte KI-Sprachdialogsystem</h2>
  </div>

  <div class="content wide">
    <div class="grid">
      <div class="col-3">
        <img class="icon lazy" src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/small_38.svg" data-srcset="/assets/images/icons_svg/small_38.svg" alt="Auswahlmenüs - Sprachauswahl statt DTMF-Tasten" width="70" height="78" />
        <h3 class="centered">Sprachgesteuertes IVR</h3>
        <p>Sprachdialoge statt starrer Menüs.</p>
        <ul class="list approved-list">
        	<li>Erkennung menschlicher Sprache</li>
        	<li>Intelligente Spracherlebnisse</li>
        	<li>Anlernbar, beliebig skalierbar, mehrsprachig</li>
        </ul>
      </div>
      <div class="col-3">
        <img class="icon lazy" src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_13.svg" data-srcset="/assets/images/icons_svg/big_13.svg" alt="Self-Service / FAQ - Anliegen aufnehmen und vollautomatisiert bearbeiten" width="70" height="63" />
        <h3 class="centered">Informationsbots​</h3>
        <p>Anruferanfragen automatisiert beantworten.</p>
        <ul class="list approved-list">
        	<li>Sprachbasierte FAQ​</li>
        	<li>Vorqualifizierung von Anruferanliegen</li>
        	<li>Aktuelle Nachrichteninformationen</li>
        	<li>Automatisierte Informationsübermittlung</li>
        </ul> 
      </div>
      <div class="col-3">
        <img class="icon lazy" src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_12.svg" data-srcset="/assets/images/icons_svg/big_12.svg" alt="Individual - Kundenindividuelle Anwendungen" width="70" height="55" />
        <h3 class="centered">Callcenter Bots</h3>
        <p>Leistungsstarke Schnittstellen für kundenindividuelle Anwendungen​.</p>
        <ul class="list approved-list">
        	<li>Termin vereinbaren</li>
        	<li>Lieferstatus erfragen</li>
        	<li>Passwort ändern</li>
        	<li>Kontostand abrufen</li>
        </ul> 
      </div>
    </div>
  </div>
  <div class="content narrow centered">
  	<div class="button-set centered">
	  <a href="#" data-openmodal="contact-sales" class="button secondary trackedElement" data-label="Button - Mit Experten sprechen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
    </div>
  </div>
</div>

<div class="wrapper background" id="calltracking">
  <div class="content wide">
  	<div class="grid cross-grid auto">
        <div class="col-2">
        	<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/illus/CallOneRobot-invers-2.svg" data-srcset="/assets/images/illus/CallOneRobot-invers-2.svg" alt="So funktioniert unser Spachdialogsystem - Der Callcenter Bot" class="lazy" usemap="#robot" width="540" height="917" />
        	<map name="robot">
            	<script>
                	function showStep(e, step){
                	    e = e || window.event;
                	    e.preventDefault();

                      let mapItems = document.querySelectorAll('.mapList li');
                      mapItems.forEach((item, i) => {
                        let color = '#000000';
                        if (step == (i+1))
                          color = '#86ED18';
                        item.style.borderColor = color;
                      });
                	}
            	</script>
        		<area class="blue" onmouseover="showStep(event, 1)" onclick="showStep(event, 1)" shape="rect" coords="0,70,80,145" href="#" alt="Callcenter Bot 1">
        		<area class="blue" onmouseover="showStep(event, 2)" onclick="showStep(event, 2)" shape="rect" coords="460,260,540,340" href="#" alt="Callcenter Bot 2">
        		<area class="blue" onmouseover="showStep(event, 3)" onclick="showStep(event, 3)" shape="rect" coords="10,320,80,400" href="#" alt="Callcenter Bot 3">
        		<area class="blue" onmouseover="showStep(event, 4)" onclick="showStep(event, 4)" shape="rect" coords="460,605,540,680" href="#" alt="Callcenter Bot 4">
            </map>
        </div>
        <div class="col-2 cross">
        	<div class="shadow-box padding">
              <h3 class="h2">Wie funktioniert unser Callcenter Bot?</h3>
              <ol class="list border-list mapList">
              	<li><strong class="headline">Sprachportal nimmt Anruf entgegen</strong> Das CallOne Sprachdialogsystem erkennt das gesprochene Wort des Anrufers. Diese auch als Voice-to-Text (VTT) oder Automatic-Speech-Recognition (ASR) bezeichnete Technologie ermöglicht es, in Echtzeit aus Sprache Text zu erstellen.</li> 
				<li><strong class="headline">Das Anliegen mittels vortrainierter KI identifizieren</strong> Schlüsselwörter und semantische Zusammenhänge werden erkannt.</li>
				<li><strong class="headline">Sprachdialog mit Ihrem Anrufer</strong> mittels Sprachsynthese (Text-to-Speech)</li>
				<li><strong class="headline">Vorqualifizierung oder Lösung des Anruferanliegens</strong> Ist das Anliegen des Anrufers definiert erfolgt die Weiterleitung auf die hinterlegte Routing-Logik (unterschiedliche Ziele, Skills, Warteschleifen).</li> 
              </ol>
              <div class="button-set centered">
              	<a href="#" data-openmodal="contact-sales" class="button primary trackedElement mobileWrap" data-label="Button - Jetzt einfach ausprobieren!" data-category="Link" data-action="linked to #demos">Weitere Fragen? Kontaktieren sie uns!</a>
              </div>
			</div>
        </div>
    </div>
  </div>
</div>

<div class="wrapper" id="integrations">
  <div class="content narrow centered">
  	<h2 class="h1 centered">Nutzen</h2>
  	<p>CallOne bietet das Full-Service Paket für Callcenter-Bots am Telefon - von der Konzeptentwicklung bis zur Markteinführung und Optimierung Ihres Produkts.</p>
  </div>
  <div class="content wide right">
  	<div class="content narrow">
        <div class="shadow-box padding">
          <div class="grid">
            <div class="col-2">
              <img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/illus/voicebot-business.gif" data-srcset="/assets/images/illus/voicebot-business.gif" alt="Callcenter Bot - Nutzen für Unternehmen" class="img-75 lazy" width="315" height="280" />
            </div>
            <div class="col-2">
              <h3 class="h2">Unternehmen</h3>
              <ul class="list approved-list">
              	<li>Das Anliegen sofort verstehen und Geld sparen (Verkürzte Anrufdauern)</li>
              	<li>Den Service entlasten mit kürzeren Gesprächszeiten (Optimale Vorqualifizierung)</li>
              	<li>Mehrsprachigen Kundenservice anbieten (Internationaler Rollout)</li>
              </ul>
            </div>
          </div>    
        </div>
     </div>
  </div>
  <div class="content wide left">
  	<div class="content narrow"> 
        <div class="shadow-box padding">
          <div class="grid">
            <div class="col-2">
              <h3 class="h2">Anrufer</h3>
              <ul class="list approved-list">
              	<li>Zufriedenere Anrufer durch natürliche Menüführung</li>
              	<li>Optimale Übertragung des Anruferanliegen an den Servicemitarbeiter</li>
              	<li>24/7 Erreichbarkeit für Ihre Anrufer</li>
              </ul>
            </div>
            <div class="col-2">
              <img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/illus/voicebot-user.gif" data-srcset="/assets/images/illus/voicebot-user.gif" alt="Callcenter Bot - Nutzen für Anrufer" class="img-75 lazy" width="315" height="301" />
            </div>
          </div>    
        </div>
    </div>
  </div>
  <div class="content thin centered">
    <div class="button-set centered">
      <a href="#" class="button primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt 14 Tage testen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
    </div>
  </div>
</div>

<div class="wrapper quarter-background">
  <div class="content narrow">
    <strong class="h2 font-secondary centered white">Supported by</strong>

    <div class="shadow-box padding">
    	<div class="grid">
    		<div class="col-2">
    			<p><img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/logo/partnerlogos/logo-google.svg" data-srcset="/assets/images/logo/partnerlogos/logo-google.svg" alt="t3n" class="partnerLogo small-33 gray-100 lazy" width="118" height="40" /></p>
    		</div>
    		<div class="col-2">
    			<p><img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/logo/partnerlogos/logo-amazon.svg" data-srcset="/assets/images/logo/partnerlogos/logo-amazon.svg" alt="Gründerszene" class="partnerLogo small-33 gray-100 lazy" width="133" height="40" /></p>
    		</div>
    	</div>
    </div>
  </div>
</div>

<?php include('partials/slider-callcenter-bot.php'); ?>

<div class="wrapper breather" id="addons">
  <div class="content narrow left small h_text">
	<h2 class="h1 centered">Weitere Callcenter Bot-Addons</h2>
  	<div class="grid parallel">
        <div class="col-2">
        	<div class="image primary">
        		<img src="/assets/images/icons_svg/small_18.svg" alt="Alles über eine Webseite steuerbar" class="white icon" width="69" height="50" />
        	</div>
        	<div class="text">
        		<h3 class="h2">Call-Tracking</h3>
    			<p>Rückgabe von relevanten Informationen auf Basis der Website-Daten.</p>
			</div>
        </div>
        <div class="col-2">
        	<div class="image primary">
        		<span class="sl sl-chat-acknowledge sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">Callcenter-Software</h3>
    			<p>Steuerung von Anrufen mit Hilfe von Spracheingaben.</p>
    		</div>
        </div>
        <div class="col-2">
        	<div class="image secondary-2">
        		<span class="sl sl-document1 sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">VoIP-Telefonanlage</h3>
    			<p>Live-Chat mit Website-Besuchern und Versenden von Dokumenten.</p>
    		</div>	
        </div>
        <div class="col-2">
        	<div class="image secondary-2">
        		<span class="sl sl-routing sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">Zusammenspiel mit eigener Anlage</h3>
    			<p>Routing auf Basis von Webseiteneingaben oder Warenkorbinhalten.</p>
    		</div>	
        </div>
        <div class="col-2">
        	<div class="image secondary-3">
        		<span class="sl sl-database1 sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">CTI-Integration mit Ihrem CRM</h3>
    			<p>Anreicherung von Websitedaten mit Informationen aus Ihren (CRM-)Systemen.</p>
    		</div>	
        </div>
        <div class="col-2">
        	<div class="image secondary-3">
        		<span class="sl sl-cobrowsing sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">Co-Browsing</h3>
    			<p>Starten einer Co-Browsing Session nach Kontaktaufnahme durch den Nutzer.</p>
    		</div>	
        </div>
      </div>
  </div>
</div>

<div class="wrapper">
  <div class="content wide mobileNoPadding">
    <h3 class="h1 centered">FAQ Callcenter-Bot</h3>
    
    <?php
    $faqs->structured_data_get_code ();
    $faqs->html_get_code ();
    ?>

    <p></p>

    <div class="button-set centered">
		<a href="/faq/" class="button primary trackedElement" data-label="Button - Mehr FAQ" data-category="Link" data-action="linked to /faq/">Mehr FAQ</a>
	</div>  
  </div>
</div>

<?php
// Contact form has been replaced by sales contact modal
// include('partials/contact-form.php');
?>