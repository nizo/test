let discount = false;
let discountAmount = 0.8; // 20%
let selectedIndex = 0;
const packages = [{
    'name': 'Startup',
    'price': 124,
    'wide': false,
    'minutes': 500,
    'additional_minutes': 15,
    'features': [
        'Monatlich kündbar',
        '14 Tage testen',
        '500 Minuten inklusive<br /><span>jede weitere  15 Cent</span>'
    ]
}, {
    'name': 'Small Business',
    'price': 249,
    'wide': false,
    'minutes': 2000,
    'additional_minutes': 9.5,
    'features': [
        'Monatlich kündbar',
        '14 Tage testen',
        '2.000 Minuten inklusive<br /><span>jede weitere  9,5 Cent</span>'
    ]
}, {
    'name': 'Growing Business',
    'price': 436,
    'wide': false,
    'minutes': 4000,
    'additional_minutes': 7.9,
    'features': [
        'Monatlich kündbar',
        '14 Tage testen',
        '4.000 Minuten inklusive<br /><span>jede weitere  7,9 Cent</span>'
    ]
}, {
    'name': 'Enterprise',
    'price': 'individuell',
    'wide': true,
    'minutes': 0,
    'additional_minutes': 0,
    'features': [
        'Persönlicher Account-Manager',
        'Kundenspezifische Entwicklungen',
        'Rechts- & Sicherheitsunterstützung',
        'SLA-Vereinbarung',
        'Entstörzeiten'
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
            e.stopPropagation();
            e.preventDefault();
            let newValue = parseInt(this.current.textContent) + 1;
            this.current.textContent = newValue;
            handleCartTotal();
        });
    }
}

function packagePriceGet(package) {
    if (discount && typeof package.price === 'number') {
        return (Math.round((package.price * discountAmount) * 100) / 100).toString().replace('.', ',');
    } else {
        return package.price;
    }
}

function packagesInit() {
    let packagesContainer = document.querySelector('.vb-packages');
    packagesContainer.innerHTML = '';

    // Loop through reverse to ensure the elements are in correct order because they'll be prepended, not appended
    packages.slice().reverse().forEach((package, i) => {
        i = packages.length - i - 1; // Reverse index
        let template = `<input type="radio" name="package" id="package-${i}" value="${package.name}"${i == selectedIndex ? ' checked' : ''}>
                        <label for="package-${i}" class="vb-package${package.wide ? ' vb-package--wide' : ''}" data-price="${packagePriceGet(package)}">
                            <h4>${package.name}</h4>
                            <div class="vb-package__price">
                                ${package.price == 'individuell' ? 'Individuelles Paket für Ihre Bedürfnisse' : '&euro;<em>' + packagePriceGet(package) + '</em> <span>/ Monat</span>'}
                            </div>
                            ${function () {
                                let result = '';
                                let featureHalf = Math.ceil(package.features.length / 2);
                                
                                if (package.wide) {
                                    result += '<div class="co-grid co-grid--no-margin-top">';
                                    result += '<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">';
                                    result += '<ul class="list list--checkmarks">';
                                    for (let i = 0; i < featureHalf; i++) {
                                        result += '<li>'+package.features[i]+'</li>';
                                    }
                                    result += '</ul>';
                                    result += '</div>';
                                    result += '<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm">';
                                    result += '<ul class="list list--checkmarks">';
                                    for (let i = featureHalf; i < package.features.length; i++) {
                                        result += '<li>'+package.features[i]+'</li>';
                                    }
                                    result += '</ul>';
                                    result += '</div>';
                                    result += '</div>';
                                } else {
                                    result = '<ul class="list list--checkmarks">';
                                    package.features.forEach(feature => {
                                        result += '<li>'+feature+'</li>';
                                    });
                                    result += '</ul>';
                                }
                                return result;
                            }()}
                        </label>`;
        
        // Prepend element to container
        packagesContainer.innerHTML = template + packagesContainer.innerHTML;
    });
}

function handleCartTotal() {
    let total = 0;
    let discountToggle = document.querySelector('#vb-interval-toggle');

    // Set discount
    discount = false;
    if (discountToggle.checked)
        discount = true;

    let selectedPackage = document.querySelector('input[name="package"]:checked').id;
    selectedIndex = parseInt(selectedPackage.split('-')[1]);
    let package = packages[selectedIndex];

    // Update package prices with discount
    let packageBoxes = document.querySelectorAll('.vb-package');
    packageBoxes.forEach(box => {
        let priceLabel = box.querySelector('.vb-package__price');
        let p = packages[parseInt(box.getAttribute('for').split('-')[1])];
        priceLabel.innerHTML = p.price == 'individuell' ? 'Individuelles Paket für Ihre Bedürfnisse' : '&euro;<em>' + packagePriceGet(p) + '</em> <span>/ Monat</span>';
    });

    // Update selected package in cart
    let cartPackageName = document.querySelector('.vb-selection__title');
    cartPackageName.textContent = package.name;
    let cartPackagePrice = document.querySelector('.vb-selection__price');
    if (package.price == 'individuell') {
        cartPackagePrice.innerHTML = '<strong>' + package.price + '</strong>';
    } else {
        cartPackagePrice.innerHTML = package.price == 'individuell' ? '<strong>' + package.price + '</strong>' : '<strong>€' + packagePriceGet(package) + '</strong><br />/ Monat';
    }
    let cartPackageMinutes = document.querySelector('.vb-selection__minutes');
    if (package.minutes > 0) {
        cartPackageMinutes.innerHTML = package.minutes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' Minuten inklusive<br /><span>jede weitere ' + package.additional_minutes.toString().replace('.', ',') + ' Cent</span>';
    } else {
        cartPackageMinutes.innerHTML = 'individuell';
    }
    total += discount ? package.price * discountAmount : package.price;

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

            if (additionalPrice == 0) {
                additionalPrice = '';
            } else {
                additionalPrice = '€' + additionalPrice;
            }
            additionalPrice = additionalPrice.replace(/\./g, ',');
            additionalsSelected.innerHTML += `
                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom co-grid--small-gutter">
                    <div class="co-grid__col co-grid__col--fill">${additionalName}</div>
                    <div class="co-grid__col">${additionalPrice}</div>
                </div>
            `;

            total += parseInt(additional.getAttribute('data-price'));
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
        totalLabel.innerHTML = '<strong>€' + (Math.floor(total * 100) / 100).toString().replace('.', ',') + '</strong><br>inkl. 19% MwSt.';
        totalLabelMobile.innerHTML = 'Monatlich: ' + (Math.floor(total * 100) / 100).toString().replace('.', ',') + '€';
    }
}

let step = 1;
function toggleStep(e) {
    e.preventDefault();
    let btnNextStep = document.querySelector('.btn-next-step');
    let btnSubmit = document.querySelector('.btn-submit');
    let contentForm = document.querySelector('#content_form');
    let contentSelection = document.querySelector('#content_selection');

    if (step == 1) {
        contentForm.style.display = '';
        contentSelection.style.display = 'none';
        btnSubmit.style.display = '';
        btnNextStep.style.display = 'none';
        step = 2;
        window.scrollTo(0, contentForm.offsetTop - 100);
    } else {
        contentForm.style.display = 'none';
        contentSelection.style.display = '';
        btnSubmit.style.display = 'none';
        btnNextStep.style.display = '';
        step = 1;
        window.scrollTo(0, contentSelection.offsetTop - 100);
    }
}

function handleSubmit(e) {
    e.preventDefault();
    let form = e.currentTarget;
    let formData = new FormData(form);
    let payment_interval = document.querySelector('[name="vb-interval-toggle"]:checked') ? 'jährlich' : 'monatlich';
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
    formData.append('package', package);
    formData.append('payment_interval', payment_interval);
    formData.append('total_once', 0);
    formData.append('total_monthly', document.querySelector('.vb-selection__total strong').textContent);
    additionalsValues.forEach(a => formData.append('additional[]', a));

    // Add path to formdata
    formData.set('type', 9);
    formData.set('mouseflow', '');
    if (typeof mouseflow !== 'undefined' && mouseflow.getSessionId() != '') {
        formData.set('mouseflow', mouseflow.getSessionId());
    }

    let error = form.querySelector('.floating-form__error');
    let btnSubmit = document.querySelector('.btn-submit');
    let contentSuccess = document.querySelector('#content_success');
    let contentForm = document.querySelector('#content_form');
    let contentSelection = document.querySelector('#content_selection');
    error.classList.remove('floating-form__error--active');
    const postUrl = 'https://connect.callone.io/backend/contact.php';
    fetch(postUrl, {
        method: 'POST',
        cache: 'no-cache',
        body: formData
    })
    .then(response => {
        return response.json();
    })
    .then(data => {
        btnSubmit.style.display = 'none';
        contentSuccess.style.display = '';
        contentForm.style.display = 'none';
        contentSelection.style.display = 'none';
        window.scrollTo(0, contentSuccess.offsetTop - 100);
    })
    .catch(response => {
        console.error(response);
        error.classList.add('floating-form__error--active');
        window.scrollTo(0, contentForm.offsetTop - 100);
    });

    return false;
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
    // let counter = document.querySelectorAll('.vb-count');
    // counter.forEach(c => new vbCount(c));

    packagesInit();

    let selector = document.querySelectorAll('input[name="package"]');
    selector.forEach(s => {
        s.addEventListener('change', handleCartTotal);
    });

    let intervalToggle = document.querySelector('input[name="vb-interval-toggle"]');
    intervalToggle.addEventListener('change', handleCartTotal);

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