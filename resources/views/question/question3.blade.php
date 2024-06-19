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
            background-color: #D8BFD8;
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

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            margin-top: 60px;
            text-align: center;
        }

        .question {
            background-color: #B2EBF2;
            width: 625px;
            height: 250px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 50px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            overflow-wrap: break-word;
            overflow: hidden;
        }

        .buttons {
            display: flex;
            margin-top: 20px;
        }

        .buttons form {
            display: flex;
            gap: 80px;
        }

        .buttons button {
            padding: 25px 60px;
            font-size: 80px;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .buttons button.no {
            background-color: #E57373;
        }

        .buttons button.yes {
            background-color: #81C784;
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
    <div class="content">
        <div class="question">{{ $question }}</div>
        <div class="buttons">
            <form method="POST" action="{{ route('answer', ['currentQuestion' => $questionNumber]) }}">
                @csrf
                <button type="submit" name="answer" value="no" class="no">Tidak</button>
                <button type="submit" name="answer" value="yes" class="yes">Ya</button>
            </form>
        </div>
    </div>
</body>
</html>
