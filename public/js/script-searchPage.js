// Tangkap elemen input, tombol, dan elemen output
const searchInput = document.getElementById("search-input");
const searchButton = document.getElementById("search-button");
const resultDisplay = document.getElementById("obj-searched-show");

// Tambahkan event listener ke tombol
searchButton.addEventListener("click", () => {
    const searchText = searchInput.value.trim(); // Ambil teks input dan hapus spasi
    if (searchText) {
        resultDisplay.textContent = searchText; // Tampilkan teks di elemen hasil
    } else {
        resultDisplay.textContent = "No search query provided"; // Pesan jika kosong
        //   resultDisplay.textContent = "Could not find result for " + searchText;
    }
});
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
