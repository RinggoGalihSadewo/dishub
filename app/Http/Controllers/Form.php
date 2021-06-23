<?php

namespace App\Http\Controllers;



use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $clients = DB::table('clients')->get();

        // $clients = \App\Models\Client::all();
        $clients = Client::all();
        return view('admin.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambah');
    }

    public function createClient()
    {
        //
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //tambah data admin

    public function store(Request $request)
    {
        // Cara 1

        // $client = new Client;
        // $client->namaPribadi = $request->nama;
        // $client->alamat = $request->alamat;
        // $client->ttl = $request->ttl;
        // $client->namaPerusahaan = $request->perusahaan;
        // $client->trayek = $request->trayek;
        // $client->jmlhArmada = $request->jmlArmada;
        // $client->platKendaraan = $request->plat;
        // $client->merk = $request->merk;
        // $client->warna = $request->warna;
        // $client->bahanBakar = $request->bahanBakar;

        // $client->save();

        // validate form admin

        $request->validate([
                'namaPribadi' => 'required|unique:posts|max:255',
                'alamat' => 'required',
                'ttl' => 'required',
                'namaPerusahaan' => 'required',
                'trayek' => 'required',
                'jmlhArmada' => 'required',
                'platKendaraan' => 'required',
                'merk' => 'required',
                'warna' => 'required',
                'bahanBakar' => 'required'
            ]);        

        // Cara 2

        Client::create([
            'namaPribadi' => $request->nama,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'namaPerusahaan' => $request->perusahaan,
            'trayek' => $request->trayek,
            'jmlhArmada' => $request->jmlArmada,
            'platKendaraan' => $request->plat,
            'merk' => $request->merk,
            'warna' => $request->warna,
            'bahanBakar' => $request->bahanBakar
        ]);

        // $request->all, mengambil semua Mass Assignment di Models Client
        // Client::create($request->all());

        return redirect('/admin/daftar')->with('status', 'Data Trayek Berhasil Di Tambahkan!');
    }

    //tambah data client

    public function storeClient(Request $request)
    {
        // Cara 1

        // $client = new Client;
        // $client->namaPribadi = $request->nama;
        // $client->alamat = $request->alamat;
        // $client->ttl = $request->ttl;
        // $client->namaPerusahaan = $request->perusahaan;
        // $client->trayek = $request->trayek;
        // $client->jmlhArmada = $request->jmlArmada;
        // $client->platKendaraan = $request->plat;
        // $client->merk = $request->merk;
        // $client->warna = $request->warna;
        // $client->bahanBakar = $request->bahanBakar;

        // $client->save();

        // Cara 2

        // return $request;

        Client::create([
            'namaPribadi' => $request->nama,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'namaPerusahaan' => $request->perusahaan,
            'trayek' => $request->trayek,
            'jmlhArmada' => $request->jmlArmada,
            'platKendaraan' => $request->plat,
            'merk' => $request->merk,
            'warna' => $request->warna,
            'bahanBakar' => $request->bahanBakar
        ]);

        // $request->all, mengambil semua Mass Assignment di Models Client
        // Client::create($request->all());

        return view('/form/hasil', ['request' => $request]);
    }


    // tampilan hasil form client

    // public function hasil(Request $request){
    //     return view('form.hasil', ['request' => $request]);
    // }    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
        return view('admin.detail', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
