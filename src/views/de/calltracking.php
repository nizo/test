<?php
$product = new product ('Call-Tracking', 'Nutzen Sie Call-Tracking, um Anrufe auf Ihrer Hotline einer aktiven Websession zuzuordnen und mit Kundendaten anzureichern.');
$product->image_set ('https://callone.de/assets/images/illus/calltracking.svg');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
	'Was ist Call-Tracking?',
	'<p>Mit Call-Tracking erhalten Sie weiterführende Informationen zu den Anrufen Ihrer Kunden und Interessenten (z. B. über welche Suchanfrage oder Anzeige der Anrufer Sie kontaktiert hat) sowie zum Anrufer selbst (z. B. Warenkorb, besuchte Seiten, Kundenhistorie aus Ihrem CRM).</p><p>Grundsätzlich gibt es zwei verschiedene Varianten beim Thema Call-Tracking, die oft als statisches und dynamisches Call-Tracking bezeichnet werden. Beim statischen Call-Tracking können Sie beispielsweise Rufnummern oder Rufnummernerweiterungen (DDI) für bestimmte Werbeanzeigen, Landingpages oder Suchbegriffe nutzen, um die Anrufer dann einer Marketing-Kampagne oder Werbemaßnahme zuordnen zu können.</p><p>Dynamisches Call-Tracking ist weitaus intelligenter. Hier erhält jeder Ihrer Webseitenbesucher eine individuelle Rufnummer oder Rufnummern-DDI. Sie haben also die Möglichkeiten Ihren Mitarbeitern Informationen wie den Warenkorbinhalt oder die Customer Journey des Besuchers schon vor Gesprächsbeginn zur Verfügung zu stellen oder den Anrufer schon den Informationen angepasst durch das Routing zu führen oder zu priorisieren.</p>'
);
$faqs->faq_add (
	'Wie funktioniert Call-Tracking?',
	'<p>Wir schalten Ihnen für Ihr Call-Tracking-Projekt einzelne Rufnummern oder einen Rufnummernblock, den Sie beliebig erweitern können. Sie haben dann die Möglichkeit jeder Session auf Ihrer Webseite eine Rufnummer zuzuordnen und diese für die Dauer der Session anzuzeigen. Jeder neue Besucher erhält somit eine neue Rufnummer.</p><p>Über unsere APIs können Sie den Anruf des Kunden dann beliebig mit Informationen anreichern, beispielsweise:</p><ul class="list approved-list"><li>Besuchte Unterseiten</li><li>Warenkorbinhalte</li><li>Ausgefüllte Formulare</li><li>Bestellprozess</li><li>Informationen aus Ihrem CRM (Kundenhistorie, vergangene Bestellungen, etc.)</li></ul><p>Anhand dieser Daten haben Sie außerdem die Möglichkeit den Anruf gesondert zu routen. Das bedeutet, dass Sie z. B. individuelle Auswahlmenüs zur Verfügung stellen, den Anruf priorisieren oder mit speziellen Ansagen bespielen können. Außerdem bieten wir die Möglichkeit Call-Tracking mit Co-Browsing zu kombinieren. So können Ihre Kundenservice-Mitarbeiter den Anrufer direkt auf der Website unterstützen.</p>'
);
$faqs->faq_add (
	'An wen richtet sich Call-Tacking und wer profitiert davon?',
	'<p>Call-Tracking richtet sich an Unternehmen mit großem Interesse an Business Intelligence (BI) und umfangreichen Datenauswertungen. Mit individuellen Rufnummern haben Sie weitreichende Auswertungsmöglichkeiten:</p><ul class="list approved-list"><li>Customer Journey, die zu einem Anruf führt</li><li>Bereiche der Webseite aus denen viele Kunden anrufen</li><li>Probleme im Bestellprozess oder bei Formularen erkennen</li><li>Telefonische Conversions auswerten</li></ul><p>Außerdem haben Sie die Möglichkeit Ihre bereits vorhanden Kundeninformationen von der Webseite und aus Ihren CRM-Systemen den Service- und Sales-Mitarbeitern schon vor Gesprächsbeginn zur Verfügung zu stellen. So können diese die Kunden effizient und intelligent unterstützen und Sie verringern Ihre Gesprächszeiten und steigern die Erreichbarkeit.</p><p>Mithilfe von Co-Browsing, das problemlos mit Call-Tracking kombinierbar ist, können Ihre Mitarbeiter sogar direkt beim Ausfüllen von Formularen auf der Website unterstützen und Ihre Kunden durch den Bestellprozess leiten.</p>'
);
$faqs->faq_add (
	'Wie können wir Call-Tracking nutzen?',
	'<p>Sobald wir Ihnen einen Rufnummernblock nach Wunsch geschaltet haben, können Sie direkt loslegen. Sprechen Sie uns gerne zu Ihrem individuellen Projekt an und wir beraten Sie.</p>'
);
$faqs->faq_add (
	'Was müssen wir an unserer Webseite ändern, um Call-Tracking nutzen zu können?',
	'<p>Beim Call-Tracking ist es voll und ganz Ihnen überlassen, welche und wie viele Daten Sie nutzen möchten. Von einer einfachen Verknüpfung einer individuellen Rufnummer mit einer Landingpage bis hin zu individuellen Rufnummern je Webseiten-Session und CRM-Anbindung ist alles möglich. Kontaktieren Sie uns gerne, um Ihr spezielles Call-Tracking-Projekt zu besprechen.</p>'
);
?>

<div class="wrapper">
  <div class="content wide">
    <header class="main-header">
      <div class="text no-padding">
        <h1>Call-Tracking neu definiert</h1>
        <p class="primary">Eindeutiges Identifizieren und Verbinden von Websession und eingehendem Anruf auf Ihrer Hotline pepaart mit Multichannel-Funktionen wie Co-Browsing und Chat.</p>
        <nav class="site-nav shadowbox">
       		<ul class="menu">
      			<li>
      				<a href="#calltracking" class="arrow">Call-Tracking</a>
      			</li>
      			<li>
      				<a href="#mehrwerte" class="arrow">Ihre Mehrwerte</a>
      			</li>
      			<li>
      				<a href="#demos" class="arrow">Demo testen</a>
      			</li>
      			<li>
      				<a href="#addons" class="arrow" target="_blank">Weitere Addons</a>
      			</li>
      		</ul>	
        </nav>
      </div>
      <div class="media centered">
      	<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/illus/calltracking.svg" data-srcset="/assets/images/illus/calltracking.svg" alt="Call-Tracking neu definiert" title="Call-Tracking neu definiert" class="lazy" />
      </div>
    </header>
  </div>
</div>

<div class="wrapper">
  <div class="content wide centered">
  	<h2 class="h1">Was kann Call-Tracking?</h2>
  	<p>CallOne bietet ein dynamisches Call-Tracking, das Anrufe auf Ihrer Bestellhotline eindeutig mit einer laufenden Websession zusammenführt. Alle Informationen des anrufenden Webseitenbesuchers, wie Warenkorbinhalt, Customer Journey und Benutzerinformationen stehen Ihren Kundenservice- oder Sales-Agenten bei Gesprächsbeginn schon zur Verfügung. Optional stehen Ihnen zusätzlich Co-Browsing und Livechat-Funktionen zur Verfügung.</p>
  </div>
  <div class="content thin centered">
  	<div class="shadow-box padding">
      	<div id="lottie" class="calltracking"></div>
        <script>jsFiles.push("/assets/animations/svg/calltracking.js");</script>
    </div>
  </div>
  <div class="content narrow centered">
    <div class="button-set centered">
    	<a href="/demos/callbrowsing/reiseanbieter/" target="_blank" class="button primary trackedElement" data-label="Button - Jetzt Demo testen" data-category="Link" data-action="linked to Demo1">Jetzt einfach ausprobieren!</a>
    	<a href="#" class="button secondary trackedElement" data-openmodal="contact-sales" data-label="Button - Mit Experten sprechen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
    </div>
  </div>
</div>
<div class="wrapper background" id="calltracking">
  <div class="content wide">
  	<div class="grid cross-grid auto">
        <div class="col-2">
        	<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/photos/call-tracking-user-indiviuelle-rufnummer.png" data-srcset="/assets/images/photos/call-tracking-user-indiviuelle-rufnummer.png" alt="Verknüpfen Anruf per individueller Rufnummer mit einem Websitenbesucher" class="lazy" />
        </div>
        <div class="col-2 cross">
        	<div class="shadow-box padding">
              <h3 class="h2">Warum Call-Tracking?</h3>
              <ul class="list approved-list">
              	<li>Verknüpfen Sie jeden <strong>eingehenden Anruf per individueller Rufnummer</strong> mit einem Webseitenbesucher</li> 
        		<li>Erhalten Sie noch vor Gesprächsbeginn <strong>wertvolle Kundeninformationen von der Webseite</strong>: Ausgefüllte Formulare, Warenkorbinhalt – die gesamte Customer Journey eben!</li>  
        		<li>Alle Informationen auf einen Blick in der <strong>CallOne Agentenmaske, bequem verlinkt in Ihre Systeme</strong></li>
        		<li>Reichern Sie die Informationen per API mit <strong>Kundendaten aus Ihrem CRM-System</strong> an</li> 
              </ul>
              <div class="button-set centered">
              	<a href="#demos" class="button primary trackedElement" data-label="Button - Jetzt einfach ausprobieren!" data-category="Link" data-action="linked to #demos">Jetzt einfach ausprobieren!</a>
              </div>
			</div>
        </div>
    </div>
  </div>
</div>
<div class="wrapper" id="mehrwerte">
    <div class="content wide centered">
        <h2 class="h1" >Ihre Mehrwerte: Mehr Conversions, vollständige BI-Daten und besserer Kundenservice</h2>
    </div>
    <div class="content wide left no-margin-top">
    	<div class="content narrow">
            <div class="shadow-box">
            	<div class="image-grid">
            		<div class="image padding">
            			<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_03.svg" data-srcset="/assets/images/icons_svg/big_03.svg" alt="Höhere Abschlussquoten" class="lazy auto">
            		</div>
            		<div class="text">
            			<h3 class="h2">Höhere Abschlussquoten im Sales</h3>
                		<p>Steigern Sie Ihre Abschlüsse, insbesondere bei erklärungsbedürftigen und beratungsintensiven Produkten, die online vertrieben werden. Informationen zum Warenkorbinhalt und zur bisherigen Customer Journey stehen dem Agenten bereits zu Beginn des Telefonats zur Verfügung.</p>
            		</div>
            	</div>
            </div>
    	</div>
    </div>
    <div class="content wide right no-margin-top">
    	<div class="content narrow">
            <div class="shadow-box">
            	<div class="image-grid">
            		<div class="text">
                    	<h3 class="h2">Mehr Effizienz im Service</h3>
            			<p>Mit Call-Tracking stehen dem Agenten hilfreiche Informationen des Anrufers direkt zur Verfügung. Warenkorbinhalte- und werte, Userinformationen und ausgefüllte Formulare sind direkt einsehbar. Nutzen Sie diese Informationen für schnelleren und effizienteren Kundenservice!</p>
            		</div>
            		<div class="image padding">
            			<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_05.svg" data-srcset="/assets/images/icons_svg/big_05.svg" alt="Mehr Effizienz im Service" class="lazy auto">
            		</div>
    			</div>
            </div>
    	</div>
    </div>
    <div class="content wide left no-margin-top">
    	<div class="content narrow">
            <div class="shadow-box">
            	<div class="image-grid">
                	<div class="image padding">
                		<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_10_2.svg" data-srcset="/assets/images/icons_svg/big_10_2.svg" alt="Höhere Kundenzufriedenheit" class="lazy auto">
                	</div>
                	<div class="text">
                    	<h3 class="h2">Höhere Kundenzufriedenheit</h3>
                        <p>Das Anliegen und die Reise Ihrer Kunden auf der Website sind schon vor Anruf bekannt. Probleme können per Co-Browsing mit dem Agenten gemeinsam gelöst werden ohne E-Mail- oder Anruf-Ping-Pong. Ihre Kunden werden Ihnen für blitzschnellen Support danken!</p>
                	</div>
            	</div>
            </div>
    	</div>
    </div>
    <div class="content wide right no-margin-top">
    	<div class="content narrow">
            <div class="shadow-box">
            	<div class="image-grid">
                	<div class="text">
                    	<h3 class="h2">Effektiveres Online Marketing</h3>
            			<p>Tracken Sie z.B., wo Ihre Kunden auf der Website einen telefonischen Kontakt suchen oder wann Sie aus Webformularen austeigen und den Support kontaktieren. Mit diesem Wissen optimieren Sie Ihr Online-Marketing und Ihre Website-Performance. </p> 
            		</div>
            		<div class="image padding">
                		<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/big_02_2.svg" data-srcset="/assets/images/icons_svg/big_02_2.svg" alt="Effektives online Markteting" class="lazy auto">
                	</div>
            	</div>
            </div>
		</div>            
	</div>
</div>

<div class="wrapper parallel-wrapper">
    <div class="wrapper breather parallel thirdcolor">
      <div class="content thin small h_text">
      	<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/icons_svg/call-tracking-big.svg" data-srcset="/assets/images/icons_svg/call-tracking-big.svg" alt="Call-Tracking" class="icon lazy">
        <h2 class="h1">Nutzen Sie die ganze Power von Call-Tracking in Kombination mit Co-Browsing</h2>
        <p>Ihre Agenten sehen, wo sich der Anrufer gerade auf der Website befindet und können auf Wunsch aktiv unterstützen, beispielsweise beim Ausfüllen von Formularen oder im Bestellprozess.</p>
    
        <div class="button-set">
          <a href="#" target="_blank" class="button primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt mit einem Experten sprechen" data-category="Link" data-action="opens sales modal">Jetzt mit einem Experten sprechen</a>
        </div>
      </div>
    </div>
</div>

<div class="wrapper" id="demos">
	<div class="content wide right">
		<div class="grid tile">   
            <div class="col-2">
    	        <img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/photos/calltracking-demo1.png" data-srcset="/assets/images/photos/calltracking-demo1.png" alt="Call-Tracking Demo1" class="lazy">
    		</div>
    		<div class="col-2 centered">
                <div class="disturber centered">
                	<span class="tertiary">Jetzt <strong>Live testen</strong></span>
                </div>
            	<div class="shadow-box padding">
                    <h2>Demo Reiseportal</h2>
                    <p>Testen Sie das Call-Tracking selbst mit unserer Demo. Füllen Sie die Eingabefelder in der Demo aus und rufen Sie dann die exklusiv für Sie erstellte Rufnummer an.</p>
                    <div class="button-set centered">
                    	<a href="/demos/callbrowsing/reiseanbieter/" target="_blank" class="button secondary" title="Jetzt Demo starten und Call-Tracking live erleben">Demo starten</a>
                    </div> 
    			</div>
    		</div>
    	</div>		
	</div>
</div>

<div class="wrapper breather" id="addons">
  <div class="content narrow left small h_text">
	<h2 class="h1 centered">Weitere Addons für Call-Tracking</h2>
  	<div class="grid parallel">
        <div class="col-2">
        	<div class="image primary">
        		<img src="/assets/images/icons_svg/small_18.svg" alt="Alles über eine Webseite steuerbar" class="white icon">
        	</div>
        	<div class="text">
        		<h3 class="h2">Text2Speech</h3>
    			<p>Rückgabe von relevanten Informationen auf Basis der Website-Daten.</p>
			</div>
        </div>
        <div class="col-2">
        	<div class="image primary">
        		<span class="sl sl-chat-acknowledge sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">Spracherkennung & KI</h3>
    			<p>Steuerung von Anrufen mit Hilfe von Spracheingaben.</p>
    		</div>
        </div>
        <div class="col-2">
        	<div class="image secondary-2">
        		<span class="sl sl-document1 sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">Chat & Dokumentversand</h3>
    			<p>Live-Chat mit Website-Besuchern und Versenden von Dokumenten.</p>
    		</div>	
        </div>
        <div class="col-2">
        	<div class="image secondary-2">
        		<span class="sl sl-routing sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">VIP-Routing</h3>
    			<p>Routing auf Basis von Webseiteneingaben oder Warenkorbinhalten.</p>
    		</div>	
        </div>
        <div class="col-2">
        	<div class="image secondary-3">
        		<span class="sl sl-database1 sl-size-l"></span>
        	</div>
        	<div class="text">
        		<h3 class="h2">CRM-Integration</h3>
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
    <h3 class="h1 centered">FAQ Call-Tracking</h3>
    
	<?php
    $faqs->structured_data_get_code ();
    $faqs->html_get_code ();
    ?>

    <p></p>

    <div class="button-set centered">
		<a href="/faq/category/telefonanlage/" class="button primary trackedElement" data-label="Button - Mehr FAQ" data-category="Link" data-action="linked to /faq/category/telefonanlage/">Mehr FAQ</a>
	</div>  
  </div>
</div>

<?php
// Contact Form Replaced by Sales Contact Modal
// include('partials/contact-form.php');
?>