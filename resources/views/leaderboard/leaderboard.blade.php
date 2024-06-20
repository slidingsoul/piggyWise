<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leaderboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/leaderboard-styles.css') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/2b86481c1c.js" crossorigin="anonymous"></script>

    <link rel="icon" href="{{ asset('/img/Designer-Photoroom.png-Photoroom.png') }}">
</head>
<body>

    @include('partials.nav')

    <section class="leaderboard">
        <div class="container">
            <div class="row">
                <div class="card col-8">
                    <div class="row">
                        <div class="col-12 leaderboard-title fa-2xl">
                            <i class="fa-solid fa-crown"></i>
                            <h1>Leaderboard</h1>
                        </div>
                        <div class="col-12">
                            <table id="leaderboardTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Username</th>
                                        <th>Exp</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    {{-- Datatables --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#leaderboardTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("leaderboard.data") }}',
                type: 'GET'
            },
            columns: [
                { data: 'rank', name: 'rank' },
                { data: 'username', name: 'username' },
                { data: 'exp', name: 'exp' }
            ],
            order: [[0, 'asc']], // Default sorting by rank ascending
            responsive: true,
            rowCallback: function(row, data, dataIndex) {
                if (data.rank === 1) {
                    $(row).addClass('rank-1');
                } else if (data.rank === 2) {
                    $(row).addClass('rank-2');
                } else if (data.rank === 3) {
                    $(row).addClass('rank-3');
                }

                @auth
                if (data.username === "{{ auth()->user()->username }}") {
                    $(row).addClass('current-user');
                }
                @endauth
            }
        });
    });
    </script>

    <style>
        .rank-1 {
            background-color: #FFD700; /* Gold */
        }
        .rank-2 {
            background-color: #C0C0C0; /* Silver */
        }
        .rank-3 {
            background-color: #CD7F32; /* Bronze */
        }
        .current-user {
            font-weight: bold;
            background-color: #d1ecf1; /* Light blue */
        }
    </style>
</body>
</html>
