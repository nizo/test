/*
 * Add Eventlistener on Element via Document that bubbles down
 * Example: eventListener('click', '.selector', function(e) { ... });
 * Replaces jQuery: $(document).on('click', '.selector', function(e) { ... });
 */
function eventListener(event, element, callback) {
    document.addEventListener(event, function(e) {
        // loop parent nodes from the target to the delegation node
        for (var target = e.target; target && target != this; target = target.parentNode) {
            if (target.matches(element)) {
                // handler.call(target, e);
                // break;
                callback(e, target);
            }
        }
    }, false);
}

/**
 * Native scrollTo with callback
 * @param offset - offset to scroll to
 * @param callback - callback function
 */
function scrollToOffset(offset, callback = null) {
    const fixedOffset = parseFloat(offset).toFixed();
    const onScroll = function () {
        if (window.scrollY.toFixed() === fixedOffset) {
            window.removeEventListener('scroll', onScroll);
            if (callback)
                callback();
        }
    };

    window.addEventListener('scroll', onScroll);
    onScroll();
    window.scrollTo({
        top: offset,
        behavior: 'smooth'
    });
}

/*
 * Slide Animations
 */
function slideDown(el, dur = 300) {
    console.log('Slide Down');
    el.style.display = 'block';
    let computed = window.getComputedStyle(el);
    let finalHeight = el.offsetHeight;
    el.style.height = '0px';
    el.style.boxSizing = 'border-box';
    el.style.overflow = 'hidden';
    el.style.paddingTop = '0px';
    el.style.paddingBottom = '0px';
    el.style.marginTop = '0px';
    el.style.marginBottom = '0px';
    el.style.transitionProperty = 'height, padding, margin, paddingBottom, paddingTop, marginTop, marginBottom';
    el.style.transitionTimingFunction = 'linear';
    el.style.transitionDuration = dur + 'ms';
    setTimeout(() => {
        el.style.height = finalHeight + 'px';
        el.style.paddingTop = computed.paddingTop;
        el.style.paddingBottom = computed.paddingBottom;
        el.style.marginTop = computed.marginTop;
        el.style.marginBottom = computed.marginBottom;
    }, 1);
    setTimeout(() => {
        el.style.overflow = '';
        el.style.boxSizing = '';
        el.style.transitionProperty = '';
        el.style.transitionDuration = '';
        el.style.transitionTimingFunction = '';
        el.style.height = '';
        el.style.paddingTop = '';
        el.style.paddingBottom = '';
        el.style.marginTop = '';
        el.style.marginBottom = '';
    }, dur);
}

function slideUp(el, dur = 300) {
    console.log('Slide Up');
    let computed = window.getComputedStyle(el);
    el.style.overflow = 'hidden';
    el.style.boxSizing = 'border-box';
    el.style.transitionProperty = 'height, padding, margin, paddingTop, paddingBottom, marginTop, marginBottom';
    el.style.transitionTimingFunction = 'linear';
    el.style.paddingTop = computed.paddingTop;
    el.style.paddingBottom = computed.paddingBottom;
    el.style.marginTop = computed.marginTop;
    el.style.marginBottom = computed.marginBottom;
    el.style.height = el.offsetHeight + 'px';
    el.style.transitionDuration = dur + 'ms';
    setTimeout(() => {
        el.style.height = '0px';
        el.style.paddingTop = '0px';
        el.style.paddingBottom = '0px';
        el.style.marginTop = '0px';
        el.style.marginBottom = '0px';
    }, 1);
    setTimeout(() => {
        el.style.display = 'none';
        el.style.height = '';
        el.style.overflow = '';
        el.style.boxSizing = '';
        el.style.transitionProperty = '';
        el.style.transitionDuration = '';
        el.style.transitionTimingFunction = '';
        el.style.paddingTop = '';
        el.style.paddingBottom = '';
        el.style.marginTop = '';
        el.style.marginBottom = '';
    }, dur);
}

function slideToggle(el, dur = 300) {
    if (window.getComputedStyle(el).display == 'none') {
        slideDown(el, dur);
    } else {
        slideUp(el, dur);
    }
}

/*
 * Fading Animations
 */
function fadeIn(el, time, display = 'block') {
    el.style.opacity = 0;
    el.style.display = display;

    var last = +new Date();
    var tick = function() {
        el.style.opacity = +el.style.opacity + (new Date() - last) / time;
        last = +new Date();
    
        if (+el.style.opacity < 1) {
            if (window.requestAnimationFrame) {
                window.requestAnimationFrame(tick);
            } else {
                setTimeout(tick, 16);
            }
        } else {
            el.style.opacity = 1;
        }
    };

    tick();
}
function fadeOut(el, time, callback) {
    el.style.opacity = 1;

    var last = +new Date();
    var tick = function() {
        el.style.opacity = +el.style.opacity - (new Date() - last) / time;
        last = +new Date();
    
        if (+el.style.opacity > 0) {
            if (window.requestAnimationFrame) {
                window.requestAnimationFrame(tick);
            } else {
                setTimeout(tick, 16);
            }
        } else {
            el.style.display = 'none';
            el.style.opacity = 1;

            if (callback)
                callback();
        }
    };

    tick();
}

/*
 * Observe visibility of element
 */
function respondToVisibility(element, callback) {
	var options = {
		root: document.documentElement,
	};
	
	var observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			callback(entry.intersectionRatio > 0);
		});
	}, options);
	
	observer.observe(element);
}

/*
 * Find all siblings
 */
function getAllSiblings(elem, filter) {
    var sibs = [];
    elem = elem.parentNode.firstChild;
    do {
        if (elem.nodeType === 3) continue; // text node
        if (!filter || filter(elem)) sibs.push(elem);
    } while (elem == elem.nextSibling);
    return sibs;
}

/*
 * Display Toggle for element
 */
function toggleDisplay(el, mode = 'block') {
    let display = window.getComputedStyle(el).getPropertyValue('display');
    if (display == 'none') {
        el.style.display = mode;
    } else {
        el.style.display = 'none';
    }
}

/*
 * Find next sibling
 */
function next(elem, selector) {
	// Get the next sibling element
	var sibling = elem.nextElementSibling;

	// If there's no selector, return the first sibling
	if (!selector) return sibling;

	// If the sibling matches our selector, use it
	// If not, jump to the next sibling and continue the loop
	while (sibling) {
		if (sibling.matches(selector)) return sibling;
		sibling = sibling.nextElementSibling;
	}
}