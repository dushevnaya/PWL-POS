<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Beverage</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function addToCart(name, price) {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.push({ name, price });
            localStorage.setItem("cart", JSON.stringify(cart));
            alert(name + " berhasil ditambahkan ke keranjang!");
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Daftar Produk - Food & Beverage</h1>
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
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Minuman Soda</h5>
                        <p class="card-text">Rp 10.000</p>
                        <button class="btn btn-primary" onclick="addToCart('Minuman Soda', 10000)">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Roti Tawar</h5>
                        <p class="card-text">Rp 15.000</p>
                        <button class="btn btn-primary" onclick="addToCart('Roti Tawar', 15000)">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Biskuit Coklat</h5>
                        <p class="card-text">Rp 8.000</p>
                        <button class="btn btn-primary" onclick="addToCart('Biskuit Coklat', 8000)">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Kembali ke Home</a>
        <a href="{{ url('/kasir') }}" class="btn btn-success mt-3">Lihat Keranjang</a>
    </div>
</body>
</html>
