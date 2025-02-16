# Sistem Informasi Nilai Mahasiswa

Proyek ini adalah aplikasi Sistem Informasi Nilai Mahasiswa yang dibangun menggunakan framework Laravel. Aplikasi ini dirancang untuk membantu mahasiswa dan dosen dalam mengelola dan memantau nilai akademik secara efisien. Tujuan pembuatan aplikasi ini untuk pembelajaran CRUD framework laravel dan mengenal MVC di Laravel. 

## Fitur

- **Manajemen Mata Kuliah**: Tambah, ubah, update, dan hapus data.
- **Penyusunan KRS**: Mahasiswa dapat memilih mata kuliah yang ingin diambil dan melihat informasi nilai.
- **Pengelolaan Nilai:** Dosen dapat memasukkan dan memperbarui nilai mahasiswa untuk setiap mata kuliah.
- **Dashboard Mahasiswa:** Mahasiswa dapat melihat nilai mereka secara langsung dan memantau perkembangan akademik.
.
- **Autentikasi Pengguna**: Sistem login untuk mahasiswa dan admin.

## Teknologi yang digunakan
- Framework: Laravel 10
- Database: MySQL
- Frontend: Blade Templating Engine, Bootstrap

## Persyaratan Sistem

Pastikan sistem Anda memenuhi persyaratan berikut sebelum menginstal aplikasi ini:

- PHP versi 7.4 atau lebih baru
- Composer
- Database MySQL
- Web Server seperti Apache atau Nginx

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:

1. **Kloning repositori**:

   ```bash
   git clone https://github.com/Ricpa99/Laravel-Kartu_Rencana_Study.git
   cd Laravel-Kartu_Rencana_Study/blog
    ```
2. Konfigurasi Database di File Environment:
    ```sh
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_anda
    ```
    Untuk password boleh di kosongkan atau jika menggunakan password  sesuaikan namanya yang di aplikasi yang anda instal untuk xampp kosongkan saja.
    ```bash
    DB_PASSWORD=password_anda
    ```
3. Ubah folder storage menjadi publik agar pada saat memasukkan foto atau update foto profile bisa di akses
    ```sh
    php artisan storage:link
    ```
4. Migrasi dan Seed Database:
    ```bash
    php artisan migrate --seed
    ```
    Jalankan seeder untuk membuat data dummy untuk sementara
    ```sh
    php artisan db:seed
    ```
    Atau dengan cara yang lebih baik migrasi dan sekalian menjalankan seeder
    ```sh
    php artisan migrate:fresh --seed
    ```
    Setelah menjalankan migrasi tabel dan seeder, sistem akan secara otomatis membuat pengguna dengan nama admin dan kata sandi admin, yang dapat digunakan untuk masuk sebagai administrator. Jika Anda ingin masuk sebagai mahasiswa, silakan periksa tabel users, di mana pengguna akan terbentuk secara otomatis. Kata sandi default untuk semua pengguna password, kecuali admin, adalah admin passwordnya
5. Jalankan Server Lokal setelah itu jalankan **apache** dan **mysql**
    ```sh
    php artisan serve
    ```
## screenshot
1. Gambar halaman jika masuk sebagai mahasiswa
![image alt] (https://github.com/Ricpa99/sistem-informasi-nilai/blob/7c4e0b187980e6ae3b03449f909e7da4c4e30145/img/Nilai%20mahasiswa.png)

2. Gambar halaman jika masuk sebagai admin
![image alt](https://github.com/Ricpa99/sistem-informasi-nilai/blob/7c4e0b187980e6ae3b03449f909e7da4c4e30145/img/home.png)

3. Gambar menampikan data mahasiswa
![image alt](https://github.com/Ricpa99/sistem-informasi-nilai/blob/7c4e0b187980e6ae3b03449f909e7da4c4e30145/img/daftar%20mahasiswa.png)

4. Gambar untuk nilai mahasiswa
![image alt](https://github.com/Ricpa99/sistem-informasi-nilai/blob/7c4e0b187980e6ae3b03449f909e7da4c4e30145/img/Edit%20nilai.png)
