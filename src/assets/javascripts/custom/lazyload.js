/****** LazyLoad with EventListeners *******/
document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazyBackground"));
  var lazyPictures = [].slice.call(document.querySelectorAll(".lazyPicture > source"));
  var lazyVideoPosters = [].slice.call(document.querySelectorAll(".lazyPoster"));
  var active = false;

  const lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          lazyImage.style.visibility = "hidden";
          
          if ((lazyImage.getBoundingClientRect().top <= window.innerHeight + 300 && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.srcset = lazyImage.dataset.srcset;
            lazyImage.classList.remove("lazy");
            lazyImage.style.visibility = "visible";

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyVideoPosters.length === 0 && lazyPictures.length === 0 && lazyImages.length === 0) {
              document.removeEventListener("scroll", lazyLoad);
              window.removeEventListener("resize", lazyLoad);
              window.removeEventListener("orientationchange", lazyLoad);
            }
          }
        });
          
        lazyBackgrounds.forEach(function(lazyBackground) {
        	if ((lazyBackground.getBoundingClientRect().top <= window.innerHeight && lazyBackground.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyBackground).display !== "none") {
            	lazyBackground.classList.add("visible");
            }      
        });
        
        lazyPictures.forEach(function(lazyPicture) {
        	lazyPicture.style.visibility = "hidden";
        	
        	if ((lazyPicture.getBoundingClientRect().top <= window.innerHeight + 300 && lazyPicture.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyPicture).display !== "none") {
        		lazyPicture.srcset = lazyPicture.dataset.srcset;
        		lazyPicture.parentElement.classList.remove("lazy");
        		lazyPicture.style.visibility = "visible";
        		
        		lazyPictures = lazyPictures.filter(function(image) {
                    return image !== lazyPicture;
                  });

                  if (lazyVideoPosters.length === 0 && lazyPictures.length === 0 && lazyImages.length === 0) {
                    document.removeEventListener("scroll", lazyLoad);
                    window.removeEventListener("resize", lazyLoad);
                    window.removeEventListener("orientationchange", lazyLoad);
                  }
            }     
        });
        
        lazyVideoPosters.forEach(function(lazyPoster) {
        	lazyPoster.style.visibility = "hidden";
        	
        	if ((lazyPoster.getBoundingClientRect().top <= window.innerHeight + 300 && lazyPoster.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyPoster).display !== "none") {
              lazyPoster.poster = lazyPoster.dataset.poster;
              lazyPoster.classList.remove("lazyPoster");
              lazyPoster.style.visibility = "visible";

              lazyVideoPosters = lazyVideoPosters.filter(function(image) {
                return image !== lazyPoster;
              });

              if (lazyVideoPosters.length === 0 && lazyPictures.length === 0 && lazyImages.length === 0) {
                document.removeEventListener("scroll", lazyLoad);
                window.removeEventListener("resize", lazyLoad);
                window.removeEventListener("orientationchange", lazyLoad);
              }
            }
          });
        
        
        active = false;
      }, 200);
    }
  };
	
  document.addEventListener("scroll", lazyLoad);
  document.addEventListener("click", lazyLoad);
  window.addEventListener("resize", lazyLoad);
  window.addEventListener("orientationchange", lazyLoad);
  if (window.addEventListener)
	  window.addEventListener("load", lazyLoad, false);
  else
	  window.onload = lazyLoad;
});