
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Knoxweb</title>

    <!-- Bootstrap CSS -->
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

        .hero {
            background: linear-gradient(135deg, #111827, #2563eb);
            color: white;
            border-radius: 24px;
            padding: 80px 45px;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            font-weight: 800;
            line-height: 1.2;
        }

        .hero p {
            color: #dbeafe;
            max-width: 650px;
            line-height: 1.8;
        }

        .hero-label {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 15px;
            border-radius: 30px;
            margin-bottom: 22px;
            width: fit-content;
            font-size: 14px;
        }

        .hero-button {
            background: white;
            color: #1d4ed8;
            border: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            width: fit-content;
            transition: 0.2s;
        }

        .hero-button:hover {
            background: #dbeafe;
            color: #1e40af;
        }

        .welcome-info {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 35px;
        }

        footer {
            background: #111827;
            color: #cbd5e1;
        }

        @media (max-width: 576px) {
            .hero {
                padding: 45px 25px;
                min-height: 350px;
            }

            .welcome-info {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">✦ Knoxweb</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/komang">Komang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="container py-5">

        <section class="hero mb-4">
            <span class="hero-label">✦ Selamat Datang di Knoxweb</span>

            <h1>Bangun Ide,<br>Wujudkan Kreativitas.</h1>

            <p class="mt-3 mb-4">
                Selamat datang di website Knoxweb. Jelajahi informasi
                dan halaman yang tersedia dengan tampilan modern,
                sederhana, dan mudah digunakan.
            </p>

            <a href="/tentang" class="hero-button">
                Tentang Kami →
            </a>
        </section>

        <!-- Informasi Singkat -->
        <section class="welcome-info">
            <h2 class="fw-bold mb-3">Selamat Datang!</h2>

            <p class="text-secondary mb-0" style="line-height: 1.9;">
                Knoxweb merupakan project pengembangan website
                menggunakan teknologi web modern. Website ini
                dikembangkan dengan Laravel, PHP, HTML, CSS,
                dan Bootstrap untuk menghasilkan tampilan yang
                responsif dan nyaman digunakan.
            </p>
        </section>

    </main>

    <!-- Footer -->
    <footer class="py-4 mt-3">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <span class="fw-semibold">✦ Knoxweb</span>
            <span class="small">© 2026 Knoxweb. All rights reserved.</span>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
