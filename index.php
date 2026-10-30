<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desta Damaputra — Senior Software Engineer & QA Specialist</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbg: '#02040a',
                        cardbg: '#070b19',
                        neonamber: '#f59e0b',
                        neoncyan: '#06b6d4',
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #02040a; color: #f3f4f6; overflow-x: hidden; cursor: default; }
        .code-font { font-family: 'Fira Code', monospace; }

        /* Canvas Background Animasi Partikel */
        #particle-canvas {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        /* Custom Glowing Cursor */
        .custom-cursor {
            pointer-events: none;
            position: fixed;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(245, 158, 11, 0.1) 0%, rgba(6, 182, 212, 0.06) 50%, transparent 70%);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
            z-index: 9998;
        }

        /* Glassmorphism Ultra Modern */
        .glass-ultra {
            background: rgba(7, 11, 25, 0.65);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .glass-ultra:hover {
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 0 35px rgba(245, 158, 11, 0.2);
            transform: translateY(-5px);
        }

        /* Animasi Petir / Lightning Glow Card */
        @keyframes lightningBorder {
            0%, 100% { border-color: rgba(245, 158, 11, 0.3); box-shadow: 0 0 20px rgba(245, 158, 11, 0.15), inset 0 0 15px rgba(245, 158, 11, 0.05); }
            50% { border-color: rgba(6, 182, 212, 0.8); box-shadow: 0 0 40px rgba(6, 182, 212, 0.4), inset 0 0 25px rgba(6, 182, 212, 0.15); }
        }
        .lightning-card {
            animation: lightningBorder 4s infinite ease-in-out;
        }

        /* Tombol Mengambang WhatsApp */
        .wa-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.5);
            z-index: 1000;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: pulseWA 2s infinite;
        }
        .wa-float:hover {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 15px 35px rgba(34, 197, 94, 0.8);
        }
        @keyframes pulseWA {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
            70% { box-shadow: 0 0 0 20px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }
    </style>
</head>
<body class="min-h-screen relative">

    <!-- Canvas Partikel Animasi & Petir Latar Belakang -->
    <canvas id="particle-canvas"></canvas>

    <!-- Custom Cursor Follower -->
    <div class="custom-cursor" id="cursor"></div>

    <!-- Tombol Mengambang WhatsApp -->
    <a href="https://wa.me/6285212746914?text=Halo%20Desta,%20saya%20tertarik%20dengan%20portofolio%20dan%20layanan%20Anda!" target="_blank" class="wa-float" title="Chat WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Navigation Bar -->
    <header class="fixed top-0 left-0 w-full z-50 px-4 py-4">
        <nav class="max-w-6xl mx-auto glass-ultra px-8 py-4 rounded-full flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-amber-500 to-yellow-300 text-darkbg font-extrabold rounded-xl flex items-center justify-center shadow-lg shadow-amber-500/30 text-lg">D</div>
                <span class="font-bold text-lg tracking-wider text-white">Desta<span class="text-amber-500">.dev</span></span>
            </div>
            <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-300">
                <li><a href="#about" class="hover:text-amber-500 transition-colors">Tentang</a></li>
                <li><a href="#experience" class="hover:text-amber-500 transition-colors">Pengalaman</a></li>
                <li><a href="#projects" class="hover:text-amber-500 transition-colors">Proyek</a></li>
                <li><a href="#skills" class="hover:text-amber-500 transition-colors">Keahlian</a></li>
            </ul>
            <div>
                <a href="#contact" class="bg-gradient-to-r from-amber-500 to-yellow-600 text-darkbg px-6 py-2.5 rounded-full text-sm font-bold shadow-lg shadow-amber-500/20 hover:scale-105 transition-all">
                    Hubungi Saya
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center max-w-6xl mx-auto px-6 pt-32 pb-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-semibold code-font shadow-lg shadow-amber-500/10">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                    SOFTWARE ENGINEER & QA SPECIALIST
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight tracking-tight">
                    Membangun Sistem Web <span class="bg-gradient-to-r from-amber-400 via-yellow-400 to-cyan-400 bg-clip-text text-transparent">Handal & Berkualitas</span>
                </h1>
                <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-xl font-light">
                    Halo! Saya <strong class="text-white font-semibold">Desta Damaputra</strong>, lulusan RPL SMKN Manonjaya yang berfokus pada pengembangan aplikasi web PHP/MySQL, sistem e-commerce <strong class="text-amber-400">raciklaba.id</strong>, serta pengujian sistem berbasis Software Quality Assurance (QA).
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#projects" class="px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-yellow-600 text-darkbg font-bold shadow-xl shadow-amber-500/30 hover:scale-105 transition-all flex items-center gap-2">
                        <i class="fa-solid fa-code"></i> Jelajahi Proyek
                    </a>
                    <a href="https://wa.me/6285212746914?text=Halo%20Desta,%20saya%20ingin%20berkolaborasi%20dengan%20Anda." target="_blank" class="px-8 py-4 rounded-xl glass-ultra text-white font-semibold hover:border-emerald-400 hover:text-emerald-400 transition-all flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-emerald-400 text-lg"></i> Chat WhatsApp
                    </a>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-800/80">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-amber-500 code-font">18+</h3>
                        <p class="text-xs text-gray-400 mt-1">Usia Produktif</p>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-cyan-400 code-font">4+</h3>
                        <p class="text-xs text-gray-400 mt-1">Proyek Sistem Web</p>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-purple-400 code-font">100%</h3>
                        <p class="text-xs text-gray-400 mt-1">Standar QA Teruji</p>
                    </div>
                </div>
            </div>

            <!-- Kartu Profil dengan Foto Asli (foto-profil.jpeg) & Efek Petir Neon -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="lightning-card glass-ultra p-6 rounded-3xl w-full max-w-sm text-center relative shadow-2xl">
                    <div class="relative w-48 h-48 mx-auto mb-6 rounded-2xl p-1 bg-gradient-to-tr from-amber-500 to-cyan-400 shadow-2xl overflow-hidden group">
                        <!-- Foto Profil Asli -->
                        <img src="foto-profil.jpeg" alt="Desta Damaputra" class="w-full h-full object-cover rounded-2xl group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=60'">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">Desta Damaputra</h3>
                    <p class="text-xs text-gray-400 code-font mb-4"><i class="fa-solid fa-location-dot text-amber-500 mr-1"></i> Tasikmalaya, Jawa Barat</p>
                    <div class="flex flex-wrap justify-center gap-2">
                        <span class="px-3 py-1 bg-amber-500/10 text-amber-400 border border-amber-500/30 text-xs font-semibold rounded-lg code-font">PHP Native</span>
                        <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 text-xs font-semibold rounded-lg code-font">Software QA</span>
                        <span class="px-3 py-1 bg-purple-500/10 text-purple-400 border border-purple-500/30 text-xs font-semibold rounded-lg code-font">Laragon</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 01. LATAR BELAKANG & PROFIL</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Tentang Desta Damaputra</h2>
            <p class="text-gray-400 text-sm mt-1">Mengenal rekam jejak pendidikan di SMKN Manonjaya</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-7 glass-ultra p-8 rounded-3xl space-y-4">
                <h3 class="text-xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-graduation-cap text-amber-500 p-3 bg-amber-500/10 rounded-2xl"></i> Rekayasa Perangkat Lunak (RPL)
                </h3>
                <p class="text-gray-300 leading-relaxed text-sm md:text-base font-light">
                    Saya merupakan lulusan SMK Negeri Manonjaya dengan spesialisasi <strong class="text-white font-semibold">Rekayasa Perangkat Lunak</strong>. Terbiasa merancang arsitektur database MySQL, membuat logika backend menggunakan PHP Native, serta mengelola server lokal menggunakan Laragon di direktori `htdocs`.
                </p>
                <p class="text-gray-300 leading-relaxed text-sm md:text-base font-light">
                    Selain hobi membuat web, saya memiliki komitmen tinggi terhadap kualitas perangkat lunak melalui pelatihan <strong class="text-cyan-400 font-semibold">Software Quality Assurance</strong> untuk meminimalisir bug dan memastikan fungsionalitas sistem berjalan sempurna.
                </p>
            </div>
            <div class="lg:col-span-5 glass-ultra p-8 rounded-3xl space-y-4">
                <h3 class="text-xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-address-card text-amber-500 p-3 bg-amber-500/10 rounded-2xl"></i> Informasi Kontak
                </h3>
                <ul class="space-y-3 text-sm text-gray-300 code-font">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-amber-500 w-5"></i> <span>desta@email.dev</span></li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-amber-500 w-5"></i> <span>+62 852-1274-6914</span></li>
                    <li class="flex items-center gap-3"><i class="fa-brands fa-github text-amber-500 w-5"></i> <span>damaputradesta-wq</span></li>
                    <li class="flex items-center gap-3"><i class="fa-brands fa-tiktok text-amber-500 w-5"></i> <span>CrossingTime / cauuasakk1</span></li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-amber-500 w-5"></i> <span>Tasikmalaya, Jawa Barat</span></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Experience & Training Section -->
    <section id="experience" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 02. KEAHLIAN & PENGALAMAN</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Pelatihan & E-Commerce</h2>
            <p class="text-gray-400 text-sm mt-1">Rekam jejak praktis di bidang digital marketing dan QA testing</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="glass-ultra p-8 rounded-3xl space-y-4 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-amber-500 to-yellow-300"></div>
                <div class="flex items-center gap-4">
                    <div class="p-3.5 bg-amber-500/10 text-amber-500 rounded-2xl text-xl">
                        <i class="fa-solid fa-vial-circle-check"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Software Quality Assurance (QA)</h3>
                        <span class="text-xs text-amber-400 code-font">Analisis & Skenario Pengujian</span>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed font-light">
                    Menguasai requirements analysis, penulisan user story, acceptance criteria, perancangan test case terstruktur, risk assessment, hingga state transition testing untuk validasi sistem aplikasi.
                </p>
            </div>
            <div class="glass-ultra p-8 rounded-3xl space-y-4 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-cyan-400 to-blue-500"></div>
                <div class="flex items-center gap-4">
                    <div class="p-3.5 bg-cyan-500/10 text-cyan-400 rounded-2xl text-xl">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Digital Marketing & Store Management</h3>
                        <span class="text-xs text-cyan-400 code-font">TikTok Shop & Tokopedia (CrossingTime)</span>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed font-light">
                    Berpengalaman mengelola toko online mandiri, optimasi penjualan produk ritel, manajemen inventaris digital, serta eksekusi konten pemasaran affiliate di TikTok.
                </p>
            </div>
        </div>
    </section>

    <!-- Projects Section (Termasuk raciklaba.id) -->
    <section id="projects" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 03. PROYEK UNGGULAN</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Portofolio Sistem Web & Aplikasi</h2>
            <p class="text-gray-400 text-sm mt-1">Daftar platform dan sistem digital yang dikembangkan secara mandiri</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- raciklaba.id -->
            <div class="glass-ultra p-6 rounded-3xl flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 bg-amber-500/10 text-amber-500 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">raciklaba.id</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-6 font-light">
                        Platform web analitik keuangan dan manajemen kalkulasi keuntungan bisnis digital untuk UMKM dan toko online.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-[10px] code-font rounded-lg border border-amber-500/20">PHP</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-[10px] code-font rounded-lg border border-cyan-500/20">MySQL</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-purple-400 text-[10px] code-font rounded-lg border border-purple-500/20">Analytics</span>
                </div>
            </div>
            <!-- Laundry App Pro -->
            <div class="glass-ultra p-6 rounded-3xl flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 bg-cyan-500/10 text-cyan-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Laundry App Pro</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-6 font-light">
                        Sistem manajemen operasional laundry berbasis web untuk memantau data transaksi dan kalkulasi berat pakaian.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-[10px] code-font rounded-lg border border-amber-500/20">PHP Native</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-[10px] code-font rounded-lg border border-cyan-500/20">MySQL</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-purple-400 text-[10px] code-font rounded-lg border border-purple-500/20">Laragon</span>
                </div>
            </div>
            <!-- CrossingTime Store -->
            <div class="glass-ultra p-6 rounded-3xl flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">CrossingTime Store</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-6 font-light">
                        Manajemen toko online lintas platform (TikTok Shop & Tokopedia) dengan optimasi strategi digital marketing.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-[10px] code-font rounded-lg border border-amber-500/20">Marketing</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-[10px] code-font rounded-lg border border-cyan-500/20">TikTok</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-purple-400 text-[10px] code-font rounded-lg border border-purple-500/20">Tokopedia</span>
                </div>
            </div>
            <!-- Software QA Suite -->
            <div class="glass-ultra p-6 rounded-3xl flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 bg-emerald-500/10 text-emerald-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Software QA Suite</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-6 font-light">
                        Dokumentasi pengujian perangkat lunak terstruktur mencakup requirement analysis dan perancangan test case.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2.5 py-1 bg-gray-950 text-amber-400 text-[10px] code-font rounded-lg border border-amber-500/20">QA Testing</span>
                    <span class="px-2.5 py-1 bg-gray-950 text-cyan-400 text-[10px] code-font rounded-lg border border-cyan-500/20">Test Case</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 04. TECH STACK</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Keahlian & Teknologi</h2>
            <p class="text-gray-400 text-sm mt-1">Perangkat dan bahasa pemrograman yang dikuasai</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="glass-ultra p-6 rounded-3xl text-center group">
                <i class="fa-brands fa-php text-4xl text-indigo-400 mb-3 group-hover:scale-125 transition-transform"></i>
                <h4 class="font-bold text-white text-sm">PHP Native</h4>
            </div>
            <div class="glass-ultra p-6 rounded-3xl text-center group">
                <i class="fa-solid fa-database text-4xl text-cyan-400 mb-3 group-hover:scale-125 transition-transform"></i>
                <h4 class="font-bold text-white text-sm">MySQL</h4>
            </div>
            <div class="glass-ultra p-6 rounded-3xl text-center group">
                <i class="fa-solid fa-bug-slash text-4xl text-emerald-400 mb-3 group-hover:scale-125 transition-transform"></i>
                <h4 class="font-bold text-white text-sm">Software QA</h4>
            </div>
            <div class="glass-ultra p-6 rounded-3xl text-center group">
                <i class="fa-brands fa-git-alt text-4xl text-orange-500 mb-3 group-hover:scale-125 transition-transform"></i>
                <h4 class="font-bold text-white text-sm">Git & GitHub</h4>
            </div>
            <div class="glass-ultra p-6 rounded-3xl text-center group">
                <i class="fa-solid fa-server text-4xl text-amber-500 mb-3 group-hover:scale-125 transition-transform"></i>
                <h4 class="font-bold text-white text-sm">Laragon</h4>
            </div>
            <div class="glass-ultra p-6 rounded-3xl text-center group">
                <i class="fa-solid fa-chart-pie text-4xl text-pink-400 mb-3 group-hover:scale-125 transition-transform"></i>
                <h4 class="font-bold text-white text-sm">raciklaba.id</h4>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <span class="text-amber-500 code-font text-xs font-bold uppercase tracking-widest">// 05. KONTAK & KOLABORASI</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Mari Terhubung dengan Saya</h2>
            <p class="text-gray-400 text-sm mt-1">Kirimkan pesan langsung atau ajakan kerja sama profesional</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-5 glass-ultra p-8 rounded-3xl space-y-6">
                <h3 class="text-xl font-bold text-white">Diskusikan Proyek Anda</h3>
                <p class="text-gray-300 text-sm leading-relaxed font-light">
                    Saya terbuka untuk peluang karier, proyek web development, kolaborasi platform <strong class="text-amber-400">raciklaba.id</strong>, maupun diskusi seputar pengujian kualitas perangkat lunak (QA).
                </p>
                <div class="space-y-3 code-font text-sm text-gray-300">
                    <p class="flex items-center gap-3"><i class="fa-solid fa-envelope text-amber-500 w-5"></i> desta@email.dev</p>
                    <p class="flex items-center gap-3"><i class="fa-solid fa-phone text-amber-500 w-5"></i> +62 852-1274-6914</p>
                    <p class="flex items-center gap-3"><i class="fa-brands fa-github text-amber-500 w-5"></i> damaputradesta-wq</p>
                </div>
            </div>
            <div class="lg:col-span-7 glass-ultra p-8 rounded-3xl">
                <?php
                if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
                    echo '<div class="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center gap-2"><i class="fa-solid fa-circle-check"></i> Pesan berhasil dikirim! Terima kasih sudah menghubungi.</div>';
                }
                ?>
                <form action="process-contact.php" method="POST" class="space-y-4">
                    <div>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" required class="w-full px-5 py-3.5 rounded-xl bg-gray-950/80 border border-gray-800 text-white text-sm focus:border-amber-500 focus:outline-none transition-colors">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Alamat Email Aktif" required class="w-full px-5 py-3.5 rounded-xl bg-gray-950/80 border border-gray-800 text-white text-sm focus:border-amber-500 focus:outline-none transition-colors">
                    </div>
                    <div>
                        <textarea name="pesan" rows="4" placeholder="Tulis pesan atau penawaran kerja sama..." required class="w-full px-5 py-3.5 rounded-xl bg-gray-950/80 border border-gray-800 text-white text-sm focus:border-amber-500 focus:outline-none transition-colors"></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-amber-500 to-yellow-600 text-darkbg font-bold shadow-xl shadow-amber-500/30 hover:scale-[1.01] transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer (Hanya 2026 Desta Damaputra) -->
    <footer class="border-t border-gray-900/80 py-8 text-center text-gray-500 text-sm code-font">
        <p>&copy; 2026 Desta Damaputra</p>
    </footer>

    <!-- Script JavaScript untuk Animasi Partikel Cyber (Efek Neural Network Bergerak) -->
    <script>
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        let particlesArray = [];
        const numberOfParticles = 65;

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedX = (Math.random() - 0.5) * 0.8;
                this.speedY = (Math.random() - 0.5) * 0.8;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x > canvas.width) this.x = 0;
                else if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0;
                else if (this.y < 0) this.y = canvas.height;
            }
            draw() {
                ctx.fillStyle = 'rgba(245, 158, 11, 0.5)';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            particlesArray = [];
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }
        initParticles();

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
                particlesArray[i].draw();

                for (let j = i; j < particlesArray.length; j++) {
                    const dx = particlesArray[i].x - particlesArray[j].x;
                    const dy = particlesArray[i].y - particlesArray[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    if (distance < 120) {
                        ctx.strokeStyle = `rgba(6, 182, 212, ${0.15 - distance/800})`;
                        ctx.lineWidth = 0.8;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[i].x, particlesArray[i].y);
                        ctx.lineTo(particlesArray[j].x, particlesArray[j].y);
                        ctx.stroke();
                    }
                }
            }
            requestAnimationFrame(animateParticles);
        }
        animateParticles();

        // Cursor Follower
        const cursor = document.getElementById('cursor');
        window.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
    </script>
</body>
</html>