<!DOCTYPE html>
<html class="js gt-ie9" lang="de"><!-- aHR0cHM6Ly9qb2JzLmNoZWNrMjQuZGU= --><head>

    <title>Audi A6 ⇒ Vario-Finanzierungsangebote | Sixt Neuwagen</title>
    
    <!-- Meta Angaben -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="revisit-after" content="7 days">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Language" content="de">
    <meta name="Publisher" content="Sixt Neuwagen">
    <meta name="Copyright" content="Sixt Neuwagen">
    <meta name="Robots" content="noindex,nofollow,noodp,noydir">
    
    <!-- CSS/Favicon/JS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="./css/layout.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <style>.async-hide { opacity: 0 !important}</style>

    <!-- CallOne Callbrowsing -->
    <link rel="stylesheet" type="text/css" href="/demos/callbrowsing/styles.css">

	<script>
	// load surfly
	(function(s,u,r,f,l,y){s[f]=s[f]||{init:function(){s[f].q=arguments}};
	l=u.createElement(r);y=u.getElementsByTagName(r)[0];l.async=1;
	l.src='https://surfly.com/surfly.js';y.parentNode.insertBefore(l,y);})
	(window,document,'script','Surfly');
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/demos/callbrowsing/functions.js"></script>

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
			
            text = 'Willkommen bei Sixt Neuwagen. ';

            if ($( "#hersteller option:selected" ).text().length > 0 && $( "#hersteller option:selected" ).text() !== 'Bitte wählen') {
                text += 'Sie interessieren sich für einen ' + $( "#hersteller option:selected" ).text();
                if ($( "#modell option:selected" ).text().length > 0 && $( "#modell option:selected" ).text() !== 'Bitte wählen') {
                	text += ' ' + $( "#modell option:selected" ).text();
                    /**if ($( "#karosserie option:selected" ).text().length > 0 && $( "#karosserie option:selected" ).text() !== 'Bitte wählen')
                    	text += ' als Karosserie Variante ' + $( "#karosserie option:selected" ).text();
                    if ($( "#anzahlTueren option:selected" ).text().length > 0 && $( "#anzahlTueren option:selected" ).text() !== 'Beliebig')
                    	text += ' mit ' + $( "#anzahlTueren option:selected" ).text() + ' Türen';
                    if ($( "#kraftstoff option:selected" ).text().length > 0 && $( "#kraftstoff option:selected" ).text() !== 'Beliebig')
                    	text += $( "#kraftstoff option:selected" ).text() == 'Bleifrei'?  ' als Benziner' : ' als Diesel';
                    if ($( "#leistung option:selected" ).text().length > 0 && $( "#leistung option:selected" ).text() !== 'Beliebig')
                    	text += ' mit einer Leistung von ' + $( "#leistung option:selected" ).text();
                    if ($( "#autoModell option:selected" ).text().length > 0 && $( "#autoModell option:selected" ).text() !== '')
                    	text += ' wird Ihnen das Modell ' + $( "#autoModell option:selected" ).text() + ' vorgeschlagen.';
    
                    if ($( "#verbrauch" ).text().length > 0 )
                    	text += ' Dieses Modell hat einen kombinierten Kraftstoffverbrauch von ' + $( "#verbrauch" ).text() + ' Litern pro 100 Kilometer';
    
                    if ($( "#co2" ).text().length > 0 )
                    	text += ' und einen CO2 Ausstoß von ' + $( "#co2" ).text() + ' gramm pro Kilometer.';
                    else 
                    	text += '.';
    
    
                    if ($( "#preis" ).text().length > 0 )
                    	text += ' Dieses Fahrzeug lässt sich über die Sixt Vario Finanzierung für ' + $( "#preis" ).text() + ' Euro leicht und sicher finanzieren.';
                    if ($( "#leasingPreis" ).text().length > 0 )
                    	text += ' Oder leasen Sie es für nur ' + $( "#leasingPreis" ).text() + ' Euro pro Monat.';
    			*/
    				text += '?';
                    text += ' Dann bleiben Sie in der Leitung. Wir werden Sie schnellstmöglich mit einem unserer Berater verbinden. ';
                    
                } else {
                    text += ' Wir werden Sie schnellstmöglich mit einem unserer Berater verbinden. ';
                }
            } else { 
            	text += 'Sie haben keine Auswahl auf unserem Finanzierungsrechner getätigt. Sie werden nun an einen Finanzierungsberater weitergeleitet. ';
            }       	
        	
			/** text += 'Sie sind schon seit ';
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
			**/
			return text;
		}

        function callbrowsing_url_create ()
        {	
			var url = null;
			
				if ($( "#hersteller option:selected" ).text().length > 0 && $( "#hersteller option:selected" ).text() !== 'Bitte wählen') {
					url = "/demos/callbrowsing/sixt/crm/index2.php?";
					url += 'h=' + $( "#hersteller option:selected" ).text();
					if ($( "#modell option:selected" ).text().length > 0 && $( "#modell option:selected" ).text() !== 'Bitte wählen') {
	                	url += '&m=' + $( "#modell option:selected" ).text();
	                	if ($( "#karosserie option:selected" ).text().length > 0 && $( "#karosserie option:selected" ).text() !== 'Bitte wählen')
                    		url += '&k=' + $( "#karosserie option:selected" ).text();
                    	if ($( "#anzahlTueren option:selected" ).text().length > 0 && $( "#anzahlTueren option:selected" ).text() !== 'Beliebig')
                    		url += '&t=' + $( "#anzahlTueren option:selected" ).text();
                    	if ($( "#kraftstoff option:selected" ).text().length > 0 && $( "#kraftstoff option:selected" ).text() !== 'Beliebig')
                    		url += '&ks=' + $( "#kraftstoff option:selected" ).text();
                    	if ($( "#leistung option:selected" ).text().length > 0 && $( "#leistung option:selected" ).text() !== 'Beliebig')
                    		url += '&l=' + $( "#leistung option:selected" ).text();
                    	if ($( "#autoModell option:selected" ).text().length > 0 && $( "#autoModell option:selected" ).text() !== '')
                    		url += '&vm=' + $( "#autoModell option:selected" ).text();
                    	if ($( "#preis" ).text().length > 0 )
                        	url += '&p=' + $( "#preis" ).text();
                        if ($( "#leasingPreis" ).text().length > 0 )
                        	url += '&pl=' + $( "#leasingPreis" ).text();
        			}
				}
			
            return url;
        }

		function callbrowsing_status (rootnumber, ddi, callstatus, caller)
		{
            session_rootnumber = rootnumber;
            session_ddi = ddi;

            $('#callbrowsing_personal_phonenumber').html (rootnumber+' - '+ddi);

			switch (callstatus)
			{
				case 0:
                    // callbrowsing status
                    $("#callbrowsing_status").css ('visibility', 'visible');
					$('#callbrowsing_status').css ('animation-play-state', 'paused');

					$('#callbrowsing_status_text_big').text ('Rufen Sie an!');
					$('#callbrowsing_status_text_small').text('Wir freuen uns.');

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


		callbrowsing_session_init ('405aa97e70dddcbb269d2494b91c3c2f', 'sixt', callbrowsing_text_create, callbrowsing_url_create, callbrowsing_status);

		$('#showPopoverCallback').on('click', function() {
			$('#popoverCallback').fadeToggle();
		});
    });
    </script>
    <!-- CallOne Callbrowsing -->
  
  <script type="text/javascript">
//<![CDATA[
///////////////////////////////////////////////////////////////
var CHECK24_HOST = 'www.check24.de';
//]]>
</script>

<!--  <link rel="stylesheet" type="text/css" href="css/layout.css">
<link href="css/styles.css" media="screen, print" rel="stylesheet" type="text/css"> -->
<!-- Start Visual Website Optimizer Asynchronous Code -->

<script type="text/javascript">

    var _vwo_code=(function(){
        var account_id=245591,
            settings_tolerance=2000,
            library_tolerance=2500,
            use_existing_jquery=false,

            // DO NOT EDIT BELOW THIS LINE

            f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();

</script>

<!-- End Visual Website Optimizer Asynchronous Code -->
  
  <style type="text/css"></style><style type="text/css">.fancybox-margin{margin-right:16px;}</style><style type="text/css">.fancybox-margin{margin-right:16px;}</style></head>
<body class="categorysearch  js st162 stVar143 st190 stVar222 st3004 stVar445" id="categorysearch" style="padding-bottom: 62px;">  
<div class="split-redesign">  
<header class="page-head" data-view="navigation">  
<nav class="page-main-navigation"><div class="container">  
<ul class="main-entry"><li>  
<a tabindex="500">Alle Marken</a></li>  
<li><a href="#" data-gaq="Navi-Lagerwagen">Sofort verfügbar</a></li><li><a href="#" data-gaq="Navi-Leasing">Leasing</a></li><li><a href="#" data-gaq="Navi-Finanzierung">Vario-Finanzierung</a></li><li><a>Top-Angebote</a><li><a href="#" data-gaq="Navi-Ratgeber">Ratgeber</a></li><li><a>Services</a></li><li><a href="#" data-gaq="Navi-Q&amp;A">FAQ</a></li><li><a href="#" target="1" data-gaq="Navi-Autovermietung">Mietwagen</a></li><li class="right-pos"><a>Weitere Seiten von Sixt<span class="mls glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li></ul>  
</div>  
</nav><div class="container sub-line-header ptm clearfix"><div class="sub-line-header-group" style="min-height: 50px; position: relative"><div data-selector="menu" class="menu-hamburger"></div>  
<a class="page-logo" href="#" title="Neuwagen Leasing &amp; Vario-Finanzierung bei Sixt">  
<img src="./images/logoNeuwagen.svg" height="58" width="295" alt="Sixt Neuwagen Angebote">  
</a><div class="clearfix" style="position: absolute; top: 5px; right: 5px"><div class="pull-right clearfix sub-line-navigation" style="position: relative;" data-view="wishlist">  
  
<a class="pull-left wish-list-icon" href="#">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23" class="center-block"><svg id="iconStar" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
    <path class="st0" d="M23.7,8.4c-0.3-0.3-0.8-0.5-1.2-0.6L17,7l-2.5-5.2c-0.2-0.4-0.5-0.8-0.9-1s-0.8-0.3-1.2-0.3
        s-0.8,0.1-1.2,0.3s-0.7,0.6-0.9,1L8,7L2.5,7.8C2,7.9,1.6,8.1,1.3,8.4C1,8.7,0.7,9.1,0.6,9.5s-0.1,0.9-0.1,1.3
        c0.1,0.5,0.3,0.9,0.6,1.2l4,4l-0.9,5.7c-0.1,0.7,0.1,1.4,0.5,2c0.4,0.5,1.1,0.9,1.8,0.9c0.4,0,0.7-0.1,1.1-0.3l4.9-2.7l4.9,2.7
        c0.3,0.2,0.7,0.3,1.1,0.3c0.7,0,1.3-0.3,1.8-0.9c0.4-0.5,0.6-1.3,0.5-2l-1-5.7l4-4c0.3-0.3,0.5-0.7,0.6-1.2c0.1-0.4,0.1-0.9-0.1-1.3
        C24.3,9.1,24,8.7,23.7,8.4z"></path>
</svg></svg>  
<span class="wishlist-counter">0</span>  
Merkzettel  
</a>  
<a class="pull-left" role="button" tabindex="0" data-toggle="popover" data-html="true" data-content="&lt;div class=&quot;lvkd-switch&quot;&gt;Bitte wählen Sie. &lt;hr&gt;&lt;a data-switchlvkdto=&quot;P&quot; class=&quot;privat active&quot; &gt;&lt;svg version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;40&quot;  height=&quot;40&quot; &gt;&lt;svg version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 25 25&quot; id=&quot;iconLvkdPrivate&quot;&gt;
  &lt;path class=&quot;st0&quot; d=&quot;M24.5,24.5c0,0,0-1.6-0.1-2.5c-0.1-0.7-1.1-1.6-5.1-3.1s-3.7-0.7-3.7-3.4c0-1.7,0.9-0.7,1.4-4
        c0.2-1.3,0.4-0.4,0.9-2.5c0.3-1.1-0.2-1.2-0.1-1.7s0.1-1,0.2-2c0.1-1.3-1.1-4.8-5.5-4.8S6.9,4,7,5.3c0.1,1.1,0.1,1.5,0.2,2
        C7.3,7.8,6.9,7.9,7.1,9c0.5,2.1,0.6,1.2,0.9,2.5c0.6,3.3,1.4,2.3,1.4,4c0,2.7,0.2,2-3.7,3.4c-4,1.5-5,2.4-5.1,3.1
        c-0.1,0.9-0.1,2.5-0.1,2.5h12H24.5z&quot; /&gt;
&lt;/svg&gt;
&lt;/svg&gt;&lt;span&gt;Privatkunde&lt;br&gt;&lt;small&gt;Preise inkl. MwSt.&lt;/small&gt;&lt;/span&gt;&lt;/a&gt;&lt;a data-switchlvkdto=&quot;G&quot; class=&quot;business&quot; href=&quot;/finanzierung/audi/a6?mode=V?mode=V&amp;lvkd=G&quot;&gt;&lt;svg version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;40&quot;  height=&quot;40&quot; &gt;&lt;svg version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 25 25&quot; id=&quot;iconLvkdBusiness&quot; &gt;
  &lt;path class=&quot;st0&quot; d=&quot;M17.8,7.3c0.1-0.5,0.1-1,0.2-2c0.1-1.3-1.1-4.8-5.5-4.8S6.9,3.9,7,5.3c0.1,1.1,0.1,1.5,0.2,2
        C7.3,7.8,6.9,7.9,7.1,9c0.5,2.1,0.6,1.2,0.9,2.5c0.6,3.3,1.4,2.3,1.4,4v0.8c0.1,0,1.1,0.6,3,0.6s3-0.6,3.1-0.6l0,0
        c0-0.2,0-0.5,0-0.8c0-1.7,0.9-0.7,1.4-4c0.2-1.3,0.4-0.4,0.9-2.5C18.1,7.9,17.7,7.8,17.8,7.3z M24.3,22c-0.1-0.7-1.1-1.6-5.1-3.1
        c-1.3-0.5-2.2-0.7-2.7-0.9l-2,6.2L13,20.3c0,0,0.8-0.6,0.7-1.3c0-0.7-0.6-1.3-1.3-1.3S11,18.3,11,19c-0.1,0.8,0.8,1.3,0.8,1.3
        l-1.5,3.9l-2-6.1c-0.6,0.2-1.4,0.4-2.6,0.9c-4,1.5-5,2.4-5.1,3.1c-0.1,0.9-0.1,2.5-0.1,2.5h24C24.5,24.5,24.5,22.8,24.3,22z&quot; /&gt;
&lt;/svg&gt;
&lt;/svg&gt;&lt;span&gt;Gewerbekunde&lt;br&gt;&lt;small&gt;Preise ohne MwSt.&lt;/small&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;" data-trigger="click" data-placement="bottom auto" data-original-title="" title="">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23" class="center-block"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="iconLvkdPrivate">
  <path class="st0" d="M24.5,24.5c0,0,0-1.6-0.1-2.5c-0.1-0.7-1.1-1.6-5.1-3.1s-3.7-0.7-3.7-3.4c0-1.7,0.9-0.7,1.4-4
        c0.2-1.3,0.4-0.4,0.9-2.5c0.3-1.1-0.2-1.2-0.1-1.7s0.1-1,0.2-2c0.1-1.3-1.1-4.8-5.5-4.8S6.9,4,7,5.3c0.1,1.1,0.1,1.5,0.2,2
        C7.3,7.8,6.9,7.9,7.1,9c0.5,2.1,0.6,1.2,0.9,2.5c0.6,3.3,1.4,2.3,1.4,4c0,2.7,0.2,2-3.7,3.4c-4,1.5-5,2.4-5.1,3.1
        c-0.1,0.9-0.1,2.5-0.1,2.5h12H24.5z"></path>
</svg>
</svg>  
Privat  
</a>
<a class="pull-left" id="showPopoverCallback">  
<img src="./images/callback.svg"  style="color: #ffffff; display: block; margin: 0 auto;"/>
Rückruf  
</a>
<div class="popover fade bottom in" role="tooltip" id="popoverCallback" style="top: 42px; left: 45px; display: none;"><div class="arrow" style="left: 50%;"></div>
<h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><div class="lvkd-switch">Rufnummer eingeben, wir rufen Sie sofort zurück.<hr>

<div class="callback">
	<div id="wrap">
		<form id="callbackForm" action="" autocomplete="on" onclick="document.getElementById('callbackNumber').classList.add('fixed');">
            <input id="callbackNumber" name="callbacknumber" type="text" placeholder="Ihre Rufnummer" >
            <button id="callbackButton" type="button" name="callbackbutton">Rückruf anfordern</button>
		</form>
    </div>
</div>

</div></div></div>
</div>  
  
<span class="pull-right clearfix service-phone">  
<span class="phone-receiver-icon mlm">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="phone-receiver" fill="#dadada" viewBox="0 0 32.94 33">  
<path id="phone-receiver-icon" data-name="phone-receiver-icon" class="cls-1" d="M1313.32,70.047l-4.48-4.456a2.716,2.716,0,0,0-3.92,0l-2.69,2.674c-0.23.373-.45,0.446-0.67,0.223a6,6,0,0,1-1.68-.891,27.549,27.549,0,0,1-6.84-6.127q-2.13-3.229-2.46-3.9a0.9,0.9,0,0,1,.22-0.668l2.69-2.674q1.9-2.005,0-3.9a7.787,7.787,0,0,0-.73-0.835q-0.39-.389-0.84-0.78c-0.3-.26-0.52-0.463-0.67-0.613l-2.24-2.228q-2.13-1.781-3.92,0c-0.3.3-.77,0.724-1.4,1.281s-1.06.947-1.29,1.17a4.164,4.164,0,0,0-1.34,3.008,13.188,13.188,0,0,0,.89,5.57,38.334,38.334,0,0,0,5.94,9.58,36.138,36.138,0,0,0,11.99,9.47,13.233,13.233,0,0,0,6.61,2.005,4.322,4.322,0,0,0,4.14-1.56l2.47-2.451A2.829,2.829,0,0,0,1313.32,70.047Z" transform="translate(-1281.03 -45)"></path>  
</svg>  
</span>

<div id="callbrowsing_status" style="position: absolute; top: 150px; margin-left: 50%; margin-right: 50%; left: 300px;">
    <div id="callbrowsing_status_text_big"></div>
	<div id="callbrowsing_status_text_small"></div>
</div>

<div id="callbrowsing_webview_sharing" style="position: absolute; top: 500px; margin-left: 50%; margin-right: 50%; left: 300px;">
    <div id="callbrowsing_webview_sharing_text"></div>
</div>

<span class="service-phone-number" x-ms-format-detection="none">  
	<div id="callbrowsing_personal_phonenumber"></div>
	<small class="to-call visible-md visible-lg">Ihre persönliche Rufnummer</small>  
</span>  
  
<script>

var cars = {
		0: {
			'hersteller' : 'BMW',
	        'modell' : '2er Gran Tourer',
    		'data' : { 
    	        'karosserie' : 'Kompaktvan',
    	        'kraftstoff' : 'Bleifrei',
    	        'anzahlTueren' : '5',
    	        'leistung' : '109PS / 80KW',
	        	'name' : '218i',
	        	'preis' : '228,93',
            	'preisLeasing': '246,77',
            	'verbrauch' : '5,6',
            	'co2' : '128' 
    		}
	    },
	    1: {
	    	'hersteller' : 'BMW',
	    	'modell' : '3er-Reihe',
        	'data' : { 
            	'karosserie' : 'Limousine',
	        	'kraftstoff' : 'Diesel',
	        	'anzahlTueren' : '4',
	        	'leistung' : '150PS/110KW',
	        	'name' : '318d',
	    		'preis' : '353,14',
	        	'preisLeasing': '375,09',
	        	'verbrauch' : '4,3',
	        	'co2' : '113' 		        	
        	}
	    },
		2: {
			'hersteller' : 'Audi',
	        'modell' : 'A1',
    		'data' : { 
    	        'karosserie' : 'Sportback',
    	        'kraftstoff' : 'Bleifrei',
    	        'anzahlTueren' : '5',
    	        'leistung' : '116PS/85KW',
	        	'name' : '30 TFSI Sportback',
	        	'preis' : '185,91',
	        	'preisLeasing': '197,97',
	        	'verbrauch' : '4,8',
	        	'co2' : '108' 
    		}
	    },
	    3: {
	    	'hersteller' : 'Audi',
	    	'modell' : 'A4',
        	'data' : { 
            	'karosserie' : 'Limousine',
	        	'kraftstoff' : 'Diesel',
	        	'anzahlTueren' : '4',
	        	'leistung' : '190PS/140KW',
	        	'name' : '40 TDI S tronic',
	    		'preis' : '417,77',
	        	'preisLeasing': '442,00',
	        	'verbrauch' : '4,2',
	        	'co2' : '111' 		        	
        	}
	    }
	};

function fillModelProps(cars, hersteller) {
	for (var element in cars) {
		if (cars[element].hersteller === hersteller) {
			$('#modell').append('<option value="' + cars[element].modell  + '">'+ cars[element].modell  +'</option>');	
		}
	}
}

function fillProps(cars, hersteller, modell) {
	for (var element in cars) {
		if (cars[element].hersteller === hersteller && cars[element].modell === modell) {
			$('#karosserie option:nth-child(n+2)').remove();
    		$('#karosserie').append('<option value="' + cars[element].data.karosserie  + '">'+ cars[element].data.karosserie  +'</option>');
    		$('#karosserie option:last-child').prop("selected", 'selected');
    		$('#kraftstoff option:nth-child(n+2)').remove();
    		$('#kraftstoff').append('<option value="' + cars[element].data.kraftstoff + '">'+ cars[element].data.kraftstoff  +'</option>');
    		$('#kraftstoff option:last-child').prop("selected", 'selected');
    		$('#anzahlTueren option:nth-child(n+2)').remove();
    		$('#anzahlTueren').append('<option value="' + cars[element].data.anzahlTueren + '">'+ cars[element].data.anzahlTueren  +'</option>');
    		$('#anzahlTueren option:last-child').prop("selected", 'selected');
    		$('#leistung option:nth-child(n+2)').remove();
    		$('#leistung').append('<option value="' + cars[element].data.leistung + '">'+ cars[element].data.leistung  +'</option>');
    		$('#leistung option:last-child').prop("selected", 'selected');
    		$('#autoModell option:nth-child(n+2)').remove();
    		$('#autoModell').append('<option value="' + cars[element].data.name + '">'+ cars[element].data.name + '</option>');
    		$('#autoModell option:last-child').prop("selected", 'selected');
    		$('#verbrauch').html(cars[element].data.verbrauch);
    		$('#co2').html(cars[element].data.co2);
    		$('#preis').html(cars[element].data.preis);
    		$('#leasingPreis').html(cars[element].data.preisLeasing);
		}
	}
}



$(document).ready(function() {
    $('#hersteller').change(function() {
    	$hersteller = $('#hersteller option:selected').text();
    	$('#modell option:nth-child(n+2)').remove();
		$('#modell').prop("disabled", false);
		fillModelProps(cars, $hersteller);
    });

    $('#modell').change(function() {
    	$modell = $('#modell option:selected').text();
		fillProps(cars, $hersteller, $modell);
    });    
    
});

</script>  
</div></div></div>  
</header>  </div>  

<div id="pageContainer" class="page-container sx-b2cl-container isEmbossStyle content-redesign " data-selector="page-container"><div class="sx-b2cl-content-wrapper content clearfix">  
  <div class="sideContent unit radius5">  
<form method="get" name="basicCalculation" action="https://www.sixt-neuwagen.de/detail" class="calculator basicCalculation basicCalculationSmall nBoxShadow2 radius5 clearfix pam" autocomplete="off" id="basicCalculation"><input class="notranslate" type="hidden" name="mode" value="V"><div class="basicCalculationSection ">  
	<h2>Audi A6 Vario-Finanzierungsrechner</h2><h3>Vario-Finanzierungsraten online berechnen</h3></div>  
	<input type="hidden" name="partner_id" id="partnerId" value=""><fieldset class="lvkdRadioSwitch basicCalculationSection">  
	<label><input type="radio" name="lvkd2" data-gaqf="" value="P" checked="checked">privat</label><label><input type="radio" name="lvkd2" data-gaqf="" value="G">gewerblich</label>  
	</fieldset>
	<fieldset class="sx-b2bl-calc-vehicle basicCalculationSection">
		<div>  
			<label class="label" for="hersteller">Hersteller</label>
			<select name="hersteller" class="notranslate" id="hersteller" tabindex="1" data-gaqf="Hersteller" data-action="blockSubmit">
				<option value="" selected="selected">Bitte wählen</option>
				<option value="11">Audi</option>
				<option value="13">BMW</option>
			</select>
		</div>
		<div>  
			<label class="label" for="modell">Modell-Linie</label>
			<select name="modell" class="notranslate" id="modell" tabindex="2" data-gaqf="Modell-Linie" data-action="blockSubmit" disabled="disabled" class="modell" >
				<option value="" selected="selected">Bitte wählen</option>
			</select>
		</div>
		<div class="unit size1of2">
			<p class="mrs">  
				<label class="label" for="sx-bauc">Karosserie</label>
					<select name="karosserie" class="notranslate" id="karosserie" tabindex="3" data-gaqf="Karosserie" data-action="blockSubmit" disabled="disabled">
						<option value="" selected="selected">Bitte wählen</option>
					</select>
			</p>
		</div>
		<div class="unit size1of2">  
			<label class="label" for="sx-strs">Kraftstoff</label>
			<select name="kraftstoff" class="notranslate" id="kraftstoff" tabindex="4" data-gaqf="Kraftstoff" data-action="complete,blockSubmit">
				<option value="" selected="selected">Beliebig</option>
			</select>
		</div>
		<div class="unit size1of2">
			<p class="mrs">  
    			<label class="label" for="sx-tuer">Türen</label>
    			<select name="anzahlTueren" class="notranslate" id="anzahlTueren" tabindex="5" data-gaqf="Tueren" data-action="complete,blockSubmit">
    				<option value="" selected="selected">Beliebig</option>
    			</select>
    		</p>
    	</div>
    	<div class="unit size1of2">  
			<label class="label" for="sx-kw_to">Leistung (min.)</label>
			<select name="leistung" class="notranslate" id="leistung" tabindex="6" data-gaqf="Leistung (min.)" data-action="complete,blockSubmit">
				<option value="" selected="selected">Beliebig</option>
			</select>
		</div>
		<div class="unit size1of1 sx-b2cl-type-modelselector posRel">  
			<label class="section-small-title label" for="sx-ityc">Modell</label>  
			<select name="autoModell" class="notranslate calcTrigger" id="autoModell" tabindex="7" data-gaqf="Modell" data-connect="modelLine" data-type="list">
				<option value="" selected="selected"></option>
			</select>
			
			<span class="efficiency-inside-result" style="visibility: visible;">
				<div class="efficiency-value clearfix">
					<span class="efficiency-value-ecet unit">Kraftstoffverbrauch kombiniert: <span id="verbrauch">4,3</span> l/100 km, </span>
					<i class="wltp-layer-icon mrs unitRight" data-wltp-layer="true">i</i>
					<span class="efficiency-value-co2 unit">CO<sub>2</sub>-Emissionen kombiniert: <span id="co2">112</span> g/km</span>
				</div>
			</span>  
		</div>
	</fieldset>
	<fieldset class="sx-b2bl-calc-conditions basicCalculationSection clearfix"><div class="calculatorExpandWrapper nHide" data-expand="0"><div class="unit size1of2"><p class="mrs">  
<label class="label" for="sx-ld">Laufzeit</label><select name="ld" class="notranslate" id="sx-ld" tabindex="8" data-gaqf="Laufzeit" data-action="calculate,matrix"><option value="30">30 Monate</option>
<option value="36">36 Monate</option>
<option value="42">42 Monate</option>
<option value="48" selected="selected">48 Monate</option>
<option value="54">54 Monate</option></select></p></div><div class="unit size1of2"><p>  
<label class="label" for="sx-sozp" id="sx-b2cl-down-payment">Anzahlung</label><select name="sozp" class="notranslate" id="sx-sozp" tabindex="10" data-gaqf="Anzahlung" data-action="calculate"><option value="0" selected="selected">0 %</option>
<option value="10">10 %</option>
<option value="20">20 %</option>
<option value="30">30 %</option>
<option value="40">40 %</option></select></p>  
<span class="sx-sozp-display" id="sx-sozp-display">einmalig 0,00 €</span></div><div class="unit size1of2 sx-b2cl-mileage"><p class="mrs">  
<label class="label" for="sx-jkm">Laufleistung/Jahr</label><select name="jkm" class="notranslate" id="sx-jkm" tabindex="9" data-gaqf="Laufleistung/Jahr" data-action="calculate"><option value="10000" selected="selected">10000 km</option>
<option value="15000">15000 km</option>
<option value="20000">20000 km</option>
<option value="25000">25000 km</option></select></p></div><div><p class="nHide">  
<label>Sonderausstattung</label>  
<small>Im Wert von </small><input type="text" name="amount_opt" id="sx-soza" class="notranslate sx-gc-txt sx-calc-additional" tabindex="11"> <strong>€</strong></p></div></div><div class="calculatorExpandCtx"><span>48 Monate,</span> <span>10000 km/Jahr,</span> <span>0 % Anzahlung</span></div>  
<a class="nLink unitRight calculatorExpandBttn" data-ctx="ausblenden">ändern</a></fieldset>  
<div class="rate-tab" data-selector="rateTab">  
  
  
<h4 class="h4" id="sx-b2cl-maintab-head">  
Monatsrate  
</h4>  
<div id="sx-b2cl-tab-vario" class="tab sx-gc-selected" data-action="modeswitch" data-ctx="#sx-b2cl-maintab-head" data-head="Monatsrate" data-label="Anzahlung"><label class="label">  
<input type="radio" class="radio" name="modeCalc" value="V" checked="checked">Sixt Vario-Finanzierung  
</label><div class="price-line clearfix">  
<div class="detail-trigger-text" data-selector="detailTriggerText" style="">  
<span data-infodetail="true" data-layerlocal="c|dark" class="sx-b2cl-tooltipicon"><small class="small c3">  
Details zur Finanzierung  
</small>  
</span><div class="sx-b2cl-tooltipcontent" id="tabVarioTable" data-role="detailLayer-V"><div class="detailLayer">  
<span class="block strong mbs detailLayer-carName">Audi A6 35 TDI S tronic Avant</span><hr><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><tbody><tr><td class="td1">Finanzierungsinstitut</td><td class="calcTable-calcPrice">  
Sixt Leasing SE<br>  
Zugspitzstraße 1<br>  
82049 Pullach</td></tr><tr><td class="td1">Vertragsart</td><td class="calcTable-calcPrice">Kilometerleasingvertrag mit Kaufoption</td></tr></tbody></table><hr>  
<span class="strong block mtm">Finanzierungsbeispiel</span>  
<span class="block mbl">  
(alle Preisangaben inkl. MwSt.)  
</span><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><colgroup><col width="75%"><col width="25%"></colgroup><tbody><tr><td class="td">Vertragslaufzeit</td><td class="td calcTable-calcPrice"><span class="sx-js-b2cl-te-value">48 Monate</span></td></tr><tr><td class="td"><span id="sx-js-months">48</span> Monatsraten<sup class="sup" data-fepwl="true">1</sup> à</td><td class="td calcTable-calcPrice"><span id="sx-mrat-info-display" class="sx-js-b2cl-monthly-rate-price">397,00 €</span></td></tr><tr><td class="td">Einmalige Sonderzahlung</td><td class="td calcTable-calcPrice"><span id="sx-sozp-info-display" class="sx-js-b2cl-buying-price">0,00 €</span></td></tr><tr class="delivery-once" data-fepwl="true"><td class="td">Überführungskosten (einmalig)<sup class="sup">1</sup></td><td class="td calcTable-calcPrice"><span id="sx-sozp-info-display" class="sx-js-b2cl-delivery-price">851,10 €</span></td></tr><tr><td class="td calcTable-kfgn">Schlusszahlung</td><td class="td calcTable-kfgn calcTable-calcPrice"><span id="sx-kfgn-info-display" class="sx-js-b2cl-kfgn-price">1.500,00 €</span></td></tr><tr><td class="td calcTable-purchaseOption">  
Preis bei Ausübung der Kaufoption</td><td class="td calcTable-purchaseOption txtR">  
<span id="sx-vkpr-info-display">24.000,00 €</span></td></tr><tr><td class="td"></td><td class="td"><hr></td></tr><tr><td class="td calcTable-result">Gesamtbetrag</td><td class="td calcTable-result calcTable-calcPrice"><span id="sx-total-info-display" class="sx-js-b2cl-total-price">45.407,10 €</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="td calcTable-result">Gesamtbetrag ohne Ausübung der Kaufoption</td><td class="td calcTable-result calcTable-calcPrice"><span id="sx-total-wop-info-display" class="sx-js-b2cl-total-wop-price">21.407,10 €</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-debitInterest">Sollzinssatz pro Jahr<sup class="sup">2</sup></td><td class="calcTable-debitInterest calcTable-calcPrice"><span id="sx-debitInterest-info-display" class="sx-js-b2cl-total-price">4.18 %</span></td></tr><tr><td class="calcTable-effectiveInterest">Effektiver Jahreszins</td><td class="calcTable-effectiveInterest calcTable-calcPrice"><span id="sx-effectiveInterest-info-display" class="sx-js-b2cl-total-price">4.34 %</span></td></tr><tr><td class="calcTable-loanTotal">Nettodarlehensbetrag (Anschaffungspreis)<sup class="sup">3</sup></td><td class="calcTable-loanTotal calcTable-calcPrice"><span id="sx-loanTotal-info-display" class="sx-js-b2cl-total-price">40.025,10 €</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-total-price">Listenpreis<sup class="sup">4</sup></td><td class="calcTable-total-price calcTable-calcPrice"><span id="sx-lipr-info-display" class="sx-js-b2cl-total-price">50.000,00 €</span></td></tr></tbody></table><ul class="varioFootnote unit clearfix mtm"><li>  
<sup class="sup">1</sup>  
<span data-fepwl="true">  
inkl.  
</span>  
Überführungskosten  
Abholung beim Händler</li><li>  
<sup class="sup">2</sup>  
Gebunden für die gesamte Vertragslaufzeit.</li><li>  
<sup class="sup">3</sup>  
Der Anschaffungspreis bezeichnet den Preis, den die Sixt Leasing SE für das Kfz zu bezahlen hat.</li><li>  
<sup class="sup">4</sup>  
Unverbindliche Preisempfehlung des Herstellers. Änderungen und Irrtümer vorbehalten.  
Farbe und Ausstattung können vom Angebot abweichen. Kostenpflichtige Sonderausstattung möglich.</li></ul>  <span class="nLink sxTooltipClose">Schließen</span></div></div>  </div><div class="rate">  
<strong class="sx-mrat-display2" id="preis" data-selector="price" style="display: inline;"></strong></div></div></div></div>  
    
<div class="rate-tab" data-selector="rateTab">  
  
<div id="sx-b2cl-tab-sx-leasing" class="tab " data-action="modeswitch" data-ctx="#sx-b2cl-maintab-head" data-head="Leasingrate" data-label="Sonderzahlung"><label class="label">  
<input type="radio" class="radio" name="modeCalc" value="L">Sixt Leasing  
</label><div class="price-line clearfix">  
<div class="detail-trigger-text" data-selector="detailTriggerText" style="">  
<span data-infodetail="true" data-layerlocal="c|dark" class="sx-b2cl-tooltipicon"><small class="small c3">  
Details zur Finanzierung  
</small>  
</span><div class="sx-b2cl-tooltipcontent" id="tabLeasingTable" data-role="detailLayer-L"><div class="detailLayer">  
<span class="block strong mbs detailLayer-carName">Audi A6 35 TDI S tronic Avant</span><hr><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><tbody><tr><td class="td1">Finanzierungsinstitut</td><td class="calcTable-calcPrice">  
Sixt Leasing SE<br>  
Zugspitzstraße 1<br>  
82049 Pullach</td></tr><tr><td class="td1">Vertragsart</td><td class="calcTable-calcPrice">Kilometerleasingvertrag</td></tr></tbody></table><hr>  
<span class="strong block mbs mtm">Finanzierungsbeispiel</span>  
<span class="block mbl">  
(alle Preisangaben inkl. MwSt.)  
</span><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><colgroup><col width="75%"><col width="25%"></colgroup><tbody><tr><td width="155" class="td">Vertragslaufzeit</td><td width="85" class="td calcTable-calcPrice"><span class="sx-js-b2cl-te-value">48 Monate</span></td></tr><tr><td class="td"><span id="sx-js-L-months">48</span> Monatsraten<sup class="sup" data-fepwl="true">1</sup> à</td><td class="td calcTable-calcPrice"><span id="sx-mrat-L-info-display" class="sx-js-b2cl-monthly-rate-price">425,50 €</span></td></tr><tr><td width="155" class="td">Einmalige Sonderzahlung</td><td width="85" class="td calcTable-calcPrice"><span id="sx-sozp-L-info-display" class="sx-js-b2cl-buying-price">0,00 €</span></td></tr><tr class="delivery-once" data-fepwl="true"><td class="td">  
Überführungskosten (einmalig)<sup class="sup">1</sup></td><td class="td calcTable-calcPrice">  
<span id="sx-sozp-info-display" class="sx-js-b2cl-delivery-price">851,10 €</span></td></tr><tr><td class="td"></td><td class="td"><hr></td></tr><tr><td class="td calcTable-result">Gesamtbetrag</td><td class="td calcTable-result calcTable-calcPrice"><span id="sx-total-wop-info-display" class="sx-js-b2cl-total-wop-price">21.275,10 €</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-debitInterest">Sollzinssatz pro Jahr<sup class="sup">2</sup></td><td class="calcTable-debitInterest calcTable-calcPrice"><span id="sx-debitInterest-L-info-display" class="sx-js-b2cl-total-price">4.17 %</span></td></tr><tr><td class="calcTable-effectiveInterest">Effektiver Jahreszins</td><td class="calcTable-effectiveInterest calcTable-calcPrice"><span id="sx-effectiveInterest-L-info-display" class="sx-js-b2cl-total-price">4.34 %</span></td></tr><tr><td class="calcTable-loanTotal">Nettodarlehensbetrag (Anschaffungspreis)<sup class="sup">3</sup></td><td class="calcTable-loanTotal calcTable-calcPrice"><span id="sx-loanTotal-L-info-display" class="sx-js-b2cl-total-price">40.025,10 €</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-total-price">  
Listenpreis<sup class="sup">4</sup></td><td class="calcTable-total-price calcTable-calcPrice">  
<span id="sx-lipr-L-info-display" class="sx-js-b2cl-total-price">50.000,00 €</span></td></tr></tbody></table><ul class="varioFootnote unit clearfix mtm"><li>  
<sup class="sup">1</sup>  
<span data-fepwl="true">  
inkl.  
</span>  
Überführungskosten  
Abholung beim Händler</li><li>  
<sup class="sup">2</sup>  
Gebunden für die gesamte Vertragslaufzeit.</li><li>  
<sup class="sup">3</sup>  
Der Anschaffungspreis bezeichnet den Preis, den die Sixt Leasing SE für das Kfz zu bezahlen hat.</li><li>  
<sup class="sup">4</sup>  
Unverbindliche Preisempfehlung des Herstellers. Änderungen und Irrtümer vorbehalten.  
Farbe und Ausstattung können vom Angebot abweichen. Kostenpflichtige Sonderausstattung möglich.</li></ul>  <span class="nLink sxTooltipClose">Schließen</span></div></div>  </div><div class="rate">  
<strong class="sx-mrat-display2" id="leasingPreis" data-selector="price" style="display: inline !important;"></strong></div></div></div></div>  
  <div class="sx-b2bl-calc-result">  
  
<div class="sx-b2cl-config-button">  
<button id="sx-js-config-button" class="sx-gc-button-neutral-green nBoxShadow2 button" tabindex="12" type="submit" data-gaqsr="Konfigurieren">  
<span class="sx-gc-button-bigger">Jetzt konfigurieren</span>  
</button></div>  
</div>  
</form><div class="sideBox mvl pvs">  
<div class="sx-b2cl-benefits"><h2>Audi Vario-Finanzierung beim Testsieger Sixt</h2><ul class="sx-b2cl-checklist">  
<li><span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label" id="sx-b2cl-flexibility">  
<strong>  
Volle finanzielle Flexibilität:  
</strong>  
Entscheiden Sie am Ende der Laufzeit selbst, ob Sie den Audi A6  übernehmen oder zurückgeben  
</span></li><li>  
<span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label">  
<strong>  
Audi A6 Neufahrzeug </strong>vom deutschen Audi Partnerhändler  
&nbsp;– Kein Reimport  
</span></li><li><span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label">  
<strong>  
Gleiche Garantie/Gewährleistung wie beim Händler  
</strong>  
</span></li><li><span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label">  
<strong>  
Audi A6 nach Wunsch konfigurierbar  
</strong>  
</span></li><li><span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label">  
Audi A6 Vario-Finanzierung ohne Anzahlung möglich  
</span></li>  
<li><span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label">  
Audi A6 Vario-Finanzierungsrechner  
</span></li>  
  
<li><span class="icon-checkmark" aria-hidden="true"></span>  
<span class="icn-check-label">  
Die günstige Alternative zu einer 0% Finanzierung  
</span></li>  
</ul>  </div>
<div id="seo-box" class="seoBox"><div class="h2 strong">  
Audi A6 Vario-Finanzierung</div><ul class="mbl">  
<li class="">  
<a href="#">  
Audi A6 Vario-Finanzierung  
</a></li>  
<li class="">  
<a href="#">  
Audi A6 günstig Vario-finanzieren  
</a></li>  
<li class="">  
<a href="#">  
Audi A6 Leasing  
</a></li>  
<li class="">  
<a href="#">  
Audi A6 Neuwagen  
</a></li>  
<li class="">  
<a href="#">  
Audi A1 Vario-Finanzierung  
</a></li>  
<li class="">  
<a href="#">  
Audi Q2 Vario-Finanzierung  
</a></li>  
<li class="">  
<a href="#">  
Audi A3 Vario-Finanzierung  
</a></li>  
<li class="">  
<a href="#">  
Audi Q3 Vario-Finanzierung  
</a></li>  
<li class="">  
<a href="#">  
Audi A4 Vario-Finanzierung  
</a></li>  
</ul>  
<a href="/demos/callbrowsing/sixt/crm/index2.php?h=BMW&m=2er%20Gran%20Tourer&k=Kompaktvan&ks=bleifrei&t=5&l=109PS%20/%2085KW&vm=218i&p=228,93&pl=246,77&caller=004917624445585" target="_blank">Anruferdaten anzeigen</a>
</div>  
  </div></div><div class="sx-b2cl-main-content unitRight catlevelLine"><div class="clearfix"><h1 class="headline h1 clearfix">  
Audi A6 Vario-Finanzierungsangebote </h1></div><div class="nBreadcrumb unit">  
<span><a href="#"><span>Sixt Neuwagen</span></a></span> &gt; <span><a href="#"><span> Vario-Finanzierung</span></a></span> &gt; <span><a href="#"><span>Audi Vario-Finanzierung</span></a></span> &gt; <span><a href="#"><span>A6 Vario-Finanzierung</span></a></span></div>  
<div class="clearfix topContent mtm">  
  
  
<span class="unit clearfix topContentImages">  
<figure>  
  
<img src="./images/5ES__.PNG" class="carImgBig" alt="Audi">  
  
  
<img src="./images/11.jpg" class="logoMedium" alt="Audi">  
  
  
</figure>  
</span>  
  
<p>Das BMW i3 Leasing verbindet Aspekte der Umweltfreundlichkeit und Nachhaltigkeit mit einem rundum attraktiven Auto. Es handelt sich hierbei um das erste reine Elektroauto des Herstellers, das gleich große Erfolge feierte. Möglich sind das BMW i3 Privatleasing oder das BMW i3 Gewerbeleasing, die beide eine sparsame Möglichkeit für den Einstieg in die Elektromobilität bieten. Für Diejenigen, die auch im ländlichen Raum unterwegs sind und nicht immer eine Stromtankstelle nutzen können, steht ein Range Extender mit 38 PS aus einem 0,7 Liter- Benziner zur Verfügung. Die Alltagsreichweite des reinen Elektroantriebs beläuft sich jedoch bereits auf 260 Kilometer.</p></div>  
<div class="clearfix sx-b2cl-nav-car-configuration-tabs"><ul class="size1of1 sx-b2cl-nav-car-configuration sx-b2cl-js-nav-car-selected"><div class="sx-b2cl-sort-results unitRight">  
<form method="get" name="seonewcarButton" action="https://www.sixt-neuwagen.de/finanzierung/audi/a6" id="seonewcarButton"><div class="selectMotorWrapper unit">  
<strong>Sortierung</strong>  
<select name="sort" class="mtm"><option value="mira">nach Preis sortieren (niedrigster zuerst)</option>
<option value="mira_desc">nach Preis sortieren (höchster zuerst)</option>
<option value="alpha">alphabetisch sortieren </option></select></div>  
</form></div>  
<li class="item sx-b2cl-js-selected">  
<a title="Karosserie" class="itemCtx">  
Karosserie  
<small>(2)</small>  
</a>  
</li>  
  
</ul></div>  <ul class="sx-b2cl-category-list catLevel1">  
<li class="sx-b2cl-category-list-item posRel">  
<a class="baseLink" href="#" data-gaq="true" data-track="data" data-gtm-list="{&quot;name&quot;:&quot;audi a6 kombi&quot;,&quot;brand&quot;:&quot;audi&quot;,&quot;id&quot;:&quot;g-11-15-es&quot;,&quot;modell&quot;:&quot;a6&quot;,&quot;price&quot;:&quot;333.61&quot;,&quot;list&quot;:&quot;strang-modell&quot;,&quot;position&quot;:1}">  
<span class="unitRight">  
  
<span class="toolTipIcon" data-infodetail="true" data-layerlocal="c|dark" data-layer="{&quot;of&quot;:&quot;:parent:parent span.nButton&quot;,&quot;myAt&quot;:&quot;right-10 top-3|left top&quot;,&quot;tpl&quot;:&quot;#listViewDetailLayerV .sx-b2cl-tooltipcontent&quot;,&quot;data&quot;:{&quot;delivO&quot;:&quot;851,10\u00a0\u20ac&quot;,&quot;deliveryOnce&quot;:&quot;851,10\u00a0\u20ac&quot;,&quot;delivTitle&quot;:&quot;Abholung beim H\u00e4ndler &quot;,&quot;carName&quot;:&quot;Audi A6 35 TDI S tronic Avant&quot;,&quot;svb&quot;:&quot;0,00\u00a0\u20ac&quot;,&quot;te&quot;:&quot;48&quot;,&quot;mrb&quot;:&quot;397,00\u00a0\u20ac&quot;,&quot;pb&quot;:&quot;24.000,00\u00a0\u20ac&quot;,&quot;fpb&quot;:&quot;1.500,00\u00a0\u20ac&quot;,&quot;twopb&quot;:&quot;21.407,10\u00a0\u20ac&quot;,&quot;tb&quot;:&quot;45.407,10\u00a0\u20ac&quot;,&quot;lb&quot;:&quot;50.000,00\u00a0\u20ac&quot;,&quot;vdi&quot;:&quot;4,18\u00a0%&quot;,&quot;vei&quot;:&quot;4,34\u00a0%&quot;,&quot;vlt&quot;:&quot;40.025,10\u00a0\u20ac&quot;,&quot;fEPWL&quot;:true}}"><small class="small c3">Details zur Finanzierung</small></span>  
  
</span><figure class="itemImage ">  
<img class="itemImage" alt="Audi A6 Kombi Vario-Finanzierung" src="./images/5ES__(1).PNG" style="display: block;">  
</figure>  
  
<strong class="carType h2 strong">  
Audi A6 Kombi Vario-Finanzierung  
</strong>  
<span class="sx-b2cl-offerlist-offerprice">  
<span class="sx-b2cl-offerlist-button">  
<span class="nButton">  
<span class="">  
  
<small class="priceAb">ab </small>  
<strong>397 €</strong>  
  
<br><small class="nButtonDescription">zum Angebot</small>  
</span>  
</span>  
</span>  
</span></a>  
</li><li class="setInstantcar"><div class="instantcar-promo">  
<a href="#" title="" class="instantcar-promo-url" rel="nofollow">  
<span class="instantcar-promo-arrow">  
<i class="repeatX tippLeftSide"></i>  
<span class="repeatX tippText">sofort verfügbar</span>  
<i class="repeatX tippRightSide"></i>  
</span>  
<span class="instantcar-promo-result">  
<strong class="instantcar-promo-number">16</strong>  
Neuwagen sofort verfügbar inkl. Ausstattung  
<span class="instantcar-promo-mira">  
  
ab <strong>725&nbsp;€ </strong> im Monat,  
<span class="small c3" data-infodetail="true" data-layerlocal="c|dark" data-layer="{&quot;of&quot;:&quot;:parent&quot;,&quot;tpl&quot;:&quot;#listViewDetailLayerV .sx-b2cl-tooltipcontent&quot;,&quot;data&quot;:{&quot;delivO&quot;:&quot;851,10\u00a0\u20ac&quot;,&quot;deliveryOnce&quot;:&quot;851,10\u00a0\u20ac&quot;,&quot;delivTitle&quot;:&quot;Abholung beim H\u00e4ndler &quot;,&quot;carName&quot;:&quot;Audi A6 40 TDI S tronic sport Avant&quot;,&quot;svb&quot;:&quot;0,00\u00a0\u20ac&quot;,&quot;te&quot;:&quot;48&quot;,&quot;mrb&quot;:&quot;724,71\u00a0\u20ac&quot;,&quot;pb&quot;:&quot;35.316,00\u00a0\u20ac&quot;,&quot;fpb&quot;:&quot;2.207,25\u00a0\u20ac&quot;,&quot;twopb&quot;:&quot;37.844,43\u00a0\u20ac&quot;,&quot;tb&quot;:&quot;73.160,43\u00a0\u20ac&quot;,&quot;lb&quot;:&quot;73.575,00\u00a0\u20ac&quot;,&quot;vdi&quot;:&quot;4,58\u00a0%&quot;,&quot;vei&quot;:&quot;4,68\u00a0%&quot;,&quot;vlt&quot;:&quot;64.049,60\u00a0\u20ac&quot;,&quot;fEPWL&quot;:true}}">Details zur Finanzierung</span>  
  
</span>  
</span>  
</a></div>  </li><li class="sx-b2cl-category-list-item posRel">  
<a class="baseLink" href="#" data-gaq="true" data-track="data" data-gtm-list="{&quot;name&quot;:&quot;audi a6 limousine&quot;,&quot;brand&quot;:&quot;audi&quot;,&quot;id&quot;:&quot;g-11-15-sa&quot;,&quot;modell&quot;:&quot;a6&quot;,&quot;price&quot;:&quot;339.68&quot;,&quot;list&quot;:&quot;strang-modell&quot;,&quot;position&quot;:2}">  
<span class="unitRight">  
  
<span class="toolTipIcon" data-infodetail="true" data-layerlocal="c|dark" data-layer="{&quot;of&quot;:&quot;:parent:parent span.nButton&quot;,&quot;myAt&quot;:&quot;right-10 top-3|left top&quot;,&quot;tpl&quot;:&quot;#listViewDetailLayerV .sx-b2cl-tooltipcontent&quot;,&quot;data&quot;:{&quot;delivO&quot;:&quot;851,10\u00a0\u20ac&quot;,&quot;deliveryOnce&quot;:&quot;851,10\u00a0\u20ac&quot;,&quot;delivTitle&quot;:&quot;Abholung beim H\u00e4ndler &quot;,&quot;carName&quot;:&quot;Audi A6 35 TDI S tronic&quot;,&quot;svb&quot;:&quot;0,00\u00a0\u20ac&quot;,&quot;te&quot;:&quot;48&quot;,&quot;mrb&quot;:&quot;404,22\u00a0\u20ac&quot;,&quot;pb&quot;:&quot;21.375,01\u00a0\u20ac&quot;,&quot;fpb&quot;:&quot;1.425,00\u00a0\u20ac&quot;,&quot;twopb&quot;:&quot;21.678,66\u00a0\u20ac&quot;,&quot;tb&quot;:&quot;43.053,67\u00a0\u20ac&quot;,&quot;lb&quot;:&quot;47.500,00\u00a0\u20ac&quot;,&quot;vdi&quot;:&quot;4,17\u00a0%&quot;,&quot;vei&quot;:&quot;4,34\u00a0%&quot;,&quot;vlt&quot;:&quot;38.062,60\u00a0\u20ac&quot;,&quot;fEPWL&quot;:true}}"><small class="small c3">Details zur Finanzierung</small></span>  
  
</span><figure class="itemImage ">  
<img class="itemImage" alt="Audi A6 Limousine Vario-Finanzierung" src="./images/4SA__.PNG" style="display: block;">  
</figure>  
  
<strong class="carType h2 strong">  
Audi A6 Limousine Vario-Finanzierung  
</strong>  
<span class="sx-b2cl-offerlist-offerprice">  
<span class="sx-b2cl-offerlist-button">  
<span class="nButton">  
<span class="">  
  
<small class="priceAb">ab </small>  
<strong>405 €</strong>  
  
<br><small class="nButtonDescription">zum Angebot</small>  
</span>  
</span>  
</span>  
</span></a>  
</li></ul>  
<div class="clearfix topContent">  
<p>Mit einer Audi A6 Vario-Finanzierung unternimmt man einen regelrechten Ausflug in die automobile Zukunft, die in diesem Fall bereits die Gegenwart darstellt. Gemeint ist damit, dass es sich um einen echten Innovationsträger handelt und nahezu die komplette Bedienung über Touchscreens erfolgt. Hierzu passt das innovative Modell der Nutzung, denn eine Vario-Finanzierung bedeutet, dass das Fahrzeug nach Ablauf eines zuvor festgelegten Zeitraums zum Festpreis übernommen oder zurückgegeben werden kann. Mit anderen Worten besteht maximale Flexibilität. Das wirkt sich auch auf den Innenraum aus, das vor allem in der Ausführung als Audi A6 Avant jede Menge Platz bietet. Bis zu 1.680 Liter lassen sich bei umgelegten Rücksitzen in das Fahrzeug packen. Apropos Avant: ungewöhnlich an dieser Ausführung ist die große Ähnlichkeit zur Limousine, die bis zur B-Säule identisch daherkommt. Entsprechend kommen in beiden Ausführungen auch Annehmlichkeiten wie die Ambientebeleuchtung in bis zu 30 Farben oder besondere Komfortsitze zum Einsatz. Dass Letztere natürlich auch in Leder zu haben sind, versteht sich von selbst.</p>

<h2>Audi A6 Vario-Finanzierung  maximale Sicherheit</h2>
 <p>Herausragend am Audi A6 und der damit verbundenen Vario-Finanzierung ist auch das Sicherheitskonzept. Dieses kommt in 39 unterschiedlichen Assistenzsystemen zum Ausdruck, zu denen beispielsweise gleich fünf Kameras zur Unterstützung des Einparkens gehören. Ebenfalls überzeugt der Ingolstädter mit einem Head-Up-Display und lässt auch das virtuelle Cockpit nicht vermissen. Autonomes Fahren ist bis Stufe 3 möglich und natürlich fehlen  Spurhalte- und Spurwechselassistent ebenso wenig wie Audi pre sense, ein Nachtsichtassistent, Rückfahrkamera, Ausstiegswarnung und eine Verkehrszeichenerkennung auf Kamerabasis.</p>

<h3>Das Audi A6 auf einen Blick:</h3>
<ul>
<li>- HD Matrix-LED-Scheinwerfer</li>
<li>- Allradlenkung</li>
<li>- zahlreiche Touchscreens</li>
</ul></div>  
<div class="financeExampleWrapper pbxl mbxl     nDetailBox accordionBox"><h2 class="accordionHead">Audi A6 Vario-Finanzierungsbeispiel</h2><div class="detailInfoLayerContent detailLayer accordionContent" style="display: none; height: 0px;" data-detailinfolayercontent=""><div class="innerContent"><span class="block strong mbs" data-placehold="title"></span><hr><table class="sx-b2cl-tooltipcontent-calcTable mbm" cellpadding="0" cellspacing="0"><tbody><tr><td colspan="2" class="tdx clearfix pvs txtR">  
<span class="unit">Finanzierungsinstitut</span>  
<span class="unitRight size1of2">  
Sixt Leasing SE<br>  
Zugspitzstraße 1<br>  
82049 Pullach</span></td></tr><tr><td colspan="2" class="tdx clearfix">  
<span class="unit prl">Vertragsart</span>  
<span class="unitRight size2of3 txtR">Kilometerleasingvertrag mit Kaufoption</span></td></tr></tbody></table><hr><span class="strong block mbs mtm">Finanzierungsbeispiel</span>  
<span class="block mbl">(alle Preisangaben inkl. MwSt.)</span><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><colgroup><col width="65%"><col width="35%"></colgroup><tbody><tr><td width="155" class="td">Vertragslaufzeit</td><td width="85" class="td calcTable-calcPrice"><span id="sx-js-months" data-placehold="ld">48</span> Monate</td></tr><tr><td class="td"><span id="sx-js-months" data-placehold="ld">48</span> Monatsraten<sup class="sup" data-fepwl="true">1</sup> à</td><td class="td calcTable-calcPrice">  
<span id="sx-mrat-info-display" class="sx-js-b2cl-monthly-rate-price" data-placehold="mrb">  
397,00&nbsp;€  
</span></td></tr><tr><td width="155" class="td">Einmalige Sonderzahlung</td><td width="85" class="td calcTable-calcPrice">  
<span id="sx-sozp-info-display" class="sx-js-b2cl-buying-price" data-placehold="svb">  
0,00&nbsp;€  
</span></td></tr><tr class="delivery-once" data-fepwl="true"><td class="td">Überführungskosten (einmalig)<sup class="sup">1</sup></td><td class="td calcTable-calcPrice"><span id="sx-delivery-info-display" class="sx-js-b2cl-delivery-price" data-placehold="delivO">  
851,10&nbsp;€  
</span></td></tr><tr><td class="td calcTable-kfgn lastRow">Schlusszahlung</td><td class="td calcTable-kfgn calcTable-calcPrice lastRow">  
<span id="sx-kfgn-info-display" class="sx-js-b2cl-kfgn-price" data-placehold="fpb">  
1.500,00&nbsp;€  
</span></td></tr><tr><td class="td">Preis bei Ausübung der Kaufoption</td><td class="td calcTable-calcPrice">  
<span id="sx-vkpr-info-display" class="sx-js-b2cl-final-rate-price" data-placehold="pb">  
24.000,00&nbsp;€  
</span></td></tr>  
<tr><td class="td"></td><td class="td pvm"></td></tr><tr><td class="td calcTable-result">Gesamtpreis</td><td class="td calcTable-result calcTable-calcPrice">  
<span id="sx-total-info-display" class="sx-js-b2cl-total-price" data-placehold="tb">  
45.407,10&nbsp;€  
</span></td></tr><tr><td colspan="2">&nbsp;</td></tr><tr><td class="td calcTable-result">Gesamtpreis ohne Ausübung der Kaufoption</td><td class="td calcTable-result calcTable-calcPrice">  
<span id="sx-total-info-display" class="sx-js-b2cl-total-price" data-placehold="tb">  
21.407,10&nbsp;€  
</span></td></tr><tr><td colspan="2">&nbsp;</td></tr>  
<tr><td class="calcTable-debitInterest">Sollzinssatz pro Jahr<sup class="sup">2</sup></td><td class="calcTable-debitInterest calcTable-calcPrice">  
<span id="sx-debitInterest-info-display" class="sx-js-b2cl-total-price" data-placehold="vdi">  
4,18 %  
</span></td></tr><tr><td class="calcTable-effectiveInterest">Effektiver Jahreszins</td><td class="calcTable-effectiveInterest calcTable-calcPrice">  
<span id="sx-effectiveInterest-info-display" class="sx-js-b2cl-total-price" data-placehold="vei">  
4,34 %  
</span></td></tr><tr><td class="calcTable-loanTotal">Nettodarlehensbetrag (Anschaffungspreis)<sup class="sup">3</sup></td><td class="calcTable-loanTotal calcTable-calcPrice">  
<span id="sx-loanTotal-info-display" class="sx-js-b2cl-total-price" data-placehold="vlt">  
40.025,10&nbsp;€  
</span></td></tr><tr><td colspan="2">&nbsp;</td></tr><tr><td class="calcTable-total-price">Listenpreis<sup class="sup">4</sup></td><td class="calcTable-total-price calcTable-calcPrice">  
<span id="sx-lipr-info-display" class="sx-js-b2cl-total-price" data-placehold="lb">  
50.000,00&nbsp;€  
</span></td></tr></tbody></table><ul class="small varioFootnote clearfix mtm"><li><sup>1</sup>  
<span data-fepwl="true">  
inkl.  
</span>  
Überführungskosten  
<span data-placehold="delivTitle">Abholung beim Händler </span></li><li><sup>2</sup>  
Gebunden für die gesamte Vertragslaufzeit.</li><li><sup>3</sup>  
Der Anschaffungspreis bezeichnet den Preis, den die Sixt Leasing SE für das Kfz zu bezahlen hat.</li><li><sup>4</sup>  
Unverbindliche Preisempfehlung des Herstellers. Änderungen und Irrtümer vorbehalten.  
Farbe und Ausstattung können vom Angebot abweichen. Kostenpflichtige Sonderausstattung möglich.</li></ul></div></div></div><div class="">  
<small class="small">  
  
Alle Audi A6   
Vario-Finanzierung Angebote mit 0% Anzahlung, exklusive Überführungskosten  
und <span class="mwstTxtSwitch" data-mwsttxtswitch="ohne MwSt.">inkl. 19 % MwSt.</span> zu einer Laufzeit von 48 Monaten  
und einer Laufleistung von 10000 km/Jahr.  
  Audi A6 Vario-Finanzierung Abbildungen zeigen ggf. kostenpflichtige Sonderausstattungen, die nicht im Angebot enthalten sind. * Preisänderungen und Irrtümer vorbehalten.     
</small></div></div>  </div></div>  
<div class="split-redesign">  
<footer class="page-footer " data-selector="page-footer"><div class="container">  
<div class="row">  
<section class="clearfix newsletter-box col-xs-12 col-sm-9" data-view="newsletter"><div class="h1">Sixt-Neuwagen Newsletter abonnieren</div><p>  
Erhalten Sie die besten Neuwagen-Angebote kostenlos und unverbindlich per E-Mail.</p><form class="newsletter-form form-inline mvs" action="https://www.sixt-neuwagen.de/php/leaseb2c/json/newslettersubscribe" method="get">  
<input type="email" class="form-control" placeholder="Bitte geben Sie Ihre E-Mail-Adresse ein" required="required" data-target="#collapseNl_0" aria-expanded="false" aria-controls="collapseNl_0" data-original-title="" title=""><button class="btn" type="submit">  
<span class="text h3">Jetzt anmelden</span>  
</button><div class="collapse collapse-nl" id="collapseNl_0"><div class="well">  
<span aria-hidden="true" class="close">×</span><div><div class="clearfix">  
<input type="checkbox" value="1" name="newsletterSubscriptionEmail" class="pull-left" id="newsletterSubscriptionEmail_0" required="required">  
<label class="label pull-left" for="newsletterSubscriptionEmail_0">Ich stimme der Verarbeitung meiner Daten gemäß der <a href="#" target="_blank">Datenschutzhinweise</a> der Sixt Leasing SE zum Zweck der Personalisierung des Newsletters zu. Ich kann diese Einwilligung jederzeit mit Wirkung für die Zukunft widerrufen.</label></div></div></div></div></form>    
</section>  <section class="phone col-xs-6 col-sm-3"><div class="h1">Expertenberatung</div>  
  
<svg viewBox="0 0 19 19" id="iconPhone" xmlns="http://www.w3.org/2000/svg">
    <path d="M 18 8 C 17.7 8 17.5 7.8 17.5 7.5 C 17.4 5.7 16.6 4.1 15.3 2.9 C 14 1.7 12.3 1.1 10.5 1.3 C 10.2 1.3 10 1.1 10 0.8 C 10 0.5 10.2 0.3 10.5 0.3 C 14.7 0 18.3 3.2 18.6 7.4 C 18.5 7.7 18.3 8 18 8 C 18 8 18 8 18 8 Z M 15.5 8.2 C 15.8 8.2 16 7.9 16 7.7 C 15.8 4.9 13.4 2.7 10.6 2.9 C 10.3 2.9 10.1 3.2 10.1 3.4 C 10.1 3.7 10.3 3.9 10.6 3.9 C 12.9 3.7 14.8 5.5 15 7.8 C 15 8 15.2 8.2 15.5 8.2 C 15.5 8.2 15.5 8.2 15.5 8.2 Z M 13.2 8.5 C 13.5 8.5 13.7 8.2 13.7 8 C 13.7 7.2 13.3 6.5 12.7 6 C 12.1 5.5 11.4 5.2 10.6 5.3 C 10.3 5.3 10.1 5.6 10.1 5.8 C 10.1 6.1 10.3 6.3 10.6 6.3 C 11.1 6.3 11.6 6.4 12 6.8 C 12.4 7.2 12.6 7.6 12.7 8.2 C 12.7 8.3 12.9 8.5 13.2 8.5 C 13.1 8.5 13.1 8.5 13.2 8.5 Z M 13.8 14.7 C 11.8 13.1 11.2 13.9 10.3 14.8 C 9.7 15.4 8 14.1 6.6 12.7 C 5.2 11.3 3.8 9.7 4.5 9 C 5.4 8.1 6.2 7.5 4.6 5.5 C 3 3.5 1.9 5 1 5.9 C 0 6.9 0.9 10.8 4.8 14.6 C 8.6 18.4 12.5 19.4 13.5 18.4 C 14.2 17.4 15.8 16.3 13.8 14.7 Z" data-bx-origin="0.5 0.5"></path>
</svg>  
<span class="color-orange h2 number mvs" style="display: inline-block" x-ms-format-detection="none">  
089 / 30 700 700</span>  
<div class="mts">  
Mo. bis Fr.: 8 bis 20 Uhr,  
<br>  
Sa.: 8 bis 19 Uhr</div>  
</section>  <section class="follow-us col-xs-6 hidden-sm hidden-md hidden-lg"><div class="h2 ">Folgen Sie uns</div>  
<a href="#" target="_blank">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="38" height="38"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="iconFacebook" viewBox="0 0 25 25">
  <path class="st0" d="M24.5,12.5c0-6.6-5.4-12-12-12s-12,5.4-12,12s5.4,12,12,12S24.5,19.1,24.5,12.5z M1.6,12.5
        c0-6,4.9-10.9,10.9-10.9s10.9,4.9,10.9,10.9s-4.9,10.9-10.9,10.9S1.6,18.5,1.6,12.5z M13,19.4v-6.9h2.3l0.4-2.3H13V9.1
        c0-0.6,0.2-1.2,1.1-1.2h1.7V5.6h-2.4c-2.1,0-2.6,1.4-2.6,3.2v1.4H9.3v2.3h1.4v6.9H13z"></path>
</svg></svg>  
</a>  
<a href="#" target="_blank">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="38" height="38"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="iconYoutube" viewBox="0 0 25 25">
  <path class="st0" d="M12.5,0.5c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S19.1,0.5,12.5,0.5z M12.5,23.4
        c-6,0-10.9-4.9-10.9-10.9S6.5,1.6,12.5,1.6s10.9,4.9,10.9,10.9S18.5,23.4,12.5,23.4z M14.3,15.4v1.9c0,0.4-0.1,0.6-0.4,0.6
        c-0.1,0-0.3-0.1-0.4-0.2V15c0.1-0.1,0.3-0.2,0.4-0.2C14.2,14.7,14.3,15,14.3,15.4z M17,14.7c-0.3,0-0.4,0.2-0.4,0.6v0.4h0.8v-0.4
        C17.4,15,17.3,14.7,17,14.7z M19.2,15.8c0,1,0,2.2-0.2,3.2c-0.2,0.7-0.7,1.2-1.4,1.3c-1.7,0.2-3.3,0.2-5,0.2s-3.4,0-5-0.2
        c-0.7-0.1-1.3-0.6-1.4-1.3C6,18,6,16.9,6,15.8c0-1,0-2.2,0.2-3.2c0.2-0.7,0.7-1.2,1.4-1.3c1.7-0.2,3.3-0.2,5-0.2s3.4,0,5,0.2
        c0.7,0.1,1.3,0.6,1.4,1.3C19.2,13.6,19.2,14.7,19.2,15.8z M9.6,12.5H6.8v0.8h1v5.1h0.9v-5.1h1L9.6,12.5L9.6,12.5z M12.1,14.1h-0.8
        v3.4c-0.2,0.3-0.3,0.4-0.5,0.4c-0.1,0-0.2-0.1-0.2-0.2c0,0,0-0.1,0-0.3v-3.3H9.7v3.5c0,0.3,0,0.5,0.1,0.7s0.3,0.3,0.5,0.3
        c0.3,0,0.6-0.2,0.9-0.5v0.5H12v-4.5H12.1z M15.1,15.4c0-0.4,0-0.7-0.1-0.9c0-0.3-0.3-0.5-0.6-0.5s-0.6,0.2-0.8,0.5v-2h-0.8v6h0.8
        v-0.4c0.3,0.3,0.5,0.5,0.8,0.5s0.5-0.2,0.6-0.5c0.1-0.2,0.1-0.5,0.1-0.9V15.4z M18.2,15.5c0-0.5-0.1-0.8-0.3-1.1
        c-0.2-0.3-0.5-0.5-1-0.5c-0.4,0-0.7,0.2-1,0.5c-0.2,0.2-0.2,0.6-0.2,1.1v1.6c0,0.5,0.1,0.8,0.3,1c0.2,0.3,0.6,0.5,1,0.5
        s0.8-0.2,1-0.5c0.1-0.1,0.2-0.3,0.2-0.5c0-0.1,0-0.3,0-0.5V17h-0.8c0,0.3,0,0.5,0,0.5c0,0.2-0.2,0.3-0.4,0.3c-0.3,0-0.4-0.2-0.4-0.6
        v-0.8h1.6C18.2,16.4,18.2,15.5,18.2,15.5z M12.9,6.5c-0.2-0.3-0.5-0.5-1-0.5c-0.4,0-0.7,0.2-1,0.5c-0.2,0.2-0.3,0.6-0.3,1.1v1.6
        c0,0.5,0.1,0.8,0.3,1.1s0.5,0.5,1,0.5c0.4,0,0.7-0.2,1-0.5c0.2-0.2,0.3-0.6,0.3-1.1V7.6C13.2,7.1,13.1,6.7,12.9,6.5z M12.3,9.3
        c0,0.4-0.1,0.6-0.4,0.6c-0.3,0-0.4-0.2-0.4-0.6V7.4c0-0.4,0.1-0.6,0.4-0.6c0.3,0,0.4,0.2,0.4,0.6V9.3z M13.8,6.1h0.8v3.3
        c0,0.2,0,0.3,0,0.3c0,0.1,0.1,0.2,0.2,0.2c0.2,0,0.3-0.1,0.5-0.4V6.1h0.8v4.5h-0.8v-0.5c-0.3,0.4-0.6,0.6-0.9,0.6
        c-0.3,0-0.4-0.1-0.5-0.3c0-0.1-0.1-0.4-0.1-0.7V6.1L13.8,6.1z M8.6,4.6L9.2,7l0.6-2.4h0.9L9.6,8.2v2.5H8.7V8.2
        c0-0.5-0.2-1.1-0.5-1.9C8,5.7,7.8,5.1,7.6,4.6H8.6z"></path>
</svg>
</svg>  
</a>  
</section>  </div><div class="row">  
<section class="footer-nav col-xs-12 col-sm-6">  
<div class="row"><div class="col-xs-6"><div class="h2">Unternehmen</div><ul class="list-unstyled"><li><a href="#" target="_blank" rel="nofollow">Karriere</a></li><li><a href="#" target="_blank" rel="nofollow">Konzern</a></li><li><a href="#" target="_blank">Affiliate</a></li><li><a href="#" target="_blank">Impressum</a></li><li><a href="#" target="_blank">Datenschutz</a></li><li><a href="#" target="_blank">AGB</a></li></ul></div><div class="col-xs-6"><div class="h2">Service</div><ul class="list-unstyled"><li><a href="#" target="_blank">FAQ</a></li><li><a href="#" target="_blank">Kontakt</a></li><li><a href="#" target="_blank">Freundschaftswerbung</a></li></ul></div></div>  
  
</section>  <section class="follow-us hidden-xs col-sm-3"><div class="h2 ">Folgen Sie uns</div>  
<a href="#" target="_blank">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="38" height="38"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="iconFacebook" viewBox="0 0 25 25">
  <path class="st0" d="M24.5,12.5c0-6.6-5.4-12-12-12s-12,5.4-12,12s5.4,12,12,12S24.5,19.1,24.5,12.5z M1.6,12.5
        c0-6,4.9-10.9,10.9-10.9s10.9,4.9,10.9,10.9s-4.9,10.9-10.9,10.9S1.6,18.5,1.6,12.5z M13,19.4v-6.9h2.3l0.4-2.3H13V9.1
        c0-0.6,0.2-1.2,1.1-1.2h1.7V5.6h-2.4c-2.1,0-2.6,1.4-2.6,3.2v1.4H9.3v2.3h1.4v6.9H13z"></path>
</svg></svg>  
</a>  
<a href="#" target="_blank">  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="38" height="38"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="iconYoutube" viewBox="0 0 25 25">
  <path class="st0" d="M12.5,0.5c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S19.1,0.5,12.5,0.5z M12.5,23.4
        c-6,0-10.9-4.9-10.9-10.9S6.5,1.6,12.5,1.6s10.9,4.9,10.9,10.9S18.5,23.4,12.5,23.4z M14.3,15.4v1.9c0,0.4-0.1,0.6-0.4,0.6
        c-0.1,0-0.3-0.1-0.4-0.2V15c0.1-0.1,0.3-0.2,0.4-0.2C14.2,14.7,14.3,15,14.3,15.4z M17,14.7c-0.3,0-0.4,0.2-0.4,0.6v0.4h0.8v-0.4
        C17.4,15,17.3,14.7,17,14.7z M19.2,15.8c0,1,0,2.2-0.2,3.2c-0.2,0.7-0.7,1.2-1.4,1.3c-1.7,0.2-3.3,0.2-5,0.2s-3.4,0-5-0.2
        c-0.7-0.1-1.3-0.6-1.4-1.3C6,18,6,16.9,6,15.8c0-1,0-2.2,0.2-3.2c0.2-0.7,0.7-1.2,1.4-1.3c1.7-0.2,3.3-0.2,5-0.2s3.4,0,5,0.2
        c0.7,0.1,1.3,0.6,1.4,1.3C19.2,13.6,19.2,14.7,19.2,15.8z M9.6,12.5H6.8v0.8h1v5.1h0.9v-5.1h1L9.6,12.5L9.6,12.5z M12.1,14.1h-0.8
        v3.4c-0.2,0.3-0.3,0.4-0.5,0.4c-0.1,0-0.2-0.1-0.2-0.2c0,0,0-0.1,0-0.3v-3.3H9.7v3.5c0,0.3,0,0.5,0.1,0.7s0.3,0.3,0.5,0.3
        c0.3,0,0.6-0.2,0.9-0.5v0.5H12v-4.5H12.1z M15.1,15.4c0-0.4,0-0.7-0.1-0.9c0-0.3-0.3-0.5-0.6-0.5s-0.6,0.2-0.8,0.5v-2h-0.8v6h0.8
        v-0.4c0.3,0.3,0.5,0.5,0.8,0.5s0.5-0.2,0.6-0.5c0.1-0.2,0.1-0.5,0.1-0.9V15.4z M18.2,15.5c0-0.5-0.1-0.8-0.3-1.1
        c-0.2-0.3-0.5-0.5-1-0.5c-0.4,0-0.7,0.2-1,0.5c-0.2,0.2-0.2,0.6-0.2,1.1v1.6c0,0.5,0.1,0.8,0.3,1c0.2,0.3,0.6,0.5,1,0.5
        s0.8-0.2,1-0.5c0.1-0.1,0.2-0.3,0.2-0.5c0-0.1,0-0.3,0-0.5V17h-0.8c0,0.3,0,0.5,0,0.5c0,0.2-0.2,0.3-0.4,0.3c-0.3,0-0.4-0.2-0.4-0.6
        v-0.8h1.6C18.2,16.4,18.2,15.5,18.2,15.5z M12.9,6.5c-0.2-0.3-0.5-0.5-1-0.5c-0.4,0-0.7,0.2-1,0.5c-0.2,0.2-0.3,0.6-0.3,1.1v1.6
        c0,0.5,0.1,0.8,0.3,1.1s0.5,0.5,1,0.5c0.4,0,0.7-0.2,1-0.5c0.2-0.2,0.3-0.6,0.3-1.1V7.6C13.2,7.1,13.1,6.7,12.9,6.5z M12.3,9.3
        c0,0.4-0.1,0.6-0.4,0.6c-0.3,0-0.4-0.2-0.4-0.6V7.4c0-0.4,0.1-0.6,0.4-0.6c0.3,0,0.4,0.2,0.4,0.6V9.3z M13.8,6.1h0.8v3.3
        c0,0.2,0,0.3,0,0.3c0,0.1,0.1,0.2,0.2,0.2c0.2,0,0.3-0.1,0.5-0.4V6.1h0.8v4.5h-0.8v-0.5c-0.3,0.4-0.6,0.6-0.9,0.6
        c-0.3,0-0.4-0.1-0.5-0.3c0-0.1-0.1-0.4-0.1-0.7V6.1L13.8,6.1z M8.6,4.6L9.2,7l0.6-2.4h0.9L9.6,8.2v2.5H8.7V8.2
        c0-0.5-0.2-1.1-0.5-1.9C8,5.7,7.8,5.1,7.6,4.6H8.6z"></path>
</svg>
</svg>  
</a>  
</section>  <section class="seals-box col-xs-12 col-sm-3"><div class="h2">Getestet von:</div>  
<a title="eKomi - The Feedback Company: Zeitnahe Beantwortung aller Fragen sachkundig und kompetent, tolles Preis-Leistungs-Verhältnis" target="_blank" rel="nofollow" href="#"><img width="62" height="62" src="./images/ekomi_logo-70x70.png" alt="eKomi - The Feedback Company: Zeitnahe Beantwortung aller Fragen sachkundig und kompetent, tolles Preis-Leistungs-Verhältnis">  
</a>  
<img src="./images/tuevPrice.jpg" class="mls" width="113" height="62">  
</section>  </div>  
  <div class="clearfix small mtxl">  
<p>Alle Angebote mit 0% Anzahlung, exklusive Überführungskosten  
und <span data-text="mwst">inkl. 19 % MwSt.</span> zu einer  
Laufzeit von 48 Monaten und einer Laufleistung von 10000 km/Jahr. Die verwendeten Bilder zeigen  
Beispiele des jeweiligen Modells. Farbe und Ausstattung können vom Angebot abweichen.  
Kostenpflichtige Sonderausstattung möglich. * Preisänderungen und Irrtümer vorbehalten.</p><p>  
Weitere Informationen zum offiziellen Kraftstoffverbrauch und den offiziellen spezifischen  
CO<sub>2</sub>-Emissionen neuer Personenkraftwagen können dem Leitfaden über den Kraftstoffverbrauch  
und die CO<sub>2</sub>-Emissionen neuer Personenkraftwagen entnommen werden, der an allen  
Verkaufsstellen und bei der Deutschen Automobiltreuhand GmbH unter www.dat.de unentgeltlich  
erhältlich ist.</p></div>  
</div>  
</footer>  <div data-role="loaderIcon" class="loader">  
<!--[if lte IE 9]><div class="loader-ie-table loader-wrap"><div class="loader-ie-cell">  
<img src="/static/leaseb2c/AppRedesign/img/gifSpinner_200x200.gif" class="loader-ie-icon"></div></div>  
<!--[if !IE]> --><div class="loader-wrap">  
<img src="./images/svgSpinner.svg" class="loader-icon"></div>  
<!--[endif]----></div>  </div>  
<div class="nHide"><div class="pollLayer"><div class="pollLayerContent paxl"><div class="txtC">  
<span class="inlBlock surveySprite"></span></div><h2 style="padding:5px 0;margin-bottom:5px;border-bottom: 1px solid #ccc">Ihre Meinung ist uns wichtig.</h2><p class="c6">Verbessern Sie mit uns gemeinsam unsere Website.</p><p class="mbl c6">Wir freuen uns, wenn Sie sich wenige Minuten Zeit nehmen und einige einfache Fragen beantworten.</p><div class="mbl">  
<a href="#" target="_blank" rel="nofollow" data-gaq="Werbemittel" data-track="MaFo-Layer-teilnehmen" class="inlBlock pollLink pollProminentSend txtC c2 pam">zur Umfrage</a>  
<a class="inlBlock laterLink pollProminentSend txtC c2 pam" data-gaq="Werbemittel" data-track="MaFo-Layer-spaeter-teilnehmen">später teilnehmen</a></div>  
<small class="inlBlock mbs c6">Ihre Angaben werden natürlich vertraulich behandelt und anonymisiert ausgewertet.</small></div></div></div>  <div class="newsletterLayer"></div><div class="nHide newsletterLayerContent"><div class="nHide simpleLayerContent"></div></div></div><div style="display: none; visibility: hidden; opacity: 0;" id="listViewDetailLayerV">  
<div class="sx-b2cl-tooltipcontent" id="tabVarioTable" data-role="detailLayer-V"><div class="detailLayer">  
<span class="block strong mbs detailLayer-carName">[%= carName %]</span><hr><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><tbody><tr><td class="td1">Finanzierungsinstitut</td><td class="calcTable-calcPrice">  
Sixt Leasing SE<br>  
Zugspitzstraße 1<br>  
82049 Pullach</td></tr><tr><td class="td1">Vertragsart</td><td class="calcTable-calcPrice">Kilometerleasingvertrag mit Kaufoption</td></tr></tbody></table><hr>  
<span class="strong block mtm">Finanzierungsbeispiel</span>  
<span class="block mbl">  
(alle Preisangaben inkl. MwSt.)  
</span><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><colgroup><col width="75%"><col width="25%"></colgroup><tbody><tr><td class="td">Vertragslaufzeit</td><td class="td calcTable-calcPrice"><span class="sx-js-b2cl-te-value">[%= te %] Monate</span></td></tr><tr><td class="td"><span id="sx-js-months">[%= te %]</span> Monatsraten<sup class="sup" data-fepwl="[%= fEPWL %]">1</sup> à</td><td class="td calcTable-calcPrice"><span id="sx-mrat-info-display" class="sx-js-b2cl-monthly-rate-price">[%= mrb %]</span></td></tr><tr><td class="td">Einmalige Sonderzahlung</td><td class="td calcTable-calcPrice"><span id="sx-sozp-info-display" class="sx-js-b2cl-buying-price">[%= svb %]</span></td></tr><tr class="delivery-once" data-fepwl="[%= fEPWL %]"><td class="td">Überführungskosten (einmalig)<sup class="sup">1</sup></td><td class="td calcTable-calcPrice"><span id="sx-sozp-info-display" class="sx-js-b2cl-delivery-price">[%= delivO %]</span></td></tr><tr><td class="td calcTable-kfgn">Schlusszahlung</td><td class="td calcTable-kfgn calcTable-calcPrice"><span id="sx-kfgn-info-display" class="sx-js-b2cl-kfgn-price">[%= fpb %]</span></td></tr><tr><td class="td calcTable-purchaseOption">  
Preis bei Ausübung der Kaufoption</td><td class="td calcTable-purchaseOption txtR">  
<span id="sx-vkpr-info-display">[%= pb %]</span></td></tr><tr><td class="td"></td><td class="td"><hr></td></tr><tr><td class="td calcTable-result">Gesamtbetrag</td><td class="td calcTable-result calcTable-calcPrice"><span id="sx-total-info-display" class="sx-js-b2cl-total-price">[%= tb %]</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="td calcTable-result">Gesamtbetrag ohne Ausübung der Kaufoption</td><td class="td calcTable-result calcTable-calcPrice"><span id="sx-total-wop-info-display" class="sx-js-b2cl-total-wop-price">[%= twopb %]</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-debitInterest">Sollzinssatz pro Jahr<sup class="sup">2</sup></td><td class="calcTable-debitInterest calcTable-calcPrice"><span id="sx-debitInterest-info-display" class="sx-js-b2cl-total-price">[%= vdi %]</span></td></tr><tr><td class="calcTable-effectiveInterest">Effektiver Jahreszins</td><td class="calcTable-effectiveInterest calcTable-calcPrice"><span id="sx-effectiveInterest-info-display" class="sx-js-b2cl-total-price">[%= vei %]</span></td></tr><tr><td class="calcTable-loanTotal">Nettodarlehensbetrag (Anschaffungspreis)<sup class="sup">3</sup></td><td class="calcTable-loanTotal calcTable-calcPrice"><span id="sx-loanTotal-info-display" class="sx-js-b2cl-total-price">[%= vlt %]</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-total-price">Listenpreis<sup class="sup">4</sup></td><td class="calcTable-total-price calcTable-calcPrice"><span id="sx-lipr-info-display" class="sx-js-b2cl-total-price">[%= lb %]</span></td></tr></tbody></table><ul class="varioFootnote unit clearfix mtm"><li>  
<sup class="sup">1</sup>  
<span data-fepwl="[%= fEPWL %]">  
inkl.  
</span>  
Überführungskosten  
[%= delivTitle %]</li><li>  
<sup class="sup">2</sup>  
Gebunden für die gesamte Vertragslaufzeit.</li><li>  
<sup class="sup">3</sup>  
Der Anschaffungspreis bezeichnet den Preis, den die Sixt Leasing SE für das Kfz zu bezahlen hat.</li><li>  
<sup class="sup">4</sup>  
Unverbindliche Preisempfehlung des Herstellers. Änderungen und Irrtümer vorbehalten.  
Farbe und Ausstattung können vom Angebot abweichen. Kostenpflichtige Sonderausstattung möglich.</li></ul>  <span class="nLink sxTooltipClose">Schließen</span></div></div>  </div><div style="display: none; visibility: hidden; opacity: 0;" id="listViewDetailLayerL">  
<div class="sx-b2cl-tooltipcontent" id="tabLeasingTable" data-role="detailLayer-L"><div class="detailLayer">  
<span class="block strong mbs detailLayer-carName">[%= carName %]</span><hr><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><tbody><tr><td class="td1">Finanzierungsinstitut</td><td class="calcTable-calcPrice">  
Sixt Leasing SE<br>  
Zugspitzstraße 1<br>  
82049 Pullach</td></tr><tr><td class="td1">Vertragsart</td><td class="calcTable-calcPrice">Kilometerleasingvertrag</td></tr></tbody></table><hr>  
<span class="strong block mbs mtm">Finanzierungsbeispiel</span>  
<span class="block mbl">  
(alle Preisangaben inkl. MwSt.)  
</span><table class="sx-b2cl-tooltipcontent-calcTable" cellpadding="0" cellspacing="0"><colgroup><col width="75%"><col width="25%"></colgroup><tbody><tr><td width="155" class="td">Vertragslaufzeit</td><td width="85" class="td calcTable-calcPrice"><span class="sx-js-b2cl-te-value">[%= te %] Monate</span></td></tr><tr><td class="td"><span id="sx-js-L-months">[%= te %]</span> Monatsraten<sup class="sup" data-fepwl="[%= fEPWL %]">1</sup> à</td><td class="td calcTable-calcPrice"><span id="sx-mrat-L-info-display" class="sx-js-b2cl-monthly-rate-price">[%= mrb %]</span></td></tr><tr><td width="155" class="td">Einmalige Sonderzahlung</td><td width="85" class="td calcTable-calcPrice"><span id="sx-sozp-L-info-display" class="sx-js-b2cl-buying-price">[%= svb %]</span></td></tr><tr class="delivery-once" data-fepwl="[%= fEPWL %]"><td class="td">  
Überführungskosten (einmalig)<sup class="sup">1</sup></td><td class="td calcTable-calcPrice">  
<span id="sx-sozp-info-display" class="sx-js-b2cl-delivery-price">[%= delivO %]</span></td></tr><tr><td class="td"></td><td class="td"><hr></td></tr><tr><td class="td calcTable-result">Gesamtbetrag</td><td class="td calcTable-result calcTable-calcPrice"><span id="sx-total-wop-info-display" class="sx-js-b2cl-total-wop-price">[%= twopb %]</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-debitInterest">Sollzinssatz pro Jahr<sup class="sup">2</sup></td><td class="calcTable-debitInterest calcTable-calcPrice"><span id="sx-debitInterest-L-info-display" class="sx-js-b2cl-total-price">[%= vdi %]</span></td></tr><tr><td class="calcTable-effectiveInterest">Effektiver Jahreszins</td><td class="calcTable-effectiveInterest calcTable-calcPrice"><span id="sx-effectiveInterest-L-info-display" class="sx-js-b2cl-total-price">[%= vei %]</span></td></tr><tr><td class="calcTable-loanTotal">Nettodarlehensbetrag (Anschaffungspreis)<sup class="sup">3</sup></td><td class="calcTable-loanTotal calcTable-calcPrice"><span id="sx-loanTotal-L-info-display" class="sx-js-b2cl-total-price">[%= vlt %]</span></td></tr><tr><td colspan="2" class="td">&nbsp;</td></tr><tr><td class="calcTable-total-price">  
Listenpreis<sup class="sup">4</sup></td><td class="calcTable-total-price calcTable-calcPrice">  
<span id="sx-lipr-L-info-display" class="sx-js-b2cl-total-price">[%= lb %]</span></td></tr></tbody></table><ul class="varioFootnote unit clearfix mtm"><li>  
<sup class="sup">1</sup>  
<span data-fepwl="[%= fEPWL %]">  
inkl.  
</span>  
Überführungskosten  
[%= delivTitle %]</li><li>  
<sup class="sup">2</sup>  
Gebunden für die gesamte Vertragslaufzeit.</li><li>  
<sup class="sup">3</sup>  
Der Anschaffungspreis bezeichnet den Preis, den die Sixt Leasing SE für das Kfz zu bezahlen hat.</li><li>  
<sup class="sup">4</sup>  
Unverbindliche Preisempfehlung des Herstellers. Änderungen und Irrtümer vorbehalten.  
Farbe und Ausstattung können vom Angebot abweichen. Kostenpflichtige Sonderausstattung möglich.</li></ul>  <span class="nLink sxTooltipClose">Schließen</span></div></div>  </div><div id="sxGlobals" data-globals="{&quot;ld&quot;:&quot;48&quot;,&quot;jkm&quot;:&quot;10000&quot;,&quot;sozp&quot;:&quot;0&quot;,&quot;tax&quot;:1.19,&quot;taxPercent&quot;:19,&quot;environment&quot;:&quot;production&quot;,&quot;lvkd&quot;:&quot;P&quot;,&quot;mode&quot;:&quot;V&quot;,&quot;taxAppLocal&quot;:1.19,&quot;noPriceText&quot;:&quot;Auf Anfrage&quot;,&quot;wltpLayerText&quot;:&quot;&lt;p&gt;Bei allen Angaben zu Kraftstoffverbrauchs- und CO-Emissionswerten handelt es sich um die nach dem \&quot;neuen europ\u00e4ischen Fahrzyklus (NEFZ)\&quot; ermittelten Werte gem\u00e4\u00df der Verordnung \u00fcber Verbraucherinformationen zu Kraftstoffverbrauch, CO2-Emissionen und Stromverbrauch neuer Personenkraftwagen (Pkw-Energieverbrauchskennzeichnungsverordnung - Pkw-EnVKV). Diese sieht weiterhin die Angabe der NEFZ-Werte vor, auch wenn f\u00fcr erstmals ab dem 01.09.2018 zugelassene Pkw die Kraftfahrzeugsteuer nach WLTP-Werten berechnet wird, zu denen wir folgende Erl\u00e4uterung geben d\u00fcrfen:\nAb dem 01.09.2018 wird das weltweit harmonisierte Pr\u00fcfverfahren f\u00fcr Personenwagen und leichte Nutzfahrzeuge WLTP (World Harmonised Light Vehicle Test Procedure) zur Messung des Kraftstoffverbrauchs und der CO-Emissionen das bisherige Pr\u00fcfverfahren NEFZ ersetzen. Der Kraftstoffverbrauch und die Abgasemissionen werden dann in einem neuen Testzyklus mit ver\u00e4nderten Testbedingungen gemessen.&lt;\/p&gt; \n&lt;p&gt;Mit der Einf\u00fchrung des WLTP wird die Vergleichbarkeit der offiziellen Verbrauchswerte verbessert. Der bei den Expertengruppen der Vereinten Nationen entwickelte WLTP wird auch in anderen Teilen der Welt gelten. Neben der EU f\u00fchren auch Norwegen, die Schweiz, Island, Israel und die T\u00fcrkei den WLTP ein. Auch in Japan und China soll eine modifizierte Form des WLTP gelten. Indien und S\u00fcdkorea planen ebenfalls die Einf\u00fchrung.&lt;\/p&gt;\n&lt;p&gt;F\u00fcr den Klimaschutz ist es notwendig, die CO-Emissionen im Stra\u00dfenverkehr zu senken. Der WLTP schafft mehr Transparenz beim Vergleich von Fahrzeugen hinsichtlich Energieverbrauch und CO-Emissionen. Die Angaben sind realistischer als zuvor und erm\u00f6glichen deshalb auch ein besseres Monitoring. Da die CO-Emissionen beim WLTP tendenziell h\u00f6her als beim NEFZ-Zyklus ausfallen, wird damit gerechnet, dass Hersteller ihre Fahrzeugmodelle weiter optimieren werden. &lt;\/p&gt;\n&lt;p&gt;Die Pr\u00fcfbedingungen des WLTP sollen realit\u00e4tsn\u00e4here Kraftstoffverbrauchs- und CO-Emissionswerte liefern, als es bisher der Fall war. Wegen der realit\u00e4tsn\u00e4heren Pr\u00fcfbedingungen sind die nach dem WLTP gemessenen Kraftstoffverbrauchs- und CO-Emissionswerte in vielen F\u00e4llen h\u00f6her als die nach dem bisherigen Pr\u00fcfverfahren NEFZ gemessenen. Weil davon ausgegangen wird, dass der Verbrauch und somit auch die CO-Emissionen der Pkw im WLTP-Testzyklus h\u00f6her ausfallen als im NEFZ-Testzyklus, steigt tendenziell auch die Kfz-Steuer der Pkw.&lt;\/p&gt;\n&lt;p&gt;Da die nach dem WLTP gemessenen Angaben zum Kraftstoffverbrauch und zu den CO-Emissionen in Zukunft realit\u00e4tsn\u00e4her sein werden, kann der Autok\u00e4ufer zudem die entstehenden Kraftstoffkosten besser einsch\u00e4tzen. Allerdings werden auch die nach WLTP ermittelten Werte des Kraftstoffverbrauchs und der CO-Emissionen unter den durchschnittlich zu erwartenden Werten der Pkw auf der Stra\u00dfe liegen. So wird der tats\u00e4chliche Kraftstoffverbrauch weiterhin von den offiziellen Angaben abweichen, da er wesentlich von individuellen Einflussfaktoren abh\u00e4ngt, wie zum Beispiel den Einsatzbedingungen und dem Fahrstil.&lt;\/p&gt;\n&lt;p&gt;Die Umstellung auf WLTP hat Einfluss auf die in Deutschland erhobene Kfz-Steuer. Diese wird aufgrund Antriebsart, Hubraum und dem offiziellen CO-Wert des Fahrzeugs bemessen. F\u00fcr erstmals ab dem 01.09.2018 zugelassene Pkw werden f\u00fcr die Berechnung der Steuer die WLTP-Werte herangezogen. Da der Wert f\u00fcr Kraftstoffverbrauch und damit der CO-Emission nach WLTP tendenziell h\u00f6her ausf\u00e4llt als nach dem bisherigen Pr\u00fcfverfahren NEFZ, kann es sein, dass die Kfz-Steuer f\u00fcr ein nach dem 01.09.2018 zugelassenes Fahrzeug h\u00f6her ist als f\u00fcr ein baugleiches Fahrzeug, das vor dem 01.09.2018 zugelassen worden ist.&lt;\/p&gt;&quot;,&quot;wltpLayerTitle&quot;:&quot;Informationen zum Messverfahren&quot;,&quot;customertype_id&quot;:[4],&quot;ajaxAuthSettings&quot;:{&quot;X-Authorization&quot;:&quot;Basic c2l4dC1uZXV3YWdlbi5kZTpYVEY2ZXJNRA==&quot;,&quot;Authorization&quot;:&quot;Basic c2l4dC1uZXV3YWdlbi5kZTpYVEY2ZXJNRA==&quot;},&quot;isMobile&quot;:false,&quot;basePath&quot;:&quot;https:\/\/www.sixt-neuwagen.de\/&quot;,&quot;pageName&quot;:&quot;2a-finanzierung\/audi\/a6&quot;,&quot;lvid&quot;:null,&quot;site&quot;:&quot;categorysearch&quot;,&quot;customer&quot;:&quot;private&quot;,&quot;modeName&quot;:&quot;vario&quot;,&quot;cToken&quot;:&quot;g-11-15&quot;,&quot;cViewItem&quot;:{&quot;event&quot;:&quot;viewItem&quot;,&quot;item&quot;:&quot;g-11-15&quot;},&quot;cViewParam&quot;:false,&quot;allow_https_urls&quot;:true,&quot;enable_combine_paintAndColor&quot;:true,&quot;enable_bmf_images&quot;:true,&quot;enable_instantcar_disturber&quot;:true,&quot;enable_logistics&quot;:true,&quot;enable_lead_split&quot;:true,&quot;show_premium_selection&quot;:true,&quot;mvc_auth_activated&quot;:false,&quot;enable_prices_wo_logistic&quot;:true,&quot;2und2_feature_enabled&quot;:true,&quot;enable_useridentification&quot;:false,&quot;enable_prices_wo_logistic_p&quot;:true}"></div><svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="hidden"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="iconFacebook" viewBox="0 0 25 25">
  <path class="st0" d="M24.5,12.5c0-6.6-5.4-12-12-12s-12,5.4-12,12s5.4,12,12,12S24.5,19.1,24.5,12.5z M1.6,12.5
        c0-6,4.9-10.9,10.9-10.9s10.9,4.9,10.9,10.9s-4.9,10.9-10.9,10.9S1.6,18.5,1.6,12.5z M13,19.4v-6.9h2.3l0.4-2.3H13V9.1
        c0-0.6,0.2-1.2,1.1-1.2h1.7V5.6h-2.4c-2.1,0-2.6,1.4-2.6,3.2v1.4H9.3v2.3h1.4v6.9H13z"></path>
</svg><svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="iconYoutube" viewBox="0 0 25 25">
  <path class="st0" d="M12.5,0.5c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S19.1,0.5,12.5,0.5z M12.5,23.4
        c-6,0-10.9-4.9-10.9-10.9S6.5,1.6,12.5,1.6s10.9,4.9,10.9,10.9S18.5,23.4,12.5,23.4z M14.3,15.4v1.9c0,0.4-0.1,0.6-0.4,0.6
        c-0.1,0-0.3-0.1-0.4-0.2V15c0.1-0.1,0.3-0.2,0.4-0.2C14.2,14.7,14.3,15,14.3,15.4z M17,14.7c-0.3,0-0.4,0.2-0.4,0.6v0.4h0.8v-0.4
        C17.4,15,17.3,14.7,17,14.7z M19.2,15.8c0,1,0,2.2-0.2,3.2c-0.2,0.7-0.7,1.2-1.4,1.3c-1.7,0.2-3.3,0.2-5,0.2s-3.4,0-5-0.2
        c-0.7-0.1-1.3-0.6-1.4-1.3C6,18,6,16.9,6,15.8c0-1,0-2.2,0.2-3.2c0.2-0.7,0.7-1.2,1.4-1.3c1.7-0.2,3.3-0.2,5-0.2s3.4,0,5,0.2
        c0.7,0.1,1.3,0.6,1.4,1.3C19.2,13.6,19.2,14.7,19.2,15.8z M9.6,12.5H6.8v0.8h1v5.1h0.9v-5.1h1L9.6,12.5L9.6,12.5z M12.1,14.1h-0.8
        v3.4c-0.2,0.3-0.3,0.4-0.5,0.4c-0.1,0-0.2-0.1-0.2-0.2c0,0,0-0.1,0-0.3v-3.3H9.7v3.5c0,0.3,0,0.5,0.1,0.7s0.3,0.3,0.5,0.3
        c0.3,0,0.6-0.2,0.9-0.5v0.5H12v-4.5H12.1z M15.1,15.4c0-0.4,0-0.7-0.1-0.9c0-0.3-0.3-0.5-0.6-0.5s-0.6,0.2-0.8,0.5v-2h-0.8v6h0.8
        v-0.4c0.3,0.3,0.5,0.5,0.8,0.5s0.5-0.2,0.6-0.5c0.1-0.2,0.1-0.5,0.1-0.9V15.4z M18.2,15.5c0-0.5-0.1-0.8-0.3-1.1
        c-0.2-0.3-0.5-0.5-1-0.5c-0.4,0-0.7,0.2-1,0.5c-0.2,0.2-0.2,0.6-0.2,1.1v1.6c0,0.5,0.1,0.8,0.3,1c0.2,0.3,0.6,0.5,1,0.5
        s0.8-0.2,1-0.5c0.1-0.1,0.2-0.3,0.2-0.5c0-0.1,0-0.3,0-0.5V17h-0.8c0,0.3,0,0.5,0,0.5c0,0.2-0.2,0.3-0.4,0.3c-0.3,0-0.4-0.2-0.4-0.6
        v-0.8h1.6C18.2,16.4,18.2,15.5,18.2,15.5z M12.9,6.5c-0.2-0.3-0.5-0.5-1-0.5c-0.4,0-0.7,0.2-1,0.5c-0.2,0.2-0.3,0.6-0.3,1.1v1.6
        c0,0.5,0.1,0.8,0.3,1.1s0.5,0.5,1,0.5c0.4,0,0.7-0.2,1-0.5c0.2-0.2,0.3-0.6,0.3-1.1V7.6C13.2,7.1,13.1,6.7,12.9,6.5z M12.3,9.3
        c0,0.4-0.1,0.6-0.4,0.6c-0.3,0-0.4-0.2-0.4-0.6V7.4c0-0.4,0.1-0.6,0.4-0.6c0.3,0,0.4,0.2,0.4,0.6V9.3z M13.8,6.1h0.8v3.3
        c0,0.2,0,0.3,0,0.3c0,0.1,0.1,0.2,0.2,0.2c0.2,0,0.3-0.1,0.5-0.4V6.1h0.8v4.5h-0.8v-0.5c-0.3,0.4-0.6,0.6-0.9,0.6
        c-0.3,0-0.4-0.1-0.5-0.3c0-0.1-0.1-0.4-0.1-0.7V6.1L13.8,6.1z M8.6,4.6L9.2,7l0.6-2.4h0.9L9.6,8.2v2.5H8.7V8.2
        c0-0.5-0.2-1.1-0.5-1.9C8,5.7,7.8,5.1,7.6,4.6H8.6z"></path>
</svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="iconLvkdBusiness">
  <path class="st0" d="M17.8,7.3c0.1-0.5,0.1-1,0.2-2c0.1-1.3-1.1-4.8-5.5-4.8S6.9,3.9,7,5.3c0.1,1.1,0.1,1.5,0.2,2
        C7.3,7.8,6.9,7.9,7.1,9c0.5,2.1,0.6,1.2,0.9,2.5c0.6,3.3,1.4,2.3,1.4,4v0.8c0.1,0,1.1,0.6,3,0.6s3-0.6,3.1-0.6l0,0
        c0-0.2,0-0.5,0-0.8c0-1.7,0.9-0.7,1.4-4c0.2-1.3,0.4-0.4,0.9-2.5C18.1,7.9,17.7,7.8,17.8,7.3z M24.3,22c-0.1-0.7-1.1-1.6-5.1-3.1
        c-1.3-0.5-2.2-0.7-2.7-0.9l-2,6.2L13,20.3c0,0,0.8-0.6,0.7-1.3c0-0.7-0.6-1.3-1.3-1.3S11,18.3,11,19c-0.1,0.8,0.8,1.3,0.8,1.3
        l-1.5,3.9l-2-6.1c-0.6,0.2-1.4,0.4-2.6,0.9c-4,1.5-5,2.4-5.1,3.1c-0.1,0.9-0.1,2.5-0.1,2.5h24C24.5,24.5,24.5,22.8,24.3,22z"></path>
</svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="iconLvkdPrivate">
  <path class="st0" d="M24.5,24.5c0,0,0-1.6-0.1-2.5c-0.1-0.7-1.1-1.6-5.1-3.1s-3.7-0.7-3.7-3.4c0-1.7,0.9-0.7,1.4-4
        c0.2-1.3,0.4-0.4,0.9-2.5c0.3-1.1-0.2-1.2-0.1-1.7s0.1-1,0.2-2c0.1-1.3-1.1-4.8-5.5-4.8S6.9,4,7,5.3c0.1,1.1,0.1,1.5,0.2,2
        C7.3,7.8,6.9,7.9,7.1,9c0.5,2.1,0.6,1.2,0.9,2.5c0.6,3.3,1.4,2.3,1.4,4c0,2.7,0.2,2-3.7,3.4c-4,1.5-5,2.4-5.1,3.1
        c-0.1,0.9-0.1,2.5-0.1,2.5h12H24.5z"></path>
</svg>
<svg id="iconStar" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
    <path class="st0" d="M23.7,8.4c-0.3-0.3-0.8-0.5-1.2-0.6L17,7l-2.5-5.2c-0.2-0.4-0.5-0.8-0.9-1s-0.8-0.3-1.2-0.3
        s-0.8,0.1-1.2,0.3s-0.7,0.6-0.9,1L8,7L2.5,7.8C2,7.9,1.6,8.1,1.3,8.4C1,8.7,0.7,9.1,0.6,9.5s-0.1,0.9-0.1,1.3
        c0.1,0.5,0.3,0.9,0.6,1.2l4,4l-0.9,5.7c-0.1,0.7,0.1,1.4,0.5,2c0.4,0.5,1.1,0.9,1.8,0.9c0.4,0,0.7-0.1,1.1-0.3l4.9-2.7l4.9,2.7
        c0.3,0.2,0.7,0.3,1.1,0.3c0.7,0,1.3-0.3,1.8-0.9c0.4-0.5,0.6-1.3,0.5-2l-1-5.7l4-4c0.3-0.3,0.5-0.7,0.6-1.2c0.1-0.4,0.1-0.9-0.1-1.3
        C24.3,9.1,24,8.7,23.7,8.4z"></path>
</svg></svg>



<!-- PROD -->    </body></html>
<!-- INFO:WIREFRAME URL=/wf/ver/sec/split/ VERSION=201903251 -->
<!-- INFO:ENVIRONMENT=production -->
<!-- INFO:WPSET=default, PRODUCT= -->
<!-- INFO:DATASOURCE=service, STATE=prod, MODE=p -->
<!-- INFO:GENERATED=2019-03-28 08:59 -->
