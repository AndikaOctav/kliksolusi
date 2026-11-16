<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlikSolusi - Pusat Panduan dan Solusi Teknologi Digital Sehari-hari</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        neutral: {
                            850: '#1e1e2d',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
            color: #0f172a;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased bg-[#F8F9FA] text-[#0F172A]">

    <!-- ================= NAVBAR ================= -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-11 h-11 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-sm group-hover:bg-blue-700 transition">
                    <i data-lucide="zap" class="w-6 h-6"></i>
                </div>
                <div>
                    <span class="text-2xl font-extrabold tracking-tight text-slate-900">KlikSolusi</span>
                    <span class="block text-xs font-semibold text-slate-500 -mt-1">Pusat Panduan Digital</span>
                </div>
            </a>

            <!-- Navigation Links (Tanpa Tombol Login untuk Pengunjung) -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="/" class="relative px-4 py-2 text-base font-bold text-blue-600 transition">
                    Beranda
                    <span class="absolute bottom-0 left-4 right-4 h-0.5 bg-blue-600 rounded-full"></span>
                </a>
                <a href="#katalog" class="px-4 py-2 text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50 rounded-lg transition">
                    Katalog Panduan
                </a>
                <a href="#tanya-relawan" class="px-4 py-2 text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50 rounded-lg transition">
                    Tanya Relawan
                </a>
                <a href="#tentang" class="px-4 py-2 text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50 rounded-lg transition">
                    Tentang KlikSolusi
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        <!-- ================= HERO SECTION ================= -->
        <section class="bg-white border-b border-slate-200 pt-12 pb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Info Pill -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-sm font-semibold mb-6">
                    <i data-lucide="info" class="w-4 h-4 text-blue-600"></i>
                    <span>Pusat Solusi Kendala Digital Bebas Biaya untuk Semua Umur</span>
                </div>

                <!-- Main Friendly Heading -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight max-w-4xl">
                    Ada Kendala Teknologi Hari Ini? <br>
                    <span class="text-blue-600">Cari Solusinya di Sini</span>
                </h1>

                <!-- Subtitle (Ramah Pemula & Lansia) -->
                <p class="mt-4 text-lg sm:text-xl text-slate-600 max-w-3xl leading-relaxed">
                    Panduan praktis langkah demi langkah untuk menyelesaikan kendala HP, aplikasi, dan internet sehari-hari. Nyaman dibaca pemula dan lansia.
                </p>

                <!-- Large Search Bar -->
                <div class="mt-8 max-w-4xl">
                    <form action="#" method="GET" class="relative flex flex-col sm:flex-row items-center gap-2 p-2 bg-white rounded-2xl border-2 border-slate-300 shadow-sm focus-within:border-blue-600 focus-within:ring-4 focus-within:ring-blue-100 transition">
                        <div class="flex items-center flex-grow w-full px-4 py-2">
                            <i data-lucide="search" class="w-6 h-6 text-slate-400 mr-3 flex-shrink-0"></i>
                            <input 
                                type="text" 
                                name="q"
                                placeholder="Ketik masalah Anda di sini (misal: cara ubah Word ke PDF, memori HP penuh)..."
                                class="w-full text-base sm:text-lg text-slate-900 placeholder-slate-400 focus:outline-none bg-transparent"
                            >
                        </div>
                        <button 
                            type="submit" 
                            class="w-full sm:w-auto px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white text-base sm:text-lg font-bold rounded-xl flex items-center justify-center gap-2 transition flex-shrink-0"
                        >
                            <i data-lucide="search" class="w-5 h-5"></i>
                            <span>Cari Solusi</span>
                        </button>
                    </form>

                    <!-- Quick Search Tags -->
                    <div class="mt-4 flex flex-wrap items-center gap-2 sm:gap-3 text-sm">
                        <span class="font-bold text-slate-500">Pencarian Cepat:</span>
                        <a href="#pdf" class="px-3 py-1.5 bg-slate-100 hover:bg-blue-50 hover:text-blue-700 text-slate-700 font-medium rounded-lg border border-slate-200 transition">
                            Ubah ke PDF
                        </a>
                        <a href="#memori" class="px-3 py-1.5 bg-slate-100 hover:bg-blue-50 hover:text-blue-700 text-slate-700 font-medium rounded-lg border border-slate-200 transition">
                            Memori HP Penuh
                        </a>
                        <a href="#email" class="px-3 py-1.5 bg-slate-100 hover:bg-blue-50 hover:text-blue-700 text-slate-700 font-medium rounded-lg border border-slate-200 transition">
                            Kirim Email
                        </a>
                        <a href="#sandi" class="px-3 py-1.5 bg-slate-100 hover:bg-blue-50 hover:text-blue-700 text-slate-700 font-medium rounded-lg border border-slate-200 transition">
                            Lupa Password Google
                        </a>
                        <a href="#paspor" class="px-3 py-1.5 bg-slate-100 hover:bg-blue-50 hover:text-blue-700 text-slate-700 font-medium rounded-lg border border-slate-200 transition">
                            Antrean Paspor
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= GRID KATEGORI POPULER ================= -->
        <section id="katalog" class="py-14">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">Kategori Permasalahan Populer</h2>
                    <p class="text-base text-slate-600 mt-1">Pilih topik kendala yang sedang Anda hadapi untuk solusi cepat dan terarah</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5">
                    <!-- Kategori 1 -->
                    <a href="#dokumen" class="bg-white p-6 rounded-2xl border border-slate-200 hover:border-blue-400 hover:shadow-md transition flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                                <i data-lucide="book-open" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Dokumen & Office</h3>
                            <p class="text-xs font-medium text-slate-500 mt-1">Word, PDF, Excel, Cetak</p>
                        </div>
                        <span class="mt-6 text-sm font-semibold text-blue-600 inline-flex items-center gap-1">
                            Buka Topik <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>

                    <!-- Kategori 2 -->
                    <a href="#perangkat" class="bg-white p-6 rounded-2xl border border-slate-200 hover:border-emerald-400 hover:shadow-md transition flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                                <i data-lucide="smartphone" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-emerald-600 transition">Perangkat & HP</h3>
                            <p class="text-xs font-medium text-slate-500 mt-1">Memori, Baterai, Layar</p>
                        </div>
                        <span class="mt-6 text-sm font-semibold text-emerald-600 inline-flex items-center gap-1">
                            Buka Topik <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>

                    <!-- Kategori 3 -->
                    <a href="#cloud" class="bg-white p-6 rounded-2xl border border-slate-200 hover:border-purple-400 hover:shadow-md transition flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                                <i data-lucide="cloud" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-purple-600 transition">Penyimpanan & Cloud</h3>
                            <p class="text-xs font-medium text-slate-500 mt-1">Google Drive, Backup, Foto</p>
                        </div>
                        <span class="mt-6 text-sm font-semibold text-purple-600 inline-flex items-center gap-1">
                            Buka Topik <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>

                    <!-- Kategori 4 -->
                    <a href="#komunikasi" class="bg-white p-6 rounded-2xl border border-slate-200 hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center mb-4">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-amber-600 transition">Komunikasi & Email</h3>
                            <p class="text-xs font-medium text-slate-500 mt-1">Gmail, WhatsApp, Kontak</p>
                        </div>
                        <span class="mt-6 text-sm font-semibold text-amber-600 inline-flex items-center gap-1">
                            Buka Topik <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>

                    <!-- Kategori 5 -->
                    <a href="#layanan" class="bg-white p-6 rounded-2xl border border-slate-200 hover:border-rose-400 hover:shadow-md transition flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center mb-4">
                                <i data-lucide="building-2" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-rose-600 transition">Layanan Publik Digital</h3>
                            <p class="text-xs font-medium text-slate-500 mt-1">Paspor, BPJS, Pajak, KTP</p>
                        </div>
                        <span class="mt-6 text-sm font-semibold text-rose-600 inline-flex items-center gap-1">
                            Buka Topik <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ================= PANDUAN PALING SERING DICARI ================= -->
        <section class="py-12 bg-white border-t border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">Panduan Paling Sering Dicari</h2>
                        <p class="text-base text-slate-600 mt-1">Solusi teruji yang telah membantu ribuan masyarakat menyelesaikan kendala mandiri</p>
                    </div>
                    <a href="#katalog" class="text-base font-bold text-blue-600 hover:text-blue-700 flex items-center gap-1">
                        Lihat Semua Panduan <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Artikel 1 -->
                    <article class="p-6 bg-slate-50 rounded-2xl border border-slate-200 hover:bg-white hover:border-blue-300 hover:shadow-sm transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-3 py-1 bg-white text-slate-700 text-xs font-semibold rounded-md border border-slate-200">
                                    Dokumen & Office
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 98% Membantu
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 leading-snug">
                                Cara Mengubah File Word Menjadi PDF Tanpa Aplikasi Tambahan
                            </h3>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs sm:text-sm">
                            <span class="text-slate-500 font-medium">3 Langkah • 2 Menit Baca</span>
                            <a href="#baca" class="text-blue-600 font-bold hover:underline">Buka Panduan →</a>
                        </div>
                    </article>

                    <!-- Artikel 2 -->
                    <article class="p-6 bg-slate-50 rounded-2xl border border-slate-200 hover:bg-white hover:border-blue-300 hover:shadow-sm transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-3 py-1 bg-white text-slate-700 text-xs font-semibold rounded-md border border-slate-200">
                                    Perangkat & HP
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 96% Membantu
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 leading-snug">
                                Mengatasi Memori WhatsApp Penuh Tanpa Hapus Chat Penting
                            </h3>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs sm:text-sm">
                            <span class="text-slate-500 font-medium">4 Langkah • 4 Menit Baca</span>
                            <a href="#baca" class="text-blue-600 font-bold hover:underline">Buka Panduan →</a>
                        </div>
                    </article>

                    <!-- Artikel 3 -->
                    <article class="p-6 bg-slate-50 rounded-2xl border border-slate-200 hover:bg-white hover:border-blue-300 hover:shadow-sm transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-3 py-1 bg-white text-slate-700 text-xs font-semibold rounded-md border border-slate-200">
                                    Komunikasi & Email
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 95% Membantu
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 leading-snug">
                                Langkah Aman Masuk Akun Google yang Lupa Kata Sandi
                            </h3>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs sm:text-sm">
                            <span class="text-slate-500 font-medium">5 Langkah • 5 Menit Baca</span>
                            <a href="#baca" class="text-blue-600 font-bold hover:underline">Buka Panduan →</a>
                        </div>
                    </article>

                    <!-- Artikel 4 -->
                    <article class="p-6 bg-slate-50 rounded-2xl border border-slate-200 hover:bg-white hover:border-blue-300 hover:shadow-sm transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-3 py-1 bg-white text-slate-700 text-xs font-semibold rounded-md border border-slate-200">
                                    Penyimpanan & Cloud
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 97% Membantu
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 leading-snug">
                                Cara Membersihkan Penyimpanan Google Drive yang Penuh
                            </h3>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs sm:text-sm">
                            <span class="text-slate-500 font-medium">4 Langkah • 3 Menit Baca</span>
                            <a href="#baca" class="text-blue-600 font-bold hover:underline">Buka Panduan →</a>
                        </div>
                    </article>

                    <!-- Artikel 5 -->
                    <article class="p-6 bg-slate-50 rounded-2xl border border-slate-200 hover:bg-white hover:border-blue-300 hover:shadow-sm transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-3 py-1 bg-white text-slate-700 text-xs font-semibold rounded-md border border-slate-200">
                                    Layanan Publik Digital
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 94% Membantu
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 leading-snug">
                                Panduan Mendaftar Antrean Paspor Online Lewat Aplikasi M-Paspor
                            </h3>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs sm:text-sm">
                            <span class="text-slate-500 font-medium">6 Langkah • 6 Menit Baca</span>
                            <a href="#baca" class="text-blue-600 font-bold hover:underline">Buka Panduan →</a>
                        </div>
                    </article>

                    <!-- Artikel 6 -->
                    <article class="p-6 bg-slate-50 rounded-2xl border border-slate-200 hover:bg-white hover:border-blue-300 hover:shadow-sm transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-3 py-1 bg-white text-slate-700 text-xs font-semibold rounded-md border border-slate-200">
                                    Perangkat & HP
                                </span>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 93% Membantu
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 leading-snug">
                                Mengatasi Layar HP Macet atau Hang Sendiri dengan Aman
                            </h3>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs sm:text-sm">
                            <span class="text-slate-500 font-medium">3 Langkah • 3 Menit Baca</span>
                            <a href="#baca" class="text-blue-600 font-bold hover:underline">Buka Panduan →</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ================= BANNER AJAKAN (CTA) ================= -->
        <section id="tanya-relawan" class="py-14">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-slate-900 rounded-3xl p-8 sm:p-12 text-white flex flex-col lg:flex-row items-center justify-between gap-8 shadow-xl">
                    <div class="max-w-3xl">
                        <span class="inline-block px-3 py-1 bg-slate-800 text-blue-300 text-xs font-semibold rounded-md mb-3 border border-slate-700">
                            Layanan Relawan Bebas Biaya
                        </span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-tight">
                            Solusi belum ditemukan? Tanya langsung ke Relawan Digital kami
                        </h2>
                        <p class="mt-3 text-base sm:text-lg text-slate-300 leading-relaxed">
                            Relawan teknologi kami siap membantu memandu Anda langkah demi langkah dengan sabar, gratis, dan bahasa sehari-hari yang mudah dipahami.
                        </p>
                    </div>
                    <div class="flex-shrink-0 w-full sm:w-auto">
                        <a href="/tanya-relawan" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white text-base sm:text-lg font-bold rounded-2xl shadow-lg hover:shadow-blue-500/25 transition">
                            <span>Tanya Relawan Sekarang</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ================= FOOTER ================= -->
    <footer id="tentang" class="bg-white border-t border-slate-200 py-8 text-sm text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-center md:text-left">
                <p class="font-medium text-slate-900">© 2026 KlikSolusi. Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari.</p>
                <p class="text-xs text-slate-500 mt-1">Solusi literasi digital ramah pemula dan lansia untuk seluruh masyarakat.</p>
            </div>
            <div class="text-xs font-semibold text-slate-500 text-center md:text-right">
                <span>Dirancang Ramah Pemula & Lansia • Tanpa Registrasi Rumit</span>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
