# UTS Rekayasa Web – Daftar Film (Tema NIM 7)

Aplikasi web FRONTEND Laravel 13 + Blade + Bootstrap (lokal di `public/Bootstrap`).

- Nama / NIM : Yohanes / 251011700547
- Tema       : Daftar Film  → tabel `movies`
- Kolom      : id, title, genre, duration, release_year, description, poster
- Database   : `db_uts_251011700547` (MySQL)
- Poster     : `public/assets/images/`

## Cara menjalankan (Laragon / XAMPP)

1. Nyalakan MySQL, lalu buat database kosong bernama `db_uts_251011700547`
   (phpMyAdmin atau: `CREATE DATABASE db_uts_251011700547;`).
2. Cek `.env` (default: user `root`, password kosong).
3. Jika folder `vendor` belum ada: `composer install`
4. Jalankan migration + seeder:
   ```
   php artisan migrate:fresh --seed
   ```
5. Jalankan server: `php artisan serve` → buka http://localhost:8000

## Halaman
| URL | Keterangan |
|-----|------------|
| `/` | Beranda (hero + daftar film) |
| `/film` | Daftar film (filter genre) |
| `/film/{id}` | Detail film |
