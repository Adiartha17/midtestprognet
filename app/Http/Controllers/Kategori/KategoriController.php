<?php

namespace App\Http\Controllers\Kategori;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kategori()
    {
        $kategoris = Kategori::all();
        return view('user.kategori', compact('kategoris'));
    }

    public function tambahkategori()
    {
        return view('user.addkategori');
    }

    public function savekategori(Request $request)
    {

        Kategori::create([
            'nama_kategori'=> $request->nama_kategori,
            'deskripsi'=> $request->deskripsi
        ]);

        return redirect()->route('kategori')->with(['success' => 'Data Berhasil Disimpan!']);
        
    }

    public function deletekategori($id)
    {

        $kategoris = Kategori::findorfail($id);
        $kategoris->delete();
        return back()->with(['success','Data Berhasil Dihapus']);
        
    }
}