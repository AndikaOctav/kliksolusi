<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Klik Solusi - Pusat Panduan Digital Mandiri</title>
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
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
                            dark: '#1E1E2D',
                            accent: '#6C5CE7',
                            canvas: '#F8F9FA',
                            surface: '#FFFFFF',
                            border: '#E2E8F0',
                            borderDark: '#CBD5E1',
                            muted: '#8F92A1',
                            secondary: '#475569',
                            success: '#00B894'
                        }
                    }
                }
            }
        }
    </script>
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-brand-canvas text-brand-dark font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- 1. NAVBAR -->
    <header class="bg-white border-b border-brand-border sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-[72px] flex items-center justify-between">
            <!-- Brand Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-lg bg-brand-dark flex items-center justify-center text-white">
                    <i data-lucide="zap" class="w-5 h-5"></i>
                </div>
                <a href="/" class="text-xl font-bold tracking-tight text-brand-dark">
                    Klik Solusi<span class="text-brand-accent">.id</span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center space-x-8 text-[13.5px]">
                <a href="/" class="text-brand-secondary hover:text-brand-dark font-medium transition">Beranda</a>
                <a href="/katalog" class="text-brand-secondary hover:text-brand-dark font-medium transition">Katalog Panduan</a>
                <a href="/tanya-relawan" class="text-brand-secondary hover:text-brand-dark font-medium transition">Tanya Relawan</a>
                <a href="/tentang" class="text-brand-dark font-bold border-b-2 border-brand-dark pb-1">Tentang Kami</a>
                <a href="/tanya-relawan#lacak" class="text-brand-secondary hover:text-brand-dark font-medium transition">Lacak Tiket</a>
            </nav>

            <!-- Action CTA -->
            <div class="flex items-center space-x-3">
                <a href="/tanya-relawan" class="inline-flex items-center px-4 py-2 text-xs font-semibold rounded-lg text-white bg-brand-dark hover:bg-black transition shadow-sm">
                    <span>Tanya Relawan</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1.5"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-1 pb-20">

        <!-- HERO SECTION: PROFIL SINGKAT -->
        <section class="bg-white border-b border-brand-border pt-12 pb-16">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">
                <!-- Breadcrumb -->
                <nav class="text-xs text-brand-muted font-medium mb-4 flex items-center justify-center space-x-2">
                    <a href="/" class="hover:text-brand-dark">Beranda</a>
                    <span>/</span>
                    <span class="text-brand-secondary font-semibold">Tentang Klik Solusi</span>
                </nav>

                <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-50 text-brand-accent border border-purple-100 mb-4">
                    <i data-lucide="info" class="w-3.5 h-3.5 mr-1.5"></i>
                    Pusat Literasi & Panduan Teknologi Terbuka
                </div>

                <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-dark mb-5 leading-tight">
                    Mewujudkan Kemandirian Digital untuk Seluruh Lapisan Masyarakat
                </h1>

                <p class="text-base sm:text-lg text-brand-secondary max-w-3xl mx-auto leading-relaxed mb-8">
                    <strong class="text-brand-dark font-semibold">Klik Solusi</strong> adalah platform informasi berbasis web yang dirancang khusus untuk memandu masyarakat menyelesaikan kendala teknologi digital sehari-hari. Mulai dari pelajar, pekerja, masyarakat umum, hingga kaum lansia — semua panduan tersaji secara mandiri, gratis, praktis, dan berstruktur langkah demi langkah.
                </p>

                <!-- 3 Pilar Nilai -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-left">
                    <div class="p-6 rounded-xl bg-brand-canvas border border-brand-border">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 text-brand-success flex items-center justify-center mb-4">
                            <i data-lucide="check-circle-2" class="w-5 h-5"></i>
                        </div>
                        <h2 class="text-base font-bold text-brand-dark mb-2">100% Gratis & Terbuka</h2>
                        <p class="text-xs sm:text-sm text-brand-secondary leading-relaxed">
                            Akses seluruh tutorial dan ajukan pertanyaan tanpa biaya sepeser pun. Tanpa kewajiban mendaftar akun atau login.
                        </p>
                    </div>

                    <div class="p-6 rounded-xl bg-brand-canvas border border-brand-border">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <i data-lucide="layers" class="w-5 h-5"></i>
                        </div>
                        <h2 class="text-base font-bold text-brand-dark mb-2">Bahasa Sederhana & Visual</h2>
                        <p class="text-xs sm:text-sm text-brand-secondary leading-relaxed">
                            Bebas istilah teknis rumit. Setiap tahap dilengkapi ilustrasi visual nyata sehingga mudah dipahami oleh siapa saja.
                        </p>
                    </div>

                    <div class="p-6 rounded-xl bg-brand-canvas border border-brand-border">
                        <div class="w-10 h-10 rounded-lg bg-purple-50 text-brand-accent flex items-center justify-center mb-4">
                            <i data-lucide="users" class="w-5 h-5"></i>
                        </div>
                        <h2 class="text-base font-bold text-brand-dark mb-2">Dukungan Relawan Nyata</h2>
                        <p class="text-xs sm:text-sm text-brand-secondary leading-relaxed">
                            Buntu mengikuti tutorial? Relawan digital berdedikasi siap membantu memeriksa kendala Anda langsung melalui tiket online.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: CARA MENGGUNAKAN KLIK SOLUSI (4 LANGKAH VISUAL) -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-brand-accent tracking-wider uppercase">Alur Penggunaan</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-brand-dark mt-1">4 Langkah Mudah Menyelesaikan Masalah</h2>
                <p class="text-sm text-brand-secondary mt-2">Tanpa alur berbelit, Anda dapat langsung menemukan penyelesaian kendala dalam hitungan menit.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Langkah 1 -->
                <div class="bg-white p-6 rounded-2xl border border-brand-border shadow-sm flex flex-col justify-between relative group hover:border-brand-dark transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-black text-brand-muted group-hover:text-brand-dark transition">01</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-brand-dark flex items-center justify-center">
                                <i data-lucide="search" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-base font-bold text-brand-dark mb-2">Ketik atau Pilih Masalah</h3>
                        <p class="text-xs text-brand-secondary leading-relaxed">
                            Gunakan kolom pencarian di halaman utama atau telusuri topik berdasarkan kategori: Dokumen, HP & Android, Penyimpanan, atau Layanan Publik.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-xs font-semibold text-brand-dark">
                        <span>Telusuri topik</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
                    </div>
                </div>

                <!-- Langkah 2 -->
                <div class="bg-white p-6 rounded-2xl border border-brand-border shadow-sm flex flex-col justify-between relative group hover:border-brand-dark transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-black text-brand-muted group-hover:text-brand-dark transition">02</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-brand-dark flex items-center justify-center">
                                <i data-lucide="image" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-base font-bold text-brand-dark mb-2">Ikuti Panduan Bergambar</h3>
                        <p class="text-xs text-brand-secondary leading-relaxed">
                            Buka tutorial langkah demi langkah. Setiap instruksi dilengkapi tangkapan layar beranotasi agar Anda tidak salah menekan tombol.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-xs font-semibold text-brand-dark">
                        <span>Langkah demi langkah</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
                    </div>
                </div>

                <!-- Langkah 3 -->
                <div class="bg-white p-6 rounded-2xl border border-brand-border shadow-sm flex flex-col justify-between relative group hover:border-brand-dark transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-black text-brand-muted group-hover:text-brand-dark transition">03</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-brand-dark flex items-center justify-center">
                                <i data-lucide="star" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-base font-bold text-brand-dark mb-2">Beri Penilaian</h3>
                        <p class="text-xs text-brand-secondary leading-relaxed">
                            Beri tahu kami apakah panduan tersebut berhasil membantu Anda. Umpan balik Anda membantu kami memperbarui panduan yang sudah usang.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-xs font-semibold text-brand-dark">
                        <span>Feedback instan</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
                    </div>
                </div>

                <!-- Langkah 4 -->
                <div class="bg-white p-6 rounded-2xl border border-purple-200 bg-gradient-to-b from-white to-purple-50/30 shadow-sm flex flex-col justify-between relative group hover:border-brand-accent transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-black text-brand-accent">04</span>
                            <div class="w-10 h-10 rounded-xl bg-purple-100 text-brand-accent flex items-center justify-center">
                                <i data-lucide="message-square" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-base font-bold text-brand-dark mb-2">Tanya Relawan Jika Bingung</h3>
                        <p class="text-xs text-brand-secondary leading-relaxed">
                            Jika kendala Anda belum teratasi, kirim pertanyaan dan screenshot ke Relawan Digital. Simpan nomor tiket untuk mengecek solusinya.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-purple-100 flex items-center text-xs font-semibold text-brand-accent">
                        <span>Bantuan sukarelawan</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: TENTANG RELAWAN DIGITAL -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-3xl border border-brand-border p-8 sm:p-12 shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <span class="text-xs font-bold text-emerald-600 tracking-wider uppercase flex items-center">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                            Inisiatif Solidaritas Digital
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-bold text-brand-dark mt-2 mb-4 leading-snug">
                            Siapakah Relawan Digital Klik Solusi?
                        </h2>
                        <p class="text-sm text-brand-secondary leading-relaxed mb-4">
                            Relawan Digital Klik Solusi adalah komunitas pegiat teknologi, mahasiswa informatika, profesional IT, dan sukarelawan literasi digital dari seluruh Indonesia yang mendedikasikan waktu mereka untuk membantu sesama.
                        </p>
                        <p class="text-sm text-brand-secondary leading-relaxed mb-6">
                            Kami percaya bahwa di era transformasi digital, tidak boleh ada warga yang tertinggal hanya karena merasa bingung atau takut salah memencet menu aplikasi. Setiap pertanyaan dijawab secara personal, santun, dan tanpa menghakimi tingkat pemahaman teknis pengguna.
                        </p>

                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4 border-t border-brand-border">
                            <div>
                                <span class="text-2xl font-bold text-brand-dark block">100%</span>
                                <span class="text-xs text-brand-secondary">Pelayanan Sukarela</span>
                            </div>
                            <div>
                                <span class="text-2xl font-bold text-brand-dark block">&lt; 3 Jam</span>
                                <span class="text-xs text-brand-secondary">Rata-rata Respon</span>
                            </div>
                            <div>
                                <span class="text-2xl font-bold text-brand-dark block">Aman</span>
                                <span class="text-xs text-brand-secondary">Privasi Terjaga</span>
                            </div>
                        </div>
                    </div>

                    <!-- Callout Card Kanan -->
                    <div class="lg:col-span-5 bg-brand-canvas p-6 rounded-2xl border border-brand-border">
                        <div class="w-12 h-12 rounded-xl bg-brand-dark text-white flex items-center justify-center mb-4">
                            <i data-lucide="shield-check" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-base font-bold text-brand-dark mb-2">Prinsip Keamanan Relawan</h3>
                        <ul class="text-xs text-brand-secondary space-y-3">
                            <li class="flex items-start">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 mr-2 shrink-0 mt-0.5"></i>
                                <span>Relawan <strong>tidak pernah</strong> meminta kata sandi (password), kode OTP, atau data perbankan Anda.</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 mr-2 shrink-0 mt-0.5"></i>
                                <span>Tangkapan layar yang Anda kirim hanya dipakai untuk mendiagnosis masalah teknis.</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-500 mr-2 shrink-0 mt-0.5"></i>
                                <span>Seluruh jawaban dapat diakses kembali kapan saja lewat nomor tiket unik tanpa perlu membuat akun.</span>
                            </li>
                        </ul>

                        <div class="mt-6 pt-4 border-t border-brand-border">
                            <a href="/tanya-relawan" class="w-full inline-flex justify-center items-center px-4 py-2.5 text-xs font-semibold rounded-xl text-white bg-brand-dark hover:bg-black transition">
                                <i data-lucide="message-circle" class="w-4 h-4 mr-2"></i>
                                Ajukan Pertanyaan ke Relawan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: FAQ (ACCORDION INTERAKTIF) -->
        <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <span class="text-xs font-bold text-brand-accent tracking-wider uppercase">Tanya Jawab</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-brand-dark mt-1">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                <p class="text-sm text-brand-secondary mt-2">Segala hal yang perlu Anda ketahui tentang penggunaan Klik Solusi.</p>
            </div>

            <!-- Accordion Items -->
            <div class="space-y-4" id="faq-accordion">

                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl border border-brand-border overflow-hidden transition-all shadow-sm">
                    <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between font-bold text-brand-dark text-sm sm:text-base focus:outline-none">
                        <span>Apakah seluruh layanan di Klik Solusi benar-benar gratis?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-brand-secondary transition-transform duration-200"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-brand-secondary leading-relaxed border-t border-slate-50 pt-3">
                        Ya, 100% gratis. Seluruh katalog tutorial, pencarian solusi, hingga sesi tanya jawab dengan Relawan Digital dapat diakses tanpa biaya apa pun. Misi kami adalah meningkatkan kecakapan dan literasi digital seluruh lapisan masyarakat Indonesia.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl border border-brand-border overflow-hidden transition-all shadow-sm">
                    <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between font-bold text-brand-dark text-sm sm:text-base focus:outline-none">
                        <span>Apakah saya harus mendaftar akun atau login terlebih dahulu?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-brand-secondary transition-transform duration-200"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-brand-secondary leading-relaxed border-t border-slate-50 pt-3">
                        Sama sekali tidak perlu. Siapa saja dapat langsung membaca panduan atau mengajukan pertanyaan ke Relawan. Saat mengirim pertanyaan, sistem akan otomatis menghasilkan <strong>Kode Tiket Unik</strong> (contoh: KS-8492) yang dapat Anda simpan untuk mengecek balasan relawan kapan saja.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl border border-brand-border overflow-hidden transition-all shadow-sm">
                    <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between font-bold text-brand-dark text-sm sm:text-base focus:outline-none">
                        <span>Berapa lama pertanyaan saya akan dijawab oleh relawan?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-brand-secondary transition-transform duration-200"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-brand-secondary leading-relaxed border-t border-slate-50 pt-3">
                        Pertanyaan umumnya dijawab dalam waktu 30 menit hingga maksimal 3 jam pada jam operasional (08.00 – 21.00 WIB). Jika Anda mencantumkan nomor WhatsApp atau email (opsional), notifikasi balasan akan langsung dikirimkan ke kontak Anda begitu solusi selesai ditulis relawan.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl border border-brand-border overflow-hidden transition-all shadow-sm">
                    <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between font-bold text-brand-dark text-sm sm:text-base focus:outline-none">
                        <span>Apakah data dan screenshot kendala saya aman?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-brand-secondary transition-transform duration-200"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-brand-secondary leading-relaxed border-t border-slate-50 pt-3">
                        Sangat aman. Data pertanyaan dan screenshot hanya digunakan untuk keperluan analisis penyelesaian kendala teknis Anda. Kami menyarankan untuk tidak mengunggah screenshot yang memuat informasi sensitif seperti nomor rekening, PIN, atau kata sandi pribadi.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-2xl border border-brand-border overflow-hidden transition-all shadow-sm">
                    <button type="button" class="faq-toggle w-full p-6 text-left flex items-center justify-between font-bold text-brand-dark text-sm sm:text-base focus:outline-none">
                        <span>Bagaimana jika panduan yang ada tidak berhasil menyelesaikan masalah saya?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-brand-secondary transition-transform duration-200"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-brand-secondary leading-relaxed border-t border-slate-50 pt-3">
                        Anda dapat langsung mengklik tombol "Tanya Relawan" yang tersedia di bagian bawah setiap artikel panduan. Tim relawan kami akan memberikan arahan alternatif khusus yang disesuaikan dengan merek perangkat atau kondisi sistem Anda.
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-brand-border py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between text-xs text-brand-secondary gap-4">
            <div class="flex items-center space-x-2">
                <span class="font-bold text-brand-dark">Klik Solusi</span>
                <span>— Platform Panduan Teknologi Digital Sehari-hari.</span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="/katalog" class="hover:text-brand-dark">Katalog Panduan</a>
                <a href="/tanya-relawan" class="hover:text-brand-dark">Tanya Relawan</a>
                <a href="/tentang" class="text-brand-dark font-semibold">Tentang Kami</a>
            </div>
            <p class="text-brand-muted">
                &copy; {{ date('Y') }} PT Solusi Digital Indonesia (Klik Solusi).
            </p>
        </div>
    </footer>

    <!-- Interactive FAQ Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();

            const toggles = document.querySelectorAll('.faq-toggle');
            toggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');
                    const isHidden = content.classList.contains('hidden');

                    // Close all
                    document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                    document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');

                    // Toggle current
                    if (isHidden) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
</body>
</html>
