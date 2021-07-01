<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendGmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Client;

class MailController extends Controller
{
    public function index(Client $client){

    	$details = [

    		'title' => 'judul',
    		'body' => 'ini bagian body'

    	];

    	Mail::to($client->email)->send(new \App\Mail\SendGmail($details));
    	return redirect('/admin/daftar')->with('email', 'Berhasil mengirimkan pesan notifikasi ke ' . $client->namaPribadi );

    }
}
