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

function aktifElement() {
    var element = document.getElementById("carou1");
    var element2 = document.getElementById("carou2");
    element.classList.toggle("show");
    element2.classList.toggle("show");
    element.classList.toggle("hide");
    element2.classList.toggle("hide");
}

// pagination
var currentPage = 1;
var itemsPerPage = 5; // Ganti dengan jumlah item per halaman
var data = [/* ... */]; // Ganti dengan data Anda

function displayData(items, page) {
    var startIndex = (page - 1) * itemsPerPage;
    var endIndex = startIndex + itemsPerPage;

    var paginatedItems = items.slice(startIndex, endIndex);

    // Logika untuk menampilkan item di halaman saat ini
    console.log("Menampilkan halaman " + page + ":", paginatedItems);

    // Implementasikan logika untuk menampilkan data sesuai kebutuhan Anda
}

function setupPagination(items) {
    var totalPages = Math.ceil(items.length / itemsPerPage);
    var paginationElement = document.getElementById('pagination');
    paginationElement.innerHTML = '';

    for (var i = 1; i <= totalPages; i++) {
        var li = document.createElement('li');
        li.innerHTML = '<a href="#" onclick="goToPage(' + i + ')">' + i + '</a>';
        paginationElement.appendChild(li);
    }
}

function goToPage(page) {
    currentPage = page;
    displayData(data, currentPage);
    // Anda bisa menambahkan logika lain yang diperlukan saat berpindah halaman
}

// Inisialisasi saat halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    displayData(data, currentPage);
    setupPagination(data);
});