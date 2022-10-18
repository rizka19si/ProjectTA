<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'mahasiswa',
        'nim',
        'segmen_customer',
        'key_partner',
        'nilai_tkt',
        'gambaran_pesaing',
        'unique_selling_point',
        'foto_produk',
        'video_produk'
    ];

    public function allData()
    {
        return DB::table('produks')->get();
    }

    public function detailData($id){
        return DB::table('produks')->where('id', $id) ->first();
    }

    public function addData($data)
    {
        return DB::table('produks')->insert($data);
    }
}
