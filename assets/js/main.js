const cardWrapper = document.getElementById('cardWrapper');
let currentIndex = 0;
const totalCards = 6; // Adjust based on the number of cards

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalCards;
    updateCardPosition();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + totalCards) % totalCards;
    updateCardPosition();
}

function updateCardPosition() {
    const cardWidth = document.querySelector('.card').offsetWidth + 20; // 20 is for margin
    const newPosition = -currentIndex * cardWidth;
    cardWrapper.style.transform = `translateX(${newPosition}px)`;
}