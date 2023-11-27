const helpers = {

    getBrowser() {

      switch(true) {
        
        case window.navigator.userAgent.indexOf("Safari") > -1 && window.navigator.userAgent.indexOf('Chrome') == -1:
          return 'safari';
        case window.navigator.userAgent.indexOf("Chrome") > -1:
          return 'chrome';
        case window.navigator.userAgent.indexOf("Edge/") > -1:
          return 'edge';   
        case window.navigator.userAgent.indexOf("Firefox") > -1:
          return 'firefox';
        case window.navigator.userAgent.indexOf("Edg/") > -1:
          return 'edge';
        default:
          return 'undefined';

      }

    },
      
    setCookie(name, value, days) {
      let expires = '';
  
      if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
      }
  
      document.cookie = name + '=' + (value || '')  + expires + ';';
    },
  
    getCookie(name) {
      const cookies = document.cookie.split(';');
  
      for (const cookie of cookies) {
        if (cookie.indexOf(name + '=') > -1) {
          return cookie.split('=')[1];
        }
      }
  
      return null;
    },

    sortNodeListByPositionAttribute(query) {
      let $array = [];
      Array.from(document.querySelectorAll(query))
        .sort(({dataset: {position: a}}, {dataset: {position: b}}) => a.localeCompare(b))
        .forEach((item) => $array.push(item));
      return $array;
    },
  
    debounce(func, delay) {
      let inDebounce;
      return function() {
        const context = this
        const args = arguments
        clearTimeout(inDebounce)
        inDebounce = setTimeout(() => func.apply(context, args), delay)
      }
    },
  
    calculatePosition(element) {
  
      let root = document.documentElement;
      let body = document.body;
      let rect = element.getBoundingClientRect();
  
      let scrollTop = window.pageYOffset || root.scrollTop || body.scrollTop || 0;
      let scrollLeft = window.pageXOffset || root.scrollLeft || body.scrollLeft || 0;
  
      let clientTop = root.clientTop || body.clientTop || 0;
      let clientLeft = root.clientLeft || body.clientLeft || 0;
  
      return {
        top: Math.round(rect.top + scrollTop - clientTop),
        left: Math.round(rect.left + scrollLeft - clientLeft),
        height: rect.height,
        width: rect.width,
      }
  
    }
  
  }
  
  window.helpers = helpers;