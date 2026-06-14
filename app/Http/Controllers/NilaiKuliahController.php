<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilaikuliah.index', compact('nilaikuliah'));
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect()->route('nilaikuliah.index');
    }
}
