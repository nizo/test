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

eventListener('click', '.cookieSubmit', (e) => {
	e.preventDefault();
	console.log('Cookie Richtlinien akzeptiert.');
	let button = e.target.closest('.cookieSubmit');

	var checkCode = 100;
	if (button.classList.contains('full')) {
		checkCode = 111;
	} else {
		if (document.querySelector('#CookieConf input#marketing').parentNode.classList.contains('checked'))
			checkCode += 10;
		if (document.querySelector('#CookieConf input#extern').parentNode.classList.contains('checked'))
			checkCode += 1;
	}
	if (checkCode > 100) {
		console.log('loadTracking');
		loadLazyTracking(checkCode > 101 ? true : false);
	}
	if (checkCode < 110) {
		let postData = new FormData();
		postData.set('optInActive', '1');
		fetch('/libs/count.php', {
			method: 'POST',
			body: postData
		})
		.then(response => {
			return response.json();
		})
		.then(data => {
			console.log(data);
		})
		.catch(response => {
			console.error (JSON.stringify (error));
		});
	}
	setCookie('cookiebanner-accepted', checkCode, 365);
	/* Set Cookie für Role selection */
	if (!checkCookie('co_role'))
		setCookie('co_role', '001', 365); //000 default value (it-leiter)
	
	hideModal('cookiebanner', 'slideDown');
	hideModal('cookiebanner-config', 'slideDown');
});

eventListener('click', '.cookieDeny', (e) => {
	e.preventDefault();
	console.log('Cookie Richtlinien widersprochen.');
	setCookie('cookiebanner-accepted', 100, 365);
	/* Set Cookie für Role selection */
	if (!checkCookie('co_role'))
		setCookie('co_role', '001', 365); //000 default value (it-leiter)
	
	hideModal('cookiebanner', 'slideDown');
	hideModal('cookiebanner-config', 'slideDown');
	deleteAllCookies();
	let postData = new FormData();
	postData.set('optInActive', '1');
	fetch('/libs/count.php', {
		method: 'POST',
		body: postData
	})
	.then(response => {
		return response.json();
	})
	.then(data => {
		console.log(data);
	})
	.catch(response => {
		console.error (JSON.stringify (error));
	});
});

eventListener('click', '.cookieConf', (e) => {
	console.log('Cookie Config.');
	hideModal('cookiebanner', 'slideToggle');
	setTimeout(function() { displayModal('cookiebanner-config'); }, 1000);
});
eventListener('click', '.cookieBanner', (e) => {
	console.log("Cookie Start.");
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

	// Autoplay casestudy video
	if (modalName === 'video-casestudy-check24') {
		let videos = modal.querySelectorAll('video');
		videos.forEach(video => {
			video.play()
		});
	}

	var x = setTimeout(function() {
		let fields = document.querySelectorAll('.inputFields');
		fields.forEach(field => field.style.display = 'block');
	}, 500);
	
	
	// Close Modal
	modal.addEventListener("click", function(event) { 
		if (event.target == modal) {
			fadeOut(modal, 300);
		}
	});
	
	for(var i = 0; i < closeButtons.length; i++) {
		closeButtons[i].addEventListener("click", function() { 
			fadeOut(modal, 300);
		});
	}
}

function hideModal(modalName, type) {
	var modal = document.getElementsByClassName(modalName)[0];
	switch(type) {
		case 'fadeOut':
			fadeOut(modal, 300);
			break;
		case 'slideToggle':
			slideToggle(modal, 700);
			break;
		default:
			fadeOut(modal, 300);
			break;
	}
}
