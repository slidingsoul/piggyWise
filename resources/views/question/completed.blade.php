<!-- resources/views/question/no_need.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan</title>
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
            justify-content: center;
            height: 100vh;
        }

        .navbar {
            width: 100%;
            background-color: #ADD8E6;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
        }

        .navbar .logo img {
            height: 30px;
        }

        .navbar .nav-links {
            display: flex;
            gap: 10px;
        }

        .navbar .nav-links a {
            text-decoration: none;
            color: #000;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #F8BBD0;
        }

        .navbar .nav-links a:hover {
            background-color: #FF80AB;
        }

        .navbar .nav-links a#should-buy {
            background-color: #C03B6E;
            color: white;
        }


        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 40px;
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
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo-navbar.svg') }}" alt="PiggyWise">
        </div>
        <div class="nav-links">
            <a id="should-buy" href="#">Should U Buy It?</a>
            <a href="#">Saving</a>
            <a href="#">Leaderboard</a>
            <a href="#">Wishlist</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="container">
        <img src="{{ asset('img/Thumb-Up.png') }}" alt="thumb-up" class="thumb-up">
        <h1>{{ $question }}</h1>
    </div>
</body>
</html>
