<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class awal extends Model
{
    protected $fillable = [
        'mahasiswa',
        'nim'
    ];

    public function allData()
    {
        return DB::table('mahasiswa')->get();
    }


}
