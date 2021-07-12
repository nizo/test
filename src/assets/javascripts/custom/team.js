// Team Switcher Component
class Team {
    constructor(el) {
        this.el = el;
        this.buttons = this.el.querySelectorAll('.team__button');
        this.contents = this.el.querySelectorAll('.team__member');
        this.buttons[0].classList.add('team__button--active');
        this.contents[0].classList.add('team__member--active');

        this.buttons.forEach(btn => btn.addEventListener('click', this.switch.bind(this)));
    }

    switch(e) {
        let member = e.currentTarget.dataset.member;
        console.log(e.currentTarget, member);
        this.buttons.forEach(btn => {
            if (btn.dataset.member === member) {
                btn.classList.add('team__button--active');
            } else {
                btn.classList.remove('team__button--active');
            }
        });
        this.contents.forEach(c => {
            if (c.dataset.member === member) {
                c.classList.add('team__member--active');
            } else {
                c.classList.remove('team__member--active');
            }
        });
    }
}

let teams = document.querySelectorAll('.team');
teams.forEach(t => new Team(t));