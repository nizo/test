<!-- Modal content -->
	
    	<span class="close sl sl-close"></span>
  
<div class="modal-content animate-top multipleModals">

	<div class="modal-body">
		<div class="wrapper flex">
			<ul class="sideMenu">
				<li class="active flex" data-link="contactForm">
					<div class="sl sl-document1 sl-before relative topIcon sl-size-m mobile"></div>
					<span>Formular</span>
				</li>
				<li class="flex" data-link="callbackForm">
					<div class="sl sl-call-in sl-before relative topIcon sl-size-m mobile"></div>
					<span>Rückruf</span>
				</li>
				<li class="flex linkTo" data-link="emailContact">
					<a target="_blank" href="mailto:kontakt@callone.de?subject=Kontakt%20zur%20Beratung%20nach%20Wunsch&amp;body=Hallo,%0D%0AGerne%20beraten%20wir%20Sie.%0D%0AGeben%20Sie%20uns%20bitte%20Ihren%20Namen,%20Firmennamen%20und%20optional%20Ihre%20Telefonnummer%20an.%0D%0AWir%20melden%20uns%20dann%20bei%20Ihnen.%0D%0A%0D%0AAnbei%20Ihre%20Wunschthemen:%0D%0A%0D%0A" style="color:#000">
    					<div class="sl sl-mail sl-before relative topIcon sl-size-m mobile"></div>
    					<span>E-Mail</span>
					</a>
				</li>
			</ul>
      		<div class="content centered">
            	<div class="grid">
            		<div class="col-2 flex space-between"> 
            			<div class="modalBox contactForm padding">
                            <form action="#" class="form contact js-form wishlistContactForm">
                          		<span class="h2 left">Jetzt Angebot erhalten!</span>
                          		<p></p>
                          		<input type="hidden" name="type" value="2">
        			 			<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
        			 			<div class="group">
                                  <input type="text" name="name" class="name" value="" placeholder="Ihr Name" required>
                                </div>
                                <div class="group">
                                  <input type="text" name="company" value="" placeholder="Firma" required>
                                </div>
                                <div class="group">
                              	  <input type="email" name="email" placeholder="Ihre E-Mail" value="" required>
                                </div>
                                <div class="group">
                              	  <input type="tel" name="phonenumber" placeholder="Optional: Ihre Telefonnummer" value="">
                                </div>
                                <div class="button-set centered">
                                  <button class="button primary submit">Angebot anfordern</button>
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
                        <div class="modalBox callbackForm hidden padding">
                            <form action="#" class="form callback js-form">
                          		<input type="hidden" name="type" value="0">
                				<span class="h2">Rückruf vereinbaren</span>
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
                            </form>
                            <div class="formSuccess">
                            	<div class="content narrow centered">
                        			<img class="icon icon-small lazy" src="/assets/images/photos/placeholder.gif" data-src="/assets/images/photos/callback.png" data-srcset="/assets/images/photos/callback.png" alt="Jetzt hier zurückrufen lassen">
                              		<strong class="h1">Vielen Dank für Ihre Anfrage</strong>
                              		<p>Sie werden in Kürze von uns zurückgerufen.</p>
                          		</div>
                            </div>
                        </div>
                        <div class="modalBox emailContact hidden padding">
                        	<span class="h2">Kontakt per E-Mail</span>
                        	<p>Es öffnet sich nun ihr E-mail Client. Dort werden Ihre Wunschthemen eingefügt. Zum kontakt aufbauen einfach die E-Mail absenden und wir melden uns zeitnah bei Ihnen für eine Beratung zurück.</p>
                        	<p>Alternativ können Sie uns auch gerne jetzt telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
                			<p>Ihr CallOne-Team</p>
                        </div>
    				</div>
            		<div class="col-2 box flex space-between">
            			<div class="inputFields shadow-box padding animate-bottom lazyBackground">
                          	<span class="h2">Ihre Wunschliste</span>
                    		<ul class="list approved-list wish-list">
                    		</ul>
                			<strong class="h3 headline">Sie möchten sofort Kontakt?</strong>
                    		<p>Dann kontaktieren Sie uns jetzt telefonisch unter <br><a href="tel:+493092033500">+49 (0) 30-920 33 500</a></p>
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