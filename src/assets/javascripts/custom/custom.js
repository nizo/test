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
