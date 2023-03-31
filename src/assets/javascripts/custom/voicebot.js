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
        });

        this.plus.addEventListener('click', e => {
            e.stopPropagation();
            e.preventDefault();
            let newValue = parseInt(this.current.textContent) + 1;
            this.current.textContent = newValue;
        });
    }
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
            total += parseInt(additional.getAttribute('data-price'));

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
    let totalParsed = Math.round(total * 100) / 100 + '';
    totalParsed = totalParsed.replace(/\./g, ',');
    totalLabel.innerHTML = '<strong>&euro;'+totalParsed+'</strong><br />inkl. 19% MwSt.';
}

document.addEventListener('DOMContentLoaded', e => {
    let counter = document.querySelectorAll('.vb-count');
    counter.forEach(c => new vbCount(c));

    let selector = document.querySelectorAll('input[name="package"]');
    selector.forEach(s => {
        s.addEventListener('change', handlePackageSelect);
    });
    handlePackageSelect();

    let intervalToggle = document.querySelector('input[name="vb-interval-toggle"]');
    intervalToggle.addEventListener('change', handleIntervalChange);

    let additionals = document.querySelectorAll('.vb-additionals input');
    additionals.forEach(additional => additional.addEventListener('change', handleTotal));
});