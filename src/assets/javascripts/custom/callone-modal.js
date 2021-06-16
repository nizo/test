class Modal {
    constructor(btn) {
        this.button = btn;
        this.modalname = btn.dataset.callonemodal;
        this.modal = this.createModal();
        this.getModalContent();
    }

    createModal() {
        let modal = document.createElement('div');
        modal.classList.add('callone-modal');
        modal.classList.add('callone-modal--open');
        document.body.appendChild(modal);
        modal.addEventListener('click', (e => {
            if (this.modal == e.target) {
                this.closeModal();
            }
        }).bind(this));
        return modal;
    }

    closeModal() {
        this.modal.classList.remove('callone-modal--open');
        this.modal.remove();
    }

    getModalContent() {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = (function() {
            if (xhttp.readyState != XMLHttpRequest.DONE && xhttp.status == 200)
                return;
            this.modal.innerHTML = xhttp.responseText;
        }).bind(this);
        xhttp.open('GET', '/partials/modals/' + this.modalname + '.html', true);
        xhttp.send();
    }
}

let modalButtons = document.querySelectorAll('[data-callonemodal]');
modalButtons.forEach(btn => {
    btn.addEventListener('click', e => {
        new Modal(btn);
    });
});