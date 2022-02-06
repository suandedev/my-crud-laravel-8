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
        $validate = $request->validate([
            'name' => 'required|max:255',
            'merk' => 'required|max:255',
            'stok' => 'required|numeric',
        ]);
        $chair = new Chair();
        $chair->name = $request->name;
        $chair->merk = $request->merk;
        $chair->stok = $request->stok;
        $chair->save();

        return redirect('/chair')->with('success', 'Data berhasil ditambahkan');
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
        return redirect('/chair')->with('success', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $chair = Chair::find($id);
        return view('components.chair.edit', compact('chair'));
    }

    public function update($id, Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'merk' => 'required|max:255',
            'stok' => 'required|numeric',
        ]);
        $chair = Chair::find($id);
        $chair->name = $request->name;
        $chair->merk = $request->merk;
        $chair->stok = $request->stok;
        $chair->save();

        return redirect('/chair')->with('success', 'Data berhasil diubah');
    }
}
