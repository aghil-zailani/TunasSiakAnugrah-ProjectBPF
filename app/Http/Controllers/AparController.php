<?php

namespace App\Http\Controllers;

use App\Models\AparModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AparController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            "judul" => "Dashboard"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/apar'. $foto->hashName());
        $data = AparModel::create([
            'namaBarang'=> $request->namaBarang,
            'stokBarang'=> $request->stokBarang,
            'type'=> $request->type,
            'deskripsi'=> $request->deskripsi,
            'berat'=> $request->berat,
            'harga'=> $request->harga,
            'foto'=> $foto->hashName()
        ]);
        if($data){
            return redirect('input');
        }else{
            echo "GAGAL";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AparModel $aparModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AparModel $aparModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AparModel $aparModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AparModel $aparModel)
    {
        //
    }
}
