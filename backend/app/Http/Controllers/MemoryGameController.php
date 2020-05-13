<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemoriGameImageA;

class MemoryGameController extends Controller
{
    public function index()
    {
        return MemoriGameImageA::all();
    }

    public function show($id)
    {

       $MemoriGameImageA = MemoriGameImageA::find($id);

        return $MemoriGameImageA;

    }

    public function store(Request $request)
    {
        return MemoriGameImageA::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $MemoriGameImageA = MemoriGameImageA::findOrFail($id);
        $MemoriGameImageA->update($request->all());

        return $MemoriGameImageA;
    }

    public function delete(Request $request, $id)
    {
        $MemoriGameImageA = MemoriGameImageA::findOrFail($id);
        $MemoriGameImageA->delete();

        return 204;
    }
}
