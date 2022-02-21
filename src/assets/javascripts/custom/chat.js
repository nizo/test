// show and hide ChatConversation Elements
var user = {};
var nextStep = '.step1';
var thisStep = '.step0';

var err = {
	status: false,
	step: null,
	errMSG: 'Es trat ein Fehler auf! Bitte probieren SIe es zu einem späteren Zeitpunkt noch einmal.'
};	

$('.conversation .interrest .customRadiobox').on('click', function() {
	var tmp = '';
	if( user ) {
		var radioFields = $(this).parent().find('input:radio');
		$.each( radioFields, function( k, box ) {			
			if($(box).parent().hasClass('checked')) {
				tmp = $(box).val();
				return false;
			} else {
				// kein radio-feld checked
			}
		});
		
		if ( tmp ) {
			// get user informations
			if ( checkCookie('co_pud') ) {
				user = JSON.parse(decodeURIComponent(decode(getCookie('co_pud'))));
			}
			// set user informations
			user.interrest = tmp;
			// set cookie
			setCookie('co_pud', encode(encodeURIComponent(JSON.stringify(user))), 90);
		}
	}
});

$('.conversation.chat .customRadiobox').on('click', function() {
	var fields = $(nextStep).find('input:radio');
	if (fields.is(':checked')) {
		// nothing
	} else { 
		if ( !err.status ) {
			$(nextStep).find('.progress-bar').addClass('start');
			var val = 'valueProgress'+nextStep.substr(1, nextStep.length-1);
			animateValue(val, $('#'+val).attr('data-from'), $('#'+val).attr('data-to'), 450);
		} else {
			$(thisStep).find('.progress-bar').addClass('start');
			var val = 'valueProgress'+thisStep.substr(1, thisStep.length-1);
			animateValue(val, $('#'+val).attr('data-from'), $('#'+val).attr('data-to'), 450);
		}
	}
});

$('.conversation.chat .customCheckbox').on('click', function() {
	var fields = $(nextStep).find('.customCheckbox');
	if (fields.hasClass('checked')) {
		// nothing
	} else { 
		if ( !err.status ) {
			$(nextStep).find('.progress-bar').addClass('start');
			var val = 'valueProgress'+nextStep.substr(1, nextStep.length-1);
			animateValue(val, $('#'+val).attr('data-from'), $('#'+val).attr('data-to'), 450);
		} else {
			$(thisStep).find('.progress-bar').addClass('start');
			var val = 'valueProgress'+thisStep.substr(1, thisStep.length-1);
			animateValue(val, $('#'+val).attr('data-from'), $('#'+val).attr('data-to'), 450);
		}
	}
});


$('.nextStep').on('click', function () {
	nextStep = '.' + $(this).attr('data-show-step');
	thisStep = '.' + $(this).attr('data-hide-step');
	
	err = {
		status: false,
		step: null,
		errMSG: 'Es trat ein Fehler auf! Bitte probieren Sie es zu einem späteren Zeitpunkt noch einmal.'
	};	
	
	var reqFields = $(thisStep).find('input,textarea,select').filter('[required]:visible');
	var radioFields = $(thisStep).find('input:radio');
	var checkboxFields = $(thisStep).find('input:checkbox');
	
	if ($(this).hasClass('return')) {
		
	} else {
		
		if (radioFields.length > 0) {
			// Mind. ein radio-feld checked
			$.each( radioFields, function( k, box ) {			
				if($(box).parent().hasClass('checked')) {
					err = false;
					err.step = null;
					switch ($(box).attr('name')) {
						case 'interrest':
							user.interrest = $(box).val();
							break;
						case 'connections':
							user.connection = $(box).val();
							break;
						default:
							break;
					}
					return false;
				} else {
					// kein radio-feld checked
					err.status = true;
					err.step = thisStep;
					err.errMSG = 'Bitte treffen Sie eine Auswahl!';
				}
			});
		} else {
			// nothing
		}
		
		if (checkboxFields.length > 0) {
			// Mind. ein checkbox-feld checked
			var resetFunctions = 0;
			$.each( checkboxFields, function( k, box ) {			
				if($(box).parent().hasClass('checked')) {
					err = false;
					err.step = null;
					switch ($(box).attr('data-name')) {
						case 'functions':
							if (resetFunctions === 0) {
								user.functions = '';
								resetFunctions = 1;
							}
							user.functions += $(box).val() + ';';
							break;
						default:
							break;
					}
				} else {
					// kein radio-feld checked
					err.status = true;
					err.step = thisStep;
					err.errMSG = 'Bitte treffen Sie mind. eine Auswahl!';
				}			
			});
		} else {
			// nothing
		}
		
		$.each( reqFields, function( k, v ) {
			$(v).css('border-color', 'inherit');
			if($(v).val() === '' && !$(v).hasClass('iE')) {
				$(v).css('border-color', 'red');
				err.status = true;
				err.step = thisStep;
			} else { 
				if (!err.status) {
					err.status = false;
					err.step = null;
				}
			}
		});
	}	

	if ( err.status ) {
		//fehler geht nicht weiter
		$(thisStep).find('.errorMSG').html(err.errMSG);
		$(thisStep).find('.errorMSG').fadeIn('fast');
	} else {
		$(thisStep).find('.errorMSG').hide();
			
		/*
		$('.'+thisStep).removeClass('go');
		$('.'+thisStep).addClass('goAway');
		$('.'+nextStep).removeClass('goAway');
		$('.'+nextStep).addClass('go');
		$('.'+nextStep).addClass('animated');*/
		
		$(thisStep).addClass('goAway');
		if (nextStep == '.result') {
			var functionElements = user.functions.split(';');
			var functionElementList = '';
			$('.projectElements').children('li').removeClass('show');
			/* Prüfe alle Funktionen */
			$.each( functionElements, function( f, element ) {
				if (element !== '') {
					$('.'+element).addClass('show');
				}
			});
			/* Einrichtungszeit */
			if (user.connection < 10) {
				$('.time > span').html('Einige Stunden');
			} else if (user.connection > 250) {
				$('.time > span').html('1-2 Personentage');
			} else {
				$('.time > span').html('1 Personentag');
			}
			$('body').addClass('grey');
			$(thisStep).removeClass('step--active');
			$(nextStep).addClass('step--active');
			setTimeout(function(){
				// $('.bg-height').css('height', $(nextStep).outerHeight() + 2250); 
				scrollTo(nextStep, 0);
				// $(nextStep).css('display', 'initial');
				$(nextStep).removeClass('goAway');
				$(nextStep).addClass('go');
			}, 750);
			window._mfq.push(["Preiskalkulator-"+nextStep, "/preiskalkulator?step="+nextStep]);
			window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({
				'_event': 'Preiskalkulator',
    			'event' : 'Preiskalkulator',
    			'eventCategory' : 'Preiskalkulator',
    			'eventAction' : 'ViewNextStep',
    			'eventLabel' : 'Ergebnisseite'
    		});	
		} else {
			if (thisStep == '.result') {
				$('body').removeClass('grey');
			}
			$(thisStep).removeClass('step--active');
			$(nextStep).addClass('step--active');
			setTimeout(function(){
				// $('.bg-height').css('height', $(nextStep).outerHeight() + 350);
				scrollTo(nextStep, 0);
				// $(nextStep).css('display', 'initial');
				$(nextStep).removeClass('goAway');
				$(nextStep).addClass('go');
			}, 750);
			
			/* Mouseflow Tracking */
			window._mfq.push(["Preiskalkulator-"+nextStep, "/preiskalkulator?step="+nextStep]);
			
			/* GTM/Analytics Ereignis Tracking */
			var tracking = '';
			if ( nextStep.charAt(0) === '.' ) 
				tracking = nextStep.substring(1);
			else 
				tracking = nextStep;
			
			switch (tracking) {
				case 'step1':
					tracking = 'Segment'
					break;
				case 'step2':
					tracking = 'Anschlüsse'
					break;
				case 'step3':
					tracking = 'Funktionen'
					break;
				default:
					break;
			}
			
			window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({
				'_event': 'Preiskalkulator',
    			'event' : 'Preiskalkulator',
    			'eventCategory' : 'Preiskalkulator',
    			'eventAction' : 'ViewNextStep',
    			'eventLabel' : tracking
    		});
			
		}		
		setCookie('co_pud', encode(encodeURIComponent(JSON.stringify(user))), 90);
	}
	
});