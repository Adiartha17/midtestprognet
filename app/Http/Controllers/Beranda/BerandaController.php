<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function post()
    {
        $posts = Post::latest()->get();
        return view('user.beranda', compact('posts'));
    }

    public function tambahpost()
    {
        return view('user.addpost');
    }

    public function savepost(Request $request)
    {

        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'konten'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/gambar', $image->hashName());

        $post = Post::create([
            'gambar'     => $image->hashName(),
            'judul'     => $request->judul,
            'konten'   => $request->konten
        ]);

        if($post){
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}