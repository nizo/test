<?php
    $appendText1 = 'Mitarbeiter';
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<div class="wrapper breather" id="kontakt">
  <div class="content wide">
	<h2 class="h1">Bewirb dich jetzt bei uns <br>und werde ein Teil unseres Teams</h2>
    <p>Der Bewerbungsprozess bei uns ist einfach</p>
	<div class="grid">
		<div class="col-3">
    		<span class="white-cricle">1</span>
            <p>
            	Du schreibst uns eine E-Mail an <a href="mailto:jobs@callone.de">jobs@callone.de</a>.<br>
            	Wir wollen wissen, wer Du bist, was Du machst und wo Deine Talente liegen.
    		</p>
    	</div>
    	<div class="col-3">
    		<span class="white-cricle">2</span>
            <p>
            	Wir melden uns per E-Mail bei Dir, um einen Termin bei uns vor Ort oder ein Gespräch am Telefon auszumachen.
    		</p>
    	</div>
		<div class="col-3">
			<span class="white-cricle">3</span>
            <p>
            	Du kommst vorbei und lernst Deine neue Firma und das ganze Team kennen.
    		</p>
		</div>
    </div>    		
	<hr>
	<div class="grid  marginBottom">
		<div class="col-2">
	  		<h3>Alternative Kontaktmöglichkeiten</h3>
    		<p></p>
    		<div class="button-set">
              <a class="email button primary" href="mailto:jobs@callone.de">E-Mail</a>
              <!-- Trigger/Open The Modal -->
              <a class="openModal button secondary" data-modal="callback">Callback/Rückruf</a>
              
              <!-- <a href="#" class="button secondary">Browsercall</a> -->
        	</div>
        </div>	
		<div class="col-2">
			<div class="shadow-box padding">
				<h2 class="h1">Kontaktiere uns!</h2>
    			<form action="#" class="form form-3 js-form">
    			 	<input type="hidden" name="type" value="3">
    			 	<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
    			 	<input type="hidden" name="issue" value="Bewerbung <?= isset($jobTitle)? ' als ' . $jobTitle : '' ?>">
    			 	<div class="group">
                    	<input type="text" name="name" id="name" class="name" value="" placeholder="Ihr Name" required>
                    </div>
    			 	<div class="group">
                    	<input type="email" name="email" id="email" placeholder="Ihre E-Mail" value="" required>
                    </div>
                    <div class="group">
                    	<input type="text" name="phonenumber" id="phonenumber" class="phonenumber" value="" placeholder="Ihre Telefonnummer" required>
                    </div>
                    <div class="group">
                    	<textarea rows="" cols="" placeholder="Nachricht an uns" name="text" class="text" id="text"></textarea>
                    </div>
                    <div class="group">
                        <div class="inputFile">
                          <input type="file" name="realFile" id="realFile" class="file" value="" placeholder="Ihre Bewerbungsunterlagen als PDF" required>
                          <div id="fileButton" class="fileButton">
                          	<span class="sl sl-upload-file sl-size-xxs"></span> Datei auswählen
                          </div>
                          <span id="fileInfo" class="fileInfo">Unterlagen als PDF</span>
                        </div>
                    </div>
                    <div class="button-set centered">
                      <button class="button primary submit">Jetzt loslegen!</button>
                    </div>
                </form>
                <div class="formSuccess">
                	<h3>Vielen Dank für deine Bewerbung!</h3>
                	<p>Wir nehmen uns deiner Bewerbung schnellstmöglich an und melden uns bei dir in Kürze. Wenn du nicht warten möchtest, kontaktiere uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf deinen Anruf.</p>
					<p><strong>Dein CallOne-Team</strong></p>
                </div>
			</div>
		</div>
	</div>
  </div>
</div>