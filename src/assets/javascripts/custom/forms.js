
	// get actual wishlist
	var wishlist = [];
	if (localStorage) {
		var wishlist = JSON.parse(window.localStorage.getItem('wishlist'));
		if (wishlist == null)
			wishlist = [];
	}
	
	
	/* 
	 *	custom checkboxen conversation
	 */
	$('.conversation .checkboxen label').on('click', function() {
		if ($(this).hasClass('chat')) {
			//nothing
		} else {
			$target = $(this).attr('data-target');
			$('.step').hide();
			$('.'+$target).show();
		}

	});
	
	$('.button-bottom > button').on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass("added");
		var dataInfo = $(this).attr('data-info');
		if ($(this).hasClass('added')) {
			if(dataInfo) {
				console.log(wishlist);
				wishlist.push(dataInfo);
			}
			$(this).children().html( $(this).attr('data-add') );
			$(this).parent().append( '<div class="arrow-box shortModal" style="display: none;"><strong>'+dataInfo+'</strong>Zur Wunschliste hinzugefügt</div>' );
			var arrowBox = $(this).next('.arrow-box');
			arrowBox.delay('450').fadeIn();
			
			timeoutID = window.setTimeout(function() {
				var arrowBox = $('.button-bottom .arrow-box');
				arrowBox.fadeOut(function() {
					arrowBox.delay(400).remove();	
				});
			}, 4000);
			
			//$(this).next('arrow-box').delay(1000).fadeOut();
			
		} else {
			if(dataInfo) {
				wishlist.splice(wishlist.indexOf(dataInfo),1);
			}
			$(this).children().html( $(this).attr('data-base') ); 
			$('#wishlist .numberOfElements').html(wishlist.length);
		}
		
		
		if (!localStorage) {
			return;
		}
			
		var wlist = [];
		if((typeof wishlist != "undefined" || wishlist != null) && (wishlist.length > 0)) {
			console.log('wishlist: ' + wishlist);
			/*if (wlist = JSON.parse(window.localStorage.getItem('wishlist'))) {
				console.log('wlist: ' + wlist);
				var listitems = [];
				listitems = merge_array(wlist, wishlist, true);
				console.log('ListItems: ' + listitems);
				window.localStorage.removeItem('wishlist');
				window.localStorage.setItem('wishlist', JSON.stringify(listitems));
			} else {*/
				window.localStorage.setItem('wishlist', JSON.stringify(wishlist));
				$('#wishlist .numberOfElements').html(wishlist.length);
			//}
			var note2 = $( ".modal.wishlist .wish-list" );	
			note2.empty();
			jQuery.each( wishlist, function( i, val ) {
				note2.append('<li>'+val+'<span class="sl sl-close sl-before relative"></span></li>');
			});
			setCookie('wishlist', '1', 90);
			$('#wishlist').slideDown();
		} else {
			window.localStorage.removeItem('wishlist');
			document.cookie = "cookiename='wishlist' ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
			$('#wishlist').slideUp();
		}
	});
	
	/*$('#wishlist a').on('click', function(e) {
		e.preventDefault();
		var list = window.localStorage.getItem('wishlist');
		for (var i = 0; i < list.length; i++) {
			$('.wishlist ul').append('<li>' + list[i] + '</li>');
		}
	});*/
	

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
				
				// CalcForm
				var employees, functions = '';
				var func = [];
				if ($(form).hasClass('calcForm')) {
					employees = formData.get('employees');
					$(form).find("input[name='functions']:checked").each(function ()
			        {
			            func.push($(this).val());
			        });					
				} else {
					employees = $('#employees').text()
				}
				
				if ($(form).hasClass('wishlistContactForm')) {
					if (window.localStorage) {			
						func = JSON.parse(window.localStorage.getItem('wishlist'));
					}
				}
				
				data = {
	    			'type':	type, 
	    			'path': JSON.parse(formData.get('path')),
	    			'employees': employees,
	    			'issue': issue,
	    			'name': formData.get('name'),
	    			'position': $('#position').text(),
	    			'company': formData.get('company'),
	    			'phonenumber': formData.get('phonenumber'),
	    			'email': formData.get('email'),
	    			'agents': formData.get('agents'),
	    			'business':  formData.get('business'),
	    			'functions': func
				} 
				
    			if (formData.has('newsletter'))
    				data.newsletter = $(form).find('[name=newsletter]').attr('checked')? true : false;
								
				$(form).hasClass('calcForm')? action = 'Preis Modal' : action = 'Kontaktformular';
				$(form).hasClass('wishlistContactForm')? action = 'Wunschthemen' : action = 'Kontaktformular';
				
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
				
				//console.log(data);
				
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
			case '5':
								
				formData.set('type', type);
				formData.set('email', $(form).find('[name="email"]').val());
				formData.set('position', $(form).find('[name="position"] ').val());
				
				break;
			case '6':
				
				formData.set('type', type);
				formData.set('issue', $(form).find('[name="issue"]').val());
				formData.set('participant_email', $(form).find('[name="participant_email"]').val());
				formData.set('participant_name', $(form).find('[name="participant_name"]').val());
				formData.set('participation', $(form).find('[name="participation"]:checked').val() == 'ja'? true : false);
				if( $(form).find('[name="participation_partner"]:checked').val() == 'ja' )
					formData.set('partner_name', $(form).find('[name="partner_name"]').val());
				else
					formData.set('partner_name', ' ');
				
				break;
			default:
				return;
				break;
			}
			/*
			console.log(formData.getAll('type'));
			console.log(formData.getAll('issue'));
			console.log(formData.getAll('participant_email'));
			console.log(formData.getAll('participant_name'));
			console.log(formData.getAll('participation'));
			console.log(formData.getAll('partner_name'));
			
			console.log(data);
			*/
			$(form).find('.error').removeClass('error');
			$(form).find('.submit').attr("disabled", true);
			
			
			//return;
			
			if (type == '1' || type == '2') {
				
				$.ajax({
		            method: 'POST',
					url: $(form).hasClass('form-1')? "https://connect.callone.io/backend/phonenumbers.php" : "https://connect.callone.io/backend/contact.php",
					data: data,
					dataType: 'json',
		            success: function(response) {
		                if (response.error) {
							console.log(response.error);
							$(form).find('[name='+response.error+']').addClass('error');
							$(form).find('.submit').removeAttr("disabled");
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
							$(form).find('.submit').removeAttr("disabled");
						} else {
		                	$(form).hide();
		                	if( $(form).find('[name="participation"]:checked').val() == 'nein') {
		                		$('.animation-3::after').css('bottom', '6px');
		                		$('.animation-4::after').css('bottom', '6px');
		                		$(form).parent().find('.formSuccess.absage').fadeIn();
		                	} else if( $(form).find('[name="participation"]:checked').val() == 'ja') {
		                		$('.animation-3::after').css('bottom', '6px');
		                		$('.animation-4::after').css('bottom', '6px');
		                		$(form).next('.formSuccess.zusage').fadeIn();
		                	} else {
		                		$(form).next('.formSuccess').fadeIn();
		                	}
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
