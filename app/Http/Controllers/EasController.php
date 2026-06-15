<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EasController extends Controller
{
    public function index()
    {
        $tagihan_air = DB::table('tagihan_air')->orderBy('ID')->get();
        return view('tagihan_air.index');
    }

    public function create()
    {
        return view('tagihan_air.create');
    }

    public function store(Request $request)
    {

        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);

        return redirect()->route('tagihan_air.index')->with('success', 'Data tagihan air berhasil ditambahkan.');
    }
}
