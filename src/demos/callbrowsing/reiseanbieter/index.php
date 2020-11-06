<!DOCTYPE html>
<html lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CallOne Callbrowsing -->
    	<link rel="stylesheet" type="text/css" href="https://www.callone.de/demos/callbrowsing/styles.css">
		
		<link rel="stylesheet" type="text/css" href="./css/style.min.css">
		<link rel="shortcut icon" href="favicon5.ico" type="image/x-icon" />
		<meta name="robots" content="noindex,nofollow">
		<meta name="SiteName" content="Travel Hero">
		<title>Pauschalreisen günstig buchen bei Travel Hero</title>
		<meta name="Description" content="Buchen Sie Ihre Pauschalreise bei Travel Hero günstig &amp; sicher.">
		<meta name="Keywords" content="Pauschalreisen">
		<script>
    		// load surfly
        	(function(s,u,r,f,l,y){s[f]=s[f]||{init:function(){s[f].q=arguments}};
        	l=u.createElement(r);y=u.getElementsByTagName(r)[0];l.async=1;
        	l.src='https://surfly.com/surfly.js';y.parentNode.insertBefore(l,y);})
        	(window,document,'script','Surfly');
    	</script>
		
		<script src="https://www.callone.de/assets/javascripts/libs/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="https://www.callone.de/demos/callbrowsing/functions.js"></script>
		<script>
			function scrollToTop() { $("html, body").animate({ scrollTop: $('iframe').offset().top}, 1); }
		</script>
		
		<script>
    	$(function ()
    	{
            var timestamp_start = Math.floor (Date.now() / 1000);
            var session_rootnumber = null;
            var session_ddi = null;
    
            function callbrowsing_text_create ()
    		{
    			var text;
    			var minutes;
    			
                text = 'Willkommen bei Ihrem Reiseanbieter.  Vielen Dank für Ihren Anruf. ';
    
                if ($('input[name="destination"]').is(':checked'))
                	text += 'Ihr Urlaubsziel ' + $("input[name='destination']:checked").val() + '. ';
                if ($('input[name="airport"]').is(':checked'))
                	text += 'Sie starten und landen vom Flughafen ' + $("input[name='airport']:checked").val() + '. ';
                if ($('#datepicker').val().length > 0)
                	text += 'Ihr Abreisetermin ist der ' + $('#datepicker').val() + '. ';
                if ($('input[name="duration"]').is(':checked')) {
                    if($("input[name='duration']:checked").val() === 'beliebig')
                    	text += ' Die Dauer Ihres Aufenthaltes ist ' + $("input[name='duration']:checked").val() + '. ';
                    else
                		text += ' Ihr Aufenthalt soll ' + $("input[name='duration']:checked").val() + '  betragen. ';
                }

                text += 'Anzahl der Personen sind ' + $('select#adults').children("option:selected").val() + ' und ';
                if($('select#children').children("option:selected").val() === '0 Kinder')
                	text += 'keine Kinder. ';
                else
                	text += $('select#children').children("option:selected").val() + '. ';
                
    			text += 'Sie sind schon seit ';
    			duration = Math.floor (Date.now() / 1000) - timestamp_start;
    			if (duration > 60)
    			{
    				duration = duration / 60;
    				duration = Math.round (duration);
    				if (duration == 1)
    						text += 'einer Minute ';
    				else	text += duration+' Minuten ';
    			}
    			else
    			{	duration = Math.round (duration);
    				text += duration+' Sekunden ';
    			}
    			text += 'auf der Webseite. ';
    
    			return text;
			}
			
			function callbrowsing_url_create ()
    		{	return null;
			}
    
    		function callbrowsing_status (rootnumber, ddi, callstatus, caller)
    		{
                session_rootnumber = rootnumber;
                session_ddi = ddi;
    
                $('.callbrowsing_personal_phonenumber').html (' '+rootnumber+' - '+ddi);
    
    			switch (callstatus)
    			{
    				case 0:
                        // callbrowsing status
                        $("#callbrowsing_status").css ('visibility', 'visible');
    					$('#callbrowsing_status').css ('animation-play-state', 'paused');
    
    					$('#callbrowsing_status_text_big').text ('Rufen Sie uns an!');
    					$('#callbrowsing_status_text_small').text('Wir finden Ihren Traumurlaub.');
    
                        // callbrowsing webview sharing
    					$('#callbrowsing_webview_sharing_text').text ('Webseite freigeben');
    
                        $("#callbrowsing_webview_sharing").css ('visibility', 'hidden');
                        $('#callbrowsing_webview_sharing').css ('animation-play-state', 'paused');
    					break;
    				
    				case 1:
                        // callbrowsing status
                        $("#callbrowsing_status").css ('visibility', 'visible');
    
    					$('#callbrowsing_status_text_big').text ('Danke!');
    					$('#callbrowsing_status_text_small').text (caller);
    
    					$('#callbrowsing_status').css ('animation','animation_content_zoom 1s infinite');
    					break;
    				
    				case 2:
                        // callbrowsing status
                        $("#callbrowsing_status").css ('visibility', 'visible');
    
    					$('#callbrowsing_status_text_big').text ('Danke!');
    					$('#callbrowsing_status_text_small').text (caller);
    
    					$('#callbrowsing_status').css ('animation-play-state', 'paused');
    
                        // callbrowsing webview sharing
    					$('#callbrowsing_webview_sharing_text').text ('Webseite freigeben');
    
    					$('#callbrowsing_webview_sharing').css ('animation','animation_content_blend_in 1s');
                        $("#callbrowsing_webview_sharing").css ('visibility', 'visible');
                        break;
                        
                    case 3:
                        // callbrowsing status
                        $("#callbrowsing_status").css ('visibility', 'visible');
    
    					$('#callbrowsing_status_text_big').text ('Danke!');
    					$('#callbrowsing_status_text_small').text (caller);
    
    					$('#callbrowsing_status').css ('animation-play-state', 'paused');
    
                        // callbrowsing webview sharing
    					$('#callbrowsing_webview_sharing_text').text ('Webseite geteilt');
    
                        $('#callbrowsing_webview_sharing').css ('animation','animation_content_zoom 1s infinite');
                        $("#callbrowsing_webview_sharing").css ('visibility', 'visible');
    					break;
    			}
    		}
    
    		
    		$('#callbrowsing_webview_sharing').click (function()
    		{	callbrowsing_webview_sharing_start ();
            });
    
    		/**
            $('#callbackButton').click (function()
            {
                $.ajax
    		    ({
                    url: "https://connect.callone.io/backend/callback.php",
                    cache: false,
                    type: "POST",
                    data:
                    {
                        type: 0,
                        aid: 'callone_cfcd208495d565ef66e7dff9f98764da',
                        callback_key: 'dbc5e205033aa4f230073490394205b4',
                        phonenumber: $('#callbackNumber').val().trim(),
                        ddi: session_ddi,
                        data: session_rootnumber
                    },
                    dataType: "json",
                    error: function (error)
                    {	console.log (JSON.stringify (error));
                    },
                    success: function (jsonData)
                    {
                        if (jsonData['success'])
                            $('#callbackNumber').val('');
                    }
                });
            });
    
    		**/
    		callbrowsing_session_init ('405aa97e70dddcbb269d2494b91c3c2f', 'reiseanbieter', callbrowsing_text_create, callbrowsing_url_create, callbrowsing_status);
    		
        });
        </script>
		
	</head>
	<body>
		<div class="header">
			<nav class="topNav">
				<div class="wrapper border">
					<div class="menu">
						<ul>
							<li>Beratung</li>
							<li>FAQ</li>
							<li>Kontakt</li>
							<li>Newsletter</li>
							<li>Reisehinweise</li>
							<li class="sl sl-phone sl-l call"><a title="Rufen Sie uns an! Wir helfen Ihnen gerne weiter" class="callbrowsing_personal_phonenumber"></a></li>
						</ul>
					</div>
				</div>
			</nav>
			<nav class="mainNav">
				<div class="wrapper">
					<div class="menu">
						<ul>
							<li>
								<header>
									<img src="images/logo.png" alt="Travel Heroes" title="Travel Heroes"/>
								</header>
							</li>
							<li class="active">Pauschalreisen</li>
							<li>Hotel & FeWo</li>
							<li>City</li>
							<li>Flug</li>
							<li>Inspiration</li>
							<li>Service & Hilfe</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="buehne">
			<div class="wrapper">
				<div class="angebot">
					<div class="pos">
						<strong>Teneriffa</strong> <span></span><span></span><span></span><span></span><span></span> 
						<p>Last Minute Schnäppchen auf die Kanarischen Inseln.</p>
						<div class="button">p.p ab 240€</div>
					</div>
				</div>
				<div class="suche">
					<div class="starStoerer" id="callbrowsing_status">
						<div>
							<span class="icon sl sl-l"></span>
							<span class="number callbrowsing_personal_phonenumber"></span>
							<span class="text"><strong id="callbrowsing_status_text_big"></strong></span><span id="callbrowsing_status_text_small"></span>
							</div>
					</div>
					<div id="callbrowsing_webview_sharing">
							<div id="callbrowsing_webview_sharing_text"></div>
					</div>
					<h3 class="title">Pauschalreisen suchen</h3>
					<form>
						<div class="input target">
							<label class="pin open">Reiseziel auswählen</label>
							<div class="choice">
								<h4>Top Reiseziele</h4>
								<ul>
									<li><input type="radio" name="destination" id="destination1" value="ist Mallorca"><label for="destination1" class="pin">Mallorca</label></li>
									<li><input type="radio" name="destination" id="destination2" value="sind die Malediven"><label for="destination2" class="pin">Malediven</label></li>
									<li><input type="radio" name="destination" id="destination3" value="ist Gran Canaria"><label for="destination3" class="pin">Gran Canaria</label></li>
									<li><input type="radio" name="destination" id="destination4" value="ist Teneriffa"><label for="destination4" class="pin">Teneriffa</label></li>
									<li><input type="radio" name="destination" id="destination5" value="ist Dubai"><label for="destination5" class="pin">Dubai</label></li>
									<li><input type="radio" name="destination" id="destination6" value="ist Kreta"><label for="destination6" class="pin">Kreta</label></li>
								</ul>
							</div>
						</div>
						<div class="input target">
							<label class="plane open datedisplay">Abflughafen</label>
							<div class="choice">
								<h4>Deutschland</h4>
								<ul>
									<li><input type="radio" name="airport" id="airport1" value="Berlin Tegel"><label for="airport1" class="">Berlin Tegel</label></li>
									<li><input type="radio" name="airport" id="airport2" value="Berlin Schönefeld"><label for="airport2" class="">Berlin Schönefeld</label></li>
									<li><input type="radio" name="airport" id="airport3" value="Frankfurt am Main"><label for="airport3" class="">Frankfurt-Main</label></li>
									<li><input type="radio" name="airport" id="airport4" value="Düsseldorf"><label for="airport4" class="">Düsseldorf</label></li>
									<li><input type="radio" name="airport" id="airport5" value="München"><label for="airport5" class="">München</label></li>
									<li><input type="radio" name="airport" id="airport6" value="Hamburg"><label for="airport6" class="">Hamburg</label></li>
								</ul>
							</div>
						</div>
						<div class="input target">
							<label class="date open" for="datepicker">Anreise</label>
							<div class="choice">
								<input type="text" id="datepicker">
							</div>
						</div>
						<div class="input target">
							<label class="duration open">Länge Aufenhalt</label>
							<div class="choice">
								<ul>
									<li><input type="radio" name="duration" id="duration1" value="beliebig"><label for="duration1" class="">beliebig</label></li>
									<li><input type="radio" name="duration" id="duration2" value="1 Woche"><label for="duration2" class="">1 Woche</label></li>
									<li><input type="radio" name="duration" id="duration3" value="2 Wochen"><label for="duration3" class="">2 Wochen</label></li>
									<li><input type="radio" name="duration" id="duration4" value="3 Wochen"><label for="duration4" class="">3 Wochen</label></li>
									<li><input type="radio" name="duration" id="duration5" value="4 Wochen"><label for="duration5" class="">4 Wochen</label></li>
								</ul>
							</div>
						</div>
						<div class="input target">
							<label class="persons open">Anzahl Personen</label>
							<div class="choice">
								<label class="select">Erwachsene</label>
								<select id="adults">
									<option value="1 Erwachsener">1 Erwachsener</option>
									<option value="2 Erwachsene" selected>2 Erwachsene</option>
									<option value="3 Erwachsene">3 Erwachsene</option>
									<option value="4 Erwachsene">4 Erwachsene</option>
								</select>
								<label class="select">Kinder</label>
								<select id="children">
									<option value="0 Kinder">0 Kinder</option>
									<option value="1 Kind" selected>1 Kind</option>
									<option value="2 Kinder">2 Kinder</option>
									<option value="3 Kinder">3 Kinder</option>
								</select>
								<button class="submit_persons">Übernehmen</button>	
							</div>
						</div>
						<div class="submit">
							Urlaub finden
						</div>
					</form>
				</div>
				<div class="bg-click"></div>
			</div>
		</div>
		<div class="content">
			<div class="wrapper">
    			<h1>Pauschalreisen günstig buchen</h1>
    			<p>Ganz schön praktisch, wenn man sich nicht um einzelne Reisebausteine kümmern muss. Bei vielen Pauschalangeboten ist neben Flug, Transfer und Hotel auch der Zug zum Flug inklusive. Das spart nicht nur Zeit sondern auch Nerven.</p>
    			
    			<h2>Pauschalreise - sicher & flexibel</h2>
    			<div class="grid">
    				<div class="col3 diving"><span class="title">Tauchurlaub</span></div>
    				<div class="col3 allincl"><span class="title">All Inclusive</span></div>
    				<div class="col3 asia"><span class="title">Fernreisen</span></div>
    			</div>
    		</div>
		</div>
		<div class="footer">
			<!-- <div class="benefits">
				<div class="content">
					<div class="wrapper">
						Ihre Vorteile
					</div>
				</div>
			</div>
			<div class="contact">
    			<div class="content">
    					<div class="wrapper">
    					</div>
    			</div>		
			</div>
			<div class="subfooter">
				<div class="content">
    					<div class="wrapper">
    					</div>
    			</div>		
			</div> -->
		</div>

		<script>
		
		    $( "#datepicker" ).datepicker({
		    	prevText: '&#x3c;zurück', prevStatus: '',
		        prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
		        nextText: 'Vor&#x3e;', nextStatus: '',
		        nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
		        currentText: 'heute', currentStatus: '',
		        todayText: 'heute', todayStatus: '',
		        clearText: '-', clearStatus: '',
		        closeText: 'schließen', closeStatus: '',
		        monthNames: ['Januar','Februar','März','April','Mai','Juni',
		        'Juli','August','September','Oktober','November','Dezember'],
		        monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
		        'Jul','Aug','Sep','Okt','Nov','Dez'],
		        dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
		        dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
		        dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
		    	dateFormat: 'd MM yy'
			});
		  
		      $('.datepicker').on('click', function() {
		    	  
		    	  $( "#datepicker" ).datepicker('show');
		    	  
		    	  
		      });
		      
		   


			var inputField = document.getElementsByClassName('open');
			var y = 0;
    		
    		$('.bg-click').click(function() {
    			$('.choice').removeClass('show');
    			$('.bg-click').hide('show');
            });
    		
    		var showMenu = function() {
    		  var ele = $(this).next('.choice');
    		  ele.toggleClass('show');
    		  $('.bg-click').show();
    		  event.stopPropagation();
    		};

    		var showAnimation = function() {
        		y++;
        		console.log('change');
        		if(y > 4) {
        			console.log('yey');
            		$('.starStoerer').addClass('zoominoutanimation');
            	}
      		};

      		$('.open').change(function() {
      			y++;
        		console.log('change');
        		if(y > 4) {
        			console.log('yey');
            		$('.starStoerer').addClass('zoominoutanimation');
            	}
          	});
    
    		for (var i = 0; i < inputField.length; i++) {
    			inputField[i].addEventListener('click', showMenu, false);
    		}

    		$('.choice label').on('click', function() {
        		var destination = $(this).text();
        		var field = $(this).closest('.target');
        		field.children('label').text(destination);
        		$(this).parent('input').attr('checked');
        		$('.choice').removeClass('show');
    			$('.bg-click').hide('show');
    			showAnimation();
        	});

    		$('.submit_persons').on('click', function() {
    			event.preventDefault();
        		var adults = $('#adults').val();
        		var children = $('#children').val();
        		var field = $(this).closest('.target');
        		field.children('label').text(adults + ' + ' + children);
        		$('.choice').removeClass('show');
    			$('.bg-click').hide('show');
    			showAnimation();
        	});
    		

    		$('#datepicker').change(function() {
    			var destination = $('#datepicker').val();
    			console.log(destination);
        		var field = $(this).closest('.target');
        		field.children('label').text(destination);
        		$('.choice').removeClass('show');
    			$('.bg-click').hide('show');
    			showAnimation();
            });
        	
		</script>
	</body>
</html>