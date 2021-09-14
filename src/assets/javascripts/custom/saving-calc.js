let savingCalculator = document.querySelector('.saving-calculation');

let toggleButtons = savingCalculator.querySelectorAll('.saving-calculation__toggle');
toggleButtons.forEach(toggleButton => {
    toggleButton.addEventListener('click', e => {
        let col = toggleButton.closest('.saving-calculation__col');
        let details = col.querySelector('.saving-calculation__details');
        let content = col.querySelector('.saving-calculation__content');
        details.classList.toggle('saving-calculation__details--open');
        content.classList.toggle('saving-calculation__content--hidden');
        toggleButton.classList.toggle('saving-calculation__toggle--close');
        toggleButton.classList.toggle('saving-calculation__toggle--open');
        if (toggleButton.classList.contains('saving-calculation__toggle--close')) {
            toggleButton.textContent = 'Berechnung ausblenden';
        } else {
            toggleButton.textContent = 'Berechnung einblenden';
        }
    });
});