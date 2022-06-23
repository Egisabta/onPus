<?php

namespace App\Http\Controllers;

use App\Models\daftar_buku_saya;
use App\Models\peminjaman_buku;
use Illuminate\Http\Request;

class adminPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            // return dd(daftar_buku_saya::with('user', 'daftarBuku')->first()->user->name);
            $data = [
                'peminjam' => daftar_buku_saya::with('user', 'daftarBuku')->get()
            ];
    
            return view('buku.dataPeminjam', $data);
        }
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman_buku $peminjaman_buku)
    {
        {
        $peminjaman_buku->delete();
        return redirect('/listPeminjam');
        }
    }
}