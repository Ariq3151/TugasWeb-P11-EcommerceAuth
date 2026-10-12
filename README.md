# Tugas Rutin 11 — E-Commerce DB + Secure Auth

## Identitas Proyek

- **Nama Tugas:** Tugas Rutin 11 — E-Commerce DB + Secure Auth
- **Repository:** `TugasWeb-P11-EcommerceAuth`
- **Framework:** Laravel
- **Database:** MySQL
- **Autentikasi:** Laravel Breeze
- **Admin Panel:** Filament

## Deskripsi

Proyek ini merupakan aplikasi E-Commerce yang dikembangkan menggunakan Laravel. Proyek berfokus pada perancangan database relasional, Eloquent ORM, autentikasi pengguna, sistem multi-role, serta pembatasan akses menggunakan middleware dan policy.

## Bagian A — Database dan Eloquent

Implementasi yang dikerjakan meliputi:

- Migration untuk tabel-tabel E-Commerce beserta foreign key.
- Factory dan seeder untuk menghasilkan data produk.
- Model Eloquent dan relasi antarmodel.
- Penggunaan scope pada model.
- Pengujian dan dokumentasi query menggunakan Tinker.

## Bagian B — Autentikasi dan Keamanan

Fitur yang dikerjakan meliputi:

- Login, register, dan logout menggunakan Laravel Breeze.
- Role pengguna: `admin`, `editor`, dan `user`.
- Custom middleware untuk pembatasan akses berdasarkan role.
- `PostPolicy` untuk otorisasi pengeditan dan penghapusan post.
- Proteksi route dan pengujian menggunakan akun dengan role berbeda.

## Bonus

- Panel administrasi Filament.
- Pengelolaan produk dan kategori melalui Filament.
- Demonstrasi eager loading menggunakan relasi kategori produk.

## Teknologi

- PHP
- Laravel
- MySQL
- Eloquent ORM
- Laravel Breeze
- Filament
- Composer
- Vite dan npm jika diperlukan oleh aset frontend.

## Persiapan dan Instalasi

1. Pastikan PHP, Composer, Node.js/npm, dan MySQL tersedia sesuai kebutuhan proyek.
2. Clone repository dan masuk ke folder proyek.
3. Instal dependency PHP:

   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`.
5. Buat database MySQL dengan nama `tugasweb_p11` atau sesuaikan dengan konfigurasi database pada `.env`.
6. Buat application key:

   ```bash
   php artisan key:generate
   ```

7. Jalankan migration:

   ```bash
   php artisan migrate
   ```

8. Jika seeder proyek telah disiapkan, jalankan sesuai kebutuhan:

   ```bash
   php artisan db:seed
   ```

9. Instal dependency frontend jika diperlukan:

   ```bash
   npm install
   ```

10. Jalankan Vite jika diperlukan:

    ```bash
    npm run dev
    ```

11. Jalankan aplikasi:

    ```bash
    php artisan serve
    ```

12. Buka `http://127.0.0.1:8000`.

## Halaman Aplikasi

- `/` — halaman Home.
- `/login` — login pengguna biasa.
- `/register` — registrasi pengguna.
- `/dashboard` — dashboard pengguna yang telah login dan memenuhi middleware route.
- `/products` — katalog produk.
- `/eager-loading-demo` — demonstrasi eager loading.
- `/admin/login` — halaman login panel Filament.
- `/admin` — panel administrasi yang dibatasi untuk admin.

## Dokumentasi Query Tinker

Sertakan dokumentasi lima query Tinker beserta screenshot hasilnya sesuai ketentuan tugas.

Simpan screenshot dalam folder `screenshots/`, contohnya:

- `screenshots/tinker-01.png`
- `screenshots/tinker-02.png`
- `screenshots/tinker-03.png`
- `screenshots/tinker-04.png`
- `screenshots/tinker-05.png`

Contoh menampilkan gambar:

```md
![Query Tinker 1](screenshots/tinker-01.png)
```

## Screenshot Aplikasi

Tambahkan screenshot yang memperlihatkan:

- Halaman Home.
- Login dan register.
- Dashboard pengguna.
- Katalog produk.
- Panel admin Filament.
- Pengujian pembatasan akses berdasarkan role.
- Eager loading demo.

## Keamanan

- Jangan mengunggah file `.env`.
- Jangan memasukkan password atau kredensial database ke README.
- Pastikan route yang dilindungi tetap menggunakan middleware dan otorisasi yang sesuai.
- Pengguna dengan role `user` tidak boleh mendapatkan akses panel admin.

## Repository

`TugasWeb-P11-EcommerceAuth`
