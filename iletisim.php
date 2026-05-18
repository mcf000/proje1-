<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri Projesi | İletişim Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">MEHMET ZENGİNCE</a>
            <div class="collapse navbar-collapse d-flex justify-content-end">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehir.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="miras.html">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="film.html">Film Rehberi</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Çıkış Yap</a></li>
                    <li class="nav-item ms-3">
                        <button id="darkModeBtn" class="btn btn-outline-light btn-sm">🌙 Karanlık Mod</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2>Gönderilen İletişim Formu Verileri</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Form Alanı</th>
                            <th>Girilen Veri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Ad:</strong></td>
                            <td><?php echo isset($_POST['ad']) ? htmlspecialchars($_POST['ad']) : 'Veri gelmedi'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Soyad:</strong></td>
                            <td><?php echo isset($_POST['soyad']) ? htmlspecialchars($_POST['soyad']) : 'Veri gelmedi'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>E-posta:</strong></td>
                            <td><?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Veri gelmedi'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Telefon:</strong></td>
                            <td><?php echo isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : 'Belirtilmedi'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Mesaj:</strong></td>
                            <td><?php echo isset($_POST['mesaj']) ? nl2br(htmlspecialchars($_POST['mesaj'])) : 'Veri gelmedi'; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mt-4">
                    <a href="iletisim.html" class="btn btn-secondary">İletişim Sayfasına Geri Dön</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 p-3 text-muted">
        <small>&copy; 2026 Mehmet Zengince - Tüm Hakları Saklıdır.</small>
    </footer>

    <script src="main.js"></script>
</body>
</html>