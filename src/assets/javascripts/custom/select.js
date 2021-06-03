/*
 * Custom Select Boxes
 * Author: Max Boll
 * 
 * Usage:
 * <select calloneSelect>
 *     <option value="-1">Label when nothing is selected</option>
 *     <option value="1">...</option>
 * </select>
 */

const selectBoxes = document.querySelectorAll('[calloneSelect]');

selectValue = e => {
    let option = e.currentTarget; // Selected option
    let select = option; // Parent box
    while ((select = select.parentNode) && !select.classList.contains('callone-select'));
    // Update value of selected option
    let selected = select.querySelector('.callone-select__selected');
    selected.innerHTML = option.textContent;
    // Set class to keep label floating above
    let label = select.querySelector('.callone-select__label');
    label.classList.add('callone-select__label--active');
    // Set value of real select to what has been selected by the user
    let realSelect = select.querySelector('select');
    realSelect.value = option.dataset.value;
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
        wrapper.classList.toggle('callone-select--open');
    });
});

// Close select when clicked somewhere else
window.addEventListener('click', e => {
    const selects = document.querySelectorAll('.callone-select');
    selects.forEach(select => {
        if (select !== e.target.parentNode && e.target.parentNode && select !== e.target.parentNode.parentNode) {
            select.classList.remove('callone-select--open');
        }
    });
});