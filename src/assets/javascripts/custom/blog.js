let toc = document.querySelector('#toc_container');

if (toc) {
    window.addEventListener('scroll', e => {
        if (parseInt(window.getComputedStyle(toc).top) == (toc.offsetTop - window.scrollY)) {
            toc.classList.add('toc_container--stuck');
        } else {
            toc.classList.remove('toc_container--stuck');
        }
    });

    let tocTitle = toc.querySelector('.toc_title');
    tocTitle.addEventListener('click', e => {
        toc.classList.toggle('toc_container--open');
    });

    let tocLinks = toc.querySelectorAll('.toc_list a');
    tocLinks.forEach(tocLink => {
        tocLink.addEventListener('click', e => {
            toc.classList.toggle('toc_container--open');
        });
    });
}