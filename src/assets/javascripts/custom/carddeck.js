class Carddeck {
    constructor(deck) {
        this.deck = deck;
        this.currentCard = 0;
        this.speed = parseInt(this.deck.dataset.speed) || 2000;
        this.allCards = this.deck.querySelectorAll('.carddeck__card');
        this.wrapCardContent();
        this.cardSize = this.getCardSize();
        this.cards = this.initCards();
        this.indicators = this.initIndicators();

        this.deckInterval = setInterval(this.switch.bind(this), this.speed);
    }

    wrapCardContent() {
        this.allCards.forEach(card => {
            card.innerHTML = '<div>' + card.innerHTML + '</div>';
        });
    }

    initCards() {
        // Add cards wrapper
        let cards = document.createElement('div');
        cards.classList.add('carddeck__cards');

        // Set cards container size depending on tallest card
        cards.style.height = this.cardSize + 'px';
        this.allCards.forEach(card => card.style.height = this.cardSize + 'px');
        
        // Add first 3 cards to deck
        this.allCards.forEach((card, i) => {
            if (i == 0) {
                card.classList.add('carddeck__card--top');
            } else if (i == 1) {
                card.classList.add('carddeck__card--center');
            } else if (i == 2) {
                card.classList.add('carddeck__card--bottom');
            } else {
                card.classList.add('carddeck__card--hidden');
            }
            cards.appendChild(card);
        });
        
        this.deck.innerHTML = '';
        this.deck.appendChild(cards);
        
        return cards;
    }
    
    initIndicators() {
        let indicators = document.createElement('div');
        indicators.classList.add('carddeck__indicators');
        indicators.style.height = this.cardSize + 'px';

        this.allCards.forEach((card, i) => {
            let indicator = document.createElement('div');
            indicator.classList.add('carddeck__indicator');
            if (i == 0)
                indicator.classList.add('carddeck__indicator--active');
            indicators.appendChild(indicator);
        });

        this.deck.appendChild(indicators);

        return indicators;
    }

    getCardSize() {
        let tallest = 0;
        this.allCards.forEach(card => {
            if (card.offsetHeight > tallest)
                tallest = card.offsetHeight;
            card.classList.add('carddeck__card--messured');
        });

        return tallest;
    }

    switch() {
        // Get wrapping index
        this.currentCard++;
        let cardCount = this.allCards.length;
        if (this.currentCard >= cardCount)
            this.currentCard = 0;
        let nextCardIndex = ((this.currentCard + 2) % cardCount + cardCount) % cardCount;
        let nextCard = this.allCards[nextCardIndex];
        nextCard.classList.remove('carddeck__card--hidden');
        
        // Get current cards
        let bottomCard = this.cards.querySelector('.carddeck__card--bottom');
        let centerCard = this.cards.querySelector('.carddeck__card--center');
        let topCard = this.cards.querySelector('.carddeck__card--top');

        // Add next card
        this.cards.appendChild(nextCard);
        nextCard.classList.add('carddeck__card--bottom');
        
        // Animate bottom to center
        bottomCard.classList.toggle('carddeck__card--bottom');
        bottomCard.classList.toggle('carddeck__card--center');

        // Animate center to top
        centerCard.classList.toggle('carddeck__card--center');
        centerCard.classList.toggle('carddeck__card--top');

        // Animate top to fade away
        topCard.classList.toggle('carddeck__card--top');
        topCard.classList.toggle('carddeck__card--fade');

        // Remove faded card after transition
        setTimeout(() => {
            topCard.classList.remove('carddeck__card--fade');
            topCard.classList.add('carddeck__card--hidden');
        }, 610);

        // Set indicator
        this.indicators.querySelector('.carddeck__indicator--active').classList.remove('carddeck__indicator--active');
        let newIndicator = this.indicators.querySelectorAll('.carddeck__indicator')[this.currentCard];
        newIndicator.classList.add('carddeck__indicator--active');
    }
}

document.addEventListener('DOMContentLoaded', e => {
    const carddecks = document.querySelectorAll('.carddeck');
    carddecks.forEach(carddeck => {
        new Carddeck(carddeck);
    });
});