$(document).on('click', '.benefit-box', function (e) {
    e.preventDefault();
    $(".benefit-description", this).slideToggle();
});