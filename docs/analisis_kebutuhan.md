# ANALISIS KEBUTUHAN SISTEM
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Deskripsi Platform](#1-deskripsi-platform)
2. [Latar Belakang](#2-latar-belakang)
3. [Tujuan Pengembangan](#3-tujuan-pengembangan)
4. [Target Pengguna & Karakteristik](#4-target-pengguna--karakteristik)
5. [Analisis Kebutuhan Fungsional (Functional Requirements)](#5-analisis-kebutuhan-fungsional-functional-requirements)
6. [Analisis Kebutuhan Non-Fungsional (Non-Functional Requirements)](#6-analisis-kebutuhan-non-fungsional-non-functional-requirements)
7. [Batasan Sistem (System Constraints)](#7-batasan-sistem-system-constraints)

---

## 1. DESKRIPSI PLATFORM

**KlikSolusi** merupakan platform berbasis web yang dirancang untuk membantu masyarakat mengatasi berbagai kesulitan dalam menggunakan teknologi digital sehari-hari. Platform ini menyediakan informasi dan panduan praktis untuk menyelesaikan permasalahan teknologi, seperti:
* Mengubah dokumen menjadi format PDF.
* Mengirim file berukuran besar melalui email.
* Mengelola dan membersihkan penyimpanan memori ponsel (HP).
* Menggunakan layanan cloud seperti Google Drive.
* Membuat formulir online menggunakan Google Forms.
* Mengakses berbagai layanan publik digital pemerintah.

Melalui KlikSolusi, pengguna dapat mencari permasalahan berdasarkan kategori atau kata kunci, kemudian mengikuti panduan penyelesaian secara bertahap yang dilengkapi dengan gambar atau ilustrasi agar lebih mudah dipahami. Apabila pengguna belum berhasil menyelesaikan permasalahannya secara mandiri, tersedia fitur pengajuan pertanyaan kepada **Relawan Digital**.

---

## 2. LATAR BELAKANG

Perkembangan teknologi digital telah mempermudah berbagai aktivitas masyarakat, mulai dari komunikasi, pendidikan, pekerjaan, hingga pelayanan publik. Namun, tidak semua masyarakat memiliki kemampuan dan pemahaman yang memadai dalam menggunakan teknologi tersebut. Sebagian pengguna masih mengalami kesulitan dalam melakukan aktivitas digital sederhana, seperti mengelola dokumen, menggunakan aplikasi, mengirim file, maupun mengakses layanan berbasis online.

Informasi mengenai cara mengatasi permasalahan tersebut sebenarnya tersedia di internet, tetapi sering kali tersebar di berbagai platform dan tidak disajikan secara terstruktur. Banyak panduan yang beredar menggunakan istilah teknis yang rumit (*jargon-heavy*), dipenuhi iklan yang mengganggu pemula, atau dalam bentuk video panjang yang menghabiskan kuota. Kondisi ini membuat pengguna kesulitan menemukan panduan yang sesuai dengan permasalahan mereka. 

Oleh karena itu, **KlikSolusi** dikembangkan sebagai pusat panduan digital yang menyediakan informasi secara terstruktur, praktis, dan mudah diakses. Platform ini diharapkan dapat membantu masyarakat menyelesaikan kendala teknologi secara mandiri sekaligus meningkatkan kecakapan digital nasional.

---

## 3. TUJUAN PENGEMBANGAN

Pengembangan platform KlikSolusi memiliki tujuan-tujuan strategis sebagai berikut:
1. **Menyediakan pusat informasi dan panduan** untuk mengatasi permasalahan teknologi digital sehari-hari secara terpadu.
2. **Mempermudah masyarakat dalam menemukan solusi** melalui pencarian berdasarkan kategori terstruktur dan kata kunci sehari-hari.
3. **Menyajikan panduan penyelesaian secara bertahap** dengan bahasa sederhana, instruksi to-the-point, dan visual yang mudah dipahami.
4. **Menyediakan sarana bantuan melalui relawan digital** bagi pengguna yang masih mengalami kesulitan setelah mencoba panduan mandiri.
5. **Meningkatkan kecakapan dan kemandirian masyarakat** dalam memanfaatkan teknologi digital secara percaya diri.

---

## 4. TARGET PENGGUNA & KARAKTERISTIK

Target pengguna KlikSolusi adalah masyarakat umum yang membutuhkan bantuan dalam menggunakan teknologi digital, khususnya terbagi ke dalam 4 kelompok:

| No | Kelompok Pengguna | Karakteristik & Kebutuhan Utama |
| :---: | :--- | :--- |
| **1** | **Masyarakat dengan Keterbatasan Digital** | Warga awam yang jarang mengoperasikan perangkat teknologi canggih. Membutuhkan panduan visual yang jelas, tombol besar, serta istilah non-teknis. |
| **2** | **Pelajar dan Mahasiswa** | Memerlukan panduan cepat untuk aktivitas akademik, seperti konversi format dokumen tugas, kompresi berkas, upload ke portal kampus, dan kolaborasi cloud. |
| **3** | **Pekerja & Pelaku Usaha Mikro (UMKM)** | Membutuhkan solusi praktis penunjang pekerjaan harian (misal: rekap pesanan Google Forms, kelola memori WA bisnis, kirim tagihan email). |
| **4** | **Orang Dewasa dan Lansia (Senior Citizens)** | Membutuhkan pendampingan sabar, font teks yang dapat diperbesar, kontras visual tinggi, dan jalur konsultasi ramah ke relawan digital. |

---

## 5. ANALISIS KEBUTUHAN FUNGSIONAL (FUNCTIONAL REQUIREMENTS)

Kebutuhan fungsional dikelompokkan berdasarkan 7 fitur utama KlikSolusi:

### 5.1 Fitur 1: Katalog Permasalahan
* **FR-01.1**: Sistem harus menampilkan katalog permasalahan yang dikelompokkan ke dalam 5 kategori inti:
  1. *Dokumen*: Konversi PDF, kompresi, edit Word/Excel, scan berkas.
  2. *Perangkat*: Memori HP penuh, baterai boros, pembersihan cache, pengaturan notifikasi.
  3. *Komunikasi*: Mengirim file via email, pencadangan WhatsApp, kelola kontak.
  4. *Penyimpanan*: Penggunaan Google Drive, berbagi tautan folder, sinkronisasi file.
  5. *Layanan Digital*: Panduan portal BPJS, M-Paspor, Dukcapil, pajak online.
* **FR-01.2**: Sistem harus menampilkan metadata panduan (tag sistem operasi: Android/iOS/Windows, tingkat kesulitan, estimasi waktu).

### 5.2 Fitur 2: Panduan Penyelesaian Bertahap
* **FR-02.1**: Sistem harus menyajikan instruksi secara terurut langkah demi langkah (Langkah 1, 2, dst.).
* **FR-02.2**: Setiap langkah wajib memiliki judul aksi ringkas, penjelasan lugas 2–3 kalimat, dan kotak tips/peringatan.
* **FR-02.3**: Sistem menyediakan fitur checklist mandiri di browser agar pengguna dapat menandai langkah yang telah selesai dijalankan.

### 5.3 Fitur 3: Pencarian Solusi
* **FR-03.1**: Sistem harus menyediakan kolom pencarian di bagian atas halaman utama.
* **FR-03.2**: Sistem mendukung pencarian instan (*auto-complete*) dan toleran terhadap kesalahan ketik (*fuzzy search*).
* **FR-03.3**: Sistem mencatat kata kunci pencarian yang tidak menghasilkan solusi (*zero-result logging*) ke database untuk analisis kebutuhan konten baru.

### 5.4 Fitur 4: Tutorial Visual
* **FR-04.1**: Sistem menampilkan gambar/tangkapan layar beranotasi pada setiap langkah instruksi.
* **FR-04.2**: Sistem mendukung fitur klik untuk memperbesar gambar (*Lightbox Preview*) dengan kemampuan zoom di smartphone.
* **FR-04.3**: Format gambar wajib teroptimasi (WebP/kompresi) agar ringan dibuka pada koneksi internet lambat.

### 5.5 Fitur 5: Tanya Relawan Digital
* **FR-05.1**: Pengguna dapat mengajukan pertanyaan kendala tanpa perlu registrasi rumit (cukup Nama, Kontak WA/Email, Perangkat, dan Penjelasan).
* **FR-05.2**: Sistem menerbitkan Kode Unik Tiket publik format `#KS-YYYYMM-XXXX` untuk melacak status jawaban.
* **FR-05.3**: Portal Relawan memungkinkan relawan terverifikasi mengklaim (*claim*) tiket dan mengirimkan balasan panduan.
* **FR-05.4**: Sistem mengirimkan notifikasi jawaban kepada pengguna melalui kanal WhatsApp atau Email yang dipilih.

### 5.6 Fitur 6: Penilaian dan Umpan Balik
* **FR-06.1**: Sistem menyediakan tombol voting keberhasilan di akhir setiap panduan: `[Ya, Berhasil]` dan `[Belum Berhasil]`.
* **FR-06.2**: Pengguna yang memilih `[Belum Berhasil]` diberikan opsi alasan dan langsung diarahkan membuka form Tanya Relawan Digital dengan data panduan terisi otomatis.
* **FR-06.3**: Sistem menyediakan penilaian kemudahan panduan dengan skala 1 sampai 5 bintang.

### 5.7 Fitur 7: Dashboard Admin
* **FR-07.1**: Sistem menampilkan statistik jumlah pembaca panduan, panduan terpopuler, dan rasio keberhasilan solusi.
* **FR-07.2**: Sistem menyajikan monitoring tiket relawan (waktu respons rata-rata, tiket terselesaikan, performa relawan).
* **FR-07.3**: Sistem menyediakan modul CMS untuk menambah, mengedit, dan mempublikasikan panduan bertahap.

---

## 6. ANALISIS KEBUTUHAN NON-FUNGSIONAL (NON-FUNCTIONAL REQUIREMENTS)

| Parameter | Spesifikasi Standar |
| :--- | :--- |
| **Kinerja (Performance)** | Waktu muat halaman pertama $\le 2.0\text{ detik}$, pencarian kueri database $\le 100\text{ ms}$, kompresi aset otomatis. |
| **Aksesibilitas (Usability)** | Memenuhi standar **WCAG 2.1 Level AA**: Kontras warna teks $\ge 4.5:1$, font dapat diperbesar, ukuran tombol sentuh $\ge 44\times 44\text{ px}$. |
| **Kehandalan (Reliability)** | Ketersediaan sistem (*Uptime*) target 99.9%, penanganan fallback ketika relawan offline. |
| **Keamanan (Security)** | Enkripsi HTTPS SSL/TLS, proteksi CSRF pada semua form, sanitasi input terhadap XSS, dan pembatasan laju pengiriman (*Rate Limiting*). |
| **Privasi Data** | Kepatuhan terhadap **UU Perlindungan Data Pribadi (UU PDP No. 27/2022)**: Nomor kontak tamu terenkripsi, alamat IP di-hash anonim, berkas bukti tiket dihapus berkala setelah selesai. |

---

## 7. BATASAN SISTEM (SYSTEM CONSTRAINTS)

1. Sistem difokuskan untuk menyelesaikan kendala operasional perangkat lunak dan layanan digital sehari-hari; sistem tidak menangani perbaikan fisik perangkat keras (*hardware* yang rusak komponen fisiknya).
2. Konsultasi relawan bersifat edukasi dan panduan; relawan dilarang meminta kredensial sensitif seperti PIN perbankan, OTP, atau kata sandi pribadi pengguna.
3. Seluruh panduan dan antarmuka disajikan dalam Bahasa Indonesia yang santun dan mudah dipahami oleh masyarakat umum.
