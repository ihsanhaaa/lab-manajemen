<?php

namespace App\Http\Controllers;

use App\Models\BentukKemasan;
use App\Models\BentukSediaan;
use App\Models\Foto;
use App\Models\Obat;
use App\Models\Satuan;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obats = Obat::all();
        $kemasans = BentukKemasan::all();
        $bentukSediaans  = BentukSediaan::all();
        $satuans  = Satuan::all();


        return view('obat.index', compact('obats', 'kemasans', 'bentukSediaans', 'satuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_obat' => 'required|string',
            'nama_obat' => 'required|string',
            'kekuatan_obat' => 'required|string',
            'kemasan_obat' => 'required|exists:bentuk_kemasans,id',
            'bentuk_sediaan' => 'required|exists:bentuk_sediaans,id',
            'exp_obat' => 'required|date',
            'satuan' => 'required|exists:satuans,id',
            'foto_obat' => 'required|image',
            'stok_awal' => 'required|integer',
            'barang_masuk' => 'required|integer',
        ]);

        // Simpan data obat
        $obat = Obat::create([
            'kode_obat' => $request->kode_obat,
            'nama_obat' => $request->nama_obat,
            'kekuatan' => $request->kekuatan_obat,
            'bentuk_kemasan_id' => $request->kemasan_obat,
            'bentuk_sediaan_id' => $request->bentuk_sediaan,
            'exp_obat' => $request->exp_obat,
            'satuan_id' => $request->satuan,
            'stok_masuk_id' => $request->stok_awal,
            'stok_keluar_id' => $request->barang_masuk,
        ]);

        // Simpan foto
        if ($request->hasFile('foto_obat')) {
            $path = $request->file('foto_obat')->store('fotos', 'public');
            Foto::create([
                'obat_id' => $obat->id,
                'foto_path' => $path,
            ]);
        }

        return redirect()->back()->with('success', 'Data obat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $obat = Obat::with(['kemasan', 'bentukSediaan', 'satuan', 'fotos'])->findOrFail($id);

        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        //
    }
}
