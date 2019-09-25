
	/* Add and remove Button (tiles) */
	$('.button-bottom > button').on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass("added");
		if ($(this).hasClass('added'))
			$(this).children().html( $(this).attr('data-add') );
		else
			$(this).children().html( $(this).attr('data-base') );
		
	});

	$('.js-form .select-selected').on ("click", function(){
    	$(this).toggleClass('active'),
    	$(this).parent('.group').next('.select-hide').toggleClass( 'active');
    	if ($(this).parent('.group').next('.select-hide').hasClass('active')) {
    		$(this).parent('.group').next('.select-hide').slideDown('fast');
    	} else {
    		$(this).parent('.group').next('.select-hide').slideUp('fast');	
    	}
	});
	
	$('.select-items .item').on ('click', function() {
	    $(this).parent('.select-items').parent('.customSelect').children('.group').children('label').addClass('fixed');
	    $(this).parent('.select-items').parent('.customSelect').children('.group').children('.select-selected').html($(this).text())
	    $(this).parent('.select-hide').slideUp('fast')
	    $(this).parent('.select-hide').removeClass('active');
	});
	
    $('.js-form input').on ('change', function() {
    	$(this).parent('.group').children('label').addClass('fixed');
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
			
			var formData = new FormData(form[0]);
	
			var type = $(form).find('[name="type"]').val();
			var data = null;
			var action, label = null;
			
			if (type === null)
				return;
	
			switch (type) {
			case '0':
				data = {
	    			'type':	type, 
	    			'path': JSON.parse(formData.get('path')),
	    			'email': formData.get('email')
				}
				break;
			case '1':
				 if($(form).hasClass('form-1')) {
			    	console.log('Rufnummern');
			        var selectedNumbers = new Array();
			        var n = $('.customCheckbox input[name="checkboxNumbers"]:checked').length;
			        if (n > 0){
			            $('.customCheckbox input[name="checkboxNumbers"]:checked').each(function(){
			            	selectedNumbers.push($(this).val());
			            });
			        }
			        console.log(selectedNumbers);
			    	
					data = {
		    			'type':	type, 
		    			'register_phonenumbers': selectedNumbers,
		    			'email': formData.get('email'),
		    			'name': formData.get('name'),
		    			'company': formData.get('company')
					}
					 
					action = '0800 Rufnummern Reservierung';
					label = data['company'];
					
				} else {
					data = {
		    			'type':	type, 
		    			'path': JSON.parse(formData.get('path')),
		    			'issue': formData.get('issue'),
		    			'name': formData.get('name'),
		    			'email': formData.get('email') 
					}
					
					action = 'Einfaches Kontaktforumlar';
					label = data['email'];
				}
				break;
			case '2':
				var issue = '';
				if($(form).find('#issue').hasClass('select-selected'))
					issue =  $('#issue').text();
				else
					issue = $(form).find('[name="issue"]').val();
				
				data = {
	    			'type':	type, 
	    			'path': JSON.parse(formData.get('path')),
	    			'employees': $('#employees').text(),
	    			'issue': issue,
	    			'name': formData.get('name'),
	    			'position': $('#position').text(),
	    			'company': formData.get('company'),
	    			'phonenumber': formData.get('phonenumber'),
	    			'email': formData.get('email') 
				} 
				
				action = 'Kontaktformular';
				label = data['company'];
				
				/*formData.set('type', type);
				formData.set('path', JSON.parse($(form).find('[name="path"]').val()));
				formData.set('employees', $(form).find('#position').text());
				formData.set('issue', $(form).find('[name="issue"]').val());
				formData.set('name', $(form).find('[name="name"]').val());
				formData.set('position', $(form).find('#position').text());
				formData.set('company', $(form).find('[name="company"]').val());
				formData.set('phonenumber', $(form).find('[name="phonenumber"]').val());
				formData.set('email', $(form).find('[name="email"]').val());
				*/
				// ToDo js Evaluierung
				
				break;
			case '3':
				
				formData.set('type', type);
				formData.set('path', JSON.parse($(form).find('[name="path"]').val()));
				formData.set('issue', $(form).find('[name="issue"]').val());
				formData.set('name', $(form).find('[name="name"]').val());
				formData.set('phonenumber', $(form).find('[name="phonenumber"]').val());
				formData.set('email', $(form).find('[name="email"]').val());
				formData.set('text', $(form).find('[name="text"]').val());
				formData.set('file', document.getElementById('realFile').files[0]);
				
				break;
				
			case '4':
				/*data = {
	    			'type':	type, 
	    			'path': JSON.parse(formData.get('path')),
	    			'issue': formData.get('issue'),
	    			'name': formData.get('name'),
	    			'url': formData.get('url')	    			
				} */
				
				formData.set('type', type);
				formData.set('path', JSON.parse($(form).find('[name="path"]').val()));
				formData.set('issue', $(form).find('[name="issue"]').val());
				formData.set('name', $(form).find('[name="name"] ').val());
				formData.set('url', $(form).find('[name="url"] ').val());
								
				break;
			default:
				return;
				break;
			}
			//console.log(formData);
			//console.log(data);
			
			$(form).find('.error').removeClass('error');
			
			if (type != '3' && type != '4') {
	
				$.ajax({
		            method: 'POST',
					url: $(form).hasClass('form-1')? "https://connect.callone.io/backend/phonenumbers.php" : "https://connect.callone.io/backend/contact.php",
					data: data,
					dataType: 'json',
		            success: function(response) {
		                if (response.error) {
							console.log(response.error);
							$(form).find('#'+response.error).addClass('error');
						} else {
		                	$(form).hide();
		            		$(form).next('.formSuccess').fadeIn();
		            		
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
		            },
		        	error: function(response) {
		            	console.log(response.error);
		            	$(form).hide();
		            	$(form).next('.formFail').fadeIn();
		            },
		            fail: function(msg) {
		            	console.log(msg);
		            	$(form).hide();
		            	$(form).next('.formFail').fadeIn();
		            } 
				});  
			}
			else {
				$.ajax({
		            url: "https://connect.callone.io/backend/contact.php",
		            cache: false,
					type: 'POST',
					data: formData,
					dataType: 'json',
		            processData: false,
		            contentType: false,
		            success: function(response) {
		                if (response.error) {
							console.log(response.error);
							$(form).find('#'+response.error).addClass('error');
						} else {
		                	$(form).hide();
		            		$(form).next('.formSuccess').fadeIn();
		            		
		            		// Facebook Tracking Pixel
		            		window._fbq = window._fbq || [];
		            		window._fbq.push(['track', '6018846817861', {'value':'0.00','currency':'EUR'}]);
						}        		
		            },
		        	error: function(response) {
		            	console.log(response.error);
		            },
		            fail: function(msg) {
		            	console.log(msg);
		            } 
				});  
			}
	};
