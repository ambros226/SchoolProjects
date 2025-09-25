document.addEventListener('DOMContentLoaded', () => {
    const cards_place = document.getElementById('fs-cards-container');
    let cards = Array.from(document.querySelectorAll('.fs-card'));
    const front = document.getElementById('front');
    const back = document.getElementById('back');

    function write(current_cards) {
        cards_place.textContent = "";
        current_cards.forEach((card) => {
            cards_place.appendChild(card);
        });
        current_cards.forEach(card => {
            card.classList.remove('main')
            card.classList.remove('left');
            card.classList.remove('right');
        });
        current_cards[1].classList.add('main');
        current_cards[0].classList.add('left');
        current_cards[2].classList.add('right');
    }

    function moveCards(direction) {
        let new_cards = [...cards];
        if (direction === 'back') {
            const lastCard = new_cards.pop();
            new_cards.unshift(lastCard);

        } else if (direction === 'front') {
            const firstCard = new_cards.shift();
            new_cards.push(firstCard);
        }
        cards = new_cards;
        
        write(cards);
    }
    
    
    back.addEventListener('click', () => {
        moveCards("front");
        
    })
    front.addEventListener('click', () => {
        moveCards("back");
        
    })
    write(cards);
    
})