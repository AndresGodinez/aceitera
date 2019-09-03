<?php

namespace App\Http\Controllers;

use App\Http\Requests\PalmFarmerStoreRequest;
use App\Http\Requests\PalmFarmerUpdateRequest;
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
        return view('PalmFarmers.index', compact('palmFarmers'));
    }

    public function create()
    {
        return view('PalmFarmers.create');
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
        return view('PalmFarmers.edit', compact('palmFarmer'));
    }


    public function update(PalmFarmerUpdateRequest $request, $id)
    {
        $palmFarmer = new PalmFarmer();
        $palmFarmer->updatePalmFarmer($request);
        return redirect('palm-farmers');
    }


    public function destroy(int $id)
    {
        $palmFarmer = PalmFarmer::find($id);
        $palmFarmer->delete();

        return redirect('palm-farmers');
    }
}
