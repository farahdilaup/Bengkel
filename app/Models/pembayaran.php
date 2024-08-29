<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = true;
    // public $timestamps = false;

    protected $fillable = [
        'waktu_pembayaran', 'total_pembayaran'
    ];
}
