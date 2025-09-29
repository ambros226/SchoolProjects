document.addEventListener('DOMContentLoaded', () => {
    const cards_place = document.getElementById('fs-cards-container');
    let cards = Array.from(document.querySelectorAll('.fs-card'));
    const front = document.getElementById('front');
    const back = document.getElementById('back');

    function write(current_cards,direction="none") {
        cards_place.textContent = "";
        current_cards.forEach((card) => {
            cards_place.appendChild(card);
        });
        current_cards.forEach(card => {
            card.removeAttribute("class");
            card.classList.add("fs-card");
            
        });
        if (direction === "back") {
            current_cards[0].classList.add('anim-rightRight');
            current_cards[1].classList.add('anim-mainRight');
            current_cards[2].classList.add('anim-leftRight');
        }
        else if (direction === "front") {
            
            current_cards[0].classList.add('anim-leftLeft');
            current_cards[1].classList.add('anim-mainLeft');
            current_cards[2].classList.add('anim-rightLeft');

            
        }
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
        
        write(cards,direction);
    }
    
    
    back.addEventListener('click', () => {
        moveCards("back");
        
    })
    front.addEventListener('click', () => {
        moveCards("front");
        
    })
    write(cards);
    
})