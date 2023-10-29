<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingProduct;
use App\Models\ExitProduct;

class LaporanController extends Controller
{
    public function index() {
        return view('laporan.index');
    }

    public function laporan_masuk() {
        $products = IncomingProduct::all();
        return view('laporan.laporanMasuk', compact('products'));
    }

    public function laporan_keluar() {
        $products = ExitProduct::all();
        return view('laporan.laporanKeluar', compact('products'));
    }
}
