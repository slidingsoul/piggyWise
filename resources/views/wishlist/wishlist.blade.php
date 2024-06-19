<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('/css/nav-styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/wishlist-styles.css')}}">
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    
    <h1>Wishlist</h1>
    <div class="purple-container">
        <h2 class="wish">Membeli Seblak</h2>
        <p class="description">Saya ingin makan seblak</p>
        <p class="cost">Harga: Rp15.000</p>
        <p>Tenggat waktu: 30 Juni 2024</p>
        <p>Tabunganku sekarang: Rp11.250</p>
        <hr>
        <p>Kurang Rp3.750 untuk mencapai wishlistmu!</p>
        <p>Tabung sebanyak Rp1250 per hari untuk mencapai wishlistmu sesuai tenggatnya</p>
        {{-- Taruh loading progress bar di sini --}}
    </div>
    <form action="#" method="get" class="form-container">
        <button type="submit" class="tabung-sekarang-btn">Tabung Sekarang!</button>
    </form>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>