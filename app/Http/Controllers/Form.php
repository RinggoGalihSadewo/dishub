<?php

namespace App\Http\Controllers;



use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

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

        // Timezone jakarta
        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");

        // validate form admin        
        $request->validate([
                'nama' => 'required',
                'alamat' => 'required',
                'ttl' => 'required',
                'perusahaan' => 'required',
                'trayek' => 'required',
                'jmlArmada' => 'required',
                'plat' => 'required',
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
            'bahanBakar' => $request->bahanBakar,
            'created_at' => $jkt,
            'updated_at' => $jkt
        ]);



        // $request->all, mengambil semua Mass Assignment di Models Client
        // Client::create($request->all());

        return redirect('/admin/daftar')->with('status', 'Data Trayek Berhasil di Tambahkan!');
    }

    //tambah data client

    public function storeClient(Request $request)
    {
        // Cara 1
        $officialDate = Carbon::now()->toDateString();
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

        // Timezone jakarta
        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'perusahaan' => 'required',
            'trayek' => 'required',
            'jmlArmada' => 'required',
            'plat' => 'required',
            'merk' => 'required',
            'warna' => 'required',
            'bahanBakar' => 'required'
        ]);

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
            'bahanBakar' => $request->bahanBakar,
            'created_at' => $jkt,
            'updated_at' => $jkt
        ]);

        // // $request->all, mengambil semua Mass Assignment di Models Client
        // // Client::create($request->all());

        return view('/form/hasil', ['request' => $request], compact('officialDate') )->with('status', 'Data Trayek Berhasil di Tambahkan!');
                $pdf = PDF::loadview('form.cetak', compact('request'), compact('officialDate'));
        $pdf = PDF::loadview('cetak');        
        return $pdf->download('$request->nama');

        //develop view hasil form
        // return view('form.hasil', compact('request'), compact('officialDate'));
    }

    // cetak pdf

    public function cetakPDF()
    {
        $officialDate = Carbon::now()->toDateString();

        $pdf = PDF::loadview('cetak');

        return $pdf->stream();
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
        return view('admin.edit', compact('client'));

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

        // Timezone jakarta
        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");

        $nama = $request->nama;

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'perusahaan' => 'required',
            'trayek' => 'required',
            'jmlArmada' => 'required',
            'plat' => 'required',
            'merk' => 'required',
            'warna' => 'required',
            'bahanBakar' => 'required'
        ]);

        Client::where('id', $client->id)
                ->update([
                    'namaPribadi' => $request->nama,
                    'alamat' => $request->alamat,
                    'ttl' => $request->ttl,
                    'namaPerusahaan' => $request->perusahaan,
                    'trayek' => $request->trayek,
                    'jmlhArmada' => $request->jmlArmada,
                    'platKendaraan' => $request->plat,
                    'merk' => $request->merk,
                    'warna' => $request->warna,
                    'bahanBakar' => $request->bahanBakar,
                ]);

        return redirect('/admin/daftar')->with('statusEdit', 'Data dengan nama '. $nama . ' Berhasil di ubah!');

    }

    /**
     * Remove the specified resource frodm storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        $nama = $client->namaPribadi;

        Client::destroy($client->id);

        return redirect('/admin/daftar')->with('statusHapus', 'Data Dengan Nama '. $nama . ' Berhasil Di Hapus!');
    }
}
