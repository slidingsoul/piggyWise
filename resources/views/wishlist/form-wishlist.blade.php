<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Wishlist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/wishlist-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('partials.nav')
    <div class="form-wishlist">
        <form action="{{ route('create.wishlist') }}" method="POST" class="d-flex flex-column justify-content-center mx-auto" style="width: 80%;padding-top:5%">
            @csrf
            <div class="mb-3">
                <label for="nama_wishlist" class="form-label">Nama kebutuhan/keinginan yang ingin dicapai</label>
                <input type="text" class="form-control" id="nama_wishlist" name="nama_wishlist" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_wishlist" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_wishlist" name="deskripsi_wishlist" required></textarea>
            </div>
            <div class="mb-3">
                <label for="harga_wishlist" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga_wishlist" name="harga_wishlist" required>
            </div>
            <div class="mb-3">
                <label for="deadline_wishlist" class="form-label">Target tercapai</label>
                <input type="date" class="form-control" id="deadline_wishlist" name="deadline_wishlist" required>
            </div>
            <div></div>
            <button type="submit" class="btn" style="background-color:#FFC8DD">simpan wishlist</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>
