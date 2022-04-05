eventListener('click', '.benefit-box', (e) => {
    e.preventDefault();
    let descriptions = document.querySelectorAll('.benefit-description');
    descriptions.forEach(desc => slideToggle(desc, 300));
});