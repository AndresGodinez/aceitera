<?php

namespace App\Http\Controllers;

use App\Ground;
use App\Http\Requests\GroundStoreRequest;
use App\Http\Requests\GroundUpdateRequest;
use Illuminate\Http\Request;
use function compact;
use function redirect;
use function view;

class GroundController extends Controller
{

    public function index()
    {
        $grounds = Ground::get();
        return view('Grounds.index', compact('grounds'));
    }

    public function create()
    {
        return view('Grounds.create');
    }

    public function store(GroundStoreRequest $request)
    {
        $ground = new Ground();
        $ground->createGround($request);

        return redirect('grounds');
    }

    public function show(int $id)
    {
        $ground = Ground::findOrFail($id);
        return view('Grounds.show', compact('ground'));
    }

    public function edit(int $id)
    {
        $ground = Ground::findOrFail($id);
        return view('Grounds.edit', compact('ground'));
    }


    public function update(GroundUpdateRequest $request, int $id)
    {
        $ground = new Ground();
        $ground->updateGround($id, $request);

        return redirect('grounds');
    }


    public function destroy(int $id)
    {
        $ground = Ground::findOrFail($id);
        $ground->delete();
        return redirect('grounds');
    }
}
