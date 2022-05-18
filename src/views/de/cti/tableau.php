<?php
$faqs = new faqs ();
$faqs->faq_add (
  'Wie funktioniert der Telefonanlagen Connector für Tableau?',
  '<p>CallOne bietet eine umfassende VoIP-Telefonanlage mit Callcenter-Software und unzähligen Schnittstellen. Für das BI-Tool Tableau bietet wir als Tableau Technologie-Partner eine fertige Anbindung über den Tableau Webdata-Connetor zur Übermittlung aller anrufspezifischen Daten. Sie erhalten nach Freischaltung von Telefonanlage und Connector Ihre Zugangsdaten und könne sofort loslegen.</p>'
);
$faqs->faq_add (
  'Welche KPI kann ich mit dem Tableau Konnector erhalten?',
  '<p>Sie erhalten eine umfassende Sammlung aller anrufrelevanten Daten. Neben Anruf- und Wartedauer erhalten Sie eine Vielzahl von Informationen rund um Ihre Agenten, Warteschleifen, Anrufgründe, Herkünfte und Verteilung der Anrufe. Sie können somit Telefon-KPIs ermitteln und diese Daten mit Ihren sonstigen Kontaktkanälen für einen Gesamtbild in Verbindung bringen.</p>'
);
$faqs->faq_add (
  'Was kostet der Telefonanlagen Connector für Tableau?',
  '<p>Der Tableau Connector ist Teil der VoIP-Telefonanlage und Callcenter-Software von CallOne. <a href="#" title="Kontaktieren Sie uns für ein individuelles Angebot" data-openmodal="contact-sales">Bitte setzen Sie sich für ein individuelles Angebot mit uns in Verbindung</a>.</p>'
);
$faqs->faq_add (
  'Kann ich den Tableau Connector auch mit meiner bestehenden Telefonanlage nutzen?',
  '<p>Es gibt zahlreiche CallOne Kunden, die ihre eigene Telefonanlage im Zusammenspiel mit der CallOne Callcenter-Software nutzen. Um die Telefondaten für einen Tableau-Export zu erfassen ist es stets Grundvoraussetzung, dass die Gespräche über unsere Infrastruktur geleitet und aufbereitet werden. Zur Besprechung Ihrer individuellen Anforderungen <a href="#" title="Sprechen Sie mit unseren Experten" data-openmodal="contact-sales">sprechen sie mit unseren Experten</a></p>'
);
$faqs->faq_add (
  'Gibt es bei CallOne noch andere Möglichkeiten Telefondaten für meine BI-Abteilung zu erhalten?',
  '<p>CallOne bietet weit <a href="https://connect.callone.io/api/rest/" title="Apps und Schnittstellen">über 50 unterschiedliche Schnittstellen und Webhooks</a> um ihre Businesslösungen mit unserer VoIP-Telefonanlage zu koppeln. Insbesondere für Kunden, die umfassende Rohdaten rund um das Callcenter oder die Telefonanlage benötigen. Unsere Schnittstellenprogrammierer helfen Ihnen bei individuellen Anforderungen persönlich weiter.</p>'
);
$faqs->faq_add (
  'Kann ich die Callcenter-Software und den Tableau Connector testen?',
  '<p>Ja, ein Test und eine Demo ist möglich und von unserer Seite auch gewünscht. <a href="/kontakt" title="Treten Sie ins Kontakt">Bitte kontaktieren sie unsere Experten für eine Websession</a></p><p>Darüber hinaus bietet CallOne eine Vielzahl fertiger Apps für beliebte Tools wie Pipedrive, Salesforce, Zendesk, uvm. sowie Integrationen mit BI-Tools wie tableau und Geckoboard.</p>'
);
?>

<div class="section">
  <div class="section__content section__content--wide">
    <header class="main-header">
      <div class="text no-padding">
        <h1>Der CallOne <br>Tableau-Connector:</h1>
        <p class="primary">Integrieren Sie Ihre Callcenter KPIs in Tableau.</p>
        <nav class="site-nav shadowbox">
       		<ul class="menu">
      			<li>
      				<a href="#beispiel" class="arrow">Beispiel</a>
      			</li>
      			<li>
      				<a href="#nutzen" class="arrow">Nutzen</a>
      			</li>
      			<li>
      				<a href="#funktionen" class="arrow">Funktionen</a>
      			</li>
      			<li>
      				<a href="#faq" class="arrow" target="_blank">FAQ</a>
      			</li>
      		</ul>	
        </nav>
      </div>
      <div class="media">
        <?= pictureTag(
          '/assets/images/photos/callcenter-cockpit-dashboard-tableau.png',
          'Callcenter Cockpit Dashboard Tableau',
          560, 361, [
            'class' => 'mobile-hidden'
          ], false
        ); ?>
      </div>
    </header>
  </div>
</div>

<div class="wrapper half-background">
  <div class="content narrow">
    <strong class="h1 font-secondary centered uppercase white p80">
      <?= pictureTag(
        '/assets/images/logo/partnerlogos/callone_tableau_2.svg',
        'CallOne + Tableau',
        880, 88
      ); ?>
    </strong>
    <div class="button-set centered">
      <a href="#" class="button primary trackedElement" data-openmodal="contact-sales" data-label="Button - Experten kontaktieren" data-category="Link" data-action="opens sales modal">Experten kontaktieren</a>
    </div>
    <br>
    <h2 class="h2 centered">Kunden, die erfolgreich unseren Tableau-Connector nutzen:</h2>
    	
    <div class="shadow-box padding marginTop">
    	<div class="grid">
    		<div class="col-3">
    			<p>
            <?= pictureTag(
              '/assets/images/client-logos/logo-apo-discounter-noborder.png',
              't3n',
              160, 40, [
                'class' => 'partnerLogo small-33 gray-100'
              ]
            ); ?>
          </p>
    		</div>
    		<div class="col-3">
    			<p>
            <?= pictureTag(
              '/assets/images/client-logos/logo-check24-color.svg',
              'Gründerszene',
              167, 40, [
                'class' => 'partnerLogo small-33 gray-100'
              ]
            ); ?>
          </p>
    		</div>
    		<div class="col-3">
    			<p>
            <?= pictureTag(
              '/assets/images/client-logos/postcode-color.png',
              'Call Center Verein',
              65, 40, [
                'class' => 'partnerLogo small-33 gray-100'
              ]
            ); ?>
          </p>
    		</div>
    	</div>
    </div>
    <br /><br />
  </div>
</div>

<div class="wrapper" id="beispiel">
  <div class="content wide">
  	<h2 class="h1 centered">CallOne bietet eine Telefonanlage, die auf Knopfdruck alle anrufspezifischen Daten in Tableau überträgt.</h2>
  </div>
  <div class="content wide right">
  	<div class="content narrow">
        <div class="shadow-box">
            <div class="video">
              <video controls="" preload="none" onclick="this.play();" poster="/assets/images/photos/placeholder.gif" data-poster="/assets/images/photos/callcenter-tableau-video-poster.jpg" class="trackedElement lazyPoster" data-label="Tableau WebDataConnector" data-category="Video" data-action="Play Video">
                <source src="/assets/videos/callone-tableau.webm" type="video/webm">
            	<source src="/assets/videos/callone-tableau.mp4" type="video/mp4">
              </video>
            </div>
        </div>
     </div>
  </div>
  <div class="content wide left">
  	<div class="content narrow" id="nutzen"> 
        <div class="shadow-box padding">
          <div class="grid">
            <div class="col-2">
              <ul class="list approved-list">
              	<li><strong>Schaffen Sie Transparenz</strong> in ihrem Callcenter und importieren sie alle relevanten Telefoniedaten Ihres Kundenservice- oder Salesteams in Tableau.</li>
              	<li><strong>Verkürzen sie Warte- und Gesprächsdauern</strong> durch Auswertung von Anrufgründen, Performance, Erreichbarkeiten.</li>
              	<li><strong>Verbessern sie ihren Kundenservice</strong> durch optimierte Personalplanung auf stabiler Datengrundlage.</li>
              </ul>
            </div>
            <div class="col-2">
              <?= pictureTag(
                '/assets/images/photos/tableau-callcenter-connector-dashboard.jpg',
                'tableau callcenter connector dashboard',
                420, 245
              ); ?>
            </div>
          </div>    
        </div>
    </div>
  </div>
</div>

<div class="wrapper" id="funktionen">
  <div class="content wide centered">
      <div class="grid">
        <div class="col-4">
          <?= pictureTag(
            '/assets/images/icons_svg/small_04.svg',
            'Einfache Integration',
            70, 67, [
              'class' => 'icon'
            ]
          ); ?>
          <h3>Einfach</h3>
          <ul class="list approved-list">
          	<li>Keine Programmier-kenntnisse für Anbindung erforderlich</li>
          	<li>Per <strong>Webdata-Connector</strong> einfach in Tableau integrierbar</li>
          	<li>Einfacher Integration des Flow mittels Webdata-Connector</li>
          </ul>
        </div>
        <div class="col-4">
          <?= pictureTag(
            '/assets/images/icons_svg/small_20.svg',
            'Intuitive Bedienung',
            70, 55, [
              'class' => 'icon'
            ]
          ); ?>
          <h3>Intuitiv</h3>
		  <ul class="list approved-list">
		  	<li>Daten per Drag & Drop integrieren</li>
		  	<li>Automatisches Zusammenführen von Tabellen mit Primary Key</li>
		  	<li>Vorgefertigte <strong>KPI Templates</strong> nutzen</li>
		  </ul>          
        </div>
        <div class="col-4">
          <?= pictureTag(
            '/assets/images/icons_svg/small_06.svg',
            'Alle Auswertungen auf einen Blick',
            70, 70, [
              'class' => 'icon'
            ]
          ); ?>
          <h3>Relevant</h3>
          <ul class="list approved-list">
		  	<li>Alle <strong>Callcenter KPI</strong> auf einen Blick</li>
		  	<li>Auswertung von Warteschleifen und Erreichbarkeiten, Agenten, Anrufgründen</li>
		  	<li>Kundenzufriedenheit und Callcenter-Performance auf einen Blick</li>
		  </ul>   
        </div>
        <div class="col-4">
          <?= pictureTag(
            '/assets/images/icons_svg/small_02.svg',
            'Skalierbar',
            70, 69, [
              'class' => 'icon'
            ]
          ); ?>
          <h3>Skalierbar</h3>
          <ul class="list approved-list">
		  	<li>Schnelles Erstellen <strong>individueller Reportings</strong></li>
		  	<li>Incremental Refresh ihrer Daten möglich</li>
		  	<li>Daten bis zu einem Jahr rückwirkend auslesen</li>
		  </ul>   
        </div>
      </div>  
  </div>
   <div class="content thin centered">
    <div class="button-set centered">
      <a href="#" class="button primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt 14 Tage testen" data-category="Link" data-action="opens sales modal">Jetzt 14 Tage testen</a>
    </div>
  </div>
</div>

<div class="wrapper breather" id="Tableau-Telefonkonnektor">
  <div class="content narrow left small">
	<h2 class="h1 centered">Tableau Telefon Connector</h2>
  	<div class="grid parallel">
        <div class="col-2">
        	<div class="image primary">
        		<?= pictureTag(
              '/assets/images/icons_svg/small_18_white.svg',
              'Inkrementelle Datenaktualisierung',
              69, 50, [
                'class' => 'icon'
              ]
            ); ?>
        	</div>
        	<div class="text">
    			<p>Inkrementelle Datenaktualisierung</p>
			</div>
        </div>
        <div class="col-2">
        	<div class="image primary">
        		<?= pictureTag(
              '/assets/images/icons_svg/small_15_2_white.svg',
              'Tableau Server fähig',
              69, 50, [
                'class' => 'icon'
              ]
            ); ?>
        	</div>
        	<div class="text">
    			<p>Tableau Server fähig</p>
    		</div>
        </div>
        <div class="col-2">
        	<div class="image secondary-2">
        		<?= pictureTag(
              '/assets/images/icons_svg/small_29_white.svg',
              'Import via Webdata Connector',
              69, 50, [
                'class' => 'icon'
              ]
            ); ?>
        	</div>
        	<div class="text">
    			<p>Import via Webdata Connector</p>
    		</div>	
        </div>
        <div class="col-2">
        	<div class="image secondary-2">
        		<?= pictureTag(
              '/assets/images/icons_svg/small_32_white.svg',
              'Flexible Anfragezeiträume',
              69, 50, [
                'class' => 'icon'
              ]
            ); ?>
        	</div>
        	<div class="text">
    			<p>Flexible Anfragezeiträume wählbar</p>
    		</div>	
        </div>
      </div>
  </div>
</div>

<div class="wrapper">
  <div class="content wide centered">
  <h2 class="h1 centered">Darum CallOne</h2>
      <div class="grid">
        <div class="col-3">
          <?= pictureTag(
            '/assets/images/icons_svg/big_09.svg',
            'Ausfallsicher',
            70, 61, [
              'class' => 'icon'
            ]
          ); ?>"
          <h3>Ausfallsicher</h3>
          <p>Wir kommen auf eine durchschnittliche Uptime von <a href="#" target="_blank">99,995%</a>. Wir setzen auf <strong>Qualität</strong>, <strong>Sicherheit und Transparenz</strong>. Auf Wunsch erhalten Sie eigene SLA-Vereinbarungen.</p>
        </div>
        <div class="col-3">
          <?= pictureTag(
            '/assets/images/icons_svg/small_01.svg',
            'Server in Deutschland',
            70, 71, [
              'class' => 'icon'
            ]
          ); ?>
          <h3>Server in DE</h3>
          <p><strong>Sicherheit</strong> und <strong>Stabilität</strong> steht für uns <strong>an oberster Stelle</strong>. Unsere Server stehen verteilt in mehreren deutschen Hochsicherheitsrechenzentren.</p>
        </div>
        <div class="col-3">
          <?= pictureTag(
            '/assets/images/icons_svg/small_15.svg',
            'Verschlüsselung',
            70, 78, [
              'class' => 'icon'
            ]
          ); ?>
          <h3>Verschlüsselung</h3>
          <p>Wir sichern Gespräche mehrfach mit <strong>SRTP, TLS und VPN-Tunnel</strong> &ndash; <strong>kostenfrei</strong>! Zugleich bieten wir vielschichtige IP-Beschränkungen und Benutzerrechte.</p>
        </div>
      </div>    
  </div>
</div>

<div class="wrapper background" id="angebot">
  <div class="content wide">
	<div class="grid cross-grid auto">
		<div class="col-3">
			<span class="sl sl-border-chat sl-size-xl topIcon white desktop-hidden"></span>
			<strong class="h3"><span class="light">Telefonische</span> Beratung</strong>
			<p>Sie interessieren sich für unsere Produkte oder haben noch offene Fragen? Gerne Helfen wir Ihnen weiter - <a href="tel:+493092033500" title="Gerne helfen wir Ihnen weiter">030 920 33 500</a></p>
		</div>
		<div class="col-3 cross centerContent mobile-hidden">
			<div class="shadow-box autoWidth gradient-sw">
        <?= pictureTag(
          '/assets/images/photos/grabellus-sw.png',
          'Kontaktieren Sie uns zum Thema Tableau Callcenter Connector',
          271, 400
        ); ?>
			</div>
		</div>
		<div class="col-3">
			<span class="sl sl-consultation sl-size-xl topIcon white desktop-hidden"></span>
			<strong class="h3">Persönliche <span class="light">Beratung</span></strong>
			<p>Wir melden uns zeitnah bei Ihnen per Telefon oder E-Mail zurück, beraten Sie und erstellen Ihnen gerne ein unverbindliches Angebot.</p>
			<div class="button-set">
      			<a href="#" class="button primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt Angebot anfordern" data-category="Link" data-action="opens sales modal">Jetzt Angebot anfordern</a>
      		</div>  
		</div>
	</div>
  </div>
</div> 	


<div class="wrapper" id="faq">
  <div class="content wide mobileNoPadding">
    <h3 class="h1 centered">FAQ Tableau Callcenter Connector</h3>
    
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

<div class="wrapper background-black" id="blog">
  <div class="content narrow">
    <h2 class="h1 centered">Neues aus unserem Blog</h2>
    <div class="shadow-box">
    	<div class="image-grid blog">
            <div class="image">
              <div class="bgimage image2"></div>
            </div>
        	<div class="text">
                <span class="date">8. Januar 2019</span>
                <h3>Anforderungen, die Sie an Ihre Call Center Software stellen sollten</h3>
                <p>Die Suche nach einer neuen Telefonanlage startet oft „aus der Not heraus“: Das bestehende System läuft nicht stabil, es fehlen wichtige Features oder das Unternehmen ist schlicht und ergreifend zu schnell gewachsen und die Administration nicht mehr überblickbar... <a href="/blog/vergleich-anforderungen-die-sie-an-ihre-call-center-software-stellen-sollten/" title="Zum Artikel: Ratgeber & Vergleich: Anforderungen, die Sie an Ihre Call Center Software stellen sollten">zum Artikel</a></p>
        	</div>
        </div>
    </div>
  </div>
</div>