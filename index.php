<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desta Damaputra — Software Engineer & QA Specialist</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbg: '#050b14',
                        cardbg: '#0f172a',
                        neonamber: '#f59e0b',
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #050b14; color: #f3f4f6; }
        .code-font { font-family: 'Fira Code', monospace; }
        /* Background Gradient & Pattern Mewah */
        .hero-bg {
            background: radial-gradient(circle at 15% 20%, rgba(245, 158, 11, 0.08) 0%, transparent 40%),
                        radial-gradient(circle at 85% 80%, rgba(6, 182, 212, 0.08) 0%, transparent 40%),
                        #050b14;
        }
        .glass-panel {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(245, 158, 11, 0.25);
        }
        .glass-panel:hover {
            border-color: rgba(245, 158, 11, 0.6);
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.15);
        }
    </style>
</head>
<body class="hero-bg min-h-screen relative overflow-x-hidden">

    <!-- Ambient Glow Lights -->
    <div class="absolute top-20 left-10 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute top-1/3 right-10 w-96 h-96 bg-amber-500/10 rounded-full blur-[120px] pointer-events-none"></div>

    <!-- Navigation Bar -->
    <header class="fixed top-0 left-0 w-full z-50 px-4 py-4">
        <nav class="max-w-6xl mx-auto glass-panel px-6 py-3 rounded-full flex items-center justify-between shadow-2xl">
            <div class="flex items-center gap-3">
                <span class="w-10 h-10 bg-gradient-to-tr from-amber-500 to-yellow-400 text-darkbg font-extrabold rounded-xl flex items-center justify-center shadow-lg shadow-amber-500/30">D</span>
                <span class="font-bold text-lg tracking-wider text-white">Desta<span class="text-amber-500">.dev</span></span>
            </div>
            <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-300">
                <li><a href="#about" class="hover:text-amber-500 transition-colors"><i class="fa-solid fa-user text-amber-500 mr-1"></i> Tentang</a></li>
                <li><a href="#experience" class="hover:text-amber-500 transition-colors"><i class="fa-solid fa-briefcase text-amber-500 mr-1"></i> Pengalaman</a></li>
                <li><a href="#projects" class="hover:text-amber-500 transition-colors"><i class="fa-solid fa-code text-amber-500 mr-1"></i> Proyek</a></li>
                <li><a href="#skills" class="hover:text-amber-500 transition-colors"><i class="fa-solid fa-microchip text-amber-500 mr-1"></i> Keahlian</a></li>
            </ul>
            <div>
                <a href="#contact" class="bg-amber-500/10 text-amber-500 border border-amber-500/30 px-5 py-2 rounded-full text-sm font-semibold hover:bg-amber-500 hover:text-darkbg transition-all shadow-lg shadow-amber-500/10">
                    <i class="fa-solid fa-paper-plane mr-1"></i> Kontak Saya
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center max-w-6xl mx-auto px-6 pt-32 pb-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full">
            <div class="lg:col-span-7 space-y-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
                    Hi, Saya <span class="bg-gradient-to-r from-amber-400 via-yellow-500 to-cyan-400 bg-clip-text text-transparent">Desta Damaputra</span>
                </h1>
                <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-xl">
                    Software Engineering Graduate dari SMKN Manonjaya & Software Quality Assurance Specialist yang berfokus pada pengembangan sistem web dinamis berbasis PHP/MySQL dan pengujian perangkat lunak berkualitas tinggi.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#projects" class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-yellow-600 text-darkbg font-bold shadow-xl shadow-amber-500/30 hover:scale-105 transition-all flex items-center gap-2">
                        <i class="fa-solid fa-rocket"></i> Lihat Proyek Unggulan
                    </a>
                    <a href="#contact" class="px-7 py-3.5 rounded-xl glass-panel text-white font-semibold hover:border-cyan-400 hover:text-cyan-400 transition-all flex items-center gap-2">
                        <i class="fa-solid fa-envelope"></i> Mari Terhubung
                    </a>
                </div>
                <!-- Stats Row -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-800/80">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-amber-500">18+</h3>
                        <p class="text-xs text-gray-400 code-font mt-1">Usia Produktif</p>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-cyan-400">3+</h3>
                        <p class="text-xs text-gray-400 code-font mt-1">Sistem Web Utama</p>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-purple-400">100%</h3>
                        <p class="text-xs text-gray-400 code-font mt-1">Standar QA & Code</p>
                    </div>
                </div>
            </div>

            <!-- Kartu Profil dengan Foto Asli (foto-profil.jpg) -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="glass-panel p-6 rounded-3xl w-full max-w-sm text-center relative group transition-all duration-300 hover:scale-[1.02] shadow-2xl">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-amber-500 to-cyan-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition duration-500"></div>
                    <div class="relative bg-gray-950/80 p-6 rounded-2xl">
                        <div class="relative w-44 h-44 mx-auto mb-6 rounded-full p-1 bg-gradient-to-tr from-amber-500 to-cyan-400 shadow-2xl">
                            <!-- Foto Profil Asli -->
                            <img src="foto-profil.jpg" alt="Desta Damaputra" class="w-full h-full object-cover rounded-full" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=60'">
                        </div>
                        <h3 class="text-xl font-bold text-white mb-1">Desta Damaputra</h3>
                        <p class="text-xs text-gray-400 code-font mb-4"><i class="fa-solid fa-location-dot text-amber-500 mr-1"></i> Tasikmalaya, Jawa Barat</p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="px-3 py-1 bg-amber-500/10 text-amber-500 border border-amber-500/30 text-xs font-semibold rounded-lg">PHP Native</span>
                            <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 text-xs font-semibold rounded-lg">Software QA</span>
                            <span class="px-3 py-1 bg-purple-500/10 text-purple-400 border border-purple-500/30 text-xs font-semibold rounded-lg">Laragon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 01. PROFILE & BACKGROUND</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Tentang Pribadi & Latar Belakang</h2>
            <p class="text-gray-400 text-sm mt-1">Mengenal rekam jejak pendidikan dan spesialisasi keahlian</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-7 glass-panel p-8 rounded-2xl space-y-4">
                <h3 class="text-xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-graduation-cap text-amber-500 p-2.5 bg-amber-500/10 rounded-xl"></i> Pendidikan & Visi Profesional
                </h3>
                <p class="text-gray-300 leading-relaxed">
                    Nama lengkap saya <strong class="text-white">Desta Damaputra</strong> (dikenal juga sebagai Dama Putra Desta), lahir di Bekasi dan saat ini menetap di Tasikmalaya, Jawa Barat. Saya merupakan lulusan SMK Negeri Manonjaya dengan kompetensi keahlian <strong class="text-amber-400">Rekayasa Perangkat Lunak (RPL)</strong>.
                </p>
                <p class="text-gray-300 leading-relaxed">
                    Saya terbiasa membangun dan menguji aplikasi web menggunakan lingkungan lokal server (Laragon, PHP Native, dan MySQL). Selain development, saya aktif mendalami bidang <strong class="text-cyan-400">Software Quality Assurance (QA)</strong> untuk memastikan seluruh program bebas dari celah error dan memenuhi standar kelayakan industri.
                </p>
            </div>
            <div class="lg:col-span-5 glass-panel p-8 rounded-2xl space-y-4">
                <h3 class="text-xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-id-card text-amber-500 p-2.5 bg-amber-500/10 rounded-xl"></i> Detail Kontak & Credential
                </h3>
                <ul class="space-y-3 text-sm text-gray-300 code-font">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-amber-500 w-5"></i> <span>desta@email.dev</span></li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-amber-500 w-5"></i> <span>+62 8xx-xxxx-xxxx</span></li>
                    <li class="flex items-center gap-3"><i class="fa-brands fa-github text-amber-500 w-5"></i> <span>damaputradesta-wq</span></li>
                    <li class="flex items-center gap-3"><i class="fa-brands fa-tiktok text-amber-500 w-5"></i> <span>CrossingTime / cauuasakk1</span></li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-amber-500 w-5"></i> <span>Tasikmalaya, Jawa Barat</span></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 02. EXPERIENCE & SKILLS TRAINING</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Pelatihan & Pengalaman Praktis</h2>
            <p class="text-gray-400 text-sm mt-1">Portofolio kompetensi dan keahlian operasional bisnis digital</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="glass-panel p-8 rounded-2xl space-y-4 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-2 h-full bg-amber-500"></div>
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-amber-500/10 text-amber-500 rounded-xl text-xl">
                        <i class="fa-solid fa-vial-circle-check"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Software Quality Assurance (QA) Training</h3>
                        <span class="text-xs text-amber-400 code-font">Tahun 2026 — Spesialisasi Pengujian</span>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Mempelajari standar pengujian perangkat lunak secara profesional, mulai dari analisis kebutuhan dokumen, evaluasi user story, penulisan kriteria penerimaan, hingga perancangan skenario test case dan state transition testing.
                </p>
            </div>
            <div class="glass-panel p-8 rounded-2xl space-y-4 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-2 h-full bg-cyan-400"></div>
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-cyan-500/10 text-cyan-400 rounded-xl text-xl">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Merchant & E-Commerce Management</h3>
                        <span class="text-xs text-cyan-400 code-font">TikTok Shop & Tokopedia (CrossingTime)</span>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Berpengalaman mengelola toko online mandiri, mengatur inventaris produk, menjalankan strategi pemasaran digital (digital marketing), serta membuat konten promosi produk affiliate secara aktif.
                </p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 03. FEATURED PROJECTS</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Proyek Unggulan Sistem Web</h2>
            <p class="text-gray-400 text-sm mt-1">Aplikasi dan dokumentasi pengujian yang telah dikembangkan di server lokal Laragon</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-panel p-6 rounded-2xl flex flex-col justify-between group hover:-translate-y-2 transition-all duration-300">
                <div>
                    <div class="w-12 h-12 bg-amber-500/10 text-amber-500 rounded-xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Laundry App Pro</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Sistem manajemen operasional laundry berbasis web untuk memantau data transaksi pelanggan, pencatatan berat pakaian, dan kalkulasi biaya otomatis.
                    </p>
                </div>
                <div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-xs code-font rounded border border-amber-500/20">PHP Native</span>
                        <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-xs code-font rounded border border-cyan-500/20">MySQL</span>
                        <span class="px-2.5 py-1 bg-gray-950 text-purple-400 text-xs code-font rounded border border-purple-500/20">Laragon</span>
                    </div>
                </div>
            </div>
            <div class="glass-panel p-6 rounded-2xl flex flex-col justify-between group hover:-translate-y-2 transition-all duration-300">
                <div>
                    <div class="w-12 h-12 bg-cyan-500/10 text-cyan-400 rounded-xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">CrossingTime E-Commerce</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Platform manajemen toko online lintas platform (TikTok Shop & Tokopedia) dengan optimasi strategi digital marketing dan manajemen inventaris digital.
                    </p>
                </div>
                <div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-xs code-font rounded border border-amber-500/20">Marketing</span>
                        <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-xs code-font rounded border border-cyan-500/20">TikTok Shop</span>
                        <span class="px-2.5 py-1 bg-gray-950 text-purple-400 text-xs code-font rounded border border-purple-500/20">Tokopedia</span>
                    </div>
                </div>
            </div>
            <div class="glass-panel p-6 rounded-2xl flex flex-col justify-between group hover:-translate-y-2 transition-all duration-300">
                <div>
                    <div class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Software QA Suite</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Dokumentasi pengujian perangkat lunak terstruktur mencakup requirement analysis, perancangan test case, dan mitigasi risiko bug sistem.
                    </p>
                </div>
                <div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-xs code-font rounded border border-amber-500/20">QA Testing</span>
                        <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-xs code-font rounded border border-cyan-500/20">Test Case</span>
                        <span class="px-2.5 py-1 bg-gray-950 text-purple-400 text-xs code-font rounded border border-purple-500/20">Analysis</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 04. TECH STACK & CAPABILITIES</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Keahlian & Teknologi</h2>
            <p class="text-gray-400 text-sm mt-1">Perangkat dan bahasa pemrograman yang dikuasai</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="glass-panel p-6 rounded-2xl text-center hover:border-amber-500 transition-all">
                <i class="fa-brands fa-php text-4xl text-indigo-400 mb-3"></i>
                <h4 class="font-bold text-white text-sm">PHP Native</h4>
            </div>
            <div class="glass-panel p-6 rounded-2xl text-center hover:border-amber-500 transition-all">
                <i class="fa-solid fa-database text-4xl text-cyan-400 mb-3"></i>
                <h4 class="font-bold text-white text-sm">MySQL</h4>
            </div>
            <div class="glass-panel p-6 rounded-2xl text-center hover:border-amber-500 transition-all">
                <i class="fa-solid fa-bug-slash text-4xl text-emerald-400 mb-3"></i>
                <h4 class="font-bold text-white text-sm">Software QA</h4>
            </div>
            <div class="glass-panel p-6 rounded-2xl text-center hover:border-amber-500 transition-all">
                <i class="fa-brands fa-git-alt text-4xl text-orange-500 mb-3"></i>
                <h4 class="font-bold text-white text-sm">Git & GitHub</h4>
            </div>
            <div class="glass-panel p-6 rounded-2xl text-center hover:border-amber-500 transition-all">
                <i class="fa-solid fa-server text-4xl text-amber-500 mb-3"></i>
                <h4 class="font-bold text-white text-sm">Laragon</h4>
            </div>
            <div class="glass-panel p-6 rounded-2xl text-center hover:border-amber-500 transition-all">
                <i class="fa-solid fa-bullhorn text-4xl text-pink-400 mb-3"></i>
                <h4 class="font-bold text-white text-sm">Marketing</h4>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 05. TRANSMISSION & CONTACT</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Hubungi Saya</h2>
            <p class="text-gray-400 text-sm mt-1">Kirimkan pesan langsung atau ajakan kerja sama profesional</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-5 glass-panel p-8 rounded-2xl space-y-6">
                <h3 class="text-xl font-bold text-white">Mari Berkolaborasi!</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Saya terbuka untuk peluang karier, proyek web development, kolaborasi, maupun diskusi seputar pengujian kualitas perangkat lunak (QA).
                </p>
                <div class="space-y-3 code-font text-sm text-gray-300">
                    <p class="flex items-center gap-3"><i class="fa-solid fa-envelope text-amber-500 w-5"></i> desta@email.dev</p>
                    <p class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-amber-500 w-5"></i> Tasikmalaya, Jawa Barat</p>
                    <p class="flex items-center gap-3"><i class="fa-brands fa-github text-amber-500 w-5"></i> damaputradesta-wq</p>
                </div>
            </div>
            <div class="lg:col-span-7 glass-panel p-8 rounded-2xl">
                <?php
                if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
                    echo '<div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center gap-2"><i class="fa-solid fa-circle-check"></i> Pesan berhasil dikirim! Terima kasih sudah menghubungi.</div>';
                }
                ?>
                <form action="process-contact.php" method="POST" class="space-y-4">
                    <div>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" required class="w-full px-4 py-3 rounded-xl bg-gray-950/80 border border-gray-800 text-white text-sm focus:border-amber-500 focus:outline-none transition-colors">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Alamat Email Aktif" required class="w-full px-4 py-3 rounded-xl bg-gray-950/80 border border-gray-800 text-white text-sm focus:border-amber-500 focus:outline-none transition-colors">
                    </div>
                    <div>
                        <textarea name="pesan" rows="4" placeholder="Tulis pesan atau penawaran kerja sama..." required class="w-full px-4 py-3 rounded-xl bg-gray-950/80 border border-gray-800 text-white text-sm focus:border-amber-500 focus:outline-none transition-colors"></textarea>
                    </div>
                    <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-yellow-600 text-darkbg font-bold shadow-xl shadow-amber-500/30 hover:scale-[1.01] transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-gray-900 py-8 text-center text-gray-500 text-sm code-font">
        <p>&copy; <?php echo date('Y'); ?> <strong class="text-white">Desta Damaputra</strong>. Dibangun dengan standar profesional kelas atas, Laragon & GitHub.</p>
    </footer>

</body>
</html>