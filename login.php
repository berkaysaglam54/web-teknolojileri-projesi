<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - Berkay Sağlam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Berkay Sağlam</a>
        </div>
    </nav>

    <main class="container my-auto">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <h2 class="fw-bold text-center mb-4">Giriş Yap</h2>
                        
                        <form id="loginForm" action="login.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold">E-posta</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="b211210001@sakarya.edu.tr">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Şifre</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Şifreniz (Örn: b211210001)">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-2 fw-bold">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Boş alan kontrolü
            if (email === "" || password === "") {
                alert("Hata: Tüm alanlar doldurulmalıdır!");
                event.preventDefault(); // Formun gönderilmesini engelle
                return;
            }

            // Mail formatı kontrolü
            if (!emailRegex.test(email)) {
                alert("Hata: Geçerli bir e-posta formatı giriniz!");
                event.preventDefault();
                return;
            }
        });
    </script>
</body>
</html>