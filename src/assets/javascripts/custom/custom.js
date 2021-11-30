// Set CSSClass when trackElement by GTM is allready clicked
eventListener('click', '.trackedElement', e => {
	let link = e.target.closest('.trackedElement');
	link.classList.toggle('clicked');
});

// Setzt einen Cookie
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Holt sich einen Cookie
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie(cname) {
  var cookie = getCookie(cname);
  if (cookie != "") {
	return true;
  } else {
    return false;
  }
}

function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        if(name == 'PHPSESSID' || name == ' cookiebanner-accepted' || name == 'cookiebanner-accepted') {
        	continue;
        } else {
	        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
    }
}

/* simple encode function (bitweise) */
function encode(str) {
	var encoded = "";
	for (i=0; i<str.length;i++) {
		var a = str.charCodeAt(i);
		var b = a ^ 6;
		encoded = encoded+String.fromCharCode(b);
	}
	return encoded;
}

/* simple decode function (bitweise) */
function decode(str) {
	var decoded = "";
	for (i=0; i<str.length;i++) {
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
		let spinner = document.querySelector('.form-1 .selection .spinner')
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
	
	var conversation = [ ["Ich möchte meinen Lieferstatus wissen.", "Ihr Pakt wird morgen geliefert​."], ["Ich möchte einen Termin buchen​.", "Der nächste freie Termin wäre morgen um 11:00 Uhr."], ["Ich möchte die Ware zurücksenden.", "Den Link zum Rücksendeticket haben wir Ihnen soeben per SMS zugeschickt​."] ];
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
 
    if (window.location.pathname == '/callcenter-bot') {
	    function timeout() {
	        setTimeout(function () {
	            chatConversationSimulation();
	            timeout();
	        }, time);       
	        time === 5000? time = 1000 : time = 5000;
	    };
	    timeout();
    }
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


/* Sidebar menue */
eventListener('click', '.sidebar-grid .menu a', e => {
	e.preventDefault();
	e.stopPropagation();
	let link = e.target.closest('a');
	let tab = link.getAttribute('data-link');
	let listItems = document.querySelectorAll('.sidebar-grid .menu li');
	listItems.forEach(listItem => {
		listItem.classList.remove('active');
	});
	link.closest('li').classList.add('active');
	document.querySelectorAll('.sidebar-grid .elements > div').forEach(div => fadeOut(div, 300, () => {
		fadeIn(document.querySelector('.sidebar-grid .elements > div:nth-child(' + tab + ')'), 300);
	}));
});

/* Sidebar menue */
eventListener('click', '.modal .sideMenu li', e => {
	e.preventDefault();
	e.stopPropagation();
	let listItem = e.target.closest('li');
	let tab = listItem.getAttribute('data-link');

	if (listItem.classList.contains('linkTo')) {
		e.preventDefault();
		let linkTo = listItem.querySelector('a').getAttribute('href');
		if (window.localStorage) {
			wlist = JSON.parse(window.localStorage.getItem('wishlist'));
			wlist.forEach(val => {
				linkTo += '%20-%20' + val.replace("&","und") + '%0D%0A';
				console.log(linkTo);
			});
		} else {
			linkTo += 'Keine Wunschthemen gefunden.%0D%0A';
		}
		listItem.querySelector('a').setAttribute('href', linkTo);
		window.location.href = linkTo;
		console.log('wlist:' + wlist)
	} else {
		e.preventDefault();
		e.stopPropagation();
	}
	Array.from(listItem.parentNode.children).forEach(child => child.classList.remove('active'));
	listItem.classList.add('active');
	let modalBoxes = document.querySelectorAll('.modalBox');
	modalBoxes.forEach(modalBox => modalBox.style.display = 'none');
	fadeIn(document.querySelector('.modalBox.'+tab), 300);
});

/* Calculation Modal */
eventListener('click', '.css button.p2', e => {
	e.preventDefault();
	toggleDisplay(document.querySelector('.css .page1'));
	document.querySelector('.css a.p1').setAttribute('data-target', 'css');
	toggleDisplay(document.querySelector('.css .page2'));
});
eventListener('click', '.voip button.p2', e => {
	e.preventDefault();
	toggleDisplay(document.querySelector('.voip .page1'));
	document.querySelector('.voip a.p1').setAttribute('data-target', 'voip');
	toggleDisplay(document.querySelector('.voip .page2'));
});
eventListener('click', '.css a.p1', e => {
	e.preventDefault();
	toggleDisplay(document.querySelector('.css .page1'));
	toggleDisplay(document.querySelector('.css .page2'));
});
eventListener('click', '.voip a.p1', e => {
	e.preventDefault();
	toggleDisplay(document.querySelector('.voip .page1'));
	toggleDisplay(document.querySelector('.voip .page2'));
});

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

eventListener('click', '.customRadiobox', e => {
	let radiobox = e.target.closest('.customRadiobox');
	let check = radiobox.querySelector('input[type="radio"]');
	let allRadioboxes = radiobox.closest('.checkboxen').querySelectorAll('.customRadiobox');
	let allRadios = radiobox.closest('.checkboxen').querySelectorAll('.customRadiobox input');
	allRadioboxes.forEach(radio => radio.classList.remove('checked'));
	allRadios.forEach(radio => radio.checked = false);
	radiobox.classList.add('checked');
	check.checked = true;

	let radioValue1 = radiobox.querySelector('input[name="participation"]:checked');
	if (radioValue1 && radioValue1.value === 'nein')
		document.querySelector('input.participant_name').disabled = true;
	if (radioValue1 && radioValue1.value === 'ja')
		document.querySelector('input.participant_name').disabled = false;
	let radioValue2 = radiobox.querySelector('input[name="participation_partner"]:checked');
	if (radioValue2 && radioValue2.value === 'nein')
		document.querySelector('input.partner_name').disabled = true;
	if (radioValue2 && radioValue2.value === 'ja')
		document.querySelector('input.partner_name').disabled = false;
});

eventListener('click', '.optionField', e => {
	let optionField = e.target.closest('.optionField');
	let label = optionField.querySelector('label');
	let check = optionField.querySelector('input');

	if (check.checked) {
		check.checked = false;
		label.classList.remove('checked');
	} else {
		check.checked = true;
		label.classList.add('checked');
	}
});

if (checkCookie('wishlist')) {
	if (window.localStorage) {
		var wlist = [];
		var listLength = 0;
		
		wlist = JSON.parse(window.localStorage.getItem('wishlist'));
		//console.log(wlist);
		if (wlist != null) {
			listLength = wlist.length; 
			if (listLength > 0) {
				let note2 = document.querySelector('.modal.wishlist .wish-list');
				
				/*check if buttons to activate*/
				if (document.contains(document.querySelectorAll('.elements .button-bottom')[0])) {
					console.log('yes is contains it');
					wlist.forEach((val, i) => {
						let note = document.querySelector('.elements .button-bottom > [data-info^="' + val + '"]');
						note.classList.add("added");
						note.children.forEach(child => {
							child.innerHTML = note.getAttribute('data-add');
						});
						note2.innerHTML += '<li>'+val+'<span class="sl sl-close sl-before relative"></span></li>';
					});
				} else {
					wlist.forEach((val, i) => {
						note2.innerHTML += '<li>'+val+'<span class="sl sl-close sl-before relative"></span></li>';
					});
				}
				
				/*display wishlist button and number of produkts*/
				document.querySelector('#wishlist .numberOfElements').innerHTML = listLength;
				slideDown(document.querySelector('#wishlist'), 300);
			}
		}
	}
}

eventListener('click', '.menuheader', (e) => {
	let link = e.target.closest('.menuheader');
	link.classList.toggle('open');
	let siblings = getAllSiblings(link);
	siblings.forEach(sibling => {
		if (sibling == link)
			return;
		let display = window.getComputedStyle(sibling).getPropertyValue('display');
		if (display === 'none') {
			sibling.style.display = 'block';
		} else {
			sibling.style.display = 'none';
		}
	});
});


function loadLazyTracking(reload){
	  var gtm = "";
	  var ua = "";
	  
	  if (location.hostname === 'localhost:3000') {
			gtm = "GTM-MZN2XV4";
			ua = "UA-20501538-3";
		} else {
			gtm = "GTM-N5K7C35";
			ua = "UA-20501538-2";
	  }
	  
	  
	  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		  })(window,document,'script','dataLayer',gtm);
	  console.log(reload);
	  if(reload) {
		  window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
		  ga('create', ua, 'auto');
		  ga('set', 'anonymizeIp', true);
		  ga('send', 'pageview');
		  var gascript = document.createElement("script");
		  gascript.async = true;
		  gascript.src = "https://www.google-analytics.com/analytics.js";
		  document.getElementsByTagName("head")[0].appendChild(gascript, document.getElementsByTagName("head")[0]);
	  }
	  
}