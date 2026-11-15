# DOKUMENTASI EKOSISTEM TEKNOLOGI
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Gambaran Umum Ekosistem](#1-gambaran-umum-ekosistem)
2. [Tumpukan Teknologi (Technology Stack)](#2-tumpukan-teknologi-technology-stack)
3. [Integrasi Layanan Eksternal (Third-Party Services)](#3-integrasi-layanan-eksternal-third-party-services)
4. [Kepatuhan Keamanan & Regulasi Privasi Data (UU PDP)](#4-kepatuhan-keamanan--regulasi-privasi-data-uu-pdp)
5. [Strategi Backup & Pemulihan Bencana (Disaster Recovery)](#5-strategi-backup--pemulihan-bencana-disaster-recovery)
6. [Panduan Instalasi & Deployment Produksi](#6-panduan-instalasi--deployment-produksi)

---

## 1. GAMBARAN UMUM EKOSISTEM

Ekosistem teknologi **KlikSolusi** dirancang untuk kehandalan tinggi, kemudahan pemeliharaan, serta aksesibilitas cepat bagi masyarakat dari berbagai penjuru daerah dengan ragam kualitas jaringan internet.

Arsitektur sistem memisahkan lapisan layanan secara modular:
* **Klien Konsumen**: Web Responsif Berbasis Browser (Dioptimalkan untuk Desktop 1440×900, Tablet, dan Mobile Web).
* **Pusat Logika & Layanan Web**: Laravel Framework (Blade Templates & REST API Controller).
* **Penyimpanan Data Terstruktur**: Basis data relasional MySQL InnoDB dengan konfigurasi UTF8mb4.
* **Layanan Penunjang**: Mesin notifikasi otomatis via WhatsApp/Email, pemrosesan antrean latar belakang (*Asynchronous Queue*), dan pengoptimal media gambar WebP.

---

## 2. TUMPUKAN TEKNOLOGI (TECHNOLOGY STACK)

| Komponen | Teknologi yang Dipilih | Alasan Pemilihan |
| :--- | :--- | :--- |
| **Backend Core** | **Laravel 11.x / 12.x (PHP 8.2+)** | Ekosistem matang, aman secara default (CSRF, SQL Injection prevention), ORM Eloquent tangguh, dan performa tinggi. |
| **Database** | **MySQL 8.0+ / MariaDB 10.6+** | Standar industri ACID compliant, dukungan Full-Text Search andal, dan optimasi join tabel cepat. |
| **Cache & Queue** | **Redis / Database Queue** | Menangani antrean pengiriman notifikasi WhatsApp dan email di latar belakang tanpa menghambat loading pengguna. |
| **Web Frontend** | **HTML5, Blade Templates, Vite, Tailwind / CSS Netral** | Menghasilkan kode HTML responsif, ringan diakses di koneksi seluler lambat tanpa dependensi library berat (*anti-slop*). |
| **Iconography** | **Lucide Icons** | Ikon vektor bersih, konsisten, berlisensi open source, dan bebas dari ketergantungan emoji platform. |

---

## 3. INTEGRASI LAYANAN EKSTERNAL (THIRD-PARTY SERVICES)

### 3.1 WhatsApp Gateway API
* **Fungsi**: Mengirimkan notifikasi instan kepada pemohon tiket begitu relawan memberikan balasan solusi teknis.
* **Pilihan Penyedia**: Fonnte API, Twilio, atau WhatsApp Business Platform API.
* **Mekanisme**: *Non-blocking Queue Job* via Laravel Queue Worker sehingga proses request HTTP pengguna selesai seketika dalam hitungan milidetik.

### 3.2 Layanan Email (SMTP Mailer)
* **Fungsi**: Saluran alternatif notifikasi untuk pengguna yang memilih notifikasi via email dan pengiriman ringkasan laporan mingguan ke administrator.
* **Penyedia**: Mailgun, Postmark, atau Amazon SES.

### 3.3 Media Storage & WebP Optimizer
* **Fungsi**: Mengelola ratusan berkas tangkapan layar panduan dan lampiran tiket pengguna.
* **Mekanisme**: Setiap gambar yang diunggah ke server otomatis diproses melalui library `Intervention Image` untuk dikompresi ke format WebP dengan kualitas 82% (menghemat ukuran file hingga 65% dibanding PNG asli tanpa mengurangi keterbacaan teks screenshot).

---

## 4. KEPATUHAN KEAMANAN & REGULASI PRIVASI DATA (UU PDP)

KlikSolusi mematuhi **Undang-Undang Republik Indonesia Nomor 27 Tahun 2022 tentang Pelindungan Data Pribadi (UU PDP)**:

1. **Enkripsi Data Sensitif (Data at Rest)**:
   * Kolom kontak pemohon bantuan (`guest_contact`) dienkripsi dua arah menggunakan algoritma AES-256-CBC melalui kunci aplikasi Laravel (`Crypt::encryptString`).
2. **Pseudonimisasi Alamat IP (Salted IP Hashing)**:
   * Alamat IP pengunjung tidak pernah disimpan dalam bentuk teks terbuka pada tabel audit (`solution_feedbacks` dan `search_logs`).
   * Sistem hanya menyimpan hash SHA-256 dengan *application salt*:
     ```php
     $ipHash = hash('sha256', $request->ip() . config('app.key'));
     ```
3. **Penghapusan Berkas Otomatis (*Automated Storage Purge*)**:
   * Tangkapan layar yang diunggah pengguna pada tiket bantuan berpotensi memuat informasi pribadi (misal: tampilan chat WA, foto galeri, nama akun).
   * Dijalankan penjadwal (*Cron Job*) yang secara otomatis memusnahkan fisik file lampiran setelah **30 hari** tiket dinyatakan selesai (`resolved` / `closed`).

---

## 5. STRATEGI BACKUP & PEMULIHAN BENCANA (DISASTER RECOVERY)

1. **Automated Database Backup**:
   * Pencadangan database otomatis harian menggunakan paket `spatie/laravel-backup` setiap pukul 02:00 WIB.
   * File dump SQL terenkripsi dikirimkan ke media penyimpanan cloud terpisah (off-site storage).
2. **Point-in-Time Recovery (PITR)**:
   * Mengaktifkan *Binary Logging* pada MySQL server untuk memungkinkan restorasi data hingga menit sebelum terjadinya insiden kerusakan data.

---

## 6. PANDUAN INSTALASI & DEPLOYMENT PRODUKSI

### 6.1 Persiapan Environment (.env)
```env
APP_NAME=KlikSolusi
APP_ENV=production
APP_DEBUG=false
APP_URL=https://kliksolusi.id

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kliksolusi_db
DB_USERNAME=kliksolusi_user
DB_PASSWORD=SecurePasswordDb2026!

QUEUE_CONNECTION=database
SESSION_DRIVER=database

# WhatsApp Notification Gateway
WHATSAPP_API_TOKEN=your_whatsapp_secret_token
WHATSAPP_ENDPOINT=https://api.fonnte.com/send
```

### 6.2 Perintah Deployment Produksi
```bash
# 1. Update Dependensi
composer install --no-dev --optimize-autoloader

# 2. Migrasi Database Produksi
php artisan migrate --force

# 3. Optimasi Cache Konfigurasi & Rute
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4. Restart Queue Worker
php artisan queue:restart
```
