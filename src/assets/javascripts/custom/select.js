/*
 * Custom Select Boxes
 * Author: Max Boll
 * Last Modification: 03 June 2021
 * 
 * Usage:
 * <select calloneSelect required>
 *     <option value="">Label when nothing is selected</option>
 *     <option value="1">...</option>
 * </select>
 * 
 * Hint:
 * First option is the label for when nothing has been selected, don't use it as an actual option
 * Also the value of the first option has to be empty, set but empty: value=""
 * This has to do with the "required" attribute
 */

class Select {
    constructor(s) {
        this.select = s;
        if (this.select.dataset.initialized && this.select.dataset.initialized == 'true')
            return;
        this.select.dataset.initialized = 'true';

        // Wrap original select
        this.wrapper = document.createElement('div');
        this.wrapper.classList.add('callone-select');
        this.select.parentNode.insertBefore(this.wrapper, this.select);
        this.wrapper.appendChild(this.select);

        // Create selected lebel element
        this.selectLabel = document.createElement('div');
        this.selectLabel.classList.add('callone-select__label');
        this.selectLabel.innerHTML = this.select.options[0].text;
        this.wrapper.appendChild(this.selectLabel);

        // Create selected item element
        this.selected = document.createElement('div');
        this.selected.classList.add('callone-select__selected');
        //selected.innerHTML = select.options[select.selectedIndex].text;
        this.selected.innerHTML = "&nbsp;";
        this.wrapper.appendChild(this.selected);

        // Create options list
        this.selectOptions = document.createElement('ul');
        this.selectOptions.classList.add('callone-select__options');
        for (let i = 1; i < this.select.options.length; i++) {
            let o = this.select.options[i];
            let selectOption = document.createElement('li');
            selectOption.dataset.value = o.getAttribute('value');
            selectOption.classList.add('callone-select__option');
            selectOption.innerHTML = o.text;
            this.selectOptions.appendChild(selectOption);
            selectOption.addEventListener('click', this.selectValue.bind(this));
        }
        this.wrapper.appendChild(this.selectOptions);

        // Toggle options list on click
        this.wrapper.addEventListener('click', ((e) => {
            e.stopPropagation();
            this.wrapper.classList.toggle('callone-select--open');
            this.setOptionsPosition();
            
            let controller = new AbortController();
            let scrolledParent = this.getScrolledParent(this.select);
            if (this.wrapper.classList.contains('callone-select--open')) {
                scrolledParent.addEventListener('scroll', ((e) => {
                    this.setOptionsPosition();
                }).bind(this), {
                    signal: controller.signal
                });
            } else {
                controller.abort();
            }
        }).bind(this));

        window.onresize = ((e) => {
            console.log('resize'); // TODO: Fix needed
            this.setOptionsPosition();
        }).bind(this);
    }

    setOptionsPosition() {
        let scrolledParent = this.getScrolledParent(this.wrapper);
        let top = this.wrapper.offsetTop - scrolledParent.scrollTop + this.wrapper.offsetHeight;
        let left = this.wrapper.offsetLeft;
        let width = this.wrapper.offsetWidth;

        this.selectOptions.style.top = top - 2 + 'px';
        this.selectOptions.style.left = left + 'px';
        this.selectOptions.style.width = width + 'px';
    }

    getScrolledParent(node) {
        if (node == null)
            return null;
        
        if (node.scrollHeight > node.clientHeight) {
            return node;
        } else {
            return this.getScrolledParent(node.parentNode);
        }
    }

    selectValue(e) {
        let option = e.currentTarget; // Selected option
        this.selected.innerHTML = '';
        let selectedText = document.createElement('span');
        selectedText.textContent = option.textContent;
        this.selected.appendChild(selectedText);
        // Add clear button
        let clear = document.createElement('div');
        clear.classList.add('callone-select__clear');
        this.selected.appendChild(clear);
        clear.addEventListener('click', this.deselectValue.bind(this));
        // Set class to keep label floating above
        this.selectLabel.classList.add('callone-select__label--active');
        // Set value of real select to what has been selected by the user
        this.select.value = option.dataset.value;
    }

    deselectValue(e) {
        e.stopPropagation();
        let clear = e.currentTarget;
        // Deselect all options
        var options = this.select.options;
        for(var i = 0; i < options.length; i++){
            options[i].selected = false;
        }
        // Empty selected label
        this.selected.innerHTML = "&nbsp;";
        // Remove active class from label
        this.selectLabel.classList.remove('callone-select__label--active');
    }
}

// Initialize Custom Selects
const selectBoxes = document.querySelectorAll('[data-callone-select]');
selectBoxes.forEach(s => {
    new Select(s);
});

// Close on outside click
window.addEventListener('click', e => {
    const selects = document.querySelectorAll('.callone-select');
    selects.forEach(select => {
        if (select !== e.target && !select.contains(e.target)) {
            select.classList.remove('callone-select--open');
        }
    });
});


// Old Code below
// const selectBoxes = document.querySelectorAll('[data-callone-select]');

/*selectValue = e => {
    let option = e.currentTarget; // Selected option
    let select = option; // Parent box
    while ((select = select.parentNode) && !select.classList.contains('callone-select'));
    // Update value of selected option
    let selected = select.querySelector('.callone-select__selected');
    selected.innerHTML = option.textContent;
    // Add clear button
    let clear = document.createElement('div');
    clear.classList.add('callone-select__clear');
    selected.appendChild(clear);
    clear.addEventListener('click', deselectValue);
    // Set class to keep label floating above
    let label = select.querySelector('.callone-select__label');
    label.classList.add('callone-select__label--active');
    // Set value of real select to what has been selected by the user
    let realSelect = select.querySelector('select');
    realSelect.value = option.dataset.value;
}*/

/*deselectValue = e => {
    e.stopPropagation();
    let clear = e.currentTarget;
    let select = clear; // Parent box
    while ((select = select.parentNode) && !select.classList.contains('callone-select'));
    // Deselect all options
    let realSelect = select.querySelector('select');
    var options = realSelect.options;
    for(var i = 0; i < options.length; i++){
      options[i].selected = false;
    }
    // Empty selected label
    let selected = select.querySelector('.callone-select__selected');
    selected.innerHTML = "&nbsp;";
    // Remove active class from label
    let label = select.querySelector('.callone-select__label');
    label.classList.remove('callone-select__label--active');
}*/

/*selectBoxes.forEach(select => {
    // Wrap original select
    let wrapper = document.createElement('div');
    wrapper.classList.add('callone-select');
    select.parentNode.insertBefore(wrapper, select);
    wrapper.appendChild(select);

    // Create selected lebel element
    let selectLabel = document.createElement('div');
    selectLabel.classList.add('callone-select__label');
    selectLabel.innerHTML = select.options[0].text;
    wrapper.appendChild(selectLabel);

    // Create selected item element
    let selected = document.createElement('div');
    selected.classList.add('callone-select__selected');
    //selected.innerHTML = select.options[select.selectedIndex].text;
    selected.innerHTML = "&nbsp;";
    wrapper.appendChild(selected);

    // Create options list
    let selectOptions = document.createElement('ul');
    selectOptions.classList.add('callone-select__options');
    for (let i = 1; i < select.options.length; i++) {
        let o = select.options[i];
        let selectOption = document.createElement('li');
        selectOption.dataset.value = o.getAttribute('value');
        selectOption.classList.add('callone-select__option');
        selectOption.innerHTML = o.text;
        selectOptions.appendChild(selectOption);
        selectOption.addEventListener('click', selectValue);
    }
    wrapper.appendChild(selectOptions);

    // Toggle options list on click
    wrapper.addEventListener('click', e => {
        e.stopPropagation();
        wrapper.classList.toggle('callone-select--open');
    });
});*/

// Close select when clicked somewhere else
/*window.addEventListener('click', e => {
    const selects = document.querySelectorAll('.callone-select');
    selects.forEach(select => {
        if (select !== e.target && !select.contains(e.target)) {
            select.classList.remove('callone-select--open');
        }
        // if (select !== e.target.parentNode && e.target.parentNode && select !== e.target.parentNode.parentNode) {
        //     select.classList.remove('callone-select--open');
        // }
    });
});*/