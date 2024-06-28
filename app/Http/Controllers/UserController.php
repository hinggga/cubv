<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();

        return view('daftar-user', compact('user'));
    }

    public function delete(Request $request,$data)
    { 
        $hapus = User::find($data);
        if($hapus){
            $hapus->delete();
        }

        return redirect()->back()->with('delete','User Berhasil DIHAPUS');
    }
}
