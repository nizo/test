eventListener('change', '.js-form input', e => {
	let group = e.target.closest('.group');
	if (group) {
		let label = group.querySelector('label');
		if (label)
			label.classList.add('fixed');
	}
});

var sendForm = function(form) {
	var globalFormData = new FormData(form);
	var formData = new FormData();

	var type = form.querySelector('[name="type"]').value;
	var data = null;
	var action, label = null;
	
	if (type === null)
		return;

	switch (type) {
		case '1':
			let selectedNumbers = [];
			let checkedBoxes = document.querySelectorAll('.customCheckbox input[name="checkboxNumbers"]:checked');
			let n = checkedBoxes.length;
			if (n > 0){
				checkedBoxes.forEach(box => {
					// selectedNumbers.push(box.value);
					formData.set('register_phonenumbers[]', box.value);
				});
			}
			
			formData.set('type', type);
			formData.set('email', globalFormData.get('email'));
			formData.set('name', globalFormData.get('name'));
			formData.set('company', globalFormData.get('company'));
				
			action = '0800 Rufnummern Reservierung';
			label = formData.get('company');
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
	.then(response => {
		if (response.error) {
			console.log(response.error);
			form.querySelector('[name='+response.error+']').classList.add('error');
			form.querySelector('.submit').disabled = false;
		} else {
			form.style.display = 'none';
			fadeIn(next(form, '.formSuccess'), 300);
			
			// Conversion Pixel
			dataLayer.push({'_event': 'formSubmit', 'event': 'formSubmit'});
			
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
