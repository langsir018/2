<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Direktori Pelajar Online</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header id="home">
        <div class="hero">
            <img src="img/logo.png" class="logo" alt="Logo Sistem">
            <h1>Sistem Direktori Pelajar Online</h1>
            <p>Platform pengurusan maklumat pelajar secara digital, kemas dan responsif.</p>

            <a href="#daftar" class="hero-btn">Daftar Pelajar</a>
        </div>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="#tentang">Tentang Sistem</a>
        <a href="#daftar">Daftar Pelajar</a>
        <a href="#senarai">Senarai Pelajar</a>
        <a href="#hubungi">Hubungi Kami</a>
    </nav>

    <main>

        <!-- SECTION HOME -->
        <section class="section">
            <div class="container">
                <h2>Selamat Datang</h2>
                <p>
                    Sistem Direktori Pelajar Online dibangunkan untuk memudahkan proses
                    penyimpanan, pengurusan dan paparan maklumat pelajar secara online.
                    Sistem ini membantu pengguna mendaftar pelajar baharu dan melihat
                    senarai pelajar yang telah didaftarkan melalui pangkalan data.
                </p>

                <div class="feature-grid">
                    <div class="feature-card">
                        <h3>Responsif</h3>
                        <p>Paparan sesuai untuk desktop, tablet dan telefon pintar.</p>
                    </div>

                    <div class="feature-card">
                        <h3>Database</h3>
                        <p>Data pelajar disimpan ke dalam pangkalan data MySQL.</p>
                    </div>

                    <div class="feature-card">
                        <h3>Mudah Digunakan</h3>
                        <p>Antara muka sistem ringkas, kemas dan mesra pengguna.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION TENTANG -->
        <section id="tentang" class="section blue-section">
            <div class="container">
                <h2>Tentang Sistem</h2>

                <div class="info-box">
                    <h3>Tujuan</h3>
                    <p>
                        Sistem ini bertujuan untuk menyediakan satu platform online
                        bagi mendaftarkan dan mengurus maklumat pelajar dengan lebih mudah,
                        cepat dan tersusun.
                    </p>
                </div>

                <div class="info-box">
                    <h3>Objektif</h3>
                    <ul>
                        <li>Menyediakan borang pendaftaran pelajar secara digital.</li>
                        <li>Menyimpan maklumat pelajar ke dalam pangkalan data.</li>
                        <li>Memaparkan senarai pelajar dalam bentuk kad yang kemas.</li>
                        <li>Memastikan sistem responsif pada pelbagai jenis peranti.</li>
                        <li>Memastikan tiada broken link, missing image atau fail CSS/JavaScript rosak.</li>
                    </ul>
                </div>

                <div class="info-box">
                    <h3>Visi</h3>
                    <p>
                        Menjadi sistem direktori pelajar online yang cekap,
                        moden dan mudah digunakan oleh pengguna.
                    </p>
                </div>

                <div class="info-box">
                    <h3>Misi</h3>
                    <p>
                        Membangunkan sistem pengurusan maklumat pelajar yang sistematik,
                        responsif dan dapat membantu proses pentadbiran secara digital.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION DAFTAR -->
        <section id="daftar" class="section">
            <div class="container">
                <h2>Daftar Pelajar</h2>
                <p>Sila lengkapkan maklumat pelajar di bawah.</p>

                <form action="proses_daftar.php" method="POST" class="form-box">
                    <label>Nama Pelajar</label>
                    <input type="text" name="nama" placeholder="Contoh: Ahmad Bin Ali" required>

                    <label>Email</label>
                    <input type="email" name="email" placeholder="Contoh: ahmad@gmail.com" required>

                    <label>Program</label>
                    <select name="program" required>
                        <option value="">-- Pilih Program --</option>
                        <option value="Diploma Teknologi Pembangunan Aplikasi Web & Mobile">
                            Diploma Teknologi Pembangunan Aplikasi Web & Mobile
                        </option>
                        <option value="Diploma Teknologi Komputer">
                            Diploma Teknologi Komputer
                        </option>
                        <option value="Diploma Teknologi Maklumat">
                            Diploma Teknologi Maklumat
                        </option>
                        <option value="Sijil Teknologi Komputer">
                            Sijil Teknologi Komputer
                        </option>
                    </select>

                    <button type="submit">Simpan Data Pelajar</button>
                </form>
            </div>
        </section>

        <!-- SECTION SENARAI -->
        <section id="senarai" class="section gray-section">
            <div class="container">
                <h2>Senarai Pelajar</h2>
                <p>Berikut ialah senarai pelajar yang telah didaftarkan dalam sistem.</p>

                <div class="student-grid">
                    <?php
                $query = "SELECT * FROM pelajar ORDER BY id DESC";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <div class='student-card'>
                            <div class='student-icon'>👨‍🎓</div>
                            <h3>" . htmlspecialchars($row['nama']) . "</h3>
                            <p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>
                            <p><strong>Program:</strong> " . htmlspecialchars($row['program']) . "</p>
                            <p><strong>Tarikh Daftar:</strong> " . $row['tarikh_daftar'] . "</p>
                        </div>
                        ";
                    }
                } else {
                    echo "<div class='empty-box'>Tiada pelajar didaftarkan lagi.</div>";
                }
                ?>
                </div>
            </div>
        </section>

        <!-- SECTION HUBUNGI -->
        <section id="hubungi" class="section">
            <div class="container">
                <h2>Hubungi Kami</h2>

                <div class="contact-grid">
                    <div class="contact-card">
                        <h3>Alamat</h3>
                        <p>ADTEC JTM Kampus Kuala Langat, Selangor.</p>
                    </div>

                    <div class="contact-card">
                        <h3>Nombor Telefon</h3>
                        <p>03-1234 5678</p>
                    </div>

                    <div class="contact-card">
                        <h3>Email</h3>
                        <p>direktori@adtec.edu.my</p>
                    </div>

                    <div class="contact-card">
                        <h3>Media Sosial</h3>
                        <p>Facebook / Instagram: Direktori Pelajar Online</p>
                    </div>

                    <div class="contact-card">
                        <h3>Waktu Operasi</h3>
                        <p>Isnin - Jumaat<br>8.00 pagi - 5.00 petang</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2026 Sistem Direktori Pelajar Online. Semua Hak Cipta Terpelihara.</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>