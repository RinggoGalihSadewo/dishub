<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PrinsipMail;
use App\Mail\SendGmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Client;
use Carbon\Carbon;

class MailController extends Controller
{

    public function index(Client $client){

    	$officialDate = Carbon::now()->toDateString();

    	$details = [
            
    		'date' => $officialDate,
    		'nama' => $client->namaPribadi,
    		'email' => $client->email,
    		'alamat' => $client->alamat,
    		'ttl' => $client->ttl,
    		'perusahaan' =>$client->namaPerusahaan, 
    		'trayek' => $client->trayek,
    		'jmlArmada' => $client->jmlhArmada,
    		'plat' => $client->platKendaraan,
    		'merk' => $client->merk,
    		'warna' => $client->warna,
    		'bahanBakar' => $client->bahanBakar,
    		'created_at' => $client->created_at

    	];

    	Mail::to($client->email)->send(new \App\Mail\SendGmail($details));
    	return redirect('/admin/daftar')->with('email', 'Berhasil mengirimkan pesan notifikasi ke ' . $client->namaPribadi );

    }

    public function prinsip(Client $client, Request $request){

        $officialDate = Carbon::now()->toDateString();

        $request->validate([
            'fileSurat' => 'required',
        ],
        [
            'fileSurat.required' => 'Wajib pilih file',
        ]);

        $details = [
            
            'date' => $officialDate,
            'namaPribadi' => $request->namaPribadi,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'perusahaan' =>$request->Perusahaan, 
            'trayek' => $request->trayek,
            'jmlArmada' => $request->jmlArmada,
            'plat' => $request->platKendaraan,
            'merk' => $request->merk,
            'warna' => $request->warna,
            'bahanBakar' => $request->bahanBakar,
            'created_at' => $request->created_at,
            'prinsip' => $request->prinsip,
            'fileSurat' => $request->file('fileSurat')

        ];

        Mail::to($request->email)->send(new \App\Mail\PrinsipMail($details));
        return redirect('/admin/daftar')->with('email', 'Berhasil mengirimkan surat prinsip ke ' . $request->namaPribadi );

    }
}
