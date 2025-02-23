<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Profil Pengguna</h3>
                    </div>
                    <div class="card-body text-center">
                        <img src="https://i.pinimg.com/736x/0f/50/96/0f5096a2d3deae97e94f56dd05d82396.jpg" alt="Foto Profil" class="rounded-circle" width="150" height="150">
                        
                        <p><strong>ID:</strong> {{ $id }}</p>
                        <p><strong>Nama:</strong> {{ $name ?? 'Pengguna' }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
