<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetunjukForm extends Controller
{
    public function index()
    {
    	return view('guide.index');
    }
}
