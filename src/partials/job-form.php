<?php
    $appendText1 = 'Mitarbeiter';
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<div class="wrapper breather" id="kontakt" style="margin-bottom: 200px;">
  <div class="content wide">
  	<div class="mobile-hidden">
    	<h2 class="h1">Bewirb dich jetzt bei uns <br>und werde ein Teil unseres Teams</h2>
        <p>Der Bewerbungsprozess bei uns ist einfach</p>
    	<div class="grid ">
    		<div class="col-3">
        		<span class="white-cricle">1</span>
                <p>
                	Du minmmst kontakt mit uns auf.<br>
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
    </div>
    <h2 class="h1 desktop-hidden">Bewirb dich bei uns!</h2>
	<div class="grid flex space-between marginBottom">
		<div class="col-2 flex space-between"  id="kontakt-form">
			<div class="shadow-box padding" style="height: 100%">
    			<form action="#" class="form form-3 js-form">
    			 	<input type="hidden" name="type" value="3">
    			 	<input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>
    			 	<input type="hidden" name="issue" value="Bewerbung <?= isset($jobTitle)? ' als ' . $jobTitle : '' ?>">
    			 	<div class="group">
                    	<input type="text" name="name" class="name" value="" placeholder="Dein Name" required>
                    </div>
    			 	<div class="group">
                    	<input type="email" name="email" placeholder="Deine E-Mail" value="" required>
                    </div>
                    <div class="group">
                    	<input type="text" name="phonenumber" id="phonenumber" class="phonenumber" value="" placeholder="Deine Telefonnummer" required>
                    </div>
                    <div class="group">
                    	<textarea placeholder="Nachricht an uns" name="text" class="text" id="text"></textarea>
                    </div>
                    <div class="group noOverflow">
                        <div class="inputFile">
                          <input type="file" name="realFile" id="realFile" class="file" required>
                          <div id="fileButton" class="fileButton">
                          	<span class="sl sl-upload-file sl-size-xxs"></span> Datei auswählen
                          </div>
                          <span id="fileInfo" class="fileInfo"><span class="mobile-hidden">Unterlagen </span>(PDF)</span>
                        </div>
                    </div>
                    <div class="button-set centered">
                      <button class="button big no-margin-bottom tertiary submit">Bewerbung absenden</button>
                    </div>
                </form>
                <div class="formSuccess">
                	<h3>Vielen Dank für deine Bewerbung!</h3>
                	<p>Wir nehmen uns deiner Bewerbung schnellstmöglich an und melden uns bei dir in Kürze. Wenn du nicht warten möchtest, kontaktiere uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf deinen Anruf.</p>
					<p><strong>Dein CallOne-Team</strong></p>
                </div>
			</div>
		</div>
		<div class="col-2 mobile-hidden left flex space-between">
    		<div class="shadow-box padding" style="height: 100%">
        		<div class="grid">
        			<div class="col-1">
        				<div class="grid">
        					<div class="col-2"><h3>Deine Ansprechpartnerin</h3>
            				<strong class="h4 headline margin-top-40">Stefanie Bendig</strong>
        					<span>Personalabteilung</span>
    					</div>
        					<div class="col-2">
        						<img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/photos/s-bendig-260x300.jpg" data-srcset="/assets/images/photos/s-bendig-260x300.jpg" class="lazy" alt="Dein Ansprechpartner für die Bewerbung bei uns!" />
        					</div>
        				</div>
        				<p class="right">Gerne kannst Du Dich auch direkt bei Stefanie per E-mail unter <a href="mailto:jobs@callone.de" title="Bewerbe Dich jetzt bei Stefanie">jobs@callone.de</a> bewerben, oder unter: <a href="tel:+493092033500" title="Ruf an - Wir beißen nicht!">030-920 33 500</a>.</p>
        			</div>
        		</div>
    		</div>
        </div>	
	</div>
  </div>
</div>