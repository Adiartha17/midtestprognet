<?php

namespace App\Http\Controllers\Tags;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Tag()
    {
        $tags = Tag::with('post')->paginate(2);
        return view('user.tag', compact('tags'));
    }

    public function tambahtag()
    {
        $post = Post::all();
        return view('user.addtag', compact('post'));
    }

    public function savetag(Request $request)
    {
        Tag::create([
            'nama_tag' => $request->nama_tag,
            'deskripsi' => $request->deskripsi,
            'id_post' => $request->id_post,
        ]); 
        
        return redirect()->route('tag');

    }

    public function edittag($id)
    {
        $tag =Tag::with('post')->paginate(2);
        $tag=Tag::findorfail($id);
        return view ('user.edittag', compact ('tag'));
    }

    public function updatetag(Request $request, $id)
    {
        $tag=Tag::findorfail($id);
        $tag->update($request->all());

        return redirect()->route('tag');
    }

    public function deletetag($id)
    {

        $tag = Tag::findorfail($id);
        $tag->delete();
        return back();
        
    }
}