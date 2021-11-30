<?php
    $appendText1 = 'Mitarbeiter';
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<div class="wrapper background" id="contactForm">
  <div class="content wide">
	<div class="grid cross-grid">
		<div class="col-2">
    		<h3>Wir helfen Ihnen</h3>
    		<ul class="list approved-list">
    			<li>Wir besprechen Ihre konkreten Anforderungen</li>
    			<li>Klären Fragen zu Preisen</li>
    			<li>Vereinbaren Livedemos</li>
					<li>Stimmen Pilotprojekte ab</li>
    		</ul>
    		<p></p>
    		<h3>Sie benötigen Support?</h3>
    		<p>Sind sie bereits Kunde?<br>Bei technischen Problemen hilft ihnen unser <a href="mailto:support@callone.de">Kundenservice</a></p>
    		<p>Bei allen anderen Fragen erreichen Sie uns auch telefonisch unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a></p>    		
    		<hr>
    		<h3>Alternative Kontaktmöglichkeiten</h3>
    		<p></p>
    		<div class="button-set">
              <a class="email button primary" href="mailto:info@callone.de">E-Mail</a>
              <!-- Trigger/Open The Modal -->
              <a class="openModal button secondary" data-modal="callback">Callback/Rückruf</a>
              
              <!-- <a href="#" class="button secondary">Browsercall</a> -->
        	</div>
        </div>	
		<div class="col-2 cross">
			<div class="shadow-box padding">
				<h2 class="h1">Sprechen Sie mit dem Vertrieb!</h2>
    			<p>Unsere Experten beantworten gerne Ihre Fragen. Füllen Sie das untenstehende Formular aus oder rufen Sie uns an unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a></p>
    			 <form action="#" class="form form-2 js-form">
    			 	<input type="hidden" name="type" value="2">
    			 	<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
    			 	<div class="customSelect">
    			 		<div class="group">
            			 	<div data-name="employees" id="employees" class="select-selected"></div>
            			 	<label for="employees" class="centered">Unser Unternehmen beschäftigt</label>
            			 	<label for="employees" class="centered mobile">Mitarbeiter</label>
        			 	</div>
        			 	<div class="select-items select-hide">
        			 		<div class="item">5-10 <?= $appendText1 ?></div>
        			 		<div class="item">10-20 <?= $appendText1 ?></div>
        			 		<div class="item">20-50 <?= $appendText1 ?></div>
        			 		<div class="item">50-200 <?= $appendText1 ?></div>
        			 		<div class="item">200+ <?= $appendText1 ?></div>
        			 	</div>
    			 	</div>
                  	<div class="customSelect">
    			 		<div class="group">
            			 	<div data-name="issue" id="issue" class="select-selected"></div>
            			 	<label for="issue" class="centered">Wir wollen folgende Herausforderungen angehen</label>
            			 	<label for="issue" class="centered mobile">Herausforderung</label>
        			 	</div>
        			 	<div class="select-items select-hide">
        			 		<div class="item">Wachstum &amp; Skalierung</div>
        			 		<div class="item">Integration der Telefone in andere Systeme</div>
        			 		<div class="item">Kundensupport verbessern</div>
        			 		<div class="item">Sales verbessern</div>
        			 		<div class="item">Umstieg auf IP-Telefonie</div>
        			 		<div class="item">Fehlende Telefonie-Features</div>
        			 		<div class="item">Business Intelligence</div>
        			 		<div class="item">Sonstiges</div>
        			 	</div>
					</div>
                    <div class="group">
                      <input type="text" name="name" id="name" class="name" value="" required>
                      <label for="name" class="centered">Mein Name ist</label>
                      <label for="name" class="centered mobile">Name</label>
                    </div>
                  <!--  <label for="abteilung" class="centered">Ich bin Ansprechpartner von</label> 
                  <select name="abteilung" id="abteilung">
                    <option value="1">IT</option>
                    <option value="2">Kundenservice</option>
                    <option value="3">Sales</option>
                    <option value="4">Geschäftsführung</option>
                    <option value="5">Sonstiges</option>
                  </select> -->
                  	<div class="customSelect">
    			 		<div class="group">
            			 	<div id="position" class="select-selected"></div>
            			 	<label for="position" class="centered">Ich bin Ansprechpartner von</label>
            			 	<label for="position" class="centered mobile">Abteilung</label> 
        			 	</div>
        			 	<div class="select-items select-hide">
        			 		<div class="item">IT</div>
        			 		<div class="item">Kundenservice</div>
        			 		<div class="item">Sales</div>
        			 		<div class="item">Geschäftsführung</div>
        			 		<div class="item">Sonstiges</div>
        			 	</div>
					</div>
                  <div class="group">
                      <input type="text" name="company" id="company" value="" required>
                      <label for="company" class="centered">Firma</label>
                      <label for="company" class="centered mobile">Firma</label>
                  </div>
                  <div class="group">
                      <input type="text" name="phonenumber" id="phonenumber" value="">
                      <label for="phonenumber" class="centered">Bitte kontaktieren Sie mich gern unter der Nummer</label>
                      <label for="phonenumber" class="centered mobile">Telefonnummer</label>
                  </div>
                  <div class="group">
                  	<input type="email" name="email" id="email" value="" required>
                  	<label for="email" class="centered">Oder per Email unter</label>
                  	<label for="email" class="centered mobile">E-Mail</label>
                  </div>
                  <div class="button-set centered">
                    <button class="button tertiary big submit">Jetzt loslegen!</button>
                  </div>
                </form>
                <div class="formSuccess">
                	<h3>Vielen Dank für Ihre Anfrage!</h3>
                	<p>Wir nehmen uns Ihrer Anfrage schnellstmöglich an und melden uns bei Ihnen in Kürze. Wenn Sie nicht warten wollen, kontaktieren Sie uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf Ihren Anruf.</p>
					<p>Sie erhalten demnächst eine E-Mail zur Bestätigung Ihrer Anfrage bei uns. Dort finden Sie auch nochmal alle weiteren Kontaktinformationen.</p>
					<p>Wir sind für Sie da.<br><strong>Ihr CallOne-Team</strong></p>
                </div>
                <div class="formFail">
                	<h3>Ihre Anfrage konnte nicht gesendet werden!</h3>
                	<p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
    				<p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
    				<p><strong>Ihr CallOne-Team</strong></p>
                </div>
			</div>
		</div>
	</div>
  </div>
</div>