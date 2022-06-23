<?php

namespace App\Http\Controllers;

use App\Models\daftar_buku;
use App\Models\daftar_buku_saya;
use App\Models\peminjaman_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class BukuSayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //menampilkan daftar buku saya dari database
    {
        // return dd(Auth::user());
        $data = [
            'books' => daftar_buku_saya::where('user_id', auth()->user()->id)->with('daftarBuku')->get()
        ];
        $bukus = DB::select('select * from peminjaman_bukus');
        return view('buku.daftarBukuSaya')->with($data);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'books' => daftar_buku::where('dipinjam', false)->get()
        ];

       return view('buku.isiDataPeminjaman', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        daftar_buku::where('id', $request->daftar_buku_id)->update(['dipinjam' => true]);
        // return dd($request->all());
        daftar_buku_saya::create([
            'user_id' => auth()->user()->id,
            'daftar_buku_id' => $request->daftar_buku_id,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian
        ]);
        return redirect('bukuSaya');
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
    public function edit()
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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(daftar_buku_saya $daftar_buku_saya)
    {
        // return dd($daftar_buku_saya);
        daftar_buku::where('id', $daftar_buku_saya->daftar_buku_id)->update(['dipinjam' => false]);

        $daftar_buku_saya->delete();

        return redirect('bukuSaya');
    }
}