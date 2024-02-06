// line color handle
const circles = document.querySelectorAll('.line svg circle');
const arrowLeft = document.querySelector('.line-arrow-left');
const arrowRight = document.querySelector('.line-arrow-right');

circles.forEach((c) => {
    c.addEventListener('click', () => {
        // Hapus kelas 'active' dari semua elemen
        circles.forEach((circle) => {
            circle.classList.remove('active');
        });

        // Tambahkan kelas 'active' hanya pada elemen yang diklik
        c.classList.add('active');
    });
});

arrowLeft.addEventListener('click', () => {
    let i = 0;
    let coloredCircle;
    circles.forEach((circle) => {
        if(circle.classList.contains('active')) {
            circle.classList.remove('active');
            coloredCircle = i;
            coloredCircle == 0 ? coloredCircle = circles.length : coloredCircle;
        }
        i++;
    });
    circles[coloredCircle - 1].classList.add('active');
});

arrowRight.addEventListener('click', () => {
    let i = 0;
    let coloredCircle;
    circles.forEach((circle) => {
        if(circle.classList.contains('active')) {
            circle.classList.remove('active');
            coloredCircle = i;
            coloredCircle == circles.length - 1 ? coloredCircle = -1 : coloredCircle;
        }
        i++;
    });
    circles[coloredCircle + 1].classList.add('active');
});

// carousel handle
const content = document.querySelector('.carousel-content');
const arrowButton = document.querySelectorAll('.carousel-arrow');

let startX;

content.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
});

content.addEventListener('touchmove', (e) => {
    if (!startX) return;

    const currentX = e.touches[0].clientX;
    const deltaX = currentX - startX;

    if (Math.abs(deltaX) > 50) {
        const direction = deltaX > 0 ? -1 : 1;
        const scrollAmount = content.clientWidth * direction;
        content.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        startX = null;
    }
});

arrowButton.forEach(button => {
    button.addEventListener("click", () => {
        const direction = button.id === "prev-slide" ? -1 : 1;
        const scrollAmount = content.clientWidth * direction;
        content.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
});