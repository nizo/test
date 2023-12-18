"use strict";
var exports = {};
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
Object.defineProperty(exports, "__esModule", { value: true });
// var throttle_1 = require("lodash/throttle");
function throttle(func, limit) {
    var inThrottle;
    return function() {
        var args = arguments;
        var context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(function() { inThrottle = false; }, limit);
        }
    };
}
var windowIdleEvents = ['scroll', 'resize'];
var documentIdleEvents = [
    'wheel',
    'keydown',
    'keyup',
    'mousedown',
    'mousemove',
    'touchstart',
    'touchmove',
    'click',
    'contextmenu',
];
var BrowserInteractionTime = /** @class */ (function () {
    function BrowserInteractionTime(_a) {
        var _b = _a.timeIntervalEllapsedCallbacks, timeIntervalEllapsedCallbacks = _b === void 0 ? [] : _b, _c = _a.absoluteTimeEllapsedCallbacks, absoluteTimeEllapsedCallbacks = _c === void 0 ? [] : _c, _d = _a.checkCallbacksIntervalMs, checkCallbacksIntervalMs = _d === void 0 ? 100 : _d, _e = _a.browserTabInactiveCallbacks, browserTabInactiveCallbacks = _e === void 0 ? [] : _e, _f = _a.idleCallbacks, idleCallbacks = _f === void 0 ? [] : _f, _g = _a.stopTimerOnTabchange, stopTimerOnTabchange = _g === void 0 ? true : _g, _h = _a.activeCallbacks, activeCallbacks = _h === void 0 ? [] : _h, _j = _a.browserTabActiveCallbacks, browserTabActiveCallbacks = _j === void 0 ? [] : _j, _k = _a.idleTimeoutMs, idleTimeoutMs = _k === void 0 ? 3000 : _k;
        var _this = this;
        this.onBrowserTabInactive = function (event) {
            // if running pause timer
            if (_this.isRunning() && _this.stopTimerOnTabchange) {
                _this.stopTimer();
            }
            _this.browserTabInactiveCallbacks.forEach(function (fn) {
                return fn(_this.getTimeInMilliseconds());
            });
        };
        this.onBrowserTabActive = function (event) {
            // if not running start timer
            if (!_this.isRunning()) {
                _this.startTimer();
            }
            _this.browserTabActiveCallbacks.forEach(function (fn) {
                return fn(_this.getTimeInMilliseconds());
            });
        };
        this.onTimePassed = function () {
            // check all callbacks time and if passed execute callback
            _this.absoluteTimeEllapsedCallbacks.forEach(function (_a, index) {
                var callback = _a.callback, pending = _a.pending, timeInMilliseconds = _a.timeInMilliseconds;
                if (pending && timeInMilliseconds <= _this.getTimeInMilliseconds()) {
                    callback(_this.getTimeInMilliseconds());
                    _this.absoluteTimeEllapsedCallbacks[index].pending = false;
                }
            });
            _this.timeIntervalEllapsedCallbacks.forEach(function (_a, index) {
                var callback = _a.callback, timeInMilliseconds = _a.timeInMilliseconds, multiplier = _a.multiplier;
                if (timeInMilliseconds <= _this.getTimeInMilliseconds()) {
                    callback(_this.getTimeInMilliseconds());
                    _this.timeIntervalEllapsedCallbacks[index].timeInMilliseconds = multiplier(timeInMilliseconds);
                }
            });
            if (_this.currentIdleTimeMs >= _this.idleTimeoutMs && _this.isRunning()) {
                _this.idle = true;
                _this.stopTimer();
                _this.idleCallbacks.forEach(function (fn) { return fn(_this.getTimeInMilliseconds()); });
            }
            else {
                _this.currentIdleTimeMs += _this.checkCallbacksIntervalMs;
            }
        };
        this.resetIdleTime = function () {
            if (_this.idle) {
                _this.startTimer();
            }
            _this.activeCallbacks.forEach(function (fn) { return fn(_this.getTimeInMilliseconds()); });
            _this.idle = false;
            _this.currentIdleTimeMs = 0;
        };
        this.registerEventListeners = function () {
            var documentListenerOptions = { passive: true };
            var windowListenerOptions = __assign({}, documentListenerOptions, { capture: true });
            window.addEventListener('blur', _this.onBrowserTabInactive, windowListenerOptions);
            window.addEventListener('focus', _this.onBrowserTabActive, windowListenerOptions);
            var throttleResetIdleTime = throttle(this.resetIdleTime, 2000, {
                leading: true,
                trailing: false,
            });
            windowIdleEvents.forEach(function (event) {
                window.addEventListener(event, throttleResetIdleTime, windowListenerOptions);
            });
            documentIdleEvents.forEach(function (event) {
                return document.addEventListener(event, throttleResetIdleTime, documentListenerOptions);
            });
        };
        this.unregisterEventListeners = function () {
            window.removeEventListener('blur', _this.onBrowserTabInactive);
            window.removeEventListener('focus', _this.onBrowserTabActive);
            windowIdleEvents.forEach(function (event) {
                return window.removeEventListener(event, _this.resetIdleTime);
            });
            documentIdleEvents.forEach(function (event) {
                return document.removeEventListener(event, _this.resetIdleTime);
            });
        };
        this.checkCallbacksOnInterval = function () {
            _this.checkCallbackIntervalId = window.setInterval(function () {
                _this.onTimePassed();
            }, _this.checkCallbacksIntervalMs);
        };
        this.startTimer = function (callback) {
            if (!_this.checkCallbackIntervalId) {
                _this.checkCallbacksOnInterval();
            }
            var last = _this.times[_this.times.length - 1];
            if (last && last.stop === null) {
                // If there's already an ongoing timer, return or call the callback with appropriate data
                if (callback && typeof callback === 'function') {
                    callback(_this.getTimeInMilliseconds()); // Example: pass current time
                }
                return;
            }
            _this.times.push({
                start: performance.now(),
                stop: null,
            });
            _this.running = true;
        
            // Call the callback function immediately after starting the timer
            if (callback && typeof callback === 'function') {
                callback(_this.getTimeInMilliseconds()); // Example: pass current time
            }
        };
        this.stopTimer = function () {
            if (!_this.times.length) {
                return;
            }
            _this.times[_this.times.length - 1].stop = performance.now();
            _this.running = false;
        };
        this.addTimeIntervalEllapsedCallback = function (timeIntervalEllapsedCallback) {
            _this.timeIntervalEllapsedCallbacks.push(timeIntervalEllapsedCallback);
        };
        this.addAbsoluteTimeEllapsedCallback = function (absoluteTimeEllapsedCallback) {
            _this.absoluteTimeEllapsedCallbacks.push(absoluteTimeEllapsedCallback);
        };
        this.addBrowserTabInactiveCallback = function (browserTabInactiveCallback) {
            _this.browserTabInactiveCallbacks.push(browserTabInactiveCallback);
        };
        this.addBrowserTabActiveCallback = function (browserTabActiveCallback) {
            _this.browserTabActiveCallbacks.push(browserTabActiveCallback);
        };
        this.addIdleCallback = function (inactiveCallback) {
            _this.idleCallbacks.push(inactiveCallback);
        };
        this.addActiveCallback = function (activeCallback) {
            _this.activeCallbacks.push(activeCallback);
        };
        this.getTimeInMilliseconds = function () {
            return _this.times.reduce(function (acc, current) {
                if (current.stop) {
                    acc = acc + (current.stop - current.start);
                }
                else {
                    acc = acc + (performance.now() - current.start);
                }
                return acc;
            }, 0);
        };
        this.isRunning = function () {
            return _this.running;
        };
        this.isIdle = function () {
            return _this.idle;
        };
        this.reset = function () {
            _this.times = [];
        };
        this.destroy = function () {
            _this.unregisterEventListeners();
            if (_this.checkCallbackIntervalId) {
                window.clearInterval(_this.checkCallbackIntervalId);
            }
        };
        this.running = false;
        this.times = [];
        this.idle = false;
        this.currentIdleTimeMs = 0;
        this.marks = {};
        this.measures = {};
        this.stopTimerOnTabchange = stopTimerOnTabchange;
        this.browserTabActiveCallbacks = browserTabActiveCallbacks;
        this.browserTabInactiveCallbacks = browserTabInactiveCallbacks;
        this.checkCallbacksIntervalMs = checkCallbacksIntervalMs;
        this.idleTimeoutMs = idleTimeoutMs;
        this.timeIntervalEllapsedCallbacks = timeIntervalEllapsedCallbacks;
        this.absoluteTimeEllapsedCallbacks = absoluteTimeEllapsedCallbacks;
        this.idleCallbacks = idleCallbacks;
        this.activeCallbacks = activeCallbacks;
        this.registerEventListeners();
    }
    BrowserInteractionTime.prototype.mark = function (key) {
        if (!this.marks[key]) {
            this.marks[key] = [];
        }
        this.marks[key].push({ time: this.getTimeInMilliseconds() });
    };
    BrowserInteractionTime.prototype.getMarks = function (name) {
        if (this.marks[name].length < 1) {
            return;
        }
        return this.marks[name];
    };
    BrowserInteractionTime.prototype.measure = function (name, startMarkName, endMarkName) {
        var startMarks = this.marks[startMarkName];
        var startMark = startMarks[startMarks.length - 1];
        var endMarks = this.marks[endMarkName];
        var endMark = endMarks[endMarks.length - 1];
        if (!this.measures[name]) {
            this.measures[name] = [];
        }
        this.measures[name].push({
            name: name,
            startTime: startMark.time,
            duration: endMark.time - startMark.time,
        });
    };
    BrowserInteractionTime.prototype.getMeasures = function (name) {
        if (!this.measures[name] && this.measures[name].length < 1) {
            return;
        }
        return this.measures[name];
    };
    return BrowserInteractionTime;
}());
exports.default = BrowserInteractionTime;
//# sourceMappingURL=browser-interaction-time.js.map