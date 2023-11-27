function uiFxInit() {

            let hoverpoints = helpers.sortNodeListByPositionAttribute('.hoverpoint');
            let hoverpointsPing = hoverpoints.map(i => i.querySelector('.ping'));
            hoverpoints.forEach((el) => {

                let link = el.dataset.link;
                let outerDot = el.querySelector('.hoverpoint-dot');
                let innerDot = el.querySelector('.hoverpoint-innerdot');
                let hoverContent = el.querySelector('.hoverpoint-content');
                let movement_factor_content = 0.5;
                let movement_factor_innerdot = 0.2;
                const centerContentVertically = () => {

                  gsap.set(hoverContent, { top: outerDot.scrollHeight / 2 - hoverContent.scrollHeight / 2, });
                }

                window.addEventListener('resize', centerContentVertically);
                centerContentVertically();

                // el.addEventListener('click', () => window.location.href = link);
                el.addEventListener('click', () => {
                  if (!el.classList.contains('no-pointer-events')) {
                      window.location.href = link;
                  }
              });
          
               
          
                outerDot.addEventListener('mousemove', (e) => {
          

                  gsap.to([innerDot,hoverContent], {
                    duration: 2,
                    x: ((e.offsetX) - (outerDot.offsetWidth / 2)) * movement_factor_innerdot,
                    y: ((e.offsetY) - (outerDot.offsetHeight / 2)) * movement_factor_innerdot,
                    transformOrigin: 'center center',
                    // ease: "power4.inOut",
                  });
          
                });
          
                innerDot.addEventListener('mouseenter', (e) => {
          
                //   innerDot.css('pointer-events', 'none').addClass('hoverpoint-innerdot--active');
                  innerDot.style.pointerEvents = 'none';
                  innerDot.classList.add('hoverpoint-innerdot--active');

                

                  let textSpan = el.querySelector('.hoverpoint-content span.text');
                  
                  if(textSpan) {

                    gsap.set(textSpan, {
                      overwrite: true,
                      y: -10,
                      opacity: 0,
                      ease: "power2.out",
                    });

                    gsap.to(textSpan,{
                      overwrite: true,
                      delay: 0.075,
                      duration: 0.3,
                      y:0,
                      opacity: 1,
                      height: textSpan.scrollHeight,
                    });
                  }

                  gsap.to(innerDot, {
                    overwrite: true,
                    duration: 0.75,
                    scale: 1.4,
                    transformOrigin: 'center center', ease: "power2.out",
                  });

          
                });
          
                outerDot.addEventListener('mouseleave', (e) => {

                  //return false;
                //   innerDot.css('pointer-events', 'all').removeClass('hoverpoint-innerdot--active');
                  innerDot.style.pointerEvents = 'all';
                  innerDot.classList.remove('hoverpoint-innerdot--active');
                  
                  gsap.to(el.querySelector('.hoverpoint-content'), {
                    duration: 0.5,
                    // scale: 0.8,
                    // autoAlpha: 0
                  });
          
                  gsap.to([innerDot,hoverContent], {
                    overwrite: true,
                    duration: 1,
                    scale: 1,
                    overwrite: true,
                    x: 0,
                    y: 0,
                    transformOrigin: 'center center',
                    ease: "expo.out",
                  });


                  let textSpan = el.querySelector('.hoverpoint-content span.text');

                  if(textSpan) {
                    gsap.to(textSpan,{
                      duration: 0.75,
                      height: 0,
                      ease: "expo.out",
                    });
                  }

          
                });
          
              });


            let pingHoverpoints2 = [];

            hoverpoints.forEach(function (item, index) {

            pingHoverpoints2[index] = new gsap.timeline({
                delay: 0.2 * index,
            });

            pingHoverpoints2[index]

                .fromTo(item.querySelector('.ping'),
                {
                    autoAlpha: 1,
                    scale: 0,
                },
                {
                    duration: 2.5,
                    autoAlpha: 0,
                    scale: 2.25,
                    ease: "expo.out",
                    repeat: -1,
                    repeatDelay: 4,
                    delay:3,
                })
            ;

            });





            try {

              const staticHoverpoints = document.querySelector('[data-element="static-hoverpoints"]');

              if(staticHoverpoints) {

                setTimeout(() => {
                  
                  const absoluteHero = document.querySelector('[data-element="absolute-hero"]');
                  staticHoverpoints.style.height = `${absoluteHero.clientHeight}px`


                    gsap.fromTo(hoverpoints, {
                      scale: 2,
                    }, {
                      duration: 1,
                      x: 0,
                      y: 0,
                      autoAlpha: 1,
                      scale: 1,
                      stagger: 0.2,
                      ease: "expo.out"
                    });


                },250)
              } else {



                gsap.fromTo(hoverpoints, {
                  scale: 2,
                }, {
                  duration: 1,
                  x: 0,
                  y: 0,
                  autoAlpha: 1,
                  scale: 1,
                  stagger: 0.2,
                  ease: "expo.out"
                });


              }

            } catch (error) {
              console.log('could not set height on static-hoverpoints',error);
            }

}
// If you need to call uiFxInit() from elsewhere, you can attach it to the window object
window.uiFxInit = uiFxInit;

// Optionally, you can immediately invoke uiFxInit
//uiFxInit();