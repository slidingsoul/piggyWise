<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function wishlist() {
        $user = auth()->user();
        $wishlist = Wishlist::where('user_id', $user->id)->first(); // Mengambil satu wishlist
        if (!$wishlist) {
            return view('wishlist.form-wishlist');
        } else {
            return redirect()->route('show.wishlist');
        }
    }

    public function showWishlist(Request $request) {
        $user = auth()->user();
        $wishlist = Wishlist::where('user_id', $user->id)->first();
        $persen = ($user->saldo / $wishlist->harga_wishlist) * 100;
        return view('wishlist.wishlist', ['wishlist' => $wishlist, 'persen' => $persen, 'user' => $user]);
    }

    public function createWishlist(Request $request) {
        $user = auth()->user();
        $request->validate([
            'nama_wishlist' => 'required|string|max:100',
            'deskripsi_wishlist' => 'required|string',
            'harga_wishlist' => 'required|numeric|min:0',
            'deadline_wishlist' => 'required|date',
        ]);
        $wishlist = new Wishlist;
        $wishlist->user_id = $user->id;
        $wishlist->nama_wishlist = $request->nama_wishlist;
        $wishlist->deskripsi_wishlist = $request->deskripsi_wishlist;
        $wishlist->harga_wishlist = $request->harga_wishlist;
        $wishlist->deadline_wishlist = $request->deadline_wishlist;
        $wishlist->status_wishlist = true;
        $wishlist->save();
        return redirect()->route('show.wishlist');
    }

    public function wishlistSelesai() {
        $user = auth()->user();
        $wishlist = Wishlist::where('user_id', $user->id)->first();
        $user->saldo-=$wishlist->harga_wishlist;
        $user->save();
        Wishlist::where('user_id', $user->id)->delete();
        return redirect()->route('saving');
    }
}
