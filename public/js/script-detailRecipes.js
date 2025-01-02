const stars = document.querySelectorAll(".review-section .stars i");
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
stars.forEach((star, index) => {
    star.addEventListener("click", () => {
        // Reset semua bintang
        stars.forEach((s, i) => {
            // Perbaiki logika untuk row-reverse
            if (i >= index) {
                s.classList.add("selected"); // Bintang yang dipilih dan sebelumnya
            } else {
                s.classList.remove("selected"); // Hapus seleksi bintang yang setelahnya
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const buttonReview = document.querySelector(".button-review button");
    const reviewContainer = document.getElementById("klik-review");
    // const bookmarkButton = document.getElementById("bookmarkButton");

    // Sembunyikan elemen secara default
    reviewContainer.classList.add("hidden");

    // Tambahkan event listener untuk toggle
    buttonReview.addEventListener("click", () => {
        reviewContainer.classList.toggle("hidden");

        // Ganti teks tombol berdasarkan state
        if (reviewContainer.classList.contains("hidden")) {
            buttonReview.textContent = "See Review";
        } else {
            buttonReview.textContent = "Hide Review";
        }
    });
    if (bookmarkButton) {
        bookmarkButton.addEventListener("click", function () {
            let resepID = this.getAttribute("data-resep");

            fetch(bookmarkUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify({ resepID: resepID }),
            })
                .then((response) => {
                    if (response.redirected) {
                        // Jika diarahkan ke login, tampilkan alert
                        alert("Silakan login untuk menambahkan bookmark.");
                        return;
                    }
                    return response.json();
                })
                .then((data) => {
                    if (data.status === "success") {
                        alert("Resep berhasil di-bookmark.");
                        bookmarkButton.src = "/images/bookmark_added.png";
                    } else {
                        alert(data.message || "Gagal menambahkan bookmark.");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert("Terjadi kesalahan. Silakan coba lagi.");
                });
        });
    }
});
document.getElementById("reviewForm").onsubmit = function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("/review", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
            Accept: "application/json",
        },
        body: formData,
    })
        .then((response) => {
            if (response.ok) {
                return response.json();
            }
            throw new Error("Unauthorized");
        })
        .then((data) => {
            alert("Ulasan berhasil disimpan!");
            location.reload();
        })
        .catch((error) => {
            alert("Gagal menyimpan ulasan. Coba lagi.");
            console.error("Error:", error);
        });
    function setRating(value) {
        document.getElementById("bintang").value = value;
    }
};
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
