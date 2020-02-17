<!-- Modal content -->
<?php if (empty($GLOBALS['newCookieModal'])) : ?>
	<!-- Old Cookie-Banner -->
    <div class="modal-content animate-bottom">
      <div class="modal-header">
          <div class="wrapper">
              <div class="content wide">
                <strong class="headline">Diese Webseite verwendet Cookies</strong>
            </div>
          </div>
      </div>
      <div class="modal-body">
        <div class="wrapper">
          <div class="content wide">
              <div class="grid">
              	<div class="col-2">
              		<p>Sie akzeptieren unsere Cookies, wenn Sie fortfahren diese Webseite zu nutzen. <a href="/datenschutz" target="_blank" title="Datenschutzbestimmungen">Mehr Details</a></p>
              	</div>
              	<div class="col-2">
              		<div class="button-set centered">
            			<a class="button secondary cookieSubmit trackedElement close" data-label="OK" data-category="Link clicked" data-action="Cookiebanner akzeptieren">OK</a>
            		</div>
              	</div>	
              </div>	
          </div>
        </div>
       </div>
       <div class="modal-footer close">
       	<span>OK</span>
       </div>
    </div>
<?php else : ?>
    <!-- New Cookie-Banner -->
    <div class="shadow-box visible advanced modal-content animate-bottom animation-1">
      <div class="modal-header">
          <div class="wrapper">
              <div class="content wide">
                <strong class="h2">Cookie-Einstellungen</strong>
            </div>
          </div>
      </div>
      <div class="modal-body">
        <div class="wrapper">
          <div class="content wide">
              <div class="grid">
              	<div class="col-1">
              		<p>Wir setzen auf unserer Website Cookies ein. Einige von ihnen sind essentiell (z.B. für den Warenkorb), während andere uns helfen unser Onlineangebot zu verbessern und wirtschaftlich zu betreiben.
              		Sie können dies akzeptieren oder per Klick auf die Schaltfläche "Nur essenzielle Cookies akzeptieren" ablehnen sowie diese Einstellungen jederzeit aufrufen und Cookies auch nachträglich jederzeit abwählen (z.B. im Fußbereich unserer Website). 
              		Nähere Hinweise erhalten Sie in unserer Datenschutzerklärung.</p>
              		<ul>
              			<li>Essenziell</li>
              			<li>Marketing</li>
              			<li>Extern</li>
              		</ul>
              		<div class="button-set centered">
            			<span class="button borderless primary cookieSubmit trackedElement full" data-label="Ich akzeptiere" data-category="Link clicked" data-action="Cookiebanner akzeptieren">Ich akzeptiere</span>
            			<span class="button primary silent cookieConf trackedElement" data-label="Individuelle Cookie-Einstellungen" data-category="Link clicked" data-action="Individuelle Cookie-Einstellungen">Individuelle Cookie-Einstellungen</span>
            			<span class="button secondary silent cookieDeny trackedElement" data-label="Nur essenzielle Cookie akzeptieren" data-category="Link clicked" data-action="Nur essenzielle Cookie akzeptieren">Nur essenzielle Cookie akzeptieren</span>
            		</div>
              	</div>
              </div>	
          </div>
        </div>
       </div>
       <div class="modal-footer">
       	<ul>
       		<li><a href="/datenschutz" target="_blank" title="Datenschutzerklärung">Datenschutzerklärung</a></li>
       		<li><a href="/impressum" target="_blank" title="Impressum">Impressum</a></li>
       	</ul>
       </div>
    </div>
<?php endif; ?>