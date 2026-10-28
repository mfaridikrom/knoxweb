
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Komang | Knoxweb</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #f5f8fc;
            color: #1e293b;
        }

        .navbar {
            background: #111827;
        }

        .hero {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
            padding: 90px 0;
            border-radius: 0 0 35px 35px;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            font-weight: 800;
        }

        .hero p {
            color: #dbeafe;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .hero-label {
            display: inline-block;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            padding: 8px 16px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .house-visual {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 25px;
            padding: 35px;
            text-align: center;
        }

        .house-visual .house-icon {
            font-size: 110px;
            line-height: 1.4;
        }

        .info-card {
            background: white;
            border: 1px solid #e8edf5;
            border-radius: 18px;
            padding: 25px;
            height: 100%;
            transition: 0.25s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
        }

        .info-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: #dbeafe;
            font-size: 24px;
            margin-bottom: 18px;
        }

        .section-title {
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .about-box {
            background: white;
            border-radius: 22px;
            padding: 35px;
            border: 1px solid #e8edf5;
        }

        .footer {
            background: #111827;
            color: #94a3b8;
            padding: 25px 0;
            margin-top: 70px;
        }

        .btn-home {
            background: white;
            color: #1d4ed8;
            font-weight: 600;
            padding: 12px 22px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-home:hover {
            background: #dbeafe;
            color: #1e40af;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">✦ Knoxweb</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/komang">Komang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="hero-label">🏡 Ruang Personal</span>

                    <h1>Selamat Datang di Rumah Komang</h1>

                    <p class="mt-3 mb-4">
                        Tempat sederhana untuk mengenal rumah Komang.
                        Halaman ini menjadi bagian dari website Knoxweb
                        dengan tampilan yang bersih, modern, dan nyaman.
                    </p>

                    <a href="/" class="btn-home">← Kembali ke Home</a>
                </div>

                <div class="col-lg-5">
                    <div class="house-visual">
                        <div class="house-icon">🏡</div>
                        <h4 class="fw-bold mt-3">Rumah Komang</h4>
                        <p class="text-white-50 mb-0">
                            Sederhana, nyaman, dan penuh cerita.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <span class="text-primary fw-semibold">KENALI LEBIH DEKAT</span>
            <h2 class="section-title mt-2">Apa yang Ada di Sini?</h2>
            <p class="text-secondary">
                Beberapa hal yang menggambarkan rumah Komang.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-icon">🏠</div>
                    <h5 class="fw-bold">Tempat Tinggal</h5>
                    <p class="text-secondary mb-0">
                        Rumah sebagai tempat beristirahat dan menjalani
                        aktivitas sehari-hari.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-icon">🌿</div>
                    <h5 class="fw-bold">Kenyamanan</h5>
                    <p class="text-secondary mb-0">
                        Suasana yang tenang untuk bersantai, belajar,
                        dan menghabiskan waktu.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-icon">✨</div>
                    <h5 class="fw-bold">Cerita Rumah</h5>
                    <p class="text-secondary mb-0">
                        Setiap rumah memiliki cerita dan kenangan
                        tersendiri bagi penghuninya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Rumah -->
    <section class="container">
        <div class="about-box">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h3 class="section-title">Rumah Bukan Sekadar Bangunan</h3>
                    <p class="text-secondary mt-3 mb-0">
                        Rumah adalah tempat untuk kembali, beristirahat,
                        dan menciptakan kenangan. Melalui halaman ini,
                        kamu dapat mengembangkan informasi tentang rumah
                        Komang sesuai kebutuhan website.
                    </p>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <span class="badge rounded-pill text-bg-primary p-3">
                        Knoxweb · Komang
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container d-flex justify-content-between flex-wrap gap-2">
            <span>© 2026 Knoxweb</span>
            <span>Dibuat untuk halaman Rumah Komang</span>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
