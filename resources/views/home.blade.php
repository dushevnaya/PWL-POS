<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Home - POS</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Selamat Datang, Atmint</h3>
            <div>
                <a href="{{ url('/sales') }}" class="btn btn-primary">
                    Daftar Transaksi
                </a>
                <a href="{{ url('/user/1/name/Herta') }}" class="btn btn-secondary">
                    Lihat Profil
                </a>
            </div>
        </div>        
    
        <div class="d-flex mt-4">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Kategori Produk
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/category/food-beverage') }}">Food & Beverage</a></li>
                    <li><a class="dropdown-item" href="{{ url('/category/beauty-health') }}">Beauty & Health</a></li>
                    <li><a class="dropdown-item" href="{{ url('/category/home-care') }}">Home Care</a></li>
                    <li><a class="dropdown-item" href="{{ url('/category/baby-kid') }}">Baby & Kid</a></li>
                </ul>
            </div>
        </div>
=======
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="text-center">Welcome to Home Page</h1>
        <p class="text-center">This is a simple fixed top navigation example.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 6b263c4259b5e87fcdd5e30ee85c3f1c886f5741
</body>
</html>
