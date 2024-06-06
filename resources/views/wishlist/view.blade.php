<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PiggiWise</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('/css/nav-styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/wishlist-styles.css')}}">
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/2b86481c1c.js" crossorigin="anonymous"></script>

    <link rel="icon" href=" {{asset('/img/Designer-Photoroom.png-Photoroom.png')}} ">
</head>
<body style="background-color: #FFC8DD;">

    @include('partials.nav')

    <section class="wishlist-view">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <h1 class="text-center fw-bold" style="margin-top: 40px">Wishlist</h1>
                </div>
                <div class="col-12 wish-card">
                    <div class="col-12 d-flex align-items-center">
                        <div class="col-lg-6 col-sm-12 d-flex flex-column">
                            <h2 class="fw-bold">Membeli Seblak</h2>
                            <h4>Saya ingin makan seblak</h4>
                            <h4>Harga : Rp 15.000</h4>
                            <h4>Tenggat Waktu : 30 Juni 2024</h4>
                            <h4>Tabunganku Sekarang : 11.000</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
                            <img src="{{asset('/img/fireworks.png')}}" class="fireworks hidden" alt="fireworks">
                        </div>
                    </div>
                    <hr>
                    <div class="col-12">
                        <h4>Kurang <strong>Rp 4.000</strong> untuk mencapai wishlistmu!</h4>
                        <h4>Tabung sebanyak <strong>Rp 1.000</strong> per hari untuk mencapai wishlistmu sesuai tenggatnya!</h4>
                    </div>
                    <div class="col-12 bar-progress">
                        <div class="row d-flex align-items-center">
                            <div class="col-11">
                                <div class="progress" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="col-1">
                                <h2>70%</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-lg my-5 btn-tabung fw-bold">Tabung Sekarang</button>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>