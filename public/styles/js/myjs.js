// Membuat fungsi untuk menangani klik pada setiap tautan navbar
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".navbar a");
  
    navLinks.forEach(link => {
      link.addEventListener("click", function() {
        // Menghapus kelas 'active' dari semua tautan navbar
        navLinks.forEach(navLink => {
          navLink.classList.remove("active");
        });
        // Menambahkan kelas 'active' pada tautan yang sedang diklik
        this.classList.add("active");
      });
    });
  });
  
  // Fungsi untuk mengatur logo agar kembali ke bagian atas halaman
  document.getElementById("logo").addEventListener("click", function() {
    window.location.href = "#home";
  });

// Perbaharui event listener untuk mendeteksi perubahan hash dalam URL
window.addEventListener("hashchange", function() {
    highlightNavLink();
});

function redirectToNewPage() {
    // Mengarahkan pengguna ke halaman lain
    window.location.href = "index.blade.php";
}

// Fungsi untuk menonaktifkan kelas aktif dari semua tautan dan menambahkannya ke tautan yang sesuai dengan bagian yang sedang di-scroll
function highlightNavLink() {
    sections.forEach(sec => {
        let offset = sec.offsetTop - header.offsetHeight + 1; // Kurangi tinggi header dan tambahkan margin 1px
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");
        let scrollY = window.scrollY;

        if (scrollY >= offset && scrollY < offset + height) {
            // Hapus kelas aktif dari semua tautan
            navLinks.forEach(link => {
                link.classList.remove("active");
            });

            // Tambahkan kelas aktif ke tautan yang sesuai dengan bagian yang sedang di-scroll
            document.querySelector("header nav a[href='#" + id + "']").classList.add("active");
        }
    });
}

// Panggil fungsi highlightNavLink saat halaman dimuat untuk menentukan tautan mana yang harus ditandai sebagai aktif pada awalnya
highlightNavLink();

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
