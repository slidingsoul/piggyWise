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
            background-color: #D8BFD8;
            display: flex;
            flex-direction: column;
            align-items: center;
            display: block;
            justify-content: center;
            height: 100vh;
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

        .question-box {
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
    @include('partials.nav')
    <div class="content">
        <div class="question-box">{{ $question }}</div>
        <div class="buttons">
            <form method="POST" action="{{ route('answer', ['currentQuestion' => $questionNumber]) }}">
                @csrf
                <button type="submit" name="answer" value="no" class="no">Tidak</button>
                <button type="submit" name="answer" value="yes" class="yes">Ya</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>
