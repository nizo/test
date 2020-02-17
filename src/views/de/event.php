<?php 
    
if(isset($_GET['fname'])) 
    $fname = $_GET['fname'];
else
    $fname = '';

if(isset($_GET['lname']))
    $lname = $_GET['lname'];
else
    $lname = '';

if(isset($_GET['email']))
    $givenMail = $_GET['email'];
else
    $givenMail = '';
        
if(isset($_GET['lang']))
    $mlang = $_GET['lang'];
else
    $mlang = 'de';
        
?>


<div class="wrapper quarter-background-resversed animatedParent animateOnce overflow-hidden padding-top-20">
	<div class="content wide">
		<div class="content thin">
			<div class="shadow-box padding animated fadeInDown">
				<form action="#" class="form js-form" id="">
					<?php if(!empty($mlang) && $mlang === 'en') : ?>
        				<h3 class="h1 centered no-padding-top">Confirmation of your personal invitation to the CallOne Lounge</h3>
        				<p><?= !empty($fname) && !empty($lname)? "Dear ".$fname. ' '.$lname. ',<br/> ' : ''  ?>please let us know that we can expect you at the Golden Phoenix on March 3rd, 2020 and whether you will be accompanied. We look forward to welcoming you as a guest.</p>
        			<?php else : ?>
        				<h3 class="h1 centered no-padding-top">Bestätigung Ihrer persönlichen Einladung zur CallOne Lounge</h3>
        				<p><?= !empty($fname) && !empty($lname)? "Liebe/r ".$fname. ' '.$lname. ',<br/> ' : ''  ?>teile uns bitte mit, ob wir dich am 3.3.2020 im Golden Phoenix erwarten können und ob du mit einer Begleitung kommst. Wir freuen uns Dich als Gast begrüßen zu dürfen.</p>
    				<?php endif;?>
    				
            	  	
              		<input type="hidden" name="type" value="6">
    	 			<input type="hidden" name="issue" value="Anmeldung CallOne Lounge - Callcenter World">
    	 			<input type="hidden" name="participant_email" value="<?= !empty($givenMail)? $givenMail : '' ?>">

					<strong class="h3 headline"><?= !empty($mlang) && $mlang === 'en'? 'Attend the event?' : 'An der Veranstaltung teilnehmen?' ?></strong>
					<div class="checkboxen padding-top-20 margin-bottom-20 flex"> 					
                    	<label class=" customRadiobox checked no-margin" style="width: auto;  padding-right: 40px;">
                            <p><?= !empty($mlang) && $mlang === 'en'? 'Yes' : 'Ja' ?></p>
                            <input type="radio" name="participation" value="ja" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class=" customRadiobox no-margin" style="width: auto; padding-right: 40px;">
                            <p><?= !empty($mlang) && $mlang === 'en'? 'No' : 'Nein' ?></p>
                            <input type="radio" name="participation" value="nein">
                            <span class="checkmark"></span>
                        </label>
                    </div>

 					<div class="group">
						<input type="text" name="participant_name" class="participant_name" value="<?= !empty($fname) && !empty($lname)? $fname. ' '.$lname : ''  ?>" placeholder="<?= !empty($mlang) && $mlang === 'en'? 'Your Name' : 'Ihr Name' ?>" required>
                    </div>
 					
 					<strong class="h3 headline"><?= !empty($mlang) && $mlang === 'en'? 'Are you coming with an accompanying person?' : 'Kommen Sie mit einer Begleitperson?' ?></strong>
 					<div class="checkboxen padding-top-20 margin-bottom-20 flex">
 						
                    	<label class=" customRadiobox no-margin" style="width: auto;  padding-right: 40px;">
                            <p><?= !empty($mlang) && $mlang === 'en'? 'Yes' : 'Ja' ?></p>
                            <input type="radio" name="participation_partner" value="ja">
                            <span class="checkmark"></span>
                        </label>
                        <label class=" customRadiobox checked no-margin" style="width: auto; padding-right: 40px;">
                            <p><?= !empty($mlang) && $mlang === 'en'? 'No' : 'Nein' ?></p>
                            <input type="radio" name="participation_partner" value="nein" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
 				
 					<div class="group">
                    	<input type="text" name="partner_name" id="partner_name" class="partner_name" value="" placeholder="<?= !empty($mlang) && $mlang === 'en'? 'Name of the accompanying person' : 'Name der Begleitperson' ?>" disabled='disabled'>
                    </div>

                    <div class="button-set centered" style="margin: 70px auto 35px; width: 100%; display: flex;">
                    	<button class="button tertiary submit" style="margin-bottom: 0; min-width: 50%; font-size: 16px;"><?= !empty($mlang) && $mlang === 'en'? 'Confirm' : 'Bestätigen' ?></button>
                    </div>
    	 		</form>
    	 		<?php if(!empty($mlang) && $mlang === 'en') : ?>
        	 		<div class="formSuccess zusage" style="min-height: 400px;">
                    	<h3 class="h1 centered no-padding-top">Thank you for your confirmation!</h3>
                    	<p>&nbsp;</p>
                    	<p class="centered">We look forward to welcoming you on <strong>March 3rd, 2020, from 7 p.m. </strong>in the Golden Phoenix in Berlin.</p>
                    </div>
                    <div class="formSuccess absage" style="min-height: 400px;">
                    	<h3 class="h1 centered no-padding-top">Thank you!</h3>
                    	<p>&nbsp;</p>
                    	<p class="centered">We are sorry that you can't make it on <strong>March 3rd, 2020, from 7 p.m. </strong>in the Golden Phoenix in Berlin. Maybe next time. <br>Your CallOne team.</p>
                    </div>
                <?php else : ?>
                	<div class="formSuccess zusage" style="min-height: 400px;">
                    	<h3 class="h1 centered no-padding-top">Vielen Dank für Deine Bestätigung!</h3>
                    	<p>&nbsp;</p>
                    	<p class="centered">Wir freuen uns, dass wir Dich zu unserem gemeinsamen Abend am <strong>3.3.2020, ab 19 Uhr </strong>im Golden Phoenix in Berlin begrüßen dürfen.</p>
                    </div>
                    <div class="formSuccess absage" style="min-height: 400px;">
                    	<h3 class="h1 centered no-padding-top">Vielen Dank!</h3>
                    	<p class="centered">Sehr schade, dass Du es nicht zu unserem gemeinsamen Abend am <strong>3.3.2020, ab 19 Uhr </strong>im Golden Phoenix in Berlin schaffst. Vielleicht ja beim nächsten Mal. <br>Dein CallOne-Team.</p>
                    </div>
                <?php endif; ?>
                <div class="formFail">
                	<h3>Ihre Anfrage konnte nicht gesendet werden!</h3>
                	<p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
    				<p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
    				<p><strong>Ihr CallOne-Team</strong></p>
                </div>
    	 		<div class="animation-4 lazyBackground mobile-hidden"></div>
    	 		<div class="animation-3 lazyBackground mobile-hidden"></div>
    		</div>
    	</div>
	</div>
</div>


<div class="wrapper" id="blog">
  <div class="content narrow">
    <h2 class="h1 centered">Neues aus unserem Blog</h2>
    <div class="shadow-box">
    	<div class="image-grid blog">
            <div class="image">
              <div class="bgimage image5"></div>
            </div>
        	<div class="text">
                <span class="date">20. Januar 2020</span>
                <h3>Contact Center Software: ACD Telefonie auf höchstem Niveau</h3>
                <p>Einführung: Anrufverteilung mit einer Cloud ACD Wenn Sie in einem Unternehmen mit einer Kundenservice-Abteilung arbeiten, kennen Sie sicher die üblichen Probleme: Zu wenige MitarbeiterInnen bekommen zu viele Anrufe und Kunden müssen lange... <a href="/blog/contact-center-software-acd-telefonie-auf-hoechstem-niveau/" title="Zum Artikel: Contact Center Software: ACD Telefonie auf höchstem Niveau">zum Artikel</a></p>
        	</div>
        </div>
    </div>
    <div class="shadow-box">
    	<div class="image-grid blog">
            <div class="image">
              <div class="bgimage image4"></div>
            </div>
        	<div class="text">
                <span class="date">9. Januar 2020</span>
                <h3>Externe Call Center Dienstleister: 4 Tipps für eine erfolgreiche Zusammenarbeit</h3>
                <p>Einführung: Chancen und Herausforderungen Themen wie 24-Stunden-Support, KI-Kundenservice und intelligenter Self-Service, die den Kundenservice in den letzten Jahren bestimmten, haben eines gemeinsam: Erfolgreiche Unternehmen machen... <a href="/blog/externe-call-center-dienstleister-4-tipps-fuer-eine-erfolgreiche-zusammenarbeit/" title="Zum Artikel: Externe Call Center Dienstleister: 4 Tipps für eine erfolgreiche Zusammenarbeit">zum Artikel</a></p>
        	</div>
        </div>
    </div>
  </div>
</div>
