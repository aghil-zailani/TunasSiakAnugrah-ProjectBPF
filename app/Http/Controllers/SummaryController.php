<?php

namespace App\Http\Controllers;

use App\Models\summary;
use Illuminate\Http\Request;
use App\Exports\SummaryExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'judul' => 'Barang Masuk',
            'barang' => summary::all(),
        );
        return view('laporan', $data);
    }

    public function exportExcel()
    {
        return Excel::download(new SummaryExport, 'Data Transaksi.xlsx');
    }

    public function exportPDF()
    {
        $barang = summary::get();

        $data = [
            'title' => 'PT. Tunas Siak Anugrah <br> Laporan Transaksi',
            'date' => date('m/d/Y'),
            'barang' => $barang
        ]; 

        $pdf = PDF::loadview('pdf', $data);
        return $pdf->download('laporan Transaksi.pdf');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(summary $summary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(summary $summary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, summary $summary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(summary $summary)
    {
        //
    }
}
