<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Post;
use App\Models\Kategori;
use App\Models\User;
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
        $posts = Post::with('user','kategori');
        return view('user.beranda', compact('posts'));
    }

    public function tambahpost()
    {
        $user = User::all();
        $kategori = Kategori::all();
        return view('user.addpost', compact('kategori','user'));
    }

    public function savepost(Request $request)
    {
        Post::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'id_user' => $request->id_user,
            'id_kategori' => $request->id_kategori,
        ]); 
        
        return redirect()->route('post');

    }

    public function editpost($id)
    {
        $posts = Post::with('user','kategori');
        $post=Post::findorfail($id);
        return view ('user.editpost', compact ('post','posts'));
    }

    public function updatepost(Request $request, $id)
    {
        $post=Post::findorfail($id);
        $post->update($request->all());

        return redirect()->route('post');
    }

    public function deletepost($id)
    {

        $post = Post::findorfail($id);
        $post->delete();
        return back();
        
    }
}