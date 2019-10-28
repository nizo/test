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

if(!checkCookie('cookiebanner-accepted')) {
	var x = setTimeout(function() { displayModal('cookiebanner'); }, 1000);
	$('.cookieSubmit').on('click', function() {
		setCookie('cookiebanner-accepted', 1, 365);
		hideModal('cookiebanner', 'slideToggle');
	});
	$('.cookieDeny').on('click', function() {
		setCookie('cookiebanner-accepted', 0, 365);
	});
	$('.cookieConf').on('click', function() {
		console.log("conf");
		hideModal('cookiebanner', 'slideToggle');
		setTimeout(function() { displayModal('cookiebanner-config'); }, 1000);
	});
	$('.cookieBanner').on('click', function() {
		console.log("conf2");
		hideModal('cookiebanner-config', 'slideToggle');
		setTimeout(function() { displayModal('cookiebanner'); }, 1000);
	});
}

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
	console.log(modalName);
	modal.style.display = "block";
	
	if(modalName === 'priceCalc') {
		$('.formSuccess').hide();
				
		console.log(modalName);
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

/*
if (window.location.pathname === '/callcenter-software') {
	// Add event - when user want to leave site 
	addEvent(document, "mouseout", function(e) {
	    e = e ? e : window.event;
	    var from = e.relatedTarget || e.toElement;
	    if (!from || from.nodeName == "HTML") {
	    	var modalName = 'contact';
	    	    	
	    	if (!checkCookie('exitModal')) {
	    		console.log('Maus außerhalb des Fensters');
	    		displayModal(modalName);
	    		setCookie('exitModal', 1, 14);
	    	}
	    
	    	return;
	    }
	});
}
*/
	