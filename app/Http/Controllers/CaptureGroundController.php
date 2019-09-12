<?php

namespace App\Http\Controllers;

use App\CaptureGround;
use Illuminate\Http\Request;

class CaptureGroundController extends Controller
{

    public function index()
    {
        $capture = new CaptureGround();
        $captures = $capture->getInfoCapture();

        return view('Reports.capture', compact('captures'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaptureGround  $captureGround
     * @return \Illuminate\Http\Response
     */
    public function show(CaptureGround $captureGround)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaptureGround  $captureGround
     * @return \Illuminate\Http\Response
     */
    public function edit(CaptureGround $captureGround)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaptureGround  $captureGround
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaptureGround $captureGround)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaptureGround  $captureGround
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaptureGround $captureGround)
    {
        //
    }
}
