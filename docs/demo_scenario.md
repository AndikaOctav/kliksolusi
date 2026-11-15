# SKENARIO DEMO & PENGUJIAN SISTEM (UAT)
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Tujuan Skenario Pengujian](#1-tujuan-skenario-pengujian)
2. [Profil Aktor Pengujian](#2-profil-aktor-pengujian)
3. [Skenario 1: Penelusuran & Penyelesaian Mandiri (Sukses)](#3-skenario-1-penelusuran--penyelesaian-mandiri-sukses)
4. [Skenario 2: Pemberian Penilaian & Umpan Balik Panduan](#4-skenario-2-pemberian-penilaian--umpan-balik-panduan)
5. [Skenario 3: Penanganan Kegagalan & Pengajuan Tiket Relawan](#5-skenario-3-penanganan-kegagalan--pengajuan-tiket-relawan)
6. [Skenario 4: Relawan Mengklaim & Menjawab Tiket Bantuan](#6-skenario-4-relawan-mengklaim--menjawab-tiket-bantuan)
7. [Skenario 5: Pengguna Memvalidasi Solusi & Menutup Tiket](#7-skenario-5-pengguna-memvalidasi-solusi--menutup-tiket)
8. [Skenario 6: Administrator Memantau Dashboard & Tren Kata Kunci](#8-skenario-6-administrator-memantau-dashboard--tren-kata-kunci)

---

## 1. TUJUAN SKENARIO PENGUJIAN

Dokumen skenario ini dirancang sebagai panduan simulasi demonstrasi langsung (*live demo*) dan pengujian penerimaan pengguna (*User Acceptance Testing / UAT*). Skenario ini membuktikan bahwa seluruh alur yang dijabarkan dalam laporan KlikSolusi telah berfungsi dengan baik secara *end-to-end*, mulai dari pencarian panduan, pembacaan tutorial visual, interaksi bantuan relawan, hingga monitoring analitik di dashboard admin.

---

## 2. PROFIL AKTOR PENGUJIAN

| Aktor | Nama Karakter | Peran dalam Demo |
| :--- | :--- | :--- |
| **Pengguna 1** | **Siti Aminah (20)** | Mahasiswi yang butuh mengubah dokumen tugas kuliah Word ke PDF secara cepat. |
| **Pengguna 2** | **Pak Joko (56)** | Warga senior yang mengalami memori HP Samsung penuh dan memerlukan bantuan lanjutan. |
| **Relawan** | **Rian Pratama** | Relawan digital terverifikasi bidang spesialisasi perangkat mobile Android. |
| **Admin** | **Bambang** | Pengelola sistem yang memantau performa platform dan artikel panduan. |

---

## 3. SKENARIO 1: PENELUSURAN & PENYELESAIAN MANDIRI (SUKSES)

* **Tujuan**: Menguji efektivitas mesin pencari cerdas dan kemudahan tutorial bertahap.
* **Langkah Uji**:
  1. Siti membuka browser dan mengakses `https://kliksolusi.id`.
  2. Pada bilah pencarian di bagian atas, Siti mengetik kata kunci: `"ubah word ke pdf"`.
  3. Sistem secara otomatis menampilkan saran artikel terkait: *"Cara Mengubah File Word Menjadi PDF Secara Gratis"*.
  4. Siti mengklik judul artikel tersebut.
  5. Halaman menampilkan panduan terurut:
     * **Langkah 1**: Buka file di Microsoft Word dan klik menu *File*.
     * **Langkah 2**: Klik opsi *Save As* dan ganti format menjadi *PDF (*.pdf)*.
  6. Siti mencentang checklist langkah pada layar sambil mempraktikkannya di laptop.
  7. Dalam 2 menit, dokumen tugas kuliah Siti berhasil terkonversi menjadi format PDF.
* **Hasil yang Diharapkan**: Pengguna berhasil menyelesaikan kendalanya sendiri tanpa perlu meminta bantuan orang lain (*Self-resolution* berhasil).

---

## 4. SKENARIO 2: PEMBERIAN PENILAIAN & UMPAN BALIK PANDUAN

* **Tujuan**: Menguji fitur penangkapan kepuasan pengguna atas panduan yang dibaca.
* **Langkah Uji**:
  1. Setelah dokumen berhasil menjadi PDF, Siti menggulir layar ke bagian bawah panduan.
  2. Muncul pertanyaan evaluasi: *"Apakah panduan ini berhasil menyelesaikan masalah Anda?"*.
  3. Siti mengklik tombol hijau: `[Ya, Berhasil!]`.
  4. Muncul dialog rating bintang: Siti memberikan nilai 5 bintang dan mengetikkan ulasan: *"Sangat jelas dan langsung jadi!"*.
  5. Siti menekan tombol `Kirim Penilaian`.
* **Hasil yang Diharapkan**: Jumlah `helpful_count` pada artikel bertambah 1 dan masukan tersimpan di tabel `solution_feedbacks`.

---

## 5. SKENARIO 3: PENANGANAN KEGAGALAN & PENGAJUAN TIKET RELAWAN

* **Tujuan**: Menguji alur ketika pengguna belum berhasil menyelesaikan masalahnya melalui tutorial mandiri.
* **Langkah Uji**:
  1. Pak Joko membuka panduan *"Cara Mengatasi Memori HP Penuh"*.
  2. Pak Joko mengikuti langkah menghapus cache, namun memori HP miliknya tetap menunjukkan peringatan 98% penuh karena file media tersembunyi.
  3. Pada widget penilaian di akhir halaman, Pak Joko mengklik: `[Belum Berhasil]`.
  4. Muncul pilihan alasan: Pak Joko memilih *"Tampilan di HP saya berbeda"*.
  5. Sistem langsung menampilkan tombol tawaran: `[Tanyakan Kendala Ini ke Relawan Digital]`.
  6. Pak Joko mengklik tombol tersebut; formulir tiket otomatis terisi judul rujukan panduan.
  7. Pak Joko melengkapi data:
     * **Nama**: Joko Subagyo
     * **Kontak**: 081298765432 (Kanal: WhatsApp)
     * **Perangkat**: Samsung Galaxy A14 (Android 13)
     * **Deskripsi**: Foto galeri sudah dihapus tapi memori tetap merah penuh.
  8. Pak Joko mengklik `[Kirim Pertanyaan]`.
* **Hasil yang Diharapkan**: Sistem menyimpan data ke tabel `volunteer_tickets` dan menerbitkan kode tiket publik: `#KS-202611-0089`.

---

## 6. SKENARIO 4: RELAWAN MENGKLAIM & MENJAWAB TIKET BANTUAN

* **Tujuan**: Menguji alur kerja portal relawan dalam merespons pertanyaan masyarakat.
* **Langkah Uji**:
  1. Rian (Relawan) login ke portal `/relawan`.
  2. Rian membuka menu `Antrean Tiket Terbuka`.
  3. Tiket `#KS-202611-0089` milik Pak Joko tampil paling atas dengan status `Open`.
  4. Rian mengklik tombol `[Klaim Tiket]`. Status tiket berubah menjadi `Claimed`.
  5. Rian membaca kendala dan mengetikkan balasan empatik:
     > *"Halo Pak Joko, pada ponsel Samsung Android 13, foto atau video yang dihapus biasanya belum benar-benar hilang, melainkan tersimpan di folder 'Sampah' (Trash) selama 30 hari. Silakan buka aplikasi Galeri > klik ikon garis tiga di pojok kanan bawah > pilih menu 'Sampah' > lalu klik tombol 'Kosongkan'. Memori HP Bapak akan langsung lega."*
  6. Rian menekan tombol `Kirim Jawaban Solusi`.
* **Hasil yang Diharapkan**: Jawaban tersimpan di `ticket_replies`, status berubah menjadi `Answered`, dan sistem otomatis menembak API notifikasi WhatsApp ke nomor Pak Joko.

---

## 7. SKENARIO 5: PENGGUNA MEMVALIDASI SOLUSI & MENUTUP TIKET

* **Tujuan**: Menguji konfirmasi akhir penyelesaian kendala dari sisi pemohon bantuan.
* **Langkah Uji**:
  1. Pak Joko menerima notifikasi pesan WhatsApp yang memuat tautan pelacakan tiket.
  2. Pak Joko mengklik tautan tersebut dan membaca balasan instruksi dari Relawan Rian.
  3. Pak Joko membuka Galeri ponselnya, mengosongkan folder 'Sampah', dan melihat memori HP-nya kembali normal (ruang kosong bertambah 18 GB).
  4. Pada halaman pelacakan, Pak Joko mengklik tombol hijau: `[Masalah Saya Sudah Selesai]`.
  5. Pak Joko memberikan apresiasi bintang 5 kepada Relawan Rian dengan komentar: *"Terima kasih banyak Mas Rian, sangat sabar dan manjur!"*.
* **Hasil yang Diharapkan**: Status tiket berubah menjadi `Resolved`, nilai rating relawan diperbarui, dan tiket masuk ke arsip selesai.

---

## 8. SKENARIO 6: ADMINISTRATOR MEMANTAU DASHBOARD & TREN KATA KUNCI

* **Tujuan**: Menguji pemanfaatan dashboard admin dalam mengevaluasi metrik kinerja layanan.
* **Langkah Uji**:
  1. Administrator Bambang masuk ke halaman `/admin/dashboard`.
  2. Bambang memantau metrik ringkasan:
     * Rasio keberhasilan panduan (*Helpfulness Rate*): Terbaca `89.4%`.
     * Rata-rata waktu respons relawan (*SLA*): Terbaca `38 menit`.
  3. Bambang membuka tab `Analitik Pencarian`:
     * Melihat kata kunci paling sering dicari: *"kompres pdf"*, *"google drive"*, *"memori penuh"*.
     * Memeriksa kata kunci tanpa hasil (*Zero-Result Searches*): Muncul kata kunci *"cara perpanjang sim online"* sebanyak 64 kali pencarian.
  4. Berdasarkan temuan analitik tersebut, Bambang segera menugaskan tim redaksi untuk menyusun draf panduan baru seputar perpanjangan SIM online di kategori Layanan Publik.
* **Hasil yang Diharapkan**: Dashboard admin memberikan wawasan berbasis data yang nyata untuk terus memperkaya materi panduan KlikSolusi sesuai kebutuhan masyarakat luas.
