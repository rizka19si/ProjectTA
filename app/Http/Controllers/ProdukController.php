<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->produks= new produk();
    }

    public function index()
    {
        $produks = produk::all();
        return view ('4_produk', compact('produks'));
    }

    public function detail($id)
    {
        $data = [
            'tambahproduk' => $this ->produks->detailData($id),
        ];
        return view('5_detailproduk', $data);
    }



    public function addproduk()
    {
        return view('6_tambahproduk');


    //upload gambar
    $file = Request()->foto_produk;
    $fileName = Request()->id . '.' . $file->extension();
    $file->move(public_path('foto_produk'), $fileName);

    $data =[
        'id' => Request()->id,
        'judul' => $request->input('judul'),
        'mahasiswa' => $request->input('mahasiswa'),
        'nim' => $request->input('nim'),
        'kategori' => $request->input('kategori'), 
        'segmen_customer' => $request->input('segmen_customer'),
        'nilai_tkt' => $request->input('nilai_tkt'),
        'key_patner' => $request->input('key_patner'),
        'gambaran_pesaingan' => $request->input('gambaran_pesaingan'),
        'unique_selling_point' => $request->input('unique_selling_point'),
        'foto_produk' => $fileName,
    ];

    $this->produk->addData($data);
    return redicect()->route('produk')->with('pesan', 'data berhasil ditambahkan!');
    }
    

    public function add() 
{
    Request()->validate([
                'judul' => 'required|unique:produk__inovasis|min:30|max:150',
                'kategori'  => 'required' ,
                'mahasiswa'  => 'required' ,
                'nim'  => 'required' ,
                'segmen_customer'  => 'required' ,
                'nilai_tkt'  => 'required' ,
                'key_patner'  => 'required' ,
                'gambaran_pesaingan'  => 'required',
                'foto_produk'  => 'required',
                'video_produk'  => 'required',     
    ]);
}

}
