<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            let total = 0;
            let cartList = document.getElementById("cart-list");
            cartList.innerHTML = "";

            cart.forEach((item, index) => {
                total += item.price;
                cartList.innerHTML += `<tr>
                    <td>${index + 1}</td>
                    <td>${item.name}</td>
                    <td>Rp ${item.price.toLocaleString()}</td>
                </tr>`;
            });

            document.getElementById("total").innerText = "Rp " + total.toLocaleString();
            document.getElementById("bill-total").innerText = "Rp " + total.toLocaleString();
        }

        function clearCart() {
            localStorage.removeItem("cart");
            alert("Keranjang dikosongkan!");
            location.reload();
        }

        function showBill() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            let billItems = document.getElementById("bill-items");
            billItems.innerHTML = "";
            let total = 0;

            cart.forEach((item, index) => {
                total += item.price;
                billItems.innerHTML += `<tr>
                    <td>${index + 1}</td>
                    <td>${item.name}</td>
                    <td>Rp ${item.price.toLocaleString()}</td>
                </tr>`;
            });

            document.getElementById("bill-total").innerText = "Rp " + total.toLocaleString();
            document.getElementById("bill-container").style.display = "block";
        }

        function printBill() {
            let billContent = document.getElementById("bill-container").innerHTML;
            let originalContent = document.body.innerHTML;

            document.body.innerHTML = billContent;
            window.print();
            document.body.innerHTML = originalContent;
            window.location.reload();
        }
    </script>
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body onload="loadCart()">
    <div class="container mt-5">
        <h1>Kasir</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody id="cart-list"></tbody>
        </table>
        <h3>Total: <span id="total">Rp 0</span></h3>
        <button class="btn btn-danger" onclick="clearCart()">Kosongkan Keranjang</button>
        <button class="btn btn-success" onclick="showBill()">Lakukan Transaksi</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>

        <div id="bill-container" class="mt-4 p-3 border" style="display: none;">
            <h2>Struk Pembayaran</h2>
            <p>Tanggal: <span id="bill-date"></span></p>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody id="bill-items"></tbody>
            </table>
            <h3>Total: <span id="bill-total">Rp 0</span></h3>
            
            <button class="btn btn-primary no-print" onclick="printBill()">Cetak Struk</button>
        </div>
    </div>

    <script>
        document.getElementById("bill-date").innerText = new Date().toLocaleString();
    </script>
</body>
</html>
