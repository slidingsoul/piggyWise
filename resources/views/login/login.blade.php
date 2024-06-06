<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to PiggyWise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('/css/login-styles.css')}} ">
    <link rel="icon" href=" {{asset('/img/Designer-Photoroom.png-Photoroom.png')}} ">

</head>
<body>
    <div id="half-blue-pink-bg">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: transparent !important;">
            <div class="container-fluid">
              <span class="navbar-brand" id="brand">PiggyWise</span>
            </div>
        </nav>
        <form action="/log" method="post">
        @csrf
        <div class="element" style="height: 60vh; width: 45vw; background-color: #fff; border-radius: 1rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="mb-3" style="margin-top: 2rem;">
                        <div class="input-group">
                            <div class="input-group-text" style="background-color: transparent !important; border-right: none !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 68 68" fill="none">
                                    <g clip-path="url(#clip0_46_109)">
                                    <path d="M34 38.8572C40.7063 38.8572 46.1429 33.4206 46.1429 26.7143C46.1429 20.008 40.7063 14.5715 34 14.5715C27.2937 14.5715 21.8571 20.008 21.8571 26.7143C21.8571 33.4206 27.2937 38.8572 34 38.8572Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.2599 57.8C15.4274 54.2422 18.4736 51.3017 22.1058 49.2617C25.738 47.2211 29.8339 46.1494 33.9999 46.1494C38.1659 46.1494 42.2619 47.2211 45.894 49.2617C49.5264 51.3017 52.5723 54.2422 54.74 57.8" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M34 65.5714C51.4367 65.5714 65.5714 51.4367 65.5714 34C65.5714 16.5636 51.4367 2.42859 34 2.42859C16.5636 2.42859 2.42857 16.5636 2.42857 34C2.42857 51.4367 16.5636 65.5714 34 65.5714Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_46_109">
                                    <rect width="68" height="68" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <input type="text" name="username" class="form-control form-control-lg bigger-input" placeholder="Username">
                        </div>
                    </div>
                    <div class="mb-3 mt-5">
                        <div class="input-group">
                            <div class="input-group-text" style="background-color: transparent !important; border-right: none !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 74 64" fill="none">
                                    <path d="M29.7815 33.7569L60.5385 3L71 13.4615" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M48.7692 14.7693L57.9231 23.9231" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.6923 60.5384C27.3589 60.5384 34.3846 53.513 34.3846 44.8461C34.3846 36.1795 27.3589 29.1538 18.6923 29.1538C10.0257 29.1538 3 36.1795 3 44.8461C3 53.513 10.0257 60.5384 18.6923 60.5384Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <input type="password" name="password" class="form-control form-control-lg bigger-input" placeholder="Password">
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 2rem;">
                        <p class="comic-text">Belum terdaftar?</p>
                        <a href="/register" class="comic-text" style="text-decoration: none;">Buat akun baru</a>
                    </div>
                    <div class="text-center" style="margin-top: 1rem;">
                        <button type="submit" class="purple-button" id="register-text">Login</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>