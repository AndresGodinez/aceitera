<?php

namespace App\Http\Controllers;

use App\Http\Requests\PalmCaptureStoreRequest;
use App\PalmCapture;
use Illuminate\Http\Request;
use function compact;
use function redirect;
use function with;

class PalmCaptureController extends Controller
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


    public function create(Request $request)
    {
        $palmFarmerId = $request->get('palmFarmerId');

        return view('PalmCaptures.create', compact('palmFarmerId'));
    }


    public function store(PalmCaptureStoreRequest $request)
    {
        $capture = new PalmCapture();
        $capture->saveCapture($request);

        return redirect('palm-farmers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PalmCapture  $palmCapture
     * @return \Illuminate\Http\Response
     */
    public function show(PalmCapture $palmCapture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PalmCapture  $palmCapture
     * @return \Illuminate\Http\Response
     */
    public function edit(PalmCapture $palmCapture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PalmCapture  $palmCapture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PalmCapture $palmCapture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PalmCapture  $palmCapture
     * @return \Illuminate\Http\Response
     */
    public function destroy(PalmCapture $palmCapture)
    {
        //
    }
}
