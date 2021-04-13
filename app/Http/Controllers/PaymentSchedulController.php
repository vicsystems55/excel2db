<?php

namespace App\Http\Controllers;

use App\PaymentSchedul;
use App\Imports\PaymentSchedulImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PaymentSchedulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function excel2db()
    {
        //

        Excel::import(new PaymentSchedulImport, 'schedule.xlsx');
        
        return redirect('/')->with('success', 'All good!');




    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentSchedul  $paymentSchedul
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentSchedul $paymentSchedul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentSchedul  $paymentSchedul
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentSchedul $paymentSchedul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentSchedul  $paymentSchedul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentSchedul $paymentSchedul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentSchedul  $paymentSchedul
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentSchedul $paymentSchedul)
    {
        //
    }
}
