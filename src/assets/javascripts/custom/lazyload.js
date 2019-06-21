/****** LazyLoad with EventListeners *******/
document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazyBackground"));
  var active = false;

  const lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          lazyImage.style.visibility = "hidden";
          if ((lazyImage.getBoundingClientRect().top <= window.innerHeight + 500 && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.srcset = lazyImage.dataset.srcset;
            lazyImage.classList.remove("lazy");
            lazyImage.style.visibility = "visible";

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener("scroll", lazyLoad);
              window.removeEventListener("resize", lazyLoad);
              window.removeEventListener("orientationchange", lazyLoad);
            }
          }
        });
          
        lazyBackgrounds.forEach(function(lazyBackground) {
        	if ((lazyBackground.getBoundingClientRect().top <= window.innerHeight + 500 && lazyBackground.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyBackground).display !== "none") {
            	lazyBackground.classList.add("visible");
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
  window.addEventListener("load", lazyLoad);
});