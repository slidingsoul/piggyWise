<!-- resources/views/question/no_need.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan</title>
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #D8BFD8; /* Warna background sesuai gambar */
            display: flex;
            flex-direction: column;
            align-items: center;
            display: block;
            justify-content: center;
            height: 100vh;
        }

        .container-end {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 150px;
        }

        .thumb-up {
            width: 300px;
            height: 300px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('partials.nav')
    <div class="container-end">
        <img src="{{ asset('img/Thumb-Up.png') }}" alt="thumb-up" class="thumb-up">
        <h1>{{ $question }}</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>
