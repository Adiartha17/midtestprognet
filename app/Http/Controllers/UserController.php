<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil()
    {
        $data = array('title' => 'Profil');
        $user = User::where('id','=',Auth::user()->id)->first();
        $users = User::all();
        return view('user.profil', compact('user', 'users'));
    }

    public function editprofil($id)
    {
        $user = User::where('id','=',Auth::user()->id)->first();
        return view('user.editprofil')->with(compact('user')); 
    }

    public function saveprofil(Request $request, $id){
        $user = User::find(auth()->user()->id);
        $user->username = request()->username;
        $user->email = request()->email;
        $user->alamat = request()->alamat;
        $user->tgl_lahir = request()->tgl_lahir;
        $user->save();

        return redirect()->route('profil');
    }
}