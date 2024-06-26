<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    public function showSaving(Request $request) {
        $user = auth()->user();
        $tab = $request->query('tab', 'pemasukan');

        return view('saving.saving', ['user' => $user, 'tab' => $tab]);
    }

    public function getData(Request $request) {
        $user = auth()->user();
        $tab = $request->input('tab', 'pemasukan');

        if ($request->ajax()) {
            if ($tab == 'pemasukan') {
                $data = Pemasukan::where('user_id', $user->id);

                return datatables()
                    ->eloquent($data)
                    ->editColumn('created_at', function($row) {
                        return Carbon::parse($row->created_at)->format('Y-m-d H:i:s'); // ISO format
                    })
                    ->make(true);
            } elseif ($tab == 'pengeluaran') {
                $data = Pengeluaran::where('user_id', $user->id);

                return datatables()
                    ->eloquent($data)
                    ->editColumn('created_at', function($row) {
                        return Carbon::parse($row->created_at)->format('Y-m-d H:i:s'); // ISO format
                    })
                    ->make(true);
            }
        }
    }

    public function tambahPemasukan(Request $request) {
        $request->validate([
            'jumlah_pemasukan' => 'required|min:0',
        ]);

        $user = auth()->user();
        $jumlah_pemasukan = preg_replace('/[^\d]/', '', $request->jumlah_pemasukan);

        $pemasukan = new Pemasukan;
        $pemasukan->user_id = $user->id;
        $pemasukan->jumlah_pemasukan = (int) $jumlah_pemasukan;
        $pemasukan->save();

        $user->saldo += $pemasukan->jumlah_pemasukan;
        $user->save();

        return redirect()->route('saving')->with('success', 'Pemasukan berhasil ditambahkan.');
    }

    public function buatPengeluaran(Request $request) {
        $request->validate([
            'jumlah_pengeluaran' => 'required|min:0',
        ]);

        $user = auth()->user();
        $jumlah_pengeluaran = preg_replace('/[^\d]/', '', $request->jumlah_pengeluaran);

        $pengeluaran = Pengeluaran::create([
            'user_id' => $user->id,
            'jumlah_pengeluaran' => (int) $jumlah_pengeluaran,
        ]);

        $user->saldo -= $pengeluaran->jumlah_pengeluaran;
        $user->save();

        return redirect()->route('saving')->with('success', 'Pengeluaran berhasil dicatat.');
    }

    public function hapusHistoryPemasukan() {
        $user = auth()->user();
        Pemasukan::where('user_id', $user->id)->delete();
        return redirect()->route('saving');
    }
    public function hapusHistoryPengeluaran() {
        $user = auth()->user();
        Pengeluaran::where('user_id', $user->id)->delete();
        return redirect()->route('saving');
    }
}
