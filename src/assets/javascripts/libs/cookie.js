class Cookie {
    constructor() {
        this.flags = { // Binary flags
            'essential': 1,
            'marketing': 2
        };
        this.settingsValue = parseInt(this.get('cookiesettings')) || 0;

        if (this.hasConsent('marketing'))
            loadTracking();
    }

    hasConsent(flag) {
        return this.settingsValue & this.flags[flag];
    }

    set(cname, cvalue, exdays) {
        let d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;SameSite=Lax;Secure";
    }

    get(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return false;
    }
    
    exists(cname) {
        let cookie = this.get(cname);
        if (cookie)
            return true;
        return false;
    }
    
    deleteAll() {
        let cookies = document.cookie.split(";");
    
        cookies.forEach(cookie => {
            let eqPos = cookie.indexOf("=");
            let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;

            if(name.trim() != 'PHPSESSID' && name.trim() != 'cookiesettings')
                document.cookie = name + "=;domain="+window.location.hostname+";path=/;expires=Thu, 01 Jan 1970 00:00:00 GMT;SameSite=Lax;Secure";
        });
    }
}

window.cookiesettings = new Cookie();