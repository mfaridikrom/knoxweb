
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Knoxweb</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: "Segoe UI", sans-serif;
            color: #1e293b;
        }

        .navbar {
            background: #111827;
        }

        .about-hero {
            background: linear-gradient(135deg, #111827, #2563eb);
            color: white;
            padding: 65px 40px;
            border-radius: 24px;
        }

        .about-hero p {
            color: #dbeafe;
            max-width: 700px;
            line-height: 1.8;
        }

        .info-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 28px;
            height: 100%;
            transition: 0.2s;
        }

        .info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px #00000010;
        }

        .info-icon {
            font-size: 35px;
            margin-bottom: 16px;
        }

        .info-card p {
            color: #64748b;
            line-height: 1.8;
        }

        footer {
            background: #111827;
            color: #cbd5e1;
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
                        <a class="nav-link active" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/komang">Komang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">

        <!-- Hero Tentang -->
        <section class="about-hero mb-5">
            <span class="badge bg-light text-primary p-2 mb-3">
                TENTANG KAMI
            </span>

            <h1 class="display-5 fw-bold">
                Mengenal Knoxweb
            </h1>

            <p class="mt-3 mb-4">
                Knoxweb adalah project website yang dikembangkan
                untuk mempelajari teknologi web dan membangun
                pengalaman digital yang modern, sederhana, serta mudah digunakan.
            </p>

            <a href="/" class="btn btn-light text-primary fw-semibold">
                ← Kembali ke Home
            </a>
        </section>

        <!-- Visi dan Misi -->
        <section class="mb-5">
            <h2 class="fw-bold mb-2">Tujuan Kami</h2>
            <p class="text-secondary mb-4">
                Prinsip yang menjadi dasar pengembangan website Knoxweb.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">🎯</div>
                        <h5 class="fw-bold">Tujuan</h5>
                        <p class="mb-0">
                            Membangun website yang terstruktur,
                            informatif, dan mudah digunakan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">💡</div>
                        <h5 class="fw-bold">Kreativitas</h5>
                        <p class="mb-0">
                            Mengembangkan ide menjadi tampilan web
                            yang menarik dan responsif.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">💻</div>
                        <h5 class="fw-bold">Teknologi</h5>
                        <p class="mb-0">
                            Menggunakan Laravel, PHP, HTML, CSS,
                            dan Bootstrap dalam pengembangan web.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Informasi -->
        <section class="p-4 p-md-5 rounded-4 bg-white border">
            <h3 class="fw-bold">Tentang Project Ini</h3>
            <p class="text-secondary mb-0" style="line-height: 1.9;">
                Knoxweb merupakan project pembelajaran pengembangan
                website. Halaman ini menjadi tempat untuk menyampaikan
                informasi mengenai tujuan project, teknologi yang digunakan,
                dan pengembangan website ke depannya.
            </p>
        </section>

    </main>

    <!-- Footer -->
    <footer class="py-4 mt-4">
        <div class="container d-flex justify-content-between flex-wrap gap-2">
            <span>© 2026 Knoxweb</span>
            <span>Tentang Knoxweb</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
