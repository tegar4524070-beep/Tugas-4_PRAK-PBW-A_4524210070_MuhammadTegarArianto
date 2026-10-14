# 🔐 Praktikum Pemrograman Berbasis Web A
## Tugas 4 — Autentikasi Login

<p align="center">
  <img src="https://img.shields.io/badge/Praktikum-PBW%20A-blue?style=for-the-badge" alt="Praktikum PBW A">
  <img src="https://img.shields.io/badge/Laravel-Framework-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Authentication-Login-success?style=for-the-badge&logo=laravel&logoColor=white" alt="Authentication">
</p>

---

## 👨‍🎓 Identitas Mahasiswa

| Informasi | Keterangan |
|---|---|
| **Nama** | Muhammad Tegar Arianto |
| **NPM** | 4524210070 |
| **Mata Kuliah** | Praktikum Pemrograman Berbasis Web A |
| **Tugas** | Tugas 4 |
| **Judul Praktikum** | Autentikasi Login |

---

## 📌 Deskripsi Praktikum

Praktikum ini membahas implementasi fitur autentikasi login pada aplikasi web menggunakan Laravel. Autentikasi digunakan untuk memverifikasi identitas pengguna sebelum memberikan akses ke halaman atau fitur tertentu dalam aplikasi.

Melalui praktikum ini, mahasiswa mempelajari proses login, validasi data pengguna, pengelolaan sesi, serta penerapan pembatasan akses halaman berdasarkan status autentikasi.

## 🎯 Tujuan Praktikum

- Memahami konsep dasar autentikasi pengguna.
- Membuat halaman login pada aplikasi web.
- Memahami proses validasi username atau email dan password.
- Mempelajari penggunaan session untuk mempertahankan status login.
- Memahami pembatasan akses halaman bagi pengguna yang belum login.
- Mempelajari proses logout untuk mengakhiri sesi pengguna.

## 🛠️ Teknologi yang Digunakan

<p>
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/Composer-885630?style=flat-square&logo=composer&logoColor=white" alt="Composer">
</p>

- **Laravel** — Framework PHP untuk membangun aplikasi web.
- **PHP** — Bahasa pemrograman sisi server.
- **MySQL** — Basis data untuk menyimpan informasi pengguna, jika digunakan dalam project.
- **HTML5** — Membuat struktur halaman login.
- **Composer** — Mengelola dependency PHP.

## 🔑 Fitur Autentikasi Login

### 1. Halaman Login
Menyediakan formulir untuk memasukkan identitas pengguna dan password.

### 2. Validasi Pengguna
Memeriksa data login yang dimasukkan pengguna sebelum memberikan akses ke aplikasi.

### 3. Pengelolaan Sesi
Mempertahankan status autentikasi pengguna selama sesi login berlangsung.

### 4. Proteksi Halaman
Membatasi akses ke halaman tertentu agar hanya dapat dibuka oleh pengguna yang sudah terautentikasi.

### 5. Logout
Mengakhiri sesi login agar pengguna dapat keluar dari aplikasi dengan aman.

## ⚙️ Alur Kerja Sistem

1. Pengguna membuka halaman login.
2. Pengguna memasukkan email atau username dan password.
3. Sistem memvalidasi data yang dimasukkan.
4. Jika data benar, pengguna diarahkan ke halaman yang diizinkan.
5. Jika data salah, sistem menampilkan pesan kesalahan.
6. Pengguna dapat melakukan logout untuk mengakhiri sesi.

## 🚀 Cara Menjalankan Project

1. Pastikan PHP, Composer, dan kebutuhan Laravel telah terinstal.
2. Buka terminal pada folder project.
3. Instal dependency jika diperlukan:

   ```bash
   composer install
   ```

4. Sesuaikan konfigurasi database pada file `.env` jika aplikasi menggunakan database.
5. Jalankan migrasi jika diperlukan dan jika struktur database sudah tersedia:

   ```bash
   php artisan migrate
   ```

6. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

7. Buka aplikasi melalui browser:

   ```text
   http://127.0.0.1:8000
   ```


## 📖 Kesimpulan

Praktikum autentikasi login memberikan pemahaman mengenai proses verifikasi identitas pengguna, validasi data, pengelolaan sesi, pembatasan akses halaman, dan logout pada aplikasi web menggunakan Laravel.

Implementasi autentikasi menjadi salah satu dasar penting dalam membangun aplikasi web yang aman dan terstruktur.

---

<p align="center">
  <b>✨ Muhammad Tegar Arianto ✨</b><br>
  <sub>4524210070 · Praktikum Pemrograman Berbasis Web A</sub><br>
  <sub>Tugas 4 — Autentikasi Login</sub>
</p>
