<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Exports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::latest()->paginate(100);
        return view('/customers/home',compact('customers'))
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
            'customer_code'          => 'required',
            'customer_name'          => 'required',
            'customer_contactperson' => 'required',
            'customer_address'       => 'required',
        ]);
 
        Customers::create($request->all());
 
        return redirect()->route('/customers')
                        ->with('success','Customers created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $Customers)
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
        $Customers = Customers::find($id);
        return view('customers.edit',compact('Customers'));
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
            'customer_code'          => 'required',
            'customer_name'          => 'required',
            'customer_contactperson' => 'required',
            'customer_address'       => 'required',
        ]);

        $input = $request->all();

        $data = Customers::find($id);
        $data->customer_code = $input["customer_code"];
        $data->customer_name = $input["customer_name"];
        $data->customer_contactperson = $input["customer_contactperson"];
        $data->customer_address = $input["customer_address"];
        $data->save();
 
        return redirect()->route('/customers')
                        ->with('success','Customers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Customers::find($id);
        $data->delete();
 
        return redirect()->route('/customers')
                        ->with('success','Customers deleted successfully');
    }

    public function export() 
    {
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }
}
