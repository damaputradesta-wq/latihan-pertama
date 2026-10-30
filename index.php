<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desta Damaputra — Software Engineer & QA Specialist</title>
    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <nav class="glass-nav">
            <div class="logo-container">
                <span class="logo-badge">D</span>
                <h2 class="logo">Desta.dev</h2>
            </div>
            <ul class="nav-links">
                <li><a href="#about"><i class="fa-solid fa-user"></i> Tentang</a></li>
                <li><a href="#projects"><i class="fa-solid fa-briefcase"></i> Proyek</a></li>
                <li><a href="#skills"><i class="fa-solid fa-code"></i> Keahlian</a></li>
                <li><a href="#contact" class="nav-btn">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section dengan Foto Profil -->
    <section class="hero">
        <div class="hero-content">
            <div class="status-badge">
                <span class="pulse-dot"></span> Tersedia untuk Kolaborasi & Karier
            </div>
            <h1>Halo, Saya <span class="gradient-text">Desta Damaputra</span></h1>
            <p class="hero-subtitle">Software Engineering Graduate dari SMKN Manonjaya & Software Quality Assurance Enthusiast yang berfokus pada pembuatan aplikasi web handal serta pengujian sistem berkualitas tinggi.</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn primary-btn"><i class="fa-solid fa-rocket"></i> Lihat Portofolio Proyek</a>
                <a href="#contact" class="btn secondary-btn"><i class="fa-solid fa-envelope"></i> Hubungi Saya</a>
            </div>
        </div>
        <div class="hero-profile-container">
            <div class="profile-card-glass">
                <!-- Ganti "foto-profil.jpg" dengan nama file foto kamu di folder lokal -->
                <img src="foto-profil.jpg" alt="Desta Damaputra" class="profile-img" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=60'">
                <div class="profile-info">
                    <h3>Desta Damaputra</h3>
                    <p><i class="fa-solid fa-location-dot"></i> Tasikmalaya, Jawa Barat</p>
                    <div class="profile-tags">
                        <span>PHP & MySQL</span>
                        <span>Software QA</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section / Penjelasan Pribadi & Latar Belakang -->
    <section id="about" class="about">
        <div class="section-title">
            <h2>Tentang Pribadi & Latar Belakang</h2>
            <p>Mengenal lebih dekat perjalanan profesional dan keahlian saya</p>
        </div>
        <div class="about-grid">
            <div class="about-text glass-box">
                <h3><i class="fa-solid fa-graduation-cap" style="color: #f59e0b;"></i> Pendidikan & Pengalaman</h3>
                <p>Saya merupakan lulusan SMK Negeri Manonjaya dengan spesialisasi keahlian <strong>Rekayasa Perangkat Lunak (RPL)</strong>. Selama masa studi dan pengembangan mandiri, saya terbiasa merancang sistem aplikasi berbasis web menggunakan lingkungan lokal server (Laragon, PHP Native, dan database MySQL).</p>
                <p>Selain pengembangan (development), saya juga mendalami pelatihan intensif di bidang <strong>Software Quality Assurance (QA)</strong>, mencakup analisis kebutuhan, penyusunan acceptance criteria, perancangan test case, hingga pengujian state transition untuk memastikan perangkat lunak bebas dari celah error sebelum dirilis.</p>
            </div>
            <div class="about-contact-info glass-box">
                <h3><i class="fa-solid id-card" style="color: #f59e0b;"></i> Informasi Kontak</h3>
                <ul class="contact-details-list">
                    <li><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> desta@email.dev</li>
                    <li><i class="fa-solid fa-phone"></i> <strong>Telepon/WhatsApp:</strong> +62 8xx-xxxx-xxxx</li>
                    <li><i class="fa-brands fa-github"></i> <strong>GitHub:</strong> damaputradesta-wq</li>
                    <li><i class="fa-brands fa-tiktok"></i> <strong>TikTok / Tokopedia:</strong> CrossingTime / cauuasakk1</li>
                    <li><i class="fa-solid fa-location-dot"></i> <strong>Domisili:</strong> Tasikmalaya, Jawa Barat, Indonesia</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Projects Section / Penjelasan Detail Proyek -->
    <section id="projects" class="projects">
        <div class="section-title">
            <h2>Proyek & Pengalaman Kerja</h2>
            <p>Daftar aplikasi dan sistem yang pernah dikembangkan</p>
        </div>
        <div class="projects-grid">
            <div class="project-card-3d">
                <div class="card-content">
                    <div class="card-icon"><i class="fa-solid fa-shirt"></i></div>
                    <h3>Laundry App Pro</h3>
                    <p><strong>Deskripsi Proyek:</strong> Aplikasi manajemen operasional laundry kiloan berbasis web untuk memantau data transaksi pelanggan, pencatatan berat pakaian, hingga kalkulasi biaya otomatis.</p>
                    <p><strong>Teknologi:</strong> PHP Native, MySQL Database, HTML5, CSS3, JavaScript.</p>
                    <div class="tech-tags">
                        <span>Web App</span><span>Database MySQL</span><span>Laragon Local</span>
                    </div>
                </div>
            </div>
            <div class="project-card-3d">
                <div class="card-content">
                    <div class="card-icon"><i class="fa-solid fa-store"></i></div>
                    <h3>CrossingTime Store & E-Commerce</h3>
                    <p><strong>Deskripsi Proyek:</strong> Pengelolaan toko online mandiri di platform TikTok Shop dan Tokopedia, mencakup manajemen inventaris produk, layanan pelanggan, serta strategi pemasaran digital.</p>
                    <p><strong>Teknologi:</strong> Digital Marketing, Content Promotion, Store Management.</p>
                    <div class="tech-tags">
                        <span>TikTok Shop</span><span>Tokopedia</span><span>Digital Marketing</span>
                    </div>
                </div>
            </div>
            <div class="project-card-3d">
                <div class="card-content">
                    <div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>Software QA & Testing Suite</h3>
                    <p><strong>Deskripsi Proyek:</strong> Simulasi audit dan pengujian sistem perangkat lunak, meliputi analisis requirement dokumen, penulisan test case terstruktur, serta evaluasi risiko.</p>
                    <p><strong>Teknologi:</strong> Test Case Design, Acceptance Criteria, State Transition Testing.</p>
                    <div class="tech-tags">
                        <span>Quality Assurance</span><span>Testing</span><span>Analysis</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="section-title">
            <h2>Keahlian Teknis</h2>
            <p>Kapabilitas yang dikuasai untuk mendukung dunia kerja profesional</p>
        </div>
        <div class="skills-grid">
            <div class="skill-item glass-box"><i class="fa-brands fa-php" style="color: #777bb3;"></i> PHP & MySQL Development</div>
            <div class="skill-item glass-box"><i class="fa-solid fa-bug-slash" style="color: #10b981;"></i> Software Quality Assurance (QA)</div>
            <div class="skill-item glass-box"><i class="fa-brands fa-git-alt" style="color: #f05032;"></i> Git & GitHub Version Control</div>
            <div class="skill-item glass-box"><i class="fa-solid fa-server" style="color: #f59e0b;"></i> Laragon & Local Web Hosting</div>
            <div class="skill-item glass-box"><i class="fa-solid fa-bullhorn" style="color: #ec4899;"></i> Digital Marketing & Affiliate</div>
            <div class="skill-item glass-box"><i class="fa-solid fa-code" style="color: #38bdf8;"></i> HTML5, CSS3, & JavaScript</div>
        </div>
    </section>

    <!-- Contact Form & Direct Email Section -->
    <section id="contact" class="contact">
        <div class="section-title">
            <h2>Hubungi Saya</h2>
            <p>Punya pertanyaan atau ingin merekrut saya? Kirim pesan langsung di bawah ini</p>
        </div>
        <div class="contact-container-grid">
            <div class="contact-info-card glass-box">
                <h3>Mari Berdiskusi!</h3>
                <p>Saya selalu terbuka untuk peluang kerja sama, magang, proyek web development, maupun diskusi seputar Software Quality Assurance.</p>
                <div class="direct-contact-links">
                    <p><i class="fa-solid fa-envelope"></i> <strong>Email Utama:</strong> desta@email.dev</p>
                    <p><i class="fa-solid fa-location-dot"></i> <strong>Lokasi:</strong> Tasikmalaya, Jawa Barat</p>
                </div>
            </div>
            <div class="contact-wrapper glass-box">
                <?php
                if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
                    echo '<div class="alert-success"><i class="fa-solid fa-circle-check"></i> Pesan Anda berhasil dikirim! Terima kasih sudah menghubungi.</div>';
                }
                ?>
                <form action="process-contact.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" required>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Alamat Email Aktif" required>
                    </div>
                    <div class="input-group">
                        <textarea name="pesan" rows="4" placeholder="Tulis pesan atau penawaran kerja sama..." required></textarea>
                    </div>
                    <button type="submit" class="btn primary-btn submit-btn"><i class="fa-solid fa-paper-plane"></i> Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> <strong>Desta Damaputra</strong>. Dibuat secara profesional, elegan, dan terintegrasi dengan GitHub.</p>
    </footer>

</body>
</html>