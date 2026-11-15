# SPESIFIKASI API (APPLICATION PROGRAMMING INTERFACE)
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Standar & Konvensi API](#1-standar--konvensi-api)
2. [Format Respons Standar](#2-format-respons-standar)
3. [Autentikasi & Otorisasi](#3-autentikasi--otorisasi)
4. [Katalog Permasalahan & Kategori](#4-katalog-permasalahan--kategori)
5. [Panduan Penyelesaian & Pencarian](#5-panduan-penyelesaian--pencarian)
6. [Penilaian & Umpan Balik](#6-penilaian--umpan-balik)
7. [Tanya Relawan Digital (Helpdesk Tiket)](#7-tanya-relawan-digital-helpdesk-tiket)
8. [Portal Relawan Digital](#8-portal-relawan-digital)
9. [Dashboard Admin & Analitik](#9-dashboard-admin--analitik)

---

## 1. STANDAR & KONVENSI API

* **Protokol**: HTTPS (TLS 1.3)
* **Format Data**: JSON (`Content-Type: application/json`, `Accept: application/json`)
* **Base URL**: `https://kliksolusi.id/api/v1` (Lokal: `http://localhost:8000/api/v1`)
* **Metode HTTP**:
  * `GET`: Mengambil data/koleksi data.
  * `POST`: Membuat entitas data baru.
  * `PUT` / `PATCH`: Memperbarui data yang ada.
  * `DELETE`: Menghapus data.
* **Rate Limiting**:
  * Publik / Tamu: 60 request / menit per IP.
  * Form Pembuatan Tiket: 3 request / jam per IP.
  * Relawan & Admin: 180 request / menit per akun terautentikasi.

---

## 2. FORMAT RESPONS STANDAR

### Respons Sukses (`200 OK`, `201 Created`)
```json
{
  "success": true,
  "message": "Data berhasil diambil.",
  "data": {},
  "meta": {
    "current_page": 1,
    "last_page": 5,
    "total": 48
  }
}
```

### Respons Gagal / Validasi Error (`422 Unprocessable Content`)
```json
{
  "success": false,
  "message": "Validasi formulir gagal.",
  "errors": {
    "guest_contact": [
      "Nomor WhatsApp atau alamat email wajib diisi."
    ],
    "problem_detail": [
      "Deskripsi kendala minimal berisi 20 karakter."
    ]
  }
}
```

---

## 3. AUTENTIKASI & OTORISASI

* **Mekanisme**: **Laravel Sanctum** Bearer Token.
* **Header Permintaan**:
  ```http
  Authorization: Bearer 1|qwert5678yuiop123456...
  ```
* **Akses Publik (Tanpa Token)**: Katalog kategori, pencarian panduan, membaca tutorial bertahap, kirim feedback, dan pengajuan tiket tamu.
* **Akses Terbatas**: Klaim dan penjawab tiket (Relawan), serta CMS dan dashboard analitik (Admin).

---

## 4. KATALOG PERMASALAHAN & KATEGORI

### 4.1 Mendapatkan Daftar Semua Kategori
* **Endpoint**: `GET /categories`
* **Akses**: Publik
* **Respons Sukses (`200 OK`)**:
```json
{
  "success": true,
  "message": "Daftar kategori berhasil diambil.",
  "data": [
    {
      "id": 1,
      "name": "Dokumen & Format",
      "slug": "dokumen-dan-format",
      "icon_name": "box",
      "description": "Panduan konversi PDF, Word, Excel, kompresi, dan scan dokumen.",
      "solutions_count": 14
    },
    {
      "id": 2,
      "name": "Perangkat & HP",
      "slug": "perangkat-dan-hp",
      "icon_name": "shield",
      "description": "Mengatasi memori penuh, baterai boros, dan pembersihan cache ponsel.",
      "solutions_count": 18
    }
  ]
}
```

---

## 5. PANDUAN PENYELESAIAN & PENCARIAN

### 5.1 Pencarian Solusi & Filter Kategori
* **Endpoint**: `GET /solutions`
* **Query Parameters**:
  * `q`: Kata kunci pencarian (misal: `pdf`, `memori penuh`).
  * `category`: Slug kategori (opsional).
  * `platform`: `android`, `ios`, `windows`, `general` (opsional).
  * `difficulty`: `easy`, `medium`, `advanced` (opsional).
* **Respons Sukses (`200 OK`)**:
```json
{
  "success": true,
  "message": "Pencarian solusi berhasil.",
  "data": [
    {
      "id": 12,
      "title": "Cara Mengubah File Word Menjadi PDF Secara Gratis",
      "slug": "cara-mengubah-file-word-menjadi-pdf-secara-gratis",
      "problem_summary": "Panduan ringkas menyimpan dokumen Word ke PDF tanpa aplikasi tambahan.",
      "platform": "windows",
      "difficulty": "easy",
      "estimated_minutes": 3,
      "view_count": 1420,
      "helpful_count": 310,
      "unhelpful_count": 8,
      "category": {
        "name": "Dokumen & Format",
        "slug": "dokumen-dan-format"
      }
    }
  ]
}
```

### 5.2 Membaca Panduan Langkah Demi Langkah
* **Endpoint**: `GET /solutions/{slug}`
* **Akses**: Publik
* **Respons Sukses (`200 OK`)**:
```json
{
  "success": true,
  "message": "Detail panduan berhasil dimuat.",
  "data": {
    "id": 12,
    "title": "Cara Mengubah File Word Menjadi PDF Secara Gratis",
    "slug": "cara-mengubah-file-word-menjadi-pdf-secara-gratis",
    "problem_summary": "Panduan ringkas menyimpan dokumen Word ke format PDF tanpa aplikasi tambahan.",
    "platform": "windows",
    "difficulty": "easy",
    "estimated_minutes": 3,
    "steps": [
      {
        "step_number": 1,
        "step_title": "Buka Dokumen Word dan Pilih Menu File",
        "instruction_body": "Buka file dokumen yang ingin Anda ubah di Microsoft Word, lalu klik menu 'File' di pojok kiri atas layar.",
        "illustration_url": "https://kliksolusi.id/storage/steps/word_to_pdf_step_1.webp",
        "tip_content": "Pintasan cepat: Anda juga bisa menekan tombol F12 pada keyboard untuk langsung membuka menu 'Save As'.",
        "warning_content": null
      },
      {
        "step_number": 2,
        "step_title": "Pilih Opsi 'Save As' dan Format PDF",
        "instruction_body": "Pilih menu 'Save As', lalu klik dropdown tipe berkas ('Save as type') dan pilih opsi 'PDF (*.pdf)'. Terakhir, tekan tombol Simpan.",
        "illustration_url": "https://kliksolusi.id/storage/steps/word_to_pdf_step_2.webp",
        "tip_content": null,
        "warning_content": "Pastikan nama file tidak mengandung karakter terlarang seperti tanda tanya atau garis miring."
      }
    ]
  }
}
```

---

## 6. PENILAIAN & UMPAN BALIK

### 6.1 Mengirimkan Penilaian Panduan
* **Endpoint**: `POST /solutions/{id}/feedback`
* **Akses**: Publik / Tamu
* **Payload Request**:
```json
{
  "session_token": "a1b2c3d4e5f6...",
  "is_helpful": true,
  "ease_rating": 5,
  "comment": "Sangat membantu, langsung berhasil dalam 2 menit!"
}
```
* **Payload Request (Jika Tidak Berhasil)**:
```json
{
  "session_token": "a1b2c3d4e5f6...",
  "is_helpful": false,
  "failure_reason": "Tampilan di HP saya berbeda dengan gambar",
  "comment": "Saya memakai ponsel Xiaomi, menunya tidak ada di pojok atas."
}
```
* **Respons Sukses (`201 Created`)**:
```json
{
  "success": true,
  "message": "Terima kasih atas penilaian Anda!"
}
```

---

## 7. TANYA RELAWAN DIGITAL (HELPDESK TIKET)

### 7.1 Mengajukan Pertanyaan Baru (Guest Ticketing)
* **Endpoint**: `POST /tickets`
* **Akses**: Publik
* **Payload Request (`multipart/form-data`)**:
```http
POST /api/v1/tickets
Content-Type: multipart/form-data

guest_name: Budi Santoso
guest_contact: 081234567890
contact_channel: whatsapp
category_id: 2
device_info: Samsung Galaxy A14 (Android 13)
subject: Memori HP Penuh Padahal Aplikasi Sedikit
problem_detail: Saya sudah menghapus video dan foto tetapi ruang penyimpanan tetap penuh 98%, bagaimana cara membersihkannya dengan aman?
attachment: [file binary: screenshot_error.jpg]
```
* **Respons Sukses (`201 Created`)**:
```json
{
  "success": true,
  "message": "Pertanyaan berhasil dikirim ke Relawan Digital.",
  "data": {
    "ticket_number": "KS-202611-0089",
    "tracking_url": "https://kliksolusi.id/lacak-tiket/KS-202611-0089",
    "status": "open",
    "estimated_response": "1 - 2 Jam"
  }
}
```

### 7.2 Melacak Status Tiket
* **Endpoint**: `GET /tickets/track/{ticket_number}`
* **Akses**: Publik
* **Respons Sukses (`200 OK`)**:
```json
{
  "success": true,
  "data": {
    "ticket_number": "KS-202611-0089",
    "subject": "Memori HP Penuh Padahal Aplikasi Sedikit",
    "device_info": "Samsung Galaxy A14 (Android 13)",
    "status": "answered",
    "volunteer_name": "Rian (Relawan Perangkat Mobile)",
    "replies": [
      {
        "sender": "Pengguna",
        "message": "Saya sudah menghapus video tetapi memori tetap penuh...",
        "created_at": "2026-11-15 14:00"
      },
      {
        "sender": "Relawan Digital (Rian)",
        "message": "Halo Pak Budi, pada Samsung Android 13 foto yang dihapus biasanya masuk ke folder 'Sampah' (Trash) selama 30 hari. Silakan buka aplikasi Galeri > Garis Tiga Kanan Bawah > Sampah > lalu klik Kosongkan.",
        "created_at": "2026-11-15 14:35"
      }
    ]
  }
}
```

---

## 8. PORTAL RELAWAN DIGITAL

### 8.1 Melihat Antrean Tiket Terbuka
* **Endpoint**: `GET /volunteer/tickets?status=open`
* **Header**: `Authorization: Bearer {token}`
* **Akses**: Role `volunteer` atau `admin`

### 8.2 Mengklaim Tiket
* **Endpoint**: `POST /volunteer/tickets/{id}/claim`
* **Header**: `Authorization: Bearer {token}`

### 8.3 Mengirim Jawaban Solusi ke Penanya
* **Endpoint**: `POST /volunteer/tickets/{id}/replies`
* **Payload Request**:
```json
{
  "message": "Halo, berikut langkah lanjutan yang dapat Anda coba...",
  "is_internal_note": false
}
```

---

## 9. DASHBOARD ADMIN & ANALITIK

### 9.1 Statistik Kinerja Platform
* **Endpoint**: `GET /admin/dashboard/stats`
* **Header**: `Authorization: Bearer {token}`
* **Akses**: Role `admin`
* **Respons Sukses (`200 OK`)**:
```json
{
  "success": true,
  "data": {
    "total_solutions": 142,
    "total_views": 84200,
    "overall_helpful_rate": "89.4%",
    "tickets": {
      "open": 8,
      "in_progress": 14,
      "resolved_today": 32,
      "average_response_time": "48 menit"
    },
    "trending_searches": [
      { "keyword": "kompres pdf", "count": 1420 },
      { "keyword": "google form", "count": 980 },
      { "keyword": "memori hp penuh", "count": 760 }
    ],
    "zero_result_keywords": [
      { "keyword": "cara aktifkan esim", "count": 48 },
      { "keyword": "tanda tangan pssb", "count": 31 }
    ]
  }
}
```
