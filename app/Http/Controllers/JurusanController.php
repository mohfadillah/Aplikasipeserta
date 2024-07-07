<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datajurusan = Jurusan::get();
        return view ('jurusan.index', compact('datajurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jurusan::create($request->all());
        return redirect('jurusan')->with('success','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Jurusan::find($id);
        return view ('jurusan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Jurusan::where('id', $id)->update([
            'nama_jurusan' => $request->nama_jurusan,
        ]);
        return redirect('jurusan')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jurusan::where('id', $id)->delete();
        return redirect()->to('jurusan');
    }
}
