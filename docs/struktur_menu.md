# STRUKTUR MENU & SITEMAP NAVIGASI
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Peta Situs Keseluruhan (Overall Sitemap)](#1-peta-situs-keseluruhan-overall-sitemap)
2. [Struktur Menu Pengguna Publik (Public Navigation)](#2-struktur-menu-pengguna-publik-public-navigation)
3. [Struktur Navigasi Halaman Panduan Bertahap](#3-struktur-navigasi-halaman-panduan-bertahap)
4. [Struktur Menu Portal Relawan Digital](#4-struktur-menu-portal-relawan-digital)
5. [Struktur Menu Dashboard Administrator](#5-struktur-menu-dashboard-administrator)

---

## 1. PETA SITUS KESELURUHAN (OVERALL SITEMAP)

```
KLIK SOLUSI (https://kliksolusi.id)
│
├── 🌐 PENGGUNA PUBLIK (MASYARAKAT AWAM / GUEST)
│   ├── / (Halaman Beranda & Hero Search)
│   ├── /katalog (Katalog Seluruh Kategori Permasalahan)
│   │   ├── /katalog/dokumen-dan-format
│   │   ├── /katalog/perangkat-dan-hp
│   │   ├── /katalog/komunikasi-dan-email
│   │   ├── /katalog/penyimpanan-cloud
│   │   └── /katalog/layanan-publik-online
│   ├── /panduan/{slug} (Halaman Panduan Langkah Bertahap)
│   ├── /tanya-relawan (Formulir Pengajuan Tiket Bantuan)
│   ├── /lacak-tiket/{kode_tiket} (Pelacakan Status & Percakapan Tiket)
│   ├── /tentang-kami (Profil & Visi Literasi Digital)
│   └── /kebijakan-privasi (Kepatuhan UU PDP)
│
├── 🤝 PORTAL RELAWAN DIGITAL (/relawan)
│   ├── /relawan/dashboard (Rangkuman Tugas & Rating)
│   ├── /relawan/antrean-tiket (Daftar Tiket Terbuka & Filter Keahlian)
│   ├── /relawan/tiket-saya (Daftar Tiket yang Sedang Ditangani)
│   ├── /relawan/tiket/{id}/jawab (Antarmuka Diskusi & Solusi Tiket)
│   ├── /relawan/riwayat-selesai (Arsip Tiket yang Telah Selesai)
│   └── /relawan/profil (Pengaturan Bio & Kategori Keahlian)
│
└── ⚙️ DASHBOARD ADMINISTRATOR (/admin)
    ├── /admin/dashboard (Metrik Statistik Pengunjung, Tiket, & Kepuasan)
    ├── /admin/panduan (CMS Manajemen Panduan: Tambah, Edit, Hapus)
    │   ├── /admin/panduan/tambah (Editor Langkah demi Langkah & Upload WebP)
    │   └── /admin/panduan/{id}/edit
    ├── /admin/kategori (Kelola Kategori & Ikon Lucide)
    ├── /admin/relawan (Verifikasi & Manajemen Akun Relawan)
    ├── /admin/analitik-pencarian (Laporan Kata Kunci Populer & Zero-Result)
    └── /admin/pengaturan (Konfigurasi Gateway WhatsApp, Mailer, & Storage)
```

---

## 2. STRUKTUR MENU PENGGUNA PUBLIK (PUBLIC NAVIGATION)

### 2.1 Header Navigasi (Desktop & Mobile Bar)
* **Kiri**:
  * Logo Ikon `zap` dalam kontainer `#1E1E2D`.
  * Teks Brand: **KlikSolusi** (`#1E1E2D` Bold) + `.id` (`#6C5CE7`).
* **Tengah (Menu Utama)**:
  * **Beranda**: Halaman depan dengan bilah pencarian cerdas.
  * **Katalog Panduan**: Menu dropdown atau halaman grid kategori permasalahan.
  * **Solusi Populer**: Rujukan cepat panduan paling banyak dicari masyarakat (PDF, WA, Drive).
  * **Tentang Kami**: Informasi misi kerelawanan dan literasi digital.
* **Kanan**:
  * Tautan: **Lacak Tiket** (Ikon `search` / `fileText`).
  * Tombol CTA Primer: **Tanya Relawan** (Tombol kontras `#1E1E2D` dengan teks putih dan ikon `arrowRight`).

### 2.2 Footer Bar (Bawah Halaman)
* **Kolom 1: Profil Singkat**: Deskripsi ringkas KlikSolusi sebagai pusat panduan teknologi ramah pemula.
* **Kolom 2: Kategori Utama**: Tautan langsung ke 5 pilar permasalahan (Dokumen, HP, Komunikasi, Cloud, Layanan Publik).
* **Kolom 3: Layanan Bantuan**: Tautan form tanya relawan, panduan penggunaan, status sistem.
* **Kolom 4: Legalitas**: Kebijakan Privasi (UU PDP), Syarat & Ketentuan, Hak Cipta 2026.

---

## 3. STRUKTUR NAVIGASI HALAMAN PANDUAN BERTAHAP

Pada halaman membaca panduan (`/panduan/{slug}`), struktur komponen ditata agar pengguna tidak terdistraksi dan fokus pada instruksi:

```
+-----------------------------------------------------------------------------------+
| BREADCRUMB: Beranda > Dokumen & Format > Ubah Word ke PDF                        |
| KONTROL AKSESIBILITAS: [A- Ukuran Standar] [A+ Perbesar Teks] [Cetak Panduan]    |
+-----------------------------------------------------------------------------------+
| JUDUL: Cara Mengubah File Word Menjadi PDF Secara Gratis                         |
| METADATA: [Platform: Windows] [Waktu: 3 Menit] [Tingkat: Sangat Mudah]          |
| RINGKASAN: Penjelasan singkat fungsi panduan dalam kehidupan sehari-hari         |
+-----------------------------------------------------------------------------------+
| PROGRES SELESAI: [==== 50% ====] (2 dari 4 Langkah Selesai)                      |
+-----------------------------------------------------------------------------------+
| [ LANGKAH 1 ] Buka Dokumen Word dan Pilih Menu File                               |
| • Paragraf instruksi jelas (2-3 kalimat lugas)                                    |
| • Gambar Screenshot Beranotasi (Dapat diklik untuk Zoom Layar Penuh)              |
| • Kotak Tips: "Pintasan cepat tekan F12"                                         |
| • [V] Tandai Langkah Ini Selesai                                                  |
+-----------------------------------------------------------------------------------+
| [ LANGKAH 2 ] Pilih Opsi 'Save As' dan Format PDF                                 |
| • ...                                                                             |
+-----------------------------------------------------------------------------------+
| EVALUASI HASIL:                                                                   |
| "Apakah panduan ini berhasil menyelesaikan masalah Anda?"                         |
| [ Ya, Berhasil! ]          [ Belum Berhasil ]                                     |
|                             └─> Dropdown kendala & tombol: "Hubungkan ke Relawan" |
+-----------------------------------------------------------------------------------+
```

---

## 4. STRUKTUR MENU PORTAL RELAWAN DIGITAL

Akses khusus bagi relawan terverifikasi (`/relawan`):

1. **Dashboard Relawan**:
   * Statistik performa pribadi: Total tiket diselesaikan, rating rata-rata kepuasan dari pemohon.
   * Status ketersediaan aktif: Switch toggle *Siap Menerima Tiket* (`Aktif` / `Istirahat`).
2. **Antrean Tiket Terbuka (`/relawan/antrean-tiket`)**:
   * Tabel antrean tiket yang belum diambil oleh relawan lain (*FIFO queue*).
   * Filter berdasarkan kategori spesialisasi (misal: hanya tiket Dokumen atau tiket Android).
   * Tombol aksi: `[Klaim & Ambil Tiket]`.
3. **Tiket Aktif Saya (`/relawan/tiket-saya`)**:
   * Tiket yang sedang ditangani oleh relawan yang bersangkutan.
   * Ruang percakapan terpadu untuk menulis solusi, mengunggah screenshot panduan tambahan, atau menambahkan catatan rahasia antar-relawan (*Internal Note*).
4. **Riwayat Selesai (`/relawan/riwayat-selesai`)**:
   * Arsip tiket yang telah ditandai tuntas oleh pengguna beserta testimoni dan nilai bintang yang diberikan.
5. **Pengaturan Profil (`/relawan/profil`)**:
   * Pengaturan biodata singkat, nomor WhatsApp dinas/komunikasi, dan pilihan bidang keahlian.

---

## 5. STRUKTUR MENU DASHBOARD ADMINISTRATOR

Akses penuh kontrol operasional bagi tim admin sistem (`/admin`):

1. **Overview Dashboard**:
   * Kartu ringkasan metrik: Jumlah pembaca total, rasio keberhasilan panduan (*Helpfulness Rate*), total tiket relawan bulan ini, rata-rata waktu respons (*SLA*).
   * Grafik tren pengunjung harian dan grafik distribusi kendala per kategori.
2. **Manajemen Panduan (CMS)**:
   * Daftar seluruh panduan terbit dan draf.
   * Form pembuatan panduan: Judul, slug, ringkasan, platform, estimasi menit, penyusun urutan langkah dinamis, dan pengunggah gambar WebP otomatis.
3. **Manajemen Kategori**:
   * Pengaturan 5 kategori induk dan sub-kategori, pemilihan ikon Lucide resmi, dan pengaturan urutan tampil (*sort order*).
4. **Manajemen Relawan**:
   * Daftar akun relawan terdaftar, verifikasi calon relawan baru, pemantauan keaktifan, dan penilaian ulasan.
5. **Analitik Pencarian & Kebutuhan Konten**:
   * **Kata Kunci Paling Populer**: Istilah yang paling sering dicari masyarakat.
   * **Kata Kunci Tanpa Hasil (*Zero-Result Searches*)**: Rekomendasi otomatis untuk topik panduan baru yang mendesak ditulis oleh tim redaksi.
6. **Konfigurasi Sistem**:
   * Pengaturan kunci API WhatsApp Gateway, kredensial SMTP Email, batasan rate-limiting, dan kebijakan retensi pembersihan berkas lampiran otomatis.
