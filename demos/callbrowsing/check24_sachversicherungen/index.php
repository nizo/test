<!DOCTYPE html>
<html class="" lang="de"><!-- aHR0cHM6Ly9qb2JzLmNoZWNrMjQuZGU= --><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
<title>Privathaftpflicht Vergleich - Günstige private Haftpflicht | CHECK24</title>
<meta name="viewport" content="width=device-width">
<meta name="Language" content="de">
<meta name="Description" content="" lang="de">
<meta name="Keywords" content="">
<meta name="Publisher" content="CHECK24, München">
<meta name="Copyright" content="CHECK24, München">
<meta name="Page-topic" content="Versicherung">
<meta name="Robots" content="noindex,nofollow,noodp,noydir">

<link rel="shortcut icon" href="https://www.check24.de/favicon.ico">
<link rel="apple-touch-icon" href="https://www.check24.de/apple-touch-icon.png">

<link rel="publisher" href="https://plus.google.com/+check24">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


    <!-- CallOne Callbrowsing -->
    <link rel="stylesheet" type="text/css" href="https://www.callone.de/demos/callbrowsing/styles.css">

	<script>
	// load surfly
	(function(s,u,r,f,l,y){s[f]=s[f]||{init:function(){s[f].q=arguments}};
	l=u.createElement(r);y=u.getElementsByTagName(r)[0];l.async=1;
	l.src='https://surfly.com/surfly.js';y.parentNode.insertBefore(l,y);})
	(window,document,'script','Surfly');
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://www.callone.de/demos/callbrowsing/functions.js"></script>

	<script>
	$(function ()
	{
		var timestamp_start = Math.floor (Date.now() / 1000);

        function callbrowsing_text_create ()
		{
			var text;
			var minutes;
			
            text = 'Willkommen bei Check 24 Sachversicherungen. ';

            if ($('#coinsured_1').is(':checked'))
                text += 'Sie sind Single. ';
            if ($('#coinsured_4').is(':checked'))
                text += 'Sie sind eine Familie mit Kindern. ';
            if ($('#coinsured_2').is(':checked'))
                text += 'Sie sind ein Paar ohne Kinder. ';
            if ($('#coinsured_8').is(':checked'))
                text += 'Sie sind Single mit Kindern. ';
            
            if ($('#c24-input1-birthdate').val().length > 0)
                text += 'Geboren sind sie am '+$('#c24-input1-birthdate').val()+'. ';
            if ($('#zipcode').val().length > 0)
                text += 'Ihre Postleitzahl ist '+$('#zipcode').val()+'. ';

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

		function callbrowsing_status (rootnumber, ddi, callstatus, caller)
		{
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

		callbrowsing_session_init ('405aa97e70dddcbb269d2494b91c3c2f', 'check24_sachversicherungen', callbrowsing_text_create, callbrowsing_status);
    });
    </script>
    <!-- CallOne Callbrowsing -->

  
  <script type="text/javascript">
//<![CDATA[
///////////////////////////////////////////////////////////////
var CHECK24_HOST = 'www.check24.de';
//]]>
</script>

<link rel="stylesheet" type="text/css" href="css/layout.css">
<link href="css/styles.css" media="screen, print" rel="stylesheet" type="text/css">
<link href="css/print.css" media="print" rel="stylesheet" type="text/css"><!-- Start Visual Website Optimizer Asynchronous Code -->

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
<body class="c24-wide c24-fluid-grid ">


  
  
  
  <div class="c24-blocking-layer"></div>
  <div class="c24-cookie">
    <div class="c24-cookie-cnt clearfix">
        <div class="c24-cookie-text">
            Datenschutzhinweis: Wir verwenden <a href="https://www.check24.de/unternehmen/cookiehinweis/" target="_blank">Cookies</a>. Wenn Sie dem zustimmen, vergleichen Sie einfach weiter.<br>
            Servicehinweis: Für Kunden ist unser Service kostenlos. Wir finanzieren uns über Vermittlungsprovisionen. <a href="https://www.check24.de/unternehmen/ueber-uns/" target="_blank">Mehr erfahren</a>
        </div>
        <a class="c24-cookie-button">OK</a>
    </div>
</div>
  <div id="c24-page-and-ads" class="c24output-desktop c24site-input1 c24product-phv">
    <div id="c24-ads" class="clearfix">
      <div id="c24-ads-content" class="clearfix">
        <div class="c24-ad-banner" id="c24-ad-leaderboard">
                      <!-- adserving_super_banner -->
                  </div>
        <div class="c24-ad-skyscraper" id="c24-ad-skyscraper">
                      <!-- adserving_sky_scraper -->
                  </div>
      </div>
    </div>

    
    <div class="c24-page-container" id="c24-page-container-header">
      <div class="c24-page">
                            <header>
    <div id="c24-header" class="c24-nonav">
        <div class="c24-header-inner">
            <div id="c24-header-top">
                <div class="c24-header-content clearfix">
                    <a href="https://www.check24.de/" class="c24-logo" title="CHECK24 - Deutschlands größtes Vergleichsportal">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2365 580" xml:space="preserve" preserveAspectRatio="xMinYMin">
        <g>
            <path fill="#FFFFFF" d="M146.4,376.7L146.4,376.7c-38.9,0-79.1-0.9-105.5-12.2C27.2,358.7,17.7,350.9,11,340c-7.4-12-11-27.6-11-47.5
        c0-15.2,2.2-33,6.4-53.1c1-4.6,23.9-111.6,25.4-117.3C37.9,99.8,45.5,81.4,55.2,66c16.7-26.5,39-43.6,70.1-53.8
        C151.2,3.8,184.2,0,232.1,0h0.4c25.2,0,45.9,1.8,63.3,5.4c20.5,4.3,36.2,11.4,46.6,20.9c7.8,7.2,12.8,15.9,14.9,26
        c1.1,5.1,1.6,10.8,1.6,16.9c0,14.2-2.9,29.1-5.2,41c-0.3,1.8-0.7,3.4-1,5.1l-0.1,0.5h-92.8l0.1-0.7c0,0,0.3-2.8,0.4-4.1
        c0-0.1,0.4-3.8,0.4-9.2c0-8.1-3.8-14.4-11.5-19.3c-6.1-3.5-14-4.7-21.5-5.6c-8-1-17-1.1-25.5-1.1c-15.6,0-27.4,1.2-37.1,3.9
        c-7.7,2.1-14.2,5.2-19.6,9.3c-7.7,5.8-13.7,14.2-18.3,25.6c-4.3,10.6-7.4,23.3-10.8,39l-12.5,60c-4.1,19.3-7,33.9-7,46.5
        c0,7.3,1,13,3.1,18.1c3.3,8.1,10.3,14.4,19.8,17.8c9.1,3.3,20.7,4.8,37.5,4.8c11.2,0,20.4-0.2,28.8-1.2
        c14.5-1.7,24.9-6.1,32.7-13.7c8.5-8.2,14.2-20.4,18-38.3l1.3-6.1h91.8v0.6c0,0.7-5.2,24.8-7.9,34.5c-2.8,10.1-5.8,18.6-9.3,26.2
        c-8.9,19.4-21.3,34.4-39.1,47.1c-17.2,12-35.5,19.4-57.6,23.3c-19,3.3-38.5,3.6-60.1,3.6C155.9,376.8,147.5,376.7,146.4,376.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1174.7,376.7L1174.7,376.7c-38.9,0-79.1-0.9-105.5-12.2c-13.7-5.8-23.2-13.6-29.9-24.5
        c-7.4-12-11-27.6-11-47.5c0-15.2,2.2-33,6.4-53.1c1-4.6,23.9-111.6,25.4-117.3c6-22.3,13.7-40.7,23.4-56.1
        c16.7-26.5,39-43.6,70.1-53.8C1179.5,3.8,1212.5,0,1260.4,0h0.4c25.2,0,45.9,1.8,63.3,5.4c20.5,4.3,36.2,11.4,46.6,20.9
        c7.8,7.2,12.8,15.9,14.9,26c1.1,5.1,1.6,10.8,1.6,16.9c0,14.2-2.9,29.1-5.2,41.1c-0.3,1.7-0.7,3.4-1,5.1l-0.1,0.5h-92.8l0.1-0.7
        c0,0,0.3-2.8,0.4-4.1c0-0.1,0.4-3.8,0.4-9.2c0-8.1-3.8-14.4-11.5-19.3c-6.1-3.5-14-4.7-21.5-5.6c-8-1-17-1.1-25.5-1.1
        c-15.6,0-27.4,1.2-37.1,3.9c-7.7,2.1-14.1,5.2-19.6,9.3c-7.7,5.8-13.7,14.2-18.3,25.6c-4.3,10.6-7.4,23.3-10.8,39l-12.7,59.8
        c-4.1,19.3-7,33.9-7,46.5c0,7.3,1,13,3.1,18.1c3.3,8.1,10.3,14.4,19.8,17.8c9.1,3.3,20.7,4.8,37.5,4.8c11.2,0,20.4-0.2,28.8-1.2
        c14.5-1.7,24.9-6.1,32.7-13.7c8.5-8.2,14.2-20.4,18-38.3l1.3-6.1h91.8v0.6c0,0.7-5.2,24.8-7.9,34.5c-2.8,10.1-5.8,18.6-9.3,26.2
        c-8.9,19.5-21.3,34.4-39.1,47.1c-17.2,12-35.5,19.4-57.6,23.3c-19,3.3-38.5,3.6-60.1,3.6h-0.3
        C1183.5,376.7,1175.8,376.7,1174.7,376.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M975.5,373.7h-267l0.2-0.7l74.7-351.4c1.3-6.5,3.7-10.9,7.6-13.9c4-3.1,9.5-4.6,16.8-4.6h225.3
        c5.6,0,9.6,1.3,12,3.7c1.8,1.9,2.8,4.6,2.8,7.9V15c0,1.4-0.2,2.7-0.5,4.1l-11.6,54.8H861.4l-15.1,72.7H1010l-14.9,68.5H831.4
        l-18.6,87.7h178L975.5,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1454.3,373.7h-89l0.2-0.7l74.4-350.1c1.8-7.6,4.6-12.8,8.8-16c3.3-2.5,7.5-3.7,12.9-3.7h52.7
        c5.7,0,9.9,1.3,12.6,3.9c2.1,2,3.2,5,3.2,8.5c0,1.1-0.1,2.2-0.3,3.3L1454.3,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1699.4,373.7h-112.2l-0.2-0.4l-83.1-192.2l0.3-0.3l143.7-156c8.9-9.7,14.1-14.6,18.8-17.5
        c5-3.1,9.4-4.2,16.6-4.2h72.4c3.4,0,5.5,1.1,6.7,2.1c0.7,0.6,1.2,1.2,1.5,1.8c0.2,0.4,0.4,0.9,0.4,1.5h0.1l-0.1,1.2
        c-0.1,1.5-0.9,4-3.9,7.3l-155.1,166.7L1699.4,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M573.8,373.7h-0.7l0.2-0.7l31.6-149.7H458.2l-32,150.4h-89l0.2-0.7c3-14.2,73.7-348,74.2-349.9
        c2.6-11,7-14.8,10.5-16.8c3.8-2.2,9.1-3.2,16.6-3.2h48.1c2.5,0,6.6,1.1,9.7,3.3c1.7,1.2,3,2.6,3.8,4.1c1,1.8,1.5,3.8,1.5,6.1
        c0,1-0.1,2.1-0.3,3.2c-0.4,2.1-24.8,116.2-27.2,127.5h146.8C633,91,647.3,23.9,647.5,23.1c2.6-11,7-14.8,10.5-16.8
        c3.8-2.2,9.1-3.2,16.6-3.2h48.1c2.5,0,6.6,1.1,9.7,3.3c1.7,1.2,3,2.6,3.8,4.1c1,1.8,1.5,3.8,1.5,6.1c0,1-0.1,2.1-0.3,3.2
        c-0.4,2.2-72.1,339-75.2,353.4l-0.1,0.5L573.8,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1961.9,75.5c6.9,1.8,12.3,5.2,15.2,10.9l0,0c1.9,3.8,2.8,8.2,2.8,13.5l0,0c0,5.4-0.9,11.7-2.4,19.1l0,0
        c-2.1,9.7-4.1,17.7-7.2,24.6l0,0c-3.1,6.9-7.3,12.6-13.4,17.4l0,0c-12.2,9.6-31.2,15.4-64.9,23l0,0c-44.6,9.9-75.3,18.1-97,28.9
        l0,0c-21.7,10.8-34.3,23.7-43.8,44.1l0,0c-6.3,13.6-11.1,30.6-15.7,52.1l0,0l-12.6,64h288.7l13.5-64.8h-200.9
        c0,0,3.1-15.6,5.7-21.3l0,0c3.3-7.4,7.6-12.9,13.2-17l0,0c5.6-4.1,12.4-6.8,20.6-9.1l0,0c16.5-4.6,39.3-7.7,72.8-16.2l0,0
        c41.3-10.7,69.2-22.4,88.9-41.3l0,0c19.7-18.9,31.7-45.5,40.5-87.2l0,0c3.3-15.4,5.1-30.6,5.1-42.1l0,0c0-16.5-3.2-29.2-8.9-38.9
        l0,0c-5.7-9.7-13.9-16.7-24.7-21.9l0,0C2016,3,1984.5,0.6,1947.2,0.6l0,0c-47.5,0-84.9,4.9-112.7,22l0,0
        c-27.8,17-47.1,48-57.9,98.5l0,0l-3,14.3h87.8l3.4-15.8c3.4-15.1,6.6-25.4,12.3-32.7l0,0c5.7-7.4,14-10.9,25.2-12.3l0,0
        c7.6-1,16.7-1.2,28-1.2l0,0c1.8,0,3.5,0,5.2,0l0,0C1946.4,73.2,1955,73.7,1961.9,75.5L1961.9,75.5z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M2204.1,39.8c-10.2,10.6-95.9,100.2-131,137c-7,7.5-14.5,15.8-17.8,22.7c-2.7,5-6.2,18.9-8,28.8
        c-3.7,20.7-6.5,39.6-8.2,47.3c-0.4,2-0.6,3.8-0.6,5.5c0,6.4,2.7,10.6,6.3,13.7c3.5,3,8.3,4.4,13,4.4c4.3,0,170.1,0,170.1,0
        l-15.7,73.9l89.5-8.5l13.9-65.5h32l13.9-65.5h-32c0,0,32-149.4,33-155c11-60.5-14.1-78.2-70.7-78.2
        C2277.4,0.7,2244.7-2.3,2204.1,39.8z M2241.7,233.8h-128.5l152.9-158.4h9.3L2241.7,233.8z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M2003.7,580L2003.7,580c-57.8,0-113.3-15.4-160.5-44.6c-46.4-28.6-73.4-62.4-86.2-81.5l-16.9,43.5
        c-1.5,4-5.7,6.5-10.2,5.8c-4.4-0.8-7.7-4.6-7.7-9l-0.9-85.3v-0.1c0-2.4,1-4.7,2.7-6.3c1.8-1.7,4.1-2.7,6.6-2.7h86.8h0.1
        c4.3,0.1,8,3.3,8.8,7.5c0.1,0.6,0.2,1.1,0.2,1.7c0,3.8-2.4,7.2-5.9,8.6l-42.3,16.4c37.1,33.1,113.6,86.3,221,86.3
        c9.2,0,18.5-0.4,27.7-1.2c45.3-3.8,91-15,132.2-32.2c36.1-15.1,67.9-34.3,92.2-55.7l-43.7-12.9c-3.9-1.1-6.7-4.7-6.7-8.8
        c0-0.3,0-0.6,0-0.9c0.4-4.4,4-7.9,8.4-8.3l84.7-7.7c0.4,0,0.7-0.1,0.9-0.1c2.2,0,4.3,0.8,5.9,2.1c1.9,1.6,3.1,3.9,3.3,6.3
        c7,83.3,7,83.3,7,83.6c0,4.1-2.8,7.8-6.8,8.9c-0.8,0.2-1.6,0.3-2.4,0.3c-3.6,0-6.8-2-8.4-5.1l-20.5-39.2
        c-16.4,22.2-45,53.5-89.8,80.7c-45.4,27.6-96.1,44-150.7,48.6l-5.5,0.5l0,0C2019.4,579.7,2011.5,580,2003.7,580z"></path>
        </g>
    </svg>
</a>                                                                        


<!--
    <div class="c24-customer c24-customer-guest" id="c24-meinkonto">
        <span>
            <a href="https://kundenbereich.check24.de/user/login.html?ref=https%3A%2F%2Fprivathaftpflicht.check24.de%2Fprivathaftpflicht%2Fbenutzereingaben%2F%3Fprefill%3Dtrue%26inD_L_PHV_InsuranceCoverage_ID%3D1" class="c24-customer-icon c24-header-hover c24-meinkonto-login-link">
                <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 124.8 100" xml:space="preserve" preserveAspectRatio="xMinYMin">
                    <path fill="#FFFFFF" d="M64.3,68.9c0-3.9,0.6-7.6,1.9-11.1c-1.9-0.9-3.6-1.7-5.5-2.9c-3-2.1-4.5-3.1-4.7-9.9c6.5-4.1,8.6-13,8.6-23.2
                    C64.5,7.7,58.6,0,47.9,0S31.2,7.6,31.2,21.8c0,10.4,2.2,19.2,8.7,23.2c-0.2,6.7-1.7,7.7-4.7,9.9c-11.9,6.6-24.3,9.7-29.6,12.6
                    C0.2,70.4,0,77.3,0,77.3S16.6,100,48.1,100c10.9,0,19.9-2.7,27.1-6.2C68.4,87.5,64.3,78.7,64.3,68.9z"></path>
                    <path fill="#FFFFFF" d="M98.3,42.3c-14.6,0-26.5,11.9-26.5,26.5s11.9,26.5,26.5,26.5c14.6,0,26.5-11.9,26.5-26.5S112.9,42.3,98.3,42.3z
                     M98.4,85.8V75.7h-12V62h12V51.9l17.5,17L98.4,85.8z"></path>
                </svg>
            </a>
            <span id="c24-customer-salutation">
                Hallo! <a href="https://kundenbereich.check24.de/user/login.html?ref=https%3A%2F%2Fprivathaftpflicht.check24.de%2Fprivathaftpflicht%2Fbenutzereingaben%2F%3Fprefill%3Dtrue%26inD_L_PHV_InsuranceCoverage_ID%3D1" rel="nofollow" class="c24-meinkonto-reflink c24-meinkonto-login-link">Anmelden</a>
            </span>
            <span class="c24-customer-hover c24-header-hover">
                Mein Konto
                <span class="c24-customer-hover-corner"></span>
            </span>
        </span>
                                <div class="c24-customer-layer c24-header-hover-layer" style="display:none;">
            <div class="c24-customer-layer-corner" style="right: 0px;"></div>
            <a id="c24-meinkonto-anmelden" href="https://kundenbereich.check24.de/user/login.html?ref=https%3A%2F%2Fprivathaftpflicht.check24.de%2Fprivathaftpflicht%2Fbenutzereingaben%2F%3Fprefill%3Dtrue%26inD_L_PHV_InsuranceCoverage_ID%3D1" class="c24-button c24-meinkonto-reflink c24-meinkonto-login-link">Anmelden »</a>
            <div class="c24-customer-salutation-text">
                <span>Neuer Kunde? </span>
                <a href="https://kundenbereich.check24.de/user/register.html?ref=https%3A%2F%2Fprivathaftpflicht.check24.de%2Fprivathaftpflicht%2Fbenutzereingaben%2F%3Fprefill%3Dtrue%26inD_L_PHV_InsuranceCoverage_ID%3D1" class="c24-meinkonto-reflink c24-meinkonto-register-link">Starten Sie hier.</a>
            </div>
            <ul class="c24-customer-options">
                <li><a href="https://kundenbereich.check24.de/user/account.html?o=overview">Mein Konto</a></li>
                <li><a href="https://kundenbereich.check24.de/user/account.html?o=activitylist">Meine Aktivitäten</a></li>
                <li><a href="https://kundenbereich.check24.de/user/account.html?o=cs_codes">Gutscheine &amp; Guthaben</a></li>
                <li><a href="https://kundenbereich.check24.de/user/account.html?o=points">CHECK24 Punkte</a></li>
            </ul>
            <ul class="c24-customer-center">
                <li class="c24-customer-center-km">
                    <a href="https://www.check24.de/kontomanager/?ref=c24konto">
                        <span>Kontomanager</span>
                        <span>Ihre Finanzen an einem Ort verwalten und optimieren</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.check24.de/versicherungscenter/">
                        <span>Versicherungscenter</span>
                        <span>Ihr digitaler Versicherungsordner; Bedarf und Verträge richtig prüfen</span>
                    </a>
                </li>
                <li>
                    <a href="https://kredit.check24.de/ca">
                        <span>Kreditcenter</span>
                        <span>Ihre aktuellen Kreditanfragen und Kreditzusagen auf einen Blick</span>
                    </a>
                </li>
                <li>
                    <a href="https://homecenter.check24.de/">
                        <span>Haushaltscenter</span>
                        <span>Ihre Wechselfristen für Energie- und DSL-Verträge nutzen und erneut sparen</span>
                    </a>
                </li>
                <li>
                    <a href="https://kundenbereich.check24.de/?o=shopping">
                        <span>Shoppingcenter</span>
                        <span>Ihre Bestellungen in der Übersicht<br>Lieferstatus, Rechnung und Kontakt</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    -->
       
<!--
<div class="c24-customer-trigger" id="c24-customer-trigger">
    <div class="c24-customer-layer c24-header-hover-layer">
        <div class="c24-customer-layer-corner"></div>
        <div class="c24-customer-trigger-close">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357 357" xml:space="preserve">
                <g>
                    <polygon fill="#b4b4b4" points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"></polygon>
                </g>
            </svg>
        </div>
        <div class="c24-customer-trigger-text">
            
        </div>
        <a class="c24-button c24-customer-login-opener">Anmelden »</a>
        <div class="c24-customer-salutation-text">
            <span>Neuer Kunde? </span>
            <a class="c24-meinkonto-reflink c24-customer-register-opener">Starten Sie hier.</a>
        </div>
    </div>
</div>
    -->

<div class="callback">
	<div id="wrap">
		<form id="callbackForm" action="" autocomplete="on" onclick="document.getElementById('callbackNumber').classList.add('fixed');">
			<input id="callbackNumber" name="callbacknumber" type="text" placeholder="Geben Sie Ihre Rufnummer an..." >
			<button id="search_submit" type="submit" name="submit">Rückruf anfordern</button>
		</form>
    </div>
</div>

<div id="callbrowsing_status" style="position: absolute; top: 150px; margin-left: 50%; margin-right: 50%; left: 300px;">
    <div id="callbrowsing_status_text_big"></div>
	<div id="callbrowsing_status_text_small"></div>
</div>

<div id="callbrowsing_webview_sharing" style="position: absolute; top: 500px; margin-left: 50%; margin-right: 50%; left: 300px;">
    <div id="callbrowsing_webview_sharing_text"></div>
</div>

                                                                                                         <div class="c24-contact c24-header-hover clearfix">
    <div class="content clearfix">
        <div class="c24-contact-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 74.9 100" xml:space="preserve" preserveAspectRatio="xMinYMin">
                <path fill="#ffffff" d="M16.6,99.9c-2.8,0.5-6.5-0.4-8.7-1.9C1.3,93.7-0.4,88.4,0.1,87c0.5-1.4,3-6.5,5.9-10.8c2.8-4.3,5.1-6.8,7.1-9.1
                    c2-2.3,10.5,4.9,14.4,1.9c2.7-2.1,8.7-10.9,12.9-16.9l0,0c4.1-7,9.5-15.5,10.3-18.8c1.2-4.8-8.8-9.8-7.5-12.5s2.6-5.9,5.4-10.2
                    c2.8-4.3,6.4-8.7,7.5-9.8c1.1-1,6.6-1.6,13.2,2.7c3,1.9,6.1,6.5,5.4,9.7c-2.5,11.3-10.5,28.9-22,47l0,0
                    c-10.3,15-21.5,28.8-30.4,36.4"></path>
            </svg>
        </div>
        <div class="c24-phone" x-ms-format-detection="none">
            <div id="callbrowsing_personal_phonenumber"></div>
            <span class="c24-phone-help">Ihre persönliche Rufnummer</span>
        </div>
    </div>
    
        
<div class="c24-customer-login">
    
    <div class="c24-cl-close">
    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
        <polygon fill="#A0A0A0" points="100,80 70,50 100,20 80,0 50,30 20,0 0,20 30,50 0,80 20,100 50,70 80,100 "></polygon>
    </svg>
</div>    

    
    <div class="c24-cl-ele c24-cl-back c24-cl-back-event">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve">
        <g>
            <path fill="#A0A0A0" d="M990,503.4c0,25.9-21,46.9-46.9,46.9H56.9c-25.9,0-46.9-21-46.9-46.9v-4.6c0-25.9,21-46.9,46.9-46.9h886.1c25.9,0,46.9,21,46.9,46.9V503.4z"></path>
            <path fill="#A0A0A0" d="M430.9,131.1c18.3,18.3,18.3,48.1,0,66.4L93.1,535.2c-18.3,18.3-48.1,18.3-66.4,0l-2.9-2.9C5.5,514,5.5,484.3,23.9,466l337.7-337.7c18.3-18.3,48.1-18.3,66.4,0L430.9,131.1z"></path>
            <path fill="#A0A0A0" d="M430.9,868.9c18.3-18.3,18.3-48.1,0-66.4L93.1,464.8c-18.3-18.3-48.1-18.3-66.4,0l-2.9,2.9C5.5,486,5.5,515.7,23.9,534l337.7,337.7c18.3,18.3,48.1,18.3,66.4,0L430.9,868.9z"></path>
        </g>
    </svg>
</div>    

    
    <form id="c24-cl-form-user-login-prefill" action="/" method="post" novalidate="">
    <div class="c24-cl-ele c24-cl-user-prefill">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">Anmelden</div>
            
            <div class="c24-cl-pw-error c24-cl-pw-error-last-chance clearfix"><span class="c24-cl-error-icon">!</span><span>Achtung: letzter Anmeldeversuch</span></div>
            <div class="c24-cl-pw-error c24-cl-pw-error-blocked clearfix"><span class="c24-cl-error-icon-wrapper"><span class="c24-cl-error-icon">!</span></span><span>Dieses Kundenkonto ist aufgrund mehrerer fehlerhafter Anmeldeversuche für eine Stunde gesperrt.</span></div>
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_email" data-label="E-Mail-Adresse">&nbsp;</label>
                    <input class="c24-cl-input" type="email" data-placeholder="E-Mail-Adresse eingeben" placeholder="E-Mail-Adresse eingeben" name="c24_email" id="cl_email_prefill" tabindex="2500">
                </div>
                <div class="c24-cl-error c24-cl_mail-error">Bitte geben Sie eine gültige E-Mail-Adresse ein</div>
                <div class="c24-cl-error c24-cl_mail-error-noval">Bitte geben Sie eine E-Mail-Adresse ein</div>
                <div class="c24-cl-error c24-cl_pw-error">E-Mail-Adresse oder Passwort ist nicht korrekt</div>
                <div class="c24-cl-error c24-cl_mail-error-exists">E-Mail-Adresse ist uns nicht bekannt. <a class="c24-cl-user-register">Hier Konto anlegen</a></div>
                <a class="c24-customer-login-mobile-opener">oder mit Mobiltelefonnummer anmelden</a>
            </div>
            <div class="clearfix">
                <div class="c24-cl-input-wrapper c24-cl-input-pw-wrapper">
                    <div class="clearfix">
                        <label for="cl_pw" data-label="Passwort">&nbsp;</label>
                    </div>
                    <div class="c24-cl-wrapper">
                        <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="CHECK24 Passwort eingeben" placeholder="CHECK24 Passwort eingeben" name="c24_password" id="cl_pw_prefill" tabindex="2501">
                        <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                                <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                    <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                    <circle cx="466.08" cy="466.02" r="134.5"></circle>
                                </g>
                            </svg>
                        </div>
                        <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                            </svg>
                        </div>
                        <div class="c24-cl-error c24-cl_pw-error">E-Mail-Adresse oder Passwort ist nicht korrekt</div>
                        <div class="c24-cl-error c24-cl_pw-error-noval">Bitte geben Sie Ihr Passwort ein</div>
                        <a class="c24-cl-pwf">Passwort vergessen?</a>
                    </div>
                </div>
                <input type="submit" id="c24-cl-user-prefill-btn" class="c24-button" value="anmelden »" tabindex="2502">
            </div>
            <div class="c24-cl-social">
                <div class="c24-cl-social-title">
                    <div class="c24-cl-social-title-line"></div>
                    <div class="c24-cl-social-title-text">oder mit 1-Click anmelden</div>
                </div>
                <div class="c24-cl-social-buttons clearfix">
                    <div class="c24-cl-social-button c24-cl-fb" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=facebook" tabindex="2503">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <path fill="#3d5a99" d="M94.5,0h-89C2.5,0,0,2.5,0,5.5v89c0,3,2.5,5.5,5.5,5.5h47.9V61.3h-13V46.2h13V35.1c0-12.9,7.9-19.9,19.4-19.9c5.5,0,10.3,0.4,11.6,0.6v13.5l-8,0c-6.3,0-7.5,3-7.5,7.3v9.6h14.9L82,61.3H69V100h25.5c3,0,5.5-2.5,5.5-5.5v-89C100,2.5,97.5,0,94.5,0z"></path>
                            </svg>
                        </div>
                        <span>Facebook</span>
                    </div>
                    <div class="c24-cl-social-button c24-cl-google" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=google" tabindex="2504">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <g transform="translate(11.000000, 11.000000)">
                                    <path fill="#e84436" d="M39,8.3c9.4,0,15.7,4.1,19.3,7.4L72.4,2C63.8-6.1,52.5-11,39-11C19.4-11,2.6,0.2-5.7,16.6l16.2,12.6C14.6,17.1,25.8,8.3,39,8.3L39,8.3z"></path>
                                    <path fill="#527bbd" d="M87,40.1c0-4.1-0.3-7.1-1.1-10.2H39v18.6h27.6C66,53.1,63,60,56.3,64.7l15.8,12.2C81.6,68.2,87,55.3,87,40.1L87,40.1z"></path>
                                    <path fill="#fbbc0c" d="M10.6,48.9c-1.1-3.1-1.7-6.4-1.7-9.9s0.6-6.8,1.6-9.9L-5.7,16.6C-9.1,23.3-11,30.9-11,39s1.9,15.7,5.3,22.4L10.6,48.9L10.6,48.9z"></path>
                                    <path fill="#34a953" d="M39,89c13.5,0,24.8-4.4,33.1-12.1L56.3,64.7c-4.2,2.9-9.9,5-17.3,5c-13.2,0-24.4-8.7-28.4-20.8L-5.6,61.4C2.6,77.8,19.4,89,39,89L39,89z"></path>
                                    <polygon fill="none" points="-11,-1189,-1189,89-11,89"></polygon>
                                </g>
                            </svg>
                        </div>
                        <span>Google</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="c24-cl-content-bottom">
            <div class="clearfix">Noch kein Konto? <a class="c24-cl-user-register">Hier Konto anlegen</a></div>
            <div class="clearfix"><br>Verwalten und optimieren Sie Ihre Verträge, Buchungen und Bestellungen.</div>
        </div>
    </div>
</form>    

    
    <form id="c24-cl-form-user-login" action="/" method="post" novalidate="">
    <div class="c24-cl-ele c24-cl-user">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">Anmelden</div>
            
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_email" data-label="E-Mail-Adresse">&nbsp;</label>
                    <input class="c24-cl-input" type="email" data-placeholder="E-Mail-Adresse eingeben" placeholder="E-Mail-Adresse eingeben" name="c24_email" id="cl_email" tabindex="2203">
                </div>
                <div class="c24-cl-error c24-cl_mail-error">Bitte geben Sie eine gültige E-Mail-Adresse ein</div>
                <div class="c24-cl-error c24-cl_mail-error-noval">Bitte geben Sie eine E-Mail-Adresse ein</div>
                <div class="c24-cl-error c24-cl_mail-error-exists">E-Mail-Adresse ist uns nicht bekannt. <a class="c24-cl-user-register">Hier Konto anlegen</a></div>
                <a class="c24-customer-login-mobile-opener">oder mit Mobiltelefonnummer anmelden</a>
                <a id="c24-cl-user-btn" class="c24-button" tabindex="2204">weiter »</a>
            </div>
            <div class="c24-cl-social">
                <div class="c24-cl-social-title">
                    <div class="c24-cl-social-title-line"></div>
                    <div class="c24-cl-social-title-text">oder mit 1-Click anmelden</div>
                </div>
                <div class="c24-cl-social-buttons clearfix">
                    <div class="c24-cl-social-button c24-cl-fb" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=facebook">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <path fill="#3d5a99" d="M94.5,0h-89C2.5,0,0,2.5,0,5.5v89c0,3,2.5,5.5,5.5,5.5h47.9V61.3h-13V46.2h13V35.1c0-12.9,7.9-19.9,19.4-19.9c5.5,0,10.3,0.4,11.6,0.6v13.5l-8,0c-6.3,0-7.5,3-7.5,7.3v9.6h14.9L82,61.3H69V100h25.5c3,0,5.5-2.5,5.5-5.5v-89C100,2.5,97.5,0,94.5,0z"></path>
                            </svg>
                        </div>
                        <span>Facebook</span>
                    </div>
                    <div class="c24-cl-social-button c24-cl-google" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=google">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <g transform="translate(11.000000, 11.000000)">
                                    <path fill="#e84436" d="M39,8.3c9.4,0,15.7,4.1,19.3,7.4L72.4,2C63.8-6.1,52.5-11,39-11C19.4-11,2.6,0.2-5.7,16.6l16.2,12.6C14.6,17.1,25.8,8.3,39,8.3L39,8.3z"></path>
                                    <path fill="#527bbd" d="M87,40.1c0-4.1-0.3-7.1-1.1-10.2H39v18.6h27.6C66,53.1,63,60,56.3,64.7l15.8,12.2C81.6,68.2,87,55.3,87,40.1L87,40.1z"></path>
                                    <path fill="#fbbc0c" d="M10.6,48.9c-1.1-3.1-1.7-6.4-1.7-9.9s0.6-6.8,1.6-9.9L-5.7,16.6C-9.1,23.3-11,30.9-11,39s1.9,15.7,5.3,22.4L10.6,48.9L10.6,48.9z"></path>
                                    <path fill="#34a953" d="M39,89c13.5,0,24.8-4.4,33.1-12.1L56.3,64.7c-4.2,2.9-9.9,5-17.3,5c-13.2,0-24.4-8.7-28.4-20.8L-5.6,61.4C2.6,77.8,19.4,89,39,89L39,89z"></path>
                                    <polygon fill="none" points="-11,-1189,-1189,89-11,89"></polygon>
                                </g>
                            </svg>
                        </div>
                        <span>Google</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="c24-cl-content-bottom">
            <div class="clearfix">Noch kein Konto? <a class="c24-cl-user-register">Hier Konto anlegen</a></div>
            <div class="clearfix"><br>Verwalten und optimieren Sie Ihre Verträge, Buchungen und Bestellungen.</div>
        </div>
    </div>
    <div class="c24-cl-ele c24-cl-pw">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">Passwort eingeben</div>
            <div class="c24-cl-pw-error c24-cl-pw-error-last-chance clearfix"><span class="c24-cl-error-icon">!</span><span>Achtung: letzter Anmeldeversuch</span></div>
            <div class="c24-cl-pw-error c24-cl-pw-error-blocked clearfix"><span class="c24-cl-error-icon-wrapper"><span class="c24-cl-error-icon">!</span></span><span>Dieses Kundenkonto ist aufgrund mehrerer fehlerhafter Anmeldeversuche für eine Stunde gesperrt.</span></div>
            <div class="c24-cl-pw-email"></div>
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <div class="clearfix">
                        <label for="cl_pw" data-label="Passwort">&nbsp;</label>
                    </div>
                    <div class="c24-cl-wrapper">
                        <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="CHECK24 Passwort eingeben" placeholder="CHECK24 Passwort eingeben" name="c24_password" id="cl_pw" tabindex="2205">
                        <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                                <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                    <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                    <circle cx="466.08" cy="466.02" r="134.5"></circle>
                                </g>
                            </svg>
                        </div>
                        <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                            </svg>
                        </div>
                        <div class="c24-cl-error c24-cl_pw-error">E-Mail-Adresse oder Passwort ist nicht korrekt</div>
                        <div class="c24-cl-error c24-cl_pw-error-noval">Bitte geben Sie Ihr Passwort ein</div>
                        <a class="c24-cl-pwf">Passwort vergessen?</a>
                    </div>
                </div>
                <a class="c24-cl-pw-back c24-cl-back-link c24-cl-back-event">« zurück</a>
                <input type="submit" id="c24-cl-pw-btn" class="c24-button" value="anmelden »" tabindex="2206">
            </div>
        </div>
    </div>
</form>    

    
    <form id="c24-cl-form-user-login-mobile-prefill" action="/" method="post" novalidate="">
    <div class="c24-cl-ele c24-cl-user-mobile-prefill">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">Anmelden</div>
            
            <div class="c24-cl-pw-error c24-cl-pw-error-last-chance clearfix" id="c24-cl-pw-error-last-chance-mobile"><span class="c24-cl-error-icon">!</span><span>Achtung: letzter Anmeldeversuch</span></div>
            <div class="c24-cl-pw-error c24-cl-pw-error-blocked clearfix" id="c24-cl-pw-error-blocked-mobile"><span class="c24-cl-error-icon-wrapper"><span class="c24-cl-error-icon">!</span></span><span>Dieses Kundenkonto ist aufgrund mehrerer fehlerhafter Anmeldeversuche für eine Stunde gesperrt.</span></div>
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_mobile_prefill" data-label="Mobiltelefonnummer">&nbsp;</label>
                    <input class="c24-cl-input" type="tel" data-placeholder="Mobiltelefonnummer eingeben" placeholder="Mobiltelefonnummer eingeben" name="c24_phone" id="cl_mobile_prefill" tabindex="2400" oninput="this.value=this.value.replace(/[^0-9 \+\-\)\(\.]/,'')">
                </div>
                <div class="c24-cl-error c24-cl_mobile-error">Mobiltelefonnummer oder Passwort ist nicht korrekt</div>
                <div class="c24-cl-error c24-cl_mobile-error-noval">Bitte geben Sie eine Mobiltelefonnummer ein</div>
                <div class="c24-cl-error c24-cl_mobile-error-noval2">Bitte geben Sie eine gültige Mobiltelefonnummer ein</div>
                <div class="c24-cl-error c24-cl_mobile-error-exists">Die eingegebene Rufnummer kann nicht zum Anmelden verwendet werden. Bitte überprüfen Sie die Nummer oder <a class="c24-customer-login-opener">melden Sie sich mit Ihrer E-Mail Adresse an.</a></div>
                <a class="c24-cl-opener c24-customer-login-opener">oder mit E-Mail-Adresse anmelden</a>
            </div>
            <div class="clearfix">
                <div class="c24-cl-input-wrapper c24-cl-input-pw-wrapper">
                    <div class="clearfix">
                        <label for="cl_pw" data-label="Passwort">&nbsp;</label>
                    </div>
                    <div class="c24-cl-wrapper">
                        <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="CHECK24 Passwort eingeben" placeholder="CHECK24 Passwort eingeben" name="c24_password" id="cl_pw_mobile_prefill" tabindex="2401">
                        <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                                <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                    <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                    <circle cx="466.08" cy="466.02" r="134.5"></circle>
                                </g>
                            </svg>
                        </div>
                        <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                            </svg>
                        </div>
                        <div class="c24-cl-error c24-cl_mobile-error">Mobiltelefonnummer oder Passwort ist nicht korrekt</div>
                        <div class="c24-cl-error c24-cl_pw_mobile-error-noval">Bitte geben Sie Ihr Passwort ein</div>
                        <a class="c24-customer-pwforget-mtan-opener">Passwort vergessen?</a>
                    </div>
                </div>
                <input type="submit" id="c24-cl-user-mobile-prefill-btn" class="c24-button" value="anmelden »" tabindex="2402">
            </div>
            <div class="c24-cl-social">
                <div class="c24-cl-social-title">
                    <div class="c24-cl-social-title-line"></div>
                    <div class="c24-cl-social-title-text">oder mit 1-Click anmelden</div>
                </div>
                <div class="c24-cl-social-buttons clearfix">
                    <div class="c24-cl-social-button c24-cl-fb" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=facebook" tabindex="2403">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <path fill="#3d5a99" d="M94.5,0h-89C2.5,0,0,2.5,0,5.5v89c0,3,2.5,5.5,5.5,5.5h47.9V61.3h-13V46.2h13V35.1c0-12.9,7.9-19.9,19.4-19.9c5.5,0,10.3,0.4,11.6,0.6v13.5l-8,0c-6.3,0-7.5,3-7.5,7.3v9.6h14.9L82,61.3H69V100h25.5c3,0,5.5-2.5,5.5-5.5v-89C100,2.5,97.5,0,94.5,0z"></path>
                            </svg>
                        </div>
                        <span>Facebook</span>
                    </div>
                    <div class="c24-cl-social-button c24-cl-google" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=google" tabindex="2404">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <g transform="translate(11.000000, 11.000000)">
                                    <path fill="#e84436" d="M39,8.3c9.4,0,15.7,4.1,19.3,7.4L72.4,2C63.8-6.1,52.5-11,39-11C19.4-11,2.6,0.2-5.7,16.6l16.2,12.6C14.6,17.1,25.8,8.3,39,8.3L39,8.3z"></path>
                                    <path fill="#527bbd" d="M87,40.1c0-4.1-0.3-7.1-1.1-10.2H39v18.6h27.6C66,53.1,63,60,56.3,64.7l15.8,12.2C81.6,68.2,87,55.3,87,40.1L87,40.1z"></path>
                                    <path fill="#fbbc0c" d="M10.6,48.9c-1.1-3.1-1.7-6.4-1.7-9.9s0.6-6.8,1.6-9.9L-5.7,16.6C-9.1,23.3-11,30.9-11,39s1.9,15.7,5.3,22.4L10.6,48.9L10.6,48.9z"></path>
                                    <path fill="#34a953" d="M39,89c13.5,0,24.8-4.4,33.1-12.1L56.3,64.7c-4.2,2.9-9.9,5-17.3,5c-13.2,0-24.4-8.7-28.4-20.8L-5.6,61.4C2.6,77.8,19.4,89,39,89L39,89z"></path>
                                    <polygon fill="none" points="-11,-1189,-1189,89-11,89"></polygon>
                                </g>
                            </svg>
                        </div>
                        <span>Google</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="c24-cl-content-bottom">
            <div class="clearfix">Noch kein Konto? <a class="c24-cl-user-register">Hier Konto anlegen</a></div>
            <div class="clearfix"><br>Verwalten und optimieren Sie Ihre Verträge, Buchungen und Bestellungen.</div>
        </div>
    </div>
</form>    

    
    <form id="c24-cl-form-user-login-mobile" action="/" method="post" novalidate="">
    <div class="c24-cl-ele c24-cl-user-mobile">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">Anmelden</div>
            
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_mobile" data-label="Mobiltelefonnummer">&nbsp;</label>
                    <input class="c24-cl-input" type="tel" data-placeholder="Mobiltelefonnummer eingeben" placeholder="Mobiltelefonnummer eingeben" name="c24_phone" id="cl_mobile" tabindex="2303" oninput="this.value=this.value.replace(/[^0-9 \+\-\)\(\.]/,'')">
                </div>
                <div class="c24-cl-error c24-cl_mobile-error-noval">Bitte geben Sie eine Mobiltelefonnummer ein</div>
                <div class="c24-cl-error c24-cl_mobile-error-noval2">Bitte geben Sie eine gültige Mobiltelefonnummer ein</div>
                <div class="c24-cl-error c24-cl_mobile-error-exists">Die eingegebene Rufnummer kann nicht zum Anmelden verwendet werden. Bitte überprüfen Sie die Nummer oder <a class="c24-customer-login-opener">melden Sie sich mit Ihrer E-Mail Adresse an.</a></div>
                <a class="c24-cl-opener c24-customer-login-opener">oder mit E-Mail-Adresse anmelden</a>
                <a id="c24-cl-user-mobile-btn" class="c24-button" tabindex="2304">weiter »</a>
            </div>
            <div class="c24-cl-social">
                <div class="c24-cl-social-title">
                    <div class="c24-cl-social-title-line"></div>
                    <div class="c24-cl-social-title-text">oder mit 1-Click anmelden</div>
                </div>
                <div class="c24-cl-social-buttons clearfix">
                    <div class="c24-cl-social-button c24-cl-fb" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=facebook">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <path fill="#3d5a99" d="M94.5,0h-89C2.5,0,0,2.5,0,5.5v89c0,3,2.5,5.5,5.5,5.5h47.9V61.3h-13V46.2h13V35.1c0-12.9,7.9-19.9,19.4-19.9c5.5,0,10.3,0.4,11.6,0.6v13.5l-8,0c-6.3,0-7.5,3-7.5,7.3v9.6h14.9L82,61.3H69V100h25.5c3,0,5.5-2.5,5.5-5.5v-89C100,2.5,97.5,0,94.5,0z"></path>
                            </svg>
                        </div>
                        <span>Facebook</span>
                    </div>
                    <div class="c24-cl-social-button c24-cl-google" data-url="https://kundenbereich.check24.de/user/oauth/login.html?oauth_provider=google">
                        <div class="c24-cl-social-svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" x="0px" y="0px" xml:space="preserve">
                                <g transform="translate(11.000000, 11.000000)">
                                    <path fill="#e84436" d="M39,8.3c9.4,0,15.7,4.1,19.3,7.4L72.4,2C63.8-6.1,52.5-11,39-11C19.4-11,2.6,0.2-5.7,16.6l16.2,12.6C14.6,17.1,25.8,8.3,39,8.3L39,8.3z"></path>
                                    <path fill="#527bbd" d="M87,40.1c0-4.1-0.3-7.1-1.1-10.2H39v18.6h27.6C66,53.1,63,60,56.3,64.7l15.8,12.2C81.6,68.2,87,55.3,87,40.1L87,40.1z"></path>
                                    <path fill="#fbbc0c" d="M10.6,48.9c-1.1-3.1-1.7-6.4-1.7-9.9s0.6-6.8,1.6-9.9L-5.7,16.6C-9.1,23.3-11,30.9-11,39s1.9,15.7,5.3,22.4L10.6,48.9L10.6,48.9z"></path>
                                    <path fill="#34a953" d="M39,89c13.5,0,24.8-4.4,33.1-12.1L56.3,64.7c-4.2,2.9-9.9,5-17.3,5c-13.2,0-24.4-8.7-28.4-20.8L-5.6,61.4C2.6,77.8,19.4,89,39,89L39,89z"></path>
                                    <polygon fill="none" points="-11,-1189,-1189,89-11,89"></polygon>
                                </g>
                            </svg>
                        </div>
                        <span>Google</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="c24-cl-content-bottom">
            <div class="clearfix">Noch kein Konto? <a class="c24-cl-user-register">Hier Konto anlegen</a></div>
            <div class="clearfix"><br>Verwalten und optimieren Sie Ihre Verträge, Buchungen und Bestellungen.</div>
        </div>
    </div>
    <div class="c24-cl-ele c24-cl-user-pw-mobile">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">Passwort eingeben</div>
            <div class="c24-cl-pw-error c24-cl-pw-error-last-chance clearfix"><span class="c24-cl-error-icon">!</span><span>Achtung: letzter Anmeldeversuch</span></div>
            <div class="c24-cl-pw-error c24-cl-pw-error-blocked clearfix"><span class="c24-cl-error-icon-wrapper"><span class="c24-cl-error-icon">!</span></span><span>Dieses Kundenkonto ist aufgrund mehrerer fehlerhafter Anmeldeversuche für eine Stunde gesperrt.</span></div>
            <div class="c24-cl-pw-mobile"></div>
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <div class="clearfix">
                        <label for="cl_pw" data-label="Passwort">&nbsp;</label>
                    </div>
                    <div class="c24-cl-wrapper">
                        <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="CHECK24 Passwort eingeben" placeholder="CHECK24 Passwort eingeben" name="c24_password" id="cl_pw_mobile" tabindex="2305">
                        <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                                <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                    <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                    <circle cx="466.08" cy="466.02" r="134.5"></circle>
                                </g>
                            </svg>
                        </div>
                        <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                            </svg>
                        </div>
                        <div class="c24-cl-error c24-cl_pw-error">Passwort ist nicht korrekt</div>
                        <div class="c24-cl-error c24-cl_pw-error-noval">Bitte geben Sie Ihr Passwort ein</div>
                        <a class="c24-customer-pwforget-mtan-opener">Passwort vergessen?</a>
                    </div>
                </div>
                <a class="c24-cl-pw-back c24-cl-back-link c24-cl-back-event">« zurück</a>
                <input type="submit" id="c24-cl-pw-mobile-btn" class="c24-button" value="anmelden »" tabindex="2306">
            </div>
        </div>
    </div>
</form>    

    
    <div class="c24-cl-ele c24-cl-pw-forget">
    <div class="c24-cl-content-top">
        <div class="c24-cl-title">Sie haben Ihr CHECK24 Passwort vergessen?</div>
        <div class="c24-cl-pw-forget-text">Bitte geben Sie Ihre E-Mail-Adresse ein. Wir senden Ihnen einen Link, um Ihr Passwort zu erneuern.</div>
        <form id="c24-cl-form-user-pwforget" novalidate="">
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label id="cl_email_forget-label" for="cl_email_forget" data-label="E-Mail-Adresse">&nbsp;</label>
                    <input class="c24-cl-input" type="email" data-placeholder="E-Mail-Adresse eingeben" placeholder="E-Mail-Adresse eingeben" name="c24_email" id="cl_email_forget" tabindex="1206">
                </div>
                <div class="c24-cl-error c24-cl_email_forget-error">Es wurde kein passendes Benutzerkonto gefunden. Überprüfen Sie bitte noch mal Ihre Eingaben oder <a class="c24-customer-login-opener">melden Sie sich mit Ihrer E-Mail Adresse an</a>.</div>
                <div class="c24-cl-error c24-cl_email_forget-error-noval">Bitte geben Sie eine E-Mail-Adresse ein.</div>
                <div class="c24-cl-error c24-cl_email_forget-error-noval2">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
            </div>
            <div class="clearfix">
                <a class="c24-cl-pw-back c24-cl-back-link c24-cl-back-event">« zurück</a>
                <input type="submit" id="c24-cl-pw-forget-btn" class="c24-button" value="senden »" tabindex="1207">
            </div>
        </form>
    </div>
</div>    

    
    <div class="c24-cl-ele c24-cl-pw-tan-forget">
    <div class="c24-cl-ele c24-cl-content-top c24-cl-pwf-email">
        <div class="c24-cl-title">Sie haben Ihr CHECK24 Passwort vergessen?</div>
        <div class="c24-cl-error c24-cl-pw-error c24-cl_pwf_blocked-error clearfix"><span class="c24-cl-error-icon">!</span><span>Ihr Kundenkonto ist aufgrund mehrfach fehlerhafter Versuche gesperrt. Bitte wenden Sie sich an den Kundenservice.</span></div>
        <div class="c24-cl-pw-forget-text">Bitte geben Sie Ihre E-Mail-Adresse ein. Wir senden Ihnen einen Link, um Ihr Passwort zu erneuern.</div>
        <form id="c24-cl-form-user-pwforget-email" novalidate="">
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label id="cl_email_forget-label" for="cl_email_forget_tan" data-label="E-Mail-Adresse">&nbsp;</label>
                    <input class="c24-cl-input" type="email" data-placeholder="E-Mail-Adresse eingeben" placeholder="E-Mail-Adresse eingeben" name="c24_email" id="cl_email_forget_tan" tabindex="1206">
                </div>
                <div class="c24-cl-error c24-cl_email_forget-error">Diese E-Mail-Adresse ist uns nicht bekannt.</div>
                <div class="c24-cl-error c24-cl_email_forget-error-noval">Bitte geben Sie eine E-Mail-Adresse ein.</div>
                <div class="c24-cl-error c24-cl_email_forget-error-noval2">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
                <div class="c24-cl-error c24-cl_email_forget-error-exists">Es wurde kein passendes Benutzerkonto gefunden. Überprüfen Sie bitte noch mal Ihre Eingaben oder  <a class="c24-customer-login-mobile-opener">melden Sie sich neu an</a>.</div>
            </div>
            <div class="clearfix">
                <input type="submit" id="c24-cl-pw-forget-btn-email" class="c24-button" value="senden »" tabindex="1207">
            </div>
        </form>
    </div>
    <div class="c24-cl-ele c24-cl-content-top c24-cl-pwf-mobile">
        <div class="c24-cl-title">Sie haben Ihr CHECK24 Passwort vergessen?</div>
        <div class="c24-cl-error c24-cl-pw-error c24-cl_pwf_blocked-error clearfix"><span class="c24-cl-error-icon">!</span><span>Ihr Kundenkonto ist aufgrund mehrfach fehlerhafter Versuche gesperrt. Bitte wenden Sie sich an den Kundenservice.</span></div>
        <div class="c24-cl-pw-forget-text">Bitte geben Sie Ihre Mobiltelefonnummer ein. Wir senden Ihnen einen Code, um Ihr Passwort zu erneuern.</div>
        <form id="c24-cl-form-user-pwforget-mobile" novalidate="">
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label id="cl_mobile_forget-label" for="cl_mobile_forget_tan" data-label="Mobiltelefonnummer">&nbsp;</label>
                    <input class="c24-cl-input" type="tel" data-placeholder="Mobiltelefonnummer eingeben" placeholder="Mobiltelefonnummer eingeben" name="c24_phone" id="cl_mobile_forget_tan" tabindex="1306" oninput="this.value=this.value.replace(/[^0-9 \+\-\)\(\.]/,'')">
                </div>
                <div class="c24-cl-error c24-cl_mobile_forget-error">Diese Mobiltelefonnummer ist uns nicht bekannt.</div>
                <div class="c24-cl-error c24-cl_mobile_forget-error-noval">Bitte geben Sie eine Mobiltelefonnummer ein.</div>
                <div class="c24-cl-error c24-cl_mobile_forget-error-noval2">Bitte geben Sie eine gültige Mobiltelefonnummer ein.</div>
                <div class="c24-cl-error c24-cl_mobile_forget-error-exists">Es wurde kein passendes Benutzerkonto gefunden. Überprüfen Sie bitte noch mal Ihre Eingaben oder <a class="c24-customer-login-opener">melden Sie sich mit Ihrer E-Mail Adresse an</a>.</div>
            </div>
            <div class="clearfix">
                <input type="submit" id="c24-cl-pw-forget-btn-mobile" class="c24-button" value="senden »" tabindex="1307">
            </div>
        </form>
    </div>
    <div class="c24-cl-ele c24-cl-content-top c24-cl-pwf-mcode">
        <div class="c24-cl-title">Überprüfung Ihrer Identität</div>
        <div class="c24-cl-error c24-cl-pw-error c24-cl_pwf_blocked-error clearfix"><span class="c24-cl-error-icon">!</span><span>Ihr Kundenkonto ist aufgrund mehrfach fehlerhafter Versuche gesperrt. Bitte wenden Sie sich an den Kundenservice.</span></div>
        <div class="c24-cl-pw-forget-text">Aus Sicherheitsgründen müssen wir Ihre Identität überprüfen. Wir haben einen Code an <span class="c24-cl-pwf-mobile-prefill">0176******70</span> gesendet.<br>Bitte geben Sie den Code hier ein.</div>
        <form id="c24-cl-form-user-pwforget-mcode" novalidate="">
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label id="cl_mcode-label" for="cl_mcode" data-label="Code">&nbsp;</label>
                    <input class="c24-cl-input" type="tel" data-placeholder="Code aus SMS eingeben" placeholder="Code aus SMS eingeben" name="c24_mcode" id="cl_mcode_forget_tan" tabindex="1406">
                </div>
                <div class="c24-cl-error c24-cl_mcode_forget-error">Ungültiger Code. Überprüfen Sie den Code, und versuchen Sie es dann erneut.</div>
                <div class="c24-cl-error c24-cl_mcode_forget-error-noval">Bitte geben Sie einen Code ein.</div>
            </div>
            <div class="clearfix">
                <a class="c24-cl-pw-back c24-cl-back-link">« zurück</a>
                <input type="submit" id="c24-cl-pw-forget-btn-mcode" class="c24-button" value="weiter »" tabindex="1407">
            </div>
        </form>
    </div>
    <div class="c24-cl-ele c24-cl-content-top c24-cl-pwf-ecode">
        <div class="c24-cl-title">Überprüfung Ihrer Identität</div>
        <div class="c24-cl-error c24-cl-pw-error c24-cl_pwf_blocked-error clearfix"><span class="c24-cl-error-icon">!</span><span>Ihr Kundenkonto ist aufgrund mehrfach fehlerhafter Versuche gesperrt. Bitte wenden Sie sich an den Kundenservice.</span></div>
        <div class="c24-cl-pw-forget-text">Aus Sicherheitsgründen müssen wir Ihre Identität überprüfen. Wir haben einen Code an <span class="c24-cl-pwf-email-prefill">ma********mann@****4.de</span> gesendet.<br>Bitte geben Sie den Code hier ein.</div>
        <form id="c24-cl-form-user-pwforget-ecode" novalidate="">
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label id="cl_ecode-label" for="cl_ecode" data-label="Code">&nbsp;</label>
                    <input class="c24-cl-input" type="tel" data-placeholder="Code aus E-Mail eingeben" placeholder="Code aus E-Mail eingeben" name="c24_ecode" id="cl_ecode_forget_tan" tabindex="1506">
                </div>
                <div class="c24-cl-error c24-cl_ecode_forget-error">Ungültiger Code. Überprüfen Sie den Code, und versuchen Sie es dann erneut.</div>
                <div class="c24-cl-error c24-cl_ecode_forget-error-noval">Bitte geben Sie einen Code ein.</div>
            </div>
            <div class="clearfix">
                <a class="c24-cl-pw-back c24-cl-back-link">« zurück</a>
                <input type="submit" id="c24-cl-pw-forget-btn-ecode" class="c24-button" value="weiter »" tabindex="1507">
            </div>
        </form>
    </div>
    <div class="c24-cl-ele c24-cl-content-top c24-cl-pwf-zipcode">
        <div class="c24-cl-title">Überprüfung Ihrer Identität</div>
        <div class="c24-cl-error c24-cl-pw-error c24-cl_pwf_blocked-error clearfix"><span class="c24-cl-error-icon">!</span><span>Ihr Kundenkonto ist aufgrund mehrfach fehlerhafter Versuche gesperrt. Bitte wenden Sie sich an den Kundenservice.</span></div>
        <div class="c24-cl-pw-forget-text">Aus Sicherheitsgründen müssen wir Ihre Identität überprüfen. Bitte geben Sie Ihre Postleitzahl ein.</div>
        <form id="c24-cl-form-user-pwforget-zipcode" novalidate="">
            <div class="clearfix">
                <div class="c24-cl-input-wrapper">
                    <label id="cl_zipcode-label" for="cl_zipcode" data-label="Postleitzahl">&nbsp;</label>
                    <input class="c24-cl-input" type="tel" data-placeholder="Postleitzahl eingeben" placeholder="Postleitzahl eingeben" name="c24_zipcode" id="cl_zipcode_forget_tan" tabindex="1606" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/,'')">
                </div>
                <div class="c24-cl-error c24-cl_zipcode_forget-error">Die eingegebene Postleitzahl ist nicht korrekt.</div>
                <div class="c24-cl-error c24-cl_zipcode_forget-error-noval">Bitte geben Sie Ihre Postleitzahl ein.</div>
            </div>
            <div class="clearfix">
                <a class="c24-cl-pw-back c24-cl-back-link">« zurück</a>
                <input type="submit" id="c24-cl-pw-forget-btn-zipcode" class="c24-button" value="weiter »" tabindex="1607">
            </div>
        </form>
    </div>
    <div class="c24-cl-ele c24-cl-content-top c24-cl-pwf-pwreset">
        <div class="c24-cl-title">Neues Passwort erstellen</div>
        <div class="c24-cl-error c24-cl-pw-error c24-cl_pwf_blocked-error clearfix"><span class="c24-cl-error-icon">!</span><span>Ihr Kundenkonto ist aufgrund mehrfach fehlerhafter Versuche gesperrt. Bitte wenden Sie sich an den Kundenservice.</span></div>
        <form id="c24-cl-form-user-pwreset" novalidate="">
            <div class="c24-cl-wrapper">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_pw_reset" data-label="Passwort eingeben">&nbsp;</label>
                    <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="Passwort auswählen" placeholder="Passwort auswählen" name="password" id="cl_pw_reset" autocomplete="off" tabindex="1709" maxlength="50">
                    <input type="hidden" id="cl_email_reset" val="" style="display:none;">
                    <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                            <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                <circle cx="466.08" cy="466.02" r="134.5"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="c24-cl-error c24-cl_pw_reset-error-noval">Bitte wählen Sie ein Passwort.</div>
                <div class="c24-cl-error c24-cl_pw_reset-error-length">Das Passwort ist zu kurz.</div>
                <div class="c24-cl-error c24-cl_pw_reset-error-length_2"><strong>Achtung!</strong> Die Grenze von 50 Zeichen wurde erreicht!</div>
            </div>
            <div class="c24-cl-pw-strength">
                <div class="c24-cl-pw-strength-text">
                    Passwortstärke: <span id="c24-cl-pw-strength-value-reset"></span>
                </div>
                <div id="c24-cl-pw-strength-status-wrapper-reset">
                    <div id="c24-cl-pw-strength-status-reset"></div>
                </div>
                <div class="c24-cl-pw-strength-info-icon">?</div>
                <div class="c24-cl-pw-strength-info">
                    <div class="c24-cl-pw-strength-info-close">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
                            <polygon fill="#A0A0A0" points="100,80 70,50 100,20 80,0 50,30 20,0 0,20 30,50 0,80 20,100 50,70 80,100 "></polygon>
                        </svg>
                    </div>
                    <div class="c24-cl-pw-strength-info-title">Grundsätzliches zu Passwörtern</div>
                    <ul class="c24-list-haken">
                        <li>Mindestens 6 Zeichen</li>
                        <li>Mischung aus Buchstaben, Ziffern und Symbolen</li>
                        <li>Keine Ähnlichkeit mit Ihrer E-Mail-Adresse</li>
                        <li>Nicht leicht zu erraten (z.B. nicht abc123)</li>
                    </ul>
                </div>
            </div>
            <div class="c24-cl-wrapper">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_pw_reset-repeat" data-label="Passwort wiederholen">&nbsp;</label>
                    <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="Passwort auswählen" placeholder="Passwort auswählen" name="password" id="cl_pw_reset-repeat" autocomplete="off" tabindex="1710" maxlength="50">
                    <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                            <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                <circle cx="466.08" cy="466.02" r="134.5"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="c24-cl-error c24-cl_pw_reset_repeat-error-noval">Bitte wiederholen Sie Ihr Passwort.</div>
                <div class="c24-cl-error c24-cl_pw_reset_repeat-error-compare">Die Passwörter stimmen nicht überein.</div>
            </div>
            <input type="submit" id="c24-cl-pw-forget-btn-pwreset" class="c24-button" value="Änderungen speichern und anmelden »" tabindex="1711">
        </form>
    </div>
</div>    

    
    <div class="c24-cl-ele c24-cl-pw-send">
    <div class="c24-cl-content-top">
        <div class="c24-cl-title">Ihre E-Mail ist unterwegs</div>
        <div class="c24-cl-pw-send-text">
            Wir haben an <strong id="c24-cl-user-email"></strong> eine E-Mail mit einem Link zum Zurücksetzen des Passworts gesendet.<br><br>
            Wenn Sie diese E-Mail nicht erhalten haben, sehen Sie bitte in Ihrem Spam-Ordner nach.
        </div>
        <div class="clearfix">
            <a class="c24-cl-pw-back c24-cl-back-link c24-cl-back-event">« zurück zur Anmeldung</a>
        </div>
    </div>
</div>    

    
    <div class="c24-cl-ele c24-cl-register">
    <form id="c24-cl-form-user-register" novalidate="">
        <div class="c24-cl-content-top">
            <div class="c24-cl-title">
                <span id="c24-cl-register-init">Jetzt CHECK24 Kundenkonto anlegen und Vorteile nutzen!</span>
                <span id="c24-cl-register-email">Diese E-Mail-Adresse ist uns noch nicht bekannt. Möchten Sie ein CHECK24 Kundenkonto anlegen?</span>
            </div>
            <div class="c24-cl-bullets">
                <ul class="c24-list-haken">
                    <li>Alle Abschlüsse im Überblick</li>
                    <li>Bei den CHECK24 Vergleichen Zeit sparen</li>
                    <li>Exklusive Angebote und Gutscheine</li>
                </ul>
            </div>
            <div class="c24-cl-register-email clearfix">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_email_register" data-label="E-Mail-Adresse" id="cl_email_register_label">&nbsp;</label>
                    <input class="c24-cl-input" type="email" data-placeholder="E-Mail-Adresse eingeben" placeholder="E-Mail-Adresse eingeben" name="username" id="cl_email_register" tabindex="1208">
                </div>
                <div class="c24-cl-error c24-cl_email_register-error">E-Mail-Adresse ist nicht korrekt.</div>
                <div class="c24-cl-error c24-cl_email_register-error-noval">Bitte geben Sie eine E-Mail-Adresse ein.</div>
                <div class="c24-cl-error c24-register-login-error">Es existiert bereits ein Kundenkonto mit der E-Mail-Adresse <span id="c24-register-login-error-email"></span>.<br><a class="c24-customer-login-opener">jetzt anmelden</a></div>
            </div>
            <div class="c24-cl-wrapper">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_pw_register" data-label="Passwort">&nbsp;</label>
                    <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="Passwort erstellen (mind. 6 Zeichen)" placeholder="Passwort erstellen (mind. 6 Zeichen)" name="password" id="cl_pw_register" autocomplete="off" tabindex="1209" maxlength="50">
                    <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                            <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                <circle cx="466.08" cy="466.02" r="134.5"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="c24-cl-error c24-cl_pw_register-error-noval_1">Bitte wählen Sie ein Passwort.</div>
                <div class="c24-cl-error c24-cl_pw_register-error-length">Das Passwort ist zu kurz.</div>
                <div class="c24-cl-error c24-cl_pw_register-error-length_2"><strong>Achtung!</strong> Die Grenze von 50 Zeichen wurde erreicht!</div>
            </div>
            <div class="c24-cl-pw-strength">
                <div class="c24-cl-pw-strength-text">
                    Passwortstärke: <span id="c24-cl-pw-strength-value"></span>
                </div>
                <div id="c24-cl-pw-strength-status-wrapper">
                    <div id="c24-cl-pw-strength-status"></div>
                </div>
                <div class="c24-cl-pw-strength-info-icon">?</div>
                <div class="c24-cl-pw-strength-info">
                    <div class="c24-cl-pw-strength-info-close">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
                                <polygon fill="#A0A0A0" points="100,80 70,50 100,20 80,0 50,30 20,0 0,20 30,50 0,80 20,100 50,70 80,100 "></polygon>
                            </svg>
                    </div>
                    <div class="c24-cl-pw-strength-info-title">Grundsätzliches zu Passwörtern</div>
                    <ul class="c24-list-haken">
                        <li>Mindestens 6 Zeichen</li>
                        <li>Mischung aus Buchstaben, Ziffern und Symbolen</li>
                        <li>Keine Ähnlichkeit mit Ihrer E-Mail-Adresse</li>
                        <li>Nicht leicht zu erraten (z.B. nicht abc123)</li>
                    </ul>
                </div>
            </div>
            <div class="c24-cl-wrapper">
                <div class="c24-cl-input-wrapper">
                    <label for="cl_pw_register_repeat" data-label="Passwort wiederholen">&nbsp;</label>
                    <input class="c24-cl-input c24-cl-input-password" type="password" data-placeholder="Passwort wiederholen" placeholder="Passwort wiederholen" name="password_repeat" id="cl_pw_register_repeat" autocomplete="off" tabindex="1210" maxlength="50">
                    <div class="c24-cl-pw-toggle c24-cl-pw-show" title="Passwort anzeigen">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 22" version="1.1" x="0px" y="0px" xml:space="preserve">
                            <g transform="matrix(.02146 0 0 .02146 1 1)" fill="#a0a0a0">
                                <path d="m466.07 161.53c-205.6 0-382.8 121.2-464.2 296.1-2.5 5.3-2.5 11.5 0 16.9 81.4 174.9 258.6 296.1 464.2 296.1 205.6 0 382.8-121.2 464.2-296.1 2.5-5.3 2.5-11.5 0-16.9-81.4-174.9-258.6-296.1-464.2-296.1m0 514.7c-116.1 0-210.1-94.1-210.1-210.1 0-116.1 94.1-210.1 210.1-210.1 116.1 0 210.1 94.1 210.1 210.1 0 116-94.1 210.1-210.1 210.1"></path>
                                <circle cx="466.08" cy="466.02" r="134.5"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="c24-cl-pw-toggle c24-cl-pw-hide" title="Passwort verstecken">
                        <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#a0a0a0" d="M11.83,9L15,12.16C15,12.11 15,12.05 15,12A3,3 0 0,0 12,9C11.94,9 11.89,9 11.83,9M7.53,9.8L9.08,11.35C9.03,11.56 9,11.77 9,12A3,3 0 0,0 12,15C12.22,15 12.44,14.97 12.65,14.92L14.2,16.47C13.53,16.8 12.79,17 12,17A5,5 0 0,1 7,12C7,11.21 7.2,10.47 7.53,9.8M2,4.27L4.28,6.55L4.73,7C3.08,8.3 1.78,10 1,12C2.73,16.39 7,19.5 12,19.5C13.55,19.5 15.03,19.2 16.38,18.66L16.81,19.08L19.73,22L21,20.73L3.27,3M12,7A5,5 0 0,1 17,12C17,12.64 16.87,13.26 16.64,13.82L19.57,16.75C21.07,15.5 22.27,13.86 23,12C21.27,7.61 17,4.5 12,4.5C10.6,4.5 9.26,4.75 8,5.2L10.17,7.35C10.74,7.13 11.35,7 12,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="c24-cl-error c24-cl_pw_register-error-noval_2">Bitte wiederholen Sie Ihr Passwort.</div>
                <div class="c24-cl-error c24-cl_pw_register-error-compare">Die Passwörter stimmen nicht überein.</div>
            </div>
            <div class="c24-cl-terms">
                Mit Klick auf "jetzt registrieren" eröffnen Sie Ihr CHECK24 Kundenkonto, für das die <span class="c24-cl-terms-link" data-href="https://kundenbereich.check24.de/terms.html">Nutzungsbedingungen</span> der CHECK24 GmbH in 80251 München gelten. Die Datenschutzhinweise der CHECK24 GmbH finden Sie <span class="c24-cl-terms-link" data-href="https://www.check24.de/popup/datenschutz-check24-gmbh/">hier</span>.
            </div>
            <input type="submit" class="c24-button" value="jetzt registrieren »" tabindex="1211">
        </div>
    </form>
    <div class="c24-cl-content-bottom">
        <div class="clearfix">Sie haben ein Konto? <a class="c24-customer-login-opener">Anmelden</a></div>
    </div>
</div>    
</div>

        </header>              </div>
    </div>

    
    
    <div class="c24-page-container" id="c24-page-container-content">
      <div id="c24-page-content" class="c24-page">
                <div id="c24-content" class="clearfix">
          <div id="c24-content-headerbox" class="c24-container-12"></div>    <div id="c24-content-main">
        <div class="c24-phv-header">
        <h1>
                        <strong>Privathaftpflicht-Vergleich</strong>
                    </h1>
    </div>
<div id="c24-phv">
    <div id="c24-progress">
        <ul class="c24-progress-steps">
            <li class="c24-progress-step c24-progress-step-1 c24-progress-step--active">Ihre Daten</li>
            <li class="c24-progress-step c24-progress-step-2">Vergleich</li>
        </ul>
    </div>
    <div id="c24-input1" data-c24-is-non-ios-tablet="0">
        <form method="GET" name="input1" id="c24-input1-form" class="input_form" action="/privathaftpflicht/benutzereingaben/ergebnis/" data-c24-bpm-active="1" data-c24-bpm-user-hash="9e044c6309ce4459d7f2c3b1b121bbfe2abfb634" style="min-height: 329.5px;" novalidate="true">        <div class="c24-input1-insurance c24-input1-insurance--personal">
            <h2>Persönliche Daten</h2>
            <div class="input_row clearfix">
                <div class="input_row_col1 selected"><strong>Wen</strong> möchten Sie versichern?</div>
                <div class="input_row_col2 c24-phv-coinsured selected">
                    <input type="radio" name="coinsured" class="FormRadio" required="required" data-default-value="1" data-datasource="QUERY_PARAM" value="1" checked="checked" id="coinsured_1"><label class="c24-coinsured-box c24-coinsured-singlewithoutchild" tabindex="2" for="coinsured_1"><span class="c24-coinsured-label">Single<br>&nbsp;</span></label><input type="radio" name="coinsured" class="FormRadio" required="required" data-default-value="1" data-datasource="QUERY_PARAM" value="4" id="coinsured_4"><label class="c24-coinsured-box c24-coinsured-couplewithchild" tabindex="3" for="coinsured_4"><span class="c24-coinsured-label">Familie mit Kind/ern</span></label><input type="radio" name="coinsured" class="FormRadio" required="required" data-default-value="1" data-datasource="QUERY_PARAM" value="2" id="coinsured_2"><label class="c24-coinsured-box c24-coinsured-couplewithoutchild" tabindex="4" for="coinsured_2"><span class="c24-coinsured-label">Paar<br>ohne Kind</span></label><input type="radio" name="coinsured" class="FormRadio" required="required" data-default-value="1" data-datasource="QUERY_PARAM" value="8" id="coinsured_8"><label class="c24-coinsured-box c24-coinsured-singlewithchild" tabindex="5" for="coinsured_8"><span class="c24-coinsured-label">Single mit Kind/ern</span></label>                </div>
                <div class="input_row_col3">?</div>
                <div class="help_container selected" style="top: 21.5px; display: none;">
                    <span class="help_corner">&nbsp;</span>
                    <p>
                        <strong>Single</strong><br>
                        Wenn Sie nur sich selbst versichern möchten, keine (Ehe-) Partner oder Kinder.<br><br>
                        <strong>Familie mit Kindern</strong><br>
                        Wenn Sie sich selbst, Ihren (Ehe-) Partner und Ihre Kinder versichern möchten. Kinder sind bis
                        zum Ende ihrer Erstausbildung (Berufsausbildung oder Studium) mitversichert.<br><br>
                        <strong>Paar ohne Kind</strong><br>
                        Wenn Sie sich selbst, Ihren Ehepartner oder einen Partner, der mit Ihnen zusammenlebt,
                        versichern möchten.<br><br>
                        <strong>Single mit Kindern</strong><br>
                        Wenn Sie sich selbst und Ihre Kinder versichern möchten.<br><br>
                        Kinder sind bis zum Ende ihrer Erstausbildung (Berufsausbildung oder Studium) mitversichert.
                        <br><br>
                        <strong>Hinweis</strong><br>Kinder können Sie nur dann mitversichern, wenn diese noch nicht verheiratet sind und
                        ihre Erstausbildung noch nicht beendet oder unterbrochen haben. Die Erstausbildung umfasst
                        Schule und direkt anschließende Lehre oder Studium.
                    </p>
                </div>
            </div>
            <div class="input_row clearfix">
                <div class="input_row_col1 input_row_col1--single-line field_hint selected">
                    Wann ist
                    <strong>Ihr Geburtsdatum</strong>?
                    <div>
                        Der Preis der Versicherung hängt von Ihrem Alter ab.
                    </div>
                </div>
                <div class="input_row_col2 selected">
                    <input type="tel" name="birthdate" id="c24-input1-birthdate" autocomplete="off" maxlength="10" placeholder="TT.MM.JJJJ" required="required" class="inputbox" tabindex="6" data-default-value="">                </div>
                <div class="input_row_col3 selected">?</div>
                <div class="help_container selected" style="top: 21.5px; display: block;">
                    <span class="help_corner">&nbsp;</span>
                    <strong>Warum fragen wir das?</strong><br><br>
                    <p>
                        Wir benötigen Ihr <strong>Geburtsdatum</strong> für die persönliche Tarifberechnung. Einige Versicherer bieten
                        Rabatte für bestimmte Altersgruppen (z.B. "Junge Leute"-Tarife).
                    </p>
                </div>
            </div>
            <div class="input_row clearfix">
                <div class="input_row_col1 input_row_col1--single-line field_hint">
                    Ihre <strong>Postleitzahl</strong>?
                    <div>
                        Der Preis der Versicherung hängt von Ihrem Wohnort ab.
                    </div>
                </div>
                <div class="input_row_col2 selected">
                    <input type="tel" name="zipcode" id="zipcode" placeholder="PLZ" minlength="5" maxlength="5" class="inputbox horiz small inputbox" required="required" tabindex="7" data-default-value="">                    <div class="text_after_inputbox" id="city_label"></div>
                    <input type="text" name="city" id="city_text" placeholder="Bitte erst PLZ" data-inline-error-dependency="city_select" style="display: none" class="inputbox" tabindex="8" data-default-value="" disabled="disabled"><select name="city_select" id="city_select" style="display: none" class="select inputbox" tabindex="8" data-default-value=""></select>                </div>

                <div class="input_row_col3">?</div>
                <div class="help_container" style="display: none;">
                    <span class="help_corner">&nbsp;</span>
                    <strong>Warum fragen wir das?</strong><br><br>
                    <p>
                        Der Beitrag für manche Versicherungen kann sich neben Ihren gewünschten Leistungen auch an der
                        Art und Anzahl der Schäden bemessen, die in Ihrem Wohnort durchschnittlich gemeldet werden.
                    </p>
                </div>
            </div>
            <div class="input_row clearfix">
                <div class="input_row_col1">
                    Sind Sie im <strong>öffentlichen Dienst</strong><br>beschäftigt?
                </div>
                <div class="input_row_col2 input_row_radio_horiz">
                    <input type="radio" name="public_service" id="public_service_yes" class="FormRadio" required="required" data-default-value="no" data-datasource="QUERY_PARAM" value="yes"><label class="radiobox_h_first" tabindex="9" for="public_service_yes"><span class="radio_h"><span></span></span> ja</label><input type="radio" name="public_service" class="FormRadio" required="required" data-default-value="no" data-datasource="QUERY_PARAM" value="no" checked="checked" id="public_service_no"><label class="radiobox_h" tabindex="10" for="public_service_no"><span class="radio_h"><span></span></span> nein</label>                </div>
                <div class="input_row_col3">?</div>
                <div class="help_container" style="display: none;">
                    <span class="help_corner">&nbsp;</span>
                    <strong>Warum fragen wir das?</strong><br><br>
                    <p>
                        Einige Versicherer bieten Rabatte für Beamte und Angestellte des
                        <strong>öffentlichen Dienstes</strong>. Das gilt auch für Personen, die bis zu ihrer
                        Pensionierung im öffentlichen Dienst beschäftigt waren und sich nun im Ruhestand befinden.
                    </p>
                </div>
            </div>
        </div>

        <div class="c24-input1-insurance c24-input1-insurance--personal">
            <h2>Empfehlung nach Stiftung Warentest</h2>
            <div class="input_row clearfix">
                <div class="input_row_col1 input_row_col1--single-line field_hint">
                    Mindestens <strong>Stiftung Warentest Grundschutz</strong>?
                </div>
                <div class="input_row_col2">
                    <input type="radio" name="protection_level" id="protection_level_basic" class="FormRadio" required="required" data-default-value="none" value="basic"><label class="radiobox_h_first" tabindex="11" for="protection_level_basic"><span class="radio_h"><span></span></span> ja</label><input type="radio" name="protection_level" class="FormRadio" required="required" data-default-value="none" value="none" checked="checked" id="protection_level_none"><label class="radiobox_h" tabindex="12" for="protection_level_none"><span class="radio_h"><span></span></span> nein</label>                </div>
                <div class="input_row_col3">?</div>
                <div class="help_container" style="display: none;">
                    <span class="help_corner">&nbsp;</span>
                    <strong>Mindestens Stiftung Warentest Grundschutz</strong><br><br>
                    <p>
                        Stiftung Warentest nennt dreizehn Mindest-Kriterien für einen guten Privathaftpflicht-Grundschutz
                        (Finanztest Ausgabe 01/2019). Wählen Sie "ja", um auf der nächsten Seite
                        nur Tarife zu sehen, die diese Anforderungen vollständig erfüllen.<br>
                        Unter anderem umfassen die Stiftung Warentest Kriterien:
                        </p><ul>
                            <li>
                                <img class="c24-icon-list--icon--small" src="Privathaftpflicht%20Vergleich%20-%20G%C3%BCnstige%20private%20Haftpflicht%20|%20CHECK24_files/C_Plus_Green.svg" alt="">
                                Deckungssumme mind. &nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;Mio.&nbsp;€
                            </li>
                            <li>
                                <img class="c24-icon-list--icon--small" src="Privathaftpflicht%20Vergleich%20-%20G%C3%BCnstige%20private%20Haftpflicht%20|%20CHECK24_files/C_Plus_Green.svg" alt="">
                                Mietsachschäden mind. &nbsp;&nbsp;&nbsp;&nbsp;0,3&nbsp;Mio.&nbsp;€
                            </li>
                            <li>
                                <img class="c24-icon-list--icon--small" src="Privathaftpflicht%20Vergleich%20-%20G%C3%BCnstige%20private%20Haftpflicht%20|%20CHECK24_files/C_Plus_Green.svg" alt="">
                                Auslandsaufenthalte in Europa &nbsp;&nbsp;&nbsp;&nbsp;mind. 36 Monate
                            </li>
                            <li>
                                <img class="c24-icon-list--icon--small" src="Privathaftpflicht%20Vergleich%20-%20G%C3%BCnstige%20private%20Haftpflicht%20|%20CHECK24_files/C_Plus_Green.svg" alt="">
                                Schäden durch Internet- &nbsp;&nbsp;&nbsp;&nbsp;nutzung mind. 50.000&nbsp;€
                            </li>
                            <li>
                                <img class="c24-icon-list--icon--small" src="Privathaftpflicht%20Vergleich%20-%20G%C3%BCnstige%20private%20Haftpflicht%20|%20CHECK24_files/C_Plus_Green.svg" alt="">
                                Häusliche Abwässer mind. &nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;Mio.&nbsp;€
                            </li>
                        </ul>
                    <p></p>
                </div>
            </div>
        </div>

                    <div class="c24-input1-insurance c24-input1__first-information input_section">
    <div id="first-information-block" class="first-information-block">
        <div class="input_row first-information">
            <input type="hidden" name="first_information_accepted" value="no"><input type="checkbox" name="first_information_accepted" id="first_information_accepted" required="required" data-default-value="" value="yes">            <label class="checkbox border_1px" for="first_information_accepted">
                Ich bestätige, die Erstinformationen des Versicherungsmaklers gemäß <nobr>§ 15 VersVermV</nobr> heruntergeladen und gelesen zu haben.            </label>
            <div class="c24-input1__first-information__download-link">
                <a href="https://privathaftpflicht.check24.de/file/product/first_information/10000/Erstinformation.pdf" target="_blank" title="Erstinformation herunterladen">
                    <img class="pdf-graphic" src="images/D_PDF.svg">
                    Erstinformation herunterladen                </a>
            </div>
        </div>
    </div>
</div>


        
<!--
        <div class="c24-input1-insurance c24-input1-insurance--submit">
            <input type="hidden" name="min_insure_sum" tabindex="13" value="5"><input type="hidden" name="max_costsharing" tabindex="14" value="0"><input type="hidden" name="contract_period_3" tabindex="15" value="no"><input type="hidden" name="paymentperiod" tabindex="16" value="year"><input type="hidden" name="childrenunder7or10" tabindex="17" value="no"><input type="hidden" name="riskcoverage" tabindex="18" value="no"><input type="hidden" name="topperformanceguarantee" tabindex="19" value="no"><input type="hidden" name="voluntaryactivities" tabindex="20" value="no"><input type="hidden" name="usehorses" tabindex="21" value="no"><input type="hidden" name="surfingown" tabindex="22" value="no"><input type="hidden" name="surfingthirdparty" tabindex="23" value="no"><input type="hidden" name="sailingown" tabindex="24" value="no"><input type="hidden" name="sailingthirdparty" tabindex="25" value="no"><input type="hidden" name="motorboatown" tabindex="26" value="no"><input type="hidden" name="motorboatthirdparty" tabindex="27" value="no"><input type="hidden" name="kitesports" tabindex="28" value="no"><input type="hidden" name="aircraftmodelswithengine" tabindex="29" value="no"><input type="hidden" name="keyloss_apartment" tabindex="30" value="no"><input type="hidden" name="keyloss_jobrelated" tabindex="31" value="no"><input type="hidden" name="gratuitousservices" tabindex="32" value="no"><input type="hidden" name="rentedpropertydamage" tabindex="33" value="no"><input type="hidden" name="borroweditemdamage" tabindex="34" value="no"><input type="hidden" name="europeinternetdamage" tabindex="41" value="0"><input type="hidden" name="policybymail" tabindex="35" value=""><input type="hidden" name="grade" tabindex="36" value="4"><input type="hidden" name="min_stars" tabindex="37" value="0"><input type="hidden" name="sortfield" tabindex="38" value="rzprice"><input type="hidden" name="sortorder" tabindex="39" value="asc"><input type="hidden" name="foreignId" tabindex="40" value=""><input type="submit" name="submit" class="hidden" tabindex="43" data-default-value="" value="">            <a id="c24-input1-submitbutton" class="c24-button-xxxl" tabindex="43">
                Tarife anzeigen
                <span class="double-arrow-right">»</span>
                <div class="c24-phv-page-loader-spinner c24-phv-page-loader-spinner--button"></div>
            </a>
            <span class="c24-input1-result-info">
                <i class="fa fa-clock-o"></i>
                <span class="c24-input1-result-info-text"></span>
            </span>
        </div>
                        -->

        </form>    </div>
</div>
<div class="trust_footer_block">
    <div class="box24Inner clearfix">
        <div class="footer_title">
            Das CHECK24 Kundenversprechen für Privathaftpflichtversicherungen
        </div>
        <table class="outer-table">
            <tbody><tr>
                <td>
                    <div class="text-bullet-margin">
                        <div class="green_checkmark_small_trust_footer">
                            <span><b>Bequem:</b> schnell und unkompliziert online beantragen</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="text-bullet-margin">
                        <div class="green_checkmark_small_trust_footer">
                            <span><b>Persönlich:</b> Beratung durch Experten – auch nach dem Antrag</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="text-bullet-margin">
                        <div class="green_checkmark_small_trust_footer">
                            <span><b>Transparent:</b> keine versteckten Zusatzkosten</span>
                        </div>
                    </div>
                </td>
                <td class="one-percent-width">
                    <table class="inner-table one-percent-width">
                        <tbody><tr>
                                                            <td class="inner-table-td-padding">
                                    <div class="trust_footer_ekomi c24-tooltip-trigger" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate" data-tooltip-pos="center left" data-tooltip-corner-pos="center right" data-tooltip-width="500px" data-tooltip-sticky-time="true" data-tooltip-pos-adjust-method="none none">
                                        <div class="c24-tooltip-content">
                                            <div class="tooltip-text tooltip-text-ekomi">
                                                <h2>eKomi Kundenauszeichnung: Versicherungsvergleich</h2>
                                                <h3>Zertifizierung für Kundenzufriedenheit</h3>
                                                <p>
                                                    Über den unabhängigen Bewertungsdienstleister eKomi können Kunden
                                                    den Service von CHECK24 mit einem bis fünf Sternen bewerten. Der
                                                    Versicherungsvergleich von CHECK24 und der Kundenservice werden im
                                                    Gesamtschnitt als sehr gut eingeschätzt. Durch die transparente
                                                    Einbindung auf unserer Seite können sich Interessierte die
                                                    Einschätzungen anderer Verbraucher ansehen und sich so selbst ein
                                                    objektives Bild machen.
                                                </p>
                                                <p class="siegel-creation-text">
                                                    Das "eKomi Kundenauszeichnung"-Siegel wurde erteilt von:
                                                </p>
                                                <p>
                                                    eKomi Ltd<br>
                                                    Markgrafenstr. 11<br>
                                                    10969 Berlin<br>
                                                    <a target="_blank" href="http://www.ekomi.de/">www.ekomi.de</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="c24-rating-stars left rating-margin">
                                                <div class="c24-rating-stars-active" style="width:91.14px;" title="4,9 von 5 Sternen">
                                                </div>
                                            </div>
                                            <span itemprop="average" class="average">
                                                4,9                                            </span>
                                            <span class="average-font-size"> / <span itemprop="best">5</span></span>
                                            <span itemprop="votes">18.394</span>&nbsp;Bewertungen<br>
                                            <span>(letzte 12 Monate)</span>
                                        </div>

                                    </div>
                                </td>
                                                        <td class="inner-table-td-padding no-padding-left">
                                <div class="logo-ngg-result c24-tooltip-trigger" data-tooltip-pos="center left" data-tooltip-corner-pos="center right" data-tooltip-width="650px" data-tooltip-sticky-time="true" data-tooltip-pos-adjust-method="none none">
                                    <div class="c24-tooltip-content">
                                        <div class="tooltip-text tooltip-text-tuev">
                                            <h2>CHECK24 Nirgendwo Günstiger Garantie</h2>
                                            <p>
                                                <span class="logo-ngg-result hinttippicture right"></span>
                                                CHECK24 liefert Ihnen die besten Preise: Wir garantieren Ihnen,
                                                dass die ausgewiesenen Tarife der einzelnen Versicherer nirgendwo
                                                günstiger zu erhalten sind - auch nicht direkt beim Versicherer
                                                oder anderen Vergleichsportalen.<br><br>
                                            </p>
                                            <p>
                                                Wenn Sie eine Privathaftpflichtversicherung über CHECK24 abgeschlossen
                                                haben und Ihnen wider Erwarten ein günstigeres Angebot des selben
                                                Tarifs mit gleichen Bedingungen vorliegen sollte, zahlen wir Ihnen
                                                den Differenzbetrag für die Dauer des Versicherungsvertrags
                                                (jedoch für maximal ein Jahr) unverzüglich zurück - ohne Wenn und Aber.
                                                <a target="_blank" href="https://www.check24.de/privathaftpflicht/ngg/">Hier erfahren Sie mehr »</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="inner-table-td-padding">
                                <div class="logo-tuev-result c24-tooltip-trigger" data-tooltip-pos="center left" data-tooltip-corner-pos="center right" data-tooltip-width="650px" data-tooltip-sticky-time="true" data-tooltip-pos-adjust-method="none none">
                                    <div class="c24-tooltip-content">
                                        <div class="tooltip-text tooltip-text-tuev">
                                            <h2>TÜV Service Tested: Versicherungsvergleich</h2>
                                            <h3>Zertifizierung für Servicequalität, Freundlichkeit und
                                                Fachkompetenz</h3>
                                            <p>
                                                <span class="logo-tuev-result hinttippicture right"></span>
                                                Im TÜV Service Test wurde der Versicherungsvergleich von CHECK24 schon
                                                mehrfach für „sehr gut“ befunden. Der Service hat insgesamt die
                                                Bestnote bei der unabhängigen Prüfung erhalten und damit ein
                                                überdurchschnittlich gutes Ergebnis erzielt. Insbesondere die
                                                Fachkompetenz und Freundlichkeit der Mitarbeiter wurden sehr hoch
                                                bewertet.
                                            </p>
                                            <p class="siegel-creation-text">
                                                Das "TÜV Service Tested"-Siegel wurde erteilt von:
                                            </p>
                                            <p>
                                                TÜV Saarland Holding GmbH<br>
                                                Am TÜV 1<br>
                                                66280 Sulzbach<br>
                                                <a target="_blank" href="http://www.service-tested.de/">www.service-tested.de</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </div>
</div>
</div>

        </div>
      </div>
    </div>
    
    
    <div class="c24-page-container" id="c24-page-container-footer">
      <div class="c24-page">
            <footer class="c24-footer clearfix">
    <div class="c24-nav-blocking-layer-footer"></div>
    <div id="c24-footer">
        <div class="c24-grid-flex-content">
            <div class="c24-footer-top-content">
                
                <ul class="c24-footer-nav clearfix">
                    <li><a class="c24-footer-nav-ele" href="https://www.check24.de/sachversicherungen/agb/?displaymode=blank" title="AGB">AGB</a></li>
                    <li><a class="c24-footer-nav-ele" href="https://www.check24.de/sachversicherungen/datenschutz/?displaymode=blank" title="Datenschutz">Datenschutz</a></li>
                    <li><a class="c24-footer-nav-ele" href="https://www.check24.de/unternehmen/impressum/#comp3?displaymode=blank" title="Impressum">Impressum</a></li>
                    
                                            <li><a class="c24-footer-nav-ele" href="https://www.check24.de/sachversicherungen/erstinformation/?displaymode=blank" target="_blank">Erstinformation</a></li>
                                        
                </ul>
                
                <div class="c24-footer-copyright clearfix">
                    
                    © 2019
                                            
    CHECK24 Vergleichsportal für Sachversicherungen GmbH.
                                         <span>Alle Inhalte unterliegen unserem Copyright.</span>                    
                </div>
            </div>
        </div>
        
        <div class="c24-footer-bottom clearfix">
            <div class="c24-grid-flex-content">
                <a href="https://www.check24.de/?displaymode=blank" class="c24-footer-logo" title="CHECK24 - Deutschlands größtes Vergleichsportal">
                        <div class="c24-footer-logo-wrapper">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 3000 580" xml:space="preserve" preserveAspectRatio="xMinYMin">
        <g>
            <path fill="#FFFFFF" d="M146.4,376.7L146.4,376.7c-38.9,0-79.1-0.9-105.5-12.2C27.2,358.7,17.7,350.9,11,340c-7.4-12-11-27.6-11-47.5
        c0-15.2,2.2-33,6.4-53.1c1-4.6,23.9-111.6,25.4-117.3C37.9,99.8,45.5,81.4,55.2,66c16.7-26.5,39-43.6,70.1-53.8
        C151.2,3.8,184.2,0,232.1,0h0.4c25.2,0,45.9,1.8,63.3,5.4c20.5,4.3,36.2,11.4,46.6,20.9c7.8,7.2,12.8,15.9,14.9,26
        c1.1,5.1,1.6,10.8,1.6,16.9c0,14.2-2.9,29.1-5.2,41c-0.3,1.8-0.7,3.4-1,5.1l-0.1,0.5h-92.8l0.1-0.7c0,0,0.3-2.8,0.4-4.1
        c0-0.1,0.4-3.8,0.4-9.2c0-8.1-3.8-14.4-11.5-19.3c-6.1-3.5-14-4.7-21.5-5.6c-8-1-17-1.1-25.5-1.1c-15.6,0-27.4,1.2-37.1,3.9
        c-7.7,2.1-14.2,5.2-19.6,9.3c-7.7,5.8-13.7,14.2-18.3,25.6c-4.3,10.6-7.4,23.3-10.8,39l-12.5,60c-4.1,19.3-7,33.9-7,46.5
        c0,7.3,1,13,3.1,18.1c3.3,8.1,10.3,14.4,19.8,17.8c9.1,3.3,20.7,4.8,37.5,4.8c11.2,0,20.4-0.2,28.8-1.2
        c14.5-1.7,24.9-6.1,32.7-13.7c8.5-8.2,14.2-20.4,18-38.3l1.3-6.1h91.8v0.6c0,0.7-5.2,24.8-7.9,34.5c-2.8,10.1-5.8,18.6-9.3,26.2
        c-8.9,19.4-21.3,34.4-39.1,47.1c-17.2,12-35.5,19.4-57.6,23.3c-19,3.3-38.5,3.6-60.1,3.6C155.9,376.8,147.5,376.7,146.4,376.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1174.7,376.7L1174.7,376.7c-38.9,0-79.1-0.9-105.5-12.2c-13.7-5.8-23.2-13.6-29.9-24.5
        c-7.4-12-11-27.6-11-47.5c0-15.2,2.2-33,6.4-53.1c1-4.6,23.9-111.6,25.4-117.3c6-22.3,13.7-40.7,23.4-56.1
        c16.7-26.5,39-43.6,70.1-53.8C1179.5,3.8,1212.5,0,1260.4,0h0.4c25.2,0,45.9,1.8,63.3,5.4c20.5,4.3,36.2,11.4,46.6,20.9
        c7.8,7.2,12.8,15.9,14.9,26c1.1,5.1,1.6,10.8,1.6,16.9c0,14.2-2.9,29.1-5.2,41.1c-0.3,1.7-0.7,3.4-1,5.1l-0.1,0.5h-92.8l0.1-0.7
        c0,0,0.3-2.8,0.4-4.1c0-0.1,0.4-3.8,0.4-9.2c0-8.1-3.8-14.4-11.5-19.3c-6.1-3.5-14-4.7-21.5-5.6c-8-1-17-1.1-25.5-1.1
        c-15.6,0-27.4,1.2-37.1,3.9c-7.7,2.1-14.1,5.2-19.6,9.3c-7.7,5.8-13.7,14.2-18.3,25.6c-4.3,10.6-7.4,23.3-10.8,39l-12.7,59.8
        c-4.1,19.3-7,33.9-7,46.5c0,7.3,1,13,3.1,18.1c3.3,8.1,10.3,14.4,19.8,17.8c9.1,3.3,20.7,4.8,37.5,4.8c11.2,0,20.4-0.2,28.8-1.2
        c14.5-1.7,24.9-6.1,32.7-13.7c8.5-8.2,14.2-20.4,18-38.3l1.3-6.1h91.8v0.6c0,0.7-5.2,24.8-7.9,34.5c-2.8,10.1-5.8,18.6-9.3,26.2
        c-8.9,19.5-21.3,34.4-39.1,47.1c-17.2,12-35.5,19.4-57.6,23.3c-19,3.3-38.5,3.6-60.1,3.6h-0.3
        C1183.5,376.7,1175.8,376.7,1174.7,376.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M975.5,373.7h-267l0.2-0.7l74.7-351.4c1.3-6.5,3.7-10.9,7.6-13.9c4-3.1,9.5-4.6,16.8-4.6h225.3
        c5.6,0,9.6,1.3,12,3.7c1.8,1.9,2.8,4.6,2.8,7.9V15c0,1.4-0.2,2.7-0.5,4.1l-11.6,54.8H861.4l-15.1,72.7H1010l-14.9,68.5H831.4
        l-18.6,87.7h178L975.5,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1454.3,373.7h-89l0.2-0.7l74.4-350.1c1.8-7.6,4.6-12.8,8.8-16c3.3-2.5,7.5-3.7,12.9-3.7h52.7
        c5.7,0,9.9,1.3,12.6,3.9c2.1,2,3.2,5,3.2,8.5c0,1.1-0.1,2.2-0.3,3.3L1454.3,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1699.4,373.7h-112.2l-0.2-0.4l-83.1-192.2l0.3-0.3l143.7-156c8.9-9.7,14.1-14.6,18.8-17.5
        c5-3.1,9.4-4.2,16.6-4.2h72.4c3.4,0,5.5,1.1,6.7,2.1c0.7,0.6,1.2,1.2,1.5,1.8c0.2,0.4,0.4,0.9,0.4,1.5h0.1l-0.1,1.2
        c-0.1,1.5-0.9,4-3.9,7.3l-155.1,166.7L1699.4,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M573.8,373.7h-0.7l0.2-0.7l31.6-149.7H458.2l-32,150.4h-89l0.2-0.7c3-14.2,73.7-348,74.2-349.9
        c2.6-11,7-14.8,10.5-16.8c3.8-2.2,9.1-3.2,16.6-3.2h48.1c2.5,0,6.6,1.1,9.7,3.3c1.7,1.2,3,2.6,3.8,4.1c1,1.8,1.5,3.8,1.5,6.1
        c0,1-0.1,2.1-0.3,3.2c-0.4,2.1-24.8,116.2-27.2,127.5h146.8C633,91,647.3,23.9,647.5,23.1c2.6-11,7-14.8,10.5-16.8
        c3.8-2.2,9.1-3.2,16.6-3.2h48.1c2.5,0,6.6,1.1,9.7,3.3c1.7,1.2,3,2.6,3.8,4.1c1,1.8,1.5,3.8,1.5,6.1c0,1-0.1,2.1-0.3,3.2
        c-0.4,2.2-72.1,339-75.2,353.4l-0.1,0.5L573.8,373.7z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M1961.9,75.5c6.9,1.8,12.3,5.2,15.2,10.9l0,0c1.9,3.8,2.8,8.2,2.8,13.5l0,0c0,5.4-0.9,11.7-2.4,19.1l0,0
        c-2.1,9.7-4.1,17.7-7.2,24.6l0,0c-3.1,6.9-7.3,12.6-13.4,17.4l0,0c-12.2,9.6-31.2,15.4-64.9,23l0,0c-44.6,9.9-75.3,18.1-97,28.9
        l0,0c-21.7,10.8-34.3,23.7-43.8,44.1l0,0c-6.3,13.6-11.1,30.6-15.7,52.1l0,0l-12.6,64h288.7l13.5-64.8h-200.9
        c0,0,3.1-15.6,5.7-21.3l0,0c3.3-7.4,7.6-12.9,13.2-17l0,0c5.6-4.1,12.4-6.8,20.6-9.1l0,0c16.5-4.6,39.3-7.7,72.8-16.2l0,0
        c41.3-10.7,69.2-22.4,88.9-41.3l0,0c19.7-18.9,31.7-45.5,40.5-87.2l0,0c3.3-15.4,5.1-30.6,5.1-42.1l0,0c0-16.5-3.2-29.2-8.9-38.9
        l0,0c-5.7-9.7-13.9-16.7-24.7-21.9l0,0C2016,3,1984.5,0.6,1947.2,0.6l0,0c-47.5,0-84.9,4.9-112.7,22l0,0
        c-27.8,17-47.1,48-57.9,98.5l0,0l-3,14.3h87.8l3.4-15.8c3.4-15.1,6.6-25.4,12.3-32.7l0,0c5.7-7.4,14-10.9,25.2-12.3l0,0
        c7.6-1,16.7-1.2,28-1.2l0,0c1.8,0,3.5,0,5.2,0l0,0C1946.4,73.2,1955,73.7,1961.9,75.5L1961.9,75.5z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M2204.1,39.8c-10.2,10.6-95.9,100.2-131,137c-7,7.5-14.5,15.8-17.8,22.7c-2.7,5-6.2,18.9-8,28.8
        c-3.7,20.7-6.5,39.6-8.2,47.3c-0.4,2-0.6,3.8-0.6,5.5c0,6.4,2.7,10.6,6.3,13.7c3.5,3,8.3,4.4,13,4.4c4.3,0,170.1,0,170.1,0
        l-15.7,73.9l89.5-8.5l13.9-65.5h32l13.9-65.5h-32c0,0,32-149.4,33-155c11-60.5-14.1-78.2-70.7-78.2
        C2277.4,0.7,2244.7-2.3,2204.1,39.8z M2241.7,233.8h-128.5l152.9-158.4h9.3L2241.7,233.8z"></path>
        </g>
        <g>
            <path fill="#FFFFFF" d="M2003.7,580L2003.7,580c-57.8,0-113.3-15.4-160.5-44.6c-46.4-28.6-73.4-62.4-86.2-81.5l-16.9,43.5
        c-1.5,4-5.7,6.5-10.2,5.8c-4.4-0.8-7.7-4.6-7.7-9l-0.9-85.3v-0.1c0-2.4,1-4.7,2.7-6.3c1.8-1.7,4.1-2.7,6.6-2.7h86.8h0.1
        c4.3,0.1,8,3.3,8.8,7.5c0.1,0.6,0.2,1.1,0.2,1.7c0,3.8-2.4,7.2-5.9,8.6l-42.3,16.4c37.1,33.1,113.6,86.3,221,86.3
        c9.2,0,18.5-0.4,27.7-1.2c45.3-3.8,91-15,132.2-32.2c36.1-15.1,67.9-34.3,92.2-55.7l-43.7-12.9c-3.9-1.1-6.7-4.7-6.7-8.8
        c0-0.3,0-0.6,0-0.9c0.4-4.4,4-7.9,8.4-8.3l84.7-7.7c0.4,0,0.7-0.1,0.9-0.1c2.2,0,4.3,0.8,5.9,2.1c1.9,1.6,3.1,3.9,3.3,6.3
        c7,83.3,7,83.3,7,83.6c0,4.1-2.8,7.8-6.8,8.9c-0.8,0.2-1.6,0.3-2.4,0.3c-3.6,0-6.8-2-8.4-5.1l-20.5-39.2
        c-16.4,22.2-45,53.5-89.8,80.7c-45.4,27.6-96.1,44-150.7,48.6l-5.5,0.5l0,0C2019.4,579.7,2011.5,580,2003.7,580z"></path>
        </g>
    </svg>
    </div>
                                    </a>
                <span class="c24-footer-logo-claim"></span>
                <ul class="c24-social-links">
                    <li>
                        <a href="https://www.facebook.com/CHECK24de?displaymode=blank" target="_blank" class="c24-social-links-ele" title="CHECK24 bei Facebook" rel="nofollow">
                            <div class="c24-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" x="0px" y="0px" viewBox="0 0 56.693 56.693" preserveAspectRatio="xMinYMin" height="24px">
                                        <path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/check24.de?displaymode=blank" target="_blank" class="c24-social-links-ele" title="CHECK24 bei Instagram" rel="publisher nofollow">
                            <div class="c24-social-icon c24-social-icon-instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" x="0px" y="0px" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/check24de?displaymode=blank" target="_blank" class="c24-social-links-ele" title="CHECK24 bei twitter" rel="nofollow">
                            <div class="c24-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" x="0px" y="0px" viewBox="0 0 56.693 56.693" preserveAspectRatio="xMinYMin" height="24px">
                                    <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454
                                        c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303
                                        c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412
                                        c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91
                                        c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019
                                        c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541
                                        c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z" transform="translate(1,0)"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="c24-last">
                        <a href="https://www.youtube.com/user/check24?sub_confirmation=1&amp;displaymode=blank" target="_blank" class="c24-social-links-ele" title="CHECK24 bei youtube" rel="nofollow">
                            <div class="c24-social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" x="0px" y="0px" viewBox="0 0 56.693 56.693" preserveAspectRatio="xMinYMin" height="24px">
                                    <g fill-rule="evenodd" id="black" stroke="none" stroke-width="1" transform="translate(-1,0)">
                                        <g id="youtube" transform="translate(10.000000, 16.000000)">
                                            <path d="M38.7915918,6.76160896
                                                C38.7915918,6.76160896 38.4166292,4.11897479 37.2666018,2.95488634
                                                C35.8089347,1.42776592 34.1740125,1.42052232 33.4245134,1.33104261
                                                C28.0582872,0.942871094 20.0085219,0.942871094 20.0085219,0.942871094
                                                L19.9914781,0.942871094
                                                C19.9914781,0.942871094 11.9421389,0.942871094 6.57548658,1.33104261
                                                C5.82598746,1.42052232 4.19191748,1.42776592 2.73339817,2.95488634
                                                C1.58337082,4.11897479 1.2092604,6.76160896 1.2092604,6.76160896
                                                C1.2092604,6.76160896 0.825775918,9.86485061 0.825775918,12.9680923
                                                L0.825775918,15.8778873
                                                C0.825775918,18.9807028 1.2092604,22.0839445 1.2092604,22.0839445
                                                C1.2092604,22.0839445 1.58337082,24.7265786 2.73339817,25.8906671
                                                C4.19191748,27.4182136 6.10806161,27.3692128 6.96152762,27.5294241
                                                C10.0298296,27.823855 20,27.9150391 20,27.9150391
                                                C20,27.9150391 28.0582872,27.9026823 33.4245134,27.5149369
                                                C34.1740125,27.4254572 35.8089347,27.4182136 37.2666018,25.8906671
                                                C38.4166292,24.7265786 38.7915918,22.0839445 38.7915918,22.0839445
                                                C38.7915918,22.0839445 39.1742241,18.9807028 39.1742241,15.8778873
                                                L39.1742241,12.9680923 C39.1742241,9.86485061 38.7915918,6.76160896 38.7915918,6.76160896
                                                Z M16.0411619,19.4029619 L16.0394575,8.6283262
                                                L26.4012082,14.0341791
                                                L16.0411619,19.4029619 Z" id="Fill-195"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</footer>      </div>
    </div>
    
  </div>

  

  
  
  
      <script type="text/javascript">
    //<![CDATA[
    ///////////////////////////////////////////////////////////////
    //Check24.meinKonto.loginLayer();
    ///////////////////////////////////////////////////////////////
    //]]>   
    </script>

    
    
    <script type="text/javascript">
    /*
$(function() {
    c24.vv.common.piwikservice.init({
        COOKIE: {DOMAIN: '.check24.de'}
    });
});
var _paq = _paq || [];
_paq.push(["setDocumentTitle", document.domain + "/Input1"]);
_paq.push(["setCookieDomain", ".check24.de"]);
_paq.push(["setDomains", ["www.check24.de/privathaftpflicht", "privathaftpflicht.check24.de"]]);
_paq.push(['enableHeartBeatTimer']);
_paq.push([
    'setCustomVariable',
    1,
    'aa',
    'b',
    'page'
]);
_paq.push([
    'setCustomVariable',
    2,
    'post',
    'b',
    'page'
]);
_paq.push([
    'setCustomVariable',
    4,
    'step4_confirmation',
    'a',
    'page'
]);
_paq.push([
    'setCustomVariable',
    12,
    'rz_param_2',
    'd',
    'page'
]);
_paq.push([
    'setCustomVariable',
    9,
    'loggedin',
    '0',
    'page'
]);
_paq.push([
    'setCustomVariable',
    16,
    'wpset',
    'checkvers',
    'page'
]);
_paq.push([
    'setCustomVariable',
    20,
    'abfilter',
    'b',
    'page'
]);
_paq.push([
    'setCustomVariable',
    5,
    'ab_direct',
    'a',
    'page'
]);
_paq.push(["trackPageView"]);
_paq.push(["enableLinkTracking"]);
(function() {
    var u="//wa.versicherungen.check24.de/";
    _paq.push(['setTrackerUrl', u+'js/tracker.php']);
    _paq.push(['setSiteId', 15]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/tracker.php'; s.parentNode.insertBefore(g,s);
})();

*/
</script>


    
  







<div class="qTip-windowUnderlay" style="position: fixed; inset: 0px; z-index: -99999;"></div><div class="c24Frame c24-content" style="position: relative; left:0; bottom:0; z-index: 999999"><div class="c24HelpOverlayer" style="display:none;" id="c24HelpOverlayer"></div></div></body></html>
<!-- INFO:WIREFRAME URL=/wf/ver/sec/split/ VERSION=201903251 -->
<!-- INFO:ENVIRONMENT=production -->
<!-- INFO:WPSET=default, PRODUCT= -->
<!-- INFO:DATASOURCE=service, STATE=prod, MODE=p -->
<!-- INFO:GENERATED=2019-03-28 08:59 -->
