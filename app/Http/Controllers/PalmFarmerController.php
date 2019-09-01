<?php

namespace App\Http\Controllers;

use App\Http\Requests\PalmFarmerStoreRequest;
use App\PalmFarmer;
use Illuminate\Http\Request;
use function compact;
use function redirect;
use function view;

class PalmFarmerController extends Controller
{

    public function index()
    {
        $palmFarmers = PalmFarmer::get();
        return view('PalmFarmers.index', compact($palmFarmers));
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


    public function store(PalmFarmerStoreRequest $request)
    {
        $palmFarmer = new PalmFarmer();
        $palmFarmer->createPalFarmer($request);
        return redirect('palm-farmers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PalmFarmer  $palmFarmer
     * @return \Illuminate\Http\Response
     */
    public function show(PalmFarmer $palmFarmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PalmFarmer  $palmFarmer
     * @return \Illuminate\Http\Response
     */
    public function edit(PalmFarmer $palmFarmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PalmFarmer  $palmFarmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PalmFarmer $palmFarmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PalmFarmer  $palmFarmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(PalmFarmer $palmFarmer)
    {
        //
    }
}
