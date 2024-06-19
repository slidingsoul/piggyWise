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
        $tab = $request->query('tab', 'pemasukan');

        if ($request->ajax()) {
            if ($tab == 'pemasukan') {
                $pemasukan = Pemasukan::where('user_id', $user->id)->get(['created_at', 'jumlah_pemasukan']);
                $pemasukan->transform(function($item, $key) {
                    $item->created_at = Carbon::parse($item->created_at)->format('Y-m-d');
                    return $item;
                });
                return response()->json(['data' => $pemasukan]);
            } elseif ($tab == 'pengeluaran') {
                $pengeluaran = Pengeluaran::where('user_id', $user->id)->get(['created_at', 'jumlah_pengeluaran']);
                $pengeluaran->transform(function($item, $key) {
                    $item->created_at = Carbon::parse($item->created_at)->format('Y-m-d');
                    return $item;
                });
                return response()->json(['data' => $pengeluaran]);
            }
        }
    }

    // public function showSaving(Request $request) {
    //     $user = auth()->user();
    //     $tab = $request->query('tab', 'pemasukan');

    //     if ($request->ajax()) {
    //         if ($tab == 'pemasukan') {
    //             $pemasukan = Pemasukan::where('user_id', $user->id)->select(['created_at', 'jumlah_pemasukan']);
    //             return datatable()->of($pemasukan)->make(true);
    //         } elseif ($tab == 'pengeluaran') {
    //             $pengeluaran = Pengeluaran::where('user_id', $user->id)->select(['created_at', 'jumlah_pengeluaran']);
    //             return datatables()->of($pengeluaran)->make(true);
    //         }
    //     }

    //     return view('saving.saving', ['user' => $user, 'tab' => $tab]);
    // }

    // public function showSaving(Request $request) {
    //     $user = auth()->user();
    //     $tab = $request->query('tab', 'pemasukan');

    //     return view('saving.saving', ['user' => $user, 'tab' => $tab]);
    // }

    // public function getSavingData(Request $request) {
    //     $user = auth()->user();
    //     $tab = $request->query('tab', 'pemasukan');

    //     if ($tab == 'pemasukan') {
    //         $pemasukan = Pemasukan::where('user_id', $user->id)->select(['created_at', 'jumlah_pemasukan']);
    //         return datatables()->of($pemasukan)->make(true);
    //     } elseif ($tab == 'pengeluaran') {
    //         $pengeluaran = Pengeluaran::where('user_id', $user->id)->select(['created_at', 'jumlah_pengeluaran']);
    //         return datatables()->of($pengeluaran)->make(true);
    //     }
    // }

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
}
