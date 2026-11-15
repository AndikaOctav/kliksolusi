# PERANCANGAN SISTEM
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Arsitektur Sistem Terpadu](#1-arsitektur-sistem-terpadu)
2. [Alur Penggunaan Platform](#2-alur-penggunaan-platform)
3. [Diagram Alir Pengguna (User Flowchart)](#3-diagram-alir-pengguna-user-flowchart)
4. [Diagram Use Case (Use Case Diagram)](#4-diagram-use-case-use-case-diagram)
5. [Activity Diagram](#5-activity-diagram)
   - [5.1 Aktivitas 1: Pencarian Panduan dan Evaluasi Solusi](#51-aktivitas-1-pencarian-panduan-dan-evaluasi-solusi)
   - [5.2 Aktivitas 2: Pengajuan dan Penyelesaian Tiket Relawan](#52-aktivitas-2-pengajuan-dan-penyelesaian-tiket-relawan)
6. [Sequence Diagram](#6-sequence-diagram)
7. [Prinsip Desain Antarmuka (UI/UX) & Wireframe](#7-prinsip-desain-antarmuka-uiux--wireframe)

---

## 1. ARSITEKTUR SISTEM TERPADU

KlikSolusi dirancang menggunakan arsitektur **Berbasis Web Responsif** (*Responsive Web-Based Architecture*) yang mengintegrasikan antarmuka web modern dengan backend **Laravel 11 / 12** dan basis data relasional **MySQL**. Sistem dapat diakses langsung oleh masyarakat melalui peramban (*web browser*) pada berbagai perangkat, baik komputer/laptop (desktop 1440×900) maupun smartphone (mobile browser):

```
+-----------------------------------------------------------------------------------+
|                                 CLIENT INTERFACE                                  |
|   +------------------------------------+  +-----------------------------------+   |
|   |    Desktop Web Browser (1440x900)  |  |    Mobile Web Browser (360px+)    |   |
|   |    (Chrome, Edge, Firefox, Safari) |  |    (Chrome Mobile, Safari iOS)    |   |
|   +------------------------------------+  +-----------------------------------+   |
+------------------------------------------+----------------------------------------+
                                           | HTTPS / HTML5 & JSON API
+------------------------------------------v----------------------------------------+
|                                BACKEND APPLICATION                                |
|   +---------------------------------------------------------------------------+   |
|   |                             LARAVEL 11 / 12                               |   |
|   |  - Web & API Routing Layer (Blade Engine + REST API Endpoints)            |   |
|   |  - Controller Layer (Catalog, Solution, Volunteer Ticket, Admin)          |   |
|   |  - Business Service & Validation Logic (Form Requests & Rules)            |   |
|   |  - Eloquent ORM Data Mapping Layer                                        |   |
|   +---------------------------------------------------------------------------+   |
+------------------------------------------+----------------------------------------+
                                           | SQL / Storage Driver
+------------------------------------------v----------------------------------------+
|                              DATA & STORAGE SERVICES                              |
|   +---------------------+   +---------------------+   +-----------------------+   |
|   |   MySQL 8.0 /       |   |    Local / Cloud    |   |     WhatsApp API /    |   |
|   |   InnoDB Database   |   |   Storage (Images)  |   |     SMTP Mailer       |   |
|   +---------------------+   +---------------------+   +-----------------------+   |
+-----------------------------------------------------------------------------------+
```

---

## 2. ALUR PENGGUNAAN PLATFORM

Secara umum, alur penggunaan platform KlikSolusi mengikuti 6 tahapan utama:
1. **Membuka Platform**: Pengguna mengakses situs web KlikSolusi melalui peramban (*browser*) ponsel maupun komputer.
2. **Memilih Kategori atau Mencari**: Pengguna memilih kategori permasalahan yang sesuai (Dokumen, Perangkat, Komunikasi, Penyimpanan, Layanan Publik) atau mengetikkan kata kunci kendala pada kolom pencarian.
3. **Melihat Rekomendasi Solusi**: Sistem menampilkan daftar artikel panduan penyelesaian yang relevan dengan kebutuhan pengguna.
4. **Membaca & Mempraktikkan Panduan**: Pengguna membaca panduan bertahap dan mengikuti setiap langkah instruksi yang dilengkapi gambar visual pendukung.
5. **Memberikan Penilaian**: Pengguna memberikan umpan balik penilaian keberhasilan (`Ya, Berhasil` atau `Belum Berhasil`).
6. **Bantuan Relawan Digital**: Apabila permasalahan belum terselesaikan secara mandiri, pengguna dapat langsung mengajukan pertanyaan kendala kepada relawan digital.

---

## 3. DIAGRAM ALIR PENGGUNA (USER FLOWCHART)

```mermaid
flowchart TD
    A["Mulai: Pengguna Membuka Web KlikSolusi"] --> B{"Metode Penelusuran?"}
    
    B -->|"Pencarian Kata Kunci"| C["Ketik Masalah di Search Bar<br/>(Contoh: 'Kompres PDF')"]
    B -->|"Pilih Kategori"| D["Pilih 1 dari 5 Kategori<br/>(Dokumen, HP, Cloud, dll.)"]
    
    C --> E["Sistem Menampilkan Daftar Panduan Terkait"]
    D --> E
    
    E --> F["Pengguna Membuka Halaman Panduan Bertahap"]
    F --> G["Membaca & Mempraktikkan Langkah 1..N Bersama Ilustrasi Visual"]
    
    G --> H{"Apakah Masalah Berhasil Teratasi?"}
    
    H -->|"Ya, Berhasil!"| I["Klik 'Ya, Berhasil' & Beri Rating Bintang 1-5"]
    I --> J["Selesai: Pengguna Mandiri & Literasi Meningkat"]
    
    H -->|"Belum Berhasil"| K["Klik 'Belum Berhasil' & Pilih Kategori Kendala"]
    K --> L["Sistem Membuka Form 'Tanya Relawan Digital'<br/>(Form terisi otomatis judul panduan)"]
    L --> M["Kirim Tiket & Dapatkan Kode Pelacakan #KS-YYYYMM-XXXX"]
    M --> N["Relawan Mengklaim & Membalas Solusi"]
    N --> O["Pengguna Mendapat Notifikasi Balasan via WA/Email"]
    O --> P["Pengguna Membaca Jawaban Relawan & Validasi Selesai"]
    P --> J
```

---

## 4. DIAGRAM USE CASE (USE CASE DIAGRAM)

Terdapat 3 aktor yang berinteraksi dengan sistem KlikSolusi:

```mermaid
flowchart LR
    subgraph Aktor
        U["Pengguna Umum / Masyarakat"]
        V["Relawan Digital"]
        A["Administrator Sistem"]
    end

    subgraph Modul_KlikSolusi ["Sistem Informasi KlikSolusi"]
        UC1["Mencari Panduan via Kata Kunci"]
        UC2["Melihat Katalog Permasalahan"]
        UC3["Membaca Panduan Langkah Demi Langkah"]
        UC4["Memberikan Penilaian & Feedback"]
        UC5["Mengajukan Tiket Tanya Relawan"]
        UC6["Melacak Status Tiket Bantuan"]
        
        UC7["Mengklaim & Menjawab Tiket"]
        UC8["Mengelola Profil Keahlian Relawan"]
        
        UC9["Mengelola Konten Panduan (CMS)"]
        UC10["Mengelola Kategori Permasalahan"]
        UC11["Memantau Dashboard & Tren Pencarian"]
        UC12["Mengelola Akun Pengguna & Relawan"]
    end

    U --> UC1
    U --> UC2
    U --> UC3
    U --> UC4
    U --> UC5
    U --> UC6

    V --> UC7
    V --> UC8
    V --> UC3

    A --> UC9
    A --> UC10
    A --> UC11
    A --> UC12
```

---

## 5. ACTIVITY DIAGRAM

### 5.1 Aktivitas 1: Pencarian Panduan dan Evaluasi Solusi

```mermaid
flowchart TD
    node1((Start)) --> node2["Pengguna Masuk Halaman Beranda"]
    node2 --> node3["Input Kata Kunci Pencarian / Pilih Kategori"]
    node3 --> node4["Sistem Memproses Kueri Pencarian Full-Text"]
    
    node4 --> node5{"Hasil Ditemukan?"}
    node5 -->|"Tidak"| node6["Catat Kata Kunci ke search_logs"]
    node6 --> node7["Tampilkan Rekomendasi Terkait & Tombol Tanya Relawan"]
    node7 --> node11["Form Tanya Relawan Digital"]
    
    node5 -->|"Ya"| node8["Tampilkan Daftar Artikel Panduan"]
    node8 --> node9["Pengguna Memilih Artikel & Mengikuti Langkah Bertahap"]
    node9 --> node10{"Masalah Teratasi?"}
    
    node10 -->|"Ya"| node12["Kirim Voting Positif & Rating Bintang"]
    node12 --> node13((End))
    
    node10 -->|"Tidak"| node11
    node11 --> node13
```

### 5.2 Aktivitas 2: Pengajuan dan Penyelesaian Tiket Relawan

```mermaid
flowchart TD
    startNode((Start)) --> fillForm["Pengguna Mengisi Form: Nama, Kontak, Perangkat, Kendala"]
    fillForm --> submit["Sistem Menyimpan Tiket & Generate Kode #KS-YYYYMM-XXXX"]
    submit --> notifSubmit["Pengguna Menerima Bukti Pelacakan Tiket"]
    
    submit --> volunteerQueue["Tiket Muncul di Antrean Relawan (Status: Open)"]
    volunteerQueue --> claimTicket["Relawan Memilih & Mengklaim Tiket (Status: Claimed)"]
    claimTicket --> writeReply["Relawan Mengetik Solusi Bantuan & Mengirim Jawaban"]
    
    writeReply --> sendNotif["Sistem Mengirim Notifikasi WA/Email ke Pengguna"]
    sendNotif --> readReply["Pengguna Membuka Halaman Lacak Tiket & Membaca Solusi"]
    readReply --> confirm{"Apakah Masalah Sudah Beres?"}
    
    confirm -->|"Ya"| closeTicket["Pengguna Klik 'Tandai Selesai' & Beri Rating Relawan"]
    closeTicket --> finish((End))
    
    confirm -->|"Belum"| replyBack["Pengguna Mengirim Pertanyaan Lanjutan"]
    replyBack --> writeReply
```

---

## 6. SEQUENCE DIAGRAM

Interaksi antar komponen saat pengguna mengajukan pertanyaan ke Relawan Digital:

```mermaid
sequenceDiagram
    autonumber
    actor Pengguna as Pengguna (Guest)
    participant Web as Web / Mobile UI
    participant API as API Controller
    participant DB as MySQL Database
    participant WA as WhatsApp / Mail Service
    actor Relawan as Relawan Digital

    Pengguna->>Web: Isi form kendala & klik "Kirim Pertanyaan"
    Web->>API: POST /api/v1/tickets (Payload data kendala)
    API->>API: Validasi input & generate ticket_number (KS-...)
    API->>DB: INSERT INTO volunteer_tickets
    DB-->>API: Return ticket_id & ticket_number
    API-->>Web: 201 Created (ticket_number, tracking_url)
    Web-->>Pengguna: Tampilkan kode tiket #KS-202611-0001

    Relawan->>Web: Buka Antrean Tiket Relawan
    Web->>API: GET /api/v1/volunteer/tickets (status=open)
    API->>DB: SELECT * FROM volunteer_tickets WHERE status='open'
    DB-->>API: Return dataset tiket terbuka
    API-->>Web: Tampilkan daftar tiket
    Relawan->>Web: Klik "Ambil & Jawab Tiket"
    Web->>API: POST /api/v1/tickets/{id}/replies (Pesan Solusi)
    API->>DB: INSERT INTO ticket_replies & UPDATE status='answered'
    DB-->>API: OK
    API->>WA: Kirim notifikasi pesan ke kontak penanya
    WA-->>Pengguna: Pesan WhatsApp: "Relawan telah menjawab kendala Anda"
```

---

## 7. PRINSIP DESAIN ANTARMUKA (UI/UX) & WIREFRAME

Antarmuka web KlikSolusi menerapkan standar **Anti-Slop UI & Netral**:

1. **Kanvas Bersih & Terang**:
   * Warna latar belakang: Netral `#F8F9FA` (canvas) dan `#FFFFFF` (card surfaces).
   * Border kontainer: Halus `#E2E8F0` dengan radius sudut `12px - 14px`.
2. **Zero-Emoji & Ikon Vektor Lucide**:
   * Tidak menggunakan emoji teks (`✨`, `🔥`, `🚀`).
   * Seluruh ikon menggunakan vektor resmi Lucide (`box`, `shield`, `folder`, `zap`, `arrowRight`, `check`).
3. **Tipografi Ramah Pemula & Lansia**:
   * Font utama: `Plus Jakarta Sans` dengan hierarki kontras tinggi:
     * Judul Layar: Bold 28–32px (`#1E1E2D`).
     * Teks Utama: Medium 14–15px (`#1E1E2D` / `#475569`).
     * Label Muted: Regular 12px (`#8F92A1`).
4. **Layout Wireframe Desktop (1440 × 900)**:
   * **Header Bar**: Tinggi 72px, logo kontras, navigasi kategori, dan tombol bantuan.
   * **Hero Section**: Bilah pencarian instan dengan status indikator aktif dan kartu rangkuman statistik.
   * **Pilar Layanan**: Grid 3 kartu terstruktur dengan tag pill informatif.
   * **Footer**: Tautan kebijakan privasi dan pemantauan status operasional server.
