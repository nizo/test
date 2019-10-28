// Set CSSClass when trackElement by GTM is allready clicked
$('.trackedElement').on('click', function() {
	$(this).addClass('clicked');
})

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


$(document).ready(function(){
	$(".form .showDiv").click(function(){
		//console.log("get numbers");
		$(".form-1 .selection .spinner").fadeIn();
	    $.post("https://connect.callone.io/backend/phonenumbers.php",
	    {
	      type: 0
	    },
	    function(data,status){
    		if (status == 'success') {
    			$(".form-1 .selection .spinner").fadeOut('fast');
	    		var output = "";
	    		//console.log(data.phonenumbers);
	    		//console.log(data.phonenumbers.length);
	    		$(".form-1 .selection").html(function() {
	    			for(var i = 0; i < data.phonenumbers.length; i++) {
	    				output += '<label for="'+ i +'" class="customCheckbox"><input name="checkboxNumbers" type="checkbox" id="'+ i +'" value="'+ data.phonenumbers[i]['number'] +'" />';		
	    				output += data.phonenumbers[i]['number'];
	    				output += '<span class="checkmark"></span></label>';
	    			}
	    			return output;
	    		});
    		} else {
    			$(".form-1 .selection").html(function() {
    				output = '<div class="error">Es ist ein Fehler beim laden der Rufnummern aufgetreten! Bitte versuchen Sie es später noch einmal.</div>';
    				return output;
    			});
    		}
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
			$('.chat-conversation > div:nth-child(1) > .text').text(conversation[counter/2][0]);
			$('.chat-conversation > div:nth-child(2) > .text').text(conversation[counter/2][1]);
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
$('.sidebar-grid .menu a').on('click', function(e) {
	e.preventDefault();
	e.stopPropagation();
	var tab = $(this).attr('data-link');
	$('.sidebar-grid .menu li').removeClass('active');
	$(this).parent().addClass('active');
	$('.sidebar-grid .elements > div').fadeOut();
	$('.sidebar-grid .elements > div:nth-child('+tab+')').fadeIn();
});

/* Sidebar menue */
$('.modal .sideMenu li').on('click', function(e) {
	var tab = $(this).attr('data-link');
	if ($(this).hasClass('linkTo')) {
		var linkTo = $(this).children('a').attr('href');
		if(window.localStorage) {
			jQuery.each( wlist, function( i, val ) {
				linkTo += '%20-%20' + val + '%0D%0A';
			});
		} else {
			linkTo += 'Keine Wunschthemen gefunden.%0D%0A';	
		}
		$(this).children('a').attr('href', linkTo);
		console.log('wlist:' + wlist);
	} else {
		e.preventDefault();
		e.stopPropagation();
	}
	$(this).parent().children().removeClass('active');
	$(this).addClass('active');
	$('.modalBox').hide();
	$('.modalBox.'+tab).fadeIn();
});

/* Calculation Modal */
$('.ccs button.p2').on('click', function(e) {
	e.preventDefault();
	$('.ccs .page1').toggle();
	$('.ccs a.p1').attr('data-target', 'css');
	$('.ccs .page2').toggle();
});
$('.voip button.p2').on('click', function(e) {
	e.preventDefault();
	$('.voip .page1').toggle();
	$('.voip a.p1').attr('data-target', 'voip');
	$('.voip .page2').toggle();
});

$('.ccs a.p1').on('click', function(e) {
	e.preventDefault();
	$('.ccs .page1').toggle();	
	$('.ccs .page2').toggle();
});

$('.voip a.p1').on('click', function(e) {
	e.preventDefault();
	$('.voip .page1').toggle();	
	$('.voip .page2').toggle();
});

$('.customCheckbox').on('click', function() {
	var check = $(this).children('input[type="checkbox"]');console.log(check);
	if (check.is(':checked')) {
		check.removeAttr('checked');
		check.parent().removeClass('checked');
		console.log('remove attr');
	} else {
		check.attr('checked', 'checked');
		check.parent().addClass('checked');
		console.log('add attr')
	}
});


if (checkCookie('wishlist')) {
	if (window.localStorage) {
		var wlist = [];
		var listLength = 0;
		
		wlist = JSON.parse(window.localStorage.getItem('wishlist'));
		console.log(wlist);
		if (wlist != null) {
			listLength = wlist.length; 
			if (listLength > 0) {
				var note2 = $( ".modal.wishlist .wish-list" );
				
				/*check if buttons to activate*/
				if (document.contains($('.elements .button-bottom')[0])) {
					console.log('yes is contains it');
					jQuery.each( wlist, function( i, val ) {
						var note = $( ".elements .button-bottom > [data-info^='" + val + "']" );
						note.addClass("added");
						note.children().html( note.attr('data-add') );
						note2.append('<li>'+val+'<span class="sl sl-close sl-before relative"></span></li>');
					});
				} else {
					jQuery.each( wlist, function( i, val ) {
						note2.append('<li>'+val+'<span class="sl sl-close sl-before relative"></span></li>');
					});
				}
				
				/*display wishlist button and number of produkts*/
				$('#wishlist .numberOfElements').html(listLength);
				$('#wishlist').slideDown();
				
				/**/
				
			}
		}
	}
	
	
}
