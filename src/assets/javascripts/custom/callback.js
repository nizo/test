
var sendCallback = function(form) {
	var formData = new FormData(form);
	var id = "callone_cfcd208495d565ef66e7dff9f98764da";
	var key = "58e6f511a00324c208628ae903d7f2f0";
	
	var type = formData.get('type');
	var data = null;

	if (type === null)
		return;

	switch (type) {
		case '0':
		data = {
			'type':	type, 
			'aid': id,
			'callback_key': key,
			'phonenumber': formData.get('phonenumber') 
		}
		break;
		default:
			break;
	}
	
	if (data['phonenumber'] == "") {
		return;
	}
	
	$.ajax({
		method: "POST",
		url: "https://connect.callone.io/backend/callback.php",
		dataType: 'json',
		data: data,
		success: function(response) {
			console.log(response);
			if (response.error) {
				console.log(response.error);
				$('#'+response.error).addClass('error');
			} else {
				$(form).hide();
				$(form).next('.formSuccess').fadeIn();
				
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
		},
		error: function(err) {
			console.log(err);
		},
		fail: function(msg) {
			console.log(msg);
		} 
	}); 
};
