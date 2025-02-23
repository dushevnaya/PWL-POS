<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Transaksi - POS</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <h3>Daftar Transaksi</h3>
            <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Kembali ke Home</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TRX001</td>
                    <td>Varessa</td>
                    <td>Rp 150.000</td>
                    <td>2025-02-23</td>
                    <td><span class="badge bg-success">Lunas</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm">Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>TRX002</td>
                    <td>Mavuika</td>
                    <td>Rp 250.000</td>
                    <td>2025-02-22</td>
                    <td><span class="badge bg-danger">Belum Lunas</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
