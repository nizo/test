if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = Array.prototype.forEach;
}

let app = {
    init: function() {
        this.bind_events();
        this.init_slider();
        this.loop_videos();
    },

    bind_events: function() {
        let _this = this;

        eventListener('click', '.form .submit', function(e) {
            e.preventDefault();
            let form = e.target.closest('.js-form');
            if (form.classList.contains('callback')) {
                sendCallback(form);
            } else {
                sendForm(form);
            }
        });

        eventListener('click', '.container .title', e => {
            e.preventDefault();
            e.target.parentNode.classList.toggle('open');
        });

        eventListener('click', '.accordion', e => {
            e.preventDefault();
            let accordion = e.target.closest('.accordion');
            let accordionContent = accordion.querySelector('.content');

            if (accordion.classList.contains('open')) {
                if (accordion.classList.contains('accordion-closeable')) {
                    accordion.classList.remove('open');
                    accordionContent.style.display = '';
                }
            } else {
                let accordions = document.querySelectorAll('.accordion');
                accordions.forEach((function(_this) {
                    return function(a) {
                        var aContent;
                        a.classList.remove('open');
                        aContent = a.querySelector('.content');
                        aContent.style.display = '';
                    };
                })(this));
                accordion.classList.add('open');
            }
        });

        eventListener('click', '.footer-menu li span', e => {
            if (e.target.closest('li').classList.contains('open')) {
                e.target.closest('li').classList.remove('open');
            } else {
                let footerItems = document.querySelectorAll('.footer-menu li');
                footerItems.forEach((function(_this) {
                return function(item) {
                    item.classList.remove('open');
                };
                })(this));
                e.target.closest('li').classList.add('open');
            }
        });

        eventListener('click', '.mobile-nav .pages-menu .submenu', e => {
            e.preventDefault();
            e.stopPropagation();
            let submenu = e.target.closest('.submenu');

            if (submenu.classList.contains('submenu-open')) {
                submenu.classList.remove('submenu-open');
                submenu.nextElementSibling.style.display = 'none';
            } else {
                let submenusBoxes = document.querySelectorAll('.pages-submenu');
                submenusBoxes.forEach((function(_this) {
                    return function(submenuBox) {
                        submenuBox.style.display = 'none';
                    };
                })(this));
                let submenus = document.querySelectorAll('.pages-menu .submenu-open');
                submenus.forEach((function(_this) {
                    return function(sub) {
                        sub.classList.remove('submenu-open');
                    };
                })(this));
                submenu.classList.add('submenu-open');
                submenu.nextElementSibling.style.display = 'block';
            }
        });

        eventListener('click', '.btn-mobile-nav', e => {
            e.preventDefault();
            document.querySelector('.mobile-nav').classList.toggle('open');
        });

        eventListener('click', '.showDiv', e => {
            e.preventDefault();
            let selection = e.target.parentNode.querySelector('.selection');
            selection.classList.toggle('active');

            if (selection.classList.contains('active')) {
                selection.style.display = 'block';
            } else {
                selection.style.display = 'none';
            }
        });

        eventListener('click', '.customCheckbox', e => {
            var boxes;
            boxes = document.querySelectorAll('.showField');
            boxes.forEach((function(_this) {
                return function(box) {
                    box.style.display = 'block';
                };
            })(this));
        });

        let toggleBoxes = document.querySelectorAll('.toggle-box');
        eventListener('click', '.toggle-box label', e => {
            let currentBox = e.target.closest('.toggle-box');
            toggleBoxes.forEach(box => {
                if (box !== currentBox) {
                    slideUp(box.querySelector('.toggle-box__content'), 300);
                    box.querySelector('input').checked = false;
                }
            });

            slideToggle(currentBox.querySelector('.toggle-box__content'), 300);
        });

        toggleBoxes.forEach(box => {
            if (box.querySelector('input').checked) {
                box.querySelector('.toggle-box__content').style.display = 'block';
            }
        });
    },

    loop_videos: function() {
        let videos = Array.from(document.querySelectorAll('video[data-loop]'));
        videos.forEach(video => {
            let loop_time = parseFloat(video.getAttribute('data-loop'));
            video.addEventListener('ended', e => {
                this.currentTime = loop_time;
                this.play();
            });
        });
    },

    init_slider: function() {
        let sliders = document.querySelectorAll('.slider');
        sliders.forEach(function(s) {
            slider.init(s);
        });
    }
};

let slider = {
    slider: "",
    slides_box: "",
    slides: "",
    slider_height: 0,
    slide_width: 0,
    current_slide: 0,

    init: function(elem) {
        this.slider = elem;
        this.slides_box = this.slider.querySelector('.slides');
        this.slides = this.slider.querySelectorAll('.slide');
        this.get_slider_height();
        this.init_slider_nav();
        this.slide_width = this.slides[0].offsetWidth;
        this.bind_events();
        this.slides[0].classList.add('active');
        this.slides[1].classList.add('active');
        this.slides[2].classList.add('active');
    },

    bind_events: function() {
        let _this = this;
        window.onresize = function() {
            _this.slides.forEach(function(slide) {
                slide.style.width = _this.slider.offsetWidth / 3 + 'px';
            });
            _this.get_slider_height();
        };
    },

    get_slider_height: function() {
        let extra_height = 33 + 40 + 100;
        let _this = this;
        this.slides.forEach(val => {
            if (val.offsetHeight > _this.slider_height) {
                _this.slider_height = val.offsetHeight;
            }
        });
        this.slider.style.height = this.slider_height + extra_height + 'px';
        let contents = this.slider.querySelectorAll('.slide-content');
        contents.forEach(c => {
            c.style.height = _this.slider_height + 'px';
        });
    },

    init_slider_nav: function() {
        let i = 0;
        let results = [];

        while (i < this.slides.length - 2) {
            let button = document.createElement('div');
            button.classList.add('btn-slider-nav');
            button.setAttribute('data-slide', i);
            let _this = this;

            eventListener('click', '.btn-slider-nav', e => {
                let btn = e.target.closest('.btn-slider-nav');
                let slider = e.target.closest('.slider');
                let current_slide = parseInt(btn.getAttribute('data-slide'));
                let slide_width = slider.offsetWidth / 3;
                slider.querySelector('.slides').style.left = current_slide * slide_width * -1 + 'px';

                let btns = slider.querySelectorAll('.btn-slider-nav');
                btns.forEach(b => {
                    b.classList.remove('active');
                });
                btns[current_slide].classList.add('active');

                let slides = slider.querySelectorAll('.slide');
                slides.forEach(s => {
                    s.classList.remove('active');
                });

                slides[current_slide].classList.add('active');
                slides[current_slide + 1].classList.add('active');
                slides[current_slide + 2].classList.add('active');
            });

            if (i === 0) {
                button.classList.add('active');
            }
            _this.slider.querySelector('.slider-navigation').appendChild(button);
            results.push(i++);
        }

        return results;
    }
};

document.addEventListener('DOMContentLoaded', function() {
    app.init();

    isInViewport = function(element) {
        let rect = element.getBoundingClientRect();
        return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
    };

    let compares = document.querySelectorAll('.compare');
    compares.forEach(compare => {
        let cSwitch = compare.querySelector('.compare__switch input');
        if (cSwitch.checked) {
            compare.querySelector('.compare__content[data-compare="on"]').classList.add('compare__content--active');
        } else {
            compare.querySelector('.compare__content[data-compare="off"]').classList.add('compare__content--active');
        }

        cSwitch.addEventListener('change', e => {
            compare.querySelector('.compare__content[data-compare="off"]').classList.toggle('compare__content--active');
            compare.querySelector('.compare__content[data-compare="on"]').classList.toggle('compare__content--active');
        }, false);
    });

    let minValue = 25;
    let maxValue = 500;
    if (document.querySelectorAll('.usercalc').length > 0) {
        let usercalcs = document.querySelectorAll('.usercalc');
        usercalcs.forEach(usercalc => {
            let users = usercalc.querySelector('.usercalc__users');
            let price = usercalc.querySelector('.usercalc__price');
            let form = usercalc.querySelector('.usercalc__form');
            let result = usercalc.querySelector('.usercalc__result');
            let submit = usercalc.querySelectorAll('.usercalc__submit');
            let slider = usercalc.querySelector('.usercalc__slider input');
            let total = usercalc.querySelector('.usercalc__total span');
            let callcenterCheckbox = usercalc.querySelector('#callcenter-software');
            let callcenterSection = usercalc.querySelector('.usercalc__callcenter');
            let currentTotal = minValue * 9.90;
            let isCallcenterChecked = false;

            slider.addEventListener('input', (e) => {
                users.value = parseInt(slider.value);
                price.innerHTML = getPricePerUser(parseInt(slider.value));
                currentTotal = getTotalPrice(parseInt(slider.value));
            }, false);

            users.addEventListener('change', e => {
                let val = parseInt(users.value);
                if (val < minValue || val > maxValue) {
                    users.value = minValue;
                    slider.value = minValue;
                    price.innerHTML = getPricePerUser(minValue);
                    currentTotal = getTotalPrice(minValue);
                } else {
                    slider.value = val;
                    price.innerHTML = getPricePerUser(users.value);
                    currentTotal = getTotalPrice(users.value);
                }
            });

            callcenterCheckbox.addEventListener('change', e => {
                isCallcenterChecked = callcenterCheckbox.checked;
            });

            submit.forEach(s => {
                s.addEventListener('click', function(e) {
                    e.preventDefault();
                    form.classList.toggle('usercalc__form--inactive');
                    result.classList.toggle('usercalc__result--active');

                    if (isCallcenterChecked) {
                        callcenterSection.classList.add('usercalc__callcenter--active');
                    } else {
                        callcenterSection.classList.remove('usercalc__callcenter--active');
                    }

                    let tempTotal = Math.round(currentTotal * 100) / 100;
                    total.innerHTML = tempTotal.toString().replace('.', ',') + ' &euro;';
                });
            });
        });
    }

    let getTotalPrice = (count) => {
        let price = 9.90;
        if (count >= 50) {
            price = 8.90;
        }
        if (count >= 250) {
            price = 7.90;
        }
        return price * count;
    };

    let getPricePerUser = (count) => {
        let price = '9,90 &euro;';
        if (count >= 50) {
            price = '8,90 &euro;';
        }
        if (count >= 250) {
            price = '7,90 &euro;';
        }
        return price;
    };

    let fallbackBrowser = 'chrome';
    let currentBrowser = fallbackBrowser;
    let userAgent = navigator.userAgent;
    console.log(document.documentMode);
    if (userAgent.indexOf("Edg") !== -1 || userAgent.indexOf("Edge") !== -1) {
        currentBrowser = 'edge';
    } else if (userAgent.indexOf("Chrome") !== -1) {
        currentBrowser = 'chrome';
    } else if (userAgent.indexOf("Firefox") !== -1) {
        currentBrowser = 'firefox';
    } else {
        currentBrowser = fallbackBrowser;
    }

    if (currentBrowser) {
        let browserButton1 = document.querySelector('.installation__browser[data-browser="' + currentBrowser + '"]');
        let browserButton2 = document.querySelector('.installation__button[data-browser="' + currentBrowser + '"]');
        let browserBadge = document.querySelector('.browsers__browser[data-browser="' + currentBrowser + '"]');
        if (browserButton1 && browserButton2) {
            browserButton1.classList.add('installation__browser--active');
            browserButton2.classList.add('installation__button--active');
        }
        if (browserBadge) {
            browserBadge.classList.add('browsers__browser--active');
        }
    }

    let installationButtons = document.querySelectorAll('.installation__browser');
    installationButtons.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            let browser = btn.getAttribute('data-browser');
            if (currentBrowser !== browser) {
                currentBrowser = browser;
                let currentActive1 = document.querySelector('.installation__browser--active');
                let currentActive2 = document.querySelector('.installation__button--active');
                if (currentActive1 && currentActive2) {
                    currentActive1.classList.remove('installation__browser--active');
                    currentActive2.classList.remove('installation__button--active');
                }
                document.querySelector('.installation__browser[data-browser="' + browser + '"]').classList.add('installation__browser--active');
                document.querySelector('.installation__button[data-browser="' + browser + '"]').classList.add('installation__button--active');
            }
        });
    });

    let scrollers = document.querySelectorAll('.scroller');
    let x = 0;
    scrollers.forEach(scroller => {
        scroller = scrollers[x];
        scroller.style.height = scroller.dataset.height + 'px';
        let scrollerWindowHeight = scroller.dataset.height;
        let scrollerBelt = scroller.querySelector('.scroller-belt');
        let scrollerBeltHeight = scrollerBelt.offsetHeight;
        let animationPaused, currentTop, animationDelay, animationSpeed, animationInterval, scrollerReversed;

        if (scrollerBeltHeight > 0) {
            scrollerReversed = false;
            if (scroller.hasAttribute('data-reversed')) {
                scrollerReversed = true;
            }
            let n = scrollerWindowHeight;
            let d = scrollerBeltHeight;
            let count = 0;
            while (n >= d) {
                n -= d;
                count++;
            }
            count++;
            let originalContent = scrollerBelt.innerHTML;
            let i = 0;
            while (i < count) {
                scrollerBelt.innerHTML += originalContent;
                i++;
            }
            currentTop = 0;
            if (scrollerReversed) {
                currentTop = scrollerBeltHeight;
            }
            animationSpeed = 40;
            animationInterval = null;
            animationPaused = false;
        }

        let scroll = () => {
            let currentTop;
            if (!animationPaused) {
                let animationStep = animationSpeed / 24;
                if (scrollerReversed) {
                    currentTop -= animationStep;
                    if (currentTop <= 0) {
                        currentTop = scrollerBeltHeight;
                    }
                } else {
                    currentTop += animationStep;
                    if (currentTop >= scrollerBeltHeight) {
                        currentTop = 0;
                    }
                }
                scrollerBelt.style.marginTop = '-' + currentTop + 'px';
            }
        };

        scroller.addEventListener('mouseenter', e => {
            animationPaused = true;
        }, false);

        scroller.addEventListener('mouseleave', e => {
            animationPaused = false;
        }, false);

        let handleResize = () => {
            clearInterval(animationInterval);
            if (window.innerWidth <= 800) {
                if (scrollerReversed) {
                    currentTop = scrollerBeltHeight;
                } else {
                    currentTop = 0;
                }
                scrollerBelt.style.marginTop = '-' + currentTop + 'px';
            } else {
                animationInterval = setInterval(scroll, 1000 / 24);
            }
        };

        handleResize();
        window.addEventListener('resize', e => {
            handleResize();
        });

        x++;
    });

    // Load Tracking Code depending on cookie
    let trackingCookie = getCookie('cookiebanner-accepted');
    if (trackingCookie && trackingCookie > 100 || trackingCookie == 1)
        loadLazyTracking();
});
