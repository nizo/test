// Set CSSClass when trackElement by GTM is allready clicked
eventListener('click', '.trackedElement', e => {
	let link = e.target.closest('.trackedElement');
	link.classList.toggle('clicked');
});

/* simple encode function (bitweise) */
function encode(str) {
	var encoded = "";
	for (let i=0; i<str.length;i++) {
		var a = str.charCodeAt(i);
		var b = a ^ 6;
		encoded = encoded+String.fromCharCode(b);
	}
	return encoded;
}

/* simple decode function (bitweise) */
function decode(str) {
	var decoded = "";
	for (let i=0; i<str.length;i++) {
		var b = str.charCodeAt(i);
		var a = b ^ 6;
		decoded = decoded+String.fromCharCode(a);
	}
	return decoded;
}

function animateValue(id, start, end, duration) {
    // assumes integer values for start and end
    
	var obj = document.getElementById(id);
	if (!obj) return;
	
    var range = end - start;
    // no timer shorter than 50ms (not really visible any way)
    var minTimer = 50;
    // calc step time to show all interediate values
    var stepTime = Math.abs(Math.floor(duration / range));
    
    // never go below minTimer
    stepTime = Math.max(stepTime, minTimer);
    
    // get current time and calculate desired end time
    var startTime = new Date().getTime();
    var endTime = startTime + duration;
    var timer;
  
    function run() {
        var now = new Date().getTime();
        var remaining = Math.max((endTime - now) / duration, 0);
        var value = Math.round(end - (remaining * range));
        obj.innerHTML = value;
        if (value == end) {
            clearInterval(timer);
        }
    }
    
    timer = setInterval(run, stepTime);
    run();
}

document.addEventListener("DOMContentLoaded", function() {
	let numbersLoaded = false;
	eventListener('click', '.form .showDiv', () => {
		if (numbersLoaded)
			return;
		let spinner = document.querySelector('.form-1 .selection .spinner');
		let phonenumbersBox = document.querySelector('.form-1 .selection');
		fadeIn(spinner, 300);
		let postUrl = 'https://connect.callone.io/backend/phonenumbers.php';
		var postData = new FormData();
		postData.set('type', 0);
		fetch(postUrl, {
			method: 'POST',
			body: postData
		})
		.then(response => {
			return response.json();
		})
		.then(data => {
			fadeOut(spinner, 300);
			let numbers = '';
			data.phonenumbers.forEach((number, i) => {
				numbers += '<label for="'+ i +'" class="customCheckbox"><input name="checkboxNumbers" type="checkbox" id="'+ i +'" value="'+ number.number +'" /><span class="checkmark"></span>';		
				numbers += number.number;
				numbers += '</label>';
			});
			phonenumbersBox.innerHTML = numbers;
			numbersLoaded = true;
		})
		.catch(response => {
			phonenumbersBox.innerHTML = '<div class="error">Es ist ein Fehler beim laden der Rufnummern aufgetreten! Bitte versuchen Sie es später noch einmal.</div>';
			console.error(response);
		});
    });
});


function urlHasParam(paramName, paramURL) {
	if (paramURL == null)
		paramURL = window.location.href; 
	var url = new URL(paramURL);
	var param = url.searchParams.get(paramName);
	
	return param;
}


/** Funktion to add events vanilla **/
function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    }
    else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}

(function() {
	
	var conversation = [["Ich möchte meinen Lieferstatus wissen.", "Ihr Pakt wird morgen geliefert."], ["Ich möchte einen Termin buchen​.", "Der nächste freie Termin wäre morgen um 11:00 Uhr."], ["Ich möchte die Ware zurücksenden.", "Den Link zum Rücksendeticket haben wir Ihnen soeben per SMS zugeschickt."] ];
	var counter = 0;
	var movedOver = false;
	var direction = "";
	var time = "1000";
	
    function chatConversationSimulation() {
		var el = document.querySelector(".chat-conversation div:nth-child(1)");
		var el2 = document.querySelector(".chat-conversation div:nth-child(2)");

		if(counter % 2 === 0) {
			document.querySelector('.chat-conversation > div:nth-child(1) > .text').textContent = conversation[counter/2][0];
			document.querySelector('.chat-conversation > div:nth-child(2) > .text').textContent = conversation[counter/2][1];
		}
		
		el.classList.remove("do-the-slide");
		el2.classList.remove("do-the-slide2");
		el.offsetWidth = el.offsetWidth;
		el2.offsetWidth = el2.offsetWidth;

		if(direction === "toRight") {
			direction = "toLeft";
			el.style.animationDirection = "reverse";
			el2.style.animationDirection = "reverse";
			el2.style.animationDelay = "inherit";
		} else {
			direction = "toRight";
			el.style.animationDirection = "";
			el2.style.animationDirection = "";
			el2.style.animationDelay = "1s";
		}

		el.classList.add("do-the-slide");	
		el2.classList.add("do-the-slide2");	
		
		if (counter === 5) {
			counter = 0; 
		} else {
			counter++; 
		}	
    }

	function timeout() {
		setTimeout(function () {
			chatConversationSimulation();
			timeout();
		}, time);
		time = time === 5000 ? 1000 : 5000;
	}

    if (window.location.pathname == '/callcenter-bot')
		timeout();
})();

function arrayUnique(array) {
    var a = array.concat();
    for(var i=0; i<a.length; ++i) {
        for(var j=i+1; j<a.length; ++j) {
            if(a[i] === a[j])
                a.splice(j--, 1);
        }
    }

    return a;
}

function merge_array(array1, array2, unique) {  
	if (!unique) {
		return array1.concat(array2);
	}
	return arrayUnique(array1.concat(array2));
}

eventListener('click', '.customCheckbox', e => {
	let checkbox = e.target.closest('.customCheckbox');
	let check = checkbox.querySelector('input[type="checkbox"]');

	if (check.checked) {
		check.checked = false;
		checkbox.classList.remove('checked');
	} else {
		check.checked = true;
		checkbox.classList.add('checked');
	}
});

function loadTracking(){
	var gtm = '';
	
	if ((location.hostname.includes('localhost')) ||
		(location.hostname.includes('beta.www.'))) {
		gtm = 'GTM-MZN2XV4';
	} else {
		gtm = 'GTM-N5K7C35';
	}
	
	// Google Tag Manager
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer',gtm);

	// MouseFlow
	if (!location.hostname.includes('localhost')) {
		var mouseflowCrossDomainSupport = false;
		window._mfq = window._mfq || [];
		(function() {
			var mf = document.createElement("script");
			mf.type = "text/javascript"; mf.defer = true;
			mf.src = "//cdn.mouseflow.com/projects/eed807e3-6457-40c0-91c8-42624967f98b.js";
			document.getElementsByTagName("head")[0].appendChild(mf);
		})();
		// MouseFlow Banderole Tag
		document.addEventListener('DOMContentLoaded', (e) => {
			let banderoleCta = document.querySelector('#banderole-cta');
			if (banderoleCta) {
				banderoleCta.addEventListener('click', (e) => {
					window._mfq.push(['tag', 'Banderole Clicked']);
				});
			}
		});
		// Mouseflow Beta Tag
		if (location.hostname.includes('beta.www.'))
			window._mfq.push(['tag', 'beta']);
	}
	
	// Facebook Tracking Pixel
	(function() {
	var _fbq = window._fbq || (window._fbq = []);
	if (!_fbq.loaded) {
		var fbds = document.createElement('script');
		fbds.async = true;
		fbds.src = '//connect.facebook.net/en_US/fbds.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(fbds, s);
		_fbq.loaded = true;
	}
	_fbq.push(['addPixelId', '327131857475263']);
	})();
	window._fbq = window._fbq || [];
	//window._fbq.push(['addPixelId', '327131857475263']);
	window._fbq.push(['track', 'PixelInitialized', {}]);
}

// Observer to track if elements become visible
function respondToVisibility(element, callback) {
	var options = {
		root: document.documentElement
	};
	
	var observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			callback(entry.intersectionRatio > 0);
		});
	}, options);
	
	observer.observe(element);
}