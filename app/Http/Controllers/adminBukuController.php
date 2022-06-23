<?php

namespace App\Http\Controllers;

use App\Models\daftar_buku;
use Illuminate\Http\Request;


class adminBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // untuk menampilkan data buku
    {
        $data = [
            'listbuku' => daftar_buku::all(),
        ];
        return view('buku.listBuku')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // untuk menuju form data buku
    {
        return view ('buku.isiDataBuku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // untuk menambahkan data buku
    {
        daftar_buku::create($request->all());
        return redirect('listBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(daftar_buku $daftar_buku) // untuk edit data buku
    {
        $data = [
            'daftar_buku' => $daftar_buku
        ];

        return view('buku.isiDataBuku', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(daftar_buku $daftar_buku, Request $request) // memperbahrui data buku
    {
        $daftar_buku->update($request->all());

        return redirect('/listBuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(daftar_buku $daftar_buku) // untuk menghapus data buku
    {
        $daftar_buku->delete();
        return redirect('/listBuku');
    }
}