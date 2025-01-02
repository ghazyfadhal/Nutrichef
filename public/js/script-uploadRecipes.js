// Fungsi untuk menambahkan atau menghapus kelas 'selected' tetap tidak berubah
function toggleSelection(element) {
    element.classList.toggle("selected"); // Tidak ada perubahan
}

// Fungsi untuk menambahkan langkah baru
function addStep() {
    const stepContainer = document.createElement("div");
    stepContainer.className = "instruction-step";
    stepContainer.innerHTML = `
        <i class="fas fa-1"></i>
        <div>
            <input type="text" placeholder="Insert the step here"><br>
            <input type="text" placeholder="Describe the step">
        </div>
    `;
    document.getElementById("steps").appendChild(stepContainer); // Tetap sama, tanpa perubahan
}

document.addEventListener("DOMContentLoaded", () => {
    // Hubungkan "browse" dengan input file
    const browseLink = document.querySelector("#browseLink");
    const fileInput = document.querySelector("#fileInput");

    browseLink.addEventListener("click", (event) => {
        event.preventDefault();
        fileInput.click();
    });

    fileInput.addEventListener("change", (event) => {
        const files = event.target.files;
        if (files.length > 0) {
            const fileNameDisplay = document.getElementById("fileName");
            const uploadText = document.getElementById("uploadText");
            const fileName = files[0].name;

            fileNameDisplay.textContent = `Selected File: ${fileName}`;
            fileNameDisplay.style.display = "block";
            uploadText.style.display = "none";
        }
    });

    const publishButton = document.querySelector(".publish-button button");

    publishButton.addEventListener("click", () => {
        let formData = {};
        let alertMessages = [];

        // Ambil input dari seksi-1
        const seksi1Inputs = document.querySelectorAll(
            ".seksi-1 input, .seksi-1 textarea"
        );
        seksi1Inputs.forEach((input) => {
            formData[input.name] = input.value.trim();
            if (!input.value.trim()) {
                alertMessages.push(`Field "${input.name}" belum diisi.`);
            }
        });

        // Ambil input dari ingredients
        const ingredientItems = document.querySelectorAll(
            ".ingredients .ingredient-item textarea"
        );
        formData.ingredients = [];
        ingredientItems.forEach((item) => {
            const value = item.value.trim();
            if (value) {
                formData.ingredients.push(value);
            }
        });
        if (formData.ingredients.length === 0) {
            alertMessages.push("Anda belum memasukkan ingredients.");
        }

        // Ambil input dari nutrition
        const nutritionItems = document.querySelectorAll(".nutrition-category");
        formData.nutrition = {};
        nutritionItems.forEach((category) => {
            const name = category
                .querySelector(".nutrition-name")
                .textContent.trim();
            const selected = category.querySelector(".nutrition-item.selected");
            if (selected) {
                formData.nutrition[name] = selected.textContent.trim();
                document.getElementById(
                    selected.getAttribute("data-nutrition")
                ).value = selected.textContent.trim();
            }
        });

        // Ambil input dari tags
        const tagItems = document.querySelectorAll(".tags .tag.selected");
        formData.tags = [];
        tagItems.forEach((tag) => {
            formData.tags.push(tag.textContent.trim());
        });
        document.getElementById("tags").value = formData.tags.join(",");

        // Ambil input dari instructions
        const instructions = document.querySelector(".instructions textarea");
        formData.instructions = instructions ? instructions.value.trim() : "";
        if (!formData.instructions) {
            alertMessages.push("Anda belum mengisi instructions.");
        }

        // Tampilkan pesan error jika ada
        if (alertMessages.length > 0) {
            alert(alertMessages.join("\n"));
        } else {
            alert("Recipe published successfully!");
            console.log("Form Data:", formData);
        }
    });

    // Tombol nutrition dan tags
    document.querySelectorAll(".nutrition-item, .tag").forEach((element) => {
        element.addEventListener("click", (event) => {
            event.target.classList.toggle("selected");
        });
    });
});

const uploadBox = document.getElementById("uploadBox");

uploadBox.addEventListener("dragover", (event) => {
    event.preventDefault(); // Mencegah perilaku default
    uploadBox.classList.add("dragover"); // Tambahkan efek visual
});

uploadBox.addEventListener("dragleave", () => {
    uploadBox.classList.remove("dragover"); // Hapus efek visual
});

uploadBox.addEventListener("drop", (event) => {
    event.preventDefault(); // Mencegah perilaku default
    uploadBox.classList.remove("dragover"); // Hapus efek visual

    const files = event.dataTransfer.files; // Dapatkan file yang di-drop
    const allowedTypes = [
        "image/jpeg",
        "image/png",
        "image/svg+xml",
        "application/zip",
    ];
    const maxFileSize = 10 * 1024 * 1024; // 10 MB

    if (files.length > 0) {
        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            // Validasi tipe file
            if (!allowedTypes.includes(file.type)) {
                console.error(
                    `File type not allowed: ${file.name} (${file.type})`
                );
                alert(`File type not allowed: ${file.name}`);
                continue;
            }

            // Validasi ukuran file
            if (file.size > maxFileSize) {
                console.error(
                    `File too large: ${file.name} (${(
                        file.size /
                        1024 /
                        1024
                    ).toFixed(2)} MB)`
                );
                alert(`File too large: ${file.name} (Max size: 10 MB)`);
                continue;
            }

            // Jika validasi berhasil
            console.log(`Valid file: ${file.name}`);
            alert(`File uploaded: ${file.name}`);
            // Tambahkan logika untuk mengunggah atau memproses file di sini
        }
    }
});

function displayFileName(event) {
    const input = event.target;
    const fileNameDisplay = document.getElementById("fileName");
    const uploadText = document.getElementById("uploadText");

    if (input.files && input.files.length > 0) {
        const fileName = input.files[0].name; // Mengambil nama file
        fileNameDisplay.textContent = `Selected File: ${fileName}`;
        fileNameDisplay.style.display = "block"; // Tampilkan nama file
        uploadText.style.display = "none"; // Sembunyikan teks instruksi
    }
}
// Fungsi untuk mengisi nilai nutrisi saat tombol diklik
// function setNutritionValue(nutrition, level, event) {
//     const input = document.getElementById(nutrition);
//     input.value = level === "low" ? 0 : 1; // Konversi langsung di frontend

//     // Visual feedback
//     const buttons = document.querySelectorAll(
//         `button[data-nutrition="${nutrition}"]`
//     );
//     buttons.forEach((btn) => btn.classList.remove("selected"));
//     event.target.classList.add("selected");
// }
function incrementValue(id) {
    const input = document.getElementById(id);
    let currentValue = parseInt(input.value, 10);
    input.value = currentValue + 1;
}

function decrementValue(id) {
    const input = document.getElementById(id);
    let currentValue = parseInt(input.value, 10);
    if (currentValue > 0) {
        input.value = currentValue - 1;
    }
}
// Fungsi untuk toggle tags
function toggleTag(tag, event) {
    const tagsInput = document.getElementById("tags");
    let currentTags = tagsInput.value ? tagsInput.value.split(",") : [];

    if (currentTags.includes(tag)) {
        currentTags = currentTags.filter((t) => t !== tag);
    } else {
        currentTags.push(tag);
    }

    tagsInput.value = currentTags.join(",");
    event.target.classList.toggle("selected");
}
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
// document.addEventListener("DOMContentLoaded", () => {
//     const publishButton = document.querySelector(".publish-button button"); // Tombol Publish

//     publishButton.addEventListener("click", () => {
//         let formData = {}; // Objek untuk menyimpan data input

//         // Ambil input dari seksi-1 (tidak berubah)
//         const seksi1Inputs = document.querySelectorAll(".seksi-1 input, .seksi-1 textarea");
//         seksi1Inputs.forEach(input => {
//             formData[input.name] = input.value.trim(); // Simpan nilai input dengan name sebagai kunci
//         });

//         // Ambil input dari ingredients (tetap sama)
//         const ingredientItems = document.querySelectorAll(".ingredients .ingredient-item textarea");
//         formData.ingredients = [];
//         ingredientItems.forEach(item => {
//             const value = item.value.trim();
//             if (value) {
//                 formData.ingredients.push(value); // Tambahkan setiap ingredient yang diisi
//             }
//         });

//         // Ambil input dari nutrition
//         const nutritionItems = document.querySelectorAll(".nutrition-category");
//         formData.nutrition = {}; // Perubahan: data nutrition dipetakan dalam objek
//         nutritionItems.forEach(category => {
//             const name = category.querySelector(".nutrition-name").textContent.trim(); // Nama kategori
//             const selected = category.querySelector(".nutrition-item.selected");
//             if (selected) {
//                 formData.nutrition[name] = selected.textContent.trim(); // Simpan hanya jika ada pilihan
//             }
//         });

//         // Ambil input dari tags
//         const tagItems = document.querySelectorAll(".tags .tag.selected");
//         formData.tags = []; // Perubahan: Mengelompokkan tags yang dipilih
//         tagItems.forEach(tag => {
//             formData.tags.push(tag.textContent.trim()); // Tambahkan setiap tag yang dipilih
//         });

//         // Ambil input dari instructions (tidak berubah)
//         const instructions = document.querySelector(".instructions textarea");
//         formData.instructions = instructions ? instructions.value.trim() : "";

//         // Tampilkan data di konsol (tidak berubah)
//         console.log("Form Data:", formData);

//         // Validasi dan notifikasi
//         if (Object.values(formData).some(value => { // Perubahan: validasi semua nilai form
//             if (Array.isArray(value)) return value.length === 0; // Periksa array kosong
//             return value === ""; // Periksa string kosong
//         })) {
//             alert("Please complete all required fields before publishing!"); // Pesan validasi
//         } else {
//             alert("Recipe published successfully!"); // Pesan sukses
//             // Kirim data ke server jika diperlukan (tidak berubah)
//         }
//     });

//     // Tambahkan logika pemilihan untuk elemen nutrition dan tags
//     document.querySelectorAll(".nutrition-item, .tag").forEach(element => {
//         element.addEventListener("click", () => {
//             element.classList.toggle("selected"); // Tidak berubah
//         });
//     });
// });
