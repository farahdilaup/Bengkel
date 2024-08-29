<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    public $incrementing = true;
    // public $timestamps = false;

    protected $fillable = [
        'nama_pengguna', 'tlp_pengguna', 'alamat', 'username','password','status_pengguna'
    ];
}
