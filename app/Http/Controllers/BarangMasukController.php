<?php

namespace App\Http\Controllers;

use App\Models\stok;
use App\Models\summary;
use App\Models\AparModel;
use Illuminate\Http\Request;
use App\Exports\BarangMasukExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'judul' => 'Barang Masuk',
            'barang' => AparModel::all(),
        );
        return view('barangMasuk', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangMasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        if($request->jumlahStok == NULL){
            return redirect('stokBarang')->with('stok', 'Stok Barang Berhasil Ditambahkan!');
        }elseif($request->tanggal == NULL){
            return redirect('stokBarang')->with('tanggal', 'Stok Barang Berhasil Ditambahkan!');
        }elseif($request->jumlahStok == NULL && $request->tanggal == NULL){
            return redirect('stokBarang')->with('kosong', 'Stok Barang Berhasil Ditambahkan!');
        }

        stok::create([
            'namaBarang' => $request->namaBarang,
            'stokBarang' => $request->stokBarang,
            'jumlahStok' => $request->jumlahStok,
            'tanggal' => $request->tanggal,
            'type' => $request->type,
            'deskripsi' => $request->deskripsi,
            'berat' => $request->berat,
            'harga' => $request->harga,
        ]);

        summary::create([
            'namaBarang' => $request->namaBarang,
            'stokBarang' => $request->stokBarang,
            'jumlahStok' => $request->jumlahStok,
            'tanggal' => $request->tanggal,
            'type' => $request->type,
            'deskripsi' => $request->deskripsi,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        $barang = AparModel::find($id);

        if ($barang) {
            $barang->stokBarang += $request->jumlahStok;
            $barang->save();
        }        
        
        return redirect('stokBarang')->with('message', 'Stok Barang Berhasil Ditambahkan!');
    }

    public function exportExcel()
	{
		return Excel::download(new BarangMasukExport, 'Data Barang Masuk.xlsx');
	}

    /**
     * Display the specified resource.
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok $stok)
    {
        //
    }
}
