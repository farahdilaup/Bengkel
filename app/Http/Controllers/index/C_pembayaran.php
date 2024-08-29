<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\penjualan;
use App\Models\pengguna;

class C_pembayaran extends Controller
{
   public function indexpembayaran(){
        $pembayaran = DB::table('pembayaran') ->get();
        // ->join('pengguna', 'pengguna.id', '=', 'pembayaran.id')
        // $data = array(
        //     'menu' => 'home',
        //     'submenu' => 'pembayaran',
        //     'pembayaran' => $pembayaran
        // );
        return view('index/pembayaran', $data);
    }
}

