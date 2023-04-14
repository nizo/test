const packages = [{
    'name': 'Startup',
    'price': 124,
    'features': [
        'Monatlich kündbar',
        '14 Tage testen',
        '500 Minuten inklusive<br /><span>jede weitere  15 Cent</span>'
    ]
}, {
    'name': 'Small Business',
    'price': 249,
    'features': [
        'Monatlich kündbar',
        '14 Tage testen',
        '2.000 Minuten inklusive<br /><span>jede weitere  9,5 Cent</span>'
    ]
}, {
    'name': 'Growing Business',
    'price': 436,
    'features': [
        'Monatlich kündbar',
        '14 Tage testen',
        '4.000 Minuten inklusive<br /><span>jede weitere  7,9 Cent</span>'
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
            handleTotal();
        });

        this.plus.addEventListener('click', e => {
            e.stopPropagation();
            e.preventDefault();
            let newValue = parseInt(this.current.textContent) + 1;
            this.current.textContent = newValue;
            handleTotal();
        });
    }
}

function packagesInit() {
    let packagesContainer = document.querySelector('.vb-packages');

    // Loop through reverse to ensure the elements are in correct order because they'll be prepended, not appended
    packages.slice().reverse().forEach((package, i) => {
        i = packages.length - i; // Reverse index
        let template = `<input type="radio" name="package" id="package-${i}" value="${package.name}"${i == 1 ? ' checked' : ''}>
                        <label for="package-${i}" class="vb-package" data-price="${package.price}">
                            <h4>${package.name}</h4>
                            <div class="vb-package__price">
                                &euro;<em>${package.price}</em> <span>/ Monat</span>
                            </div>
                            <ul class="list list--checkmarks">
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

function handlePackageSelect() {
    handleTotal();
    let selection = document.querySelector('input[name="package"]:checked');
    if (!selection)
        return;

    let selectionLabel = document.querySelector('label[for="'+selection.id+'"]');
    let selectionTitle = document.querySelector('.vb-selection__title');
    let selectionMinutes = document.querySelector('.vb-selection__minutes');
    let selectionPriceBox = document.querySelector('.vb-selection__price');
    let selectionPrice = document.querySelector('.vb-selection__price strong');
    let isYearly = document.querySelector('input[name="vb-interval-toggle"]').checked;
    let yearDiscount = 0.8;
    let price = selectionLabel.hasAttribute('data-price') ? parseInt(selectionLabel.getAttribute('data-price')) : 0;
    selectionPriceBox.style.display = '';
    let priceParsed = (isYearly ? Math.round((price * yearDiscount) * 100) / 100 : price) + '';
    priceParsed = priceParsed.replace(/\./g, ',');
    selectionPrice.textContent = '€' + priceParsed;
    let totalMobile = document.querySelector('.vb-cart-mobile__monthly');

    switch (selection.id) {
        case "package-1":
            selectionTitle.textContent = 'Startup';
            selectionMinutes.innerHTML = '500 Minuten inklusive<br /><span>jede weitere 15 Cent</span>';
            break;
        case "package-2":
            selectionTitle.textContent = 'Small Business';
            selectionMinutes.innerHTML = '2.000 Minuten inklusive<br /><span>jede weitere 9,5 Cent</span>';
            break;
        case "package-3":
            selectionTitle.textContent = 'Growing Business';
            selectionMinutes.innerHTML = '4.000 Minuten inklusive<br /><span>jede weitere 7,9 Cent</span>';
            break;
        case "package-4":
            selectionTitle.textContent = 'Enterprise';
            selectionPriceBox.style.display = 'none';
            totalMobile.textContent = 'Monatlich: individuell';
            selectionMinutes.innerHTML = '4.000 Minuten inklusive<br /><span>jede weitere 7,9 Cent</span>';
            break;
    }
}

function handleIntervalChange(e) {
    handlePackageSelect();
    let input = e.currentTarget;
    let isYearly = input.checked;
    let priceBoxes = document.querySelectorAll('.vb-package');
    let yearDiscount = 0.8;
    priceBoxes.forEach(box => {
        if (!box.hasAttribute('data-price'))
            return;
        let price = parseInt(box.getAttribute('data-price'));
        let priceLabel = box.querySelector('em');
        if (isYearly) {
            let priceParsed = Math.round((price * yearDiscount) * 100) / 100 + '';
            priceParsed = priceParsed.replace(/\./g, ',');
            priceLabel.textContent = priceParsed;
        } else {
            priceLabel.textContent = price;
        }
    });
}

function handleTotal() {
    let additionals = document.querySelectorAll('.vb-additionals input');
    let total = 0;
    let selected = 0;
    let additionalsSelected = document.querySelector('.vb-additionals-selected');

    additionalsSelected.innerHTML = '';
    additionals.forEach(additional => {
        if (additional.checked) {
            selected++;

            let label = document.querySelector('label[for="'+additional.id+'"]');
            let additionalName = label.querySelector('h4').textContent;
            let additionalPrice = parseInt(additional.getAttribute('data-price'));
            let countEl = label.querySelector('.vb-count__current');
            let count = 1;
            if (countEl) {
                count = parseInt(countEl.textContent);
            }

            if (additionalPrice == 0) {
                additionalPrice = '';
            } else {
                additionalPrice = '€' + additionalPrice * count;
            }
            additionalPrice = additionalPrice.replace(/\./g, ',');
            additionalsSelected.innerHTML += `
                <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom co-grid--small-gutter">
                    <div class="co-grid__col co-grid__col--fill">${additionalName}</div>
                    <div class="co-grid__col">${additionalPrice}</div>
                </div>
            `;

            total += parseInt(additional.getAttribute('data-price') * count);
        }
    });
    if (selected == 0)
        additionalsSelected.innerHTML = 'Nichts ausgewählt...';
    
    let selection = document.querySelector('input[name="package"]:checked + label');
    let isYearly = document.querySelector('input[name="vb-interval-toggle"]').checked;
    let yearDiscount = 0.8;
    let price = selection.hasAttribute('data-price') ? parseInt(selection.getAttribute('data-price')) : 0;
    total += isYearly ? price * yearDiscount : price;

    let totalLabel = document.querySelector('.vb-selection__total');
    let totalParsed = '<strong>individuell</strong>';
    if (total != 0) {
        totalParsed = Math.round(total * 100) / 100 + '';
        totalParsed = '<strong>&euro;'+totalParsed.replace(/\./g, ',')+'</strong>';
    }
    totalLabel.innerHTML = totalParsed + (total != 0 ? '<br />inkl. 19% MwSt.' : '');

    let totalMobile = document.querySelector('.vb-cart-mobile__monthly');
    totalMobile.innerHTML = 'Monatlich: ' + totalParsed;
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
    formData.append('total_once', document.querySelector('.vb-selection__total-once strong').textContent);
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
    
    console.log(hookElement.offsetHeight);
    if ((hookElement.offsetTop - (window.innerHeight / 2)) - scrollPos <= 0 &&
        (hookElement.offsetHeight + hookElement.offsetTop - (window.innerHeight / 2)) >= scrollPos) {
        mobileCart.classList.add('vb-cart-mobile--visible');
    } else {
        mobileCart.classList.remove('vb-cart-mobile--visible');
    }
}

document.addEventListener('DOMContentLoaded', e => {
    let counter = document.querySelectorAll('.vb-count');
    counter.forEach(c => new vbCount(c));

    packagesInit();

    let selector = document.querySelectorAll('input[name="package"]');
    selector.forEach(s => {
        s.addEventListener('change', handlePackageSelect);
    });
    handlePackageSelect();

    let intervalToggle = document.querySelector('input[name="vb-interval-toggle"]');
    intervalToggle.addEventListener('change', handleIntervalChange);

    let additionals = document.querySelectorAll('.vb-additionals input');
    additionals.forEach(additional => additional.addEventListener('change', handleTotal));

    let btnNextStep = document.querySelector('.btn-next-step');
    let btnPrevStep = document.querySelector('.btn-prev-step');

    btnNextStep.addEventListener('click', toggleStep);
    btnPrevStep.addEventListener('click', toggleStep);

    let vbForm = document.querySelector('#voicebot-form');
    vbForm.addEventListener('submit', handleSubmit);

    window.addEventListener('scroll', handleMobileCartDisplay);
});