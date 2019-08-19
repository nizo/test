/**
 * 
 * @returns {undefined}
 */
(function () {

    'use strict';

    /**
     * 
     * @param   {Object}    opts    JSON parameter
     * @returns {Object}    this
     */
    function MenuReader(opts) {
        var self = this,
            wrapper;

        this.el = {
            wrapper: null
        };

        wrapper = self.el.wrapper;

        if (opts && opts.ident && !wrapper) {
            wrapper = self.getElement(opts.ident);
        }
        if (wrapper && wrapper.nodeType === 1) {
            wrapper.onclick = function (evt) {
                self.delegateToSupporter.call(self, evt);
            };
        }

        return this;
    }

    /**
     * Event handler onclick on a el.wrapper. Read target element and check as native event delegation
     * 
     * @param   {Object}    evt native event Object
     * @returns {Boolean}   true
     */
    MenuReader.prototype.delegateToSupporter = function (evt) {
        var supporter;

        evt = evt || window.event;
        supporter = evt.target || evt.srcElement;  // evt.target is supported by IE9+

        this.goToUrl(this.getLinkUrl(supporter), supporter.target);

        return true;
    };
    /**
     * Read al link form a given DOM element from its data-href attribute
     * 
     * @param   {Element}   $elem   DOM element, it must be a nodeType 1 element
     * @returns {String}    the URL or empty string
     */
    MenuReader.prototype.getLinkUrl = function ($elem) {
        return $elem && $elem.nodeType && $elem.nodeType === 1 ? $elem.getAttribute('data-href') : '';
    };
    /**
     * Jump to the given URL by using native location.href
     * 
     * @param   {String}    url URL string
     * @returns {Boolean}
     */
    MenuReader.prototype.goToUrl = function (url, target) {
        var redirect = false;

        if (url && typeof url === 'string') {
            redirect = true;

            // respect the target-Attribute
            if (target && typeof target === 'string') {
                window.open(url + '', target + '');
            } else {
                location.href = (url + '');
            }
        }

        return redirect;
    };
    /**
     * Get an element inside DOM by native querySelector
     * 
     * @param   {String}    ident   element identifier as CSS selector
     * @returns {Element}   DOM element when found otherwise NULL
     */
    MenuReader.prototype.getElement = function (ident) {
        return typeof ident === 'string' && ident.length ? document.querySelector(ident) : null;
    };
 
    document.onreadystatechange = function read() {
        if (!read.ready) {
            read.ready = new MenuReader({
                ident : '.sx-b2cl-navigation-main'
            });
        }
    };

    if (typeof define === 'function') {
        define('js/noRobots/mainmenu', [], function() {
            return MenuReader;
        });
    }
})();