<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>