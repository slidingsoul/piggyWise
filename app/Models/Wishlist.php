<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $primaryKey ='id';
    public $incrementing = true;
    protected $fillable = ['nama_wishlist', 'deskripsi_wishlist', 'harga_wishlist',
                        'deadline_wishlist', 'status_wishlist'];
}
