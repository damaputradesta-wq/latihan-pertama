<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Di sini nanti bisa kamu hubungkan ke database MySQL untuk menyimpan pesan
    // Untuk saat ini, kita arahkan kembali ke index.php dengan status sukses
    
    header("Location: index.php?status=sukses#contact");
    exit();
}