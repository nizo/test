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

const selectBoxes = document.querySelectorAll('[data-calloneSelect]');

selectValue = e => {
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
}

deselectValue = e => {
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
}

selectBoxes.forEach(select => {
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
});

// Close select when clicked somewhere else
window.addEventListener('click', e => {
    const selects = document.querySelectorAll('.callone-select');
    selects.forEach(select => {
        if (select !== e.target && !select.contains(e.target)) {
            select.classList.remove('callone-select--open');
        }
        // if (select !== e.target.parentNode && e.target.parentNode && select !== e.target.parentNode.parentNode) {
        //     select.classList.remove('callone-select--open');
        // }
    });
});