<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PiggiWise</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('/css/nav-styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/leaderboard-styles.css')}}">
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Datatables --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/2b86481c1c.js" crossorigin="anonymous"></script>

    <link rel="icon" href=" {{asset('/img/Designer-Photoroom.png-Photoroom.png')}} ">
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
                            <table id="leaderboard" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Username</th>
                                        <th>Exp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#2</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#3</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>anjay Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>System Architect</td>
                                        <td>5000</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Datatables --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    
    <script type="text/javascript">
        $('#leaderboard').DataTable({
            // sorting dari data pertama berdasarkan exp
            order: [[3, 'desc']],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            if (aData[0] == "#1") {
                $('td', nRow).css('--bs-table-bg', '#FFED4F'); // jika rank 1, maka background color berubah
            } else if (aData[0] == "#2") {
                $('td', nRow).css('--bs-table-bg', '#C0C0C0'); // jika rank 2, maka background color berubah
            } else if (aData[0] == "#3") {
                $('td', nRow).css('--bs-table-bg', '#CD7F32'); // jika rank 3, maka background color berubah
            }
            }
        });
    </script>
</body>
</html>