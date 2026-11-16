# DOKUMENTASI SISTEM INFORMASI KLIK SOLUSI
## Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

Dokumentasi resmi platform **KlikSolusi** berbasis web telah disusun secara modular di dalam folder [docs/](file:///c:/kliksolusi/docs/) agar terfokus, rapi, dan mudah dibaca:

---

### Daftar Berkas Dokumentasi (Berbasis Web):

1. 📋 **[docs/analisis_kebutuhan.md](file:///c:/kliksolusi/docs/analisis_kebutuhan.md)**  
   *Deskripsi Platform, Latar Belakang, 5 Tujuan Pengembangan, Analisis 4 Target Pengguna (Masyarakat awam, Pelajar/Mahasiswa, Pekerja/UMKM, Lansia), Analisis 7 Kebutuhan Fungsional (Katalog, Panduan Bertahap, Pencarian, Visual, Tanya Relawan, Feedback, Admin), Kebutuhan Non-Fungsional (WCAG 2.1 AA, UU PDP No. 27/2022), dan Batasan Sistem.*

2. 🗺️ **[docs/perancangan_sistem.md](file:///c:/kliksolusi/docs/perancangan_sistem.md)**  
   *Arsitektur Web Responsif (Desktop 1440×900 & Mobile Web), 6 Tahap Alur Penggunaan Platform, Diagram Alir Pengguna (User Flowchart Mermaid), Use Case Diagram 3 Aktor, Activity Diagram, Sequence Diagram, dan Prinsip Desain UI Netral (Anti-Slop & Lucide Icons).*

3. 🗄️ **[docs/struktur_database_table.md](file:///c:/kliksolusi/docs/struktur_database_table.md)**  
   *Prinsip Basis Data (3NF, Soft Deletes, ID Publik KS-...), Diagram ERD Lengkap (Mermaid), Kamus Data Rinci 11 Tabel (`users`, `volunteer_profiles`, `categories`, `solutions`, `solution_steps`, `tags`, `solution_tag`, `volunteer_tickets`, `ticket_replies`, `ticket_attachments`, `solution_feedbacks`, `search_logs`), Full-Text Indexing, dan Skrip DDL SQL Produksi Lengkap.*

4. 🔌 **[docs/spesifikasi_api.md](file:///c:/kliksolusi/docs/spesifikasi_api.md)**  
   *Standar RESTful API `/api/v1`, Format JSON Standar, Autentikasi Laravel Sanctum, Endpoints Katalog & Solusi, Endpoints Tanya Relawan Digital (Guest Ticketing & Tracking), Endpoints Portal Relawan, Endpoints Dashboard Admin, beserta Contoh Payload Request & Response.*

5. 🧱 **[docs/struktur_laravel.md](file:///c:/kliksolusi/docs/struktur_laravel.md)**  
   *Arsitektur Backend Laravel 11/12, Pohon Direktori Lengkap (`app/`, `routes/`, `resources/`), Pemetaan Model Eloquent (`Solution`, `VolunteerTicket`, dll.), Form Requests, Service Layer (`TicketNotificationService`), Routing Web & API, dan Artisan Task Scheduler (Pembersihan Otomatis Lampiran Tiket Lama).*

6. 🧭 **[docs/struktur_menu.md](file:///c:/kliksolusi/docs/struktur_menu.md)**  
   *Peta Situs Lengkap (Overall Sitemap Web), Struktur Menu Pengguna Publik (Header Navbar, Kategori, Kolom Cari, Footer Bar), Struktur Halaman Panduan Bertahap (Breadcrumb, Font Scaler, Checklist Tracker, Evaluasi), Menu Portal Relawan Digital, dan Menu Dashboard Admin.*

7. 🌐 **[docs/dokumentasi_ekosistem.md](file:///c:/kliksolusi/docs/dokumentasi_ekosistem.md)**  
   *Tumpukan Teknologi (Laravel, MySQL InnoDB, Blade/Vite/Tailwind, Lucide Icons), Integrasi WhatsApp Gateway & SMTP Mailer, Kepatuhan Regulasi Privasi Data (UU PDP No. 27/2022), Strategi Backup & Disaster Recovery, dan Panduan Deployment Server Produksi.*

8. 🧪 **[docs/demo_scenario.md](file:///c:/kliksolusi/docs/demo_scenario.md)**  
   *Skenario Pengujian Penerimaan Pengguna (UAT) End-to-End dengan 4 Karakter Persona (Siti Aminah, Pak Joko, Relawan Rian, Admin Bambang) yang mencakup 6 skenario nyata: pencarian mandiri sukses, voting feedback, pengajuan tiket relawan, respon relawan di portal, validasi tuntas, dan monitoring analitik dashboard admin.*

9. 🎨 **[docs/landing_page_kliksolusi.figcraft](file:///c:/kliksolusi/docs/landing_page_kliksolusi.figcraft)**  
   *Berkas Desain Master FigCraft berisi 12 Frame Wireframe terpadu (Baris 1: Alur Navigasi Publik, Baris 2: Alur Konsultasi & FAQ, Baris 3: Portal Admin & Relawan).*
