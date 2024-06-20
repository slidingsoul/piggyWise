<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta and title -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('/css/saving-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <!-- Inline CSS for custom styling -->
    <style>
        .custom-nav-item.pemasukan {
            background-color: #FFAFCC;
        }
        .custom-nav-item.pengeluaran {
            background-color: #A2D2FF;
        }
        .nav-link.custom-nav-item {
            color: white;
        }
        .nav-link.custom-nav-item.pemasukan.active {
            background-color: #FFC8DD;
            color: black;
        }
        .nav-link.custom-nav-item.pengeluaran.active {
            background-color: #BDE0FE;
            color: black;
        }
        .nav-link.custom-nav-item.pemasukan:not(.active):hover {
            background-color: #FFAFCC;
            color: black;
        }
        .nav-link.custom-nav-item.pengeluaran:not(.active):hover {
            background-color: #BDE0FE;
            color: black;
        }
    </style>
</head>
<body>
    @include('partials.nav')
    <div class="saving">
        <div class="d-flex justify-content-around">
            <!-- User balance information -->
            <div class="flex-saving">
                <h4>Halo, {{ $user->username }}</h4>
                <p>Jumlah tabunganmu: <br></p>
                <h6>{{ $user->saldo }}</h6>
            </div>
            <!-- Add saving form -->
            <div class="flex-saving">
                <div class="d-flex flex-column">
                    <h6>Tambahkan tabunganmu di sini!</h6>
                    <br>
                    <form action="{{ route('pemasukan') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="text" id="rupiah" name="jumlah_pemasukan" onkeyup="formatRupiah(this, 'Rp. ')">
                            <button type="submit" class="button">tambah tabungan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Record expenditure form -->
            <div class="flex-saving">
                <div class="d-flex flex-column">
                    <h6>Catat pengeluaranmu di sini!</h6>
                    <br>
                    <form action="{{ route('pengeluaran') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="text" id="rupiah" name="jumlah_pengeluaran" onkeyup="formatRupiah(this, 'Rp. ')">
                            <button type="submit" class="button">buat pengeluaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- History tables -->
        <div class="history">
            <h1 style="padding-left: 20px"><i class="fa-solid fa-clock-rotate-left"></i>History</h1>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item-saving" role="presentation">
                    <button class="nav-link custom-nav-item pemasukan {{ $tab == 'pemasukan' ? 'active' : '' }}" id="pemasukan-tab" data-bs-toggle="tab" data-bs-target="#pemasukan" type="button" role="tab" aria-controls="pemasukan" aria-selected="true">Pemasukan</button>
                </li>
                <li class="nav-item-saving" role="presentation">
                    <button class="nav-link custom-nav-item pengeluaran {{ $tab == 'pengeluaran' ? 'active' : '' }}" id="pengeluaran-tab" data-bs-toggle="tab" data-bs-target="#pengeluaran" type="button" role="tab" aria-controls="pengeluaran" aria-selected="false">Pengeluaran</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade {{ $tab == 'pemasukan' ? 'show active' : '' }}" class="tab-history" id="pemasukan" role="tabpanel" aria-labelledby="pemasukan-tab">
                    <div class="text-end" style="margin-bottom:10px;text-decoration:none">
                        <button class="btn btn-danger" ><a href="{{route('hapus.pemasukan')}}" style="text-decoration:none;color:white">Hapus History Pemasukan</a></button>
                    </div>
                    <table id="tabelPemasukan" class="display table table-striped w-100">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Jumlah Menabung</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="tab-pane fade {{ $tab == 'pengeluaran' ? 'show active' : '' }}" id="pengeluaran" class="tab-history" role="tabpanel" aria-labelledby="pengeluaran-tab">
                    <div class="text-end" style="margin-bottom:10px">
                        <button class="btn btn-danger"><a href="{{route('hapus.pengeluaran')}}" style="text-decoration:none;color:white">Hapus History Pengeluaran</a></button>
                    </div>
                    <table id="tabelPengeluaran" class="display table table-striped w-100">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Jumlah Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Assets -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript">
$(document).ready(function() {
    // Format date for DataTables
    function formatDate(data, type, row) {
        var date = new Date(data);
        if (type === 'display' || type === 'filter') {
            return date.toLocaleDateString('id-ID', {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
            });
        }
        return data;
    }

    // Format time to Jakarta time (Waktu Indonesia Barat)
    function formatTime(data, type, row) {
        var date = new Date(data);
        if (type === 'display' || type === 'filter') {
            var options = {
                timeZone: 'Asia/Jakarta',
                hour: '2-digit',
                minute: '2-digit'
            };
            return date.toLocaleTimeString('id-ID', options);
        }
        return data;
    }

    // Initialize DataTable for Pemasukan
    var tablePemasukan = $('#tabelPemasukan').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route("saving.data") }}',
            data: function (d) {
                d.tab = 'pemasukan';
            }
        },
        columns: [
            { data: 'created_at', name: 'created_at', render: formatDate },
            { data: 'created_at', name: 'created_at', render: formatTime },
            { data: 'jumlah_pemasukan', name: 'jumlah_pemasukan' }
        ],
        order: [[0, 'desc']], // Default sorting by tanggal descending
        responsive: true
    });

    // Initialize DataTable for Pengeluaran
    var tablePengeluaran = $('#tabelPengeluaran').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route("saving.data") }}',
            data: function (d) {
                d.tab = 'pengeluaran';
            }
        },
        columns: [
            { data: 'created_at', name: 'created_at', render: formatDate },
            { data: 'created_at', name: 'created_at', render: formatTime },
            { data: 'jumlah_pengeluaran', name: 'jumlah_pengeluaran' }
        ],
        order: [[0, 'desc']], // Default sorting by tanggal descending
        responsive: true
    });

    // Update URL and reload DataTable on tab click
    $('#myTab button').on('click', function() {
        var tab = $(this).data('bs-target').substring(1);
        var url = new URL(window.location.href);
        url.searchParams.set('tab', tab);
        history.pushState(null, '', url);

        if (tab == 'pemasukan') {
            tablePemasukan.ajax.reload();
        } else if (tab == 'pengeluaran') {
            tablePengeluaran.ajax.reload();
        }
    });

    // Format input as currency
    function formatRupiah(element, prefix) {
        var number_string = element.value.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        element.value = prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
});


    </script>
</body>
</html>
