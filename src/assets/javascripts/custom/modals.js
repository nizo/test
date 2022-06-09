// Get the modalButtons
var buttons = document.querySelectorAll('.openModal');

//Set the EventListeners
buttons.forEach(button => {
	button.addEventListener('click', e => {
		let modal = button.getAttribute('data-modal');
		let title = button.getAttribute('data-title') || null;
		let part = button.getAttribute('data-modal-part') || null;
		displayModal(modal, title != undefined? title : null, part != undefined? part : null);
	});
});

window.onload = function() {
	var paramModal = urlHasParam("om", null);
	if(paramModal != null)
		displayModal(paramModal);
};

//ShowModal
function displayModal(modalName, titleContent, part) {
	var modal = document.querySelector('.modal.'+modalName);
	var closeButtons = document.getElementsByClassName('close');
	
	if (modal == null)
		return;
	
	modal.style.display = 'block';

	var x = setTimeout(function() {
		let fields = document.querySelectorAll('.inputFields');
		fields.forEach(field => field.style.display = 'block');
	}, 500);
	
	// Close Modal
	modal.addEventListener('click', function(event) { 
		if (event.target == modal) {
			fadeOut(modal, 300);
		}
	});
	
	Array.from(closeButtons).forEach(closeButton => {
		closeButton.addEventListener('click', e => {
			fadeOut(modal, 300);
		});
	});
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
