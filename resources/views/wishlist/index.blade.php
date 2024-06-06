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
<body style="background-color: #BDE0FE;">

    @include('partials.nav')

    <section class="wishlist-index">
        <div class="container">
            <div class="row card">
                <div class="col-12">
                    <h1 class="text-center mb-4 fw-bold">Wishlist</h1>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <form action="" class="w-100">
                        <div class="mb-3">
                          <label for="kebutuhan" class="form-label fs-3">Nama kebutuhan / keinginan yang ingin dicapai:</label>
                          <input type="text" class="form-control form-control-lg" id="kebutuhan">
                        </div>
                        <div class="mb-3">
                          <label for="deskripsi" class="form-label fs-3">Deskripsi:</label>
                          <textarea class="form-control form-control-lg" id="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="harga" class="form-label fs-3">Harga:</label>
                          <input type="number" class="form-control form-control-lg" id="harga" step="500">
                        </div>
                        <div class="mb-3">
                          <label for="deadline" class="form-label fs-3">Kapan Deadline-nya::</label>
                          <input type="date" class="form-control form-control-lg" id="deadline">
                        </div>
                        <div class="mb-1 d-flex justify-content-center">
                          <button type="submit" class="btn btn-simpan btn-lg mt-2 fw-bold">Simpan Wishlist</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>