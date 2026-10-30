<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Desta Damaputra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <nav>
            <h2 class="logo">Desta.dev</h2>
            <ul>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Halo, Saya <span class="highlight">Desta Damaputra</span></h1>
        <p>Software Engineering & Web Developer Enthusiast dari Tasikmalaya.</p>
        <a href="#projects" class="btn">Lihat Proyek</a>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>Tentang Saya</h2>
        <p>Saya adalah seorang pengembang web pemula yang berfokus pada pembuatan website fungsional menggunakan PHP, MySQL, serta memiliki ketertarikan mendalam di bidang Software Quality Assurance (QA).</p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <h2>Proyek Unggulan</h2>
        <div class="project-grid">
            <div class="project-card">
                <h3>Laundry App Pro</h3>
                <p>Aplikasi manajemen pengelolaan data laundry berbasis web menggunakan PHP dan MySQL.</p>
            </div>
            <div class="project-card">
                <h3>Sistem Toko Online</h3>
                <p>Platform e-commerce sederhana untuk pengelolaan produk dan transaksi digital.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section dengan PHP Form Handling -->
    <section id="contact" class="contact">
        <h2>Hubungi Saya</h2>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
            echo '<p class="alert-success">Terima kasih! Pesan Anda berhasil dikirim.</p>';
        }
        ?>
        <form action="process-contact.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Alamat Email" required>
            <textarea name="pesan" rows="5" placeholder="Tulis pesan atau masukan..." required></textarea>
            <button type="submit" class="btn">Kirim Pesan</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Desta Damaputra. Built with Laragon & GitHub.</p>
    </footer>

</body>
</html>