<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/wishlist-styles.css') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('partials.nav')

    <h1>Wishlist</h1>
    <div class="purple-container">
        <div class="inside-container">
            <div class="text-fireworks-container">
                <div class="text-container">
                    <h2 class="wish">{{ $wishlist->nama_wishlist }}</h2>
                    <p class="description">{{ $wishlist->deskripsi_wishlist }}</p>
                    <p class="cost">Harga: {{ $wishlist->harga_wishlist }}</p>
                    <p>Tenggat waktu: {{ $wishlist->deadline_wishlist }}</p>
                    <p>Tabunganku sekarang: {{ $user->saldo }}</p>
                </div>
                @if ($persen >= 100)
                    <div class="fireworks-container">
                        <img src="{{ asset('/img/openmoji_fireworks.svg') }}" alt="kembang api">
                    </div>
                @endif
            </div>
            <hr>
            @php
                use Carbon\Carbon;
                $sisa = $wishlist->harga_wishlist - $user->saldo;
                $deadline = Carbon::parse($wishlist->deadline_wishlist);
                $now = Carbon::now();
                $selisih_hari = $now->diffInDays($deadline);
                $tabungan_per_hari = $sisa / $selisih_hari; // Hindari pembagian dengan nol
            @endphp
            <p>Kurang Rp. {{ $sisa }} untuk mencapai wishlistmu!</p>
            @if ($selisih_hari>=1)
            <p>Tabung sebanyak Rp. {{ round($tabungan_per_hari, 2) }} selama {{round($selisih_hari)}} hari untuk mencapai wishlistmu sesuai target</p>
            @elseif ($selisih_hari==0)
            <p>Hari ini target pembeliannya!</p>
            @else
            <p>Target pembelian sudah terlewat!</p>
            @endif
            <div class="flexdiv">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: {{ $persen }}%"></div>
                </div>
                <div style="margin-left: 50px; margin-top: -7px; font-weight: bold; font-size: 50px;">
                    <p>{{ $persen }}%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" style="padding-top:10px">
        @if ($persen >= 100)
            <button type="submit" class="tabung-sekarang-btn"><a href="{{ route('wishlist.selesai') }}">Selesai</a></button>
        @else
            <button type="submit" class="tabung-sekarang-btn"><a href="{{ route('saving') }}">Tabung Sekarang!</a></button>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
