<!-- Modal content -->
<div class="modal-content animate-top multipleModals">
  <div class="modal-header">
    <span class="close sl sl-close"></span>
  </div>
  <div class="modal-body">
  	<div class="wrapper top"> 	
  		<div class="content wide">
  			<div>       		
            	<form action="#" class="form calcForm calcForm1 js-form part ccs" id="calcForm1" style="display: none;">
            	  	
              		<input type="hidden" name="type" value="2">
    	 			<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
    	 			<input type="hidden" name="issue" value="Anfrage Angebot - Callcenter-Software">
    	 			
    	 			<!-- Callcenter-Software -->
        	 		<div class="grid page1">
        	 			<div class="wrapper background">
          					<div class="content">
                      			<strong class="left headline h1 small title title-ccs">Berechne die Kosten <span class='primaryColor'>Deiner neuen Callcenter-Software</span>.</strong>
                      		</div>
                  		</div>
    	 				<div class="col-3">
    	 					<div class="group">
    	 					  <label for="numberAgents left"><span class="sl sl-before sl-agent mobile">Anzahl Agenten*</span></label>	
                              <div class="selectWrapper" id="numberAgents">
                                    <select name="agents">
                                      	<option value="2-5" selected>2-5</option>
                                      	<option value="6-10">6-10</option>
                                      	<option value="10-50">10-50</option>
                                      	<option value="50-200">50-200</option>
                                      	<option value="200+">200+</option>
                                    </select>
                              </div>
                            </div>
    	 				</div>
    	 				<div class="col-3">
    	 					<div class="group">
    	 					  <label for="branche left"><span class="sl sl-before sl-pack mobile">Branche*</span></label>
                              <div class="selectWrapper" id="branche">
                                    <select name="business">
                                      	<option value="Einzelhandel" selected>Einzelhandel</option>
                                      	<option value="Dienstleistungen">Dienstleistungen</option>
                                      	<option value="Gastronomie">Gastronomie</option>
                                      	<option value="Sonstiges">Sonstiges</option>
                                    </select>
                              </div>
                            </div>
    	 				</div>
    	 				<div class="col-3">
    	 					<div class="group">
    	 					  <label for="numberEmployees left"><span class="sl sl-before sl-company-size mobile">Unternehmensgröße*</span></label>	
                              <div class="selectWrapper" id="numberEmployees">		
                                    <select name="employees">
                                      	<option value="5-10 Mitarbeiter" selected>5-10 Mitarbeiter</option>
                                      	<option value="10-20 Mitarbeiter">10-20 Mitarbeiter</option>
                                      	<option value="20-50 Mitarbeiter">20-50 Mitarbeiter</option>
                                      	<option value="50-200 Mitarbeiter">50-200 Mitarbeiter</option>
                                      	<option value="200+ Mitarbeiter">200+ Mitarbeiter</option>
                                    </select>
                              </div>
                            </div>
    	 				</div>

        	 			
        	 			<div class="grid fieldset">
        	 				<span class="headline h2">Deine ausgewählten Funktionen</span>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Callcenter-Funktionen
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="Callcenter-Funktionen">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>                              
        	 				</div>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Schnittstellen & Apps
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="Schnittstellen & Apps">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>
        	 				</div>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Call-Recording & Coaching
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="Call-Recording & Coaching">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>
        	 				</div>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    KI & Bots
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="KI & Bots">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>
        	 				</div>
        	 			</div>
        	 			<div class="button-set centered" style="margin: 70px auto 35px; width: 100%; display: flex;">
                        	<button class="button tertiary p2" style="margin-bottom: 0; min-width: 50%; font-size: 16px;">Angebot anfordern</button>
                        </div>
    	 			</div>
    	 			
    	 			<div class="page2" style="display: none;">
    	 				<div class="wrapper background">
          					<div class="content">
                      			<strong class="left headline h1 small title title-ccs">Wir haben <span class="primaryColor">Dein Angebot zusammengestellt</span>.</strong>
                      		</div>
                  		</div>
    	 				
    	 				<p>Fülle Deine Angaben aus, um Dein persönliches Angebot zu erhalten!</p>
    	 				<div class="grid">
    	 					<div class="col-2 small">
    	 						<div class="group">
                                  <input type="text" name="name" class="name" value="" placeholder="Ihr Name*" required>
                                </div>
    	 					</div>
    	 					<div class="col-2 small">
    	 						<div class="group">
                                  <input type="text" name="company" value="" placeholder="Firma*" required>
                                </div>
    	 					</div>
    	 					<div class="col-2 small">
    	 						<div class="group">
                              	  <input type="tel" name="phonenumber" placeholder="Ihre Telefonnummer*" value="" >
                                </div>
    	 					</div>
    	 					<div class="col-2 small">
    	 						<div class="group">
                              	  <input type="email" name="email" placeholder="Ihre E-Mail*" value="" required>
                                </div>
    	 					</div>
    	 					<div class="col-1 small">
        	 					<div class="checkboxen">
                                	<label class="customCheckbox checked">
                                        <p>Ja, ich möchte E-Mails mit u.a. Angeboten, Neuerungen und Experten-Tipps von CallOne empfangen. Ich kann diese Einwilligung jederzeit widerrufen.<br>
            							*Ich habe die Hinweise zum <a href="/datenschutz" target="_blank" title="Datenschutzerklärung">Datenschutz</a> gelesen und erkläre mich mit ihnen einverstanden. Die Seite CallOne GmbH verwendet Cookies – nähere Informationen dazu und zu Deinen Rechten als Benutzer findest Du in unserer Datenschutzerklärung.
            							Durch das Abschicken des Formulars erklärst Du Dich mit der Nutzung von Cookies und der damit einhergehenden Erhebung Deiner Personendaten auf den Seiten der CallOne GmbH einverstanden.</p>
                                        <input type="checkbox" name="newsletter" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
    	 				</div>
  
                        <div class="button-set centered column" style="margin: 0px auto 20px; width: 100%; display: flex;">
                          <button class="button tertiary submit" style="margin-bottom: 0; min-width: 50%; font-size: 16px;">Angebot anfordern</button>
                          <a class="button secondary silient p1" style="margin-bottom: 0; min-width: 50%; font-size: 16px;">Zurück</a>
                        </div>
                    </div>   
    	 		</form>
    	 		<div class="formSuccess">
                	<strong class="h3">Vielen Dank für Ihre Anfrage!</strong>
                	<p>Wir nehmen uns Ihrer Anfrage schnellstmöglich an und melden uns bei Ihnen in Kürze. Wenn Sie nicht warten wollen, kontaktieren Sie uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf Ihren Anruf.</p>
					<p>Sie erhalten demnächst eine E-Mail zur Bestätigung Ihrer Anfrage bei uns. Dort finden Sie auch nochmal alle weiteren Kontaktinformationen.</p>
					<p>Wir sind für Sie da.<br>Ihr CallOne-Team</p>
                </div>
                <div class="formFail">
                	<strong class="h3">Ihre Anfrage konnte nicht gesendet werden!</strong>
                	<p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
    				<p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
    				<p>Ihr CallOne-Team</p>
                </div>
                
                <!-- VoIP -->
    	 		<form action="#" class="form calcForm calcForm2 voip js-form voip part" id="calcForm2" style="display: none;">
    	 		
    	 			<input type="hidden" name="type" value="2">
    	 			<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
    	 			<input type="hidden" name="issue" value="Anfrage Angebot - Virtuelle Telefonanlage">
    	 		
    	 			<!-- VoIP-Telefonanlage -->
    	 			<div class="grid page1">
    	 				<div class="wrapper background">
          					<div class="content">
                      			<strong class="left headline h1 small title title-ccs">Berechne die Kosten <span class='primaryColor'> Deiner neuen VoIP-Telefonanlage</span>.</strong>
                      		</div>
                  		</div>
    	 				<div class="col-3">
    	 					<div class="group">
    	 					  <label for="numberAgents left"><span class="sl sl-before sl-phone mobile">Anzahl Telefonanschlüsse*</span></label>	
                              <div class="selectWrapper" id="numberAgents">
                                    <select name="agents">
                                      	<option value="2-5 Telefonanschlüsse" selected>2-5</option>
                                      	<option value="6-10 Telefonanschlüsse">6-10</option>
                                      	<option value="10-50 Telefonanschlüsse">10-50</option>
                                      	<option value="50-200 Telefonanschlüsse">50-200</option>
                                      	<option value="200+ Telefonanschlüsse">200+</option>
                                    </select>
                              </div>
                            </div>
    	 				</div>
    	 				<div class="col-3">
    	 					<div class="group">
    	 					  <label for="branche left"><span class="sl sl-before sl-pack mobile">Branche*</span></label>
                              <div class="selectWrapper" id="branche">
                                    <select name="business">
                                      	<option value="Einzelhandel" selected>Einzelhandel</option>
                                      	<option value="Dienstleistungen">Dienstleistungen</option>
                                      	<option value="Gastronomie">Gastronomie</option>
                                      	<option value="Sonstiges">Sonstiges</option>
                                    </select>
                              </div>
                            </div>
    	 				</div>
    	 				<div class="col-3">
    	 					<div class="group">
    	 					  <label for="numberEmployees left"><span class="sl sl-before sl-company-size mobile">Unternehmensgröße*</span></label>	
                              <div class="selectWrapper" id="numberEmployees">		
                                    <select name="employees">
                                      	<option value="5-10 Mitarbeiter" selected>5-10 Mitarbeiter</option>
                                      	<option value="10-20 Mitarbeiter">10-20 Mitarbeiter</option>
                                      	<option value="20-50 Mitarbeiter">20-50 Mitarbeiter</option>
                                      	<option value="50-200 Mitarbeiter">50-200 Mitarbeiter</option>
                                      	<option value="200+ Mitarbeiter">200+ Mitarbeiter</option>
                                    </select>
                              </div>
                            </div>
    	 				</div>

        	 			
        	 			<div class="grid fieldset">
        	 				<span class="headline h2">Deine ausgewählten Funktionen</span>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Rufnummern
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="Rufnummern">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>                              
        	 				</div>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Schnittstellen & Apps
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value=" Schnittstellen & Apps">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>
        	 				</div>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Click-To-Dial
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="Click-To-Dial">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>
        	 				</div>
        	 				<div class="col-2 small">
        	 					<div class="optionField" onclick="$(this).find('input').prop('checked', !$(this).find('input').prop('checked'))">
                                    Callcenter-Software
                                    <label class="switch">
                                        <input type="checkbox" name="functions" value="Callcenter-Software">
                                        <span class="switchSlider"></span>
                                    </label>
                                </div>
        	 				</div>
        	 			</div>
        	 			<div class="button-set centered" style="margin: 70px auto 35px; width: 100%; display: flex;">
                        	<button class="button tertiary p2" style="margin-bottom: 0; min-width: 50%; font-size: 16px;">Angebot anfordern</button>
                        </div>
    	 			</div>
    	 			
    	 			<div class="page2" style="display: none;">
    	 				<div class="wrapper background">
          					<div class="content">
                      			<strong class="left headline h1 small title title-ccs">Wir haben <span class="primaryColor">Dein Angebot zusammengestellt</span>.</strong>
                      		</div>
                  		</div>
    	 				<p>Fülle Deine Angaben aus, um Dein persönliches Angebot zu erhalten!</p>
    	 				<div class="grid">
    	 					<div class="col-2 small">
    	 						<div class="group">
                                  <input type="text" name="name" class="name" value="" placeholder="Ihr Name*" required>
                                </div>
    	 					</div>
    	 					<div class="col-2 small">
    	 						<div class="group">
                                  <input type="text" name="company" value="" placeholder="Firma*" required>
                                </div>
    	 					</div>
    	 					<div class="col-2 small">
    	 						<div class="group">
                              	  <input type="tel" name="phonenumber" placeholder="Ihre Telefonnummer*" value="" >
                                </div>
    	 					</div>
    	 					<div class="col-2 small">
    	 						<div class="group">
                              	  <input type="email" name="email" placeholder="Ihre E-Mail*" value="" required>
                                </div>
    	 					</div>
    	 					<div class="col-1 small">
        	 					<div class="checkboxen">
                                	<label class="customCheckbox checked" for="newsletterSub">
                                        <p>Ja, ich möchte E-Mails mit u.a. Angeboten, Neuerungen und Experten-Tipps von CallOne empfangen. Ich kann diese Einwilligung jederzeit widerrufen.<br>
            							*Ich habe die Hinweise zum <a href="/datenschutz" target="_blank" title="Datenschutzerklärung">Datenschutz</a> gelesen und erkläre mich mit ihnen einverstanden. Die Seite CallOne GmbH verwendet Cookies – nähere Informationen dazu und zu Deinen Rechten als Benutzer findest Du in unserer Datenschutzerklärung.
            							Durch das Abschicken des Formulars erklärst Du Dich mit der Nutzung von Cookies und der damit einhergehenden Erhebung Deiner Personendaten auf den Seiten der CallOne GmbH einverstanden.</p>
                                        <input type="checkbox" name="newsletter" id="newsletterSub" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
    	 				</div>
  
                        <div class="button-set centered column" style="margin: 0px auto 20px; width: 100%; display: flex;">
                          <button class="button tertiary submit" style="margin-bottom: 0; min-width: 50%; font-size: 16px;">Angebot anfordern</button>
                          <a class="button secondary silient p1" style="margin-bottom: 0; min-width: 50%; font-size: 16px;">Zurück</a>
                        </div>
                    </div>             
                </form>
                <div class="formSuccess">
                	<strong class="h3">Vielen Dank für Ihre Anfrage!</strong>
                	<p>Wir nehmen uns Ihrer Anfrage schnellstmöglich an und melden uns bei Ihnen in Kürze. Wenn Sie nicht warten wollen, kontaktieren Sie uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf Ihren Anruf.</p>
					<p>Sie erhalten demnächst eine E-Mail zur Bestätigung Ihrer Anfrage bei uns. Dort finden Sie auch nochmal alle weiteren Kontaktinformationen.</p>
					<p>Wir sind für Sie da.<br>Ihr CallOne-Team</p>
                </div>
                <div class="formFail">
                	<strong class="h3">Ihre Anfrage konnte nicht gesendet werden!</strong>
                	<p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
    				<p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
    				<p>Ihr CallOne-Team</p>
                </div>
        	</div>
  		</div>
  	</div>
  </div>
  <div class="modal-footer close">
  	<span>Schließen</span>
  </div>
</div>
