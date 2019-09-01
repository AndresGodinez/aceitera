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

    public function create()
    {
        return view('PalmFarmer.create');
    }


    public function store(PalmFarmerStoreRequest $request)
    {
        $palmFarmer = new PalmFarmer();
        $palmFarmer->createPalFarmer($request);
        return redirect('palm-farmers');
    }


    public function show(PalmFarmer $palmFarmer)
    {
    }


    public function edit(int $id)
    {
        $palmFarmer = PalmFarmer::find($id);
        return view('PalmFarmer.edit', compact('palmFarmer'));
    }


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
