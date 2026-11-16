<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya Relawan Digital - Klik Solusi</title>
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
                <a href="/tanya-relawan" class="text-brand-dark font-bold border-b-2 border-brand-dark pb-1">Tanya Relawan</a>
                <a href="/tentang-kami" class="text-brand-secondary hover:text-brand-dark font-medium transition">Tentang Kami</a>
            </nav>

            <!-- Right Actions -->
            <div class="flex items-center space-x-4">
                <a href="#tab-cek" onclick="switchTab('cek')" class="text-xs font-semibold text-brand-secondary hover:text-brand-dark hidden sm:inline-flex items-center gap-1.5">
                    <i data-lucide="search" class="w-3.5 h-3.5"></i> Lacak Tiket
                </a>
                <a href="#form-tanya" onclick="switchTab('kirim')" class="inline-flex items-center gap-2 bg-brand-dark hover:bg-black text-white text-xs font-bold px-4 py-2.5 rounded-lg transition shadow-sm">
                    <span>Kirim Pertanyaan</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- 2. MAIN CONTENT AREA -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-grow w-full">
        <!-- Header Banner & Info -->
        <div class="mb-8">
            <div class="flex items-center gap-2 text-xs font-medium text-brand-muted mb-2">
                <a href="/" class="hover:underline">Beranda</a>
                <span>/</span>
                <span class="text-brand-dark font-semibold">Tanya Relawan Digital</span>
            </div>
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-brand-dark tracking-tight">Tanya Relawan Digital</h1>
                    <p class="text-sm text-brand-secondary mt-1">Konsultasikan kendala teknologi Anda langsung kepada sukarelawan digital tanpa perlu login atau membuat akun.</p>
                </div>
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-xs font-semibold text-emerald-700 self-start">
                    <span class="w-2 h-2 rounded-full bg-brand-success animate-pulse"></span>
                    <span>18 Relawan Sedang Online</span>
                </div>
            </div>
        </div>

        <!-- Tab Controls (Mobile & Switcher) -->
        <div class="flex items-center gap-3 border-b border-brand-border pb-4 mb-6">
            <button id="btn-tab-kirim" onclick="switchTab('kirim')" class="px-5 py-2.5 rounded-lg text-sm font-bold bg-brand-dark text-white flex items-center gap-2 transition shadow-sm">
                <i data-lucide="edit" class="w-4 h-4"></i>
                <span>Tab 1 — Kirim Pertanyaan Baru</span>
            </button>
            <button id="btn-tab-cek" onclick="switchTab('cek')" class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-white border border-brand-border text-brand-secondary hover:text-brand-dark flex items-center gap-2 transition">
                <i data-lucide="search" class="w-4 h-4"></i>
                <span>Tab 2 — Cek Status & Balasan Relawan</span>
            </button>
        </div>

        <!-- 2-COLUMNS / TAB CONTENT CONTAINER -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- TAB 1: FORM KIRIM PERTANYAAN BARU -->
            <section id="panel-kirim" class="lg:col-span-7 bg-white rounded-xl border border-brand-border p-6 sm:p-8 shadow-sm">
                <div class="flex items-center justify-between pb-5 border-b border-brand-border mb-6">
                    <div>
                        <h2 class="text-lg font-bold text-brand-dark">Kirim Pertanyaan Baru</h2>
                        <p class="text-xs text-brand-secondary mt-0.5">Isi form singkat di bawah ini. Relawan kami akan membalas kendala Anda.</p>
                    </div>
                    <span class="text-[11px] font-semibold bg-slate-100 text-brand-secondary px-2.5 py-1 rounded">Bebas Akun</span>
                </div>

                <form id="formTicket" onsubmit="handleFormSubmit(event)" class="space-y-5">
                    <!-- Row 1: Nama Panggilan & Kategori -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="guest_name" class="block text-xs font-bold text-brand-dark mb-1.5">Nama Panggilan <span class="text-red-500">*</span></label>
                            <input type="text" id="guest_name" name="guest_name" required placeholder="Contoh: Pak Budi / Siti"
                                class="w-full text-sm px-3.5 py-2.5 bg-slate-50 border border-brand-borderDark rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition">
                        </div>
                        <div>
                            <label for="category" class="block text-xs font-bold text-brand-dark mb-1.5">Kategori Masalah <span class="text-red-500">*</span></label>
                            <select id="category" name="category" required
                                class="w-full text-sm px-3.5 py-2.5 bg-slate-50 border border-brand-borderDark rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition">
                                <option value="">Pilih Kategori...</option>
                                <option value="dokumen">Dokumen & PDF</option>
                                <option value="perangkat">Perangkat & HP</option>
                                <option value="penyimpanan">Penyimpanan Cloud & Drive</option>
                                <option value="komunikasi">Komunikasi & Email</option>
                                <option value="layanan">Layanan Publik Online</option>
                            </select>
                        </div>
                    </div>

                    <!-- Judul Kendala -->
                    <div>
                        <label for="subject" class="block text-xs font-bold text-brand-dark mb-1.5">Judul Kendala <span class="text-red-500">*</span></label>
                        <input type="text" id="subject" name="subject" required placeholder="Contoh: Memori HP Samsung Penuh Terus Padahal Foto Sudah Dihapus"
                            class="w-full text-sm px-3.5 py-2.5 bg-slate-50 border border-brand-borderDark rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition">
                    </div>

                    <!-- Detail Permasalahan -->
                    <div>
                        <label for="problem_detail" class="block text-xs font-bold text-brand-dark mb-1.5">Detail Permasalahan <span class="text-red-500">*</span></label>
                        <textarea id="problem_detail" name="problem_detail" rows="4" required placeholder="Ceritakan apa yang terjadi, aplikasi yang digunakan, dan langkah apa saja yang sudah Anda coba lakukan..."
                            class="w-full text-sm px-3.5 py-2.5 bg-slate-50 border border-brand-borderDark rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition"></textarea>
                    </div>

                    <!-- Upload Screenshot Kendala (Opsional) -->
                    <div>
                        <label class="block text-xs font-bold text-brand-dark mb-1.5">Upload Screenshot Kendala <span class="text-brand-muted font-normal">(Opsional)</span></label>
                        <div class="border-2 border-dashed border-brand-border rounded-lg p-4 text-center hover:bg-slate-50 transition cursor-pointer flex flex-col items-center justify-center">
                            <i data-lucide="image" class="w-7 h-7 text-brand-muted mb-2"></i>
                            <p class="text-xs font-medium text-brand-secondary">Klik untuk unggah tangkapan layar atau seret gambar ke sini</p>
                            <p class="text-[11px] text-brand-muted mt-0.5">Format JPG, PNG, atau WebP (Maksimal 3 MB)</p>
                            <input type="file" id="screenshot" class="hidden" accept="image/*">
                        </div>
                    </div>

                    <!-- Kontak WA / Email (Opsional) -->
                    <div>
                        <label for="guest_contact" class="block text-xs font-bold text-brand-dark mb-1.5">Nomor WhatsApp atau Email <span class="text-brand-muted font-normal">(Opsional - Untuk Notifikasi Balasan)</span></label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-brand-muted">
                                <i data-lucide="mail" class="w-4 h-4"></i>
                            </span>
                            <input type="text" id="guest_contact" name="guest_contact" placeholder="0812xxxx atau nama@email.com"
                                class="w-full text-sm pl-10 pr-3.5 py-2.5 bg-slate-50 border border-brand-borderDark rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition">
                        </div>
                        <p class="text-[11px] text-brand-muted mt-1.5 flex items-center gap-1">
                            <i data-lucide="shield" class="w-3 h-3 text-emerald-600"></i>
                            Kontak Anda dienkripsi aman dan tidak dipublikasikan (Kepatuhan UU PDP No. 27/2022).
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-brand-dark hover:bg-black text-white text-sm font-bold py-3 px-6 rounded-lg transition shadow flex items-center justify-center gap-2">
                            <span>Kirim Pertanyaan ke Relawan</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </form>

                <!-- MODAL / ALERT SUKSES KODE TIKET -->
                <div id="successModal" class="hidden mt-6 bg-emerald-50 border border-emerald-200 rounded-xl p-5 transition">
                    <div class="flex items-start gap-3.5">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 flex-shrink-0">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-sm font-bold text-emerald-900">Pertanyaan Anda Berhasil Dikirim!</h3>
                            <p class="text-xs text-emerald-800 mt-0.5">Simpan Kode Tiket di bawah ini untuk mengecek balasan dari Relawan Digital:</p>
                            
                            <div class="mt-3 flex items-center gap-3">
                                <div class="bg-white border border-emerald-300 px-4 py-2 rounded-lg font-mono text-base font-bold text-brand-dark tracking-wider select-all" id="ticketCodeDisplay">
                                    KS-8492
                                </div>
                                <button onclick="copyTicketCode()" class="inline-flex items-center gap-1.5 px-3 py-2 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold rounded-lg transition shadow-sm">
                                    <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                                    <span id="copyBtnText">Salin Kode Tiket</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TAB 2: CEK STATUS & BALASAN RELAWAN -->
            <section id="panel-cek" class="lg:col-span-5 bg-white rounded-xl border border-brand-border p-6 sm:p-8 shadow-sm">
                <div class="pb-5 border-b border-brand-border mb-6">
                    <h2 class="text-lg font-bold text-brand-dark">Cek Status & Balasan Tiket</h2>
                    <p class="text-xs text-brand-secondary mt-0.5">Masukkan Kode Tiket yang Anda terima saat mengajukan pertanyaan.</p>
                </div>

                <!-- Input Besar Kode Tiket -->
                <form onsubmit="handleCheckTicket(event)" class="space-y-3 mb-6">
                    <div class="flex gap-2">
                        <div class="relative flex-grow">
                            <input type="text" id="check_ticket_input" required placeholder="Contoh: KS-8492" value="KS-8492"
                                class="w-full text-base font-mono font-bold tracking-wider uppercase px-4 py-3 bg-slate-50 border-2 border-brand-borderDark rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-accent focus:border-transparent transition">
                        </div>
                        <button type="submit" class="bg-brand-dark hover:bg-black text-white px-5 py-3 rounded-lg text-sm font-bold transition flex items-center gap-1.5 flex-shrink-0">
                            <i data-lucide="search" class="w-4 h-4"></i>
                            <span>Cek Jawaban</span>
                        </button>
                    </div>
                </form>

                <!-- CONTOH HASIL PENGECEKAN TIKET -->
                <div id="ticketResultCard" class="border border-brand-border rounded-xl p-5 bg-slate-50">
                    <!-- Status Header -->
                    <div class="flex items-center justify-between pb-3.5 border-b border-brand-border">
                        <div class="flex items-center gap-2">
                            <span class="font-mono text-xs font-bold text-brand-dark">#KS-8492</span>
                            <span class="text-[11px] text-brand-muted">• 25 menit yang lalu</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-success"></span>
                            Sudah Dijawab
                        </span>
                    </div>

                    <!-- Pertanyaan Pengguna -->
                    <div class="py-3.5 border-b border-brand-border">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-brand-muted">Pertanyaan Pengguna (Pak Joko)</span>
                        <h4 class="text-xs font-bold text-brand-dark mt-1">Memori HP Samsung Penuh Terus Padahal Foto Sudah Dihapus</h4>
                        <p class="text-xs text-brand-secondary mt-1 leading-relaxed">
                            "Saya sudah hapus foto-foto di galeri dan video kiriman WA, tapi ruang penyimpanan di HP saya tetap merah 98% penuh. Bagaimana ya Mas?"
                        </p>
                    </div>

                    <!-- Kotak Balasan Relawan Digital -->
                    <div class="pt-4">
                        <div class="flex items-center gap-2.5 mb-2.5">
                            <div class="w-7 h-7 rounded-full bg-indigo-100 text-brand-accent flex items-center justify-center text-xs font-bold">
                                RP
                            </div>
                            <div>
                                <h5 class="text-xs font-bold text-brand-dark">Rian Pratama <span class="font-normal text-brand-muted text-[11px]">(Relawan Spesialisasi Android)</span></h5>
                                <p class="text-[10px] text-brand-muted">Dibalas 10 menit yang lalu</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-3.5 border border-brand-border text-xs text-brand-dark space-y-2 leading-relaxed">
                            <p class="font-medium">Halo Pak Joko! Pada ponsel Samsung dengan Android 12 ke atas, foto yang dihapus tidak langsung hilang tetapi dipindahkan ke <b>Folder Sampah (Trash)</b> selama 30 hari. Berikut langkah mudah membersihkannya:</p>
                            <ol class="list-decimal list-inside space-y-1.5 text-brand-secondary pl-1">
                                <li>Buka aplikasi <b>Galeri Foto</b> di HP Anda.</li>
                                <li>Ketuk ikon <b>Garis Tiga (Menu)</b> di pojok kanan bawah.</li>
                                <li>Pilih menu <b>Sampah (Trash / Recycle Bin)</b>.</li>
                                <li>Ketuk tombol <b>Kosongkan</b> di pojok kanan atas layar.</li>
                            </ol>
                            <p class="text-emerald-700 font-semibold pt-1">Memori HP Bapak akan langsung lega seketika. Semoga membantu ya Pak!</p>
                        </div>

                        <!-- Feedback Aksi Selesai -->
                        <div class="mt-4 pt-3 border-t border-brand-border flex items-center justify-between">
                            <span class="text-[11px] text-brand-muted">Apakah solusi ini membantu?</span>
                            <button onclick="alert('Terima kasih! Tiket dinyatakan selesai.')" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded text-xs font-bold transition flex items-center gap-1.5">
                                <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                <span>Tandai Selesai</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- 3. FOOTER -->
    <footer class="bg-white border-t border-brand-border py-4 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-brand-muted">
            <p>(c) 2026 PT Solusi Digital Indonesia (Klik Solusi). All rights reserved.</p>
            <div class="flex items-center gap-2 text-brand-secondary">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-success"></span>
                <span>System Operational - SLA 99.98% Normal</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/privasi" class="hover:text-brand-dark">Privasi</a>
                <a href="/syarat" class="hover:text-brand-dark">Ketentuan Layanan</a>
                <a href="/bantuan" class="hover:text-brand-dark">Bantuan</a>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        lucide.createIcons();

        function switchTab(tab) {
            const btnKirim = document.getElementById('btn-tab-kirim');
            const btnCek = document.getElementById('btn-tab-cek');
            const panelKirim = document.getElementById('panel-kirim');
            const panelCek = document.getElementById('panel-cek');

            if (tab === 'kirim') {
                btnKirim.className = "px-5 py-2.5 rounded-lg text-sm font-bold bg-brand-dark text-white flex items-center gap-2 transition shadow-sm";
                btnCek.className = "px-5 py-2.5 rounded-lg text-sm font-semibold bg-white border border-brand-border text-brand-secondary hover:text-brand-dark flex items-center gap-2 transition";
                panelKirim.scrollIntoView({ behavior: 'smooth' });
            } else {
                btnCek.className = "px-5 py-2.5 rounded-lg text-sm font-bold bg-brand-dark text-white flex items-center gap-2 transition shadow-sm";
                btnKirim.className = "px-5 py-2.5 rounded-lg text-sm font-semibold bg-white border border-brand-border text-brand-secondary hover:text-brand-dark flex items-center gap-2 transition";
                panelCek.scrollIntoView({ behavior: 'smooth' });
            }
        }

        function handleFormSubmit(e) {
            e.preventDefault();
            const modal = document.getElementById('successModal');
            modal.classList.remove('hidden');
            modal.scrollIntoView({ behavior: 'smooth' });
        }

        function copyTicketCode() {
            const code = document.getElementById('ticketCodeDisplay').innerText.trim();
            navigator.clipboard.writeText(code).then(() => {
                const btnText = document.getElementById('copyBtnText');
                btnText.innerText = "Tersalin!";
                setTimeout(() => {
                    btnText.innerText = "Salin Kode Tiket";
                }, 2000);
            });
        }

        function handleCheckTicket(e) {
            e.preventDefault();
            const result = document.getElementById('ticketResultCard');
            result.classList.remove('hidden');
            result.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
