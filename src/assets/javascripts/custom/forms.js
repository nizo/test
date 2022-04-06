// get actual wishlist
var wishlist = [];
if (localStorage) {
	var wishlist = JSON.parse(window.localStorage.getItem('wishlist'));
	if (wishlist == null)
		wishlist = [];
}

/* 
 * custom checkboxen conversation
 */
eventListener('click', '.conversation .checkboxen label', e => {
	let label = e.target.closest('label');
	if (label.classList.contains('chat')) {
		// nothing
	} else {
		let target = label.getAttribute('data-target');
		document.querySelectorAll('.step').forEach(step => step.style.display = 'none');
		document.querySelector('.' + target).style.display = 'block';
	}
});

eventListener('click', '.button-bottom > button', e => {
	e.preventDefault();
	let button = e.target.closest('button');
	button.classList.toggle('added');
	let dataInfo = button.getAttribute('data-info');
	if (button.classList.contains('added')) {
		if (dataInfo) {
			wishlist.push(dataInfo);
		}
		Array.from(button.children).forEach(child => child.innerHTML = button.getAttribute('data-add'));
		button.parentNode.insertAdjacentHTML('beforeend', '<div class="arrow-box shortModal" style="display: none;"><strong>'+dataInfo+'</strong>Zur Wunschliste hinzugefügt</div>');
		var arrowBox = next(button, '.arrow-box');
		setTimeout(e => {
			fadeIn(arrowBox, 300);
		}, 450);
		
		timeoutID = window.setTimeout(function() {
			var arrowBox = document.querySelectorAll('.button-bottom .arrow-box');
			setTimeout(e => {
				arrowBox.forEach(box => {
					fadeOut(box, 300);
				});
			}, 400);
		}, 4000);
	} else {
		if(dataInfo) {
			wishlist.splice(wishlist.indexOf(dataInfo),1);
		}
		Array.from(button.children).forEach(child => child.innerHTML = button.getAttribute('data-base'));
		document.querySelector('#wishlist .numberOfElements').innerHTML = wishlist.length;
	}
	
	var wlist = [];
	if((typeof wishlist != "undefined" || wishlist != null) && (wishlist.length > 0)) {
		window.localStorage.setItem('wishlist', JSON.stringify(wishlist));
		document.querySelector('#wishlist .numberOfElements').innerHTML = wishlist.length;
		var note2 = document.querySelector('.modal.wishlist .wish-list');
		note2.innerHTML = '';
		wishlist.forEach(val => {
			note2.innerHTML += '<li>'+val+'</li>';
		});
		setCookie('wishlist', '1', 90);
		slideDown(document.querySelector('#wishlist'), 300);
	} else {
		window.localStorage.removeItem('wishlist');
		document.cookie = "cookiename='wishlist' ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
		slideUp(document.querySelector('#wishlist'), 300);
	}
});

eventListener('click', '.js-form .select-selected', e => {
	let group = e.target.closest('.group');
	let next = window.next(group, '.select-hide');
	if (next) {
		next.classList.toggle('active');
		if (next.classList.contains('active')) {
			slideDown(next, 300);
		} else {
			slideUp(next, 300);
		}
	}
});

eventListener('click', '.select-items .item', e => {
	let item = e.target.closest('.item');
	let parent = item.closest('.customSelect');
	let label = parent.querySelector('label');
	label.classList.add('fixed');
	let selected = parent.querySelector('.select-selected');
	selected.innerHTML = item.textContent;
	selected.classList.remove('active');
	let selectHide = item.closest('.select-hide');
	slideUp(selectHide, 300, () => {
		selectHide.classList.remove('active');
	});
});

eventListener('change', '.js-form input', e => {
	let group = e.target.closest('.group');
	if (group) {
		let label = group.querySelector('label');
		if (label)
			label.classList.add('fixed');
	}
});

/* upload Button */
const uploadButton = document.getElementById('fileButton');
const fileInfo = document.getElementById('fileInfo');
const realInput = document.getElementById('realFile');

if (uploadButton != null  && realInput != null) {
	uploadButton.addEventListener('click', function() {
		realInput.click();
	});
	
	realInput.addEventListener('change', function() {
		const name = realInput.value.split(/\\|\//).pop();
		const truncated = name.length > 20 
		? name.substr(name.length - 20) 
		: name;
		
		fileInfo.innerHTML = truncated;
	});
}

var sendForm = function(form) {
		
	var formData = new FormData(form);

	var type = form.querySelector('[name="type"]').value;
	var data = null;
	var action, label = null;
	
	if (type === null)
		return;

	switch (type) {
	case '1':
		var formData = new FormData();
		if(form.classList.contains('form-1')) {
			console.log('Rufnummern');
			let selectedNumbers = new Array();
			let checkedBoxes = document.querySelectorAll('.customCheckbox input[name="checkboxNumbers"]:checked');
			let n = checkedBoxes.length;
			if (n > 0){
				checkedBoxes.forEach(box => {
					selectedNumbers.push(box.value);
				});
			}
			
			formData.set('type', type);
			formData.set('register_phonenumbers', selectedNumbers);
			formData.set('email', formData.get('email'));
			formData.set('name', formData.get('name'));
			formData.set('company', formData.get('company'));
				
			action = '0800 Rufnummern Reservierung';
			label = formData.get('company');
		} else {
			formData.set('type', type);
			formData.set('path', JSON.parse(formData.get('path')));
			formData.set('issue', formData.get('issue'));
			formData.set('name', formData.get('name'));
			formData.set('email', formData.get('email'));
			
			action = 'Einfaches Kontaktforumlar';
			label = formData.get('email');
		}
		break;
	case '2':
		var issue = '';
		let issueEl = form.querySelector('#issue');
		if (issueEl) {
			if (issueEl.classList.contains('select-selected')) {
				issue =  issueEl.textContent;
			} else {
				issue = form.querySelector('[name="issue"]').value;
			}
		}
		
		// CalcForm
		var employees, functions = '';
		var func = [];
		if (form.classList.contains('calcForm')) {
			employees = formData.get('employees');
			form.querySelectorAll('input[name="functions"]:checked').forEach(input => {
				func.push(input.value);
			});					
		} else {
			let employeesEl = form.querySelector('#employees');
			if (employeesEl)
				employees = employeesEl.textContent;
		}
		
		if (form.classList.contains('wishlistContactForm')) {
			if (window.localStorage) {			
				func = JSON.parse(window.localStorage.getItem('wishlist'));
			}
		}

		let positionEl = form.querySelector('#position');
		let position = '';
		if (positionEl)
			position = positionEl.textContent;
		
		var formData = new FormData();
		formData.set('type', type);
		formData.set('path', JSON.parse(formData.get('path')));
		formData.set('employees', employees);
		formData.set('issue', issue);
		formData.set('name', formData.get('name'));
		formData.set('position', position);
		formData.set('company', formData.get('company'));
		formData.set('phonenumber', formData.get('phonenumber'));
		formData.set('email', formData.get('email'));
		formData.set('agents', formData.get('agents'));
		formData.set('business',  formData.get('business'));
		formData.set('functions', func);
		
		if (formData.has('newsletter')) {
			let newsletter = form.querySelector('[name="newsletter"]');
			formData.set('newsletter', newsletter.checked ? true : false);
		}
						
		form.classList.contains('calcForm') ? action = 'Preis Modal' : action = 'Kontaktformular';
		form.classList.contains('wishlistContactForm') ? action = 'Wunschthemen' : action = 'Kontaktformular';
		
		label = formData.get('company');
		break;
	default:
		return;
		break;
	}

	let error = form.querySelector('.error');
	if (error)
		error.classList.remove('error');
	let submit = form.querySelector('.submit');
	if (submit)
		submit.disabled = true;
	
	let postUrl = form.classList.contains('form-1') ? 'https://connect.callone.io/backend/phonenumbers.php' : 'https://connect.callone.io/backend/contact.php';
	fetch(postUrl, {
		method: 'POST',
		cache: 'no-cache',
		body: formData
	})
	.then(response => {
		return response.json();
	})
	.then(data => {
		if (response.error) {
			console.log(response.error);
			form.querySelector('[name='+response.error+']').classList.add('error');
			form.querySelector('.submit').disabled = false;
		} else {
			form.style.display = 'none';
			fadeIn(next(form, '.formSuccess'), 300);
			
			// Conversion Pixel
			dataLayer.push({'_event': 'formSubmit', 'event': 'formSubmit'})
			
			// Conversion Lead with data
			if (type != 3 && type != 4) {
				//console.log('Lead pushed');
				dataLayer.push({
					'_event': 'Lead',
					'event' : 'Lead',
					'eventCategory' : 'Lead',
					'eventAction' : action,
					'eventLabel' : label
				});	
			}	  
			
			// Facebook Tracking Pixel
			window._fbq = window._fbq || [];
			window._fbq.push(['track', '6018846817861', {'value':'0.00','currency':'EUR'}]);	
		}
	})
	.catch(response => {
		console.error (JSON.stringify (response));
		form.style.display = 'none';
		fadeIn(next(form, '.formFail'), 300);
	});
};
