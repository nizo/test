let selectedIndex = 0;
const packages = [{
    'name': 'Einsteiger',
    'subtitle': '<p>Ideal für kleinere Unternehmen mit Wachstumsambitionen</p>',
    'best': false,
    'price': 89,
    'minutes': 300,
    'additional_minutes': 18,
    'highlight': false,
    'bots': 3,
    'features': [
        'Bis zu 300 Minuten inkludiert',
        'Extra Minuten € 0,18 je Minute',
        '<strong>3 VoiceBots inkludiert</strong>'
    ]
}, {
    'name': 'Fortgeschritten',
    'subtitle': '<p>Ideal für Unternehmen mit frequentierter Kundenhotline</p>',
    'best': true,
    'price': 259,
    'minutes': 1000,
    'additional_minutes': 15,
    'highlight': false,
    'bots': 5,
    'features': [
        'Bis zu 1000 Minuten inkludiert',
        'Extra Minuten € 0,15 je Minute',
        '<strong>5 VoiceBots inkludiert</strong>'
    ]
}, {
    'name': 'Experte',
    'subtitle': '<p>Für große Unternehmen, Poweruser & Experten</p>',
    'best': false,
    'price': 659,
    'minutes': 3500,
    'additional_minutes': 12,
    'highlight': false,
    'bots': 'Unlimitierte',
    'features': [
        'Bis zu 3500 Minuten inkludiert',
        'Extra Minuten € 0,12 je Minute',
        '<strong>Unlimitierte VoiceBots inkludiert</strong>'
    ]
}, {
    'name': 'Flex',
    'subtitle': '<p>Die Enterprise-Lösung, flexibel in jeder Hinsicht.</p>',
    'price': 'individuell',
    'minutes': 0,
    'additional_minutes': 0,
    'highlight': true,
    'bots': 0,
    'features': [
        'Individuelle Enterprise-Pakete',
        'Persönlicher Account Manager',
        'Kundenspezifische Entwicklungen'
    ]
}];

class vbCount {
    constructor(el) {
        this.counter = el;
        this.current = this.counter.querySelector('.vb-count__current');
        this.minus = this.counter.querySelector('.vb-count__button--minus');
        this.plus = this.counter.querySelector('.vb-count__button--plus');

        this.minus.addEventListener('click', e => {
            e.stopPropagation();
            e.preventDefault();
            let newValue = parseInt(this.current.textContent) - 1;
            if (newValue < 1)
                newValue = 1;
            this.current.textContent = newValue;
            handleCartTotal();
        });

        this.plus.addEventListener('click', e => {
			document.querySelector('#vb-additional-2').checked = true;
            e.stopPropagation();
            e.preventDefault();
            let newValue = parseInt(this.current.textContent) + 1;
            this.current.textContent = newValue;
            handleCartTotal();
        });
    }
}

function packagePriceGet(package) {
    return package.price;
}

function packagesInit() {
    let packagesContainer = document.querySelector('.vb-packages');
    packagesContainer.innerHTML = '';

    // Loop through reverse to ensure the elements are in correct order because they'll be prepended, not appended
    packages.slice().reverse().forEach((package, i) => {
        i = packages.length - i - 1; // Reverse index
        let template = `<input type="radio" name="package" id="package-${i}" value="${package.name}"${i == selectedIndex ? ' checked' : ''}>
                        <label for="package-${i}" class="vb-package" data-price="${packagePriceGet(package)}"${package.highlight ? ' style="--bg:rgba(134, 238, 34, 0.2);--color:#000"' : ''}>
                            ${package.best ? '<div class="vb-package__ribbon">Beliebtester Tarif</div>' : ''}
                            <h4>${package.name}</h4>
                            <div class="vb-package__subtitle">${package.subtitle}</div>
                            ${package.price != 'individuell' ? '<div class="vb-package__price">&euro;<em>'+packagePriceGet(package)+'</em> <span>/ monatlich</span></div>' : '<div class="vb-package__price"><em>individuell</em></div>'}
                            <ul>
                            ${function () {
                                let result = '';
                                package.features.forEach(feature => {
                                    result += '<li>'+feature+'</li>';
                                });
                                return result;
                            }()}
                            </ul>
                        </label>`;
        
        // Prepend element to container
        packagesContainer.innerHTML = template + packagesContainer.innerHTML;
    });
}

function handleCartTotal() {
    let total = 0;

    let selectedPackage = document.querySelector('input[name="package"]:checked').id;
    selectedIndex = parseInt(selectedPackage.split('-')[1]);
    let package = packages[selectedIndex];
	let vbAdditionals = document.querySelector('.vb-additionals');

	//flex
	// if(selectedIndex === 3) {
	// 	vbAdditionals.classList.add('hidden')
	// } else {
	// 	vbAdditionals.classList.remove('hidden')
	// }

    // Update selected package in cart
    let cartPackageName = document.querySelector('.vb-selection__title');
    cartPackageName.textContent = package.name;
    let cartPackagePrice = document.querySelector('.vb-selection__price');
    if (package.price == 'individuell') {
        cartPackagePrice.innerHTML = '<strong>' + package.price + '</strong>';
    } else {
        cartPackagePrice.innerHTML = package.price == 'individuell' ? '<strong>' + package.price + '</strong>' : '<strong>€' + packagePriceGet(package) + '</strong><br />/ Monat';
    }
    let cartPackageAttributes = document.querySelector('.vb-selection-attributes');
    let cartPackageMinutes = document.querySelector('.vb-selection__minutes');
    if (package.minutes > 0) {
        cartPackageMinutes.innerHTML = 'Bis zu ' + package.minutes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' Minuten inkludiert';
        cartPackageAttributes.style.display = 'block';
    } else {
        cartPackageMinutes.innerHTML = 'individuell';
        cartPackageAttributes.style.display = 'none';
    }
    let cartPackageExtraMinutes = document.querySelector('.vb-selection__extra-minutes');
    if (package.additional_minutes > 0) {
        cartPackageExtraMinutes.innerHTML = 'Extra Minuten € 0,' + package.additional_minutes + ' je Minute';
    } else {
        cartPackageExtraMinutes.innerHTML = 'individuell';
    }
    let cartPackageBots = document.querySelector('.vb-selection__bots');
    if (package.bots == 0) {
        cartPackageBots.innerHTML = 'individuell';
    } else {
        cartPackageBots.innerHTML = '<strong>' + package.bots + ' VoiceBots inkludiert</strong>';
    }
    total += package.price;

    // Update additionals in cart
    let additionals = document.querySelectorAll('.vb-additionals input');
    let selected = 0;
    let additionalsSelected = document.querySelector('.vb-additionals-selected');

    additionalsSelected.innerHTML = '';
    additionals.forEach(additional => {
        if (additional.checked) {
            selected++;

            let label = document.querySelector('label[for="'+additional.id+'"]');
            let additionalName = label.querySelector('h4').textContent;
            let additionalPrice = parseInt(additional.getAttribute('data-price'));
            let additionalPriceLabel = label.querySelector('.vb-additional__price');
            let count = 1;
            let additionalCount = label.querySelector('.vb-count__current');
            if (additionalCount)
                count = parseInt(additionalCount.textContent);

            if (additionalPrice == 0) {
                additionalPrice = '';
            } else {
                additionalPrice = '€' + additionalPrice * count;
            }
            additionalPrice = additionalPrice.replace(/\./g, ',');
            additionalsSelected.innerHTML += `
                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom co-grid--small-gutter">
                    <div class="co-grid__col co-grid__col--fill">${additionalName}</div>
                    <div class="co-grid__col">${additionalPriceLabel.innerHTML}</div>
                </div>
            `;

            total += parseInt(additional.getAttribute('data-price')) * count;
        }
    });
    if (selected == 0)
        additionalsSelected.innerHTML = 'Nichts ausgewählt...';
    
    let totalLabel = document.querySelector('.vb-selection__total');
    let totalLabelMobile = document.querySelector('.vb-cart-mobile__monthly');
    if (package.price == 'individuell') {
        totalLabel.innerHTML = '<strong>' + package.price + '</strong>';
        totalLabelMobile.innerHTML = package.price;
    } else {
        totalLabel.innerHTML = '<strong>€' + (Math.floor(total * 100) / 100).toString().replace('.', ',') + '</strong><br>Exklusive MwSt.';
        totalLabelMobile.innerHTML = 'Monatlich: <strong>' + (Math.floor(total * 100) / 100).toString().replace('.', ',') + '€</strong> <span>(Exklusive MwSt.)</span>';
    }
}

let step = 1;
function toggleStep(e) {
    e.preventDefault();
    let btnNextStep = document.querySelector('.btn-next-step');
    let btnSubmit = document.querySelector('.btn-submit');
    let contentForm = document.querySelector('#content_form');
    let vbChoosing = document.querySelector('#vb-choosing');
    let vbIntroText = document.querySelector('#vb_intro-text');
    let contentSelection = document.querySelector('#content_selection');
    let moveElementWork = document.getElementById("vb-cart-container").innerHTML;


    if (step == 1) {
       /* move element*/
       //jQuery( "#sidebar_move" ).prepend( jQuery( "#cart" ) );
       document.getElementById("vb-cart-container").remove();
       document.getElementById('sidebar_move').innerHTML = moveElementWork;
       //document.getElementById('sidebar_move').classList.add("mystyle");
       document.getElementById("checkout-wrap-stps").classList.add("checkout-full-width");

        contentForm.style.display = 'block';
        vbChoosing.style.display = 'none';
		vbIntroText.style.display = 'none';

        btnSubmit.style.display = '';
        btnNextStep.style.display = 'none';
        step = 2;
        window.scrollTo(0, contentForm.getBoundingClientRect().top + window.scrollY - 200);
    } else {
       
        contentForm.style.display = 'none';
        contentSelection.style.display = '';
        btnSubmit.style.display = 'none';
        btnNextStep.style.display = '';
        step = 1;
        window.scrollTo(0, contentSelection.getBoundingClientRect().top + window.scrollY - 200);
    }
}

function handleSubmit(e) {
    e.preventDefault();

    let btnSubmit = document.querySelector('.btn-submit');
    let contentSuccess = document.querySelector('#content_success');
    let contentForm = document.querySelector('#content_form');
    let contentSelection = document.querySelector('#content_selection');

    var mndFileds = new Array('Company', 'First Name', 'Last Name', 'Email');
    var fldLangVal = new Array('Firma', 'Vorname', 'Nachname', 'E\x2DMail');

    for (i = 0; i < mndFileds.length; i++) {
        var fieldObj = document.forms['WebToLeads8315000039787007'][mndFileds[i]];
        if (fieldObj) {
            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                if (fieldObj.type == 'file') {
                    alert('Bitte wählen Sie eine Datei zum Hochladen.');
                    fieldObj.focus();
                    return false;
                }
                alert(fldLangVal[i] + ' darf nicht leer sein.');
                fieldObj.focus();
                return false;
            } else if (fieldObj.nodeName == 'SELECT') {
                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                    alert(fldLangVal[i] + ' darf nicht leer sein.');
                    fieldObj.focus();
                    return false;
                }
            } else if (fieldObj.type == 'checkbox') {
                if (fieldObj.checked == false) {
                    alert('Please accept  ' + fldLangVal[i]);
                    fieldObj.focus();
                    return false;
                }
            }
            try {
                if (fieldObj.name == 'Last Name') {
                    name = fieldObj.value;
                }
            } catch (e) {}
        }
    }

    if (!validateEmail8315000039787007()) {
        return false;
    }

    var formData = new FormData(document.getElementById('voicebot-form'));

    let package = document.querySelector('[name="package"]:checked').value;
    let additionals = Array.from(document.querySelectorAll('[name="vb-additional"]:checked'));
    let additionalsValues = additionals.map(a => {
        let count = 1;
        let label = document.querySelector('[for="'+a.id+'"]');
        let countEl = label.querySelector('.vb-count__current');
        if (countEl) {
            count = parseInt(countEl.textContent);
        }
        return count + 'x ' + a.value;
    });
    let total = document.querySelector('.vb-selection__total strong').textContent;
    let branche = document.getElementById('branche').value;
    let position = document.getElementById('position').value;
    let anwendungsfall = document.getElementById('anwendungsfall').value;

    appendToFormData(formData, anwendungsfall, 'Anwendungsfall');
    appendToFormData(formData, position, 'Position');
    appendToFormData(formData, branche, 'Branche');
    appendToFormData(formData, package, 'Paket');
    appendToFormData(formData, additionalsValues, 'Optionale Pakete');
    appendToFormData(formData, total, 'Gesamtpreis');

	appendToFormData(formData, '\n'+getInteractionTimeText(), 'Besuchte Seiten (aktive Zeit)');	

	if (typeof mouseflow !== 'undefined' && mouseflow.getSessionId() != '') {
        appendToFormData(formData, mouseflow.getSessionId(), 'Mouseflow Session ID');
    }

	
//    Send the form data using fetch()
    fetch('https://crm.zoho.eu/crm/WebToLeadForm', {
        method: 'POST',
        body: formData
    })
    .then(data => {
        if (data.status === 200) {
            btnSubmit.style.display = 'none';
            contentSuccess.style.display = '';
            contentForm.style.display = 'none';
            contentSelection.style.display = 'none';
            window.scrollTo(0, contentSuccess.offsetTop - 100);
        } else {
			let errorElement = document.querySelector('.floating-form__error');
			errorElement.style.display = 'block';
		}
    })
    .catch(error => {
		let errorElement = document.querySelector('.floating-form__error');
		errorElement.style.display = 'block';
        console.error('Error:', error);
	});

    return false;
}


function appendToFormData(formData, value, fieldName) {
    var currentText = formData.get('LEADCF20') || '';
    var appendedText = Array.isArray(value) ? value.join('\n') : value;
    formData.set('LEADCF20', currentText + '\n' + fieldName + ': ' + appendedText);
}

function validateEmail8315000039787007() {
    var form = document.forms['WebToLeads8315000039787007'];
    var emailFld = form.querySelectorAll('[ftype=email]');
    var i;
    for (i = 0; i < emailFld.length; i++) {
        var emailVal = emailFld[i].value;
        if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
            var atpos = emailVal.indexOf('@');
            var dotpos = emailVal.lastIndexOf('.');
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                alert('Bitte geben Sie eine gültige E-Mail-Adresse ein. ');
                emailFld[i].focus();
                return false;
            }
        }
    }
    return true;
}

function handleMobileCartDisplay() {
    let scrollPos = window.scrollY;
    let hookElement = document.querySelector('.vb-cart-mobile-hook');
    let mobileCart = document.querySelector('.vb-cart-mobile');
    
    if ((hookElement.offsetTop - (window.innerHeight / 2)) - scrollPos <= 0 &&
        (hookElement.offsetHeight + hookElement.offsetTop - (window.innerHeight / 2)) >= scrollPos) {
        mobileCart.classList.add('vb-cart-mobile--visible');
    } else {
        mobileCart.classList.remove('vb-cart-mobile--visible');
    }
}

document.addEventListener('DOMContentLoaded', e => {

	if(!document.body.className.match('lp--vb-preise')) return false;

    let counter = document.querySelectorAll('.vb-count');
    counter.forEach(c => new vbCount(c));

    let selector = document.querySelectorAll('input[name="package"]');
    selector.forEach(s => {
        s.addEventListener('change', handleCartTotal);
    });

    let additionals = document.querySelectorAll('.vb-additionals input');
    additionals.forEach(additional => additional.addEventListener('change', handleCartTotal));

    let btnNextStep = document.querySelector('.btn-next-step');
    let btnPrevStep = document.querySelector('.btn-prev-step');

    btnNextStep.addEventListener('click', toggleStep);
    btnPrevStep.addEventListener('click', toggleStep);

    let vbForm = document.querySelector('#voicebot-form');
    vbForm.addEventListener('submit', handleSubmit);

    window.addEventListener('scroll', handleMobileCartDisplay);

    handleCartTotal();
});





function selectPackageBasedOnHash() {
    var urlHash = window.location.hash;
    var preselectedPackage = urlHash.match(/#preselected_package=(\d+)/);

    if (preselectedPackage) {
        var packageNumber = --preselectedPackage[1];
        var radioToSelect = document.getElementById('package-' + packageNumber);

        if (radioToSelect) {
            radioToSelect.checked = true;
        }
    }
}

selectPackageBasedOnHash();
window.onhashchange = selectPackageBasedOnHash;

