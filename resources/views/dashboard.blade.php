
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Knoxweb</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: "Segoe UI", sans-serif;
            color: #1e293b;
        }

        .sidebar {
            min-height: 100vh;
            background: #111827;
            color: white;
            padding: 25px 16px;
        }

        .brand {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .sidebar a {
            display: block;
            text-decoration: none;
            color: #cbd5e1;
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #2563eb;
            color: white;
        }

        .main-content {
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 18px 24px;
            border-radius: 16px;
            margin-bottom: 28px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.04);
        }

        .stat-card {
            background: white;
            border: none;
            border-radius: 16px;
            padding: 24px;
            height: 100%;
            box-shadow: 0 3px 15px rgba(0,0,0,0.04);
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .blue { background: #dbeafe; }
        .green { background: #dcfce7; }
        .orange { background: #ffedd5; }
        .purple { background: #f3e8ff; }

        .content-card {
            background: white;
            border: none;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.04);
        }

        .table th {
            color: #64748b;
            font-size: 13px;
            font-weight: 600;
            border-bottom: 1px solid #e2e8f0;
        }

        .table td {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .main-content {
                padding: 18px;
            }
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-3 col-lg-2 sidebar">
            <div class="brand">✦ Knoxweb</div>

            <small class="text-secondary px-3">MENU UTAMA</small>

            <a href="/" class="mt-3">🏠 Home</a>
            <a href="/dashboard" class="active">📊 Dashboard</a>
            <a href="/tentang">ℹ️ Tentang</a>
            <a href="/komang">👤 Komang</a>

            <hr class="border-secondary mt-4">

            <a href="/">↩ Kembali ke Home</a>
        </aside>

        <!-- Main Content -->
        <main class="col-md-9 col-lg-10 main-content">

            <!-- Topbar -->
            <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h5 class="fw-bold mb-1">Dashboard</h5>
                    <small class="text-secondary">Selamat datang kembali di Knoxweb!</small>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                         style="width: 42px; height: 42px;">
                        K
                    </div>
                    <div>
                        <div class="fw-semibold">Komang</div>
                        <small class="text-secondary">Administrator</small>
                    </div>
                </div>
            </div>

            <!-- Heading -->
            <div class="mb-4">
                <h3 class="fw-bold">Ringkasan Dashboard</h3>
                <p class="text-secondary">Pantau informasi utama website kamu di sini.</p>
            </div>

            <!-- Statistics -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon blue">👥</div>
                        <p class="text-secondary mb-2">Total Pengunjung</p>
                        <h3 class="fw-bold mb-2">1.250</h3>
                        <small class="text-success">↑ Data contoh</small>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon green">📈</div>
                        <p class="text-secondary mb-2">Total Aktivitas</p>
                        <h3 class="fw-bold mb-2">856</h3>
                        <small class="text-success">↑ Data contoh</small>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon orange">📁</div>
                        <p class="text-secondary mb-2">Total Proyek</p>
                        <h3 class="fw-bold mb-2">24</h3>
                        <small class="text-secondary">Data contoh</small>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon purple">⭐</div>
                        <p class="text-secondary mb-2">Penilaian</p>
                        <h3 class="fw-bold mb-2">4.8/5</h3>
                        <small class="text-secondary">Data contoh</small>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="content-card">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h5 class="fw-bold mb-1">Aktivitas Terbaru</h5>
                        <small class="text-secondary">Contoh data aktivitas website</small>
                    </div>
                    <button class="btn btn-outline-primary btn-sm"
                            onclick="window.location.reload()">
                        Refresh
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>AKTIVITAS</th>
                                <th>TANGGAL</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Website dibuat</strong><br>
                                    <small class="text-secondary">Proyek Knoxweb</small>
                                </td>
                                <td>Hari ini</td>
                                <td><span class="badge text-bg-success">Selesai</span></td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Halaman dashboard</strong><br>
                                    <small class="text-secondary">Pembaruan tampilan</small>
                                </td>
                                <td>Hari ini</td>
                                <td><span class="badge text-bg-primary">Aktif</span></td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Integrasi Bootstrap</strong><br>
                                    <small class="text-secondary">Framework UI</small>
                                </td>
                                <td>Hari ini</td>
                                <td><span class="badge text-bg-warning">Proses</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="text-center text-secondary mt-4 small">
                © 2026 Knoxweb. All rights reserved.
            </footer>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
