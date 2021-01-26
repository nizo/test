<!-- Modal 10secondApplication -->
<div class="modal-content animate-BorderTop">
  <div class="modal-header">
    <span class="close sl sl-close"></span>
    <strong class="centered h2">10 Sekunden Bewerbung</strong>
  </div>
  <div class="modal-body">
  	<form action="#" class="form shortApplication js-form">
  		<input type="hidden" name="type" value="4">
  		<input type="hidden" name="path" value='<?=json_encode (implode(';', $_SESSION['userRoute']));?>'>
  		<input type="hidden" name="issue" value="10 Sekunden Bewerbung">
        <div class="wrapper"> 	
      		<div class="content narrow">
    			<strong class="mobile-hidden h3">Zeige Profil!</strong>
          		<p>
          			Manchmal bleibt einfach keine Zeit für eine klassische Bewerbung. Du möchtest dich aber trotzdem vorstellen? <br>
          			Dann überzeuge uns mit deinem aussagekräftigen Business-Profil. Einfach den Link zum Profil dalassen und wir melden uns bei dir.
          			<br>&nbsp;
          		</p>          		
          		<input type="text" name="name" placeholder="Dein Name" />
          		<input type="text" name="url" id="url" placeholder="Link zum Xing oder LinkedIn-Profil" />
          		          		
             	<div class="button-set centered">
                  <button class="button primary submit no-margin">Jetzt bewerben</button>
                </div>
      		</div>
  		</div>
    </form>
    <div class="formSuccess">
    	<div class="content narrow centered">
      		<strong class="h1">Vielen Dank für Deine Bewerbung</strong>
      		<p>Wir melden uns in Kürze bei dir.</p>
  		</div>
    </div>
  </div>
   <div class="modal-footer close">
   	<span>Schließen</span>
   </div>
</div>