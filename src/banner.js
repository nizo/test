const getEnv = function() {

	switch(true) {
		case window.location.href.match(/callone\.de\/blog/) !== null:
			return 'callone-blog';
		case window.location.href.match(/callone\.de\/faq/) !== null:
			return 'callone-faq';
		default:
			return 'callone';
	}
}

const closeButtonFn = function(el) {
	const stickyBannerNode = document.querySelector('.stickyBanner');
	const app = document.querySelector('body');
	app.classList.remove('stickyBanner--visible');
	stickyBannerNode.classList.remove('stickyBanner--animated');
	stickyBannerNode.classList.add('.stickyBanner--hidden');
	localStorage.setItem('dismiss_sticky_banner', 'yes');
	event.stopPropagation();
	event.preventDefault();
}

const clickLinkFn = function(el) {
	
	if(el.currentTarget.target === '_blank') {
		window.open(el.currentTarget.href).focus();
	} else {
		window.location.href = el.currentTarget.href;
	}
	
	closeButtonFn(el);
}


const checkIfBannerIsDismissed = function() {
	return typeof localStorage.getItem('dismiss_sticky_banner') === 'string';
}


const initStickBanners = function() {

	// Check if is dismissed

	if(checkIfBannerIsDismissed()) {
		return false;
	}


	// config

	const baseClass = 'stickyBanner';
	const showDelay = 1500;


	// create elements

	const env = getEnv();
	const app = document.querySelector('body');
	
  	const stickyBannerNode = document.querySelector('.stickyBanner');

	if(!stickyBannerNode) {
		return false;
	}

	let closeButton = stickyBannerNode.querySelector(`.${baseClass}__closeButton`);
	let innerContainerNode = stickyBannerNode.querySelector(`.${baseClass}__innerContainer`);


	// create binding

	closeButton.addEventListener('click', closeButtonFn);
	innerContainerNode.addEventListener('click', clickLinkFn);

	app.classList.add(`stickyBanner--${env}`);

	// start animation timer

	setTimeout(function() {
		app.classList.add('stickyBanner--visible');

		stickyBannerNode.classList.remove(`${baseClass}--hidden`);
		stickyBannerNode.classList.add(`${baseClass}--animated`);
	}, showDelay);



}


// Init

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initStickBanners);
} else {
  initStickBanners();
}