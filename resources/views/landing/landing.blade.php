<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to PiggyWise!</title>
    <link rel="stylesheet" href=" {{asset("/css/landing-styles.css")}} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href=" {{asset('/img/Designer-Photoroom.png-Photoroom.png')}} ">
</head>
<body>
    <div id="half-blue-pink-bg">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: transparent !important;">
            <div class="container-fluid">
              <span class="navbar-brand" id="brand">PiggyWise</span>
                <form class="d-flex">
                    <a href="/login">
                        <button type="button" class="btn" style="border-radius: 50px; background: #FFC8DD; box-shadow: -5px 7px 0px 0px #FFAFCC; border: none !important;">
                            <span id="login-text">login <img src=" {{asset('/img/login-1--arrow-enter-frame-left-login-point-rectangle.svg')}} " style="margin-bottom: 15px;"></span>
                        </button>
                    </a>
                </form>
            </div>
        </nav>
        <div class="container mt-2">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="card mb-2 feature-margin" style="width: 30%; background-color: transparent !important; border: none;">
                    <button type="button" class="btn" style="border-radius: 50px; background: #FFC8DD; box-shadow: -5px 7px 0px 0px #FFAFCC; border: none !important;">
                        <span class="feature-text"><img src=" {{asset('/img/brain--medical-health-brain.svg')}} " style="width: 45px; height: 45px;"> Tahan godaan <br> belanjamu</span>
                    </button>
                </div>
                <div class="card mb-2 feature-margin" style="width: 30%; background-color: transparent !important; border: none;">
                    <button type="button" class="btn" style="border-radius: 50px; background: #FFC8DD; box-shadow: -5px 7px 0px 0px #FFAFCC; border: none !important;">
                        <span class="feature-text"><img src=" {{asset('/img/hand-held-tablet-writing--tablet-kindle-device-electronics-ipad-writing-digital-paper-notepad.svg')}} " style="width: 45px; height: 45px;"> Catat pengeluaran dan pemasukanmu</span>
                    </button>
                </div>
                <div class="card mb-2 feature-margin" style="width: 30%; background-color: transparent !important; border: none;">
                    <button type="button" class="btn" style="border-radius: 50px; background: #FFC8DD; box-shadow: -5px 7px 0px 0px #FFAFCC; border: none !important;">
                        <span class="feature-text"><img src=" {{asset('/img/smiley-cool.svg')}} " style="width: 45px; height: 45px;"> Capai dan miliki daftar keinginanmu</span>
                    </button>
                </div>
            </div>
        </div>
        <div style="display: flex; flex-direction: row;">
            <div style="margin-left: 7rem;">
                <img src=" {{asset('/img/Designer-Photoroom.png-Photoroom.png')}} " style="width: 40rem">
            </div>
            <div style="display: flex; flex-direction:column; margin-top: 3rem;">
                <div id="stimulus1">Siapkan tabungan untuk masa depan.</div>
                <div id="stimulus2">Aplikasi menabung untuk anak-anak.</div>
                <div style="margin-top: 1rem;">
                    <a href="/register">
                        <button type="button" class="btn" style="border-radius: 50px; background: #91FFF2;; box-shadow: -1px 1px 1px -1px #FFF; border: 3px solid #676767;">
                            <span id="call-to-action-text">MULAI MENABUNG</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>