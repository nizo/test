// Get the modalButtons
var buttons = document.getElementsByClassName('openModal');

//Set the EventListeners
for(var i = 0; i < buttons.length; i++)
{
	buttons[i].addEventListener("click", function() { 
		var modal = $(this).attr('data-modal');
		displayModal(modal);
	});
}

if(!checkCookie('cookiebanner-accepted')) {
	var x = setTimeout(function() { displayModal('cookiebanner'); }, 1000);
	setCookie('cookiebanner-accepted', 1, 90);
}
	
window.onscroll = function() {
	if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
		hideModal('cookiebanner', 'fadeOut');
	}
};	

window.onload = function() {
	var paramModal = urlHasParam("om", null);
	if(paramModal != null)
		displayModal(paramModal);
}

//ShowModal
function displayModal(modalName) {
	var modal = document.getElementsByClassName(modalName)[0];
	var closeButtons = document.getElementsByClassName('close');
	if (modal == null)
		return;
	
	modal.style.display = "block";
	
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
	