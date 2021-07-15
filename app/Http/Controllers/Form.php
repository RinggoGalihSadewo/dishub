<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

use QrCode;

class Form extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // tampilkan data 

    public function index()
    {
        $clients = DB::table('clients')->simplePaginate(10);

        $total = DB::table('clients')->count();

        return view('admin.index', compact('clients'), compact('total'))->with('status');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // tampilan tambah data admin

    public function create()
    {
        
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

        // Timezone jakarta
        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");

        // validate form admin        
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'ttl' => 'required',
            'perusahaan' => 'required',
            'trayek' => 'required',
            'jmlArmada' => 'required|numeric',
            // 'plat' => 'required',
            // 'merk' => 'required',
            // 'warna' => 'required',
            // 'bahanBakar' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Masukan kata sebelum dan sesudah simbol @',
            'alamat.required'=> 'Alamat wajib di isi',
            'ttl.required' => 'Tempat dan Tanggal Lahir wajib di isi',
            'perusahaan.required' => 'Nama perusahaan wajib di isi',
            'trayek.required' => 'Rute Trayek wajib di isi',
            'jmlArmada.required' => 'Jumlah Mobil wajib di isi',
            'jmlArmada.numeric' => 'Harap masukan angka',
            // 'plat.required' => 'Plat Kendaraan wajib di isi',
            // 'merk.required' => 'Merk wajib di isi',
            // 'warna.required' => 'Warna wajib di isi',
            // 'bahanBakar.required' => 'Bahan bakar wajib di isi'
        ]);
        
        //create data
        Client::create([
            'namaPribadi' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'longtitude' => $request->longtitude,
            'lattitude' => $request->lattitude,
            'ttl' => $request->ttl,
            'namaPerusahaan' => $request->perusahaan,
            'trayek' => $request->trayek,
            'jmlhArmada' => $request->jmlArmada,
            // 'platKendaraan' => $request->plat,
            // 'merk' => $request->merk,
            // 'warna' => $request->warna,
            // 'bahanBakar' => $request->bahanBakar,
            'created_at' => $jkt,
            'updated_at' => $jkt
        ]);

        return redirect('/admin/daftar')->with('status', 'Data Trayek Berhasil di Tambahkan!');
    }


    //tambah data client

    public function storeClient(Request $request)
    {

        // tanggal bulan tahun saat ini
        $officialDate = Carbon::now()->toDateString();

        // Timezone jakarta
        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");



        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'ttl' => 'required',
            'perusahaan' => 'required',
            'trayek' => 'required',
            'jmlArmada' => 'required|numeric|not_regex:-'
            // 'plat' => 'required',
            // 'merk' => 'required',
            // 'warna' => 'required',
            // 'bahanBakar' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Masukan kata sebelum dan sesudah simbol @',
            'alamat.required'=> 'Alamat wajib di isi',
            'ttl.required' => 'Tempat dan Tanggal Lahir wajib di isi',
            'perusahaan.required' => 'Nama perusahaan wajib di isi',
            'trayek.required' => 'Rute Trayek wajib di isi',
            'jmlArmada.required' => 'Jumlah Mobil wajib di isi',
            'jmlArmada.numeric' => 'Harap masukan angka',
            'jmlArmada.not_regex' => 'Dilarang memasukan simbol, hanya angka saja'
            // 'plat.required' => 'Plat Kendaraan wajib di isi',
            // 'merk.required' => 'Merk wajib di isi',
            // 'warna.required' => 'Warna wajib di isi',
            // 'bahanBakar.required' => 'Bahan bakar wajib di isi'

        ]);



        Client::create([
            'namaPribadi' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'longtitude' => $request->longtitude,
            'lattitude' => $request->lattitude,
            'ttl' => $request->ttl,
            'namaPerusahaan' => $request->perusahaan,
            'trayek' => $request->trayek,
            'jmlhArmada' => $request->jmlArmada,
            // 'platKendaraan' => $request->plat,
            // 'merk' => $request->merk,
            // 'warna' => $request->warna,
            // 'bahanBakar' => $request->bahanBakar,
            'created_at' => $jkt,
            'updated_at' => $jkt
        ]);

        return view('/form/hasil', ['request' => $request], compact('officialDate'))->with('status', 'Data Trayek Berhasil di Tambahkan!');
    
    }

    // public function messages(){

    // return [
    //     'nama.required' => 'Nama wajib di isi',
    //     'body.required' => 'A message is required',
    // ];
    // }


    // cetak pdf

    public function cetakPDF()
    {   
        $officialDate = Carbon::now()->toDateString();
        $request = DB::table('clients')->latest('created_at')->first();
        $pdf = PDF::loadView('cetak', compact('request'), compact('officialDate'));
        return $pdf->download('lampiran.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //

        // $data1 = Client::where('id', $client->id)->get('lattitude');
        // $data2 = Client::where('id', $client->id)->get('longtitude');

        $lat = $client->lattitude;
        $long = $client->longtitude;
        
        $qr = QrCode::generate('https://www.google.com/maps/search/'.$lat.','.$long.'/@'.$lat.','.$long);

        return view('admin.detail', compact('client','qr'));
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

        // $longti = Client::find('longtitude');

        // Javascript::put([
        //     'long' => $longti 
        //     ]);        

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
        // Timezone jakarta
        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");

        $nama = $request->nama;

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'ttl' => 'required',
            'perusahaan' => 'required',
            'trayek' => 'required',
            'jmlArmada' => 'required|numeric',
            // 'plat' => 'required',
            // 'merk' => 'required',
            // 'warna' => 'required',
            // 'bahanBakar' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Masukan kata sebelum dan sesudah simbol @',
            'alamat.required'=> 'Alamat wajib di isi',
            'ttl.required' => 'Tempat dan Tanggal Lahir wajib di isi',
            'perusahaan.required' => 'Nama perusahaan wajib di isi',
            'trayek.required' => 'Rute Trayek wajib di isi',
            'jmlArmada.required' => 'Jumlah Mobil wajib di isi',
            'jmlArmada.numeric' => 'Harap masukan angka',
            // 'plat.required' => 'Plat Kendaraan wajib di isi',
            // 'merk.required' => 'Merk wajib di isi',
            // 'warna.required' => 'Warna wajib di isi',
            // 'bahanBakar.required' => 'Bahan bakar wajib di isi'
        ]);

        Client::where('id', $client->id)
                ->update([
                    'namaPribadi' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'longtitude' => $request->longtitude,
                    'lattitude' => $request->lattitude,
                    'ttl' => $request->ttl,
                    'namaPerusahaan' => $request->perusahaan,
                    'trayek' => $request->trayek,
                    'jmlhArmada' => $request->jmlArmada,
                    // 'platKendaraan' => $request->plat,
                    // 'merk' => $request->merk,
                    // 'warna' => $request->warna,
                    // 'bahanBakar' => $request->bahanBakar,
                ]);

        return redirect('/admin/daftar')->with('statusEdit', 'Data dengan nama '. $nama . ' Berhasil di ubah!');

    }

    // cari data

    public function search(Client $client, Request $request)
    {
        $cari = $request->search;

        $total = DB::table('clients')->count();

        $clients = Client::where('namaPribadi','like',"%".$cari."%")
        ->OrWhere('namaPerusahaan','like',"%".$cari."%")
        ->simplePaginate(10);

        return view('admin.search', compact('clients'), compact('total'));
    }

    /**
     * Remove the specified resource frodm storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */

    // Delete data

    public function destroy(Client $client)
    {
        $nama = $client->namaPribadi;

        Client::destroy($client->id);

        return redirect('/admin/daftar')->with('statusHapus', 'Data Dengan Nama '. $nama . ' Berhasil Di Hapus!');
    }
}
