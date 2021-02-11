<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Customers;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Transaksi::select('transaksis.*','customer_code', 'customer_name')->join('Customers', 'Customers.customer_code', '=', 'transaksis.id_pelanggan')->paginate(100);
        return view('/transaksi/home',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_transaksi'      => 'required',
            'id_pelanggan'      => 'required',
            'tanggal_transaksi' => 'required',
            'nominal_transaksi' => 'required',
        ]);
 
        Transaksi::create($request->all());
 
        return redirect()->route('/transaksi')
                        ->with('success','Transaksi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Customers = Transaksi::select('transaksis.*','customer_code', 'customer_name')->join('Customers', 'Customers.customer_code', '=', 'transaksis.id_pelanggan')->find($id);
        return view('transaksi.edit',compact('Customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_transaksi'      => 'required',
            'id_pelanggan'      => 'required',
            'tanggal_transaksi' => 'required',
            'nominal_transaksi' => 'required',
        ]);

        $input = $request->all();

        $data = Transaksi::find($id);
        $data->no_transaksi = $input["no_transaksi"];
        $data->id_pelanggan = $input["id_pelanggan"];
        $data->tanggal_transaksi = $input["tanggal_transaksi"];
        $data->nominal_transaksi = $input["nominal_transaksi"];
        $data->save();

        return redirect()->route('/transaksi')
                        ->with('success','Transaksi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Transaksi::find($id);
        $data->delete();
 
        return redirect()->route('/transaksi')
                        ->with('success','Transaksi deleted successfully');
    }

    public function export() 
    {
        return Excel::download(new TransaksiExport, 'transaksi.xlsx');
    }
}
