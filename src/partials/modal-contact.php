<!-- Modal content -->
<div class="modal-content animate-top multipleModals">
  <div class="modal-header">
    <span class="close sl sl-close"></span>
  </div>
  <div class="modal-body">
  	<div class="wrapper top"> 	
  		<div class="content centered">
        	<div class="grid">
        		<div class="col-2 left">
        			<h3>Wir helfen Ihnen</h3>
            		<ul class="list approved-list">
            			<li>Wir besprechen Ihre konkreten Anforderungen</li>
            			<li>Klären Fragen zu Preisen</li>
            			<li>Vereinbaren Livedemos</li>
        					<li>Stimmen Pilotprojekte ab</li>
            		</ul>
        			<h3>Alternative Kontaktmöglichkeiten</h3>
            		<p></p>
            		<div class="button-set">
                      <a class="email button primary trackedElement" data-label="Button Contact Modal- E-Mail" data-category="Link" data-action="mailto - info@callone.de" href="mailto:info@callone.de">E-Mail</a>
                      <!-- Trigger/Open The Modal -->
                      <a class="openBox button secondary trackedElement" data-label="Callback in contact form - Callback/Rückruf" data-category="Link" data-action="Show Callback" data-text="Schreiben Sie uns!">Callback/Rückruf</a>
                    </div>  
				</div>
        		<div class="col-2 box">
        			<div class="SwitchBoxes inputFields shadow-box padding animation-1 animate-bottom lazyBackground">
                      	<form action="#" class="form contact js-form">
                      		<h3 class="h2 left">Sprechen Sie mit dem Vertrieb!</h3>
                      		<p class="left">
                      			Unsere Experten beantworten gerne Ihre Fragen. Füllen Sie das untenstehende Formular aus oder rufen Sie uns an unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>
                      		</p>
                      		<p></p>
                      		<input type="hidden" name="type" value="2">
    			 			<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
    			 			<div class="group">
                              <input type="text" name="name" id="name" class="name" value="" placeholder="Ihr Name" required>
                            </div>
                            <div class="group">
                              <input type="text" name="company" id="company" value="" placeholder="Firma" required>
                            </div>
                            <div class="group">
                          	  <input type="email" name="email" id="email" placeholder="Ihre E-Mail" value="" required>
                            </div>
                            <div class="group">
                              <div class="selectWrapper">
                                  <select name="issue" id="issue">
                                  	<option value="Wachstum &amp; Skalierung">Wachstum &amp; Skalierung</option>
                                  	<option value="Integration der Telefone in andere Systeme">Integration der Telefone in andere Systeme</option>
                                  	<option value="Kundensupport verbessern">Kundensupport verbessern</option>
                                  	<option value="Sales verbessern">Sales verbessern</option>
                                  	<option value="Umstieg auf IP-Telefonie">Umstieg auf IP-Telefonie</option>
                                  	<option value="Fehlende Telefonie-Features">Fehlende Telefonie-Features</option>
                                  	<option value="Business Intelligence">Business Intelligence</option>
                                  	<option value="Sonstiges">Sonstiges</option>
                                  </select>
                              </div>
                            </div>
                            <div class="button-set centered">
                              <button class="button primary submit">Anfrage absenden</button>
                            </div>
                        </form>
                        <div class="formSuccess">
                        	<h3>Vielen Dank für Ihre Anfrage!</h3>
                        	<p>Wir nehmen uns Ihrer Anfrage schnellstmöglich an und melden uns bei Ihnen in Kürze. Wenn Sie nicht warten wollen, kontaktieren Sie uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf Ihren Anruf.</p>
        					<p>Sie erhalten demnächst eine E-Mail zur Bestätigung Ihrer Anfrage bei uns. Dort finden Sie auch nochmal alle weiteren Kontaktinformationen.</p>
        					<p>Wir sind für Sie da.<br>Ihr CallOne-Team</p>
                        </div>
                        <div class="formFail">
                        	<h3>Ihre Anfrage konnte nicht gesendet werden!</h3>
                        	<p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
            				<p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
            				<p>Ihr CallOne-Team</p>
                        </div>
                    </div>
                    <div class="SwitchBoxes hidden shadow-box padding animate-bottom">
                        <form action="#" class="form callback js-form">
                      		<input type="hidden" name="type" value="0">
            				<img class="icon icon-small lazy" src="/assets/images/photos/placeholder.gif" data-src="/assets/images/photos/callback.png" data-srcset="/assets/images/photos/callback.png" alt="Jetzt hier zurückrufen lassen">
                      		<h3 class="mobile-hidden">Callback vereinbaren</h3>
                      		<p></p>
                      		<input type="text" name="phonenumber" placeholder="Bitte hier Ihre Rufnummer eingeben" />
                         	<div class="button-set">
                              <button class="button primary submit no-margin">Rückruf anfordern</button>
                            </div>
                        	<ul class="list approved-list">
                        		<li>Verbindung erfolgt sofort & automatisiert ohne Verzögerung</li>
                        		<li>Auswahlmenü führt direkt zum richtigen Ansprechpartner</li>
                        		<li>Weltweit einsetzbar</li>
                        		<li>Keine Servicerufnummernkosten</li>
                        	</ul>
                        	<p class="left">Passt es Ihnen gerade nicht? <br />Jetzt <a href="https://calendly.com/bendig" target="_blank" title="Sagen Sie uns, wann es Ihnen passt. Wir rufen Sie dann zurück!">Termin buchen</a>. Wir rufen Sie dann zurück!</p>
                        </form>
                        <div class="formSuccess">
                        	<div class="content narrow centered">
                    			<img class="icon icon-small lazy" src="/assets/images/photos/placeholder.gif" data-src="/assets/images/photos/callback.png" data-srcset="/assets/images/photos/callback.png" alt="Jetzt hier zurückrufen lassen">
                          		<h3 class="h1">Vielen Dank für Ihre Anfrage</h3>
                          		<p>Sie werden in Kürze von uns zurückgerufen.</p>
                      		</div>
                        </div>
                    </div>	
        		</div>
        	</div>
  		</div>
  	</div>
    <div class="wrapper bottom background"> 	
  		<div class="content centered">
    		<div class="grid">
        		<div class="col-2 left">
        			<p></p>
            		<h3>Sie benötigen Support?</h3>
    				<p>Sind sie bereits Kunde?<br>Bei technischen Problemen hilft ihnen unser <a href="mailto:support@callone.de">Kundenservice</a></p>
    				<p>Bei allen anderen Fragen erreichen Sie uns auch telefonisch unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a></p>   
        		</div>
        		<div class="col-2 left">
        			<div class="icons">
        				
        			</div>
            	</div>	
      		</div>
      	</div>
  	</div>
  </div>
  <div class="modal-footer close">
  	<span>Schließen</span>
  </div>
</div>
