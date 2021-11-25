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
                callback(e);
            }
        }
    }, false);
}

/**
 * Native scrollTo with callback
 * @param offset - offset to scroll to
 * @param callback - callback function
 */
 function scrollTo(offset, callback) {
    const fixedOffset = offset.toFixed();
    const onScroll = function () {
        if (window.pageYOffset.toFixed() === fixedOffset) {
            window.removeEventListener('scroll', onScroll)
            callback()
        }
    }

    window.addEventListener('scroll', onScroll)
    onScroll()
    window.scrollTo({
        top: offset,
        behavior: 'smooth'
    })
}