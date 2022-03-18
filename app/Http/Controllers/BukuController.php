<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku', ["bukus" => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NO_ISBN' => 'required',
            'Judul' => 'required',
            'Penulis' => 'required',
            'Sinopsis' => 'required'
        ]);

        $input = $request->all();
        $buku = buku::create($input);
        return redirect('/')->with('success', ' Task berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = buku::find($id);
        return view('detail', ["buku" => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = buku::findOrfail($id);
        return view('edit', ['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NO_ISBN' => 'required',
            'Judul' => 'required',
            'Penulis' => 'required',
            'Sinopsis' => 'required'
        ]);
        
        $buku = buku::find($id)->update($request->all());
        return redirect('buku')->with('success', 'Data telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::find($id);

        $buku->delete();

        return back()->with('success', 'Data telah dihapus');
    }
}
