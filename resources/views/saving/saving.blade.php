<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saving</title>
    <link rel="stylesheet" href="{{ asset('/css/saving-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <style>
        .custom-nav-item {
            background-color: #FFAFCC;
        }

        .nav-link.custom-nav-item {
            color: white;
        }

        .nav-link.custom-nav-item.active {
            background-color: #FFC8DD;
            color: black;
        }

        .nav-link.custom-nav-item-a:not(.active):hover {
            background-color: #FFAFCC;
            color: black;
        }
    </style>
</head>

<body>
    @include('partials.nav')
    <div class="saving">
        <div class="d-flex justify-content-around">
            <div class="flex-saving">
                <h4>Halo, {{ $user->username }}</h4>
                <br>
                <p>Jumlah tabunganmu: <br></p>
                <h6>{{ $user->saldo }}</h6>
            </div>
            <div class="flex-saving">
                <div class="d-flex flex-column">
                    <h6>Tambahkan tabunganmu di sini!</h6>
                    <br>
                    <form action="{{ route('pemasukan') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="text" id="rupiah" name="jumlah_pemasukan"
                                onkeyup="formatRupiah(this, 'Rp. ')">
                            <button type="submit" class="button">tambah tabungan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex-saving">
                <div class="d-flex flex-column">
                    <h6>Catat pengeluaranmu di sini!</h6>
                    <br>
                    <form action="{{ route('pengeluaran') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="text" id="rupiah" name="jumlah_pengeluaran"
                                onkeyup="formatRupiah(this, 'Rp. ')">
                            <button type="submit" class="button">buat pengeluaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="history">
            <h1 style="padding-left: 20px"><i class="fa-solid fa-clock-rotate-left"></i>History</h1>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item-saving" role="presentation">
                    <button class="nav-link custom-nav-item {{ $tab == 'pemasukan' ? 'active' : '' }}" id="pemasukan-tab" data-bs-toggle="tab"
                        data-bs-target="#pemasukan" type="button" role="tab" aria-controls="pemasukan"
                        aria-selected="true">Pemasukan</button>
                </li>
                <li class="nav-item-saving" role="presentation">
                    <button class="nav-link custom-nav-item {{ $tab == 'pengeluaran' ? 'active' : '' }}" id="pengeluaran-tab" data-bs-toggle="tab"
                        data-bs-target="#pengeluaran" type="button" role="tab" aria-controls="pengeluaran"
                        aria-selected="false">Pengeluaran</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade {{ $tab == 'pemasukan' ? 'show active' : '' }}" class="tab-history"
                    id="pemasukan" role="tabpanel" aria-labelledby="pemasukan-tab">
                    <div id="noPemasukanMessage" style="display:none;">Belum ada penambahan tabungan</div>
                    <table id="tabelPemasukan" class="display cell-border compact stripe">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jumlah Menabung</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade {{ $tab == 'pengeluaran' ? 'show active' : '' }}" id="pengeluaran"
                    class="tab-history" role="tabpanel" aria-labelledby="pengeluaran-tab">
                    <div id="noPengeluaranMessage" style="display:none;">Belum ada pengeluaran</div>
                    <table id="tabelPengeluaran" class="display table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jumlah Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
@stack('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // Initialize DataTables for both tables
            $('#tabelPemasukan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("saving") }}',
                    data: function (d) {
                        d.tab = 'pemasukan';
                    }
                },
                columns: [
                    { data: 'created_at', name: 'created_at' },
                    { data: 'jumlah_pemasukan', name: 'jumlah_pemasukan' }
                ]
            });

            $('#tabelPengeluaran').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("saving") }}',
                    data: function (d) {
                        d.tab = 'pengeluaran';
                    }
                },
                columns: [
                    { data: 'created_at', name: 'created_at' },
                    { data: 'jumlah_pengeluaran', name: 'jumlah_pengeluaran' }
                ]
            });

            // Update URL and reload DataTable on tab click
            $('#myTab button').on('click', function() {
                var tab = $(this).data('bs-target').substring(1);
                var url = new URL(window.location.href);
                url.searchParams.set('tab', tab);
                history.pushState(null, '', url);

                if (tab == 'pemasukan') {
                    $('#tabelPemasukan').DataTable().ajax.reload();
                } else if (tab == 'pengeluaran') {
                    $('#tabelPengeluaran').DataTable().ajax.reload();
                }
            });

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
