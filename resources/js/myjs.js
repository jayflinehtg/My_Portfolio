document.addEventListener("DOMContentLoaded", function () {
    let sections = document.querySelectorAll("section");
    let navLinks = document.querySelectorAll("header nav a");

    window.addEventListener("scroll", function () {
        let scrollY = window.scrollY + 140; // Menambahkan tinggi header

        sections.forEach((sec) => {
            let offset = sec.offsetTop;
            let height = sec.offsetHeight;
            let id = sec.getAttribute("id");

            if (scrollY >= offset && scrollY < offset + height) {
                navLinks.forEach((link) => {
                    link.classList.remove("active");
                });
                let activeLink = document.querySelector(
                    'header nav a[href="#' + id + '"]'
                );
                if (activeLink) {
                    activeLink.classList.add("active");
                }
            }
        });
    });
});

// Ambil elemen formulir berdasarkan ID
const form = document.getElementById("contact-form");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const messageInput = document.getElementById("message");

form.addEventListener("submit", function (e) {
    e.preventDefault(); // Mencegah pengiriman formulir standar

    // Validasi formulir
    if (validateForm()) {
        // Formulir valid, kirim data ke server atau lakukan tindakan lain di sini
        alert("Form has been submitted!");
        form.reset(); // Bersihkan formulir setelah pengiriman berhasil
    }
});

// Fungsi untuk melakukan validasi formulir
// Fungsi untuk melakukan validasi formulir
function validateForm() {
    let isValid = true;
    let userInput = "Input yang Anda masukkan:\n\n";

    // Validasi nama (tidak boleh kosong)
    if (nameInput.value.trim() === "") {
        isValid = false;
        alert("Nama tidak boleh kosong.");
    } else {
        userInput += "Nama: " + nameInput.value.trim() + "\n";
    }

    // Validasi email (gunakan ekspresi reguler untuk memeriksa format email)
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(emailInput.value.trim())) {
        isValid = false;
        alert("Masukkan alamat email yang valid.");
    } else {
        userInput += "Email: " + emailInput.value.trim() + "\n";
    }

    if (messageInput.value.trim().length < 10) {
        isValid = false;
        alert("Pesan harus memiliki setidaknya 10 karakter.");
    } else {
        userInput += "Pesan: " + messageInput.value.trim();
    }

    if (isValid) {
        alert(userInput);
    }

    return isValid;
}
