<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YemekDost - Yemek Bağış Platformu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar-custom {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 150px 0;
            color: white;
            margin-top: 56px;
        }
        .feature-card {
            border-radius: 15px;
            transition: all 0.3s;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .btn-primary-custom {
            background-color: #e74c3c;
            border-color: #e74c3c;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
        }
        .btn-primary-custom:hover {
            background-color: #c0392b;
            border-color: #c0392b;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="text-danger">Yemek</span>Dost
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#nasil-calisir">Nasıl Çalışır?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary-custom ms-2" href="/register">Üye Ol</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>YemekDost</h5>
                    <p class="text-muted">İyilik yapmak hiç bu kadar kolay olmamıştı.</p>
                </div>
                <div class="col-md-4">
                    <h5>Hızlı Bağlantılar</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Hakkımızda</a></li>
                        <li><a href="#" class="text-muted">S.S.S</a></li>
                        <li><a href="#" class="text-muted">İletişim</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>İletişim</h5>
                    <p class="text-muted">
                        Email: info@yemekdost.com<br>
                        Tel: +90 xxx xxx xx xx
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 