<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class IndexController extends Controller
{
    public function index() {
        $karyawans = Karyawan::select("id", 'nama', 'alamat', 'jabatan')
                               ->orderBy('nama')
                               ->get();


        return view('index', [
            'karyawans' => $karyawans
        ]);
    }
}
