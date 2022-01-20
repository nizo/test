// Get the modalButtons
var buttons = document.getElementsByClassName('openModal');

//Set the EventListeners
for(var i = 0; i < buttons.length; i++)
{
	buttons[i].addEventListener("click", function() { 
		var modal = $(this).attr('data-modal');
		var title = null;
		title = $(this).attr('data-title');
		// Part - Selektor für einen bestimmten Part eines Modal zum anzeigen
		var part = $(this).attr('data-modal-part');
		displayModal(modal, title != undefined? title : null, part != undefined? part : null);
	});
}
 /** Old Cookiebanner
if(!checkCookie('cookiebanner-accepted')) {
	var x = setTimeout(function() { displayModal('cookiebanner'); }, 1000);
	setCookie('cookiebanner-accepted', 1, 90);
}
	
window.onscroll = function() {
	if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
		hideModal('cookiebanner', 'fadeOut');
	}
};	
**/

if(checkCookie('cookiebanner-accepted') === false) {
	console.log("cookie banner anzeigen");
	var x = setTimeout(function() { displayModal('cookiebanner'); }, 1000);
}

$('.cookieSubmit').on('click', function(event) {
	event.preventDefault();
	console.log("cookie richtlinien akzeptiert");
	var checkCode = 100;
	if ($(this).hasClass('full')) {
		checkCode = 111;
	} else {
		if ($('#CookieConf input#marketing').parent().hasClass('checked')) {
			checkCode += 10;
		}
		if ($('#CookieConf input#extern').parent().hasClass('checked')) {
			checkCode += 1;
		}
	}
	if (checkCode > 100) {
		console.log('loadTracking');
		loadLazyTracking(checkCode > 101? true : false);
	}
	if(checkCode < 110) {
		$.ajax({ 
			url: '/libs/count.php',
	        data: {
	        	optInActive: '1'
	        },
	        type: 'POST',
	        success: function(output) {
	        	//nothing
	        }
		});
	}
	setCookie('cookiebanner-accepted', checkCode, 365);
	/* Set Cookie für Role selection */
	if (!checkCookie('co_role'))
		setCookie('co_role', '001', 365); //000 default value (it-leiter)

	hideModal('cookiebanner', 'slideDown');
	hideModal('cookiebanner-config', 'slideDown');
});
$('.cookieDeny').on('click', function(event) {
	event.preventDefault();
	console.log("cookie richtlinien widersprochen");
	setCookie('cookiebanner-accepted', 100, 365);
	/* Set Cookie für Role selection */
	if (!checkCookie('co_role'))
		setCookie('co_role', '001', 365); //000 default value (it-leiter)

	hideModal('cookiebanner', 'slideDown');
	hideModal('cookiebanner-config', 'slideDown');
	deleteAllCookies();
	$.ajax({ 
		url: '/libs/count.php',
        data: {
        	optInActive: '1'
        },
        type: 'POST',
        success: function(output) {
        	//nothing
        }
	});
});
$('.cookieConf').on('click', function() {
	console.log("cookie config");
	hideModal('cookiebanner', 'slideToggle');
	setTimeout(function() { displayModal('cookiebanner-config'); }, 1000);
});
$('.cookieBanner').on('click', function() {
	console.log("cookie start");
	hideModal('cookiebanner-config', 'slideToggle');
	setTimeout(function() { displayModal('cookiebanner'); }, 1000);
});


window.onload = function() {
	var paramModal = urlHasParam("om", null);
	if(paramModal != null)
		displayModal(paramModal);
}

//ShowModal
function displayModal(modalName, titleContent, part) {
	var modal = document.getElementsByClassName(modalName)[0];
	var closeButtons = document.getElementsByClassName('close');
	
	if (modal == null)
		return;
	//console.log(modalName);
	modal.style.display = "block";
	
	if(modalName === 'priceCalc') {
		$('.formSuccess').hide();
				
		//console.log(modalName);
		var title = modal.getElementsByClassName('title-'+part)[0];
		var partToDisplay = modal.getElementsByClassName(part)[0]; 
		var defaultTitle = modal.getElementsByClassName('defaultTitle')[0];
			
		// Alle Parts zurücksetzen
		var parts = modal.getElementsByClassName('part');
		for(var i = 0; i < parts.length; i++)
		{
			parts[i].style.display = 'none';
		}

		// Speziellen Part anzeigen
		partToDisplay.style.display = "flex";
	}

	var x = setTimeout(function() { $('.inputFields').css('display', 'block'); }, 500);
	
	// Close Modal
	modal.addEventListener("click", function(event) { 
		if (event.target == modal) {
		    $(modal).fadeOut('fast');
		}
	});
	
	for(var i = 0; i < closeButtons.length; i++) {
		closeButtons[i].addEventListener("click", function() { 
			$(modal).fadeOut('fast');
		});
	}
}

function hideModal(modalName, type) {
	var modal = document.getElementsByClassName(modalName)[0];
	switch(type) {
		case 'fadeOut':
			$(modal).fadeOut('fast');
			break;
		case 'slideToggle':
			$(modal).slideToggle('slow');
			break;
		default:
			$(modal).fadeOut('fast');
			break;
	}
}
