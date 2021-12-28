
var sendCallback = function(form) {
	var formData = new FormData(form);
	var id = "callone_cfcd208495d565ef66e7dff9f98764da";
	var key = "58e6f511a00324c208628ae903d7f2f0";
	
	var type = formData.get('type');

	if (type === null)
		return;

	switch (type) {
		case '0':
			formData.set('aid', id);
			formData.set('callback_key', key);
			break;
		default:
			break;
	}
	
	if (formData.get('phonenumber') == "")
		return;

	let postUrl = 'https://connect.callone.io/backend/callback.php';
	let postData = formData;
	fetch(postUrl, {
		method: 'POST',
		cache: 'no-cache',
		body: postData
	})
	.then(response => {
		return response.json();
	})
	.then(data => {
		console.log(data);
		if (data.error) {
			console.log(data.error);
			document.querySelector('#'+data.error).classList.add('error');
		} else {
			form.style.display = 'none';
			fadeIn(nextSibling(form, '.formSuccess'), 300);
			
			// Conversion Pixel
			dataLayer.push({'_event': 'formSubmit', 'event': 'formSubmit'});
			
			if (type != 3 && type != 4) {
				dataLayer.push({
					'event' : 'Lead',
					'eventCategory' : 'Lead',
					'eventAction' : 'Callback Modal',
					'eventLabel': data['phonenumber']
				});	
			}
		}
	})
	.catch(response => {
		console.error(response);
	});
};
