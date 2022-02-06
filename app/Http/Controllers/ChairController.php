<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chair;

class ChairController extends Controller
{
    //
    public function index()
    {
        $chairs['chairs'] = Chair::all();
        return view('components.chair.index', $chairs);
    }

    public function create()
    {
        return view('components.chair.create');
    }

    public function store(Request $request)
    {
        $chair = new Chair();
        $chair->name = $request->name;
        $chair->merk = $request->merk;
        $chair->stok = $request->stok;
        $chair->save();

        return redirect('/chair');
    }

    public function show($id)
    {
        $chair = Chair::find($id);
        return view('components.chair.show', compact('chair'));
    }

    public function delete($id)
    {
        $chair = Chair::find($id);
        $chair->delete();
        return redirect('/chair');
    }

    public function edit($id)
    {
        $chair = Chair::find($id);
        return view('components.chair.edit', compact('chair'));
    }

    public function update($id, Request $request)
    {
        $chair = Chair::find($id);
        $chair->name = $request->name;
        $chair->merk = $request->merk;
        $chair->stok = $request->stok;
        $chair->save();

        return redirect('/chair');
    }
}
