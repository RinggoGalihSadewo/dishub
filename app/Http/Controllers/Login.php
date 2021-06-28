<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;


class Login extends Controller
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

    public function postLogin(Request $request)
    {
        if(Auth::attemp($request->only('username','password'))){
            return redirect('/admin/daftar');
        }

        return redirect('/login');
    }

    
}
