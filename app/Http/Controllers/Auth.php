<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Auth extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        
        $data = User::where('name', $request->username)->firstOrFail();
        
        if($data){
            if(Hash::check($request->password, $data->password)){
                session(['berhasil_login' => true]);
                return redirect('/admin/daftar');
            }
        }
        
        return redirect('/login')->with('status', 'Email Atau Password Salah!');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
    
    
}
