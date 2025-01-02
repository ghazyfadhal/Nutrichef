import "./bootstrap";
// Set CSRF token untuk semua request Axios
// axios.defaults.headers.common["X-CSRF-TOKEN"] = document
//     .querySelector('meta[name="csrf-token"]')
//     .getAttribute("content");

// // Fungsi untuk menambah item ke favorit
// function addToFavorites(itemId) {
//     fetch("/favorit", {
//         method: "POST",
//         headers: {
//             "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
//                 .content,
//             "Content-Type": "application/json",
//         },
//         body: JSON.stringify({ item_id: itemId }),
//     })
//         .then((response) => {
//             if (!response.ok) {
//                 throw new Error("Gagal menambahkan ke favorit");
//             }
//             return response.json();
//         })
//         .then((data) => {
//             alert(data.message);
//         })
//         .catch((error) => {
//             alert(error.message);
//         });
// }
axios.defaults.headers.common["X-CSRF-TOKEN"] = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
