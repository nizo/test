<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title data-react-helmet="true">SMAVA Online-Kreditvergleich | unabhängig und kundenorientiert</title>
	<link data-react-helmet="true" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel='stylesheet' href='css/main.49a27a50b542cdf2a850.css' />
	<link rel='stylesheet' href='css/Homepage.c97fa98a928f647aa7da.css' />
	


	<!-- CallOne Callbrowsing -->
    <link rel="stylesheet" type="text/css" href="/demos/callbrowsing/styles.css">

	<script>
	// load surfly
	(function(s,u,r,f,l,y){s[f]=s[f]||{init:function(){s[f].q=arguments}};
	l=u.createElement(r);y=u.getElementsByTagName(r)[0];l.async=1;
	l.src='https://surfly.com/surfly.js';y.parentNode.insertBefore(l,y);})
	(window,document,'script','Surfly');
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="/demos/callbrowsing/functions.js"></script>

	<script>
	$(function ()
	{
		var timestamp_start = Math.floor (Date.now() / 1000);

		function callbrowsing_text_create ()
		{
			var text;
			var minutes;
			
			text = 'Willkommen bei Smava. ';
			if ($('#credit_value').val().length > 0)
				text += 'Ihre Auswahl ist '+$('#credit_value').val()+' Euro. ';
			if ($('#credit_runtime').val().length > 0)
				text += 'Die Kreditlaufzeit beträgt '+$('#credit_runtime').val()+' Monate. ';
			if ($('#credit_type').val().length > 0)
				text += 'Verwendet werden soll der Kredit für '+$('#credit_type').val()+'. ';

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

		callbrowsing_session_init ('405aa97e70dddcbb269d2494b91c3c2f', 'check24_sachversicherungen', callbrowsing_text_create, callbrowsing_url_create, callbrowsing_status);
    });
    </script>
	<!-- CallOne Callbrowsing -->
	

</head>
<body >
	<div id="root"><div class="Root__container-root" data-reactroot=""><div class="HomepageLayout__wrapper"><header class="HomepageHeader__header"><div class="HomepageHeader__main-header"><div class="Container__container HomepageHeader__container"><div class="Columns__columns Columns__is-flex"><div class="Columns__column Columns__is-1"><div class="Logo__logo-container Logo__is-flex"><div class="Logo__logo"><a href="/"><img class="Image__image Logo__image_logo" src="images/homepage-logo-a613feac209c802485bbbde6cce8adbc.png" alt="smava.de"/></a></div><div class="PhoneBlock__phone-block Logo__phone-block-container"><div class="PhoneBlock__block"><div class="PhoneBlock__image"></div><div class="PhoneBlock__content Logo__phone-block-content"><div class="PhoneBlock__phone-text"><span>Kostenlose Beratung mit Ihrer persönlichen Rufnummer</span></div><div class="PhoneBlock__phone-number" id="callbrowsing_personal_phonenumber"></div></div></div></div></div></div><div class="Columns__column is-1 align-self-flex-end"><nav class="TopMenu__navigation TopMenu__toggles TopMenu__toggles TopMenu__is-desktop"><div class="LoginForm__container TopMenu__login-nav-item"><div class="TopMenu__nav-item TopMenu__hide-to-600 login-button"><span class="TopMenu__item-title">Anmelden<!-- --> <i class="Icon__icon Icon__user Icon__orange TopMenu__icon TopMenu__icon-user"></i></span></div></div><div class="TopMenu__nav-item TopMenu__menu-item TopMenu__hide-from-1200"><span class="TopMenu__item-title">MENÜ<!-- --> <i class="Icon__icon Icon__sidebar Icon__green TopMenu__icon"></i></span></div></nav></div></div></div></div><div class="Container__container"><nav class="TopMenu__navigation TopMenu__dynamic HomepageHeader__navigation TopMenu__is-desktop"><div class="TopMenu__dynamic-elements"><div class="TopMenu__nav-item TopMenu__hide-to-1200"><a href="/kreditvergleich/" class="hide-to-1200">Kreditvergleich</a></div><div class="TopMenu__nav-item TopMenu__nav-item-with-routes TopMenu__hide-to-1200"><div class="TopMenu__nav-item-title"><a href="/kredit/" class="hide-to-1200">Kredit</a></div><span></span></div><div class="TopMenu__nav-item TopMenu__hide-to-1200"><a href="/privatkredit/" class="hide-to-1200">Privatkredit</a></div><div class="TopMenu__nav-item TopMenu__hide-to-1200"><a href="/autokredit/" class="hide-to-1200">Autokredit</a></div><div class="TopMenu__nav-item TopMenu__hide-to-1200"><a href="/umschuldung/" class="hide-to-1200">Umschuldung</a></div><div class="TopMenu__nav-item TopMenu__hide-to-600 TopMenu__hide-icon-from-1200"><a href="/aktuelle-kreditprojekte.html" class="hide-to-600,hide-icon-from-1200">Geld anlegen<!-- --> <i class="Icon__icon Icon__arrow-up grey TopMenu__icon"></i></a></div></div></nav></div><span></span></header><div class="Container__container LoanSelection__container Container__is-fluid Container__is-paddingless"><div class="Container__container Container__is-paddingless Container__is-wider"><div class="LoanSelection__block" style="background-image:url(&#x27;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzODAiIGhlaWdodD0iNDUwIj48cGF0aCBmaWxsPSIjRTNGMUQzIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xODkuMzM2IDMyMS4zNzdMMCAyMDMuNzUxVjBsMTg5LjkwNCAxMTcuOThMMzgwIDB2NzYuOTcyTDE5MC42NjQgMTk0LjQ5djEuMDIybC0uODIyLS41MTEtLjUwNi4zMTR2LS42MjlMNTguNzggMTEzLjU3MnY0OS42NjFsMTMxLjM2MSA4MS42MDZMMzgwIDEyNi44ODl2MjAzLjc0OUwxOTAuNjY0IDQ0OC4yNjV2LjgyNmwtLjY2NC0uNDEzLS42NjQuNDEzdi0uODI1TDAgMzMwLjc2di03Ni45ODNsMTg5Ljk0NSAxMTcuODk2IDEzMS4yODQtODEuNTYxVjI0MC40NmwtMTMwLjU2NSA4MS4xMDR2LjYzOWwtLjUxMy0uMzItLjgxNS41MDd2LTEuMDEzeiIvPjwvc3ZnPg==&#x27;)"><div class="LoanSelection__main"><div class="LeftHeadline__container"><div class="LeftHeadline__header-wrapper"><h1 class="LeftHeadline__header">Deutschlands günstige Top Kredite</h1><div class="Badge__container LeftHeadline__badge Badge__is-mobile"><a href="/kredit/aktionskredit" target="_blank"><div class="Badge__title">-0,4%<span class="Badge__info-index">1</span></div><div class="Badge__subtitle">Effekt. Jahreszins</div></a></div></div><span class="LeftHeadline__subheader">Nach wenigen Minuten erhalten Sie Ihre persönlichen Kreditangebote verschiedener Banken.</span><div class="LeftHeadline__trust-icons LeftHeadline__is-desktop"><img class="Image__image" src="images/tuev-5e430fe47095305330255c25283f4e5c.png" alt="Tüv Logo" width="100"/><img class="Image__image" src="images/ekomi-aaa464afb7e6fe7975ab98d5a0f77314.png" alt="Ekomi Logo" width="150"/><img class="Image__image" src="images/focus-ecdf61e563957d815e03a51bba4fa73d.png" alt="Focus Logo"/></div><div class="LeftHeadline__trust-legal LeftHeadline__is-desktop">¹ -0,4% Repr. Bsp. gemäß §6a PAngV: Nettodarlehensbetrag:  1.000 EUR, Laufzeit: 24 Monate, 24 Ratenzu je 41,50 EUR, effektiver Jahreszins: -0,4%, gebundener Sollzins: -0,4%, Gesamtbetrag: 995,84 EUR. solarisBank AG, Anna-Louisa-Karsch-Str. 2, 10178 Berlin</div></div>

	<div class="Calulator__container">
		<div class="Calulator__wrapper">
			<div class="Calulator__form-inputs">
				<div class="Calulator__form-field-wrapper">
					<div class="Calulator__form-label"><span>Verwendung</span></div>
					<div class="Calulator__form-field Calulator__select customSelect has-value Select--single">
						<select id='credit_type'>
							<option value='Umschuldung'>Umschuldung</option>
							<option value='Auto / Motorrad'>Auto / Motorrad</option>
							<option value='Wohnen'>Wohnen</option>
							<option value='Gewerbe'>Gewerbe</option>
							<option value='Freie Verwendung'>Freie Verwendung</option>
						</select>
					</div>
				</div>
				<div class="Calulator__form-field-wrapper">
					<div class="Calulator__form-label"><span>Nettokreditbetrag</span></div>
					<div class="Calulator__form-field Calulator__select customSelect has-value Select--single">
						<select id='credit_value'>
							<?php
							for  ($i=500; $i<=15000; $i+=250)
								echo '<option value="'.$i.'">'.number_format ($i, 0, ',', '.').' €</option>';
							for  ($i=16000; $i<=120000; $i+=1000)
								echo '<option value="'.$i.'">'.number_format ($i, 0, ',', '.').' €</option>';
							?>
						</select>
					</div>
				</div>
				<div class="Calulator__form-field-wrapper">
					<div class="Calulator__form-label"><span>Laufzeit</span></div>
					<div class="Calulator__form-field Calulator__select customSelect has-value Select--single">
						<select id='credit_runtime'>
							<?php
							for  ($i=1; $i<=12; $i++)
								echo '<option value="'.($i*12).'">'.($i*12).' Monate</option>';
							?>
						</select>
					</div>
				</div>
			</div>
			<div class="Rate__container">
				<div class="Rate__column Rate__interest-rate"><label class="Rate__label"><span>Effekt. Jahreszins</span></label><span class="Rate__value">-</span></div>
				<div class="Rate__column monthly-rate"><label class="Rate__label"><span>Monatsrate</span></label><span class="Rate__value">-</span></div>
			</div>

			<a class="Button__button ButtonNext__button Button__orange Button__is-fullwidth"><span class="text"><span>Jetzt Kreditvergleich starten</span></span></a>

			<img class="Image__image Calulator__logo-tv" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZoAAAASBAMAAACQvAVRAAAAIVBMVEWpqan////y8vLo6Ojb29uysrLExMTOzs76+vq8vLzV1dXzon/lAAAFKklEQVRIx92XzXPTRhTAn62PRD55JcUWOUkyNAknKXI+6pMUa9zQk1KSCXCSOuAJPdmhgxlOqE4g7UkBOkNuDtAm5K/s25Xk2K4Z0q8cuqPxvJVWq/d7X/sM5P804Nq+1P9oZJK8XDOza7oYZwuVj/YVNj54d/00ylunl4k3YDgWpooZg5yAFH9x4wrMjtDIvu9nVvP/tFQzpqvWHJ/f9P10l/yB2kONnvd6P8Zk7az3fJ2Qr2LZ6f41mkMUj79I82KMRsF3Zj7nqFvR1B1UfnxuUR0SVHaOS2/MQZdoAd78jrj4K9hk/3YS7eU0O2wEFEFI5UwMRmkGIJorJ/6JN0WDV73zT/fpg1cdEHu9nkeqvS6lEYkS2J+hsa5GQ4jrER1tZG3leLM0BjYS3BxeLwBH9gSI6jlN6qSXFCF7IURxllphhCZB8evFnanBpoOUOkFP3VlAIaMhA4+02jZO6p78e9uT/dYPsdps78udbRpXT9s2hpDqKU8fsjhr93hy0N7HAGtvth7mNBVE7GR27ATopCrYlkRkjJaOSKJfxmg0tKZMaUoX+ErjIklpyqM0AUimawQn8VQaOowhDYeetDOa0KsKYYmACt6hkPAKSMFWGX6FGlB3WVLAoTfKBV0KTtkceC25j7pCKIjgZTSqRDRI80wLXDGlERmNDmRvHqIPlzTyzjGuZsmyRWMKpvgmhJk7iROQ6b4poTFQG02H4tFLKJFEYHkj+C0pdt/JgQEuT9xIFRWwD4vlEkKySAu9Cs9o3FMWSYGn89UZ4m5ZnAqGG2U0JDDULAEV6QVQmmZSZDRliBvzu4vReKTNpzQFdOVUGhekizuwcGE03l8Ya+0nMcbN+2HuF5G222p7tAqg+TUEyqqAGHeaTugB2lk2bouKRCpceRZVZDRKvJrRbPfR67KAQTXHOStF6xhXWkMat5sXgUqpgipVMf0NRjMHcfU9WTJGIu2c2j73zZBmLNIqKJ5hfHSDN7AGO3BsXT7TcTXS4MVqWgAHiJdGmhxGuDMwGjUBEW8hTSGneRVASvMziLgZPlV5+lnOilC+pNHv5UVgjl+DCGke0ZhiviFkFRNtJNIkI60C45Emm6bp5hqT32BbgW/hNXyAFVg+e5Zw/bxkpzSnOc0AWvRJmjcvCmHTcQwYFIm760/ShA++SWnIGk3ulIZznPUJmgqfFwFqxFmkWUZVKQ0Wg5FxA743a3DXNAeMpmiaqW9QWDR/WrykISZa/bHAo3/WAKRz3CkpjPnm6ChmNDqENH9TGr3Q6ZK6AfMSJok6SQNGldLohZZN65YGMUYaT9TNCRpFDLLyE771A55WgYRjNCE3TnO10zOrjruCgInceAz8BE2H5R/NILZlzGgkp550LR4PHdACL+yujNIcs6x3eVUwk8Lg9RI9aMJndL7u3pugIUFWBGToaqEUL8GpK8UqPPhEi8/fpLHgCcwosHqykZQSvgHRJE0ZhDdExdwnl1UAp1ihiVW0QID+kEanJXcAgqQlEBQO007jFgCPbha8SRq3mH6qDBzWq3PMrEPo0py4O95Z7QzHwlAKRsRRmjJsAqdAg/YVt1hZGfYzHWakCtVcoycOpdEcx4lpq2UQB9tb2d+sHS0TeV2xSc1QWPPl2w458Pu25rM2TPM3cIG/QfqGtow/9F6N/vYzNdT6uuw0Dae5KV8Ytbq//E+61WZct2Unvnn2gWgN2vGlfUR7Dw98akLtEeAR32pH/2UPHbOLfu3f2O2Km1zf/5vrGH8A2aanJkclX6QAAAAASUVORK5CYII=" alt="Partners Logos"/>
			<div class="LegalText__container">2/3 aller Kunden erhalten: 4,71 % eff. Jahreszins, 4,61 % fester Sollzins p.a., Gesamtbetrag 13.477,61 €, mtl. Rate 140,27 €, solarisBank AG</div>
		</div>

		<div id="callbrowsing_status" style="position: absolute; top: 170px; margin-left: 50%; margin-right: 50%; left: 450px;">
			<div id="callbrowsing_status_text_big"></div>
			<div id="callbrowsing_status_text_small"></div>
		</div>

		<div id="callbrowsing_webview_sharing" style="position: absolute; top: 330px; margin-left: 50%; margin-right: 50%; left: 450px;">
			<div id="callbrowsing_webview_sharing_text"></div>
		</div>
	</div>
</div>
<div class="LoanSelection__legal-trust"><div class="LeftHeadline__trust-icons"><img class="Image__image" src="images/tuev-5e430fe47095305330255c25283f4e5c.png" alt="Tüv Logo" width="100"/><img class="Image__image" src="images/ekomi-aaa464afb7e6fe7975ab98d5a0f77314.png" alt="Ekomi Logo" width="150"/><img class="Image__image" src="images/focus-ecdf61e563957d815e03a51bba4fa73d.png" alt="Focus Logo"/></div><div class="LeftHeadline__trust-legal">¹ -0,4% Repr. Bsp. gemäß §6a PAngV: Nettodarlehensbetrag:  1.000 EUR, Laufzeit: 24 Monate, 24 Ratenzu je 41,50 EUR, effektiver Jahreszins: -0,4%, gebundener Sollzins: -0,4%, Gesamtbetrag: 995,84 EUR. solarisBank AG, Anna-Louisa-Karsch-Str. 2, 10178 Berlin</div></div><div class="LoanSelection__partners"><div class="BankPartners__container"><div style="background-image:url(&#x27;images/bank1-8750e3049a18c7506fe3180d9c21eecd.png&#x27;)" class="BankPartners__image"></div><div style="background-image:url(&#x27;images/bank2-a1c8fc02e329cb831bebd3849f7ca890.png&#x27;)" class="BankPartners__image"></div><div style="background-image:url(&#x27;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAcBAMAAABlvQfLAAAACXBIWXMAABcRAAAXEQHKJvM/AAAAHlBMVEVHcEwqKiqFhYWFhYUqKiphYWGFhYUqKiqFhYUqKipf+IpeAAAACnRSTlMAWVhINQ00HyNOt6/+ygAAAj1JREFUOMu9lLFv4jAUxq1CgG5nCYRYnwXKiGw1ygiSEWLLQem1W+WoESNIVKwRUaOMIN0N/W/vPTsN6U3H0L7Bekb+8b33+TmMfUV4WRCn1yErBSCvYzYhiM34KsQPO5G6oywP/0+so1i6bokI00xaUu/1fsbu9XxGu72eT6hj/f571p5YpAGr52wFVFnLKCL3nHdf2a8pH7hdd4vElC8WfFEiMkrThhxSblyBU37C9YnzP3Y3sT/NiD6VSF5kS+m7Mg11s+N0qsmdzG5Led/SDrkRL8vUgCg78y1ycohFCXF/wpo/ymu5e1grBZFjjlGl0seeHOLxgbt1h9yMxFsWAKSsFVCd40qlt+OUINK0LMasdAzejiDkmGUGj3vDSqXXtjKI3LpWPqIhhACBQ6PAjHAfXFTQJ4QR+cl7daQlpUQCGZFIbCS+qJADXUJ2FmkfDodX6xFqCKmkDISUz9h/TcXKVEgTd64ZPCl8BSKG7DgukVLFylTIxQWpgpHEspQMYfiPCslMqZd+HekEIAUAmBgUzUC9F3ef5Fi3jrTUcSREAsKgBf5nxzDOhCAYsWpsWCPEqkaJAgkb4duJqamwe0K8czl1Xfvw1dFAoHIyOVY+W40/q6CMnbF+hSyTRIDfUAFymZRDj74CbvhvXRVPhLTPZK9DNlkBkBQxijy+GHTB/3hi7enA3pt33rr6tOYDShODh7M8xMN5QFajyFxrPceHjIvtZmvXBR9oO+0PCUZR5Lg+FkmyZt8VfwEmCpOZ1f/z8AAAAABJRU5ErkJggg==&#x27;)" class="BankPartners__image"></div><div style="background-image:url(&#x27;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ4AAAAwBAMAAAASvd7WAAAAElBMVEV8fHxHcEx8fHx6enp8fHx7e3s7a68oAAAABnRSTlNiAEoYLwjRwVMOAAACw0lEQVRIx+2Wy3ajMAyGFUP2MZc9YdI9lMmemdA9bmfe/1VG+iU7hubMoqfLcE5rY6TPulkO+e996Ml78p68L/DqaQpf4bW/idzN+4rAbokKGXiV6BbFOnlzb/rCIoStaqKjjAOVMjREB+IXecbI4+HMKjNW6VfOi69NnDHPZTwmjdTQljdjeKWHvMLblnQwHismXscDDVteDaWaPvFc35u2XyNZxM6Jx5a9eOpE6KOLvAoM0bh6/zPjsd67arMLvRokvDLxxF3hIfzBeDO5AKc1QBtea7yOFo0N3AiRB3YMheVX3W112+wBj/8fNL1/1XOW7mRj8BrsRpZy473DsMoM2fN0mRU9MMIbRB28AabyBi7ceTMKoLL62vHUAv5astxBeZUoCM98Ig5VGSLPCnTQstrxpCYD0luwRKG8WjwXnvlEUkwACm/VPGh8X/u+v2T1YsmEbSdMGRZkJ5FXdz21nQErhCWrd6lMt6lnN0ZbU7GOK1ilHVM+vzggP8BrkwWPefSm6R1BUp6QmVcnnuRUbNUP2fnZ8lzPTEldI8ItAgMqzwZkSP3lvz84NsKr5Mjc81FlvDPkznERpQjeTMdTlg9L7RG8VgO4avnveaxa6Fm03gDeidwpqxcTLzTE6nBlx23PQxysk8m0tlCutj5G3hx5DfZt7NDsedDrYu8xHi9Io7JYaQdKPK/HRSP/0D72i+uy7+5ZXtXYFtmjfrS+rbwTwjrEktzwUBON5rEWOeU1qWtxlNjWZekoL1F1mNylz+ulhNgh7SFz5bXGQ6yo+9zvx3R97OuZP63WyiREdSzX2O9dMF7hs/vo5d7wiy2vtJqxGjVeZTwO5Jlw87iQ35fOapzoEja8PqifXgMdeTWl9l+S/1iWW9D7G4KTju2yLNfUryZ5Rp2N6bpv7cqfpmuU+u/vjfD8ffXkPXnf+fwDwhD6xKGKJZcAAAAASUVORK5CYII=&#x27;)" class="BankPartners__image"></div><div style="background-image:url(&#x27;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAcBAMAAABlvQfLAAAAG1BMVEVHcEyGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhobkmTBPAAAACXRSTlMAoxCATpRmJDhumY2pAAABqUlEQVQ4y+2UQU/bQBCFh7WT+Mhjsk6OdihxjzEqKUdbAsIxC1XgGFPF5WgQVXJMCoH+7M7ajhqkHppza2lt78x8O+95Vyb6f7m7I+vdkVWyM/JwsCsxd/zqJXoLtsLB+yq1PbloobDPJtD+HQ0H7wnenmVFVqbTycXnv0TSwVFpJl6WOSuoVyO9TUBFNaIkpEZh1+XlBukDx67BFwp5SDNw8QzckReDqW8mgYgnlbVdraClPLuVBcxk1mlybqahnjgYmiQdzphS/soUX5tBw8/pCJpMUho/xCm5TE6n2aVwLMJWV5QmaUImMIliz6YaYiEDktUNAFF8jmOnUyF7+4JkSYXEcy32m+1ev20RKb5ytNytkXNu7FdIwyJirkIWviCOFJWIAXwPNdKChP6EsO3Cef6tFoZIhi6/IDbCBBlTOt0W5tozYhHb7l7GDdGnt2f29OO6Qva684duFJdIEd99YIXRYmoRWgMs4gJpIbakK1eIC98FauQ7mGkFjEuEXk+g7+0OP+WXYuds/kM9kreklxE9jT4WUUCLQJ0tf5J6uQxaxb/+P/oFUzlO/4p8SBMAAAAASUVORK5CYII=&#x27;)" class="BankPartners__image"></div><div style="background-image:url(&#x27;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ4AAAAwBAMAAAASvd7WAAADbmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmJlZGQ4NDQ3LTA4YmUtZDk0NS05Yjg2LTQzYWYxMDEzNzQ2OSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGNkE1NDNGMzFBMEQxMUU3OUM5QThBNzMzRTgzMDU5MSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGNkE1NDNGMjFBMEQxMUU3OUM5QThBNzMzRTgzMDU5MSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNyAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowQzdDQzRCMjEyRDIxMUU3ODg2MUY3NDM1OThDREFBNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowQzdDQzRCMzEyRDIxMUU3ODg2MUY3NDM1OThDREFBNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pqw5nREAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAGFBMVEWPj48cHBxHcExYWFh1dXWwsLCQkJDAwMA3ZjRxAAAACHRSTlNmZgBmZmBgYCGiaa8AAAHkSURBVEjH7ZdPztsgEMWxmO49sk/QTbcgOAAWc4WqJ2jvf4S+4Y+dzyH6WsWbqmZBwIYfb+ZNiGK+XtvMzXub9+37Ne1H55lr2pebd/Pe5QlaDpfxMmtbruLRG7gRbys8dxXvc3kk5ycxveZNXV5KdbOk027Lpyd0RPPMa/Ik1kMtZvGD+X/Hs1UehSzH/GHvtDzzHh488aobJsZY84S1uUT/yDN/rq/gVso52WIKeFhOfkHQOQTrOVjOAbMQUPJB0BMnG9KQV911mj1fotBY2KnqpO90YNljZktadIgeC8a86q7JWSyvLTeWI6+ZZ8siKhTCkQJaxK84Au+gj+dxvL64q+FuNSnYzJxxul8n7vlzmJUx4VCPPnRHzrwibyYNd9n9LaRtsYwkNX83fAQlObOpynXsx5E+aksAibobxpPW5Vb9VboGorzlNa9WXxJNnztqq+ozBIu2pm+FA9Ouz/OYV+2gHHfDCk87jV+NbPmb/WymXZ/0Cjzxmh2SUz+x8TR+gtNuYkhHsDOSd+SvZ3vIK9XcF9S49blT8ZqRkpS0PeYP74b11+wV2b9gtNSqxqVg9dqBKEH5rXVgvDNZ9VnvBrxq7/zqzqPUu332yX2qv0Ry/57fvH+e9+ua9vM//L/1G9OG/AMtf76mAAAAAElFTkSuQmCC&#x27;)" class="BankPartners__image"></div><div style="background-image:url(&#x27;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ4AAAAwBAMAAAASvd7WAAADbmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmJlZGQ4NDQ3LTA4YmUtZDk0NS05Yjg2LTQzYWYxMDEzNzQ2OSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyREQ5NjJBMjFBMEUxMUU3OUI1RTk5QTc1MjQ0ODM1QyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyREQ5NjJBMTFBMEUxMUU3OUI1RTk5QTc1MjQ0ODM1QyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNyAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowQzdDQzRCMjEyRDIxMUU3ODg2MUY3NDM1OThDREFBNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowQzdDQzRCMzEyRDIxMUU3ODg2MUY3NDM1OThDREFBNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqX/uggAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAElBMVEVHcEx1dXV1dXV1dXV1dXV1dXV/pV/MAAAABnRSTlMAZhJGKldst+NlAAABk0lEQVRIx+2Wu3aDMAyGHWP2OsDuErInsdlJwHsJ9P1fpfptXNqtFR06oARF9jl80c0CIXbZZReG1CQmWUEZue79WpSGzDBHrYN6y8LebQNPlwsPSxN5uuPwZLxXXyLvFehs/Q+uf7oArxJXCjfxqi08io78g7cGvMJqZJPFK2uv4Rbx8uAo8Y7wlJk/ytMdBIqXfl8W3p0dbxkIBfwbQ1WzSC/4PLnwQrjgVehDPk+gmmNqko39941XrbziL/xb8hf6pWPzVMxfFdo51uOVl8DIy6HJv8PafzkUM39qRN+RUul8HMWBxyNCZcd03nBdwCubK5uXDj949y/zhZu/IM84X3KQM81vwGX+FSb6h2W3sf8QbZfmPdKWfY5Yhn+2tZMNDx+yhDjZySnaau1jf1b/JH9uqQuZA6WxMQorIx7Kseo7UBkbIU/Em4QUTU8WUeU8NCzew862t72fJ1mefeta7979/FTt7czi4f7eu95Z2Q7WO3wH98x873nvQ9LUspak6V1IytrQp4Ylu727dvmf8gF8DEOtOIdbkwAAAABJRU5ErkJggg==&#x27;)" class="BankPartners__image"></div></div></div></div></div></div><div class="Container__container Container__is-paddingless Container__is-wider"><ol class="TrustLoan__ol"><li class="TrustLoan__li"><img class="Image__image TrustLoan__icon" alt="1. Kostenlose Kreditanfrage" src="images/icon-register-4b1d4c2f23864554bc63c81ac511d762.svg"/><div class="TrustLoan__text-container"><h5 class="heading TrustLoan__title">1. Kostenlose Kreditanfrage</h5><span class="TrustLoan__text">Stellen Sie Ihre Kreditanfrage ganz bequem von zu Hause aus.</span></div></li><li class="TrustLoan__li"><img class="Image__image TrustLoan__icon" alt="2. Angebote erhalten" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iNzAiIGhlaWdodD0iNjAiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNLjAxOS4wODVoMTMuMzY3djEyLjQxSC4wMTl6Ii8+PC9kZWZzPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzYgNCkiPjxtYXNrIGlkPSJiIiBmaWxsPSIjZmZmIj48dXNlIHhsaW5rOmhyZWY9IiNhIi8+PC9tYXNrPjxwYXRoIGZpbGw9IiNFM0YxRDMiIG1hc2s9InVybCgjYikiIGQ9Ik0xMi44NTMgMTIuMDlMNi42MzIgNy42NDQuNTUyIDEyLjA5Vi0xLjg0N2gxMi4zMDF6Ii8+PHBhdGggZmlsbD0iIzc3NyIgZD0iTTEyLjQzMSAxMi40OTRhLjk0NC45NDQgMCAwIDEtLjUzLS4xNjJsLTUuMTk4LTMuNTItNS4yIDMuNTJhLjk0MS45NDEgMCAwIDEtLjk4LjA0OC45NzIuOTcyIDAgMCAxLS41MDQtLjg1NVYxLjA1NWMwLS41MzYuNDI3LS45Ny45NTUtLjk3LjUyNyAwIC45NTUuNDM0Ljk1NS45N3Y4LjY1OGw0LjI0NC0yLjg3NWEuOTQuOTQgMCAwIDEgMS4wNiAwbDQuMjQ0IDIuODc1VjEuMDU1YzAtLjUzNi40MjctLjk3Ljk1NC0uOTcuNTI4IDAgLjk1NS40MzQuOTU1Ljk3djEwLjQ3YS45NzIuOTcyIDAgMCAxLS41MDQuODU1LjkzOS45MzkgMCAwIDEtLjQ1LjExNCIgbWFzaz0idXJsKCNiKSIvPjwvZz48cGF0aCBmaWxsPSIjNzc3IiBkPSJNNDYuOTcxIDQwLjA4MkgyNC4wMjVBMS4wMzYgMS4wMzYgMCAwIDEgMjMgMzkuMDQyYzAtLjU3NC40NjEtMS4wNDIgMS4wMjUtMS4wNDJoMjIuOTQ2Yy41NjQgMCAxLjAyNS40NjggMS4wMjUgMS4wNDFzLS40NiAxLjA0MS0xLjAyNSAxLjA0MW0wIDhIMjQuMDI1QTEuMDM2IDEuMDM2IDAgMCAxIDIzIDQ3LjA0MmMwLS41NzQuNDYxLTEuMDQyIDEuMDI1LTEuMDQyaDIyLjk0NmMuNTY0IDAgMS4wMjUuNDY4IDEuMDI1IDEuMDQxcy0uNDYgMS4wNDEtMS4wMjUgMS4wNDFtMC0xNkgyNC4wMjVBMS4wMzYgMS4wMzYgMCAwIDEgMjMgMzEuMDQyYzAtLjU3NC40NjEtMS4wNDIgMS4wMjUtMS4wNDJoMjIuOTQ2Yy41NjQgMCAxLjAyNS40NjggMS4wMjUgMS4wNDFzLS40NiAxLjA0MS0xLjAyNSAxLjA0MW0wLThIMjQuMDI1QTEuMDM2IDEuMDM2IDAgMCAxIDIzIDIzLjA0MmMwLS41NzQuNDYxLTEuMDQyIDEuMDI1LTEuMDQyaDIyLjk0NmMuNTY0IDAgMS4wMjUuNDY4IDEuMDI1IDEuMDQxcy0uNDYgMS4wNDEtMS4wMjUgMS4wNDEiLz48cGF0aCBzdHJva2U9IiM3NzciIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyLjE2IiBkPSJNNTQuOTEyIDU2SDE2LjA4OEMxNS40OSA1NiAxNSA1NS4xMjggMTUgNTQuMDYyVjUuOTM4QzE1IDQuODcyIDE1LjQ5IDQgMTYuMDg4IDRoMzguODI0QzU1LjUxIDQgNTYgNC44NzIgNTYgNS45Mzh2NDguMTI0QzU2IDU1LjEyOCA1NS41MSA1NiA1NC45MTIgNTZ6Ii8+PC9nPjwvc3ZnPg=="/><div class="TrustLoan__text-container"><h5 class="heading TrustLoan__title">2. Angebote erhalten</h5><span class="TrustLoan__text">Erhalten Sie Ihre Kreditangebote von verschiedenen Banken. Haben Sie sich für einen Kredit entschieden, können Sie Ihn direkt online beantragen.</span></div></li><li class="TrustLoan__li"><img class="Image__image TrustLoan__icon" alt="3. Kreditantrag abschließen" src="images/icon-payout-2a973b6a11e3037220380204d4013f8c.png"/><div class="TrustLoan__text-container"><h5 class="heading TrustLoan__title">3. Kreditantrag abschließen</h5><span class="TrustLoan__text">Sind Ihre Unterlagen vollständig und alle Voraussetzungen erfüllt, erhalten Sie innerhalb kürzester Zeit Ihr Geld.</span></div></li></ol></div><div class="Container__container Advantages__container Container__is-fluid"><div class="Container__container Container__is-paddingless Container__is-wider"><h2 class="heading Advantages__heading">Wir finden den passenden Kredit für Sie</h2><ul class="Advantages__ul"><li class="Advantages__li"><img class="Image__image Advantages__icon" alt="Günstige Zinsen" src="images/icon-guaranty-d5b6b822563fec2be7ccb4f67f65a881.png"/><div class="Advantages__text-container"><h5 class="heading Advantages__title">Günstige Zinsen</h5><span class="Advantages__text">Unvergleichliche Konditionen dank exklusiver Vereinbarungen mit unseren Partnerbanken.</span></div></li><li class="Advantages__li"><img class="Image__image Advantages__icon" alt="Schufaneutral" src="images/icon-schufa-cf0f997d8f32b9479fa6abdbef760183.png"/><div class="Advantages__text-container"><h5 class="heading Advantages__title">Schufaneutral</h5><span class="Advantages__text">Der smava Kreditvergleich hat keine negativen Auswirkungen auf Ihren Schufa Score.</span></div></li><li class="Advantages__li"><img class="Image__image Advantages__icon" alt="Kostenlos &amp; unverbindlich" src="images/icon-free-8e4f1c1a2125ff8ab448e9dc7144bdf1.png"/><div class="Advantages__text-container"><h5 class="heading Advantages__title">Kostenlos &amp; unverbindlich</h5><span class="Advantages__text">Es warten keine versteckten Kosten auf Sie und Sie können die Anfrage jederzeit widerrufen.</span></div></li><li class="Advantages__li"><img class="Image__image Advantages__icon" alt="Datensicherheit" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAAClBAMAAAD4y+/dAAAAKlBMVEV3d3fz8/P///96enrj8tOTk5OkpaR5eXmEhIPQ0dCur6y/v77d49Xm9dbRT+RpAAAE4UlEQVRo3u2bz2sbRxTHHyzuKmkvUggEkssuuFS2DluELdnyLUtwDgLHbpuE5BBinJYkB4FwFVof7Jj8KL20EiY/SCDYbUJySizaS3KJ3JZQ56hLC/5f+t5KWq02UmcWvVdwug8dZmVrvvvZN7PzZuYN2LZ97KWQ/YiVg23/uZ4VsvxVEkivg5hlt1HgTklOoFywIeOAoBkN+FhUoDwPh0hHxsc5AHMGaihw43MRO4NVF+AJwLWGZacEPtYtgK/hS4AJW8gWACalBWKCmOA9JEi+fZCUJLi/YOaWn6bECDYMGpxy56QI/si2B8LzMgTdwTtbFSGo+4N3pSBBkA6Mrea2AMEOAWTz6+QIc4qfwCIPVM4mkxsVLORT7ARj+ISM76h0l57VRXaCHax1ouGx4O/gADsB1XqqVTyMCBMpZoJ0icK0VjmziuUqMwEFgN/6PQIF5pkJMAA01joXow6GbMwEdNPbgT5nFpgJ8H8Tvl8pZJvgJbDQr990L7eQJ8VKkMFGOtXTKXSaUQSCcXzqa93LIyUob7ISYCsNNky6vMhKgA0zeMsIZFxnJcBnYjy959t97HZrnARH53onWvQ+HXnBRzC+3memaOZfcBFYi32n0qbyjapLcHjATNc4xUNgLQ6YBCsRNAnGB07VjW0WgiPkgcTtkK0SwhoLQZ3a5IO3Idu9QNNsFgIajX9quiEr/o1fL3MQ0Mt/xH3XinPKd7YeQQZd8GGzj8AP6IQGAwEtKM30EXCPKwcFTQIU+Kgr0C290RHQJFjxqz35m1+clSA4uZB/KEHQ8UGxhkNzM4pARILiI4CDzSiPKCoBdt8RSQIXBT5oCvrADRLM7keC2Af/Nx/MSvvgzb73wey+7wf70wfPAyGMiA9OAHwmOSa77q9XooUtkeOivT3XlezJQWMjwNj0QL/YtMZEYDmBUCUo8Ki7BjYUgXUaK3r4rsBfOMe5lmIgoLUb+L64F7LmXfx6kmWGQwua8MWzkC3RzG2FZY42eENYtTKoO0++NXBHvcEz068N2JRXLpHrrlWkswMAqjYPgf17X4WycqdFe73I+sXIVUJWds6lbC4C29r9eSlkl16p1zXjvcyYICaICWKCmOC/JUgKWYfAvC1kTpsAKmZJ5ANtAkmblBaICfQIEveEbLVNMCLV0ebaBJICMUFMEBO8HwRP8GX3WkhglQju0FrNJRH7yktN35EdD2aEjwcY89IHHKrgLcmJ2bQN9lhWrv7cJh2T2TAqpkDlplnJnfXO4di7z9T2GF213Lk4jT+/rPGjV3ZLQMdogXklsNCpSHjomq4AJeR+6me7qPNmIguMOWBe71yMOmBsMguMBhPfxhy9bM0oApSm5j+VUFofi8Ah9Ku/TJpRL1tHFqgFNwtoS6HALLAVTIWmtOJpZoHFns2CRf25r6YArcAH7rkeTG/lESj15JvSCa0GqwBlRc/0tCmosgqEWv4nJe2urCmAA2t5fuAlg0DoliN0ZdDuyMFdP3SJVma3vkCtdwSgrjzFKlDv3fULdQsGgXDX1e/KKoH0Yy8KxCgzH4wKkSDhFS5XhxTYamURhw5vejnAZa84PZxAxjG9PSfv9E0l17ZWMOj9paRKUQdlD1YFh5vCAonhBDI5ZQDXGM7JdcXpZeVJCpVAZunfD9jeVDXTfwAjJPWQJZX/zQAAAABJRU5ErkJggg=="/><div class="Advantages__text-container"><h5 class="heading Advantages__title">Datensicherheit</h5><span class="Advantages__text">Unsere strengen Datenschutzlinien sorgen für eine sichere Übermittlung Ihrer persönlichen Daten. </span></div></li></ul></div></div>

	</div></div></div>
</body>
</html>
