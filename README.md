# School App (Fundamental Laravel)

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

Aplikasi web dasar yang dibangun dengan Laravel untuk mempelajari konsep-konsep inti framework, termasuk routing (perutean), controller, view, dan database migration.

## 🚀 Fitur

- **Dashboard**: Halaman utama aplikasi.
- **Manajemen Siswa**: Halaman demonstrasi daftar siswa (mockup).
- **Manajemen Kursus**: Halaman demonstrasi daftar kursus (mockup).
- **Routing Dinamis**: Contoh penggunaan parameter rute untuk user dan produk.
- **Modern Dev Setup**: Terintegrasi dengan Vite dan script pengembangan yang dioptimalkan.

## 🛠️ Teknologi

- **Framework**: [Laravel 13](https://laravel.com)
- **PHP**: ^8.3
- **Build Tool**: Vite
- **Styling**: Tailwind CSS (Default)
- **Environment**: Laravel Sail / Local development

## 📋 Prasyarat

Sebelum memulai, pastikan Anda telah menginstal:

- PHP ^8.3
- [Composer](https://getcomposer.org)
- [Node.js & NPM](https://nodejs.org)
- SQLite (atau database pilihan Anda)

## ⚙️ Instalasi

Proyek ini menyertakan script setup kustom untuk mengotomatiskan konfigurasi awal:

```bash
# Clone repository
git clone <repository-url>
cd school-app

# Jalankan script setup otomatis
composer run setup
```

Script setup akan melakukan:
1. Instalasi dependensi PHP via Composer.
2. Membuat file `.env` dari `.env.example`.
3. Menghasilkan Application Key.
4. Menjalankan migrasi database.
5. Instalasi dependensi NPM.
6. Membangun aset (build assets).

## 🏃 Pengembangan Lokal

Untuk menjalankan server pengembangan dan build aset secara bersamaan:

```bash
composer run dev
```

Ini akan menjalankan:
- Laravel development server
- Vite HMR (Hot Module Replacement)
- Queue listener
- Laravel Pail untuk logging

## 🔗 Rute yang Tersedia

Berikut adalah beberapa rute utama dalam proyek ini:

| Rute | Deskripsi |
|-------|-------------|
| `/` | Halaman selamat datang |
| `/dashboard` | Tampilan dashboard utama |
| `/students` | Daftar siswa |
| `/courses` | Daftar kursus |
| `/user/{name}` | Salam user dinamis |
| `/product/{id}/{name}` | Tampilan produk dinamis |

## 🧪 Testing

Untuk menjalankan suite pengujian:

```bash
composer run test
```

---
*Dibuat sebagai bagian dari pembelajaran Laravel Fundamentals.*
