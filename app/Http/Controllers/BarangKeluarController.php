<?php

namespace App\Http\Controllers;

use App\Models\keluar;
use App\Models\summary;
use App\Models\AparModel;
use Illuminate\Http\Request;
use App\Exports\BarangKeluarExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'judul' => 'Barang Keluar',
            'barang' => AparModel::all(),
        );
        return view('barangKeluar', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangKeluar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        if($request->jumlahStok == NULL){
            return redirect('barangKeluar')->with('stok', 'Stok Barang Berhasil Ditambahkan!');
        }elseif($request->tanggal == NULL){
            return redirect('barangKeluar')->with('tanggal', 'Stok Barang Berhasil Ditambahkan!');
        }elseif($request->jumlahStok == NULL && $request->tanggal == NULL){
            return redirect('barangKeluar')->with('kosong', 'Stok Barang Berhasil Ditambahkan!');
        }

        keluar::create([
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
            $barang->stokBarang -= $request->jumlahStok;      
            $barang->save();
        } else {
            echo 'ggl';
        }

        return redirect('barangKeluar')->with('message', 'Stok Barang Berhasil Ditambahkan!');
    }

    public function exportExcel()
	{
		return Excel::download(new BarangKeluarExport, 'Data Transaksi.xlsx');
	}

    /**
     * Display the specified resource.
     */
    public function show(keluar $keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(keluar $keluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, keluar $keluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(keluar $keluar)
    {
        //
    }
}
