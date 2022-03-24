document.addEventListener('DOMContentLoaded', e => {
    let blogToc = document.querySelector('#toc_container');

    if (blogToc) {
        window.addEventListener('scroll', e => {
            if (parseInt(window.getComputedStyle(blogToc).top) == (blogToc.offsetTop - window.scrollY)) {
                blogToc.classList.add('toc_container--stuck');
            } else {
                blogToc.classList.remove('toc_container--stuck');
            }
        });

        let blogTocTitle = blogToc.querySelector('.toc_title');
        blogTocTitle.addEventListener('click', e => {
            blogToc.classList.toggle('toc_container--open');
        });

        let blogTocLinks = blogToc.querySelectorAll('.toc_list a');
        blogTocLinks.forEach(blogTocLink => {
            blogTocLink.addEventListener('click', e => {
                blogToc.classList.toggle('toc_container--open');
            });
        });
    }
});