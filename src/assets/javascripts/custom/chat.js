// show and hide ChatConversation Elements
let user = {};
let nextStep = '.step1';
let thisStep = '.step0';

let err = {
	status: false,
	step: null,
	errMSG: 'Es trat ein Fehler auf! Bitte probieren SIe es zu einem späteren Zeitpunkt noch einmal.'
};

eventListener('click', '.conversation .interrest .customRadiobox', (e) => {
	let tmp = '';
	if (!user)
		return;
	let radioBox = e.target.closest('.customRadiobox');
	let radioFields = radioBox.parentNode.querySelectorAll('input[type="radio"]');
	radioFields.forEach(box => {
		if (box.parentNode.classList.contains('checked')) {
			tmp = box.value;
			return false;
		}
	});

	if (tmp) {
		// get user informations
		if ( cookiesettings.exists('co_pud') ) {
			user = JSON.parse(decodeURIComponent(decode(cookiesettings.get('co_pud'))));
		}
		// set user informations
		user.interrest = tmp;
		// set cookie
		cookiesettings.set('co_pud', encode(encodeURIComponent(JSON.stringify(user))), 90);
	}
});

eventListener('click', '.conversation.chat .customRadiobox', (e) => {
	let next = document.querySelector(nextStep);
	let current = document.querySelector(thisStep);
	let fields = next.querySelectorAll('input[type="radio"]');
	let isChecked = false;
	fields.forEach(field => {
		if (field.checked)
			isChecked = true;
	});
	if (!isChecked)
		return;
	let progressId;
	if (!err.status) {
		next.querySelector('.progress-bar').classList.add('start');
		progressId = 'valueProgress'+nextStep.substr(1, nextStep.length-1);
	} else {
		current.querySelector('.progress-bar').classList.add('start');
		progressId = 'valueProgress'+thisStep.substr(1, thisStep.length-1);
	}
	let from = document.querySelector('#' + progressId).getAttribute('data-from');
	let to = document.querySelector('#' + progressId).getAttribute('data-to');
	animateValue(progressId, from, to, 450);
});

eventListener('click', '.conversation.chat .customCheckbox', (e) => {
	var next = document.querySelector(nextStep);
	let current = document.querySelector(thisStep);
	var fields = next.querySelectorAll('.customCheckbox');
	var isChecked = false;
	fields.forEach(field => {
		if (field.classList.contains('checked'))
			isChecked = true;
	});
	if (!isChecked)
		return;
	let progressId;
	if (!err.status) {
		next.querySelector('.progress-bar').classList.add('start');
		progressId = 'valueProgress'+nextStep.substr(1, nextStep.length-1);
	} else {
		current.querySelector('.progress-bar').classList.add('start');
		progressId = 'valueProgress'+thisStep.substr(1, thisStep.length-1);
	}
	let from = document.querySelector('#' + progressId).getAttribute('data-from');
	let to = document.querySelector('#' + progressId).getAttribute('data-to');
	animateValue(progressId, from, to, 450);
});

eventListener('click', '.nextStep', (e) => {
	let button = e.target.closest('.nextStep');
	nextStep = '.' + button.getAttribute('data-show-step');
	thisStep = '.' + button.getAttribute('data-hide-step');
	let nextStepEl = document.querySelector(nextStep);
	let thisStepEl = document.querySelector(thisStep);

	err = {
		status: false,
		step: null,
		errMSG: 'Es trat ein Fehler auf! Bitte probieren Sie es zu einem späteren Zeitpunkt noch einmal.'
	};

	let inputs = Array.from(thisStepEl.querySelectorAll('input, textarea, select'));
	let reqFields = inputs.filter(input => input.matches('[required]') && (input.offsetWidth > 0 || input.offsetHeight > 0));
	let radioFields = thisStepEl.querySelectorAll('input[type="radio"]');
	let checkboxFields = thisStepEl.querySelectorAll('input[type="checkbox"]');
	
	if (!thisStepEl.classList.contains('return')) {
		if (radioFields.length > 0) {
			// Mind. ein radio-feld checked
			radioFields.forEach(box => {
				if (box.parentNode.classList.contains('checked')) {
					err = false;
					err.step = null;
					switch (box.getAttribute('name')) {
						case 'interrest':
							user.interrest = box.value;
							break;
						case 'connections':
							user.connection = box.value;
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
		}

		if (checkboxFields.length > 0) {
			// Mind. ein checkbox-feld checked
			let resetFunctions = 0;
			checkboxFields.forEach(box => {
				if(box.parentNode.classList.contains('checked')) {
					err = false;
					err.step = null;
					switch (box.getAttribute('data-name')) {
						case 'functions':
							if (resetFunctions === 0) {
								user.functions = '';
								resetFunctions = 1;
							}
							user.functions += box.value + ';';
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
		}
		
		reqFields.forEach(field => {
			field.style.borderColor = 'inherit';
			if(field.value === '' && !field.classList.contains('iE')) {
				field.style.borderColor = 'red';
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
		thisStepEl.querySelector('.errorMSG').innerHTML = err.errMSG;
		fadeIn(thisStepEl.querySelector('.errorMSG'), 300);
	} else {
		thisStepEl.querySelector('.errorMSG').style.display = 'none';
		
		thisStepEl.classList.add('goAway');
		thisStepEl.classList.remove('go');
		if (nextStep == '.result') {
			var functionElements = user.functions.split(';');
			var functionElementList = '';
			let projectChildren = document.querySelectorAll('.projectElements li');
			projectChildren.forEach(child => child.classList.remove('show'));
			/* Prüfe alle Funktionen */
			functionElements.forEach(element => {
				if (element !== '') {
					let elWithClass = document.querySelectorAll('.' + element);
					elWithClass.forEach(e => e.classList.add('show'));
				}
			});
			/* Einrichtungszeit */
			let timeSpans = document.querySelectorAll('.time > span');
			if (user.connection < 10) {
				timeSpans.forEach(span => span.innerHTML = 'Einige Stunden');
			} else if (user.connection > 250) {
				timeSpans.forEach(span => span.innerHTML = '1-2 Personentage');
			} else {
				timeSpans.forEach(span => span.innerHTML = '1 Personentag');
			}
			document.body.classList.add('grey');
			thisStepEl.classList.remove('step--active');
			nextStepEl.classList.add('step--active');
			setTimeout(function(){
				scrollToOffset(0);
				nextStepEl.classList.remove('goAway');
				nextStepEl.classList.add('go');
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
				document.body.classList.remove('grey');
			}
			thisStepEl.classList.remove('step--active');
			nextStepEl.classList.add('step--active');
			setTimeout(function(){
				scrollToOffset(0);
				nextStepEl.classList.remove('goAway');
				nextStepEl.classList.add('go');
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
					tracking = 'Segment';
					break;
				case 'step2':
					tracking = 'Anschlüsse';
					break;
				case 'step3':
					tracking = 'Funktionen';
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
		cookiesettings.set('co_pud', encode(encodeURIComponent(JSON.stringify(user))), 90);
	}
});