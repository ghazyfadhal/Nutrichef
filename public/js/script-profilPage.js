// profile.js
import { isLoggedIn, logout } from "./script-main.js"; // Import fungsi dari main.js

document.addEventListener("DOMContentLoaded", () => {
    const loginButton = document.getElementById("login-button");
    const searchLoginDiv = document.querySelector(".search-login");

    if (isLoggedIn()) {
        // User sudah login, tampilkan gambar profil
        const profileImg = document.createElement("img");
        profileImg.src = "images/profile-pic.png"; // URL gambar profil
        profileImg.alt = "User Profile";
        profileImg.id = "profile-img";
        profileImg.style.width = "40px";
        profileImg.style.height = "40px";
        profileImg.style.borderRadius = "50%";
        profileImg.style.cursor = "pointer";
        profileImg.title = "View Profile";

        // Ganti tombol login dengan gambar profil
        searchLoginDiv.replaceChild(profileImg, loginButton);

        // Event klik untuk gambar profil
        profileImg.addEventListener("click", () => {
            alert("Redirecting to Profile Page...");
            window.location.href = "/indes-profilePage.html"; // Redirect ke profil
        });

        // Tambahkan tombol logout
        const logoutButton = document.createElement("button");
        logoutButton.textContent = "Logout";
        logoutButton.id = "logout-button";
        logoutButton.style.marginLeft = "10px";

        // Tambahkan tombol logout ke searchLoginDiv
        searchLoginDiv.appendChild(logoutButton);

        // Event klik untuk tombol logout
        logoutButton.addEventListener("click", () => {
            logout(); // Logout pengguna
        });
    } else {
        // User belum login, tampilkan tombol login
        loginButton.textContent = "Login";
        loginButton.addEventListener("click", () => {
            window.location.href = "dariadnan2.html"; // Redirect ke halaman login
        });
    }
});
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
